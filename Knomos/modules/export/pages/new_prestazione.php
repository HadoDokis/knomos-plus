<?
include("../../../framework/framework.php");

// Define page specific text for template
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

$thisform= load_fwobject("form","prestazioni",0);



if (isset($_GET[id]) && $_POST[form_id]!= $thisform["name"])
{
	
	$PAGE[PAGE_INTITLE]=PRESTAZIONI_UPD;
	$PAGE[TXT_TITLE]=PRESTAZIONI_UPD;
	$rs=$DB->Execute("SELECT * FROM $module WHERE id=".$_GET[id]);
	$result=$rs->FetchRow();

	$rs2=$DB->Execute("SELECT * FROM pratiche WHERE id=".$result[ref_id]);
	$result_prat=$rs2->FetchRow();
	
		
	$thisform[Fields][title_pratica][title]=PRESTAZIONI_REF_PRATICA;
	$thisform[Fields][title_pratica][content]="text||".$result_prat[pr_codice]."||wid::40;;disab::1";
	$thisform[Fields][ref_id][content]="hidden||".$result[ref_id]."||";
	$thisform[Fields][valore_pratica][content]="hidden||".$result_prat[pr_valore]."||";
	$thisform[Fields][tipo_pratica][content]="hidden||".$result_prat[pr_comp_cod]."||";
	if($result[criterio]=="") $result[criterio]=$result_prat[pr_criterio];
	
	$thisform[onpost]=str_replace("type::add","type::upd",$thisform[onpost]);

	$thisform[onpost]=str_replace("type::add","type::upd",$thisform[onpost]);
	$thisform[Fields][send][content]="submit||".PRESTAZIONI_UPD."||";
	$response[title]=PRESTAZIONI_UPD_DONE;
	$response[text]= PRESTAZIONI_UPD_DONE_TXT."<br><br>".make_button("prestazioni_view.php",PRESTAZIONI_BACK_LIST);

} elseif (isset($_GET[id]))
{
	$result=$_POST;
	$PAGE[PAGE_INTITLE]=PRESTAZIONI_UPD;
	$PAGE[TXT_TITLE]=PRESTAZIONI_UPD;
	$response[title]=PRESTAZIONI_UPD_DONE;
	$response[text]= PRESTAZIONI_UPD_DONE_TXT."<br><br>".make_button("prestazioni_view.php",PRESTAZIONI_BACK_LIST);
	$thisform[onpost]=str_replace("type::add","type::upd",$thisform[onpost]);
	$thisform[Fields][send][content]="submit||".PRESTAZIONI_UPD."||";

} elseif (isset($_GET[ref_id]) && $_POST[form_id]!= $thisform["name"]) {

	$rs2=$DB->Execute("SELECT * FROM pratiche WHERE id=".$_GET[ref_id]);
	$result_prat=$rs2->FetchRow();
	
		
	$thisform[Fields][title_pratica][title]=PRESTAZIONI_REF_PRATICA;
	$thisform[Fields][title_pratica][content]="text||".$result_prat[pr_codice]."||wid::40;;disab::1";
	$thisform[Fields][ref_id][content]="hidden||".$result[ref_id]."||";
	$thisform[Fields][valore_pratica][content]="hidden||".$result_prat[pr_valore]."||";
	$thisform[Fields][tipo_pratica][content]="hidden||".$result_prat[pr_comp_cod]."||";
	if($result[criterio]=="") $result[criterio]=$result_prat[pr_criterio];

	$PAGE[PAGE_INTITLE]=PRESTAZIONI_ADD;
	$PAGE[TXT_TITLE]=PRESTAZIONI_ADD;
	$response[title]=PRESTAZIONI_ADD_DONE;
	$response[text]= PRESTAZIONI_ADD_DONE_TXT."<br><br>".make_button("prestazioni_view.php",PRESTAZIONI_BACK_LIST);
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



$PAGE[PAGE_CONTENT] = ob_get_contents();
ob_end_clean();

final_render();

?>
