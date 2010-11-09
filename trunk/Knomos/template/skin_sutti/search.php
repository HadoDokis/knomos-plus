<?
//
// Search Template
//





//HTML Template Definition


$SEARCH_TEMPLATE[search_title]="<h3>%[TITLE]%</h3>";
$SEARCH_TEMPLATE[search_desc]="%[DESC]%";
$SEARCH_TEMPLATE[search_table_start]="<table cellpadding=\"3\" cellspacing=\"2\" border=\"0\" width=\"100%\">";
$SEARCH_TEMPLATE[search_title_field_start]="<th>";
$SEARCH_TEMPLATE[search_title_field_end]="</th>";
$SEARCH_TEMPLATE[search_field_row_start]="<tr %[STYLE]%>";
$SEARCH_TEMPLATE[search_field_row_end]="</tr>";
$SEARCH_TEMPLATE[search_first_start]="<td width=\"1%\">";
$SEARCH_TEMPLATE[search_first_end]="</td>";
$SEARCH_TEMPLATE[search_field_start]="<td>";
$SEARCH_TEMPLATE[search_field_end]="</td>";
$SEARCH_TEMPLATE[search_row_styles][0]["value"]=' class="riga-01"';
$SEARCH_TEMPLATE[search_row_styles][0][0]["value"]=' class="riga-01"';
$SEARCH_TEMPLATE[search_row_styles][0][1]["value"]=' class="riga-01"';
$SEARCH_TEMPLATE[search_row_styles][1]["value"]=' class="riga-02"';
$SEARCH_TEMPLATE[search_row_styles][1][0]["value"]=' class="riga-02"';
$SEARCH_TEMPLATE[search_row_styles][1][1]["value"]=' class="riga-02"';

$SEARCH_TEMPLATE[search_act_sep]=" ";
$SEARCH_TEMPLATE[link_action]='<a href="%[LINK]%" %[JS]%>';

$SEARCH_TEMPLATE[group_icon_close]=$CONF[abs_url]."template/skin_sutti/images/ico/home_flecchia_sopra.gif";
$SEARCH_TEMPLATE[group_icon_open]=$CONF[abs_url]."template/skin_sutti/images/ico/home_flecchia_inf.gif";

$SEARCH_TEMPLATE[order_icon_asc]=$CONF[abs_url]."template/skin_sutti/images/ico/flecchia_sopra_02.gif";
$SEARCH_TEMPLATE[order_icon_desc]=$CONF[abs_url]."template/skin_sutti/images/ico/flecchia_inf_02.gif";
$SEARCH_TEMPLATE[order_icon_asc_on]=$CONF[abs_url]."template/skin_sutti/images/ico/flecchia_sopra.gif";
$SEARCH_TEMPLATE[order_icon_desc_on]=$CONF[abs_url]."template/skin_sutti/images/ico/flecchia_inf.gif";


$SEARCH_TEMPLATE[link_explode]="<a href=\"%[LINK]%\"><img src=\"".$CONF[abs_url]."template/skin_sutti/images/ico/ico_puls_piu_over.gif\" border=0></a>";
$SEARCH_TEMPLATE[link_implode]="<a href=\"%[LINK]%\"><img src=\"".$CONF[abs_url]."template/skin_sutti/images/ico/ico_puls_meno_over.gif\" border=0></a>";

$SEARCH_TEMPLATE["sub_indent_list"]="&nbsp;&nbsp;&nbsp;&nbsp;";

$SEARCH_TEMPLATE[search_row_multipage]="<tr><td colspan=\"%[COLSPAN]%\">%[PAGES]%</td></tr>";


//Rendering Function

?>