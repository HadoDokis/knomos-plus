<?
// Form USER
$FORMS[admin][0]["name"]="new_user";
$FORMS[admin][0]["onpost"]="action::db||table::".$CONF[auth_db_table]."||type::add||wf::id";
$FORMS[admin][0]["ignore"]="gruppi;;ref_prat";
$FORMS[admin][0]["Fields"]["login"]["title"]=FW_LOGIN;
$FORMS[admin][0]["Fields"]["login"]["content"]="text||||wid::40";
$FORMS[admin][0]["Fields"]["login"]["er_check"]="min::5;;nodupe::1";
$FORMS[admin][0]["Fields"]["password"]["title"]=FW_PASSWORD;
$FORMS[admin][0]["Fields"]["password"]["content"]="password||||wid::40";
$FORMS[admin][0]["Fields"]["password"]["er_check"]="min::8;;type::alfanum";
$FORMS[admin][0]["Fields"]["codice"]["title"]=FW_CODE;
$FORMS[admin][0]["Fields"]["codice"]["content"]="text||||wid::6";
$FORMS[admin][0]["Fields"]["codice"]["er_check"]="min::1;;max::4;;nodupe::1";
$FORMS[admin][0]["Fields"]["nome"]["title"]=FW_NAME;
$FORMS[admin][0]["Fields"]["nome"]["content"]="text||||wid::40";
$FORMS[admin][0]["Fields"]["nome"]["er_check"]="min::2";

$FORMS[admin][0]["Fields"]["telefonoip"]["title"]=ADMIN_USER_TELEFONOIP;
$FORMS[admin][0]["Fields"]["telefonoip"]["content"]="text||||wid::40";
$FORMS[admin][0]["Fields"]["email"]["title"]=ADMIN_USER_MAIL;
$FORMS[admin][0]["Fields"]["email"]["content"]="text||||wid::40";
$FORMS[admin][0]["Fields"]["natoa"]["title"]=ADMIN_USER_NATOA;
$FORMS[admin][0]["Fields"]["natoa"]["content"]="text||||wid::40";
$FORMS[admin][0]["Fields"]["natoil"]["title"]=ADMIN_USER_NATOIL;
$FORMS[admin][0]["Fields"]["natoil"]["content"]="date||".date("Y-m-d")."||wid::30";
$FORMS[admin][0]["Fields"]["domfisc"]["title"]=ADMIN_USER_DOMFISC;
$FORMS[admin][0]["Fields"]["domfisc"]["content"]="text||||wid::40";
$FORMS[admin][0]["Fields"]["codfisc"]["title"]=ADMIN_USER_CODFISC;
$FORMS[admin][0]["Fields"]["codfisc"]["content"]="text||||wid::40";
$FORMS[admin][0]["Fields"]["piva"]["title"]=ADMIN_USER_PIVA;
$FORMS[admin][0]["Fields"]["piva"]["content"]="text||||wid::40";
$FORMS[admin][0]["Fields"]["citta"]["title"]=ADMIN_USER_CITTA;
$FORMS[admin][0]["Fields"]["citta"]["content"]="text||||wid::40";
$FORMS[admin][0]["Fields"]["indirizzo"]["title"]=ADMIN_USER_INDIRIZZO;
$FORMS[admin][0]["Fields"]["indirizzo"]["content"]="text||||wid::40";
$FORMS[admin][0]["Fields"]["mansione"]["title"]=ADMIN_USER_MANSIONE;
$FORMS[admin][0]["Fields"]["mansione"]["content"]="text||||wid::40";


$FORMS[admin][0]["Fields"]["language"]["title"]=FW_LANGUAGE;
$FORMS[admin][0]["Fields"]["language"]["content"]="select||it||opt::Italiano=>it,,English=>en,,Bulgar=>bg,,Romeno=>ro,,Serbian=>se,,Deutch=>de";
$FORMS[admin][0]["Fields"]["onorario"]["title"]=ADMIN_USER_ON_ORARIO;
$FORMS[admin][0]["Fields"]["onorario"]["content"]="text||||wid::6";
$FORMS[admin][0]["Fields"]["onorario"]["er_check"]="type::float";
$FORMS[admin][0]["Fields"]["ref_prat"]["title"]="";
$FORMS[admin][0]["Fields"]["ref_prat"]["content"]="checkbox||1||size::1;;opt:: ".ADMIN_USER_MAKE_PERSPRAT."=>1";
#$FORMS[admin][0]["Fields"]["gruppi"]["title"]=ADMIN_USER_GROUPS;
#$FORMS[admin][0]["Fields"]["gruppi"]["content"]="select||||mul::1;;size::8";
#$FORMS[admin][0]["Fields"]["gruppi"]["from_sql"]="SELECT * FROM ".$CONF[auth_groups_table]." order by name asc||val::id;;text::%name%;;perm::0";
$FORMS[admin][0]["Fields"]["gruppi"]["title"]=ADMIN_USER_GROUPS;
$FORMS[admin][0]["Fields"]["gruppi"]["content"]="mselect||||url::".$CONF[url_base].$CONF[dir_modules]."admin/pages/group_search_div2.php?form_id=search_group&form_page=1&gtipo=1;;size::5;;word::".ADMIN_USER_GROUPS;
$FORMS[admin][0]["Fields"]["gruppi"]["from_sql"]="SELECT * FROM ".$CONF[auth_groups_table]." WHERE id='%ID%'||val::id;;text::%name%";
$FORMS[admin][0]["Fields"]["ono_prat"]["title"]=ADMIN_USER_ONOR_PRAT;
$FORMS[admin][0]["Fields"]["ono_prat"]["content"]="ug_value||||type::P";
$FORMS[admin][0]["Fields"]["ono_cli"]["title"]=ADMIN_USER_ONOR_CLI;
$FORMS[admin][0]["Fields"]["ono_cli"]["content"]="ug_value||||type::C";
$FORMS[admin][0]["Fields"]["ono_tipo"]["title"]=ADMIN_USER_ONOR_TIPO;
$FORMS[admin][0]["Fields"]["ono_tipo"]["content"]="ug_value||||type::T";
$FORMS[admin][0]["Fields"]["last_pw_change"]["content"]="hidden||".date("Y-m-d")."||";
$FORMS[admin][0]["Fields"]["admin"]["title"]="";
$FORMS[admin][0]["Fields"]["admin"]["content"]="checkbox||||size::1;;opt:: ".ADMIN_USER_ADMIN."=>1";
$FORMS[admin][0]["Fields"]["move_prat"]["content"]="checkbox||||size::1;;opt:: ".ADMIN_USER_MOVEPRAT."=>1";
$FORMS[admin][0]["Fields"]["pratiche_add"]["content"]="checkbox||||size::1;;opt:: ".ADMIN_USER_ADDPRAT."=>1";
$FORMS[admin][0]["Fields"]["send"]["content"]="submit||".ADMIN_USER_ADD."||";


// CALENDAR TYPE
$FORMS[admin][1]["name"]="new_ct";
$FORMS[admin][1]["onpost"]="action::db||table::INT_calendar_tipo||type::add||wf::id";
$FORMS[admin][1]["ignore"]="";
$FORMS[admin][1]["Fields"]["ttsid"]["title"]=FW_CODE;
$FORMS[admin][1]["Fields"]["ttsid"]["content"]="text||||wid::40";
$FORMS[admin][1]["Fields"]["ttsid"]["er_check"]="max::4;;min::1";
$FORMS[admin][1]["Fields"]["tts_desc"]["title"]=FW_DESC;
$FORMS[admin][1]["Fields"]["tts_desc"]["content"]="text||||wid::40";
$FORMS[admin][1]["Fields"]["send"]["content"]="submit||".ADMIN_CT_ADD."||";


// PRATICHE TYPE
$FORMS[admin][2]["name"]="new_tp";
$FORMS[admin][2]["onpost"]="action::db||table::INT_pratiche_tipo||type::add||wf::id";
$FORMS[admin][2]["ignore"]="";
$FORMS[admin][2]["Fields"]["codice"]["title"]=FW_CODE;
$FORMS[admin][2]["Fields"]["codice"]["content"]="text||||wid::40";
$FORMS[admin][2]["Fields"]["codice"]["er_check"]="max::4;min::2";
$FORMS[admin][2]["Fields"]["ttp_desc"]["title"]=FW_DESC;
$FORMS[admin][2]["Fields"]["ttp_desc"]["content"]="text||||wid::40";
$FORMS[admin][2]["Fields"]["ttp_desc"]["title"]=FW_DESC;
$FORMS[admin][2]["Fields"]["contr_unif"]["title"]="Contributo unificato";
$FORMS[admin][2]["Fields"]["contr_unif"]["content"]="select||it||opt::Esente=>0,,Per scaglione di valore=>1,,Per scaglione di valore dimezzato=>2";
$FORMS[admin][2]["Fields"]["contr_unif"]["from_sql"]="SELECT * FROM INT_contr_unificato WHERE scaglione=101||val::importo;;text::%descrizione%";

$FORMS[admin][2]["Fields"]["send"]["content"]="submit||".ADMIN_TP_ADD."||";


// GROUPS FORM
$FORMS[admin][3]["name"]="new_group";
$FORMS[admin][3]["onpost"]="action::db||table::".$CONF[auth_groups_table]."||type::add||wf::id";
$FORMS[admin][3]["ignore"]="";
$FORMS[admin][3]["Fields"]["name"]["title"]=FW_NAME;
$FORMS[admin][3]["Fields"]["name"]["content"]="text||||wid::40";
$FORMS[admin][3]["Fields"]["name"]["er_check"]="max::50;min::3";
$FORMS[admin][3]["Fields"]["descr"]["title"]=FW_DESC;
$FORMS[admin][3]["Fields"]["descr"]["content"]="text||||wid::40";
$FORMS[admin][3]["Fields"]["descr"]["er_check"]="max::254";
$FORMS[admin][3]["Fields"]["on_orar"]["title"]=ADMIN_ON_ORAR;
$FORMS[admin][3]["Fields"]["on_orar"]["content"]="text||0,00||wid::9";
$FORMS[admin][3]["Fields"]["on_orar"]["er_check"]="max::10";
$FORMS[admin][3]["Fields"]["tipo"]["content"]="checkbox||0||opt:: ".ADMIN_GROUP."=>0,, ".ADMIN_DIPART."=>1,, ".ADMIN_OFFICE."=>2;;size::1";
$FORMS[admin][3]["Fields"]["tipo"]["er_check"]="max::254";
$FORMS[admin][3]["Fields"]["send"]["content"]="submit||".ADMIN_GROUP_ADD."||";


// TARIFFE FORM
$FORMS[admin][4]["name"]="new_tariffa";
$FORMS[admin][4]["onpost"]="action::db||table::INT_tariffe||type::add||wf::id";
$FORMS[admin][4]["ignore"]="";
$FORMS[admin][4]["Fields"]["tatid"]["title"]=FW_CODE;
$FORMS[admin][4]["Fields"]["tatid"]["content"]="text||||wid::40";
$FORMS[admin][4]["Fields"]["tatid"]["er_check"]="max::5";
$FORMS[admin][4]["Fields"]["tat_desc"]["title"]=FW_DESC;
$FORMS[admin][4]["Fields"]["tat_desc"]["content"]="text||||wid::40";
$FORMS[admin][4]["Fields"]["tat_desc"]["er_check"]="max::250";
$FORMS[admin][4]["Fields"]["tat_unita"]["title"]=ADMIN_TA_UNIT;
$FORMS[admin][4]["Fields"]["tat_unita"]["content"]="text||||wid::5";
$FORMS[admin][4]["Fields"]["tat_unita"]["er_check"]="max::5";
$FORMS[admin][4]["Fields"]["tat_quantita"]["title"]=ADMIN_TA_QUANT;
$FORMS[admin][4]["Fields"]["tat_quantita"]["content"]="text||||wid::5";
$FORMS[admin][4]["Fields"]["tat_quantita"]["er_check"]="max::10";





$FORMS[admin][4]["Fields"]["tat_imp"]["title"]=ADMIN_TA_IMP;
$FORMS[admin][4]["Fields"]["tat_imp"]["content"]="text||||wid::5";
$FORMS[admin][4]["Fields"]["tat_imp"]["er_check"]="max::20";
$FORMS[admin][4]["Fields"]["tat_imp_molt"]["title"]=ADMIN_TA_IMPM;
$FORMS[admin][4]["Fields"]["tat_imp_molt"]["content"]="text||||wid::2";
$FORMS[admin][4]["Fields"]["tat_imp_molt"]["er_check"]="max::1";
$FORMS[admin][4]["Fields"]["tat_nonimp"]["title"]=ADMIN_TA_NON_IMP;
$FORMS[admin][4]["Fields"]["tat_nonimp"]["content"]="text||||wid::5";
$FORMS[admin][4]["Fields"]["tat_nonimp"]["er_check"]="max::20";
$FORMS[admin][4]["Fields"]["tat_nonimp_molt"]["title"]=ADMIN_TA_NON_IMPM;
$FORMS[admin][4]["Fields"]["tat_nonimp_molt"]["content"]="text||||wid::2";
$FORMS[admin][4]["Fields"]["tat_nonimp_molt"]["er_check"]="max::1";
$FORMS[admin][4]["Fields"]["tat_diritti"]["title"]=ADMIN_TA_DIR;
$FORMS[admin][4]["Fields"]["tat_diritti"]["content"]="text||||wid::5";
$FORMS[admin][4]["Fields"]["tat_diritti"]["er_check"]="max::5";
$FORMS[admin][4]["Fields"]["tat_stragiudiziali"]["title"]=ADMIN_TA_STRAG;
$FORMS[admin][4]["Fields"]["tat_stragiudiziali"]["content"]="text||||wid::5";
$FORMS[admin][4]["Fields"]["tat_stragiudiziali"]["er_check"]="max::5";
$FORMS[admin][4]["Fields"]["tat_ccostituzionale"]["title"]=ADMIN_TA_CCOST;
$FORMS[admin][4]["Fields"]["tat_ccostituzionale"]["content"]="text||||wid::5";
$FORMS[admin][4]["Fields"]["tat_ccostituzionale"]["er_check"]="max::5";
$FORMS[admin][4]["Fields"]["tat_conciliazione"]["title"]=ADMIN_TA_CONC;
$FORMS[admin][4]["Fields"]["tat_conciliazione"]["content"]="text||||wid::5";
$FORMS[admin][4]["Fields"]["tat_conciliazione"]["er_check"]="max::5";
$FORMS[admin][4]["Fields"]["tat_pretura"]["title"]=ADMIN_TA_PRET;
$FORMS[admin][4]["Fields"]["tat_pretura"]["content"]="text||||wid::5";
$FORMS[admin][4]["Fields"]["tat_pretura"]["er_check"]="max::5";
$FORMS[admin][4]["Fields"]["tat_tribunale"]["title"]=ADMIN_TA_TRIB;
$FORMS[admin][4]["Fields"]["tat_tribunale"]["content"]="text||||wid::5";
$FORMS[admin][4]["Fields"]["tat_tribunale"]["er_check"]="max::5";
$FORMS[admin][4]["Fields"]["tat_amministrative"]["title"]=ADMIN_TA_AMN;
$FORMS[admin][4]["Fields"]["tat_amministrative"]["content"]="text||||wid::5";
$FORMS[admin][4]["Fields"]["tat_amministrative"]["er_check"]="max::5";
$FORMS[admin][4]["Fields"]["tat_cappello"]["title"]=ADMIN_TA_CAPP;
$FORMS[admin][4]["Fields"]["tat_cappello"]["content"]="text||||wid::5";
$FORMS[admin][4]["Fields"]["tat_cappello"]["er_check"]="max::5";
$FORMS[admin][4]["Fields"]["tat_ccassazione"]["title"]=ADMIN_TA_CASS;
$FORMS[admin][4]["Fields"]["tat_ccassazione"]["content"]="text||||wid::5";
$FORMS[admin][4]["Fields"]["tat_ccassazione"]["er_check"]="max::5";
$FORMS[admin][4]["Fields"]["selettore"]["title"]="Nella pagina 'Aggiungi Prestazione' inserisci in:";
$FORMS[admin][4]["Fields"]["selettore"]["content"]="select||||opt::Selettore 1 =>1,,Selettore 2 =>2,,Selettore 3 =>3,,Selettore 4 =>4,,Selettore 5 =>5,,Selettore 6 =>6,,Non inserire =>0";
//$FORMS[admin][4]["Fields"]["selettore"]["er_check"]="min::1";


// PRATICHE TYPE
$FORMS[admin][5]["name"]="new_tp";
$FORMS[admin][5]["onpost"]="action::db||table::INT_document_template||type::add||wf::id";
$FORMS[admin][5]["ignore"]="file";
$FORMS[admin][5]["Fields"]["descr"]["title"]=FW_DESC;
$FORMS[admin][5]["Fields"]["descr"]["content"]="text||||wid::40";
$FORMS[admin][5]["Fields"]["file"]["title"]=FW_FILE;
$FORMS[admin][5]["Fields"]["file"]["content"]="file||||";
$FORMS[admin][5]["Fields"]["send"]["content"]="submit||".ADMIN_TEMPL_ADD."||";



//USER FORM RESTRICTED
$FORMS[admin][6]["name"]="new_user";
$FORMS[admin][6]["onpost"]="action::db||table::".$CONF[auth_db_table]."||type::add||wf::id";
$FORMS[admin][6]["ignore"]="login;;codice;;onorario";
$FORMS[admin][6]["Fields"]["login"]["title"]=FW_LOGIN;
$FORMS[admin][6]["Fields"]["login"]["content"]="htmltext||".$_SESSION[user][login]."||wid::40;;disab::1";
$FORMS[admin][6]["Fields"]["password"]["title"]=FW_PASSWORD;
$FORMS[admin][6]["Fields"]["password"]["content"]="password||||wid::40";
$FORMS[admin][6]["Fields"]["password"]["er_check"]="min::8;;type::alfanum";
$FORMS[admin][6]["Fields"]["codice"]["title"]=FW_CODE;
$FORMS[admin][6]["Fields"]["codice"]["content"]="htmltext||".$_SESSION[user][codice]."||";
$FORMS[admin][6]["Fields"]["nome"]["title"]=FW_NAME;
$FORMS[admin][6]["Fields"]["nome"]["content"]="text||||wid::40";
$FORMS[admin][6]["Fields"]["nome"]["er_check"]="min::2";
$FORMS[admin][6]["Fields"]["language"]["title"]=FW_LANGUAGE;
$FORMS[admin][6]["Fields"]["language"]["content"]="select||it||opt::Italiano=>it,,Inglese=>en,,Bulgaro=>bg,,Romeno=>ro,,Serbian=>se,,Deutch=>de";
$FORMS[admin][6]["Fields"]["onorario"]["title"]=ADMIN_USER_ON_ORARIO;
$FORMS[admin][6]["Fields"]["onorario"]["content"]="htmltext||".$_SESSION[user][onorario]."||";
$FORMS[admin][6]["Fields"]["onorario"]["er_check"]="";
$FORMS[admin][6]["Fields"]["last_pw_change"]["content"]="hidden||".date("Y-m-d")."||";

$FORMS[admin][6]["Fields"]["send"]["content"]="submit||".ADMIN_USER_ADD."||";



// LOCK
$FORMS[admin][7]["name"]="new_tp";
$FORMS[admin][7]["onpost"]="action::db||table::system_lock||type::add||wf::id";
$FORMS[admin][7]["ignore"]="file";
$FORMS[admin][7]["Fields"]["lock_date"]["title"]=ADMIN_LOCK_DATE;
$FORMS[admin][7]["Fields"]["lock_date"]["content"]="date||".date("Y-m-d")."||wid::40";
$FORMS[admin][7]["Fields"]["lock_date"]["er_check"]="min::10";
$FORMS[admin][7]["Fields"]["lock_time"]["title"]=ADMIN_LOCK_TIME;
$FORMS[admin][7]["Fields"]["lock_time"]["content"]="text||".date("H:i:s")."||wid::10";
$FORMS[admin][7]["Fields"]["lock_time"]["er_check"]="min::8";
$FORMS[admin][7]["Fields"]["min_notify"]["title"]=ADMIN_LOCK_MINALERT;
$FORMS[admin][7]["Fields"]["min_notify"]["content"]="text||5||wid::10";
$FORMS[admin][7]["Fields"]["min_notify"]["er_check"]="min::1";
$FORMS[admin][7]["Fields"]["hash_unlock"]["title"]=ADMIN_LOCK_HASH;
$FORMS[admin][7]["Fields"]["hash_unlock"]["content"]="password||||wid::20";
$FORMS[admin][7]["Fields"]["hash_unlock"]["er_check"]="min::4";
$FORMS[admin][7]["Fields"]["descr"]["title"]=FW_DESC;
$FORMS[admin][7]["Fields"]["descr"]["content"]="text||||wid::50";
$FORMS[admin][7]["Fields"]["send"]["content"]="submit||".ADMIN_LOCK_ADD."||";



// PRATICHE STD
$FORMS[admin][11]["name"]="new_pr_std";
$FORMS[admin][11]["onpost"]="action::db||table::INT_pratiche_std||type::add||wf::id";
$FORMS[admin][11]["ignore"]="";
$FORMS[admin][11]["Fields"]["descrizione"]["title"]=ADMIN_PR_STD_DESCRIZIONE;
$FORMS[admin][11]["Fields"]["descrizione"]["content"]="text||||wid::40";
$FORMS[admin][11]["Fields"]["descrizione"]["er_check"]="min::1";

$FORMS[admin][11]["Fields"]["stato"]["title"]="Stato";
$FORMS[admin][11]["Fields"]["stato"]["content"]="select||||";

$FORMS[admin][11]["Fields"]["stato"]["from_sql"]="SELECT * FROM INT_tipologie_varie WHERE tipologia=1||val::codice;;text::%descrizione%;;perm::0;;mod::pratiche";

$FORMS[admin][11]["Fields"]["fase"]["title"]="Fase";
$FORMS[admin][11]["Fields"]["fase"]["content"]="select||||";
//$FORMS[admin][11]["Fields"]["fase"]["from_sql"]="SELECT * FROM INT_pratiche_tipo||val::codice;;text::%ttp_desc%;;perm::0;;mod::pratiche";
$FORMS[admin][11]["Fields"]["fase"]["from_sql"]="SELECT * FROM INT_tipologie_varie WHERE tipologia=2||val::codice;;text::%descrizione%;;perm::0;;mod::pratiche";

$FORMS[admin][11]["Fields"]["posizione"]["title"]="Posizione del cliente nella pratica";
$FORMS[admin][11]["Fields"]["posizione"]["content"]="select||||";
$FORMS[admin][11]["Fields"]["posizione"]["from_sql"]="SELECT * FROM INT_tipologie_varie WHERE tipologia=5||val::codice;;text::%descrizione%;;perm::0;;mod::pratiche";

$FORMS[admin][11]["Fields"]["cod_tipo"]["title"]=FW_TYPE;
$FORMS[admin][11]["Fields"]["cod_tipo"]["content"]="select||||";
$FORMS[admin][11]["Fields"]["cod_tipo"]["from_sql"]="SELECT * FROM INT_pratiche_tipo||val::codice;;text::%ttp_desc%;;perm::0;;mod::pratiche";

$FORMS[admin][11]["Fields"]["curia"]["title"]=PRATICHE_CURIA;
//$FORMS[admin][11]["Fields"]["curia"]["content"]="text||||wid::40";
$FORMS[admin][11]["Fields"]["curia"]["content"]="select||||";
$FORMS[admin][11]["Fields"]["curia"]["from_sql"]="SELECT * FROM INT_uff_giud||val::codice;;text::%descrizione%;;perm::0;;mod::pratiche";

//$FORMS[admin][11]["Fields"]["uff_giud"]["title"]=PRATICHE_UFF_GIUD;
//$FORMS[admin][11]["Fields"]["uff_giud"]["content"]="text||||wid::40";

$FORMS[admin][11]["Fields"]["luogo_uff_giud"]["title"]=PRATICHE_LUOGO_UFF_GIUD;
$FORMS[admin][11]["Fields"]["luogo_uff_giud"]["content"]="text||||wid::40";

$FORMS[admin][11]["Fields"]["giudice"]["title"]=ADMIN_PR_STD_GIUDICE;
$FORMS[admin][11]["Fields"]["giudice"]["content"]="text||||wid::40";

$FORMS[admin][11]["Fields"]["list_aut_comp"]["title"]=PRATICHE_AUT_COMP;
$FORMS[admin][11]["Fields"]["list_aut_comp"]["content"]="select||||opt::".ADMIN_TA_STRAG."=>0,,".ADMIN_TA_CONC."=>1,,".ADMIN_TA_PRET."=>2,,".ADMIN_TA_TRIB."=>3,,".ADMIN_TA_CAPP."=>4,,".ADMIN_TA_CASS."=>5,,".ADMIN_TA_CCOST."=>6,,".ADMIN_TA_AMN."=>7";

$FORMS[admin][11]["Fields"]["criterio"]["title"]=ADMIN_PR_STD_CRITERIO;
$FORMS[admin][11]["Fields"]["criterio"]["content"]="text||||wid::5";
$FORMS[admin][11]["Fields"]["criterio"]["content"]="select||||opt::Minimo=>MIN*1,,Medio->Minimo=>MED.3,,Medio=>MED.5,,Medio->Massimo=>MED.7,,Massimo=>MAX/1";

$FORMS[admin][11]["Fields"]["dipartimento"]["title"]=PRATICHE_DEPT;
$FORMS[admin][11]["Fields"]["dipartimento"]["content"]="select||||mul::0;;opt::".FW_ANY."=>";
$FORMS[admin][11]["Fields"]["dipartimento"]["from_sql"]="SELECT * FROM ".$CONF[auth_groups_table]." WHERE tipo=1||val::id;;text::%name%";

$FORMS[admin][11]["Fields"]["send"]["content"]="submit||".ADMIN_PR_STD_ADD."||";


// calendar STD
$FORMS[admin][12]["name"]="new_cal_std";
$FORMS[admin][12]["onpost"]="action::db||table::INT_calendar_std||type::add||wf::id";
$FORMS[admin][12]["ignore"]="";

$FORMS[admin][12]["Fields"]["descrizione"]["title"]=ADMIN_PR_STD_DESCRIZIONE;
$FORMS[admin][12]["Fields"]["descrizione"]["content"]="text||||wid::40";
$FORMS[admin][12]["Fields"]["descrizione"]["er_check"]="min::1";
$FORMS[admin][12]["Fields"]["cod_prest"]["title"]=EXPORT_REF_CODE;
$FORMS[admin][12]["Fields"]["cod_prest"]["content"]="tselect||||url::".$CONF[url_base].$CONF[dir_modules]."admin/pages/ta_search_div.php?simple_ins=1&form_id=listpratiche&form_page=1&codice=";
$FORMS[admin][12]["Fields"]["cod_prest"]["from_sql"]="SELECT * FROM INT_tariffe WHERE tatid LIKE '%[VAL]%%' order by tatid asc||val::id;;text::tatid;;text2::tat_desc;;perm::0;;mod::admin;;mul::0;;tab::INT_tariffe;;ids::tatid";
$FORMS[admin][12]["Fields"]["cod_prest"]["er_check"]="min::1";

$FORMS[admin][12]["Fields"]["se_evento"]["title"]=FW_TYPE;
$FORMS[admin][12]["Fields"]["se_evento"]["content"]="select||||";
$FORMS[admin][12]["Fields"]["se_evento"]["from_sql"]="SELECT * FROM INT_tipologie_varie WHERE tipologia=3||val::codice;;text::%descrizione%;;perm::0;;mod::pratiche";

//$FORMS[admin][12]["Fields"]["se_evento"]["content"]="select||||opt::Incombente =>1,,Evento =>0,,Provvedimento =>2,,Nota =>3";
//$FORMS[admin][12]["Fields"]["se_evento"]["from_sql"]="SELECT * FROM ".$CONF[auth_db_table]." WHERE codice LIKE '%[VAL]%%' order by codice asc||val::id;;text::codice;;perm::0;;mul::0;;tab::users";


$FORMS[admin][12]["Fields"]["se_todo"]["title"]=CALENDAR_FATTO;
$FORMS[admin][12]["Fields"]["se_todo"]["content"]="select||||";
$FORMS[admin][12]["Fields"]["se_todo"]["from_sql"]="SELECT * FROM INT_tipologie_varie WHERE tipologia=4||val::codice;;text::%descrizione%;;perm::0;;mod::pratiche";
//$FORMS[admin][12]["Fields"]["se_todo"]["content"]="select||||opt::In corso =>0,,In riserva / attesa =>1,,Completata =>2,,Da aggiornare =>3";
//$FORMS[admin][12]["Fields"]["se_todo"]["from_sql"]="SELECT * FROM ".$CONF[auth_db_table]." WHERE codice LIKE '%[VAL]%%' order by codice asc||val::id;;text::codice;;perm::0;;mul::0;;tab::users";
//$FORMS[admin][12]["Fields"]["se_todo"]["title"]="";
//$FORMS[admin][12]["Fields"]["se_todo"]["content"]="checkbox||0||opt:: <b>".CALENDAR_FATTO."</b>=>1;;mul::0;;size::1";


$FORMS[admin][12]["Fields"]["cod_tipo_impegno"]["title"]=CALENDAR_GENERE;
$FORMS[admin][12]["Fields"]["cod_tipo_impegno"]["content"]="select||||opt::".FW_NONE."=>0";
$FORMS[admin][12]["Fields"]["cod_tipo_impegno"]["from_sql"]="SELECT * FROM INT_calendar_tipo||val::ttsid;;text::(%ttsid%) %tts_desc%;;perm::0";

$FORMS[admin][12]["Fields"]["comp_desc"]["title"]=PRATICHE_AUT_COMP_DESC;
$FORMS[admin][12]["Fields"]["comp_desc"]["content"]="select||||opt::".FW_NONE."=>";
$FORMS[admin][12]["Fields"]["comp_desc"]["from_sql"]="SELECT * FROM INT_uff_giud||val::codice;;text::%descrizione%;;perm::0;;mod::pratiche";

$FORMS[admin][12]["Fields"]["luogo"]["title"]=PRATICHE_LUOGO_UFF_GIUD;
$FORMS[admin][12]["Fields"]["luogo"]["content"]="text||||wid::30";

$FORMS[admin][12]["Fields"]["giudice"]["title"]=PRATICHE_GIUD;
$FORMS[admin][12]["Fields"]["giudice"]["content"]="text||||wid::30";

$FORMS[admin][12]["Fields"]["priorita"]["title"]=CALENDAR_PRIORITY;
$FORMS[admin][12]["Fields"]["priorita"]["content"]="select||0||opt::".CALENDAR_PRIORITY_LOW."=>0,,".CALENDAR_PRIORITY_MED."=>1,,".CALENDAR_PRIORITY_HIGH."=>2";

$FORMS[admin][12]["Fields"]["civ_pen"]["title"]=ADMIN_CAL_STD_CIV_PEN;
$FORMS[admin][12]["Fields"]["civ_pen"]["content"]="select||||opt::Civile =>1,,Penale =>2,,Veloci =>3";

//$FORMS[admin][12]["Fields"]["civ_pen"]["title"]=ADMIN_CAL_STD_CIV_PEN;
//$FORMS[admin][12]["Fields"]["civ_pen"]["content"]="text||||wid::4";
//$FORMS[admin][12]["Fields"]["civ_pen"]["er_check"]="min::1";

$FORMS[admin][12]["Fields"]["send"]["content"]="submit||".ADMIN_CAL_STD_ADD."||";

// termini processuali
$FORMS[admin][13]["name"]="new_ter_proc";
$FORMS[admin][13]["onpost"]="action::db||table::INT_termini_processuali||type::add||wf::id";
$FORMS[admin][13]["ignore"]="";

$FORMS[admin][13]["Fields"]["descrizione"]["title"]=ADMIN_TER_PROC_DESCRIZIONE;
$FORMS[admin][13]["Fields"]["descrizione"]["content"]="text||||wid::40";
$FORMS[admin][13]["Fields"]["descrizione"]["er_check"]="min::1";
$FORMS[admin][13]["Fields"]["cod_prest"]["title"]=EXPORT_REF_CODE;
$FORMS[admin][13]["Fields"]["cod_prest"]["content"]="tselect||||url::".$CONF[url_base].$CONF[dir_modules]."admin/pages/ta_search_div.php?simple_ins=1&form_id=listpratiche&form_page=1&codice=";
$FORMS[admin][13]["Fields"]["cod_prest"]["from_sql"]="SELECT * FROM INT_tariffe WHERE tatid LIKE '%[VAL]%%' order by tatid asc||val::id;;text::tatid;;text2::tat_desc;;perm::0;;mod::admin;;mul::0;;tab::INT_tariffe;;ids::tatid";
$FORMS[admin][13]["Fields"]["cod_prest"]["er_check"]="min::1";
$FORMS[admin][13]["Fields"]["termine"]["title"]=ADMIN_TER_PROC_TERMINE;
$FORMS[admin][13]["Fields"]["termine"]["content"]="text||||wid::4";
$FORMS[admin][13]["Fields"]["termine"]["er_check"]="min::1";
//$FORMS[admin][13]["Fields"]["se_liberi"]["title"]=ADMIN_TER_PROC_LIBERI;
//$FORMS[admin][13]["Fields"]["se_liberi"]["content"]="text||||wid::4";
//$FORMS[admin][13]["Fields"]["gma"]["title"]=ADMIN_TER_PROC_GMA;
//$FORMS[admin][13]["Fields"]["gma"]["content"]="text||||wid::4";
$FORMS[admin][13]["Fields"]["se_liberi"]["title"]=ADMIN_TER_PROC_LIBERI;
$FORMS[admin][13]["Fields"]["se_liberi"]["content"]="select||||opt::Ordinario =>0,,Libero =>2,,Libero (a deterarre) =>-2";
$FORMS[admin][13]["Fields"]["gma"]["title"]=ADMIN_TER_PROC_GMA;
$FORMS[admin][13]["Fields"]["gma"]["content"]="select||||opt::Giorni =>g,,Mesi =>m,,Anni =>a";
//$FORMS[admin][13]["Fields"]["gma"]["er_check"]="min::1";


$FORMS[admin][13]["Fields"]["se_evento"]["title"]=FW_TYPE;
$FORMS[admin][13]["Fields"]["se_evento"]["content"]="select||||opt::Incombente =>1,,Evento =>0,,Provvedimento =>2,,Nota =>3";
$FORMS[admin][13]["Fields"]["se_todo"]["title"]=CALENDAR_FATTO;
$FORMS[admin][13]["Fields"]["se_todo"]["content"]="select||||opt::In corso =>0,,In riserva / attesa =>1,,Completata =>2,,Da aggiornare =>3,,Da aggiornare =>3";


$FORMS[admin][13]["Fields"]["cod_tipo_impegno"]["title"]=CALENDAR_GENERE;
$FORMS[admin][13]["Fields"]["cod_tipo_impegno"]["content"]="select||||opt::".FW_NONE."=>0";
$FORMS[admin][13]["Fields"]["cod_tipo_impegno"]["from_sql"]="SELECT * FROM INT_calendar_tipo||val::ttsid;;text::(%ttsid%) %tts_desc%;;perm::0";

$FORMS[admin][13]["Fields"]["priorita"]["title"]=CALENDAR_PRIORITY;
$FORMS[admin][13]["Fields"]["priorita"]["content"]="select||0||opt::".CALENDAR_PRIORITY_LOW."=>0,,".CALENDAR_PRIORITY_MED."=>1,,".CALENDAR_PRIORITY_HIGH."=>2";

$FORMS[admin][13]["Fields"]["civ_pen"]["title"]=ADMIN_CAL_STD_CIV_PEN;
$FORMS[admin][13]["Fields"]["civ_pen"]["content"]="select||||opt::Civile =>1,,Penale =>2";
$FORMS[admin][13]["Fields"]["send"]["content"]="submit||".ADMIN_TER_PROC_ADD."||";


// Tariffario forense
$FORMS[admin][14]["name"]="new_ter_proc";
$FORMS[admin][14]["onpost"]="action::db||table::INT_tariffe_STD||type::add||wf::id";
$FORMS[admin][14]["ignore"]="";

$FORMS[admin][14]["Fields"]["descrizione"]["title"]=ADMIN_TER_PROC_DESCRIZIONE;
$FORMS[admin][14]["Fields"]["descrizione"]["content"]="text||||wid::40";
$FORMS[admin][14]["Fields"]["descrizione"]["er_check"]="min::1";

$FORMS[admin][14]["Fields"]["cod_tariffa"]["title"]=EXPORT_REF_CODE;
$FORMS[admin][14]["Fields"]["cod_tariffa"]["content"]="tselect||||url::".$CONF[url_base].$CONF[dir_modules]."admin/pages/ta_search_div.php?simple_ins=1&form_id=listpratiche&form_page=1&codice=";
$FORMS[admin][14]["Fields"]["cod_tariffa"]["from_sql"]="SELECT * FROM INT_tariffe WHERE tatid LIKE '%[VAL]%%' order by tatid asc||val::id;;text::tatid;;text2::tat_desc;;perm::0;;mod::admin;;mul::0;;tab::INT_tariffe;;ids::tatid";
$FORMS[admin][14]["Fields"]["cod_tariffa"]["er_check"]="min::1";

$FORMS[admin][14]["Fields"]["selettore"]["title"]="Nella pagina 'Aggiungi Prestazione' inserisci in:";
$FORMS[admin][14]["Fields"]["selettore"]["content"]="select||||opt::Selettore 1 =>1,,Selettore 2 =>2,,Selettore 3 =>3,,Selettore 4 =>4,,Selettore 5 =>5,,Selettore 6 =>6,,Non inserire =>0";
$FORMS[admin][14]["Fields"]["selettore"]["er_check"]="min::1";

$FORMS[admin][14]["Fields"]["ordine"]["title"]="N. di ordine nella lista";
$FORMS[admin][14]["Fields"]["ordine"]["content"]="text||||wid::5";

//$

// links
$FORMS[admin][15]["name"]="new_link";
$FORMS[admin][15]["onpost"]="action::db||table::INT_links||type::add||wf::id";
$FORMS[admin][15]["ignore"]="";

$FORMS[admin][15]["Fields"]["descrizione"]["title"]=ADMIN_TER_PROC_DESCRIZIONE;
$FORMS[admin][15]["Fields"]["descrizione"]["content"]="text||||wid::40";
$FORMS[admin][15]["Fields"]["descrizione"]["er_check"]="min::1";

$FORMS[admin][15]["Fields"]["url"]["title"]="URL";
$FORMS[admin][15]["Fields"]["url"]["content"]="text||||wid::100";
$FORMS[admin][15]["Fields"]["url"]["er_check"]="min::1";

$FORMS[admin][15]["Fields"]["link"]["title"]="Inserisce il collegamento nella pagina";
$FORMS[admin][15]["Fields"]["link"]["content"]="select||||opt::$CONF[label_link1] =>1,,$CONF[label_link2] =>2,,$CONF[label_link3] =>3";

$FORMS[admin][15]["Fields"]["pulsante"]["title"]="Pulsante";
$FORMS[admin][15]["Fields"]["pulsante"]["content"]="select||||opt::No =>0,,Si =>1";

$FORMS[admin][15]["Fields"]["target"]["title"]="Target (apre il collegamento in)";
//$FORMS[admin][15]["Fields"]["target"]["content"]="text||||wid::40";
//$FORMS[admin][15]["Fields"]["target"]["er_check"]="min::1";
$FORMS[admin][15]["Fields"]["target"]["content"]="select||||opt::Pagina di knomos =>0,,Finestra pop-up =>1";



// contributo unificato
$FORMS[admin][16]["name"]="new_contr_unif";
$FORMS[admin][16]["onpost"]="action::db||table::INT_contr_unificato||type::add||wf::id";
$FORMS[admin][16]["ignore"]="";

$FORMS[admin][16]["Fields"]["scaglione"]["title"]="Scaglione N.";
$FORMS[admin][16]["Fields"]["scaglione"]["content"]="text||||wid::7";
//$FORMS[admin][16]["Fields"]["scaglione"]["er_check"]="min::1";

$FORMS[admin][16]["Fields"]["descrizione"]["title"]="Descrizione";
$FORMS[admin][16]["Fields"]["descrizione"]["content"]="text||||wid::100";
//$FORMS[admin][16]["Fields"]["descrizione"]["er_check"]="min::1";



$FORMS[admin][16]["Fields"]["importo"]["title"]="Importo";
//$FORMS[admin][16]["Fields"]["importo"]["content"]="select||||opt::$CONF[label_link1] =>1,,$CONF[label_link2] =>2,,$CONF[label_link3] =>3";
$FORMS[admin][16]["Fields"]["importo"]["content"]="text||||wid::40";

$FORMS[admin][16]["Fields"]["ordine"]["title"]="Ordine in lista";
//$FORMS[admin][16]["Fields"]["ordine"]["content"]="select||||opt::No =>0,,Si =>1";
$FORMS[admin][16]["Fields"]["ordine"]["content"]="text||||wid::40";




$FORMS[admin][18]["name"]="new_tip_varie";
$FORMS[admin][18]["onpost"]="action::db||table::INT_tipologie_varie||type::add||wf::id";
$FORMS[admin][18]["ignore"]="";

$FORMS[admin][18]["Fields"]["codice"]["title"]="Codice / Valore";
$FORMS[admin][18]["Fields"]["codice"]["content"]="text||||wid::40";
$FORMS[admin][18]["Fields"]["codice"]["er_check"]="min::1";

$FORMS[admin][18]["Fields"]["descrizione"]["title"]=ADMIN_PR_STD_DESCRIZIONE;
$FORMS[admin][18]["Fields"]["descrizione"]["content"]="text||||wid::70";
$FORMS[admin][18]["Fields"]["descrizione"]["er_check"]="min::1";


$FORMS[admin][18]["Fields"]["tipologia"]["title"]="Tipologia";
$FORMS[admin][18]["Fields"]["tipologia"]["content"]="text||||wid::7";
//$FORMS[admin][18]["Fields"]["tipologia"]["content"]="select||||opt::Nessuna =>0,,Stato pratica =>1,,Fase pratica=>2,,Ufficio Giudiziario =>3";
$FORMS[admin][18]["Fields"]["tipologia"]["er_check"]="min::1";

$FORMS[admin][18]["Fields"]["campo_tipologia"]["title"]="Campo corrisp. alla tipologia";
$FORMS[admin][18]["Fields"]["campo_tipologia"]["content"]="text||||wid::50";

$FORMS[admin][18]["Fields"]["ordine"]["title"]="Ordine in lista N.";
$FORMS[admin][18]["Fields"]["ordine"]["content"]="text||||wid::5";

//-----UFF GIUD
$FORMS[admin][20]["name"]="new_tip_uff_giud";
$FORMS[admin][20]["onpost"]="action::db||table::INT_uff_giud||type::add||wf::id";
$FORMS[admin][20]["ignore"]="";

$FORMS[admin][20]["Fields"]["codice"]["title"]="Codice / Valore";
$FORMS[admin][20]["Fields"]["codice"]["content"]="text||||wid::40";
$FORMS[admin][20]["Fields"]["codice"]["er_check"]="min::1";

$FORMS[admin][20]["Fields"]["descrizione"]["title"]=ADMIN_PR_STD_DESCRIZIONE;
$FORMS[admin][20]["Fields"]["descrizione"]["content"]="text||||wid::70";
$FORMS[admin][20]["Fields"]["descrizione"]["er_check"]="min::1";


$FORMS[admin][20]["Fields"]["ordine"]["title"]="Ordine in lista N.";
$FORMS[admin][20]["Fields"]["ordine"]["content"]="text||||wid::5";
// settings


$FORMS[admin][90]["name"]="new_set_home";
$FORMS[admin][90]["onpost"]="action::db||table::INT_settings||type::add||wf::id";
$FORMS[admin][90]["ignore"]="";

$FORMS[admin][90]["Fields"]["div_last_prat"]["title"]="Nella Home mostra la sezione ULTIME PRATICHE";
$FORMS[admin][90]["Fields"]["div_last_prat"]["content"]="select||||opt::Aperta =>1,,Chiusa =>0";

$FORMS[admin][90]["Fields"]["usa_link1"]["title"]="Usa Pagina personale 1";
$FORMS[admin][90]["Fields"]["usa_link1"]["content"]="select||||opt::Si =>1,,No =>0";

$FORMS[admin][90]["Fields"]["label_link1"]["title"]="... Etichetta";
$FORMS[admin][90]["Fields"]["label_link1"]["content"]="text||||wid::40";

$FORMS[admin][90]["Fields"]["ico_link1"]["title"]="... Icona";
$FORMS[admin][90]["Fields"]["ico_link1"]["content"]="text||||wid::40";

$FORMS[admin][90]["Fields"]["usa_link2"]["title"]="Usa Pagina personale 2";
$FORMS[admin][90]["Fields"]["usa_link2"]["content"]="select||||opt::Si =>1,,No =>0";

$FORMS[admin][90]["Fields"]["label_link2"]["title"]="... Etichetta";
$FORMS[admin][90]["Fields"]["label_link2"]["content"]="text||||wid::40";

$FORMS[admin][90]["Fields"]["ico_link2"]["title"]="... Icona";
$FORMS[admin][90]["Fields"]["ico_link2"]["content"]="text||||wid::40";

$FORMS[admin][90]["Fields"]["usa_link3"]["title"]="Usa Pagina personale 3";
$FORMS[admin][90]["Fields"]["usa_link3"]["content"]="select||||opt::Si =>1,,No =>0";

$FORMS[admin][90]["Fields"]["label_link3"]["title"]="... Etichetta";
$FORMS[admin][90]["Fields"]["label_link3"]["content"]="text||||wid::40";

$FORMS[admin][90]["Fields"]["ico_link3"]["title"]="... Icona";
$FORMS[admin][90]["Fields"]["ico_link3"]["content"]="text||||wid::40";


// prestazioni
$FORMS[admin][91]["name"]="new_set_prest";
$FORMS[admin][91]["onpost"]="action::db||table::INT_settings||type::add||wf::id";
$FORMS[admin][91]["ignore"]="";

$FORMS[admin][91]["Fields"]["usa_tariffario_knomos"]["title"]="NUOVE PRESTAZIONI ... Per l'inserim. veloce usa";
$FORMS[admin][91]["Fields"]["usa_tariffario_knomos"]["content"]="select||||opt::Tariffario di knomos =>1,,Tariffario forense =>0";

$FORMS[admin][91]["Fields"]["tar_titolo_selettore1"]["title"]="... Etichetta selettore 1 (Tariffario di knomos)";
$FORMS[admin][91]["Fields"]["tar_titolo_selettore1"]["content"]="text||||wid::40";

$FORMS[admin][91]["Fields"]["tar_titolo_selettore2"]["title"]="... Etichetta selettore 2 (Tariffario di knomos)";
$FORMS[admin][91]["Fields"]["tar_titolo_selettore2"]["content"]="text||||wid::40";

$FORMS[admin][91]["Fields"]["tar_titolo_selettore3"]["title"]="... Etichetta selettore 3 (Tariffario di knomos)";
$FORMS[admin][91]["Fields"]["tar_titolo_selettore3"]["content"]="text||||wid::40";

$FORMS[admin][91]["Fields"]["tar_titolo_selettore4"]["title"]="... Etichetta selettore 4 (Tariffario di knomos)";
$FORMS[admin][91]["Fields"]["tar_titolo_selettore4"]["content"]="text||||wid::40";

$FORMS[admin][91]["Fields"]["tar_titolo_selettore5"]["title"]="... Etichetta selettore 5 (Tariffario di knomos)";
$FORMS[admin][91]["Fields"]["tar_titolo_selettore5"]["content"]="text||||wid::40";

$FORMS[admin][91]["Fields"]["tar_titolo_selettore6"]["title"]="... Etichetta selettore 6 (Tariffario di knomos)";
$FORMS[admin][91]["Fields"]["tar_titolo_selettore6"]["content"]="text||||wid::40";

$FORMS[admin][91]["Fields"]["calc_autom_prest"]["title"]="... Inserisce automaticamente l'Onorario calcolato in On.Fatturabile";
$FORMS[admin][91]["Fields"]["calc_autom_prest"]["content"]="select||||opt::Si =>1,,No =>0";

//studio per fatturazione
$FORMS[admin][92]["name"]="new_set_fatt";
$FORMS[admin][92]["onpost"]="action::db||table::INT_settings||type::add||wf::id";
$FORMS[admin][92]["ignore"]="";

$FORMS[admin][92]["Fields"]["fatt_avvocato"]["title"]="Studio (lasciare in bianco per utilizzare le impostazione dell'utente attivo)";
$FORMS[admin][92]["Fields"]["fatt_avvocato"]["content"]="text||||wid::40";
$FORMS[admin][92]["Fields"]["fatt_citta_studio"]["title"]="... Città";
$FORMS[admin][92]["Fields"]["fatt_citta_studio"]["content"]="text||||wid::40";
$FORMS[admin][92]["Fields"]["fatt_indirizzo_studio"]["title"]="... Indirizzo";
$FORMS[admin][92]["Fields"]["fatt_indirizzo_studio"]["content"]="text||||wid::40";
$FORMS[admin][92]["Fields"]["fatt_codicefiscale"]["title"]="... Codice fiscale";
$FORMS[admin][92]["Fields"]["fatt_codicefiscale"]["content"]="text||||wid::40";
$FORMS[admin][92]["Fields"]["fatt_partitaIVA"]["title"]="... Partita IVA";
$FORMS[admin][92]["Fields"]["fatt_partitaIVA"]["content"]="text||||wid::40";
$FORMS[admin][92]["Fields"]["fatt_domicilio_fiscale"]["title"]="... Domicilio fiscale";
$FORMS[admin][92]["Fields"]["fatt_domicilio_fiscale"]["content"]="text||||wid::40";
$FORMS[admin][92]["Fields"]["fatt_data_luogo_nascita"]["title"]="... Data e luogo di nascita";
$FORMS[admin][92]["Fields"]["fatt_data_luogo_nascita"]["content"]="text||||wid::40";

//---dropbox
$FORMS[admin][93]["name"]="new_set_dropbox";
$FORMS[admin][93]["onpost"]="action::db||table::INT_settings||type::add||wf::id";
$FORMS[admin][93]["ignore"]="";

$FORMS[admin][93]["Fields"]["UsaDbox"]["title"]="Usa dropbox";
//$FORMS[admin][99]["Fields"]["UsaDbox"]["content"]="text||||wid::40";
$FORMS[admin][93]["Fields"]["UsaDbox"]["content"]="select||||opt::Si =>1,,No =>0";

$FORMS[admin][93]["Fields"]["dbox_url"]["title"]="... URL";
$FORMS[admin][93]["Fields"]["dbox_url"]["content"]="text||||wid::70";

$FORMS[admin][93]["Fields"]["dbox_mobile_url"]["title"]="... URL mobile";
$FORMS[admin][93]["Fields"]["dbox_mobile_url"]["content"]="text||||wid::70";

$FORMS[admin][93]["Fields"]["dbox_schedario"]["title"]="... Percorso schedario (v. Pratiche)";
$FORMS[admin][93]["Fields"]["dbox_schedario"]["content"]="text||||wid::40";

$FORMS[admin][93]["Fields"]["dbox_contatto"]["title"]="... Percorso cartelle condivise (v. Scheda contatto)";
$FORMS[admin][93]["Fields"]["dbox_contatto"]["content"]="text||||wid::40";

//---google

$FORMS[admin][94]["name"]="new_set_google";
$FORMS[admin][94]["onpost"]="action::db||table::INT_settings||type::add||wf::id";
$FORMS[admin][94]["ignore"]="";

$FORMS[admin][94]["Fields"]["UsaGmail"]["title"]="Usa Gmail";
$FORMS[admin][94]["Fields"]["UsaGmail"]["content"]="select||||opt::Si =>1,,No =>0";

$FORMS[admin][94]["Fields"]["gmail_url"]["title"]="Gmail URL";
$FORMS[admin][94]["Fields"]["gmail_url"]["content"]="text||||wid::70";

$FORMS[admin][94]["Fields"]["gmail_mobile_url"]["title"]="Gmail mobile URL";
$FORMS[admin][94]["Fields"]["gmail_mobile_url"]["content"]="text||||wid::70";

$FORMS[admin][94]["Fields"]["gmail_new_url"]["title"]="Gmail Nuova mail URL";
$FORMS[admin][94]["Fields"]["gmail_new_url"]["content"]="text||||wid::70";

$FORMS[admin][94]["Fields"]["DominioGapps"]["title"]="Dominio utilizzato con Google Apps (lasciare bianco per utilizzare Gmail)";
$FORMS[admin][94]["Fields"]["DominioGapps"]["content"]="text||||wid::40";

//$FORMS[admin][94]["Fields"]["gapps_url"]["title"]="Gapps URL";
//$FORMS[admin][94]["Fields"]["gapps_url"]["content"]="text||||wid::70";

//$FORMS[admin][94]["Fields"]["gapps_mobile_url"]["title"]="Gapps mobile URL";
//$FORMS[admin][94]["Fields"]["gapps_mobile_url"]["content"]="text||||wid::70";

//$FORMS[admin][94]["Fields"]["gapps_new_url"]["title"]="Gapps Nuova mail URL";
//$FORMS[admin][94]["Fields"]["gapps_new_url"]["content"]="text||||wid::70";


$FORMS[admin][94]["Fields"]["UsaGcal"]["title"]="Usa GCalendar";
$FORMS[admin][94]["Fields"]["UsaGcal"]["content"]="select||||opt::Si =>1,,No =>0";

$FORMS[admin][94]["Fields"]["gcal_url"]["title"]="GCalendar URL";
$FORMS[admin][94]["Fields"]["gcal_url"]["content"]="text||||wid::70";



//---COMUNICAZIONI
$FORMS[admin][95]["name"]="new_set_com";
$FORMS[admin][95]["onpost"]="action::db||table::INT_settings||type::add||wf::id";
$FORMS[admin][95]["ignore"]="";

$FORMS[admin][95]["Fields"]["new_mail_default"]["title"]="Per inviare mail usa";
$FORMS[admin][95]["Fields"]["new_mail_default"]["content"]="select||||opt::Client installato sul PC=>0,,GMail =>1,,WebMail online=>2";

$FORMS[admin][95]["Fields"]["url_mail_default"]["title"]="Per altre operazioni su mail usa";
$FORMS[admin][95]["Fields"]["url_mail_default"]["content"]="select||||opt::GMail =>1,,Altra WebMail=>0";

$FORMS[admin][95]["Fields"]["url_webmail"]["title"]="Altra Webmail ... URL";
$FORMS[admin][95]["Fields"]["url_webmail"]["content"]="text||||wid::70";

$FORMS[admin][95]["Fields"]["url_nuova_mail"]["title"]="... Per l'invio URL";
$FORMS[admin][95]["Fields"]["url_nuova_mail"]["content"]="text||||wid::70";

$FORMS[admin][95]["Fields"]["fin_mail_default"]["title"]="... Apre URL in";
$FORMS[admin][95]["Fields"]["fin_mail_default"]["content"]="select||||opt::Pagina di knomos =>0,,Finestra pop-up =>1";


$FORMS[admin][95]["Fields"]["UsaTelefonoIP"]["title"]="Usa telefono IP (se si: impostare l'URL nella scheda utente)";
$FORMS[admin][95]["Fields"]["UsaTelefonoIP"]["content"]="select||||opt::Si =>1,,No =>0";

$FORMS[admin][95]["Fields"]["UsaCentralino"]["title"]="Usa centralino (se si: antepone lo '0' al numero)";
//$FORMS[admin][95]["Fields"]["UsaCentralino"]["content"]="text||||wid::40";
$FORMS[admin][95]["Fields"]["UsaCentralino"]["content"]="select||||opt::Si =>1,,No =>0";






?>
