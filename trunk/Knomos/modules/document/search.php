<?

$perm_parent = perm_sql_read("%[PERM]%","pratiche");
$perm_parent = str_replace ("permessi","p.permessi",$perm_parent);
$perm_parent = str_replace ("id","p.id",$perm_parent);


$SEARCHES[document][0][form][box_title]=DOCUMENT_SEARCH;
$SEARCHES[document][0][form][form_method]="GET";
$SEARCHES[document][0][form][box_desc]="";
$SEARCHES[document][0][form][name]="listdoc";
$SEARCHES[document][0][form][onpost]="action::db||table::test||type::add||wf::id";
$SEARCHES[document][0][form][ignore]="";
$SEARCHES[document][0][form][Fields]["ref_prat"]["title"]=PRESTAZIONI_REF_PRATICA;
$SEARCHES[document][0][form][Fields]["ref_prat"]["content"]="tselect||||url::".$CONF[url_base].$CONF[dir_modules]."pratiche/pages/pratiche_search_div.php?form_id=print_pres&form_page=1&pr_codice=";
$SEARCHES[document][0][form][Fields]["ref_prat"]["from_sql"]="SELECT * FROM pratiche p WHERE %[PERM]% AND pr_codice LIKE '%[VAL]%%' order by pr_codice asc||val::id;;text::pr_codice;;text2::pr_oggetto;;perm::1;;mod::pratiche;;mul::1";
$SEARCHES[document][0][form][Fields]["testo"]["title"]=DOCUMENT_CONTENT;
$SEARCHES[document][0][form][Fields]["testo"]["content"]="text||||";
$SEARCHES[document][0][form][Fields]["descr"]["title"]=FW_DESC;
$SEARCHES[document][0][form][Fields]["descr"]["content"]="text||||";
/*$SEARCHES[document][0][form][Fields]["clie"]["title"]=PRESTAZIONI_CUSTOMER;
$SEARCHES[document][0][form][Fields]["clie"]["content"]="tselect||||";
$SEARCHES[document][0][form][Fields]["clie"]["from_sql"]="SELECT * FROM contact WHERE codice LIKE '%[VAL]%%' order by nome asc||val::id;;text::%codice%;;perm::0;;mod::contact;;mul::1";
*/$SEARCHES[document][0][form][Fields]["filename"]["title"]=DOCUMENT_FILENAME;
$SEARCHES[document][0][form][Fields]["filename"]["content"]="text||||";
$SEARCHES[document][0][form][Fields]["day_from"]["title"]=FW_FROM;
$SEARCHES[document][0][form][Fields]["day_from"]["content"]="date||||";
$SEARCHES[document][0][form][Fields]["day_to"]["title"]=FW_TO;
$SEARCHES[document][0][form][Fields]["day_to"]["content"]="date||||";
$SEARCHES[document][0][form]["Fields"]["operatore"]["title"]=PRESTAZIONI_USER;
$SEARCHES[document][0][form]["Fields"]["operatore"]["content"]="tselect||||wid::6;;url::".$CONF[url_base].$CONF[dir_modules]."admin/pages/user_search_div.php?form_id=listpratiche&form_page=1&codice=";
$SEARCHES[document][0][form]["Fields"]["operatore"]["from_sql"]="SELECT * FROM ".$CONF[auth_db_table]." WHERE codice LIKE '%[VAL]%%' order by codice asc||val::id;;text::codice;;text2::nome;;perm::0;;mul::0;;tab::users";
$SEARCHES[document][0][form][Fields]["note"]["title"]=FW_NOTE;
$SEARCHES[document][0][form][Fields]["note"]["content"]="text||||";
$SEARCHES[document][0][form][Fields]["send"]["content"]="submit||".FW_SEARCH."||";
//$SEARCHES[document][0][search][title]="Risultati ricerca";
//$SEARCHES[document][0][search][result_txt]="Sono stati trovati %[FOUND]% risultati";
$SEARCHES[document][0][search][tables][document]="0||".DOCUMENT_FOUND."||exp::1;;lock::0||0";
$SEARCHES[document][0][search][tablesql][document]="SELECT m.* FROM document m, pratiche p WHERE %[PERM]% AND p.id=m.ref_prat AND m.ref_id=0 ";
$SEARCHES[document][0][search][fields][ref_prat][content]="num_equal||";
$SEARCHES[document][0][search][fields][ref_prat][search_field]="document-ref_prat";
$SEARCHES[document][0][search][fields][testo][content]="num_equal||";
$SEARCHES[document][0][search][fields][testo][search_field]="document-m.id";
$SEARCHES[document][0][search][fields][day_from][content]="num_more||";
$SEARCHES[document][0][search][fields][day_from][search_field]="document-data";
$SEARCHES[document][0][search][fields][day_to][content]="num_less||";
$SEARCHES[document][0][search][fields][day_to][search_field]="document-data";
$SEARCHES[document][0][search][fields][filename][content]="text_like||";
$SEARCHES[document][0][search][fields][filename][search_field]="document-filename";
$SEARCHES[document][0][search][fields][operatore][content]="num_equal||";
$SEARCHES[document][0][search][fields][operatore][search_field]="document-operatore";
$SEARCHES[document][0][search][fields][descr][content]="text_like||";
$SEARCHES[document][0][search][fields][descr][search_field]="document-descr";
$SEARCHES[document][0][search][fields][note][content]="text_like||";
$SEARCHES[document][0][search][fields][note][search_field]="document-note";

?>