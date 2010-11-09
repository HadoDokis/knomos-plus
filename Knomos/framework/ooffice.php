<?php
require_once('external_lib/phpdocwriter/lib/include.php');
import('phpdocwriter.pdw_document');
import('phpdocwriter.pdw_textbox');

//$sxw = new pdw_document;

///////////////////////////////////////////////////////////
function init_phpdoc($family='Arial',$size='10') {

	global $sxw,$par_left,$par_right,$par_center,$par_justify,$par_intest;

	// fonts
	$sxw->SetFont(array(family => $family, size => $size, style => 'B'));
	$sxw->SetFont(array(family => $family, size => $size, style => 'U'));
	$sxw->SetFont(array(family => $family, size => $size, style => 'I'));
	$sxw->SetFont(array(family => $family, size => $size, style => ''));
	$sxw->SetLanguage('it','IT');
	$sxw->SetStdFont($family,$size);

	// paragraphs
	$par_intest	= $sxw->AddParaDef(array( align => 'start', margins => '10'));
	$par_left 	= $sxw->AddParaDef(array( align => 'start'));
	$par_right 	= $sxw->AddParaDef(array( align => 'end'));
	$par_center 	= $sxw->AddParaDef(array( align => 'center'));
	$par_justify 	= $sxw->AddParaDef(array( align => 'justify'));
}

///////////////////////////
function parse_text($txt) {

	$txt = eregi_replace("\r\n",'<text:line-break/>',$txt);
	$txt = eregi_replace("(\r|\n)",'<text:line-break/>',$txt);
	$txt = eregi_replace("\t",'<text:tab-stop/>',$txt);
	$txt = eregi_replace("<br>",'<text:line-break/>',$txt);
	$txt = eregi_replace("<b>",'<text:span text:style-name="T1">',$txt);
	$txt = eregi_replace("<u>",'<text:span text:style-name="T2">',$txt);
	$txt = eregi_replace("<i>",'<text:span text:style-name="T3">',$txt);
	$txt = eregi_replace("</(b|u|i)>",'</text:span>',$txt);

	return $txt;
}

///////////////////////////////////////////////////////////////////
function Imposta_pagina($w = 21, $h = 29.7, $margins = '2,2,2,2') {

	global $sxw;

	$sxw->AddPageDef(array('name'=>'Standard', w => $w, h => $h, margins => $margins));
}

////////////////////////////////////
function Scrivi_destra($arr,$distanza = '10', $acapo_prima = 7, $acapo_dopo = 7) {

        global $sxw;

        $txt = implode("\n",$arr);
	$par_intest = $sxw->AddParaDef(array( align => 'start', margins => $distanza));
        $sxw->SetParagraph($par_intest);
        $sxw->Ln($acapo_prima);
        $sxw->Write(parse_text($txt));
        $sxw->Ln($acapo_dopo);
}

////////////////////////////////////
function Scrivi_intestazione($arr,$acapo_prima = 7, $acapo_dopo = 7) {

	global $sxw,$par_intest;

	$txt = implode("\n",$arr);
	$sxw->SetParagraph($par_intest);
	$sxw->Ln($acapo_prima);
	$sxw->Write(parse_text($txt));
	$sxw->Ln($acapo_dopo);
}

/////////////////////////////
function Scrivi($txt) {

	global $sxw,$par_left,$par_right,$par_center,$par_justify;

	$parts = preg_split('!<(/?center|/?left|/?right|/?justify)>!i',$txt,-1,PREG_SPLIT_DELIM_CAPTURE);
	$prev_par = $cur_par = $par_left;
	$sxw->SetParagraph($par_left);

	foreach ($parts as $p) {
		if ($p{0} == '/') continue;
		if (strtolower($p) == 'left') { 
			$prev_par = $cur_par;
			$cur_par = $par_left; 
			$sxw->SetParagraph($par_left); 
			continue; 
		}

		if (strtolower($p) == 'right') { 
			$prev_par = $cur_par;
			$cur_par = $par_right;
			$sxw->SetParagraph($par_right);
			continue;
		}

		if (strtolower($p) == 'center') { 
			$prev_par = $cur_par;
			$cur_par = $par_center;
			$sxw->SetParagraph($par_center);
			continue;
		}

		if (strtolower($p) == 'justify') { 
			$prev_par = $cur_par;
			$cur_par = $par_justify;
			$sxw->SetParagraph($par_justify);
			continue;
		}

		$sxw->Write(parse_text($p));
		$sxw->SetParagraph($prev_par); 
	}
}


?>
