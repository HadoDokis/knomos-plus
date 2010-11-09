<?
if (!is_file("config/config.php")) {
	header("Location: installation/");
	die();
}

if(isset($_GET[post_login])) {
	$post_login="?post_login=".$_GET[post_login].'&from_login=1';
} else $post_login="?from_login=1";
session_start();
if($_GET[logout]==1) {session_destroy();}
require_once 'config/pages.php';
?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Knomos</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link href="template/skin_sutti/css/stili_sutti_01.css" rel="stylesheet"
	type="text/css">
<link href="template/skin_sutti/css/stili_sutti_main.css"
	rel="stylesheet" type="text/css">
<link href="template/skin_sutti/css/stili_login.css" rel="stylesheet"
	type="text/css">

<script>
<!--
function sf(){document.form_login.login.focus();}
// -->
</script>
</head>

<body>
<?php echo $PAGE[JS_SHORTCUT]; ?>
<div id="content_login"
	class="ui-widget ui-widget-content ui-corner-all">
<div id="header">
<table border="0" cellpadding="0" cellspacing="0" id="header_table">
	<tr valign="middle">
		<td class="header-sinistra"><div class="logo"></div></td>
		<td class="header-logo"><img
			src="template/skin_sutti/images/header_logo.gif" width="89"
			height="25"></td>
	</tr>
</table>
</div>
<form action="framework/framework.php<?=$post_login?>" method="POST"
	id="form_login" name="form_login"><?
	if ($_GET[logout]==1)
	{
		?>
<div class="ui-state-highlight ui-corner-all"
	style="width: 100%; padding: 5px; margin-bottom: 10px;"><span
	style="float: left; margin-right: 0.3em;" class="ui-icon ui-icon-info"></span>LOGOUT
EFFETTUATO CORRETTAMENTE</div>
		<?
	}

	if ($_GET[logout]==2)
	{
		?>
<div class="ui-state-highlight ui-corner-all"
	style="width: 100%; padding: 5px; margin-bottom: 10px;"><span
	style="float: left; margin-right: 0.3em;" class="ui-icon ui-icon-info"></span>SESSIONE
SCADUTA E' NECESSARIO EFFETTUARE NUOVAMENTE IL LOGIN</div>
		<?
	}
	?> <?
	if ($_GET[failed]==1)
	{
		?>
<div class="ui-state-error ui-corner-all"
	style="width: 100%; padding: 5px; margin-bottom: 10px;"><span
	style="float: left; margin-right: 0.3em;" class="ui-icon ui-icon-alert"></span>LOGIN
O PASSWORD ERRATI</div>
		<?
	}
	?> <?
	if ($_GET[mant_lock]==1)
	{
		?>
<div class="ui-state-error ui-corner-all"
	style="width: 100%; padding: 5px; margin-bottom: 10px;"><span
	style="float: left; margin-right: 0.3em;" class="ui-icon ui-icon-alert"></span>IL
SISTEMA POTREBBE ESSERE BLOCCATO PER MANUTENZIONE</div>
		<?
	}
	?> <?
	if ($_GET[alreadyin]==1)
	{
		?>
<div class="ui-state-highlight ui-corner-all"
	style="width: 100%; padding: 5px; margin-bottom: 10px;"><span
	style="float: left; margin-right: 0.3em;" class="ui-icon ui-icon-info"></span>SI
E' GIA' COLLEGATI A KNOMOS DA UN ALTRO BROWSER. EFFETTUARE IL LOGOUT
PRIMA DI ACCEDERE NUOVAMENTE.</div>
		<?
	}
	?>
<div id="div_login">
<table width="350" border="0" align="center" cellpadding="5"
	cellspacing="5">
	<tr>
		<td width="23%"><strong>Login:</strong></td>
		<td width="77%"><input name="login" autocomplete="off" type="text"
			style="width: 100%;"
			class="ui-widget ui-widget-content ui-autocomplete-input ui-corner-all"
			value=""></td>
	</tr>
	<tr>
		<td width="23%"><strong>Password:</strong></td>
		<td><input name="password" type="password" style="width: 100%;"
			class="ui-widget ui-widget-content ui-autocomplete-input ui-corner-all"></td>
	</tr>
	<tr>
		<td width="23%"><strong>Archivio:</strong></td>
		<td><select name="history"
			class="ui-widget ui-widget-content ui-autocomplete-input ui-corner-all"
			style="width: 100%;">
			<option value="0">Corrente</option>
			<option value="1">Storico</option>
		</select></td>
	</tr>
	<td width="23%"><strong>Modalit&agrave;:</strong></td>
	<td><select name="mobile" style="width: 100%;"
		class="ui-widget ui-widget-content ui-autocomplete-input ui-corner-all">
		<option value="0">Desktop</option>
		<option value="1">Mobile</option>
	</select></td>
	</tr>

	<tr>
		<td align="right"><input type="submit"
			class=".ui-state-default, .ui-widget-content" value="Login"></td>
		<td></td>
	</tr>
</table>
</div>
</form>
<br>
	<?php echo $PAGE[TXT_FOOTER]; ?></div>
</body>
</html>

