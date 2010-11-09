<?
include("../../../framework/framework.php");
include("../functions.php");

// Define page specific text for template
$PAGE[TXT_TITLE]=CONTACT_MENU_0;
$PAGE[PAGE_INTITLE]=CONTACT_MENU_0."
&nbsp;&nbsp;<span > ( <a href=\"".$CONF[url_base].$CONF[dir_modules]."/contact/pages/new_contact.php"."\">".CONTACT_MENU_0_2."</a> )";
$PAGE[PAGE_PICTITLE]="ico_clienti_med.gif";
$module="contact";

if ($_SESSION[mobile]==true){
	template_init(6); //mobile=6 - normale=2
} 
 else {
	template_init(); //mobile=6 - normale=2
}
	
//template_init(); //mobile=6 - desktop =()
template_define_elements();

ob_start();

//Include Form

if ($_GET[action]=="del" )
{
	if (check_perm_mod($module,"d")==1)
	{
		if($DB->Execute("DELETE FROM $module WHERE id=".$_GET[id]))
		{
			$res_del[title]=FW_DEL_OK;
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
	$thissearch= load_fwobject("search",$module,0);
	$error=check_form($thissearch[form],$_GET,$page);
	print draw_form($thissearch[form],$module,"",$_GET);
	print menage_search($thissearch[search]);
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
