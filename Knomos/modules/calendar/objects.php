<?

function calendar_element_1($link_type=0)
{
	
	GLOBAL $CONF;
	$output.='<!-- ini calendar-->
        <iframe id="calendar_iframe" src="'.$CONF[url_base].$CONF[dir_modules].'calendar/pages/calendar_iframe.php?lt=0" frameBorder="0" height="167px">IFRAME CALENDAR</iframe>
	<!-- fine calendar -->';
	
	if ($link_type==1)
	{
		$output.='<div id="appunt_giorno" class="hidden"></div>';
		
	}
	

	return $output;
}

function calendar_element_2()
{
	
	if ($_GET[scad_type]==1) {$list_type=5;}
	elseif ($_GET[scad_type]==2) {$list_type=4;}
	else 	{$list_type=2;}
	
	if (check_perm_mod("calendar","r")==1)
	{
		$thislist= load_fwobject("lists","calendar",$list_type);
		//print_r ($thislist);
		$output=draw_list($thislist,"calendar");
		return $output;

	} else return "";


}




?>