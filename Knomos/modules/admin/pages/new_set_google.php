<?
include("../../../framework/framework.php");

// Define page specific text for template
//$PAGE[PAGE_PICTITLE]="ico_admin_med.gif";
$PAGE[PAGE_PICTITLE]="google1.png";
$module="admin";



template_init();
template_define_elements();

ob_start();

$thisform= load_fwobject("form",$module,94);



if (isset($_GET[id]) && $_POST[form_id]!= $thisform["name"])
{
	
	$PAGE[PAGE_INTITLE]=ADMIN_SET_UPD." GOOGLE";
	$PAGE[TXT_TITLE]=ADMIN_SET_UPD." GOOGLE";
	$rs=$DB->Execute("SELECT * FROM INT_settings WHERE id=".$_GET[id]);
	$result=$rs->FetchRow();
	
	$thisform[onpost]=str_replace("type::add","type::upd",$thisform[onpost]);
	$thisform[Fields][send][content]="submit||".ADMIN_SET_UPD."||";
	$response[title]=ADMIN_SET_UPD_DONE;
	$response[text]= ADMIN_SET_UPD_DONE_TXT."<br><br>".make_button($CONF[url_base]."main.php",ADMIN_SET_BACK_LIST);

} elseif (isset($_GET[id]))
{ 
	$result=$_POST;
	$PAGE[PAGE_INTITLE]=ADMIN_SET_UPD;
	$PAGE[TXT_TITLE]=ADMIN_SET_UPD;
	$response[title]=ADMIN_SET_UPD_DONE;
	$response[text]= ADMIN_SET_UPD_DONE_TXT."<br><br>".make_button($CONF[url_base]."main.php",ADMIN_SET_BACK_LIST);
	$thisform[onpost]=str_replace("type::add","type::upd",$thisform[onpost]);
	$thisform[Fields][send][content]="submit||".ADMIN_SET_UPD."||";

} else {
	$PAGE[PAGE_INTITLE]=ADMIN_SET_ADD;
	$PAGE[TXT_TITLE]=ADMIN_SET_ADD;
	$response[title]=ADMIN_SET_ADD_DONE;
	$response[text]= ADMIN_SET_ADD_DONE_TXT."<br><br>".make_button($CONF[url_base]."main.php",ADMIN_SET_BACK_LIST);
	$thisform[Fields][send][content]="submit||".ADMIN_SET_ADD."||";
}

//echo $thisform["name"];


if ($_POST[form_id]==$thisform["name"])
{	if(isset($_POST[form_page])) {$page=$_POST[form_page];}
	else $page=1;
	$error=check_form($thisform,$_POST,$page);
//echo $error;
	if($error==1) {
		$manage=manage_post($thisform,$error,$_POST,$_GET[id]);
		$manage=6; //aggiunto per evitare l'errore
	} else print draw_form($thisform,$module,$error,$_POST,$page);
	if ($manage==1) {
		$page=($_POST[form_page]+1);
//echo $thisform["name"];echo $manage;
		print draw_form($thisform,$module,$error,$_POST,$page);
	}
	elseif ($manage > 1)
	{
		print draw_response($response);
	}
	
} else {
	//quando apre la pagina in modifica
	print draw_form($thisform,$module,"",$result);
}



$PAGE[PAGE_CONTENT] = ob_get_contents();
ob_end_clean();

final_render();

?>
