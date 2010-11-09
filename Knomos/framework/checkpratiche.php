#!/usr/bin/php
<?

$DB = mysql_connect('localhost','admin','sp0fa1');
mysql_select_db('framework',$DB);

/*
$q = mysql_query("SELECT pratiche.id as praid,contact.codice,contact.id as conid FROM pratiche LEFT JOIN contact ON pr_cliente = codice",$DB);
while ($l = mysql_fetch_assoc($q)) if (strlen($l['codice']) > 0) {
mysql_query("UPDATE pratiche SET pr_ref_idcliente = ".$l['conid']." WHERE id=".$l['praid'],$DB);
print "UPDATE pratiche SET pr_ref_idcliente = ".$l['conid']." WHERE id=".$l['praid']."<br>\n";
$count++;
flush();
}

print $count;

*/


$q = mysql_query("SELECT * FROM note",$DB);
while ($k = mysql_fetch_assoc($q)) {

$newtext = mysql_escape_string(ereg_replace("<br>","\n",$k['nota']));
mysql_query("UPDATE note SET nota=\"$newtext\" WHERE id=".$k['id'],$DB);
//print "UPDATE note SET nota=\"$newtext\" WHERE id=".$k['id']."\n"; 

}
?>
