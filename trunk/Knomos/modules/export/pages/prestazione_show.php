<?
include("../../../framework/framework.php");


// Define page specific text for template
$PAGE[TXT_TITLE]=PRESTAZIONI_MENU_0;
$PAGE[PAGE_INTITLE]=PRESTAZIONI_MENU_0;
$PAGE[PAGE_PICTITLE]="ico_clienti_med.gif";
$module="prestazioni";

if ($CONF[knomos_mobile]==true){
	template_init(6); //mobile=6 - normale=2
} 
 else {
	template_init(); //mobile=6 - normale=2
}
	
//template_init(); //mobile=6 - desktop =()
template_define_elements();

ob_start();



$thisobj= load_fwobject("show","prestazioni",0);
print draw_object($thisobj,intval($_GET[id]),$module);




$PAGE[PAGE_CONTENT] = ob_get_contents();
ob_end_clean();

final_render();

?>
