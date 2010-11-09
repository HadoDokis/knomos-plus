<?
include("../../../framework/framework.php");

// Define page specific text for template
$PAGE[PAGE_PICTITLE]="ico_clienti_med.gif";
$module="pratiche";



if ($_SESSION[mobile]==true){
	template_init(6); //mobile=6 - normale=2
} 
 else {
	template_init(); //mobile=6 - normale=2
}
	
//template_init(); //mobile=6 - desktop =()

template_define_elements();

ob_start();




$thisform= load_fwobject("form","pratiche",1);



if (isset($_GET[id]) &&  isset($_GET[type]))
{
		$rs=$DB->Execute("SELECT * FROM note WHERE ref_id=".$_GET[id]." AND type='".$_GET[type]."'");
		if($result=$rs->FetchRow())
		{
			$PAGE[PAGE_INTITLE]=NOTE_UPD;
			$PAGE[TXT_TITLE]=NOTE_UPD;
			$thisform[onpost]=str_replace("type::add","type::upd",$thisform[onpost]);
			$thisform[Fields][send][content]="submit||".NOTE_UPD."||";
		} else {
			$PAGE[PAGE_INTITLE]=NOTE_ADD;
			$PAGE[TXT_TITLE]=NOTE_ADD;
			$response[title]=NOTE_ADD_DONE;
			$response[text]= NOTE_ADD_DONE_TXT."<br><br>".make_button("pratiche_view.php",PRATICHE_BACK_LIST);			
		}

	

	if ($_POST[form_id]==$thisform["name"])
	{	if(isset($_POST[form_page])) {$page=$_POST[form_page];}
		else $page=1;
		$error=check_form($thisform,$_POST,$page);
		if($error==1) {
			$manage=manage_post($thisform,$error,$_POST,$_GET[id]);
		} else print draw_form($thisform,$module,$error,$_POST,$page);
		if ($manage==1) {
			$page=($_POST[form_page]+1);
			print draw_form($thisform,$module,$error,$_POST,$page);
		}
		elseif ($manage > 1)
		{
			print draw_response($response);
		}
	
	} else {
		print draw_form($thisform,$module,"",$result);
	}
}


$PAGE[PAGE_CONTENT] = ob_get_contents();
ob_end_clean();

final_render();

?>
