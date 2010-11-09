<?
/**  
* @package Creative Web Framework  
* @copyright (C) 2000 - 2005 Creative Web Snc 
* @website http://www.creativeweb.it  
* @license http://www.gnu.org/copyleft/gpl.html GNU/GPL  
* Knomos & Creative Web Framework is Free Software  
*/

//
// Cron Web Starter to be executed Inside the page frame. Could need session initialization
//

// First of all let's get configuration for current Application
$unlock=1;
if (file_exists("../config/config.php")) {
	include("../config/config.php");
} else {print "Config file not found, shutting down"; die();}

if ($CONF[cron_web_enable]=="yes") 
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

require_once("cron.php");
require_once("framework.php");

$html = cron_init_web();

//REMEMBER INSERIRE PAGE REFRESH

}

$this_location = 'http://'.$_SERVER['HTTP_HOST'].$_SERVER['PHP_SELF'].'?r='.rand();
?>
<html>

<head>
<META HTTP-EQUIV=Refresh CONTENT="60; URL=<?=$this_location ?>">
</head>

<body>

<?=$html ?>

</body>
</html>
