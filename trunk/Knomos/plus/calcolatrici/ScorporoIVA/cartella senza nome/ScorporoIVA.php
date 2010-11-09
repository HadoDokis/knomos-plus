<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>

 <head>
<link href="/template/skin_sutti/css/stili_sutti_main.css" rel="stylesheet" type="text/css">
<script language="JavaScript" type="text/javascript"></script>
</head>

<body>
<div class="rinvio"  name="DivCalcTerminiProcessuali">
<table width="100%"  border="0" cellspacing="1" name="TableScIVA">
  <tr  name="DivTitolo" id="IT">
  <th colspan="2" width="100%" align="left"><span class="rinvio-tit">
  Scorporo IVA</span>
  </th>
  </tr>


	<tr >
	<td width="50%" onMouseOver="this.className='pratica-over-sub'" onMouseOut="this.className='null'" >
<span class="rinvio-resalt-01">
Importo da scorporare: </span> 
	</td>
	<td width="50%" onMouseOver="this.className='pratica-over-sub'" onMouseOut="this.className='null'">
<input  type="text" id="importo" size="12" value="" onFocus="this.className='campo-focus-02'" onBlur="this.className='null'"> (Per le cifre decimali usare il punto)


	</td>
	</tr>


	<tr >
	<td width="50%" onMouseOver="this.className='pratica-over-sub'" onMouseOut="this.className='null'" >
Comprensivo di spese non imponibili ex art. 15 per Euro:

	</td>
	<td width="50%" onMouseOver="this.className='pratica-over-sub'" onMouseOut="this.className='null'">
<input type="text" id="anticip" size="12" value="0" onFocus="this.className='campo-focus-02'" onBlur="this.className='null'">  (Per le cifre decimali usare il punto)


	</td>
	</tr>



<tr>
<td width="100%" colspan="2" onMouseOver="this.className='pratica-over-sub'" onMouseOut="this.className='null'">
<input id="ChkSG" type="checkbox"  value="1.125" checked=true  > Scorpora le spese generali
<input id="ChkRA" type="checkbox"  value="1.20" checked=true  > Ritenuta d'acconto
<input name "CP" id="ChkCPA2" type="radio"   value="1.02" > Cpa 2%
<input name "CP" id="ChkCPA4" type="radio"  value="1.04" checked  > Cpa 4%
</td>
</tr>

<tr>
<td width="100%" colspan="2" onMouseOver="this.className='pratica-over-sub'" onMouseOut="this.className='null'">
<input class="bot-submit" type="button" id="PulsScorp" value="Scorpora" onclick="javascript:Calcola()"> 
<input class="bot-submit" type="button"  id="PulsReset" value="Cancella" onclick="javascript:Reset()"> 
</td>
</tr>

<tr>
<td width="100%" colspan="2" onMouseOver="this.className='pratica-over-sub'" onMouseOut="this.className='null'">
<span class="pratica-resalt-01">
Risultati:
</span>
</td>
</tr>
	<tr >
	<td width="30%" onMouseOver="this.className='pratica-over-sub'" onMouseOut="this.className='null'" >
Totale notula:
	</td>
	<td width="70%" onMouseOver="this.className='pratica-over-sub'" onMouseOut="this.className='null'">
<input type="text" id="Txtotnot" size="12" value="0" readonly="readonly"> 	</td>
	</tr>
	<tr >
	<td width="30%" onMouseOver="this.className='pratica-over-sub'" onMouseOut="this.className='null'" >
Spese generali
	</td>
	<td width="70%" onMouseOver="this.className='pratica-over-sub'" onMouseOut="this.className='null'">
<input type="text" id="Txsg" size="12" value="0" readonly="readonly">	</td>
	</tr>

	</td>
	</tr>

	<tr >
	<td width="30%" onMouseOver="this.className='pratica-over-sub'" onMouseOut="this.className='null'" >
Imponibile CPA:
	</td>
	<td width="70%" onMouseOver="this.className='pratica-over-sub'" onMouseOut="this.className='null'">
<input type="text" id="Tximpcpa" size="12" value="0" readonly="readonly"> 
	</td>
	</tr>

	<tr >
	<td width="30%" onMouseOver="this.className='pratica-over-sub'" onMouseOut="this.className='null'" >
CPA:
	</td>
	<td width="70%" onMouseOver="this.className='pratica-over-sub'" onMouseOut="this.className='null'">
 <input type="text" id="Txcpa" size="12" value="0" readonly="readonly">
	</td>
	</tr>

	<tr >
	<td width="30%" onMouseOver="this.className='pratica-over-sub'" onMouseOut="this.className='null'" >
Imponibile IVA:
	</td>
	<td width="70%" onMouseOver="this.className='pratica-over-sub'" onMouseOut="this.className='null'">
<input type="text" id="Tximpiva" size="12" value="0" readonly="readonly">
	</td>
	</tr>

	<tr >
	<td width="30%" onMouseOver="this.className='pratica-over-sub'" onMouseOut="this.className='null'" >
IVA:
	</td>
	<td width="70%" onMouseOver="this.className='pratica-over-sub'" onMouseOut="this.className='null'">
<input type="text" id="Txiva" size="12" value="0" readonly="readonly">
	</td>
	</tr>

	<tr >
	<td width="30%" onMouseOver="this.className='pratica-over-sub'" onMouseOut="this.className='null'" >
Ritenuta acconto (da detrarre):
	</td>
	<td width="70%" onMouseOver="this.className='pratica-over-sub'" onMouseOut="this.className='null'">
<input type="text" id="Txra" size="12" value="0" readonly="readonly">
	</td>
	</tr>



	<td width="30%" onMouseOver="this.className='pratica-over-sub'" onMouseOut="this.className='null'" >
<span class="pratica-resalt-01">
Ricalcolo: </span> (eventuali differenze rispetto alla cifra immessa possono dipendere dagli arrotondamenti dei calcoli)
	</td>
	<td width="70%" onMouseOver="this.className='pratica-over-sub'" onMouseOut="this.className='null'">
<input type="text" id="Txtotali" size="12" value="0" readonly="readonly">
	</td>
	</tr>


</table>
</div>
	<p align="center">
		 
		<input  class="bot-submit" value="Scorporo IVA" name="test1" onclick=parent.location.href="/plus/calcolatrici/pages/calcolatrici.php?TipoUtCal=2" type="button"> | 
		<input  class="bot-submit" value="Interessi" name="test1" onclick=parent.location.href="/plus/calcolatrici/pages/calcolatrici.php?TipoUtCal=4" type="button"> | 
		<input  class="bot-submit" value="Interessi legali" name="test1" onclick=parent.location.href="/plus/calcolatrici/pages/calcolatrici.php?TipoUtCal=5" type="button"> | 
		<input  class="bot-submit" value="Interessi moratori" name="test1" onclick=parent.location.href="/plus/calcolatrici/pages/calcolatrici.php?TipoUtCal=6" type="button">  
	</p>
	<p align="center">
		<input  class="bot-submit" value="Termini Impugnazioni penali" name="test1" onclick=parent.location.href="/plus/calcolatrici/pages/calcolatrici.php?TipoUtCal=7&modalita=CalcImPen" type="button"> | 
 		<input  class="bot-submit" value="Termini processuali" name="test1" onclick=parent.location.href="/plus/calcolatrici/pages/calcolatrici.php?TipoUtCal=8" type="button"> |
		<input  class="bot-submit" value="Codice fiscale" name="test1" onclick=parent.location.href="/plus/calcolatrici/pages/calcolatrici.php?TipoUtCal=3" type="button">   
	</p>

</body>

</html>





