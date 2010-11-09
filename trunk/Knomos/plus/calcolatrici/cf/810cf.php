<html>


  <link href="../../../template/skin_sutti/css/stili_sutti_main.css" rel="stylesheet" type="text/css">

<script language="javascript" src="810cf.js"></script>
<script language="javascript">
  knomos_urlbase = "/";
</script>
  <body onLoad="javascript:SetPageLoadCF()" >


<div class="rinvio" name="DivCF">
<table width="100%" border="0" cellspacing="1" name="TableImpPen">

<tr>
<th colspan="2" width="100%" align="left"><span class="rinvio-tit">
 Calcolatore del codice fiscale</span></th>
</tr>

<form name="CodiceFiscale" id="cf">

	<tr>
	<td width="30%" onMouseOver="this.className='pratica-over-sub'" onMouseOut="this.className='null'" >
Cognome:
	</td>
	<td width="70%" onMouseOver="this.className='pratica-over-sub'" onMouseOut="this.className='null'">
<input type="text" id="cog" name="iCognome" value="" SIZE="31" class=""  onFocus="this.className='campo-focus-02'" onBlur="this.className='null'">	</td>
	</tr>
	<td width="30%" onMouseOver="this.className='pratica-over-sub'" onMouseOut="this.className='null'" >
Nome:
	</td>
	<td width="70%" onMouseOver="this.className='pratica-over-sub'" onMouseOut="this.className='null'">
<input type="text" name="iNome" value="" SIZE="31" class=""  onFocus="this.className='campo-focus-02'" onBlur="this.className='null'">
	</td>

	</tr>
	<td width="30%" onMouseOver="this.className='pratica-over-sub'" onMouseOut="this.className='null'" >
Data di nascita (gg/mm/yyyy):
	</td>
	<td width="70%" onMouseOver="this.className='pratica-over-sub'" onMouseOut="this.className='null'">
         <select name="iGiorno" class=""  onFocus="this.className='campo-focus-02'" onBlur="this.className='null'">
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
         <select name="iMese" class=""  onFocus="this.className='campo-focus-02'" onBlur="this.className='null'">
            <option value="A">01</option>
            <option value="B">02</option>
            <option value="C">03</option>
            <option value="D">04</option>
            <option value="E">05</option>
            <option value="H">06</option>
            <option value="L">07</option>
            <option value="M">08</option>
            <option value="P">09</option>
            <option value="R">10</option>
            <option value="S">11</option>
            <option value="T">12</option>
         </select>
         <input type="text" name="iAnno" size=5 maxlength=4 class=""  onFocus="this.className='campo-focus-02'" onBlur="this.className='null'">

Sesso
<select name="iGender" class=""  onFocus="this.className='campo-focus-02'" onBlur="this.className='null'">
<option value="M">M</option><option value="F">F</option></select>


	</td>

	</tr>
	<td width="30%" onMouseOver="this.className='pratica-over-sub'" onMouseOut="this.className='null'" >
Comune di nascita:
	</td>
	<td width="70%" onMouseOver="this.className='pratica-over-sub'" onMouseOut="this.className='null'">
<input type="text" name="iComune" SIZE="31" class=""  onFocus="this.className='campo-focus-02'" onBlur="this.className='null'">
ivi residente <INPUT TYPE="checkbox" NAME="ckIviRes" value="1">
	</td>
	</tr>


<tr>
<td width="100%" colspan="2" onMouseOver="this.className='pratica-over-sub'" onMouseOut="this.className='null'">
<span class="pratica-resalt-01">
Codice fiscale:
</span>
<input type="text" SIZE="31" name="Risultato" readonly="readonly">
<input class="bot-submit" type="button" value="Calcola" onClick="CalcolaCodiceFiscale()">
(Sono esclusi dal calcolo i nati all'estero e gli omonimi)
</td>
</tr>

<tr>
<td width="100%" colspan="2" onMouseOver="this.className='pratica-over-sub'" onMouseOut="this.className='null'">
I dati immessi possono essere utilizzati per aggiungere una nuova anagrafica.
</td>
</tr>
</form>
<tr>
<td width="100%" colspan="2" onMouseOver="this.className='pratica-over-sub'" onMouseOut="this.className='null'">
<input  id="PulsAddCont" class="bot-submit" value="Nuova anagrafica" name="test1" onClick="javascript:AddeContattoDaCF()" type="button" > 

</td>
</tr>

</table>
</div>

<iFRAME style="display: none" NAME="comuni" SRC="810arrayComuni.html" MARGINWIDTH="0" MARGINHEIGHT="0" SCROLLING="no" FRAMEBORDER="0" VSPACE="0"></iframe>
	<p align="center">
		 
		<input  class="bot-submit" value="Scorporo IVA" name="test1" onclick=parent.parent.location.href="../../../plus/calcolatrici/pages/calcolatrici.php?TipoUtCal=2" type="button"> | 
		<input  class="bot-submit" value="Interessi" name="test1" onclick=parent.parent.location.href="../../../plus/calcolatrici/pages/calcolatrici.php?TipoUtCal=4" type="button"> | 
		<input  class="bot-submit" value="Interessi legali" name="test1" onclick=parent.parent.location.href="../../../plus/calcolatrici/pages/calcolatrici.php?TipoUtCal=5" type="button"> | 
		<input  class="bot-submit" value="Interessi moratori" name="test1" onclick=parent.parent.location.href="../../../plus/calcolatrici/pages/calcolatrici.php?TipoUtCal=6" type="button">  
	</p>
	<p align="center">
		<input  class="bot-submit" value="Patteggiamento" name="test1" onclick=parent.parent.location.href="../../../plus/calcolatrici/pages/calcolatrici.php?TipoUtCal=1" type="button"> | 
		<input  class="bot-submit" value="Termini Impugnazioni penali" name="test1" onclick=parent.parent.location.href="../../../plus/calcolatrici/pages/calcolatrici.php?TipoUtCal=7&modalita=CalcImPen" type="button"> | 
 		<input  class="bot-submit" value="Termini processuali" name="test1" onclick=parent.parent.location.href="../../../plus/calcolatrici/pages/calcolatrici.php?TipoUtCal=8" type="button"> |
		<input  class="bot-submit" value="Codice fiscale" name="test1" onclick=parent.parent.location.href="../../../plus/calcolatrici/pages/calcolatrici.php?TipoUtCal=3" type="button">   
	</p>

</body>
</html>


