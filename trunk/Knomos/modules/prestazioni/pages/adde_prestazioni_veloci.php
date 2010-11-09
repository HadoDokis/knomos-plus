<html>
  <head>
    <title>Prestazioni veloci</title>
    <meta content="">
    <style></style>

<link href="../../../template/skin_sutti/css/stili_sutti_main.css" rel="stylesheet" type="text/css">

</head>
<body>
<div id="divpippo" class="form-01"  width="100%" >

<table width="100%" height="79%" border="0" cellspacing="1" class="form-01-table">

 	<tr>
	<td id="S12"  width="100%"  colspan="2" onMouseOver="this.className='pratica-over-sub'" onMouseOut="this.className='null'">
<? 
	include("../../../config/config.php");
	include("../../../config/config_plus.php");
	$codice="0";
	$selettore=$CONF[titolo_selettore1];
	$sel_vuoto="N.D.";
	//Accede ai db
	$host=$CONF[db_host]; 
	$user=$CONF[db_user]; 
	$password= $CONF[db_pass];
	mysql_connect($host,$user,$password); 
	mysql_select_db($CONF[db_database]); 
	if ($CONF[usa_tariffario_knomos]==true) //Tariffario knomos
	{
		//Forma la query
		$sql = "SELECT id, tatid, tat_desc, selettore FROM INT_tariffe where selettore = 1 ORDER BY tatid" ;
		$esegui_query=mysql_query($sql) or die("Errore di autenticazione. ");
		$num_righe = mysql_num_rows($esegui_query);
		//DEFINISCE IL SELECT
		?> 
		<select name="SelPrestazioni1" onchange="javascript:TarDaSelect(1)" id="SelPrest1"  class=""  onFocus="this.className='campo-focus-02'" onBlur="this.className='null'" > 

		<? 
		if ($num_righe > 0)
		{
			//Scrive il titolo
			?> <option selected="selected" value="<? echo $codice ?>"><? echo $selettore ?></option><?
			//Riempie il select
			while ($campo=mysql_fetch_array($esegui_query))
			{ 
				$codice=$campo['tatid'];
				?> 
				<option value="<? echo $codice ?>"><? echo $campo['tat_desc'] ?></option>
				<?
			}
		}else {?> <option selected="selected" value="<? echo '0' ?>"><? echo $sel_vuoto ?></option><?}
		//chiude IL SELECT
		?></select><? 
	}
	else //Tariffario forense
	{
		//Forma la query
		$sql = "SELECT id, cod_tariffa, descrizione, selettore, ordine FROM INT_tariffe_STD where selettore = 1 ORDER BY ordine" ;
		$esegui_query=mysql_query($sql) or die("Errore di autenticazione. "); 
		$num_righe = mysql_num_rows($esegui_query);
		//DEFINISCE IL SELECT
		?> 
		<select name="SelPrestazioni1" onchange="javascript:TarDaSelect(1)" id="SelPrest1"  class=""  onFocus="this.className='campo-focus-02'" onBlur="this.className='null'" > 
		<? 
		if ($num_righe > 0)
		{

			//Scrive il titolo
			?> <option selected="selected" value="<? echo $codice ?>"><? echo $selettore ?></option><?
			//Riempie il select
			while ($campo=mysql_fetch_array($esegui_query))
				{ 
				$codice=$campo['cod_tariffa'];
				?> 
				<option value="<? echo $codice ?>"><? echo $campo['descrizione'] ?></option>
				<?
			}
		}else {?> <option selected="selected" value="<? echo '0' ?>"><? echo $sel_vuoto ?></option><?}
		//chiude IL SELECT
		?></select><? 


	} 
?> 

		 
<? 
	include("../../../config/config.php");
	include("../../../config/config_plus.php");
	$codice="0";
	$selettore=$CONF[titolo_selettore2];
	//Accede ai db
	$host=$CONF[db_host]; 
	$user=$CONF[db_user]; 
	$password= $CONF[db_pass];
	mysql_connect($host,$user,$password); 
	mysql_select_db($CONF[db_database]); 
	if ($CONF[usa_tariffario_knomos]==true) //Tariffario knomos
	{
		//Forma la query
		$sql = "SELECT id, tatid, tat_desc, selettore FROM INT_tariffe where selettore = 2 ORDER BY tatid" ;
		$esegui_query=mysql_query($sql) or die("Errore di autenticazione. ");
		$num_righe = mysql_num_rows($esegui_query);
		//DEFINISCE IL SELECT
		?> 
		<select name="SelPrestazioni2" onchange="javascript:TarDaSelect(2)" id="SelPrest2"  class=""  onFocus="this.className='campo-focus-02'" onBlur="this.className='null'" > 
		<? 
		if ($num_righe > 0)
		{
			//Scrive il titolo
			?> <option selected="selected" value="<? echo $codice ?>"><? echo $selettore ?></option><?
			//Riempie il select
			while ($campo=mysql_fetch_array($esegui_query))
			{ 
				$codice=$campo['tatid'];
				?> 
				<option value="<? echo $codice ?>"><? echo $campo['tat_desc'] ?></option>
				<?
			}
		}else {?> <option selected="selected" value="<? echo '0' ?>"><? echo $sel_vuoto ?></option><?}
		//chiude IL SELECT
		?></select><? 
	}
	else //Tariffario forense
	{
		//Forma la query
		$sql = "SELECT id, cod_tariffa, descrizione, selettore, ordine FROM INT_tariffe_STD where selettore = 2 ORDER BY ordine" ;
		$esegui_query=mysql_query($sql) or die("Errore di autenticazione. "); 
		$num_righe = mysql_num_rows($esegui_query);
		//DEFINISCE IL SELECT
		?> 
		<select name="SelPrestazioni2" onchange="javascript:TarDaSelect(2)" id="SelPrest2"  class=""  onFocus="this.className='campo-focus-02'" onBlur="this.className='null'" > 
		<? 
		if ($num_righe > 0)
		{

			//Scrive il titolo
			?> <option selected="selected" value="<? echo $codice ?>"><? echo $selettore ?></option><?
			//Riempie il select
			while ($campo=mysql_fetch_array($esegui_query))
				{ 
				$codice=$campo['cod_tariffa'];
				?> 
				<option value="<? echo $codice ?>"><? echo $campo['descrizione'] ?></option>
				<?
			}
		}else {?> <option selected="selected" value="<? echo '0' ?>"><? echo $sel_vuoto ?></option><?}
		//chiude IL SELECT
		?></select><? 


	} 
?> 
	</td>
	</tr>

 	<tr>
	<td id="S34"  width="100%"  colspan="2" onMouseOver="this.className='pratica-over-sub'" onMouseOut="this.className='null'">

		 
<? 
	include("../../../config/config.php");
	include("../../../config/config_plus.php");
	$codice="0";
	$selettore=$CONF[titolo_selettore3];
	//Accede ai db
	$host=$CONF[db_host]; 
	$user=$CONF[db_user]; 
	$password= $CONF[db_pass];
	mysql_connect($host,$user,$password); 
	mysql_select_db($CONF[db_database]); 
	if ($CONF[usa_tariffario_knomos]==true) //Tariffario knomos
	{
		//Forma la query
		$sql = "SELECT id, tatid, tat_desc, selettore FROM INT_tariffe where selettore = 3 ORDER BY tatid" ;
		$esegui_query=mysql_query($sql) or die("Errore di autenticazione. ");
		$num_righe = mysql_num_rows($esegui_query);
		//DEFINISCE IL SELECT
		?> 
		<select name="SelPrestazioni3" onchange="javascript:TarDaSelect(3)" id="SelPrest1"  class=""  onFocus="this.className='campo-focus-02'" onBlur="this.className='null'" > 
		<? 
		if ($num_righe > 0)
		{
			//Scrive il titolo
			?> <option selected="selected" value="<? echo $codice ?>"><? echo $selettore ?></option><?
			//Riempie il select
			while ($campo=mysql_fetch_array($esegui_query))
			{ 
				$codice=$campo['tatid'];
				?> 
				<option value="<? echo $codice ?>"><? echo $campo['tat_desc'] ?></option>
				<?
			}
		}else {?> <option selected="selected" value="<? echo '0' ?>"><? echo $sel_vuoto ?></option><?}
		//chiude IL SELECT
		?></select><? 
	}
	else //Tariffario forense
	{
		//Forma la query
		$sql = "SELECT id, cod_tariffa, descrizione, selettore, ordine FROM INT_tariffe_STD where selettore = 3 ORDER BY ordine" ;
		$esegui_query=mysql_query($sql) or die("Errore di autenticazione. "); 
		$num_righe = mysql_num_rows($esegui_query);
		//DEFINISCE IL SELECT
		?> 
		<select name="SelPrestazioni3" onchange="javascript:TarDaSelect(3)" id="SelPrest3"  class=""  onFocus="this.className='campo-focus-02'" onBlur="this.className='null'" > 
		<? 
		if ($num_righe > 0)
		{

			//Scrive il titolo
			?> <option selected="selected" value="<? echo $codice ?>"><? echo $selettore ?></option><?
			//Riempie il select
			while ($campo=mysql_fetch_array($esegui_query))
				{ 
				$codice=$campo['cod_tariffa'];
				?> 
				<option value="<? echo $codice ?>"><? echo $campo['descrizione'] ?></option>
				<?
			}
		}else {?> <option selected="selected" value="<? echo '0' ?>"><? echo $sel_vuoto ?></option><?}
		//chiude IL SELECT
		?></select><? 


	} 
?> 
		 
<? 
	include("../../../config/config.php");
	include("../../../config/config_plus.php");
	$codice="0";
	$selettore=$CONF[titolo_selettore4];
	//Accede ai db
	$host=$CONF[db_host]; 
	$user=$CONF[db_user]; 
	$password= $CONF[db_pass];
	mysql_connect($host,$user,$password); 
	mysql_select_db($CONF[db_database]); 
	if ($CONF[usa_tariffario_knomos]==true) //Tariffario knomos
	{
		//Forma la query
		$sql = "SELECT id, tatid, tat_desc, selettore FROM INT_tariffe where selettore = 4 ORDER BY tatid" ;
		$esegui_query=mysql_query($sql) or die("Errore di autenticazione. ");
		$num_righe = mysql_num_rows($esegui_query);
		//DEFINISCE IL SELECT
		?> 
		<select name="SelPrestazioni4" onchange="javascript:TarDaSelect(4)" id="SelPrest4"  class=""  onFocus="this.className='campo-focus-02'" onBlur="this.className='null'" > 
		<? 
		if ($num_righe > 0)
		{
			//Scrive il titolo
			?> <option selected="selected" value="<? echo $codice ?>"><? echo $selettore ?></option><?
			//Riempie il select
			while ($campo=mysql_fetch_array($esegui_query))
			{ 
				$codice=$campo['tatid'];
				?> 
				<option value="<? echo $codice ?>"><? echo $campo['tat_desc'] ?></option>
				<?
			}
		}else {?> <option selected="selected" value="<? echo '0' ?>"><? echo $sel_vuoto ?></option><?}
		//chiude IL SELECT
		?></select><? 
	}
	else //Tariffario forense
	{
		//Forma la query
		$sql = "SELECT id, cod_tariffa, descrizione, selettore, ordine FROM INT_tariffe_STD where selettore = 4 ORDER BY ordine" ;
		$esegui_query=mysql_query($sql) or die("Errore di autenticazione. "); 
		$num_righe = mysql_num_rows($esegui_query);
		//DEFINISCE IL SELECT
		?> 
		<select name="SelPrestazioni4" onchange="javascript:TarDaSelect(4)" id="SelPrest4"  class=""  onFocus="this.className='campo-focus-02'" onBlur="this.className='null'" > 
		<? 
		if ($num_righe > 0)
		{

			//Scrive il titolo
			?> <option selected="selected" value="<? echo $codice ?>"><? echo $selettore ?></option><?
			//Riempie il select
			while ($campo=mysql_fetch_array($esegui_query))
				{ 
				$codice=$campo['cod_tariffa'];
				?> 
				<option value="<? echo $codice ?>"><? echo $campo['descrizione'] ?></option>
				<?
			}
		}else {?> <option selected="selected" value="<? echo '0' ?>"><? echo $sel_vuoto ?></option><?}
		//chiude IL SELECT
		?></select><? 


	} 
?> 
 
	</td>
	</tr>

 	<tr>
	<td id="S56"  width="100%"  colspan="2" onMouseOver="this.className='pratica-over-sub'" onMouseOut="this.className='null'">
		 
<? 
	include("../../../config/config.php");
	include("../../../config/config_plus.php");
	$codice="0";
	$selettore=$CONF[titolo_selettore5];
	//Accede ai db
	$host=$CONF[db_host]; 
	$user=$CONF[db_user]; 
	$password= $CONF[db_pass];
	mysql_connect($host,$user,$password); 
	mysql_select_db($CONF[db_database]); 
	if ($CONF[usa_tariffario_knomos]==true) //Tariffario knomos
	{
		//Forma la query
		$sql = "SELECT id, tatid, tat_desc, selettore FROM INT_tariffe where selettore = 5 ORDER BY tatid" ;
		$esegui_query=mysql_query($sql) or die("Errore di autenticazione. ");
		$num_righe = mysql_num_rows($esegui_query);
		//DEFINISCE IL SELECT
		?> 
		<select name="SelPrestazioni5" onchange="javascript:TarDaSelect(5)" id="SelPrest5"  class=""  onFocus="this.className='campo-focus-02'" onBlur="this.className='null'" > 
		<? 
		if ($num_righe > 0)
		{
			//Scrive il titolo
			?> <option selected="selected" value="<? echo $codice ?>"><? echo $selettore ?></option><?
			//Riempie il select
			while ($campo=mysql_fetch_array($esegui_query))
			{ 
				$codice=$campo['tatid'];
				?> 
				<option value="<? echo $codice ?>"><? echo $campo['tat_desc'] ?></option>
				<?
			}
		}else {?> <option selected="selected" value="<? echo '0' ?>"><? echo $sel_vuoto ?></option><?}
		//chiude IL SELECT
		?></select><? 
	}
	else //Tariffario forense
	{
		//Forma la query
		$sql = "SELECT id, cod_tariffa, descrizione, selettore, ordine FROM INT_tariffe_STD where selettore = 5 ORDER BY ordine" ;
		$esegui_query=mysql_query($sql) or die("Errore di autenticazione. "); 
		$num_righe = mysql_num_rows($esegui_query);
		//DEFINISCE IL SELECT
		?> 
		<select name="SelPrestazioni5" onchange="javascript:TarDaSelect(5)" id="SelPrest5"  class=""  onFocus="this.className='campo-focus-02'" onBlur="this.className='null'" > 
		<? 
		if ($num_righe > 0)
		{

			//Scrive il titolo
			?> <option selected="selected" value="<? echo $codice ?>"><? echo $selettore ?></option><?
			//Riempie il select
			while ($campo=mysql_fetch_array($esegui_query))
				{ 
				$codice=$campo['cod_tariffa'];
				?> 
				<option value="<? echo $codice ?>"><? echo $campo['descrizione'] ?></option>
				<?
			}
		}else {?> <option selected="selected" value="<? echo '0' ?>"><? echo $sel_vuoto ?></option><?}
		//chiude IL SELECT
		?></select><? 


	} 
?> 

<? 
	include("../../../config/config.php");
	include("../../../config/config_plus.php");
	$codice="0";
	$selettore=$CONF[titolo_selettore6];
	//Accede ai db
	$host=$CONF[db_host]; 
	$user=$CONF[db_user]; 
	$password= $CONF[db_pass];
	mysql_connect($host,$user,$password); 
	mysql_select_db($CONF[db_database]); 
	if ($CONF[usa_tariffario_knomos]==true) //Tariffario knomos
	{
		//Forma la query
		$sql = "SELECT id, tatid, tat_desc, selettore FROM INT_tariffe where selettore = 6 ORDER BY tatid" ;
		$esegui_query=mysql_query($sql) or die("Errore di autenticazione. ");
		$num_righe = mysql_num_rows($esegui_query);
		//DEFINISCE IL SELECT
		?> 
		<select name="SelPrestazioni6" onchange="javascript:TarDaSelect(6)" id="SelPrest6"  class=""  onFocus="this.className='campo-focus-02'" onBlur="this.className='null'" > 
		<? 
		if ($num_righe > 0)
		{
			//Scrive il titolo
			?> <option selected="selected" value="<? echo $codice ?>"><? echo $selettore ?></option><?
			//Riempie il select
			while ($campo=mysql_fetch_array($esegui_query))
			{ 
				$codice=$campo['tatid'];
				?> 
				<option value="<? echo $codice ?>"><? echo $campo['tat_desc'] ?></option>
				<?
			}
		}else {?> <option selected="selected" value="<? echo '0' ?>"><? echo $sel_vuoto ?></option><?}
		//chiude IL SELECT
		?></select><? 
	}
	else //Tariffario forense
	{
		//Forma la query
		$sql = "SELECT id, cod_tariffa, descrizione, selettore, ordine FROM INT_tariffe_STD where selettore = 6 ORDER BY ordine" ;
		$esegui_query=mysql_query($sql) or die("Errore di autenticazione. "); 
		$num_righe = mysql_num_rows($esegui_query);
		//DEFINISCE IL SELECT
		?> 
		<select name="SelPrestazioni6" onchange="javascript:TarDaSelect(6)" id="SelPrest6"  class=""  onFocus="this.className='campo-focus-02'" onBlur="this.className='null'" > 
		<? 
		if ($num_righe > 0)
		{

			//Scrive il titolo
			?> <option selected="selected" value="<? echo $codice ?>"><? echo $selettore ?></option><?
			//Riempie il select
			while ($campo=mysql_fetch_array($esegui_query))
				{ 
				$codice=$campo['cod_tariffa'];
				?> 
				<option value="<? echo $codice ?>"><? echo $campo['descrizione'] ?></option>
				<?
			}
		}else {?> <option selected="selected" value="<? echo '0' ?>"><? echo $sel_vuoto ?></option><?}
		//chiude IL SELECT
		?></select><? 


	} 
?> 

	</td>
	</tr>

</table>
</div>	
<p>

</body>
</html>
