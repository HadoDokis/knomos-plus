<?
//Visualizzata in contatti
$LISTS[pratiche][0]["sql_select"]="SELECT * FROM pratiche p WHERE %[PERM]%";
$LISTS[pratiche][0]["options"]="perpage::50||defordfield::pr_codice||defordtype::asc||exp::0";
$LISTS[pratiche][0]["titles"]=" ||".PRATICHE_CODE."::ord||".PRATICHE_SUBJ."::ord	||".PRATICHE_RESP."::ord";
$LISTS[pratiche][0]["fields"]="note::func=>pratiche_note_pic||pr_codice::linkid=>".$CONF[url_base].$CONF[dir_modules]."pratiche/pages/pratiche_show.php?id=%ID%||pr_oggetto::linkid=>".$CONF[url_base].$CONF[dir_modules]."pratiche/pages/pratiche_show.php?id=%ID%||pr_operatore::[SELECT * FROM ".$CONF[auth_db_table]." WHERE id='%ID%';;nome]";
//$LISTS[pratiche][0]["action"]="id;;".FW_SHOW.";;".$CONF[url_base].$CONF[dir_modules]."pratiche/pages/pratiche_show.php?id=%ID%||id;;".FW_MODIFY.";;".$CONF[url_base].$CONF[dir_modules]."pratiche/pages/new_pratiche.php?id=%ID%||id;;".PRATICHE_VIEW_PRES.";;".$CONF[url_base].$CONF[dir_modules]."prestazioni/pages/prestazioni_view.php?form_id=listprestaz&form_page=1&ref_id%5Btext%5D=&ref_id%5Brealval%5D%5B0%5D=%ID%||id;;".PRATICHE_ADD_PRES.";;".$CONF[url_base].$CONF[dir_modules]."prestazioni/pages/new_prestazione.php?ref_id=%ID%||id;;".FW_DELETE.";;".$CONF[url_base].$CONF[dir_modules]."pratiche/pages/pratiche_view.php?action=del&id=%ID%||id;;".FW_NEWDOC.";;".$CONF[url_base].$CONF[dir_modules]."document/pages/new_document.php?pid=%ID%";


//ULTIME PRATICHE
//$LISTS[pratiche][1]["sql_select"]="SELECT * FROM pratiche p, INT_last_viewed l WHERE %[PERM]% AND l.user_id=".$_SESSION[fw_userid]." AND l.module='pratiche' AND l.obj_id=p.id ";
$LISTS[pratiche][1]["sql_select"]="SELECT * FROM pratiche p, INT_last_viewed l WHERE %[PERM]% AND l.user_id=".$_SESSION[fw_userid]." AND l.module='pratiche' AND l.obj_id=p.id ";
$LISTS[pratiche][1]["options"]="perpage::15||defordfield::l.viewed||defordtype::desc||exp::0";
$LISTS[pratiche][1]["titles"]=PRATICHE_LAST_UPDATE."::ord||".PRATICHE_CODE."::ord||".FW_SUBJ."::ord||".PRATICHE_CUSTOMER."::ord";
$LISTS[pratiche][1]["fields"]="pr_data_mod::date||pr_codice::linkid=>".$CONF[url_base].$CONF[dir_modules]."pratiche/pages/pratiche_show.php?id=%ID%||pr_oggetto::linkid=>".$CONF[url_base].$CONF[dir_modules]."pratiche/pages/pratiche_show.php?id=%ID%||pr_ref_idcliente::func=>pratiche_format_client";
//$LISTS[pratiche][1]["action"]="id;;".FW_SHOW.";;".$CONF[url_base].$CONF[dir_modules]."pratiche/pages/pratiche_show.php?id=%ID%||id;;".FW_MODIFY.";;".$CONF[url_base].$CONF[dir_modules]."pratiche/pages/new_pratiche.php?id=%ID%||id;;".PRATICHE_VIEW_PRES.";;".$CONF[url_base].$CONF[dir_modules]."prestazioni/pages/prestazioni_view.php?form_id=listprestaz&form_page=1&ref_id%5Btext%5D=&ref_id%5Brealval%5D%5B0%5D=%ID%||id;;".PRATICHE_ADD_PRES.";;".$CONF[url_base].$CONF[dir_modules]."prestazioni/pages/new_prestazione.php?ref_id=%ID%";


//In Page listing
$LISTS[pratiche][2]["sql_select"]="SELECT * FROM pratiche p WHERE %[PERM]%";
$LISTS[pratiche][2]["options"]="perpage::30||defordfield::pr_data_ins||defordtype::desc||exp::0";
$LISTS[pratiche][2]["titles"]=PRATICHE_CODE."||".PRATICHE_SUBJ;
$LISTS[pratiche][2]["fields"]="pr_codice::linkid=>Javascript:  insertTselect('".$_GET[formname]."','".$_GET[fieldname]."','%FIELD%');||pr_oggetto";


//Lista pratiche riunite
$IdPrat=$_GET[id];
$LISTS[pratiche][3]["sql_select"]="SELECT * FROM pratiche p WHERE %[PERM]% AND pr_riunita_a = ".$IdPrat;
//$LISTS[pratiche][3]["sql_select"]="SELECT * FROM pratiche p WHERE %[PERM]% AND ( Id = ".$IdPrat." OR pr_riunita_a = ".$IdPrat.")";
//$LISTS[pratiche][3]["titles"]=PRATICHE_CODE."::ord||".FW_SUBJ."::ord||".PRATICHE_CUSTOMER."::ord";
$LISTS[pratiche][3]["titles"]=PRATICHE_CODE."::ord||".FW_SUBJ."::ord||".PRATICHE_RIUNITA_IL."||".PRATICHE_CUSTOMER."::ord";
$LISTS[pratiche][3]["fields"]="pr_codice::linkid=>".$CONF[url_base].$CONF[dir_modules]."pratiche/pages/pratiche_show.php?id=%ID%||pr_oggetto::linkid=>".$CONF[url_base].$CONF[dir_modules]."pratiche/pages/pratiche_show.php?id=%ID%||pr_riunita_il::date||pr_ref_idcliente::func=>pratiche_format_client";


//Function for printing notes field

function pratiche_note_pic($row)
{
	if (strlen($row[note])>0)
	{
		return "<img src=\"%[IMAGE_GPATH]%ico/ico_note_min.gif\">";
	}	
}



function pratiche_format_client($row)
{
	GLOBAL $DB,$CONF;
	
	$rs=$DB->Execute("SELECT * FROM contact WHERE id=".$row[pr_ref_idcliente]);
	$cont=$rs->FetchRow();
	return "<a href=\"".$CONF[url_base].$CONF[dir_modules]."contact/pages/contact_show.php?id=".$cont[id]."\">".$cont[codice]."</a>";
}

function pratiche_format_avvr($row)
{
	GLOBAL $DB,$CONF;
	
	$rs=$DB->Execute("SELECT * FROM contact WHERE id=".$row[pr_ref_idavvr]);
	if ($cont=$rs->FetchRow()){
		return "<a href=\"".$CONF[url_base].$CONF[dir_modules]."contact/pages/contact_show.php?id=".$cont[id]."\">".$cont[codice]."</a>";
	} else return "";
}
?>
