<?
ob_start();
$unlock=1;
include ("../../../framework/framework.php");
include ("../functions.php");
$module="calendar";
if ($_SESSION[mobile]==true){
	template_init(6); //mobile=6 - normale=2
} 
 else {
	template_init(); //mobile=6 - normale=2
}
	
//template_init(); //mobile=6 - desktop =()


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
//, pratiche p  AND m.ref_prat=p.id               type=0 AND
$rs=$DB->Execute(perm_sql_read("SELECT * FROM $module m WHERE   day <= '$curyear-$curmonth-$maxday' AND day >= '$curyear-$curmonth-01' AND (operator LIKE '".$_SESSION[fw_userid].",,%' OR operator ='".$_SESSION[fw_userid]."')",$module));

$cnt=0;
while (!$rs->EOF)
{
	
	$app=$rs->FetchRow();
	$day_app[$app[day]][$cnt]=$app;
	$day_app[$app[day]][tot]++;
	$cnt++;
}

$null = ob_get_contents();
ob_end_clean();
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
  eval(targ+".location='"+selObj.options[selObj.selectedIndex].value+"';");
  if (restore) selObj.selectedIndex=0;
}

//-->
</script>
</head>

<body class="calendar-col-body">
<table cellpadding="0" cellspacing="0" id="calendar">
  <tr>
    <td>
      <form action="" method="post" name="calendar_form" id="calendar_form">
       <div id="phplmseethrough" style="display: inline;"> 
       <select name="month" onChange="MM_jumpMenu('self',this,0)">
<?
for($ms=1;$ms<=12;$ms++)
{
	if ($ms==$curmonth) {$sel="selected";} else $sel="";
	print "<option value=\"".$CONF[url_base].$CONF[dir_modules].$module."/pages/calendar_iframe.php?lt=".$_GET[lt]."&month=$ms\" $sel>".print_month($ms)."</option>";
}
?>

</select>
<select name="year" onChange="MM_jumpMenu('self',this,0)">
<?
for($ys=($curyear-5);$ys<($curyear+5);$ys++)
{
	if ($ys==$curyear) {$sel="selected";} else $sel="";
	print "<option value=\"".$CONF[url_base].$CONF[dir_modules].$module."/pages/calendar_iframe.php?lt=".$_GET[lt]."&year=$ys\" $sel>$ys</option>";
}
?>
</select></div>
        <table  border="0" cellpadding="0" cellspacing="2" id="calendar_table">
          <tr align="center" valign="middle">
            <th width="14%"><?=strtoupper(substr(CALENDAR_DAY_0,0,1))?></th>
            <th width="14%"><?=strtoupper(substr(CALENDAR_DAY_1,0,1))?></th>
            <th width="14%"><?=strtoupper(substr(CALENDAR_DAY_2,0,1))?></th>
            <th width="14%"><?=strtoupper(substr(CALENDAR_DAY_3,0,1))?></th>
            <th width="14%"><?=strtoupper(substr(CALENDAR_DAY_4,0,1))?></th>
            <th width="14%"><?=strtoupper(substr(CALENDAR_DAY_5,0,1))?></th>
            <th width="14%"><?=strtoupper(substr(CALENDAR_DAY_6,0,1))?></th>
          </tr>
          
<? $month_res=make_calendar($curmonth,$curyear);
	 //$fasce= get_fasce($day_app, 2);
	

            foreach ($month_res as $row)
            {
	            print '<tr align="center" valign="middle">';
	            
	            foreach ($row as $key => $bday)
		     			{
		      
        	      list($day,$month)=explode("/",$bday);      
        	      
        	      if ($month != $curmonth)
        	      {     
        	      	print '<td width="14%">&nbsp;</td>';
        	      } else{

        	      	if ($curday==$day)
        	      	{ $class='cal-giorno-attuale';}
									elseif ($day_app[$curyear.'-'.$month.'-'.$day][tot] > 0)
									{
										$class='cal-giorno-appunt';
									}									
									elseif ($key > 4)
									{
										$class='cal-giorno-non-lav';
									}
									
									else 	$class='cal-giorno-normal';

        	      	if ($_GET[lt]==0)
        	      	{
        	      		$link ='<a href="'.$CONF[url_base].$CONF[dir_modules].$module.'/pages/day_view.php?month='.$curmonth.'&year='.$curyear.'&day='.$day.'" class="'.$class.'" target="_parent">';
        	      	} elseif ($_GET[lt]==1)
        	      	{
        	      		$link ='<a href="javascript:showAPPUNT(\'appunt_giorno\',\''.$CONF[url_base].$CONF[dir_modules].$module.'/pages/day_view_iframe.php?month='.$curmonth.'&year='.$curyear.'&day='.$day.'\',\''.$day.' '.print_month($curmonth).' '.$curyear.'\',\''.$CONF[url_base].$CONF[dir_template].$CUR_TEMPLATE[name].'/images/ico/ico_close_appunt_peq.gif\')" class="'.$class.'" target="_parent">';
        	      	}
										
									print '<td width="14%">'.$link.$day.'</a></td>';
										
								}
							}
						print '</tr>';
						}
?>

        </table>
    </form></td>
  </tr>
</table>
</body>
</html>
