<?

//USER LISTING
$LISTS[admin][0]["sql_select"]="SELECT * FROM ".$CONF[auth_db_table];
$LISTS[admin][0]["options"]="perpage::40||defordfield::nome||defordtype::asc||exp::0";
$LISTS[admin][0]["titles"]=FW_LOGIN."||".FW_NAME."::ord||".ADMIN_USER_MANSIONE."||".ADMIN_USER_ON_ORARIO."||".FW_ACTION;
$LISTS[admin][0]["fields"]="login||nome||mansione||onorario||#action#";
$LISTS[admin][0]["action"]="id;;".FW_MODIFY.";;new_user.php?id=%ID%";


//Calendar Type LISTING
$LISTS[admin][1]["sql_select"]="SELECT * FROM INT_calendar_tipo";
$LISTS[admin][1]["options"]="perpage::40||defordfield::ttsid||defordtype::asc||exp::0";
$LISTS[admin][1]["titles"]=FW_CODE."::ord||".FW_DESC."||".FW_ACTION;
$LISTS[admin][1]["fields"]="ttsid||tts_desc||#action#";
$LISTS[admin][1]["action"]="id;;".FW_MODIFY.";;new_ct.php?id=%ID%";

//Pratiche Type LISTING
$LISTS[admin][2]["sql_select"]="SELECT * FROM INT_pratiche_tipo";
$LISTS[admin][2]["options"]="perpage::50||defordfield::codice||defordtype::asc||exp::0";
$LISTS[admin][2]["titles"]=FW_CODE."::ord||".FW_DESC."||".FW_ACTION;
$LISTS[admin][2]["fields"]="codice||ttp_desc||#action#";
$LISTS[admin][2]["action"]="id;;".FW_MODIFY.";;new_tp.php?id=%ID%";




// GROUP LISTING

$LISTS[admin][3]["sql_select"]="SELECT * FROM ".$CONF[auth_groups_table];
$LISTS[admin][3]["options"]="perpage::50||defordfield::name||defordtype::asc||exp::0";
$LISTS[admin][3]["titles"]=FW_NAME."::ord||".FW_DESC."||".FW_TYPE."::ord||".ADMIN_ON_ORAR."::ord||".FW_ACTION;
$LISTS[admin][3]["fields"]="name||descr||tipo::(0=>".ADMIN_GROUP.";;1=>".ADMIN_DIPART.";;2=>".ADMIN_OFFICE.")||on_orar||#action#";
$LISTS[admin][3]["action"]="id;;".FW_MODIFY.";;new_group.php?id=%ID%";

// TEMPLATE LISTING

$LISTS[admin][10]["sql_select"]="SELECT * FROM INT_document_template";
$LISTS[admin][10]["options"]="perpage::50||defordfield::descr||defordtype::asc||exp::0";
$LISTS[admin][10]["titles"]=FW_DESC."||".FW_ACTION;
$LISTS[admin][10]["fields"]="descr||#action#";
$LISTS[admin][10]["action"]="id;;".FW_DELETE.";;templ_view.php?action=del&id=%ID%||id;;".FW_MODIFY.";;new_templ.php?id=%ID%||id;;".FW_SHOW.";;".$CONF[url_base].$CONF[dir_modules]."document/doc_template/%ID%.sxw";

// Fee Listing

$LISTS[admin][4]["sql_select"]="SELECT * FROM INT_tariffe";
$LISTS[admin][4]["options"]="perpage::50||defordfield::tatid||defordtype::asc||exp::0";
$LISTS[admin][4]["titles"]=FW_CODE."::ord||"."Sel."."::ord||".FW_DESC."||".ADMIN_TA_IMP."||".ADMIN_TA_NON_IMP."||".FW_ACTION;
$LISTS[admin][4]["fields"]="tatid||selettore||tat_desc||tat_imp||tat_nonimp||#action#";
$LISTS[admin][4]["action"]="id;;".FW_MODIFY.";;new_ta.php?id=%ID%";

$LISTS[admin][5]["sql_select"]="SELECT * FROM INT_tariffe";
$LISTS[admin][5]["options"]="perpage::30||defordfield::tatid||defordtype::asc||exp::0";
$LISTS[admin][5]["titles"]=FW_CODE."||".FW_DESC;
$LISTS[admin][5]["fields"]="tatid::func=>admin_ta_tselect||tat_desc::func=>admin_ta_tselect";
//$LISTS[admin][5]["action"]="tatid;;".FW_INSERT.";;Javascript:  insertTselect('".$_GET[formname]."','".$_GET[fieldname]."','%ID%');";

$LISTS[admin][8]["sql_select"]="SELECT * FROM INT_tariffe";
$LISTS[admin][8]["options"]="perpage::30||defordfield::tatid||defordtype::asc||exp::0";
$LISTS[admin][8]["titles"]=FW_CODE."||".FW_DESC;
$LISTS[admin][8]["fields"]="tatid::linkid=>Javascript:  insertTselect('".$_GET[formname]."','".$_GET[fieldname]."','%FIELD%');||tat_desc";
//$LISTS[admin][8]["action"]="tatid;;".FW_INSERT.";;Javascript:  insertTselect('".$_GET[formname]."','".$_GET[fieldname]."','%ID%');";


$LISTS[admin][6]["sql_select"]="SELECT * FROM ".$CONF[auth_db_table];
$LISTS[admin][6]["options"]="perpage::200||defordfield::codice||defordtype::asc||exp::0";
$LISTS[admin][6]["titles"]=FW_CODE."||".FW_NAME;
$LISTS[admin][6]["fields"]="codice::func=>admin_user_tselect2||nome::func=>admin_user_tselect2";
//$LISTS[admin][6]["action"]="codice;;".FW_INSERT.";;Javascript:  insertTselect('".$_GET[formname]."','".$_GET[fieldname]."','%ID%');";

$LISTS[admin][7]["sql_select"]="SELECT * FROM ".$CONF[auth_db_table];
$LISTS[admin][7]["options"]="perpage::200||defordfield::codice||defordtype::asc||exp::0";
$LISTS[admin][7]["titles"]=FW_CODE."||".FW_NAME;
$LISTS[admin][7]["fields"]="codice||nome::func=>admin_user_mselect";


$LISTS[admin][9]["sql_select"]="SELECT * FROM ".$CONF[auth_groups_table];
$LISTS[admin][9]["options"]="perpage::30||defordfield::name||defordtype::asc||exp::0";
$LISTS[admin][9]["titles"]=FW_NAME;
$LISTS[admin][9]["fields"]="name::func=>admin_group_mselect";


$LISTS[admin][11]["sql_select"]="SELECT * FROM ".$CONF[auth_db_table]." WHERE last_action > '0000-00-00 00:00:00' ";
$LISTS[admin][11]["options"]="perpage::30||defordfield::nome||defordtype::asc||exp::0";
$LISTS[admin][11]["titles"]=FW_NAME."||".ADMIN_LAST_ACTION."::ord||".FW_ACTION;
$LISTS[admin][11]["fields"]="nome||last_action||#action#";
$LISTS[admin][11]["action"]="id;;".ADMIN_DISCONNECT.";;logged_users.php?id=%ID%";

$LISTS[admin][12]["sql_select"]="SELECT * FROM ".$CONF[auth_db_table]." WHERE `lock` > 0 ";
$LISTS[admin][12]["options"]="perpage::30||defordfield::nome||defordtype::asc||exp::0";
$LISTS[admin][12]["titles"]=FW_NAME."||".ADMIN_DLOCK."::ord||".FW_ACTION;
$LISTS[admin][12]["fields"]="nome||id::func=>admin_document_locked||#action#";
$LISTS[admin][12]["action"]="id;;".ADMIN_UNLOCK_DOC.";;open_document.php?id=%ID%";




//Pratiche std LISTING
$LISTS[admin][13]["sql_select"]="SELECT * FROM INT_pratiche_std";
$LISTS[admin][13]["options"]="perpage::50||defordfield::descrizione||defordtype::asc||exp::0";
$LISTS[admin][13]["titles"]=FW_CODE."::ord||".FW_DESC."||".FW_ACTION;
$LISTS[admin][13]["fields"]="cod_tipo||descrizione||#action#";
$LISTS[admin][13]["action"]="id;;".FW_MODIFY.";;new_pr_std.php?id=%ID%";

//calendar std LISTING
$LISTS[admin][14]["sql_select"]="SELECT * FROM INT_calendar_std";
$LISTS[admin][14]["options"]="perpage::50||defordfield::descrizione||defordtype::asc||exp::0";
//$LISTS[admin][14]["titles"]=FW_CODE."::ord||".FW_DESC."||".FW_ACTION;
$LISTS[admin][14]["titles"]="Settore"."::ord||".FW_CODE."||".FW_DESC."||".FW_ACTION;
$LISTS[admin][14]["fields"]="civ_pen||cod_prest||descrizione||#action#";
$LISTS[admin][14]["action"]="id;;".FW_MODIFY.";;new_cal_std.php?id=%ID%";

//Termini processuali LISTING
$LISTS[admin][15]["sql_select"]="SELECT * FROM INT_termini_processuali";
$LISTS[admin][15]["options"]="perpage::50||defordfield::descrizione||defordtype::asc||exp::0";
//$LISTS[admin][15]["titles"]=FW_CODE."::ord||".FW_DESC."||".FW_ACTION;
$LISTS[admin][15]["titles"]="Settore"."::ord||".FW_CODE."||".FW_DESC."||".FW_ACTION;
$LISTS[admin][15]["fields"]="civ_pen||cod_prest||descrizione||#action#";
$LISTS[admin][15]["action"]="id;;".FW_MODIFY.";;new_ter_proc.php?id=%ID%";


//Tariffario forense LISTING
$LISTS[admin][16]["sql_select"]="SELECT * FROM INT_tariffe_STD ";
$LISTS[admin][16]["options"]="perpage::50||defordfield::selettore||defordtype::asc||exp::0";
//$LISTS[admin][16]["titles"]="Sel"."::ord||".FW_CODE."::ord||".FW_DESC."::ord||"."N.Ord."."::ord||".FW_ACTION;
$LISTS[admin][16]["titles"]="Sel"."::ord||"."N.Ord."."::ord||".FW_DESC."::ord||".FW_CODE."::ord||".FW_ACTION;
$LISTS[admin][16]["fields"]="selettore||ordine||descrizione||cod_tariffa||#action#";
$LISTS[admin][16]["action"]="id;;".FW_MODIFY.";;new_ta_STD.php?id=%ID%";

//links LISTING
$LISTS[admin][17]["sql_select"]="SELECT * FROM INT_links";
$LISTS[admin][17]["options"]="perpage::50||defordfield::link||defordtype::asc||exp::0";
$LISTS[admin][17]["titles"]=FW_DESC."||"."URL||".FW_ACTION;
$LISTS[admin][17]["fields"]="descrizione||url||#action#";

$LISTS[admin][17]["action"]="id;;".FW_MODIFY.";;new_link.php?id=%ID%";

//contributo unificato
$LISTS[admin][18]["sql_select"]="SELECT * FROM INT_contr_unificato";
$LISTS[admin][18]["options"]="perpage::50||defordfield::id||defordtype::asc||exp::0";
$LISTS[admin][18]["titles"]=FW_DESC."||"."id||"."scaglione||"."importo||"."ordine||".FW_ACTION;
$LISTS[admin][18]["fields"]="descrizione||id||scaglione||importo||ordine||#action#";
$LISTS[admin][18]["action"]="id;;".FW_MODIFY.";;new_contr_unif.php?id=%ID%";

//Pratiche Type LISTING
$LISTS[admin][19]["sql_select"]="SELECT * FROM INT_tipologie_varie";
$LISTS[admin][19]["options"]="perpage::50||defordfield::tipologia||defordtype::asc||exp::0";
$LISTS[admin][19]["titles"]=FW_CODE."::ord||"."Tipologia"."::ord||"."Campo corrisp."."||".FW_DESC."||"."N. ordine"."||".FW_ACTION;
$LISTS[admin][19]["fields"]="codice||tipologia||campo_tipologia||descrizione||ordine||#action#";
$LISTS[admin][19]["action"]="id;;".FW_MODIFY.";;new_tip_varie.php?id=%ID%";
//$LISTS[admin][19]["action"]="id;;".FW_DELETE.";;tip_varie_view.php?action=del&id=%ID%||id;;".FW_MODIFY.";;new_tip_varie.php?id=%ID%||id;;";

$LISTS[admin][20]["sql_select"]="SELECT * FROM INT_uff_giud";
$LISTS[admin][20]["options"]="perpage::50||defordfield::ordine||defordtype::asc||exp::0";
$LISTS[admin][20]["titles"]=FW_CODE."::ord||"."descrizione"."::ord||"."N. ordine"."||".FW_ACTION;
$LISTS[admin][20]["fields"]="codice||descrizione||ordine||#action#";
$LISTS[admin][20]["action"]="id;;".FW_MODIFY.";;new_tip_uff_giud.php?id=%ID%";

//settings
$LISTS[admin][90]["sql_select"]="SELECT * FROM INT_settings";
$LISTS[admin][90]["options"]="perpage::50||defordfield::usa_link1||defordtype::asc||exp::0";
$LISTS[admin][90]["titles"]=FW_DESC."||"."usa_link1||"."usa_link2||"."usa_link3||"."usa_link4||".FW_ACTION;
$LISTS[admin][90]["fields"]="usa_gmail||usa_link1||usa_link2||usa_link3||usa_link4||#action#";
$LISTS[admin][90]["action"]="id;;".FW_MODIFY.";;new_settings.php?id=%ID%";
/*
$LISTS[admin][1]["sql_select"]="SELECT * FROM INT_pratiche_tipo WHERE %[PERM]%";
$LISTS[admin][1]["options"]="perpage::8||defordfield::pr_codice||defordtype::asc||exp::0";
$LISTS[admin][1]["titles"]=PRATICHE_CODE."||".FW_TYPE."||".PRATICHE_CUSTOMER."||".PRATICHE_VALUE."||".FW_ACTION;
$LISTS[admin][1]["fields"]="pr_codice||pr_tipo::[SELECT * FROM INT_pratiche_tipo WHERE codice='%ID%';;ttp_desc]||pr_cliente||pr_valore||#action#";
$LISTS[admin][1]["action"]="id;;".FW_SHOW.";;pratiche_show.php?id=%ID%||id;;".FW_MODIFY.";;new_pratiche.php?id=%ID%";
*/



function admin_document_locked($row)
{
	GLOBAL $DB,$CONF;
	
	$rs=$DB->Execute("SELECT * FROM document WHERE user_lock=".$row[id]);
	if ($rs->RecordCount() > 0)
	{
		$thisdoc=$rs->FetchRow();
	}
	
	return $thisdoc[descr]." (".$thisdoc[filename].".".$thisdoc[ext].")";
}


function admin_user_mselect($row,$show="nome")
{
	GLOBAL $DB,$CONF;
	
	return '<a href="javascript:parent.msel_add(parent.document.'.$_GET[formname].'.'.$_GET[fieldname].', \''.$row[nome].'\', \''.$row[id].'\'); parent.closeLayerWindow();">'.$row[$show].'</a>';
}

function admin_group_mselect($row,$show="name")
{
	GLOBAL $DB,$CONF;
	
	return '<a href="javascript:parent.msel_add(parent.document.'.$_GET[formname].'.'.$_GET[fieldname].', \''.$row[name].'\', \''.$row[id].'\'); parent.closeLayerWindow();">'.$row[$show].'</a>';
}

function admin_user_tselect($row,$show="nome")
{
	GLOBAL $DB,$CONF;
	
	return '<a href="javascript:parent.msel_add(parent.document.'.$_GET[formname].'.'.$_GET[fieldname].', \''.$row[nome].'\', \''.$row[id].'\'); parent.closeLayerWindow();">'.$row[$show].'</a>';
}

function admin_ta_tselect($row,$show="tat_desc")
{
	GLOBAL $DB,$CONF;
	
	return "<a href=\"javascript:insertTselect2('".$_GET[formname]."','".$_GET[fieldname]."','".$row[tatid]."','".$_GET[fieldname2]."','".str_replace("'","\\'",str_replace('"','&quot;',$row["tat_desc"]))."');\">".$row[$show]."</a>";
}

function admin_user_tselect2($row,$show="nome")
{
	GLOBAL $DB,$CONF;
	
	return "<a href=\"javascript:insertTselect('".$_GET[formname]."','".$_GET[fieldname]."','".$row[codice]."');\">".$row[$show]."</a>";
}


?>
