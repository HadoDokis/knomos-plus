<?
include("../../../framework/framework.php");
include('../../../framework/external_lib/oomaker/oomaker.php');

// Define page specific text for template
$PAGE[TXT_TITLE]=EXPORT_MENU_0_3;
$PAGE[PAGE_INTITLE]=EXPORT_MENU_0_3;
$PAGE[PAGE_PICTITLE]="ico_stampa_med.gif";
$module="export";

load_module_language("contact");

$thissearch= load_fwobject("search",$module,1);


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

                        $P = $_GET;

			$codice_from = strlen(trim($P['codice_from'])) ? trim($P['codice_from']) : '';
			$codice_to = strlen(trim($P['codice_to'])) ? trim($P['codice_to']) : '';
			$tipo     = is_numeric($P['tipo'][0]) ? $P['tipo'][0] : '';
			$nome	  = strlen(trim($P['nome'])) ? trim($P['nome']) : '';
			$citta	  = strlen(trim($P['citta'])) ? trim($P['citta']) : '';
			$cap	  = strlen(trim($P['cap'])) ? trim($P['cap']) : '';
                        $note     = strlen(trim($P['note'])) ? trim($P['note']) : '';
                        $dest     = is_numeric($P['dest'][realval][0]) ? $P['dest'][realval][0] : '';
                        if (!is_array($P[print_note])) $P[print_note] = array();
                        $rapida   = in_array(2,$P[print_note]) ? 1 : 0;

                        $wh = array('1 = 1');
                        if ($codice_from)  $wh[] = "(codice >= ".$DB->Quote($codice_from).")";
			if ($codice_to)  $wh[] = "(codice <= ".$DB->Quote($codice_to).")";
			if ($tipo > 0) 	$wh[] = "(tipo = ".$DB->Quote($tipo).")";
                        if ($nome)     	$wh[] = "(nome LIKE ".$DB->Quote("%$nome%").")";
			if ($citta)      $wh[] = "(citta LIKE ".$DB->Quote("%$citta%").")";
			if ($cap)      $wh[] = "(cap LIKE ".$DB->Quote("%$cap%").")";
                        if ($note)      $wh[] = "(note LIKE ".$DB->Quote("%$note%").")";

                       if (count($wh) > 0) {

                                $PAGE_STYLE[width] = 21;
                                $PAGE_STYLE[height] = 29.70;

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

                                // create table
                                new_table(get_default_table('Tabella1',array(4,9,8)));

                                add_table_header('Tabella1',array(      EXPORT_SXW_COD,
                                                                        EXPORT_SXW_DENOM,
                                                                        EXPORT_SXW_NTEL
                                                                ),make_bold($oo_def_c));

                                $where = implode(' AND ',$wh);

				$TIPI = array(1 => 'AVVR', 2 => 'CLIE', 3 => 'COLL', 4 => 'CONS', 5 => 'CORR', 6 => 'FORN');

                                $q = $DB->Execute("     SELECT * 
                                                        FROM contact 
                                                        WHERE $where
                                                        ORDER BY codice ASC");

                                while ($l = $q->FetchRow()) {

					utf8_encode_array($l);

					if ($l[data] == '0000-00-00') $l[data] = '';
					
                                        add_table_row('Tabella1',array( $l[codice],
									$rapida ? $l[nome] : 
                                                                        "$l[nome]\n".
									"$l[indirizzo]\n".
									"$l[cap]\t$l[citta]\n".
									"$l[stato]\t- $l[leg_rap]\n".
									EXPORT_SXW_TYPE.": ".$TIPI[$l[tipo]]."\n".
									EXPORT_SXW_DCOST.": $l[data] - $l[luogo]",
									$rapida ? $l[telefono] :
                                                                        "$l[telefono]\n".
									EXPORT_SXW_FAX.":\t$l[fax]\n".
									EXPORT_SXW_CFIS."\t$l[cod_fis]\n".
									EXPORT_SXW_PIVA."\t$l[piva]\n".
									EXPORT_SXW_ISCRCIAAA.": $l[iscr_ccia]\n".
									EXPORT_SXW_ISCRTRIB.": $l[iscr_trib]\n".
									EXPORT_SXW_PERSFIS.": ".($l[tipo_contatto] ? EXPORT_SXW_PERSFIS_NO : EXPORT_SXW_PERSFIS_YES)."\n"
                                                                        ),
                                                                array(  $oo_def,$oo_def,$oo_def)
                                                        );
                                        // note
                                        if ($l[note] && in_array(1,$P[print_note]) && !$rapida)
                                                add_table_row('Tabella1',array(EXPORT_SXW_NOTE.": ".$l[note]),$oo_def);
                                }

                                // create content
                                $OO_PAGE_STYLE = set_page_style($PAGE_STYLE);
                                $OO_PAGE_HEADER = set_page_header("#DATA#\t\t\t".EXPORT_SXW_TIT_ANA."\t\t".EXPORT_SXW_TIT_PG.": #PAGINA#"
);
                                $OO_PAGE_FOOTER = ''; // set_page_footer('#DATA# #ORA#');

                                $header_style = array(color => '#000000', size => '12pt', align => 'start', face => 'Verdana');
                                //$footer_style = array(color => '#ffff00', size => '12pt', align => 'end', face => 'Verdana');
                                $OO_HEADER_STYLE = set_header_style($header_style);
                                $OO_FOOTER_STYLE = ''; // set_footer_style($footer_style);

                                $OO_TABLE_STYLES = gen_table_style();

                                $OO_TEXT .= render_table('Tabella1');
                                $OO_FONT_STYLES = gen_font_style();

                                $url = make_sxw($filename);
                                print '<a href="../output_sxw.php?file='.$filename.'">'.EXPORT_SXW_CLICK.'</a><br>';			
			}

		} else print draw_form($thissearch[form],$module,$error,$_GET);
	} else print draw_form($thissearch[form],$module,"",$_GET);


$PAGE[PAGE_CONTENT] = ob_get_contents();
ob_end_clean();

final_render();

?>
