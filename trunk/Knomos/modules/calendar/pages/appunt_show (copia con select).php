<?
include("../../../framework/framework.php");


// Define page specific text for template
$PAGE[TXT_TITLE]=CALENDAR_IMPEGS;
$PAGE[PAGE_INTITLE]=CALENDAR_IMPEGS;
$PAGE[PAGE_PICTITLE]="ico_calendar_med.gif";
$module="calendar";

template_init();

ob_start();

$rs=$DB->Execute("SELECT * FROM $module WHERE id=".$_GET[id]);
if(!$result=$rs->FetchRow())
{



	$response[title]=FW_ERROR_NO_PERM;
	$response[text]=FW_ERROR_NO_PERM_TXT;
	$iserror=1;
	print draw_response($response);

	
} else {

	if (check_perm_obj($module,$result[ref_prat],"r"))
	{
		$PAGE_ELEMENT[PAGE][1][0][param]=$result[ref_prat];
		$thisobj= load_fwobject("show","calendar",0);
		//Prende i dati della pratica
		$rsP=$DB->Execute("SELECT * FROM pratiche WHERE id=".$result[ref_prat]);
		$resultP=$rsP->FetchRow();
		$curia=str_replace("'","&acute;",$resultP[pr_comp_desc]); 
		$luogocuria=str_replace("'","&acute;",$resultP[pr_luogo_uff_giud]); 
		$giudice=str_replace("'","&acute;",$resultP[pr_giudice]); 
		$avversario=str_replace("'","&acute;",$resultP[pr_referral]); 
		$nRuolo=str_replace("'","&acute;",$resultP[pr_nRuolo]); 
		//FINE Prende i dati della pratica
		//FORMA LE VARIABILI DELL'IMPEGNO
		$descrizione=str_replace("'","&acute;",$result[title]); 
		$pratica=str_replace("'","&acute;",$resultP[pr_codice]); 
		//Prende i dati dell'operatore
		//$rsOp=$DB->Execute("SELECT * FROM users WHERE id=".$result[operator]);
		//$resultOp=$rsOp->FetchRow();
		//$mailOp=$resultOp[codice];
		if($_SESSION[history]==0)
		{
			$PAGE[PAGE_INTITLE].= "  &nbsp;&nbsp;<span > ( <a href=\"".$CONF[url_base].$CONF[dir_modules]."calendar/pages/new_app.php?ref_id=".$_GET[ref_prat][realval][0]."\">".PRATICHE_ADD_EVENT."</a> ) </span >

&nbsp;&nbsp;<span> 
		<select name='SelOpzImpegni' id='SelOpzImp' size='1' onchange='SelectImpegniAltri(value)' class=''  onFocus=(this.className='campo-focus-02') onBlur=(this.className='null') >
		<option selected='selected' value='0'>Altro ...</option>
		<option value='1'>Nuovo impegno derivato</option>
		<option value='2'>Nuovo termine impugnazione penale derivato</option>
		<option value=$curia,$luogocuria,$giudice,$avversario,$nRuolo>Invia istruzioni via mail</option>
		<option value=$descrizione,$pratica,$curia,$luogocuria,$giudice,$avversario,$nRuolo>Stampa scheda</option>

		</select>

 </span></BR>


&nbsp;&nbsp;<span> ( <a target=\"\" href=\"#\" onclick=\"javascript:ApriImpegniDerivati()\">".CALENDAR_NEW_APP_DER."</a> ) </span>
&nbsp;&nbsp;<span> 
( <a target=\"\" href=\"#\" onclick=\"javascript:SelectNuovoImpegnoCalcolato('3')\">".CALENDAR_NEW_IMP_PEN_DER."</a> )
</span>

&nbsp;&nbsp;<span> ( <a target=\"\" href=\"#\" onclick=\"javascript:InviaIstruzioni('$curia','$luogocuria','$giudice','$avversario','$nRuolo')\">".CALENDAR_SEND_ISTRUZ."</a> ) </span>

&nbsp;&nbsp;<span> ( <a target=\"\" href=\"#\" onclick=\"javascript:StampaImpegno('$descrizione','$pratica','$curia','$luogocuria','$giudice','$avversario','$nRuolo')\">".PRATICHE_PRINT."</a> )

";



			$thisobj["Fields"]["button_w"]=make_button("new_app.php?id=".$_GET[id],FW_MODIFY);
		} else $thisobj["Fields"]["button_w"]=FW_MODIFY;
		
		$thisobj["Fields"]["button_d"]=make_button_del($CONF[url_base].$CONF[dir_modules]."calendar/pages/app_view.php?form_id=listcont&form_page=1&ref_prat[text]=&ref_prat[realval][]=".$result[ref_prat]."&action=del&id=".$_GET[id]."&ref_parent=".$result[ref_prat],FW_DELETE);
		if($_SESSION[history]==0)
		{		
			$thisobj["Fields"]["button_dopres"]=make_button($CONF[url_base].$CONF[dir_modules]."prestazioni/pages/new_prestazione.php?app_id=".$_GET[id]."&Tipo=".$result[type_app],CALENDAR_DOPRES);
		} else $thisobj["Fields"]["button_dopres"]=CALENDAR_DOPRES;
		$thisobj["Fields"]["button_prat"]=make_button($CONF[url_base].$CONF[dir_modules]."pratiche/pages/pratiche_show.php?id=".$result[ref_prat],PRATICHE_PRAT);
		$thisobj["Fields"]["button_pres"]=make_button($CONF[url_base].$CONF[dir_modules]."prestazioni/pages/prestazioni_view.php?form_id=listprestaz&form_page=1&ref_id[text]=&ref_id[realval][]=".$result[ref_prat],PRESTAZIONI_TITLE);
		$thisobj["Fields"]["button_scad"]=make_button($CONF[url_base].$CONF[dir_modules]."calendar/pages/app_view.php?form_id=listcont&form_page=1&ref_prat[text]=&ref_prat[realval][]=".$result[ref_prat],PRATICHE_IMPEGN);
		$thisobj["Fields"]["button_doc"]=make_button($CONF[url_base].$CONF[dir_modules]."document/pages/documents_view.php?form_id=listdoc&form_page=1&ref_prat[text]=&ref_prat[realval][]=".$result[ref_prat],DOCUMENT_TITLE);
		$thisobj["Fields"]["button_dbox"]=make_button($CONF[url_base].$CONF[dir_modules]."document/pages/dropbox_view.php?form_id=listdoc&form_page=1&ref_prat[text]=&ref_prat[realval][]=".$result[ref_prat],DOCUMENT_TITLE_DROPBOX);

		$keymap[54]=$CONF[url_base].$CONF[dir_modules]."/pratiche/pages/pratiche_show.php?id=".$result[ref_prat];
		$keymap[55]=$CONF[url_base].$CONF[dir_modules]."/prestazioni/pages/prestazioni_view.php?form_id=listprestaz&form_page=1&ref_id[text]=&ref_id[realval][]=".$result[ref_prat];
		$keymap[56]=$CONF[url_base].$CONF[dir_modules]."/calendar/pages/app_view.php?form_id=listcont&form_page=1&ref_prat[text]=&ref_prat[realval][]=".$result[ref_prat];
		$keymap[57]=$CONF[url_base].$CONF[dir_modules]."document/pages/documents_view.php?form_id=listdoc&form_page=1&ref_prat[text]=&ref_prat[realval][]=".$result[ref_prat];
		
		print set_js_keyhandler($keymap);
	
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

