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
//	Object show management
//



function draw_object($object,$id,$module,$real_obj="")
{
	GLOBAL $DB,$CONF,$CUR_TEMPLATE;
	
	
	foreach	(explode("||",$object[options])	as $value) {
		list($type,$val)=explode("::",$value);
		switch($type){
			case "perm":
				$perm=$val;
				break;
		}
	}
	
	if ($real_obj=="")
	{
	
		if ($perm==0)
		{
			$rs=@$DB->Execute(str_replace("%[ID]%",$id,$object[sql_select]));
		} else $rs=@$DB->Execute(perm_sql_read(str_replace("%[ID]%",$id,$object[sql_select]),$module));
		
		//print perm_sql_read(str_replace("%[ID]%",$id,$object[sql_select]),$module);
		
		
		if (!$rs) return 0;
		if ($rs->RecordCount() != 1) {
			$response[title]=FW_ERROR_NO_OBJ;
			$response[text]=FW_ERROR_NO_OBJ_FOUND;
			
			return draw_response($response);
		}
		
		
		$this_object=$rs->FetchRow();
		log_event("S",$module,$id);
	} else $this_object=$real_obj;
	
	$obj_template_content=file_get_contents($CONF[path_base].$CONF[dir_modules].$module."/".$CONF[dir_template].$CUR_TEMPLATE[name].'/'.$object[object_template]);
	
	foreach ($object[Fields] as $fname => $ftitle)
	{
		
		
		list($val,$type)=explode("::",$ftitle);
		$cur = $this_object[$fname];
		
		if (isset($type)) {
			switch ($type) {
				case "low":
					$val=strtolower($val);
					break;
				case "up":
					$val=strtoupper($val);
					break;
				case "date":
					list ($yy,$mm,$dd) = explode('-',$cur);
					if ($yy!="0000" && $mm!="00" && $dd != "00") {
						$cur=date($CONF[date_format], mktime (7,0,0,$mm,$dd,$yy));
					} else $cur="";
					break;

			}
		}
		if ($type[0] == "(") {
			$type=str_replace("(","",$type);
			$type=str_replace(")","",$type);
			foreach(explode("||",$type) as $v) {
				list($or,$re)=explode("=>",$v);
				if ($cur==$or) $cur=$re;
			}
		}
		
		if ($type[0] == "[") {
			
			$type=str_replace("[","",$type);
			$type=str_replace("]","",$type);
			list($sql_q,$field_show)=explode(";;",$type);
			if (!strstr($cur,",,"))
			{
				$sql_q=str_replace("%ID%",$cur,$sql_q);
				$type_query=@$DB->Execute($sql_q);
				$row_query=$type_query->FetchRow();
				$cur=$row_query[$field_show];
			} else {
				$newcur="";
				foreach(explode(",,",$cur) as $curr)
				{
					$sqln=str_replace("%ID%",$curr,$sql_q);
					$type_query=@$DB->Execute($sqln);
					$row_query=$type_query->FetchRow();
					$newcur.=$row_query[$field_show].' ';
				}
				$cur=$newcur;
			}
			
		}

	
		if ($type[0] == "{") {
			$type=str_replace("{","",$type);
			$type=str_replace("}","",$type);
			list($sql_q,$field_show,$sep)=explode(";;",$type);
			$sql_q=str_replace("%ID%",$cur,$sql_q);
			$type_query=@$DB->Execute($sql_q);
			$cur="";
			$cmul=0;
			while (!$type_query->EOF)
			{
				if ($cmul > 0) $cur.=$sep;
				$row_query=$type_query->FetchRow();
				$cur.=$row_query[$field_show];
				$cmul++;
			}
		}

		if (substr($type,0,6) == "func=>") {
			$type=str_replace("func=>","",$type);
			$cur=$type($this_object);
		}

	if (ereg("^[0-9]+(\.|,)[0-9]*$",$cur)) $cur=str_replace(".",",",$cur);

		$obj_template_content=str_replace("%[".strtoupper($fname)."-TITLE]%",$val,$obj_template_content);
		$obj_template_content=str_replace("%[".strtoupper($fname)."]%",$cur,$obj_template_content);
	}
	
	return $obj_template_content;
	
	
}

