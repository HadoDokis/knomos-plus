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

%[PAGE_JS]%
%[PAGE_CSS]%
%[MENU_HEADER]%

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
		<td class="header-sinistra"><a href="%[CSS_GPATH]%main.php"><img
			src="%[IMAGE_GPATH]%ico/mobile/kn_logo.png" alt="Home" width="95"
			height="95" border="0"></a></td>
		<td class="header-logo"><img src="%[IMAGE_GPATH]%header_logo.gif"
			width="89" height="25"> <a href="javascript:history.go(-1)"><img
			src="%[IMAGE_GPATH]%ico/mobile/back.png" alt="Indietro" width="95"
			height="95" border="0"></a></td>

		<td width="5%" align="right" nowrap class="header-td-05"><a href=href="%[URL_LOGOUT2]%"><img
			src="%[IMAGE_GPATH]%ico/mobile/logout.png" alt="Indietro" width="95"
			height="95" border="0"></a>
	
	</tr>
</table>
</div>





%[PAGE_SPACE_1]% %[PAGE_CONTENT]%</div>
</td>
</tr>
</table>




<div id="footer">
<table border="0" cellpadding="0" cellspacing="0" id="footer_table">
	<tr>
		<td nowrap class="footer-aiuto"><a href="%[CSS_GPATH]%guida/index.htm"
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
		<td align="left" valign="middle" nowrap class="finestra-01-tit"><!-- <a href="#"><img src="%[CSS_GPATH]%template/skin_sutti/images/ico/ico_refresh_peq.gif" width="16" height="16" border="0" align="absmiddle"></a> -->
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

<!-- <iframe scrolling="no" src="%[CSS_GPATH]%framework/cron_web_starter.php" id="cron_iframe" width=1 height=1 style="display: none;"></iframe> -->

<script language="JavaScript" type="text/javascript"
	src="%[CSS_GPATH]%framework/external_lib/phplm/libjs/layersmenu-see-through.js"></script>
%[JS_AC]%
</body>
</html>
