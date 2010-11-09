<?
include("../../../framework/framework.php");

// Define page specific text for template
$PAGE[PAGE_PICTITLE]="ico_admin_med.gif";
$module="admin";
$PAGE[PAGE_INTITLE]="Collega utenti";
$PAGE[TXT_TITLE]="Collega utenti";

if ($_SESSION[mobile]==true){
	template_init(6); //mobile=6 - normale=2
} 
 else {
	template_init(); //mobile=6 - normale=2
}
	
//template_init(); //mobile=6 - desktop =()
template_define_elements();

ob_start();

$thisform= load_fwobject("form",$module,3);


$PAGE[PAGE_CONTENT] = '<div><iframe frameBorder="0" src="'.$CONF[asp_net].'UtentiCalendar.aspx?id='.session_id().'"  width="100%" height="1000" >prova collegamento</iframe></div>';
ob_end_clean();

final_render();

?>


