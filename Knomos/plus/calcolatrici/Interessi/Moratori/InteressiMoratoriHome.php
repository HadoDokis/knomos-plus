<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html><head>
<link href="../../../../template/skin_sutti/css/stili_sutti_main.css" rel="stylesheet" type="text/css">
<script language="JavaScript" src="Fx_IntMoratori.js" type="text/javascript"></script>

</head>

<body onload="javascript:ResetAll()">


<div class="rinvio" name="DivIntMor">
<table width="100%"  border="0" cellspacing="1" name="TableImpPen">
<form  method="post" name="Dati" >
<tr>
<th colspan="2" width="100%" align="left"><span class="pratica-tit">
 Calcolatore di interessi moratori ex D.Lgs. 231/2002</span></th>
</tr>



	<tr>
	<td width="30%" onMouseOver="this.className='pratica-over-sub'" onMouseOut="this.className='null'" >
Inserire il capitale iniziale:
	</td>
	<td width="70%" onMouseOver="this.className='pratica-over-sub'" onMouseOut="this.className='null'">
<input size="39" maxlength="15"  value="" name="TxCapitale" class=""  onFocus="this.className='campo-focus-02'" onBlur="this.className='null'">
</form>
	</td>
	</tr>

	<tr>
	<td width="50%" onMouseOver="this.className='pratica-over-sub'" onMouseOut="this.className='null'" >
     <form  method="post" name="DataDa" >
      Inserire la data iniziale (dal 8.8.2002):
	</td>
	<td width="50%" onMouseOver="this.className='pratica-over-sub'" onMouseOut="this.className='null'">
      <select  name="giorno" size="1" class=""  onFocus="this.className='campo-focus-02'" onBlur="this.className='null'">
	  <option value="01">01</option> 
	  <option value="02">02</option> 
	  <option value="03">03</option> 
	  <option value="04">04</option> 
	  <option value="05">05</option> 
	  <option value="06">06</option> 
	  <option value="07">07</option> 
	  <option value="08">08</option> 
	  <option value="09">09</option> 
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

      <select  name="mese" size="1" class=""  onFocus="this.className='campo-focus-02'" onBlur="this.className='null'">
      <option value="01">01</option> 
      <option value="02">02</option> 
      <option value="03">03</option> 
      <option value="04">04</option> 
      <option value="05">05</option> 
      <option value="06">06</option> 
      <option value="07">07</option> 
      <option value="08">08</option> 
      <option value="09">09</option> 
      <option value="10">10</option> 
      <option value="11">11</option> 
      <option value="12">12</option></select> 

      <select  name="anno" size="1" class=""  onFocus="this.className='campo-focus-02'" onBlur="this.className='null'">
      <option value="2012">2012</option> 
      <option value="2011">2011</option> 
      <option value="2010">2010</option> 
      <option value="2009">2009</option> 
      <option value="2008">2008</option> 
      <option value="2007">2007</option> 
      <option value="2006">2006</option> 
      <option value="2005">2005</option> 
      <option value="2004">2004</option> 
      <option value="2003">2003</option> 
      <option value="2002">2002</option> 
      </select>
      </form> 

	</td>
	</tr>

	<tr>
	<td width="50%" onMouseOver="this.className='pratica-over-sub'" onMouseOut="this.className='null'" >

      <form  method="post" name="DataA" >

      Inserire la data finale (fino al 30-6-2010): 

	</td>
	<td width="50%" onMouseOver="this.className='pratica-over-sub'" onMouseOut="this.className='null'">
      <select name="giorno" size="1" class=""  onFocus="this.className='campo-focus-02'" onBlur="this.className='null'"> 
	<option value="01" >01</option> 
	<option value="02" >02</option> 
	<option value="03" >03</option> 
	<option value="04" >04</option> 
	<option value="05">05</option> 
	<option value="06" >06</option> 
	<option value="07" >07</option> 
	<option value="08" >08</option> 
	<option value="09" >09</option> 
	<option value="10" >10</option> 
	<option value="11" >11</option> 
	<option value="12" >12</option> 
	<option value="13" >13</option> 
	<option value="14" >14</option> 
	<option value="15" >15</option> 
	<option value="16" >16</option> 
	<option value="17" >17</option> 
	<option value="18" >18</option> 
	<option value="19" >19</option> 
	<option value="20" >20</option> 
	<option value="21" >21</option> 
	<option value="22" >22</option> 
	<option value="23" >23</option> 
	<option value="24" >24</option> 
	<option value="25" >25</option> 
	<option value="26" >26</option> 
	<option value="27" >27</option> 
	<option value="28" >28</option> 
	<option value="29" >29</option> 
	<option value="30" >30</option> 
	<option value="31" >31</option> 
    </select> 

      <select  name="mese" size="1" class=""  onFocus="this.className='campo-focus-02'" onBlur="this.className='null'"> 
      <option value="01" >01</option> 
      <option value="02" >02</option> 
      <option value="03" >03</option> 
      <option value="04" >04</option> 
      <option value="05" >05</option> 
      <option value="06" >06</option> 
      <option value="07" >07</option> 
      <option value="08" >08</option> 
      <option value="09" >09</option> 
      <option value="10" >10</option> 
      <option value="11" >11</option> 
      <option value="12" >12</option> 
    </select> 

      <select name="anno" size="1" class=""  onFocus="this.className='campo-focus-02'" onBlur="this.className='null'"> 
	<option value="2020">2020</option> 
	<option value="2019">2019</option> 
	<option value="2018">2018</option> 
	<option value="2017">2017</option> 
	<option value="2016">2016</option> 
	<option value="2015">2015</option> 
	<option value="2014">2014</option> 
	<option value="2013">2013</option> 
	<option value="2012">2012</option> 
	<option value="2011">2011</option> 
	<option value="2010">2010</option> 
	<option value="2009">2009</option> 
	<option value="2008">2008</option> 
	<option value="2007">2007</option> 
	<option value="2006">2006</option> 
	<option value="2005">2005</option> 
	<option value="2004">2004</option> 
	<option value="2003">2003</option> 
	<option value="2002">2002</option> 
	<option value="2001">2001</option> 
	<option value="2000">2000</option> 
	<option value="1999">1999</option> 
	<option value="1998">1998</option> 
	<option value="1997">1997</option> 
	<option value="1996">1996</option> 
	<option value="1995">1995</option> 
	<option value="1994">1994</option> 
	<option value="1993">1993</option> 
	<option value="1992">1992</option> 
	<option value="1991">1991</option> 
	<option value="1990">1990</option> 
	<option value="1989">1989</option> 
	<option value="1988">1988</option> 
	<option value="1987">1987</option> 
	<option value="1986">1986</option> 
	<option value="1985">1985</option> 
	<option value="1984">1984</option> 
	<option value="1983">1983</option> 
	<option value="1982">1982</option> 
	<option value="1981">1981</option> 
	<option value="1980">1980</option> 
	<option value="1979">1979</option> 
	<option value="1978">1978</option> 
	<option value="1977">1977</option> 
	<option value="1976">1976</option> 
	<option value="1975">1975</option> 
	<option value="1974">1974</option> 
	<option value="1973">1973</option> 
	<option value="1972">1972</option> 
	<option value="1971">1971</option> 
	<option value="1970">1970</option> 
	<option value="1969">1969</option> 
	<option value="1968">1968</option> 
	<option value="1967">1967</option> 
	<option value="1966">1966</option> 
	<option value="1965">1965</option> 
	<option value="1964">1964</option> 
	<option value="1963">1963</option> 
	<option value="1962">1962</option> 
	<option value="1961">1961</option> 
	<option value="1960">1960</option> 
	<option value="1959">1959</option> 
	<option value="1958">1958</option> 
	<option value="1957">1957</option> 
	<option value="1956">1956</option> 
	<option value="1955">1955</option> 
	<option value="1954">1954</option> 
	<option value="1953">1953</option> 
	<option value="1952">1952</option> 
	<option value="1951">1951</option> 
	<option value="1950">1950</option> 
	<option value="1949">1949</option> 
	<option value="1948">1948</option> 
	<option value="1947">1947</option> 
	<option value="1946">1946</option> 
	<option value="1945">1945</option> 
	<option value="1944">1944</option> 
	<option value="1943">1943</option> 
      </select>

      <input class="bot-submit" value="Oggi" name="OggiButton" onclick="Oggi();" type="button">

      </form>

	</td>
	</tr>

<tr>
<td width="100%" colspan="2" onMouseOver="this.className='pratica-over-sub'" onMouseOut="this.className='null'">
      <form  method="post" name="Maggiorazione" >
	<input name="Chkmagg" type="checkbox"  value="magg" class="form" onclick="ScriviSaggio();" /> Applica la maggiorazione del 2%
	(art. 4, comma 3, vendita di prodotti alimentari deteriorabili) 
      </form>
</td>
</tr>

<tr>
<td width="100%" colspan="2" onMouseOver="this.className='pratica-over-sub'" onMouseOut="this.className='null'">
      <form  method="post" name="Risultato" >
<span class="pratica-resalt-01">
	Risultato:
</span>
	<input size="39" maxlength="95"  value="0" name="TxTotale" readonly="readonly">
      </form>
</td>
</tr>

<tr>
<td width="100%" colspan="2" onMouseOver="this.className='pratica-over-sub'" onMouseOut="this.className='null'">
      <input class="bot-submit" id="PulsCal" value="Calcola" name="CalcolaButton" onclick="CalcolaIntMor();" type="button">
      <input class="bot-submit" id="PulsDel" value="Cancella" name="ResetButton" onclick="ResetAll();" type="button">

</td>
</tr>
<tr>
<td width="100%" colspan="2" onMouseOver="this.className='pratica-over-sub'" onMouseOut="this.className='null'">
      <form style="font-family: Helvetica,Arial,sans-serif;" method="post" name="MostraRiepilogo" >    
      <input name="ChkRiepilogo" type="checkbox"  value="magg" class="form" onclick="ShowRiepilogo();" /> Mostra il riepilogo dei calcoli
      </form>
</td>
</tr>

<tr>
<td width="100%" colspan="2" onMouseOver="this.className='pratica-over-sub'" onMouseOut="this.className='null'">
      <form style="font-family: Helvetica,Arial,sans-serif; visibility:hidden;" id="FormPratica" method="post" name="stampaEpratica" >
      Etichetta: <input size="39" maxlength="15"  value="" name="TxPratica" type="text">
      <input class="bot-submit" id="PulsSta" value="Stampa" name="PrintButton" onclick="FxStampa();" type="hidden">
      </form>
</td>
</tr>

<tr>
<td width="100%" colspan="2" onMouseOver="this.className='pratica-over-sub'" onMouseOut="this.className='null'">
  <div style="display:none " value="gigi" id="Tab2" name="TabRiepilogo"  >
	    <span class="pratica-resalt-01">
	    Riepilogo dei calcoli:
	    </span>

	    <form style="font-family: Helvetica,Arial,sans-serif;  method="post" name="Caselle" >
	    <p>2 sem. 2002 - saggio: <input style="text-align: right" name="txSaggio022" size="5" value="10.35" readonly="readonly" type="text" > 
	    ; giorni: <input style="text-align: right" name="txgg022" size="5" value="-" readonly="readonly" type="text" > 
	    ; importo: <input style="text-align: right" name="txImp022" size="15" value="-" readonly="readonly" type="text" ></p>
	    <p>1 sem. 2003 - saggio: <input style="text-align: right" name="txSaggio031" size="5" value="9.85" readonly="readonly" type="text" > 
	    ; giorni: <input style="text-align: right" name="txgg031" size="5" value="-" readonly="readonly" type="text" > 
	    ; importo: <input style="text-align: right" name="txImp031" size="15" value="-" readonly="readonly" type="text" ></p>
	    <p>2 sem. 2003 - saggio: <input style="text-align: right" name="txSaggio032" size="5" value="9.10" readonly="readonly" type="text" > 
	    ; giorni: <input style="text-align: right" name="txgg032" size="5" value="-" readonly="readonly" type="text" > 
	    ; importo: <input style="text-align: right" name="txImp032" size="15" value="-" readonly="readonly" type="text" ></p>
	    <p>1 sem. 2004 - saggio: <input style="text-align: right" name="txSaggio041" size="5" value="9.02" readonly="readonly" type="text" > 
	    ; giorni: <input style="text-align: right" name="txgg041" size="5" value="-" readonly="readonly" type="text" > 
	    ; importo: <input style="text-align: right" name="txImp041" size="15" value="-" readonly="readonly" type="text" ></p>
	    <p>2 sem. 2004 - saggio: <input style="text-align: right" name="txSaggio042" size="5" value="9.01" readonly="readonly" type="text" > 
	    ; giorni: <input style="text-align: right" name="txgg042" size="5" value="-" readonly="readonly" type="text" > 
	    ; importo: <input style="text-align: right" name="txImp042" size="15" value="-" readonly="readonly" type="text" ></p>
	    <p>1 sem. 2005 - saggio: <input style="text-align: right" name="txSaggio051" size="5" value="9.09" readonly="readonly" type="text" > 
	    ; giorni: <input style="text-align: right" name="txgg051" size="5" value="-" readonly="readonly" type="text" > 
	    ; importo: <input style="text-align: right" name="txImp051" size="15" value="-" readonly="readonly" type="text" ></p>
	    <p>2 sem. 2005 - saggio: <input style="text-align: right" name="txSaggio052" size="5" value="9.05" readonly="readonly" type="text" > 
	    ; giorni: <input style="text-align: right" name="txgg052" size="5" value="-" readonly="readonly" type="text" > 
	    ; importo: <input style="text-align: right" name="txImp052" size="15" value="-" readonly="readonly" type="text" ></p>
	    <p>1 sem. 2006 - saggio: <input style="text-align: right" name="txSaggio061" size="5" value="9.25" readonly="readonly" type="text" > 
	    ; giorni: <input style="text-align: right" name="txgg061" size="5" value="-" readonly="readonly" type="text" > 
	    ; importo: <input style="text-align: right" name="txImp061" size="15" value="-" readonly="readonly" type="text" ></p>
	    <p>2 sem. 2006 - saggio: <input style="text-align: right" name="txSaggio062" size="5" value="9.83" readonly="readonly" type="text" > 
	    ; giorni: <input style="text-align: right" name="txgg062" size="5" value="-" readonly="readonly" type="text" > 
	    ; importo: <input style="text-align: right" name="txImp062" size="15" value="-" readonly="readonly" type="text" ></p>
	    <p>1 sem. 2007 - saggio: <input style="text-align: right" name="txSaggio071" size="5" value="10.58" readonly="readonly" type="text" > 
	    ; giorni: <input style="text-align: right" name="txgg071" size="5" value="-" readonly="readonly" type="text" > 
	    ; importo: <input style="text-align: right" name="txImp071" size="15" value="-" readonly="readonly" type="text" ></p>
	    <p>2 sem. 2007 - saggio: <input style="text-align: right" name="txSaggio072" size="5" value="10.07" readonly="readonly" type="text" > 
	    ; giorni: <input style="text-align: right" name="txgg072" size="5" value="-" readonly="readonly" type="text" > 
	    ; importo: <input style="text-align: right" name="txImp072" size="15" value="-" readonly="readonly" type="text" ></p>
	    <p>1 sem. 2008 - saggio: <input style="text-align: right" name="txSaggio081" size="5" value="11.20" readonly="readonly" type="text" > 
	    ; giorni: <input style="text-align: right" name="txgg081" size="5" value="-" readonly="readonly" type="text" > 
	    ; importo: <input style="text-align: right" name="txImp081" size="15" value="-" readonly="readonly" type="text" ></p>
	    <p>2 sem. 2008 - saggio: <input style="text-align: right" name="txSaggio082" size="5" value="11.10" readonly="readonly" type="text" > 
	    ; giorni: <input style="text-align: right" name="txgg082" size="5" value="-" readonly="readonly" type="text" > 
	    ; importo: <input style="text-align: right" name="txImp082" size="15" value="-" readonly="readonly" type="text" ></p>
	    <p>1 sem. 2009 - saggio: <input style="text-align: right" name="txSaggio091" size="5" value="9.50" readonly="readonly" type="text" > 
	    ; giorni: <input style="text-align: right" name="txgg091" size="5" value="-" readonly="readonly" type="text" > 
	    ; importo: <input style="text-align: right" name="txImp091" size="15" value="-" readonly="readonly" type="text" ></p>
	    <p>2 sem. 2009 - saggio: <input style="text-align: right" name="txSaggio092" size="5" value="8.00" readonly="readonly" type="text" > 
	    ; giorni: <input style="text-align: right" name="txgg092" size="5" value="-" readonly="readonly" type="text" > 
	    ; importo: <input style="text-align: right" name="txImp092" size="15" value="-" readonly="readonly" type="text" ></p>
	    <p>1 sem. 2010 - saggio: <input style="text-align: right" name="txSaggio101" size="5" value="8.00" readonly="readonly" type="text" > 
	    ; giorni: <input style="text-align: right" name="txgg101" size="5" value="-" readonly="readonly" type="text" > 
	    ; importo: <input style="text-align: right" name="txImp101" size="15" value="-" readonly="readonly" type="text" ></p>
	<br> 
	</form>

  </div>
</td>
</tr>



</div>
</td>

</table>
	<p align="center">
		 
		<input  class="bot-submit" value="Scorporo IVA" name="test1" onclick=parent.location.href="../../../../plus/calcolatrici/pages/calcolatrici.php?TipoUtCal=2" type="button"> | 
		<input  class="bot-submit" value="Interessi" name="test1" onclick=parent.location.href="../../../../plus/calcolatrici/pages/calcolatrici.php?TipoUtCal=4" type="button"> | 
		<input  class="bot-submit" value="Interessi legali" name="test1" onclick=parent.location.href="../../../../plus/calcolatrici/pages/calcolatrici.php?TipoUtCal=5" type="button"> | 
		<input  class="bot-submit" value="Interessi moratori" name="test1" onclick=parent.location.href="../../../../plus/calcolatrici/pages/calcolatrici.php?TipoUtCal=6" type="button">  
	</p>
	<p align="center">
		<input  class="bot-submit" value="Patteggiamento" name="test1" onclick=parent.parent.location.href="../../../../plus/calcolatrici/pages/calcolatrici.php?TipoUtCal=1" type="button"> |
		<input  class="bot-submit" value="Termini Impugnazioni penali" name="test1" onclick=parent.location.href="../../../../plus/calcolatrici/pages/calcolatrici.php?TipoUtCal=7&modalita=CalcImPen" type="button"> | 
 		<input  class="bot-submit" value="Termini processuali" name="test1" onclick=parent.location.href="../../../../plus/calcolatrici/pages/calcolatrici.php?TipoUtCal=8" type="button"> |
		<input  class="bot-submit" value="Codice fiscale" name="test1" onclick=parent.location.href="../../../../plus/calcolatrici/pages/calcolatrici.php?TipoUtCal=3" type="button">   
	</p>
</body> 
</html>

