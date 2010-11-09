<?
$TIPI_PRATICHE = array(	'STRA' => 'tat_stragiudiziali',
			'COST' => 'tat_ccostituzionale',
			'CONC' => 'tat_conciliazione',
			'PRET' => 'tat_pretura',
			'GDPA' => 'tat_pretura',
			'TRIB' => 'tat_tribunale',
			'AMMN' => 'tat_amministrative',
			'C.A.' => 'tat_cappello',
			'C.C.' => 'tat_ccassazione'
		);

/////////////////////////////
function change_perc($perc) {

	return ($perc / 1000);
}

////////////////////////////////
function calc_perc($num,$perc) {

	//$res = (($perc * $num) / 100);
	$res = $perc * $num;
	return $res;
}

////////////////////////////////
function add_perc($num,$perc) {

	if ($perc == 0) return $num;
	$absperc = abs($perc);
        $res = (($absperc * $num) / 100);
        return ($perc > 0) ? ($num + $res) : ($num - $res);
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
	
	$res = sprintf('%.2f',$res);

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
		
			$last_step = ((float)$f >= $valore_pratica) ? true : false;

			$perc = $min ? change_perc($v['tao_min_perc']) : change_perc($v['tao_max_perc']);
			$ubound = $last_step ? $valore_pratica : $v['tao_fino'];
			$step = $ubound - $prev_fino;
			$val += calc_perc($step,$perc); 

			//print "perc = $perc, ubound = $ubound, step = $step, val = $val\n";
			if ($last_step) break;

			$prev_fino += $v['tao_fino'];
		}
	}
	return sprintf('%.2f',$val);
}


/////////////////////////////////////////////////////////////////////////////////
function calcola_onorario($arr,$criterio,$valore_pratica,$fees,$hours,$last='') {

	if (!isset($arr['tao_codice'])) return array(0,0,0);
	$arr['tao_min_t'] = trim($arr['tao_min_t']);
	$arr['tao_max_t'] = trim($arr['tao_max_t']);

	$min = $max = 0;

	switch ($arr['tao_min_t']) {

		case 'C':	/* $min = $last['tao_min'];
				$prc = change_perc($arr['tao_min_perc']);
				$min += calc_perc($last['tao_min_perc'],$prc);
				*/
				$prc = change_perc($arr['tao_min_perc']);
				$min = calc_perc($valore_pratica,$prc);
				break;

		case 'A':	if ($arr['tao_min'] > 0) {
					$min = $arr['tao_min'];
				} else {
                                	$prc = change_perc($arr['tao_min_perc']);
                                	$min += calc_perc($valore_pratica,$prc);
				}
				break;

		case 'I':	$min = calcola_I($valore_pratica,$fees,true);
				break;

		case 'O':	$min = $arr['tao_min'];
                                $prc = change_perc($arr['tao_min_perc']);
                                $min += calc_perc($valore_pratica,$prc);
				break;

		case 'Z':	$min = $arr['tao_min'];
				$min *= $hours;
				break;

		default:	$min = $arr['tao_min'];
				
	}

	switch ($arr['tao_max_t']) {

                case 'C':	/* $max = $last['tao_max'];
                                $prc = change_perc($arr['tao_max_perc']);
                                $max += calc_perc($last['tao_max'],$prc);
				*/
				$prc = change_perc($arr['tao_max_perc']);
				$max = calc_perc($valore_pratica,$prc);
                                break;

                case 'A':	if ($arr['tao_max'] > 0) {
                                        $max = $arr['tao_max'];
                                } else {
                                        $prc = change_perc($arr['tao_max_perc']);
                                        $max += calc_perc($valore_pratica,$prc);
                                }
                                break;

                case 'I':	$max = calcola_I($valore_pratica,$fees,false);
                                break;

                case 'O':	$max = $arr['tao_max'];
				$prc = change_perc($arr['tao_max_perc']);
				$max += calc_perc($valore_pratica,$prc);
                                break;

		case 'Z':	$max = $arr['tao_max'];
				$max *= $hours;
				break;

		default:	$max = $arr['tao_max'];
				
        }

	$min = sprintf('%.2f',$min);
        $max = sprintf('%.2f',$max);
	$res = sprintf('%.2f',calc_criterio($min,$max,$criterio));
	return array($res,$min,$max);
}

//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
function calcola ($codice_tariffa,$valore_pratica,$criterio,$operatore,$operatore_id,$data,$quantita,$unita,$tempo,$tipo_pratica,$id_pratica = 0 ) {

	GLOBAL $TIPI_PRATICHE, $CONF;

	// imposta array di ritorno
	$ret = array ( imp => 0, nonimp => 0, dir => 0, on => 0, onor => 0, onut => 0, on_min => 0, on_max => 0);

	if ($valore_pratica == -1) $valore_pratica = 'ind';
	if ($valore_pratica == -2) $valore_pratica = 'index';

	// tipo pratica
	if (!in_array($tipo_pratica,array_keys($TIPI_PRATICHE))) return $ret;

	// imposta quantita
	if (!is_numeric($quantita)) $quantita = 1;

	// controlla data
	if (!ereg('^[0-9]{4}-[0-9]{1,2}-[0-9]{1,2}$',$data)) {
		$parts = split('(-|/)',$data);
		$data = (strlen($parts[0]) == 4) ? "$parts[0]-$parts[1]-$parts[2]" : "$parts[2]-$parts[1]-$parts[0]";
	}

	$q = mysql_query("SELECT * FROM INT_tariffe WHERE tatid='".mysql_escape_string($codice_tariffa)."'");
	if (!mysql_num_rows($q)) return $ret;
	$TAR = mysql_fetch_assoc($q);

	// dividi la quantità per l'unità di misura, se specificata
	$qt = $unita ? ceil($quantita / $unita) : $quantita;

	// arrotonda il tempo a multipli di 60 minuti (per eccesso)
	$time_hours = ($tempo) ? (floor($tempo / 60) + 1) : 1;

	// spese imponibili
	$ret['imp'] = $TAR['tat_imp'] > 0 ? $TAR['tat_imp'] : 0;
	if (strstr($TAR['tat_imp_molt'],'Q')) $ret['imp'] *= $qt;

	// spese non imponibili
	$ret['nonimp'] = $TAR['tat_nonimp'] > 0 ? $TAR['tat_nonimp'] : 0;
	if (strstr($TAR['tat_nonimp_molt'],'Q')) $ret['nonimp'] *= $qt;

	////////////////////////////////////////////////////// diritti
	if (strlen($TAR['tat_diritti'])) {
	
		$cod_diritti = $TAR['tat_diritti'];

		$q2 = mysql_query("SELECT * FROM INT_tariffe_diritti 
				  WHERE tad_codice = '".mysql_escape_string(trim($cod_diritti))."'
				  AND tad_inizio <= '$data'
				  AND (tad_fine >= '$data' OR tad_fine = '0000-00-00')
				  ORDER BY tad_tipo asc, tad_fino asc");

		if (mysql_num_rows($q2)) {

		
			$fees = array();

			while ($k = mysql_fetch_assoc($q2)) {

				if ($k['tad_tipo'] == 'num') {
					if (stristr($k['tad_tipodiritto'],'Q')) {
						$fees[$k['tad_fino']] = ($k['tad_diritto'] * $quantita);
					} elseif (stristr($k['tad_tipodiritto'],'Z')) {
						$fees[$k['tad_fino']] = ($k['tad_diritto'] * $qt);	
					} else {
						$fees[$k['tad_fino']] = $k['tad_diritto'];
					}

					/*
					$fees[$k['tad_fino']] = strstr($k['tad_tipodiritto'],'Q') 
								? ($k['tad_diritto'] * $quantita) : $k['tad_diritto']; 
					*/
				} else {

					if (stristr($k['tad_tipodiritto'],'Q')) {
						$fees[$k['tad_tipo']] = ($k['tad_diritto'] * $quantita);
					} elseif (stristr($k['tad_tipodiritto'],'Z')) {
						$fees[$k['tad_tipo']] = ($k['tad_diritto'] * $qt);
					} else {
						$fees[$k['tad_tipo']] = $k['tad_diritto'];
					}

					/*
					$fees[$k['tad_tipo']] = strstr($k['tad_tipodiritto'],'Q') 
								? ($k['tad_diritto'] * $quantita) :$k['tad_diritto'];
					*/
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

		$ret['dir'] = sprintf('%.2f',$ret['dir']);
	}

	///////////////////////////////////////////////////// onorari
	$fieldname = $TIPI_PRATICHE[$tipo_pratica];
	if (strlen(trim($TAR[$fieldname]))) {

		$cod_onorari = $TAR[$fieldname];

		$q3 = mysql_query("SELECT * FROM INT_tariffe_onorari
				  WHERE tao_codice = '".mysql_escape_string(trim($cod_onorari))."'
				  AND tao_inizio <= '$data'
				  AND (tao_fine >= '$data' OR tao_fine = '0000-00-00')
				  ORDER BY tao_tipo asc, tao_fino asc");

		
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

		list ($ret['on'],$ret['on_min'],$ret['on_max']) = calcola_onorario($onor,$criterio,$valore_pratica,$fees,$time_hours,$last);
		$ret['on'] 	= sprintf('%.2f',$ret['on']);
		$ret['on_min'] 	= sprintf('%.2f',$ret['on_min']);
		$ret['on_max'] 	= sprintf('%.2f',$ret['on_max']);

	}

	//////////////////////////////////////////////////// onorari orari
	if (is_numeric($tempo) && (strlen($operatore) || is_numeric($operatore_id)) && $id_pratica > 0 ) {
		$on_or = calcola_onorario_orario($operatore,$operatore_id,$id_pratica);
		$ret['onor'] = sprintf('%.2f',($on_or  / 60) * $tempo);
	}

	//print_r($ret);
	return $ret;
}

//////////////////////////////////////////////////////////////
function calcola_onorario_orario($operatore,$operatore_id,$id_pratica) {

	        GLOBAL $TIPI_PRATICHE, $CONF;

		// info pratica
		$qp = mysql_query("	SELECT 	pr_tipo,pr_ref_idcliente,pr_on_orar,pr_perc_onor,
						ttp_on_orar,
						on_orar
					FROM pratiche 
					LEFT JOIN INT_pratiche_tipo 	ON pr_tipo = INT_pratiche_tipo.codice 
					LEFT JOIN contact		ON pr_ref_idcliente = contact.id 
					WHERE pratiche.id='$id_pratica'");

		if (!mysql_num_rows($qp)) return 0.00;
		$PR = mysql_fetch_assoc($qp);

		// percentuale aggiuntiva
		$addp = $PR['pr_perc_onor'];

		if ($PR['pr_on_orar']  > 0) return add_perc($PR['pr_on_orar'],$addp);	// pratica
		if ($PR['ttp_on_orar'] > 0) return add_perc($PR['ttp_on_orar'],$addp);	// tipo pratica
		if ($PR['on_orar']     > 0) return add_perc($PR['on_orar'],$addp);	// cliente

		// info operatore
                if ($operatore) {
                        $qo = mysql_query("     SELECT id,onorario,ono_prat,ono_cli,ono_tipo FROM users
                                                WHERE codice='".mysql_escape_string($operatore)."'");
                } else {
                        $qo = mysql_query("     SELECT id,onorario,ono_prat,ono_cli,ono_tipo FROM users
                                                WHERE id='".mysql_escape_string($operatore_id)."'");
                }

		if (!mysql_num_rows($qo)) return 0.00;
		$OP = mysql_fetch_assoc($qo);

		// tariffa specifica x pratica
		if (preg_match('/\b'.$id_pratica.'=([0-9.]+)/',$OP['ono_prat'],$mm))
			if ($mm[1] > 0) return add_perc($mm[1],$addp);

                // tariffa specifica x tipo
                if (preg_match('/\b'.$PR['pr_tipo'].'=([0-9.]+)/',$OP['ono_tipo'],$mm))
			if ($mm[1] > 0) return add_perc($mm[1],$addp);


                // tariffa specifica x cliente
                if (preg_match('/\b'.$PR['pr_ref_idcliente'].'=([0-9.]+)/',$OP['ono_cli'],$mm)) 
			if ($mm[1] > 0) return add_perc($mm[1],$addp);

		// tariffa utente standard
		if ($OP['onorario'] > 0) return add_perc($OP['onorario'],$addp);

		// tariffa gruppi standard
		$qg = mysql_query("	SELECT on_orar FROM gruppi,group_user 
					WHERE gruppi.id = groupid AND userid='".$OP['id']."' AND on_orar > 0
					ORDER BY on_orar DESC 
					LIMIT 1");
		if (mysql_num_rows($qg)) {
			$GR = mysql_fetch_assoc($qg);
			return add_perc($GR['on_orar'],$addp);
		}

                return add_perc(51.6,$addp);
}

/////////////////////////////////////////////////
function ricalcola_prestazioni($where,$newcrit) {

	$qr = mysql_query("     SELECT prestazioni.*,pr_criterio,pr_valore,pr_comp_cod
                                FROM prestazioni,pratiche
                                WHERE (pratiche.id = prestazioni.ref_id) AND $where
                                ORDER BY ref_id ASC, data ASC");

	while ($l = mysql_fetch_assoc($qr)) {

		$info = calcola($l[codice],
				$l[pr_valore],
				$newcrit,
				'',
				$l[operatore],
				$l[data],
				$l[quantita],
				$l[unita_misura],
				$l[tempo],
				$l[pr_comp_cod],
				$l[ref_id]
				);

		mysql_query("	UPDATE prestazioni SET 
					criterio='".mysql_escape_string($newcrit)."',
					onorari='".$info[on]."' 
				WHERE id=$l[id]");
		
		//print "onorario era $l[criterio] - $l[pr_criterio] -  $l[onorari] :<br>UPDATE prestazioni SET criterio='".mysql_escape_string($newcrit)."',onorari='".$info[on]."' WHERE id=$l[id]<br>";
	}
}

?>
