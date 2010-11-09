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
//  Session management
//


function fw_init_session($id=-1)
{
	GLOBAL $CONF, $CONF_PAGE,$DB;
	
	if ($id==-1) $id=$CONF[session_default_user];
	
	if ($CONF[session_start] != "never") {
		session_start();
		$_SESSION[fw_session_started]=1;
	}
	
	$table_to_load=explode(",,",$CONF[session_table_preload]);

	foreach ($table_to_load as $tab_init) {
		unset($rs);
		if (strstr($tab_init,"||")) {
			$table_init_options=explode("||",$tab_init);
			$sql="SELECT * FROM ".$table_init_options[0]." WHERE ".$table_init_options[1]."=$id";
			$rs=$DB->Execute($sql);
			if ($rs) {
				$_SESSION[$table_init_options[0]]=$rs->FetchRow();
			}
		
		} else {
			$sql="SELECT * FROM ".$table_init_options[0]."order by id asc";
			$rs=$DB->Execute($sql);
			if ($rs) {
				$_SESSION[$table_init_options[0]]=$rs->GetArray();
			}
		}
		
	}
		
}

if ($CONF[session_start]!="never") {
	session_start();
	if ($CONF[session_start]=="onauth" && !$_SESSION[fw_logged]) {
		session_unset();
	} elseif ($CONF[session_start]=="always" && !$_SESSION[fw_session_started]) {
		session_unset();
		fw_init_session();
	}
}

?>