<?
include("../../../framework/framework.php");
include("../functions.php");
$module="calendar";

// Define page specific text for template
$PAGE[TXT_TITLE]=CALENDAR_DAY_VIEW;
$PAGE[PAGE_INTITLE]=CALENDAR_DAY_VIEW;
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



$rs=$DB->Execute("SELECT * FROM $module WHERE day = '$curyear-$curmonth-$curday' $and_t AND  (operator LIKE '".$_SESSION[fw_userid].",,%' OR operator='".$_SESSION[fw_userid]."') order by time asc");

$rsP=$DB->Execute("SELECT * FROM $module WHERE day = '$curyear-$curmonth-$curday' $and_t AND  (operator LIKE '".$_SESSION[fw_userid].",,%' OR operator='".$_SESSION[fw_userid]."') order by time asc");


$maxday=howmany_days($curmonth,$curyear);

$cnt=0;
while (!$rs->EOF)
{

	$app=$rs->FetchRow();
	list($hour,$min,$sec)=explode(":",$app["time"]);
	if ($app[type]==1)
	{
		$day_app[$hour][$min][$cnt]=$app;
		$day_app[$hour][$min][tot]++;
	} else {
		$day_eve[$hour][$min][$cnt]=$app;
		$day_eve[$hour][$min][tot]++;
	}

	$cnt++;

}


$rs2=$DB->Execute("SELECT * FROM $module WHERE id > 1 AND day = '$curyear-$curmonth-$curday' $and_t AND (operator LIKE '%,,".$_SESSION[fw_userid].",,%' OR operator LIKE '%,,".$_SESSION[fw_userid]."')  order by time asc");

$cnt2=0;
while (!$rs2->EOF)
{

	$app2=$rs2->FetchRow();
	list($hour,$min,$sec)=explode(":",$app2["time"]);
	if ($app2[type]==1)
	{
		$day_app_ext[$hour][$min][$cnt2]=$app2;
		$day_app_ext[$hour][$min][tot]++;
	} else {
		$day_eve_ext[$hour][$min][$cnt2]=$app2;
		$day_eve_ext[$hour][$min][tot]++;
	}



	$cnt2++;

}

?>

<!--INI CALENDAR NORMAL-->
<div class="calendar-normal">

<form name="calendar" method="get" action="#">
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
		<td valign="middle">&nbsp;</td>
		<td width="10%" align="right" valign="middle" nowrap>
		<table>
			<tr>
				<td><a
					href="<? $prev=prev_day($curday,$curmonth,$curyear); print "day_view.php?day=".$prev[day]."&month=".$prev[month]."&year=".$prev[year];?>"
					class="calendar-link-nav"><span
					class="ui-icon ui-icon-circle-triangle-w" style="float: left;"></span></a></td>
				<td><a
					href="<? $prev=prev_day($curday,$curmonth,$curyear); print "day_view.php?day=".$prev[day]."&month=".$prev[month]."&year=".$prev[year];?>"
					class="calendar-link-nav"><?= CALENDAR_PREV_DAY?></a></td>
			</tr>
		</table>
		</td>
		<td width="2%" align="center" valign="middle"><img
			src="%[IMAGE_GPATH]%sep_02.gif" width="2" height="16"></td>
		<td width="10%" align="right" valign="middle" nowrap>
		<table>
			<tr>
				<td><a
					href="<? $next=next_day($curday,$curmonth,$curyear); print "day_view.php?day=".$next[day]."&month=".$next[month]."&year=".$next[year];?>"
					class="calendar-link-nav"><?=CALENDAR_NEXT_DAY?></a></td>
				<td><a
					href="<? $next=next_day($curday,$curmonth,$curyear); print "day_view.php?day=".$next[day]."&month=".$next[month]."&year=".$next[year];?>"
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
		<?=$curday.' '.print_month($curmonth).' '.$curyear?></td>
	</tr>
</table>
</div>

<table border="0" cellpadding="2" cellspacing="1"
	class="calendar-normal-giorno-table">

	<?
	for ($ch=0;$ch < 24;$ch++)
	{
		if (strlen($ch)==1) {$chok='0'.$ch;} else $chok=$ch;
		for ($cm=0;$cm < 60; $cm++)
		{
			$res="";
			$res2="";
			$res_eve="";
			$res2_eve="";

			if (strlen($cm)==1) {$cmok='0'.$cm;} else $cmok=$cm;

			if ($day_app[$chok][$cmok][tot] > 0 || $day_app_ext[$chok][$cmok][tot] > 0 || $day_eve[$chok][$cmok][tot] > 0 || $day_eve_ext[$chok][$cmok][tot] > 0)
			{
				if (is_array($day_app[$chok][$cmok]))
				{
					foreach ($day_app[$chok][$cmok] as $k => $appunt)
					{ if (is_int($k)) {

						//Dati della pratica (incombenti)
						$qP="SELECT * FROM pratiche WHERE Id = ".$appunt[ref_prat];
						$rsP=$DB->Execute($qP);
						$ThisPrat=$rsP->FetchRow();
						$p=$ThisPrat[pr_codice];
						$c=$ThisPrat[pr_comp_desc];
						$g=$ThisPrat[pr_giudice];
						$l=$ThisPrat[pr_luogo_uff_giud];

						$res .= '<img src="%[IMAGE_GPATH]%ico/Task.png" width="16" height="16" border="0" align="absmiddle" class="ico-01"> <a href="appunt_show.php?id='.$appunt[id].'">'.$c." ".$l." ".$g." - ".$appunt[title].'<b>'." (".$p.")".'</a></b><br>';
					}
					}
				}
					
				unset ($k); unset ($appunt);

				if (is_array($day_eve[$chok][$cmok]))
				{
					foreach ($day_eve[$chok][$cmok] as $k => $appunt)
					{ if (is_int($k)) {

						//Dati della pratica (eventi)
						$qP="SELECT * FROM pratiche WHERE Id = ".$appunt[ref_prat];
						$rsP=$DB->Execute($qP);
						$ThisPrat=$rsP->FetchRow();
						$p=$ThisPrat[pr_codice];
						$c=$ThisPrat[pr_comp_desc];
						$g=$ThisPrat[pr_giudice];
						$l=$ThisPrat[pr_luogo_uff_giud];
						$t1=$todo[time];


						$res_eve .= '<img src="%[IMAGE_GPATH]%ico/ico_calendar_giorno_peq.gif" width="16" height="16" border="0" align="absmiddle" class="ico-01"> <a href="appunt_show.php?id='.$appunt[id].'">'.$c." ".$l." ".$g." ".$appunt[title].'<b>'." (".$p.")".'</a></b><br>';
					}
					}
				}



				if (is_array($day_app_ext[$chok][$cmok]))
				{

					foreach ($day_app_ext[$chok][$cmok] as $k2 => $appunt_ext)
					{ if (is_int($k2)) {
							
						$oprs=explode(",,",$appunt_ext[operator]);
						$rs_owner=$DB->Execute("SELECT codice FROM users WHERE id=".$oprs[0]);
						$thisowner=$rs_owner->FetchRow();

						$res2 .= '<img src="%[IMAGE_GPATH]%ico/ico_pratiche_peq.gif" width="16" height="16" border="0" align="absmiddle" class="ico-01"> <a href="appunt_show.php?id='.$appunt_ext[id].'">'.$appunt_ext[title].' (<b>'.$thisowner[codice].'</b>)</a><br>';
					}
					}
				}
					
				unset($k2); unset($appunt_ext);
				if (is_array($day_eve_ext[$chok][$cmok]))
				{

					foreach ($day_eve_ext[$chok][$cmok] as $k2 => $appunt_ext)
					{ if (is_int($k2)) {
							
						$oprs=explode(",,",$appunt_ext[operator]);
						$rs_owner=$DB->Execute("SELECT codice FROM users WHERE id=".$oprs[0]);
						$thisowner=$rs_owner->FetchRow();
						$res2_eve .= '<img src="%[IMAGE_GPATH]%ico/ico_pratiche_peq.gif" width="16" height="16" border="0" align="absmiddle" class="ico-01"> <a href="appunt_show.php?id='.$appunt_ext[id].'">'.$appunt_ext[title].' (<b>'.$thisowner[codice].'</b>)</a><br>';
					}
					}
				}



			}

			$ext_app="";
			$more="";
			if ($res != "") {
				$ext_app= "<b>".CALENDAR_SCADS."</b><br>".$res.'<br>';
				$more="<br>";
			}
			if ($res_eve != "") {
				$ext_app.= $more."<b>".CALENDAR_APPS."</b><br>".$res_eve.'<br>';
				$more="<br>";
			}

			if ($res2 != "") {
				$ext_app.= $more."<b>".CALENDAR_SCADS_COL."</b><br>".$res2.'<br>';
				$more="<br>";
			}

			if ($res2_eve != "") {
				$ext_app.= $more."<b>".CALENDAR_APPS_COL."</b><br>".$res2_eve.'<br>';
				$more="<br>";
			}


			if ($ext_app=="" && $cmok=="00")
			{
				print '<tr class="riga-cal-01" onMouseOver="this.className=\'riga-cal-01-over\'" onMouseOut="this.className=\'riga-cal-01\'">
							  <th width="4%" align="left" valign="top" nowrap><a href="new_app.php?day='.$curday.'&month='.$curmonth.'&year='.$curyear.'&min=0&hour='.$chok.'" class="ora-cal-giorno-link">'.$chok.'.00 h </a></th>
							  <td align="left" valign="top">&nbsp;</td>
			   		    </tr>';

			} elseif ($ext_app!="" && $cmok=="00") {
				print '<tr>
			  				<th width="4%" align="left" valign="top" nowrap class="riga-appunt-01"><a href="new_app.php?day='.$curday.'&month='.$curmonth.'&year='.$curyear.'&min=0&hour='.$chok.'" class="ora-link-appunt">'.$chok.'.00 h </a></th>
			  				<td align="left" valign="top" class="riga-appunt-01-sub" onMouseOver="this.className=\'riga-appunt-over\'" onMouseOut="this.className=\'riga-appunt-01-sub\'">'.$ext_app.'</td>
			  				</tr>';

			} elseif ($ext_app!="" && $cmok!="00") {
				print '<tr>
			  				<th width="4%" align="left" valign="top" nowrap class="riga-appunt-03">'.$ch.'.'.$cmok.' h </th>
			  				<td align="left" valign="top" class="riga-appunt-03-sub" onMouseOver="this.className=\'riga-appunt-over\'" onMouseOut="this.className=\'riga-appunt-03-sub\'">'.$ext_app.'</td>
			  				</tr>';
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
