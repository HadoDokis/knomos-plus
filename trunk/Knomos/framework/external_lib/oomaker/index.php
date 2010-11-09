<?
// constants
define('NL',"\n");
define('TAB',"\t");
define('TAB2',"\t\t");
define('TAB3',"\t\t\t");

//page
$PAGE_STYLE = array (	width => '21', 
			height => '29.70', 
			/* margins */
			ml => '2.00',
			mr => '2.00',
			mt => '2.00', 
			mb => '2.00', 
			header => '', 
			footer => '');

//fonts
$FONT_STYLES = array();
$DEFAULT_FONT = array(	name => 'Default', 
			color => '#000000',
			face => 'Arial', 
			size => '12pt', 
			b => 0, 
			u => 0, 
			i =>  0, 
			align => 'start',
			/* margins*/
			ml => 0,
			mr => 0);

$FONT_STYLES['Default'] = $DEFAULT_FONT;

////////////////////////
function get_val($str) {
	ereg('^[0-9.]+',trim($str),$pp);
	return (float)$pp[0];
}

/////////////////////////////////
function set_page_style($style) {

	GLOBAL $PAGE_STYLE;

	$w = $PAGE_STYLE[width];
	$h = $PAGE_STYLE[height];

	$orient = ($w > $h) ? 'portrait' : 'landscape';

	$PAGE_STYLE = $style;

	$txt = 
	TAB.'<style:page-master style:name="pm1">'.NL.
	TAB2.'<style:properties fo:page-width="'.$PAGE_STYLE[width].'cm" fo:page-height="'.$PAGE_STYLE[height].'cm" style:num-format="1" style:print-orientation="'.$orient.'" fo:margin-top="'.$PAGE_STYLE[mt].'cm" fo:margin-bottom="'.$PAGE_STYLE[mb].'cm" fo:margin-left="'.$PAGE_STYLE[ml].'cm" fo:margin-right="'.$PAGE_STYLE[mr].'cm" style:writing-mode="lr-tb" style:footnote-max-height="0cm">'.NL.
	TAB2.TAB.'<style:footnote-sep style:width="0.018cm" style:distance-before-sep="0.101cm" style:distance-after-sep="0.101cm" style:adjustment="left" style:rel-width="25%" style:color="#000000"/>'.NL.
	TAB2.'</style:properties>'.NL.
	TAB2.'<style:header-style>'.NL.
	TAB2.TAB.'<style:properties fo:min-height="0.998cm" fo:margin-left="0cm" fo:margin-right="0cm" fo:margin-bottom="0.499cm" style:dynamic-spacing="false"/>'.NL.
	TAB2.'</style:header-style>'.NL.
	TAB2.'<style:footer-style>'.NL.
	TAB2.TAB.'<style:properties fo:min-height="0cm" fo:margin-left="0cm" fo:margin-right="0cm" fo:margin-top="0.499cm"/>'.NL.
	TAB2.'</style:footer-style>'.NL.
	TAB.'</style:page-master>'.NL;

	return $txt;
}

/////////////////////////////////////
function parse_special_fields($txt) {

	$txt = str_replace("#DATA#",date('d/m/Y'),$txt);
	$txt = str_replace("#ORA#",date('H:i'),$txt);
	$txt = str_replace("#PAGINA#",'<text:page-number text:select-page="current"/>',$txt);
	$txt = str_replace("#PAGINE#",'<text:page-count></text:page-count>',$txt);

	return $txt;
}

///////////////////////////////
function set_header_style($f) {

        $txt = 
	TAB2.'<style:style style:name="Header" style:family="paragraph" style:parent-style-name="Standard" style:class="extra">'.NL.
        TAB2.TAB.'<style:properties style:font-name="'.$f[face].'" fo:text-align="'.$f[align].'" fo:color="'.$f[color].'" fo:font-size="'.$f[size].'" style:font-size-asian="'.$f[size].'" style:font-size-complex="'.$f[size].'"/>'.NL.
        TAB2.'</style:style>'.NL;

	return $txt;
}

///////////////////////////////
function set_footer_style($f) {

        $txt = 
        TAB2.'<style:style style:name="Footer" style:family="paragraph" style:parent-style-name="Standard" style:class="extra">'.NL.
        TAB2.TAB.'<style:properties style:font-name="'.$f[face].'" fo:text-align="'.$f[align].'" fo:color="'.$f[color].'" fo:font-size="'.$f[size].'" style:font-size-asian="'.$f[size].'" style:font-size-complex="'.$f[size].'"/>'.NL.
        TAB2.'</style:style>'.NL;

	return $txt;
}

////////////////////////////////
function set_page_header($txt) {

	GLOBAL $PAGE_STYLE;

	$txt = parse_special_fields($txt);

	$txt = 
	TAB2.'<style:header>'.NL.
	TAB3.'<text:p text:style-name="Header">'.$txt.'</text:p>'.NL.
	TAB2.'</style:header>';

	return $txt;
}

////////////////////////////////
function set_page_footer($txt) {

        GLOBAL $PAGE_STYLE;
	
	$txt = parse_special_fields($txt);

	$txt =
	TAB2.'<style:footer>'.NL.
	TAB3.'<text:p text:style-name="Footer">'.$txt.'</text:p>'.NL.
	TAB2.'</style:footer>';

	return $txt;
}

///////////////////////////
function add_font($f) {

	GLOBAL $FONT_STYLES,$DEFAULT_FONT;
	
	if (!isset($f[name]))   return false;
	if (is_array($FONT_STYLES[$f[name]])) return false;

	if (!isset($f[color])) 	$f[color] = 	$FONT_STYLES['Default'][color];
	if (!isset($f[face])) 	$f[face] = 	$FONT_STYLES['Default'][face];
	if (!isset($f[size])) 	$f[size] = 	$FONT_STYLES['Default'][size];
	if (!isset($f[b])) 	$f[b] = 	$FONT_STYLES['Default'][b];
	if (!isset($f[i])) 	$f[i] = 	$FONT_STYLES['Default'][i];
	if (!isset($f[u])) 	$f[u] = 	$FONT_STYLES['Default'][u];
	if (!isset($f[align])) 	$f[align] = 	$FONT_STYLES['Default'][align];
	if (!isset($f[ml]))	$f[ml] =        $FONT_STYLES['Default'][ml];
        if (!isset($f[mr]))	$f[mr] =        $FONT_STYLES['Default'][mr];

	//create font
	$FONT_STYLES[$f[name]] = $f;
	return true;
}


///////////////////////////
function gen_font_style() {

	global $FONT_STYLES;

	foreach ($FONT_STYLES as $k => $f) {

	$bold = $f[b] ? ' fo:font-weight="bold" style:font-weight-asian="bold" style:font-weight-complex="bold"' : '';
	$italic = $f[i] ? ' fo:font-style="italic" style:font-style-asian="italic" style:font-style-complex="italic"': '';
	$underline = $f[u] ? ' style:text-underline="single" style:text-underline-color="font-color"' : '';
	$align = $f[align] ? ' fo:text-align="'.$f[align].'" style:justify-single-word="false"' : '';

	$txt .= TAB2.'<style:style style:name="'.$f[name].'" style:family="paragraph" style:parent-style-name="Standard">'.NL.
	TAB2.TAB.'<style:properties style:font-name="'.$f[face].'" fo:margin-left="'.$f[ml].'cm" fo:margin-right="'.$f[mr].'cm" fo:color="'.$f[color].'" fo:font-size="'.$f[size].'" style:font-size-asian="'.$f[size].'" style:font-size-complex="'.$f[size].'"'.$bold.$italic.$underline.$align.'/>'.NL.
	TAB2.'</style:style>'.NL;
	
	}	

	return $txt;
}

///////////////////////////
function print_text($txt,$font) {

	GLOBAL $FONT_STYLES;

	$txt = str_replace("<","&lt;",$txt);
	$txt = str_replace(">","&gt;",$txt);
	$txt = str_replace("&","&amp;",$txt);
	$txt = str_replace('"',"&quot;",$txt);
	$txt = str_replace("'","&apos;",$txt);
	$txt = str_replace("\n",'<text:line-break/>',$txt);
	$txt = str_replace("\t",'<text:tab-stop/>',$txt);

	if (!is_array($FONT_STYLES[$font[name]])) add_font($font);

	return TAB.'<text:p text:style-name="'.$font['name'].'">'.$txt.'</text:p>'.NL;
}

$TABLE_STYLES = array();

///////////////////////////////////////////////////
function new_table($tab) {

	GLOBAL $TABLE_STYLES,$PAGE_STYLE;

	if (!isset($tab[name]))  return false;
	if (!isset($tab[width]))  $tab[width] = sprintf('%.4f',$PAGE_STYLE - 1.00);
	if (!isset($tab[cols]))  $tab[cols] = 1;
        if (!isset($tab[border]))  $tab[border] = '0.002cm solid #000000';
        if (!isset($tab[padding])) $tab[padding] = '0.097';
	if (!isset($tab[bg_header])) $tab[bg_header] = '#ffffff';
	if (!isset($tab[bg_rows])) $tab[bg_rows] = '#ffffff';

	$tab[open] =
	'<table:table table:name="'.$tab[name].'" table:style-name="'.$tab[name].'">'.NL;

	// set column width
	$def_wid = $tab[width];
	$def_wid = sprintf('%.4f',$def_wid / $tab[cols]);

	for ($i = 1; $i <= $tab[cols]; $i++) {
		$wid = is_array($tab[col_width]) ? $tab[col_width][$i-1] : $def_wid;
		$tab[open] .=
                TAB.'<table:table-column table:style-name="'.$tab[name].'.'.$i.'" style:column-width="'.$wid.'cm" table:number-columns-repeated="1"/>'.NL;

	}

	$tab[close] = '</table:table>'.NL;

	$tab[header_text] = '';
	$tab[rows_text] = '';
	$tab[inserted_rows] = 0;

	$TABLE_STYLES[$tab[name]] = $tab;

}

///////////////////////////
function gen_table_style() {

        global $TABLE_STYLES, $PAGE_STYLE;

        foreach ($TABLE_STYLES as $k => $t) {
	
		$page_x = $PAGE_STYLE[width];
		$table_x = $t[width];

		$margin = sprintf('%.3f',($page_x - $table_x) / 2);
		$col_width = sprintf('%.3f',$table_x / $t[cols]);

		$txt .=
		TAB.'<style:style style:name="'.$t[name].'" style:family="table">'.NL.
		TAB2.'<style:properties fo:vertical-align="middle" style:width="'.$t[width].'cm" fo:margin-left="'.$margin.'cm" fo:margin-right="'.$margin.'cm" table:align="margins"/>'.NL.
		TAB.'</style:style>'.NL;

        	// set column width
	        $def_wid = $t[width];
        	$def_wid = sprintf('%.4f',$def_wid / $t[cols]);

	        for ($i = 1; $i <= $t[cols]; $i++) {
	                $wid = is_array($t[col_width]) ? $t[col_width][$i-1] : $def_wid;
	               	$txt .=
			TAB.'<style:style style:name="'.$t[name].'.'.$i.'" style:family="table-column">'.NL.
               	 	TAB2.'<style:properties fo:vertical-align="middle" style:column-width="'.$wid.'cm"/>'.NL.
                	TAB.'</style:style>'.NL;
        	}

		$txt .=
		TAB.'<style:style style:name="'.$t[name].'.B" style:family="table-cell">'.NL.
		TAB2.'<style:properties fo:vertical-align="middle" fo:background-color="'.$t[bg_header].'" fo:padding="'.$t[padding].'cm" fo:border-left="'.$t[border].'" fo:border-right="none" fo:border-top="'.$t[border].'" fo:border-bottom="'.$t[border].'"/>'.NL.
		TAB.'</style:style>'.NL.
		TAB.'<style:style style:name="'.$t[name].'.C" style:family="table-cell">'.NL.
		TAB2.'<style:properties fo:vertical-align="middle" fo:background-color="'.$t[bg_header].'" fo:padding="'.$t[padding].'cm" fo:border="'.$t[border].'"/>'.NL.
		TAB.'</style:style>'.NL.
		TAB.'<style:style style:name="'.$t[name].'.D" style:family="table-cell">'.NL.
		TAB2.'<style:properties fo:vertical-align="middle" fo:background-color="'.$t[bg_rows].'" fo:padding="'.$t[padding].'cm" fo:border-left="'.$t[border].'" fo:border-right="none" fo:border-top="none" fo:border-bottom="'.$t[border].'"/>'.NL.
		TAB.'</style:style>'.NL.
		TAB.'<style:style style:name="'.$t[name].'.E" style:family="table-cell">'.NL.
		TAB2.'<style:properties fo:vertical-align="middle" fo:background-color="'.$t[bg_rows].'" fo:padding="'.$t[padding].'cm" fo:border-left="'.$t[border].'" fo:border-right="'.$t[border].'" fo:border-top="none" fo:border-bottom="'.$t[border].'"/>'.NL.
		TAB.'</style:style>'.NL;
	}

        return $txt;
}

/////////////////////////////////////////////////////
function get_pos_style($row,$col,$totcols) {

	if ($row > 1) {
		if ($col == $totcols || $totcols == 1) {
			$ret = 'E'; 
		} else $ret = 'D';
	} else {
		if ($col == $totcols) {
                        $ret = 'C';
                } else $ret = 'B';
	}

	return $ret;
}

/////////////////////////////////////////////////////
function add_table_header($name,$contents,$font='Default',$repeat = true) {

	GLOBAL $TABLE_STYLES;

	$TABLE_STYLES[$name][header_text] .=
	($repeat ? TAB.'<table:table-header-rows>'.NL : '').
	TAB.'<table:table-row>'.NL;

	for ($i = 0; $i < count($contents); $i++) {
	
	$style = get_pos_style(1,$i+1,count($contents));

	$TABLE_STYLES[$name][header_text] .=
	TAB2.'<table:table-cell table:style-name="'.$name.'.'.$style.'" table:value-type="string">'.NL.
	TAB3.print_text($contents[$i],$font).
	TAB2.'</table:table-cell>'.NL;
	}

	$TABLE_STYLES[$name][header_text] .=
	TAB.'</table:table-row>'.NL.
	($repeat ? TAB.'</table:table-header-rows>'.NL : '');
	
	$TABLE_STYLES[$name][inserted_rows]++;
}

/////////////////////////////////////////////////////
function add_table_row($name,$contents,$font='Default') {

        GLOBAL $TABLE_STYLES;

        $TABLE_STYLES[$name][rows_text] .=
        TAB.'<table:table-row>'.NL;

        for ($i = 0; $i < count($contents); $i++) {

	$span = (count($contents) == 1) ? $TABLE_STYLES[$name][cols] : 1;
        $style = get_pos_style($TABLE_STYLES[$name][inserted_rows]+1,$i+1,count($contents));

        $TABLE_STYLES[$name][rows_text] .=
        TAB2.'<table:table-cell table:number-columns-spanned="'.$span.'" table:style-name="'.$name.'.'.$style.'" table:value-type="string">'.NL.
        TAB3.print_text($contents[$i],$font).
        TAB2.'</table:table-cell>'.NL;
        }

        $TABLE_STYLES[$name][rows_text] .=
        TAB.'</table:table-row>'.NL;

	$TABLE_STYLES[$name][inserted_rows]++;
}

//////////////////////////////
function render_table($name) {

	GLOBAL $TABLE_STYLES;

	$txt = 
	$TABLE_STYLES[$name][open].
        $TABLE_STYLES[$name][header_text].
        $TABLE_STYLES[$name][rows_text].
        $TABLE_STYLES[$name][close];

	return $txt;
}

////////////////////////
function read_file($f) {

	$fd = fopen($f,'r');
	while (!feof($fd)) $txt .= fread($fd,10000);
	fclose($fd);
	return $txt;
}

//////////////////////////////////
function write_file($f,$content) {

	$fw = fopen($f,'w');
	fwrite($fw,$content);
	fclose($fw);
}

/////////////////////////////////////////////////////////////////////////
/////////////////////////////////////////////////////////////////////////
/////////////////////////////////////////////////////////////////////////

// note: "name" must be unique!
$ver_12 = array(name => 'Verdana12', face => 'Verdana', size => '12pt', b => 0);
$ver_12_b = array(name => 'Verdana12b', face => 'Verdana', size => '12pt', b => 1);
$ar_20_b_u = array(name => 'Arial20bu', face => 'Arial', size => '20pt', b => 0, u => 1, i => 1, align => 'center');
$ver_12_b_end = array(name => 'Verdana12be', face => 'Times New Roman', size => '40pt', b => 1, align => 'end');

// note: "name" must be unique!
$tab = array(	name => 'Tabella1', 
		width => '18.00', 
		cols => 3, 
		border => '0.002cm solid #000000', 
		padding => '0.5',
		bg_header => '#dddddd',
		bg_rows => '#ffffff',
		col_width => array(10.00,2.00,4.00));

new_table($tab);

add_table_header('Tabella1',array('nome','cognome','indirizzo'),$ver_12,false);
add_table_row('Tabella1',array('valerio','morettini','via pratesi'),$ver_12);
add_table_row('Tabella1',array('mario','rossi','via rossi d fsd fsd fds fd sfsd fsdf'),$ver_12_b);
add_table_row('Tabella1',array('mar2io','ross2i','via ross2i'),$ar_20_b_u);
add_table_row('Tabella1',array('valerio','morettini','via pratesi'),$ver_12);
add_table_row('Tabella1',array('mario'),$ver_12_b);
add_table_row('Tabella1',array('mar2io','ross2i','via ross2i'),$ar_20_b_u);
add_table_row('Tabella1',array('valerio','m','via pratesi'),$ver_12);
add_table_row('Tabella1',array('mario','rossi','via rossi d fsd fsd fds fd sfsd fsdf'),$ver_12_b);
add_table_row('Tabella1',array('mar2io','ross2i','via ross2i'),$ar_20_b_u);
add_table_row('Tabella1',array('valerio','morettini','via pratesi'),$ver_12);
add_table_row('Tabella1',array('mario','rossi','via rossi d fsd fsd fds fd sfsd fsdf'),$ver_12_b);
add_table_row('Tabella1',array('mar2io','ross2i','via ross2i'),$ar_20_b_u);

// create content
$OO_PAGE_STYLE = set_page_style($PAGE_STYLE);
$OO_PAGE_HEADER = set_page_header('Pagina #PAGINA# di #PAGINE#');
$OO_PAGE_FOOTER = set_page_footer('#DATA# #ORA#');

$header_style = array(color => '#ff0000', size => '12pt', align => 'end', face => 'Verdana');
$footer_style = array(color => '#ffff00', size => '12pt', align => 'end', face => 'Verdana');
$OO_HEADER_STYLE = set_header_style($header_style);
$OO_FOOTER_STYLE = set_footer_style($footer_style);

$OO_TABLE_STYLES = gen_table_style();

$OO_TEXT = print_text("Prova prova prova \t\t pd fsfd dsfds fsd fds s fds \nfds sd sd s fs frova prova",$ver_12_b);
$OO_TEXT .= render_table('Tabella1');

$OO_FONT_STYLES = gen_font_style();

$content = read_file('modello/content.xml');
$styles = read_file('modello/styles.xml');

$styles = ereg_replace("\t*<OO_PAGE_STYLE/>\r?\n?",$OO_PAGE_STYLE,$styles);
$styles = ereg_replace("\t*<OO_HEADER_STYLE/>\r?\n?",$OO_HEADER_STYLE,$styles);
$styles = ereg_replace("\t*<OO_FOOTER_STYLE/>\r?\n?",$OO_FOOTER_STYLE,$styles);
$styles = ereg_replace("\t*<OO_PAGE_HEADER/>\r?\n?",$OO_PAGE_HEADER,$styles);
$styles = ereg_replace("\t*<OO_PAGE_FOOTER/>\r?\n?",$OO_PAGE_FOOTER,$styles);

$content = ereg_replace("\t*<OO_FONT_STYLES/>\n*",$OO_FONT_STYLES,$content);
$content = ereg_replace("\t*<OO_TABLE_STYLES/>\n*",$OO_TABLE_STYLES,$content);
$content = ereg_replace("\t*<OO_TEXT/>\r?\n?",$OO_TEXT,$content);

$fw = write_file('tmp/content.xml',$content);
$fw = write_file('tmp/styles.xml',$styles);

chdir('./tmp');
@unlink('doc.sxw');
exec('/usr/bin/zip doc.sxw *',$a,$b);

//print '<br>http://framework.cw-portal.com/framework/external_lib/oomaker/tmp/doc.sxw';

header("application/x-openoffice");
header("Content-Disposition: attachment; filename=doc.sxw");
readfile('doc.sxw');
die();
?>
