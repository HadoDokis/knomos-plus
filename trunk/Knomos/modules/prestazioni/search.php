<?

$perm_parent = perm_sql_read("%[PERM]%","prestazioni");


$SEARCHES[prestazioni][0][form][box_title]=PRESTAZIONI_SEARCH;
$SEARCHES[prestazioni][0][form][form_method]="GET";
$SEARCHES[prestazioni][0][form][box_desc]="";
$SEARCHES[prestazioni][0][form][name]="listprestaz";
$SEARCHES[prestazioni][0][form][onpost]="action::db||table::test||type::add||wf::id";
$SEARCHES[prestazioni][0][form][ignore]="";
$SEARCHES[prestazioni][0][form][Fields]["ref_id"]["title"]=PRESTAZIONI_REF_PRATICA;
$SEARCHES[prestazioni][0][form][Fields]["ref_id"]["content"]="tselect||||url::".$CONF[url_base].$CONF[dir_modules]."pratiche/pages/pratiche_search_div.php?form_id=print_pres&form_page=1&pr_codice=";
$SEARCHES[prestazioni][0][form][Fields]["ref_id"]["from_sql"]="SELECT * FROM pratiche p WHERE %[PERM]% AND pr_codice LIKE '%[VAL]%%' order by pr_codice asc||val::id;;text::pr_codice;;text2::pr_oggetto;;perm::1;;mod::pratiche;;mul::1";
$SEARCHES[prestazioni][0][form][Fields]["clie"]["title"]=PRESTAZIONI_CUSTOMER;
$SEARCHES[prestazioni][0][form][Fields]["clie"]["content"]="tselect||||";
$SEARCHES[prestazioni][0][form][Fields]["clie"]["from_sql"]="SELECT * FROM contact WHERE codice LIKE '%[VAL]%%' order by nome asc||val::id;;text::%codice%;;perm::0;;mod::contact;;mul::1";
$SEARCHES[prestazioni][0][form][Fields]["testo"]["title"]=FW_DESC;
$SEARCHES[prestazioni][0][form][Fields]["testo"]["content"]="text||||";
$SEARCHES[prestazioni][0][form][Fields]["day_from"]["title"]=FW_FROM;
$SEARCHES[prestazioni][0][form][Fields]["day_from"]["content"]="date||||";
$SEARCHES[prestazioni][0][form][Fields]["day_to"]["title"]=FW_TO;
$SEARCHES[prestazioni][0][form][Fields]["day_to"]["content"]="date||||";
$SEARCHES[prestazioni][0][form][Fields]["codice"]["title"]=FW_CODE;
$SEARCHES[prestazioni][0][form][Fields]["codice"]["content"]="tselect||||wid::8;;url::".$CONF[url_base].$CONF[dir_modules]."admin/pages/ta_search_div.php?simple_ins=1&form_id=listpratiche&form_page=1&codice=";
$SEARCHES[prestazioni][0][form][Fields]["codice"]["from_sql"]="SELECT * FROM INT_tariffe WHERE tatid LIKE '%[VAL]%%' order by tatid asc||val::tatid;;text2::tatid;;text::tat_desc;;perm::0;;mod::admin;;mul::1;;tab::INT_tariffe;;ids::tatid";
$SEARCHES[prestazioni][0][form][Fields]["operatore"]["title"]=PRESTAZIONI_USER;
$SEARCHES[prestazioni][0][form][Fields]["operatore"]["content"]="tselect||".$_SESSION[fw_userid]."||url::".$CONF[url_base].$CONF[dir_modules]."admin/pages/user_search_div.php?form_id=listpratiche&form_page=1&codice=";
$SEARCHES[prestazioni][0][form][Fields]["operatore"]["from_sql"]="SELECT * FROM ".$CONF[auth_db_table]." WHERE codice LIKE '%[VAL]%%' order by codice asc||val::id;;text::codice;;text2::nome;;perm::0;;mul::0;;tab::users";
$SEARCHES[prestazioni][0][form][Fields]["note"]["title"]=FW_NOTE;
$SEARCHES[prestazioni][0][form][Fields]["note"]["content"]="text||||";

//$SEARCHES[prestazioni][0][form][Fields]["acconti"]["title"]=FW_ACCONTI;
//$SEARCHES[prestazioni][0][form][Fields]["acconti"]["content"]="text||||";
//$SEARCHES[prestazioni][0][form][Fields]["sp_studio"]["title"]=FW_SP_STUDIO;
//$SEARCHES[prestazioni][0][form][Fields]["sp_studio"]["content"]="text||||";

$SEARCHES[prestazioni][0][form][Fields]["send"]["content"]="submit||".FW_SEARCH."||";
//$SEARCHES[prestazioni][0][search][title]="Risultati ricerca";
//$SEARCHES[prestazioni][0][search][result_txt]="Sono stati trovati %[FOUND]% risultati";

if ($_GET[primanota]==1)
{$SEARCHES[prestazioni][0][search][tables][prestazioni]="0||REGISTRAZIONI TROVATE||exp::1;;lock::0||0";}
else{$SEARCHES[prestazioni][0][search][tables][prestazioni]="0||PRESTAZIONI TROVATE||exp::1;;lock::0||0";}

$SEARCHES[prestazioni][0][search][tablesql][prestazioni]="SELECT m.* FROM prestazioni m, pratiche p WHERE $perm_parent AND p.id=m.ref_id ";
$SEARCHES[prestazioni][0][search][fields][ref_id][content]="num_equal||";
$SEARCHES[prestazioni][0][search][fields][ref_id][search_field]="prestazioni-ref_id";
$SEARCHES[prestazioni][0][search][fields][day_from][content]="num_more||";
$SEARCHES[prestazioni][0][search][fields][day_from][search_field]="prestazioni-data";
$SEARCHES[prestazioni][0][search][fields][day_to][content]="num_less||";
$SEARCHES[prestazioni][0][search][fields][day_to][search_field]="prestazioni-data";

//$SEARCHES[prestazioni][0][search][fields][acconti][content]="num_more||";
//$SEARCHES[prestazioni][0][search][fields][acconti][search_field]="prestazioni-acconti";
$SEARCHES[prestazioni][0][search][fields][sp_studio][content]="num_acc_ant_spstud||";
$SEARCHES[prestazioni][0][search][fields][sp_studio][search_field]="prestazioni-sp_studio";

$SEARCHES[prestazioni][0][search][fields][testo][content]="text_like||";
$SEARCHES[prestazioni][0][search][fields][testo][search_field]="prestazioni-testo";
$SEARCHES[prestazioni][0][search][fields][clie][content]="num_equal||";
$SEARCHES[prestazioni][0][search][fields][clie][search_field]="prestazioni-p.pr_ref_idcliente";
$SEARCHES[prestazioni][0][search][fields][operatore][content]="num_equal||";
$SEARCHES[prestazioni][0][search][fields][operatore][search_field]="prestazioni-operatore";
$SEARCHES[prestazioni][0][search][fields][codice][content]="num_equal||";
$SEARCHES[prestazioni][0][search][fields][codice][search_field]="prestazioni-codice";
$SEARCHES[prestazioni][0][search][fields][note][content]="text_like||";
$SEARCHES[prestazioni][0][search][fields][note][search_field]="prestazioni-m.note";

?>
