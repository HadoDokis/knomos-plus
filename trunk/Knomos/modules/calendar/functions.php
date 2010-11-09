<?



// Get day of week
// Returns: 0 = Sunday, 1 = Monday... 6 = Saturday

function day_of_week($day,$month,$year) {
	return date('w',mktime(7, 30, 0, $month, $day, $year));
}


function get_day_month($day,$month,$year,$off = '+0',$printyear = 0) {

	$tst = strtotime("$off day",mktime(7, 30, 0, $month, $day, $year));
	return date($printyear ? 'd/m/Y' : 'd/m',$tst);
}

function make_calendar($month, $year) {

	for ($i = 31; $i >= 28; $i--) if (checkdate($month,$i,$year)) { $lastday = $i; break; }
	
	$fd = day_of_week(1,$month,$year);
	$paddingstart = $fd == 0 ? 6 : ($fd - 1);
	$totrows = ceil(($paddingstart + $lastday) / 7);
	$paddingend = ($totrows * 7) - ($paddingstart + $lastday);

	for ($i = 0; $i < $totrows; $i++) {

		for ($k = 0; $k < 7; $k++) {
		
			$curindex = $i * 7 + $k;

			if ($curindex < $paddingstart) {
				$cal[$i][] = get_day_month(1,$month,$year,'-'.($paddingstart - $curindex));
			} elseif ($curindex >= ($paddingstart + $lastday)) {
				$cal[$i][] = get_day_month($lastday,$month,$year,'+'.($curindex - $paddingstart - $lastday + 1));
			} else {
				$cal[$i][] = get_day_month($curindex - $paddingstart + 1 ,$month,$year);
			}
		}

	}

	return $cal;
}

function get_week_by_num($num,$year) {

	$w = day_of_week(1,1,$year);

	$start = mktime(7,30,0,1,1,$year);

	if ($w != 1) {
		$goback = ($w == 0) ? 6 : ($w - 1);
		$start = strtotime("-$goback day",$start);
	}

	for ($i=1; $i < $num; $i++) $start = strtotime("+7 day",$start);

	list ($day,$month,$year) = explode("/",date('j/n/Y',$start));
	for ($i=0; $i < 7; $i++) $dates[] = get_day_month($day,$month,$year,"+$i",1);
	return $dates;
}

function get_week_by_day($day,$month,$year) {

        $w = day_of_week($day,$month,$year);

        $start = mktime(7,30,0,$month,$day,$year);

        if ($w != 1) {
                $goback = ($w == 0) ? 6 : ($w - 1);
                $start = strtotime("-$goback day",$start);
        }

        list ($day,$month,$year) = explode("/",date('j/n/Y',$start));
        for ($i=0; $i < 7; $i++) $dates[] = get_day_month($day,$month,$year,"+$i",1);
        return $dates;
}


function prev_day($day,$month,$year) {

	$d = date('d/m/Y',strtotime('-1 day',mktime(7,30,0,$month,$day,$year)));
	list ($a , $b , $c) = explode("/",$d);
	return array(day => $a, month => $b, year => $c);
}

function next_day($day,$month,$year) {

	$d = date('d/m/Y',strtotime('+1 day',mktime(7,30,0,$month,$day,$year)));
        list ($a , $b , $c) = explode("/",$d);
        return array(day => $a, month => $b, year => $c);
}

function prev_month($month,$year) {

        $d = date('m/Y',strtotime('-1 month',mktime(7,30,0,$month,5,$year)));
        list ($a, $b) = explode("/",$d);
        return array(month => $a, year => $b);
}

function next_month($month,$year) {

        $d = date('m/Y',strtotime('+1 month',mktime(7,30,0,$month,5,$year)));
        list ($a, $b) = explode("/",$d);
        return array(month => $a, year => $b);
}

function howmany_days($month,$year) {

	for ($i = 31; $i >= 28; $i--) if (checkdate($month,$i,$year)) return $i;
}

function firstday_nextweek($day,$month,$year) {

	$w = day_of_week($day,$month,$year);	
	$add = ($w == 0) ? 1 : 8 - $w;
	$d = date('d/m/Y',strtotime("+$add day",mktime(7,30,0,$month,$day,$year)));
	list ($a , $b , $c) = explode("/",$d);
	return array(day => $a, month => $b, year => $c);
}


function firstday_prevweek($day,$month,$year) {

	$w = day_of_week($day,$month,$year);	
	$add = ($w == 0) ? 13 : 6 + $w;
	$d = date('d/m/Y',strtotime("-$add day",mktime(7,30,0,$month,$day,$year)));
	list ($a , $b , $c) = explode("/",$d);
	return array(day => $a, month => $b, year => $c);
}

function get_fasce($app, $numfasce) {

	$max = 0;
	$min = 9999999999;

	if (is_array($app)) {
		foreach ($app as $k => $v) {
			if ($v['tot'] < $min) $min = $v['tot'];
			if ($v['tot'] > $max) $max = $v['tot'];
		}

		$step = ($max - $min) / $numfasce;
		for ($i = 0; $i < $numfasce; $i++) $fasce[$i] = round($min + ($step * $i));
	} else {
		for ($i = 0; $i < $numfasce; $i++) $fasce[$i] = 999;
	}

	return $fasce;
}

$arr['17/10'][tot] = 31;
$arr['18/10'][tot] = 11;
$arr['19/10'][tot] = 6;
$arr['20/10'][tot] = 17;
$arr['21/10'][tot] = 12;
$arr['22/10'][tot] = 2;
$arr['23/10'][tot] = 4;
$arr['24/10'][tot] = 5;
$arr['25/10'][tot] = 11;
$arr['26/10'][tot] = 12;

//print_r(get_fasce($arr,4));

?>
