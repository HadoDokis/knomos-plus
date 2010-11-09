<?
//
// Lists Template
//





//HTML Template Definition


$LIST_TEMPLATE[list_title]="<h1>%[TITLE]%</h1>";
$LIST_TEMPLATE[list_table_start]="<table cellpadding=\"3\" cellspacing=\"2\" class=\"grid-01\" width=\"100%\">";
$LIST_TEMPLATE[list_title_row_start]="<tr>";
$LIST_TEMPLATE[list_title_row_end]="</tr>";
$LIST_TEMPLATE[list_title_field_start]="<th>";
$LIST_TEMPLATE[list_title_field_end]="</th>";
$LIST_TEMPLATE[list_field_row_start]="<tr class=\"%[STYLE]%\" %[JS_ROW]%>";
$LIST_TEMPLATE[list_field_row_end]="</tr>";
$LIST_TEMPLATE[list_field_row_js]="onMouseOver=\"this.className='%[CSS_OVER_ROW_STYLE]%'\" onMouseOut=\"this.className='%[CSS_OLD_ROW_STYLE]%'\"";
$LIST_TEMPLATE[list_first_start]="<td width=\"1%\">";
$LIST_TEMPLATE[list_first_end]="</td>";
$LIST_TEMPLATE[list_field_start]="<td>";
$LIST_TEMPLATE[list_field_end]="</td>";
$LIST_TEMPLATE[list_row_styles][0]["value"]='riga-01';
$LIST_TEMPLATE[list_row_styles][0][0]["value"]='riga-01';
$LIST_TEMPLATE[list_row_styles][0][1]["value"]='riga-01';
$LIST_TEMPLATE[list_row_styles][1]["value"]='riga-02';
$LIST_TEMPLATE[list_row_styles][1][0]["value"]='riga-02';
$LIST_TEMPLATE[list_row_styles][1][1]["value"]='riga-02';
$LIST_TEMPLATE[list_row_styles][over]='riga-focus-a';

$LIST_TEMPLATE[list_act_sep]=" ";
$LIST_TEMPLATE[link_action]='<a href="%[LINK]%" %[JS]% %[TARGET]%>';

$LIST_TEMPLATE[extra_icon_close]=$CONF[abs_url]."template/skin_sutti/images/ico/home_flecchia_sopra.gif";
$LIST_TEMPLATE[extra_icon_open]=$CONF[abs_url]."template/skin_sutti/images/ico/home_flecchia_inf.gif";

$LIST_TEMPLATE[order_icon_asc]=$CONF[abs_url]."template/skin_sutti/images/ico/flecchia_sopra_02.gif";
$LIST_TEMPLATE[order_icon_desc]=$CONF[abs_url]."template/skin_sutti/images/ico/flecchia_inf_02.gif";
$LIST_TEMPLATE[order_icon_asc_on]=$CONF[abs_url]."template/skin_sutti/images/ico/flecchia_sopra.gif";
$LIST_TEMPLATE[order_icon_desc_on]=$CONF[abs_url]."template/skin_sutti/images/ico/flecchia_inf.gif";


$LIST_TEMPLATE[link_explode]="<a href=\"%[LINK]%\"><img src=\"".$CONF[abs_url]."template/skin_sutti/images/ico/ico_puls_piu_over.gif\" border=0></a>";
$LIST_TEMPLATE[link_implode]="<a href=\"%[LINK]%\"><img src=\"".$CONF[abs_url]."template/skin_sutti/images/ico/ico_puls_meno_over.gif\" border=0></a>";

$LIST_TEMPLATE["sub_indent_list"]="&nbsp;&nbsp;&nbsp;&nbsp;";

$LIST_TEMPLATE[list_row_multipage]="<tr><td colspan=\"%[COLSPAN]%\">%[PAGES]%</td></tr>";


//Rendering Function

function list_render_multipage($urls,$cur)
{
	global $LIST_TEMPLATE,$CONF;
	
	$output="<script language=\"JavaScript\" type=\"text/JavaScript\">
<!--
function MM_jumpMenu(targ,selObj,restore){ //v3.0
  eval(targ+\".location='\"+selObj.options[selObj.selectedIndex].value+\"'\");
  if (restore) selObj.selectedIndex=0;
}
//-->
</script>";


	$output.="<center>";
	
	if ($cur > 0){
		$output.="<a href=\"".$urls[0]."\"><img src=\"".$CONF[abs_url]."template/skin_sutti/images/ico/arrow_inizio.gif\" border=0 align=\"absmiddle\"></a> ";
	}


	if (isset($urls["prev"])){
		$output.="<a href=\"".$urls["prev"]."\"><img src=\"".$CONF[abs_url]."template/skin_sutti/images/ico/arrow_left_02.gif\" border=0 align=\"absmiddle\"></a> ";
	}
	
	$output.="Pag. <select class=\"pag-select\" onChange=\"MM_jumpMenu('self',this,0)\">";
	for ($x=0;$x < ($urls[tot]);$x++)
	{
		if ($x==$cur) {$sel="selected";} else $sel="";
		$output.= '<option value="'.$urls[$x].'" '.$sel.'>'.($x+1).'</option>';
	}
	$output .="</select> / ".$urls[tot].' ';
	
	if (isset($urls["next"])){
		$output.="<a href=\"".$urls["next"]."\"><img src=\"".$CONF[abs_url]."template/skin_sutti/images/ico/arrow_right_02.gif\" border=0 align=\"absmiddle\"></a> ";
	}

	if ($cur < ($urls[tot]-1)){
		$output.="<a href=\"".$urls[($urls[tot]-1)]."\"><img src=\"".$CONF[abs_url]."template/skin_sutti/images/ico/arrow_fine.gif\" border=0 align=\"absmiddle\"></a> ";
	}

	
	$output.="</center>";
	return $output;	
}

?>