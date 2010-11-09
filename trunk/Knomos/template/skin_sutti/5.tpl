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
<link href="%[CSS_GPATH]%stili_home.css" rel="stylesheet"
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

<body %[BODY_ONCLOSE]%>
%[JS_SHORTCUT]%
%[BODY_ONLOAD]%
<input style="display: none" id="TxIpUser" name="TxIpTelUser" size="39"
	maxlength="39" value='%[IP_USER]%'>

<div id="content">
<div id="header">
<table border="0" cellpadding="0" cellspacing="0" id="header_table">
	<tr valign="middle">
		<td class="header-sinistra"><a href="#"><img
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

<td align="left" valign="top">
<h1><img src="%[IMAGE_GPATH]%ico/%[PAGE_PICTITLE]%" width="24"
	height="24" align="absmiddle">%[PAGE_INTITLE]%</h1>
<div id="main">


<table border="0" cellpadding="0" cellspacing="2"
	class="home-colonne-table">
	<tr>
		<td colspan="3" align="left" valign="top" class="home-cella-01">


		<h5><img src="%[IMAGE_GPATH]%ico/ico_calendar_med.gif" width="24"
			height="24" border="0" align="absmiddle"> %[TXT_EVENTS]% <a
			href="javascript:homeDOWN('home_appunt','fle_appunt_home','%[IMAGE_GPATH]%')"><img
			src="%[IMAGE_GPATH]%ico/home_flecchia_sopra.gif"
			name="fle_appunt_home" width="16" height="16" border="0"
			align="absmiddle" id="fle_appunt_home"></a> %[TXT_SCADLINK]%</h5>
		</a>
		<div id="home_appunt">%[PAGE_SPACE_2]%</div>
		<br>


		<a
			href="javascript:homeDOWN('home_pratiche','fle_opz_00','%[IMAGE_GPATH]%')">
		<h5><img src="%[IMAGE_GPATH]%ico/ico_prat_med.gif" width="24"
			height="24" border="0" align="absmiddle"> %[TXT_LASTPRAT]% <img
			src="%[IMAGE_GPATH]%ico/home_flecchia_inf.gif" name="fle_appunt_home"
			width="16" height="16" border="0" align="absmiddle" id="fle_opz_00"></h5>
		</a>
		<div style="display: none" id="home_pratiche">%[PAGE_SPACE_1]%</div>
		</td>

	</tr>
</table>



</div>
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

<!-- <iframe scrolling="no" src="%[FW_GPATH]%framework/cron_web_starter.php" id="cron_iframe" width=1 height=1 style="display: none;"></iframe> -->

<script language="JavaScript" type="text/javascript"
	src="%[FW_GPATH]%framework/external_lib/phplm/libjs/layersmenu-see-through.js"></script>
</body>
</html>
