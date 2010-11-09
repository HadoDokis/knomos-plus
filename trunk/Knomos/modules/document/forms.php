<?
// Form New Mod Contact
$FORMS[document][0]["name"]="new_doc";
$FORMS[document][0]["onpost"]="action::db||table::document||type::add||wf::id";
$FORMS[document][0]["ignore"]="template;;file;;help";
$FORMS[document][0]["Fields"]["ext"]["content"]="hidden||sxw||";
$FORMS[document][0]["Fields"]["descr"]["title"]=FW_DESC;
$FORMS[document][0]["Fields"]["descr"]["content"]="text||||wid::40";
$FORMS[document][0]["Fields"]["descr"]["er_check"]="min::5;;max::255";
$FORMS[document][0]["Fields"]["ref_prat"]["title"]=DOCUMENT_REF_PRATICA;
$FORMS[document][0]["Fields"]["ref_prat"]["content"]="tselect||||wid::30;;url::".$CONF[url_base].$CONF[dir_modules]."pratiche/pages/pratiche_search_div.php?form_id=listpratiche&form_page=1&pr_codice=";
$FORMS[document][0]["Fields"]["ref_prat"]["from_sql"]="SELECT * FROM pratiche p WHERE %[PERM]% AND pr_codice LIKE '%[VAL]%%' order by pr_codice asc||val::id;;text::pr_codice;;perm::1;;mod::pratiche;;mul::0";
$FORMS[document][0]["Fields"]["filename"]["title"]=DOCUMENT_FILENAME;
$FORMS[document][0]["Fields"]["filename"]["content"]="text||||wid::40";
$FORMS[document][0]["Fields"]["operatore"]["content"]="hidden||".$_SESSION[fw_userid]."||";
$FORMS[document][0]["Fields"]["template"]["title"]=DOCUMENT_TEMPLATE;
$FORMS[document][0]["Fields"]["template"]["content"]="select||||opt::".DOCUMENT_TEMPLATE_FROMFILE."=>0";
$FORMS[document][0]["Fields"]["template"]["er_check"]="";
$FORMS[document][0]["Fields"]["template"]["from_sql"]="SELECT * FROM INT_document_template order by id asc||val::id;;text::%descr%;;perm::0";
//$FORMS[document][0]["Fields"]["help"]["title"]=DOCUMENT_FILE_HINT;
$FORMS[document][0]["Fields"]["help"]["content"]="htmltext||".DOCUMENT_FILE_HINT."||";
$FORMS[document][0]["Fields"]["file"]["title"]=FW_FILE;
$FORMS[document][0]["Fields"]["file"]["content"]="file||||";
$FORMS[document][0]["Fields"]["data"]["content"]="hidden||".date("Y-m-d")."||";
$FORMS[document][0]["Fields"]["version"]["content"]="hidden||1||";
$FORMS[document][0]["Fields"]["note"]["title"]=FW_NOTE;
$FORMS[document][0]["Fields"]["note"]["content"]="textarea||||col::40;;row::5";
$FORMS[document][0]["Fields"]["note"]["er_check"]="";
$FORMS[document][0]["Fields"]["send"]["content"]="submit||".DOCUMENT_ADD."||";
$FORMS[document][0]["Fields"]["filename"]["er_check"]="min::5;;max::255";
?>
