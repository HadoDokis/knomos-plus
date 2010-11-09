<?

//Prestazioni Export
$SEARCHES[export][0][form][name]="print_pres";
$SEARCHES[export][0][form][form_method]="GET";
$SEARCHES[export][0][form][Fields]["day_from"]["title"]=FW_FROM;
$SEARCHES[export][0][form][Fields]["day_from"]["content"]="date||||";
$SEARCHES[export][0][form][Fields]["day_to"]["title"]=FW_TO;
$SEARCHES[export][0][form][Fields]["day_to"]["content"]="date||||";
$SEARCHES[export][0][form][Fields]["ref_id"]["title"]=PRESTAZIONI_REF_PRATICA;
$SEARCHES[export][0][form][Fields]["ref_id"]["content"]="tselect||||url::".$CONF[url_base].$CONF[dir_modules]."pratiche/pages/pratiche_search_div.php?form_id=print_pres&form_page=1&pr_codice=";
$SEARCHES[export][0][form][Fields]["ref_id"]["from_sql"]="SELECT * FROM pratiche p WHERE %[PERM]% AND pr_codice LIKE '%[VAL]%%' order by pr_codice asc||val::id;;text::pr_codice;;text2::pr_oggetto;;text2::pr_oggetto;;perm::1;;mod::pratiche;;mul::0";
$SEARCHES[export][0][form][Fields]["clie"]["title"]=PRESTAZIONI_CUSTOMER;
$SEARCHES[export][0][form][Fields]["clie"]["content"]="tselect||||url::".$CONF[url_base].$CONF[dir_modules]."contact/pages/contact_search_div.php?form_id=listpratiche&form_page=1&nome=";
$SEARCHES[export][0][form][Fields]["clie"]["from_sql"]="SELECT * FROM contact p WHERE %[PERM]% AND codice LIKE '%[VAL]%%' order by codice asc||val::id;;text::codice;;text2::nome;;;;text2::nome;;perm::1;;mod::contact;;mul::0";
$SEARCHES[export][0][form][Fields]["codice"]["title"]=EXPORT_REF_CODE;
$SEARCHES[export][0][form][Fields]["codice"]["content"]="tselect||||wid::6;;url::".$CONF[url_base].$CONF[dir_modules]."admin/pages/ta_search_div.php?simple_ins=1&form_id=listpratiche&form_page=1&codice=";
$SEARCHES[export][0][form][Fields]["codice"]["from_sql"]="SELECT * FROM INT_tariffe WHERE tatid LIKE '%[VAL]%%' order by tatid asc||val::tatid;;text::tatid;;text2::tat_desc;;text2::tat_desc;;perm::0;;mul::1;;tab::INT_tariffe";
$SEARCHES[export][0][form][Fields]["operatore"]["title"]=PRESTAZIONI_USER;
$SEARCHES[export][0][form][Fields]["operatore"]["content"]="tselect||||wid::6;;url::".$CONF[url_base].$CONF[dir_modules]."admin/pages/user_search_div.php?form_id=listpratiche&form_page=1&codice=";
$SEARCHES[export][0][form][Fields]["operatore"]["from_sql"]="SELECT * FROM ".$CONF[auth_db_table]." WHERE codice LIKE '%[VAL]%%' order by codice asc||val::id;;text::codice;;text2::nome;;;;text2::nome;;perm::0;;mul::0;;tab::users";
$SEARCHES[export][0][form][Fields]["pr_dept"]["title"]=PRATICHE_DEPT;
$SEARCHES[export][0][form][Fields]["pr_dept"]["content"]="select||||mul::0;;opt::".FW_ANY."=>";
$SEARCHES[export][0][form][Fields]["pr_dept"]["from_sql"]="SELECT * FROM ".$CONF[auth_groups_table]." WHERE tipo=1||val::id;;text::%name%";
$SEARCHES[export][0][form][Fields]["pr_uff"]["title"]=PRATICHE_UFF;
$SEARCHES[export][0][form][Fields]["pr_uff"]["content"]="select||||mul::0;;opt::".FW_ANY."=>";
$SEARCHES[export][0][form][Fields]["pr_uff"]["from_sql"]="SELECT * FROM ".$CONF[auth_groups_table]." WHERE tipo=2||val::id;;text::%name%";
$SEARCHES[export][0][form][Fields]["pr_ref_idbenefic"]["title"]=PRATICHE_BENEF;
$SEARCHES[export][0][form][Fields]["pr_ref_idbenefic"]["content"]="mselect||||url::".$CONF[url_base].$CONF[dir_modules]."contact/pages/contact_search_div2.php?form_id=listpratiche&form_page=1;;size::5;;word::".PRATICHE_BENEF;
$SEARCHES[export][0][form][Fields]["pr_ref_idbenefic"]["from_sql"]="SELECT * FROM contact  WHERE id ='%ID%' order by nome asc||val::id;;text::%codice%;;perm::1;;mod::contact";
$SEARCHES[export][0][form][Fields]["pr_ref_idbenefic"]["er_check"]="";
$SEARCHES[export][0][form][Fields]["pr_ref_idavvr"]["title"]=PRATICHE_AVVR;
$SEARCHES[export][0][form][Fields]["pr_ref_idavvr"]["content"]="mselect||||url::".$CONF[url_base].$CONF[dir_modules]."contact/pages/contact_search_div2.php?form_id=listpratiche&form_page=1;;size::5;;word::".PRATICHE_AVVR;
$SEARCHES[export][0][form][Fields]["pr_ref_idavvr"]["from_sql"]="SELECT * FROM contact p WHERE id ='%ID%' order by nome asc||val::id;;text::%codice%;;perm::1;;mod::contact";
$SEARCHES[export][0][form][Fields]["pr_ref_idavvr"]["er_check"]="";
$SEARCHES[export][0][form][Fields]["pr_ref_idaltri"]["title"]=PRATICHE_OTHERS;
$SEARCHES[export][0][form][Fields]["pr_ref_idaltri"]["content"]="mselect||||url::".$CONF[url_base].$CONF[dir_modules]."contact/pages/contact_search_div2.php?form_id=listpratiche&form_page=1;;size::5;;word::".PRATICHE_OTHERS;
$SEARCHES[export][0][form][Fields]["pr_ref_idaltri"]["from_sql"]="SELECT * FROM contact p WHERE id ='%ID%' order by nome asc||val::id;;text::%codice%;;perm::1;;mod::contact";
$SEARCHES[export][0][form][Fields]["pr_tipo"]["title"]=FW_TYPE;
$SEARCHES[export][0][form][Fields]["pr_tipo"]["content"]="select||||opt::".FW_ANY."=>";
$SEARCHES[export][0][form][Fields]["pr_tipo"]["from_sql"]="SELECT * FROM INT_pratiche_tipo||val::codice;;text::(%codice%) %ttp_desc%;;perm::0;;mod::pratiche";
$SEARCHES[export][0][form][Fields]["pr_referral"]["title"]=PRATICHE_REFERRAL;
$SEARCHES[export][0][form][Fields]["pr_referral"]["content"]="text||||wid::30";
$SEARCHES[export][0][form][Fields]["pr_uff_orig"]["title"]=PRATICHE_UORIG;
$SEARCHES[export][0][form][Fields]["pr_uff_orig"]["content"]="select||||mul::0;;opt::".FW_ANY."=>";
$SEARCHES[export][0][form][Fields]["pr_uff_orig"]["from_sql"]="SELECT * FROM ".$CONF[auth_groups_table]." WHERE tipo=2||val::id;;text::%name%";
$SEARCHES[export][0][form][Fields]["pr_prof_orig"]["title"]=PRATICHE_PORIG;
$SEARCHES[export][0][form][Fields]["pr_prof_orig"]["content"]="tselect||||wid::6;;url::".$CONF[url_base].$CONF[dir_modules]."admin/pages/user_search_div.php?form_id=listpratiche&form_page=1&codice=";
$SEARCHES[export][0][form][Fields]["pr_prof_orig"]["from_sql"]="SELECT * FROM ".$CONF[auth_db_table]." WHERE codice LIKE '%[VAL]%%' order by codice asc||val::id;;text::codice;;text2::nome;;;;text2::nome;;perm::0;;mul::0;;tab::users";
$SEARCHES[export][0][form][Fields]["testo"]["title"]=FW_DESC;
$SEARCHES[export][0][form][Fields]["testo"]["content"]="text||||wid::30";
$SEARCHES[export][0][form][Fields]["note"]["title"]=FW_NOTE;
$SEARCHES[export][0][form][Fields]["note"]["content"]="text||||wid::30";
$SEARCHES[export][0][form][Fields]["print_note"]["title"]="";
$SEARCHES[export][0][form][Fields]["print_note"]["content"]="checkbox||||opt:: ".EXPORT_PRINT_NOTE."=>1,, ".EXPORT_PRINT_QUICKCONS."=>2,, ".EXPORT_PRINT_PARC."=>3;;mul::1;;size::1";
$SEARCHES[export][0][form][Fields]["colonne"]["title"]="<b>".EXPORT_PRINT_COLUMN."</b>";
$SEARCHES[export][0][form][Fields]["colonne"]["content"]="checkbox||3,,4,,5,,6,,7,,8||opt:: ".PRESTAZIONI_ACCONT."=>1,, ".PRESTAZIONI_ANTIC."=>2,, ".PRESTAZIONI_COST_IMP."=>3,, ".PRESTAZIONI_COST_NIMP."=>4,, ".PRESTAZIONI_COST_RIGHTS."=>5,, ".PRESTAZIONI_COST_ONOR."=>6,, ".PRESTAZIONI_COST_ONORAR."=>7,, ".PRESTAZIONI_COST_ONUT."=>8;;mul::1;;size::3";
$SEARCHES[export][0][form][Fields]["dest"]["title"]=EXPORT_DEST;
$SEARCHES[export][0][form][Fields]["dest"]["content"]="tselect||||url::".$CONF[url_base].$CONF[dir_modules]."contact/pages/contact_search_div.php?form_id=listpratiche&form_page=1&nome=";
$SEARCHES[export][0][form][Fields]["dest"]["from_sql"]="SELECT * FROM contact p WHERE %[PERM]% AND codice LIKE '%[VAL]%%' order by codice asc||val::id;;text::codice;;text2::nome;;perm::1;;mod::contact;;mul::0";

$SEARCHES[export][0][form][Fields]["save_start"]["title"]=EXPORT_SAVEDOC;
$SEARCHES[export][0][form][Fields]["save_start"]["content"]="group||||set_vis::1;;start_vis::1";
$SEARCHES[export][0][form][Fields]["help"]["title"]=EXPORT_HINT;
$SEARCHES[export][0][form][Fields]["help"]["content"]="htmltext||".EXPORT_HINT_TXT."||";
$SEARCHES[export][0][form][Fields]["save_doc"]["content"]="checkbox||1||opt:: ".EXPORT_SAVE_DOC."=>1;;mul::0;;size::1";
$SEARCHES[export][0][form][Fields]["dest_prat"]["title"]=EXPORT_DEST_PRATICA;
$SEARCHES[export][0][form][Fields]["dest_prat"]["content"]="tselect||||url::".$CONF[url_base].$CONF[dir_modules]."pratiche/pages/pratiche_search_div.php?form_id=print_pres&form_page=1&pr_codice=";
$SEARCHES[export][0][form][Fields]["dest_prat"]["from_sql"]="SELECT * FROM pratiche p WHERE %[PERM]% AND pr_codice LIKE '%[VAL]%%' order by pr_codice asc||val::id;;text::pr_codice;;text2::pr_oggetto;;perm::1;;mod::pratiche;;mul::0";
$SEARCHES[export][0][form][Fields]["save_end"]["content"]="group||||";
$SEARCHES[export][0][form][Fields]["send"]["content"]="submit||".EXPORT_GEN."||js::onSubmit=\"return target_blank(this);\"";
//$SEARCHES[export][0][search][title]="Risultati ricerca";
//$SEARCHES[export][0][search][result_txt]="Sono stati trovati %[FOUND]% risultati";
$SEARCHES[export][0][search][tables][export]="0||".PRESTAZIONI_FOUND."||exp::1;;lock::0||0";
$SEARCHES[export][0][search][fields][ref_id][content]="num_equal||";
$SEARCHES[export][0][search][fields][ref_id][search_field]="prestazioni-ref_id";

$SEARCHES[export][3][form][name]="print_pres2";
$SEARCHES[export][3][form][form_method]="GET";
$SEARCHES[export][3][form][Fields]["luogo_data"]["title"]=EXPORT_LUOGO_DATA;

$mese=date("m");
if ($mese=="01"){$m="gennaio";} if ($mese=="02"){$m="febbraio";} if ($mese=="03"){$m="marzo";} if ($mese=="04"){$m="aprile";} if ($mese=="05"){$m="maggio";} if ($mese=="06"){$m="giugno";} if ($mese=="07"){$m="luglio";} if ($mese=="08"){$m="agosto";} if ($mese=="09"){$m="settembre";} if ($mese=="10"){$m="ottobre";} if ($mese=="11"){$m="novembre";} if ($mese=="12"){$m="dicembre";} 
//$SEARCHES[export][3][form][Fields]["luogo_data"]["content"]="text||Empoli, ".date("d / m / Y")."||wid::40";
if ($CONF[fatt_avvocato]=="")
{$SEARCHES[export][3][form][Fields]["luogo_data"]["content"]="text||".$_SESSION[user][citta].", ".date("d ").$m.date(" Y")."||wid::40";}
else{$SEARCHES[export][3][form][Fields]["luogo_data"]["content"]="text||$CONF[fatt_citta_studio], ".date("d ").$m.date(" Y")."||wid::40";}
$SEARCHES[export][3][form][Fields]["dicit1"]["title"]=EXPORT_DICIT1;
$SEARCHES[export][3][form][Fields]["dicit1"]["content"]="text||Nota spese od onorari dovuti da||wid::40";
$SEARCHES[export][3][form][Fields]["dicit2"]["title"]=EXPORT_DICIT2;
$SEARCHES[export][3][form][Fields]["dicit2"]["content"]="text||Oggetto: nome pratica||wid::40";
$SEARCHES[export][3][form][Fields]["oggetto"]["title"]=FW_SUBJ;
$SEARCHES[export][3][form][Fields]["oggetto"]["content"]="text||oggetto pratica||wid::40";

//$SEARCHES[export][3][form][Fields]["oggetto"]["content"]="select||P||opt::Prova=>P,,Nota=>N,,Fatture=>F";

$SEARCHES[export][3][form][Fields]["spec_acc"]["title"]=EXPORT_SPEC_ACC;
$SEARCHES[export][3][form][Fields]["spec_acc"]["content"]="text||A dedurre fondo spese fatt.||wid::40";
//$SEARCHES[export][3][form][Fields]["rimb_for"]["title"]=EXPORT_RIMB_FOR;
//$SEARCHES[export][3][form][Fields]["rimb_for"]["content"]="text||S||wid::2";
$SEARCHES[export][3][form][Fields]["rimb_for"]["title"]=EXPORT_RIMB_FOR;
$SEARCHES[export][3][form][Fields]["rimb_for"]["content"]="text||12,5||wid::5";
$SEARCHES[export][3][form][Fields]["cpa"]["title"]=EXPORT_CPA;
$SEARCHES[export][3][form][Fields]["cpa"]["content"]="text||S||wid::2";
$SEARCHES[export][3][form][Fields]["iva"]["title"]=EXPORT_IVA;
$SEARCHES[export][3][form][Fields]["iva"]["content"]="text||20||wid::4";
$SEARCHES[export][3][form][Fields]["rit_acc"]["title"]=EXPORT_RIT_ACC;
$SEARCHES[export][3][form][Fields]["rit_acc"]["content"]="text||20||wid::4";
$SEARCHES[export][3][form][Fields]["prest_stampa"]["title"]=EXPORT_PRINT_PRES_TYPE;
$SEARCHES[export][3][form][Fields]["prest_stampa"]["content"]="select||T||opt::Tutte=>T,,Novità=>N,,Fattura da nota=>F,,Ristampa nota=>R,,Ristampa fattura=>S";
$SEARCHES[export][3][form][Fields]["rif_print"]["title"]=EXPORT_PRINT_FATT_REF;
$SEARCHES[export][3][form][Fields]["rif_print"]["content"]="text||||wid::10";
$SEARCHES[export][3][form][Fields]["tipo_stampa"]["title"]=EXPORT_PRINT_TYPE;
$SEARCHES[export][3][form][Fields]["tipo_stampa"]["content"]="select||P||opt::Prova=>P,,Nota=>N,,Fatture=>F";
$SEARCHES[export][3][form][Fields]["rif_print2"]["title"]=EXPORT_PRINT_FATT_REF;
$SEARCHES[export][3][form][Fields]["rif_print2"]["content"]="text||||wid::10";
$SEARCHES[export][3][form][Fields]["prevalenza"]["title"]=EXPORT_PRINT_PRES_PREVAL;
$SEARCHES[export][3][form][Fields]["prevalenza"]["content"]="select||1||opt::".PRESTAZIONI_COST_ONOR."=>1,,".PRESTAZIONI_COST_ONORAR."=>2,,".PRESTAZIONI_COST_ONUT."=>3";
$SEARCHES[export][3][form][Fields]["ricalcolo"]["title"]=EXPORT_PRINT_RECALC;
$SEARCHES[export][3][form][Fields]["ricalcolo"]["content"]="text||||wid::5";
$SEARCHES[export][3][form][Fields]["ricalc_save"]["title"]="";
$SEARCHES[export][3][form][Fields]["ricalc_save"]["content"]="checkbox||1||opt:: ".EXPORT_PRINT_RECALC_SAVE."=>0;;mul::1;;size::1";
$SEARCHES[export][3][form][Fields]["currency"]["title"]=EXPORT_CURRENCY;
$SEARCHES[export][3][form][Fields]["currency"]["content"]="select||0||opt::EUR=>0";
$SEARCHES[export][3][form][Fields]["currency"]["from_sql"]="SELECT * FROM INT_valute order by va_cod asc||val::id;;text::%va_cod%;;perm::0;;mul::0";
$SEARCHES[export][3][form][Fields]["send"]["content"]="submit||".EXPORT_GEN."||js::onSubmit=\"return target_blank(this);\"";
//$SEARCHES[export][3][search][title]="Risultati ricerca";
//$SEARCHES[export][3][search][result_txt]="Sono stati trovati %[FOUND]% risultati";
$SEARCHES[export][3][search][tables][export]="0||".PRESTAZIONI_FOUND."||exp::1;;lock::0||0";





//Prestazioni Export
$SEARCHES[export][10][form][name]="print_pres3";
$SEARCHES[export][10][form][form_method]="GET";
$SEARCHES[export][10][form][Fields]["column"]["title"]="";
$SEARCHES[export][10][form][Fields]["column"]["content"]="checkbox||||opt:: ".PRESTAZIONI_ACCONT."=>1,, ".PRESTAZIONI_ANTIC."=>2,, ".PRESTAZIONI_COST_IMP."=>3,, ".PRESTAZIONI_COST_NIMP."=>4,, ".PRESTAZIONI_COST_RIGHTS."=>5,, ".PRESTAZIONI_COST_ONOR."=>6,, ".PRESTAZIONI_COST_ONORAR."=>7,, ".PRESTAZIONI_COST_ONUT."=>8;;mul::1;;size::1";
$SEARCHES[export][10][form][Fields]["secondpage"]["content"]="hidden||2||";
$SEARCHES[export][10][form][Fields]["send"]["content"]="submit||".EXPORT_GEN."||js::onSubmit=\"return target_blank(this);\"";






//Contact Export

$SEARCHES[export][1][form][form_method]="GET";
$SEARCHES[export][1][form][box_desc]="";
$SEARCHES[export][1][form][name]="listcont";
$SEARCHES[export][1][form][onpost]="action::db||table::test||type::add||wf::id";
$SEARCHES[export][1][form][ignore]="";
$SEARCHES[export][1][form][Fields]["codice_from"]["title"]=EXPORT_CODE_FROM;
$SEARCHES[export][1][form][Fields]["codice_from"]["content"]="text||||";
$SEARCHES[export][1][form][Fields]["codice_to"]["title"]=EXPORT_CODE_TO;
$SEARCHES[export][1][form][Fields]["codice_to"]["content"]="text||||";
$SEARCHES[export][1][form]["Fields"]["tipo"]["title"]=CONTACT_TYPER;
$SEARCHES[export][1][form]["Fields"]["tipo"]["content"]="select||||opt::".FW_ANY."=>0,,AVVR=>1,,CLIE=>2,,COLL=>3,,CONS=>4,,CORR=>5,,FORN=>6,,AVV=>7";
$SEARCHES[export][1][form][Fields]["nome"]["title"]=FW_NAME;
$SEARCHES[export][1][form][Fields]["nome"]["content"]="text||||";
$SEARCHES[export][1][form][Fields]["citta"]["title"]=CONTACT_CITY;
$SEARCHES[export][1][form][Fields]["citta"]["content"]="text||||";
$SEARCHES[export][1][form][Fields]["cap"]["title"]=CONTACT_CAP;
$SEARCHES[export][1][form][Fields]["cap"]["content"]="text||||";
$SEARCHES[export][1][form][Fields]["note"]["title"]=FW_NOTE;
$SEARCHES[export][1][form][Fields]["note"]["content"]="text||||";
$SEARCHES[export][1][form][Fields]["print_note"]["title"]="";
$SEARCHES[export][1][form][Fields]["print_note"]["content"]="checkbox||||opt:: ".EXPORT_PRINT_NOTE."=>1,, ".EXPORT_PRINT_QUICKCONS."=>2;;mul::1;;size::1";
$SEARCHES[export][1][form][Fields]["dest"]["title"]=EXPORT_DEST;
$SEARCHES[export][1][form][Fields]["dest"]["content"]="tselect||||url::".$CONF[url_base].$CONF[dir_modules]."contact/pages/contact_search_div.php?form_id=listpratiche&form_page=1&nome=";
$SEARCHES[export][1][form][Fields]["dest"]["from_sql"]="SELECT * FROM contact p WHERE %[PERM]% AND codice LIKE '%[VAL]%%' order by codice asc||val::id;;text::codice;;text2::nome;;perm::1;;mod::contact;;mul::0";

$SEARCHES[export][1][form][Fields]["send"]["content"]="submit||".EXPORT_GEN."||";
//$SEARCHES[export][0][search][title]="Risultati ricerca";
//$SEARCHES[export][0][search][result_txt]="Sono stati trovati %[FOUND]% risultati";
$SEARCHES[export][1][search][tables][contact]="2||".CONTACT_FOUND."||exp::1;;lock::0||0";
$SEARCHES[export][1][search][fields][codice][content]="text_like||";
$SEARCHES[export][1][search][fields][codice][search_field]="contact-codice";
$SEARCHES[export][1][search][fields][nome][content]="text_like||";
$SEARCHES[export][1][search][fields][nome][search_field]="contact-nome";
$SEARCHES[export][1][search][fields][citta][content]="text_like||";
$SEARCHES[export][1][search][fields][citta][search_field]="contact-citta";
$SEARCHES[export][1][search][fields][cap][content]="text_like||";
$SEARCHES[export][1][search][fields][cap][search_field]="contact-cap";


//Calendar Export
$SEARCHES[export][2][form][form_method]="GET";
$SEARCHES[export][2][form][box_desc]="";
$SEARCHES[export][2][form][name]="listcont";
$SEARCHES[export][2][form][onpost]="action::db||table::test||type::add||wf::id";
$SEARCHES[export][2][form][ignore]="";
$SEARCHES[export][2][form][Fields]["day_from"]["title"]=FW_FROM;
$SEARCHES[export][2][form][Fields]["day_from"]["content"]="date||||";
$SEARCHES[export][2][form][Fields]["day_to"]["title"]=FW_TO;
$SEARCHES[export][2][form][Fields]["day_to"]["content"]="date||||";
$SEARCHES[export][2][form]["Fields"]["ref_prat"]["title"]=PRESTAZIONI_REF_PRATICA;
$SEARCHES[export][2][form]["Fields"]["ref_prat"]["content"]="tselect||||url::".$CONF[url_base].$CONF[dir_modules]."pratiche/pages/pratiche_search_div.php?form_id=print_pres&form_page=1&pr_codice=";
$SEARCHES[export][2][form]["Fields"]["ref_prat"]["from_sql"]="SELECT * FROM pratiche p WHERE %[PERM]% AND pr_codice LIKE '%[VAL]%%' order by pr_codice asc||val::id;;text::pr_codice;;text2::pr_oggetto;;perm::1;;mod::pratiche;;mul::1";
$SEARCHES[export][2][form][Fields]["codice"]["title"]=EXPORT_REF_CODE;
$SEARCHES[export][2][form][Fields]["codice"]["content"]="tselect||||url::".$CONF[url_base].$CONF[dir_modules]."admin/pages/ta_search_div.php?simple_ins=1&form_id=listpratiche&form_page=1&codice=";
$SEARCHES[export][2][form][Fields]["codice"]["from_sql"]="SELECT * FROM INT_tariffe WHERE tatid LIKE '%[VAL]%%' order by tatid asc||val::id;;text::tatid;;text2::tat_desc;;perm::0;;mod::admin;;mul::0;;tab::INT_tariffe;;ids::tatid";
$SEARCHES[export][2][form][Fields]["operatore"]["title"]=PRESTAZIONI_USER;
$SEARCHES[export][2][form][Fields]["operatore"]["content"]="tselect||".$_SESSION[fw_userid]."||wid::6;;url::".$CONF[url_base].$CONF[dir_modules]."admin/pages/user_search_div.php?form_id=listpratiche&form_page=1&codice=";
$SEARCHES[export][2][form][Fields]["operatore"]["from_sql"]="SELECT * FROM ".$CONF[auth_db_table]." WHERE codice LIKE '%[VAL]%%' order by codice asc||val::id;;text::codice;;text2::nome;;perm::0;;mul::0;;tab::users";
$SEARCHES[export][2][form]["Fields"]["done"]["title"]=CALENDAR_FATTO;
$SEARCHES[export][2][form]["Fields"]["done"]["content"]="select||||opt::".FW_ANY."=>,, Da fare =>0,,Fatto =>1";
$SEARCHES[export][2][form]["Fields"]["done"]["from_sql"]="SELECT * FROM ".$CONF[auth_db_table]." WHERE codice LIKE '%[VAL]%%' order by codice asc||val::id;;text::codice;;perm::0;;mul::0;;tab::users";
$SEARCHES[export][2][form]["Fields"]["type"]["title"]=FW_TYPE;
$SEARCHES[export][2][form]["Fields"]["type"]["content"]="select||||opt::".FW_ANY."=>,,".CALENDAR_APP."=>0,,".CALENDAR_SCAD."=>1";
$SEARCHES[export][2][form]["Fields"]["type_app"]["title"]=CALENDAR_GENERE;
$SEARCHES[export][2][form]["Fields"]["type_app"]["content"]="select||||opt::".FW_ANY."=>";
$SEARCHES[export][2][form]["Fields"]["type_app"]["from_sql"]="SELECT * FROM INT_calendar_tipo||val::ttsid;;text::(%ttsid%) %tts_desc%;;perm::0";
$SEARCHES[export][2][form]["Fields"]["group"]["title"]=EXPORT_GROUP;
$SEARCHES[export][2][form]["Fields"]["group"]["content"]="select||||opt::".FW_ANY."=>";
$SEARCHES[export][2][form]["Fields"]["group"]["from_sql"]="SELECT * FROM gruppi||val::id;;text::%name%;;perm::0";

$SEARCHES[export][2][form][Fields]["title"]["title"]=FW_DESC;
$SEARCHES[export][2][form][Fields]["title"]["content"]="text||||";
$SEARCHES[export][2][form][Fields]["note"]["title"]=FW_NOTE;
$SEARCHES[export][2][form][Fields]["note"]["content"]="text||||";
$SEARCHES[export][2][form][Fields]["print_note"]["title"]="";
$SEARCHES[export][2][form][Fields]["print_note"]["content"]="checkbox||||opt:: ".EXPORT_PRINT_NOTE."=>1,, ".EXPORT_PRINT_QUICKCONS."=>2,, ".EXPORT_PRINT_UDIEN."=>4;;mul::1;;size::1";
$SEARCHES[export][2][form][Fields]["righe_ann"]["title"]=EXPORT_PRINT_RIG_ANN;
$SEARCHES[export][2][form][Fields]["righe_ann"]["content"]="text||0||wid::2";
$SEARCHES[export][2][form]["Fields"]["send"]["content"]="submit||".EXPORT_GEN."||";
$SEARCHES[export][2][search][tables][calendar]="1||".CALENDAR_FOUND."||exp::1;;lock::1||1";
$SEARCHES[export][2][search][fields][title][content]="text_like||";
$SEARCHES[export][2][search][fields][title][search_field]="calendar-title";
$SEARCHES[export][2][search][fields][ref_prat][content]="num_equal||";
$SEARCHES[export][2][search][fields][ref_prat][search_field]="calendar-ref_prat";
$SEARCHES[export][2][search][fields][codice][content]="num_equal||";
$SEARCHES[export][2][search][fields][codice][search_field]="calendar-codice";
$SEARCHES[export][2][search][fields][operatore][content]="user_perm||";
$SEARCHES[export][2][search][fields][operatore][search_field]="calendar-permessi";
$SEARCHES[export][2][search][fields][day_from][content]="num_more||";
$SEARCHES[export][2][search][fields][day_from][search_field]="calendar-day";
$SEARCHES[export][2][search][fields][day_to][content]="num_less||";
$SEARCHES[export][2][search][fields][day_to][search_field]="calendar-day";









//Codici Export

$SEARCHES[export][4][form][form_method]="GET";
$SEARCHES[export][4][form][box_desc]="";
$SEARCHES[export][4][form][name]="listcont";
$SEARCHES[export][4][form][onpost]="action::db||table::test||type::add||wf::id";
$SEARCHES[export][4][form][ignore]="";
$SEARCHES[export][4][form][Fields]["codice_from"]["title"]=EXPORT_CODE_FROM;
$SEARCHES[export][4][form][Fields]["codice_from"]["content"]="text||||";
$SEARCHES[export][4][form][Fields]["codice_to"]["title"]=EXPORT_CODE_TO;
$SEARCHES[export][4][form][Fields]["codice_to"]["content"]="text||||";
$SEARCHES[export][4][form][Fields]["descr"]["title"]=FW_DESC;
$SEARCHES[export][4][form][Fields]["descr"]["content"]="text||||";
$SEARCHES[export][4][form][Fields]["print_note"]["title"]="";
$SEARCHES[export][4][form][Fields]["print_note"]["content"]="checkbox||||opt:: ".EXPORT_PRINT_QUICKCONS."=>2;;mul::1;;size::1";
$SEARCHES[export][4][form][Fields]["send"]["content"]="submit||".EXPORT_GEN."||";
$SEARCHES[export][4][search][tables][contact]="2||".CONTACT_FOUND."||exp::1;;lock::0||0";


//Tariffe Export

$SEARCHES[export][5][form][form_method]="GET";
$SEARCHES[export][5][form][box_desc]="";
$SEARCHES[export][5][form][name]="listcont";
$SEARCHES[export][5][form][onpost]="action::db||table::test||type::add||wf::id";
$SEARCHES[export][5][form][ignore]="";
$SEARCHES[export][5][form][Fields]["codice_from"]["title"]=EXPORT_CODE_FROM;
$SEARCHES[export][5][form][Fields]["codice_from"]["content"]="text||||";
$SEARCHES[export][5][form][Fields]["codice_to"]["title"]=EXPORT_CODE_TO;
$SEARCHES[export][5][form][Fields]["codice_to"]["content"]="text||||";
$SEARCHES[export][5][form][Fields]["descr"]["title"]=FW_DESC;
$SEARCHES[export][5][form][Fields]["descr"]["content"]="text||||";
$SEARCHES[export][5][form][Fields]["print_note"]["title"]="";
$SEARCHES[export][5][form][Fields]["print_note"]["content"]="checkbox||||opt:: ".EXPORT_PRINT_QUICKCONS."=>2;;mul::1;;size::1";
$SEARCHES[export][5][form][Fields]["send"]["content"]="submit||".EXPORT_GEN."||";
$SEARCHES[export][5][search][tables][contact]="2||".CONTACT_FOUND."||exp::1;;lock::0||0";


//Operator Export

$SEARCHES[export][6][form][form_method]="GET";
$SEARCHES[export][6][form][box_desc]="";
$SEARCHES[export][6][form][name]="listcont";
$SEARCHES[export][6][form][onpost]="action::db||table::test||type::add||wf::id";
$SEARCHES[export][6][form][ignore]="";
$SEARCHES[export][6][form][Fields]["codice_from"]["title"]=EXPORT_CODE_FROM;
$SEARCHES[export][6][form][Fields]["codice_from"]["content"]="text||||";
$SEARCHES[export][6][form][Fields]["codice_to"]["title"]=EXPORT_CODE_TO;
$SEARCHES[export][6][form][Fields]["codice_to"]["content"]="text||||";
$SEARCHES[export][6][form][Fields]["descr"]["title"]=FW_DESC;
$SEARCHES[export][6][form][Fields]["descr"]["content"]="text||||";
$SEARCHES[export][6][form][Fields]["print_note"]["title"]="";
$SEARCHES[export][6][form][Fields]["print_note"]["content"]="checkbox||||opt:: ".EXPORT_PRINT_QUICKCONS."=>2;;mul::1;;size::1";
$SEARCHES[export][6][form][Fields]["send"]["content"]="submit||".EXPORT_GEN."||";
$SEARCHES[export][6][search][tables][contact]="2||".CONTACT_FOUND."||exp::1;;lock::0||0";


//Document Export
$SEARCHES[export][7][form][form_method]="GET";
$SEARCHES[export][7][form][box_desc]="";
$SEARCHES[export][7][form][name]="listcont";
$SEARCHES[export][7][form][onpost]="action::db||table::test||type::add||wf::id";
$SEARCHES[export][7][form][ignore]="";
$SEARCHES[export][7][form][Fields]["day_from"]["title"]=FW_FROM;
$SEARCHES[export][7][form][Fields]["day_from"]["content"]="date||||";

$SEARCHES[export][7][form][Fields]["day_to"]["title"]=FW_TO;
$SEARCHES[export][7][form][Fields]["day_to"]["content"]="date||||";
$SEARCHES[export][7][form]["Fields"]["ref_prat"]["title"]=PRESTAZIONI_REF_PRATICA;
$SEARCHES[export][7][form]["Fields"]["ref_prat"]["content"]="tselect||||url::".$CONF[url_base].$CONF[dir_modules]."pratiche/pages/pratiche_search_div.php?form_id=print_pres&form_page=1&pr_codice=";
$SEARCHES[export][7][form]["Fields"]["ref_prat"]["from_sql"]="SELECT * FROM pratiche p WHERE %[PERM]% AND pr_codice LIKE '%[VAL]%%' order by pr_codice asc||val::id;;text::pr_codice;;text2::pr_oggetto;;perm::1;;mod::pratiche;;mul::1";
$SEARCHES[export][7][form][Fields]["operatore"]["title"]=PRESTAZIONI_USER;
$SEARCHES[export][7][form][Fields]["operatore"]["content"]="tselect||".$_SESSION[fw_userid]."||wid::6;;url::".$CONF[url_base].$CONF[dir_modules]."admin/pages/user_search_div.php?form_id=listpratiche&form_page=1&codice=";
$SEARCHES[export][7][form][Fields]["operatore"]["from_sql"]="SELECT * FROM ".$CONF[auth_db_table]." WHERE codice LIKE '%[VAL]%%' order by codice asc||val::id;;text::codice;;text2::nome;;perm::0;;mul::0;;tab::users";
$SEARCHES[export][7][form][Fields]["title"]["title"]=FW_DESC;
$SEARCHES[export][7][form][Fields]["title"]["content"]="text||||";
$SEARCHES[export][7][form][Fields]["note"]["title"]=FW_NOTE;
$SEARCHES[export][7][form][Fields]["note"]["content"]="text||||";
$SEARCHES[export][7][form][Fields]["print_note"]["title"]="";
$SEARCHES[export][7][form][Fields]["print_note"]["content"]="checkbox||||opt:: ".EXPORT_PRINT_NOTE."=>1,, ".EXPORT_PRINT_QUICKCONS."=>2;;mul::1;;size::1";
$SEARCHES[export][7][form][Fields]["dest"]["title"]=EXPORT_DEST;
$SEARCHES[export][7][form][Fields]["dest"]["content"]="tselect||||url::".$CONF[url_base].$CONF[dir_modules]."contact/pages/contact_search_div.php?form_id=listpratiche&form_page=1&nome=";
$SEARCHES[export][7][form][Fields]["dest"]["from_sql"]="SELECT * FROM contact p WHERE %[PERM]% AND codice LIKE '%[VAL]%%' order by codice asc||val::id;;text::codice;;text2::nome;;perm::1;;mod::contact;;mul::0";
$SEARCHES[export][7][form]["Fields"]["send"]["content"]="submit||".EXPORT_GEN."||";
$SEARCHES[export][7][search][tables][calendar]="1||".CALENDAR_FOUND."||exp::1;;lock::1||1";


//Pratiche Export
$SEARCHES[export][8][form][form_method]="GET";
$SEARCHES[export][8][form][box_desc]="";
$SEARCHES[export][8][form][name]="listcont";
$SEARCHES[export][8][form][onpost]="action::db||table::test||type::add||wf::id";
$SEARCHES[export][8][form][ignore]="";
$SEARCHES[export][8][form][Fields]["codice_from"]["title"]=EXPORT_CODE_FROM;
$SEARCHES[export][8][form][Fields]["codice_from"]["content"]="text||||";
$SEARCHES[export][8][form][Fields]["codice_to"]["title"]=EXPORT_CODE_TO;
$SEARCHES[export][8][form][Fields]["codice_to"]["content"]="text||||";
$SEARCHES[export][8][form][Fields]["title"]["title"]=PRATICHE_SUBJ;
$SEARCHES[export][8][form][Fields]["title"]["content"]="text||||";
$SEARCHES[export][8][form][Fields]["operatore"]["title"]=PRATICHE_RESP;
$SEARCHES[export][8][form][Fields]["operatore"]["content"]="tselect||".$_SESSION[fw_userid]."||url::".$CONF[url_base].$CONF[dir_modules]."admin/pages/user_search_div.php?form_id=listpratiche&form_page=1&codice=";
$SEARCHES[export][8][form][Fields]["operatore"]["from_sql"]="SELECT * FROM ".$CONF[auth_db_table]." WHERE codice LIKE '%[VAL]%%' order by codice asc||val::id;;text::codice;;text2::nome;;perm::0;;mul::0;;tab::users";
//$SEARCHES[export][8][form][Fields]["clie"]["title"]=PRESTAZIONI_CUSTOMER;
//$SEARCHES[export][8][form][Fields]["clie"]["content"]="tselect||||url::".$CONF[url_base].$CONF[dir_modules]."contact/pages/contact_search_div.php?form_id=listpratiche&form_page=1&nome=";
//$SEARCHES[export][8][form][Fields]["clie"]["from_sql"]="SELECT * FROM contact p WHERE %[PERM]% AND codice LIKE '%[VAL]%%' order by codice asc||val::id;;text::codice;;text2::nome;;;;text2::nome;;perm::1;;mod::contact;;mul::0";
//$SEARCHES[export][8][form]["Fields"]["pr_dept"]["title"]=PRATICHE_DEPT;
//$SEARCHES[export][8][form]["Fields"]["pr_dept"]["content"]="select||||mul::0;;opt::".FW_ANY."=>";
//$SEARCHES[export][8][form]["Fields"]["pr_dept"]["from_sql"]="SELECT * FROM ".$CONF[auth_groups_table]." WHERE tipo=1||val::id;;text::%name%";
//$SEARCHES[export][8][form]["Fields"]["pr_uff"]["title"]=PRATICHE_UFF;
//$SEARCHES[export][8][form]["Fields"]["pr_uff"]["content"]="select||||mul::0;;opt::".FW_ANY."=>";
//$SEARCHES[export][8][form]["Fields"]["pr_uff"]["from_sql"]="SELECT * FROM ".$CONF[auth_groups_table]." WHERE tipo=2||val::id;;text::%name%";
//$SEARCHES[export][8][form]["Fields"]["pr_ref_idbenefic"]["title"]=PRATICHE_BENEF;
//$SEARCHES[export][8][form]["Fields"]["pr_ref_idbenefic"]["content"]="mselect||||url::".$CONF[url_base].$CONF[dir_modules]."contact/pages/contact_search_div2.php?form_id=listpratiche&form_page=1;;size::5;;word::".PRATICHE_BENEF;
//$SEARCHES[export][8][form]["Fields"]["pr_ref_idbenefic"]["from_sql"]="SELECT * FROM contact  WHERE id ='%ID%' order by nome asc||val::id;;text::%codice%;;perm::1;;mod::contact";
//$SEARCHES[export][8][form]["Fields"]["pr_ref_idbenefic"]["er_check"]="";
//$SEARCHES[export][8][form]["Fields"]["pr_ref_idavvr"]["title"]=PRATICHE_AVVR;
//$SEARCHES[export][8][form]["Fields"]["pr_ref_idavvr"]["content"]="mselect||||url::".$CONF[url_base].$CONF[dir_modules]."contact/pages/contact_search_div2.php?form_id=listpratiche&form_page=1;;size::5;;word::".PRATICHE_AVVR;
//$SEARCHES[export][8][form]["Fields"]["pr_ref_idavvr"]["from_sql"]="SELECT * FROM contact p WHERE id ='%ID%' order by nome asc||val::id;;text::%codice%;;perm::1;;mod::contact";
//$SEARCHES[export][8][form]["Fields"]["pr_ref_idavvr"]["er_check"]="";
//$SEARCHES[export][8][form]["Fields"]["pr_ref_idaltri"]["title"]=PRATICHE_OTHERS;
//$SEARCHES[export][8][form]["Fields"]["pr_ref_idaltri"]["content"]="mselect||||url::".$CONF[url_base].$CONF[dir_modules]."contact/pages/contact_search_div2.php?form_id=listpratiche&form_page=1;;size::5;;word::".PRATICHE_OTHERS;
//$SEARCHES[export][8][form]["Fields"]["pr_ref_idaltri"]["from_sql"]="SELECT * FROM contact p WHERE id ='%ID%' order by nome asc||val::id;;text::%codice%;;perm::1;;mod::contact";
//$SEARCHES[export][8][form][Fields]["note"]["title"]=FW_NOTE;
//$SEARCHES[export][8][form][Fields]["note"]["content"]="text||||";
$SEARCHES[export][8][form][Fields]["pr_tipo"]["title"]=FW_TYPE;
$SEARCHES[export][8][form][Fields]["pr_tipo"]["content"]="select||||opt::".FW_ANY."=>";
$SEARCHES[export][8][form][Fields]["pr_tipo"]["from_sql"]="SELECT * FROM INT_pratiche_tipo||val::codice;;text::(%codice%) %ttp_desc%;;perm::0;;mod::pratiche";
//$SEARCHES[export][8][form]["Fields"]["pr_referral"]["title"]=PRATICHE_REFERRAL;
//$SEARCHES[export][8][form]["Fields"]["pr_referral"]["content"]="text||||wid::30";
//$SEARCHES[export][8][form]["Fields"]["pr_uff_orig"]["title"]=PRATICHE_UORIG;
//$SEARCHES[export][8][form]["Fields"]["pr_uff_orig"]["content"]="select||||mul::0;;opt::".FW_ANY."=>";
//$SEARCHES[export][8][form]["Fields"]["pr_uff_orig"]["from_sql"]="SELECT * FROM ".$CONF[auth_groups_table]." WHERE tipo=2||val::id;;text::%name%";
//$SEARCHES[export][8][form][Fields]["pr_prof_orig"]["title"]=PRATICHE_PORIG;
//$SEARCHES[export][8][form][Fields]["pr_prof_orig"]["content"]="tselect||||wid::6;;url::".$CONF[url_base].$CONF[dir_modules]."admin/pages/user_search_div.php?form_id=listpratiche&form_page=1&codice=";
//$SEARCHES[export][8][form][Fields]["pr_prof_orig"]["from_sql"]="SELECT * FROM ".$CONF[auth_db_table]." WHERE codice LIKE '%[VAL]%%' order by codice asc||val::id;;text::codice;;text2::nome;;;;text2::nome;;perm::0;;mul::0;;tab::users";
$SEARCHES[export][8][form][Fields]["iniz_from"]["title"]=EXPORT_INIZ_FROM;
$SEARCHES[export][8][form][Fields]["iniz_from"]["content"]="date||||";
$SEARCHES[export][8][form][Fields]["iniz_to"]["title"]=FW_TO;
$SEARCHES[export][8][form][Fields]["iniz_to"]["content"]="date||||";
$SEARCHES[export][8][form][Fields]["mod_from"]["title"]=EXPORT_MOD_FROM;
$SEARCHES[export][8][form][Fields]["mod_from"]["content"]="date||||";
$SEARCHES[export][8][form][Fields]["mod_to"]["title"]=FW_TO;
$SEARCHES[export][8][form][Fields]["mod_to"]["content"]="date||||";
$SEARCHES[export][8][form][Fields]["print_note"]["title"]="";
$SEARCHES[export][8][form][Fields]["print_note"]["content"]="checkbox||||opt:: ".EXPORT_PRINT_NOTE."=>1,, ".EXPORT_PRINT_QUICKCONS."=>2;;mul::1;;size::1";
$SEARCHES[export][8][form][Fields]["dest"]["title"]=EXPORT_DEST;
$SEARCHES[export][8][form][Fields]["dest"]["content"]="tselect||||url::".$CONF[url_base].$CONF[dir_modules]."contact/pages/contact_search_div.php?form_id=listpratiche&form_page=1&nome=";
$SEARCHES[export][8][form][Fields]["dest"]["from_sql"]="SELECT * FROM contact p WHERE %[PERM]% AND codice LIKE '%[VAL]%%' order by codice asc||val::id;;text::codice;;text2::nome;;perm::1;;mod::contact;;mul::0";
$SEARCHES[export][8][form]["Fields"]["send"]["content"]="submit||".EXPORT_GEN."||";
$SEARCHES[export][8][search][tables][calendar]="1||".CALENDAR_FOUND."||exp::1;;lock::1||1";



//Group Export

$SEARCHES[export][9][form][form_method]="GET";
$SEARCHES[export][9][form][box_desc]="";
$SEARCHES[export][9][form][name]="listcont";
$SEARCHES[export][9][form][onpost]="action::db||table::test||type::add||wf::id";
$SEARCHES[export][9][form][ignore]="";
$SEARCHES[export][9][form][Fields]["codice_from"]["title"]=EXPORT_GROUP_FROM;
$SEARCHES[export][9][form][Fields]["codice_from"]["content"]="text||||";
$SEARCHES[export][9][form][Fields]["codice_to"]["title"]=EXPORT_GROUP_TO;
$SEARCHES[export][9][form][Fields]["codice_to"]["content"]="text||||";
$SEARCHES[export][9][form][Fields]["descr"]["title"]=FW_DESC;
$SEARCHES[export][9][form][Fields]["descr"]["content"]="text||||";
$SEARCHES[export][9][form][Fields]["tipo"]["title"]=FW_TYPE;
$SEARCHES[export][9][form][Fields]["tipo"]["content"]="select||||opt:: ".FW_ANY."=>,,".ADMIN_GROUP."=>0,, ".ADMIN_DIPART."=>1,, ".ADMIN_OFFICE."=>2;;size::1";
$SEARCHES[export][9][form][Fields]["print_note"]["title"]="";
$SEARCHES[export][9][form][Fields]["print_note"]["content"]="checkbox||||opt:: ".EXPORT_USERG_LIST."=>1;;mul::1;;size::1";
$SEARCHES[export][9][form][Fields]["send"]["content"]="submit||".EXPORT_GEN."||";
$SEARCHES[export][9][search][tables][contact]="2||".CONTACT_FOUND."||exp::1;;lock::0||0";

?>
