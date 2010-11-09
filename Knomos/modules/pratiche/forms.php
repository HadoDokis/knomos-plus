<?
// Form New Mod Contact
$FORMS[pratiche][0]["name"]="new_prat";
$FORMS[pratiche][0]["onpost"]="action::db||table::pratiche||type::add||wf::id";
$FORMS[pratiche][0]["ignore"]="pr_valore_ignore;;pr_template";

$FORMS[pratiche][0]["Fields"]["pr_template"]["title"]="Carica un Template";
$FORMS[pratiche][0]["Fields"]["pr_template"]["content"]="select||||onselectitem::SetTipoPratica('%[ID]%'); ;;loademptyitem::1";
$FORMS[pratiche][0]["Fields"]["pr_template"]["from_sql"]="SELECT *, CONCAT_WS(',', cod_tipo, list_aut_comp, curia, stato, luogo_uff_giud, giudice, criterio, dipartimento, fase, posizione) cod_list FROM INT_pratiche_std order by descrizione||val::cod_list;;text::%descrizione%;;perm::0;;mod::pratiche";

$FORMS[pratiche][0]["Fields"]["pr_codice"]["title"]=PRATICHE_CODE;
$FORMS[pratiche][0]["Fields"]["pr_codice"]["content"]="text||||wid::40";
$FORMS[pratiche][0]["Fields"]["pr_codice"]["er_check"]="min::4;;nodupe::1";
$FORMS[pratiche][0]["Fields"]["pr_oggetto"]["title"]=PRATICHE_FASCSUBJ;
$FORMS[pratiche][0]["Fields"]["pr_oggetto"]["content"]="text||||wid::40";
$FORMS[pratiche][0]["Fields"]["pr_oggetto"]["er_check"]="min::5";
$FORMS[pratiche][0]["Fields"]["pr_schedario"]["title"]=PRATICHE_SCHEDARIO;
$FORMS[pratiche][0]["Fields"]["pr_schedario"]["content"]="text||||wid::40";

//STATO
$FORMS[pratiche][0]["Fields"]["pr_stato"]["title"]=PRATICHE_STATO;
$FORMS[pratiche][0]["Fields"]["pr_stato"]["content"]="select||||";
$FORMS[pratiche][0]["Fields"]["pr_stato"]["from_sql"]="SELECT * FROM INT_tipologie_varie WHERE tipologia=1||val::codice;;text::%descrizione%;;perm::0;;mod::pratiche";

//FASE
$FORMS[pratiche][0]["Fields"]["pr_fase"]["title"]=PRATICHE_FASE;
$FORMS[pratiche][0]["Fields"]["pr_fase"]["content"]="select||||";
$FORMS[pratiche][0]["Fields"]["pr_fase"]["from_sql"]="SELECT * FROM INT_tipologie_varie WHERE tipologia=2||val::codice;;text::%descrizione%;;perm::0;;mod::pratiche";

//POSIZIONE PROCESSUALE
$FORMS[pratiche][0]["Fields"]["pr_oggetto2"]["title"]=PRATICHE_POS;
$FORMS[pratiche][0]["Fields"]["pr_oggetto2"]["content"]="select||||";
$FORMS[pratiche][0]["Fields"]["pr_oggetto2"]["from_sql"]="SELECT * FROM INT_tipologie_varie WHERE tipologia=5||val::codice;;text::%descrizione%;;perm::0;;mod::pratiche";
//$FORMS[pratiche][0]["Fields"]["pr_oggetto2"]["content"]="select||||opt::".PRATICHE_POS_IMP."=>0,,".PRATICHE_POS_PO."=>1,,".PRATICHE_POS_PC."=>2,,".PRATICHE_POS_ATT."=>3,,".PRATICHE_POS_CONV."=>4,,".PRATICHE_POS_RIC."=>5,,".PRATICHE_POS_RES."=>6,,".PRATICHE_POS_3CH."=>7,,".PRATICHE_POS_3INT."=>8,,".PRATICHE_POS_3PIG."=>9,,".PRATICHE_POS_CR_PROC."=>10,,".PRATICHE_POS_CR_INT."=>11,,".PRATICHE_POS_DEB."=>12,,".PRATICHE_POS_OPPTE."=>13,,".PRATICHE_POS_OPPTO."=>14,,".PRATICHE_POS_APPTE."=>15,,".PRATICHE_POS_APPTO."=>16";
//$FORMS[pratiche][0]["Fields"]["pr_oggetto2"]["er_check"]="min::5"; //Inutile è un campo select

//Dati soggetti
$FORMS[pratiche][0]["Fields"]["pr_ref_idcliente"]["title"]=PRATICHE_CUSTOMER;
$FORMS[pratiche][0]["Fields"]["pr_ref_idcliente"]["content"]="tselect||||url::".$CONF[url_base].$CONF[dir_modules]."contact/pages/contact_search_div.php?form_id=listpratiche&form_page=1&nome=";
$FORMS[pratiche][0]["Fields"]["pr_ref_idcliente"]["from_sql"]="SELECT * FROM contact p WHERE %[PERM]% AND codice LIKE '%[VAL]%%' order by codice asc||val::id;;text::codice;;text2::nome;;fid::0;;perm::1;;mod::contact;;mul::0";
$FORMS[pratiche][0]["Fields"]["pr_ref_idcliente"]["er_check"]="min::1";
$FORMS[pratiche][0]["Fields"]["pr_ref_idbenefic"]["title"]=PRATICHE_BENEF;
$FORMS[pratiche][0]["Fields"]["pr_ref_idbenefic"]["content"]="mselect||||url::".$CONF[url_base].$CONF[dir_modules]."contact/pages/contact_search_div2.php?form_id=listpratiche&form_page=1;;size::5;;word::".PRATICHE_BENEF;
$FORMS[pratiche][0]["Fields"]["pr_ref_idbenefic"]["from_sql"]="SELECT * FROM contact  WHERE id ='%ID%' order by nome asc||val::id;;text::%codice%;;perm::1;;mod::contact";
$FORMS[pratiche][0]["Fields"]["pr_ref_idbenefic"]["er_check"]="";
$FORMS[pratiche][0]["Fields"]["pr_ref_idavvr"]["title"]=PRATICHE_AVVR;
$FORMS[pratiche][0]["Fields"]["pr_ref_idavvr"]["content"]="mselect||||url::".$CONF[url_base].$CONF[dir_modules]."contact/pages/contact_search_div2.php?form_id=listpratiche&form_page=1;;size::5;;word::".PRATICHE_AVVR;
$FORMS[pratiche][0]["Fields"]["pr_ref_idavvr"]["from_sql"]="SELECT * FROM contact p WHERE id ='%ID%' order by nome asc||val::id;;text::%codice%;;perm::1;;mod::contact";
$FORMS[pratiche][0]["Fields"]["pr_ref_idavvr"]["er_check"]="";

$FORMS[pratiche][0]["Fields"]["pr_ref_idaltri"]["title"]=PRATICHE_OTHERS;
$FORMS[pratiche][0]["Fields"]["pr_ref_idaltri"]["content"]="mselect||||url::".$CONF[url_base].$CONF[dir_modules]."contact/pages/contact_search_div2.php?form_id=listpratiche&form_page=1;;size::5;;word::".PRATICHE_OTHERS;
$FORMS[pratiche][0]["Fields"]["pr_ref_idaltri"]["from_sql"]="SELECT * FROM contact p WHERE id ='%ID%' order by nome asc||val::id;;text::%codice%;;perm::1;;mod::contact";
//Fine dati soggetti

$FORMS[pratiche][0]["Fields"]["pr_tipo"]["title"]=FW_TYPE;
//$pippo="<input  class='bot-submit' value='Aggiorna' name='PulsRinvio' onclick='javascript:Rinvia()' type='button'> ";
$FORMS[pratiche][0]["Fields"]["pr_tipo"]["content"]="select||||";
//$FORMS[pratiche][0]["Fields"]["gigi"]["content"]="<input  class='bot-submit' value='Aggiorna' name='PulsRinvio' onclick='javascript:Rinvia()' type='button'> ";
//$FORMS[pratiche][0]["Fields"]["pr_tipo"]["option"]="onchange='javascript:SetTipoPratica()'";
$FORMS[pratiche][0]["Fields"]["pr_tipo"]["from_sql"]="SELECT * FROM INT_pratiche_tipo||val::codice;;text::%ttp_desc%;;perm::0;;mod::pratiche";

$FORMS[pratiche][0]["Fields"]["pr_operatore"]["title"]=PRATICHE_RESP;
$FORMS[pratiche][0]["Fields"]["pr_operatore"]["content"]="tselect||".$_SESSION[fw_userid]."||url::".$CONF[url_base].$CONF[dir_modules]."admin/pages/user_search_div.php?form_id=listpratiche&form_page=1&codice=";
$FORMS[pratiche][0]["Fields"]["pr_operatore"]["from_sql"]="SELECT * FROM ".$CONF[auth_db_table]." WHERE codice LIKE '%[VAL]%%' order by codice asc||val::id;;text::codice;;text2::nome;;perm::0;;mul::0;;tab::users";
$FORMS[pratiche][0]["Fields"]["pr_operatore"]["er_check"]="min::1";


//Dati curia
//$FORMS[pratiche][0]["Fields"]["pr_uff_giud"]["title"]=PRATICHE_UFF_GIUD;
//$FORMS[pratiche][0]["Fields"]["pr_uff_giud"]["content"]="text||||wid::50";


//$FORMS[pratiche][0]["Fields"]["pr_comp_desc"]["title"]=PRATICHE_AUT_COMP_DESC;
//$FORMS[pratiche][0]["Fields"]["pr_comp_desc"]["content"]="text||||wid::5";
//$FORMS[pratiche][0]["Fields"]["pr_comp_desc"]["er_check"]="";

$FORMS[pratiche][0]["Fields"]["pr_comp_desc"]["title"]=PRATICHE_AUT_COMP_DESC;
$FORMS[pratiche][0]["Fields"]["pr_comp_desc"]["content"]="select||||";
$FORMS[pratiche][0]["Fields"]["pr_comp_desc"]["from_sql"]="SELECT * FROM INT_uff_giud||val::codice;;text::%descrizione%;;perm::0;;mod::pratiche";
//$FORMS[pratiche][0]["Fields"]["pr_comp_desc"]["er_check"]="min::1";


$FORMS[pratiche][0]["Fields"]["pr_luogo_uff_giud"]["title"]=PRATICHE_LUOGO_UFF_GIUD;
$FORMS[pratiche][0]["Fields"]["pr_luogo_uff_giud"]["content"]="text||||wid::30";

$FORMS[pratiche][0]["Fields"]["pr_giudice"]["title"]=PRATICHE_GIUD;
$FORMS[pratiche][0]["Fields"]["pr_giudice"]["content"]="text||||wid::30";
$FORMS[pratiche][0]["Fields"]["pr_giudice"]["er_check"]="";
//____

$FORMS[pratiche][0]["Fields"]["pr_referral"]["title"]=PRATICHE_REFERRAL;
$FORMS[pratiche][0]["Fields"]["pr_referral"]["content"]="text||||wid::30";
//$addeRuolo='<a href="javascript:AddeRuolo()" class="pratica-resalt-01"><img src="%[IMAGE_GPATH]%ico/ico_tras_campo_su.gif" width="16" height="16" border="0" align="absmiddle"></a>  ';
$addeRuolo="<a href='javascript:AddeRuolo()' class='pratica-resalt-01'><img src='%[IMAGE_GPATH]%ico/ico_tras_campo_su.gif' width='16' height='16' border='0' align='absmiddle'></a>";
$FORMS[pratiche][0]["Fields"]["pr_nruolo"]["title"]=PRATICHE_NRUOLO." ".$addeRuolo;
$FORMS[pratiche][0]["Fields"]["pr_nruolo"]["content"]="text||||wid::30";
$FORMS[pratiche][0]["Fields"]["pr_nruolo"]["er_check"]="";
$FORMS[pratiche][0]["Fields"]["pr_nruolo_altri"]["title"]=PRATICHE_NRUOLO_ALTRI;
$FORMS[pratiche][0]["Fields"]["pr_nruolo_altri"]["content"]="text||||wid::30";
$FORMS[pratiche][0]["Fields"]["pr_nruolo_altri"]["er_check"]="";
//Fine dati curia

//Notulazione
$FORMS[pratiche][0]["Fields"]["pr_data_inizio"]["title"]=PRATICHE_START_PREST;
$FORMS[pratiche][0]["Fields"]["pr_data_inizio"]["content"]="date||".date("Y-m-d")."||";


$FORMS[pratiche][0]["Fields"]["pr_criterio"]["title"]=PRATICHE_CRIT;
$FORMS[pratiche][0]["Fields"]["pr_criterio"]["content"]="text||MAX/1||wid::7";

//$FORMS[pratiche][0]["Fields"]["pr_criterio"]["content"]="select||||opt::Minimo=>MIN*1,,Medio-Minimo=>MED.3,,Medio=>MED.5,,Medio-Massimo=>MED.5,,Massimo=>MAX/1";
//$FORMS[pratiche][0]["Fields"]["pr_criterio"]["content"]="select||||";
//$FORMS[pratiche][0]["Fields"]["pr_criterio"]["from_sql"]="SELECT * FROM INT_tipologie_varie WHERE tipologia=6||val::codice;;text::%descrizione%";
$FORMS[pratiche][0]["Fields"]["pr_criterio"]["er_check"]="min::4;;max::5;;type::crit";

//$FORMS[pratiche][0]["Fields"]["pr_valore_ignore"]["content"]="checkbox||||mul::0;;size::1;;opt:: ".PRATICHE_VAL_PENALE."=>-3,, ".PRATICHE_VAL_IND."=>-1,, ".PRATICHE_VAL_INDEXT."=>-2";
//$FORMS[pratiche][0]["Fields"]["pr_valore"]["content"]="text||||wid::30";
//$FORMS[pratiche][0]["Fields"]["pr_valore"]["er_check"]="";

$FORMS[pratiche][0]["Fields"]["pr_valore"]["title"]=PRATICHE_VALUE;
$FORMS[pratiche][0]["Fields"]["pr_valore"]["content"]="pratval||0||wid::30";
$FORMS[pratiche][0]["Fields"]["pr_valore"]["er_check"]="min::1;;type::float";


$FORMS[pratiche][0]["Fields"]["pr_comp_cod"]["title"]=PRATICHE_AUT_COMP;
//$FORMS[pratiche][0]["Fields"]["pr_comp_cod"]["content"]="select||||opt::".PRATICHE_AC_STRA."=>STRA,,".PRATICHE_AC_CONC."=>CONC,,".PRATICHE_AC_GDPA."=>GDPA,,".PRATICHE_AC_TRIB."=>TRIB,,".PRATICHE_AC_AMMN."=>AMMN,,".PRATICHE_AC_CA."=>C.A.,,".PRATICHE_AC_CC."=>C.C.,,".PRATICHE_AC_COST."=>COST,,TRIB.MON.MAG.SORV.=>CONC,,C.ASSISE=>AMMN,,MAG.SUP.=>C.C.,,GIP&GUP=>COST";
//$FORMS[pratiche][0]["Fields"]["pr_comp_cod"]["content"]="select||||opt::".PRATICHE_AC_STRA."=>STRA,,".PRATICHE_AC_CONC."=>CONC,,".PRATICHE_AC_GDPA."=>GDPA,,".PRATICHE_AC_TRIB."=>TRIB,,".PRATICHE_AC_CA."=>C.A.,,".PRATICHE_AC_CC."=>C.C.,,".PRATICHE_AC_COST."=>COST,,".PRATICHE_AC_AMMN."=>AMMN,,".PRATICHE_AC_GPP."=>GDPA,,".PRATICHE_AC_TMP."=>CONC,,".PRATICHE_AC_TCP."=>TRIB,,".PRATICHE_AC_ASSISE."=>AMMN,,".PRATICHE_AC_CAP."=>C.A.,,".PRATICHE_AC_CCP."=>C.C.,,".PRATICHE_AC_GIP."=>COST";
//$FORMS[pratiche][0]["Fields"]["pr_comp_cod"]["content"]="select||||opt::".PRATICHE_AC_STRA1."=>STRA,,".PRATICHE_AC_CONC1."=>CONC,,".PRATICHE_AC_GDPA1."=>GDPA,,".PRATICHE_AC_TRIB1."=>TRIB,,".PRATICHE_AC_CA1."=>C.A.,,".PRATICHE_AC_CC1."=>C.C.,,".PRATICHE_AC_COST1."=>COST,,".PRATICHE_AC_AMMN1."=>AMMN";
$FORMS[pratiche][0]["Fields"]["pr_comp_cod"]["content"]="select||||opt::".ADMIN_TA_STRAG."=>STRA,,".ADMIN_TA_CONC."=>CONC,,".ADMIN_TA_PRET."=>GDPA,,".ADMIN_TA_TRIB."=>TRIB,,".ADMIN_TA_CAPP."=>C.A.,,".ADMIN_TA_CASS."=>C.C.,,".ADMIN_TA_CCOST."=>COST,,".ADMIN_TA_AMN."=>AMMN";

$FORMS[pratiche][0]["Fields"]["pr_comp_cod"]["er_check"]="";
$FORMS[pratiche][0]["Fields"]["pr_on_orar"]["title"]=PRATICHE_HOUR_PRICE;
$FORMS[pratiche][0]["Fields"]["pr_on_orar"]["content"]="text||||wid::10";
$FORMS[pratiche][0]["Fields"]["pr_on_orar"]["er_check"]="type::float";
$FORMS[pratiche][0]["Fields"]["pr_perc_onor"]["title"]=PRATICHE_PERC_ONOR;
$FORMS[pratiche][0]["Fields"]["pr_perc_onor"]["content"]="text||||wid::10";
$FORMS[pratiche][0]["Fields"]["pr_perc_onor"]["er_check"]="type::float";
$FORMS[pratiche][0]["Fields"]["pr_fido"]["title"]=PRATICHE_FIDO;
$FORMS[pratiche][0]["Fields"]["pr_fido"]["content"]="text||||wid::30";
$FORMS[pratiche][0]["Fields"]["pr_fido"]["er_check"]="";
//fine Notulazione

$FORMS[pratiche][0]["Fields"]["pr_dept"]["title"]=PRATICHE_DEPT;
$FORMS[pratiche][0]["Fields"]["pr_dept"]["content"]="select||||mul::0;;opt::".FW_NONE."=>0";
$FORMS[pratiche][0]["Fields"]["pr_dept"]["from_sql"]="SELECT * FROM ".$CONF[auth_groups_table]." WHERE tipo=1||val::id;;text::%name%";

$FORMS[pratiche][0]["Fields"]["pr_uff"]["title"]=PRATICHE_UFF;
$FORMS[pratiche][0]["Fields"]["pr_uff"]["content"]="select||||mul::0;;opt::".FW_NONE."=>0";
$FORMS[pratiche][0]["Fields"]["pr_uff"]["from_sql"]="SELECT * FROM ".$CONF[auth_groups_table]." WHERE tipo=2||val::id;;text::%name%";

$FORMS[pratiche][0]["Fields"]["pr_uff_orig"]["title"]=PRATICHE_UORIG;
$FORMS[pratiche][0]["Fields"]["pr_uff_orig"]["content"]="select||||mul::0;;opt::".FW_NONE."=>0";
$FORMS[pratiche][0]["Fields"]["pr_uff_orig"]["from_sql"]="SELECT * FROM ".$CONF[auth_groups_table]." WHERE tipo=2||val::id;;text::%name%";
$FORMS[pratiche][0]["Fields"]["pr_prof_orig"]["title"]=PRATICHE_PORIG;
$FORMS[pratiche][0]["Fields"]["pr_prof_orig"]["content"]="tselect||||url::".$CONF[url_base].$CONF[dir_modules]."admin/pages/user_search_div.php?form_id=listpratiche&form_page=1&codice=";
$FORMS[pratiche][0]["Fields"]["pr_prof_orig"]["from_sql"]="SELECT * FROM ".$CONF[auth_db_table]." WHERE codice LIKE '%[VAL]%%' order by codice asc||val::id;;text::codice;;text2::nome;;perm::0;;mul::0;;tab::users";


$FORMS[pratiche][0]["Fields"]["note"]["title"]=FW_NOTE;
$FORMS[pratiche][0]["Fields"]["note"]["content"]="textarea||||col::40;;row::5";
$FORMS[pratiche][0]["Fields"]["note"]["er_check"]="";


$FORMS[pratiche][0][Fields]["pr_riunita_a"]["title"]=PRATICHE_RIUNITA_A;
$FORMS[pratiche][0][Fields]["pr_riunita_a"]["content"]="tselect||||url::".$CONF[url_base].$CONF[dir_modules]."pratiche/pages/pratiche_search_div.php?form_id=print_pres&form_page=1&pr_codice=";
$FORMS[pratiche][0][Fields]["pr_riunita_a"]["from_sql"]="SELECT * FROM pratiche p WHERE %[PERM]% AND pr_codice LIKE '%[VAL]%%' order by pr_codice asc||val::id;;text::pr_codice;;text2::pr_riunita_a;;perm::1;;mod::pratiche;;mul::1";


$FORMS[pratiche][0]["Fields"]["pr_riunita_il"]["title"]=PRATICHE_RIUNITA_IL;
//$FORMS[pratiche][0]["Fields"]["pr_riunita_il"]["content"]="date||".date("Y-m-d")."||";
$FORMS[pratiche][0]["Fields"]["pr_riunita_il"]["content"]="date||"."::date"."||wid::30";
$FORMS[pratiche][0]["Fields"]["permessi"]["title"]=FW_PERMISSION;
$FORMS[pratiche][0]["Fields"]["permessi"]["content"]="permission||||";
$FORMS[pratiche][0]["Fields"]["send"]["content"]="submit||".PRATICHE_ADD."||";

$FORMS[pratiche][1]["name"]="note";
$FORMS[pratiche][1]["onpost"]="action::db||table::note||type::add||wf::id";
$FORMS[pratiche][1]["ignore"]="";
$FORMS[pratiche][1]["Fields"]["nota"]["title"]=PRATICHE_SUBJ;
$FORMS[pratiche][1]["Fields"]["nota"]["content"]="textarea||||col::60;;row::10";
$FORMS[pratiche][1]["Fields"]["type"]["content"]="hidden||".$_GET[type]."||";
$FORMS[pratiche][1]["Fields"]["ref_id"]["content"]="hidden||".$_GET[ref_id]."||";

$FORMS[pratiche][1]["Fields"]["send"]["content"]="submit||".NOTE_ADD."||";


?>
