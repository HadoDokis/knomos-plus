<?php
/**
* @version $Id: install2.php,v 1.7 2005/02/14 09:47:42 kochp Exp $
* @package Mambo
* @copyright (C) 2000 - 2005 Miro International Pty Ltd
* @license http://www.gnu.org/copyleft/gpl.html GNU/GPL
* Mambo is Free Software
* Modified By Massimo Chieruzzi @ Creative Web snc  
* More info http://www.knomos.org - http://www.creativeweb.it 
*/

/** Set flag that this is a parent file */
define( "_VALID_MOS", 1 );

/** Include common.php */
require_once( "common.php" );
require_once( "database.php" );

$DBhostname = trim( mosGetParam( $_POST, 'DBhostname', '' ) );
$DBuserName = trim( mosGetParam( $_POST, 'DBuserName', '' ) );
$DBpassword = trim( mosGetParam( $_POST, 'DBpassword', '' ) );
$DBname  	= trim( mosGetParam( $_POST, 'DBname', '' ) );
$DBHistname  	= trim( mosGetParam( $_POST, 'DBHistname', '' ) );
$DBPrefix  	= trim( mosGetParam( $_POST, 'DBPrefix', '' ) );
$DBDel  	= intval( mosGetParam( $_POST, 'DBDel', 0 ) );
$DBBackup  	= intval( mosGetParam( $_POST, 'DBBackup', 0 ) );
$DBSample	= intval( mosGetParam( $_POST, 'DBSample', 0 ) );
$DBcreated	= intval( mosGetParam( $_POST, 'DBcreated', 0 ) );
$BUPrefix = 'old_';
$configArray['sitename'] = trim( mosGetParam( $_POST, 'sitename', '' ) );

$database = null;

$errors = array();
if (!$DBcreated){
	if (!$DBhostname || !$DBuserName || !$DBname || !$DBHistname) {
		db_err ("stepBack3","The database details provided are incorrect and/or empty.");
	}

	if (!($mysql_link = @mysql_connect( $DBhostname, $DBuserName, $DBpassword ))) {
		db_err ("stepBack2","The password and username provided are incorrect.");
	}

	if($DBname == "") {
		db_err ("stepBack","The database name provided is empty.");
	}

	if($DBHistname == "") {
		db_err ("stepBack","The database name provided for archive is empty.");
	}

	// Does this code actually do anything???
	$configArray['DBhostname'] = $DBhostname;
	$configArray['DBuserName'] = $DBuserName;
	$configArray['DBpassword'] = $DBpassword;
	$configArray['DBname']     = $DBname;
	$configArray['DBHistname']     = $DBHistname;
	$configArray['DBPrefix']   = $DBPrefix;

	$sql = "CREATE DATABASE `$DBname`";
	$mysql_result = mysql_query( $sql );
	$test = mysql_errno();

	if ($test <> 0 && $test <> 1007) {
		db_err( "stepBack", "A database error occurred: " . (mysql_error()) );
	}

	// db is now new or existing, create the db object connector to do the serious work
	$database = new database( $DBhostname, $DBuserName, $DBpassword, $DBname, $DBPrefix );

	$databasehist = new database( $DBhostname, $DBuserName, $DBpassword, $DBHistname, $DBPrefix );


	// delete existing mos table if requested
	if ($DBDel) {
		$database->setQuery( "SHOW TABLES FROM `$DBname`" );
		$errors = array();
		if ($tables = $database->loadResultArray()) {
			foreach ($tables as $table) {
					$database->setQuery( "DROP TABLE IF EXISTS `$table`" );
					$database->query();
					if ($database->getErrorNum()) {
						$errors[$database->getQuery()] = $database->getErrorMsg();
				}
			}
		}
		$databasehist->setQuery( "SHOW TABLES FROM `$DBname`" );
		$errors = array();
		if ($tables = $databasehist->loadResultArray()) {
			foreach ($tables as $table) {
					$databasehist->setQuery( "DROP TABLE IF EXISTS `$table`" );
					$databasehist->query();
					if ($databasehist->getErrorNum()) {
						$errors[$databasehist->getQuery()] = $databasehist->getErrorMsg();
				}
			}
		}
	}

	populate_db($DBname,$DBPrefix,'knomos.sql');
	populate_db($DBHistname,$DBPrefix,'knomos_hist.sql');
	
	if ($DBSample) {
		populate_db($DBname,$DBPrefix,'sample_data.sql');
	}
	$DBcreated = 1;
}

function db_err($step, $alert) {
	global $DBhostname,$DBuserName,$DBpassword,$DBDel,$DBname;
	echo "<form name=\"$step\" method=\"post\" action=\"install1.php\">
	<input type=\"hidden\" name=\"DBhostname\" value=\"$DBhostname\">
	<input type=\"hidden\" name=\"DBuserName\" value=\"$DBuserName\">
	<input type=\"hidden\" name=\"DBpassword\" value=\"$DBpassword\">
	<input type=\"hidden\" name=\"DBDel\" value=\"$DBDel\">
	<input type=\"hidden\" name=\"DBname\" value=\"$DBname\">
	<input type=\"hidden\" name=\"DBHistname\" value=\"$DBHistname\">
	<input type=\"submit\" name=\"back\" value=\"Back to Previous step\" style=\"display:none; \">
	</form>\n";
	echo "<script>alert(\"$alert\"); document.$step.submit();</script>";
	//echo "<script>alert(\"$alert\"); window.history.go(-1);</script>";  //this wasn't working
	exit();
}

function populate_db($DBname, $DBPrefix, $sqlfile) {
	global $errors;

	mysql_select_db($DBname);
	$mqr = @get_magic_quotes_runtime();
	@set_magic_quotes_runtime(0);
	$query = fread(fopen("sql/".$sqlfile, "r"), filesize("sql/".$sqlfile));
	@set_magic_quotes_runtime($mqr);
	$pieces  = split_sql($query);

	for ($i=0; $i<count($pieces); $i++) {
		$pieces[$i] = trim($pieces[$i]);
		if(!empty($pieces[$i]) && $pieces[$i] != "#") {
			$pieces[$i] = str_replace( "#__", $DBPrefix, $pieces[$i]);
			if (!$result = mysql_query ($pieces[$i])) {
				$errors[] = array ( mysql_error(), $pieces[$i] );
			}
		}
	}
}

function split_sql($sql) {
	$sql = trim($sql);
	$sql = ereg_replace("\n#[^\n]*\n", "\n", $sql);

	$buffer = array();
	$ret = array();
	$in_string = false;

	for($i=0; $i<strlen($sql)-1; $i++) {
		if($sql[$i] == ";" && !$in_string) {
			$ret[] = substr($sql, 0, $i);
			$sql = substr($sql, $i + 1);
			$i = 0;
		}

		if($in_string && ($sql[$i] == $in_string) && $buffer[1] != "\\") {
			$in_string = false;
		}
		elseif(!$in_string && ($sql[$i] == '"' || $sql[$i] == "'") && (!isset($buffer[0]) || $buffer[0] != "\\")) {
			$in_string = $sql[$i];
		}
		if(isset($buffer[1])) {
			$buffer[0] = $buffer[1];
		}
		$buffer[1] = $sql[$i];
	}

	if(!empty($sql)) {
		$ret[] = $sql;
	}
	return($ret);
}

$isErr = intval( count( $errors ) );

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
function check() {
	// form validation check
	var formValid = true;
	var f = document.form;
	if ( f.siteUrl.value == '' ) {
		alert('Please enter Site URL');
		f.siteUrl.focus();
		formValid = false;
	} else if ( f.absolutePath.value == '' ) {
		alert('Please enter the absolute path to your site');
		f.absolutePath.focus();
		formValid = false;
	} else if ( f.adminEmail.value == '' ) {
		alert('Please enter an email address to contact your administrator');
		f.adminEmail.focus();
		formValid = false;
	} else if ( f.adminPassword.value == '' ) {
		alert('Please enter a password for you administrator');
		f.adminPassword.focus();
		formValid = false;
	}

	return formValid;
}

//-->
</script>
</head>
<body onload="document.form.siteUrl.focus();">
<div id="wrapper">
    <div id="header">
      <div id="knomos"> <img src="header_install.png" class="logo" alt="Knomos Installation" />
          <div class="version">Knomos v .1.0</div>
          <div class="clear-chusmy">&nbsp;</div>
      </div>
    </div>
</div>

<div id="ctr" align="center">
	<form action="install4.php" method="post" name="form" id="form" onsubmit="return check();">
	<input type="hidden" name="DBhostname" value="<?php echo "$DBhostname"; ?>" />
	<input type="hidden" name="DBuserName" value="<?php echo "$DBuserName"; ?>" />
	<input type="hidden" name="DBpassword" value="<?php echo "$DBpassword"; ?>" />
	<input type="hidden" name="DBname" value="<?php echo "$DBname"; ?>" />
	<input type="hidden" name="DBHistname" value="<?php echo "$DBHistname"; ?>" />
	<input type="hidden" name="DBPrefix" value="<?php echo "$DBPrefix"; ?>" />
	<input type="hidden" name="DBcreated" value="<?php echo "$DBcreated"; ?>" />
	<div class="install">
	    <div id="stepbar">
    	  	<div class="step-ok">pre-installation check</div>
      		<div class="step-ok">license</div>
	      	<div class="step-ok">step 1</div>
    	  	<div class="step-on">step 2</div>
      		<div class="step-off">step 3</div>
    	</div>
		<div id="right">
  			<div class="far-right">
<?php if (!$isErr) { ?>
  		  		<input class="button" type="submit" name="next" value="Next >>"/>
<?php } ?>
  			</div>
	  		<div id="step">step 2</div>
  			<div class="clr"></div>

  			<h1>Enter configuration for Knomos:</h1>
			<div class="install-text">
<?php if ($isErr) { ?>
			Looks like there have been some errors with inserting data into your database!<br />
  			You cannot continue.
<?php } else { ?>
			SUCCESS!
			<br/>
			<br/>
  			
<?php } ?>
  		</div>

  		<div class="install-form">
  			<div class="form-block">
  				<table class="content2">
<?php
			if ($isErr) {
	            echo '<tr><td colspan="2">';
	            echo '<b></b>';
	            echo "<br/><br />Error log:<br />\n";
	            // abrupt failure
	            echo '<textarea rows="10" cols="50">';
	            foreach($errors as $error) {
	                echo "SQL=$error[0]:\n- - - - - - - - - -\n$error[1]\n= = = = = = = = = =\n\n";
	            }
	            echo '</textarea>';
	            echo "</td></tr>\n";
  			} else {
?>
    		        <tr>
    		            <td width="100">URL</td>
<?php
	$url = "";
	if ($configArray['siteUrl'])
		$url = $configArray['siteUrl'];
    else {
        $root = $_SERVER['SERVER_NAME'].$_SERVER['PHP_SELF'];
        $root = str_replace("installation/","",$root);
        $root = str_replace("/install2.php","",$root);
        $url = "http://".$root."/";
    }
?>    		            <td align="center"><input class="inputbox" type="text" name="siteUrl" value="<?php echo $url; ?>" size="50"/></td>
					</tr>
    		        <tr>
    		            <td>Path</td>
<?php
	$abspath = "";
	if ($configArray['absolutePath'])
    	$abspath = $configArray['absolutePath'];
	else {
	    $path = getcwd();
    	if (preg_match("/\/installation/i", "$path"))
        	$abspath = str_replace('/installation',"",$path);
    	else
        	$abspath = str_replace('\installation',"",$path);
	}
	$abspath.='/';
?>    		            <td align="center"><input class="inputbox" type="text" name="absolutePath" value="<?php echo $abspath; ?>" size="50"/></td>
					</tr>
					<tr>
    		            <td>Relative Path</td>
    		            <td align="center"><input class="inputbox" type="text" name="relPath" value="/" size="50" /></td>
					</tr>
					<tr>
    		            <td>Admin username</td>
    		            <td align="center"><input class="inputbox" type="text" name="adminUser" value="<?php echo "$adminUser"; ?>" size="50" /></td>
					</tr>
					<tr>
    		            <td>Admin password</td>
    		            <td align="center"><input class="inputbox" type="text" name="adminPassword" value="<?php echo mosMakePassword(8); ?>" size="50"/></td>
	                </tr>
  	  			<tr>
			  		    <td colspan="2"><input type="checkbox" name="webdav" value="1" <?php if ($webdav) echo 'checked="checked"'; ?> /> Enable Webdav support</td>
			  		</tr>

  				</table>
<?php
  			} // if
?>
  			</div>
  		</div>
  		<div class="clr"></div>
  		<div id="break"></div>
	</div>
	<div class="clr"></div>
	</form>
</div>
<div class="clr"></div>
</div>
<div class="ctr">
<a href="http://www.knomos.org" target="_blank">Knomos</a> Web Installer based on <a href="http://www.mamboserver.com" target="_blank">Mambo</a>'s web installer. Mambo And Knomos are Free Software released under the GNU/GPL License.
</div>

</body>
</html>
