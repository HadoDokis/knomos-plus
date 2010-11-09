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
?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>KNOMOS &#8226;&#8226;&#8226;&#8226;&#8226;&#8226;</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link href="template/skin_sutti/css/stili_sutti_01.css" rel="stylesheet" type="text/css">
<link href="template/skin_sutti/css/stili_sutti_main.css" rel="stylesheet" type="text/css">
<link href="template/skin_sutti/css/stili_login.css" rel="stylesheet" type="text/css">
<script>
<!--
function sf(){document.form_login.login.focus();}
// -->
</script>
</head>

<body onLoad=sf()>
<div id="content_login">
  <div id="header"> 
    <table  border="0" cellpadding="0" cellspacing="0" id="header_table">
      <tr valign="middle">
        <td class="header-sinistra"><img src="template/skin_sutti/images/header_sinistra.gif" width="150" height="25" border="0"></td>
        <td class="header-logo"><img src="template/skin_sutti/images/header_logo.gif" width="89" height="25"></td>
      </tr>
    </table>
  </div>
<form action="framework/framework.php<?=$post_login?>" method="POST" id="form_login" name="form_login">
    <?
	if ($_GET[logout]==1)
    	{
    		?><div class="login-messagio"><img src="template/skin_sutti/images/ico/ico_help02_peq.gif" width="16" height="16" align="absmiddle"> LOGOUT EFFETTUATO CORRETTAMENTE </div><?
	}
	
	if ($_GET[logout]==2)
    	{
    		?><div class="login-messagio"><img src="template/skin_sutti/images/ico/ico_help02_peq.gif" width="16" height="16" align="absmiddle"> SESSIONE SCADUTA E' NECESSARIO EFFETTUARE NUOVAMENTE IL LOGIN </div><?
	}
	?>
	
	<?
	if ($_GET[failed]==1)
    	{
    		?><div class="login-messagio"><img src="template/skin_sutti/images/ico/ico_help02_peq.gif" width="16" height="16" align="absmiddle"> LOGIN O PASSWORD ERRATI </div><?
	}
	?>

	<?
	if ($_GET[mant_lock]==1)
    	{
    		?><div class="login-messagio"><img src="template/skin_sutti/images/ico/ico_help02_peq.gif" width="16" height="16" align="absmiddle"> IL SISTEMA POTREBBE ESSERE BLOCCATO PER MANUTENZIONE </div><?
	}
	?>
	<?
	if ($_GET[alreadyin]==1)
    	{
    		?><div class="login-messagio"><img src="template/skin_sutti/images/ico/ico_help02_peq.gif" width="16" height="16" align="absmiddle"> SI E' GIA' COLLEGATI A KNOMOS DA UN ALTRO BROWSER. EFFETTUARE IL LOGOUT PRIMA DI ACCEDERE NUOVAMENTE. </div><?
	}
	?>	
    <div id="div_login">
      <table width="350" border="0" align="center" cellpadding="5" cellspacing="5">
        <tr>
          <td width="23%"><strong>Login:</strong></td>
          <td width="77%"><input name="login" autocomplete="off" type="text" class="login-input" onFocus="this.className='login-input-focus'" onBlur="this.className='login-input'" value=""></td>
        </tr>
        <tr>
          <td width="23%"><strong>Password:</strong></td>
          <td><input name="password" type="password" class="login-input" onFocus="this.className='login-input-focus'" onBlur="this.className='login-input'"></td>
        </tr>
        <tr>
          <td width="23%"><strong>Archivio:</strong></td>
          <td><select name="history"  class="login-input" onFocus="this.className='login-input-focus'" onBlur="this.className='login-input'"><option value="0">Corrente</option><option value="1">Storico</option></select></td>
        </tr>
           <td width="23%"><strong>Modalit&agrave;:</strong></td>
          <td><select name="mobile"  class="login-input" onFocus="this.className='login-input-focus'" onBlur="this.className='login-input'"><option value="0">Desktop</option><option value="1">Mobile</option></select></td>
        </tr>
 
        <tr>
          <td align="right"><input  type="submit" class="bot-submit" value="Login"></td>
          <td></td>
        </tr>
          </table>
      </div>
    </form>
	<br>
  <div id="footer">
    <table  border="0" cellpadding="0" cellspacing="0" id="footer_table">
      <tr>
        <td nowrap class="footer-aiuto"><a href="guida/index.html" target="_blank"><img src="template/skin_sutti/images/ico/ico_help_peq.gif" width="16" height="16" border="0" align="absmiddle"> Aiuto</a></td>
        <td align="right" nowrap>&copy; 2004 <a href="http://www.sutti.com" target="_blank">Studio Legale SUTTI</a> by <a href="http://www.creativeweb.it" target="_blank">CREATIVE WEB</a>. All Rights Reserved <img src="template/skin_sutti/images/sep_02.gif" width="2" height="16" align="absmiddle"> </td>
      </tr>
    </table>
  </div>
</div>
</body>
</html>

