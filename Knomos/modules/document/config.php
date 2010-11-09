<?

//PRATICHE MODULE CONFIGURATION 


$shortname="document";
load_module_language($shortname);

//General Module Definition
$MODULES[$shortname][title]=DOCUMENT_TITLE;
$MODULES[$shortname][version]="0.9.9";



//Specific Permission function
$PERMISSION[$shortname][perm_type]="advanced";
$PERMISSION[$shortname][perm_field]="permessi";
$PERMISSION[$shortname][perm_group_conflict]="2";
$PERMISSION[$shortname][default_permission]="4";

//FORM
$CONF[form_ignoretype]= Array ("page");
?>