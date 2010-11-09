<?

//PRATICHE MODULE CONFIGURATION 


$shortname="export";
load_module_language($shortname);

//General Module Definition
$MODULES[$shortname][title]=EXPORT_TITLE;
$MODULES[$shortname][version]="1.0.1";

//Menu definition for this module
$MENU[$shortname][0][title]=EXPORT_MENU_0;
$MENU[$shortname][0][icon]="ico_stampa_peq.gif";
$MENU[$shortname][0][1][title]=EXPORT_MENU_0_1;
$MENU[$shortname][0][1][page]=$CONF[url_base].$CONF[dir_modules]."$shortname/pages/export_app.php";
$MENU[$shortname][0][1][perm]="r";
$MENU[$shortname][0][2][title]=EXPORT_MENU_0_7;
$MENU[$shortname][0][2][page]=$CONF[url_base].$CONF[dir_modules]."$shortname/pages/export_pratiche.php";
$MENU[$shortname][0][2][perm]="r";
$MENU[$shortname][0][3][title]=EXPORT_MENU_0_2;
$MENU[$shortname][0][3][page]=$CONF[url_base].$CONF[dir_modules]."$shortname/pages/export_prat.php";
$MENU[$shortname][0][3][perm]="r";
$MENU[$shortname][0][4][title]=EXPORT_MENU_0_3;
$MENU[$shortname][0][4][page]=$CONF[url_base].$CONF[dir_modules]."$shortname/pages/export_cont.php";
$MENU[$shortname][0][4][perm]="r";
$MENU[$shortname][0][5][title]=EXPORT_MENU_0_8;
$MENU[$shortname][0][5][page]=$CONF[url_base].$CONF[dir_modules]."$shortname/pages/export_doc.php";
$MENU[$shortname][0][5][perm]="r";
$MENU[$shortname][0][6][title]=EXPORT_MENU_0_4;
$MENU[$shortname][0][6][page]=$CONF[url_base].$CONF[dir_modules]."$shortname/pages/export_cod_tipo.php";
$MENU[$shortname][0][6][perm]="r";
$MENU[$shortname][0][7][title]=EXPORT_MENU_0_5;
$MENU[$shortname][0][7][page]=$CONF[url_base].$CONF[dir_modules]."$shortname/pages/export_tariffe.php";
$MENU[$shortname][0][7][perm]="r";
$MENU[$shortname][0][8][title]=EXPORT_MENU_0_6;
$MENU[$shortname][0][8][page]=$CONF[url_base].$CONF[dir_modules]."$shortname/pages/export_user.php";
$MENU[$shortname][0][8][perm]="r";
$MENU[$shortname][0][9][title]=EXPORT_MENU_0_9;
$MENU[$shortname][0][9][page]=$CONF[url_base].$CONF[dir_modules]."$shortname/pages/export_group.php";
$MENU[$shortname][0][9][perm]="r";
//Definizione funzioni da richiamare in ogni pagina
//$ONSTART_FUNC[$shortname][0][functions]="check_pratiche";
//$ONSTART_FUNC[$shortname][0][parameter]="boh,bah";

//Definizione link fra tabelle
$thisid=get_lm_id("pippo");
$LINK_MODULES[pippo][$thisid][child]=$shortname;
$LINK_MODULES[pippo][$thisid][type]="1";
$LINK_MODULES[pippo][$thisid][link_field]="ref_pippo";
$LINK_MODULES[pippo][$thisid][standalone]="yes";
$LINK_MODULES[pippo][$thisid][get_permission]="yes";


//Specific Permission function
$PERMISSION[$shortname][perm_type]="advanced";
$PERMISSION[$shortname][perm_field]="permessi";
$PERMISSION[$shortname][perm_group_conflict]="2";
$PERMISSION[$shortname][default_permission]="4";

//FORM
$CONF[form_ignoretype]= Array ("page");
?>
