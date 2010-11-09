<?
include("../../../framework/framework.php");
include('../../../framework/external_lib/oomaker/oomaker.php');

// Define page specific text for template
$PAGE[TXT_TITLE]=EXPORT_MENU_0_7;
$PAGE[PAGE_INTITLE]=EXPORT_MENU_0_7;
$PAGE[PAGE_PICTITLE]="ico_stampa_med.gif";
$module="export";

load_module_language("contact");

$thissearch= load_fwobject("search",$module,8);


if ($CONF[knomos_mobile]==true){
	template_init(6); //mobile=6 - normale=2
} 
 else {
	template_init(); //mobile=6 - normale=2
}
	
//template_init(); //mobile=6 - desktop =()


template_define_elements();
ob_start();


	if ($_GET[form_id]==$thissearch[form][name]){
		$error= check_form($thissearch[form],$_GET,$page);
		if ($error == 1)
		{

                        $filename = get_unique_name();
			$daylist = array('Domenica','Lunedì','Martedì','Mercoledì','Giovedì','Venerdì','Sabato');

                        $P = $_GET;

                        $codice_from = strlen(trim($P['codice_from'])) ? trim($P['codice_from']) : '';
                        $codice_to = strlen(trim($P['codice_to'])) ? trim($P['codice_to']) : '';
			$operatore= is_numeric($P['operatore'][realval][0]) ? $P['operatore'][realval][0] : '';
			//$cliente= is_numeric($P['clie'][realval][0]) ? $P['clie'][realval][0] : '';
			//$cliente = strlen(trim($P['clie'])) ? trim($P['clie']) : '';
                        //$cliente = is_mysql_date($P['clie']) ? $P['clie'] : '';
                        $iniz_from = is_mysql_date($P['iniz_from']) ? $P['iniz_from'] : '';
                        $iniz_to   = is_mysql_date($P['iniz_to']) ? $P['iniz_to'] : '';
                        $mod_from = is_mysql_date($P['mod_from']) ? $P['mod_from'] : '';
                        $mod_to   = is_mysql_date($P['mod_to']) ? $P['mod_to'] : '';
                        $ins_from = is_mysql_date($P['ins_from']) ? $P['ins_from'] : '';
                        $ins_to   = is_mysql_date($P['ins_to']) ? $P['ins_to'] : '';

			$tipo 	  = strlen($P['pr_tipo'][0]) ? $P['pr_tipo'][0] : '';
                        $title    = strlen(trim($P['title'])) ? trim($P['title']) : '';
                        $note     = strlen(trim($P['note'])) ? trim($P['note']) : '';
                        $dest     = is_numeric($P['dest'][realval][0]) ? $P['dest'][realval][0] : '';

                        if (!is_array($P[print_note])) $P[print_note] = array();
                        $rapida   = in_array(2,$P[print_note]) ? 1 : 0;

                        $wh = array('(1 = 1)');
                        if ($codice_from)  $wh[] = "(pr_codice >= '".mysql_escape_string($codice_from)."')";
                        if ($codice_to)  $wh[] = "(pr_codice <= '".mysql_escape_string($codice_to)."')";
                        if ($iniz_from) $wh[] = "(pr_data_inizio >= '".mysql_escape_string($iniz_from)."')";
                        if ($iniz_to)   $wh[] = "(pr_data_inizio <= '".mysql_escape_string($iniz_to)."')";
                        if ($mod_from)  $wh[] = "(pr_data_mod >= '".mysql_escape_string($mod_from)."')";
                        if ($mod_to)    $wh[] = "(pr_data_mod <= '".mysql_escape_string($mod_to)."')";
                        if ($ins_from)  $wh[] = "(pr_data_ins >= '".mysql_escape_string($ins_from)."')";
                        if ($ins_to)    $wh[] = "(pr_data_ins <= '".mysql_escape_string($ins_to)."')";
			if ($tipo)      $wh[] = "(pr_tipo = '".mysql_escape_string($tipo)."')";
                        if ($title)     $wh[] = "(pr_oggetto LIKE '%".mysql_escape_string($title)."%')";
                        if ($note)      $wh[] = "(note LIKE '%".mysql_escape_string($note)."%')";
			if ($operatore) $wh[] = "(pr_operatore LIKE '".mysql_escape_string($operatore)."%' OR pr_operatore LIKE '%".mysql_escape_string($operatore)."' OR pr_operatore LIKE '%,,".mysql_escape_string($operatore).",,%')";
			//if ($cliente) $wh[] = "(pr_ref_idcliente LIKE '".mysql_escape_string($cliente)."%' OR pr_ref_idcliente LIKE '%".mysql_escape_string($cliente)."' OR pr_ref_idcliente LIKE '%,,".mysql_escape_string($cliente).",,%')";
                        //if ($cliente)    $wh[] = "(clie LIKE '".mysql_escape_string($cliente)."')";
                        if (count($wh) > 1) {

                                $PAGE_STYLE[width] = 29.70;
                                $PAGE_STYLE[height] = 21;

                                //intestazione: info cliente

                                if ($dest) {

                                $k = mysql_query("SELECT * FROM contact WHERE id='".mysql_escape_string($dest)."'");
                                $cliente = mysql_fetch_assoc($k);

                                $int_font = $oo_ar10;
                                $int_font[ml] = 23;
                                $int_font[mr] = 2;
                                $int_font[name] = 'Arial12int';
                                $OO_TEXT .= print_text(
                                                "\n\nDestinatario:\n\n".
                                                "$cliente[nome]\n".
                                                "$cliente[indirizzo]\n".
                                                "$cliente[cap] $cliente[citta]\n",
                                                $int_font);
                                }

                                // operator list
                                $j = mysql_query("SELECT id,codice,nome FROM users");
                                while ($k = mysql_fetch_assoc($j)) $OPER[$k[id]] = array($k[codice],$k[nome]);
			
				// tipo list
                                $j = mysql_query("SELECT codice,ttp_desc FROM INT_pratiche_tipo");
                                while ($k = mysql_fetch_assoc($j)) $PRTIPO[$k[codice]] = $k[ttp_desc];

                                // create table
                                new_table(get_default_table('Tabella1',array(7,19,3.7)));

                                add_table_header('Tabella1',array(      'Codice',
									'Oggetto',
									'Date',
                                                                ),make_bold($oo_ar10c));

                                $where = implode(' AND ',$wh);

                                $q = mysql_query("      SELECT P.*,C.codice,C.nome 
                                                        FROM pratiche P
							LEFT JOIN contact C ON pr_ref_idcliente = C.id
                                                        WHERE $where
                                                        ORDER BY pr_codice ASC");

                                while ($l = mysql_fetch_assoc($q)) {

                                        $op = $l[pr_operatore];
                                        $oper = is_array($OPER[$op]) ? $OPER[$op][0]." (".$OPER[$op][1].")" : '';

					$valore = 'Indeterminato';
					if ($l[pr_valore] == -2) $valore = 'Indet/Extra';
					if ($l[pr_valore] > 0) $valore = nform($l[pr_valore]);

                                        add_table_row('Tabella1',array( 
						$l[pr_codice]."\n\nN. ".(int)$l[pr_numero],
                                              	"Repertorio n. ".$l[pr_repertorio]."\t\t"."Cliente: ".$l[codice]." (".$l[nome].")\n".
						$l[pr_oggetto]."\n".
						"Tipo: ".$l[pr_tipo]." (".$PRTIPO[$l[pr_tipo]].")\t\t"."Operatore: ".$oper."\n".
						"Valore: $valore\t\tCrit.: ".$l[pr_criterio]."\t\tFido:".nform($l[pr_fido])."\n".
						"Aut. C.: ".$l[pr_comp_cod]." . ".$l[pr_comp_desc]."\tN.Prov: ".$l[pr_nprovv]."\n".
						"Giud: ".$l[pr_giudice]."\t\tN.Ruol: ".$l[pr_nruolo]
						,
                                              	"Ape: ".mysql_to_date($l[pr_data_inizio])."\n".
						"Ins: ".mysql_to_date($l[pr_data_ins])."\n".
						"Agg: ".mysql_to_date($l[pr_data_mod]),
                                                ),
                                                                array(  $oo_ar10,$oo_ar10,$oo_ar10e)
                                                        );
                                        // note
                                        if ($l[note] && in_array(1,$P[print_note]) && !$rapida)
                                                add_table_row('Tabella1',array( "NOTE: ".$l[note]),$oo_ar10);
                                }

                                // create content
                                $OO_PAGE_STYLE = set_page_style($PAGE_STYLE);
                                $OO_PAGE_HEADER = set_page_header("#DATA#\t\t\t\tELENCO PRATICHE\t\tPag.: #PAGINA#");
                                $OO_PAGE_FOOTER = ''; // set_page_footer('#DATA# #ORA#');

                                $header_style = array(color => '#000000', size => '12pt', align => 'start', face => 'Verdana');
                                //$footer_style = array(color => '#ffff00', size => '12pt', align => 'end', face => 'Verdana');
                                $OO_HEADER_STYLE = set_header_style($header_style);
                                $OO_FOOTER_STYLE = ''; // set_footer_style($footer_style);

                                $OO_TABLE_STYLES = gen_table_style();

                                $OO_TEXT .= render_table('Tabella1');

                                $OO_FONT_STYLES = gen_font_style();

                                $url = make_sxw($filename);
                                print '<a href="../output_sxw.php?file='.$filename.'">Fare click per visualizzare il file</a><br>';

                        } else print 'selezionare almeno un parametro di ricerca';

		} else print draw_form($thissearch[form],$module,$error,$_GET);
	} else print draw_form($thissearch[form],$module,"",$_GET);


$PAGE[PAGE_CONTENT] = ob_get_contents();
ob_end_clean();

final_render();

?>
