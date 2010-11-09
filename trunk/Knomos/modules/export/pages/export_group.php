<?
include("../../../framework/framework.php");
include('../../../framework/external_lib/oomaker/oomaker.php');

// Define page specific text for template
$PAGE[TXT_TITLE]=EXPORT_MENU_0_9;
$PAGE[PAGE_INTITLE]=EXPORT_MENU_0_9;
$PAGE[PAGE_PICTITLE]="ico_stampa_med.gif";
$module="export";

load_module_language("contact");

$thissearch= load_fwobject("search",$module,9);


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
                        $descr     = strlen(trim($P['descr'])) ? trim($P['descr']) : '';
			$tipo     = strlen(trim($P['tipo'][0])) ? trim($P['tipo'][0]) : '';

                        $wh = array('1 = 1');
                        if ($codice_from)  	$wh[] = "(name >= ".$DB->Quote($codice_from).")";
			if ($codice_to)  	$wh[] = "(name <= ".$DB->Quote($codice_to).")";
                        if ($descr)      	$wh[] = "(descr LIKE ".$DB->Quote("%$descr%").")";
			if ($tipo)  		$wh[] = "(tipo = ".$DB->Quote($tipo).")";

                       if (count($wh) > 0) {

                                $PAGE_STYLE[width] = 21;
                                $PAGE_STYLE[height] = 29.70;

				// gruppi
				$q = $DB->Execute("	SELECT gruppi.id,users.nome FROM gruppi,group_user,users 
							WHERE groupid=gruppi.id AND userid = users.id");
				while ($l = $q->FetchRow()) $GRP[$l[id]][] = $l[nome];
				utf8_encode_array($GRP);

                                //intestazione: info cliente

                                // create table
                                new_table(get_default_table('Tabella1',array(5,8,4,4)));

                                add_table_header('Tabella1',array(      EXPORT_SXW_NAME,
                                                                        EXPORT_SXW_DESCR,
									EXPORT_SXW_TYPE,
                                                                        EXPORT_SXW_TAR
                                                                ),make_bold($oo_def_c));

                                $where = implode(' AND ',$wh);

                                $q = $DB->Execute("     SELECT * 
                                                        FROM gruppi 
                                                        WHERE $where
                                                        ORDER BY name ASC");

				$TIPI = array(EXPORT_SXW_T_GRP,EXPORT_SXW_T_DEP,EXPORT_SXW_T_OFF);

                                while ($l = $q->FetchRow()) {
					utf8_encode_array($l);

                                        add_table_row('Tabella1',array( $l[name],
									$l[descr],
									$TIPI[$l[tipo]],
									nform($l[on_orar])
                                                                        ),
                                                                array(  $oo_def_c,$oo_def,$oo_def_c,$oo_def_c)
                                                        );

				// note
                                if (is_array($GRP[$l[id]]) && $P[print_note] == 1)
                                	add_table_row('Tabella1',array( EXPORT_SXW_USERS.": ".implode(", ",$GRP[$l[id]])),$oo_def);

                                }

                                // create content
                                $OO_PAGE_STYLE = set_page_style($PAGE_STYLE);
                                $OO_PAGE_HEADER = set_page_header("#DATA#\t\t\t\t".EXPORT_SXW_TIT_GRP."\t\t\t".EXPORT_SXW_TIT_PG.": #PAGINA#");
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
