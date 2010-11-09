<?

//PRATICHE MODULE CONFIGURATION 


$shortname="calendar";
load_module_language($shortname);

//General Module Definition
$MODULES[$shortname][title]=CALENDAR_TITLE;
$MODULES[$shortname][version]="0.9.7";

//Menu definition for this module
$MENU[$shortname][0][title]=CALENDAR_MENU_0;
$MENU[$shortname][0][icon]="ico_calendar_peq.gif";
if($_SESSION[history]==0)
{

$MENU[$shortname][0][1][title]=CALENDAR_MENU_0_1B;
$MENU[$shortname][0][1][page]=$CONF[url_base].$CONF[dir_modules]."$shortname/pages/day_view.php";
$MENU[$shortname][0][1][perm]="r";
/*$MENU[$shortname][0][2][title]=CALENDAR_MENU_0_2;
$MENU[$shortname][0][2][1][title]=CALENDAR_MENU_0_2_1;
$MENU[$shortname][0][2][1][page]=$CONF[url_base].$CONF[dir_modules]."$shortname/pages/day_view.php";
$MENU[$shortname][0][2][1][perm]="r";
$MENU[$shortname][0][2][2][title]=CALENDAR_MENU_0_2_2;
$MENU[$shortname][0][2][2][page]=$CONF[url_base].$CONF[dir_modules]."$shortname/pages/week_view.php";
$MENU[$shortname][0][2][2][perm]="r";
$MENU[$shortname][0][2][3][title]=CALENDAR_MENU_0_2_3;
$MENU[$shortname][0][2][3][page]=$CONF[url_base].$CONF[dir_modules]."$shortname/pages/month_view.php";
$MENU[$shortname][0][2][3][perm]="r";
*/

$MENU[$shortname][0][4][title]=CALENDAR_NEW_APP;
$MENU[$shortname][0][4][page]=$CONF[url_base].$CONF[dir_modules]."$shortname/pages/new_app.php";
$MENU[$shortname][0][4][perm]="c";
}
$MENU[$shortname][0][3][title]=CALENDAR_MENU_0_4;
$MENU[$shortname][0][3][page]=$CONF[url_base].$CONF[dir_modules]."$shortname/pages/app_view.php";
$MENU[$shortname][0][3][perm]="r";


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
$PERMISSION[$shortname][default_permission]="6";

//FORM
$CONF[form_ignoretype]= Array ("page");
?>