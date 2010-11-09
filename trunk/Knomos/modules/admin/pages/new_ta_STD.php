<?
include("../../../framework/framework.php");

// Define page specific text for template
$PAGE[PAGE_PICTITLE]="ico_admin_med.gif";
$module="admin";



template_init();
template_define_elements();

ob_start();

$thisform= load_fwobject("form",$module,14);



if (isset($_GET[id]) && $_POST[form_id]!= $thisform["name"])
{
	
	$PAGE[PAGE_INTITLE]=ADMIN_TA_UPD." (tariffario forense)";
	$PAGE[TXT_TITLE]=ADMIN_TA_UPD;
	$rs=$DB->Execute("SELECT * FROM INT_tariffe_STD WHERE id=".$_GET[id]);
	$result=$rs->FetchRow();
	
	$thisform[onpost]=str_replace("type::add","type::upd",$thisform[onpost]);
	$thisform[Fields][send][content]="submit||".ADMIN_TA_UPD."||";
	$response[title]=ADMIN_TA_UPD_DONE;
	$response[text]= ADMIN_TA_UPD_DONE_TXT."<br><br>".make_button("ta_view_STD.php",ADMIN_TA_BACK_LIST);

} elseif (isset($_GET[id]))
{ 
	$result=$_POST;
	$PAGE[PAGE_INTITLE]=ADMIN_TA_UPD." (tariffario forense)";
	$PAGE[TXT_TITLE]=ADMIN_TA_UPD;
	$response[title]=ADMIN_TA_UPD_DONE;
	$response[text]= ADMIN_TA_UPD_DONE_TXT."<br><br>".make_button("ta_view_STD.php",ADMIN_TA_BACK_LIST);
	$thisform[onpost]=str_replace("type::add","type::upd",$thisform[onpost]);
	$thisform[Fields][send][content]="submit||".ADMIN_TA_UPD."||";

} else {
	$PAGE[PAGE_INTITLE]=ADMIN_TA_ADD." (tariffario forense)";
	$PAGE[TXT_TITLE]=ADMIN_TA_ADD;
	$response[title]=ADMIN_TA_ADD_DONE;
	$response[text]= ADMIN_TA_ADD_DONE_TXT."<br><br>".make_button("ta_view_STD.php",ADMIN_TA_BACK_LIST);
	$thisform[Fields][send][content]="submit||".ADMIN_TA_ADD."||";
}




if ($_POST[form_id]==$thisform["name"])
{	if(isset($_POST[form_page])) {$page=$_POST[form_page];}
	else $page=1;
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
		print draw_response($response);
	}
	
} else {
	print draw_form($thisform,$module,"",$result);
}



$PAGE[PAGE_CONTENT] = ob_get_contents();
ob_end_clean();

final_render();

?>
