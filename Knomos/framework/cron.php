<?
/**  
* @package Creative Web Framework  
* @copyright (C) 2000 - 2005 Creative Web Snc 
* @website http://www.creativeweb.it  
* @license http://www.gnu.org/copyleft/gpl.html GNU/GPL  
* Knomos & Creative Web Framework is Free Software  
*/

//
//  Creative Web FrameWork
//  Cron Manager
//
//  Related Files: cron_system_starter.php & cron_web_starter.php

//Rounf a value in scale 10 since max precision of cron engine is 10 minute
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


//Check if we have to start this functions.
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
//	$head = array('minuti','ore','giorni del mese','mesi','giorno settimana');
//	print "Data attuale: $c_h:$c_mi del $c_d/$c_m (giorno settimana: $c_w)<br><br>";
//	for ($i = 0; $i < 5; $i++) print $head[$i].': '.implode(',',$values[$i]).'<br>';

	//final check
	if (!in_array($c_mi,$values[0])) return false;
	if (!in_array($c_h ,$values[1])) return false;
	if (!in_array($c_d ,$values[2])) return false;
	if (!in_array($c_m ,$values[3])) return false;
	if (!in_array($c_w ,$values[4])) return false;
	return true;
}


//Scan cron database and execute functions
function cron_init($type)
{
	GLOBAL $DB,$CONF;
	
	$now=time();
	
	//REMEMBER Inserire check permessi sui moduli
	$rs=$DB->Execute("SELECT * FROM ".$CONF[cron_table]." WHERE locked= 0 AND type=$type");
	if ($rs) {
		$cron=$rs->GetArray();
	
		if (count($cron) > 0)
		{		
			foreach ($cron as $value) 
			{
				//Check if there's a timing match or if type is 1 or 2
				if (check_cron($value[timing],$now) || $type==1 || $type==2)
				{ 
					$function_part=explode("_",$value["function"]);
					require_once($CONF[path_base].$CONF[dir_modules].$function_part[0]."/cron.php");
					//Check if the param field contain a serialized array
					if (substr($value[param],0,4) == "ser:")
					{
						$param=unserialize(substr($value[param],3));
					} else {
						$param=$value[param];
					}
					//Lock cron to avoid overlap
					$lock=$DB->Execute("UPDATE ".$CONF[cron_table]." SET locked=1 WHERE id='".$value[id]."'");
					if(function_exists($value["function"])) { $value["function"]($param);}
					//Unlock Cron or delete it if onetime cron (type 2)
					if ($type != 2) 
					{
						$lock=$DB->Execute("UPDATE ".$CONF[cron_table]." SET locked=0 WHERE id='".$value[id]."'");
					 } elseif ($type==2) $lock=$DB->Execute("DELETE FROM ".$CONF[cron_table]." WHERE id='".$value[id]."'");
					 
				}
			}
		}
	}
}

function cron_init_web() {

	GLOBAL $DB,$CONF;

	//REMEMBER Inserire check permessi sui moduli
	$rs=$DB->Execute("SELECT * FROM ".$CONF[cron_table]." WHERE type=2");
	if ($rs) {

	$cron=$rs->GetArray();
	if (count($cron) > 0)
                {
			$html = '';

                        foreach ($cron as $value)
                        {
				$function_part=explode("_",$value["function"]);
                                require_once($CONF[path_base].$CONF[dir_modules].$function_part[0]."/cron.php");
				if (function_exists($value["function"])) { 
					$html .= $value['function']($value['param']); 
				}
			}
		}
	}	

	return $html;

}
?>
