<?
$TIPI_PRATICHE = array(	'STRA' => 'tat_stragiudiziali',
			'COST' => 'tat_ccostituzionale',
			'CONC' => 'tat_conciliazione',
			'PRET' => 'tat_pretura',
			'TRIB' => 'tat_tribunale',
			'AMMN' => 'tat_amministrative',
			'C.A.' => 'tat_cappello',
			'C.C.' =>'tat_ccassazione'
		);

/////////////////////////////
function change_perc($perc) {

	return ($perc / 1000);
}

////////////////////////////////
function calc_perc($num,$perc) {

	return (($perc * 100) / $num);
}

//////////////////////////////
function get_last_fee($fees) {

	foreach ($fees as $f => $v)
		if (is_numeric($f)) $last = $v;
	return $last;
}

/////////////////////////////////////////////
function calc_criterio($min,$max,$criterio) {


	$res = $min;

	if (ereg("MAX/([1-9]{1})",$criterio,$pp)) {
		$num = $pp[1];
		$res = $max / $num;

	} elseif (ereg("MIN\*([1-9]{1})",$criterio,$pp)) {
		$num = $pp[1];
		$res = $min * $num;

	} elseif (ereg("MED\.([1-9]{1})",$criterio,$pp)) {
		$num = $pp[1];
		$step = ($max - $min) / 10;
		$res = $min + ($step * $num);
	}
	
	if ($res > $max) return $max;
	if ($res < $min) return $min;
	return $res;
}

///////////////////////////////////////////////////////
function calcola_I($valore_pratica,$fees,$min = true) {

	$val = 0;
	$prev_fino = 0;

	foreach ($fees as $f => $v) {

		if (is_numeric($f)) {
		
			$perc = $min ? change_perc($v['tao_min_perc']) : change_perc($v['tao_max_perc']);
			$step = $v['tao_fino'] - $prev_fino;
			$val += calc_perc($step,$perc); 

			if ((float)$f >= $valore_pratica) break;

			$prev_fino += $v['tao_fino'];
		}
	}

	return $val;
}


////////////////////////////////////////////////////////////////////
function calcola_onorario($arr,$criterio,$valore_pratica,$fees,$last='') {

	if (!isset($arr['tao_codice'])) return 0;
	$arr['tao_min_t'] = trim($arr['tao_min_t']);
	$arr['tao_max_t'] = trim($arr['tao_max_t']);

	$min = $max = 0;

	switch ($arr['tao_min_t']) {

		case 'C':	$min = $last['tao_min'];
				$prc = change_perc($arr['tao_min_perc']);
				$min += calc_perc($last['tao_min_perc'],$prc);
				break;

		case 'A':	/* ?? */
				break;

		case 'I':	$min = calcola_I($valore_pratica,$fees,true);
				break;

		case 'O':	/* ?? */
				break;

		default:	$min = $arr['tao_min'];
				
	}

	switch ($arr['tao_max_t']) {

                case 'C':	$max = $last['tao_max'];
                                $prc = change_perc($arr['tao_max_perc']);
                                $max += calc_perc($last['tao_max'],$prc);
                                break;

                case 'A':	/* ?? */
                                break;

                case 'I':	$max = calcola_I($valore_pratica,$fees,false);
                                break;

                case 'O':	/* ?? */
                                break;

		default:	$max = $arr['tao_max'];
				
        }

	$res = sprintf('%.2f',calc_criterio($min,$max,$criterio));
	return array($res,$min,$max);
}


function calcola ($codice_tariffa,$valore_pratica,$criterio,$operatore,$data,$quantita,$unita,$tempo,$tipo_pratica ) {

	GLOBAL $DB, $TIPI_PRATICHE, $CONF;

	// imposta array di ritorno
	$ret = array ( imp => 0, nonimp => 0, dir => 0, on => 0, onor => 0, onut => 0, on_min => 0, on_max => 0);

	// tipo pratica
	if (!in_array($tipo_pratica,array_keys($TIPI_PRATICHE))) return $ret;

	// imposta quantita
	if (!is_numeric($quantita)) $quantita = 1;

	// controlla data
	if (!ereg('^[0-9]{4}-[0-9]{1,2}-[0-9]{1,2}$',$data)) {
		$parts = split('(-|/)',$data);
		$data = (strlen($parts[0]) == 4) ? "$parts[0]-$parts[1]-$parts[2]" : "$parts[2]-$parts[1]-$parts[0]";
	}

	$q = mysql_query("SELECT * FROM INT_tariffe WHERE tatid='".mysql_escape_string($codice_tariffa)."'",$DB);
	if (!mysql_num_rows($q)) return 0;
	$TAR = mysql_fetch_assoc($q);

	// spese imponibili
	$ret['imp'] = $TAR['tat_imp'] > 0 ? $TAR['tat_imp'] : 0;
	if (strstr($TAR['tat_imp_molt'],'Q')) $ret['imp'] *= $quantita;

	// spese non imponibili
	$ret['nonimp'] = $TAR['tat_nonimp'] > 0 ? $TAR['tat_imp'] : 0;
	if (strstr($TAR['tat_nonimp_molt'],'Q')) $ret['nonimp'] *= $quantita;

	////////////////////////////////////////////////////// diritti
	if (strlen($TAR['tat_diritti'])) {
	
		$cod_diritti = $TAR['tat_diritti'];

		$q2 = mysql_query("SELECT * FROM INT_tariffe_diritti 
				  WHERE tad_codice = '".mysql_escape_string(trim($cod_diritti))."'
				  AND tad_inizio <= '$data'
				  AND (tad_fine >= '$data' OR tad_fine = '0000-00-00')
				  ORDER BY tad_tipo asc, tad_fino asc",$DB);

		if (mysql_num_rows($q2)) {

		
			$fees = array();

			while ($k = mysql_fetch_assoc($q2)) {

				if ($k['tad_tipo'] == 'num') {
					$fees[$k['tad_fino']] = strstr($k['tad_tipodiritto'],'Q') 
								? ($k['tad_diritto'] * $quantita) : $k['tad_diritto']; 
				} else {
					$fees[$k['tad_tipo']] = strstr($k['tad_tipodiritto'],'Q') 
								? ($k['tad_diritto'] * $quantita) :$k['tad_diritto'];
				}
			}

			if (is_numeric($valore_pratica)) {
				$found = false;
				foreach ($fees as $f => $v) 
					if (is_numeric($f))
						if ((float)$f >= $valore_pratica) { 
							$found = true; 
							$ret['dir'] = $v; 
							break;
						}

			// fall back su oltre e successivamente su indeterminato
			if (!$found && is_numeric($fees['oltre'])) { $ret['dir'] = $fees['oltre']; $found = true; }
			if (!$found && is_numeric($fees['ind']))   { $ret['dir'] = $fees['ind']; $found = true; }
			
			} elseif ($valore_pratica == 'ind') {

				$ret['dir'] = is_numeric($fees['ind']) ? $fees['ind'] : 0;

			} elseif ($valore_pratica == 'index') {

				$ret['dir'] = is_numeric($fees['index']) ? $fees['index'] : 0;

			} else {}
		}
	}

	///////////////////////////////////////////////////// onorari
	$fieldname = $TIPI_PRATICHE[$tipo_pratica];
	if (strlen(trim($TAR[$fieldname]))) {

		$cod_onorari = $TAR[$fieldname];

		$q3 = mysql_query("SELECT * FROM INT_tariffe_onorari
				  WHERE tao_codice = '".mysql_escape_string(trim($cod_onorari))."'
				  AND tao_inizio <= '$data'
				  AND (tao_fine >= '$data' OR tao_fine = '0000-00-00')
				  ORDER BY tao_tipo asc, tao_fino asc",$DB);

		
                if (mysql_num_rows($q3)) {


                        $fees = $onor = $last = array();

                        while ($k = mysql_fetch_assoc($q3)) {

                                if ($k['tao_tipo'] == 'num') {
                                        $fees[$k['tao_fino']] = $k;
                                } else {
                                        $fees[$k['tao_tipo']] = $k; 
                                }
                        }

			// ultima fee numerica
			$last = get_last_fee($fees);

                        if (is_numeric($valore_pratica)) {
                                $found = false;
                                foreach ($fees as $f => $v)
                                        if (is_numeric($f)) {
                                                if ((float)$f >= $valore_pratica) {
							if (!$found) $onor = $v;
                                                        $found = true;
                                                }
					}

                        // fall back su oltre e successivamente su indeterminato
                        if (!$found && is_array($fees['oltre'])) { $onor = $fees['oltre']; $found = true; }
                        if (!$found && is_array($fees['ind']))   { $onor = $fees['ind']; $found = true; }

                        } elseif ($valore_pratica == 'ind') {

                                $onor = is_array($fees['ind']) ? $fees['ind'] : array();

                        } elseif ($valore_pratica == 'index') {

                                $onor = is_array($fees['index']) ? $fees['index'] : array();

                        } else {}
                }

		list ($ret['on'],$ret['on_min'],$ret['on_max']) = calcola_onorario($onor,$criterio,$valore_pratica,$fees,$last);

	}

	//////////////////////////////////////////////////// onorari orari
	if (is_numeric($tempo) && is_numeric($operatore)) {

		$q4 = mysql_query("	SELECT onorario FROM users  
					WHERE id='".mysql_escape_string($operatore)."'",$DB);

		if (mysql_num_rows($q4)) {
			$l = mysql_fetch_assoc($q4);
			$ret['onor'] = sprintf('%.2f',($l['onorario'] / 60) * $tempo);
		}
	}


	return $ret;
}

?>
