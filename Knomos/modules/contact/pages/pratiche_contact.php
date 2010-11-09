<?
include("../../../framework/framework.php");


// Define page specific text for template
$PAGE[TXT_TITLE]=CONTACT_SCHEDA;
$PAGE[PAGE_INTITLE]=CONTACT_SCHEDA;
$PAGE[PAGE_PICTITLE]="ico_clienti_med.gif";
$module="contact";

template_init(4);
template_define_elements();

ob_start();

if (check_perm_mod($module,"r")==1)
{
	$thisobj= load_fwobject("show","contact",0);
	
 $thisobj["Fields"]["prat_col"]=""; 	$thisobj["Fields"]["button_sitcont"]="";
$thisobj["Fields"]["button1"]=""; 	$thisobj["Fields"]["button2"]=""; $thisobj["Fields"]["button3"]="";
	
	print draw_object($thisobj,intval($_GET[id]),$module);
} else {
	$response[title]=FW_ERROR_NO_PERM;
	$response[text]=FW_ERROR_NO_PERM_TXT;
	$iserror=1;
	print draw_response($response);
}


$PAGE[PAGE_CONTENT] = str_replace("<p align=\"center\"> |  | </p>","",ob_get_contents());
ob_end_clean();

final_render();

?>