<?php
/**
* @version $Id: install4.php,v 1.10 2005/02/14 09:47:42 kochp Exp $
* @package Mambo
* @copyright (C) 2000 - 2005 Miro International Pty Ltd
* @license http://www.gnu.org/copyleft/gpl.html GNU/GPL
* Mambo is Free Software
* Modified By Massimo Chieruzzi @ Creative Web snc  
* More info http://www.knomos.org - http://www.creativeweb.it 
*/

/** Include common.php */
include_once("common.php");

$DBhostname = trim( mosGetParam( $_POST, 'DBhostname', '' ) );
$DBuserName = trim( mosGetParam( $_POST, 'DBuserName', '' ) );
$DBpassword = trim( mosGetParam( $_POST, 'DBpassword', '' ) );
$DBname  	= trim( mosGetParam( $_POST, 'DBname', '' ) );
$DBHistname  	= trim( mosGetParam( $_POST, 'DBHistname', '' ) );
$DBPrefix  	= trim( mosGetParam( $_POST, 'DBPrefix', '' ) );
$siteUrl = trim( mosGetParam( $_POST, 'siteUrl', '' ) );
$adminUser = trim( mosGetParam( $_POST, 'adminUser', '') );
$absolutePath = trim( mosGetParam( $_POST, 'absolutePath', '' ) );
$relPath = trim( mosGetParam( $_POST, 'relPath', '' ) );
$adminPassword = trim( mosGetParam( $_POST, 'adminPassword', '') );
if ($_POST[webdav]==1) {$webdav=1;} else $webdav=0;

if ((trim($adminUser== "")) ) {
	echo "<form name=\"stepBack\" method=\"post\" action=\"install3.php\">
		<input type=\"hidden\" name=\"DBhostname\" value=\"$DBhostname\" />
		<input type=\"hidden\" name=\"DBuserName\" value=\"$DBuserName\" />
		<input type=\"hidden\" name=\"DBpassword\" value=\"$DBpassword\" />
		<input type=\"hidden\" name=\"DBname\" value=\"$DBname\" />
		<input type=\"hidden\" name=\"DBHistname\" value=\"$DBHistname\" />
		<input type=\"hidden\" name=\"DBPrefix\" value=\"$DBPrefix\" />
		<input type=\"hidden\" name=\"DBcreated\" value=\"1\" />
		<input type=\"hidden\" name=\"adminUser\" value=\"$adminUser\" />
		<input type=\"hidden\" name=\"siteUrl\" value=\"$siteUrl\" />
		<input type=\"hidden\" name=\"absolutePath\" value=\"$absolutePath\" />
		</form>";
	echo "<script>alert('You must provide a valid admin username.'); document.stepBack.submit(); </script>";
	return;
}

if($DBhostname && $DBuserName && $DBname && $DBHistname) {
	$configArray['DBhostname'] = $DBhostname;
	$configArray['DBuserName'] = $DBuserName;
	$configArray['DBpassword'] = $DBpassword;
	$configArray['DBname']     = $DBname;
	$configArray['DBHistname']     = $DBHistname;
	$configArray['DBPrefix']   = $DBPrefix;
} else {
	echo "<form name=\"stepBack\" method=\"post\" action=\"install3.php\">
		<input type=\"hidden\" name=\"DBhostname\" value=\"$DBhostname\" />
		<input type=\"hidden\" name=\"DBuserName\" value=\"$DBuserName\" />
		<input type=\"hidden\" name=\"DBpassword\" value=\"$DBpassword\" />
		<input type=\"hidden\" name=\"DBname\" value=\"$DBname\" />
				<input type=\"hidden\" name=\"DBHistname\" value=\"$DBHistname\" />
		<input type=\"hidden\" name=\"DBPrefix\" value=\"$DBPrefix\" />
		<input type=\"hidden\" name=\"DBcreated\" value=\"1\" />
		<input type=\"hidden\" name=\"adminUser\" value=\"$adminUser\" />
		<input type=\"hidden\" name=\"siteUrl\" value=\"$siteUrl\" />
		<input type=\"hidden\" name=\"absolutePath\" value=\"$absolutePath\" />
		</form>";

	echo "<script>alert('The database details provided are incorrect and/or empty'); document.stepBack.submit(); </script>";
	return;
}


if (file_exists( '../config/config.php' )) {
	$canWrite = is_writable( '../config/config.php' );
} else {
	$canWrite = is_writable( '../config/' );
}

if ($siteUrl) {
	$configArray['siteUrl']=$siteUrl;
	// Fix for Windows
	$absolutePath= str_replace("\\","/", $absolutePath);
	$absolutePath= str_replace("//","/", $absolutePath);
	$configArray['absolutePath']=$absolutePath;

	
	//HERE THE CONFIG PART
	$config = file_get_contents("config.php-dist");
	$config=str_replace('%URLBASE%',$configArray[siteUrl],$config);
	$config=str_replace('%PATHBASE%',$absolutePath,$config);
	$config=str_replace('%ABSURL%',$relPath,$config);
	$config=str_replace('%DBHOST%',$DBhostname,$config);
	$config=str_replace('%DBUSER%',$DBuserName,$config);
	$config=str_replace('%DBPASS%',$DBpassword,$config);
	$config=str_replace('%DBNAME%',$DBname,$config);
	$config=str_replace('%DBHISTNAME%',$DBHistname,$config);
	$config=str_replace('%WEBDAV%',$webdav,$config);

	if ($canWrite && ($fp = fopen("../config/config.php", "w"))) {
		fputs( $fp, $config, strlen( $config ) );
		fclose( $fp );
	} else {
		$canWrite = false;
	} // if

	$cryptpass=md5($adminPassword);

	mysql_connect($DBhostname, $DBuserName, $DBpassword);
	mysql_select_db($DBname);

	// create the admin user
	$installdate = date("Y-m-d H:i:s");

	$query = "INSERT INTO `{$DBPrefix}users` (codice,nome,login,password,mansione,admin,last_pw_change,last_action) VALUES ('adm','Administrator', '$adminUser', '$adminPassword', 'Super Administrator', 1, NOW(), NOW())";
	mysql_query( $query );

} else {
?>
	<form action="install3.php" method="post" name="stepBack3" id="stepBack3">
	  <input type="hidden" name="DBhostname" value="<?php echo $DBhostname;?>" />
	  <input type="hidden" name="DBusername" value="<?php echo $DBuserName;?>" />
	  <input type="hidden" name="DBpassword" value="<?php echo $DBpassword;?>" />
	  <input type="hidden" name="DBname" value="<?php echo $DBname;?>" />
	  <input type="hidden" name="DBHistname" value="<?php echo $DBHistname;?>" />
	  <input type="hidden" name="DBPrefix" value="<?php echo $DBPrefix;?>" />
	  <input type="hidden" name="DBcreated" value="1" />
	  <input type="hidden" name="adminUser" value="$adminUser" />
	  <input type="hidden" name="siteUrl" value="$siteUrl" />
	  <input type="hidden" name="absolutePath" value="$absolutePath" />
	</form>
	<script>alert('The site url has not been provided'); document.stepBack2.submit();</script>
<?php
}
echo "<?xml version=\"1.0\" encoding=\"iso-8859-1\"?".">";
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Knomos - Web Installer</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link rel="stylesheet" href="install.css" type="text/css" />
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
	<form action="dummy" name="form" id="form">
	<div class="install">
		<div id="stepbar">
			<div class="step-ok">pre-installation check</div>
			<div class="step-ok">license</div>
			<div class="step-ok">step 1</div>
			<div class="step-ok">step 2</div>
			<div class="step-on">step 3</div>
		</div>
		<div id="right">
        	<div id="step">step 3</div>
            <div class="far-right">
                <input class="button" type="button" name="runSite" value="View Site"
<?php
                if ($siteUrl) {
                    echo "onClick='window.location.href=\"$siteUrl"."/index.php\" '";
                } else {
                    echo "onClick='window.location.href=\"{$configArray['siteURL']}"."/index.php\" '";
                }
?>/>
               
            </div>
            <div class="clr"></div>
            <h1>Congratulations! Knomos is installed</h1>
            <div class="install-text">
                <p>Click the "View Site" button to start Knomos 
                   to take you to administrator login.</p>
            </div>
            <div class="install-form">
                <div class="form-block">
                    <table width="100%">
                        <tr><td class="error" align="center">PLEASE REMEMBER TO COMPLETELY<br/>REMOVE THE INSTALLATION DIRECTORY</td></tr>
                        <tr><td align="center"><h5>Administration Login Details</h5></td></tr>
                        <tr><td align="center" class="notice"><b>Username : <?php echo $adminUser; ?></b></td></tr>
                        <tr><td align="center" class="notice"><b>Password : <?php echo $adminPassword; ?></b></td></tr>
                        <tr><td>&nbsp;</td></tr>
                        <tr><td align="right">&nbsp;</td></tr>
<?php                       if (!$canWrite) { ?>
                        <tr>
                            <td class="small">
                                Your configuration file or directory is not writeable,
                                or there was a problem creating the configuration file. You'll have to
                                upload the following code by hand. Click in the textarea to highlight
                                all of the code.
                            </td>
                        </tr>
                        <tr>
                            <td align="center">
                                <textarea rows="5" cols="60" name="configcode" onclick="javascript:this.form.configcode.focus();this.form.configcode.select();" ><?php echo htmlspecialchars( $config );?></textarea>
                            </td>
                        </tr>
<?php                       } ?>
                        <tr><td class="small"><?php /*echo $chmod_report*/; ?></td></tr>
                    </table>
                </div>
            </div>
            <div id="break"></div>
		</div>
		<div class="clr"></div>
	</div>
	</form>
</div>
<div class="clr"></div>
<div class="ctr">
<a href="http://www.knomos.org" target="_blank">Knomos</a> Web Installer based on <a href="http://www.mamboserver.com" target="_blank">Mambo</a>'s web installer. Mambo And Knomos are Free Software released under the GNU/GPL License.
</div>

</html>
