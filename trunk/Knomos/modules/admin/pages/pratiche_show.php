<?
include("../../../framework/framework.php");


// Define page specific text for template
$PAGE[TXT_TITLE]=PRATICHE_MENU_0;
$PAGE[PAGE_INTITLE]=PRATICHE_MENU_0;
$PAGE[PAGE_PICTITLE]="ico_clienti_med.gif";
$module="pratiche";

template_init();
template_define_elements();

ob_start();





$thisobj= load_fwobject("show","pratiche",0);
print draw_object($thisobj,intval($_GET[id]),$module);




$PAGE[PAGE_CONTENT] = ob_get_contents();
ob_end_clean();

final_render();

?>