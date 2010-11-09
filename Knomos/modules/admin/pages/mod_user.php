<?
include("../../../framework/framework.php");

// Define page specific text for template
$PAGE[PAGE_PICTITLE]="ico_admin_med.gif";
$module="admin";
$PAGE[PAGE_INTITLE]=ADMIN_USER_ADD;
$PAGE[TXT_TITLE]=ADMIN_USER_ADD;



template_init();
template_define_elements();

ob_start();

if ($_GET[action]=="cp")
{
	
	print "<b>".ADMIN_USER_PWCHANGE."</b><br><br>";
	
}

if (!isset($_GET[id])) $_GET[id]=$_SESSION[fw_userid];

if ($_SESSION[user][admin]==1)
{
	$thisform= load_fwobject("form",$module,0);
} else 	$thisform= load_fwobject("form",$module,6);
	
	
	if (isset($_GET[id]) && $_POST[form_id]!= $thisform["name"])
	{
		
		$PAGE[PAGE_INTITLE]=ADMIN_USER_UPD;
		$PAGE[TXT_TITLE]=ADMIN_USER_UPD;
		$rs=$DB->Execute("SELECT * FROM ".$CONF[auth_db_table]." WHERE id=".$_GET[id]);
		$result=$rs->FetchRow();
		
		if ($_SESSION[user][admin]==1)
		{
		
			$rsg=$DB->Execute("SELECT * FROM ".$CONF[auth_group_table]." WHERE userid=".$_GET[id]);
			
			while (!$rsg->EOF)
			{
				$g=$rsg->FetchRow();
				$gruppi[]=$g[groupid];
			}
	
			$result[gruppi]=$gruppi;
		}
		
		$thisform[onpost]=str_replace("type::add","type::upd",$thisform[onpost]);
		$thisform[Fields][send][content]="submit||".ADMIN_USER_UPD."||";
		$response[title]=ADMIN_USER_UPD_DONE;
		$response[text]= ADMIN_USER_UPD_DONE_TXT."<br><br>".make_button("users_view.php",ADMIN_USER_BACK_LIST);
	
	} elseif (isset($_GET[id]))
	{ 
		$result=$_POST;
		$PAGE[PAGE_INTITLE]=ADMIN_USER_UPD;
		$PAGE[TXT_TITLE]=ADMIN_USER_UPD;
		$response[title]=ADMIN_USER_UPD_DONE;
		if ($_SESSION[user][admin]==1)
		{	
			$response[text]= ADMIN_USER_UPD_DONE_TXT."<br><br>".make_button("users_view.php",ADMIN_USER_BACK_LIST);
		} else $response[text]= ADMIN_USER_UPD_DONE_TXT."<br><br>".make_button($CONF[abs_url]."main.php",ADMIN_USER_BACK_MAIN);

		$thisform[onpost]=str_replace("type::add","type::upd",$thisform[onpost]);
		$thisform[Fields][send][content]="submit||".ADMIN_USER_UPD."||";
	
	} else {
		$PAGE[PAGE_INTITLE]=ADMIN_USER_ADD;
		$PAGE[TXT_TITLE]=ADMIN_USER_ADD;
		$response[title]=ADMIN_USER_ADD_DONE;
		$response[text]= ADMIN_USER_ADD_DONE_TXT."<br><br>".make_button("users_view.php",ADMIN_USER_BACK_LIST);
	}
	
	
	
	
	if ($_POST[form_id]==$thisform["name"])
	{	if(isset($_POST[form_page])) {$page=$_POST[form_page];}
		else $page=1;
		$_POST[last_pw_change]=date("Y-m-d");
		$_SESSION[user][last_pw_change]=date("Y-m-d");
		$error=check_form($thisform,$_POST,$page);
		if($error==1) {
			$manage=manage_post($thisform,$error,$_POST,$_GET[id]);
		} else print draw_form($thisform,$module,$error,$_POST,$page);
	if ($manage >= 1)
		{

			$rsg=$DB->Execute("DELETE FROM ".$CONF[auth_group_table]." WHERE userid=".$manage);
			
			if ($_SESSION[user][admin]==1)
			{
				if (is_array($_POST[gruppi]))
				{
					foreach($_POST[gruppi] as $gru)
					{
						$DB->Execute("INSERT INTO ".$CONF[auth_group_table]." SET groupid='$gru', userid='".$manage."'");
					}
				}
			}
		
			print draw_response($response);
		}
		
	} else {
		print draw_form($thisform,$module,"",$result);
	}



$PAGE[PAGE_CONTENT] = ob_get_contents();
ob_end_clean();

final_render();

?>