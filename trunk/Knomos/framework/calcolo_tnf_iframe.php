<?
include ("framework.php");
require('../modules/prestazioni/functions.php');

// Define page specific text for template
$PAGE[TXT_TITLE]="Test title";

template_init();
//print_r($_POST);
?>

<!-- <!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"> -->
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">

<?
$dirc=opendir($CONF[path_base].$CONF[dir_template].$CUR_TEMPLATE[name]."/css/");
while (($file = readdir($dirc)) !== false) {
  if ($file != "." && $file != "..") {
  	print '<link href="'.$CONF[abs_url].$CONF[dir_template].$CUR_TEMPLATE[name].'/css/'.$file.'" rel="stylesheet" type="text/css">';
  } 
}	
unset ($file);
?>

<script language="javascript">

/////////////////////////////
function formatDecimal(mnt) { 
  
  mnt = mnt.toString().replace(/,/,'.');
  mnt -= 0; 
  mnt = (Math.round(mnt*100))/100; 
  val = (mnt == Math.floor(mnt)) ? mnt + '.00' : ( (mnt*10 == Math.floor(mnt*10)) ? mnt + '0' : mnt); 
  ret = val.toString();
  return ret.replace(/\./,',');
} 

//////////////////////
function resizeit() {

if (document.all) {
  f = window.parent.document.getElementById('tnf_iframe');
  f.style.height = f.contentWindow.document.body.scrollHeight + 20;
} else {
  myHeight = window.parent.document.getElementById('tnf_iframe').contentDocument.body.scrollHeight;
  window.parent.document.getElementById('tnf_iframe').height = myHeight + 20;
}

}

//////////////////////////
function update_fields() {
  
  f = document.form_iframe;
  wf = window.parent.document.new_prest;

  cod = wf.elements['codice[text]'];
  ope = wf.elements['operatore[text]'];

  f.codice.value = cod.value;
  f.operatore.value = ope.value;
  f.data.value = wf.elements['dt_data'].value;
  f.valore_pratica.value = wf.valore_pratica.value;
  f.tipo_pratica.value = wf.tipo_pratica.value;

  //on utente va sempre ricaricato
  f.on_utente.value = formatDecimal(wf.on_utente.value.replace(/\,/,'.'));
  f.acconti.value = formatDecimal(wf.acconti.value.replace(/\,/,'.'));
  f.anticipazioni.value = formatDecimal(wf.anticipazioni.value.replace(/\,/,'.'));

<? if ($_POST['set_default'] != 1) { ?>
  // 4 campi principali
  if (wf.criterio) { f.criterio.value = wf.criterio.value; } else f.criterio.value = 'MED.5';
  f.tempo.value = wf.tempo.value;
  f.unita_misura.value = wf.unita_misura.value;
  f.quantita.value = wf.quantita.value;

  // campi valore
  f.spese_imponibili.value = formatDecimal(wf.spese_imponibili.value.replace(/\,/,'.'));
  f.spese_non_imponibili.value = formatDecimal(wf.spese_non_imponibili.value.replace(/\,/,'.'));
  f.diritti.value = formatDecimal(wf.diritti.value.replace(/\,/,'.'));
  f.onorari.value = formatDecimal(wf.onorari.value.replace(/\,/,'.'));
  f.on_onorari.value = formatDecimal(wf.on_onorari.value.replace(/\,/,'.'));
  //f.on_utente.value = formatDecimal(wf.on_utente.value.replace(/\,/,'.'));
  f.acconti.value = formatDecimal(wf.acconti.value.replace(/\,/,'.'));
  f.anticipazioni.value = formatDecimal(wf.anticipazioni.value.replace(/\,/,'.'));
<? } ?>

}

////////////////////////
function copy_values() {
//Aggiunto in K.Plus
document.form_iframe.on_utente.value = document.form_iframe.onorari.value;
//FINE Aggiunto in K.Plus

  f = document.form_iframe;
  wf = window.parent.document.new_prest;

  // 4 campi principali
  wf.criterio.value = f.criterio.value;
  wf.tempo.value = f.tempo.value;
  wf.unita_misura.value = f.unita_misura.value;
  wf.quantita.value = f.quantita.value;

  // campi valore
 // f.spese_imponibili.value = f.spese_imponibili.value.replace(/\./,',');
//  f.spese_non_imponibili.value = f.spese_non_imponibili.value.replace(/\./,',');
//  f.diritti.value = f.diritti.value.replace(/\./,',');
 // f.onorari.value = f.onorari.value.replace(/\./,',');
  //f.on_onorari.value = f.on_onorari.value.replace(/\./,',');
  //f.on_utente.value = f.on_utente.value.replace(/\./,',');

  wf.spese_imponibili.value = f.spese_imponibili.value;
  wf.spese_non_imponibili.value = f.spese_non_imponibili.value;
  wf.diritti.value = f.diritti.value;
  wf.onorari.value = f.onorari.value;
  wf.on_onorari.value = f.on_onorari.value;
  wf.on_utente.value = f.on_utente.value;
  wf.acconti.value = f.acconti.value;
  wf.anticipazioni.value = f.anticipazioni.value;

//Aggiunto in K.Plus
	//CONTRIBUTO UNIFICATO
	var allParams = new Array();
	//Recupero la URL visualizzata
	var url = unescape( String(parent.location) );
	//alert(url)
	var paramList = url.split("?")[1];
	var params = paramList.split("&");
	for(var i=0; i<params.length; i++)
	{
	var temp = params[i].split("=");
	allParams[temp[0]] = temp[1];
	}
	var contrib = allParams['contr_unif'];
	if (cod.value=="XUNIF"){f.spese_non_imponibili.value = contrib;}
	//FINE CONTRIBUTO UNIFICATO
//FINE Aggiunto in K.Plus

  calc_totals();

}

////////////////////////
function calc_totals() {

  f = document.form_iframe;

<? 
if (is_numeric($_GET['rid']) || is_numeric($_POST['rid'])) {

	$rid = is_numeric($_POST['rid']) ? $_POST['rid'] : $_GET['rid'];
	$id = is_numeric($_POST['id']) ? $_POST['id'] : $_GET['id'];

	$q = mysql_query("SELECT SUM(spese_imponibili) as imp,
				 SUM(spese_non_imponibili) as nonimp,
				 SUM(diritti) as dir,
				 SUM(onorari) as onorari,
				 SUM(on_onorari) as on_onorari,
				 SUM(on_utente) as on_utente,
				 SUM(acconti) as acc,
				 SUM(anticipazioni) as ant 
				 FROM prestazioni
				 WHERE id <> '".mysql_escape_string($id)."' 
				 AND ref_id='".mysql_escape_string($rid)."'");

	$empty = array(imp => 0.00, nonimp => 0.00, dir => 0.00, onorari => 0.00, on_onorari => 0.00, on_utente => 0.00, acc => 0.00, ant => 0.00);
	if (mysql_num_rows($q)) $l = mysql_fetch_assoc($q);
	if (!is_numeric($l[imp])) $l = $empty;


	print 	"  base_imp = $l[imp];\n".
		"  base_nonimp = $l[nonimp];\n".
		"  base_dir = $l[dir];\n".
		"  base_onorari = $l[onorari];\n".
		"  base_on_onorari = $l[on_onorari];\n".
		"  base_on_utente = $l[on_utente];\n".
                "  base_acc = $l[acc];\n".
                "  base_ant = $l[ant];\n".
		"\n".
		"  val_imp = parseFloat(f.spese_imponibili.value.replace(/,/,'.'));\n".
		"  if (isNaN(val_imp)) val_imp = 0.00;\n".
		"  val_nonimp = parseFloat(f.spese_non_imponibili.value.replace(/,/,'.'));\n".
                "  if (isNaN(val_nonimp)) val_nonimp = 0.00;\n".
                "  val_diritti = parseFloat(f.diritti.value.replace(/,/,'.'));\n".
                "  if (isNaN(val_diritti)) val_diritti = 0.00;\n".
                "  val_onorari = parseFloat(f.onorari.value.replace(/,/,'.'));\n".
                "  if (isNaN(val_onorari)) val_onorari = 0.00;\n".
                "  val_on_onorari = parseFloat(f.on_onorari.value.replace(/,/,'.'));\n".
                "  if (isNaN(val_on_onorari)) val_on_onorari = 0.00;\n".
                "  val_on_utente = parseFloat(f.on_utente.value.replace(/,/,'.'));\n".
                "  if (isNaN(val_on_utente)) val_on_utente = 0.00;\n".
                "  val_acc = parseFloat(f.acconti.value.replace(/,/,'.'));\n".
                "  if (isNaN(val_acc)) val_acc = 0.00;\n".
                "  val_ant = parseFloat(f.anticipazioni.value.replace(/,/,'.'));\n".
                "  if (isNaN(val_ant)) val_ant = 0.00;\n".
		"\n".
		"  document.getElementById('tot_imp').innerHTML = formatDecimal(base_imp + val_imp);\n".
		"  document.getElementById('tot_nonimp').innerHTML = formatDecimal(base_nonimp + val_nonimp);\n".
		"  document.getElementById('tot_dir').innerHTML = formatDecimal(base_dir + val_diritti);\n".
		"  document.getElementById('tot_onorari').innerHTML = formatDecimal(base_onorari + val_onorari);\n".
		"  document.getElementById('tot_on_onorari').innerHTML = formatDecimal(base_on_onorari + val_on_onorari);\n".
		"  document.getElementById('tot_on_utente').innerHTML = formatDecimal(base_on_utente + val_on_utente);\n".
                "  document.getElementById('tot_acc').innerHTML = formatDecimal(base_acc + val_acc);\n".
                "  document.getElementById('tot_ant').innerHTML = formatDecimal(base_ant + val_ant);\n";

}
?>

}

/////////////////////////
function get_defaults() {

f = document.form_iframe;
wf = window.parent.document.new_prest;

<?
if ($_POST['set_default'] == 1) {

$res = calcola( $_POST['codice'],
                $_POST['valore_pratica'],
                $_POST['criterio'],
                $_POST['operatore'],
		'',
                $_POST['data'],
                $_POST['quantita'],
                $_POST['unita_misura'],
                $_POST['tempo'],
                $_POST['tipo_pratica'],
		$_POST['rid']);

print"
f.spese_imponibili.value = formatDecimal(".sprintf('%.2f',$res['imp']).");
f.spese_non_imponibili.value = formatDecimal(".sprintf('%.2f',$res['nonimp']).");
f.diritti.value = formatDecimal(".sprintf('%.2f',$res['dir']).");
f.onorari.value = formatDecimal(".sprintf('%.2f',$res['on']).");
f.on_onorari.value = formatDecimal(".sprintf('%.2f',$res['onor']).");
//f.on_utente.value = formatDecimal(".sprintf('%.2f',$res['onut']).");
document.getElementById('min_div').innerHTML = formatDecimal(".sprintf('%.2f',$res['on_min']).");
document.getElementById('max_div').innerHTML = formatDecimal(".sprintf('%.2f',$res['on_max']).");
copy_values();
";
}

?>

}

</script>

</head>

<body class="tnf-iframe-body" onLoad="update_fields(); get_defaults(); calc_totals(); resizeit();">
<form action="calcolo_tnf_iframe.php" method="post" name="form_iframe" onSubmit="return false;">
<input type="hidden" name="set_default" value="1">

<input type="hidden" name="rid" value="<?=($_POST['rid'] ? $_POST['rid'] : $_GET['rid']); ?>">
<input type="hidden" name="id" value="<?=($_POST['id'] ? $_POST['id'] : $_GET['id']); ?>">

<input type="hidden" name="codice" value="">
<input type="hidden" name="operatore" value="">
<input type="hidden" name="data" value="">
<input type="hidden" name="valore_pratica" value="">
<input type="hidden" name="tipo_pratica" value="">

  <table width="100%"  border="0" cellspacing="1" class="tnf-table">
    <tr>
      <th width="14%"><?=PRESTAZIONI_QUANT?>:      </th>
      <th width="35%"><input name="quantita" onChange="copy_values();" value="<?=$_POST['quantita'] ?>" type="text" onFocus="this.className='campo-focus-02'" onBlur="this.className='null'" size="15"></th>
      <td width="1%" class="tnf-sep">&nbsp;</td>
      <th width="15%"><?=PRESTAZIONI_TIME?>:      </th>
      <th width="35%"><input name="tempo" onChange="copy_values();" value="<?=$_POST['tempo'] ?>" type="text" onFocus="this.className='campo-focus-02'" onBlur="this.className='null'" size="15"></th>
    </tr>
    <tr>
      <th width="14%"><?=PRESTAZIONI_UNMIS?>:      </th>
      <th width="35%"><input name="unita_misura" onChange="copy_values();" value="<?=$_POST['unita_misura'] ?>" type="text" onFocus="this.className='campo-focus-02'" onBlur="this.className='null'" size="15"></th>
      <td width="1%" class="tnf-sep">&nbsp;</td>
      <th width="15%"><?=PRESTAZIONI_CRIT?>:      </th>
      <th width="35%"><input name="criterio" onChange="copy_values();" value="<?=$_POST['criterio'] ?>" type="text" onFocus="this.className='campo-focus-02'" onBlur="this.className='null'" size="15"></th>
    </tr>
    <tr>
      <td width="14%"><?=PRESTAZIONI_COST_IMP?>:      </td>
      <td width="35%"><input name="spese_imponibili" onChange="copy_values();" type="text" onFocus="this.className='campo-focus-02'" onBlur="this.className='null'" size="15">
        <span class="tnf-total">(<div style="display: inline;" id="tot_imp">---------</div>) </span></td>
      <td width="1%" class="tnf-sep">&nbsp;</td>
      <td width="15%"><?=PRESTAZIONI_COST_ONOR?>:      </td>
      <td width="35%"><input name="onorari" type="text" onChange="copy_values();" onFocus="this.className='campo-focus-02'" onBlur="this.className='null'" size="15">
        <span class="tnf-total">(<div style="display: inline;" id="tot_onorari">---------</div>) </span>
	&nbsp; <img src="/template/skin_sutti/images/ico/ico_tras_campo_peq.gif" border=0 onclick="document.form_iframe.on_utente.value = document.form_iframe.onorari.value; calc_totals(); copy_values();"></td>
    </tr>
    <tr>
      <td width="14%"><?=PRESTAZIONI_COST_NIMP?>:      </td>
      <td width="35%"><input name="spese_non_imponibili" onChange="copy_values();" type="text" onFocus="this.className='campo-focus-02'" onBlur="this.className='null'" size="15">
        <span class="tnf-total">(<div style="display: inline;" id="tot_nonimp">---------</div>) </span></td>
      <td width="1%" class="tnf-sep">&nbsp;</td>
      <td width="15%"><?=PRESTAZIONI_COST_ONORAR?>:</td>
      <td width="35%">
        <input name="on_onorari" type="text" onChange="copy_values();" onFocus="this.className='campo-focus-02'" onBlur="this.className='null'" size="15">
        <span class="tnf-total">(<div style="display: inline;" id="tot_on_onorari">---------</div>) </span>
	&nbsp; <img src="/template/skin_sutti/images/ico/ico_tras_campo_peq.gif" border=0 onclick="document.form_iframe.on_utente.value = document.form_iframe.on_onorari.value; calc_totals(); copy_values();"></td>
    </tr>
    <tr>
      <td width="14%"><?=PRESTAZIONI_COST_RIGHTS?>:      </td>
      <td width="35%"><input name="diritti" type="text" onChange="copy_values();" onFocus="this.className='campo-focus-02'" onBlur="this.className='null'" size="15">
        <span class="tnf-total">(<div style="display: inline;" id="tot_dir">---------</div>) </span></td>
      <td width="1%" class="tnf-sep">&nbsp;</td>
      <td width="15%"><?=PRESTAZIONI_COST_ONUT?>:      </td>
      <td width="35%"><input name="on_utente" type="text" onChange="copy_values();" onFocus="this.className='campo-focus-02'" onBlur="this.className='null'" size="15">
        <span class="tnf-total">(<div style="display: inline;" id="tot_on_utente">---------</div>) </span></td>
    </tr>

<? if ($_POST['set_default'] == 1) { ?>
    <tr>
      <td colspan="2" width="49%">&nbsp;</td>
      <td width="1%" class="tnf-sep">&nbsp;</td>
      <td width="15%"><strong>Min: <span class="tnf-total"><div id="min_div" style="display: inline;"></div></span></strong></td>
      <td width="35%"><strong>Max: <span class="tnf-total"><div id="max_div" style="display: inline;"></div></span></strong></td>
    </tr>
<? } ?>
		<tr >
		<td colspan=5 class="form-riga-sep"> </td>
		</tr>
    <tr>
      <td width="14%" bgcolor="#F9EDCC"><?=PRESTAZIONI_ACCONT?>:      </td>
      <td width="35%" bgcolor="#F9EDCC"><input name="acconti" type="text" onChange="copy_values();" onFocus="this.className='campo-focus-02'" onBlur="this.className='null'" size="15">
        <span class="tnf-total">(<div style="display: inline;" id="tot_acc">---------</div>) </span></td>
      <td width="1%" class="tnf-sep">&nbsp;</td>
      <td width="15%" bgcolor="#F9EDCC"><?=PRESTAZIONI_ANTIC?>:      </td>
      <td width="35%" bgcolor="#F9EDCC"><input name="anticipazioni" type="text" onChange="copy_values();" onFocus="this.className='campo-focus-02'" onBlur="this.className='null'" size="15">
        <span class="tnf-total">(<div style="display: inline;" id="tot_ant">---------</div>) </span></td>
    </tr>

  </table><!--
  <p align="center">
    <input name="Submit322" type="button" class="bot-submit" value="Imposta default" onClick="update_fields(); this.form.submit();">
  </p>
-->
</form>

<? 
//print_r($res);
//print_r($_POST); 
?>
</body>
</html>


