<?
include("framework/framework.php");


// Define page specific text for template
$PAGE[TXT_TITLE]=FW_SEARCH;
$PAGE[PAGE_INTITLE]=FW_SEARCH;
$PAGE[PAGE_PICTITLE]="ico_cercare_med.gif";
$module="pratiche";

if ($_SESSION[mobile]==true){
	template_init(6); //mobile=6 - normale=2
} 
 else {
	template_init(); //mobile=6 - normale=2
}

//template_init();
template_define_elements();

ob_start();


if (check_perm_mod($module,"r")==1)
{
	$thissearch= load_fwobject("search","pratiche",2);

	if ($_GET[form_id]==$thissearch[form][name] ){
		$error=check_form($thissearch[form],$_GET,$page);
		if($error==1) {	
			print draw_form($thissearch[form],$module,$error,$_GET);
			print menage_search($thissearch[search]);
		} else print draw_form($thissearch[form],$module,$error,$_GET);
		
		} else 
		{print draw_form($thissearch[form]);
		 //print menage_search($thissearch[search]);
		}


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
