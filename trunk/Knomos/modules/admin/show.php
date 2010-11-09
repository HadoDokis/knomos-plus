<?

//USER SHOW
$SHOW[admin][0]["object_template"]="user.tpl";
$SHOW[admin][0]["sql_select"]="SELECT * FROM ".$CONF[auth_db_table]." WHERE id=%[ID]%";
$SHOW[admin][0]["options"]="perm::0";
$SHOW[admin][0]["Fields"]["login"]=FW_LOGIN;
$SHOW[admin][0]["Fields"]["password"]=FW_PASSWORD;
$SHOW[admin][0]["Fields"]["nome"]=FW_NAME;
$SHOW[admin][0]["Fields"]["mansione"]=ADMIN_USER_MANSIONE;
$SHOW[admin][0]["Fields"]["onorario"]=ADMIN_USER_ON_ORARIO;
$SHOW[admin][0]["Fields"]["id"]=ADMIN_USER_GROUPS."::{SELECT * FROM ".$CONF[auth_group_table]." gu, ".$CONF[auth_groups_table]." g WHERE gu.userid=%ID% AND g.id=gu.groupid;;name;;, }";
$SHOW[admin][0]["Fields"]["button1"]=make_button("users_view.php",ADMIN_USER_BACK_LIST);
$SHOW[admin][0]["Fields"]["button2"]=make_button("new_user.php?id=".$_GET[id],ADMIN_USER_UPD);



//CALENDAR TYPE SHOW
$SHOW[admin][1]["object_template"]="ct.tpl";
$SHOW[admin][1]["sql_select"]="SELECT * FROM INT_calendar_tipo WHERE id=%[ID]%";
$SHOW[admin][1]["options"]="perm::0";
$SHOW[admin][1]["Fields"]["ttsid"]=FW_CODE;
$SHOW[admin][1]["Fields"]["tts_desc"]=FW_DESC;
$SHOW[admin][1]["Fields"]["tit"]=ADMIN_MENU_0_3;
$SHOW[admin][1]["Fields"]["button1"]=make_button("ct_view.php",ADMIN_CT_BACK_LIST);
$SHOW[admin][1]["Fields"]["button2"]=make_button("new_ct.php?id=".$_GET[id],ADMIN_CT_UPD);


//PRATICHE TYPE SHOW
$SHOW[admin][2]["object_template"]="tp.tpl";
$SHOW[admin][2]["sql_select"]="SELECT * FROM INT_pratiche_tipo WHERE id=%[ID]%";
$SHOW[admin][2]["options"]="perm::0";
$SHOW[admin][2]["Fields"]["codice"]=FW_CODE;
$SHOW[admin][2]["Fields"]["ttp_desc"]=FW_DESC;
$SHOW[admin][2]["Fields"]["tit"]=ADMIN_MENU_0_4;
$SHOW[admin][2]["Fields"]["button1"]=make_button("tp_view.php",ADMIN_TP_BACK_LIST);
$SHOW[admin][2]["Fields"]["button2"]=make_button("new_tp.php?id=".$_GET[id],ADMIN_TP_UPD);

//PRATICHE STD SHOW
$SHOW[admin][11]["object_template"]="tp.tpl";
$SHOW[admin][11]["sql_select"]="SELECT * FROM INT_pratiche_STD WHERE id=%[ID]%";
$SHOW[admin][11]["options"]="perm::0";
$SHOW[admin][11]["Fields"]["cod_tipo"]=FW_CODE;
$SHOW[admin][11]["Fields"]["descrizione"]=FW_DESC;
$SHOW[admin][11]["Fields"]["curia"]=ADMIN_MENU_0_4;
$SHOW[admin][11]["Fields"]["button1"]=make_button("tp_view.php",ADMIN_TP_BACK_LIST);
$SHOW[admin][11]["Fields"]["button2"]=make_button("new_tp.php?id=".$_GET[id],ADMIN_TP_UPD);

//GROUPS SHOW
$SHOW[admin][3]["object_template"]="group.tpl";
$SHOW[admin][3]["sql_select"]="SELECT * FROM ".$CONF[auth_groups_table]." WHERE id=%[ID]%";
$SHOW[admin][3]["options"]="perm::0";
$SHOW[admin][3]["Fields"]["name"]=FW_NAME;
$SHOW[admin][3]["Fields"]["desc"]=FW_DESC;
$SHOW[admin][3]["Fields"]["tit"]=ADMIN_MENU_0_2;
$SHOW[admin][3]["Fields"]["id"]=ADMIN_GROUP_USERS."::{SELECT * FROM ".$CONF[auth_group_table]." gu, ".$CONF[auth_db_table]." u WHERE gu.groupid=%ID% AND u.id=gu.userid;;nome;;, }";
$SHOW[admin][3]["Fields"]["button1"]=make_button("groups_view.php",ADMIN_GROUP_BACK_LIST);
$SHOW[admin][3]["Fields"]["button2"]=make_button("new_group.php?id=".$_GET[id],ADMIN_GROUP_UPD);

//GROUPS SHOW
$SHOW[admin][4]["object_template"]="tarif.tpl";
$SHOW[admin][4]["sql_select"]="SELECT * FROM INT_tariffe WHERE id=%[ID]%";
$SHOW[admin][4]["options"]="perm::0";
$SHOW[admin][4]["Fields"]["tatid"]=FW_CODE;
$SHOW[admin][4]["Fields"]["tat_desc"]=FW_DESC;
$SHOW[admin][4]["Fields"]["tat_unita"]=ADMIN_TA_UNIT;
$SHOW[admin][4]["Fields"]["tat_quantita"]=ADMIN_TA_QUANT;
$SHOW[admin][4]["Fields"]["tat_imp"]=ADMIN_TA_IMP;
$SHOW[admin][4]["Fields"]["tat_imp_molt"]=ADMIN_TA_IMPM;
$SHOW[admin][4]["Fields"]["tat_nonimp"]=ADMIN_TA_NON_IMP;
$SHOW[admin][4]["Fields"]["tat_nonimp_molt"]=ADMIN_TA_NON_IMPM;
$SHOW[admin][4]["Fields"]["tat_diritti"]=ADMIN_TA_DIR;
$SHOW[admin][4]["Fields"]["tat_stragiudiziali"]=ADMIN_TA_STRAG;
$SHOW[admin][4]["Fields"]["tat_ccostituzionale"]=ADMIN_TA_CCOST;
$SHOW[admin][4]["Fields"]["tat_conciliazione"]=ADMIN_TA_CONC;
$SHOW[admin][4]["Fields"]["tat_pretura"]=ADMIN_TA_PRET;
$SHOW[admin][4]["Fields"]["tat_tribunale"]=ADMIN_TA_TRIB;
$SHOW[admin][4]["Fields"]["tat_amministrative"]=ADMIN_TA_AMN;
$SHOW[admin][4]["Fields"]["tat_cappello"]=ADMIN_TA_CAPP;
$SHOW[admin][4]["Fields"]["tat_ccassazione"]=ADMIN_TA_CASS;
$SHOW[admin][4]["Fields"]["button1"]=make_button("ta_view.php",ADMIN_TA_BACK_LIST);
$SHOW[admin][4]["Fields"]["button2"]=make_button("new_ta.php?id=".$_GET[id],ADMIN_TA_UPD);

//SETTINGS SHOW
$SHOW[admin][99]["object_template"]="settings.tpl";
$SHOW[admin][99]["sql_select"]="SELECT * FROM INT_settings WHERE id=%[ID]%";
$SHOW[admin][99]["options"]="perm::0";

$FORMS[admin][99]["Fields"]["usa_link1"]=ADMIN_USA_LINK1;

//$FORMS[admin][99]["Fields"]["usa_link1"]="Attiva collegamento personalizzato 1"."select||||opt::Si =>1,,No =>0";

$FORMS[admin][99]["Fields"]["label_link1"]["title"]="Etichetta";
$FORMS[admin][99]["Fields"]["label_link1"]["content"]="text||||wid::40";

$FORMS[admin][99]["Fields"]["ico_link1"]["title"]="Icona";
$FORMS[admin][99]["Fields"]["ico_link1"]["content"]="text||||wid::40";

$FORMS[admin][99]["Fields"]["usa_link2"]["title"]="Attiva collegamento personalizzato 2";
$FORMS[admin][99]["Fields"]["usa_link2"]["content"]="select||||opt::Si =>1,,No =>0";

$FORMS[admin][99]["Fields"]["label_link2"]["title"]="Etichetta";
$FORMS[admin][99]["Fields"]["label_link2"]["content"]="text||||wid::40";

$FORMS[admin][99]["Fields"]["ico_link2"]["title"]="Icona";
$FORMS[admin][99]["Fields"]["ico_link2"]["content"]="text||||wid::40";

$FORMS[admin][99]["Fields"]["usa_link3"]["title"]="Attiva collegamento personalizzato 3";
$FORMS[admin][99]["Fields"]["usa_link3"]["content"]="select||||opt::Si =>1,,No =>0";

$FORMS[admin][99]["Fields"]["label_link3"]["title"]="Etichetta";
$FORMS[admin][99]["Fields"]["label_link3"]["content"]="text||||wid::40";

$FORMS[admin][99]["Fields"]["ico_link3"]["title"]="Icona";
$FORMS[admin][99]["Fields"]["ico_link3"]["content"]="text||||wid::40";

$FORMS[admin][99]["Fields"]["usa_tariffario_knomos"]["title"]="Per l'inserim. veloce di prestazioni usa";
$FORMS[admin][99]["Fields"]["usa_tariffario_knomos"]["content"]="select||||opt::Tariffario di knomos =>1,,Tariffario forense =>0";

$FORMS[admin][99]["Fields"]["tar_titolo_selettore1"]["title"]="Etichetta selettore 1";
$FORMS[admin][99]["Fields"]["tar_titolo_selettore1"]["content"]="text||||wid::40";

$FORMS[admin][99]["Fields"]["tar_titolo_selettore2"]["title"]="Etichetta selettore 2";
$FORMS[admin][99]["Fields"]["tar_titolo_selettore2"]["content"]="text||||wid::40";

$FORMS[admin][99]["Fields"]["tar_titolo_selettore3"]["title"]="Etichetta selettore 3";
$FORMS[admin][99]["Fields"]["tar_titolo_selettore3"]["content"]="text||||wid::40";

$FORMS[admin][99]["Fields"]["tar_titolo_selettore4"]["title"]="Etichetta selettore 4";
$FORMS[admin][99]["Fields"]["tar_titolo_selettore4"]["content"]="text||||wid::40";

$FORMS[admin][99]["Fields"]["tar_titolo_selettore5"]["title"]="Etichetta selettore 5";
$FORMS[admin][99]["Fields"]["tar_titolo_selettore5"]["content"]="text||||wid::40";

$FORMS[admin][99]["Fields"]["tar_titolo_selettore6"]["title"]="Etichetta selettore 6";
$FORMS[admin][99]["Fields"]["tar_titolo_selettore6"]["content"]="text||||wid::40";


//studio per fatturazione
$FORMS[admin][99]["Fields"]["fatt_avvocato"]["title"]="Studio (ai fini della fatturazione)";
$FORMS[admin][99]["Fields"]["fatt_avvocato"]["content"]="text||||wid::40";
$FORMS[admin][99]["Fields"]["fatt_citta_studio"]["title"]="Città";
$FORMS[admin][99]["Fields"]["fatt_citta_studio"]["content"]="text||||wid::40";
$FORMS[admin][99]["Fields"]["fatt_indirizzo_studio"]["title"]="Indirizzo";
$FORMS[admin][99]["Fields"]["fatt_indirizzo_studio"]["content"]="text||||wid::40";
$FORMS[admin][99]["Fields"]["fatt_codicefiscale"]["title"]="Codice fiscale";
$FORMS[admin][99]["Fields"]["fatt_codicefiscale"]["content"]="text||||wid::40";
$FORMS[admin][99]["Fields"]["fatt_partitaIVA"]["title"]="Partita IVA";
$FORMS[admin][99]["Fields"]["fatt_partitaIVA"]["content"]="text||||wid::40";
$FORMS[admin][99]["Fields"]["fatt_domicilio_fiscale"]["title"]="Domicilio fiscale";
$FORMS[admin][99]["Fields"]["fatt_domicilio_fiscale"]["content"]="text||||wid::40";
$FORMS[admin][99]["Fields"]["fatt_data_luogo_nascita"]["title"]="Data e luogo di nascita";
$FORMS[admin][99]["Fields"]["fatt_data_luogo_nascita"]["content"]="text||||wid::40";
//---telefono e centralino
$FORMS[admin][99]["Fields"]["UsaTelefonoIP"]["title"]="Usa telefono IP";
//$FORMS[admin][99]["Fields"]["UsaTelefonoIP"]["content"]="text||||wid::40";
$FORMS[admin][99]["Fields"]["UsaTelefonoIP"]["content"]="select||||opt::Si =>1,,No =>0";

$FORMS[admin][99]["Fields"]["UsaCentralino"]["title"]="Usa centralino";
//$FORMS[admin][99]["Fields"]["UsaCentralino"]["content"]="text||||wid::40";
$FORMS[admin][99]["Fields"]["UsaCentralino"]["content"]="select||||opt::Si =>1,,No =>0";
//---dropbox
$FORMS[admin][99]["Fields"]["UsaDbox"]["title"]="Usa dropbox";
//$FORMS[admin][99]["Fields"]["UsaDbox"]["content"]="text||||wid::40";
$FORMS[admin][99]["Fields"]["UsaDbox"]["content"]="select||||opt::Si =>1,,No =>0";

$FORMS[admin][99]["Fields"]["dbox_url"]["title"]="URL dropbox";
$FORMS[admin][99]["Fields"]["dbox_url"]["content"]="text||||wid::100";

$FORMS[admin][99]["Fields"]["dbox_mobile_url"]["title"]="URL dropbox mobile";
$FORMS[admin][99]["Fields"]["dbox_mobile_url"]["content"]="text||||wid::100";

$FORMS[admin][99]["Fields"]["dbox_schedario"]["title"]="Percorso schedario";
$FORMS[admin][99]["Fields"]["dbox_schedario"]["content"]="text||||wid::40";

$FORMS[admin][99]["Fields"]["dbox_contatto"]["title"]="Percorso cartelle condivise";
$FORMS[admin][99]["Fields"]["dbox_contatto"]["content"]="text||||wid::40";
//---google
$FORMS[admin][99]["Fields"]["UsaGmail"]["title"]="Usa Gmail";
//$FORMS[admin][99]["Fields"]["UsaGmail"]["content"]="text||||wid::40";
$FORMS[admin][99]["Fields"]["UsaGmail"]["content"]="select||||opt::Si =>1,,No =>0";

$FORMS[admin][99]["Fields"]["DominioGapps"]["title"]="Dominio Google Apps";
$FORMS[admin][99]["Fields"]["DominioGapps"]["content"]="text||||wid::40";

$FORMS[admin][99]["Fields"]["gmail_url"]["title"]="URL Gmail";
$FORMS[admin][99]["Fields"]["gmail_url"]["content"]="text||||wid::100";

$FORMS[admin][99]["Fields"]["gmail_mobile_url"]["title"]="URL Gmail mobile";
$FORMS[admin][99]["Fields"]["gmail_mobile_url"]["content"]="text||||wid::100";

$FORMS[admin][99]["Fields"]["UsaGcal"]["title"]="Usa GCalendar";
//$FORMS[admin][99]["Fields"]["UsaGcal"]["content"]="text||||wid::40";
$FORMS[admin][99]["Fields"]["UsaGcal"]["content"]="select||||opt::Si =>1,,No =>0";

$FORMS[admin][99]["Fields"]["gcal_url"]["title"]="URL GCalendar";
$FORMS[admin][99]["Fields"]["gcal_url"]["content"]="text||||wid::100";




?>
