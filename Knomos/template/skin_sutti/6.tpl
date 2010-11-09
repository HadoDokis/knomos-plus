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

<!-- TEST -->
%[PAGE_JS]% %[PAGE_CSS]% %[MENU_HEADER]%

<script language="javascript">
	setTimeout('location=\'%[URL_LOGOUT]%\';',%[LOGOUT_TIME]%);
</script>


<body onLoad="javascript:SetPageLoad()">


</head>

<body %[BODY_ONCLOSE]%>
%[JS_SHORTCUT]%
%[BODY_ONLOAD]%
<input style="display: none" id="TxIpUser" name="TxIpTelUser" size="39"
	maxlength="39" value='%[IP_USER]%'>

<div id="phplmseethrough"><!-- see through -->

<div id="content">
<div id="header">
<table border="0" cellpadding="0" cellspacing="0" id="header_table">
	<tr valign="middle">
		<td class="header-sinistra"><a href="%[FW_GPATH]%main.php"><img
			src="%[IMAGE_GPATH]%header_sinistra.gif" alt="Home" width="150"
			height="25" border="0"></a></td>
		<td class="header-logo"><img src="%[IMAGE_GPATH]%header_logo.gif"
			width="89" height="25"></td>
		<form name="gs" method="GET" action="%[FW_GPATH]%searches.php"><input
			type="hidden" name="form_id" value="gensearch">
		<td width="35%" nowrap class="header-td-03"><img
			src="%[IMAGE_GPATH]%sep_01.gif" width="2" height="16"
			align="absmiddle"> %[TXT_SEARCH]%: <input name="gtesto" type="text"
			value="" onFocus="this.className='input-focus-01'"
			onBlur="this.className='null'" size="10"> <a href="#"
			onClick=" document.gs.submit()"><img
			src="%[IMAGE_GPATH]%ico/ico_cercare_peq.gif" width="16" height="16"
			border="0" align="absmiddle"></a></td>
		</form>
		<td align="right" nowrap class="header-td-04"><a
			href="%[FW_GPATH]%modules/menu_mobile.php"><img
			src="%[IMAGE_GPATH]%\ico\mobile\menu.png" alt="Home" width="25"
			height="25" border="0"></a></td>
		<td width="5%" align="right" nowrap class="header-td-05"><img
			src="%[IMAGE_GPATH]%sep_01.gif" width="2" height="16"
			align="absmiddle"> <a href="%[URL_LOGOUT2]%">Logout</a></td>
	</tr>
</table>
</div>

%[PAGE_SPACE_1]%

<td align="left" valign="top">
<h1><img src="%[IMAGE_GPATH]%ico/%[PAGE_PICTITLE]%" width="24"
	height="24" align="absmiddle">%[PAGE_INTITLE]%</h1>
<div id="main">%[PAGE_CONTENT]%</div>
</td>
</tr>
</table>

<div id="footer">
<table border="0" cellpadding="0" cellspacing="0" id="footer_table">
	<tr>
		<td nowrap class="footer-aiuto"><a href="%[FW_GPATH]%guida/index.htm"
			target="_blank"><img src="%[IMAGE_GPATH]%ico/ico_help_peq.gif"
			width="16" height="16" border="0" align="absmiddle"> Aiuto</a></td>
		<td align="right" nowrap>%[TXT_CRIGHT]%<img
			src="%[IMAGE_GPATH]%sep_02.gif" width="2" height="16"
			align="absmiddle"></td>
	</tr>
</table>
</div>
</div>
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
