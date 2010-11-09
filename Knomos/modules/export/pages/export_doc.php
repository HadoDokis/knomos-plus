<?
include("../../../framework/framework.php");
include('../../../framework/external_lib/oomaker/oomaker.php');

// Define page specific text for template
$PAGE[TXT_TITLE]=EXPORT_MENU_0_8;
$PAGE[PAGE_INTITLE]=EXPORT_MENU_0_8;
$PAGE[PAGE_PICTITLE]="ico_stampa_med.gif";
$module="export";

load_module_language("contact");

$thissearch= load_fwobject("search",$module,7);


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
			$daylist = array(EXPORT_SXW_WEEK6,EXPORT_SXW_WEEK0,EXPORT_SXW_WEEK1,EXPORT_SXW_WEEK2,EXPORT_SXW_WEEK3,
                                         EXPORT_SXW_WEEK4, EXPORT_SXW_WEEK5);

                        $P = $_GET;

                        $day_from = is_mysql_date($P['day_from']) ? $P['day_from'] : '';
                        $day_to   = is_mysql_date($P['day_to']) ? $P['day_to'] : '';
                        $ref_prat = is_numeric($P['ref_prat'][realval][0]) ? $P['ref_prat'][realval][0] : '';
                        $testo    = strlen(trim($P['testo'])) ? trim($P['testo']) : '';
                        $note     = strlen(trim($P['note'])) ? trim($P['note']) : '';
                        $dest     = is_numeric($P['dest'][realval][0]) ? $P['dest'][realval][0] : '';
                        if (!is_array($P[print_note])) $P[print_note] = array();
                        $rapida   = in_array(2,$P[print_note]) ? 1 : 0;

                        if ($clie) {
                                // tutte le pratiche del cliente
                                $ids = array();
                                $k = $DB->Execute("SELECT id FROM pratiche WHERE pr_ref_idcliente=".$DB->Quote($clie));
                                while ($o = $k->FetchRow()) $ids[] = $o['id'];
                        }

                        $wh = array('(P.id = D.ref_prat)');
                        if ($day_from)  $wh[] = "(data >= ".$DB->Quote($day_from).")";
                        if ($day_to)    $wh[] = "(data <= ".$DB->Quote($day_to).")";
                        if ($ref_prat)  $wh[] = "(ref_prat = ".$DB->Quote($ref_prat).")";
                        if ($testo)     $wh[] = "(descr LIKE ".$DB->Quote("%$testo%").")";
                        if ($note)      $wh[] = "(note LIKE ".$DB->Quote("%$note%").")";

                        if (count($wh) > 1) {

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

                                // operator list
                                $j = $DB->Execute("SELECT id,codice FROM users");
                                while ($k = $j->FetchRow()) $OPER[$k[id]] = $k[codice];
				utf8_encode_array($OPER);
				
                                // create table
                                new_table(get_default_table('Tabella1',array(2.5,5,2,3,1.5,7)));

                                add_table_header('Tabella1',array(      EXPORT_SXW_DATE,
									EXPORT_SXW_DESCR,
									EXPORT_SXW_OPER,
                                                                        EXPORT_SXW_NFILE,
                                                                        EXPORT_SXW_VER,
                                                                        EXPORT_SXW_PRAT
                                                                ),make_bold($oo_def_c));

                                $where = implode(' AND ',$wh);

                                $q = $DB->Execute("      SELECT D.*,P.pr_codice,P.pr_oggetto
                                                        FROM document D,pratiche P 
                                                        WHERE $where AND ref_id = 0
                                                        ORDER BY ref_prat ASC, id ASC");

                                while ($k = $q->FetchRow()) {

	                                $q2 = $DB->Execute("    SELECT D.*,P.pr_codice,P.pr_oggetto
         	                                             	FROM document D,pratiche P 
                	                                        WHERE   P.id = D.ref_prat 
									AND ref_id='$k[id]' 
									AND ref_prat='$k[ref_prat]' 
                                	                        ORDER BY D.version DESC
								LIMIT 1");

					if ($q2->RecordCount() > 0) {
						$l = $q2->FetchRow();	// ci sono altre versioni
					} else $l = $k;			// non ci sono altre versioni

					utf8_encode_array($l);

                                        list ($yy,$mm,$dd) = explode('-',$l[date]);
                                        $weekday = date('w',mktime(7,0,0,$mm,$dd,$yy));
                                        $weekday = $daylist[$weekday];

                                        $opers = '';
                                        $ops = explode(',,',trim($l[operator]));
                                        foreach ($ops as $o) $opers .= $OPER[$o];

                                        add_table_row('Tabella1',array( mysql_to_date($l[data])."\n".$weekday,
                                                                        $l[descr],
                                                                        $opers,
                                                                        $l['filename'],
                                                                        $l['version'],
									$l['pr_codice']."\n".$l['pr_oggetto']
                                                                        ),
                                                                array(  $oo_def_e,$oo_def,$oo_def,$oo_def_c,$oo_def_c,$oo_def
                                                                        )
                                                        );
                                        // note
                                        if ($l[note] && in_array(1,$P[print_note]) && !$rapida)
                                                add_table_row('Tabella1',array( EXPORT_SXW_NOTE.": ".$l[note]),$oo_def);
                                }

                                // create content
                                $OO_PAGE_STYLE = set_page_style($PAGE_STYLE);
                                $OO_PAGE_HEADER = set_page_header("#DATA#\t\t\t\t".EXPORT_SXW_TIT_DOC."\t\t".EXPORT_SXW_TIT_PG.": #PAGINA#");
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

                        } else print EXPORT_SXW_SEARCH;

		} else print draw_form($thissearch[form],$module,$error,$_GET);
	} else print draw_form($thissearch[form],$module,"",$_GET);


$PAGE[PAGE_CONTENT] = ob_get_contents();
ob_end_clean();

final_render();

?>
