<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>%[TXT_TITLE]%</title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<link href="%[CSS_GPATH]%stili_sutti_01.css" rel="stylesheet"
	type="text/css">
<link href="%[CSS_GPATH]%stili_sutti_main.css" rel="stylesheet"
	type="text/css">
<link href="%[CSS_GPATH]%stili_sutti_calendar.css" rel="stylesheet"
	type="text/css">
<link href="%[CSS_GPATH]%stili_menu.css" rel="stylesheet"
	type="text/css">
<link href="%[CSS_GPATH]%stili_finestre.css" rel="stylesheet"
	type="text/css">
<script language="javascript">
  knomos_urlbase = "%[FW_GPATH]%";
</script>

%[PAGE_JS]% %[PAGE_CSS]% %[MENU_HEADER]%

<script language="javascript">
	setTimeout('location=\'%[URL_LOGOUT]%\';',%[LOGOUT_TIME]%);
</script>

</head>

<body%[BODY_ONCLOSE]%>
%[JS_SHORTCUT]% %[BODY_ONLOAD]%
<script type="text/javascript">
$(document).ready(function() {
	SetPageLoad();
});
</script>

<input style="display: none" id="TxIpUser" name="TxIpTelUser" size="39"
	maxlength="39" value='%[IP_USER]%'>

<div id="phplmseethrough"><!-- see through -->

<div id="content">
<div id="header">
<table border="0" cellpadding="0" cellspacing="0" id="header_table">
	<tr valign="middle">
		<td class="header-sinistra"></a><div class="logo-small"></div></a></td>
		<td class="header-logo"><img src="%[IMAGE_GPATH]%header_logo.gif"
			width="89" height="25"></td>
		<form name="gs" method="GET" action="%[FW_GPATH]%searches.php"><input
			type="hidden" name="form_id" value="gensearch">
		<td width="35%" nowrap class="header-td-03"><img
			src="%[IMAGE_GPATH]%sep_01.gif" width="2" height="16"
			align="absmiddle"> %[TXT_SEARCH]%: <input name="gtesto" type="text"
			value=""
			class="ui-widget ui-widget-content ui-corner-all ui-autocomplete-input"
			style="width: 60%;" size="10"> <a href="#"
			onClick=" document.gs.submit()"><img
			src="%[IMAGE_GPATH]%ico/ico_cercare_peq.gif" width="16" height="16"
			border="0" align="absmiddle"></a></td>
		</form>
		<td align="right" nowrap class="header-td-04"><img
			src="%[IMAGE_GPATH]%sep_01.gif" width="2" height="16"
			align="absmiddle"> &nbsp;%[TXT_USERNAME]%</td>
		<td width="5%" align="right" nowrap class="header-td-05"><img
			src="%[IMAGE_GPATH]%sep_01.gif" width="2" height="16"
			align="absmiddle"> <a href="%[URL_LOGOUT2]%">Logout</a></td>
	</tr>
</table>
</div>
<div id="toolbar">
<table border="0" cellpadding="0" cellspacing="0" id="toolbar_table">
	<tr>
		<td align="left" valign="middle" nowrap width="99%">%[MENU_TAB]%</td>
		<td align="right" valign="middle" nowrap class="toolbar-data"
			width="1%">%[TXT_TODAY]%</td>
	</tr>
</table>
</div>
<table border="0" cellpadding="0" cellspacing="0" id="colonne">
	<tr>
		<td valign="top" class="col-sinistra" id="colonna_sinistra">
		<div id="col_content">
		<div id="col_opz">
		<table width="100%" border="0" cellpadding="0" cellspacing="0"
			id="col_opz_table">
			<tr>
				<td><a href="%[FW_GPATH]%modules/document/pages/documents_view.php"
					class="col-opz-link"><img
					src="%[IMAGE_GPATH]%ico/ico_doc_01_peq.gif" width="16" height="16"
					border="0" align="absmiddle">%[TXT_DOCUMENT]%</a></td>
			</tr>
			<!-- 
  <tr>
    <td><a href="%[FW_GPATH]%modules/document/pages/dropbox_page.php?form_id=listdoc" class="col-opz-link"><img src="%[IMAGE_GPATH]%ico/dropbox_logo_home.png" width="16" height="16" border="0" align="absmiddle">Dropbox</a> </td>
  </tr>
-->
			<tr>
				<td><a
					href="%[FW_GPATH]%plus/calcolatrici/pages/calcolatrici.php?TipoUtCal=8"
					class="col-opz-link"><img src="%[IMAGE_GPATH]%ico/calcolatrice.ico"
					width="16" height="16" border="0" align="absmiddle">Calcoli</a>

				%[LINK1]% %[LINK2]% %[LINK3]% <a
					href="%[FW_GPATH]%modules/calendar/pages/week_view.php"
					class="col-opz-link"><img
					src="%[IMAGE_GPATH]%ico/ico_calendar_peq.gif" width="16"
					height="16" border="0" align="absmiddle">%[TXT_CALENDAR]%</a> <a
					id="calendario_button"
					href="javascript: calendarDOWN('calendar_iframe','fle_appunt');  calendarDOWN('messagio','fle_appunt');  hideAPPUNT('appunt_giorno')"
					class="col-opz-link"><img src="%[IMAGE_GPATH]%ico/flecchia_px.gif"
					name="fle_appunt" width="10" height="10" border="0"
					align="absmiddle" class="fleccia-sopra" id="fle_appunt">%[TXT_IMMINENT]%</a></td>
			</tr>
		</table>

		</div>




		<div id="appuntamenti_table_div" style="display: none;">
		<table cellspacing="0" id="messagio">
			<tr>
				<td class="messagio-cella">
				<p class="messagio-tit"><img
					src="%[IMAGE_GPATH]%ico/ico_appunt_peq.gif" width="16" height="16"
					align="absmiddle"><a href="#">Appuntamento</a></p>
				<p class="messagio-txt">
				
				
				<div id="appuntamenti_content_div"></div>
				</p>
				</td>
			</tr>
		</table>
		</div>

		%[GLOB_SPACE_1]% %[PAGE_SPACE_1]%
		<div id="appunt_giorno" class="hidden"><!-- Questo ?efinito nel javaScript showAPPUNT(url,data)
			<p>13 Luglio 2004</p>
		   	<iframe id="appunt_iframe" src="appunt_00.htm" frameBorder="0">IFRAME</iframe>
			--></div>
		</div>
		<p><img src="%[IMAGE_GPATH]%px_chusmy.gif" width="150" height="10"
			border="0" class="col-sinistra-with-min"></p>
		</td>
		<td align="center" valign="top" class="col-exp-open" id="col_exp_td">
		<p>&nbsp;</p>
		<p>&nbsp;</p>
		<p>&nbsp;</p>
		<p>&nbsp;</p>
		<p><a href="javascript:colEXP('colonna_sinistra','%[IMAGE_GPATH]%')"><img
			src="%[IMAGE_GPATH]%col_exp_close.gif" name="col_exp_img" width="15"
			height="56" border="0" id="col_exp_img"></a></p>
		</td>

		<td align="left" valign="top">
		<h1><img src="%[IMAGE_GPATH]%ico/%[PAGE_PICTITLE]%" width="24"
			height="24" align="absmiddle">%[PAGE_INTITLE]%</h1>
		<div id="main" class="ui-widget ui-widget-content ui-corner-all">%[PAGE_CONTENT]%</div>
		</td>
	</tr>
</table>

%[TXT_FOOTER]%
%[MENU_FOOTER]%

<div id="window_layer"
	style="position: absolute; z-index: 1; display: none; left: 200px; top: 100px; width: 60%; height: 405px;"
	class="finestra-01-div">
<table width="100%" height="100%" border="0" cellpadding="0"
	cellspacing="0">
	<tr class="finestra-01-sup">
		<td align="left" valign="middle" nowrap class="finestra-01-tit"><!-- <a href="#"><img src="%[FW_GPATH]%template/skin_sutti/images/ico/ico_refresh_peq.gif" width="16" height="16" border="0" align="absmiddle"></a> -->
		<div id="window_layer_title" style="display: inline">Permessi</div>
		</td>
		<td width="5%" align="right" valign="middle" nowrap
			class="finestra-01-pulsanti"><a href="#_"
			onClick="window.parent.closeLayerWindow();"><img
			src="%[IMAGE_GPATH]%finestre_img/ico_finestre_close.gif" width="16"
			height="16" border="0"></a></td>
	</tr>
	<tr>
		<td colspan="2" align="left" valign="top" class="finestra-01-middle">
		<iframe id="window_layer_iframe" name="window_layer_iframe" src=""
			frameBorder="0" height="367" class="per-iframe">IFRAME
		template_permessi_iframe.htm</iframe></td>
	</tr>
	<tr>
		<td colspan="2" align="right" valign="bottom" class="finestra-01-inf">&nbsp;</td>
	</tr>


</table>
</div>

</div>
<!-- see through -->

<!-- <iframe scrolling="no" src="%[FW_GPATH]%framework/cron_web_starter.php" id="cron_iframe" width=1 height=1 style="display: none;"></iframe> -->

<script language="JavaScript" type="text/javascript"
	src="%[FW_GPATH]%framework/external_lib/phplm/libjs/layersmenu-see-through.js"></script>
%[JS_AC]%
</body>
</html>
