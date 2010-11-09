<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html><head>
  <link href="../../../../template/skin_sutti/css/stili_sutti_main.css" rel="stylesheet" type="text/css">
  <script language="JavaScript" src="Funzioni_ImPen.js" type="text/javascript"></script>
<script language="javascript">
  knomos_urlbase = "/";
</script>

</head>
<body onload="javascript:SetPageLoad()">


<div class="rinvio" name="DivImpPen">
<table width="100%"  border="0" cellspacing="1" name="TableImpPen">
<form  method="post" name="MyForm" >
<tr  name="DivTitolo" id="IT">
<th colspan="2" width="100%" align="left"><span class="rinvio-tit">
 Calcolatore del termine di scadenza delle impugnazioni penali</span></th>
</tr>

<tr>
<td width="100%" colspan="2" onMouseOver="this.className='pratica-over-sub'" onMouseOut="this.className='null'">
<span class="pratica-resalt-01">
Estremi della sentenza:

</span>
</td>
</tr>

<tr>
<td width="30%" onMouseOver="this.className='pratica-over-sub'" onMouseOut="this.className='null'" >
Data di emissione: 
</td>
<td width="70%" onMouseOver="this.className='pratica-over-sub'" onMouseOut="this.className='null'">
<input style="font-family: Helvetica,Arial,sans-serif;" class="bot-submit" value="Oggi" name="OggiButton" onclick="Oggi();" type="button">
	      <select name="MyDay" size="1" class=""  onFocus="this.className='campo-focus-02'" onBlur="this.className='null'">
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

	      <select name="MyMonth" size="1" class=""  onFocus="this.className='campo-focus-02'" onBlur="this.className='null'">
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

	      <select name="MyYear" size="1" class=""  onFocus="this.className='campo-focus-02'" onBlur="this.className='null'">
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
<td width="30%" onMouseOver="this.className='pratica-over-sub'" onMouseOut="this.className='null'">
Motivazione: 
</td>
<td width="70%" onMouseOver="this.className='pratica-over-sub'" onMouseOut="this.className='null'">
	      <select name="DepSent" onchange="javascript:ImmettiGGdeposito()" size="1" class=""  onFocus="this.className='campo-focus-02'" onBlur="this.className='null'">
	      <option value="0">Motivazione contestuale</option>
	      <option value="15">Motivazione non contestuale</option>
	      <option value="20">Motivazione riservata ex 544/3 cpp (20 gg.)</option>
	      <option value="30">Motivazione riservata ex 544/3 cpp (30 gg.)</option>
	      <option value="40">Motivazione riservata ex 544/3 cpp (40 gg.)</option>
	      <option value="50">Motivazione riservata ex 544/3 cpp (50 gg.)</option>
	      <option value="60">Motivazione riservata ex 544/3 cpp (60 gg.)</option>
	      <option value="70">Motivazione riservata ex 544/3 cpp (70 gg.)</option>
	      <option value="80">Motivazione riservata ex 544/3 cpp (80 gg.)</option>
	      <option value="90">Motivazione riservata ex 544/3 cpp (90 gg.)</option>
	      <option value="1">Motivazione ex 544/3 cpp con termine di giorni ( ... )</option>
	      </select>
	     <input style="text-align: left" name="txTermineDepMotivazione" size="3" value="0" readonly="readonly" type="hidden">

</td>
</tr>
<tr>
<td width="30%" onMouseOver="this.className='pratica-over-sub'" onMouseOut="this.className='null'" >
Data di notifica dell'estratto contumaciale:

</td>
<td width="70%" onMouseOver="this.className='pratica-over-sub'" onMouseOut="this.className='null'">

	      <select name="MyDay02" size="1" class=""  onFocus="this.className='campo-focus-02'" onBlur="this.className='null'">
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
	      <select name="MyMonth02" size="1" class=""  onFocus="this.className='campo-focus-02'" onBlur="this.className='null'">
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

	      <select name="MyYear02" size="1" class=""  onFocus="this.className='campo-focus-02'" onBlur="this.className='null'">
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
<td width="30%" onMouseOver="this.className='pratica-over-sub'" onMouseOut="this.className='null'">
Data di notifica per deposto tardivo:
</td>
<td width="70%" onMouseOver="this.className='pratica-over-sub'" onMouseOut="this.className='null'">
	      <select name="MyDay03" size="1" class=""  onFocus="this.className='campo-focus-02'" onBlur="this.className='null'">
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

	      <select name="MyMonth03" size="1" class=""  onFocus="this.className='campo-focus-02'" onBlur="this.className='null'">
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

	      <select name="MyYear03" size="1" class=""  onFocus="this.className='campo-focus-02'" onBlur="this.className='null'">
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
<td width="30%" onMouseOver="this.className='pratica-over-sub'" onMouseOut="this.className='null'">
	    <input class="bot-submit" value="Calcola" name="CalcolaButton" onclick="Calcola();" type="button">
	    <input class="bot-submit" value="Reset" name="ResetButton" onclick="Reset();" type="button">
	    </form>
</td>

<td width="70%" onMouseOver="this.className='pratica-over-sub'" onMouseOut="this.className='null'">
	    <form  name="txScadenzaFinale" onsubmit="1">
	   TERMINE DI SCADENZA:
	    <input name="face" size="25" value="-" readonly="readonly" type="text" style="  font-weight: bold; color: #000000">
	    </form>
</td>
</tr>


<tr>
<td width="100%" colspan="2" onMouseOver="this.className='pratica-over-sub'" onMouseOut="this.className='null'">
	<input class="bot-submit" value="Nuovo impegno" id="PulsNewImp" onclick="AddePagina();" type="button">
	Aggiungi impegno di rich. copie sentenza<INPUT TYPE="checkbox" id="ckDep" checked=true  value="1">

</td>
</tr>

<tr>
<td width="100%" colspan="2" onMouseOver="this.className='pratica-over-sub'" onMouseOut="this.className='null'">
	  <span class="pratica-resalt-01">Riepilogo:</span>
	  <br><br>Etichetta: 
	  <input style="font-family: Helvetica,Arial,sans-serif; font-size: 12px;" value="" id="TxDescr" name="TxDescrizione"  type="text" size="42">
	  <input class="bot-submit" value="Stampa" name="StampaButton" id="StButton" onclick="FxStampa();" type="button">
</td>
</tr>
<td width="100%" colspan="2" onMouseOver="this.className='pratica-over-sub'" onMouseOut="this.className='null'">


</td>
</tr>

<td width="100%" colspan="2" onMouseOver="this.className='pratica-over-sub'" onMouseOut="this.className='null'">
	    <form style="font-family: Helvetica,Arial,sans-serif; font-size: 12px;" name="txNota" onsubmit="1">
	    <TEXTAREA style="text-align: left; font-family: Helvetica,Arial,sans-serif; font-size: 12px;"  readonly="readonly" value="-" rows="25" cols="51" name="face" type="text" >
	    </TEXTAREA>

</td>
</tr>


</form>
</table>

        <div style="vertical-align: top; text-align: left;font-size: 12px; font-weight: bold; ">


	    <form style="font-family: Helvetica,Arial,sans-serif; font-size: 12px;"   name="tx1" onsubmit="1">
	    <p><input style="text-align: right" name="face" size="45" value="-" readonly="readonly" type="hidden" t> </p>
	    </form>

	    <form style="font-family: Helvetica,Arial,sans-serif; font-size: 12px;" name="txTermineDepMotivazione" onsubmit="1">
	    <p><input style="text-align: right" name="face" size="9" value="0" readonly="readonly" type="hidden"> </p>
	    </form>

	    <form style="font-family: Helvetica,Arial,sans-serif; font-size: 12px;" name="tx7" onsubmit="1">
	    <p><input style="text-align: right" name="face" size="9" value="0" readonly="readonly" type="hidden"></p>
	    </form>

	    <form style="font-family: Helvetica,Arial,sans-serif; font-size: 12px;" name="tx3" onsubmit="1">
	    <p><input style="text-align: right" name="face" size="45" value="-" readonly="readonly" type="hidden"></p>
	    </form>

	    <form style="font-family: Helvetica,Arial,sans-serif; font-size: 12px;" name="tx4" onsubmit="1">
	    <p><input style="text-align: right" name="face" size="45" value="-" readonly="readonly" type="hidden"></p>
	    </form>

	    
	    <form style="font-family: Helvetica,Arial,sans-serif; font-size: 12px;" name="tx5" onsubmit="1">
	    <p><input style="text-align: right" name="face" size="45" value="-" readonly="readonly" type="hidden"></p>
	    </form>

	    <form style="font-family: Helvetica,Arial,sans-serif; font-size: 12px;" name="tx6" onsubmit="1">
	    <p><input style="text-align: right" name="face" size="45" value="-" readonly="readonly" type="hidden"></p>
	    </form>


	    <form style="font-family: Helvetica,Arial,sans-serif; font-size: 12px;" name="tx8" onsubmit="1">
	    <p><input style="text-align: right" name="face" size="45" value="-" readonly="readonly" type="hidden"></p>
	    </form>

	    <form style="font-family: Helvetica,Arial,sans-serif; font-size: 12px;" name="tx9" onsubmit="1">
	    <p><input style="text-align: right" name="face" size="9" value="0" readonly="readonly" type="hidden"></p>
	    </form>

	    <form style="font-family: Helvetica,Arial,sans-serif; font-size: 12px;" name="tx10" onsubmit="1">
	    <p><input style="text-align: right" readonly="readonly" value="-" size="45" name="face" type="hidden" ></p>
	    </form>

	    <form style="font-family: Helvetica,Arial,sans-serif; font-size: 12px;" name="tx11" onsubmit="1">
	    <p><input style="text-align: right" readonly="readonly" value="-" size="45" name="face" type="hidden" ></p>
	    </form>

	    <form style="font-family: Helvetica,Arial,sans-serif; font-size: 12px;" name="tx12" onsubmit="1" >
	    <p><input style="text-align: right" readonly="readonly" value="-" size="45" name="face" type="hidden" ></p>
	    </form>

	    <form style="font-family: Helvetica,Arial,sans-serif; font-size: 12px;" name="kn1" onsubmit="1" >
	    <p><input style="text-align: right" readonly="readonly" value="-" size="45" name="face" type="hidden" ></p>
	    </form>
	    <form style="font-family: Helvetica,Arial,sans-serif; font-size: 12px;" name="kn2" onsubmit="1" >
	    <p><input style="text-align: right" readonly="readonly" value="-" size="45" name="face" type="hidden" ></p>
	    </form>
	    <form style="font-family: Helvetica,Arial,sans-serif; font-size: 12px;" name="kn3" onsubmit="1" >
	    <p><input style="text-align: right" readonly="readonly" value="-" size="45" name="face" type="hidden" ></p>
	    </form>
	    <form style="font-family: Helvetica,Arial,sans-serif; font-size: 12px;" name="kn4" onsubmit="1" >
	    <p><input style="text-align: right" readonly="readonly" value="-" size="45" name="face" type="hidden" ></p>
	    </form>
	    <form style="font-family: Helvetica,Arial,sans-serif; font-size: 12px;" name="txModalita" onsubmit="1" >
	    <p><input style="text-align: right" readonly="readonly" value="-" size="45" name="face" type="hidden" ></p>
	    </form>
	</div>


	
	<p align="center">
		 
		<input  class="bot-submit" value="Scorporo IVA" name="test1" onclick=parent.location.href="../../../../plus/calcolatrici/pages/calcolatrici.php?TipoUtCal=2" type="button"> | 
		<input  class="bot-submit" value="Interessi" name="test1" onclick=parent.location.href="../../../../plus/calcolatrici/pages/calcolatrici.php?TipoUtCal=4" type="button"> | 
		<input  class="bot-submit" value="Interessi legali" name="test1" onclick=parent.location.href="../../../../plus/calcolatrici/pages/calcolatrici.php?TipoUtCal=5" type="button"> | 
		<input  class="bot-submit" value="Interessi moratori" name="test1" onclick=parent.location.href="../../../../plus/calcolatrici/pages/calcolatrici.php?TipoUtCal=6" type="button">  
	</p>
	<p align="center">
		<input  class="bot-submit" value="Patteggiamento" name="test1" onclick=parent.parent.location.href="../../../../plus/calcolatrici/pages/calcolatrici.php?TipoUtCal=1" type="button"> |
		<input  class="bot-submit" value="Termini Impugnazioni penali" name="test1" onclick=parent.location.href="../../../../plus/calcolatrici/pages/calcolatrici.php?TipoUtCal=9" type="button"> | 
 		<input  class="bot-submit" value="Termini processuali" name="test1" onclick=parent.location.href="../../../../plus/calcolatrici/pages/calcolatrici.php?TipoUtCal=8" type="button"> |
		<input  class="bot-submit" value="Codice fiscale" name="test1" onclick=parent.location.href="../../../../plus/calcolatrici/pages/calcolatrici.php?TipoUtCal=3" type="button">   
	</p>
</body>
</html>
