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
//  Authentication management
//


//check for user authentication via database
function check_auth_db() 
{
	GLOBAL $DB,$CONF,$CONF_PAGE;
	
	switch ($CONF[auth_pass_type]) {
		case "clear":
			$password=$_POST[password];
			break;
		case "md5":
			$password=md5($_POST[password]);
			break;
		
	}
	
	$sql="SELECT * FROM ".$CONF[auth_db_table]." WHERE ".$CONF[auth_login_field]."=".$DB->qstr($_POST[login])." AND ".$CONF[auth_pass_field]."=".$DB->qstr($password);
	$query=$DB->Execute($sql);
	if (!$query) trigger_error (FW_ERROR_AUTHQUERY,E_USER_ERROR);
	if ($query->RecordCount()==0) {return 0;}
	else {
		//Is the user already logged in ?
		if ($query->fields[last_action] != '0000-00-00 00:00:00' && md5($query->fields['sid']) != $_COOKIE[knomos_login] && $query->fields[admin] !=1 )
		{
			return -1;
		}
		
		$result[auth]=1;
		//Do we have to check for user language ?
		if (strlen($CONF[auth_check_lang_field])>0) 
		{
			$result[lang]=$query->fields[$CONF[auth_check_lang_field]];
		}
		//Do we have to check for user template?
		if (strlen($CONF[auth_check_templ_field])>0) 
		{
			$result[templ]=$query->fields[$CONF[auth_check_templ_field]];
		}
		$result[id]=$query->fields[id];
		$_SESSION[user]=$query->FetchRow();
		$_SESSION[history]=$_POST[history];

		return $result;
	}

}


//Manage authentication procedure
function manage_auth()
{
	GLOBAL $CONF,$CONF_PAGE,$DB;
		
	if (!isset($_POST["login"]) && !isset($_POST["password"]) && ($CONF[auth_required]=="always" || ($CONF_PAGE[auth_required]=="yes" && $CONF[auth_required]=="perpage")) && !$_SESSION[fw_logged]) 
	{
		header("location: ".$CONF[url_base].$CONF[auth_login_page]."?post_login=".urlencode($_SERVER[REQUEST_URI]));
		die();
	} elseif (isset($_POST["login"]) && isset($_POST["password"])) {
		switch ($CONF[auth_type]) {
			case "db":
				$auth_check=check_auth_db();
				break;
			//ADD here other auth method like ldap
		}
		//If Auth Failed send back to login page with failed=1 flag
		if (!$auth_check)
		{
			header("location: ".$CONF[url_base].$CONF[auth_login_page]."?failed=1");
			die();
		} elseif ($auth_check==-1)
		{
			header("location: ".$CONF[url_base].$CONF[auth_login_page]."?alreadyin=1");
			die();
		}else {
			
			//Start Session, check for page to open after login, set language and template
			fw_init_session($auth_check[id]);
			
			//Set user as logged
			$_SESSION[fw_logged]=1;
			$_SESSION[fw_userid]=$auth_check[id];
			
			// Set user as logged in
			$DB->Execute("UPDATE users SET last_action=NOW(), sid='".session_id()."' WHERE id=".$auth_check[id] );
			
			// LOG Access
			log_event("L","","");
			
			// Redefine language. Since we user Constant for language definition, new language will be applied only after the forward.
			if (strlen($auth_check[lang]) > 0) {
				$CUR_LANG=$auth_check[lang];
				$_SESSION[cur_lang]=$auth_check[lang];
			}
			
			//REDEFINE TEMPLATE HERE !!!!
			if (strlen($auth_check[template]) > 0) {
				$CUR_TEMPL=$auth_check[template];
				$_SESSION[cur_templ]=$auth_check[template];
			}
			
			//Check for user group if CONF is set
			if (isset($CONF[auth_group_table]))
			{
				$group_query=$DB->Execute("SELECT groupid FROM ".$CONF[auth_group_table]." WHERE userid=".$auth_check[id]);
				if($group_query && $group_query->RecordCount() > 0) {
					$cnt=0;
					while (!$group_query->EOF) {
						if($cnt > 0) { $group.=",";}
						$group.=$group_query->fields[groupid];
						$cnt++;
						$group_query->MoveNext();
					}
				}
				$_SESSION[fw_user_groups]=$group;
			}
						
			if (strlen($_GET[post_login])>0) {

					header("location: ".$CONF[url_base].ereg_replace("^".quotemeta($CONF[abs_url]),'',urldecode($_GET[post_login]))); 
			} elseif (strlen($CONF[auth_force_home])>0) {
				//originale
				//header("location: ".$CONF[url_base].$CONF[auth_force_home]);

				//modifica knomos plus
				if ($_POST[mobile]==1){$_SESSION[mobile]=true;} else {$_SESSION[mobile]=false;}
				header("location: ".$CONF[url_base].$CONF[auth_force_home]);
			//header("location: ".$CONF[url_base].$CONF[auth_force_home]."?modalita=".$_POST[modalita]."--".$_SESSION[mobile]);//per test

			}
		}
	}

}
?>
