<?
include("../../../framework/framework.php");


// Define page specific text for template
$PAGE[TXT_TITLE]=PRESTAZIONI_MENU_0;
$PAGE[PAGE_INTITLE]=PRESTAZIONI_MENU_0;


$PAGE[PAGE_PICTITLE]="ico_tariffe_med.gif";

$module="prestazioni";

if ($_SESSION[mobile]==true){
	template_init(6); //mobile=6 - normale=2
} 
 else {
	template_init(); //mobile=6 - normale=2
}
	
//template_init(); //mobile=6 - desktop =()

ob_start();

$rs=$DB->Execute("SELECT * FROM $module WHERE id=".$_GET[id]);
if(!$result=$rs->FetchRow())
{
	$response[title]=FW_ERROR_NO_PERM;
	$response[text]=FW_ERROR_NO_PERM_TXT;
	$iserror=1;
	print draw_response($response);

	
} else {
	$PAGE_ELEMENT[PAGE][1][0][param]=$result[ref_id];

	$PAGE[PAGE_INTITLE].= " 

&nbsp;&nbsp;<span >
Aggiungi:
		<select name='PrestCalcoli' id='PrestCalcoli'  onchange='SelectPrestAzioni(value)' onFocus='this.className='campo-focus-02'' onBlur='this.className='null''>
		<option style='font-weight: normal' selected='selected' value='#'>Selezionare</option>
		<option style='font-weight: normal' value='".$result[ref_id]."'>Nuova prestazione</option>
		<option style='font-weight: normal' value='".$result[ref_id]."'>Nuova prestazione derivata</option>
		<option style='font-weight: normal' value='".$result[ref_id]."'>Nuovo impegno derivato</option>
		<option style='font-weight: normal' value='#4'>Nuovo termine processuale derivato</option>
		<option style='font-weight: normal' value='#3'>Nuovo termine di impugn. pen. derivato</option>
		</select>
	";



	if (check_perm_obj("pratiche",$result[ref_id],"r")) {
		insert_last_viewed($result[ref_id],"pratiche");
		$thisobj= load_fwobject("show","prestazioni",0);
		if($_SESSION[history]==0)
		{
			$thisobj["Fields"]["button_w"]=make_button("new_prestazione.php?id=".$_GET[id],FW_MODIFY);
		} else $thisobj["Fields"]["button_w"]=FW_MODIFY;
		$thisobj["Fields"]["button_d"]=make_button_del($CONF[url_base].$CONF[dir_modules]."prestazioni/pages/prestazioni_view.php?form_id=listprestaz&form_page=1&ref_id[text]=&ref_id[realval][]=".$result[ref_id]."&action=del&id=".$_GET[id]."&ref_parent=".$result[ref_id],FW_DELETE);
		$thisobj["Fields"]["button_prat"]=make_button($CONF[url_base].$CONF[dir_modules]."pratiche/pages/pratiche_show.php?id=".$result[ref_id],PRATICHE_PRAT);
		$thisobj["Fields"]["button_pres"]=make_button($CONF[url_base].$CONF[dir_modules]."prestazioni/pages/prestazioni_view.php?form_id=listprestaz&form_page=1&ref_id[text]=&ref_id[realval][]=".$result[ref_id],PRESTAZIONI_TITLE);
		$thisobj["Fields"]["button_scad"]=make_button($CONF[url_base].$CONF[dir_modules]."calendar/pages/app_view.php?form_id=listcont&form_page=1&ref_prat[text]=&ref_prat[realval][]=".$result[ref_id],PRATICHE_IMPEGN);
		$thisobj["Fields"]["button_doc"]=make_button($CONF[url_base].$CONF[dir_modules]."document/pages/documents_view.php?form_id=listdoc&form_page=1&ref_prat[text]=&ref_prat[realval][]=".$result[ref_id],DOCUMENT_TITLE);
		$thisobj["Fields"]["button_dbox"]=make_button($CONF[url_base].$CONF[dir_modules]."document/pages/dropbox_view.php?form_id=listdoc&form_page=1&ref_prat[text]=&ref_prat[realval][]=".$result[ref_id],DOCUMENT_TITLE_DROPBOX);
		print draw_object($thisobj,intval($_GET[id]),$module);
	} else {
		$response[title]=FW_ERROR_NO_PERM;
		$response[text]=FW_ERROR_NO_PERM_TXT;
		$iserror=1;
		print draw_response($response);
	}	
}


$PAGE[PAGE_CONTENT] = ob_get_contents();
ob_end_clean();
template_define_elements();
final_render();

?>
