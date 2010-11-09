#!/usr/bin/php

<?
include 'functions.php';

getTextfromSXW('/www/htdocs/cw-portal.com/framework/tmp/document/nuovosistema-123-1.sxw');
$ret = searchDocuments('aliquam');

print_r($ret);
?>

