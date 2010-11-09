<?

function roundten($val) {

	return ($val - ($val % 10));
}

function range_to_array($range,$min=0) {

	$range = trim($range);
	$arr = array();

	if (ereg('^[0-9]+$',$range)) return $min ? array((int)roundten($range)) : array((int)$range);
	if (!ereg('([0-9]+)-([0-9]+)',$range,$pp)) return array();
	$sta = (int)$pp[1];
	$end = (int)$pp[2];
	if ($end < $sta) { $end = $t; $end = $sta; $sta = $t; }
	for ($i = $sta; $i <= $end; $i++) $arr[] = $min ? roundten($i) : $i;
	return $arr;

}

function check_cron($cronstring,$current_time) {

	$cron_parts = split(' +',$cronstring);
	if (count($cron_parts) != 5) return 0;	// wrong syntax for cron string
	
	// equivalent for * in various fields
	for ($i=0; $i <= 59; $i += 10) $wild[0][] = $i;
	for ($i=0; $i <= 23; $i++) $wild[1][] = $i;
	for ($i=1; $i <= 31; $i++) $wild[2][] = $i;
	for ($i=1; $i <= 12; $i++) $wild[3][] = $i;
	for ($i=0; $i <=  7; $i++) $wild[4][] = $i;

	$t = getdate($current_time);
	$c_mi = $t['minutes'];
	$c_h = $t['hours'];
	$c_d = $t['mday'];
	$c_m = $t['mon'];
	$c_w = $t['wday'];

	// round up to 10 minutes intervals
	$c_mi = roundten($c_mi);

	// translate wildcards to actual values
	for ($i = 0; $i < count($cron_parts); $i++) {

		$part = trim($cron_parts[$i]);
		$values[$i] = array();

		if (strstr($part,'*')) {
			$values[$i] = $wild[$i];
		} else {
			$fields = explode(',',$part);
			foreach ($fields as $f) $values[$i] = array_unique(array_merge($values[$i],range_to_array($f,$i==0)));
		}
	}

	// fix day of week (crontab allows 0 or 7 for sunday)
	if (in_array(7,$values[4]) && !in_array(0,$values[4])) $values[4][] = 0;

	//DEBUG
	$head = array('minuti','ore','giorni del mese','mesi','giorno settimana');
	print "Data attuale: $c_h:$c_mi del $c_d/$c_m (giorno settimana: $c_w)<br><br>";
	for ($i = 0; $i < 5; $i++) print $head[$i].': '.implode(',',$values[$i]).'<br>';

	//final check
	if (!in_array($c_mi,$values[0])) return false;
	if (!in_array($c_h ,$values[1])) return false;
	if (!in_array($c_d ,$values[2])) return false;
	if (!in_array($c_m ,$values[3])) return false;
	if (!in_array($c_w ,$values[4])) return false;
	return true;
}

print '<br>Eseguire? '.(check_cron('9,33 15-17 15-20 * *',time()) ? 'SI' : 'NO');

?>
