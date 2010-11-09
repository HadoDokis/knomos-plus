<?

$SEARCHES[calendar][0][form][box_title]=CALENDAR_SEARCH;
$SEARCHES[calendar][0][form][form_method]="GET";
$SEARCHES[calendar][0][form][box_desc]="";
$SEARCHES[calendar][0][form][name]="listcont";
$SEARCHES[calendar][0][form][onpost]="action::db||table::test||type::add||wf::id";
$SEARCHES[calendar][0][form][ignore]="";
$SEARCHES[calendar][0][form][Fields]["title"]["title"]=FW_DESC;
$SEARCHES[calendar][0][form][Fields]["title"]["content"]="text||||";
$SEARCHES[calendar][0][form][Fields]["day_from"]["title"]=FW_FROM;
$SEARCHES[calendar][0][form][Fields]["day_from"]["content"]="date||||";
$SEARCHES[calendar][0][form][Fields]["day_to"]["title"]=FW_TO;
$SEARCHES[calendar][0][form][Fields]["day_to"]["content"]="date||||";

$SEARCHES[calendar][0][form]["Fields"]["codice"]["title"]=EXPORT_REF_CODE;
$SEARCHES[calendar][0][form]["Fields"]["codice"]["content"]="tselect||||url::".$CONF[url_base].$CONF[dir_modules]."admin/pages/ta_search_div.php?simple_ins=1&form_id=listpratiche&form_page=1&codice=";
$SEARCHES[calendar][0][form]["Fields"]["codice"]["from_sql"]="SELECT * FROM INT_tariffe WHERE tatid LIKE '%[VAL]%%' order by tatid asc||val::id;;text::tatid;;text2::tat_desc;;perm::0;;mod::admin;;mul::0;;tab::INT_tariffe;;ids::tatid";

$SEARCHES[calendar][0][form]["Fields"]["ref_prat"]["title"]=PRESTAZIONI_REF_PRATICA;
$SEARCHES[calendar][0][form]["Fields"]["ref_prat"]["content"]="tselect||||url::".$CONF[url_base].$CONF[dir_modules]."pratiche/pages/pratiche_search_div.php?form_id=print_pres&form_page=1&pr_codice=";
$SEARCHES[calendar][0][form]["Fields"]["ref_prat"]["from_sql"]="SELECT * FROM pratiche p WHERE %[PERM]% AND pr_codice LIKE '%[VAL]%%' order by pr_codice asc||val::id;;text::pr_codice;;text2::pr_oggetto;;perm::1;;mod::pratiche;;mul::1";
$SEARCHES[calendar][0][form]["Fields"]["operatore"]["title"]=PRESTAZIONI_USER;
$SEARCHES[calendar][0][form]["Fields"]["operatore"]["content"]="tselect||".$_SESSION[fw_userid]."||wid::6;;url::".$CONF[url_base].$CONF[dir_modules]."admin/pages/user_search_div.php?form_id=listpratiche&form_page=1&codice=";
$SEARCHES[calendar][0][form]["Fields"]["operatore"]["from_sql"]="SELECT * FROM ".$CONF[auth_db_table]." WHERE codice LIKE '%[VAL]%%' order by codice asc||val::id;;text::codice;;text2::nome;;perm::0;;mul::0;;tab::users";
$SEARCHES[calendar][0][form]["Fields"]["done"]["title"]=CALENDAR_FATTO;
$SEARCHES[calendar][0][form]["Fields"]["done"]["content"]="select||||opt::".FW_ANY."=>,, In corso =>0,,In riserva / attesa =>1,,Completato =>2,,Da aggiornare =>3";
$SEARCHES[calendar][0][form]["Fields"]["done"]["from_sql"]="SELECT * FROM ".$CONF[auth_db_table]." WHERE codice LIKE '%[VAL]%%' order by codice asc||val::id;;text::codice;;perm::0;;mul::0;;tab::users";
$SEARCHES[calendar][0][form]["Fields"]["type"]["title"]=FW_TYPE;
$SEARCHES[calendar][0][form]["Fields"]["type"]["content"]="select||||opt::".FW_ANY."=>,,".CALENDAR_APPS."=>0,,".CALENDAR_SCADS."=>1,,Provvedimenti =>2,,Note =>3";


$SEARCHES[calendar][0][form]["Fields"]["type"]["from_sql"]="SELECT * FROM ".$CONF[auth_db_table]." WHERE codice LIKE '%[VAL]%%' order by codice asc||val::id;;text::codice;;perm::0;;mul::0;;tab::users";
$SEARCHES[calendar][0][form]["Fields"]["type_app"]["title"]=CALENDAR_GENERE;
$SEARCHES[calendar][0][form]["Fields"]["type_app"]["content"]="select||||opt::".FW_ANY."=>";
$SEARCHES[calendar][0][form]["Fields"]["type_app"]["from_sql"]="SELECT * FROM INT_calendar_tipo||val::ttsid;;text::(%ttsid%) %tts_desc%;;perm::0";
$SEARCHES[calendar][0][form]["Fields"]["note"]["title"]=FW_NOTE;
$SEARCHES[calendar][0][form]["Fields"]["note"]["content"]="text||||";

$SEARCHES[calendar][0][form]["Fields"]["send"]["content"]="submit||".FW_SEARCH."||";
$SEARCHES[calendar][0][search][tables][calendar]="0||".CALENDAR_FOUND."||exp::1;;lock::0||1";
$SEARCHES[calendar][0][search][tablesql][calendar]="SELECT * FROM pratiche p, calendar m WHERE %[PERM]% AND p.id=m.ref_prat";
$SEARCHES[calendar][0][search][fields][title][content]="text_like||";
$SEARCHES[calendar][0][search][fields][title][search_field]="calendar-title";
$SEARCHES[calendar][0][search][fields][note][content]="text_like||";
$SEARCHES[calendar][0][search][fields][note][search_field]="calendar-m.note";
$SEARCHES[calendar][0][search][fields][ref_prat][content]="num_equal||";
$SEARCHES[calendar][0][search][fields][ref_prat][search_field]="calendar-ref_prat";
$SEARCHES[calendar][0][search][fields][codice][content]="num_equal||";
$SEARCHES[calendar][0][search][fields][codice][search_field]="calendar-codice";
$SEARCHES[calendar][0][search][fields][operatore][content]="calendar_owner||";
$SEARCHES[calendar][0][search][fields][operatore][search_field]="calendar-operator";
$SEARCHES[calendar][0][search][fields][day_from][content]="num_more||";
$SEARCHES[calendar][0][search][fields][day_from][search_field]="calendar-day";
$SEARCHES[calendar][0][search][fields][day_to][content]="num_less||";
$SEARCHES[calendar][0][search][fields][day_to][search_field]="calendar-day";
$SEARCHES[calendar][0][search][fields][done][content]="num_equal||";
$SEARCHES[calendar][0][search][fields][done][search_field]="calendar-done";
$SEARCHES[calendar][0][search][fields][type][content]="num_equal||";
$SEARCHES[calendar][0][search][fields][type][search_field]="calendar-type";
$SEARCHES[calendar][0][search][fields][type_app][content]="num_equal||";
$SEARCHES[calendar][0][search][fields][type_app][search_field]="calendar-type_app";







?>
