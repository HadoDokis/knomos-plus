<?
//
// Form Template
//


$FORM_TEMPLATE[form_line][1]="<tr %[TR_ID]% %[TR_CSS]% %[TR_JS]%>
			      <td colspan=%[COLSPAN1]% %[TR_VIS]%>%[TD1]%</td>
			      </tr>";
$FORM_TEMPLATE[form_line][2]="<tr %[TR_ID]% %[TR_CSS]% %[TR_JS]% %[TR_VIS]%>
			      <td nowrap width=\"1%\">%[TD1]% &nbsp;&nbsp;</td>
			      <td colspan=%[COLSPAN2]% >%[TD2]%</td>
			      </tr>";
$FORM_TEMPLATE[form_line][3]="<tr %[TR_ID]% %[TR_CSS]% %[TR_JS]% %[TR_VIS]%>
			      <td>%[TD1]%</td>
			      <td>%[TD2]%</td>
			      <td>%[TD3]%</td>
			      </tr>";

$FORM_TEMPLATE[form_title]="<h4>%[TITLE]%</h4>";
$FORM_TEMPLATE[form_error_resp]="<div class='ui-state-error ui-corner-all' style='padding: 0pt 0.7em; margin: 0 0 0.4em 0;'><span style='float: left; margin-right: 0.3em;' class='ui-icon ui-icon-alert'></span><strong>Attenzione !!!</strong><br />%[ERROR_RESP]%</div>";
$FORM_TEMPLATE[form_table_start]="<table border=0 cellpadding=2 cellspacing=0 width=\"100%\" class=\"form-01-table\">";
$FORM_TEMPLATE[form_table_nested_start]="<table border=0 width=\"100%\">";
$FORM_TEMPLATE[form_table_nested_end]="</table>";
$FORM_TEMPLATE[form_row_nested_start]="<tr >";
$FORM_TEMPLATE[form_cell_nested_start]="<td colspan=%[COLSPAN]%>";
$FORM_TEMPLATE[group_title_start]="<h5>%[TITLE]%</h5>";
$FORM_TEMPLATE[group_title_starte]="<h5 class=\"errore-tit\">%[TITLE]%</h1>";
$FORM_TEMPLATE[group_title_end]="<hr>";
$FORM_TEMPLATE[group_title_ende]="<hr color=#ff0000>";
$FORM_TEMPLATE[group_icon_close]=$CONF[abs_url]."template/skin_sutti/images/ico/home_flecchia_sopra.gif";
$FORM_TEMPLATE[group_icon_open]=$CONF[abs_url]."template/skin_sutti/images/ico/home_flecchia_inf.gif";
$FORM_TEMPLATE[field_error_pic]=$CONF[abs_url]."template/skin_sutti/images/ico/ico_warning_peq.gif";
$FORM_TEMPLATE[form_style]="form-01";
$FORM_TEMPLATE[line_style]="css::||csse::class=\"errore-tr\"||js::onMouseOver=\"this.className='riga-focus-form'\" onMouseOut=\"this.className='null'\"||jse::onMouseOver=\"this.className='errore-riga-focus'\" onMouseOut=\"this.className='errore-tr'\"";
$FORM_TEMPLATE[submit_class]="bot-submit";
$FORM_TEMPLATE[input_class]="ui-widget ui-widget-content ui-autocomplete-input ui-corner-all";
$FORM_TEMPLATE[input_classe]="ui-widget ui-widget-content ui-autocomplete-input ui-corner-all ui-state-error";
$FORM_TEMPLATE[input_js]="";
$FORM_TEMPLATE[input_jse]="";
$FORM_TEMPLATE[group_separator]="class=\"form-riga-sep\"";
$FORM_TEMPLATE[perm_refresh]=$CONF[abs_url]."template/skin_sutti/images/ico/ico_refresh_peq.gif";
$FORM_TEMPLATE[tnf_refresh]=$CONF[abs_url]."template/skin_sutti/images/ico/ico_calculator_peq.gif";
$FORM_TEMPLATE[tselect_open]=$CONF[abs_url]."template/skin_sutti/images/ico/ico_popup_peq.gif";
$FORM_TEMPLATE[response_title]="<h5>%[TITLE]%</h5>";
$FORM_TEMPLATE[response_text]="<b>%[TEXT]%</b>";


//Button rendering
$FORM_TEMPLATE["button"]='<input type="button" value="%VALUE%" class="bot-submit ui-button ui-widget ui-state-default ui-corner-all" onClick="location = \'%URL%\';">';
$FORM_TEMPLATE["button2"]='<input type="button" value="%VALUE%" class="bot-submit ui-button ui-widget ui-state-default ui-corner-all" %JS%>';
$FORM_TEMPLATE["buttond"]='<input type="button" value="%VALUE%" class="bot-submit ui-button ui-widget ui-state-default ui-corner-all" onClick="if (confirm(\'cancellare ?\')) { location =\'%URL%\';} ">';

?>
