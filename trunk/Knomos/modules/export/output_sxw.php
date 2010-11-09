<?
include("../../config/config.php");

$name = ereg_replace("[^0-9]","",$_GET['file']).'.sxw';


header("application/x-openoffice");
header("Content-Disposition: attachment; filename=$name");
readfile($CONF[path_base].$CONF[dir_upload].'export/cache/'.$name);
die();

?>
