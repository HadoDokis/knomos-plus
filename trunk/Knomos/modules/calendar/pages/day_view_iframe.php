<?
include("../../../framework/framework.php");
include("../functions.php");
$module="calendar";

// Define page specific text for template
$PAGE[TXT_TITLE]="Test title";
$PAGE[PAGE_INTITLE]=CALENDAR_DAY_VIEW;
$PAGE[PAGE_PICTITLE]="ico_calendar_med.gif";


if ($_SESSION[mobile]==true){
	template_init(6); //mobile=6 - normale=2
} 
 else {
	template_init(); //mobile=6 - normale=2
}
	
//template_init(); //mobile=6 - desktop =()


if (isset ($_GET[day]) && is_numeric($_GET[day]))
{
	$curday=$_GET[day];
}else $curday=(date("d"));


if (isset ($_GET[month]) && is_numeric($_GET[month]))
{
	$curmonth=$_GET[month];
}else $curmonth=date("m");

if (isset ($_GET[year]) && is_numeric($_GET[year]))
{
	$curyear=$_GET[year];
} else $curyear=date("Y");



$rs=$DB->Execute("SELECT * FROM $module  WHERE  day = '$curyear-$curmonth-$curday' AND (operator LIKE '".$_SESSION[fw_userid].",,%' OR operator='".$_SESSION[fw_userid]."')  order by time asc");


$maxday=howmany_days($curmonth,$curyear);

$cnt=0;
while (!$rs->EOF)
{
	
	$app=$rs->FetchRow();
	list($hour,$min,$sec)=explode(":",$app["time"]);
	$day_app[$hour][$min][$cnt]=$app;
	$day_app[$hour][$min][tot]++;

	$cnt++;
	
}

$rs2=$DB->Execute("SELECT * FROM $module  WHERE id > 1 AND day = '$curyear-$curmonth-$curday' AND (operator LIKE '%,,".$_SESSION[fw_userid].",,%' OR operator LIKE '%,,".$_SESSION[fw_userid]."')  order by time asc");

$cnt2=0;
while (!$rs2->EOF)
{
	
	$app2=$rs2->FetchRow();
	list($hour,$min,$sec)=explode(":",$app2["time"]);
	$day_app_ext[$hour][$min][$cnt2]=$app2;
	$day_app_ext[$hour][$min][tot]++;

	$cnt2++;

}
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<title>Calendar</title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<link href="<?=$CONF[url_base].$CONF[dir_template].$CUR_TEMPLATE[name]?>/css/stili_sutti_calendar.css" rel="stylesheet" type="text/css">
<script language="JavaScript" type="text/JavaScript">
<!--
function MM_jumpMenu(targ,selObj,restore){ //v3.0
  eval(targ+".location='"+selObj.options[selObj.selectedIndex].value+"'");
  if (restore) selObj.selectedIndex=0;
}
//-->
</script>
<style type="text/css">
<!--
A {
	color: #990000;
}
A:hover {
	color: #FF0000;
}
-->
</style>
</head>

<body class="calendar-gior-col-body">

	
	<table  border="0" cellpadding="2" cellspacing="1" class="calendar-gior-col-table">

<?
        for ($ch=0;$ch < 24;$ch++)
        {			
        			if (strlen($ch)==1) {$chok='0'.$ch;} else $chok=$ch;
            	for ($cm=0;$cm < 59; $cm++)
            	{
            		$res="";
            		$res2="";
            		if (strlen($cm)==1) {$cmok='0'.$cm;} else $cmok=$cm;
            		if ($day_app[$chok][$cmok][tot] > 0 || $day_app_ext[$chok][$cmok][tot] > 0)
            		{ 
            			if (is_array($day_app[$chok][$cmok]))
            			{
	            			foreach ($day_app[$chok][$cmok] as $k => $appunt)
	            			{ if (is_int($k)) {
	            					$res .= ' <a target="_parent" href="appunt_show.php?id='.$appunt[id].'">'.$appunt[title].'</a><br>';
	            				}
										}
									}

            			if (is_array($day_app_ext[$chok][$cmok]))
            			{

	            			foreach ($day_app_ext[$chok][$cmok] as $k2 => $appunt_ext)
	            			{ if (is_int($k2)) {
	            				
	            					$res2 .= ' <a target="_parent" href="appunt_show.php?id='.$appunt_ext[id].'">'.$appunt_ext[title].' (<b>'.check_owner($appunt_ext[permessi]).'</b>)</a><br>';
	            				}
	            			}
									}            			
            			
            		}
              
              
              $ext_app="";
							if ($res2=="") {$ext_app="";}
							elseif ($res=="" && $res2!="") {$ext_app="<b>".CALENDAR_APPS_COL."</b><br>$res2";}
							elseif ($res!="" && $res2!="") {$ext_app="<br><b>".CALENDAR_APPS_COL."</b><br>$res2";}
		
              if ($res=="" && $res2=="" && $cmok=="00")
        	    {
		            print '<tr class="riga-cal-01" onMouseOver="this.className=\'riga-cal-01-over\'" onMouseOut="this.className=\'riga-cal-01\'">
							  <th width="4%" align="left" valign="top" nowrap><a target="_parent" href="new_app.php?day='.$curday.'&month='.$curmonth.'&year='.$curyear.'&min=0&hour='.$chok.'" class="ora-cal-giorno-link">'.$chok.'.00 h </a></th>
							  <td align="left" valign="top">&nbsp;</td>
			   		    </tr>';
								        	    	
        	    } elseif (($res!="" || $res2!="") && $cmok=="00") {
								print '<tr>
			  				<th width="4%" align="left" valign="top" nowrap class="riga-appunt-01"><a target="_parent" href="new_app.php?day='.$curday.'&month='.$curmonth.'&year='.$curyear.'&min=0&hour='.$chok.'" class="ora-link-appunt">'.$chok.'.00 h </a></th>
			  				<td align="left" valign="top" class="riga-appunt-01-sub" onMouseOver="this.className=\'riga-appunt-over\'" onMouseOut="this.className=\'riga-appunt-01-sub\'">'.$res.$ext_app.'</td>
			  				</tr>';

            	} elseif (($res!="" || $res2!="") && $cmok!="00") {
								print '<tr>
			  				<th width="4%" align="left" valign="top" nowrap class="riga-appunt-03">'.$ch.'.'.$cmok.' h </th>
			  				<td align="left" valign="top" class="riga-appunt-03-sub" onMouseOver="this.className=\'riga-appunt-over\'" onMouseOut="this.className=\'riga-appunt-03-sub\'">'.$res.$ext_app.'</td>
			  				</tr>';
            	}
	            	
				}
	}
?>
          </table>
      </div>
      <!--FINE CALENDAR NORMAL-->
      
</body>
</html>
