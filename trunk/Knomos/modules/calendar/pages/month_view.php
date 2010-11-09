<?
include("../../../framework/framework.php");
include("../functions.php");
$module="calendar";

// Define page specific text for template
$PAGE[TXT_TITLE]=CALENDAR_MONTH_VIEW;
$PAGE[PAGE_INTITLE]=CALENDAR_MONTH_VIEW;
$PAGE[PAGE_PICTITLE]="ico_calendar_med.gif";

//URLS FOR SCADENZE
$url1=make_url(Array ("scad_type"=>1),1);
$url2=make_url(Array ("scad_type"=>2),1);
$url3=make_url(Array ("scad_type"=>3),1);

if ($_GET[scad_type]==1){
	$PAGE[PAGE_INTITLE].=' &nbsp;&nbsp;<span> '.CALENDAR_APPS.' | <a href="'.$url2.'">'.CALENDAR_SCADS.'</a> | <a href="'.$url3.'">'.FW_ALL.'</a> </span>';
	$and_t=" AND type=0 ";
} elseif ($_GET[scad_type]==2){
	$PAGE[PAGE_INTITLE].=' &nbsp;&nbsp;<span><a href="'.$url1.'">'.CALENDAR_APPS.'</a> | '.CALENDAR_SCADS.' | <a href="'.$url3.'">'.FW_ALL.'</a></span>';
	$and_t=" AND type=1 ";
} else {
	$PAGE[PAGE_INTITLE].=' &nbsp;&nbsp;<span><a href="'.$url1.'">'.CALENDAR_APPS.'</a> | <a href="'.$url2.'">'.CALENDAR_SCADS.'</a> | '.FW_ALL.'</span>';
}


if ($_SESSION[mobile]==true){
	template_init(6); //mobile=6 - normale=2
}
else {
	template_init(); //mobile=6 - normale=2
}

//template_init(); //mobile=6 - desktop =()
template_define_elements();
ob_start();


if (isset ($_GET[month]) && is_numeric($_GET[month]))
{
	$curmonth=$_GET[month];
}else $curmonth=date("m");

if (isset ($_GET[year]) && is_numeric($_GET[year]))
{
	$curyear=$_GET[year];
} else $curyear=date("Y");

if (isset ($_GET[day]) && is_numeric($_GET[day]))
{
	$curday=$_GET[day];
}elseif ($curmonth==date("m") && $curyear==date("Y")) $curday=(date("d"));


$maxday=howmany_days($curmonth,$curyear);

$rs=$DB->Execute("SELECT * FROM $module WHERE day <= '$curyear-$curmonth-$maxday' AND day >= '$curyear-$curmonth-01' $and_t AND (operator LIKE '".$_SESSION[fw_userid].",,%' OR operator='".$_SESSION[fw_userid]."')");


$cnt=0;
while (!$rs->EOF)
{

	$app=$rs->FetchRow();
	if ($app[type]==1)
	{
		$day_app[$app[day]][$cnt]=$app;
		$day_app[$app[day]][tot]++;
	} else {
		$day_eve[$app[day]][$cnt]=$app;
		$day_eve[$app[day]][tot]++;
	}
	$cnt++;
}


$rs2=$DB->Execute("SELECT * FROM $module WHERE id > 1 AND day <= '$curyear-$curmonth-$maxday' AND day >= '$curyear-$curmonth-01' $and_t AND (operator LIKE '%,,".$_SESSION[fw_userid].",,%' OR operator LIKE '%,,".$_SESSION[fw_userid]."') order by time asc");

$cnt2=0;
while (!$rs2->EOF)
{

	$app2=$rs2->FetchRow();

	if ($app2[type]==1)
	{
		$day_app_ext[$app2[day]][$cnt2]=$app2;
		$day_app_ext[$app2[day]][tot]++;
	} else {
		$day_eve_ext[$app2[day]][$cnt2]=$app2;
		$day_eve_ext[$app2[day]][tot]++;
	}

	$cnt2++;

}

?>

<!--INI CALENDAR NORMAL-->
<div class="calendar-normal">
<form name="form2" method="get" action="#">
<table width="100%" border="0" cellspacing="0" cellpadding="0">
	<tr>
		<td align="left" valign="middle" nowrap width="1%"><!--            
<select name="day" class="calendar-campo-01">
<?
for($ds=1;$ds<=31;$ds++)
{
	if ($ds==$curday) {$sel="selected";} else $sel="";
	print "<option value=\"$ds\" $sel>$ds</option>";
}
?>
            </select>
            
--> <select name="month" class="calendar-campo-01">
<?
for($ms=1;$ms<=12;$ms++)
{
	if ($ms==$curmonth) {$sel="selected";} else $sel="";
	print "<option value=\"$ms\" $sel>".print_month($ms)."</option>";
}
?>

		</select> <select name="year" class="calendar-campo-01">
		<?
		for($ys=($curyear-5);$ys<($curyear+5);$ys++)
		{
			if ($ys==$curyear) {$sel="selected";} else $sel="";
			print "<option value=\"$ys\" $sel>$ys</option>";
		}
		?>

		</select> &nbsp;</td>
		<td align="left"><input type="image"
			src="%[IMAGE_GPATH]%arrow_right.gif" align="middle"></td>
		</form>
		<td valign="middle">&nbsp;</td>
		<td width="10%" align="right" valign="middle" nowrap><a
			href="<? $prev=prev_month($curmonth,$curyear); print "month_view.php?month=".$prev[month]."&year=".$prev[year];?>"
			class="calendar-link-nav"><img src="%[IMAGE_GPATH]%arrow_left.gif"
			width="16" height="16" border="0" align="absmiddle"> <?=CALENDAR_PREV_MONTH?></a>
		</td>
		<td width="2%" align="center" valign="middle"><img
			src="%[IMAGE_GPATH]%sep_02.gif" width="2" height="16"></td>
		<td width="10%" align="right" valign="middle" nowrap><a
			href="<? $next=next_month($curmonth,$curyear); print "month_view.php?month=".$next[month]."&year=".$next[year];?>"
			class="calendar-link-nav"><?=CALENDAR_NEXT_MONTH?> <img
			src="%[IMAGE_GPATH]%arrow_right.gif" width="16" height="16"
			border="0" align="absmiddle"> </a></td>
	</tr>
</table>
</form>
<div class="toolbar-calendar-div ui-widget ui-state-default">

<table border="0" cellpadding="0" cellspacing="0"
	class="toolbar-calendar-table">
	<tr>
		<td align="left" valign="middle" nowrap class="toolbar-calendar-td"><a
			href="day_view.php"><img
			src="%[IMAGE_GPATH]%ico/ico_calendar_giorno_peq.gif" width="16"
			height="16" border="0" align="absmiddle"> <?=CALENDAR_DAY?> </a></td>
		<td align="left" valign="middle" nowrap class="toolbar-calendar-td"><a
			href="week_view.php" title="Settimana"><img
			src="%[IMAGE_GPATH]%ico/ico_calendar_settim_peq.gif" width="16"
			height="16" border="0" align="absmiddle"> <?=CALENDAR_WEEK?> </a></td>
		<td align="left" valign="middle" nowrap class="toolbar-calendar-td"><a
			href="month_view.php" title="Messe"><img
			src="%[IMAGE_GPATH]%ico/ico_calendar_messe_peq.gif" width="16"
			height="16" border="0" align="absmiddle"> <?=CALENDAR_MONTH?> </a></td>
		<td align="right" valign="middle" nowrap class="toolbar-calendar-data">
		<?=print_month($curmonth).' '.$curyear?></td>
	</tr>
</table>
</div>
		<? $month_res=make_calendar($curmonth,$curyear);


		?>
<table width="100%" border="0" cellpadding="2" cellspacing="1"
	class="calendar-mese-table-gran" id="calendar_gran">
	<tr>
		<th width="16%"><?=CALENDAR_DAY_0?></th>
		<th width="16%"><?=CALENDAR_DAY_1?></th>
		<th width="16%"><?=CALENDAR_DAY_2?></th>
		<th width="16%"><?=CALENDAR_DAY_3?></th>
		<th width="16%"><?=CALENDAR_DAY_4?></th>
		<th width="16%"><?=CALENDAR_DAY_5?> / <?=CALENDAR_DAY_6?></th>
	</tr>
	<?
	foreach ($month_res as $row)
	{
		print '<tr>';
			
		foreach ($row as $key => $bday)
		{

			list($day,$month)=explode("/",$bday);

			$scad=0;
			$scad2=0;
			$eve=0;
			$eve2=0;

			$appu=0;
			$output_scad=""   ;
			$output_app="";

			if ($day_app[$curyear.'-'.$month.'-'.$day][tot] > 0 || $day_app_ext[$curyear.'-'.$month.'-'.$day][tot] > 0 || $day_eve[$curyear.'-'.$month.'-'.$day][tot] > 0 || $day_eve_ext[$curyear.'-'.$month.'-'.$day][tot] > 0)
			{

				if (is_array($day_app[$curyear.'-'.$month.'-'.$day]))
				{
					foreach($day_app[$curyear.'-'.$month.'-'.$day] as $value)
					{
							
						if (isset($value[id]))
						{
							$scad++;
						}
					}
				}

				if (is_array($day_eve[$curyear.'-'.$month.'-'.$day]))
				{
					foreach($day_eve[$curyear.'-'.$month.'-'.$day] as $value)
					{
							
						if (isset($value[id]))
						{
							$eve++;
						}
					}
				}

				if (is_array($day_app_ext[$curyear.'-'.$month.'-'.$day]))
				{
					foreach($day_app_ext[$curyear.'-'.$month.'-'.$day] as $value2)
					{
							
						if (isset($value2[id]))
						{
							$scad2++;
						}
					}
				}
				if (is_array($day_eve_ext[$curyear.'-'.$month.'-'.$day]))
				{
					foreach($day_eve_ext[$curyear.'-'.$month.'-'.$day] as $value2)
					{
							
						if (isset($value2[id]))
						{
							$eve2++;
						}
					}
				}
					
				if ($scad ==1) { $output_scad='<p><img src="%[IMAGE_GPATH]%ico/ico_appunt_peq.gif" width="16" height="16" border="0" align="absmiddle" class="ico-01"> '.$scad.' '.CALENDAR_SCAD.'</p>';}
				elseif ($scad > 1) { $output_scad='<p><img src="%[IMAGE_GPATH]%ico/ico_appunt_peq.gif" width="16" height="16" border="0" align="absmiddle" class="ico-01"> '.$scad.' '.CALENDAR_SCADS.'</p>';}

				if ($scad2 ==1 ) { $output_scad.='<p><img src="%[IMAGE_GPATH]%ico/ico_appunt_peq.gif" width="16" height="16" border="0" align="absmiddle" class="ico-01"> '.$scad2.' '.CALENDAR_SCAD_COL.'</p>';}
				elseif ($scad2 > 1) { $output_scad.='<p><img src="%[IMAGE_GPATH]%ico/ico_appunt_peq.gif" width="16" height="16" border="0" align="absmiddle" class="ico-01"> '.$scad2.' '.CALENDAR_SCADS_COL.'</p>';}
					
				if ($eve ==1) { $output_scad.='<p><img src="%[IMAGE_GPATH]%ico/ico_appunt_peq.gif" width="16" height="16" border="0" align="absmiddle" class="ico-01"> '.$eve.' '.CALENDAR_APP.'</p>';}
				elseif ($eve > 1) { $output_scad.='<p><img src="%[IMAGE_GPATH]%ico/ico_appunt_peq.gif" width="16" height="16" border="0" align="absmiddle" class="ico-01"> '.$eve.' '.CALENDAR_APPS.'</p>';}

				if ($eve2 ==1 ) { $output_scad.='<p><img src="%[IMAGE_GPATH]%ico/ico_appunt_peq.gif" width="16" height="16" border="0" align="absmiddle" class="ico-01"> '.$eve2.' '.CALENDAR_APP_COL.'</p>';}
				elseif ($eve2 > 1) { $output_scad.='<p><img src="%[IMAGE_GPATH]%ico/ico_appunt_peq.gif" width="16" height="16" border="0" align="absmiddle" class="ico-01"> '.$eve2.' '.CALENDAR_APPS_COL.'</p>';}

			} else {$output_scad=""; $output_scad_ext="";}



			if($month != $curmonth){

				if ($key < 5){	print '<td width="16%" rowspan="2" align="left" valign="top">&nbsp;</td>';}
				elseif ($key==5) {
					print '<td width="16%" align="left" valign="top">&nbsp;</td></tr>';
				}
				elseif ($key==6) {
					print '<tr><td width="16%" align="left" valign="top">&nbsp;</td></tr>';

				}
			}
			elseif ($key < 5)
			{
				print '<td width="16%" rowspan="2" align="left" valign="top" class="cal-giorno-normal" onMouseOver="this.className=\'cal-giorno-normal-over\'" onMouseOut="this.className=\'cal-giorno-normal\'"><a href="day_view.php?day='.$day.'&month='.$month.'&year='.$curyear.'" class="'.(($day == $curday) ? 'cal-giorno-attuale-link' : 'cal-giorno-normal-link').'">'.$day.'</a><img src="%[IMAGE_GPATH]%px_4x4.gif" width="4" height="4" border="0" align="absmiddle">'.$output_scad.$output_app.'</td>';
			}
			elseif ($key==5)
			{
				print '<td width="16%" align="left" valign="top" class="cal-giorno-non-lav" onMouseOver="this.className=\'cal-giorno-non-lav-over\'" onMouseOut="this.className=\'cal-giorno-non-lav\'"><p><a href="day_view.php?day='.$day.'&month='.$month.'&year='.$curyear.'" class="'.(($day == $curday) ? 'cal-giorno-attuale-link' : 'cal-giorno-normal-link').'">'.$day.'</a><img src="%[IMAGE_GPATH]%px_4x4.gif" width="4" height="4" border="0" align="absmiddle">'.$output_scad.$output_app.'</td>
              </tr>';
			} elseif ($key==6)
			{  print'  <tr>
              <td width="16%" align="left" valign="top" class="cal-giorno-non-lav" onMouseOver="this.className=\'cal-giorno-non-lav-over\'" onMouseOut="this.className=\'cal-giorno-non-lav\'"><p><a href="day_view.php?day='.$day.'&month='.$month.'&year='.$curyear.'" class="'.(($day == $curday) ? 'cal-giorno-attuale-link' : 'cal-giorno-normal-link').'">'.$day.'</a><img src="%[IMAGE_GPATH]%px_4x4.gif" width="4" height="4" border="0" align="absmiddle"></p>'.$output_scad.$output_app.'</td></tr>';
			}
		}
	}
	?>

</table>
</div>
<!--FINE CALENDAR NORMAL-->

	<?
	$PAGE[PAGE_CONTENT] = ob_get_contents();
	ob_end_clean();
	final_render();

	?>
