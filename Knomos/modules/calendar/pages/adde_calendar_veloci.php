<html>
<head>
<title>Impegni veloci</title>
<meta content="">
<style></style>

<link href="../../../template/skin_sutti/css/stili_sutti_main.css" rel="stylesheet" type="text/css">
</head>
<body>
<table width="100%"  border="0" cellspacing="0">

		<tr>
                <td width="100%" > 
		<span class="pratica-resalt-01">Modelli predefiniti:</span>

		<select name="SelImpVelociCiv" id="SelImpegniVelociC"  onchange="SelectNuovoImpegnoVeloce(1)" class=""  onFocus="this.className='campo-focus-02'" onBlur="this.className='null'">
		<option style="font-weight: normal" selected="selected" value="#">Impegni civili</option>
<? 
	include("../../../framework/framework.php");

	$host=$CONF[db_host]; 
	$user=$CONF[db_user]; 
	$password= $CONF[db_pass];

	mysql_connect($host,$user,$password); 
	mysql_select_db($CONF[db_database]); 

	$sql = "SELECT id, se_todo, se_evento, cod_prest, cod_tipo_impegno, priorita,  comp_desc, luogo, giudice,   civ_pen, descrizione FROM INT_calendar_std where civ_pen = 1 order by descrizione" ;

	$esegui_query=mysql_query($sql) or die("Errore di autenticazione. "); 

	while ($campo=mysql_fetch_array($esegui_query))
	{ 
	$codice=$campo['se_todo'].",".$campo['se_evento'].",".$campo['cod_prest'].",".$campo['cod_tipo_impegno'].",".$campo['priorita'].",".$campo['comp_desc'].",".$campo['luogo'].",".$campo['giudice'];
	?> 
	<option value="<? echo $codice ?>"><? echo $campo['descrizione'] ?></option>
	<? 
	} 

?> 
		</select>

		<select name="SelImpVelociPen" id="SelImpegniVelociP"  onchange="SelectNuovoImpegnoVeloce(2)" class=""  onFocus="this.className='campo-focus-02'" onBlur="this.className='null'">
		<option style="font-weight: normal" selected="selected" value="#">Impegni penali</option>

<? 

	$host=$CONF[db_host]; 
	$user=$CONF[db_user]; 
	$password= $CONF[db_pass];

	mysql_connect($host,$user,$password); 
	mysql_select_db($CONF[db_database]); 

	$sql = "SELECT id, se_todo, se_evento, cod_prest, cod_tipo_impegno, priorita,  comp_desc, luogo, giudice,   civ_pen, descrizione FROM INT_calendar_std where civ_pen = 2  order by descrizione" ;
	$esegui_query=mysql_query($sql) or die("Errore di autenticazione. "); 

	while ($campo=mysql_fetch_array($esegui_query))
	{ 
	$codice=$campo['se_todo'].",".$campo['se_evento'].",".$campo['cod_prest'].",".$campo['cod_tipo_impegno'].",".$campo['priorita'].",".$campo['comp_desc'].",".$campo['luogo'].",".$campo['giudice'];
	?> 
	<option value="<? echo $codice ?>"><? echo $campo['descrizione'] ?></option>
	<? 
	} 

?> 



		</select>

		<select name="SelImpVeloci3" id="SelImpegniVeloci3"  onchange="SelectNuovoImpegnoVeloce(3)" class=""  onFocus="this.className='campo-focus-02'" onBlur="this.className='null'">
		<option style="font-weight: normal" selected="selected" value="#">Veloci</option>

<? 

	$host=$CONF[db_host]; 
	$user=$CONF[db_user]; 
	$password= $CONF[db_pass];

	mysql_connect($host,$user,$password); 
	mysql_select_db($CONF[db_database]); 

	$sql = "SELECT id, se_todo, se_evento, cod_prest, cod_tipo_impegno, priorita,  comp_desc, luogo, giudice,  civ_pen, descrizione FROM INT_calendar_std where civ_pen = 3  order by descrizione" ;
	$esegui_query=mysql_query($sql) or die("Errore di autenticazione. "); 

	while ($campo=mysql_fetch_array($esegui_query))
	{ 
	$codice=$campo['se_todo'].",".$campo['se_evento'].",".$campo['cod_prest'].",".$campo['cod_tipo_impegno'].",".$campo['priorita'].",".$campo['comp_desc'].",".$campo['luogo'].",".$campo['giudice'];
	?> 
	<option value="<? echo $codice ?>"><? echo $campo['descrizione'] ?></option>
	<? 
	} 

?> 



		</select>

		<select name="SelImpVeloci4" id="SelImpegniVeloci4"  onchange="SelectNuovoImpegnoVeloce(4)" class=""  onFocus="this.className='campo-focus-02'" onBlur="this.className='null'">
		<option style="font-weight: normal" selected="selected" value="#">Veloci</option>

<? 

	$host=$CONF[db_host]; 
	$user=$CONF[db_user]; 
	$password= $CONF[db_pass];

	mysql_connect($host,$user,$password); 
	mysql_select_db($CONF[db_database]); 

	$sql = "SELECT id, se_todo, se_evento, cod_prest, cod_tipo_impegno, priorita, comp_desc, luogo, giudice,  civ_pen, descrizione FROM INT_calendar_std where civ_pen = 4  order by descrizione" ;
	$esegui_query=mysql_query($sql) or die("Errore di autenticazione. "); 

	while ($campo=mysql_fetch_array($esegui_query))
	{ 
	$codice=$campo['se_todo'].",".$campo['se_evento'].",".$campo['cod_prest'].",".$campo['cod_tipo_impegno'].",".$campo['priorita'].",".$campo['comp_desc'].",".$campo['luogo'].",".$campo['giudice'];
	?> 
	<option value="<? echo $codice ?>"><? echo $campo['descrizione'] ?></option>
	<? 
	} 

?> 



		</select>
		</td>
		</tr>



	</table>


</body>
</html>
