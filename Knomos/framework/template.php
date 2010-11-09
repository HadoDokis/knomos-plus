<?

/**
 * @package Creative Web Framework
 * @copyright (C) 2000 - 2005 Creative Web Snc
 * @website http://www.creativeweb.it
 * @license http://www.gnu.org/copyleft/gpl.html GNU/GPL
 * Knomos & Creative Web Framework is Free Software
 */
//
//  Creative Web FrameWork
//  Template management
//
require_once($CONF[path_base]."config/pages.php");

function template_init($page=1)
{
	GLOBAL $CONF,$CONF_PAGE,$DB,$CUR_TEMPLATE,$FORM_TEMPLATE,$LIST_TEMPLATE,$SEARCH_TEMPLATE;

	//We use default template
	if (isset($_SESSION[cur_templ])) {
		$template=$_SESSION[cur_templ];
	} else
	{
		$template=$CONF[default_template];
	}

	if (!file_exists($CONF[path_base].$CONF[dir_template].$template)) {
		trigger_error (str_replace("%TEMPL%",$template,str_replace("%FOLD%",$CONF[path_base].$CONF[dir_template],FW_ERROR_NOTEMPLATE)),E_USER_ERROR);
		die();
	}

	if (!file_exists($CONF[path_base].$CONF[dir_template].$template."/".$page.".tpl")) {
		trigger_error (str_replace("%TEMPL%",$template,str_replace("%FOLD%",$CONF[path_base].$CONF[dir_template],str_replace("%PAGE%",$page,FW_ERROR_NOTEMPLATE_PAGE))),E_USER_ERROR);
		die();
	}

	$CUR_TEMPLATE[content]=file_get_contents($CONF[path_base].$CONF[dir_template].$template."/".$page.".tpl");
	$CUR_TEMPLATE[name]=$template;

	require_once($CONF[path_base].$CONF[dir_template].$CUR_TEMPLATE[name]."/form.php");
	require_once($CONF[path_base].$CONF[dir_template].$CUR_TEMPLATE[name]."/search.php");
	require_once($CONF[path_base].$CONF[dir_template].$CUR_TEMPLATE[name]."/lists.php");
	require_once($CONF[path_base].$CONF[dir_template].$CUR_TEMPLATE[name]."/export.php");

}


function render_submenu($level,$menu,$module)
{
	GLOBAL $CONF,$CUR_TEMPLATE,$MODULES,$MENU,$point;

	if ( (check_perm_mod($module,$menu[perm])==1 && isset($menu[perm]))  || !isset($menu[perm]))
	{
		foreach($menu as $k => $v2){
			if (is_int($k))
			{
				$string_menu2.=render_submenu(($level+1),$v2,$module);
			}
		}
		$string_menu=$point[$level]."|".$menu[title]."|".$menu[page]."||".$menu[icon]."\n".$string_menu2;

	}

	return $string_menu;

}




function render_menu()
{
	GLOBAL $CONF,$CUR_TEMPLATE,$MODULES,$MENU,$point,$PAGE;

	//We use default template
	if (isset($_SESSION[cur_templ])) {
		$template=$_SESSION[cur_templ];
	} else
	{
		$template=$CONF[default_template];
	}


	//Include PHP Layer Menù for Layers configuration
	require_once($CONF[path_base].$CONF[dir_framework]."external_lib/phplm/lib/PHPLIB.php");
	require_once($CONF[path_base].$CONF[dir_framework]."external_lib/phplm/lib/layersmenu-common.inc.php");
	require_once($CONF[path_base].$CONF[dir_framework]."external_lib/phplm/lib/layersmenu.inc.php");

	$CUR_TEMPLATE[JS][count($CUR_TEMPLATE[JS])]=$CONF[url_base].$CONF[dir_framework]."external_lib/phplm/libjs/layersmenu-browser_detection.js";
	$CUR_TEMPLATE[JS][count($CUR_TEMPLATE[JS])]=$CONF[url_base].$CONF[dir_framework]."external_lib/phplm/libjs/layersmenu-library.js";
	$CUR_TEMPLATE[JS][count($CUR_TEMPLATE[JS])]=$CONF[url_base].$CONF[dir_framework]."external_lib/phplm/libjs/layersmenu.js";



	$myDirParh=$CONF[path_base].$CONF[dir_framework]."external_lib/phplm/";
	$myWwwPath=$CONF[url_base].$CONF[dir_framework]."external_lib/phplm/";
	$mid = new LayersMenu();



	$mid->setDirroot($myDirParh);
	$mid->setLibjsdir($myDirPath . 'libjs/');
	$mid->setImgdir($myDirPath . 'menuimages/');
	$mid->setImgwww($myWwwPath . 'menuimages/');
	$mid->setIcondir($CONF[path_base].$CONF[dir_template].$template."/images/ico/");
	$mid->setIconwww($CONF[url_base].$CONF[dir_template].$template."/images/ico/");
	$mid->setTpldir($CONF[path_base].$CONF[dir_template].$template."/menu_template/");
	$mid->setHorizontalMenuTpl('layersmenu-horizontal_menu.ihtml');
	$mid->setSubMenuTpl('layersmenu-sub_menu.ihtml');

	$pt=".";
	$temppt=$pt;
	for($x=1;$x < 11;$x++)
	{
		$point[$x]=$temppt;
		$temppt.=$pt;
	}

	$main_level=explode(",",$CONF[menu_order]);
	$level=1;
	foreach ($main_level as $v)
	{
		$string_menu2="";
		if (isset($MENU[$v][0][title]))
		{
			foreach($MENU[$v][0] as $k => $v2){
				if (is_int($k))
				{
					$string_menu2.=render_submenu(($level+1),$v2,$v);

				}
			}
			if (strlen($string_menu2)>1 || $MENU[$v][0][perm]==1 ) $string_menu.=$point[$level]."|".$MENU[$v][0][title]."|".$MENU[$v][0][page]."||".$MENU[$v][0][icon]."\n".$string_menu2;
		}
	}

	$mid->setMenuStructureString(".|Home|".$CONF[url_base]."main.php||ico_home_peq.gif\n".$string_menu);
	$mid->setIconsize(16, 16);
	$mid->parseStructureForMenu('hormenu1');
	$mid->newHorizontalMenu('hormenu1');

	$PAGE[MENU_HEADER] = $mid->makeHeader();
	$PAGE[MENU_TAB] = $mid->getMenu("hormenu1");
	$PAGE[MENU_FOOTER] = $mid->makeFooter();

}


//Define text and other elements in current template
function template_define_text($elements)
{
	GLOBAL $CONF,$CONF_PAGE,$DB,$CUR_TEMPLATE;

	foreach($elements as $key => $value) {
		if (strstr($CUR_TEMPLATE[content],"%[$key]%")) {
			$CUR_TEMPLATE[content]=str_replace("%[$key]%",$value,$CUR_TEMPLATE[content]);
		} else {
			$CUR_TEMPLATE[error][$cnt]=$key;
			$cnt++;
		}
	}
}

//fix path for Global Javascript images and css
function template_gpath_fix()
{
	GLOBAL $CONF,$CONF_PAGE,$DB,$CUR_TEMPLATE;

	$CUR_TEMPLATE[content]=str_replace("%[CSS_GPATH]%",$CONF[abs_url].$CONF[dir_template].$CUR_TEMPLATE[name].'/css/',$CUR_TEMPLATE[content]);
	$CUR_TEMPLATE[content]=str_replace("%[IMAGE_GPATH]%",$CONF[abs_url].$CONF[dir_template].$CUR_TEMPLATE[name].'/images/',$CUR_TEMPLATE[content]);
	$CUR_TEMPLATE[content]=str_replace("%[JS_GPATH]%",$CONF[abs_url].$CONF[dir_template].$CUR_TEMPLATE[name].'/js/',$CUR_TEMPLATE[content]);
	$CUR_TEMPLATE[content]=str_replace("%[FW_GPATH]%",$CONF[abs_url],$CUR_TEMPLATE[content]);

}


//ADD MODULE'S GRAPHIC DEP. TO CSS AND JS ARRAY
function module_add_css_js($module)
{
	global $CONF,$CUR_TEMPLATE;

	if (file_exists($CONF[path_base].$CONF[dir_modules].$module."/template/".$CUR_TEMPLATE[name]."/css/")) {
		$dirc=opendir($CONF[path_base].$CONF[dir_modules].$module."/template/".$CUR_TEMPLATE[name]."/css/");
		$rel=$CUR_TEMPLATE[name];
	} elseif (file_exists($CONF[path_base].$CONF[dir_modules].$module."/template/".$CONF[default_template]."/css/") && $CONF[default_template] != $CUR_TEMPLATE[name]) {
		$dirc=opendir($CONF[path_base].$CONF[dir_modules].$module."/template/".$CONF[default_template]."/css/");
		$rel=$CONF[default_template];
	}

	if (isset($dirc)) {
		while (($file = readdir($dirc)) !== false) {
			if ($file != "." && $file != ".." && $file[0] != ".") {
				$CUR_TEMPLATE[CSS][count($CUR_TEMPLATE[CSS])]=$CONF[abs_url].$CONF[dir_modules].$module."/template/".$rel."/css/".$file;
			}
		}
	}
	unset ($file);

	//Check Javascript file
	if (file_exists($CONF[path_base].$CONF[dir_modules].$module."/template/".$CUR_TEMPLATE[name]."/js/")) {
		$dirj=opendir($CONF[path_base].$CONF[dir_modules].$module."/template/".$CUR_TEMPLATE[name]."/js/");
		$rel=$CUR_TEMPLATE[name];
	} elseif (file_exists($CONF[path_base].$CONF[dir_modules].$module."/template/".$CONF[default_template]."/js/") && $CONF[default_template] != $CUR_TEMPLATE[name]) {
		$dirj=opendir($CONF[path_base].$CONF[dir_modules].$module."/template/".$CONF[default_template]."/js/");
		$rel=$CONF[default_template];
	}

	if (isset($dirj)) {
		while (($file = readdir($dirj)) !== false) {
			if ($file != "." && $file != ".." && $file[0] != "." && strstr($file,".js")) {
				$CUR_TEMPLATE[JS][count($CUR_TEMPLATE[JS])]=$CONF[abs_url].$CONF[dir_modules].$module."/template/".$rel."/js/".$file;
			}
		}
	}
	unset ($file);

}

//We should add permission management here
function template_define_elements()
{
	GLOBAL $CONF,$CONF_PAGE,$DB,$CUR_TEMPLATE,$PAGE_ELEMENT;

	$types=Array("ge" => "GLOB","ue"=>"USER","pe"=>"PAGE");

	foreach($types as $conf => $type) {

		switch ($CONF["templ_".$conf."_source"]) {
			case "conf":
				$elements=$PAGE_ELEMENT[$type];
				break;
			case "session":
				$elements=$_SESSION[$CONF["templ_".$conf."_ses_array"]];
				break;
			case "db":
				$sql="SELECT * FROM ".$CONF["templ_".$conf."_db_table"]." order by id asc";
				$rs=$DB->Execute($sql);
				$elements=$rs->GetArray();
				//REMEBER We have to convert db to normal array format
				break;
		}

		//Let's parse the array for foreach scan for Global part in template, second foreach cycle through objects to insert in it
		if (is_array($elements)) {

			foreach ($elements as $key => $value) {
				unset ($tmp_output);
				unset ($output);
				foreach($value as $key2 => $value2) {
					$function_part=explode("_",$value2[func]);
					module_add_css_js($function_part[0]);
					require_once($CONF[path_base].$CONF[dir_modules].$function_part[0]."/objects.php");
					$tmp_output=$value2[func]($value2[param]);
					//FIX PATH FOR MODULES IMAGES
					if (file_exists($CONF[path_base].$CONF[dir_modules].$function_part[0]."/template/".$CUR_TEMPLATE[name]."/images/")) {
						$tmp_output=str_replace("%[IMAGE_MPATH]%",$CONF[abs_url].$CONF[dir_modules].$function_part[0]."/template/".$CUR_TEMPLATE[name]."/images/",$tmp_output);
					} elseif (file_exists($CONF[path_base].$CONF[dir_modules].$function_part[0]."/template/".$CONF[default_template]."/images/")) {
						$tmp_output=str_replace("%[IMAGE_MPATH]%",$CONF[abs_url].$CONF[dir_modules].$function_part[0]."/template/".$CONF[default_template]."/images/",$tmp_output);
					} else {$tmp_output=str_replace("%[IMAGE_MPATH]%",$CONF[abs_url].$CONF[common_image],$tmp_output);

					}

					$output.=$tmp_output;
				}
				$CUR_TEMPLATE[content]=str_replace("%[".$type."_SPACE_$key]%",$output,$CUR_TEMPLATE[content]);
					
			}
		}
	}
}


//INSERT REQUIRED JS AND CSS FILES IN THE TEMPLATE
function template_add_css_js()
{
	GLOBAL $CUR_TEMPLATE;
	if (is_array($CUR_TEMPLATE[JS])) {
		foreach(array_unique($CUR_TEMPLATE[JS]) as $value)
		{
			$js_page.='<script language="JavaScript" type="text/javascript"  src="'.$value.'"></script>'." \n";
		}
	}
	unset ($value);

	if (is_array($CUR_TEMPLATE[CSS])) {
		foreach(array_unique($CUR_TEMPLATE[CSS]) as $value)
		{
			$css_page.='<link href="'.$value.'" rel="stylesheet" type="text/css">'." \n";
		}
	}
	//Insert in the template all the required js and css
	$CUR_TEMPLATE[content]=str_replace("%[PAGE_CSS]%",$css_page,$CUR_TEMPLATE[content]);
	$CUR_TEMPLATE[content]=str_replace("%[PAGE_JS]%",$js_page,$CUR_TEMPLATE[content]);

}


//DRAW THE TEMPLATE
function final_render()
{
	GLOBAL $CUR_TEMPLATE,$PAGE;

	render_menu();
	template_define_text($PAGE);
	template_gpath_fix();
	template_add_css_js();
	print $CUR_TEMPLATE[content];


}

//DRAW A BUTTON WITH EMBEDDED LINK
function make_button($url,$value) {
	global $FORM_TEMPLATE;
	$out=str_replace("%VALUE%",$value,$FORM_TEMPLATE["button"]);
	$out=str_replace("%URL%",$url,$out);
	return $out;

}


//DRAW A BUTTON
function make_button_clean($value,$js) {
	global $FORM_TEMPLATE;
	$out=str_replace("%VALUE%",$value,$FORM_TEMPLATE["button2"]);
	$out=str_replace("%JS%",$js,$out);
	return $out;

}


//DRAW A BUTTON WITH EMBEDDED LINK
function make_button_del($url,$value) {
	global $FORM_TEMPLATE;
	$out=str_replace("%VALUE%",$value,$FORM_TEMPLATE["buttond"]);
	$out=str_replace("%URL%",$url,$out);
	return $out;

}


?>
