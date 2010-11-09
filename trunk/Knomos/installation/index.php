<?php
/**
* @version $Id: index.php,v 1.5 2005/01/23 03:24:16 kochp Exp $
* @package Mambo
* @copyright (C) 2000 - 2005 Miro International Pty Ltd
* @license http://www.gnu.org/copyleft/gpl.html GNU/GPL
* Mambo is Free Software
* Modified By Massimo Chieruzzi @ Creative Web snc 
* More info http://www.knomos.org - http://www.creativeweb.it
*/

if (file_exists( "../config/config.php" ) && filesize( "../config/config.php" ) > 10) {
	header( "Location: ../index.php" );
	exit();
}

/** Include common.php */
include_once( "common.php" );

function get_php_setting($val) {
	$r =  (ini_get($val) == '1' ? 1 : 0);
	return $r ? 'ON' : 'OFF';
}

function writableCell( $folder ) {
	echo '<tr>';
	echo '<td class="item">' . $folder . '/</td>';
	echo '<td align="left">';
	echo is_writable( "../$folder" ) ? '<b><font color="green">Writeable</font></b>' : '<b><font color="red">Unwriteable</font></b>' . '</td>';
	echo '</tr>';
}

echo "<?xml version=\"1.0\" encoding=\"iso-8859-1\"?".">";
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Knomos - Web Installer</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link rel="shortcut icon" href="../../images/favicon.ico" />
<link rel="stylesheet" href="install.css" type="text/css" />
<script type="text/javascript">
<!--
var checkobj
function agreesubmit(el){
	checkobj=el
	if (document.all||document.getElementById){
		for (i=0;i<checkobj.form.length;i++){  //hunt down submit button
		var tempobj=checkobj.form.elements[i]
		if(tempobj.type.toLowerCase()=="submit")
		tempobj.disabled=!checkobj.checked
		}
	}
}

function defaultagree(el){
	if (!document.all&&!document.getElementById){
		if (window.checkobj&&checkobj.checked)
		return true
		else{
			alert("Please read/accept license to continue installation")
			return false
		}
	}
}
//-->
</script>
</head>
<body>

<div id="wrapper">
  <div id="header">
    <div id="knomos"> <img src="header_install.png" class="logo" alt="Knomos Installation" />
        <div class="version">Knomos v .1.0</div>
        <div class="clear-chusmy">&nbsp;</div>
    </div>
  </div>
</div>

<div id="ctr" align="center">
<div class="install">
<div id="stepbar">
<div class="step-on">pre-installation check</div>
<div class="step-off">license</div>
<div class="step-off">step 1</div>
<div class="step-off">step 2</div>
<div class="step-off">step 3</div>
</div>

<div id="right">

<div id="step">pre-installation check</div>

<div class="far-right">
<input name="Button2" type="submit" class="button" value="Next >>" onclick="window.location='install.php';" />
</div>
<div class="clr"></div>

<h1>PLESE NOTE:</h1>
This Installer is current in beta stage and some errors may occur. If you have trouble with this installer plese follow the guidelines located in INSTALL_it.TXT.
<br><br>
<b>WARNING:</b> If you are installing Knomos in a production enviromnment and plans to use it over the Internet with real, confidential data, you are obviously encouraged to publish it through a secure Web server ("https://") or through a VPN

<h1>Pre-installation check for Knomos 1.0:</h1>
<div class="install-text">
If any of these items are highlighted
in red then please take actions to correct them. Failure to do so
could lead to your Knomos installation not functioning
correctly.
<div class="ctr"></div>
</div>

<div class="install-form">
<div class="form-block">

<table class="content">
<tr>
	<td class="item">
	PHP version >= 4.1.0
	</td>
	<td align="left">
	<?php echo phpversion() < '4.1' ? '<b><font color="red">No</font></b>' : '<b><font color="green">Yes</font></b>';?>
	</td>
</tr>
<tr>
	<td>
	&nbsp; - zlib compression support
	</td>
	<td align="left" >
	<?php echo extension_loaded('zlib') ? '<b><font color="green">Available</font></b>' : '<b><font color="red">Unavailable</font></b>';?>
	</td>
</tr>
<tr>
	<td>
	&nbsp; - MySQL support
	</td>
	<td align="left">
	<?php echo function_exists( 'mysql_connect' ) ? '<b><font color="green">Available</font></b>' : '<b><font color="red">Unavailable</font></b>';?>
	</td>
</tr>
<tr>
	<td valign="top" class="item">
	config/config.php
	</td>
	<td align="left">
	<?php
	if (@file_exists('../config/config.php') &&  @is_writable( '../config/config.php' )){
		echo '<b><font color="green">Writeable</font></b>';
	} else if (is_writable( '../config' )) {
		echo '<b><font color="green">Writeable</font></b>';
	} else {
		echo '<b><font color="red">Unwriteable</font></b><br /><span class="small">You can still continue the install as the configuration will be displayed at the end, just copy & paste this and upload.</span>';
    } ?>
	</td>
</tr>
<tr>
	<td class="item">
	Session save path
	</td>
	<td align="left">
	<b><?php echo (($sp=ini_get('session.save_path'))?$sp:'Not set'); ?></b>,
	<?php echo is_writable( $sp ) ? '<b><font color="green">Writeable</font></b>' : '<b><font color="red">Unwriteable</font></b>';?>
	</td>
</tr>
</table>
</div>
</div>
<div class="clr"></div>

<h1>Recommended settings:</h1>
<div class="install-text">
These settings are recommended for PHP in order to ensure full
compatibility with Knomos.
<br />
However, Knomos will still operate if your settings do not quite match the recommended
<div class="ctr"></div>
</div>

<div class="install-form">
<div class="form-block">

<table class="content">
<tr>
	<td class="toggle">
	Directive
	</td>
	<td class="toggle">
	Recommended
	</td>
	<td class="toggle">
	Actual
	</td>
</tr>
<?php
$php_recommended_settings = array(array ('Safe Mode','safe_mode','OFF'),
array ('Display Errors','display_errors','ON'),
array ('File Uploads','file_uploads','ON'),
array ('Magic Quotes GPC','magic_quotes_gpc','ON'),
array ('Magic Quotes Runtime','magic_quotes_runtime','OFF'),
array ('Register Globals','register_globals','OFF'),
array ('Output Buffering','output_buffering','OFF'),
array ('Session auto start','session.auto_start','OFF'),
);

foreach ($php_recommended_settings as $phprec) {
?>
<tr>
	<td class="item"><?php echo $phprec[0]; ?>:</td>
	<td class="toggle"><?php echo $phprec[2]; ?>:</td>
	<td>
	<?php
	if ( get_php_setting($phprec[1]) == $phprec[2] ) {
	?>
		<font color="green"><b>
	<?php
	} else {
	?>
		<font color="red"><b>
	<?php
	}
	echo get_php_setting($phprec[1]);
	?>
	</b></font>
	<td>
</tr>
<?php
}
?>
</table>
</div>
</div>
<div class="clr"></div>

<h1>Directory and File Permissions:</h1>
<div class="install-text">
In order for Knomos to function
correctly it needs to be able to access or write to certain files
or directories. If you see "Unwriteable" you need to change the
permissions on the file or directory to allow Knomos
to write to it.
<div class="clr">&nbsp;&nbsp;</div>
<div class="ctr"></div>
</div>

<div class="install-form">
<div class="form-block">

<table class="content">
<?php
writableCell( 'tmp' );
writableCell( 'tmp/document' );
writableCell( 'tmp/document/txtindex' );
writableCell( 'tmp/export' );
writableCell( 'tmp/export/cache' );
?>
</table>
</div>
<div class="clr"></div>
</div>
<div class="clr"></div>
</div>
<div class="clr"></div>
</div>
</div>

<div class="ctr">
<a href="http://www.knomos.org" target="_blank">Knomos</a> Web Installer based on <a href="http://www.mamboserver.com" target="_blank">Mambo</a>'s web installer. Mambo And Knomos are Free Software released under the GNU/GPL License.
</div>

</body>	
</html>
