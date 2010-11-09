<?
include("../../../framework/framework.php");
include("../functions.php");


// Define page specific text for template
$PAGE[TXT_TITLE]=PRATICHE_MENU_0;
$PAGE[PAGE_INTITLE]=PRATICHE_MENU_0;
$PAGE[PAGE_PICTITLE]="ico_prat_med.gif";
$module="pratiche";

if ($_SESSION[mobile]==true){
	template_init(6); //mobile=6 - normale=2
} 
 else {
	template_init(); //mobile=6 - normale=2
}
	
//template_init(); //mobile=6 - desktop =()

ob_start();

//Update last viewed
insert_last_viewed($_GET[id],$module);

if ($_GET[actdone]=="upd")
{
	$rspact[title]=PRATICHE_UPD_DONE;
	print draw_response($rspact);	
} elseif ($_GET[actdone]=="add")
{
	$rspact[title]=PRATICHE_ADD_DONE;
	print draw_response($rspact);	
}


if (check_perm_obj($module,$_GET[id],"r"))
{
	$PAGE_ELEMENT[PAGE][1][0][param]=$_GET[id];
	


} else {
	$response[title]=FW_ERROR_NO_PERM;
	$response[text]=FW_ERROR_NO_PERM_TXT;
	$iserror=1;
	print draw_response($response);
}
	


$PAGE[PAGE_CONTENT] = ob_get_contents();
ob_end_clean();
template_define_elements();

final_render();

?>
