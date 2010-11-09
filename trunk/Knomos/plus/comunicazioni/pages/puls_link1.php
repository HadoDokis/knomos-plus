<html>
<head>
<title>link veloci</title>
<meta content="">
<style></style>

<link href="../../../template/skin_sutti/css/stili_sutti_main.css"
	rel="stylesheet" type="text/css">

</head>
<body>
<div style="width: 99%;" class="pratica" id="TableImpegniVeloci"
	border="0" cellpadding="0" cellspacing="0">
<p align="center"><?
include('../../../config/config.php');
include('../../../config/config_plus.php');
$x=0;
//Accede ai db
$host=$CONF[db_host];
$user=$CONF[db_user];
$password= $CONF[db_pass];
mysql_connect($host,$user,$password);
mysql_select_db($CONF[db_database]);
//Forma la query
$sql = 'SELECT id, descrizione, url, link, pulsante, target FROM INT_links where link = 1 ORDER BY id' ;
$esegui_query=mysql_query($sql) or die("Errore di autenticazione. ");

while ($campo=mysql_fetch_array($esegui_query))
{
	if ($campo[pulsante]>0)
	{
		if ($x>0){?> |<?}
		$desc=$campo['descrizione'];
		$url=$campo['url'];
		$target=$campo['target'];
		$separatore=";";
		?> <input class='bot-submit' value="<? echo $desc ?>" name='test1'
	onclick=javascript:ApriLink(
	'<? echo $url,$separatore,$target ?>') type='button'> <?
	$x=$x+1;
	}
}

//return $select;

?></p>
</div>

</body>
</html>



