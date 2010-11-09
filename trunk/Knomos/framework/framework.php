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
//  Framework Startup
//

// First of all let's get configuration for current Application
if (file_exists("../config/config.php")) {
	include("../config/config.php");
}
elseif (file_exists("../../../config/config.php")) {
	include("../../../config/config.php");
} elseif (file_exists("config/config.php")) {
	include("config/config.php");
}
else {print "Config file not found, shutting down"; die();}
// KNOMOS PLUS
if (file_exists("../config/config_plus.php")) {
	include("../config/config_plus.php");
}
elseif (file_exists("../../../config/config_plus.php")) {
	include("../../../config/config_plus.php");
} elseif (file_exists("config/config_plus.php")) {
	include("config/config_plus.php");
}
else {print "Config file not found, shutting down"; die();}

//Include common functions
require_once("functions.php");

//Init Db
db_connect();

//CHECK IF IS POSTED AN UNLOCK SYSTEM FORM
if ($_POST[admin_unlock]==1)
{
	$rsml=$DB->Execute("SELECT * FROM system_lock ORDER BY id DESC");
	if ($rsml->RecordCount() > 0)
	{
		$sys_lock=$rsml->FetchRow();
		if ($_POST[password_unlock]==$sys_lock[hash_unlock])
		{
			$DB->Execute("DELETE FROM system_lock");
		} else $wrong="?wrong=1";
	}

}


//Session Management - Start Session if set to always, otherwise if set to "onauth" it'll be started by Auth management
require_once("session.php");


if( (isset($_POST[language]) && strstr($_SERVER[SCRIPT_NAME],"mod_user") ) || (isset($_POST[language]) && strstr($_SERVER[SCRIPT_NAME],"new_user") && $_GET[id]==$_SESSION[fw_userid]) )
{
	$_SESSION[cur_lang]=$_POST[language][0];
}

//Check if we have to do a logout
if ($_GET[dologout] > 0)
{
	setcookie("knomos_login",'',time() - 100000);
	$DB->Execute("UPDATE users SET last_action='0000-00-00 00:00:00', sid='' WHERE id=".$_SESSION[fw_userid] );
	header("location: ".$CONF[url_base].'login.php?logout='.$_GET[dologout]);
	die();
}

//Load default language if user not logged in or no user language in session
if (!$_SESSION[fw_logged] || !$_SESSION[cur_lang] || !file_exists($CONF[path_base].$CONF[dir_language].$_SESSION[cur_lang].".php")) {
	require_once($CONF[path_base].$CONF[dir_language].$CONF[default_language].".php");
	if (strlen($_SESSION[cur_lang]) >0)
	{
		$CUR_LANG=$_SESSION[cur_lang];
	} else $CUR_LANG=$CONF[default_language];

} elseif (strlen($_SESSION[cur_lang]) > 0) {
	require_once($CONF[path_base].$CONF[dir_language].$_SESSION[cur_lang].".php");
	$CUR_LANG=$_SESSION[cur_lang];
}

// Start Logging Engine for error handling and debugging
require_once ("logging.php");


//Check for Auth
if (!$_SESSION[fw_logged] && ($CONF[auth_required]=="always" || ($CONF_PAGE[auth_required]=="yes" && $CONF[auth_required]=="perpage")) || $_GET[from_login]==1) {
	require_once("auth_knomos.php");

	manage_auth();
}

//Update login cookie
setcookie("knomos_login",md5(session_id()),(time()+(60*60*24)));


// CHECK FOR SYSTEM LOCK

if (!strstr($_SERVER[SCRIPT_NAME],"mod_document") && !strstr($_SERVER[SCRIPT_NAME],"calendar_iframe")  && !strstr($_SERVER[SCRIPT_NAME],"cron_web_start") )
{
	$rsml=$DB->Execute("SELECT * FROM system_lock ORDER BY id DESC");
	if ($rsml->RecordCount() > 0)
	{
		$sys_lock=$rsml->FetchRow();
		$datetime=$sys_lock[lock_date]." ".$sys_lock[lock_time];
		ereg("([0-9]+)-([0-9]+)-([0-9]+) ([0-9]+):([0-9]+):([0-9]+)?",$datetime,$d1);
		$from_stamp = mktime($d1[4],$d1[5],$d1[6],$d1[2],$d1[3],$d1[1]);
		//print "time: ".time()." from_Stamp: ".$from_stamp." from-min:".($from_stamp - (60*$sys_lock[min_notify]));
		if (  time() >=  $from_stamp )
		{
			header("location: ".$CONF[url_base].'framework/mant_lock.php'.$wrong);
		}
			
	}
}


$rs_thisuser=$DB->Execute("SELECT * FROM users WHERE id=".$_SESSION[fw_userid]);
if ($rs_thisuser->RecordCount() > 0)
{
	$this_user=$rs_thisuser->FetchRow();
	if($this_user[last_action] == '0000-00-00 00:00:00')
	{
		header("location: ".$CONF[url_base].'login.php?logout=1');
		die();
	}

	if($this_user['sid'] != session_id())
	{
		header("location: ".$CONF[url_base].'login.php?logout=1');
		die();
	}


	$_SESSION[user]=$this_user;

} else {
	header("location: ".$CONF[url_base].'login.php?logout=2');
	die();

}


//UPDATE LAST ACTION
$DB->Execute("UPDATE users SET last_action=NOW() WHERE id=".$_SESSION[fw_userid] );



//CHECK FOR LOCK
if ($_SESSION[user][lock]>0 && !strstr($_SERVER[SCRIPT_NAME],"mod_document") && strstr($_SERVER[SCRIPT_NAME],"modules/document/") )
{
	$rs_lock=$DB->Execute("SELECT * FROM document where user_lock=".$_SESSION[fw_userid]);
	if ($rs_lock->RecordCount() >0)
	{
		$doc_info=$rs_lock->FetchRow();
		header("location: ".$CONF[url_base].$CONF[dir_modules].'document/pages/mod_document.php?id='.$doc_info[id].'&action=lock');
	}
}


//CHECK FOR EXPIRED PASSWORD
if ($CONF[days_cpw] >0)
{
	list($yy,$mm,$dd) = explode("-",$_SESSION[user][last_pw_change]);
	$olddata = mktime(2,0,0,$mm,$dd,$yy);
	$span = time() - $olddata;
	$giorni_passati = $span / (60*60*24);
	if ($giorni_passati > $CONF[days_cpw] && !strstr($_SERVER[SCRIPT_NAME],"mod_user") && !strstr($_SERVER[SCRIPT_NAME],"calendar_iframe")  && !strstr($_SERVER[SCRIPT_NAME],"cron_web_start") )
	{

		header("location: ".$CONF[url_base].$CONF[dir_modules].'admin/pages/mod_user.php?id='.$_SESSION[fw_userid].'&action=cp');
	}
}


//Template inizialization
require_once ("template.php");

// Load Modules configuration in memory
load_modules_config();

//Include permission manager
require_once ("permission.php");


// CHECK FOR SYSTEM LOCK ALERT

if (!strstr($_SERVER[SCRIPT_NAME],"mod_document") && !strstr($_SERVER[SCRIPT_NAME],"calendar_iframe")  && !strstr($_SERVER[SCRIPT_NAME],"cron_web_start") )
{
	if ($rsml->RecordCount() > 0)
	{
		if ( ( time() > ($from_stamp - (60*$sys_lock[min_notify])))  && time() < $from_stamp )
		{
			$tmpJs='alert("'.addslashes(FW_MANT_LOCK_ALERT).' '.$sys_lock[lock_time].'\nMotivo: '.addslashes($sys_lock[descr]).'");';
			$PAGE[BODY_ONLOAD]="<script type=\"text/javascript\">
														$(document).ready(function() {
															".$tmpJs."	
														});
														</script>";
		}
	}
}


// Include Form/List/Show/search Engine PHPDocWriter

require_once ("form.php");
require_once ("lists.php");
require_once ("search.php");
require_once ("show.php");
//require_once ("ooffice.php");


?>
