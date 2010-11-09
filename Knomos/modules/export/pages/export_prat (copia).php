<?
include("../../../framework/framework.php");
include('../../../framework/external_lib/oomaker/oomaker.php');
require_once('../../prestazioni/functions.php');

// Define page specific text for template
$PAGE[TXT_TITLE]=EXPORT_MENU_0_2;
$PAGE[PAGE_INTITLE]=EXPORT_MENU_0_2;
$PAGE[PAGE_PICTITLE]="ico_stampa_med.gif";
$module="export";

if ($CONF[knomos_mobile]==true){
	template_init(6); //mobile=6 - normale=2
} 
 else {
	template_init(); //mobile=6 - normale=2
}
	
//template_init(); //mobile=6 - desktop =()
template_define_elements();

ob_start();

if (is_array($_GET[print_note]))
{
	if (in_array(3,$_GET[print_note])) $parcella=true;
}



if ($_GET[form_id]=="print_pres"){
	$thissearch= load_fwobject("search",$module,0);

	$error= check_form($thissearch[form],$_GET,1);
	if ($error == 1)
	{
		if (!$parcella)
		{
	
			$filename = get_unique_name();
	
			$P = $_GET;
	
			$day_from = is_mysql_date($P['day_from']) ? $P['day_from'] : '';
			$day_to   = is_mysql_date($P['day_to']) ? $P['day_to'] : '';
			$ref_id   = is_numeric($P['ref_id'][realval][0]) ? $P['ref_id'][realval][0] : '';
			$clie 	  = is_numeric($P['clie'][realval][0]) ? $P['clie'][realval][0] : '';  
			$codice	= is_numeric($P['codice'][realval][0]) ? $P['codice'][realval][0] : '';
			$operatore= is_numeric($P['operatore'][realval][0]) ? $P['operatore'][realval][0] : '';
			$pr_prof_orig= is_numeric($P['pr_prof_orig'][realval][0]) ? $P['pr_prof_orig'][realval][0] : '';
			$pr_dept  = strlen($P['pr_dept'][0]) ? $P['pr_dept'][0] : '';
			$pr_uff   = strlen($P['pr_uff'][0]) ? $P['pr_uff'][0] : '';
			$testo 	  = strlen(trim($P['testo'])) ? trim($P['testo']) : '';
			$pr_tipo  = strlen($P['pr_tipo'][0]) ? $P['pr_tipo'][0] : '';
			$pr_referral   = strlen($P['pr_referral']) ? $P['pr_referral'] : '';
			$pr_uff_orig   = strlen($P['pr_uff_orig'][0]) ? $P['pr_uff_orig'][0] : '';
			$note 	  = strlen(trim($P['note'])) ? trim($P['note']) : '';
			$dest     = is_numeric($P['dest'][realval][0]) ? $P['dest'][realval][0] : '';
			if (!is_array($P[print_note])) $P[print_note] = array();
			$rapida   = in_array(2,$P[print_note]) ? 1 : 0;
			$colonne = is_array($P['colonne']) ? $P['colonne'] : array();

			if ($clie) {
				// tutte le pratiche del cliente
				$ids = array();
				$k = $DB->Execute("SELECT id FROM pratiche WHERE pr_ref_idcliente=".$DB->Quote($clie));
				while ($o = $k->FetchRow()) $ids[] = $o['id'];
			}
				
			$wh = array('(pratiche.id = prestazioni.ref_id)');
			if ($day_from) 	$wh[] = "(data >= ".$DB->Quote($day_from).")";
			if ($day_to) 	$wh[] = "(data <= ".$DB->Quote($day_to).")";
			if ($ref_id) 	$wh[] = "(ref_id = ".$DB->Quote($ref_id).")";
			if ($clie && count($ids)) $wh[] = "(ref_id IN (".implode(',',$ids)."))";
			if ($operatore) $wh[] = "(operatore = ".$DB->Quote($operatore).")";
                     if ($pr_dept)   $wh[] = "(pr_dept = ".$DB->Quote($pr_dept).")";
                     if ($pr_uff)    $wh[] = "(pr_uff = ".$DB->Quote($pr_uff).")";
			if ($testo) 	$wh[] = "(testo LIKE ".$DB->Quote("%$testo%").")";
			if ($pr_tipo)   $wh[] = "(pr_tipo = ".$DB->Quote($pr_tipo).")";
			if ($pr_referral) $wh[] = "(pr_referral LIKE ".$DB->Quote("%$pr_referral%").")";
			if ($pr_uff_orig) $wh[] = "(pr_uff_orig LIKE ".$DB->Quote("%$pr_uff_orig%").")";
			if ($note) 	$wh[] = "(prestazioni.note LIKE ".$DB->Quote("%$note%").")";

			if (is_array($P['pr_ref_idbenefic']) && count($P['pr_ref_idbenefic'])) {
				$str = "[[:<:]](".implode('|',$P['pr_ref_idbenefic']).")[[:>:]]";
				$wh[] = "(pr_ref_idbenefic RLIKE ".$DB->Quote($str).")";
			}
                        if (is_array($P['pr_ref_idavvr']) && count($P['pr_ref_idavvr'])) {
                                $str = "[[:<:]](".implode('|',$P['pr_ref_idavvr']).")[[:>:]]";
                                $wh[] = "(pr_ref_idbenefic RLIKE ".$DB->Quote($str).")";
                        }
                        if (is_array($P['pr_ref_idaltri']) && count($P['pr_ref_idaltri'])) {
                                $str = "[[:<:]](".implode('|',$P['pr_ref_idaltri']).")[[:>:]]";
                                $wh[] = "(pr_ref_idaltri RLIKE ".$DB->Quote($str).")";
                        }
	
			if ($pr_prof_orig) $wh[] = "(pr_prof_orig RLIKE ".$DB->Quote("[[:<:]]".$pr_prof_orig."[[:>:]]").")";
			
			if (count($wh) > 1) {
	
	                     $PAGE_STYLE[width] = 29.70;
	                     $PAGE_STYLE[height] = 21;

				//intestazione: info cliente	

				if ($dest) {

                                $k = $DB->Execute("SELECT * FROM contact WHERE id=".$DB->Quote($dest));
                                $cliente = $k->FetchRow();
				utf8_encode_array($cliente);

				$int_font = $oo_def;
				$int_font[ml] = 15;
				$int_font[mr] = 2;
				$int_font[name] = 'Arial12int';
				$OO_TEXT .= print_text(	
						"\n\n".EXPORT_SXW_DEST.":\n\n".
						"$cliente[nome]\n".
						"$cliente[indirizzo]\n".
						"$cliente[cap] $cliente[citta]\n",
						$int_font);
				}

				$header_cols = array(EXPORT_SXW_DATE,EXPORT_SXW_PRESTAZ,EXPORT_SXW_PRAT,EXPORT_SXW_NUMERO,EXPORT_SXW_OP);
				$header_widths = array(2.7,4.5,4.5,2,2);
				
				if (@in_array(3,$colonne)) { $header_cols[] = EXPORT_SXW_SP_IMP; $header_widths[] = 2; }
				if (@in_array(4,$colonne)) { $header_cols[] = EXPORT_SXW_SP_NIMP; $header_widths[] = 2; }
				if (@in_array(1,$colonne)) { $header_cols[] = EXPORT_SXW_SP_ACC; $header_widths[] = 2; }
				if (@in_array(2,$colonne)) { $header_cols[] = EXPORT_SXW_SP_ANT; $header_widths[] = 2; }
				if (@in_array(5,$colonne)) { $header_cols[] = EXPORT_SXW_SP_DIR; $header_widths[] = 2; }
				if (@in_array(6,$colonne)) { $header_cols[] = EXPORT_SXW_SP_ONOR; $header_widths[] = 2; }
				if (@in_array(7,$colonne)) { $header_cols[] = EXPORT_SXW_SP_ON_OR; $header_widths[] = 2; }
				if (@in_array(8,$colonne)) { $header_cols[] = EXPORT_SXW_SP_ONUT; $header_widths[] = 2; }

				// create table
				new_table(get_default_table('Tabella1',$header_widths));					
				add_table_header('Tabella1',$header_cols,make_bold($oo_def_c));
	
				$where = implode(' AND ',$wh);

				// operatori
				$op = $DB->Execute("SELECT id,codice FROM users");
                                while ($k = $op->FetchRow()) $OP[$k[id]] = $k[codice];
				utf8_encode_array($l);

	                        $q = $DB->Execute("SELECT prestazioni.*,pratiche.pr_codice,pratiche.pr_numero 
							FROM prestazioni,pratiche 
							WHERE $where 
							ORDER BY data ASC, ref_id ASC");

				$tot_imp = $tot_nimp = $tot_acc = $tot_ant = $tot_dir = $tot_ono = $tot_onor = $tot_onut = 0;

				$alignarr = array($oo_def_c,$oo_def,$oo_def,$oo_def,$oo_def_c);
				for ($i = 0; $i < count($colonne); $i++) $alignarr[] = $oo_def_e;
					
				while ($l = $q->FetchRow()) {
					utf8_encode_array($l);
			
					$tot_imp += $l['spese_imponibili'];
					$tot_nimp += $l['spese_non_imponibili'];
					$tot_acc += $l['acconti'];
					$tot_ant += $l['anticipazioni'];
					$tot_dir += $l['diritti'];
					$tot_ono += $l['onorari'];
					$tot_onor += $l['on_onorari'];
					$tot_onut += $l['on_utente'];
					
					// stampa rapida
					//$onr = $rapida 	? nform($l[onorari],1) 
					//		: nform($l[onorari],1)."\n".nform($l[on_onorari],1);

					$printarr = array();
					$printarr[] = mysql_to_date($l[data]);
					$printarr[] = $l[testo];
					$printarr[] = $rapida ? $l[pr_codice] 	: $l[pr_codice]."\n".EXPORT_SXW_NFATT." ".$l[fattura1];
					$printarr[] = $rapida ? (int)$l[pr_numero] : (int)$l[pr_numero]."\n".EXPORT_SXW_NNOTE." ".$l[nota1];
					$printarr[] = $OP[$l[operatore]];
					if (@in_array(3,$colonne)) $printarr[] = nform($l[spese_imponibili],1);
					if (@in_array(4,$colonne)) $printarr[] = nform($l[spese_non_imponibili],1);
					if (@in_array(1,$colonne)) $printarr[] = nform($l[acconti],1);
					if (@in_array(2,$colonne)) $printarr[] = nform($l[anticipazioni],1);
					if (@in_array(5,$colonne)) $printarr[] = nform($l[diritti],1);
					if (@in_array(6,$colonne)) $printarr[] = nform($l[onorari],1);
					if (@in_array(7,$colonne)) $printarr[] = nform($l[on_onorari],1);
					if (@in_array(8,$colonne)) $printarr[] = nform($l[on_utente],1);
					
					add_table_row('Tabella1',$printarr,$alignarr);
					
					// note
					if ($l[note] && in_array(1,$P[print_note]) && !$rapida)
						add_table_row('Tabella1',array( EXPORT_SXW_NOTE.": ".$l[note]),$oo_def);
				}
				
	                     // create table
	                  	new_table(get_default_table('Tabella2',$header_widths));

				$tot_cols = array('',EXPORT_SXW_TOT,'','','');
				if (@in_array(3,$colonne)) $tot_cols[] = nform($tot_imp);
				if (@in_array(4,$colonne)) $tot_cols[] = nform($tot_nimp);
				if (@in_array(1,$colonne)) $tot_cols[] = nform($tot_acc);
				if (@in_array(2,$colonne)) $tot_cols[] = nform($tot_ant);
				if (@in_array(5,$colonne)) $tot_cols[] = nform($tot_dir);
				if (@in_array(6,$colonne)) $tot_cols[] = nform($tot_ono);
				if (@in_array(7,$colonne)) $tot_cols[] = nform($tot_onor);
				if (@in_array(8,$colonne)) $tot_cols[] = nform($tot_onut);

				$alignarr[1] = make_bold($oo_def_c);			
				// totals
				add_table_row('Tabella2',$tot_cols,$alignarr);
	
				// create content
				$OO_PAGE_STYLE = set_page_style($PAGE_STYLE);
				$OO_PAGE_HEADER = set_page_header("\t#DATA#\t\t\t\t\t\t\t".EXPORT_SXW_TIT_PREST."\t\t\t\t\t".EXPORT_SXW_TIT_PG.": #PAGINA#");
				$OO_PAGE_FOOTER = ''; // set_page_footer('#DATA# #ORA#');
				
				$header_style = array(color => '#000000', size => '12pt', align => 'start', face => 'Verdana');
				//$footer_style = array(color => '#ffff00', size => '12pt', align => 'end', face => 'Verdana');
				$OO_HEADER_STYLE = set_header_style($header_style);
				$OO_FOOTER_STYLE = ''; // set_footer_style($footer_style);
				
				$OO_TABLE_STYLES = gen_table_style();
				
				$OO_TEXT .= render_table('Tabella1');
				$OO_TEXT .= print_text(" ",$oo_def_c);
				$OO_TEXT .= render_table('Tabella2');
	
				$OO_FONT_STYLES = gen_font_style();
				
				$url = make_sxw($filename);
				print '<a href="../output_sxw.php?file='.$filename.'">'.EXPORT_SXW_CLICK.'</a><br>';
	
			} else print EXPORT_SXW_SEARCH;
			
		} else
		{
			//Second print page	
			unset($thissearch);
			$_SESSION[export][form1]=$_GET;
			$thissearch= load_fwobject("search",$module,3);
			print draw_form($thissearch[form],$module);
			
		}
	} else
	{
		// ERRORI NELLA FORM
		$thissearch= load_fwobject("search",$module,0);
		print draw_form($thissearch[form],$module);
	}

} elseif ($_GET[form_id]=="print_pres2")
{
// SECONDO POST PER LE PARCELLE !!!
	$thissearch= load_fwobject("search",$module,3);
	$error= check_form($thissearch[form],$_GET,$page);
	if ($error == 1)
	{

		$filename = get_unique_name();

             	$P = $_SESSION[export][form1];

       	$day_from = is_mysql_date($P['day_from']) ? $P['day_from'] : '';
       	$day_to   = is_mysql_date($P['day_to']) ? $P['day_to'] : '';
	       $ref_id   = is_numeric($P['ref_id'][realval][0]) ? $P['ref_id'][realval][0] : '';
	       $clie     = is_numeric($P['clie'][realval][0]) ? $P['clie'][realval][0] : '';
	       $codice   = is_numeric($P['codice'][realval][0]) ? $P['codice'][realval][0] : '';
	       $operatore= is_numeric($P['operatore'][realval][0]) ? $P['operatore'][realval][0] : '';
	       $pr_prof_orig= is_numeric($P['pr_prof_orig'][realval][0]) ? $P['pr_prof_orig'][realval][0] : '';
              $pr_dept  = strlen($P['pr_dept'][0]) ? $P['pr_dept'][0] : '';
              $pr_uff   = strlen($P['pr_uff'][0]) ? $P['pr_uff'][0] : '';
              $pr_tipo  = strlen($P['pr_tipo'][0]) ? $P['pr_tipo'][0] : '';
              $pr_referral   = strlen($P['pr_referral']) ? $P['pr_referral'] : '';
              $pr_uff_orig   = strlen($P['pr_uff_orig'][0]) ? $P['pr_uff_orig'][0] : '';
	       $testo    = strlen(trim($P['testo'])) ? trim($P['testo']) : '';
	       $note     = strlen(trim($P['note'])) ? trim($P['note']) : '';
	       $dest     = is_numeric($P['dest'][realval][0]) ? $P['dest'][realval][0] : '';
		$save_doc = ($P['save_doc'] == 1) ? 1 : 0;
// vedere qui
		$luogo_data 	= strlen(trim($_GET['luogo_data'])) ? trim($_GET['luogo_data']) : '';
		$dicit1 	= strlen(trim($_GET['dicit1'])) ? trim($_GET['dicit1']) : '';
		$dicit2 	= strlen(trim($_GET['dicit1'])) ? trim($_GET['dicit2']) : '';
		$oggetto	= strlen(trim($_GET['oggetto'])) ? trim($_GET['oggetto']) : '';
		$spec_acc	= strlen(trim($_GET['spec_acc'])) ? trim($_GET['spec_acc']) : '';
		$rimb_for 	= strlen(trim($_GET['rimb_for'])) ? floatval(trim(str_replace(',','.',$_GET['rimb_for']))) : 0;
		$cpa 		= strlen(trim($_GET['cpa'])) ? trim($_GET['cpa']) : '';
		$iva 		= strlen(trim($_GET['iva'])) ? trim($_GET['iva']) : '0';
		$rit_acc 	= strlen(trim($_GET['rit_acc'])) ? trim($_GET['rit_acc']) : '0';
		$currency 	= is_numeric($_GET['currency'][0]) ? $_GET['currency'][0] : 0;

		$_GET['prest_stampa'] = strtoupper($_GET['prest_stampa']);
		$_GET['tipo_stampa'] = strtoupper($_GET['tipo_stampa']);

		$prest_stampa   = in_array($_GET['prest_stampa'][0],array('T','N','F','R','S')) 	
				? $_GET['prest_stampa'][0] : 'N';
		$rif_print      = strlen(trim($_GET['rif_print'])) ? trim($_GET['rif_print']) : '';

		$tipo_stampa 	= in_array($_GET['tipo_stampa'][0],array('P','N','F')) 		
				? $_GET['tipo_stampa'][0] : 'P';
		$rif_print2 	= strlen(trim($_GET['rif_print2'])) ? trim($_GET['rif_print2']) : '';

		//check
		if ($prest_stampa == 'R' || $prest_stampa == 'S') $tipo_stampa = 'P'; 	/* ristampa */

		// ricalcolare i valori?
		$ricalcolo 	= strtoupper(trim($_GET['ricalcolo']));
		$ricalcolo	= ereg('^(MIN\*|MED\.|MAX/)[1-9]{1}$',$ricalcolo) ? $ricalcolo : '';
		$ricalc_save	= isset($_GET['ricalc_save']) ? true : false;

		$prevalenza 	= $_GET[prevalenza][0];

                        if ($clie) {
                                // tutte le pratiche del cliente
                                $ids = array();
                                $k = $DB->Execute("SELECT id,pr_codice,pr_ref_idcliente FROM pratiche WHERE pr_ref_idcliente=".$DB->Quote($clie));
                                while ($o = $k->FetchRow()) { 
					utf8_encode_array($o);
					$ids[] = $o['id']; 
					$nome_pratica = $o[pr_codice]; 
					$cli_pratica = $o[pr_ref_idcliente];
				} 
                        } else {
				$k = $DB->Execute("SELECT id,pr_codice,pr_ref_idcliente FROM pratiche WHERE id=".$DB->Quote($ref_id));
                                while ($o = $k->FetchRow()) { 
					utf8_encode_array($o);
					$ids[] = $o['id']; 
					$nome_pratica = $o[pr_codice]; 
					$cli_pratica = $o[pr_ref_idcliente];
				}
			}

                        $wh = array();
                        if ($day_from)  $wh[] = "(data >= ".$DB->Quote($day_from).")";
                        if ($day_to)    $wh[] = "(data <= ".$DB->Quote($day_to).")";
                        if ($ref_id)    $wh[] = "(ref_id = ".$DB->Quote($ref_id).")";
                        if ($clie && count($ids)) $wh[] = "(ref_id IN (".implode(',',$ids)."))";
                        if ($operatore) $wh[] = "(operatore = ".$DB->Quote($operatore).")";
			if ($pr_dept)   $wh[] = "(pr_dept = ".$DB->Quote($pr_dept).")";
			if ($pr_uff)    $wh[] = "(pr_uff = ".$DB->Quote($pr_uff).")";
                        if ($testo)     $wh[] = "(testo LIKE ".$DB->Quote("%$testo%").")";
                      	if ($pr_tipo)   $wh[] = "(pr_tipo = ".$DB->Quote($pr_tipo).")";
                        if ($pr_referral) $wh[] = "(pr_referral LIKE ".$DB->Quote("%$pr_referral%").")";
                        if ($pr_uff_orig) $wh[] = "(pr_uff_orig LIKE ".$DB->Quote("%$pr_uff_orig%").")";
                        if ($note)      $wh[] = "(prestazioni.note LIKE ".$DB->Quote("%$note%").")";

			if ($prest_stampa != 'T') {
				if ($prest_stampa == 'N') $wh[] = "(nota1 = '' AND fattura1 = '')";
				if ($prest_stampa == 'F') $wh[] = "(nota1 = ".$DB->Quote($rif_print).")";
				if ($prest_stampa == 'R') $wh[] = "(nota1 = ".$DB->Quote($rif_print).")";
				if ($prest_stampa == 'S') $wh[] = "(fattura1 = ".$DB->Quote($rif_print).")";
			}

                        if (is_array($P['pr_ref_idbenefic']) && count($P['pr_ref_idbenefic'])) {
                                $str = "[[:<:]](".implode('|',$P['pr_ref_idbenefic']).")[[:>:]]";
                                $wh[] = "(pr_ref_idbenefic RLIKE ".$DB->Quote($str).")";
                        }
                        if (is_array($P['pr_ref_idavvr']) && count($P['pr_ref_idavvr'])) {
                                $str = "[[:<:]](".implode('|',$P['pr_ref_idavvr']).")[[:>:]]";
                                $wh[] = "(pr_ref_idbenefic RLIKE ".$DB->Quote($str).")";
                        }
                        if (is_array($P['pr_ref_idaltri']) && count($P['pr_ref_idaltri'])) {
                                $str = "[[:<:]](".implode('|',$P['pr_ref_idaltri']).")[[:>:]]";
                                $wh[] = "(pr_ref_idaltri RLIKE ".$DB->Quote($str).")";
                        }

			if ($pr_prof_orig) $wh[] = "(pr_prof_orig RLIKE ".$DB->Quote("[[:<:]]".$pr_prof_orig."[[:>:]]").")";
				
                        if (count($wh) > 0) {

                                $PAGE_STYLE[width] = 21;
                                $PAGE_STYLE[height] = 29.70;

                                //intestazione: info cliente 

                                if ($dest) {					/* destinatario specificato 	*/
                                	$k = $DB->Execute("SELECT * FROM contact WHERE id=".$DB->Quote($dest));
                                	$cliente = $k->FetchRow();
				} else {					/* cliente della pratica	*/
					$k = $DB->Execute("SELECT * FROM contact WHERE id=".$DB->Quote($cli_pratica));
                                        $cliente = $k->FetchRow();					
				}
				utf8_encode_array($cliente);

				// avvocato
                                $int0_font = $oo_def;
                                $int0_font[ml] = 1;
                                $int0_font[mr] = 0.5;
                                $int0_font[name] = 'Arial12int';
                                //$int0_font[size] = '10px';

				if ($CONF[fatt_avvocato]==""){
 					$OO_TEXT .= print_text(
							$_SESSION[user][nome]. "\n".
							$_SESSION[user][citta]. " " .$_SESSION[user][indirizzo]."\n".
							"Codice fiscale ".$_SESSION[user][codfisc]. "\n".
							"Partita IVA ".$_SESSION[user][piva]. "\n".
							"Domicilio fiscale ".$_SESSION[user][domfisc]. "\n". 
							"Nato a ".$_SESSION[user][natoa]. " il " .$_SESSION[user][natoil]."\n",
                                                $int0_font);
				}
				else
				{
 				$OO_TEXT .= print_text(
							$CONF[fatt_avvocato]. "\n".
							$CONF[fatt_citta_studio]. " ". $CONF[fatt_indirizzo_studio]. "\n". 
							$CONF[fatt_codicefiscale]. "\n".  
							$CONF[fatt_partitaIVA]. "\n". 
							$CONF[fatt_domicilio_fiscale]. "\n".  
							$CONF[fatt_data_luogo_nascita]. "\n",

                                                $int0_font);
				}
                                               

				// prima intestazione: dati cliente
                                $int_font = $oo_def;
                                $int_font[ml] = 11;
                                $int_font[mr] = 0.5;
                                $int_font[name] = 'Arial12int';
                                //$int_font[size] = '8px';
				
				$piv_fis = $cliente[cod_fis] ? EXPORT_SXW_CFIS." $cliente[cod_fis]" : 
						($cliente[piva] ? EXPORT_SXW_PIVA." $cliente[piva]" : "");

                                $OO_TEXT .= print_text(
						//"\n\n".$tipo_stampa."\n\n".
                                               //"$luogo_data:\n\n".
 						"Cliente:". "\n".
                                                "$cliente[nome]\n".
                                                "$cliente[indirizzo]\n".
                                                "$cliente[cap] $cliente[citta]\n".
						"$piv_fis",
                                                $int_font);

				// seconda intestazione: nome pratica e oggetto

				$n_dec = $n_tho = '';
				$n_cod = 'EUR';
				$n_name = 'Euro';
				$n_val = 1;
				if ($currency) {
					$o = $DB->Execute("SELECT * FROM INT_valute WHERE id='$currency'");
					$CUR = $o->FetchRow();
					utf8_encode_array($CUR);

					$n_dec = $CUR['va_sep_decimali'];
					$n_tho = $CUR['va_sep_migliaia'];
					$n_cod = $CUR['va_cod'];
                                        $n_name = $CUR['va_nome'];
					$n_val = $CUR['va_val'];
				}

				$int2_font = $oo_def;
                                $int2_font[ml] = 1;
                                $int2_font[name] = 'Arial12int2';
                                $OO_TEXT .= print_text(
						"\n\n".
                                               $oggetto.
						"\n\n\n".
						//"-------------------------------\n\n".
                                                EXPORT_DICIT1. ": " . $dicit1." $nome_pratica\n".
                                                EXPORT_DICIT2. ": " . $dicit2.
						"\n\n".
						//EXPORT_SXW_OGG.": $oggetto\n".
						($currency > 0 ? EXPORT_SXW_VALUTA.": $n_cod ($n_name)\n\n" : "\n"),
                                                $int2_font);				
				
				// create table
                                new_table(get_default_table('Tabella1',array(3,9.5,2.5,2.5,2.5),0));

                                add_table_header('Tabella1',array(      EXPORT_SXW_DATE,
                                                                        EXPORT_SXW_PRESTAZ,
                                                                        EXPORT_SXW_SPSOST,
                                                                        EXPORT_COST_RIGHTS,
                                                                        EXPORT_COST_ONOR
                                                                ),
							array($oo_def_c,$oo_def,$oo_def_e,$oo_def_e,$oo_def_e)
						);

                                $where = implode(' AND ',$wh);

                                // operatori
                                $op = $DB->Execute("SELECT id,codice FROM users");
                                while ($k = $op->FetchRow()) $OP[$k[id]] = $k[codice];
				utf8_encode_array($OP);

				// aggiorna note e fatture
				if (($tipo_stampa == 'N' || $tipo_stampa == 'F') && strlen($rif_print2) ) {
					$field = $tipo_stampa == 'N' ? 'nota1' : 'fattura1';
					$DB->Execute("	UPDATE prestazioni 
							SET $field = ".$DB->Quote($rif_print2)."
							WHERE $where");
				}

                                $q = $DB->Execute("      SELECT prestazioni.*,
								pr_criterio,pr_valore,pr_codice,pr_numero,pr_comp_cod
                                                        FROM prestazioni,pratiche
                                                        WHERE (pratiche.id = prestazioni.ref_id) AND $where
                                                        ORDER BY ref_id ASC, data ASC");
				
				// ricalcola le prestazioni nel database
				if ($ricalcolo && $ricalc_save && $prevalenza == 1) {
						ricalcola_prestazioni($where,$ricalcolo);
				}

                                $tot_imp = $tot_nimp = $tot_spe = $tot_dir = $tot_ono = $tot_acc = $tot_ant = 0.00;

                                while ($l = $q->FetchRow()) {
					utf8_encode_array($l);

					// ricalcola solo per la stampa se necessario
					if ($ricalcolo && !$ricalc_save && $prevalenza == 1) {

				                $info = calcola($l[codice],
			                          	           $l[pr_valore],
				                                $ricalcolo,
				                                '',
				                                $l[operatore],
				                                $l[data],
				                                $l[quantita],
				                                $l[unita_misura],
				                                $l[tempo],
				                                $l[pr_comp_cod]
			                                	);
						$l[onorari] = $info['on'];
					}

                                        $num = (int)$l[pr_numero];
	
					$tot_imp += $l['spese_imponibili'];
					$tot_nimp += $l['spese_non_imponibili'];
					$spese_sost = $l['spese_imponibili'] + $l['spese_non_imponibili'];
                                   $tot_spe += $spese_sost;
                                   $tot_dir += $l['diritti'];

					$ono_field = $l['onorari'];
					if ($prevalenza == 2) $ono_field = $l['on_onorari'];
					if ($prevalenza == 3) $ono_field = $l['on_utente'];

                                        $tot_ono += $ono_field;
                                        $tot_acc += $l['acconti'];
                                        $tot_ant += $l['anticipazioni'];

                                        add_table_row('Tabella1',
							array( 		($l[data] != $prev_data ? mysql_to_date($l[data]) : ''),
                                                                        $l[testo],
                                                                        nform($spese_sost * $n_val,1,$n_dec,$n_tho),
                                                                        nform($l[diritti] * $n_val,1,$n_dec,$n_tho),
                                                                        nform($ono_field * $n_val ,1,$n_dec,$n_tho)
                                                                        ),
                                                                array($oo_def_c,$oo_def,$oo_def_e,$oo_def_e,$oo_def_e)
                                                        );
					$prev_data = $l[data];
                                }
	
				add_table_row(  'Tabella1',
                                                array('','','--------------','--------------','--------------'),
                                                $oo_def_e
                                             );

				add_table_row(	'Tabella1',
						array(	'',
							EXPORT_SXW_F_TOTPR,
							nform($tot_spe * $n_val,0,$n_dec,$n_tho),
							nform($tot_dir * $n_val,0,$n_dec,$n_tho),
							nform($tot_ono * $n_val,0,$n_dec,$n_tho)
							),
						array($oo_def_c,$oo_def,$oo_def_e,$oo_def_e,$oo_def_e)
					     );

                                // create table
                                new_table(get_default_table('Tabella2',array(14,6),0));

				$tot1 = 0;

				$p_tot_imp = nform($tot_imp * $n_val,0,$n_dec,$n_tho);
                            add_table_row('Tabella2',array(EXPORT_SXW_F_RIEP,$n_cod),array($oo_def,$oo_def_e));
				add_table_row('Tabella2',array('------------','----------------------'),array($oo_def,$oo_def_e));
				
				add_table_row('Tabella2',array(EXPORT_SXW_F_TOTIMP,$p_tot_imp),array($oo_def,$oo_def_e));

				$p_tot_dir = nform($tot_dir * $n_val,0,$n_dec,$n_tho);
				$p_tot_ono = nform($tot_ono * $n_val,0,$n_dec,$n_tho);
				add_table_row('Tabella2',array(EXPORT_SXW_F_TOTDIR,$p_tot_dir),array($oo_def,$oo_def_e));
				add_table_row('Tabella2',array(EXPORT_SXW_F_TOTONO,$p_tot_ono),array($oo_def,$oo_def_e));

				$tot1 += $tot_imp + $tot_dir + $tot_ono;
				if ($rimb_for > 0) {
					$r_perc = nform($rimb_for,$n_dec,$n_tho);
					$r_molt = $rimb_for / 100;
					$p_rimb_for = nform( (($tot_dir + $tot_ono) * $r_molt) * $n_val,0,$n_dec,$n_tho);
					add_table_row('Tabella2',array(sprintf(EXPORT_SXW_F_RIMBFOR,$r_perc),$p_rimb_for),array($oo_def,$oo_def_e));
					//MICHEL
					$tot1 += ($tot_dir + $tot_ono) * ($rimb_for/100);
				}
				
				add_table_row('Tabella2',array('','----------------------'),array($oo_def,$oo_def_e));

				// ACCONTI
				if ($tot_acc > 0) {
					$p_tot1 = nform($tot1 * $n_val,0,$n_dec,$n_tho);
					$p_tot_acc = nform($tot_acc * $n_val,0,$n_dec,$n_tho);
					add_table_row('Tabella2',array('',$p_tot1),array($oo_def,$oo_def_e));
					add_table_row('Tabella2',array($spec_acc,$p_tot_acc),array($oo_def,$oo_def_e));
					add_table_row('Tabella2',array('','----------------------'),array($oo_def,$oo_def_e));
					$tot1 -= $tot_acc;
				}

				// IMPONIBILE IRPEF
				$imp_irpef = $tot1;
				$p_imp_irpef = nform($tot1 * $n_val,0,$n_dec,$n_tho);
                                add_table_row('Tabella2',array(EXPORT_SXW_F_IRPEF,$p_imp_irpef),array($oo_def,$oo_def_e));

				// CPA
				if (eregi('s',$cpa)) {
					$p_cpa = nform(($tot1 * 0.04) * $n_val,0,$n_dec,$n_tho);
					add_table_row('Tabella2',array(EXPORT_SXW_F_CPA,$p_cpa),array($oo_def,$oo_def_e));
                                	add_table_row('Tabella2',array('','----------------------'),array($oo_def,$oo_def_e));
					$tot1 += $tot1 * 0.04;
				}

				// IVA
				$p_imp_iva = nform($tot1 * $n_val,0,$n_dec,$n_tho);
				$p_tot = nform($tot1 * $n_val,0,$n_dec,$n_tho);
				$p_tot_iva = nform(($tot1 * ($iva / 100)) * $n_val,0,$n_dec,$n_tho);
				add_table_row('Tabella2',array(EXPORT_SXW_F_IMPIVA,$p_imp_iva),array($oo_def,$oo_def_e));
                            add_table_row('Tabella2',array(sprintf(EXPORT_SXW_F_IVAON,$iva,$p_tot),$p_tot_iva),array($oo_def,$oo_def_e));
				$tot1 += $tot1 * ($iva / 100);

				$p_tot1 = nform($tot1 * $n_val,0,$n_dec,$n_tho);
				add_table_row('Tabella2',array('','----------------------'),array($oo_def,$oo_def_e));
				add_table_row('Tabella2',array('',$p_tot1),array($oo_def,$oo_def_e));
				
				// SPESE ESENTI
				if ($tot_nimp > 0) {
					$p_tot_esenti = nform($tot_nimp * $n_val,0,$n_dec,$n_tho);
					add_table_row('Tabella2',array(EXPORT_SXW_F_TOTESE,$p_tot_esenti),array($oo_def,$oo_def_e));
					add_table_row('Tabella2',array('','----------------------'),array($oo_def,$oo_def_e));
					$tot1 += $tot_nimp;
				}

				// ANTICIPAZIONI
				if ($tot_ant) {
					$p_tot_ant = nform($tot_ant * $n_val,0,$n_dec,$n_tho);
				      	add_table_row('Tabella2',array(EXPORT_SXW_F_TOTANT,$p_tot_ant),array($oo_def,$oo_def_e));
                                        add_table_row('Tabella2',array('','----------------------'),array($oo_def,$oo_def_e));
                                        $tot1 -= sprintf('%.2f',$tot_ant);
				}

				// LORDO
				$p_totale_lordo = nform($tot1 * $n_val,0,$n_dec,$n_tho);
				add_table_row('Tabella2',array(EXPORT_SXW_F_TOTLOR,$p_totale_lordo),array($oo_def,$oo_def_e));

				// RITENUTA
				$p_imp_irpef = nform($imp_irpef * $n_val,0,$n_dec,$n_tho);
				$p_ritenuta_acconto = nform(($imp_irpef * ($rit_acc / 100)) * $n_val,0,$n_dec,$n_tho);
				add_table_row('Tabella2',array(sprintf(EXPORT_SXW_F_RITACC,$rit_acc,$n_cod,$p_imp_irpef),$p_ritenuta_acconto),array($oo_def,$oo_def_e));
				$tot1 -= $imp_irpef * ($rit_acc / 100);

				// TOTALE DOVUTO
				add_table_row('Tabella2',array('','----------------------'),array($oo_def,$oo_def_e));
				$p_totale_dovuto = nform($tot1 * $n_val,0,$n_dec,$n_tho);
				add_table_row('Tabella2',array(EXPORT_SXW_F_TOTDOV,$p_totale_dovuto),array($oo_def,$oo_def_e));
				
                                // create content
                                $OO_PAGE_STYLE = set_page_style($PAGE_STYLE);
                                $OO_PAGE_HEADER = ''; 
                                $OO_PAGE_FOOTER = ''; 
                                $OO_HEADER_STYLE = '';
                                $OO_FOOTER_STYLE = ''; 
                                $OO_TABLE_STYLES = gen_table_style();

                                $OO_TEXT .= render_table('Tabella1');
                                $OO_TEXT .= print_text("\n",$oo_def);
                                $OO_TEXT .= render_table('Tabella2');

                                $OO_FONT_STYLES = gen_font_style();
    				$url = make_sxw($filename);

				//print "$save_doc-".$P['dest_prat'][realval][0]."-".$P['ref_id'][realval][0]."-".$_SESSION[user][ref_prat]."<br>";
				// salvataggio come documento
				if ($save_doc == 1) {

				$d_prat = 0;
				if ($d_prat == 0 && is_numeric($P['dest_prat'][realval][0])) $d_prat = $P['dest_prat'][realval][0];
				if ($d_prat == 0 && is_numeric($P['ref_id'][realval][0])) $d_prat = $P['ref_id'][realval][0];
				if ($d_prat == 0 && $_SESSION[user][ref_prat] > 0) $d_prat = $_SESSION[user][ref_prat];

				  if($d_prat > 0) {
    			
		    			switch ($tipo_stampa)
		    			{
		    				case "P":
		    				$title_doc=sprintf(EXPORT_SXW_PRINT_P,date($CONF[mysql_date_format]));
		    				break;
		    				case "N":
		    				$title_doc=sprintf(EXPORT_SXW_PRINT_N,$rif_print2,date($CONF[mysql_date_format]));
		    				break;
		    				case "F":
		    				$title_doc=sprintf(EXPORT_SXW_PRINT_F,$rif_print2,date($CONF[mysql_date_format]));
		    				break;
		    			}
							
					$moreurl=' - <a href="'.$CONF[url_base].$CONF[dir_modules].'document/pages/mod_document.php?title='.urlencode($title_doc).'&file='.$filename.'&ref_prat='.$d_prat.'">'.EXPORT_SXW_CONVERT.'</a>';
				  }
				}

            print $q->RecordCount() 
					? '<a href="../output_sxw.php?file='.$filename.'">'.EXPORT_SXW_CLICK.'</a>'.$moreurl.'<br>'
					: EXPORT_SXW_NOPREST;

			} else print EXPORT_SXW_SEARCH;
	//FINE
	}

}
else  {
	// PAGINA NUOVA
	$thissearch= load_fwobject("search",$module,0);
	print draw_form($thissearch[form],$module);
}



$PAGE[PAGE_CONTENT] = ob_get_contents();
ob_end_clean();

final_render();

?>
