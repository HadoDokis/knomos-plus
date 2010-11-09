<?
include("../../../framework/framework.php");
include('../../../framework/external_lib/oomaker/oomaker.php');

// Define page specific text for template
$PAGE[TXT_TITLE]=EXPORT_MENU_0_1;
$PAGE[PAGE_INTITLE]=EXPORT_MENU_0_1;
$PAGE[PAGE_PICTITLE]="ico_stampa_med.gif";
$module="export";

load_module_language("contact");

$thissearch= load_fwobject("search",$module,2);


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
                        $codice   = is_numeric($P['codice'][realval][0]) ? $P['codice'][realval][0] : '';
                        $operatore= is_numeric($P['operatore'][realval][0]) ? $P['operatore'][realval][0] : '';
                        $title    = strlen(trim($P['title'])) ? trim($P['title']) : '';
                        $note     = strlen(trim($P['note'])) ? trim($P['note']) : '';
			$type     = strlen(trim($P['type'][0])) ? trim($P['type'][0]) : '';
			$type_app = strlen(trim($P['type_app'][0])) ? trim($P['type_app'][0]) : '';
			$gruppo   = strlen(trim($P['group'][0])) ? trim($P['group'][0]) : '';

                        $dest     = is_numeric($P['dest'][realval][0]) ? $P['dest'][realval][0] : '';
			$righe_ann= ereg('^[0-9]{1}$',trim($P['righe_ann'])) ? (int)trim($P['righe_ann']) : 0;			

			if (!is_array($P[print_note])) $P[print_note] = array();
                     $rapida   = in_array(2,$P[print_note]) ? 1 : 0;

                     $wh = array('(1 = 1)');
			if ($codice)    $wh[] = "(codice = ".$DB->Quote($codice).")";
                     if ($day_from)  $wh[] = "(day >= ".$DB->Quote($day_from).")";
                     if ($day_to)    $wh[] = "(day <= ".$DB->Quote($day_to).")";
                     if ($ref_prat)  $wh[] = "(ref_prat = ".$DB->Quote($ref_prat).")";
                     if ($operatore) $wh[] = "(operator RLIKE ".$DB->Quote("[[:<:]]".$operatore."[[:>:]]").")";
                     if ($title)     $wh[] = "(title LIKE ".$DB->Quote("%$title%").")";
                     if ($note)      $wh[] = "(calendar.note LIKE ".$DB->Quote("%$note%").")";
			if ($type)  	  $wh[] = "(type = ".$DB->Quote($type).")";
			if ($type_app)  $wh[] = "(type_app = ".$DB->Quote($type_app).")";

			// gruppo
			if (is_numeric($gruppo)) {
				$users = array();
				$q = $DB->Execute("SELECT * FROM group_user WHERE groupid=".$DB->Quote($gruppo));
                                while ($l = $q->FetchRow()) $users[] = $l[userid];
				$usrlist = '^('.implode('|',$users).')[[:>:]]';
				if (count($users)) $wh[] = "(operator RLIKE ".$DB->Quote($usrlist).")";
			}

                       if (count($wh) > 0) {

                                $PAGE_STYLE[width] = 21;
                                $PAGE_STYLE[height] = 29.70;

				if (!is_array($_GET[print_note])) $_GET[print_note] = array();

                                //intestazione: info cliente
				/*
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
				*/

				// tables
				$tab1 = get_default_table('Tabella1',array(2.5,2,10,6.5),0.002,0);
				$tab2 = get_default_table('Tabella2',array(2.5,2,10,6.5),0.002,1);
				$tab3 = get_default_table('Tabella3',array(2,19),0.002,0);

                                // create table
				if (!in_array(3,$_GET[print_note])) {
                                new_table($tab1);
                                add_table_header('Tabella1',array(EXPORT_SXW_DATE.'/'.EXPORT_SXW_TIME,
								  EXPORT_SXW_OPER,
								  EXPORT_SXW_IMP,
								  EXPORT_SXW_PRAT),make_bold($oo_def_c));
				}
	
                                $where = implode(' AND ',$wh);

				$TIPI = array(1 => 'AVVR', 2 => 'CLIE', 3 => 'COLL', 4 => 'CONS', 5 => 'CORR', 6 => 'FORN');
			
				// operator list
				$j = $DB->Execute("SELECT id,codice,nome FROM users");
				while ($k = $j->FetchRow()) $OPER[$k[id]] = array($k[codice],$k[nome]);

                                $q = $DB->Execute("SELECT calendar.*,
							 pratiche.pr_codice,pratiche.pr_numero,pratiche.pr_oggetto, 
							 pratiche.pr_comp_cod,pratiche.pr_comp_desc,pratiche.pr_giudice,
							 pratiche.pr_nruolo,pratiche.pr_nprovv 
                                                  FROM calendar 
                                                  LEFT JOIN pratiche on ref_prat = pratiche.id
                                                  WHERE $where
                                                  ORDER BY day asc, pratiche.pr_codice asc");

				$prev_day = '';
				$totrows = $q->RecordCount();

				$cur_row = 1;

				$curtab = $tab1;

                                while ($l = $q->FetchRow()) {
					
					utf8_encode_array($l);

					if ($l[day] != $prev_day && in_array(3,$_GET[print_note])) {

						if ($prev_day != '') $OO_TEXT .= render_table($curtab[name]);

						$curtab = ($prev_day == '') ? $tab1 : $tab2;
						new_table($curtab);
                                		add_table_header($curtab[name],
									array(	EXPORT_SXW_DATE.'/'.EXPORT_SXW_TIME,
                                                                  	EXPORT_SXW_OPER,
                                                                  	EXPORT_SXW_IMP,
                                                                  	EXPORT_SXW_PRAT),
						make_bold($oo_def_c));
                                                $prev_day = $l[day];
					}

					list ($yy,$mm,$dd) = explode('-',$l[day]);
					$weekday = date('w',mktime(7,0,0,$mm,$dd,$yy));
					$weekday = $daylist[$weekday];

					$l[day] = mysql_to_date($l[day]);
					$l[time] = mysql_to_time($l[time]);
					if ($l[time] == '00:00') $l[time] = '';
					
					$opers = '';
					$ops = explode(',,',trim($l[operator]));
					$op2 = array();
					foreach ($ops as $o) {
						$op2[] = $OPER[$o][0];
						$used_operators[$o] = 1;
					}
					$opers = count($op2) ? implode(' - ',$op2) : '';

					$f1 = $rapida ? "$l[day]\n$weekday" : "$l[day]\n$l[time]\n$weekday";
					$f2 = "$opers\n";
					$f3 = "$l[title]\n";
					$f4 = $rapida ? $l[pr_codice] :
						EXPORT_SXW_NUM."\t".(int)$l[pr_numero]."\n".
                                              	"$l[pr_codice]\n".
                                              	"$l[pr_oggetto]\n";

					// aggiungi informazioni udienze
					if (in_array(4,$_GET[print_note]) && !$rapida) {
						$prov = ereg('([0-9]{4})([0-9]{2})([0-9]{2})',$l[provenienza])
							? "$pp[3]/$pp[2]/$pp[1]" : ' / / ';

						$f1 .= "\n".EXPORT_SXW_PROV."\n$prov";
						$f3 .= 	
						"\n".
						EXPORT_SXW_AUTO.": $l[pr_comp_cod] / $l[pr_comp_desc]\n".
						EXPORT_SXW_NDEC.":$l[pr_nprovv]\n".
						EXPORT_SXW_GIUD.": $l[pr_giudice]\n".
						EXPORT_SXW_NRUO.": $l[pr_nruolo]";
					}

                                        add_table_row($curtab[name],array( $f1,
									$f2,
									$f3,
									$f4	
                                                               ),
                                                                array(  $oo_def_e,$oo_def,$oo_def,$oo_def)
                                                        );

                                        // note
                                        if ($l[note] && in_array(1,$P[print_note]) && !$rapida)
                                                add_table_row($curtab[name],array( EXPORT_SXW_NOTE.": ".$l[note]),$oo_def);
	
					// spazio appunti
					if ($righe_ann > 0 && !$rapida) {
						$txt = '';
						for ($i=1; $i < $righe_ann; $i++) $txt .= "\n";
						add_table_row($curtab[name],array($txt),$oo_def); 
					}

					$cur_row++;
                                }

				//render last table
				if (in_array(3,$_GET[print_note])) $OO_TEXT .= render_table($curtab[name]);

				//operators
				new_table($tab3);
				add_table_header('Tabella3',array(EXPORT_CODE,EXPORT_USER),make_bold($oo_def_c));
				foreach ($used_operators as $k => $v)
					add_table_row('Tabella3',array($OPER[$k][0],$OPER[$k][1]),array($oo_def_c,$oo_def));
					  
                                // create content
                                $OO_PAGE_STYLE = set_page_style($PAGE_STYLE);
                                $OO_PAGE_HEADER = set_page_header("#DATA#\t\t\t\t".EXPORT_SXW_TIT_SCA."\t\t".EXPORT_SXW_TIT_PG.": #PAGINA#"
);
                                $OO_PAGE_FOOTER = ''; // set_page_footer('#DATA# #ORA#');

                                $header_style = array(color => '#000000', size => '12pt', align => 'start', face => 'Verdana');
                                //$footer_style = array(color => '#ffff00', size => '12pt', align => 'end', face => 'Verdana');
                                $OO_HEADER_STYLE = set_header_style($header_style);
                                $OO_FOOTER_STYLE = ''; // set_footer_style($footer_style);

                                $OO_TABLE_STYLES = gen_table_style();

                                if (!in_array(3,$_GET[print_note])) $OO_TEXT .= render_table('Tabella1');

					$OO_TEXT .= print_text("\n",$oo_def);
				    	$OO_TEXT .= render_table('Tabella3');
				    
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
