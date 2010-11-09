<?
ob_start();
include("../../../framework/framework.php");
include ("../functions.php");
// Define page specific text for template
$PAGE[PAGE_PICTITLE]="ico_prat_med.gif";
$module="pratiche";

if ($_SESSION[mobile]==true){
	template_init(6); //mobile=6 - normale=2
}
else {
	template_init(); //mobile=6 - normale=2
}

$thisform= load_fwobject("form","pratiche",0);

if (isset($_GET[id]) && $_POST[form_id]!= $thisform["name"])
{
	$PAGE[PAGE_INTITLE]=PRATICHE_UPD;
	$PAGE[TXT_TITLE]=PRATICHE_UPD;
	$PAGE_ELEMENT[PAGE][1][0][param]=$_GET[id];

	if (check_perm_obj($module,$_GET[id],"w"))
	{
		insert_last_viewed($_GET[id],$module);
		$rs=$DB->Execute("SELECT * FROM $module WHERE id=".$_GET[id]);
		$result=$rs->FetchRow();
		if ($result[pr_valore] < 0) $result[pr_valore_ignore]=$result[pr_valore];
		$thisform[onpost]=str_replace("type::add","type::upd",$thisform[onpost]);
		$thisform[Fields][send][content]="submit||".PRATICHE_UPD."||";
		$response[title]=PRATICHE_UPD_DONE;
		$response[text]= PRATICHE_UPD_DONE_TXT."<br><br>".make_button("pratiche_view.php",PRATICHE_BACK_LIST);

	} else {
		$response[title]=FW_ERROR_NO_PERM;
		$response[text]=FW_ERROR_NO_PERM_TXT;
		$iserror=1;
		print draw_response($response);
	}

} elseif (isset($_GET[id]))
{
	$PAGE[PAGE_INTITLE]=PRATICHE_UPD;
	$PAGE[TXT_TITLE]=PRATICHE_UPD;
	$PAGE_ELEMENT[PAGE][1][0][param]=$_GET[id];

	if (check_perm_obj($module,$_GET[id],"w"))
	{
		$ad="upd";
		$result=$_POST;
		$thisform[Fields][pr_data_mod][content]="hidden||".date(Y-m-d)."||";
		$response[title]=PRATICHE_UPD_DONE;
		$response[text]= PRATICHE_UPD_DONE_TXT."<br><br>".make_button("pratiche_view.php",PRATICHE_BACK_LIST);
		$thisform[onpost]=str_replace("type::add","type::upd",$thisform[onpost]);
		$thisform[Fields][send][content]="submit||".PRATICHE_UPD."||";
	} else {
		$response[title]=FW_ERROR_NO_PERM;
		$response[text]=FW_ERROR_NO_PERM_TXT;
		$iserror=1;
		print draw_response($response);
	}

} else {

	$PAGE[PAGE_INTITLE]=PRATICHE_ADD;
	$PAGE[TXT_TITLE]=PRATICHE_ADD;
	$ad="add";
	if (check_perm_mod($module,"c")==1 && ($_SESSION[user][admin]==1 || $_SESSION[user][pratiche_add]==1))
	{
		if ($_POST[form_id]== $thisform["name"]) $result=$_POST;
		else {
			$result[permessi]="U".$_SESSION[fw_userid]."=66666";
		}

		$thisform[Fields][pr_numero][content]="hidden||".get_first_prat()."||";
		$thisform[Fields][pr_data_ins][content]="hidden||".date("Y-m-d")."||";
		$thisform[Fields][pr_data_mod][content]="hidden||".date("Y-m-d")."||";
		$thisform[Fields][send][content]="submit||".PRATICHE_ADD."||";
		$response[title]=PRATICHE_ADD_DONE;
		$response[text]= PRATICHE_ADD_DONE_TXT."<br><br>".make_button("pratiche_view.php",PRATICHE_BACK_LIST);
	} else {
		$response[title]=FW_ERROR_NO_PERM;
		$response[text]=FW_ERROR_NO_PERM_TXT;
		$iserror=1;
		print draw_response($response);
	}

}

if ($iserror!=1){

	if ($_POST[pr_valore] == 0  )
	{
		$_POST[pr_valore]=$_POST[pr_valore_ignore];
	}

	if ($_POST[form_id]==$thisform["name"])
	{	if(isset($_POST[form_page])) {$page=$_POST[form_page];}
	else $page=1;
	$_POST[pr_criterio]=strtoupper($_POST[pr_criterio]);
	$error=check_form($thisform,$_POST,$page);

	if($error==1) {
			
		$_POST[pr_data_mod]=date("Y-m-d");
		$manage=manage_post($thisform,$error,$_POST,$_GET[id]);
	} else 
	{ 
		print draw_form($thisform,$module,$error,$_POST,$page);
	}
	if ($manage==1) {
		$page=($_POST[form_page]+1);
		print draw_form($thisform,$module,$error,$_POST,$page);
	}
	elseif ($manage > 1)
	{
		$PAGE_ELEMENT[PAGE][1][0][param]=$manage;
		insert_last_viewed($manage,$module);
			
		header("location: pratiche_show.php?id=$manage&actdone=$ad");
		die();
			
		$response[text].=" &nbsp;&nbsp;&nbsp;".make_button("pratiche_show.php?id=$manage",PRATICHE_BACK_SHOW);
		print draw_response($response);
	}

	} else {
		print draw_form($thisform,$module,"",$result);
	}

}

$PAGE[PAGE_CONTENT] = ob_get_contents();
ob_end_clean();
$PAGE_ELEMENT[PAGE][1][0][param]=$_GET[id];


template_define_elements();
final_render();

?>
