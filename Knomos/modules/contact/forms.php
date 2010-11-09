<?
// Form New Mod Contact
$FORMS[contact][0]["box_desc"]="prova2 blah blah blah blah";
$FORMS[contact][0]["name"]="new_app";
$FORMS[contact][0]["onpost"]="action::db||table::contact||type::add||wf::id";
$FORMS[contact][0]["ignore"]="help";
$FORMS[contact][0][Fields]["help"]["title"]=CONTACT_HINT;
$FORMS[contact][0][Fields]["help"]["content"]="htmltext||".CONTACT_HINT_TXT."||";
$FORMS[contact][0]["Fields"]["tipo_contatto"]["title"]=FW_TYPE;
$FORMS[contact][0]["Fields"]["tipo_contatto"]["content"]="select||1||opt::".CONTACT_ALT_PERSON."=>0,,".CONTACT_ALT_COMPANY."=>1,,".CONTACT_ALT_PUBLIC."=>2,,".CONTACT_ALT_NOPROF."=>3,,".CONTACT_ALT_PROFES."=>4";
$FORMS[contact][0]["Fields"]["tipo"]["title"]=CONTACT_TYPER;
$FORMS[contact][0]["Fields"]["tipo"]["content"]="select||||opt::".CONTACT_TYPE_AVVR."=>1,,".CONTACT_TYPE_CLIE."=>2,,".CONTACT_TYPE_COLL."=>3,,".CONTACT_TYPE_CONS."=>4,,CORR=>5,,".CONTACT_TYPE_FORN."=>6,,".CONTACT_TYPE_AVVO."=>7";

$addeNome="<a href='javascript:AddeNome()' class='pratica-resalt-01'><img src='%[IMAGE_GPATH]%ico/ico_tras_campo_peq.gif' width='16' height='16' border='0' align='absmiddle'></a>";
$FORMS[contact][0]["Fields"]["codice"]["title"]=FW_CODE." ".$addeNome;
$FORMS[contact][0]["Fields"]["codice"]["content"]="text||||wid::30";
$FORMS[contact][0]["Fields"]["codice"]["er_check"]="min::2;;nodupe::1";


$FORMS[contact][0]["Fields"]["nome"]["title"]=CONTACT_NAME;
$FORMS[contact][0]["Fields"]["nome"]["content"]="text||||wid::30";
$FORMS[contact][0]["Fields"]["nome"]["er_check"]="min::2";
$FORMS[contact][0]["Fields"]["accountm"]["title"]=CONTACT_ACCOUNT;
$FORMS[contact][0]["Fields"]["accountm"]["content"]="tselect||".$_SESSION[fw_userid]."||wid::6;;url::".$CONF[url_base].$CONF[dir_modules]."admin/pages/user_search_div.php?form_id=listpratiche&form_page=1&codice=";
$FORMS[contact][0]["Fields"]["accountm"]["from_sql"]="SELECT * FROM ".$CONF[auth_db_table]." WHERE codice LIKE '%[VAL]%%' order by codice asc||val::id;;text::codice;;text2::nome;;perm::0;;mul::0;;tab::users";
$FORMS[contact][0]["Fields"]["accountm"]["er_check"]="min::1";

$FORMS[contact][0]["Fields"]["mansione"]["title"]=CONTACT_ROLE;
$FORMS[contact][0]["Fields"]["mansione"]["content"]="text||||wid::30";
$FORMS[contact][0]["Fields"]["mansione"]["er_check"]="";
/*$FORMS[contact][0]["Fields"]["ref_contatto"]["title"]=CONTACT_REF_CONTACT;
$FORMS[contact][0]["Fields"]["ref_contatto"]["content"]="select||||opt::".CONTACT_NO_REF."=>0";
$FORMS[contact][0]["Fields"]["ref_contatto"]["from_sql"]="SELECT * FROM contact WHERE %[PERM]% AND ref_contatto=0 order by id asc||val::id;;text::%nome%;;perm::1;;mod::contact";*/
$FORMS[contact][0]["Fields"]["indirizzo"]["title"]=CONTACT_ADDRESS;
$FORMS[contact][0]["Fields"]["indirizzo"]["content"]="textarea||||col::27";
$FORMS[contact][0]["Fields"]["indirizzo"]["er_check"]="min::2";
$FORMS[contact][0]["Fields"]["citta"]["title"]=CONTACT_CITY;
$FORMS[contact][0]["Fields"]["citta"]["content"]="text||||wid::30";
$FORMS[contact][0]["Fields"]["citta"]["er_check"]="min::2";
$FORMS[contact][0]["Fields"]["cap"]["title"]=CONTACT_CAP;
$FORMS[contact][0]["Fields"]["cap"]["content"]="text||||wid::6";
$FORMS[contact][0]["Fields"]["country"]["title"]=CONTACT_COUNTRY;
$FORMS[contact][0]["Fields"]["country"]["content"]="select||107||";
$FORMS[contact][0]["Fields"]["country"]["from_sql"]="SELECT * FROM INT_country WHERE 1=1 order by country asc||val::id;;text::%country%;;perm::0";

$FORMS[contact][0]["Fields"]["email"]["title"]=CONTACT_EMAIL;
$FORMS[contact][0]["Fields"]["email"]["content"]="text||||wid::30";
$FORMS[contact][0]["Fields"]["email1"]["title"]=CONTACT_EMAIL;
$FORMS[contact][0]["Fields"]["email1"]["content"]="text||||wid::30";
$FORMS[contact][0]["Fields"]["email2"]["title"]=CONTACT_EMAIL;
$FORMS[contact][0]["Fields"]["email2"]["content"]="text||||wid::30";


//$FORMS[contact][0]["Fields"]["email"]["er_check"]="type::email;;max::100";
$FORMS[contact][0]["Fields"]["telefono"]["title"]=CONTACT_PHONE;
$FORMS[contact][0]["Fields"]["telefono"]["content"]="text||||wid::30";
$FORMS[contact][0]["Fields"]["telefono2"]["title"]=CONTACT_PHONE;
$FORMS[contact][0]["Fields"]["telefono2"]["content"]="text||||wid::30";
$FORMS[contact][0]["Fields"]["telefono3"]["title"]=CONTACT_PHONE;
$FORMS[contact][0]["Fields"]["telefono3"]["content"]="text||||wid::30";
$FORMS[contact][0]["Fields"]["telefono4"]["title"]=CONTACT_PHONE;
$FORMS[contact][0]["Fields"]["telefono4"]["content"]="text||||wid::30";

$FORMS[contact][0]["Fields"]["mobile"]["title"]=CONTACT_MOBILE;
$FORMS[contact][0]["Fields"]["mobile"]["content"]="text||||wid::30";
$FORMS[contact][0]["Fields"]["mobile1"]["title"]=CONTACT_MOBILE;
$FORMS[contact][0]["Fields"]["mobile1"]["content"]="text||||wid::30";
$FORMS[contact][0]["Fields"]["mobile2"]["title"]=CONTACT_MOBILE;
$FORMS[contact][0]["Fields"]["mobile2"]["content"]="text||||wid::30";
$FORMS[contact][0]["Fields"]["mobile3"]["title"]=CONTACT_MOBILE;
$FORMS[contact][0]["Fields"]["mobile3"]["content"]="text||||wid::30";

$FORMS[contact][0]["Fields"]["fax"]["title"]=CONTACT_FAX;
$FORMS[contact][0]["Fields"]["fax"]["content"]="text||||wid::30";
$FORMS[contact][0]["Fields"]["fax"]["er_check"]="max::20";
$FORMS[contact][0]["Fields"]["fax1"]["title"]=CONTACT_FAX;
$FORMS[contact][0]["Fields"]["fax1"]["content"]="text||||wid::30";
$FORMS[contact][0]["Fields"]["fax1"]["er_check"]="max::20";

$FORMS[contact][0]["Fields"]["skype"]["title"]=CONTACT_SKYPE;
$FORMS[contact][0]["Fields"]["skype"]["content"]="text||||wid::30";
$FORMS[contact][0]["Fields"]["sharedfolder"]["title"]=CONTACT_SHARED_FOLDER;
$FORMS[contact][0]["Fields"]["sharedfolder"]["content"]="text||||wid::100";

$FORMS[contact][0]["Fields"]["leg_rap"]["title"]=CONTACT_LEG_RAP;
$FORMS[contact][0]["Fields"]["leg_rap"]["content"]="text||||wid::30";
$FORMS[contact][0]["Fields"]["leg_rap"]["er_check"]="max::255";
$FORMS[contact][0]["Fields"]["cod_fis"]["title"]=CONTACT_COD_FIS;
$FORMS[contact][0]["Fields"]["cod_fis"]["content"]="text||||wid::30";
$FORMS[contact][0]["Fields"]["cod_fis"]["er_check"]="max::200";
$FORMS[contact][0]["Fields"]["piva"]["title"]=CONTACT_PIVA;
$FORMS[contact][0]["Fields"]["piva"]["content"]="text||||wid::30";
$FORMS[contact][0]["Fields"]["piva"]["er_check"]="max::200";
$FORMS[contact][0]["Fields"]["iscr_ccia"]["title"]=CONTACT_ISCR_CCIAA;
$FORMS[contact][0]["Fields"]["iscr_ccia"]["content"]="text||||wid::30";
$FORMS[contact][0]["Fields"]["iscr_ccia"]["er_check"]="max::255";
$FORMS[contact][0]["Fields"]["iscr_trib"]["title"]=CONTACT_ISCR_TRIB;
$FORMS[contact][0]["Fields"]["iscr_trib"]["content"]="text||||wid::30";
$FORMS[contact][0]["Fields"]["iscr_trib"]["er_check"]="max::255";
$FORMS[contact][0]["Fields"]["luogo"]["title"]=CONTACT_PLACE;
$FORMS[contact][0]["Fields"]["luogo"]["content"]="text||||wid::30";
$FORMS[contact][0]["Fields"]["luogo"]["er_check"]="max::255";
$FORMS[contact][0]["Fields"]["data"]["title"]=CONTACT_DATECOST;
$FORMS[contact][0]["Fields"]["data"]["content"]="date||||";
$FORMS[contact][0]["Fields"]["on_orar"]["title"]=PRATICHE_HOUR_PRICE;
$FORMS[contact][0]["Fields"]["on_orar"]["content"]="text||||wid::10";
$FORMS[contact][0]["Fields"]["on_orar"]["er_check"]="type::float";
$FORMS[contact][0]["Fields"]["note"]["title"]=FW_NOTE;
$FORMS[contact][0]["Fields"]["note"]["content"]="textarea||||col::40;;row::5";
$FORMS[contact][0]["Fields"]["note"]["er_check"]="";
$FORMS[contact][0]["Fields"]["permessi"]["title"]=FW_PERMISSION;
$FORMS[contact][0]["Fields"]["permessi"]["content"]="permission||||";
$FORMS[contact][0]["Fields"]["send"]["content"]="submit||".CONTACT_ADD_CONTACT."||";



?>
