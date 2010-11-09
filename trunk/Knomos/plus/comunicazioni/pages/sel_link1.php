<html>
  <head>
    <title>link veloci</title>
    <meta content="">
    <style></style>

<link href="/template/skin_sutti/css/stili_sutti_main.css" rel="stylesheet" type="text/css">

  </head>
  <body>
<table width="100%"  border="0" cellspacing="1" name="TableImpPen">
<tr  name="DivTitolo" id="IT">
<td width="100%" colspan="2" onMouseOver="this.className='pratica-over-sub'" onMouseOut="this.className='null'">
<span class="pratica-resalt-01">
&nbsp;&nbsp;<span >
Selezionare un collegamento

<?
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
	//Riempie il select
	?> 
	<select name='Selink' id='selink' size='1' onchange='javascript:ApriLinkDaSelect()' class=''  onFocus=(this.className='campo-focus-02') onBlur=(this.className='null')>


	<?

	while ($campo=mysql_fetch_array($esegui_query))
	{ 
	$codice=$campo['url'].";".$campo['target'];

	?> 
		<option value='<? echo $codice ?>'><? echo $campo['descrizione'] ?></option>
	<?
	}
	?> 
	</select></span >
	<?

	//return $select;

 ?>

</td>
</tr>
</table>

</body>
</html>



