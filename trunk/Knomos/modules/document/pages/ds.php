<?
include("../../../framework/framework.php");

// Define page specific text for template
$PAGE[TXT_TITLE]=CALENDAR_MENU_0;
$PAGE[PAGE_INTITLE]=CALENDAR_MENU_0;
$PAGE[PAGE_PICTITLE]="ico_calendar_med.gif";
$module="contact";

template_init(4);
template_define_elements();

ob_start();

			$rs=$DB->Execute("SELECT * FROM document WHERE id=".$_GET[id]);
			if ($rs->RecordCount() > 0)
			{
				$row=$rs->FetchRow();
			}

readfile($CONF[path_base].$CONF[dir_upload].'document/txtindex/'.str_replace("-","",substr($row[data],0,7)).'/'.$row[filename].'-'.$row[id].'-'.$row[version].'.txt');



$PAGE[PAGE_CONTENT] = str_replace("#^#","<br>",utf8_encode(ob_get_contents()));
ob_end_clean();

final_render();

?>
