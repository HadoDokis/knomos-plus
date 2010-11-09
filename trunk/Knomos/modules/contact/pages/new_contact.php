<?
include("../../../framework/framework.php");
include("../functions.php");
ob_start();
// Define page specific text for template
$PAGE[PAGE_PICTITLE]="ico_clienti_med.gif";
$module="contact";

if ($_SESSION[mobile]==true){
	template_init(6); //mobile=6 - normale=2
} 
 else {
	if(isset($_GET['openpop']) && $_GET['openpop'] = 1)
	{
		template_init(4);
	}	else {
		template_init();
	} //mobile=6 - normale=2
}
	
//template_init(); //mobile=6 - desktop =()
template_define_elements();



//Load the form
$thisform= load_fwobject("form","contact",0);


if (isset($_GET[id]) && $_POST[form_id]!= $thisform["name"])
{
	$PAGE[PAGE_INTITLE]=CONTACT_UPD_CONTACT;
	$PAGE[TXT_TITLE]=CONTACT_UPD_CONTACT;
	
	if (check_perm_obj($module,$_GET[id],"w"))
	{ 
		$rs=$DB->Execute("SELECT * FROM $module WHERE id=".$_GET[id]);
		$result=$rs->FetchRow();
		$thisform[onpost]=str_replace("type::add","type::upd",$thisform[onpost]);
		$thisform[Fields][send][content]="submit||".CONTACT_UPD_CONTACT."||";
		$response[title]=CONTACT_UPD_DONE;
		$response[text]= CONTACT_UPD_DONE."<br><br>".make_button("contacts_view.php",CONTACT_BACK_LIST);

	}else {
		$response[title]=FW_ERROR_NO_PERM;
		$response[text]=FW_ERROR_NO_PERM_TXT;
		$iserror=1;
		print draw_response($response);
	}
	
} elseif (isset($_GET[id]))
{
	$PAGE[PAGE_INTITLE]=CONTACT_UPD_CONTACT;
	$PAGE[TXT_TITLE]=CONTACT_UPD_CONTACT;

	if (check_perm_obj($module,$_GET[id],"w"))
	{ 
	$ad="upd";
		$result=$_POST;
		$response[title]=CONTACT_UPD_DONE;
		$response[text]= CONTACT_UPD_DONE."<br><br>".make_button("contacts_view.php",CONTACT_BACK_LIST);
		$thisform[onpost]=str_replace("type::add","type::upd",$thisform[onpost]);
		$thisform[Fields][send][content]="submit||".CONTACT_UPD_CONTACT."||";
	} else {
		$response[title]=FW_ERROR_NO_PERM;
		$response[text]=FW_ERROR_NO_PERM_TXT;
		$iserror=1;
		print draw_response($response);
	}

} else {
	$PAGE[PAGE_INTITLE]=CONTACT_MENU_0_2;
	$PAGE[TXT_TITLE]=CONTACT_MENU_0_2;
	$result[permessi]="U".$_SESSION[fw_userid]."=6";
		
	if (check_perm_mod($module,"c")==1)
	{
		if ($_POST[form_id]== $thisform["name"]) $result=$_POST;
		else {
			$result[permessi]="U".$_SESSION[fw_userid]."=6";
		}
		$ad="add";
		$response[title]=CONTACT_ADD_DONE;
		$response[text]= CONTACT_ADD_DONE."<br><br>".make_button("contacts_view.php",CONTACT_BACK_LIST);
	} else {
		$response[title]=FW_ERROR_NO_PERM;
		$response[text]=FW_ERROR_NO_PERM_TXT;
		$iserror=1;
		print draw_response($response);
	}

}

if ($iserror!=1){
	
	if ($_POST[form_id]==$thisform["name"])
	{	if(isset($_POST[form_page])) {$page=$_POST[form_page];}
		else $page=1;
		
		if ($_POST[tipo][0]!=2)
		{
			$thisform[Fields][indirizzo][er_check]="";
			$thisform[Fields][citta][er_check]="";
			$thisform[Fields][accountm][er_check]="";
			$thisform[Fields][cap][er_check]="";
		}
		
		$error=check_form($thisform,$_POST,$page);
		if($error==1) {
			$manage=manage_post($thisform,$error,$_POST,$_GET[id]);
		} else print draw_form($thisform,$module,$error,$_POST,$page);
		if ($manage==1) {
			$page=($_POST[form_page]+1);
			print draw_form($thisform,$module,$error,$_POST,$page);
		}
		elseif ($manage > 1)
		{
			header("location: contact_show.php?id=$manage&actdone=$ad");
			die();
			print draw_response($response);
		}
		
	} else {
		print draw_form($thisform,$module,"",$result);
	}

}

$PAGE[PAGE_CONTENT] = ob_get_contents();
ob_end_clean();

final_render();

?>
