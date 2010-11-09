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
//  Loggin Functions
//


//Check if logging is enabled
if ($CONF[log_enable]=="yes") {
	
	//Get Array of Error to log
	$log_trigger=explode(",",$CONF[log_trigger]);
	//Get Array of Error to mail
	$log_mail_trigger=explode(",",$CONF[log_mail_trigger]);
	//Get Array of Error to debug
	$log_debug_trigger=explode(",",$CONF[log_debug_trigger]);
	//Get Array of Error to show
	$log_show_trigger=explode(",",$CONF[log_show_trigger]);
	
	//Set new error handler
	$old_handler = set_error_handler("fw_error_handler");
}	



//Error Handling Function 
//Get standard variables from PHP
function fw_error_handler($errno, $errstr, $errfile, $errline, $vars)
{
	global $DB,$CONF,$log_trigger,$log_mail_trigger,$log_debug_trigger,$log_show_trigger;
	

	$error_time=date($CONF[date_format].' '.$CONF[time_format]);
	
	$error_desc=Array(
		E_WARNING 	=>	"Warning",
		E_NOTICE 	=>	"Notice",
		E_USER_ERROR	=>	"User Error",
 		E_USER_WARNING	=>	"User Warning",
 		E_USER_NOTICE	=>	"User Notice"
    	);

	
	
	//Check if it's a type of error we should log
	if (in_array($errno,$log_trigger)) {

		//Check if we have to debug
		if (in_array($errno,$log_debug_trigger)) {
			$debug_info=serialize($vars);
		}


		//Let's log the error according to config file	
		switch ($CONF[log_type]) {
			case "file":
				$log_file=fopen($CONF[path_base].$CONF[dir_log].$CONF[log_target],"a");
				fwrite ($log_file,"\r\n--- ".$error_time." - ".$error_desc[$errno]."\r\n");
				fwrite ($log_file,$errstr." - ".str_replace($CONF[path_base],"",str_replace("\\","/",$errfile))." Line: ".$errline."\r\n");
				if (isset($debug_info)) fwrite($log_file,"\r\nDebug: ".$debug_info."\r\n");
				fwrite ($log_file,"---\r\n");
				fclose($log_file);
				break;
			case "db":
				$sql="INSERT INTO ".$CONF[log_target]." (date_log,error_number,error_desc,error_file,error_line_num,debug) VALUES (NOW(),$errno,".$DB->qstr($errstr).",'".str_replace($CONF[path_base],"",str_replace("\\","/",$errfile))."',$errline,".$DB->qstr($debug_info).")";
				$DB->Execute($sql);
				break;
		}
	
		//Check if we have to send a mail
		if (in_array($errno,$log_mail_trigger)) {
			mail($CONF[log_mail],"Error report","\r\n--- ".$error_time." - ".$error_desc[$errno]."\r\n".$errstr." - ".str_replace($CONF[path_base],"",str_replace("\\","/",$errfile))." Line: ".$errline."\r\nDebug: ".$debug_info."\r\n"."---\r\n");
		}
	
	
	}	
	
	//Display Error to the user
	if (in_array($errno,$log_show_trigger)) {
		$out="<b>".$error_desc[$errno]." :</b> $errstr on ".str_replace($CONF[path_base],"",str_replace("\\","/",$errfile))." line $errline";
	}

}

function log_event($type,$module,$id)
{
	GLOBAL $CONF;
	if ($type=="C" && $CONF[log_event_create]=="yes")
	{
				$log_file=@fopen($CONF[path_base].$CONF[dir_log].$CONF[log_event_file],"a");
				@fwrite ($log_file,"[".date("d/m/Y - H:i")."] - User ".$_SESSION[user][nome]." CREATED object $id on table $module ---\r\n");
				@fclose($log_file);
				return 1;
	} elseif ($type=="U" && $CONF[log_event_update]=="yes")
	{
				$log_file=@fopen($CONF[path_base].$CONF[dir_log].$CONF[log_event_file],"a");
				@fwrite ($log_file,"[".date("d/m/Y - H:i")."] - User ".$_SESSION[user][nome]." UPDATED object $id on table $module ---\r\n");
				@fclose($log_file);
				return 1;		
	} elseif ($type=="D" && $CONF[log_event_delete]=="yes")
	{
				$log_file=@fopen($CONF[path_base].$CONF[dir_log].$CONF[log_event_file],"a");
				@fwrite ($log_file,"[".date("d/m/Y - H:i")."] - User ".$_SESSION[user][nome]." DELETED object $id from table $module ---\r\n");
				@fclose($log_file);
				return 1;
	} elseif ($type=="S" && $CONF[log_event_show]=="yes")
	{
				$log_file=@fopen($CONF[path_base].$CONF[dir_log].$CONF[log_event_file],"a");
				@fwrite ($log_file,"[".date("d/m/Y - H:i")."] - User ".$_SESSION[user][nome]." VIEWED object $id from table $module ---\r\n");
				@fclose($log_file);
				return 1;
	} elseif ($type=="L" && $CONF[log_event_login]=="yes")
	{
				$log_file=@fopen($CONF[path_base].$CONF[dir_log].$CONF[log_event_file],"a");
				@fwrite ($log_file,"[".date("d/m/Y - H:i")."] - User ".$_SESSION[user][nome]." LOGGED in from ".$_SERVER[REMOTE_ADDR]." ---\r\n");
				@fclose($log_file);
				return 1;
	}
	
}

?>