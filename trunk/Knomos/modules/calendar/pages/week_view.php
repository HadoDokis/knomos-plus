<?
include("../../../framework/framework.php");
include("../functions.php");
$module="calendar";

// Define page specific text for template
$PAGE[TXT_TITLE]=CALENDAR_WEEK_VIEW;
$PAGE[PAGE_INTITLE]=CALENDAR_WEEK_VIEW;
$PAGE[PAGE_PICTITLE]="ico_calendar_med.gif";

if ($CONF[UsaGcal]==true)
{
	$percorso=$CONF[gcal_url];
	$gcal="  &nbsp;&nbsp;<span > ( <a target=\"\" href=\"#\" onclick=\"javascript:ApriGcal('$percorso')\">".CALENDAR_GCAL."</a>  )";
}
else{$gcal="";}

//URLS FOR SCADENZE
$url1=make_url(Array ("scad_type"=>1),1);
$url2=make_url(Array ("scad_type"=>2),1);
$url3=make_url(Array ("scad_type"=>3),1);

if ($_GET[scad_type]==1){
	$PAGE[PAGE_INTITLE].=' &nbsp;&nbsp;<span> '.CALENDAR_APPS.' | <a href="'.$url2.'">'.CALENDAR_SCADS.'</a> | <a href="'.$url3.'">'.FW_ALL.'</a> </span>'.$gcal;
	$and_t=" AND type=0 ";
} elseif ($_GET[scad_type]==2){
	$PAGE[PAGE_INTITLE].=' &nbsp;&nbsp;<span><a href="'.$url1.'">'.CALENDAR_APPS.'</a> | '.CALENDAR_SCADS.' | <a href="'.$url3.'">'.FW_ALL.'</a></span>'.$gcal;
	$and_t=" AND type=1 ";
} else {
	$PAGE[PAGE_INTITLE].=' &nbsp;&nbsp;<span><a href="'.$url1.'">'.CALENDAR_APPS.'</a> | <a href="'.$url2.'">'.CALENDAR_SCADS.'</a> | '.FW_ALL.'</span>'.$gcal;
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
} else $curday=date("d");

if ($curmonth==date("m") && $curyear==date("Y")) $curdayo=(date("d"));

$dayofweek=get_week_by_day($curday,$curmonth,$curyear);
$weekstart=explode("/",$dayofweek[0]);
$weekend=explode("/",$dayofweek[6]);

$maxday=31;

$rs=$DB->Execute("SELECT * FROM $module WHERE  day <= '".$weekend[2]."-".$weekend[1]."-".$weekend[0]."' AND day >= '".$weekstart[2]."-".$weekstart[1]."-".$weekstart[0]."' $and_t AND  (operator LIKE '".$_SESSION[fw_userid].",,%' OR operator='".$_SESSION[fw_userid]."') ");


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



$rs2=$DB->Execute("SELECT * FROM $module WHERE id > 1 AND day <= '".$weekend[2]."-".$weekend[1]."-".$weekend[0]."' AND day >= '".$weekstart[2]."-".$weekstart[1]."-".$weekstart[0]."' $and_t AND (operator LIKE '%,,".$_SESSION[fw_userid].",,%' OR operator LIKE '%,,".$_SESSION[fw_userid]."')  order by time asc");

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
		<td align="left" valign="middle" nowrap width="1%"><select name="day"
			class="calendar-campo-01">
			<?
			for($ds=1;$ds<=31;$ds++)
			{
				if ($ds==$curday) {$sel="selected";} else $sel="";
				print "<option value=\"$ds\" $sel>$ds</option>";
			}
			?>
		</select> <select name="month" class="calendar-campo-01">
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
			class="ui-icon ui-icon-circle-triangle-e" align="middle"></td>
		</form>
		<td valign="middle">&nbsp;</td>
		<td width="10%" align="right" valign="middle" nowrap>
		<table>
			<tr>
				<td><a
					href="<? $prev=firstday_prevweek($curday,$curmonth,$curyear); print "week_view.php?day=".$prev[day]."&month=".$prev[month]."&year=".$prev[year];?>"
					class="calendar-link-nav"><span
					class="ui-icon ui-icon-circle-triangle-w" style="float: left;"></span></a></td>
				<td><a
					href="<? $prev=firstday_prevweek($curday,$curmonth,$curyear); print "week_view.php?day=".$prev[day]."&month=".$prev[month]."&year=".$prev[year];?>"
					class="calendar-link-nav"><?= CALENDAR_PREV_WEEK?></a></td>
			</tr>
		</table>
		</td>
		<td width="2%" align="center" valign="middle"><img
			src="%[IMAGE_GPATH]%sep_02.gif" width="2" height="16"></td>
		<td width="10%" align="right" valign="middle" nowrap>
		<table>
			<tr>
				<td><a
					href="<? $next=firstday_nextweek($curday,$curmonth,$curyear); print "week_view.php?day=".$next[day]."&month=".$next[month]."&year=".$next[year];?>"
					class="calendar-link-nav"><?=CALENDAR_NEXT_WEEK?></a></td>
				<td><a
					href="<? $next=firstday_nextweek($curday,$curmonth,$curyear); print "week_view.php?day=".$next[day]."&month=".$next[month]."&year=".$next[year];?>"
					class="calendar-link-nav"><span
					class="ui-icon ui-icon-circle-triangle-e" style=""></span></a></td>
			</tr>
		</table>
		</td>

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
		<?print $weekstart[0].' '.print_month($weekstart[1]).' - '.$weekend[0].' '.print_month($weekend[1])?></td>
	</tr>
</table>
</div>

<table width="100%" border="0" cellpadding="2" cellspacing="1"
	class="calendar-settim-table">

	<?

	foreach ($dayofweek as $offset => $row)
	{
		$thisday=explode("/",$row);
		$todayscad="";
		$todayapp="";
		$todayscad_ext="";
		$todayeve="";
		$todayeve_ext="";

		$todayview="";
		if ($day_app[$thisday[2].'-'.$thisday[1].'-'.$thisday[0]][tot] > 0 || $day_app_ext[$thisday[2].'-'.$thisday[1].'-'.$thisday[0]][tot] > 0 || $day_eve[$thisday[2].'-'.$thisday[1].'-'.$thisday[0]][tot] > 0 || $day_eve_ext[$thisday[2].'-'.$thisday[1].'-'.$thisday[0]][tot] > 0)
		{

			if (is_array($day_app[$thisday[2].'-'.$thisday[1].'-'.$thisday[0]]) )
			{

				foreach ($day_app[$thisday[2].'-'.$thisday[1].'-'.$thisday[0]] as $key => $todo)
				{

					if (is_int($key))
					{
						//Dati della pratica (incombenti)
						$qP="SELECT * FROM pratiche WHERE Id = ".$todo[ref_prat];
						$rsP=$DB->Execute($qP);
						$ThisPrat=$rsP->FetchRow();
						$p=$ThisPrat[pr_codice];
						$c=$ThisPrat[pr_comp_desc];
						$g=$ThisPrat[pr_giudice];
						$l=$ThisPrat[pr_luogo_uff_giud];

						$todayscad.= '<img src="%[IMAGE_GPATH]%ico/Task.png" width="16" height="16" border="0" align="absmiddle" class="ico-01"><a href="appunt_show.php?id='.$todo[id].'">'.$c." ".$l." ".$g." - ".$todo[title].'<b>'." (".$p.")".'</a></b><br>';
					}
				}
			}
			unset($key); unset($todo);
			if (is_array($day_eve[$thisday[2].'-'.$thisday[1].'-'.$thisday[0]]) )
			{
				foreach ($day_eve[$thisday[2].'-'.$thisday[1].'-'.$thisday[0]] as $key => $todo)
				{

					if (is_int($key))
					{
						//Dati della pratica (eventi)
						$qP="SELECT * FROM pratiche WHERE Id = ".$todo[ref_prat];
						$rsP=$DB->Execute($qP);
						$ThisPrat=$rsP->FetchRow();
						$p=$ThisPrat[pr_codice];
						$c=$ThisPrat[pr_comp_desc];
						$g=$ThisPrat[pr_giudice];
						$l=$ThisPrat[pr_luogo_uff_giud];
						$t1=$todo[time];
						$t=substr($t1,0,5);



						$todayeve.= '<img src="%[IMAGE_GPATH]%ico/ico_calendar_giorno_peq.gif" width="16" height="16" border="0" align="absmiddle" class="ico-01"><a href="appunt_show.php?id='.$todo[id].'">'.$t." ".$c." ".$l." ".$g." - ".$todo[title].'<b>'." (".$p.")".'</a></b><br>';
					}
				}
			}


			if (is_array($day_app_ext[$thisday[2].'-'.$thisday[1].'-'.$thisday[0]]) )
			{
				foreach ($day_app_ext[$thisday[2].'-'.$thisday[1].'-'.$thisday[0]] as $key2 => $todo2)
				{

					if (is_int($key2))
					{
						$oprs=explode(",,",$todo2[operator]);
						$rs_owner=$DB->Execute("SELECT codice FROM users WHERE id=".$oprs[0]);
						$thisowner=$rs_owner->FetchRow();
						$todayscad_ext.= '<img src="%[IMAGE_GPATH]%ico/ico_appunt_peq.gif" width="16" height="16" border="0" align="absmiddle" class="ico-01"><a href="appunt_show.php?id='.$todo2[id].'">'.$todo2[title].$Pippo.' (<b>'.$thisowner[codice].'</b>)</a><br>';
					}
				}
			}
			unset($key2); unset($todo2);

			if (is_array($day_eve_ext[$thisday[2].'-'.$thisday[1].'-'.$thisday[0]]) )
			{
				foreach ($day_eve_ext[$thisday[2].'-'.$thisday[1].'-'.$thisday[0]] as $key2 => $todo2)
				{
					if (is_int($key2))
					{
						$oprs=explode(",,",$todo2[operator]);
						$rs_owner=$DB->Execute("SELECT codice FROM users WHERE id=".$oprs[0]);
						$thisowner=$rs_owner->FetchRow();
						$todayeve_ext.= '<img src="%[IMAGE_GPATH]%ico/ico_appunt_peq.gif" width="16" height="16" border="0" align="absmiddle" class="ico-01"><a href="appunt_show.php?id='.$todo2[id].'">'.$todo2[title].' (<b>'.$thisowner[codice].'</b>)</a><br>';
					}
				}
			}


		}
			
			
		if ($todayscad != "") {
			$todayview= "<b>".CALENDAR_SCADS."</b><br>".$todayscad.'<br>';
			$more="<br>";
		}
		if ($todayeve != "") {
			$todayview.= $more."<b>".CALENDAR_APPS."</b><br>".$todayeve.'<br>';
			$more="<br>";
		}

		if ($todayscad_ext != "") {
			$todayview.= $more."<b>".CALENDAR_SCADS_COL."</b><br>".$todayscad_ext.'<br>';
			$more="<br>";
		}

		if ($todayeve_ext != "") {
			$todayview.= $more."<b>".CALENDAR_APPS_COL."</b><br>".$todayeve_ext.'<br>';
			$more="<br>";
		}
			
		elseif ($todayscad != "" && $todayscad_ext != "") {
			$todayview= '<b>'.CALENDAR_SCADS.'</b><br>'.$todayscad.'<br><b>'.CALENDAR_APPS_COL.'</b><br>'.$todayscad_ext;
		} elseif ($todayscad == "" && $todayscad_ext != "") {
			$todayview= '<b>'.CALENDAR_APPS_COL.'</b><br>'.$todayscad_ext;
		}

			
		if ($offset < 5) {
			if (($offset%2)==0) {print '<tr align="left" valign="top" >';}
			print '<td  '.(($offset == 4) ? 'rowspan="2"' : '').' width="50%" align="left" valign="top" class="cal-giorno-normal" onMouseOver="this.className=\'cal-giorno-normal-over\'" onMouseOut="this.className=\'cal-giorno-normal\'"><p><a href="day_view.php?day='.$thisday[0].'&month='.$thisday[1].'&year='.$thisday[2].'" class="'.(($thisday[0] == $curdayo) ? 'cal-giorno-attuale-link' : 'cal-giorno-normal-link').'">'.print_day($offset).' '.$thisday[0].'</a><img src="images/px_4x4.gif" width="4" height="4" border="0" align="absmiddle"></p>'.$todayview.'&nbsp;</td>';
			if (($offset%2)==1)	{print '</tr>';	}

		}
		elseif ($offset==5){
			print '<td width="50%" align="left" valign="top" class="cal-giorno-non-lav" onMouseOver="this.className=\'cal-giorno-non-lav-over\'" onMouseOut="this.className=\'cal-giorno-non-lav\'"><p><a href="day_view.php?day='.$thisday[0].'&month='.$thisday[1].'&year='.$thisday[2].'" class="'.(($thisday[0] == $curdayo) ? 'cal-giorno-attuale-link' : 'cal-giorno-normal-link').'">'.print_day($offset).' '.$thisday[0].'</a><img src="images/px_4x4.gif" width="4" height="4" border="0" align="absmiddle"></p>'.$todayview.'&nbsp;</td></tr>';

		}
		elseif ($offset==6){
			print '<tr><td width="50%" align="left" valign="top" class="cal-giorno-non-lav" onMouseOver="this.className=\'cal-giorno-non-lav-over\'" onMouseOut="this.className=\'cal-giorno-non-lav\'"><p><a href="day_view.php?day='.$thisday[0].'&month='.$thisday[1].'&year='.$thisday[2].'" class="'.(($thisday[0] == $curdayo) ? 'cal-giorno-attuale-link' : 'cal-giorno-normal-link').'">'.print_day($offset).' '.$thisday[0].'</a><img src="images/px_4x4.gif" width="4" height="4" border="0" align="absmiddle"></p>'.$todayview.'&nbsp;</td></tr>';

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
