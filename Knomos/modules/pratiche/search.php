<?

$SEARCHES[pratiche][0][form][box_title]=PRATICHE_SEARCH;
$SEARCHES[pratiche][0][form][form_method]="GET";
$SEARCHES[pratiche][0][form][box_desc]="";
$SEARCHES[pratiche][0][form][name]="listpratiche";
$SEARCHES[pratiche][0][form][onpost]="action::db||table::test||type::add||wf::id";
$SEARCHES[pratiche][0][form][ignore]="";


$SEARCHES[pratiche][0][form][Fields]["pr_numero"]["title"]=PRATICHE_NUMBER;
$SEARCHES[pratiche][0][form][Fields]["pr_numero"]["content"]="text||||wid::5";
$SEARCHES[pratiche][0][form][Fields]["pr_codice"]["title"]=PRATICHE_CODE;
$SEARCHES[pratiche][0][form][Fields]["pr_codice"]["content"]="text||||wid::30";

$SEARCHES[pratiche][0][form][Fields]["pr_oggetto"]["title"]=PRATICHE_SUBJ;
$SEARCHES[pratiche][0][form][Fields]["pr_oggetto"]["content"]="text||||wid::30";
$SEARCHES[pratiche][0][form][Fields]["pr_oggetto2"]["title"]=PRATICHE_POS;
$SEARCHES[pratiche][0][form][Fields]["pr_oggetto2"]["content"]="select||||opt::".FW_ANY."=>,,".PRATICHE_POS_IMP."=>0,,".PRATICHE_POS_PO."=>1,,".PRATICHE_POS_PC."=>2,,".PRATICHE_POS_ATT."=>3,,".PRATICHE_POS_CONV."=>4,,".PRATICHE_POS_RIC."=>5,,".PRATICHE_POS_RES."=>6,,".PRATICHE_POS_3CH."=>7,,".PRATICHE_POS_3INT."=>8,,".PRATICHE_POS_3PIG."=>9,,".PRATICHE_POS_CR_PROC."=>10,,".PRATICHE_POS_CR_INT."=>11,,".PRATICHE_POS_DEB."=>12,,".PRATICHE_POS_OPPTE."=>13,,".PRATICHE_POS_OPPTO."=>14,,".PRATICHE_POS_APPTE."=>15,,".PRATICHE_POS_APPTO."=>16";
//$SEARCHES[pratiche][0][form][Fields]["pr_oggetto2"]["content"]="select||||opt::".PRATICHE_POS_IMP."=>0,,".PRATICHE_POS_PO."=>1,,".PRATICHE_POS_PC."=>2,,".PRATICHE_POS_ATT."=>3,,".PRATICHE_POS_CONV."=>4,,".PRATICHE_POS_RIC."=>5,,".PRATICHE_POS_RES."=>6,,".PRATICHE_POS_3CH."=>7,,".PRATICHE_POS_3INT."=>8,,".PRATICHE_POS_3PIG."=>9,,".PRATICHE_POS_CR_PROC."=>10,,".PRATICHE_POS_CR_INT."=>11,,".PRATICHE_POS_DEB."=>12,,".PRATICHE_POS_OPPTE."=>13,,".PRATICHE_POS_OPPTO."=>14,,".PRATICHE_POS_APPTE."=>15,,".PRATICHE_POS_APPTO."=>16";

$SEARCHES[pratiche][0][form][Fields]["pr_schedario"]["title"]=PRATICHE_SCHEDARIO;
$SEARCHES[pratiche][0][form][Fields]["pr_schedario"]["content"]="text||||wid::30";
$SEARCHES[pratiche][0][form][Fields]["note"]["title"]=PRATICHE_NOTE;
$SEARCHES[pratiche][0][form][Fields]["note"]["content"]="text||||wid::30";
$SEARCHES[pratiche][0][form][Fields]["pr_comp_desc"]["title"]=PRATICHE_AUT_COMP_DESC;
$SEARCHES[pratiche][0][form][Fields]["pr_comp_desc"]["content"]="text||||wid::30";
$SEARCHES[pratiche][0][form][Fields]["pr_uff_giud"]["title"]=PRATICHE_UFF_GIUD;
$SEARCHES[pratiche][0][form][Fields]["pr_uff_giud"]["content"]="text||||wid::50";
$SEARCHES[pratiche][0][form][Fields]["pr_luogo_uff_giud"]["title"]=PRATICHE_LUOGO_UFF_GIUD;
$SEARCHES[pratiche][0][form][Fields]["pr_luogo_uff_giud"]["content"]="text||||wid::30";

$SEARCHES[pratiche][0][form][Fields]["pr_giudice"]["title"]=PRATICHE_GIUD;
$SEARCHES[pratiche][0][form][Fields]["pr_giudice"]["content"]="text||||wid::30";
$SEARCHES[pratiche][0][form][Fields]["pr_nruolo"]["title"]=PRATICHE_NRUOLO;
$SEARCHES[pratiche][0][form][Fields]["pr_nruolo"]["content"]="text||||wid::30";
$SEARCHES[pratiche][0][form][Fields]["pr_nruolo_altri"]["title"]=PRATICHE_NRUOLO_ALTRI;
$SEARCHES[pratiche][0][form][Fields]["pr_nruolo_altri"]["content"]="text||||wid::30";
$SEARCHES[pratiche][0][form][Fields]["pr_valore"]["title"]=PRATICHE_VALUE;
$SEARCHES[pratiche][0][form][Fields]["pr_valore"]["content"]="text||||wid::30";


$SEARCHES[pratiche][0][form]["Fields"]["operatore"]["title"]=PRATICHE_RESP;
$SEARCHES[pratiche][0][form]["Fields"]["operatore"]["content"]="tselect||||wid::6;;url::".$CONF[url_base].$CONF[dir_modules]."admin/pages/user_search_div.php?form_id=listpratiche&form_page=1&codice=";
$SEARCHES[pratiche][0][form]["Fields"]["operatore"]["from_sql"]="SELECT * FROM ".$CONF[auth_db_table]." WHERE codice LIKE '%[VAL]%%' order by codice asc||val::id;;text::codice;;text2::nome;;perm::0;;mul::0;;tab::users";
$SEARCHES[pratiche][0][form][Fields]["pr_dept"]["title"]=PRATICHE_DEPT;
$SEARCHES[pratiche][0][form][Fields]["pr_dept"]["content"]="select||||mul::0;;opt::".FW_ANY."=>";
$SEARCHES[pratiche][0][form][Fields]["pr_dept"]["from_sql"]="SELECT * FROM ".$CONF[auth_groups_table]." WHERE tipo=1||val::id;;text::%name%";
$SEARCHES[pratiche][0][form][Fields]["pr_uff"]["title"]=PRATICHE_UFF;
$SEARCHES[pratiche][0][form][Fields]["pr_uff"]["content"]="select||||mul::0;;opt::".FW_ANY."=>";
$SEARCHES[pratiche][0][form][Fields]["pr_uff"]["from_sql"]="SELECT * FROM ".$CONF[auth_groups_table]." WHERE tipo=2||val::id;;text::%name%";


$SEARCHES[pratiche][0][form][Fields]["clie"]["title"]=PRATICHE_CUSTOMER;
$SEARCHES[pratiche][0][form][Fields]["clie"]["content"]="tselect||||url::".$CONF[url_base].$CONF[dir_modules]."contact/pages/contact_search_div.php?form_id=listpratiche&form_page=1&nome=";
$SEARCHES[pratiche][0][form][Fields]["clie"]["from_sql"]="SELECT * FROM contact WHERE codice LIKE '%[VAL]%%' order by nome asc||val::id;;text::codice;;text2::nome;;perm::0;;mod::contact;;mul::1";

$SEARCHES[pratiche][0][form][Fields]["pr_ref_idbenefic"]["title"]=PRATICHE_BENEF;
$SEARCHES[pratiche][0][form][Fields]["pr_ref_idbenefic"]["content"]="mselect||||url::".$CONF[url_base].$CONF[dir_modules]."contact/pages/contact_search_div2.php?form_id=listpratiche&form_page=1;;size::5;;word::".PRATICHE_BENEF;
$SEARCHES[pratiche][0][form][Fields]["pr_ref_idbenefic"]["from_sql"]="SELECT * FROM contact  WHERE id ='%ID%' order by nome asc||val::id;;text::%codice%;;perm::1;;mod::contact";
$SEARCHES[pratiche][0][form][Fields]["pr_ref_idbenefic"]["er_check"]="";
$SEARCHES[pratiche][0][form][Fields]["pr_ref_idavvr"]["title"]=PRATICHE_AVVR;
$SEARCHES[pratiche][0][form][Fields]["pr_ref_idavvr"]["content"]="mselect||||url::".$CONF[url_base].$CONF[dir_modules]."contact/pages/contact_search_div2.php?form_id=listpratiche&form_page=1;;size::5;;word::".PRATICHE_AVVR;
$SEARCHES[pratiche][0][form][Fields]["pr_ref_idavvr"]["from_sql"]="SELECT * FROM contact p WHERE id ='%ID%' order by nome asc||val::id;;text::%codice%;;perm::1;;mod::contact";
$SEARCHES[pratiche][0][form][Fields]["pr_ref_idavvr"]["er_check"]="";
$SEARCHES[pratiche][0][form][Fields]["pr_ref_idaltri"]["title"]=PRATICHE_OTHERS;
$SEARCHES[pratiche][0][form][Fields]["pr_ref_idaltri"]["content"]="mselect||||url::".$CONF[url_base].$CONF[dir_modules]."contact/pages/contact_search_div2.php?form_id=listpratiche&form_page=1;;size::5;;word::".PRATICHE_OTHERS;
$SEARCHES[pratiche][0][form][Fields]["pr_ref_idaltri"]["from_sql"]="SELECT * FROM contact p WHERE id ='%ID%' order by nome asc||val::id;;text::%codice%;;perm::1;;mod::contact";





$SEARCHES[pratiche][0][form][Fields]["send"]["content"]="submit||".FW_SEARCH."||";
//$SEARCHES[pratiche][0][search][title]="Risultati ricerca";
//$SEARCHES[pratiche][0][search][result_txt]="Sono stati trovati %[FOUND]% risultati";
$SEARCHES[pratiche][0][search][tables][pratiche]="0||".PRATICHE_FOUND."||exp::1;;lock::0||1";
$SEARCHES[pratiche][0][search][tablesql][pratiche]="SELECT * FROM pratiche p WHERE %[PERM]%";
$SEARCHES[pratiche][0][search][fields][pr_codice][content]="text_like||";
$SEARCHES[pratiche][0][search][fields][pr_codice][search_field]="pratiche-pr_codice";
$SEARCHES[pratiche][0][search][fields][pr_oggetto][content]="text_like||";
$SEARCHES[pratiche][0][search][fields][pr_oggetto][search_field]="pratiche-pr_oggetto";


$SEARCHES[pratiche][0][search][fields][pr_oggetto2][content]="text_like||";
$SEARCHES[pratiche][0][search][fields][pr_oggetto2][search_field]="pratiche-pr_oggetto2";


$SEARCHES[pratiche][0][search][fields][pr_schedario][content]="text_like||";
$SEARCHES[pratiche][0][search][fields][pr_schedario][search_field]="pratiche-pr_schedario";
$SEARCHES[pratiche][0][search][fields][note][content]="text_like||";
$SEARCHES[pratiche][0][search][fields][note][search_field]="pratiche-note";
$SEARCHES[pratiche][0][search][fields][pr_numero][content]="num_equal||";
$SEARCHES[pratiche][0][search][fields][pr_numero][search_field]="pratiche-pr_numero";
$SEARCHES[pratiche][0][search][fields][pr_valore][content]="num_equal||";
$SEARCHES[pratiche][0][search][fields][pr_valore][search_field]="pratiche-pr_valore";
$SEARCHES[pratiche][0][search][fields][pr_nruolo][content]="text_like||";
$SEARCHES[pratiche][0][search][fields][pr_nruolo][search_field]="pratiche-pr_nruolo";
$SEARCHES[pratiche][0][search][fields][pr_nruolo_altri][content]="text_like||";
$SEARCHES[pratiche][0][search][fields][pr_nruolo_altri][search_field]="pratiche-pr_nruolo_altri";
$SEARCHES[pratiche][0][search][fields][clie][content]="num_equal||";
$SEARCHES[pratiche][0][search][fields][clie][search_field]="pratiche-pr_ref_idcliente";

$SEARCHES[pratiche][0][search][fields][pr_ref_idbenefic][content]="num_equal||";
$SEARCHES[pratiche][0][search][fields][pr_ref_idbenefic][search_field]="pratiche-pr_ref_idbenefic";
$SEARCHES[pratiche][0][search][fields][pr_ref_idavvr][content]="num_equal||";
$SEARCHES[pratiche][0][search][fields][pr_ref_idavvr][search_field]="pratiche-pr_ref_idavvr";
$SEARCHES[pratiche][0][search][fields][pr_ref_idaltri][content]="num_equal||";
$SEARCHES[pratiche][0][search][fields][pr_ref_idaltri][search_field]="pratiche-pr_ref_idaltri";

$SEARCHES[pratiche][0][search][fields][operatore][content]="num_equal||";
$SEARCHES[pratiche][0][search][fields][operatore][search_field]="pratiche-pr_operatore";

$SEARCHES[pratiche][0][search][fields][pr_uff][content]="text_like||";
$SEARCHES[pratiche][0][search][fields][pr_uff][search_field]="pratiche-pr_uff";
$SEARCHES[pratiche][0][search][fields][pr_dept][content]="text_like||";
$SEARCHES[pratiche][0][search][fields][pr_dept][search_field]="pratiche-pr_dept";

$SEARCHES[pratiche][0][search][fields][pr_comp_desc][content]="text_like||";
$SEARCHES[pratiche][0][search][fields][pr_comp_desc][search_field]="pratiche-pr_comp_desc";
$SEARCHES[pratiche][0][search][fields][pr_uff_giud][content]="text_like||";
$SEARCHES[pratiche][0][search][fields][pr_uff_giud][search_field]="pratiche-pr_uff_giud";
$SEARCHES[pratiche][0][search][fields][pr_luogo_uff_giud][content]="text_like||";
$SEARCHES[pratiche][0][search][fields][pr_luogo_uff_giud][search_field]="pr_luogo_uff_giud";

$SEARCHES[pratiche][0][search][fields][pr_giudice][content]="text_like||";
$SEARCHES[pratiche][0][search][fields][pr_giudice][search_field]="pratiche-pr_giudice";



// In page search
$SEARCHES[pratiche][1][form][form_method]="GET";
$SEARCHES[pratiche][1][form][box_desc]="";
$SEARCHES[pratiche][1][form][name]="listpratiche";
$SEARCHES[pratiche][1][form][onpost]="action::db||table::test||type::add||wf::id";
$SEARCHES[pratiche][1][form][ignore]="";
$SEARCHES[pratiche][1][form][Fields]["pr_codice"]["title"]=PRATICHE_CODE;
$SEARCHES[pratiche][1][form][Fields]["pr_codice"]["content"]="text||||wid::25";
$SEARCHES[pratiche][1][form][Fields]["formname"]["content"]="hidden||".$_GET["formname"]."||";
$SEARCHES[pratiche][1][form][Fields]["fieldname"]["content"]="hidden||".$_GET["fieldname"]."||";
$SEARCHES[pratiche][1][form][Fields]["send"]["content"]="submit||".FW_SEARCH."||";
$SEARCHES[pratiche][1][search][tables][pratiche]="2||||exp::1;;lock::0||1";
$SEARCHES[pratiche][1][search][tablesql][pratiche]="SELECT * FROM pratiche p WHERE %[PERM]%";
$SEARCHES[pratiche][1][search][fields][pr_codice][content]="text_like||";
$SEARCHES[pratiche][1][search][fields][pr_codice][search_field]="pratiche-pr_codice";



//GLOBAL SEARCH

$perm_parent = perm_sql_read("%[PERM]%","pratiche");
$perm_parent = str_replace ("permessi","p.permessi",$perm_parent);
$perm_parent = str_replace ("id","p.id",$perm_parent);

$SEARCHES[pratiche][2][form][box_title]=FW_SEARCH;
$SEARCHES[pratiche][2][form][form_method]="GET";
$SEARCHES[pratiche][2][form][box_desc]="";
$SEARCHES[pratiche][2][form][name]="gensearch";
$SEARCHES[pratiche][2][form][onpost]="action::db||table::test||type::add||wf::id";
$SEARCHES[pratiche][2][form][ignore]="";
$SEARCHES[pratiche][2][form][Fields]["codice"]["title"]=FW_CODE;
$SEARCHES[pratiche][2][form][Fields]["codice"]["content"]="text||||wid::30";
$SEARCHES[pratiche][2][form][Fields]["gtesto"]["title"]=FW_TEXT;
$SEARCHES[pratiche][2][form][Fields]["gtesto"]["content"]="text||||wid::30";
$SEARCHES[pratiche][2][form][Fields]["day_from"]["title"]=FW_FROM;
$SEARCHES[pratiche][2][form][Fields]["day_from"]["content"]="date||||";
$SEARCHES[pratiche][2][form][Fields]["day_to"]["title"]=FW_TO;
$SEARCHES[pratiche][2][form][Fields]["day_to"]["content"]="date||||";
$SEARCHES[pratiche][2][form][Fields]["send"]["content"]="submit||".FW_SEARCH."||";
/*$SEARCHES[pratiche][2][form][Fields]["pr_oggetto"]["title"]=PRATICHE_SUBJ;
$SEARCHES[pratiche][2][form][Fields]["pr_oggetto"]["content"]="text||||wid::30";
$SEARCHES[pratiche][2][form][Fields]["pr_valore"]["title"]=PRATICHE_VALUE;
$SEARCHES[pratiche][2][form][Fields]["pr_valore"]["content"]="text||||wid::30";
$SEARCHES[pratiche][2][form][Fields]["clie"]["title"]=PRATICHE_CUSTOMER;
$SEARCHES[pratiche][2][form][Fields]["clie"]["content"]="tselect||||";
$SEARCHES[pratiche][2][form][Fields]["clie"]["from_sql"]="SELECT * FROM contact WHERE codice LIKE '%[VAL]%%' order by nome asc||val::id;;text::%codice%;;perm::0;;mod::contact;;mul::1";
//$SEARCHES[pratiche][2][search][title]="Risultati ricerca";
//$SEARCHES[pratiche][2][search][result_txt]="Sono stati trovati %[FOUND]% risultati";*/

$SEARCHES[pratiche][2][search][tables][contact]="0||".CONTACT_FOUND."||exp::1;;lock::0||1";
$SEARCHES[pratiche][2][search][tables][pratiche]="0||".PRATICHE_FOUND."||exp::1;;lock::0||1";
$SEARCHES[pratiche][2][search][tables][calendar]="0||".CALENDAR_FOUND."||exp::1;;lock::0||1";
$SEARCHES[pratiche][2][search][tables][prestazioni]="0||".PRESTAZIONI_FOUND."||exp::1;;lock::0||0";
$SEARCHES[pratiche][2][search][tablesql][prestazioni]="SELECT m.* FROM prestazioni m, pratiche p WHERE $perm_parent AND p.id=m.ref_id ";
$SEARCHES[pratiche][2][search][tables][document]="0||".DOCUMENT_FOUND."||exp::1;;lock::0||0";
$SEARCHES[pratiche][2][search][tablesql][document]="SELECT m.* FROM document m, pratiche p WHERE $perm_parent AND p.id=m.ref_prat ";

$SEARCHES[pratiche][2][search][fields][codice][content]="text_like||";
$SEARCHES[pratiche][2][search][fields][codice][search_field]="pratiche-pr_codice||contact-codice";
$SEARCHES[pratiche][2][search][fields][gtesto][content]="text_like||";
$SEARCHES[pratiche][2][search][fields][gtesto][search_field]="pratiche-pr_oggetto||contact-nome||calendar-title||prestazioni-testo||document-m.descr";
$SEARCHES[pratiche][2][search][fields][day_from][content]="num_more||";
$SEARCHES[pratiche][2][search][fields][day_from][search_field]="prestazioni-data||document-data||calendar-day||pratiche-pr_data_inizio";
$SEARCHES[pratiche][2][search][fields][day_to][content]="num_less||";
$SEARCHES[pratiche][2][search][fields][day_to][search_field]="prestazioni-data||document-data||calendar-day||pratiche-pr_data_inizio";

/*$SEARCHES[pratiche][2][search][fields][pr_oggetto][content]="text_like||";
$SEARCHES[pratiche][2][search][fields][pr_oggetto][search_field]="pratiche-pr_codice";
$SEARCHES[pratiche][2][search][fields][pr_valore][content]="num_equal||";
$SEARCHES[pratiche][2][search][fields][pr_valore][search_field]="pratiche-pr_valore";
$SEARCHES[pratiche][2][search][fields][clie][content]="num_equal||";
$SEARCHES[pratiche][2][search][fields][clie][search_field]="pratiche-pr_ref_idcliente";
*/




?>
