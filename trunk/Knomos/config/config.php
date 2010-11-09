<?

$CONF[app_name]="Knomos";
$CONF[app_release]="1.8.1";
$CONF[fw_name]="";
$CONF[fw_release]="1.0.2";

#URL AND DIRECTORY
$CONF[path_base]=dirname(dirname(__FILE__))."/";
$projectDir = implode('/', array_intersect(explode('/', $_SERVER["REQUEST_URI"]), explode('/', str_replace('\\', '/', $CONF[path_base]))));
if ($projectDir[strlen($projectDir)-1] != '/') {
	$projectDir .= '/';
}
$CONF[abs_url]=$projectDir;
$CONF[url_base]='http://' . $_SERVER['HTTP_HOST'] . $CONF[abs_url];

date_default_timezone_set('Europe/Rome');

$CONF[dir_modules]="modules/";
$CONF[dir_template]="template/";
$CONF[dir_language]="language/";
$CONF[common_image]="images/";
$CONF[dir_doc]="doc/";
$CONF[dir_framework]="framework/";
$CONF[dir_upload]="tmp/";
$CONF[dir_log]="log/";
$CONF[web_dav]=1;


#[database]
$CONF[db_type]="mysql";
$CONF[db_host]="174.132.248.2";
$CONF[db_user]="132_knomos";
$CONF[db_pass]="paperinik";
$CONF[db_database]="132_knomos";

# history database
$CONF[db_history_database]="132_knomos_archivio";
$CONF[db_history_tables] = array("calendar","pratiche","prestazioni","document");
$CONF[rgrep_path]="/usr/bin/rgrep";

#[authentication]
#auth_required option: always,never,perpage
$CONF[auth_required]=always;
$CONF[auth_type]="db";
$CONF[auth_db_table]="users";
$CONF[auth_login_field]="login";
$CONF[auth_groups_table]="gruppi";
$CONF[auth_groups_namefield]="name";

$CONF[auth_pass_field]="password";
#;pass option: clear,md5
$CONF[auth_pass_type]="clear";
$CONF[auth_check_lang_field]="language";
$CONF[auth_check_templ_field]="";
$CONF[auth_group_table]="group_user";
$CONF[auth_login_page]="login.php";
$CONF[auth_logout_page]="main.php?dologout=1";
$CONF[auth_logout_page_expired]="main.php?dologout=2";
$CONF[auth_force_home]="main.php";


#[session]
#;session start options: always,never,onauth
$CONF[session_start]="onauth";
$CONF[session_table_preload]="user_option|ref_usr,users|id";
$CONF[session_default_user]=0;


#[default_settings]
$CONF[default_language]="it";
$CONF[default_link_table]="table_link";
$CONF[default_template]="skin_sutti";

#[logging]
$CONF[log_enable]="no";
$CONF[log_type]="db";
#;log_target should be file name or table name according to log_type
$CONF[log_target]="error_log";
$CONF[log_mail]="massimoc@creativeweb.it";
$CONF[log_trigger]="2,256,512,1024";
$CONF[log_mail_trigger]="";
#;!!WARNING!! Setting debug on can generate very large file/db log  
$CONF[log_debug_trigger]="2";
$CONF[log_show_trigger]="2,256";


#[event logging]
$CONF[log_event_enable]="yes";
$CONF[log_event_file]="event.log";
$CONF[log_event_create]="yes";
$CONF[log_event_delete]="yes";
$CONF[log_event_update]="yes";
$CONF[log_event_show]="yes";
$CONF[log_event_login]="yes";

#TEMPLATE
//GLOBAL ELEMENT CONFIG
#allowed db/conf/session
$CONF[templ_ge_source]="conf";
#$CONF[templ_ge_db_table]="nometabella";
#$CONF[templ_ge_ses_array]="nomearray";
//USER ELEMENT CONFIG
$CONF[templ_ue_source]="conf";
#$CONF[templ_ue_db_table]="nometabella";
#$CONF[templ_ue_ses_array]="nomearray";
//PAGE ELEMENT MUST BE DEFINED INPAGE AS AN ARRAY
$CONF[templ_pe_source]="conf";


#[date_time]
$CONF[date_format]="d/m/Y";
$CONF[time_format]="H:i";
$CONF[mysql_date_format] = 'Y-m-d';
$CONF[mysql_time_format] = 'H:i:s';

#PERMISSION
$CONF[perm_types]=Array( "r"=>0,"w"=>1,"p"=>2,"d"=>3,"c"=>4);
$CONF[perm_vals]=Array( "r"=>3,"w"=>4,"d"=>5,"p"=>6,"c"=>4);
$CONF[perm_mod_ofs]=Array( "contact"=>0,"pratiche"=>0,"prestazioni"=>1,"calendar"=>2,"document"=>3);
$CONF[perm_mod_par][calendar]="pratiche";
$CONF[perm_mod_par][prestazioni]="pratiche";
$CONF[perm_mod_par][document]="pratiche";
$CONF[logout_time]=30; //Value in minute
$CONF[days_cpw]=90; //Value in days

$CONF[perm_db_user_field]="modperm";

#CRON
$CONF[cron_enable]="yes";
$CONF[cron_web_enable]="yes";
$CONF[cron_table]="cron";

#CALENDAR
$CONF[calendar_table]="calendar";

#FORM
$CONF[form_iframe_perm]="permission_iframe.php";


#MENU
$CONF[menu_order]="pratiche,prestazioni,calendar,contact,export,admin";


#VALUES
$CONF[value_dec]=",";
$CONF[value_sep]=".";

#EXPORT LAYOUT
$CONF[exp_font_face] = 'Arial';			// 'Arial','Verdana','Tahoma','Times New Roman'
$CONF[exp_font_size] = '8pt';			// 8pt, 9pt, 10pt , ...
$CONF[exp_table_padding] = '0.065';
?>
