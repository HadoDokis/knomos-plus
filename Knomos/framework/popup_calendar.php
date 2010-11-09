<?
include ("framework.php");

$darr = array(CALENDAR_DAY_6,CALENDAR_DAY_0,CALENDAR_DAY_1,CALENDAR_DAY_2,CALENDAR_DAY_3,CALENDAR_DAY_4,CALENDAR_DAY_5);
$dorder = array(1,2,3,4,5,6,0);
$marr = array('',CALENDAR_MONTH_1,CALENDAR_MONTH_2,CALENDAR_MONTH_3,CALENDAR_MONTH_4,CALENDAR_MONTH_5,CALENDAR_MONTH_6,CALENDAR_MONTH_7,CALENDAR_MONTH_8,CALENDAR_MONTH_9,CALENDAR_MONTH_10,CALENDAR_MONTH_11,CALENDAR_MONTH_12);

if (!$_GET[mon] || !$_GET[yea] || !$_GET[fname]) die();
$mon = intval($_GET[mon]);
$yea = intval($_GET[yea]);
$fname = stripslashes($_GET[fname]);

$wday = date('w',mktime(7,0,0,$mon,1,$yea));

switch ($wday) {
	case 0: $skip = 6; break;
	case 1: $skip = 0; break;
	case 2: $skip = 1; break;
	case 3: $skip = 2; break;
	case 4: $skip = 3; break;
	case 5: $skip = 4; break;
	case 6: $skip = 5; break;
}

$totdays=31;
if (!checkdate($mon,31,$yea)) $totdays = 30;
if (!checkdate($mon,30,$yea)) $totdays = 29;
if (!checkdate($mon,29,$yea)) $totdays = 28;

?>
<html>

<head>

<script language="javascript">

function choose(d,m,y) {
	window.opener.document.getElementsByName('<?=$fname?>[day]')[0].value = (d < 10) ? '0'+d : d;
	window.opener.document.getElementsByName('<?=$fname?>[month]')[0].value = (m < 10) ? '0'+m : m;
	window.opener.document.getElementsByName('<?=$fname?>[year]')[0].value = y;
	window.opener.update_day('<?=$fname?>');
	this.window.close();
}

</script>

<body style="margin: 0px">

<form style="display:inline;" action="popup_calendar.php" method="get">
<input type="hidden" name="fname" value="<?=$fname ?>">
<select name="mon" onChange="this.form.submit();">
<? for ($i=1; $i <= 12; $i++) print '<option value='.$i.' '.($i == $mon ? 'selected' : '').'>'.$marr[$i].'</option>'; ?>
</select>
<select name="yea" onChange="this.form.submit();">
<? for ($i=1990; $i <= 2050; $i++) print '<option value='.$i.' '.($i == $yea ? 'selected' : '').'>'.$i.'</option>'; ?>
</select>
<br>
<table cellspacing=1 cellpadding=2 border=0 width=100%>
<tr>
<? foreach ($dorder as $d) print '<td bgcolor="#dddddd" align="center"><b>'.substr(strtoupper($darr[$d]),0,3).'</b></td>'; ?>
</tr>
<?
for ($i = 0; $i < $skip + $totdays; $i++) {
	if (($i % 7) == 0) print '<tr>';
	$d = $i-$skip+1;
  	print ($i < $skip) 
		? 	'<td bgcolor="#eeeeee" align="center">&nbsp;</td>'
		:	'<td bgcolor="#eeeeee" align="center"><a href="javascript: choose('.$d.','.$mon.','.$yea.')">'.$d.'</a></td>';
	if (($i % 7) == 6) print '</tr>';
}
?>
</table>
</form>
</body>
</html>
