<?
include("../../../framework/framework.php");

// Define page specific text for template
$PAGE[TXT_TITLE]=CALENDAR_MENU_0;
$PAGE[PAGE_INTITLE]=CALENDAR_MENU_0;
$PAGE[PAGE_PICTITLE]="ico_calendar_med.gif";
$module="admin";

template_init(4);
template_define_elements();

ob_start();

//Include Form



	$thissearch= load_fwobject("search",$module,2);
	if ($_GET[form_id]==$thissearch[form][name] ){
		print draw_form($thissearch[form],$module,$error,$_GET);
	} else print draw_form($thissearch[form]);
	
	print menage_search($thissearch[search]);




$PAGE[PAGE_CONTENT] = ob_get_contents();
ob_end_clean();

final_render();

?>