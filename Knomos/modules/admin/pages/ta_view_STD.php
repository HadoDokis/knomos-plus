<?
include("../../../framework/framework.php");


// Define page specific text for template
$PAGE[TXT_TITLE]=ADMIN_MENU_0_5_1_2;
$PAGE[PAGE_INTITLE]=ADMIN_MENU_0_5_1_2." (tariffario forense)";
$PAGE[PAGE_PICTITLE]="ico_admin_med.gif";
$module="admin";

template_init();
template_define_elements();

ob_start();



if (check_perm_mod($module,"r")==1)
{
	$thislist= load_fwobject("lists","admin",16);
	print draw_list($thislist,$module);
} else {
	$response[title]=FW_ERROR_NO_PERM;
	$response[text]=FW_ERROR_NO_PERM_TXT;
	$iserror=1;
	print draw_response($response);
}



$PAGE[PAGE_CONTENT] = ob_get_contents();
ob_end_clean();

final_render();

?>
