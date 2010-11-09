<?
/**  
* @package Creative Web Framework  
* @copyright (C) 2000 - 2005 Creative Web Snc 
* @website http://www.creativeweb.it  
* @license http://www.gnu.org/copyleft/gpl.html GNU/GPL  
* Knomos & Creative Web Framework is Free Software  
*/
//
// Cron System Starter to be executed from linux cron at least every 10 minute
//



// First of all let's get configuration for current Application
if (file_exists("../config/config.php")) {
	include("../config/config.php");
} else {print "Config file not found, shutting down"; die();}

if ($CONF[cron_system_enable]=="yes") 
{

//Start Connection to the database (required also by the logging Engine
require_once ("external_lib/adodb/adodb.inc.php");
$ADODB_FETCH_MODE = ADODB_FETCH_ASSOC;
$DB = ADONewConnection($CONF[db_type]);
if (!@$DB->Connect($CONF[db_host],$CONF[db_user],$CONF[db_pass],$CONF[db_database])) {
	require_once($CONF[path_base].$CONF[dir_language].$CONF[default_language].".php");
	$CUR_LANG=$CONF[default_language];
	print FW_ERROR_DBCONNECTION; die();
}

require_once ("cron.php");
cron_init(2);
cron_init(0);
}



?>