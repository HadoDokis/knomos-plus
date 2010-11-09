<?
include("../../../framework/framework.php");


// Define page specific text for template
$PAGE[TXT_TITLE]=ADMIN_MENU_0_8;
$PAGE[PAGE_INTITLE]=ADMIN_MENU_0_8;
$PAGE[PAGE_PICTITLE]="ico_admin_med.gif";
$module="admin";

template_init();
template_define_elements();

ob_start();


if ($_GET[id]>0 )
{
	if (check_perm_mod($module,"d")==1)
	{
		if($DB->Execute("UPDATE users SET last_action='', sid='' WHERE id=".$_GET[id]))
		{
			$res_del[title]=ADMIN_USER_DISCONNECT;
			print draw_response($res_del);
		} else {
			$res_del[title]=FW_DEL_KO;
			print draw_response($res_del);
		}
			
		
	} else {
		$res_del[title]=FW_ERROR_NO_PERM_DEL;
		print draw_response($res_del);
	}	
	
}



if (check_perm_mod($module,"r")==1)
{
	$thislist= load_fwobject("lists","admin",11);
	
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