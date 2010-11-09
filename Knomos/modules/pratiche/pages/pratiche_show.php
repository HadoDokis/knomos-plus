<?
include("../../../framework/framework.php");
include("../functions.php");

$module="pratiche";
$rs=$DB->Execute("SELECT * FROM $module WHERE id=".$_GET[id]);
$result=$rs->FetchRow();
$pippo1=str_replace("'","&acute;",$result[pr_codice]); 
$pippo2=str_replace("'","&acute;",$result[pr_numero]); 
$pippo3=str_replace("'","&acute;",$result[pr_oggetto]); //Fascicolo
//
$pippo3b=pratiche_posizione_show($result[pr_oggetto2]); //posizione
$pippo3a=str_replace("'","&acute;",$pippo3b); //posizione

$pippo4=str_replace("'","&acute;",$result[pr_schedario]); 
$pippo5=str_replace("'","&acute;",$result[note]); 
$pippo6=str_replace("'","&acute;",$result[pr_comp_desc]);
$pippo6a=str_replace("'","&acute;",$result[pr_luogo_uff_giud]); 
$pippo7=str_replace("'","&acute;",$result[pr_giudice]); 
$pippo8=str_replace("'","&acute;",$result[pr_nruolo]); 
$pippo9=str_replace("'","&acute;",$result[pr_nruolo_altri]); 
$pippo10=str_replace("'","&acute;",$result[pr_referral]); //avversario PM

$str_per_sch_pratica="'$pippo1','$pippo2','$pippo3','$pippo3a','$pippo4','$pippo5','$pippo6','$pippo6a','$pippo7','$pippo8','$pippo9','$pippo10'";
//echo $str_per_sch_pratica;

//Prende i dati relativi al contributo unificato
$cu_valore=$result[pr_valore]; 
$cu_giud=$result[pr_comp_cod];
$cu_tipo=$result[pr_tipo];
//calcola il contributo
$c_un=CalcolaContributoUnificato($cu_valore, $cu_giud, $cu_tipo);
$tx_contrib_un="L&acute;importo del contributo unificato dovuto è pari ad Euro ".$c_un;
//fine contributo
$maildefault=$CONF[usa_mail_default];
$urlnewmail=$CONF[url_nuova_mail];
$targetmail=$CONF[fin_mail_default];

//echo $maildefault;

// Define page specific text for template
$PAGE[TXT_TITLE]=PRATICHE_MENU_0;
$PAGE[PAGE_INTITLE]=PRATICHE_MENU_0." 
&nbsp;&nbsp;<span >
<a href=\"javascript:NuovaMail()\"><img src=\"/template/skin_sutti/images/ico/mail4.png\" width=\"24\" height=\"24\" border=\"0\" align=\"\absmiddle\"></a>

<a target=\"\" href=\"#\" onclick=\"javascript:StampaPratica('$pippo1','$pippo2','$pippo3','$pippo3a','$pippo4','$pippo5','$pippo6','$pippo6a','$pippo7','$pippo8','$pippo9','$pippo10')\"><img src=\"/template/skin_sutti/images/ico/print1.png\" width=\"24\" height=\"24\" border=\"0\" align=\"\absmiddle\"></a>
</span >

";
$PAGE[PAGE_PICTITLE]="ico_prat_med.gif";


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
	
	if (!isset($_GET[action]))
	{
		$thisobj= load_fwobject("show","pratiche",0);
		
		if( ($_SESSION[user][admin]==1 || $_SESSION[user][move_prat]==1) && $_SESSION[history]==0)
		{
			$thisobj["Fields"]["button_m"]=make_button("pratiche_show.php?action=hist&id=".$_GET[id],PRATICHE_TOHIST);
		} elseif (($_SESSION[user][admin]==1 || $_SESSION[user][move_prat]==1) && $_SESSION[history]==1)
		{
			$thisobj["Fields"]["button_m"]=make_button("pratiche_show.php?action=rest&id=".$_GET[id],PRATICHE_TOCURR);
		} else
		{$thisobj["Fields"]["button_m"]=""; }
		
		$thisobj["Fields"]["button_d"]="";
		if($_SESSION[history]==0)
		{
			$thisobj["Fields"]["button_w"]=make_button("new_pratiche.php?id=".$_GET[id],FW_MODIFY);
			$thisobj["Fields"]["button_newscad"]=make_button($CONF[url_base].$CONF[dir_modules]."calendar/pages/new_app.php?ref_id=".$_GET[id],PRATICHE_ADD_EVENT);
			$thisobj["Fields"]["button_newpres"]=make_button($CONF[url_base].$CONF[dir_modules]."prestazioni/pages/new_prestazione.php?ref_id=".$_GET[id],PRATICHE_ADD_PREST);
			$thisobj["Fields"]["button_newdoc"]=make_button($CONF[url_base].$CONF[dir_modules]."document/pages/new_document.php?pid=".$_GET[id],PRATICHE_ADD_DOC);
		} else
		{			
			$thisobj["Fields"]["button_w"]=FW_MODIFY;
			$thisobj["Fields"]["button_newscad"]=PRATICHE_ADD_EVENT;
			$thisobj["Fields"]["button_newpres"]=PRATICHE_ADD_PREST;
			$thisobj["Fields"]["button_newdoc"]=PRATICHE_ADD_DOC;
		}



		$thisobj["Fields"]["button_pres"]=make_button($CONF[url_base].$CONF[dir_modules]."prestazioni/pages/prestazioni_view.php?form_id=listprestaz&form_page=1&ref_id[text]=&ref_id[realval][]=".$_GET[id],PRESTAZIONI_TITLE);
		$thisobj["Fields"]["button_scad"]=make_button($CONF[url_base].$CONF[dir_modules]."calendar/pages/app_view.php?form_id=listcont&form_page=1&ref_prat[text]=&ref_prat[realval][]=".$_GET[id],PRATICHE_IMPEGN);
		$thisobj["Fields"]["button_doc"]=make_button($CONF[url_base].$CONF[dir_modules]."document/pages/documents_view.php?form_id=listdoc&form_page=1&ref_prat[text]=&ref_prat[realval][]=".$_GET[id],DOCUMENT_TITLE);
		$thisobj["Fields"]["button_dbox"]=make_button($CONF[url_base].$CONF[dir_modules]."document/pages/dropbox_view.php?form_id=listdoc&form_page=1&ref_prat[text]=&ref_prat[realval][]=".$_GET[id],DOCUMENT_TITLE_DROPBOX);
		$thisobj["Fields"]["button_sitcont"]=make_button_clean(PRATICHE_SITCONT,'onClick="loadLayerWindow(\''.$CONF[url_base].$CONF[dir_modules].'pratiche/pages/pratiche_sitcont.php?id='.$_GET[id].'\');"');
		$thisobj["Fields"]["button_contr_unif"]=make_button_clean(PRATICHE_CONTR_UNIF,'onClick="javascript:MsgBox(\''.$tx_contrib_un.'\')"');
		$thislist= load_fwobject("lists","calendar",3);
		$thislist1= load_fwobject("lists","pratiche",3);
		$thisobj["Fields"]["scad_list"]=draw_list($thislist,"calendar");
///ECCO
		$thisobj["Fields"]["riun_list"]=draw_list($thislist1,"pratiche");
		$thisobj["Fields"]["contr_unif"]="Contributo unificato"."::func=>pr_contr_unif";
		print draw_object($thisobj,intval($_GET[id]),$module);


		
	} elseif ($_GET[action] == "hist")
	{
		$response[title]=PRATICHE_MOVETIT;
		$rsdupe=$DB->Execute("SELECT * FROM calendar WHERE ref_prat=".$_GET[id]);
		if ($rsdupe->RecordCount() > 10)
		{
			$response[text]=PRATICHE_MOVE_ERRCAL."<br><br>".make_button("pratiche_show.php?id=".$_GET[id],PRATICHE_BACK_SHOW);
		} else 
		{
			$response[text]=PRATICHE_MOVE_TXT."<br><br>".make_button("pratiche_show.php?action=histok&id=".$_GET[id],PRATICHE_MOVETIT)." &nbsp;&nbsp;&nbsp;&nbsp".make_button("pratiche_show.php?id=".$_GET[id],PRATICHE_BACK_SHOW);
		}
		print draw_response($response);		

	} elseif ($_GET[action] == "histok")
	{

		$response[title]=PRATICHE_MOVETIT;
		$rsdupe=$DB->Execute("SELECT * FROM calendar WHERE ref_prat=".$_GET[id]);
		if ($rsdupe->RecordCount() > 10)
		{
			$response[text]=PRATICHE_MOVE_ERRCAL."<br><br>".make_button("pratiche_show.php?id=".$_GET[id],PRATICHE_BACK_SHOW);
		} else 
		{
			PratToHistory($_GET[id]);
			$response[text]=PRATICHE_MOVE_DONE."<br><br>".make_button("pratiche_view.php",PRATICHE_BACK_LIST);
		}
		print draw_response($response);		
	
	} elseif ($_GET[action] == "rest")
	{
		$response[title]=PRATICHE_RESTTIT;
		$response[text]=PRATICHE_REST_TXT."<br><br>".make_button("pratiche_show.php?action=restok&id=".$_GET[id],PRATICHE_RESTTIT)." &nbsp;&nbsp;&nbsp;&nbsp".make_button("pratiche_show.php?id=".$_GET[id],PRATICHE_BACK_SHOW);
		print draw_response($response);		

	} elseif ($_GET[action] == "restok")
	{

		$response[title]=PRATICHE_RESTTIT;
		HistoryToPrat($_GET[id]);
		$response[text]=PRATICHE_REST_DONE."<br><br>".make_button("pratiche_view.php",PRATICHE_BACK_LIST);
		print draw_response($response);		
	}


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


<?
function pratiche_posizione_show($row)
{
	global $DB,$CONF;
	
	$cnt=0;
	
	foreach(explode(",,",$row[done]) as $v)
	{
		if ($cnt > 0) $cur .= ", ";
		$rs=$DB->Execute("SELECT * FROM INT_tipologie_varie WHERE tipologia=5 and codice='".$v."'");
		$op=$rs->FetchRow();
		//$cur .= $op[nome]." (".$op[codice].")";
		$cur .= $op[descrizione];
		$cnt++;
	}
	return $cur;
}
?>
