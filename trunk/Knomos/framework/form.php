<?
/**
 * @package Creative Web Framework
 * @copyright (C) 2000 - 2005 Creative Web Snc
 * @website http://www.creativeweb.it
 * @license http://www.gnu.org/copyleft/gpl.html GNU/GPL
 * Knomos & Creative Web Framework is Free Software
 */

//
//	Creative Web FrameWork
//	Form management
//

/*

DEFINIZIONE	BOX	GRUPPI
$thisform["Fields"]["nomegruppo"]["title"]="Nome del gruppo";
$thisform["Fields"]["nomegruppo"]["content"]="group||1(visibility)||change_hidden::1";
$thisform["Fields"]["nomegruppo"]["line_style"]="css::stile_tr||js::function_to_recall_per_line||csse::stile_tr||jse::function_to_recall_per_line";
$thisform["Fields"]["nomegruppo"]["er_check"]="req::1;;OR::nomegruppo2||AND::nomegruppo3";


*/

//Generic	function



// Rendering type	functions

//
// DRAW	A	TEXT INPUT
//
// Option	Format
// wid:n;maxc:n;disab:1;class=forms

function fw_form_text($input,$name,$trueval="",$error=0)
{
	GLOBAL $FORM_TEMPLATE,$cur_style,$max_col,$GLOBCNT,$CUR_FORMNAME;

	list($InputType,$values,$options)=explode("||",$input["content"]);
	foreach	(explode(";;",$options)	as $value) {
		list($type,$val)=explode("::",$value);
		switch($type){
			case "wid":
				$more_opt.=' size="'.$val.'" ';
				break;
			case "maxc":
				$more_opt.=' maxlength="'.$val.'"	';
				break;
			case "class":
				if ($error==0) $more_opt.=' class="'.$val.'"	';
				break;
			case "classe":
				if ($error==1) $more_opt.=' class="'.$val.'"	';
				break;
			case "js":
				if ($error==0) $more_opt.=' '.$val.' ';
				$jsi=1;
				break;
			case "jse":
				if ($error==1) $more_opt.=' '.$val.'	';
				$jsi=1;
				break;
			case "disab":
				if($val==1){$more_opt.=' DISABLED	';}
				break;
		}
	}

	if (strstr($input[er_check],"min::")) $req=FW_REQ;

	//Set	default	css	& js if no	specific found

	if (!strstr($more_opt,"class")	) {
		if (isset($FORM_TEMPLATE[input_class]) && $error==0) $more_opt .= ' class="'.$FORM_TEMPLATE[input_class].'" ';
		if (isset($FORM_TEMPLATE[input_classe]) && $error==1) $more_opt .= ' class="'.$FORM_TEMPLATE[input_classe].'" ';
	}

	if ($jsi!=1) {
		if (isset($FORM_TEMPLATE[input_js]) && $error==0) $more_opt .= ' '.$FORM_TEMPLATE[input_js].' ';
		if (isset($FORM_TEMPLATE[input_jse]) && $error==1) $more_opt .= ' '.$FORM_TEMPLATE[input_jse].' ';
	}


	$html=$FORM_TEMPLATE[form_line][2];
	//Set	maximun	column used	for	colspan	calculation
	if ($max_col < 2)	{$max_col	=2;}
	$val=($trueval !=	"" ? $trueval	:	$values);
	if (ereg("^[0-9]+(\.|,)[0-9]*$",$val)) $val=str_replace(".",",",$val);



	$output.='<input type="text" id="txt_'.$name.'" name="'.$name.'" value="'.stripslashes($val).'"  '.$more_opt.'   '.$input[js_field].'>';
	if ($GLOBCNT==1) $output.="<script> document.".$CUR_FORMNAME.".".$name.".focus(); </script>";

	if ($error==0) {
		$html=str_replace("%[TR_CSS]%",$cur_style[css],$html);
		$html=str_replace("%[TR_JS]%",$cur_style[js],$html);
	}	else {
		$html=str_replace("%[TR_CSS]%",$cur_style[csse],$html);
		$html=str_replace("%[TR_JS]%",$cur_style[jse],$html);
	}

	if ($error==0) {$html=str_replace("%[TD1]%",$req.$input[title],$html);}
	else $html=str_replace("%[TD1]%",'<img src="'.$FORM_TEMPLATE[field_error_pic].'" border=0 hspace=2 align=absmiddle> '.$input[title],$html);

	$html=str_replace("%[TD2]%",$output,$html);
	return $html;
}

// Rendering type	functions

//
// DRAW	A	TEXT INPUT
//
// Option	Format
// wid:n;maxc:n;disab:1;class=forms

function fw_form_pratiche_value($input,$name,$trueval="",$error=0)
{
	GLOBAL $FORM_TEMPLATE,$cur_style,$max_col,$GLOBCNT,$CUR_FORMNAME;

	list($InputType,$values,$options)=explode("||",$input["content"]);
	foreach	(explode(";;",$options)	as $value) {
		list($type,$val)=explode("::",$value);
		switch($type){
			case "wid":
				$more_opt.=' size="'.$val.'" ';
				break;
			case "maxc":
				$more_opt.=' maxlength="'.$val.'"	';
				break;
			case "class":
				if ($error==0) $more_opt.=' class="'.$val.'"	';
				break;
			case "classe":
				if ($error==1) $more_opt.=' class="'.$val.'"	';
				break;
			case "js":
				if ($error==0) $more_opt.=' '.$val.' ';
				$jsi=1;
				break;
			case "jse":
				if ($error==1) $more_opt.=' '.$val.'	';
				$jsi=1;
				break;
			case "disab":
				if($val==1){$more_opt.=' DISABLED	';}
				break;
		}
	}

	//Set	default	css	& js if no	specific found

	if (!strstr($more_opt,"class")	) {
		if (isset($FORM_TEMPLATE[input_class]) && $error==0) $more_opt .= ' class="'.$FORM_TEMPLATE[input_class].'" ';
		if (isset($FORM_TEMPLATE[input_classe]) && $error==1) $more_opt .= ' class="'.$FORM_TEMPLATE[input_classe].'" ';
	}

	if ($jsi!=1) {
		if (isset($FORM_TEMPLATE[input_js]) && $error==0) $more_opt .= ' '.$FORM_TEMPLATE[input_js].' ';
		if (isset($FORM_TEMPLATE[input_jse]) && $error==1) $more_opt .= ' '.$FORM_TEMPLATE[input_jse].' ';
	}

	if (strstr($input[er_check],"min::")) $req=FW_REQ;

	$html=$FORM_TEMPLATE[form_line][2];
	//Set	maximun	column used	for	colspan	calculation
	if ($max_col < 2)	{$max_col	=2;}
	$val=($trueval !=	"" ? $trueval	:	$values);
	if (ereg("^[0-9]+(\.|,)[0-9]*$",$val)) $val=str_replace(".",",",$val);

	if ($val == "-1") { $vc1="checked";}
	elseif ($val == "-2") { $vc2="checked";}
	else { $vc3="checked"; $realval=$val;}

	$output.='<input type="radio" name="'.$name.'" value="-1" '.$vc1.'> '.PRATICHE_VAL_IND.'&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" '.$vc2.' name="'.$name.'" value="-2"> '.PRATICHE_VAL_INDEXT.'&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" '.$vc3.' name="'.$name.'" value="0"> <input type="text" name="'.$name.'_ignore"	value="'.$realval.'"	'.$more_opt.'	'.$input[js_field].'>	';

	if ($error==0) {
		$html=str_replace("%[TR_CSS]%",$cur_style[css],$html);
		$html=str_replace("%[TR_JS]%",$cur_style[js],$html);
	}	else {
		$html=str_replace("%[TR_CSS]%",$cur_style[csse],$html);
		$html=str_replace("%[TR_JS]%",$cur_style[jse],$html);
	}

	if ($error==0) {$html=str_replace("%[TD1]%",$req.$input[title],$html);}
	else $html=str_replace("%[TD1]%",'<img src="'.$FORM_TEMPLATE[field_error_pic].'" border=0 hspace=2 align=absmiddle> '.$input[title],$html);

	$html=str_replace("%[TD2]%",$output,$html);

	return $html;
}

//
// Render html text
//
// Option	Format
// wid:n;maxc:n;disab:1;class=forms

function fw_html_text($input,$name,$trueval="",$error=0)
{
	GLOBAL $FORM_TEMPLATE,$cur_style,$max_col;
	list($InputType,$values,$options)=explode("||",$input["content"]);
	foreach	(explode(";;",$options)	as $value) {
		list($type,$val)=explode("::",$value);
		switch($type){
		}
	}

	//Set	default	css	& js if no	specific found

	if (!strstr($more_opt,"class")	) {
		if (isset($FORM_TEMPLATE[input_class]) && $error==0) $more_opt .= ' class="'.$FORM_TEMPLATE[input_class].'" ';
		if (isset($FORM_TEMPLATE[input_classe]) && $error==1) $more_opt .= ' class="'.$FORM_TEMPLATE[input_classe].'" ';
	}

	if ($jsi!=1) {
		if (isset($FORM_TEMPLATE[input_js]) && $error==0) $more_opt .= ' '.$FORM_TEMPLATE[input_js].' ';
		if (isset($FORM_TEMPLATE[input_jse]) && $error==1) $more_opt .= ' '.$FORM_TEMPLATE[input_jse].' ';
	}


	$html=$FORM_TEMPLATE[form_line][2];
	//Set	maximun	column used	for	colspan	calculation
	if ($max_col < 2)	{$max_col	=2;}
	$val=($trueval !=	"" ? $trueval	:	$values);
	if (ereg("^[0-9]+(\.|,)[0-9]*$",$val)) $val=str_replace(".",",",$val);

	$output.=$val;
	if ($error==0) {
		$html=str_replace("%[TR_CSS]%",$cur_style[css],$html);
		$html=str_replace("%[TR_JS]%",$cur_style[js],$html);
	}	else {
		$html=str_replace("%[TR_CSS]%",$cur_style[csse],$html);
		$html=str_replace("%[TR_JS]%",$cur_style[jse],$html);
	}

	if ($error==0) {$html=str_replace("%[TD1]%",$input[title],$html);}
	else $html=str_replace("%[TD1]%",'<img src="'.$FORM_TEMPLATE[field_error_pic].'" border=0 hspace=2 align=absmiddle> '.$input[title],$html);

	$html=str_replace("%[TD2]%",$output,$html);
	return $html;
}

// DRAW	A	DATEINPUT
//
// Option	Format
// wid:n;maxc:n;disab:1;class=forms

function fw_form_date($input,$name,$trueval="",$error=0)
{
	GLOBAL $FORM_TEMPLATE,$cur_style,$max_col,$CONF;
	list($InputType,$values,$options)=explode("||",$input["content"]);
	foreach	(explode(";;",$options)	as $value) {
		list($type,$val)=explode("::",$value);
		switch($type){
			case "wid":
				$more_opt.=' size="'.$val.'" ';
				break;
			case "maxc":
				$more_opt.=' maxlength="'.$val.'"	';
				break;
			case "class":
				if ($error==0) $more_opt.=' class="'.$val.'"	';
				break;
			case "classe":
				if ($error==1) $more_opt.=' class="'.$val.'"	';
				break;
			case "js":
				if ($error==0) $more_opt.=' '.$val.' ';
				$jsi=1;
				break;
			case "jse":
				if ($error==1) $more_opt.=' '.$val.'	';
				$jsi=1;
				break;
			case "disab":
				if($val==1){$more_opt.=' DISABLED	';}
				break;
		}
	}

	//CONVERT DATE FORMAT
	//if (is_mysql_date($values) && $values !="")		{$values=mysql_to_date($values);}
	//if (is_mysql_date($trueval) && $trueval !="")		{$trueval=mysql_to_date($trueval);}

	if (is_mysql_date($values) && $values !="")		{$vy=substr($values,0,4); $vm=substr($values,5,2); $vd=substr($values,8,2);}
	if (is_array($trueval))		{$vy=$trueval[year]; $vm=$trueval[month]; $vd=$trueval[day];}
	if (!is_array($trueval) && $trueval !="")		{$vy=substr($trueval,0,4); $vm=substr($trueval,5,2); $vd=substr($trueval,8,2);}
	if ($vy=="0000" && $vm=="00" && $vd=="00" ) {$vy="";$vm="";$vd="";}
	//Set	default	css	& js if no	specific found

	if (!strstr($more_opt,"class")	) {
		if (isset($FORM_TEMPLATE[input_class]) && $error==0) $more_opt .= ' class="'.$FORM_TEMPLATE[input_class].'" ';
		if (isset($FORM_TEMPLATE[input_classe]) && $error==1) $more_opt .= ' class="'.$FORM_TEMPLATE[input_classe].'" ';
	}

	if ($jsi!=1) {
		if (isset($FORM_TEMPLATE[input_js]) && $error==0) $more_opt .= ' '.$FORM_TEMPLATE[input_js].' ';
		if (isset($FORM_TEMPLATE[input_jse]) && $error==1) $more_opt .= ' '.$FORM_TEMPLATE[input_jse].' ';
	}


	$html=$FORM_TEMPLATE[form_line][2];
	//Set	maximun	column used	for	colspan	calculation
	if ($max_col < 2)	{$max_col	=2;}

	$tmp_val = $vd.'/'.$vm.'/'.$vy;
	if ($tmp_val == "//")
	{
		$tmp_val = "";
	}

	$output.='<table style="padding: 0; margin: 0;" cellspacing="0" cellpadding="0"><tr><td style="padding: 0; margin: 0;"><input autocomplete="OFF" type="text"
						 id="dt_'.$name.'" 
						 name="'.$name.'" 
						 onClick="this.select();"
						 value="'.$tmp_val.'"
						 '.$more_opt.'></td>';

	$output.="<td style='padding: 0; margin: 0;'><button id='btn_cal_$name'>Calendario</button></td></tr></table>";

	$output.="<script type='text/javascript'>
	$(function() {
		$.datepicker.setDefaults( $.datepicker.regional[ 'it' ] );
		$( '#dt_$name' )
				.css('border-right', 'none')
				.datepicker()
				.removeClass( 'ui-corner-all' )
				.addClass( 'ui-corner-left' );
		$( '#btn_cal_$name' )
				.button({
            icons: {
                primary: 'ui-icon-calendar'
            },
            text: false
        })
				.removeClass( 'ui-corner-all' )
				.addClass( 'ui-corner-right' )
				.css( 'height', '1.65em' )
				.attr( 'onclick', 'toggleDP(\"#dt_$name\"); return false;' )
        ;
	});
	</script>";

	if ($error==0) {
		$html=str_replace("%[TR_CSS]%",$cur_style[css],$html);
		$html=str_replace("%[TR_JS]%",$cur_style[js],$html);
	}	else {
		$html=str_replace("%[TR_CSS]%",$cur_style[csse],$html);
		$html=str_replace("%[TR_JS]%",$cur_style[jse],$html);
	}

	if (strstr($input[er_check],"min::")) $req=FW_REQ;
	if ($error==0) {$html=str_replace("%[TD1]%",$req.$input[title],$html);}
	else $html=str_replace("%[TD1]%",'<img src="'.$FORM_TEMPLATE[field_error_pic].'" border=0 hspace=2 align=absmiddle> '.$input[title],$html);

	$html=str_replace("%[TD2]%",$output,$html);
	return $html;
}

// DRAW	A	TIME INPUT
//
// Option	Format
// wid:n;maxc:n;disab:1;class=forms

function fw_form_time($input,$name,$trueval="",$error=0)
{
	GLOBAL $FORM_TEMPLATE,$cur_style,$max_col;
	list($InputType,$values,$options)=explode("||",$input["content"]);
	foreach	(explode(";;",$options)	as $value) {
		list($type,$val)=explode("::",$value);
		switch($type){
			case "wid":
				$more_opt.=' size="'.$val.'" ';
				break;
			case "maxc":
				$more_opt.=' maxlength="'.$val.'"	';
				break;
			case "class":
				if ($error==0) $more_opt.=' class="'.$val.'"	';
				break;
			case "classe":
				if ($error==1) $more_opt.=' class="'.$val.'"	';
				break;
			case "js":
				if ($error==0) $more_opt.=' '.$val.' ';
				$jsi=1;
				break;
			case "jse":
				if ($error==1) $more_opt.=' '.$val.'	';
				$jsi=1;
				break;
			case "disab":
				if($val==1){$more_opt.=' DISABLED	';}
				break;
		}
	}

	//CONVERT TIME FORMAT
	if (is_mysql_time($values))		{$values=mysql_to_time($values);}
	if (is_mysql_time($trueval))		{$trueval=mysql_to_time($trueval);}


	//Set	default	css	& js if no	specific found

	if (!strstr($more_opt,"class")	) {
		if (isset($FORM_TEMPLATE[input_class]) && $error==0) $more_opt .= ' class="'.$FORM_TEMPLATE[input_class].'" ';
		if (isset($FORM_TEMPLATE[input_classe]) && $error==1) $more_opt .= ' class="'.$FORM_TEMPLATE[input_classe].'" ';
	}

	if ($jsi!=1) {
		if (isset($FORM_TEMPLATE[input_js]) && $error==0) $more_opt .= ' '.$FORM_TEMPLATE[input_js].' ';
		if (isset($FORM_TEMPLATE[input_jse]) && $error==1) $more_opt .= ' '.$FORM_TEMPLATE[input_jse].' ';
	}


	$html=$FORM_TEMPLATE[form_line][2];
	//Set	maximun	column used	for	colspan	calculation
	if ($max_col < 2)	{$max_col	=2;}

	$output.='<input type="text" name="'.$name.'"	value="'.($trueval !=	"" ? $trueval	:	$values).'"	'.$more_opt.'	'.$input[js_field].'>	';
	if ($GLOBCNT==1) $output.="<script> document.".$CUR_FORMNAME.".".$name.".focus(); </script>";
	if ($error==0) {
		$html=str_replace("%[TR_CSS]%",$cur_style[css],$html);
		$html=str_replace("%[TR_JS]%",$cur_style[js],$html);
	}	else {
		$html=str_replace("%[TR_CSS]%",$cur_style[csse],$html);
		$html=str_replace("%[TR_JS]%",$cur_style[jse],$html);
	}

	if (strstr($input[er_check],"min::")) $req=FW_REQ;
	if ($error==0) {$html=str_replace("%[TD1]%",$req.$input[title],$html);}
	else $html=str_replace("%[TD1]%",'<img src="'.$FORM_TEMPLATE[field_error_pic].'" border=0 hspace=2 align=absmiddle> '.$input[title],$html);

	$html=str_replace("%[TD2]%",$output,$html);
	return $html;
}

//
// DRAW	A	TEXT AREA
//
// Option	Format
// col::n;;row::n;;wrap::w;;disab::1;;class::classe

function fw_form_textarea($input,$name,$trueval="",$error=0)
{
	GLOBAL $FORM_TEMPLATE,$cur_style,$max_col;

	list($InputType,$values,$options)=explode("||",$input["content"]);
	foreach	(explode(";;",$options)	as $value) {
		list($type,$val)=explode("::",$value);
		switch($type){
			case "col":
				$more_opt.=' cols="'.$val.'" ';
				break;
			case "row":
				$more_opt.=' rows="'.$val.'" ';
				break;
			case "wrap":
				$more_opt.=' wrap="'.$val.'" ';
				break;
			case "class":
				if ($error==0) $more_opt.=' class="'.$val.'"	';
				break;
			case "classe":
				if ($error==1) $more_opt.=' class="'.$val.'"	';
				break;
			case "js":
				if ($error==0) $more_opt.=' '.$val.' ';
				$jsi=1;
				break;
			case "jse":
				if ($error==1) $more_opt.=' '.$val.'	';
				$jsi=1;
				break;
			case "disab":
				if($val==1){$more_opt.=' DISABLED	';}
				break;
		}
	}

	//Set	default	css	& js if no	specific found

	if (!strstr($more_opt,"class")	) {
		if (isset($FORM_TEMPLATE[input_class]) && $error==0) $more_opt .= ' class="'.$FORM_TEMPLATE[input_class].'" ';
		if (isset($FORM_TEMPLATE[input_classe]) && $error==1) $more_opt .= ' class="'.$FORM_TEMPLATE[input_classe].'" ';
	}

	if ($jsi!=1) {
		if (isset($FORM_TEMPLATE[input_js]) && $error==0) $more_opt .= ' '.$FORM_TEMPLATE[input_js].' ';
		if (isset($FORM_TEMPLATE[input_jse]) && $error==1) $more_opt .= ' '.$FORM_TEMPLATE[input_jse].' ';
	}

	$html=$FORM_TEMPLATE[form_line][2];
	//Set	maximun	column used	for	colspan	calculation
	if ($max_col < 2)	{$max_col	=2;}

	$output.='<TEXTAREA	name="'.$name.'"	'.$more_opt.'	'.$input[js_field].'>'.stripslashes(($trueval !=	"" ? $trueval	:	$values)).'</TEXTAREA>	';
	if ($GLOBCNT==1) $output.="<script> document.".$CUR_FORMNAME.".".$name.".focus(); </script>";
	if ($error==0) {
		$html=str_replace("%[TR_CSS]%",$cur_style[css],$html);
		$html=str_replace("%[TR_JS]%",$cur_style[js],$html);
	}	else {
		$html=str_replace("%[TR_CSS]%",$cur_style[csse],$html);
		$html=str_replace("%[TR_JS]%",$cur_style[jse],$html);
	}

	if (strstr($input[er_check],"min::")) $req=FW_REQ;
	if ($error==0) {$html=str_replace("%[TD1]%",$req.$input[title],$html);}
	else $html=str_replace("%[TD1]%",'<img src="'.$FORM_TEMPLATE[field_error_pic].'" border=0 hspace=2 align=absmiddle> '.$input[title],$html);

	$html=str_replace("%[TD2]%",$output,$html);
	return $html;
}

//
// DRAW	A	PASSWORD INPUT
//
// Option	Format
// wid::n;;maxc::n;;class=style;;disab::1
function fw_form_password($input,$name,$trueval="",$error=0)
{
	GLOBAL $FORM_TEMPLATE,$cur_style,$max_col;

	list($InputType,$values,$options)=explode("||",$input["content"]);
	foreach	(explode(";;",$options)	as $value) {
		list($type,$val)=explode("::",$value);
		switch($type){
			case "wid":
				$more_opt.=' size="'.$val.'" ';
				break;
			case "maxc":
				$more_opt.=' maxlength="'.$val.'"	';
				break;
			case "class":
				if ($error==0) $more_opt.=' class="'.$val.'"	';
				break;
			case "classe":
				if ($error==1) $more_opt.=' class="'.$val.'"	';
				break;
			case "js":
				if ($error==0) $more_opt.=' '.$val.' ';
				$jsi=1;
				break;
			case "jse":
				if ($error==1) $more_opt.=' '.$val.'	';
				$jsi=1;
				break;
			case "disab":
				if($val==1){$more_opt.=' DISABLED	';}
				break;

		}
	}

	//Set	default	css	& js if no	specific found

	if (!strstr($more_opt,"class")	) {
		if (isset($FORM_TEMPLATE[input_class]) && $error==0) $more_opt .= ' class="'.$FORM_TEMPLATE[input_class].'" ';
		if (isset($FORM_TEMPLATE[input_classe]) && $error==1) $more_opt .= ' class="'.$FORM_TEMPLATE[input_classe].'" ';
	}

	if ($jsi!=1) {
		if (isset($FORM_TEMPLATE[input_js]) && $error==0) $more_opt .= ' '.$FORM_TEMPLATE[input_js].' ';
		if (isset($FORM_TEMPLATE[input_jse]) && $error==1) $more_opt .= ' '.$FORM_TEMPLATE[input_jse].' ';
	}

	$html=$FORM_TEMPLATE[form_line][2];
	//Set	maximun	column used	for	colspan	calculation
	if ($max_col < 2)	{$max_col	=2;}


	$output.='<input type="password" name="'.$name.'"	value="'.stripslashes(($trueval !=	"" ? $trueval	:	$values)).'"	'.$more_opt.'	'.$input[js_field].'>	';
	if ($error==0) {
		$html=str_replace("%[TR_CSS]%",$cur_style[css],$html);
		$html=str_replace("%[TR_JS]%",$cur_style[js],$html);
	}	else {
		$html=str_replace("%[TR_CSS]%",$cur_style[csse],$html);
		$html=str_replace("%[TR_JS]%",$cur_style[jse],$html);
	}

	if (strstr($input[er_check],"min::")) $req=FW_REQ;
	if ($error==0) {$html=str_replace("%[TD1]%",$req.$input[title],$html);}
	else $html=str_replace("%[TD1]%",'<img src="'.$FORM_TEMPLATE[field_error_pic].'" border=0 hspace=2 align=absmiddle> '.$input[title],$html);

	$html=str_replace("%[TD2]%",$output,$html);
	return $html;

}

//
// DRAW	A	HIDDEN FIELD
//
// NO	Option

function fw_form_hidden($input,$name,$trueval="",$error="")
{
	GLOBAL $FORM_TEMPLATE,$cur_style,$max_col;

	list($InputType,$values,$options)=explode("||",$input["content"]);
	$output='<input	type="hidden"	name="'.$name.'" value="'.stripslashes(($trueval !=	"" ? $trueval	:	$values)).'">';
	return $output;
}

//
// DRAW	A	SUBMIT BUTTON
//
// class::style

function fw_form_submit($input,$name)
{

	GLOBAL $FORM_TEMPLATE,$cur_style,$max_col;

	list($InputType,$values,$options)=explode("||",$input["content"]);
	foreach	(explode(";;",$options)	as $value) {
		list($type,$val)=explode("::",$value);
		switch($type){
			case "class":
				$more_opt.=' class="'.$val.'"	';
				break;
			case "js":
				if ($error==0) $more_opt.=' '.$val.' ';
				break;

		}
	}

	//Set	default	css	if no	specific found
	if (!strstr($more_opt,"class="))
	{
		$more_opt.=' class="'.$FORM_TEMPLATE[submit_class].'"	';
	}

	$html=$FORM_TEMPLATE[form_line][1];
	//Set	maximun	column used	for	colspan	calculation
	if ($max_col < 1)	{$max_col	=1;}


	$output='<input	type="submit"	name="'.$name.'" value="'.$values.'" '.$more_opt.'>';
	$html=str_replace("%[TR_CSS]%",$cur_style[css],$html);
	$html=str_replace("%[TR_JS]%",$cur_style[js],$html);
	$html=str_replace("%[TD1]%",$output,$html);
	return $html;

}

//
// START OR	AND	A	GROUP
//
//

function fw_form_group($action,	$name, $input,$result="",$error=0)
{

	GLOBAL $FORM_TEMPLATE,$cur_style,$max_col,$cur_vis;

	if ($action=="s")	{
		list($InputType,$values,$options)=explode("||",$input["content"]);
		foreach	(explode(";;",$options)	as $value) {
			list($type,$val)=explode("::",$value);
			switch ($type){
				case "class":
					if ($error==0) $more_opt.=' class="'.$val.'"	';
					break;
				case "classe":
					if ($error==1) $more_opt.=' class="'.$val.'"	';
					break;
				case "js":
					if ($error==0) $more_opt.=' '.$val.' ';
					$jsi=1;
					break;
				case "jse":
					if ($error==1) $more_opt.=' '.$val.'	';
					$jsi=1;
					break;
				case "set_vis":
					$set_vis=$val;
					break;
				case "start_vis":
					$start_vis=$val;
					break;
			}
		}


		if ($result==1 &&	$result	!="")	{
			$start_vis=1;
		}	elseif ($result==1 &&	$result	!="")	$start_vis=0;

		$html=$FORM_TEMPLATE[form_line][1];
		//Set	maximun	column used	for	colspan	calculation
		if ($max_col < 1)	{$max_col=1;}


		if ($set_vis==1) {

			//is this	group	visible	on load	?
			if ($start_vis==1) {
				$startpic=$FORM_TEMPLATE[group_icon_close];
				$cur_vis="";
			}	else {
				$startpic=$FORM_TEMPLATE[group_icon_open];
				$cur_vis="style=\"display:none\"";

			}

			$more_tit='<a	href="javascript:rigaDOWN(Array(%[VIS_FIELD_ARRAY]%),\'ico_'.$name.'\',\''.$name.'\',\''.$FORM_TEMPLATE[group_icon_close].'\',\''.$FORM_TEMPLATE[group_icon_open].'\')"><img src="'.$startpic.'" name="ico_'.$name.'"	width="16" height="16" border="0" id="ico_'.$name.'"></a>'
			.'<input type="hidden" name="'.$name.'"	value="'.$start_vis.'">';
		}	else $more_tit='';

		if ($error==0) {
			$output=str_replace("%[TITLE]%",$input[title]."	".$more_tit,$FORM_TEMPLATE[group_title_start]);
		}	else $output=str_replace("%[TITLE]%",$input[title]." ".$more_tit,$FORM_TEMPLATE[group_title_starte]);

		$html=str_replace("%[TR_CSS]%",$cur_style[css],$html);
		$html=str_replace("%[TR_JS]%",$cur_style[js],$html);
		if ($set_vis==1) {$html=str_replace("%[TR_VIS]%",'',$html);}
		$html=str_replace("%[TD1]%",$output,$html);


		// GROUP SEPARATOR
		$html2=$FORM_TEMPLATE[form_line][1];
		//Set	maximun	column used	for	colspan	calculation
		if ($max_col < 1)	{$max_col	=1;}

		//restore	normal visibility	of forms element
		$cur_vis="";

		$html2=str_replace("%[TR_CSS]%",$FORM_TEMPLATE[group_separator],$html2);
		$html2=str_replace("%[TR_JS]%","",$html2);
		$html2=str_replace("%[TD1]%","<div ".$FORM_TEMPLATE[group_separator].">&nbsp;</div>",$html2);

		return $html2.$html;
	}	elseif	($action =="e")	{
		$html=$FORM_TEMPLATE[form_line][1];
		//Set	maximun	column used	for	colspan	calculation
		if ($max_col < 1)	{$max_col	=1;}

		//restore	normal visibility	of forms element
		$cur_vis="";

		$html=str_replace("%[TR_CSS]%",$FORM_TEMPLATE[group_separator],$html);
		$html=str_replace("%[TR_JS]%","",$html);
		$html=str_replace("%[TD1]%","<div ".$FORM_TEMPLATE[group_separator].">&nbsp;</div>",$html);


		return $html;

	}
}

//
// DRAW PERMISSION BOX
//
//

function fw_form_perm($input,$name,$module, $formname, $id="", $result="",$error=0)
{

	GLOBAL $FORM_TEMPLATE,$cur_style,$max_col,$CONF;


	list($InputType,$values,$options)=explode("||",$input["content"]);
	foreach	(explode(";;",$options)	as $value) {
		list($type,$val)=explode("::",$value);
		switch ($type){
			case "class":
				if ($error==0) $more_opt.=' class="'.$val.'"	';
				break;
			case "classe":
				if ($error==1) $more_opt.=' class="'.$val.'"	';
				break;
			case "js":
				if ($error==0) $more_opt.=' '.$val.' ';
				$jsi=1;
				break;
			case "jse":
				if ($error==1) $more_opt.=' '.$val.'	';
				$jsi=1;
				break;
			case "set_vis":
				$set_vis=$val;
				break;
			case "start_vis":
				$start_vis=$val;
				break;
		}
	}



	$html=$FORM_TEMPLATE[form_line][1];
	//Set	maximun	column used	for	colspan	calculation
	if ($max_col < 1)	{$max_col=1;}


	$more_tit='<input type="hidden" name="'.$name.'" value="'.$result.'"><a href="javascript: loadLayerWindow(\''.$CONF[url_base].$CONF[dir_framework].$CONF[form_iframe_perm].'?module='.$module.'&field='.$name.'&formname='.$formname.'&id='.$id.$reload.'\',\''.FW_PERMISSION.'\');"><img src="'.$FORM_TEMPLATE[tselect_open].'" title="'.FW_PERM_OPEN.'" border=0></a>';

	if ($set_vis==1) {
			
		//is this	group	visible	on load	?
		if ($start_vis==1) {
			$startpic=$FORM_TEMPLATE[group_icon_close];
			$cur_vis="";
		}	else {
			$startpic=$FORM_TEMPLATE[group_icon_open];
			$cur_vis="style=\"display:none\"";

		}

		$more_tit.='<a	href="javascript:rigaDOWN(Array(%[VIS_FIELD_ARRAY]%),\'ico_'.$name.'\',\''.$name.'\',\''.$FORM_TEMPLATE[group_icon_close].'\',\''.$FORM_TEMPLATE[group_icon_open].'\')"><img src="'.$startpic.'" name="ico_'.$name.'"	width="16" height="16" border="0" id="ico_'.$name.'"></a>';
	}	else $more_tit.='';

	if ($error==0) {
		$output=str_replace("%[TITLE]%",$input[title]."	".$more_tit,$FORM_TEMPLATE[group_title_start]);
	}	else $output=str_replace("%[TITLE]%",$input[title]." ".$more_tit,$FORM_TEMPLATE[group_title_starte]);

	$html=str_replace("%[TR_CSS]%",$cur_style[css],$html);
	$html=str_replace("%[TR_JS]%",$cur_style[js],$html);
	if ($set_vis==1) {$html=str_replace("%[TR_VIS]%",'',$html);}
	$html=str_replace("%[TD1]%",$output,$html);


	// GROUP SEPARATOR
	$html2=$FORM_TEMPLATE[form_line][1];
	//Set	maximun	column used	for	colspan	calculation
	if ($max_col < 1)	{$max_col	=1;}

	//restore	normal visibility	of forms element
	$cur_vis="";

	$html2=str_replace("%[TR_CSS]%",$FORM_TEMPLATE[group_separator],$html2);
	$html2=str_replace("%[TR_JS]%","",$html2);
	$html2=str_replace("%[TD1]%","<div ".$FORM_TEMPLATE[group_separator].">&nbsp;</div>",$html2);



	//IFRAME FOR PERMISSION
	$html3=$FORM_TEMPLATE[form_line][1];
	//Set	maximun	column used	for	colspan	calculation
	if ($max_col < 1)	{$max_col	=1;}

	//restore	normal visibility	of forms element
	$cur_vis="";

	$html3=str_replace("%[TR_CSS]%",$FORM_TEMPLATE[group_separator],$html3);
	$html3=str_replace("%[TR_JS]%","",$html3);
	if ($result !="") $reload="&reloadperms=1";
	$html3=str_replace("%[TD1]%","<input type=\"hidden\" name=\"$name\" value=\"$result\"><iframe  id=\"perms_iframe\" name=\"perms_iframe\" width=\"100%\" src=\"".$CONF[url_base].$CONF[dir_framework].$CONF[form_iframe_perm]."?module=$module&field=$name&formname=$formname&id=$id$reload\" frameBorder=\"0\" scrolling=no>IFRAME</iframe>",$html3);

	//End of iframe


	$html4=$FORM_TEMPLATE[form_line][1];
	//Set	maximun	column used	for	colspan	calculation
	if ($max_col < 1)	{$max_col	=1;}

	//restore	normal visibility	of forms element
	$cur_vis="";

	$html4=str_replace("%[TR_CSS]%",$FORM_TEMPLATE[group_separator],$html4);
	$html4=str_replace("%[TR_JS]%","",$html4);
	$html4=str_replace("%[TD1]%","<div ".$FORM_TEMPLATE[group_separator].">&nbsp;</div>",$html4);

	return $html2.$html.$html4;

}

//
// DRAW PERMISSION BOX
//
//

function fw_form_value($input,$name,$module, $formname,  $result="",$error=0)
{

	GLOBAL $FORM_TEMPLATE,$cur_style,$max_col,$CONF;


	list($InputType,$values,$options)=explode("||",$input["content"]);
	foreach	(explode(";;",$options)	as $value) {
		list($type,$val)=explode("::",$value);
		switch ($type){
			case "class":
				if ($error==0) $more_opt.=' class="'.$val.'"	';
				break;
			case "classe":
				if ($error==1) $more_opt.=' class="'.$val.'"	';
				break;
			case "js":
				if ($error==0) $more_opt.=' '.$val.' ';
				$jsi=1;
				break;
			case "jse":
				if ($error==1) $more_opt.=' '.$val.'	';
				$jsi=1;
				break;
			case "set_vis":
				$set_vis=$val;
				break;
			case "start_vis":
				$start_vis=$val;
				break;
			case "type":
				$type_div=$val;
				break;

		}
	}



	$html=$FORM_TEMPLATE[form_line][1];
	//Set	maximun	column used	for	colspan	calculation
	if ($max_col < 1)	{$max_col=1;}


	$more_tit='<input type="hidden" name="'.$name.'" value="'.$result.'"><a href="javascript: loadLayerWindow(\''.$CONF[url_base].$CONF[dir_framework].'onorari_iframe.php?formname='.$formname.'&tipo='.$type_div.$reload.'\',\''.$input[title].'\');"><img src="'.$FORM_TEMPLATE[tselect_open].'" title="'.FW_PERM_OPEN.'" border=0></a>';

	if ($set_vis==1) {
			
		//is this	group	visible	on load	?
		if ($start_vis==1) {
			$startpic=$FORM_TEMPLATE[group_icon_close];
			$cur_vis="";
		}	else {
			$startpic=$FORM_TEMPLATE[group_icon_open];
			$cur_vis="style=\"display:none\"";

		}

		$more_tit.='<a	href="javascript:rigaDOWN(Array(%[VIS_FIELD_ARRAY]%),\'ico_'.$name.'\',\''.$name.'\',\''.$FORM_TEMPLATE[group_icon_close].'\',\''.$FORM_TEMPLATE[group_icon_open].'\')"><img src="'.$startpic.'" name="ico_'.$name.'"	width="16" height="16" border="0" id="ico_'.$name.'"></a>';
	}	else $more_tit.='';

	if ($error==0) {
		$output=str_replace("%[TITLE]%",$input[title]."	".$more_tit,$FORM_TEMPLATE[group_title_start]);
	}	else $output=str_replace("%[TITLE]%",$input[title]." ".$more_tit,$FORM_TEMPLATE[group_title_starte]);

	$html=str_replace("%[TR_CSS]%",$cur_style[css],$html);
	$html=str_replace("%[TR_JS]%",$cur_style[js],$html);
	if ($set_vis==1) {$html=str_replace("%[TR_VIS]%",'',$html);}
	$html=str_replace("%[TD1]%",$output,$html);


	return $html;

}

//
// DRAW TNF BOX
//
//

function fw_form_tnf($input,$name,$module,$rid,$id,$error=0)
{

	GLOBAL $FORM_TEMPLATE,$cur_style,$max_col,$CONF;

	list($InputType,$values,$options)=explode("||",$input["content"]);
	foreach	(explode(";;",$options)	as $value) {
		list($type,$val)=explode("::",$value);
		switch ($type){
			case "class":
				if ($error==0) $more_opt.=' class="'.$val.'"	';
				break;
			case "classe":
				if ($error==1) $more_opt.=' class="'.$val.'"	';
				break;
			case "js":
				if ($error==0) $more_opt.=' '.$val.' ';
				$jsi=1;
				break;
			case "jse":
				if ($error==1) $more_opt.=' '.$val.'	';
				$jsi=1;
				break;
			case "set_vis":
				$set_vis=$val;
				break;
			case "start_vis":
				$start_vis=$val;
				break;
		}
	}



	$html=$FORM_TEMPLATE[form_line][1];
	//Set	maximun	column used	for	colspan	calculation
	if ($max_col < 1)	{$max_col=1;}

	$more_tit = '				<script language="javascript">
				function check_tnf() { 
				
				code_field_l = document.new_prest.elements[\'codice[text]\'].value.length;
				oper_field_l = document.new_prest.elements[\'operatore[text]\'].value.length;	
				
				if (code_field_l > 0 && oper_field_l > 0) {
					mywf = window.frames[\'tnf_iframe\'];
					mywf.update_fields();
					mywf.copy_values();
					mywf.document.form_iframe.submit();
				} else alert(\''.str_replace("'","\'",PRESTAZIONI_TNF_JSERR).'\');

				}
				</script>';

	$more_tit.='<img src="'.$FORM_TEMPLATE[tnf_refresh].'" onclick="check_tnf();" title="'.FW_TNF_REFRESH.'">';

	if ($set_vis==1) {
			
		//is this	group	visible	on load	?
		if ($start_vis==1) {
			$startpic=$FORM_TEMPLATE[group_icon_close];
			$cur_vis="";
		}	else {
			$startpic=$FORM_TEMPLATE[group_icon_open];
			$cur_vis="style=\"display:none\"";

		}

		$more_tit.='<a	href="javascript:rigaDOWN(Array(%[VIS_FIELD_ARRAY]%),\'ico_'.$name.'\',\''.$name.'\',\''.$FORM_TEMPLATE[group_icon_close].'\',\''.$FORM_TEMPLATE[group_icon_open].'\')"><img src="'.$startpic.'" name="ico_'.$name.'"	width="16" height="16" border="0" id="ico_'.$name.'"></a>';
	}	else $more_tit.='';

	if ($error==0) {
		$output=str_replace("%[TITLE]%",$input[title]."	".$more_tit,$FORM_TEMPLATE[group_title_start]);
	}	else $output=str_replace("%[TITLE]%",$input[title]." ".$more_tit,$FORM_TEMPLATE[group_title_starte]);

	$html=str_replace("%[TR_CSS]%",$cur_style[css],$html);
	$html=str_replace("%[TR_JS]%",$cur_style[js],$html);
	if ($set_vis==1) {$html=str_replace("%[TR_VIS]%",'',$html);}
	$html=str_replace("%[TD1]%",$output,$html);


	// GROUP SEPARATOR
	$html2=$FORM_TEMPLATE[form_line][1];
	//Set	maximun	column used	for	colspan	calculation
	if ($max_col < 1)	{$max_col	=1;}

	//restore	normal visibility	of forms element
	$cur_vis="";

	$html2=str_replace("%[TR_CSS]%",$FORM_TEMPLATE[group_separator],$html2);
	$html2=str_replace("%[TR_JS]%","",$html2);
	$html2=str_replace("%[TD1]%","<div ".$FORM_TEMPLATE[group_separator].">&nbsp;</div>",$html2);



	//IFRAME FOR PERMISSION
	$html3=$FORM_TEMPLATE[form_line][1];
	//Set	maximun	column used	for	colspan	calculation
	if ($max_col < 1)	{$max_col	=1;}

	//restore	normal visibility	of forms element
	$cur_vis="";

	$html3=str_replace("%[TR_CSS]%",$FORM_TEMPLATE[group_separator],$html3);
	$html3=str_replace("%[TR_JS]%","",$html3);
	$html3=str_replace("%[TD1]%","<iframe  id=\"tnf_iframe\" name=\"tnf_iframe\" width=\"100%\" src=\"".$CONF[url_base].$CONF[dir_framework]."calcolo_tnf_iframe.php?rid=$rid&id=$id\" frameBorder=\"0\" scrolling=no>IFRAME</iframe>",$html3);

	//End of iframe


	$html4=$FORM_TEMPLATE[form_line][1];
	//Set	maximun	column used	for	colspan	calculation
	if ($max_col < 1)	{$max_col	=1;}

	//restore	normal visibility	of forms element
	$cur_vis="";

	$html4=str_replace("%[TR_CSS]%",$FORM_TEMPLATE[group_separator],$html4);
	$html4=str_replace("%[TR_JS]%","",$html4);
	$html4=str_replace("%[TD1]%","<div ".$FORM_TEMPLATE[group_separator].">&nbsp;</div>",$html4);

	return $html2.$html.$html3.$html4;



}

//
// DRAW	A	SELECT BOX
//
// Option	Format
// opt:a=>1,a=>2;size:5;mul:1;disab:1

function fw_form_select($input,$name,$result="",$error=0)
{
	GLOBAL $FORM_TEMPLATE,$cur_style,$max_col,$DB;

	list($InputType,$values,$options)=explode("||",$input["content"]);
	foreach	(explode(";;",$options)	as $value) {
		list($type,$val)=explode("::",$value);
		switch($type){
			case "opt":
				$opt=$val;
				break;
			case "size":
				$more_opt.=' size="'.$val.'" ';
				break;
			case "mul":
				if($val==1){$more_opt.=' multiple ';}
				break;
			case "disab":
				if($val==1){$more_opt.=' DISABLED ';}
				break;
			case "class":
				if ($error==0) $more_opt.=' class="'.$val.'"	';
				break;
			case "classe":
				if ($error==1) $more_opt.=' class="'.$val.'"	';
				break;
			case "js":
				if ($error==0) $more_opt.=' '.$val.' ';
				$jsi=1;
				break;
			case "onselectitem":
				$onselectitem=str_replace("%[ID]%", "cbo_$name", $val);
				break;
			case "loademptyitem":
				$loadEmptyItem=$val;				
				break;
			case "jse":
				if ($error==1) $more_opt.=' '.$val.'	';
				$jsi=1;
				break;

		}
	}

	//Set	default	css	& js if no	specific found

	if (!strstr($more_opt,"class")	) {
		if (isset($FORM_TEMPLATE[input_class]) && $error==0) $more_opt .= ' class="'.$FORM_TEMPLATE[input_class].'" ';
		if (isset($FORM_TEMPLATE[input_classe]) && $error==1) $more_opt .= ' class="'.$FORM_TEMPLATE[input_classe].'" ';
	}

	if ($jsi!=1) {
		if (isset($FORM_TEMPLATE[input_js]) && $error==0) $more_opt .= ' '.$FORM_TEMPLATE[input_js].' ';
		if (isset($FORM_TEMPLATE[input_jse]) && $error==1) $more_opt .= ' '.$FORM_TEMPLATE[input_jse].' ';
	}

	$output.='<SELECT id="cbo_'.$name.'" name="'.$name.'[]" '.$more_opt.' '.$input[js_field].'>';
	
	// aggiungo il primo elemnto vuoto se necessario
	if (isset($loadEmptyItem) && $loadEmptyItem == 1 ) 
	{
			$output.='<OPTION	value=""></OPTION>"';
	}
	if (isset($opt)) {
		foreach	(explode(",,",$opt)	as $value) {
			$selec="";
			list($names,$val)=explode("=>",$value);
			if ($result	!= ""){
				if (in_array($val,explode(",,",$result)))	$selec="SELECTED";
				if (is_array($result)){	if (in_array($val,$result))	$selec="SELECTED";}
			}

			else if	(in_array($val,explode(",,",$values))) $selec="SELECTED";
			$output.='<OPTION	value="'.$val.'" '.$selec.'>'.$names."</OPTION>\n";
		}
	}
	if (isset($input["from_sql"])) {
		list($query,$optionsql)=explode("||",$input["from_sql"]);
		foreach	(explode(";;",$optionsql)	as $value) {
			list($type,$val)=explode("::",$value);
			switch($type){
				case "val":
					$valsql=$val;
					break;
				case "text":
					$textsql=$val;
					break;
				case "perm":
					$perm=$val;
					break;
				case "mod":
					$module=$val;
					break;
			}
		}

		//Check	for permission
		if ($perm==1 &&	isset($module))
		{
			$rs = @$DB->Execute(perm_sql_read($query,$module));
		}	else $rs = @$DB->Execute($query);


		//get	Sql	results
		while	(!$rs->EOF)	{
			$selec="";
			$row=$rs->FetchRow();

			//Check	if we	have to	select something,	it looks strange but it's	ok
			if (!is_array($result))	{
				if ($result	!= ""){
					if (in_array($row[$valsql],explode(",,",$result))) $selec="SELECTED";
				}	elseif (in_array($row[$valsql],explode(",,",$values))) $selec="SELECTED";
			}	else {
				if ($result	!= ""){if	(in_array($row[$valsql],$result))	$selec="SELECTED";}
				else if	(in_array($row[$valsql],explode(",,",$values)))	$selec="SELECTED";
			}


			$output.='<OPTION	value="'.$row[$valsql].'"	'.$selec.'>'.select_complete($row,$textsql)."</OPTION>\n";

		}


	}

	$output.='</SELECT>';
	if (isset($onselectitem))
	{
		$output.='<script>$( "#cbo_'.$name.'" ).combobox({ selected: function(event, ui) { '.$onselectitem.' } });</script>';
	} else {
		$output.='<script>$( "#cbo_'.$name.'" ).combobox();</script>';
	}

	$html=$FORM_TEMPLATE[form_line][2];
	//Set	maximun	column used	for	colspan	calculation
	if ($max_col < 2)	{$max_col	=2;}
	if ($error==0) {
		$html=str_replace("%[TR_CSS]%",$cur_style[css],$html);
		$html=str_replace("%[TR_JS]%",$cur_style[js],$html);
	}	else {
		$html=str_replace("%[TR_CSS]%",$cur_style[csse],$html);
		$html=str_replace("%[TR_JS]%",$cur_style[jse],$html);
	}
	if (strstr($input[er_check],"min::")) $req=FW_REQ;
	if ($error==0) {$html=str_replace("%[TD1]%",$req.$input[title],$html);}
	else $html=str_replace("%[TD1]%",'<img src="'.$FORM_TEMPLATE[field_error_pic].'" border=0 hspace=2 align=absmiddle> '.$input[title],$html);

	$html=str_replace("%[TD2]%",$output,$html);
	return $html;

}

//
// DRAW	A MSELECT BOX
//
// Option	Format
// opt:a=>1,a=>2;size:5;mul:1;disab:1

function fw_form_mselect($input,$name,$result=FALSE,$error=0,$formname="")
{
	GLOBAL $FORM_TEMPLATE,$cur_style,$max_col,$DB;

	list($InputType,$values,$options)=explode("||",$input["content"]);
	foreach	(explode(";;",$options)	as $value) {
		list($type,$val)=explode("::",$value);
		switch($type){
			case "opt":
				$opt=$val;
				break;
			case "size":
				$more_opt.=' size="'.$val.'" ';
				break;
			case "disab":
				if($val==1){$more_opt.=' DISABLED ';}
				break;
			case "class":
				if ($error==0) $more_opt.=' class="'.$val.'"	';
				break;
			case "classe":
				if ($error==1) $more_opt.=' class="'.$val.'"	';
				break;
			case "js":
				if ($error==0) $more_opt.=' '.$val.' ';
				$jsi=1;
				break;
			case "jse":
				if ($error==1) $more_opt.=' '.$val.'	';
				$jsi=1;
				break;
			case "url":
				$url=$val;
				break;
			case "word":
				$word=$val;
				break;

		}
	}

	if ($result != FALSE) {$cur_res=$result;}
	else $cur_res=$values;
	if (is_array($cur_res)) $cur_res=implode(",,",$result);



	//Set	default	css	& js if no	specific found

	if (!strstr($more_opt,"class")	) {
		if (isset($FORM_TEMPLATE[input_class]) && $error==0) $more_opt .= ' class="'.$FORM_TEMPLATE[input_class].'" ';
		if (isset($FORM_TEMPLATE[input_classe]) && $error==1) $more_opt .= ' class="'.$FORM_TEMPLATE[input_classe].'" ';
	}

	if ($jsi!=1) {
		if (isset($FORM_TEMPLATE[input_js]) && $error==0) $more_opt .= ' '.$FORM_TEMPLATE[input_js].' ';
		if (isset($FORM_TEMPLATE[input_jse]) && $error==1) $more_opt .= ' '.$FORM_TEMPLATE[input_jse].' ';
	}

	if (isset($url)) $more_tit=' <a href="#_" onClick="javascript: loadLayerWindow(\''.$url.'\'+ RealEscape( document.'.$formname.'.elements[\''.$name.'[text]\'].value) +\'&formname='.$formname.'&fieldname='.$name.'[text]\',\''.$input[title].'\');"><img src="'.$FORM_TEMPLATE[tselect_open].'" title="'.FW_TSEL_OPEN.'" border=0></a>';
	$output.='<table width="100%" border="0" cellpadding="0" cellspacing="0" class="operatori">
                  <tr>
                    <td width="1%">%SEL%<input type="hidden" value="'.$cur_res.'" name="'.$name.'"></td>
                    <td><a href="javascript:loadLayerWindow(\''.$url.'\'+\'&formname='.$formname.'&fieldname=ignore_'.$name.'\',\''.$input[title].'\');"><img src="%[IMAGE_GPATH]%ico/ico_aggiunge_peq.gif" width="16" height="16" border="0" align="absmiddle"></a> <a href="javascript:loadLayerWindow(\''.$url.'\'+\'&formname='.$formname.'&fieldname=ignore_'.$name.'\',\''.$input[title].'\');">'.FW_INSERT.' '.$word.'</a> <br><br>
                      <a href="javascript:msel_delete(this.document.'.$formname.'.ignore_'.$name.');"><img src="%[IMAGE_GPATH]%ico/ico_delete_peq.gif" width="16" height="16" border="0" align="absmiddle"></a> <a href="javascript:msel_delete(this.document.'.$formname.'.ignore_'.$name.');">'.FW_DELETE.' '.$word.' </a><br><br>
                      <a href="javascript:msel_moveup(this.document.'.$formname.'.ignore_'.$name.');"><img src="%[IMAGE_GPATH]%ico/ico_fle_up_peq.gif" width="16" height="16" border="0" align="absmiddle" ></a> <a href="javascript:msel_movedown(this.document.'.$formname.'.ignore_'.$name.');"><img src="%[IMAGE_GPATH]%ico/ico_fle_down_peq.gif" width="16" height="16" border="0" align="absmiddle"></a> <strong>'.FW_MOVE.' '.$word.'</strong> 
                       </td>
                  </tr>
                </table>';


	$outputsel='<SELECT name="ignore_'.$name.'" multiple '.$more_opt.' '.$input[js_field].'>';

	/*
	 if (isset($opt)) {
		foreach	(explode(",,",$opt)	as $value) {
		$selec="";
		list($names,$val)=explode("=>",$value);
		if ($result	!= ""){
		if (in_array($val,explode(",,",$result)))	$selec="SELECTED";
		if (is_array($result)){	if (in_array($val,$result))	$selec="SELECTED";}
		}
			
		else if	(in_array($val,explode(",,",$values))) $selec="SELECTED";
		$output.='<OPTION	value="'.$val.'" '.$selec.'>'.$names."</OPTION>\n";
		}
		}
		*/

	foreach (explode(",,",$cur_res) as $curv)
	{
		if (isset($input["from_sql"]) && $curv!="") {
			list($query,$optionsql)=explode("||",$input["from_sql"]);
			foreach	(explode(";;",$optionsql)	as $value) {
				list($type,$val)=explode("::",$value);
				switch($type){
					case "val":
						$valsql=$val;
						break;
					case "text":
						$textsql=$val;
						break;
					case "perm":
						$perm=$val;
						break;
					case "mod":
						$module=$val;
						break;
				}
			}

			$rs = @$DB->Execute(str_replace("%ID%",$curv,$query));


			//get	Sql	results
			while	(!$rs->EOF)	{
				$selec="";
				$row=$rs->FetchRow();
				$outputsel.='<OPTION	value="'.$row[$valsql].'">'.select_complete($row,$textsql)."</OPTION>\n";
			}
		}
	}


	$outputsel.='</SELECT>';

	$html=$FORM_TEMPLATE[form_line][2];
	//Set	maximun	column used	for	colspan	calculation
	if ($max_col < 2)	{$max_col	=2;}
	if ($error==0) {
		$html=str_replace("%[TR_CSS]%",$cur_style[css],$html);
		$html=str_replace("%[TR_JS]%",$cur_style[js],$html);
	}	else {
		$html=str_replace("%[TR_CSS]%",$cur_style[csse],$html);
		$html=str_replace("%[TR_JS]%",$cur_style[jse],$html);
	}
	if (strstr($input[er_check],"min::")) $req=FW_REQ;
	if ($error==0) {$html=str_replace("%[TD1]%",$req.$input[title],$html);}
	else $html=str_replace("%[TD1]%",'<img src="'.$FORM_TEMPLATE[field_error_pic].'" border=0 hspace=2 align=absmiddle> '.$input[title],$html);

	$html=str_replace("%[TD2]%",str_replace("%SEL%",$outputsel,$output),$html);
	return $html;

}

//
// DRAW	A TEXT SELECT BOX
//
// Option	Format
// opt:a=>1,a=>2;size:5;mul:1;disab:1

function fw_form_text_select($input,$name,$result="",$error=0,$formname,$moduleo)
{
	GLOBAL $FORM_TEMPLATE,$cur_style,$max_col,$DB,$TSEL_JS,$LAST_LOADED_OBJ;

	list($InputType,$values,$options)=explode("||",$input["content"]);
	foreach	(explode(";;",$options)	as $value) {
		list($type,$val)=explode("::",$value);
		switch($type){
			case "wid":
				$more_opt.=' size="'.$val.'" ';
				break;
			case "opt":
				$opt=$val;
				break;
			case "mul":
				//if($val==1){$more_opt.=' multiple	';}
				break;
			case "disab":
				if($val==1){$more_opt.=' DISABLED	';}
				break;
			case "class":
				if ($error==0) $more_opt.=' class="'.$val.'"	';
				break;
			case "classe":
				if ($error==1) $more_opt.=' class="'.$val.'"	';
				break;
			case "js":
				if ($error==0) $more_opt.=' '.$val.' ';
				$jsi=1;
				break;
			case "jse":
				if ($error==1) $more_opt.=' '.$val.'	';
				$jsi=1;
				break;
			case "url":
				$url=$val;
				break;

		}
	}

	if($result=="") $result=$values;
	if (is_array($result) && strlen($result[text])==0) { $restmp=$result[realval][0]; unset($result); $result=$restmp;}

	if (is_array($result)) {$outval=$result[text];}
	elseif (!is_array($result) && strlen($result)>0) {
		list ($tsql,$toption) = explode ("||",$input[from_sql]);
			
		foreach (explode(";;",$toption) as $topt)
		{
			list ($tokey,$toval)=explode("::",$topt);
			switch ($tokey)
			{
				case "val":
					$valsql=$toval;
					break;
				case "text":
					$textsql=$toval;
					break;
				case "perm":
					$perm=$toval;
					break;
				case "mod":
					$module=$toval;
					break;
				case "mul":
					$mults=$toval;
					break;
				case "tab":
					$tab=$toval;
					break;
				case "ids":
					$ids=$toval;
					break;
					//				case "fid":
					//					$fid=$toval;
					break;

			}
		}
		if (!isset($ids)) $ids="id";
		if (!isset($tab)) $tab=$module;

		$rs = @$DB->Execute(str_replace("%[VAL]%",$result,"SELECT * FROM $tab WHERE $ids='%[VAL]%'"));

		$row=$rs->FetchRow();
		$outval=$row[$textsql];



	}


	if (isset($url)) {

		$more_tit='<a href="#_" onClick="javascript: loadLayerWindow(\''.$url.'\'+ RealEscape( document.'.$formname.'.elements[\''.$name.'[text]\'].value) +\'&formname='.$formname.'&fieldname='.$name.'[text]\',\''.$input[title].'\');"><img src="'.$FORM_TEMPLATE[tselect_open].'" title="'.FW_TSEL_OPEN.'" border=0></a>';
	}


	//Set	default	css	& js if no	specific found

	if (!strstr($more_opt,"class")	) {
		if (isset($FORM_TEMPLATE[input_class]) && $error==0) $more_opt .= ' class="'.$FORM_TEMPLATE[input_class].'" ';
		if (isset($FORM_TEMPLATE[input_classe]) && $error==1) $more_opt .= ' class="'.$FORM_TEMPLATE[input_classe].'" ';
	}

	if ($jsi!=1) {
		if (isset($FORM_TEMPLATE[input_js]) && $error==0) $more_opt .= ' '.$FORM_TEMPLATE[input_js].' ';
		if (isset($FORM_TEMPLATE[input_jse]) && $error==1) $more_opt .= ' '.$FORM_TEMPLATE[input_jse].' ';
	}

	$html=$FORM_TEMPLATE[form_line][2];
	//Set	maximun	column used	for	colspan	calculation
	if ($max_col < 2)	{$max_col=2;}


	$output.='<input type="text" name="'.$name.'[text]" autocomplete="off" onKeyPress="if (event.keyCode == 13) return false; " value="'.stripslashes(htmlspecialchars($outval)).'" '.$more_opt.' '.$input[js_field].'><input type="hidden" name="'.$name.'[realval]" value="'.($trueval[text] != "" ? $trueval[hidden] : "").'"> '.$more_tit;

	if ($error==0) {
		$html=str_replace("%[TR_CSS]%",$cur_style[css],$html);
		$html=str_replace("%[TR_JS]%",$cur_style[js],$html);
	}	else {
		$html=str_replace("%[TR_CSS]%",$cur_style[csse],$html);
		$html=str_replace("%[TR_JS]%",$cur_style[jse],$html);
	}
	if (strstr($input[er_check],"min::")) $req=FW_REQ;
	if ($error==0) {$html=str_replace("%[TD1]%",$req.$input[title],$html);}
	else $html=str_replace("%[TD1]%",'<img src="'.$FORM_TEMPLATE[field_error_pic].'" border=0 hspace=2 align=absmiddle> '.$input[title],$html);

	$html=str_replace("%[TD2]%",$output,$html);
	return $html;
}

//
// DRAW	A	CHECKBOX or	radio
//
// Option	Format
// opt:a=>1,a=>2;size:5;mul:1;disab:1

function fw_form_checkbox($input,$name,$result="",$error=0)
{
	GLOBAL $FORM_TEMPLATE,$cur_style,$max_col,$DB;

	list($InputType,$values,$options)=explode("||",$input["content"]);
	foreach	(explode(";;",$options)	as $value) {
		list($type,$val)=explode("::",$value);
		switch($type){
			case "opt":
				$opt=$val;
				break;
			case "size":
				$size=$val;
				break;
			case "mul":
				if($val==1){$mul=1;}
				break;
			case "disab":
				if($val==1){$more_opt.=' DISABLED	';}
				break;
			case "class":
				if ($error==0) $more_opt.=' class="'.$val.'"	';
				break;
			case "classe":
				if ($error==1) $more_opt.=' class="'.$val.'"	';
				break;
			case "js":
				if ($error==0) $more_opt.=' '.$val.' ';
				$jsi=1;
				break;
			case "jse":
				if ($error==1) $more_opt.=' '.$val.'	';
				$jsi=1;
				break;

		}
	}

	//Set	default	css	& js if no	specific found

	if (!strstr($more_opt,"class")	) {
		if (isset($FORM_TEMPLATE[input_class]) && $error==0) $more_opt .= ' class="'.$FORM_TEMPLATE[input_class].'" ';
		if (isset($FORM_TEMPLATE[input_classe]) && $error==1) $more_opt .= ' class="'.$FORM_TEMPLATE[input_classe].'" ';
	}

	if ($jsi!=1) {
		if (isset($FORM_TEMPLATE[input_js]) && $error==0) $more_opt .= ' '.$FORM_TEMPLATE[input_js].' ';
		if (isset($FORM_TEMPLATE[input_jse]) && $error==1) $more_opt .= ' '.$FORM_TEMPLATE[input_jse].' ';
	}



	if (isset($opt)) {
		foreach	(explode(",,",$opt)	as $value) {
			$selec="";
			list($names,$val)=explode("=>",$value);
			if ($result	!= ""){
				if (in_array($val,explode(",,",$result)))	$selec="CHECKED";
				if (is_array($result)){	if (in_array($val,$result))	$selec="CHECKED";}
			}

			else if	(in_array($val,explode(",,",$values))) $selec="CHECKED";
			$option_form[$val][output]=$names;
			$option_form[$val][check]=$selec;
		}
	}
	if (isset($input["from_sql"])) {
		list($query,$optionsql)=explode("||",$input["from_sql"]);
		foreach	(explode(";;",$optionsql)	as $value) {
			list($type,$val)=explode("::",$value);
			switch($type){
				case "val":
					$valsql=$val;
					break;
				case "text":
					$textsql=$val;
					break;
				case "perm":
					$perm=$val;
					break;
				case "mod":
					$module=$val;
					break;
			}
		}

		//Check	for	permission
		if ($perm==1 &&	isset($module))
		{
			$rs	=	@$DB->Execute(perm_sql_read($query,$module));
		}	else $rs = @$DB->Execute($query);

		//get	Sql	results
		while	(!$rs->EOF)	{
			$selec="";
			$row=$rs->FetchRow();

			//Check	if we	have to	select something,	it looks strange but it's	ok
			if (!is_array($result))	{
				if ($result	!= ""){
					if (in_array($row[$valsql],explode(",,",$result))) $selec="CHECKED";
				}	elseif (in_array($row[$valsql],explode(",,",$values))) $selec="CHECKED";
			}	else {
				if ($result	!= ""){if	(in_array($row[$valsql],$result))	$selec="CHECKED";}
				else if	(in_array($row[$valsql],explode(",,",$values)))	$selec="CHECKED";
			}

			$option_form[$row[$valsql]][output]=select_complete($row,$textsql);
			$option_form[$row[$valsql]][check]=$selec;

		}


	}
	//start	table
	$html2.=$FORM_TEMPLATE[form_table_nested_start];


	if ($size	>	3	|| $size < 1)	trigger_error(FW_ERROR_NOVALIDSIZE,E_USER_ERROR);
	if (count($option_form)	<	3) $size=count($option_form);
	$html.=$FORM_TEMPLATE[form_line][1];
	//Set	maximun	column used	for	colspan	calculation
	if ($max_col < $size)	{$max_col	=$size;}

	//If just	one	value	we use checkbox
	if (count($option_form)	== 1)	{$type_form="checkbox";	$input_name=$name;}
	//If more	value	but	multi	disabled then	use	radio
	if (count($option_form)	>	1	&& $mul!=1)	{$type_form="radio"; $input_name=$name;}
	//If more	value	but	multi	disabled then	use	radio
	if (count($option_form)	>	1	&& $mul==1)	{$type_form="checkbox";$input_name=$name.'[]';}

	$cnt=1;
	$cntot=1;
	$row=1;

	if (strstr($input[er_check],"min::")) $req=FW_REQ;
	//Draw Checkbox	Header
	if (isset($input[title]))	{
		$html2.=$FORM_TEMPLATE[form_row_nested_start].str_replace("%[COLSPAN]%",$size,$FORM_TEMPLATE[form_cell_nested_start]).$req.$input[title].'</td></tr>';
	}

	$html2.=$FORM_TEMPLATE[form_row_nested_start];

	//Draw checkbox	or radio for each	option
	foreach	($option_form	as $k1 =>	$v1)
	{
		$td[$cnt]="<input	type=\"$type_form\"	name=\"$input_name\" value=\"$k1\" ".$v1[check]."	$more_opt>".$v1[output];
		$cnt++;
		$cntot++;
		if ($cnt > $size ||	$cntot > count($option_form))	{
			$cnt=1;
			$row++;
			foreach	($td as	$k2	=> $v2)
			{
				$html2.=str_replace("%[COLSPAN]%",$size,$FORM_TEMPLATE[form_cell_nested_start]).$v2.'</td>';
			}

			if ($cntot <=	count($option_form)) {
				$html2.='</tr>'.$FORM_TEMPLATE[form_row_nested_start];
				$td[1]="&nbsp;";$td[2]="&nbsp;";$td[3]="&nbsp;";
			}
		}
	}
	$html2 .='</table>';
	if ($error==0) {
		$html=str_replace("%[TR_CSS]%",$cur_style[css],$html);
		$html=str_replace("%[TR_JS]%",$cur_style[js],$html);
	}	else {
		$html=str_replace("%[TR_CSS]%",$cur_style[csse],$html);
		$html=str_replace("%[TR_JS]%",$cur_style[jse],$html);
	}

	$html=str_replace("%[TD1]%",$html2,$html);
	return $html;

}

//
// DRAW	A	FILE UPLOAD
//
// Option	Format
// disab:1;multi:x;cd:/img;res:w200=>/img/thumb,h200=>/img/thumb;post:a;prev:/img/thumb

function fw_form_file($input,$name,$trueval="")
{
	GLOBAL $FORM_TEMPLATE,$CONF,$cur_style;
	list($InputType,$values,$options)=explode("||",$input["content"]);
	foreach	(explode(";;",$options)	as $value) {
		list($type,$val)=explode("::",$value);
		switch($type){
			case "disab":
				if($val==1){$more_opt.=' DISABLED	';}
				break;
			case "cd":
				$dp[0]["path"]=$val;
				$cnt++;
				break;
			case "prev":
				$prev=$val;
				$cnt++;
				break;
			case "post":
				$post=$val;
				break;
			case "class":
				if ($error==0) $more_opt.=' class="'.$val.'"	';
				break;
			case "classe":
				if ($error==1) $more_opt.=' class="'.$val.'"	';
				break;
			case "js":
				if ($error==0) $more_opt.=' '.$val.' ';
				$jsi=1;
				break;
			case "jse":
				if ($error==1) $more_opt.=' '.$val.'	';
				$jsi=1;
				break;

		}
	}

	//Set	default	css	& js if no	specific found

	if (!strstr($more_opt,"class")	) {
		if (isset($FORM_TEMPLATE[input_class]) && $error==0) $more_opt .= ' class="'.$FORM_TEMPLATE[input_class].'" ';
		if (isset($FORM_TEMPLATE[input_classe]) && $error==1) $more_opt .= ' class="'.$FORM_TEMPLATE[input_classe].'" ';
	}

	if ($jsi!=1) {
		if (isset($FORM_TEMPLATE[input_js]) && $error==0) $more_opt .= ' '.$FORM_TEMPLATE[input_js].' ';
		if (isset($FORM_TEMPLATE[input_jse]) && $error==1) $more_opt .= ' '.$FORM_TEMPLATE[input_jse].' ';
	}

	$output.='<INPUT TYPE="file" name="'.$name.'"	'.$more_opt.'>';

	$html=$FORM_TEMPLATE[form_line][2];
	//Set	maximun	column used	for	colspan	calculation
	if ($max_col < 2)	{$max_col	=2;}
	if ($error==0) {
		$html=str_replace("%[TR_CSS]%",$cur_style[css],$html);
		$html=str_replace("%[TR_JS]%",$cur_style[js],$html);
	}	else {
		$html=str_replace("%[TR_CSS]%",$cur_style[csse],$html);
		$html=str_replace("%[TR_JS]%",$cur_style[jse],$html);
	}
	if ($error==0) {$html=str_replace("%[TD1]%",$input[title],$html);}
	else $html=str_replace("%[TD1]%",'<img src="'.$FORM_TEMPLATE[field_error_pic].'" border=0 hspace=2 align=absmiddle> '.$input[title],$html);

	$html=str_replace("%[TD2]%",$output,$html);

	return $html;
}

//////////////////////////////////
// !!FORM	RENDERING	FUNCTION!! //
//////////////////////////////////

//
// DRAW	A	COMPLETE FORM
//
function draw_form ($Form,$module="",$error="",$result="",$page=1)
{
	global $CONF,$FORM_TEMPLATE,$cur_style,$max_col,$cur_vis,$TSEL_JS,$PAGE,$GLOBCNT,$CUR_FORMNAME;

	$CUR_FORMNAME=$Form[name];
	$GLOBCNT=0;
	$cur_page=1;

	if ($page=="") $page=1;
	//$FORM_TEMPLATE["start_box_form"]

	//Should we use GET ?
	if (strtoupper($Form[form_method])=="GET") {$method="GET";}
	else $method="POST";

	//Do we have a TARGET ?
	if (isset($Form[form_target])) {$target="target=\"".$Form[form_target]."\"";}
	else $target="";


	//Init form
	$output	.= '<FORM	name="'.$Form[name].'" action="'.$_SERVER[REQUEST_URI].'"	method="'.$method.'"	enctype="multipart/form-data" class="'.$FORM_TEMPLATE[form_style].'"  '.$target.'>
				<input type="hidden" name="form_id"	value="'.$Form[name].'">
				<input type="hidden" name="form_page"	value="'.$page.'">';


	if(strlen($Form["box_title"])	>0)	{$output .=	str_replace("%[TITLE]%",$Form[box_title],$FORM_TEMPLATE[form_title]);}

	if(strlen($error["resp"])	>	1) $output .=	str_replace("%[ERROR_RESP]%",$error[resp],$FORM_TEMPLATE[form_error_resp]);



	//Get	default	line style & Js
	if (isset($Form[line_style])){
		$tmp=explode("||",$Form[line_style]);
		foreach	($tmp	as $value_style)
		{
			if (strlen($value_style) >0)
			{
				$tmp2=explode("::",$value_style);
				$form_style[$tmp2[0]]=$tmp2[1];
			}
		}
	}	else { //Get default value from	template definitions
		$tmp=explode("||",$FORM_TEMPLATE[line_style]);
		foreach	($tmp	as $value_style)
		{
			if (strlen($value_style) >0)
			{
				$tmp2=explode("::",$value_style);
				$form_style[$tmp2[0]]=$tmp2[1];
			}
		}

	}
	$cur_style=$form_style;
	$in_group=0;

	//Start	of form	table
	$output.=$FORM_TEMPLATE[form_table_start];

	foreach	($Form["Fields"] as	$key =>	$value)	{
		$GLOBCNT++;
		list($InputType,$value,$options)=explode("||",$Form["Fields"][$key]["content"]);

		//check	if we're changing	page
		if ($InputType=="page" &&	$value !=	$cur_page)
		{
			$cur_page=$value;
		}

		//Scan all the array for the current page	and	draw the form
		if ($cur_page==$page &&	!in_array($InputType,	$CONF[form_ignoretype])	)
		{
			//Start	checking for default input type
			switch($InputType){
				case "text":
					$output.=fw_form_text($Form["Fields"][$key],$key,$result[$key],$error[$key]);
					break;
				case "pratval":
					$output.=fw_form_pratiche_value($Form["Fields"][$key],$key,$result[$key],$error[$key]);
					break;
				case "htmltext":
					$output.=fw_html_text($Form["Fields"][$key],$key,$result[$key],$error[$key]);
					break;
				case "date":
					$output.=fw_form_date($Form["Fields"][$key],$key,$result[$key],$error[$key]);
					break;
				case "time":
					$output.=fw_form_time($Form["Fields"][$key],$key,$result[$key],$error[$key]);
					break;
				case "password":
					$output.=fw_form_password($Form["Fields"][$key],$key,$result[$key],$error[$key]);
					break;
				case "hidden":
					$output.=fw_form_hidden($Form["Fields"][$key],$key,$result[$key],$error[$key]);
					break;
				case "textarea":
					$output.= fw_form_textarea($Form["Fields"][$key],$key,$result[$key],$error[$key]);
					break;
				case "checkbox":
					$output.= fw_form_checkbox($Form["Fields"][$key],$key,$result[$key],$error[$key]);
					break;
				case "select":
					$output.= fw_form_select($Form["Fields"][$key],$key,$result[$key],$error[$key]);
					break;
				case "mselect":
					$output.= fw_form_mselect($Form["Fields"][$key],$key,$result[$key],$error[$key],$Form[name]);
					break;
				case "tselect":
					$output.= fw_form_text_select($Form["Fields"][$key],$key,$result[$key],$error[$key],$Form[name],$module);
					break;
				case "line":
					$output	.= ""; //REMEMBER
					break;
				case "permission":
					if (isset($_GET[id])) {$id=$_GET[id];} else $id="";
					$output.= fw_form_perm($Form["Fields"][$key],$key,$module,$Form[name],$id,$result[$key],$error[$key]);
					break;
				case "ug_value":
					$output.= fw_form_value($Form["Fields"][$key],$key,$module,$Form[name],$result[$key],$error[$key]);
					break;

				case "tnf":
					if (isset($_GET[id])) {$id=$_GET[id];} else $id="";
					$output.= fw_form_tnf($Form["Fields"][$key],$key,$module,$result["ref_id"],$id,$error[$key]);
					break;
				case "file":
					$output.= fw_form_file($Form["Fields"][$key],$key);
					break;
				case "html":
					$output.= fw_form_html($Form["Fields"][$key],$key,$result[$key]);
					break;
				case "submit":
					$output.= fw_form_submit($Form["Fields"][$key],$key);
					break;
				case "group":
					$group_part=explode("_",$key);
					if ($group_part[1]=="start") {
						if (isset($Form["Fields"][$key][line_style]))
						{
							$tmp=explode("||",$Form["Fields"][$key][line_style]);
							foreach	($tmp	as $value_style)
							{
								if (strlen($value_style) >0)
								{
									$tmp2=explode("::",$value_style);
									$cur_style[$tmp2[0]]=$tmp2[1];
								}
							}
						}
						$in_group=1;
						$cur_group=str_replace("_start","",$key);
						$output.=fw_form_group("s",$key,$Form[Fields][$key],$error[$key]);
					}	elseif ($group_part[1]=="end") {
						$in_group=0;
						$cur_group="";
						$inv_group=str_replace(",","','","'".implode(",",$group_fields)."'");
						$output=str_replace("%[VIS_FIELD_ARRAY]%",$inv_group,$output);
						$group_start=str_replace("_end","_start",$key);
						$output.=fw_form_group("e",$Form[Fields][$key],$error[$group_start]);
						$cur_style=$form_style;
					}
					break;
				default:
					//If it's	not	a	standard input type, lets	check	if it's	a	module defined type	and	run	it
					if (strstr($InputType,"_"))	{
						$func_name=str_replace("_","_form_",$InputType);
						if (!function_exists($func_name))
						{
							$function_part=explode("_",$InputType);
							module_add_css_js($function_part[0]);
							require_once($CONF[path_base].$CONF[dir_modules].$function_part[0]."/form.php");
							if (!function_exists($func_name))
							{
								trigger_error(str_replace("%ELEMENT%",$InputType,FW_ERROR_NOFORMELEMENT),E_USER_ERROR);
							}

						}

						$output.=$func_name("d",$Form["Fields"][$key],$key,$result[$key],$error[$key]);

					}	else trigger_error(str_replace("%ELEMENT%",$InputType,FW_ERROR_NOFORMELEMENT),E_USER_ERROR);
					break;

			}
			if ($in_group==1 &&	$InputType !=	"group")
			{
				$group_fields[]=$key;
			}
			$output=str_replace("%[TR_VIS]%",$cur_vis,$output);
			$output=str_replace("%[TR_ID]%","id=\"".$key."\"",$output);
		}
	}
	$output.="</table></form>\n";
	$PAGE[JS_AC]=$TSEL_JS;
	// Fix table colspan according to	max_col	used
	if ($max_col==1)
	{
		$tdcs1="";
		$tdcs2="";
	}	elseif ($max_col==2)
	{
		$tdcs1="2";
		$tdcs2="";
	}	elseif ($max_col==3)
	{
		$tdcs1="3";
		$tdcs2="2";
	}
	$output=str_replace("%[COLSPAN1]%",$tdcs1,$output);
	$output=str_replace("%[COLSPAN2]%",$tdcs2,$output);
	return $output;
}

// Error checking	Functions

//
// CHECK A FORM
//
//min:n;max:n;type:x
function check_form	($Form,$post_result,$page=1)
{
	GLOBAL $FORM_TEMPLATE,$CUR_LANG,$FORM_TYPE,$CONF,$DB;
	$cur_page=1;

	foreach	(explode("||",$Form["onpost"]) as	$value)	{
			
		list($types,$val)=explode("::",$value);
			
		switch($types){
			case "action":
				$faction=$val;
				break;
			case "table":
				$ftable=$val;
				break;
			case "wf":
				$fwheref=$val;
				break;
		}
	}

	unset ($value);
	unset ($val);


	foreach	($Form["Fields"] as	$key =>	$value)	{

		list($InputType,$valuef,$options)=explode("||",$Form["Fields"][$key]["content"]);

		//Let's	check	if there's a group starting	or ending
		if ($InputType=="group")
		{
			$group_part=explode	("_",$key);
			if ($group_part[1]=="start")
			{
				$cur_group=$key;
			}	elseif ($group_part[1]=="end")
			{
				unset($cur_group);
			}
		}
		$pre_err=$err;

		//check	if we're changing	page
		if ($InputType=="page" &&	$valuef	!= $cur_page)
		{
			$cur_page=$valuef;
		}


		//CONVERT DATE FORMAT TO MYSQL
		if ($InputType=="date" && strlen($post_result[$key]) > 0) {
			//$mysql_date=$post_result[$key][year].'-'.$post_result[$key][month].'-'.$post_result[$key][day];
			$mysql_date=substr($post_result[$key], 6, 4)."-".substr($post_result[$key], 3, 2)."-".substr($post_result[$key], 0, 2);
			unset ($post_result[$key]);
			$post_result[$key]=$mysql_date;
			$_POST[$key]=$mysql_date;
			$_GET[$key]=$mysql_date;
		}


		//CONVERT MSELECT TO ARRAY
		if ($InputType=="mselect") {
			if (strlen(trim($post_result[$key])) > 0) {
				$nr=explode(",,",$post_result[$key]);
				unset ($post_result[$key]);
				$post_result[$key]=Array($nr);
				$_POST[$key]=$nr;
				$_GET[$key]=$nr;
			} else  {$_POST[$key]=" ";  unset($post_result[$key]);}
		}



		//check	for real result of a tselect
		if ($InputType=="tselect" && strlen($post_result[$key][text])>0 && $post_result[$key][realval]=="")
		{

			unset($rests);
			unset($ids);
			unset($perm);
			unset($mod);
			unset($mults);
			list ($tsql,$toption) = explode ("||",$Form["Fields"][$key][from_sql]);

			foreach (explode(";;",$toption) as $topt)
			{
				list ($tokey,$toval)=explode("::",$topt);
				switch ($tokey)
				{
					case "val":
						$valsql=$toval;
						break;
					case "text":
						$textsql=$toval;
						break;
					case "perm":
						$perm=$toval;
						break;
					case "mod":
						$module=$toval;
						break;
					case "mul":
						$mults=$toval;
						break;
					case "ids":
						$ids=$toval;
						break;

				}
			}
			if(!isset($ids)) $ids="id";


			//Check	for permission
			if ($perm==1 &&	isset($module))
			{
				//print perm_sql_read(str_replace("%[VAL]%",$post_result[$key][text],$tsql),$module);
				$rs = @$DB->Execute(perm_sql_read(str_replace("%[VAL]%",$post_result[$key][text],$tsql),$module));
			}	else $rs = @$DB->Execute(str_replace("%[VAL]%",$post_result[$key][text],$tsql));


			unset ($exactm);
			//get	Sql	results
			while	(!$rs->EOF)	{
				$selec="";
				$row=$rs->FetchRow();
				$rests[]=$row[$ids];
				if (strlen($rests_error)>0) {$rests_error.= ", ".$row[$textsql];}
				else $rests_error.= $row[$textsql];
				if ($post_result[$key][text]==$row[$textsql]) {$exactm=$row[$ids]; $exactt=$row[$textsql];}
			}

			if (isset($exactm)) {unset($rests); $rests[]=$exactm;}


			//Check if query have more than 1 result and multi is set to 0
			if (count($rests) > 1 && $mults ==0)
			{
				$err++;
				$resp_er.=str_replace("%FIELD%",$Form["Fields"][$key]["title"],str_replace("%VAL%",$rests_error,FW_ERRORFORM_TSELECT_MULTI ))."<BR>\n";
				$error[$key]=1;
				$_POST[$key][realval]=$rests;
				$_GET[$key][realval]=$rests;
				$post_result[$key][realval]=$rests;

			} else
			{

				$_POST[$key][realval]=$rests;
				$_GET[$key][realval]=$rests;
				$post_result[$key][realval]=$rests;
				if ($mults==0) {
					if (isset($exactt)) {$restext=$exactt;} else $restext=$row[$textsql];
					$_POST[$key][text]=$restext;
					$_GET[$key][text]=$restext;
					$post_result[$key][text]=$restext;
				}
			}

			unset($rs);
			unset($row);
		}


		if ($cur_page==$page &&	!in_array($InputType,	$CONF[form_ignoretype])	)
		{
			//Check	for	specific Regular expression
			if (isset($Form["Fields"][$key]["reg_check"])) {
				if (!eregi($Form["Fields"][$key]["reg_check"],$post_result[$key])) {
					$err++;
					$error[$key]=1;
					if (isset($Form["Fields"][$key]["reg_resp"]))	{
						$resp_er.=str_replace("%FIELD%",$Form["Fields"][$key]["title"],$Form["Fields"][$key]["reg_resp"])."<BR>\n";
					}	else $resp_er.=str_replace("%FIELD%",$Form["Fields"][$key]["title"],FW_ERRORFORM_REGNOVALID)."<BR>\n"	;
				}
			}


			//Check	for	other	error	type
			foreach	(explode(";;",$Form["Fields"][$key]["er_check"]) as	$value)	{
				if (!strstr($value,"::"))	{break;}
				list($type,$val)=explode("::",$value);
					
				switch($type){
					case "nodupe":
						if ($val==1) {
							if (!isset($_GET[id])) {
								$sql_cd="SELECT * FROM $ftable WHERE $key='".$post_result[$key]."'";
							} else $sql_cd="SELECT * FROM $ftable WHERE $key='".$post_result[$key]."' AND id <> ".$_GET[id];
							$rs_dupe=$DB->Execute($sql_cd);
							if ($rs_dupe->RecordCount() >0)
							{
								$err++;
								$resp_er	.=str_replace("%FIELD%", $Form["Fields"][$key]["title"],str_replace("%VAL%", $val,FW_ERRORFORM_IS_DUPE	))."<BR>\n"; $error[$key]=1;
							}
						}
						break;
					case "min":
						if (strlen($post_result[$key]) < $val	&& $InputType	!= "checkbox"	&& $InputType	!= "select"	&& $InputType	!= "mselect" && !isset($Form["Fields"][$key]["err_resp"]))	{$err++; $resp_er	.=str_replace("%FIELD%", $Form["Fields"][$key]["title"],str_replace("%VAL%", $val,FW_ERRORFORM_MINSTR	))."<BR>\n"; $error[$key]=1;}
						if (count($post_result[$key])	<	$val &&	($InputType	== "select"	|| $InputType	== "checkbox" || $InputType	== "mselect") &&	!isset($Form["Fields"][$key]["err_resp"])) {$err++;	$resp_er .=str_replace("%FIELD%",	$Form["Fields"][$key]["title"],str_replace("%VAL%",	$val,FW_ERRORFORM_MINSEL ))."<BR>\n";	$error[$key]=1;}
						if ((count($post_result[$key][realval])	< $val || $post_result[$key][realval]=="") && ($InputType	== "tselect") && !isset($Form["Fields"][$key]["err_resp"])) {$err++;	$resp_er .=str_replace("%FIELD%",	$Form["Fields"][$key]["title"],str_replace("%VAL%",	$val,FW_ERRORFORM_MINSEL ))."<BR>\n";	$error[$key]=1; }
						if ( ( (strlen($post_result[$key]) < $val	&& !is_array($post_result[$key]) ) ||	(count($post_result[$key]) < $val	&& is_array($post_result[$key])	)	)	&& isset($Form["Fields"][$key]["err_resp"])	)	{$err++; $resp_er	.=str_replace("%FIELD%", $Form["Fields"][$key]["title"],str_replace("%VAL%", $val,$Form["Fields"][$key]["err_resp"]	))."<BR>\n"; $error[$key]=1;}
						break;
					case "max":
						if (strlen($post_result[$key]) > $val	&& $InputType	!= "checkbox"	&& $InputType	!= "select"	&& !isset($Form["Fields"][$key]["err_resp"]))	{$err++; $resp_er	.=str_replace("%FIELD%", $Form["Fields"][$key]["title"],str_replace("%VAL%", $val,FW_ERRORFORM_MAXSTR	))."<BR>\n"; $error[$key]=1;}
						if (count($post_result[$key])	>	$val &&	($InputType	== "select"	|| $InputType	== "checkbox" 	|| $InputType	== "mselect")&& !isset($Form["Fields"][$key]["err_resp"]))	{$err++; $resp_er	.=str_replace("%FIELD%", $Form["Fields"][$key]["title"],str_replace("%VAL%", $val,FW_ERRORFORM_MAXSEL	))."<BR>\n"; $error[$key]=1;}
						if ( ( (strlen($post_result[$key]) > $val	&& !is_array($post_result[$key]) ) ||	(count($post_result[$key]) > $val	&& is_array($post_result[$key])	)	)	&& isset($Form["Fields"][$key]["err_resp"])) {$err++;	$resp_er .=str_replace("%FIELD%",	$Form["Fields"][$key]["title"],str_replace("%VAL%",	$val,$Form["Fields"][$key]["err_resp"] ))."<BR>\n";	$error[$key]=1;}
						break;
					case "chk":
						if($val==1 &&	!isset($post_result[$key]) &&	!isset($Form["Fields"][$key]["err_resp"])) {$err++;	$resp_er .=str_replace("%FIELD%",$Form["Fields"][$key]["title"], FW_ERRORFORM_NOCHK)."<BR>\n"; $error[$key]=1;}
						elseif($val==1 &&	!isset($post_result[$key]) &&	isset($Form["Fields"][$key]["err_resp"]))	{$err++; $resp_er	.=str_replace("%FIELD%",$Form["Fields"][$key]["title"],	$Form["Fields"][$key]["err_resp"])."<BR>\n"; $error[$key]=1;}
						break;

					case "type":
						//type management, just	Reg. Expression
						switch($val) {
							case "crit":
								if (!ereg('^(MIN\*|MED\.|MAX/)[1-9]{1}$',$post_result[$key])) {$err++; $resp_er .=str_replace("%FIELD%", $Form["Fields"][$key]["title"], FW_ERRORFORM_TYPECRIT)."<BR>\n"; $error[$key]=1;}
								break;
							case "float":
								if (!ereg("^-?[0-9]+((,|\.)[0-9]{1,})?$",$post_result[$key]) && strlen($post_result[$key]) > 0) {$err++; $resp_er .=str_replace("%FIELD%", $Form["Fields"][$key]["title"], FW_ERRORFORM_TYPEFLOAT)."<BR>\n"; $error[$key]=1;}
								break;

							case "email":
								if (eregi("(@.*@)|(\.\.)|(@\.)|(\.@)|(^\.)", $post_result[$key]) ||	!eregi("^.+\@(\[?)[-_a-zA-Z0-9\.]+\.([a-zA-Z]{2,3}|[0-9]{1,3})(\]?)$", $post_result[$key]))	{$err++; $resp_er	.=str_replace("%FIELD%", $Form["Fields"][$key]["title"], FW_ERRORFORM_TYPEMAIL)."<BR>\n";	$error[$key]=1;}
								break;
							case "url":
								if (!eregi("^https?://[a-z0-9-]+(\.[a-z0-9-]+)*\.([0-9]{1,3}|[a-z]{2,4})", $post_result[$key]))	{$err++; $resp_er	.=str_replace("%FIELD%", $Form["Fields"][$key]["title"], FW_ERRORFORM_TYPEURL)."<BR>\n"; $error[$key]=1;}
								break;
							case "phone":
								if (!eregi("^\+?[0-9 ]{4}",	$post_result[$key])) {$err++;	$resp_er .=str_replace("%FIELD%",	$Form["Fields"][$key]["title"],	FW_ERRORFORM_TYPEPHONE)."<BR>\n";	$error[$key]=1;}
								break;
								//File Manager
							case "fimgreq":
								$arr = @getimagesize($_FILES[$key]['tmp_name']);
								if (!$arr) {$err++;	$resp_er .="Il campo ".$Form["Fields"][$key]["title"]."	non	contiene un	file riconosciuto	come immagine	valida.<BR>\n";	$error[$key]=1;}
								break;
							case "fimg":
								$arr = @getimagesize($_FILES[$key]['tmp_name']);
								if (!$arr	&& isset($_FILES[$key]['tmp_name'])	&& $_FILES[$key]['tmp_name'] !=	"")	{$err++; $resp_er	.="Il	campo	".$Form["Fields"][$key]["title"]." non contiene	un file	riconosciuto come	immagine valida.<BR>\n"; $error[$key]=1;}
								break;
								// Check for integer
							case "int":
								if (!is_id($post_result[$key]))	{$err++; $resp_er	.=str_replace("%FIELD%", $Form["Fields"][$key]["title"], FW_ERRORFORM_TYPEINT)."<BR>\n"; $error[$key]=1;}
								break;
							case "alfanum":
								if (!ereg("^[[:alnum:]]+$",$post_result[$key]))	{$err++; $resp_er	.=str_replace("%FIELD%", $Form["Fields"][$key]["title"], FW_ERRORFORM_ALFANUM)."<BR>\n"; $error[$key]=1;}
								break;

								//Check	for	Module defined error type
							default:
								if (isset($FORM_TYPE[$val]))
								{
									if (!eregi($FORM_TYPE[$val][reg_exp],	$post_result[$key])) {$err++;	$resp_er .=str_replace("%FIELD%",$Form["Fields"][$key]["title"], $FORM_TYPE[$val][err_resp])."<BR>\n"; $error[$key]=1;}
								}	else {
									//Load the form	type definition	from the corresponding module, error type	name should	be in	format module_errortype
									if (strstr($val,"_"))	{
										$type_part=explode("_",$val);
										require_once($CONF[path_base].$CONF[dir_modules].$type_part[0]."/form.php");
										if (isset($FORM_TYPE[$val]))
										{
											if (!eregi($FORM_TYPE[$val][reg_exp],	$post_result[$key])) {$err++;	$resp_er .=str_replace("%FIRLD%",$Form["Fields"][$key]["title"], $FORM_TYPE[$val][err_resp])."<BR>\n"; $error[$key]=1;}
										}	else trigger_error(str_replace("%ELEMENT%",$val,FW_ERROR_NOFORMERROR),E_USER_NOTICE);
									}	else trigger_error(str_replace("%ELEMENT%",$val,FW_ERROR_NOFORMERROR),E_USER_NOTICE);

								}
								break;

						}
						break;
							
					default:
						//If it's	not	a	standard error check,	lets check if	it's a module	defined	function and run it
						if (strstr($type,"_")) {
							$func_name=str_replace("_","_formerror_",$type);
							if (!function_exists($func_name))
							{
								$function_part=explode("_",$type);
								require_once($CONF[path_base].$CONF[dir_modules].$function_part[0]."/form.php");
								if (!function_exists($func_name))
								{
									trigger_error(str_replace("%ELEMENT%",$type,FW_ERROR_NOFORMERROR),E_USER_ERROR);
								}

							}
							//Launch error managing	function and get result, 1 for ok	else resp
							$res_func=$func_name($Form["Fields"][$key],$key,$post_result[$key],$val);
							if ($res_func	!= 1)
							{
								$err++;
								$resp_er .=$res_func;
								$error[$key]=1;
							}
							unset	($res_fun);

						}	else trigger_error(str_replace("%ELEMENT%",$InputType,FW_ERROR_NOFORMERROR),E_USER_ERROR);
						break;
				}
			}
		}
		//Set	group	level	error
		if ($err > $pre_err	&& isset($cur_group))
		{
			$error[$cur_group]=1;
		}
			
	}

	if ($err ==0)	{return	1;}
	else {
		$error["resp"]=$resp_er;
		return $error;
	}

}

// Form	management Functions

function manage_file($form,$key,$id,$module)
{
	GLOBAL $DB,$CONF;


	list($InputType,$va,$options)=explode("||",$form[content]);

	foreach	(explode(";;",$options)	as $value) {
		list($type,$val)=explode("::",$value);
		switch($type){
			case "cd":
				$dpath=$val;
				$cnt++;
				break;
		}
	}

	//print get_ext($_FILES[$key][name]);
	/*
	//Action format
	//action::convert;;param::pdf||action::fw_file_resize;;param::w,,200||name::%ID%_1;;destdir::/
	//
	if (file_exists($_FILES[$key]['tmp_name']))	{
	foreach	$form[file_action] as	$fval)
	{





	$arr = getimagesize($_FILES[$key]['tmp_name']);
	if ($arr[2]	== 1)	{$est='.gif';}
	elseif ($arr[2]	== 2)	{$est='.jpg';}
	if (isset($dp[$x]["res"])) {img_resize($CONF["path_images"]."/".$dp[0]["path"]."/".$id.$post."$est",$CONF["path_images"]."/".$dp[$x]["path"]."/".$id.$post."$est",$dp[$x]["axis"],$dp[$x]["res"])	;}
	else copy($_FILES[$key]['tmp_name'],$CONF["path_images"]."/".$dp[$x]["path"]."/".$id.$post."$est");
	}	else return	0;
	*/
}

//
// MANAGE	A	POST
//
//action:(session/db)
function manage_post ($Form,$error,$result,$id=0,$pid=0)
{
	GLOBAL $FORM_TEMPLATE,$DB,$CONF;

	$tot_pages=tot_form_pages($Form);
	unset($GROUPS);
	if ($error==1) {
		$ignore=explode(";;",$Form["ignore"]);
		foreach	(explode("||",$Form["onpost"]) as	$value)	{

			list($types,$val)=explode("::",$value);

			switch($types){
				case "action":
					$action=$val;
					break;
				case "table":
					$table=$val;
					break;
				case "type":
					$type=$val;
					break;
				case "wf":
					$wheref=$val;
					break;
			}
		}


		if ($result[form_page]!=$tot_pages)	{
			foreach	($_POST	as $k	=> $v) $_POST[$result[form_id]][$k] = $v;
			return 1;
		}


		if ($action	=="db"){

			if ($type=="add" &&	!isset($table))	{trigger_error(FW_ERROR_NOFORMTABLE,E_USER_ERROR);}
			if ($type=="upd" &&	(!isset($type) ||	!isset($wheref)))	{trigger_error(FW_ERROR_NOFORMWHERE,E_USER_ERROR);}

			if ($type=="add")	{
				
				$sql_type="I";
				$sql=	"INSERT	INTO $table	SET	";
				$cnt=0;
				$result=array_merge((array)$_POST[$result[form_id]],(array)$result);
								
				foreach	($Form[Fields] as $key => $value)	{

					list($InputType,$va,$options)=explode("||",$Form["Fields"][$key]["content"]);
					//Enter	in group
					if ($InputType=="group"	&& isset($Form[Fields][$key][onpost])	&& strstr($key,"_start"))
					{
						$in_group=str_replace("_start","",$key);
						$GROUPS[$in_group][onpost]=$Form[Fields][$key][onpost];
						$GROUPS_RES[$in_group][form_page]=1;
						continue;
					}
					//Exit from	group
					if ($InputType=="group"	&& strstr($key,"_end") &&	isset($in_group))
					{
						unset($in_group);
						continue;
					}
					if (isset($in_group))	{
						foreach	($Form[Fields][$key] as	$k2	=> $v2)
						{
							$GROUPS[$in_group][Fields][$key][$k2]=$v2;
							$GROUPS_RES[$in_group][$key]=$result[$key];
						}
					}
					//print "$key - $InputType<br>";
					if (isset($in_group))	continue;
					if ($InputType=="group") continue;
					if(in_array($key,$ignore)) continue;
					if(in_array($InputType,$CONF[form_ignoretype]))	continue;
					if($InputType=="submit") continue;
					if ($cnt >0) {$sep=",";}
					if(eregi("NOW\(\)",$result[$key])) {$sql.=$sep." $key=".$result[$key];}
					elseif(is_array($result[$key]) && ($InputType=="select" || $InputType=="checkbox" || $InputType=="mselect") )	{$sql.=$sep."	$key='".implode(",,",$result[$key])."' ";}
					elseif(is_array($result[$key])  && $InputType=="tselect" )	{$sql.=$sep."	$key='".@implode(",,",$result[$key][realval])."' ";}
					elseif(is_array($result[$key]) && $InputType=="date")	{$sql.=$sep."	$key='".$result[$key][year]."-".$result[$key][month]."-".$result[$key][day]."' ";}
					elseif(is_array($result[$key]) && $InputType=="time")	{$sql.=$sep."	$key='".$result[$key][hour].":".$result[$key][min].":00' ";}
					else $sql.=$sep." $key='".$result[$key]."' ";
					$cnt++;
				}
			}

			if ($type=="upd")	{
				$sql_type="U";
				$sql=	"UPDATE	$table SET ";
				$cnt=0;
				$result=array_merge((array)$POST[$result[form_id]],$result);
				$postsql=" WHERE $wheref='".$id."'";

				foreach	($Form[Fields] as	$key =>	$value)	{

					list($InputType,$va,$options)=explode("||",$Form["Fields"][$key]["content"]);
					//Enter	in group
					if ($InputType=="group"	&& isset($Form[Fields][$key][onpost])	&& strstr($key,"_start"))
					{
						$in_group=str_replace("_start","",$key);
						$GROUPS[$in_group][onpost]=$Form[Fields][$key][onpost];
						$GROUPS_RES[$in_group][form_page]=1;
						continue;
					}
					//Exit from	group
					if ($InputType=="group"	&& strstr($key,"_end") && isset($in_group))
					{
						unset($in_group);
						continue;
					}
					if (isset($in_group))	{
						foreach	($Form[Fields][$key] as	$k2	=> $v2)
						{
							$GROUPS[$in_group][Fields][$key][$k2]=$v2;
							$GROUPS_RES[$in_group][$key]=$result[$key];
						}
					}
					if (isset($in_group))	continue;
					if ($InputType=="group") continue;
					if(in_array($key,$ignore)) continue;
					if(in_array($InputType,$CONF[form_ignoretype]))	continue;
					if($InputType=="submit") continue;
					if (ereg("^[0-9]+(\.|,){1}[0-9]*$",$result[$key])) $result[$key]=str_replace(",",".",$result[$key]);
					if ($cnt >0) {$sep=",";}
					if(eregi("NOW\(\)",$result[$key])) {$sql.=$sep." $key=".$result[$key];}
					elseif(is_array($result[$key])  && ($InputType=="select" || $InputType=="checkbox" || $InputType=="mselect") )	{$sql.=$sep."	$key='".implode(",,",$result[$key])."' ";}
					elseif(is_array($result[$key][realval])  && $InputType=="tselect" )	{$sql.=$sep." $key='".implode(",,",$result[$key][realval])."' ";}
					elseif(is_array($result[$key]) && $InputType=="date")	{$sql.=$sep."	$key='".$result[$key][year]."-".$result[$key][month]."-".$result[$key][day]."' ";}
					elseif(is_array($result[$key]) && $InputType=="time")	{$sql.=$sep."	$key='".$result[$key][hour].":".$result[$key][min].":00' ";}

					else $sql.=$sep."	$key='".$result[$key]."' ";
					$cnt++;
				}
				$sql .=$postsql;
			}
			
			if (db_query($sql,$sql_type) !=	0) {
				if ($type=="add")	{$ret= mysql_insert_id();}
				else $ret= $id;
			}

			if ($type=="add")
			{
				log_event("C",$table,$ret);
			} elseif ($type=="upd") log_event("U",$table,$ret);

			foreach	($_FILES as $key => $value)
			{
				list($InputType,$va,$options)=explode("||",$Form["Fields"][$key]["content"]);
				//REMEMBER inserire il modulo corretto
				manage_file($Form["Fields"][$key],$key,$ret,$moduke);
			}


			//Manage standalone	groups
			/*			if (isset($GROUPS))	{
			foreach	($GROUPS as	$kg	=> $vg)
			{
			manage_post($vg,1,$GROUPS_RES[$kg]);

			}
			}
			*/

			return $ret;
		}

	}

}

function draw_response ($response)
{
	GLOBAL $CONF, $FORM_TEMPLATE;
	if (isset($response[title])) $output=str_replace("%[TITLE]%",$response[title],$FORM_TEMPLATE[response_title]);
	if (isset($response[text])) $output.=str_replace("%[TEXT]%",$response[text],$FORM_TEMPLATE[response_text]);
	return $output;


}

?>
