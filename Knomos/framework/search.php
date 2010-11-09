<?
/**  
* @package Creative Web Framework  
* @copyright (C) 2000 - 2005 Creative Web Snc 
* @website http://www.creativeweb.it  
* @license http://www.gnu.org/copyleft/gpl.html GNU/GPL  
* Knomos & Creative Web Framework is Free Software  
*/

//
//	Creative Web FrameWork
//	Search management
//


/*

$search[title]="Titolo";
$search[result_txt]="Sono stati trovati %[FOUND]% risultati";
$search[tables][tabella]="list_function||title||exp::1;;lock::1";
$search[fields][nome][content]="text||";
$search[fields][nome][search_field]="pratiche-aa||pratiche-bb";





*/


function is_par($str) {
        return (strstr($str,')') || strstr($str,'('));
}

function is_logic($str) {
        return in_array($str,array('AND','OR','NOT','and','or','not'));
}

function is_space($str) {
        return ($str == '');
}

function ext_search($field,$string) {

	$search = trim(stripslashes($string));
	
	print "$search<br><br>";
	
	$arr = preg_split('/(\s|\)|\()/',$search,-1,PREG_SPLIT_DELIM_CAPTURE);
	
	print_r($arr);
	for ($i = 0; $i < count($arr); $i++) {
	        
	        $a = trim($arr[$i]);
	        
	        // spazio
	        if (is_space($a)) { $newarr[] = $a; continue; }
	        
	        // connettivo logico
	        if (is_logic($a)) { $newarr[] = " $a "; continue; }
	        
	        // parentesi
	        if (is_par($a)) { $newarr[] = $a; continue; }
	        
	        $str = $a;
	        $added = 0;
	        // se le espressioni successive sono spazi o parole, uniscile a questa
	        for ($j=$i+1; $j < count($arr); $j++) {
	                if (!is_par($arr[$j]) && !is_logic($arr[$j])) {
	                        $str .= $arr[$j];
	                        $added++;
	                } else break;
	        }
	        $i += $added;
	
	        $newarr[] = " $field LIKE '%".mysql_escape_string(trim($str))."%' ";
	}
	
	$final = "(".implode('',$newarr).")";
	return $final;

}


function menage_search($search,$target_res=2,$format_res=0)
{
	GLOBAL $DB, $CONF, $SEARCH_TEMPLATE;

	//Init della ricerca
	foreach ($search[fields] as $key => $field)
	{
		list($type,$options)=explode("||",$field[content]);
		
		unset($target);		
		foreach (explode("||",$field[search_field]) as $trg)
		{
			$target[]=explode("-",$trg);
		}
		
		unset($cnt);
		
		$cntt=Array();
		
		foreach ($target as $st)
		{	
			
			if (!isset($SQL_SEARCH[$st[0]])) { 
						
				if (!isset($search[tablesql][$st[0]])) {$SQL_SEARCH[$st[0]] = "SELECT * FROM ".$st[0]." WHERE %[PERM]% "; }
				else $SQL_SEARCH[$st[0]] = $search[tablesql][$st[0]];
			}
			
			if ($cntt[$st[0]]==0)
			{
				$SQL_SEARCH[$st[0]] .= " AND ( ";
			} else $SQL_SEARCH[$st[0]] .= " OR (";
			
			$cntt[$st[0]]++;

			// Create SQL Query according to search type
			if (is_array($_GET[$key]) && isset($_GET[$key][realval]) && count($_GET[$key][realval])>1  ) {
				$tcnt=count($_GET[$key][realval]);
				$linarray=1;
			} elseif (is_array($_GET[$key]) && count($_GET[$key]) > 1  && !isset($_GET[$key][realval]))
			{
				$tcnt=count($_GET[$key]);
				$linarray=1;
			} else {$tcnt=1; $linarray=0;}
			
			
			
			$opened=0;
			for ($cnt=0; $cnt < $tcnt; $cnt++)
			{
				unset($this_round);
				if (is_array($_GET[$key]) && is_array($_GET[$key][realval])) {$curval=$_GET[$key][realval][$cnt];}
				elseif (is_array($_GET[$key]))	{$curval=$_GET[$key][$cnt];}
				else {$curval=$_GET[$key];}
				
				if (strlen($curval) > 0)
				{
					if ($cnt > 0) $SQL_SEARCH[$st[0]].=" OR ";
					if ($opened !=1 && $linarray==1) {$SQL_SEARCH[$st[0]].=" ( "; $opened=1; }
						
					switch ($type)
					{
						case "text":
							$SQL_SEARCH[$st[0]].=$st[1]."='".$curval."' ";
							if (strlen($curval)>0) $SEARCH_FIELDS[$st[0]][$st[1]][]=$curval;
							break;
						case "text_like":
							$SQL_SEARCH[$st[0]].=$st[1]." LIKE '%".$curval."%' ";
							if (strlen($curval)>0) $SEARCH_FIELDS[$st[0]][$st[1]][]=$curval;
							break;
						case "text_start":
							$SQL_SEARCH[$st[0]].=$st[1]." LIKE '".$curval."%' ";
							if (strlen($curval)>0) $SEARCH_FIELDS[$st[0]][$st[1]][]=$curval;
							break;
						case "text_end":
							$SQL_SEARCH[$st[0]].=$st[1]." LIKE '%".$curval."' ";
							if (strlen($curval)>0) $SEARCH_FIELDS[$st[0]][$st[1]][]=$curval;
							break;
						case "text_word":
							$SQL_SEARCH[$st[0]].=$st[1]." LIKE '% ".$curval." %' ";
							if (strlen($curval)>0) $SEARCH_FIELDS[$st[0]][$st[1]][]=$curval;
							break;
           case "text_ext":
             $SQL_SEARCH[$st[0]].= ext_search($st[1],$curval);
             if (strlen($curval)>0) $SEARCH_FIELDS[$st[0]][$st[1]][]=$curval;
             break;
						case "user_perm":
							$SQL_SEARCH[$st[0]].= $st[1]." LIKE '%U".$curval."=33333%'";
							if (strlen($curval)>0) $SEARCH_FIELDS[$st[0]][$st[1]][]=" ";
							break;
						case "calendar_owner":
							$SQL_SEARCH[$st[0]].= $st[1]." LIKE '".$curval.",,%' OR ".$st[1]." LIKE '%,,".$curval."' OR ".$st[1]." LIKE '%,,".$curval.",,%' OR ".$st[1]." LIKE '".$curval."'";
							if (strlen($curval)>0) $SEARCH_FIELDS[$st[0]][$st[1]][]=" ";
							break;					
				
						case "num_less":
							$SQL_SEARCH[$st[0]].=$st[1]." <= '".$curval."' ";
							if (strlen($curval)>0) $SEARCH_FIELDS[$st[0]][$st[1]][]=$curval;
							break;
						case "num_more":
							$SQL_SEARCH[$st[0]].=$st[1]." >= '".$curval."' ";
							if (strlen($curval)>0) $SEARCH_FIELDS[$st[0]][$st[1]][]=$curval;
							break;
						case "num_equal":
							$SQL_SEARCH[$st[0]].=$st[1]." = '".$curval."' ";
							if (strlen($curval)>0) $SEARCH_FIELDS[$st[0]][$st[1]][]=$curval;
							break;
						case "num_acc_ant_spstud":
							$SQL_SEARCH[$st[0]].= "acconti > '".$curval.",,%' OR anticipazioni > '%,,".$curval.",,%' OR sp_studio > '%,,".$curval."'";
							if (strlen($curval)>0) $SEARCH_FIELDS[$st[0]][$st[1]][]=" ";
							break;	
						case "num_acc_spstud":
							$SQL_SEARCH[$st[0]].= "acconti > '".$curval.",,%' OR sp_studio > '%,,".$curval."'";
							if (strlen($curval)>0) $SEARCH_FIELDS[$st[0]][$st[1]][]=" ";
							break;
		
					}
					$done_seart[$st[0]]++;
				}	
			} if ($linarray ==1 && $opened==1) $SQL_SEARCH[$st[0]].=" ) ";
			
			$SQL_SEARCH[$st[0]].=')';
			$SQL_SEARCH[$st[0]]=str_replace("AND ( )","",$SQL_SEARCH[$st[0]]);
			
		}
		
/*		//Close sql )
		
		foreach($SQL_SEARCH as $table => $sql)
		{
				$SQL_SEARCH[$table].=')';
				$SQL_SEARCH[$table]=str_replace("AND ( )","",$SQL_SEARCH[$table]);
		}
	*/	
	}
	
	foreach($search[tables] as $table => $options)
	{
		list($TABLES[$table][list_var],$TABLES[$table][title],$TABLES[$table][options],$TABLES[$table][permission])=explode("||",$options);
	}


		//CHECK FOR EMPTY SEARCH
		if ($search[allow_empty]!=1) 
		{
			foreach($SQL_SEARCH as $table => $sql)
			{
				if ($done_seart[$table] ==0) {unset ($SQL_SEARCH[$table]);}
			}
		}
	
	//Check for result number
	foreach($SQL_SEARCH as $table => $sql)
	{	
		list ($perm_type,$perm_parent)=explode(";;",$TABLES[$table][permission]);
		
		if ($perm_type==0)
		{
			$sql=str_replace("%[PERM]%","1=1",$sql);
		} 
		
		//print perm_sql_read($sql,$table).'<br><br>';
		$rs=@$DB->Execute(perm_sql_read($sql,$table));
		$res= $rs->RecordCount();
		$totr+=$res;
		$RESULTNUM[$table]=$res;
	}
	$RESULTNUM[total]=$totr;
	
	
	
	if (isset($search[title])) $output=str_replace("%[TITLE]%",$search[title],$SEARCH_TEMPLATE[search_title]);
	if (isset($search[result_txt])) $output.=str_replace("%[DESC]%",str_replace("%[FOUND]%", $RESULTNUM[total],$search[result_txt]),$SEARCH_TEMPLATE[search_desc]);
	
	//Render tables results
	$output .='<table width="100%" border=0 cellpadding=5>';
		
	foreach($SQL_SEARCH as $table => $sql)
	{	

		foreach (explode(";;",$TABLES[$table][options]) as $vopt)
		{
			list($opt,$optval)=explode("::",$vopt);
			switch ($opt)
			{
				case "exp":
					if ($optval==1) {
						$start_vis=1;
					}
					break;
				case "lock":
					if ($optval==1)
					{
						$noexp=1;
						$start_vis=1;
					}
					break;
			}
		}
					
		if (isset($_GET[$table."_ordfield"]) || isset($_GET[$table."_ordtype"]) || isset($_GET[$table."_st"]) || isset($_GET[$table."_exp"]) || isset($_GET[$table."_imp"]))
		{
			$start_vis=1;
		}
			
		if ($start_vis==1) {
			$startpic=$SEARCH_TEMPLATE[group_icon_close];
			$cur_vis="";
		}	else {
			$startpic=$SEARCH_TEMPLATE[group_icon_open];
			$cur_vis="style=\"display:none\"";	
		}

		if ($noexp !=1)
		{
			$more_tit='<a	href="javascript:rigaDOWN(Array(\''.$table.'\'),\'ico_'.$table.'\',\''.$table.'\',\''.$SEARCH_TEMPLATE[group_icon_close].'\',\''.$SEARCH_TEMPLATE[group_icon_open].'\')"><img src="'.$startpic.'" name="ico_'.$table.'" width="16" height="16" border="0" id="ico_'.$table.'"></a>';
		} else $more_tit="";
		
		if ($TABLES[$table][title] != "") $output.= '<tr><td><h5>'.$TABLES[$table][title].' '.$more_tit.'</h5></td></tr>';
		require_once($CONF[path_base].$CONF[dir_modules].$table."/lists.php");
		$curlist=$LISTS[$table][$TABLES[$table][list_var]];
		
		if (isset($SEARCH_FIELDS[$table]))
		{
			
			foreach ($SEARCH_FIELDS[$table] as $fs => $sterm)
			{
				if (isset($curlist[search_options])) {$curlist[search_options].="||";} 
				$curlist[search_options].="$fs::".implode(";;",$sterm);
			}
		} 

			$curlist[sql_select]=$sql;

		if (isset($curlist[search_options])){
			list ($perm_type,$perm_parent)=explode(";;",$TABLES[$table][permission]);
			if ($perm_type==0)
			{$sql=str_replace("%[PERM]%","1=1",$sql);}
			$curlist[sql_select]=$sql;
			$curlist[options].="||search::1";
		}
		//print $sql;
				
		//PRINT
		if ($target_res ==0 )
		{
			$curlist[box_title]="";
			unset($curlist[search_options]);
			$output.='<tr id="'.$table.'" '.$cur_vis.'><td>'.draw_list($curlist,$table).'</td></tr>';
		} 
		// FILE
		elseif ($target_res ==1)
		{
			return(draw_list_file($curlist,$table));
				
		}
		// WEB
		elseif  ($target_res ==2){
			
			if ($format_res==1)
			{
				$output.='<tr id="'.$table.'" '.$cur_vis.'><td>';
				$rs=@$DB->Execute(perm_sql_read($sql,$table));
				while (!$rs->EOF)
				{
					$res=$rs->FetchRow();
					$thisobj= load_fwobject("show",$table,0);
					$output.= draw_object($thisobj,$res[id],$table)."<br>\n";
				}
				$output.='</tr></td>';
			} else
			{	
				$curlist[box_title]="";
				$output.='<tr id="'.$table.'" '.$cur_vis.'><td>'.draw_list($curlist,$table).'</td></tr>';
								
			}
			
			
			
		}
		
	}
	$output .='</table>';
	return $output;
}


//Non utilizzata da togliere
function menage_search1($search,$target_res=2,$format_res=0)
{
	GLOBAL $DB, $CONF, $SEARCH_TEMPLATE;

	//Init della ricerca
	foreach ($search[fields] as $key => $field)
	{
		list($type,$options)=explode("||",$field[content]);
		
		unset($target);		
		foreach (explode("||",$field[search_field]) as $trg)
		{
			$target[]=explode("-",$trg);
		}
		
		unset($cnt);
		
		$cntt=Array();
		
		foreach ($target as $st)
		{	
			
			if (!isset($SQL_SEARCH[$st[0]])) { 
						
				if (!isset($search[tablesql][$st[0]])) {$SQL_SEARCH[$st[0]] = "SELECT * FROM ".$st[0]." WHERE %[PERM]% "; }
				else $SQL_SEARCH[$st[0]] = $search[tablesql][$st[0]];
			}
			
			if ($cntt[$st[0]]==0)
			{
				$SQL_SEARCH[$st[0]] .= " AND ( ";
			} else $SQL_SEARCH[$st[0]] .= " OR (";
			
			$cntt[$st[0]]++;

			// Create SQL Query according to search type
			if (is_array($_GET[$key]) && isset($_GET[$key][realval]) && count($_GET[$key][realval])>1  ) {
				$tcnt=count($_GET[$key][realval]);
				$linarray=1;
			} elseif (is_array($_GET[$key]) && count($_GET[$key]) > 1  && !isset($_GET[$key][realval]))
			{
				$tcnt=count($_GET[$key]);
				$linarray=1;
			} else {$tcnt=1; $linarray=0;}
			
			
			
			$opened=0;
			for ($cnt=0; $cnt < $tcnt; $cnt++)
			{
				unset($this_round);
				if (is_array($_GET[$key]) && is_array($_GET[$key][realval])) {$curval=$_GET[$key][realval][$cnt];}
				elseif (is_array($_GET[$key]))	{$curval=$_GET[$key][$cnt];}
				else {$curval=$_GET[$key];}
				
				if (strlen($curval) > 0)
				{
					if ($cnt > 0) $SQL_SEARCH[$st[0]].=" OR ";
					if ($opened !=1 && $linarray==1) {$SQL_SEARCH[$st[0]].=" ( "; $opened=1; }
						
					switch ($type)
					{
						case "text":
							$SQL_SEARCH[$st[0]].=$st[1]."='".$curval."' ";
							if (strlen($curval)>0) $SEARCH_FIELDS[$st[0]][$st[1]][]=$curval;
							break;
						case "text_like":
							$SQL_SEARCH[$st[0]].=$st[1]." LIKE '%".$curval."%' ";
							if (strlen($curval)>0) $SEARCH_FIELDS[$st[0]][$st[1]][]=$curval;
							break;
						case "text_start":
							$SQL_SEARCH[$st[0]].=$st[1]." LIKE '".$curval."%' ";
							if (strlen($curval)>0) $SEARCH_FIELDS[$st[0]][$st[1]][]=$curval;
							break;
						case "text_end":
							$SQL_SEARCH[$st[0]].=$st[1]." LIKE '%".$curval."' ";
							if (strlen($curval)>0) $SEARCH_FIELDS[$st[0]][$st[1]][]=$curval;
							break;
						case "text_word":
							$SQL_SEARCH[$st[0]].=$st[1]." LIKE '% ".$curval." %' ";
							if (strlen($curval)>0) $SEARCH_FIELDS[$st[0]][$st[1]][]=$curval;
							break;
           case "text_ext":
             $SQL_SEARCH[$st[0]].= ext_search($st[1],$curval);
             if (strlen($curval)>0) $SEARCH_FIELDS[$st[0]][$st[1]][]=$curval;
             break;
						case "user_perm":
							$SQL_SEARCH[$st[0]].= $st[1]." LIKE '%U".$curval."=33333%'";
							if (strlen($curval)>0) $SEARCH_FIELDS[$st[0]][$st[1]][]=" ";
							break;
						case "calendar_owner":
							$SQL_SEARCH[$st[0]].= $st[1]." LIKE '".$curval.",,%' OR ".$st[1]." LIKE '%,,".$curval."' OR ".$st[1]." LIKE '%,,".$curval.",,%' OR ".$st[1]." LIKE '".$curval."'";
							if (strlen($curval)>0) $SEARCH_FIELDS[$st[0]][$st[1]][]=" ";
							break;					
				
						case "num_less":
							$SQL_SEARCH[$st[0]].=$st[1]." <= '".$curval."' ";
							if (strlen($curval)>0) $SEARCH_FIELDS[$st[0]][$st[1]][]=$curval;
							break;
						case "num_more":
							$SQL_SEARCH[$st[0]].=$st[1]." >= '".$curval."' ";
							if (strlen($curval)>0) $SEARCH_FIELDS[$st[0]][$st[1]][]=$curval;
							break;
						case "num_equal":
							$SQL_SEARCH[$st[0]].=$st[1]." = '".$curval."' ";
							if (strlen($curval)>0) $SEARCH_FIELDS[$st[0]][$st[1]][]=$curval;
							break;
		
					}
					$done_seart[$st[0]]++;
				}	
			} if ($linarray ==1 && $opened==1) $SQL_SEARCH[$st[0]].=" ) ";
			
			$SQL_SEARCH[$st[0]].=')';
			$SQL_SEARCH[$st[0]]=str_replace("AND ( )","",$SQL_SEARCH[$st[0]]);
			
		}
		
/*		//Close sql )

		
		foreach($SQL_SEARCH as $table => $sql)
		{
				$SQL_SEARCH[$table].=')';

				$SQL_SEARCH[$table]=str_replace("AND ( )","",$SQL_SEARCH[$table]);
		}
	*/	
	}
	
	foreach($search[tables] as $table => $options)
	{

		list($TABLES[$table][list_var],$TABLES[$table][title],$TABLES[$table][options],$TABLES[$table][permission])=explode("||",$options);//orig
		//list($TABLES[$table][list_var],$TABLES[$table][title],,$TABLES[$table][permission])=explode("||",$options);//0k variante 1

		//list($TABLES[$table][list_var],,$TABLES[$table][options],$TABLES[$table][permission])=explode("||",$options);//ok variante 2
		//list($TABLES[$table][list_var],,$TABLES[$table][options],$TABLES[$table][permission])=explode("||",$options);
	}


		//CHECK FOR EMPTY SEARCH
		if ($search[allow_empty]!=1) 
		{
			foreach($SQL_SEARCH as $table => $sql)
			{
				if ($done_seart[$table] ==0) {unset ($SQL_SEARCH[$table]);}
			}
		}
	
	//Check for result number
	foreach($SQL_SEARCH as $table => $sql)
	{	
		list ($perm_type,$perm_parent)=explode(";;",$TABLES[$table][permission]);

		
		if ($perm_type==0)
		{
			$sql=str_replace("%[PERM]%","1=1",$sql);
		} 
		
		//print perm_sql_read($sql,$table).'<br><br>';
		$rs=@$DB->Execute(perm_sql_read($sql,$table));
		$res= $rs->RecordCount();
		$totr+=$res;
		$RESULTNUM[$table]=$res;
	}
	$RESULTNUM[total]=$totr;
	
	
	
	if (isset($search[title])) $output=str_replace("%[TITLE]%",$search[title],$SEARCH_TEMPLATE[search_title]);
	if (isset($search[result_txt])) $output.=str_replace("%[DESC]%",str_replace("%[FOUND]%", $RESULTNUM[total],$search[result_txt]),$SEARCH_TEMPLATE[search_desc]);
	
	//Render tables results
	$output .='<table width="100%" border=0 cellpadding=5>';
		
	foreach($SQL_SEARCH as $table => $sql)
	{	

		foreach (explode(";;",$TABLES[$table][options]) as $vopt)
		{
			list($opt,$optval)=explode("::",$vopt);
			switch ($opt)
			{
				case "exp":
					if ($optval==1) {
						$start_vis=1;
					}
					break;
				case "lock":
					if ($optval==1)
					{
						$noexp=1;
						$start_vis=1;
					}
					break;
			}
		}
					
		if (isset($_GET[$table."_ordfield"]) || isset($_GET[$table."_ordtype"]) || isset($_GET[$table."_st"]) || isset($_GET[$table."_exp"]) || isset($_GET[$table."_imp"]))
		{
			$start_vis=1;
		}
			
		if ($start_vis==1) {
			$startpic=$SEARCH_TEMPLATE[group_icon_close];
			$cur_vis="";
		}	else {
			$startpic=$SEARCH_TEMPLATE[group_icon_open];
			$cur_vis="style=\"display:none\"";	
		}

		if ($noexp !=1)
		{
			$more_tit='<a	href="javascript:rigaDOWN(Array(\''.$table.'\'),\'ico_'.$table.'\',\''.$table.'\',\''.$SEARCH_TEMPLATE[group_icon_close].'\',\''.$SEARCH_TEMPLATE[group_icon_open].'\')"><img src="'.$startpic.'" name="ico_'.$table.'" width="16" height="16" border="0" id="ico_'.$table.'"></a>';
		} else $more_tit="";
		
		if ($TABLES[$table][title] != "") $output.= '<tr><td><h5>'.$TABLES[$table][title].' '.$more_tit.'</h5></td></tr>';
		require_once($CONF[path_base].$CONF[dir_modules].$table."/lists.php");
		$curlist=$LISTS[$table][$TABLES[$table][list_var]];
		
		if (isset($SEARCH_FIELDS[$table]))
		{
			
			foreach ($SEARCH_FIELDS[$table] as $fs => $sterm)
			{
				if (isset($curlist[search_options])) {$curlist[search_options].="||";} 
				$curlist[search_options].="$fs::".implode(";;",$sterm);
			}
		} 

			$curlist[sql_select]=$sql;

		if (isset($curlist[search_options])){
			list ($perm_type,$perm_parent)=explode(";;",$TABLES[$table][permission]);
			if ($perm_type==0)
			{$sql=str_replace("%[PERM]%","1=1",$sql);}
			$curlist[sql_select]=$sql;
			$curlist[options].="||search::1";
		}
		//print $sql;
				
		//PRINT
		if ($target_res ==0 )
		{
			$curlist[box_title]="";
			unset($curlist[search_options]);
			$output.='<tr id="'.$table.'" '.$cur_vis.'><td>'.draw_list($curlist,$table).'</td></tr>';
		} 
		// FILE
		elseif ($target_res ==1)
		{
			return(draw_list_file($curlist,$table));
				
		}
		// WEB
		elseif  ($target_res ==2){
			
			if ($format_res==1)
			{
				$output.='<tr id="'.$table.'" '.$cur_vis.'><td>';
				$rs=@$DB->Execute(perm_sql_read($sql,$table));
				while (!$rs->EOF)
				{
					$res=$rs->FetchRow();
					$thisobj= load_fwobject("show",$table,0);
					$output.= draw_object($thisobj,$res[id],$table)."<br>\n";
				}
				$output.='</tr></td>';
			} else
			{	
				$curlist[box_title]="";
				$output.='<tr id="'.$table.'" '.$cur_vis.'><td>'.draw_list($curlist,$table).'</td></tr>';
								
			}
			
			
			
		}
		
	}
	$output .='</table>';
	return $output;
}
