<?


$SEARCHES[contact][0][form][form_method]="GET";
$SEARCHES[contact][0][form][name]="search";
$SEARCHES[contact][0][form][onpost]="action::db||table::test||type::add||wf::id";
$SEARCHES[contact][0][form][ignore]="";
$SEARCHES[contact][0][form][Fields]["codice"]["title"]=FW_CODE;
$SEARCHES[contact][0][form][Fields]["codice"]["content"]="text||||wid::30";
$SEARCHES[contact][0][form][Fields]["nome"]["title"]=CONTACT_NAME;
$SEARCHES[contact][0][form][Fields]["nome"]["content"]="text||||wid::30";
$SEARCHES[contact][0][form][Fields]["cap"]["title"]=CONTACT_CAP;
$SEARCHES[contact][0][form][Fields]["cap"]["content"]="text||||wid::7";
$SEARCHES[contact][0][form][Fields]["city"]["title"]=CONTACT_CITY;
$SEARCHES[contact][0][form][Fields]["city"]["content"]="text||||wid::20";
$SEARCHES[contact][0][form]["Fields"]["tipo"]["title"]=CONTACT_TYPER;
$SEARCHES[contact][0][form]["Fields"]["tipo"]["content"]="select||||opt::".FW_ANY."=>,,".CONTACT_TYPE_AVVR."=>1,,".CONTACT_TYPE_CLIE."=>2,,".CONTACT_TYPE_COLL."=>3,,".CONTACT_TYPE_CONS."=>4,,CORR=>5,,".CONTACT_TYPE_FORN."=>6,,".CONTACT_TYPE_AVVO."=>7";
$SEARCHES[contact][0][form]["Fields"]["tipo_contatto"]["title"]=FW_TYPE;
$SEARCHES[contact][0][form]["Fields"]["tipo_contatto"]["content"]="select||||opt::".FW_ANY."=>,,".CONTACT_ALT_PERSON."=>0,,".CONTACT_ALT_COMPANY."=>1,,".CONTACT_ALT_PUBLIC."=>2,,".CONTACT_ALT_NOPROF."=>3,,".CONTACT_ALT_PROFES."=>4";
$SEARCHES[contact][0][form]["Fields"]["operatore"]["title"]=CONTACT_ACCOUNT;
$SEARCHES[contact][0][form]["Fields"]["operatore"]["content"]="tselect||||wid::6;;url::".$CONF[url_base].$CONF[dir_modules]."admin/pages/user_search_div.php?form_id=listpratiche&form_page=1&codice=";
$SEARCHES[contact][0][form]["Fields"]["operatore"]["from_sql"]="SELECT * FROM ".$CONF[auth_db_table]." WHERE codice LIKE '%[VAL]%%' order by codice asc||val::id;;text::codice;;text2::nome;;perm::0;;mul::0;;tab::users";
$SEARCHES[contact][0][form]["Fields"]["note"]["title"]=FW_NOTE;
$SEARCHES[contact][0][form]["Fields"]["note"]["content"]="text||||wid::30";
$SEARCHES[contact][0][form][Fields]["send"]["content"]="submit||".FW_SEARCH."||";
//$SEARCHES[contact][0][search][title]="Risultati ricerca";
//$SEARCHES[contact][0][search][result_txt]=CONTACT_SEARCH_FOUND;
$SEARCHES[contact][0][search][tables][contact]="0||".CONTACT_FOUND."||exp::1;;lock::0||1";
$SEARCHES[contact][0][search][tablesql][contact]="SELECT * FROM contact p WHERE %[PERM]%";
$SEARCHES[contact][0][search][fields][nome][content]="text_like||";
$SEARCHES[contact][0][search][fields][nome][search_field]="contact-nome";
$SEARCHES[contact][0][search][fields][codice][content]="text_like||";
$SEARCHES[contact][0][search][fields][codice][search_field]="contact-codice";
$SEARCHES[contact][0][search][fields][cap][content]="text_like||";
$SEARCHES[contact][0][search][fields][cap][search_field]="contact-cap";
$SEARCHES[contact][0][search][fields][city][content]="text_like||";
$SEARCHES[contact][0][search][fields][city][search_field]="contact-citta";
$SEARCHES[contact][0][search][fields][tipo_contatto][content]="num_equal||";
$SEARCHES[contact][0][search][fields][tipo_contatto][search_field]="contact-tipo_contatto";
$SEARCHES[contact][0][search][fields][tipo][content]="num_equal||";
$SEARCHES[contact][0][search][fields][tipo][search_field]="contact-tipo";
$SEARCHES[contact][0][search][fields][operatore][content]="num_equal||";
$SEARCHES[contact][0][search][fields][operatore][search_field]="contact-accountm";
$SEARCHES[contact][0][search][fields][note][content]="text_like||";
$SEARCHES[contact][0][search][fields][note][search_field]="contact-note";


$SEARCHES[contact][1][form][form_method]="GET";
$SEARCHES[contact][1][form][name]="search_home";
$SEARCHES[contact][1][form][onpost]="action::db||table::test||type::add||wf::id";
$SEARCHES[contact][1][form][ignore]="";
$SEARCHES[contact][1][form][Fields]["nome"]["title"]=CONTACT_NAME;
$SEARCHES[contact][1][form][Fields]["nome"]["content"]="text||||wid::30";
$SEARCHES[contact][1][form][Fields]["send"]["content"]="submit||".FW_SEARCH."||";
$SEARCHES[contact][1][search][tables][contact]="1||||exp::1;;lock::0";
$SEARCHES[contact][1][search][fields][nome][content]="text_like||";
$SEARCHES[contact][1][search][fields][nome][search_field]="contact-nome";


$SEARCHES[contact][2][form][form_method]="GET";
$SEARCHES[contact][2][form][name]="search_home";
$SEARCHES[contact][2][form][onpost]="action::db||table::test||type::add||wf::id";
$SEARCHES[contact][2][form][ignore]="";
$SEARCHES[contact][2][form][Fields]["nome"]["title"]=FW_CODE;
$SEARCHES[contact][2][form][Fields]["nome"]["content"]="text||||wid::25";
$SEARCHES[contact][2][form][Fields]["formname"]["content"]="hidden||".$_GET["formname"]."||";
$SEARCHES[contact][2][form][Fields]["fieldname"]["content"]="hidden||".$_GET["fieldname"]."||";
$SEARCHES[contact][2][form][Fields]["send"]["content"]="submit||".FW_SEARCH."||";
$SEARCHES[contact][2][search][tables][contact]="3||||exp::1;;lock::0";
$SEARCHES[contact][2][search][tablesql][contact]="SELECT * FROM contact p WHERE %[PERM]%";
$SEARCHES[contact][2][search][fields][nome][content]="text_like||";
$SEARCHES[contact][2][search][fields][nome][search_field]="contact-codice";

$SEARCHES[contact][3][form][form_method]="GET";
$SEARCHES[contact][3][form][name]="search_contact";
$SEARCHES[contact][3][form][onpost]="action::db||table::test||type::add||wf::id";
$SEARCHES[contact][3][form][ignore]="";
$SEARCHES[contact][3][form][Fields]["nome"]["title"]=FW_CODE;
$SEARCHES[contact][3][form][Fields]["nome"]["content"]="text||||wid::25";
$SEARCHES[contact][3][form][Fields]["formname"]["content"]="hidden||".$_GET["formname"]."||";
$SEARCHES[contact][3][form][Fields]["fieldname"]["content"]="hidden||".$_GET["fieldname"]."||";
$SEARCHES[contact][3][form][Fields]["send"]["content"]="submit||".FW_SEARCH."||";
$SEARCHES[contact][3][search][tables][contact]="4||||exp::1;;lock::0";
$SEARCHES[contact][3][search][tablesql][contact]="SELECT * FROM contact p WHERE %[PERM]%";
$SEARCHES[contact][3][search][fields][nome][content]="text_like||";
$SEARCHES[contact][3][search][fields][nome][search_field]="contact-codice";

?>
