<html>
  <link href="../../../../template/skin_sutti/css/stili_sutti_main.css" rel="stylesheet" type="text/css">
  <script language="JavaScript" src="FunzioniTerProc.js" type="text/javascript"></script>
<script language="javascript">
  knomos_urlbase = "/";
</script>
  <head>
    <title>Calcolo dei termini processuali</title>
    <meta content="">

  </head>

  <body onLoad="javascript:SetPageLoad()">


<div class="rinvio" name="DivCalcTerminiProcessuali">
<table width="100%"  border="0" cellspacing="1" name="TableImpPen">
<form  method="post" name="MyForm" >



  <tr  name="DivTitolo" id="IT">
  <th colspan="2" width="100%" align="left"><span class="pratica-tit">
  Calcolo dei termini processuali</span>
  </th>
  </tr>



	<tr name="DivData" id="DD">
	<td width="50%" onMouseOver="this.className='pratica-over-sub'" onMouseOut="this.className='null'" >
	<span class="pratica-resalt-01">
	Inserire la data di riferimento:</span>
	</td>
	<td width="50%" onMouseOver="this.className='pratica-over-sub'" onMouseOut="this.className='null'">
			<input class="bot-submit" value="Oggi" name="GoButton" onclick="Oggi();" type="button">
			<select name="MyDayCalTer" size="1" class=""  onFocus="this.className='campo-focus-02'" onBlur="this.className='null'">
			      <option selected="selected" value="1">1</option>
			      <option value="2">2</option>
			      <option value="3">3</option>
			      <option value="4">4</option>
			      <option value="5">5</option>
			      <option value="6">6</option>
			      <option value="7">7</option>
			      <option value="8">8</option>
			      <option value="9">9</option>
			      <option value="10">10</option>
			      <option value="11">11</option>
			      <option value="12">12</option>
			      <option value="13">13</option>
			      <option value="14">14</option>
			      <option value="15">15</option>
			      <option value="16">16</option>
			      <option value="17">17</option>
			      <option value="18">18</option>
			      <option value="19">19</option>
			      <option value="20">20</option>
			      <option value="21">21</option>
			      <option value="22">22</option>
			      <option value="23">23</option>
			      <option value="24">24</option>
			      <option value="25">25</option>
			      <option value="26">26</option>
			      <option value="27">27</option>
			      <option value="28">28</option>
			      <option value="29">29</option>
			      <option value="30">30</option>
			      <option value="31">31</option>
			</select>
			<select name="MyMonthCalTer" size="1" class=""  onFocus="this.className='campo-focus-02'" onBlur="this.className='null'">
			      <option selected="selected" value="1">Gennaio</option>
			      <option value="2">Febbraio</option>
			      <option value="3">Marzo</option>
			      <option value="4">Aprile</option>
			      <option value="5">Maggio</option>
			      <option value="6">Giugno</option>
			      <option value="7">Luglio</option>
			      <option value="8">Agosto</option>
			      <option value="9">Settembre</option>
			      <option value="10">Ottobre</option>
			      <option value="11">Novembre</option>
			      <option value="12">Dicembre</option>
			</select>

			<select name="MyYearCalTer" size="1" class=""  onFocus="this.className='campo-focus-02'" onBlur="this.className='null'">
			      <option value="2010">2010</option>
			      <option value="2011">2011</option>
			      <option value="2012">2012</option>
			      <option value="2013">2013</option>
			      <option value="2014">2014</option>
			      <option value="2015">2015</option>
			      <option value="2016">2016</option>
			      <option value="2017">2017</option>
			      <option value="2018">2018</option>
			      <option value="2019">2019</option>
			</select>


	</td>
	</tr>

<tr>
<td width="100%" colspan="2" onMouseOver="this.className='pratica-over-sub'" onMouseOut="this.className='null'">
<span class="pratica-resalt-01">
Selezionare un termine processuale, civile o penale:
</span>
</td>
</tr>

<tr>
<td width="100%" colspan="2" onMouseOver="this.className='pratica-over-sub'" onMouseOut="this.className='null'">
        <select name="SelTerminiCivili" onchange="javascript:SelTerminiCiv()" id="SelTerCiv"  class=""  onFocus="this.className='campo-focus-02'" onBlur="this.className='null'" > 
		<option selected="selected" value="0">Termini civili...</option> 
<? 
	include("../../../../config/config.php");
	$host=$CONF[db_host]; 
	$user=$CONF[db_user]; 
	$password= $CONF[db_pass];
	mysql_connect($host,$user,$password); 
	mysql_select_db($CONF[db_database]); 

	$sql = "SELECT id, termine, gma, se_liberi, se_todo, se_evento, cod_tipo_impegno, priorita, cod_prest,  civ_pen, descrizione FROM INT_termini_processuali where civ_pen = 1 ORDER BY descrizione" ;
	$esegui_query=mysql_query($sql) or die("Errore di autenticazione. "); 

	while ($campo=mysql_fetch_array($esegui_query))
	{ 
	$codice=$campo['termine'].",".$campo['gma'].",".$campo['se_liberi'].",".$campo['se_todo'].",".$campo['se_evento'].",".$campo['cod_tipo_impegno'].",".$campo['priorita'].",".$campo['cod_prest'];
	?> 
	<option value="<? echo $codice ?>"><? echo $campo['descrizione'] ?></option>
	<? 
	} 

?> 
	</select> 


        <select name="SelTerminiPenali" onchange="javascript:SelTerminiPen()" id="SelTerPen" class=""  onFocus="this.className='campo-focus-02'" onBlur="this.className='null'"> 
		<option selected="selected" value="0">Termini penali...</option> 

<? 
	include("../../../../config/config.php");
	$host=$CONF[db_host]; 
	$user=$CONF[db_user]; 
	$password= $CONF[db_pass];
	mysql_connect($host,$user,$password); 
	mysql_select_db($CONF[db_database]); 

	$sql = "SELECT id, termine, gma, se_liberi, se_todo, se_evento, cod_tipo_impegno, priorita, cod_prest,  civ_pen, descrizione FROM INT_termini_processuali where civ_pen = 2 ORDER BY descrizione" ;
	$esegui_query=mysql_query($sql) or die("Errore di autenticazione. "); 

	while ($campo=mysql_fetch_array($esegui_query))
	{ 
	$codice=$campo['termine'].",".$campo['gma'].",".$campo['se_liberi'].",".$campo['se_todo'].",".$campo['se_evento'].",".$campo['cod_tipo_impegno'].",".$campo['priorita'].",".$campo['cod_prest'];
	?> 
	<option value="<? echo $codice ?>"><? echo $campo['descrizione'] ?></option>
	<? 
	} 

?> 
	</select> 

<input style="text-align: right" name="txTipo1" size="7" value="-" readonly="readonly" type="hidden">
<input style="text-align: right" name="txCodiceK1" size="7" value="-" readonly="readonly" type="hidden">
<input style="text-align: right" name="txModalita" size="11" value="-" readonly="readonly" type="hidden">

<input style="text-align: right" name="txFatto" size="7" value="-" readonly="readonly" type="hidden">
<input style="text-align: right" name="txEvento" size="7" value="-" readonly="readonly" type="hidden">
<input style="text-align: right" name="txPriorita" size="7" value="-" readonly="readonly" type="hidden">
<input style="text-align: right" name="txGenere" size="7" value="-" readonly="readonly" type="hidden">
<input style="text-align: right" name="txInNota" size="7" value="-" readonly="readonly" type="hidden">

</td>
</tr>

<tr>
<td width="100%" colspan="2" onMouseOver="this.className='pratica-over-sub'" onMouseOut="this.className='null'">
<span class="pratica-resalt-01">
 ... oppure inserine uno manualmente e poi premere Calcola:

</span>
</td>
</tr>

<tr>
<td width="100%" colspan="2" onMouseOver="this.className='pratica-over-sub'" onMouseOut="this.className='null'">

<input class="bot-submit" value="Calcola" name="CalcTerminiButton" onclick="CalcolaInsMano();" type="button">
<input style="text-align: right" name="txMano1" size="5" value="" type="text" class=""  onFocus="this.className='campo-focus-02'" onBlur="this.className='null'">
<select name="MyCalcolaIn1" size="1" class=""  onFocus="this.className='campo-focus-02'" onBlur="this.className='null'">
	<option value="g">giorni</option>
	<option value="m">mesi</option>
	<option value="a">anni</option>
</select>
liberi <INPUT TYPE="checkbox" NAME="ckLib1" onchange="javascript:CambiaCheck()" value="1">
Tipo di impegno:
<select name="SelTipoImpegno" id="SelTipoImp"  onchange="SetTipoImp(value)" class=""  onFocus="this.className='campo-focus-02'" onBlur="this.className='null'">
<option style="font-weight: normal" selected="selected" value="APPE">Appuntamento in studio</option>
<option value="APPI">Appuntamento fuori studio</option>
<option value="REDZ">Redazione</option>
<option selected="selected" value="SCAD">Scadenza</option>
<option value="TEL">Telefonica</option>
<option value="TRIB">Accesso in tribunale</option>
<option value="UD">Udienza</option>

</td>
</tr>
<tr>
<td width="100%" colspan="2" onMouseOver="this.className='pratica-over-sub'" onMouseOut="this.className='null'">
<span class="pratica-resalt-01">
Risultati:
</span>

</td>
</tr>



<td width="100%" colspan="2" onMouseOver="this.className='pratica-over-sub'" onMouseOut="this.className='null'">

Calcolo eseguito:
<input style="text-align: right" name="txgg1" size="5" value="-" readonly="readonly" type="text">
<input style="text-align: right" name="txNota0" size="11" value="-" readonly="readonly" type="text">
dal 
<input style="text-align: right" name="txData" size="19" value="-" readonly="readonly" type="text">



</td>
</tr>

<td width="100%" colspan="2" onMouseOver="this.className='pratica-over-sub'" onMouseOut="this.className='null'">
<span class="pratica-resalt-01">
Scadenza:</span>
<input style="text-align: right" name="txGset" size="3" value="-" readonly="readonly" type="text">
<input style="text-align: right" name="txSc1" size="11" value="-" readonly="readonly" type="text">
<div style ="display: none"  Id="DivFestaComandata">
<input style="text-align: left" name="txNota1" size="13" value="-" readonly="readonly" type="text">
</div>
</td>
</tr>



<tr>
<td   width="100%" colspan="2" onMouseOver="this.className='pratica-over-sub'" onMouseOut="this.className='null'">
<div style ="display: none"  Id="DivPror">
<span class="pratica-resalt-01">
Prorogata a:</span>

<input style="text-align: right" name="txGsetDP" size="3" value="-" readonly="readonly" type="text">
<input style="text-align: right" name="txScProrogata" size="11" value="-" readonly="readonly" type="text">
  <div style="display: none" name="domenica2" id="dom2">
  ulteriormente spostato al:
  <input style="text-align: right" name="txScProrogataFinale" size="11" value="-" readonly="readonly" type="text">
  </div>
</div>
</td>
</tr>

<tr>
<td width="100%" colspan="2" onMouseOver="this.className='pratica-over-sub'" onMouseOut="this.className='null'">
<input class="bot-submit" value="Nuovo impegno" name="PulsAddeImpegno" id="PulsAddeImp" onclick="AddeImpegno();" type="button">
  <div style="display: none" name="SeUsaProroga" id="SeUsaPror">
    <input name="ChkUsaProroga" id="ChkUP" type="checkbox"  checked= true  > Per il nuovo impegno usa il termine prorogato
  </div>
<input class="bot-submit" value="Cancella" name="PulsReset" id="PulsRes" onclick="resetAll();" type="button">
</td>
</tr>


</table>
</div>
	<p align="center">
		 
		<input  class="bot-submit" value="Scorporo IVA" name="test1" onclick=parent.location.href="../../../../plus/calcolatrici/pages/calcolatrici.php?TipoUtCal=2" type="button"> | 
		<input  class="bot-submit" value="Interessi" name="test1" onclick=parent.location.href="../../../../plus/calcolatrici/pages/calcolatrici.php?TipoUtCal=4" type="button"> | 
		<input  class="bot-submit" value="Interessi legali" name="test1" onclick=parent.location.href="../../../../plus/calcolatrici/pages/calcolatrici.php?TipoUtCal=5" type="button"> | 
		<input  class="bot-submit" value="Interessi moratori" name="test1" onclick=parent.location.href="../../../../plus/calcolatrici/pages/calcolatrici.php?TipoUtCal=6" type="button">  
	</p>
	<p align="center">
		<input  class="bot-submit" value="Patteggiamento" name="test1" onclick=parent.parent.location.href="../../../../plus/calcolatrici/pages/calcolatrici.php?TipoUtCal=1" type="button"> |
		<input  class="bot-submit" value="Termini Impugnazioni penali" name="test1" onclick=parent.location.href="../../../../plus/calcolatrici/pages/calcolatrici.php?TipoUtCal=7" type="button"> | 
 		<input  class="bot-submit" value="Termini processuali" name="test1" onclick=parent.location.href="../../../../plus/calcolatrici/pages/calcolatrici.php?TipoUtCal=8" type="button"> |
		<input  class="bot-submit" value="Codice fiscale" name="test1" onclick=parent.location.href="../../../../plus/calcolatrici/pages/calcolatrici.php?TipoUtCal=3" type="button">   
	</p>
</body>
</html>


