<?

//PRATICHE MODULE CONFIGURATION 


$shortname="contact";
load_module_language($shortname);

//General Module Definition
$MODULES[$shortname][title]=CONTACT_TITLE;
$MODULES[$shortname][version]="1.0.0";

//Menu definition for this module
$MENU[$shortname][0][title]=CONTACT_MENU_0;
$MENU[$shortname][0][icon]="ico_clienti_peq.gif";
$MENU[$shortname][0][1][title]=CONTACT_MENU_0_1;
$MENU[$shortname][0][1][page]=$CONF[url_base].$CONF[dir_modules]."$shortname/pages/contacts_view.php";
$MENU[$shortname][0][1][perm]="r";
$MENU[$shortname][0][2][title]=CONTACT_MENU_0_2;
$MENU[$shortname][0][2][page]=$CONF[url_base].$CONF[dir_modules]."$shortname/pages/new_contact.php";
$MENU[$shortname][0][2][perm]="c";


//Definizione funzioni da richiamare in ogni pagina
$ONSTART_FUNC[$shortname][0][functions]="check_pratiche";
$ONSTART_FUNC[$shortname][0][parameter]="boh,bah";

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