<?

$FORMS[calendar][0]["box_desc"]="prova2 blah blah blah blah";
$FORMS[calendar][0]["name"]="new_app";
$FORMS[calendar][0]["onpost"]="action::db||table::calendar||type::add||wf::id";
$FORMS[calendar][0]["ignore"]="";


$FORMS[calendar][0]["Fields"]["type"]["title"]=CALENDAR_ATYPE;
$FORMS[calendar][0]["Fields"]["type"]["content"]="select||||";
$FORMS[calendar][0]["Fields"]["type"]["from_sql"]="SELECT * FROM INT_tipologie_varie WHERE tipologia=3||val::codice;;text::%descrizione%;;perm::0;;mod::calendar";

//$FORMS[calendar][0]["Fields"]["type"]["content"]="select||||opt::Evento =>0,,Incombente =>1,,Provvedimento =>2,,Nota =>3";

//$FORMS[calendar][0]["Fields"]["done"]["title"]="";
//$FORMS[calendar][0]["Fields"]["done"]["content"]="checkbox||0||opt:: <b>".CALENDAR_FATTO."</b>=>1;;mul::0;;size::1";


$FORMS[calendar][0]["Fields"]["done"]["title"]=CALENDAR_FATTO;
$FORMS[calendar][0]["Fields"]["done"]["content"]="select||||";
$FORMS[calendar][0]["Fields"]["done"]["from_sql"]="SELECT * FROM INT_tipologie_varie WHERE tipologia=4||val::codice;;text::%descrizione%;;perm::0;;mod::calendar";
//$FORMS[calendar][0]["Fields"]["done"]["content"]="select||||opt::In corso =>0,,In riserva / attesa =>1,,Completato =>2,,Da aggiornare =>3";


$FORMS[calendar][0]["Fields"]["day"]["title"]=CALENDAR_ADATE_INI;
$FORMS[calendar][0]["Fields"]["day"]["content"]="date||".date("Y-m-d")."||wid::30";
$FORMS[calendar][0]["Fields"]["time"]["title"]=CALENDAR_AHOUR;
$FORMS[calendar][0]["Fields"]["time"]["content"]="time||00:00||";
$FORMS[calendar][0]["Fields"]["dayend"]["title"]=CALENDAR_ADATE_FIN;
//$FORMS[calendar][0]["Fields"]["dayend"]["content"]="date||".date("Y-m-d")."||wid::30";
$FORMS[calendar][0]["Fields"]["dayend"]["content"]="date||"."::date"."||wid::30";
/*$FORMS[calendar][0]["Fields"]["codice"]["title"]=FW_CODE;
$FORMS[calendar][0]["Fields"]["codice"]["content"]="select||||js::onchange=\"change_desc('codice[]','title');\"";
$FORMS[calendar][0]["Fields"]["codice"]["from_sql"]="SELECT * FROM INT_tariffe order by tatid asc||val::tatid;;text::(%tatid%) %tat_desc%;;perm::0";
*/
if($_GET[PagProv]==Rinvio && $CONF[storico_impegni]==1)
{
$FORMS[calendar][0]["Fields"]["provenienza"]["title"]=CALENDAR_PROVENIENZA;
$FORMS[calendar][0]["Fields"]["provenienza"]["content"]="date||";//.date("Y-m-d")."||wid::30";

$FORMS[calendar][0]["Fields"]["id_provenienza"]["title"]=PRESTAZIONI_ANTIC;
$FORMS[calendar][0]["Fields"]["id_provenienza"]["content"]="hidden||||";
}

$FORMS[calendar][0]["Fields"]["codice"]["title"]=CALENDAR_TA_CODE;
$FORMS[calendar][0]["Fields"]["codice"]["content"]="tselect||||wid::10;;url::".$CONF[url_base].$CONF[dir_modules]."admin/pages/ta_search_div.php?form_id=listpratiche&form_page=1&fieldname2=title&codice=";

$FORMS[calendar][0]["Fields"]["codice"]["from_sql"]="SELECT * FROM INT_tariffe WHERE tatid LIKE '%[VAL]%%' order by tatid asc||val::id;;text::tatid;;text2::tat_desc;;perm::0;;mod::admin;;mul::0;;tab::INT_tariffe;;ids::tatid";
$FORMS[calendar][0]["Fields"]["codice"]["er_check"]="min::1";

$FORMS[calendar][0]["Fields"]["title"]["title"]=FW_DESC;
$FORMS[calendar][0]["Fields"]["title"]["content"]="text||||wid::50";
$FORMS[calendar][0]["Fields"]["title"]["er_check"]="min::5";

$FORMS[calendar][0]["Fields"]["cal_comp_desc"]["title"]=PRATICHE_AUT_COMP_DESC;
$FORMS[calendar][0]["Fields"]["cal_comp_desc"]["content"]="select||||opt::".FW_NONE."=>";
$FORMS[calendar][0]["Fields"]["cal_comp_desc"]["from_sql"]="SELECT * FROM INT_uff_giud||val::codice;;text::%descrizione%;;perm::0;;mod::pratiche";

$FORMS[calendar][0]["Fields"]["cal_luogo"]["title"]=PRATICHE_LUOGO_UFF_GIUD;
$FORMS[calendar][0]["Fields"]["cal_luogo"]["content"]="text||||wid::30";

$FORMS[calendar][0]["Fields"]["cal_giudice"]["title"]=PRATICHE_GIUD;
$FORMS[calendar][0]["Fields"]["cal_giudice"]["content"]="text||||wid::30";

$FORMS[calendar][0]["Fields"]["ref_prat"]["title"]=PRESTAZIONI_REF_PRATICA;
$FORMS[calendar][0]["Fields"]["ref_prat"]["content"]="tselect||||wid::50;;url::".$CONF[url_base].$CONF[dir_modules]."pratiche/pages/pratiche_search_div.php?form_id=listpratiche&form_page=1&pr_codice=";
$FORMS[calendar][0]["Fields"]["ref_prat"]["from_sql"]="SELECT * FROM pratiche p WHERE %[PERM]% AND pr_codice LIKE '%[VAL]%%' order by pr_codice asc||val::id;;text::pr_codice;;text2::pr_oggetto;;perm::1;;mod::pratiche;;mul::0";
$FORMS[calendar][0]["Fields"]["priorita"]["title"]=CALENDAR_PRIORITY;
$FORMS[calendar][0]["Fields"]["priorita"]["content"]="select||0||opt::".CALENDAR_PRIORITY_LOW."=>0,,".CALENDAR_PRIORITY_MED."=>1,,".CALENDAR_PRIORITY_HIGH."=>2";
$FORMS[calendar][0]["Fields"]["priorita"]["er_check"]="max::10";

$FORMS[calendar][0]["Fields"]["operator"]["title"]=CALENDAR_USERS;
$FORMS[calendar][0]["Fields"]["operator"]["content"]="mselect||".$_SESSION[fw_userid]."||url::".$CONF[url_base].$CONF[dir_modules]."admin/pages/user_search_div2.php?form_id=listpratiche&form_page=1;;size::5;;word::".CALENDAR_USERS;
$FORMS[calendar][0]["Fields"]["operator"]["from_sql"]="SELECT * FROM users WHERE id='%ID%'||val::id;;text::%nome% (%codice%)";
$FORMS[calendar][0]["Fields"]["operator"]["er_check"]="min::1";


$FORMS[calendar][0]["Fields"]["type_app"]["title"]=CALENDAR_GENERE;
$FORMS[calendar][0]["Fields"]["type_app"]["content"]="select||||opt::".FW_NONE."=>0";
$FORMS[calendar][0]["Fields"]["type_app"]["from_sql"]="SELECT * FROM INT_calendar_tipo||val::ttsid;;text::(%ttsid%) %tts_desc%;;perm::0";

$FORMS[calendar][0]["Fields"]["ref_cont"]["title"]=CALENDAR_CLIENTE;
$FORMS[calendar][0]["Fields"]["ref_cont"]["content"]="tselect||||url::".$CONF[url_base].$CONF[dir_modules]."contact/pages/contact_search_div.php?form_id=listpratiche&form_page=1&nome=";
$FORMS[calendar][0]["Fields"]["ref_cont"]["from_sql"]="SELECT * FROM contact p WHERE %[PERM]% AND codice LIKE '%[VAL]%%' order by codice asc||val::id;;text::codice;;text2::nome;;fid::0;;perm::1;;mod::contact;;mul::0";


if ($CONF[storico_impegni]==1)
{
$FORMS[calendar][0]["Fields"]["notulato"]["title"]=CALENDAR_NOTULATO;
$FORMS[calendar][0]["Fields"]["notulato"]["content"]="select||0||opt::Da notulare=>0,,Notulato=>1";
}

$FORMS[calendar][0]["Fields"]["note"]["title"]=FW_NOTE;
$FORMS[calendar][0]["Fields"]["note"]["content"]="textarea||||col::40;;row::5";
$FORMS[calenadr][0]["Fields"]["note"]["er_check"]="";


$FORMS[calendar][0]["Fields"]["send"]["content"]="submit||".CALENDAR_ADD_APP."||";

?>
