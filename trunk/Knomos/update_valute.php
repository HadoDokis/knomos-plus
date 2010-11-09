#!/usr/bin/php

<?
$DB = mysql_connect("localhost" ,"admin","sp0fa1");
mysql_select_db("framework",$DB);

set_time_limit(0);

////////////////////////
function get_url($url) {

  $ch = curl_init();
  curl_setopt ($ch, CURLOPT_URL, $url);
  curl_setopt ($ch, CURLOPT_USERAGENT, "Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.1; Q312461)");
  curl_setopt ($ch, CURLOPT_HEADER, 0);
  curl_setopt ($ch, CURLOPT_RETURNTRANSFER, 1);
  $result = curl_exec ($ch);
  curl_close($ch);
  return $result;
}


// cerca nuove valute
$page = get_url('http://it.finance.yahoo.com/m5?a=1&s=EUR&t=EUR&c=0');

while (preg_match('!<option( selected)? value=([A-Z]+)>([^(]+) \([A-Z]+\)!',$page,$pp)) {

	if ($pp[2] != 'EUR') mysql_query("INSERT INTO INT_valute VALUES (0,'".mysql_escape_string(trim($pp[3]))."','".mysql_escape_string(trim($pp[2]))."',0,'','')");

	$page = ereg_replace(quotemeta($pp[0]),'',$page);
}

$q = mysql_query("SELECT * FROM INT_valute ORDER BY va_cod ASC");
while ($l = mysql_Fetch_assoc($q)) {

	$pg = get_url('http://it.finance.yahoo.com/m5?a=1&s=EUR&t='.$l['va_cod'].'&c=0');
	preg_match('!<th nowrap>[0-9:]+</th><td>([0-9.]+)!',$pg,$pp);
	$val = trim($pp[1]);

	mysql_query("UPDATE INT_valute SET va_val='$val' WHERE va_cod='".$l['va_cod']."'");
	print "$l[va_cod] = $val\n";
}

?>
