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
//	List management
//

function make_url($newget,$keepget=1)
{
	
	if($keepget==1) $actualget=$_GET;
	foreach($newget as $k=>$v ) {$actualget[$k]=$v;}
	foreach($actualget as $k=>$v) {
		if (!is_array($v)) { $url2.=(isset($url2) ? "&" : "").$k.'='.$v;}
		else {
			foreach($v as $k2=>$v2)
			{
				if (!is_array($v2)) {$url2.=(isset($url2) ? "&" : "").$k.'['.$k2.']='.$v2;}
				else {
					foreach($v2 as $k3 => $v3)
					{
						$url2.=(isset($url2) ? "&" : "").$k.'['.$k2.']['.$k3.']='.$v3;
					}
				}
			}
			
		}
	}
	return $_SERVER['PHP_SELF'].'?'.$url2;
}



//Format table title
function format_head($value,$field,$module,$def="")
{
	GLOBAL $DB,$LIST_TEMPLATE;
	list($val,$type)=explode("::",$value);
	if (isset($type)) {
		switch ($type) {
			case "ord":
				$newget[$module."_ordfield"]=$field;
				$newget[$module."_ordtype"]= "asc";
				if (($_GET[$module."_ordfield"]==$field && $_GET[$module."_ordtype"]=="asc") || $def=="asc")
				{
					$cur=$val.' <img src="'.$LIST_TEMPLATE[order_icon_asc_on].'" border=0>';
				} else $cur=$val.' <a href="'.make_url($newget).'"><img src="'.$LIST_TEMPLATE[order_icon_asc].'" border=0></a>';
				$newget[$module."_ordtype"]= "desc";
				if (($_GET[$module."_ordfield"]==$field && $_GET[$module."_ordtype"]=="desc") || $def=="desc")
				{
					$cur.='<img src="'.$LIST_TEMPLATE[order_icon_desc_on].'" border=0>';
				}else $cur.='<a href="'.make_url($newget).'"><img src="'.$LIST_TEMPLATE[order_icon_desc].'" border=0></a>';
				break;
			default:
				$cur=$val;
				break;
		} 
	} else $cur=$value;

	return $cur;
}



function format_field($value,$row,$action="")
{
	GLOBAL $DB,$LIST_TEMPLATE,$CONF;
	
	if ($value=="#action#") {
		foreach(explode("||",$action) as $value) {
			list($rid,$name,$url,$js,$target) = explode(";;",$value);
			if ($cntact > 0) { $cur.=$LIST_TEMPLATE["list_act_sep"];}
			$cur.=str_replace("%[LINK]%",str_replace("%ID%",$row[$rid],$url),$LIST_TEMPLATE["link_action"]);
			$cur=str_replace("%[JS]%",$js,$cur);
			$cur=str_replace("%[TARGET]%",$target,$cur);
			$cur.=$name.'</a>';
			$cntact++;
		}
		
	} else {
		
		list($val,$type)=explode("::",$value);
		$cur=$row[$val];

		if (isset($type)) {
			switch ($type) {
				case "low":
					$cur=strtolower($cur);
					break;
				case "up":
					$cur=strtoupper($cur);
					break;
				case "date":
					if ($cur!="0000-00-00")
					{
						list ($yy,$mm,$dd) = explode('-',$cur);
						if ($yy!="0000" && $mm!="00" && $dd!="00") $cur=date($CONF[date_format], mktime (7,0,0,$mm,$dd,$yy));
					} else $cur="";
					break;

			}
		}
		if ($type[0] == "(") {
			$type=str_replace("(","",$type);
			$type=str_replace(")","",$type);
			foreach(explode(";;",$type) as $v) {
				list($or,$re)=explode("=>",$v);
				if ($cur==$or) $cur=$re;
			}
		}
		if ($type[0] == "[") {
			$type=str_replace("[","",$type);
			$type=str_replace("]","",$type);
			list($sql_q,$field_show)=explode(";;",$type);
			$sql_q=str_replace("%ID%",$cur,$sql_q);
			$type_query=@$DB->Execute($sql_q);
			$row_query=$type_query->FetchRow();
			$cur=$row_query[$field_show];
		}
		if (substr($type,0,8) == "linkid=>") {
			$type=str_replace("linkid=>","",$type);
			$link=str_replace("%ID%",$row[id],$type);
			$link=str_replace("%FIELD%",$cur,$link);
			$cur='<a href="'.$link.'">'.$cur.'</a>';
		}

		if (substr($type,0,6) == "func=>") {
			$type=str_replace("func=>","",$type);
			$cur=$type($row,$val);
		}
	


	}
	if (ereg("^[0-9]+(\.|,){1}[0-9]*$",$cur)) $cur=str_replace(".",",",$cur);	
	return $cur;
}





function draw_subrow($id,$sql_ref,$dl,$fields,$actions,$defexp,$module)
{
	GLOBAL $DB,$LIST_TEMPLATE,$curstn,$done_id,$search_fields;
	
	
	$subrow=1;
	
	$sql_ref=str_replace("m.","",$sql_ref);
	$rs2=@$DB->Execute(perm_sql_read(str_replace("%ID%",$id,$sql_ref),$module));
	$cnt3=0;
	while (!$rs2->EOF) {
		$row2=$rs2->FetchRow();
		
		if (is_array($done_id)) {
			if (in_array($row2[id],$done_id)) {continue;}
			else $done_id[]=$row2[id];
		} else $done_id[]=$row2[id];
		
		$curst2=$LIST_TEMPLATE[list_row_styles][$curstn][($cnt3%2)]["value"];
		$cnt=0;
		$pre="";
		//$output=draw_subrow($row2["id"],$sql_ref,($dl+1),$fields,$actions,$defexp,$module);
		if ($output=='') {$output="";} else $cnt=1;
		for ($x=0; $x< $dl;$x++) $pre.=$LIST_TEMPLATE["sub_indent_list"];
		

		$output2.=str_replace("%[STYLE]%",$curst2,$LIST_TEMPLATE[list_field_row_start]);
		
		$js_row=str_replace("%[CSS_OVER_ROW_STYLE]%",$LIST_TEMPLATE[list_row_styles][over],$LIST_TEMPLATE[list_field_row_js]);
		$js_row=str_replace("%[CSS_OLD_ROW_STYLE]%",$curst2,$js_row);
		$output2=str_replace("%[JS_ROW]%",$js_row,$output2);
		
		if ($cnt==1 && ((in_array($row2[$main],explode(",",$_GET[$module."_exp"]))) || $defexp==1) && !in_array($row2[$main],explode(",",$_GET[$module."_imp"]))) {
			unset($newimp);
			unset($newexp);
			$cnt2=0; foreach(explode(",",$_GET[$module."_exp"]) as $vex) {if($vex == "" || $vex == $row2[$main]) continue; $newexp[$cnt2]=$vex; $cnt2++;}
			$cnt2=0; foreach(explode(",",$_GET[$module."_imp"]) as $vex) {if($vex == "" || $vex == $row2[$main]) continue; $newimp[$cnt2]=$vex; $cnt2++;}
			$newimp[$cnt2]=$row2[$main];
			if(isset($newexp)) {$newget[$module."_exp"]=implode(",",$newexp);} else $newget[$module."_exp"]="";
			if(isset($newimp)) {$newget[$module."_imp"]=implode(",",$newimp);} else $newget[$module."_imp"]="";
			$output2.=$LIST_TEMPLATE[list_first_start].$pre.str_replace('%[LINK]%',make_url($newget),$LIST_TEMPLATE["link_implode"]).$LIST_TEMPLATE[list_first_end];
		} elseif($cnt==1)		
		 {
			unset($newimp);
			unset($newexp);
			$cnt2=0; foreach(explode(",",$_GET[$module."_imp"]) as $vex) {if($vex == "" || $vex == $row2[$main]) continue; $newimp[$cnt2]=$vex; $cnt2++;}
			$cnt2=0; foreach(explode(",",$_GET[$module."_exp"]) as $vex) {if($vex == "" || $vex == $row2[$main]) continue; $newexp[$cnt2]=$vex; $cnt2++;}
			$newexp[$cnt2]=$row2[$main];
			if(isset($newexp)) {$newget[$module."_exp"]=implode(",",$newexp);} else $newget[$module."_exp"]="";
			if(isset($newimp)) {$newget[$module."_imp"]=implode(",",$newimp);} else $newget[$module."_imp"]="";
			$output2.=$LIST_TEMPLATE[list_first_start].$pre.str_replace('%[LINK]%',make_url($newget),$LIST_TEMPLATE["link_explode"]).$LIST_TEMPLATE[list_first_end];
		}
		else {if($subrow==1) $output2.=$LIST_TEMPLATE[list_first_start].'&nbsp;'.$LIST_TEMPLATE[list_first_end];}
		
		$cntind=0;
		foreach ($fields as $value) {
			$cntind++;
			$cur=format_field($value,$row2,$actions);
			if (isset($search_fields[$value]))
			{ 
				foreach($search_fields[$value] as $searcht)
				{ 
					$cur=eregi_replace('('.quotemeta($searcht).')','<b>\\1</b>',$cur);
				}
			}
			if($cntind < 3) {$preind=$pre;} else $preind="";
			$output2.=$LIST_TEMPLATE[list_field_start].$preind.$cur.$LIST_TEMPLATE[list_field_end];
		}
		$output2.=$LIST_TEMPLATE[list_field_row_end].$output;
		
		

	$cnt3++;
	}
	if ($cnt3 > 0) {return $output2;} else return '';
}







function draw_list($list,$module){
	GLOBAL $DB,$EXPORT_TEMPLATE,$LIST_TEMPLATE,$CONF,$curstn,$done_id,$search_fields;


	$done_id = Array();
	$start=0;
	$subrow=0;
	$curtmp=$LIST_TEMPLATE;
// MAKE OPTION ARRAY AND SQL STATEMENT
	foreach (explode("||",$list["options"]) as $opt) {
		list($k,$v)=explode("::",$opt);
		switch($k) {
			case "perpage":
				$start=(isset($_GET[$module."_st"])) ? intval($_GET[$module."_st"]*$v):"0";
				$sql_append2= " LIMIT ".($_GET[$module."_st"]*$v).",".($v);
				$perpage=$v;
				break;
			case "defordfield":
				if (isset($_GET[$module."_ordfield"]) ) {$v=$_GET[$module."_ordfield"];}
				$defield=$v;
				$sql_append1= " ORDER BY ".$v;
				break;
			case "defordtype":
				if (isset($_GET[$module."_ordtype"]) && ($_GET[$module."_ordtype"]=="asc" || $_GET[$module."_ordtype"]=="desc")) 					{$v=$_GET[$module."_ordtype"];}
				$deftype=$v;
				$sql_append1.= " ".$v;				
				break;
			case "defordfield2":
				if (isset($_GET[$module."_ordfield"]) ) {$v=$_GET[$module."_ordfield"];}
				$defield=$v;
				$sql_append1.= " , ".$v;
				break;
			case "defordtype2":
				if (isset($_GET[$module."_ordtype"]) && ($_GET[$module."_ordtype"]=="asc" || $_GET[$module."_ordtype"]=="desc")) 					{$v=$_GET[$module."_ordtype"];}
				$deftype=$v;
				$sql_append1.= " ".$v;				
				break;
			case "defordfield3":
				if (isset($_GET[$module."_ordfield"]) ) {$v=$_GET[$module."_ordfield"];}
				$defield=$v;
				$sql_append1.= " , ".$v;
				break;
			case "defordtype3":
				if (isset($_GET[$module."_ordtype"]) && ($_GET[$module."_ordtype"]=="asc" || $_GET[$module."_ordtype"]=="desc")) 					{$v=$_GET[$module."_ordtype"];}
				$deftype=$v;
				$sql_append1.= " ".$v;				
				break;				
			case "exp_sub":
				$defexp_sub=($v==1) ? 1:0;
				break;
			case "exp_child":
				$defexp_child=($v==1) ? 1:0;
				break;
			case "action_style":
				$defact_style=$v;
				break;
			case "row_col":
				$row_col=explode(",,",$v);
				break;
			case "search":
				if ($v==1) {$is_search=1;}
				break;
			case "export":
				if ($v==1) {$is_export=1;
					$curtmp=$EXPORT_TEMPLATE;
				}
				break;						
	
		}
	}
	

	if (isset($list[search_options])) {
		foreach (explode("||",$list["search_options"]) as $sopt) {
			list($k,$v)=explode("::",$sopt);
			$search_fields[$k]=explode(";;",$v);
		}
	}
	



// CHECK IF THERE ARE SUB-ROW
	if(isset($list["multilevel"])) {
		$subrow=1;
		list($main,$ref,$def)=explode("||",$list["multilevel"]);
		$ref=str_replace("m.","",$ref);
		if ($is_search != 1) {
			if (eregi("where",$list["sql_select"])) {$sql_where=" AND $ref = '$def' ";$sql_where2=" AND $ref = '%ID%' ";} 
			else {$sql_where=" WHERE $ref = '$def' "; $sql_where2=" WHERE $ref = '%ID%' ";}
			$sql_ref=$list["sql_select"].$sql_where2.$sql_append1;		
		} else {
			if (eregi("where",$list["sql_select"])) {$sql_where2=" AND $ref = '%ID%' ";} 
			else {$sql_where2=" WHERE $ref = '%ID%' ";}
			$sql_ref="SELECT * FROM $module WHERE  $ref='%ID%'".$sql_append1;
		}
		
		
		
	}

	if (strlen($list[box_title]) > 0)
	{
		$output .= str_replace("%[TITLE]%",$list[box_title],$curtmp[list_title]);
	}
	$titles=explode("||",$list["titles"]);
	$fields=explode("||",$list["fields"]);
	//REMEMBER aggiungere trigger error.
	if (count($titles) != count($fields)) return "Error, field number";
	
	
	//print perm_sql_read($list[sql_select].$sql_where.$sql_append1.$sql_append2,$module);
	if ($conf[perm_type]=="advanced")
	{

		$rs = @$DB->Execute(perm_sql_read($list[sql_select].$sql_where.$sql_append1.$sql_append2,$module));
	
		$rstot = @$DB->Execute(perm_sql_read($list[sql_select].$sql_where.$sql_append1,$module));
	} else {
		
		$rs = @$DB->Execute(str_replace ("%[PERM]%","1=1",$list[sql_select].$sql_where.$sql_append1.$sql_append2));
	
		$rstot = @$DB->Execute(str_replace ("%[PERM]%","1=1",$list[sql_select].$sql_where.$sql_append1));		
	}
	//List head

	$output.=$curtmp[list_table_start].$curtmp[list_title_row_start];
	$cnt=0;
	if ($subrow==1) {
		$output.=$curtmp[list_title_field_start].'&nbsp;'.$curtmp[list_title_field_end];
	}
	
	foreach ($titles as $value) {
		$cur="";
		list($val,$type)=explode("::",$value);
		list($vf,$tf)=explode("::",$fields[$cnt]);
		if ($defield==$vf)
		{
			$cur=format_head($value,$vf,$module,$deftype);
		} else $cur=format_head($value,$vf,$module);
		$output.=$curtmp[list_title_field_start].$cur.$curtmp[list_title_field_end];
		$cnt++;
	}
	$output.=$curtmp[list_title_row_end];
	
	
	$odd=0;
	while (!$rs->EOF) {
		
		$row=$rs->FetchRow();
		$cnt=0;
		$output2="";
		
		
		$curst=$curtmp[list_row_styles][($odd%2)]["value"];
		$curstn=($odd%2);
		
		
		
		//Fix for search lists (check if a object is a subitem
		if ($subrow==1 && $is_search==1 && $row[$ref] != $def && !in_array($row[$ref],$done_id))
		{ 
			
			$rstmp=@$DB->Execute(perm_sql_read("SELECT * FROM $module WHERE id=".$row[$ref],$module));
			$row=$rstmp->FetchRow();
			//Explode this row if search result is in a subrow
			if (!isset($_GET[$module."_exp"])) { $_GET[$module."_exp"]=$row[id];} else $_GET[$module."_exp"].=",".$row[id];
		}
		
		if ($subrow==1) {
			$output2=draw_subrow($row["id"],$sql_ref,1,$fields,$list["action"],$defexp,$module);
			if ($output2=='') {$output2="";} else $cnt=1;
		}
	
		if (is_array($done_id)) {
			if (in_array($row[id],$done_id)) {continue;}
			else $done_id[]=$row[id];
		} else $done_id[]=$row[id];
		$odd++;
		
		$output.=str_replace("%[STYLE]%",$curst,$curtmp[list_field_row_start]);
		
		$js_row=str_replace("%[CSS_OVER_ROW_STYLE]%",$curtmp[list_row_styles][over],$curtmp[list_field_row_js]);
		$js_row=str_replace("%[CSS_OLD_ROW_STYLE]%",$curst,$js_row);
		$output=str_replace("%[JS_ROW]%",$js_row,$output);
		
		if ($cnt==1 && ((in_array($row[$main],explode(",",$_GET[$module."_exp"]))) || $defexp==1) && !in_array($row[$main],explode(",",$_GET[$module."_imp"]))) {
			unset($newimp);
			unset($newexp);
			$cnt2=0; foreach(explode(",",$_GET[$module."_exp"]) as $vex) {if($vex == "" || $vex == $row[$main]) continue; $newexp[$cnt2]=$vex; $cnt2++;}
			$cnt2=0; foreach(explode(",",$_GET[$module."_imp"]) as $vex) {if($vex == "" || $vex == $row[$main]) continue; $newimp[$cnt2]=$vex; $cnt2++;}
			$newimp[$cnt2]=$row[$main];
			if(isset($newexp)) {$newget[$module."_exp"]=implode(",",$newexp);} else $newget[$module."_exp"]="";
			if(isset($newimp)) {$newget[$module."_imp"]=implode(",",$newimp);} else $newget[$module."_imp"]="";
			$output.=$curtmp[list_first_start].str_replace('%[LINK]%',make_url($newget),$curtmp["link_implode"]).$curtmp[list_first_end];
		} elseif($cnt==1) {
			unset($newimp);
			unset($newexp);
			$cnt2=0; foreach(explode(",",$_GET[$module."_imp"]) as $vex) {if($vex == "" || $vex == $row[$main]) continue; $newimp[$cnt2]=$vex; $cnt2++;}
			$cnt2=0; foreach(explode(",",$_GET[$module."_exp"]) as $vex) {if($vex == "" || $vex == $row[$main]) continue; $newexp[$cnt2]=$vex; $cnt2++;}
			$newexp[$cnt2]=$row[$main];
			if(isset($newexp)) {$newget[$module."_exp"]=implode(",",$newexp);} else $newget[$module."_exp"]="";
			if(isset($newimp)) {$newget[$module."_imp"]=implode(",",$newimp);} else $newget[$module."_imp"]="";
			$output.=$curtmp[list_first_start].str_replace('%[LINK]%',make_url($newget),$curtmp["link_explode"]).$curtmp[list_first_end];
			$output2="";}
		else {if($subrow==1) $output.=$curtmp[list_first_start].'&nbsp;'.$curtmp[list_first_end];}
		
		
		
		foreach ($fields as $value) {
			$cur=format_field($value,$row,$list["action"]);
			
			if (isset($search_fields[$value]))
			{ 
				foreach($search_fields[$value] as $searcht)
				{ 
					$cur=eregi_replace('('.quotemeta($searcht).')','<b>\\1</b>',$cur);
				}
			}
			
			$output.=$curtmp[list_field_start].$cur.$curtmp[list_field_end];
		}
		$output.=$curtmp[list_field_row_end].$output2;
	
	
	}
	
	

	//Check if list has to be split in more pages
	if(isset($perpage))
	{
		$tot = $rstot->RecordCount(); 
		$start=(isset($_GET[$module."_st"])) ? intval($_GET[$module."_st"]):"0";
		$totpage=intval($tot/$perpage); 
		if ($totpage < ($tot/$perpage)) $totpage++;
		
		//Do we have more than one page?
		if ($totpage > 1)
		{
			$urls[tot]=$totpage;
			if($start > 0)
			{
				$newget[$module."_st"]=($start-1);
				$urls["prev"]=make_url($newget);
			}

			if( ($start+1) < $totpage)
			{
				$newget[$module."_st"]=($start+1);
				$urls["next"]=make_url($newget);
			}
			for ($x=0;$x < $totpage;$x++)
			{
				$newget[$module."_st"]=($x);
				$urls[$x]=make_url($newget);
			}
							
			$output.=str_replace("%[PAGES]%",list_render_multipage($urls,$start),$curtmp[list_row_multipage]);
			
		}

	}

	$output.='</table>';
	$output=str_replace("%[COLSPAN]%",(count($fields)+$subrow),$output);
	
	
	return $output;
}












function draw_list_file($list,$module){
	GLOBAL $DB,$LIST_TEMPLATE,$CONF,$curstn,$done_id,$search_fields;


	

	$done_id = Array();
	$start=0;
	$subrow=0;
	
// MAKE OPTION ARRAY AND SQL STATEMENT
	foreach (explode("||",$list["options"]) as $opt) {
		list($k,$v)=explode("::",$opt);
		switch($k) {
			case "perpage":
				$start=(isset($_GET[$module."_st"])) ? intval($_GET[$module."_st"]*$v):"0";
				$sql_append2= " LIMIT ".($_GET[$module."_st"]*$v).",".($v);
				$perpage=$v;
				break;
			case "defordfield":
				if (isset($_GET[$module."_ordfield"]) ) {$v=$_GET[$module."_ordfield"];}
				$defield=$v;
				$sql_append1= " ORDER BY ".$v;
				break;
			case "defordtype":
				if (isset($_GET[$module."_ordtype"]) && ($_GET[$module."_ordtype"]=="asc" || $_GET[$module."_ordtype"]=="desc")) 					{$v=$_GET[$module."_ordtype"];}
				$deftype=$v;
				$sql_append1.= " ".$v;				
				break;
			case "defordfield2":
				if (isset($_GET[$module."_ordfield"]) ) {$v=$_GET[$module."_ordfield"];}
				$defield=$v;
				$sql_append1.= " , ".$v;
				break;
			case "defordtype2":
				if (isset($_GET[$module."_ordtype"]) && ($_GET[$module."_ordtype"]=="asc" || $_GET[$module."_ordtype"]=="desc")) 					{$v=$_GET[$module."_ordtype"];}
				$deftype=$v;
				$sql_append1.= " ".$v;				
				break;
			case "defordfield3":
				if (isset($_GET[$module."_ordfield"]) ) {$v=$_GET[$module."_ordfield"];}
				$defield=$v;
				$sql_append1.= " , ".$v;
				break;
			case "defordtype3":
				if (isset($_GET[$module."_ordtype"]) && ($_GET[$module."_ordtype"]=="asc" || $_GET[$module."_ordtype"]=="desc")) 					{$v=$_GET[$module."_ordtype"];}
				$deftype=$v;
				$sql_append1.= " ".$v;				
				break;
			case "exp_sub":
				$defexp_sub=($v==1) ? 1:0;
				break;
			case "exp_child":
				$defexp_child=($v==1) ? 1:0;
				break;
			case "action_style":
				$defact_style=$v;
				break;
			case "row_col":
				$row_col=explode(",,",$v);
				break;
			case "search":
				if ($v==1) {$is_search=1;}
				break;		
	
		}
	}
	

	if (isset($list[search_options])) {
		foreach (explode("||",$list["search_options"]) as $sopt) {
			list($k,$v)=explode("::",$sopt);
			$search_fields[$k]=explode(";;",$v);
		}
	}
	



// CHECK IF THERE ARE SUB-ROW
	if(isset($list["multilevel"])) {
		$subrow=1;
		list($main,$ref,$def)=explode("||",$list["multilevel"]);
		if ($is_search != 1) {
			if (eregi("where",$list["sql_select"])) {$sql_where=" AND $ref = '$def' ";$sql_where2=" AND $ref = '%ID%' ";} 
			else {$sql_where=" WHERE $ref = '$def' "; $sql_where2=" WHERE $ref = '%ID%' ";}
			$sql_ref=$list["sql_select"].$sql_where2.$sql_append1.$sql_append2;		
		} else {
			if (eregi("where",$list["sql_select"])) {$sql_where2=" AND $ref = '%ID%' ";} 
			else {$sql_where2=" WHERE $ref = '%ID%' ";}
			$sql_ref="SELECT * FROM $module WHERE %[PERM]% AND $ref='%ID%'".$sql_append1;
		}
		
		
		
	}

	if (strlen($list[box_title]) > 0)
	{
		$output .= str_replace("%[TITLE]%",$list[box_title],$LIST_TEMPLATE[list_title]);
	}
	
	$titles=explode("||",$list["titles"]);
	$fields=explode("||",$list["fields"]);
	//REMEMBER aggiungere trigger error.
	if (count($titles) != count($fields)) return "Error, field number";
			
	$rs = @$DB->Execute(perm_sql_read($list[sql_select].$sql_where.$sql_append1.$sql_append2,$module));

	$rstot = @$DB->Execute(perm_sql_read($list[sql_select].$sql_where.$sql_append1,$module));
	//List head

	$cnt=0;
	if ($subrow==1) {
		$titar[]='  ';
	}
	
	foreach ($titles as $value) {
		$cur="";
		list($val,$type)=explode("::",$value);
		list($vf,$tf)=explode("::",$fields[$cnt]);
		$titar[]=$value;
		$cnt++;
	}
	
	
	$odd=0;
	$arcnt=0;
	while (!$rs->EOF) {
		
		$row=$rs->FetchRow();
		$cnt=0;
		$output2="";
		
				
		//Fix for search lists (check if a object is a subitem
		if ($subrow==1 && $is_search==1 && $row[$ref] != $def && !in_array($row[$ref],$done_id))
		{ 
			$rstmp=@$DB->Execute(perm_sql_read("SELECT * FROM $module WHERE %[PERM]% AND id=".$row[$ref],$module));
			$row=$rstmp->FetchRow();
			//Explode this row if search result is in a subrow
			if (!isset($_GET[$module."_exp"])) { $_GET[$module."_exp"]=$row[id];} else $_GET[$module."_exp"].=",".$row[id];
		}
		
		if ($subrow==1) {
			$output2=draw_subrow($row["id"],$sql_ref,1,$fields,$list["action"],$defexp,$module);
			if ($output2=='') {$output2=""; $resar[$arcnt][]='  ';} else $cnt=1;
		}
	
		if (is_array($done_id)) {
			if (in_array($row[id],$done_id)) {continue;}
			else $done_id[]=$row[id];
		} else $done_id[]=$row[id];
				
		
		foreach ($fields as $value) {
			$cur=format_field($value,$row,$list["action"]);
			
			if (isset($search_fields[$value]))
			{ 
				foreach($search_fields[$value] as $searcht)
				{ 
					$cur=$cur;
				}
			}
			
			$resar[$arcnt][]=quote_xml($cur);
		}
		$arcnt++;
	
	}
	
	$res[tit]=$titar;
	$res[res]=$resar;

	return $res;
}












?>
