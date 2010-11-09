<? 
include("../../../config/config.php"); 
include("../../../config/config_plus.php"); 
//include("../../../framework/framework.php");
//global $DB;
$storico=$CONF[storico_impegni];

//$rs=$DB->Execute("SELECT * FROM calendar WHERE id=".$_GET[id]);
//$result=$rs->FetchRow();
//$id_prat=$result[ref_prat];
//echo $id_prat;
?>


<head>
<title>Gestione udienza o rinvio</title>
<meta content="">
<style></style>

<link href="/template/skin_sutti/css/stili_sutti_main.css" rel="stylesheet" type="text/css">
</head>
<body>


<div class="rinvio" name="DivRinvio">
<table  width="100%"  border="0" cellspacing="1" name="TableRinvio" >
<form  method="post" name="FormRinvio" >

<tr>
<td width="100%" colspan="2" onMouseOver="this.className='rinvio-over-sub'" onMouseOut="this.className='null'">
<strong>
Relazione:
</strong>
</td>
</tr>

<tr>
<td width="100%" colspan="2" onMouseOver="this.className='rinvio-over-sub'" onMouseOut="this.className='null'">
<textarea  name="txRelUd"   cols="79" value=""  type="text" class=""  onFocus="this.className='campo-focus-02'" onBlur="this.className='null'">
</textarea>
</td>
</tr>

<tr>
<td width="100%" colspan="2" onMouseOver="this.className='rinvio-over-sub'" onMouseOut="this.className='null'">
<input name="ChkUU" id="UU"   onclick="javascript:ApriChiudiUltimaUdienza()" type="checkbox" > <strong>Ultima udienza </strong>

</td>
</tr>

	<tr>
	<td id="DR1" style="display:inline" width="100%" colspan="2" onMouseOver="this.className='rinvio-over-sub'" onMouseOut="this.className='null'">
	<strong>
	Udienza di rinvio:
	</strong>
	</td>
	</tr>

	<tr >
	<td id="DR2" width="100%" colspan="2" onMouseOver="this.className='rinvio-over-sub'" onMouseOut="this.className='null'">
	Data:
	 	      <select  name="MyDay" Id="Mday" size="1" class=""  onFocus="this.className='campo-focus-02'" onBlur="this.className='null'">
		      <option selected="selected" value="01">01</option>
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

		      <select  name="MyMonth" size="1" class=""  onFocus="this.className='campo-focus-02'" onBlur="this.className='null'">
		      <option selected="selected" value="01">01</option>
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
		      </select>

		      <select  name="MyYear" size="1" class=""  onFocus="this.className='campo-focus-02'" onBlur="this.className='null'">
		      <option selected="selected" value="2010">2010</option>
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
	Orario:
		      <select  name="MyOra" size="1" class=""  onFocus="this.className='campo-focus-02'" onBlur="this.className='null'">
		      <option value="08">08</option>
		      <option selected="selected" value="09">09</option>
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
		      </select>	
	
		: <input  name="txMin" size="2" maxlength="2" value="00" type="text" class=""  onFocus="this.className='campo-focus-02'" onBlur="this.className='null'"> 

	</td>
	</tr>

	<tr>
	<td  id="DR3" width="100%" colspan="2" onMouseOver="this.className='rinvio-over-sub'" onMouseOut="this.className='null'">
	Per: 
	<input  name="txPer" size="35" value="" type="text" class=""  onFocus="this.className='campo-focus-02'" onBlur="this.className='null'">

	</td>
	</tr>

	<tr>
	<td id="DR4" width="100%" colspan="2" onMouseOver="this.className='rinvio-over-sub'" onMouseOut="this.className='null'">
	Istruzioni:<br>
	<textarea name="txIstruz" cols="79" value=""  type="text" class=""  onFocus="this.className='campo-focus-02'" onBlur="this.className='null'"></textarea>

	</td>
	</tr>

	<tr >
	<td width="100%" colspan="2" onMouseOver="this.className='rinvio-over-sub'" onMouseOut="this.className='null'">
<input  class="bot-submit" value="Aggiorna" name="PulsRinvio" onclick="javascript:Rinvia(<? echo $storico ?>)" type="button"> 

<input	type="checkbox"	name="convPrest" id="cPrest" value="1" checked="true" class=""  onFocus="this.className='campo-focus-02'" onBlur="this.className='null'" > Converte in prestazione dopo l'aggiornamento

	</td>
	</tr>
</form>	
</table>


</div>




