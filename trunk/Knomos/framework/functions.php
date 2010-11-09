<?
/**
 * @package Creative Web Framework
 * @copyright (C) 2000 - 2005 Creative Web Snc
 * @website http://www.creativeweb.it
 * @license http://www.gnu.org/copyleft/gpl.html GNU/GPL
 * Knomos & Creative Web Framework is Free Software
 */
//
//  Creative Web FrameWork
//  Various Functions
//

function CalcolaContributoUnificato($pr_valore, $pr_giud, $pr_tipo) {
	GLOBAL $DB;
	$rs=$DB->Execute("SELECT * FROM INT_pratiche_tipo WHERE codice='".$pr_tipo."'");
	$op=$rs->FetchRow();
	$tp_contr_unif=$op[contr_unif];

	//echo $pr_tipo;
	if ( $pr_valore > 0 &&  $pr_valore <= 1100) {$scaglione=1;}
	else if ($pr_valore > 1101 && $pr_valore <= 5200) {$scaglione=2;}
	else if ($pr_valore > 5201 && $pr_valore <= 26000) {$scaglione=3;}
	else if ($pr_valore > 26001 && $pr_valore <= 52000) { $scaglione=4;}
	else if ($pr_valore > 52001 && $pr_valore <= 260000) {$scaglione=5;}
	else if ($pr_valore > 260001 && $pr_valore <= 520000) {$scaglione=6;}
	else if ($pr_valore > 520001) {$scaglione=7;}
	//valore indeterminabile
	else{if ($pr_valore < 0 ){switch ($pr_giud){case "GDPA":$scaglione="8"; break; case "TRIB":$scaglione="9";break;}}}
	//
	if ( $tp_contr_unif == 0) {$contributo="0,00";}
	else if ( $tp_contr_unif == 1)
	{
		$rs1=$DB->Execute("SELECT * FROM INT_contr_unificato WHERE scaglione='".$scaglione."'");
		$op1=$rs1->FetchRow();
		$contributo=$op1[importo];
	}
	else if ( $tp_contr_unif == 0.5)
	{
		$rs1=$DB->Execute("SELECT * FROM INT_contr_unificato WHERE scaglione='".$scaglione."'");
		$op1=$rs1->FetchRow();
		$contributo=($op1[importo]*0.5);
		//$contributo=$contributo.".00";
	}
	else {$contributo=$tp_contr_unif;}

	return $contributo;

}//FINE FUNZIONE



function load_modules_config()
{
	global $MODULES,$CONF,$CUR_LANG, $LINK_MODULES, $MENU, $ONSTART_FUNC,$PERMISSION;
	$dirm=opendir($CONF[path_base].$CONF[dir_modules]);

	while (($file = readdir($dirm)) !== false) {
		if (is_dir ($CONF[path_base].$CONF[dir_modules] . $file) && $file != "." && $file != ".." && $file[0] != ".")
		if (file_exists($CONF[path_base].$CONF[dir_modules] . $file . '/config.php')) {

			//A Module has been found, let's open its config file and parse it.
			require_once($CONF[path_base].$CONF[dir_modules] . $file . '/config.php');


		} else trigger_error (str_replace("%MOD%",$file,FW_ERROR_NOMODCONG),E_USER_WARNING);
	}
}



//this function get the first free id for link between modules
//Parent_table is the table we are linking TO
function get_lm_id($parent_table)
{
	global $CONF,$LINK_MODULES,$MODULES;

	if (is_array($LINK_MODULES[$parent_table])) {
		return count($LINK_MODULES[$parent_table]);
	} else return 0;

}




//Load language file for given module
function load_module_language($module)
{
	GLOBAL $CUR_LANG,$CONF;

	if (file_exists ($CONF[path_base].$CONF[dir_modules].$module."/language/".$CUR_LANG.".php")) {
		require_once ($CONF[path_base].$CONF[dir_modules].$module."/language/".$CUR_LANG.".php");
	} else require_once ($CONF[path_base].$CONF[dir_modules].$module."/language/".$CONF[default_language].".php");
}



//Find parents for given object return array with [id] and [module] of the parent
//This function only scan for parent so only for linked object with cross permission handling. It wont list simple table links
function get_obj_parent($module,$obj_id)
{
	GLOBAL $CONF,$MODULES,$LINK_MODULES,$DB;

	//First of all let's get an array of possible parent for current module
	foreach($LINK_MODULES as $key => $value) {
		foreach($value as $key2 => $value2) {
			if ($value2[child] == $module && $value2[get_permission]=="yes") {
				$obj_parent_module[$key]=$value2;
			}
		}
	}

	$cnt=0;
	//Now scan all possible parent module for parent object, support both direct link and multiple parents
	if (is_array($obj_parent_module)) {
		foreach($obj_parent_module as $key3 => $value3)
		{
			switch ($value3[type]) {
				case "M":
					//Obj2 is child Obj1 is parent
					$rs=$DB->Execute("SELECT * FROM ".$CONF[default_link_table]." WHERE obj_2=$obj_id AND module_2='$module'");
					if ($rs->RecordCount()>0) {
						while(!$rs->EOF){
							$result[$cnt][id]=$rs->fields[obj_1];
							$result[$cnt][module]=$rs->fields[module_1];
							$cnt++;
							$rs->MoveNext();
						}
					}
					break;
				case "1":
					$rs=$DB->Execute("SELECT * FROM $module WHERE id=$obj_id AND ".$value3[link_field]." > 0");
					if ($rs->RecordCount()>0) {
						$result[$cnt][id]=$rs->fields[$value3[link_field]];
						$result[$cnt][module]=$key3;
						$cnt++;
					}
					break;
						
			}
				
		}


	} else return false;

	return $result;

}


function db_connect()
{
	GLOBAL $CONF,$DB,$CUR_LANG;

	//Start Connection to the database (required also by the logging Engine
	require_once ("external_lib/adodb/adodb.inc.php");
	$ADODB_FETCH_MODE = ADODB_FETCH_ASSOC;
	$DB = ADONewConnection($CONF[db_type]);
	if (!@$DB->Connect($CONF[db_host],$CONF[db_user],$CONF[db_pass],$CONF[db_database])) {
		if (isset($CONF[db_backup_type])) {
			$DB = ADONewConnection($CONF[db_backup_type]);
			if (!@$DB->Connect($CONF[db_backup_host],$CONF[db_backup_user],$CONF[db_backup_pass],$CONF[db_backup_database])) {
				require_once($CONF[path_base].$CONF[dir_language].$CONF[default_language].".php");
				$CUR_LANG=$CONF[default_language];
				print FW_ERROR_DBCONNECTION; die();
			}
		} else {
			require_once($CONF[path_base].$CONF[dir_language].$CONF[default_language].".php");
			$CUR_LANG=$CONF[default_language];
			print FW_ERROR_DBCONNECTION; die();
		}
			
	}
}


//Function for fill out of a select title
function select_complete($values,$text)
{
	foreach ($values as $key => $val)
	{
		$text=str_replace("%".$key."%",$val,$text);
	}
	return $text;
}

//Function for knowing how many page a form is composed by
function tot_form_pages($form)
{
	foreach ($form[Fields] as $key => $val)
	{
		list($InputType,$value,$options)=explode("||",$form["Fields"][$key]["content"]);
		if ($InputType=="page") {
			if ($value > $cur_page) $cur_page=$value;
		}
	}
	if (!isset($cur_page)) $cur_page=1;
	return $cur_page;
}


//Execute an Insert or Update Query
function db_query($sql,$type)
{
	global $DB;

	$ok=$DB->Execute($sql);
	
	if (!$ok)
	{ 
		trigger_error($DB->ErrorMsg());
		return 0;
	}
	elseif (strtoupper($type)=="U" && $ok)
	{return 1;}
	elseif (strtoupper($type)=="I" && $ok)
	{return $DB->Insert_ID();}
}


//Link 2 object parent and child
function link_parent_child($pid,$pm,$cid,$cm)
{
	GLOBAL $LINK_MODULES,$DB,$CONF;


	foreach ($LINK_MODULES[$pm] as $k => $v)
	{
		if ($v[child]==$cm)
		{
			$found=1;
			if ($v[type]==1)
			{
				$sql="UPDATE $pm SET ".$v[link_field]."='$cid' WHERE id=$pid";
				if (!$DB->Execute($sql)) {return 0;}
				else return 1;
			}
			elseif (strtoupper($v[type])=="M")
			{
				$sql="SELECT COUNT(*) as found FROM ".$CONF[default_link_table]." WHERE module_1='$pm' AND module_2='$cm' AND obj_1=$pid AND obj_2=$cid";
				$rs=$DB->Execute($sql);
				if ($rs->fields[found]==0)
				{
					$sql="INSERT INTO ".$CONF[default_link_table]." SET module_1='$pm', module_2='$cm', obj_1='$pid', obj_2='$cid'";
					if (!$DB->Execute($sql)) {return 0;}
					else return 1;
				} else return 1;
			}
			exit;
		}

	}

	if (!$found) {return 0;}
}

//Return file axtention for a given filename
function get_ext($filename)
{
	$file_part=explode(".",$filename);
	$ext=$file_part[(count($file_part)-1)];
	return $ext;
}

//Load a form/search/list
function load_fwobject($type,$module,$number,$form_opt="")
{
	GLOBAL $CONF,$LISTS,$SEARCHES,$FORMS,$SHOW,$LAST_LOADED_OBJ;


	switch ($type)
	{
		case "search":
			if (isset($SEARCHES[$module][$number])) return $SEARCHES[$module][$number];
			$file="search.php";
			$LAST_LOADED_OBJ=$number."s";
			break;
		case "lists":
			if (isset($LISTS[$module][$number])) return $LISTS[$module][$number];
			$file="lists.php";
			break;
		case "form":
			if (isset($FORMS[$module][$number])) return $FORMS[$module][$number];
			$file="forms.php";
			$LAST_LOADED_OBJ=$number."f";
			break;
		case "show":
			if (isset($SHOW[$module][$number])) return $SHOW[$module][$number];
			$file="show.php";
			break;
		default:
			return 0;
			break;
	}

	if (file_exists($CONF[path_base].$CONF[dir_modules].$module."/$file"))
	{
		if(!require_once($CONF[path_base].$CONF[dir_modules].$module."/$file")) {return 0;}
	} else return 0;


	switch ($type)
	{
		case "search":
			if (isset($SEARCHES[$module][$number])) return $SEARCHES[$module][$number];
			break;
		case "lists":
			if (isset($LISTS[$module][$number])) return $LISTS[$module][$number];
			break;
		case "form":
			if (isset($FORMS[$module][$number])) return $FORMS[$module][$number];
			break;
		case "show":
			if (isset($SHOW[$module][$number])) return $SHOW[$module][$number];
			break;
		default:
			return 0;
			break;
	}


}


function print_day($day) {

	$day = (int)$day;

	switch ($day)
	{
		case 0:
			$result=CALENDAR_DAY_0;
			break;
		case 1:
			$result=CALENDAR_DAY_1;
			break;
		case 2:
			$result=CALENDAR_DAY_2;
			break;
		case 3:
			$result=CALENDAR_DAY_3;
			break;
		case 4:
			$result=CALENDAR_DAY_4;
			break;
		case 5:
			$result=CALENDAR_DAY_5;
			break;
		case 6:
			$result=CALENDAR_DAY_6;
			break;
	}

	return $result;

}

function print_month($month)
{

	$month = (int)$month;

	switch ($month)
	{
		case 1:
			$result=CALENDAR_MONTH_1;
			break;
		case 2:
			$result=CALENDAR_MONTH_2;
			break;
		case 3:
			$result=CALENDAR_MONTH_3;
			break;
		case 4:
			$result=CALENDAR_MONTH_4;
			break;
		case 5:
			$result=CALENDAR_MONTH_5;
			break;
		case 6:
			$result=CALENDAR_MONTH_6;
			break;
		case 7:
			$result=CALENDAR_MONTH_7;
			break;
		case 8:
			$result=CALENDAR_MONTH_8;
			break;
		case 9:
			$result=CALENDAR_MONTH_9;
			break;
		case 10:
			$result=CALENDAR_MONTH_10;
			break;
		case 11:
			$result=CALENDAR_MONTH_11;
			break;
		case 12:
			$result=CALENDAR_MONTH_12;
			break;
	}

	return $result;
}

function text_to_js($txt) {

	$txt = ereg_replace("\r\n","",$txt);
	$txt = ereg_replace("(\r|\n)","",$txt);
	$txt = ereg_replace("'","\'",$txt);
	$txt = ereg_replace("[[:space:]]+"," ",$txt);
	return $txt;
}

function check_owner($perms) {

	GLOBAL $DB,$CONF;

	if (ereg('U([0-9]+)=3333',$perms,$pp)) {

		$id = $pp[1];
		$rs=$DB->Execute("SELECT * FROM ".$CONF[auth_db_table]." where id=$id");
		$row=$rs->FetchRow();
		return $row['nome'];
	} else return '';
}

function quote_xml($txt) {

	$txt = str_replace('<','&lt;',$txt);
	$txt = str_replace('>','&gt;',$txt);
	$txt = str_replace('&','&amp;',$txt);
	$txt = str_replace("'",'&apos;',$txt);
	$txt = str_replace('"','&quot;',$txt);
	return $txt;
}

$DATE_FIELDS = array('aAbcdDefgGhHiIjlLmMnOrsStTuUwWyYzZ', 'dj','mn','yY','GH','i','s');

function date_to_mysql($date) {

	global $CONF,$DATE_FIELDS;

	$match1 = ereg_replace('(['.$DATE_FIELDS[0].']{1})','(\\1)',$CONF[date_format]);
	$match2 = ereg_replace('\(['.$DATE_FIELDS[0].']{1}\)','([0-9]+)',$match1);

	ereg($match1,$CONF[date_format],$ff);
	ereg($match2,$date,$vv);
	unset($ff[0],$vv[0]);

	$day = 1; $mon = 1; $yea = 1970;

	for ($i = 1; $i <= count(array_keys($ff)); $i++) {
		if (strstr($DATE_FIELDS[1],$ff[$i])) $day = $vv[$i];
		if (strstr($DATE_FIELDS[2],$ff[$i])) $mon = $vv[$i];
		if (strstr($DATE_FIELDS[3],$ff[$i])) $yea = $vv[$i];
	}

	return date($CONF[mysql_date_format], mktime(7,0,0,$mon,$day,$yea) );
}


function mysql_to_date($date) {

	global $CONF;

	if ($date=="0000-00-00") return "";
	$pp = explode('-',$date);
	return date($CONF[date_format], mktime(7,0,0,$pp[1],$pp[2],$pp[0]) );
}

function time_to_mysql($time) {

	global $CONF, $DATE_FIELDS;

	$match1 = ereg_replace('(['.$DATE_FIELDS[0].']{1})','(\\1)',$CONF[time_format]);
	$match2 = ereg_replace('\(['.$DATE_FIELDS[0].']{1}\)','([0-9]+)',$match1);

	ereg($match1,$CONF[time_format],$ff);
	ereg($match2,$time,$vv);
	unset($ff[0],$vv[0]);

	$hou = $min = $sec = 0;

	for ($i = 1; $i <= count(array_keys($ff)); $i++) {
		if (strstr($DATE_FIELDS[4],$ff[$i])) $hou = $vv[$i];
		if (strstr($DATE_FIELDS[5],$ff[$i])) $min = $vv[$i];
		if (strstr($DATE_FIELDS[6],$ff[$i])) $sec = $vv[$i];
	}

	return date($CONF[mysql_time_format], mktime($hou,$min,$sec,1,1,2000) );

}

function mysql_to_time($time) {

	global $CONF;

	$pp = explode(':',$time);
	return date($CONF[time_format], mktime($pp[0],$pp[1],$pp[2],1,1,2000) );
}

function is_mysql_date($date) {

	global $CONF;

	return ereg('^[0-9]{4}-[0-9]{1,2}-[0-9]{1,2}$',$date);
}

function is_mysql_time($date) {

	global $CONF;

	return ereg('^[0-9]{2}:[0-9]{1,2}:[0-9]{1,2}$',$date);
}

function set_js_keyhandler($keys)
{
	GLOBAL $CONF;

	$output = "<script type=\"text/javascript\" language=\"javascript1.2\"><!-- \n";

	foreach($keys as $k=>$url)
	{
		$output.="keymap[$k]='$url';\n";
	}
	$output.="//--></script>";

	return $output;
}

function pnzero($val)
{
	return $val != 0 ? $val : '';
}


function insert_last_viewed($obj_id,$module) {

	global $CONF,$DB;

	$rs_find=$DB->Execute("SELECT * FROM INT_last_viewed WHERE module='$module' AND obj_id='$obj_id' AND user_id=".$_SESSION[fw_userid]);
	if ($rs_find->RecordCount() > 0)
	{
		$res=$rs_find->FetchRow();
		$rs_upd=$DB->Execute("UPDATE INT_last_viewed SET viewed=NOW() WHERE id=".$res[id]);
	} else $rs_ins=$DB->Execute("INSERT INTO INT_last_viewed SET viewed=NOW(), module='$module', obj_id=$obj_id, user_id=".$_SESSION[fw_userid]);

}

function nform($num,$blank=0,$sep_dec='',$sep_tho='') {

	global $CONF;

	if ($blank && $num == 0) return '';
	return number_format($num,2,$sep_dec ? $sep_dec : $CONF[value_dec], $sep_tho ? $sep_tho : $CONF[value_sep]);
}

function dayname($d,$m,$y) {

	if (!$d) return '';
	$darr = array(CALENDAR_DAY_6,CALENDAR_DAY_0,CALENDAR_DAY_1,CALENDAR_DAY_2,CALENDAR_DAY_3,CALENDAR_DAY_4,CALENDAR_DAY_5);
	$ind = date('w',mktime(7,0,0,intval($m,10),intval($d,10),intval($y,10)));
	return $darr[$ind];
}

function utf8_encode_array(&$arr) {

	if (!is_array($arr)) return false;
	//foreach ($arr as $k => $v) if (ereg('[^ 0-9a-zA-Z,.;:_-]+',$v)) $arr[$k] = utf8_encode($arr[$k]);
}
?>
