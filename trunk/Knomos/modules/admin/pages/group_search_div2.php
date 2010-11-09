<?
include("../../../framework/framework.php");

// Define page specific text for template
$module="admin";

template_init(4);
template_define_elements();

ob_start();

//Include Form



	$thissearch= load_fwobject("search",$module,5);
	
	
	if ($_GET[form_id]==$thissearch[form][name] ){
		print draw_form($thissearch[form],$module,$error,$_GET);
	} else print draw_form($thissearch[form]);
	
	print menage_search($thissearch[search]);




$PAGE[PAGE_CONTENT] = ob_get_contents();
ob_end_clean();

final_render();

?>