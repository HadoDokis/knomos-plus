<?php
/**
* @version $Id: install1.php,v 1.7 2005/02/16 10:57:35 kochp Exp $
* @package Mambo
* @copyright (C) 2000 - 2005 Miro International Pty Ltd
* @license http://www.gnu.org/copyleft/gpl.html GNU/GPL
* Mambo is Free Software
* Modified By Massimo Chieruzzi @ Creative Web snc  
* More info http://www.knomos.org - http://www.creativeweb.it 
*/

/** Include common.php */
include_once( "common.php" );

$DBhostname = trim( mosGetParam( $_POST, 'DBhostname', '' ) );
$DBuserName = trim( mosGetParam( $_POST, 'DBuserName', '' ) );
$DBpassword = trim( mosGetParam( $_POST, 'DBpassword', '' ) );
$DBname  	= trim( mosGetParam( $_POST, 'DBname', '' ) );
$DBHistname  	= trim( mosGetParam( $_POST, 'DBHistname', '' ) );
$DBPrefix  	= trim( mosGetParam( $_POST, 'DBPrefix', 'mos_' ) );
$DBDel  	= intval( mosGetParam( $_POST, 'DBDel', 0 ) );
$DBBackup  	= intval( mosGetParam( $_POST, 'DBBackup', 0 ) );
$DBSample  	= intval( mosGetParam( $_POST, 'DBSample', 1 ) );

echo "<?xml version=\"1.0\" encoding=\"iso-8859-1\"?".">";
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Knomos - Web Installer</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link rel="shortcut icon" href="../../images/favicon.ico" />
<link rel="stylesheet" href="install.css" type="text/css" />
<script  type="text/javascript">
<!--
function check()
{
	// form validation check
	var formValid=false;
	var f = document.form;
	if ( f.DBhostname.value == '' ) {
		alert('Please enter a Host name');
		f.DBhostname.focus();
		formValid=false;
	} else if ( f.DBuserName.value == '' ) {
		alert('Please enter a Database User Name');
		f.DBuserName.focus();
		formValid=false;
	} else if ( f.DBname.value == '' ) {
		alert('Please enter a Name for your new Database');
		f.DBname.focus();
		formValid=false;
	} else if ( confirm('Are you sure these settings are correct? \nKnomos will now attempt to populate a Database with the settings you have supplied')) {
		formValid=true;
	}

	return formValid;
}
//-->
</script>
</head>
<body onload="document.form.DBhostname.focus();">
<div id="wrapper">
    <div id="header">
      <div id="knomos"> <img src="header_install.png" class="logo" alt="Knomos Installation" />
          <div class="version">Knomos v .1.0</div>
          <div class="clear-chusmy">&nbsp;</div>
      </div>
    </div>
</div>
<div id="ctr" align="center">
	<form action="install2.php" method="post" name="form" id="form" onsubmit="return check();">
	<div class="install">
    	<div id="stepbar">
	        <div class="step-ok">pre-installation check</div>
	        <div class="step-ok">license</div>
	        <div class="step-on">step 1</div>
	        <div class="step-off">step 2</div>
	        <div class="step-off">step 3</div>
		</div>
		<div id="right">
			<div class="far-right">
				<input class="button" type="submit" name="next" value="Next >>"/>
  			</div>
      		<div id="step">step 1</div>
  			<div class="clr"></div>
  			<h1>MySQL database configuration:</h1>
      		<div class="install-text">
  	   			<p>Setting up Knomos to run on your server involves 4 simple steps...</p>
  	   			<p>Please enter the hostname of the server Knomos is to be installed on.</p>
    			<p>Enter the MySQL username, password and database name you wish to use with Knomos.</p>
    			
    			<p>Install the samples unless you are an experianced user wanting to start with a completely empty site.</p>
  			</div>
			<div class="install-form">
  	   			<div class="form-block">
  	     			<table class="content2">
  		  			<tr>
  		    			<td></td>
  		    			<td></td>
  		    			<td></td>
  					</tr>
  		  			<tr>
  		    			<td colspan="2">Host Name<br/><input class="inputbox" type="text" name="DBhostname" value="<?php echo "$DBhostname"; ?>" /></td>
			  		    <td><em>This is usually 'localhost'</em></td>
  					</tr>
					<tr>
			  		    <td colspan="2">MySQL User Name<br/><input class="inputbox" type="text" name="DBuserName" value="<?php echo "$DBuserName"; ?>" /></td>
			  		    <td><em>A a username given by the hoster</em></td>
  					</tr>
			  		<tr>
			  		    <td colspan="2">MySQL Password<br/><input class="inputbox" type="text" name="DBpassword" value="<?php echo "$DBpassword"; ?>" /></td>
			  		    <td><em>For site security using a password for the mysql account in mandatory</em></td>
					</tr>
  		  			<tr>
  		    			<td colspan="2">MySQL Database Name<br/><input class="inputbox" type="text" name="DBname" value="<?php echo "$DBname"; ?>" /></td>
			  		    <td></td>
  					</tr>
  		  			<tr>
  		    			<td colspan="2">MySQL History Database Name<br/><input class="inputbox" type="text" name="DBHistname" value="<?php echo "$DBHistname"; ?>" /></td>
			  		    <td><em>This database is used for archived data.</em></td>
  					</tr>


  		  			<tr>
			  		    <td><input type="checkbox" name="DBDel" value="1" <?php if ($DBDel) echo 'checked="checked"'; ?> /></td>
						<td>Drop Existing Tables</td>
  		    			<td>&nbsp;</td>
			  		</tr>
					<!--
  		  			<tr>
			  		    <td><input type="checkbox" name="DBSample" value="1" <?php if ($DBSample) echo 'checked="checked"'; ?> /></td>
						<td>Install Sample Data</td>
			  		    <td><em>Dont uncheck this unless you are experienced with Knomos!</em></td>
			  		</tr>
					-->
		  	     	</table>
  				</div>
			</div>
    	</div>
		<div class="clr"></div>
	</div>
	</form>
</div>
<div class="clr"></div>
<div class="ctr">
<a href="http://www.knomos.org" target="_blank">Knomos</a> Web Installer based on <a href="http://www.mamboserver.com" target="_blank">Mambo</a>'s web installer. Mambo And Knomos are Free Software released under the GNU/GPL License.
</div>

</body>
</html>
