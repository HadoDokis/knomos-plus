<?
// Form New Mod Contact
$FORMS[prestazioni][0]["name"]="new_prest";
$FORMS[prestazioni][0]["onpost"]="action::db||table::prestazioni||type::add||wf::id";
$FORMS[prestazioni][0]["ignore"]="tnf;;title_pratica;;valore_pratica;;tipo_pratica;;keepscad";

$FORMS[prestazioni][0]["Fields"]["codice"]["title"]=CALENDAR_TA_CODE;
$FORMS[prestazioni][0]["Fields"]["codice"]["content"]="tselect||||wid::10;;url::".$CONF[url_base].$CONF[dir_modules]."admin/pages/ta_search_div.php?form_id=listpratiche&form_page=1&fieldname2=testo&codice=";
$FORMS[prestazioni][0]["Fields"]["codice"]["from_sql"]="SELECT * FROM INT_tariffe WHERE tatid LIKE '%[VAL]%%' order by tatid asc||val::tatid;;text::tatid;;text2::tat_desc;;perm::0;;mod::admin;;mul::0;;tab::INT_tariffe;;ids::tatid";
$FORMS[prestazioni][0]["Fields"]["codice"]["er_check"]="min::1";
$FORMS[prestazioni][0]["Fields"]["testo"]["title"]=FW_DESC;
$FORMS[prestazioni][0]["Fields"]["testo"]["content"]="text||||wid::40";
$FORMS[prestazioni][0]["Fields"]["testo"]["er_check"]="min::5";
//$FORMS[prestazioni][0]["Fields"]["ref_id"]["title"]=PRESTAZIONI_REF_PRATICA;
//$FORMS[prestazioni][0]["Fields"]["ref_id"]["content"]="tselect||||wid::40";
//$FORMS[prestazioni][0]["Fields"]["ref_id"]["from_sql"]="SELECT * FROM pratiche WHERE %[PERM]% AND pr_codice LIKE '%[VAL]%%' order by pr_codice asc||val::id;;text::pr_codice;;perm::1;;mod::pratiche;;mul::0";
$FORMS[prestazioni][0]["Fields"]["ref_id"]["title"]="";
$FORMS[prestazioni][0]["Fields"]["title_pratica"]["title"]="";
$FORMS[prestazioni][0]["Fields"]["valore_pratica"]["title"]="";
$FORMS[prestazioni][0]["Fields"]["tipo_pratica"]["title"]="";
$FORMS[prestazioni][0]["Fields"]["operatore"]["title"]=PRESTAZIONI_USER;
$FORMS[prestazioni][0]["Fields"]["operatore"]["content"]="tselect||".$_SESSION[fw_userid]."||url::".$CONF[url_base].$CONF[dir_modules]."admin/pages/user_search_div.php?form_id=listpratiche&form_page=1&codice=";
$FORMS[prestazioni][0]["Fields"]["operatore"]["from_sql"]="SELECT * FROM ".$CONF[auth_db_table]." WHERE codice LIKE '%[VAL]%%' order by codice asc||val::id;;text::codice;;text2::nome;;perm::0;;mul::0;;tab::users";
$FORMS[prestazioni][0]["Fields"]["operatore"]["er_check"]="min::1";



/*$FORMS[prestazioni][0]["Fields"]["operatore"]["title"]=PRESTAZIONI_USER;
$FORMS[prestazioni][0]["Fields"]["operatore"]["content"]="select||||";
$FORMS[prestazioni][0]["Fields"]["operatore"]["from_sql"]="SELECT * FROM users order by nome asc||val::id;;text::%nome%;;perm::0";

//DATA DELLA PRESTAZIONE

*/$FORMS[prestazioni][0]["Fields"]["data"]["title"]=CALENDAR_ADATE;
$FORMS[prestazioni][0]["Fields"]["data"]["content"]="date||".date("Y-m-d")."||";

//HIDDEN FIELDS FOR TNF
$FORMS[prestazioni][0]["Fields"]["spese_imponibili"]["content"]="hidden||0.00||";
$FORMS[prestazioni][0]["Fields"]["spese_non_imponibili"]["content"]="hidden||0.00||";
$FORMS[prestazioni][0]["Fields"]["diritti"]["content"]="hidden||0.00||";
$FORMS[prestazioni][0]["Fields"]["onorari"]["content"]="hidden||0.00||";
$FORMS[prestazioni][0]["Fields"]["on_onorari"]["content"]="hidden||0.00||";
$FORMS[prestazioni][0]["Fields"]["on_utente"]["content"]="hidden||0.00||";
$FORMS[prestazioni][0]["Fields"]["criterio"]["content"]="hidden||||";
$FORMS[prestazioni][0]["Fields"]["quantita"]["content"]="hidden||||";
$FORMS[prestazioni][0]["Fields"]["tempo"]["content"]="hidden||||";
$FORMS[prestazioni][0]["Fields"]["unita_misura"]["content"]="hidden||||";

$FORMS[prestazioni][0]["Fields"]["tnf"]["title"]=PRESTAZIONI_TNF;
$FORMS[prestazioni][0]["Fields"]["tnf"]["content"]="tnf||||";
$FORMS[prestazioni][0]["Fields"]["acconti"]["title"]=PRESTAZIONI_ACCONT;
$FORMS[prestazioni][0]["Fields"]["acconti"]["content"]="hidden||||";
$FORMS[prestazioni][0]["Fields"]["acconti"]["er_check"]="";
$FORMS[prestazioni][0]["Fields"]["anticipazioni"]["title"]=PRESTAZIONI_ANTIC;
$FORMS[prestazioni][0]["Fields"]["anticipazioni"]["content"]="hidden||||";
$FORMS[prestazioni][0]["Fields"]["anticipazioni"]["er_check"]="";
$FORMS[prestazioni][0]["Fields"]["note"]["title"]=FW_NOTE;
$FORMS[prestazioni][0]["Fields"]["note"]["content"]="textarea||||col::40;;row::5";
$FORMS[prestazioni][0]["Fields"]["note"]["er_check"]="";
$FORMS[prestazioni][0]["Fields"]["keepscad"]["content"]="checkbox||||opt::".PRESTAZIONI_CONV_KEEP."=>1;;size::1";

$FORMS[prestazioni][0]["Fields"]["send"]["content"]="submit||".PRESTAZIONI_ADD."||";

///__________


// Form New Mod Contact
$FORMS[prestazioni][1]["name"]="new_spesa_studio";
$FORMS[prestazioni][1]["onpost"]="action::db||table::prestazioni||type::add||wf::id";
$FORMS[prestazioni][1]["ignore"]="tnf;;title_pratica;;valore_pratica;;tipo_pratica;;keepscad";

$FORMS[prestazioni][1]["Fields"]["codice"]["title"]="Codice";
//NVB
$codprest="XSPST";//$_GET[ref_id];
$FORMS[prestazioni][1]["Fields"]["codice"]["content"]="text||".$codprest."||wid::40";
$FORMS[prestazioni][1]["Fields"]["codice"]["er_check"]="min::5";
//$FORMS[prestazioni][1]["Fields"]["codice"]["content"]="tselect||||wid::10;;url::".$CONF[url_base].$CONF[dir_modules]."admin/pages/ta_search_div.php?form_id=listpratiche&form_page=1&fieldname2=testo&codice=";
//$FORMS[prestazioni][1]["Fields"]["codice"]["from_sql"]="SELECT * FROM INT_tariffe WHERE tatid LIKE '%[VAL]%%' order by tatid asc||val::tatid;;text::tatid;;text2::tat_desc;;perm::0;;mod::admin;;mul::0;;tab::INT_tariffe;;ids::tatid";

//$FORMS[prestazioni][1]["Fields"]["codice"]["er_check"]="min::1";
$FORMS[prestazioni][1]["Fields"]["testo"]["title"]=FW_DESC;
$FORMS[prestazioni][1]["Fields"]["testo"]["content"]="text||||wid::40";
//$FORMS[prestazioni][1]["Fields"]["testo"]["er_check"]="min::5";
$FORMS[prestazioni][1]["Fields"]["ref_id"]["title"]="Riferimento";
$FORMS[prestazioni][1]["Fields"]["ref_id"]["content"]="tselect||||wid::40";
$FORMS[prestazioni][1]["Fields"]["ref_id"]["from_sql"]="SELECT * FROM pratiche WHERE %[PERM]% AND pr_codice LIKE '%[VAL]%%' order by pr_codice asc||val::id;;text::pr_codice;;perm::1;;mod::pratiche;;mul::0";

$FORMS[prestazioni][1]["Fields"]["ref_id"]["title"]="";
$FORMS[prestazioni][1]["Fields"]["title_pratica"]["title"]="";
$FORMS[prestazioni][1]["Fields"]["valore_pratica"]["title"]="";
$FORMS[prestazioni][1]["Fields"]["tipo_pratica"]["title"]="";
$FORMS[prestazioni][1]["Fields"]["operatore"]["title"]="Utente";
$FORMS[prestazioni][1]["Fields"]["operatore"]["content"]="tselect||".$_SESSION[fw_userid]."||url::".$CONF[url_base].$CONF[dir_modules]."admin/pages/user_search_div.php?form_id=listpratiche&form_page=1&codice=";
$FORMS[prestazioni][1]["Fields"]["operatore"]["from_sql"]="SELECT * FROM ".$CONF[auth_db_table]." WHERE codice LIKE '%[VAL]%%' order by codice asc||val::id;;text::codice;;text2::nome;;perm::0;;mul::0;;tab::users";
$FORMS[prestazioni][1]["Fields"]["operatore"]["er_check"]="min::1";

//NUOVA SPESA DI STUDIO



//DATA DELLA PRESTAZIONE

$FORMS[prestazioni][1]["Fields"]["data"]["title"]=CALENDAR_ADATE;
$FORMS[prestazioni][1]["Fields"]["data"]["content"]="date||".date("Y-m-d")."||";

//HIDDEN FIELDS FOR TNF
$FORMS[prestazioni][1]["Fields"]["spese_imponibili"]["content"]="hidden||0.00||";
$FORMS[prestazioni][1]["Fields"]["spese_non_imponibili"]["content"]="hidden||0.00||";
$FORMS[prestazioni][1]["Fields"]["diritti"]["content"]="hidden||0.00||";
$FORMS[prestazioni][1]["Fields"]["onorari"]["content"]="hidden||0.00||";

$FORMS[prestazioni][1]["Fields"]["on_onorari"]["content"]="hidden||0.00||";
$FORMS[prestazioni][1]["Fields"]["on_utente"]["content"]="hidden||0.00||";
$FORMS[prestazioni][1]["Fields"]["criterio"]["content"]="hidden||||";
$FORMS[prestazioni][1]["Fields"]["quantita"]["content"]="hidden||||";
$FORMS[prestazioni][1]["Fields"]["tempo"]["content"]="hidden||||";
$FORMS[prestazioni][1]["Fields"]["unita_misura"]["content"]="hidden||||";

$FORMS[prestazioni][1]["Fields"]["tnf"]["title"]=PRESTAZIONI_TNF;
$FORMS[prestazioni][1]["Fields"]["tnf"]["content"]="hidden||||";
//$FORMS[prestazioni][1]["Fields"]["acconti"]["title"]=PRESTAZIONI_ACCONT;
//$FORMS[prestazioni][1]["Fields"]["acconti"]["content"]="text||||";
//$FORMS[prestazioni][1]["Fields"]["acconti"]["er_check"]="";
$FORMS[prestazioni][1]["Fields"]["sp_studio"]["title"]="<strong>Importo</strong>";
$FORMS[prestazioni][1]["Fields"]["sp_studio"]["content"]="text||||";
$FORMS[prestazioni][1]["Fields"]["sp_studio"]["er_check"]="";
//$FORMS[prestazioni][1]["Fields"]["anticipazioni"]["title"]=PRESTAZIONI_ANTIC;
//$FORMS[prestazioni][1]["Fields"]["anticipazioni"]["content"]="text||||";
//$FORMS[prestazioni][1]["Fields"]["anticipazioni"]["er_check"]="";
$FORMS[prestazioni][1]["Fields"]["note"]["title"]=FW_NOTE;
$FORMS[prestazioni][1]["Fields"]["note"]["content"]="textarea||||col::40;;row::5";
$FORMS[prestazioni][1]["Fields"]["note"]["er_check"]="";
$FORMS[prestazioni][1]["Fields"]["keepscad"]["content"]="checkbox||||opt::".PRESTAZIONI_CONV_KEEP."=>1;;size::1";

$FORMS[prestazioni][1]["Fields"]["send"]["content"]="submit||Aggiungi spesa||";

?>
