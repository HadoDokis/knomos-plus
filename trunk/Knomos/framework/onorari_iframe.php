<? 
include ("framework.php");

// Define page specific text for template
$PAGE[TXT_TITLE]="Test title";

template_init();

$_GET[tipo] = strtolower($_GET[tipo]);
if (!in_array($_GET[tipo],array('p','c','t'))) $_GET[tipo] = p;
$tipo = $_GET[tipo];

if ($tipo == 'p') {
	$p_field = 'ono_prat';
	$p_header = 'Pratica';
} elseif ($tipo == 'c') {
	$p_field = 'ono_cli';
	$p_header = 'Cliente';
} elseif ($tipo == 't') {
	$p_field = 'ono_tipo';
	$p_header = 'Tipo pratica';
}

?>

<!-- <!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"> -->
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<script>

/////////////////////
function getonor() {

f = document.forms[0];

var str = "";

//alert(f.permessi.value);

for (i = 0; i < f.elements.length; i++) { 

  el = f.elements[i];

  if (el.name.match(/^.+-<?=$tipo?>$/)) {
     res = el.name.match(/^(.+)-<?=$tipo?>$/);

     base = res[1];
     values = el.value.replace(/,/,'.');
     if (values == "") values = 0;
     fl = parseFloat(values);

     if (!isNaN(fl) && fl > 0) {
     	str = base + "=" + fl;
     	rex = new RegExp(base+'=[0-9.,]+');

     	if (f.on.value.match(rex)) {
	  f.on.value = f.on.value.replace(rex,str);
     	} else {
	  f.on.value += '|'+str ;
     	}
     }
  }
}

f.on.value = f.on.value.replace(/,/,'.');
f.on.value = f.on.value.replace(/\|+/,'|');
f.on.value = f.on.value.replace(/\|+$/,'');
f.on.value = f.on.value.replace(/^\|+/,'');

//alert(f.on.value);
window.parent.document.<?=$_GET['formname'] ?>.<?=$p_field?>.value = f.on.value;
window.parent.closeLayerWindow();
}

function calc_onor() {
  str = getonor();
  window.parent.document.<?=$_GET['formname'] ?>.<?=$p_field?>.value = str;
  document.onor.on.value = str;
}

function get_onor_from_parent() {

  f = document.forms[0];
  f.on.value = window.parent.document.<?=$_GET['formname'] ?>.<?=$p_field?>.value;

  //alert('valore del parent: ' + f.on.value);

  for (i = 0; i < f.elements.length; i++) {
    el = f.elements[i];
    if (el.name.match(/^.+-<?=$tipo?>$/)) {
      elname = el.name.replace(/-.*$/,'');
      elexp = new RegExp(elname+"=([0-9,.]+)");
	if (res = f.on.value.match(elexp)) f.elements[i].value = res[1];
    }
  }
}


</script>

<?
$dirc=opendir($CONF[path_base].$CONF[dir_template].$CUR_TEMPLATE[name]."/css/");
while (($file = readdir($dirc)) !== false) {
  if ($file != "." && $file != "..") {
  	print '<link href="'.$CONF[abs_url].$CONF[dir_template].$CUR_TEMPLATE[name].'/css/'.$file.'" rel="stylesheet" type="text/css">';
  } 
}	
unset ($file);


?>
<title></title>
</head>

<body class="per-iframe-body" onLoad="get_onor_from_parent();">
<form action="<?=$_SERVER["REQUEST_URI"]?>" method="post" name="onor" style="display: inline">
  <input type="hidden" name="on" value="">
  <input type="hidden" name="id" value="<?=$_REQUEST['id'] ?>">

  <table width="100%"  border="0" cellpadding="2" cellspacing="1" class="per-table">

    <tr class="per-riga-01">
      <td colspan="5">
	<input type="text" name="search" size="20" value="<?=htmlspecialchars($search) ?>"> 
	<input type="button" value="Cerca"  class="bot-submit" onClick="this.form.submit();">
	</td>
    </tr>

    <tr>
      <td class="per-tit" width="50%"><?=$p_header ?></td>
      <td class="per-tit" width="50%">Onorario orario</td>
    </tr>
<?

$where = $search ? 'name LIKE \'%'.mysql_escape_string($search).'%\''
		 : 'id < 0';


if ($tipo == 'p') {
	$where = $search ? 'pr_codice LIKE \'%'.mysql_escape_string($search).'%\''
			 : 'id < 0';
	$p_tab = 'pratiche';
	$p_id = 'id';
	$p_ord = 'pr_codice';
	$p_desc = 'pr_oggetto';
} elseif ($tipo == 'c') {
        $where = $search ? 'codice LIKE \'%'.mysql_escape_string($search).'%\' OR nome LIKE \'%'.mysql_escape_string($search).'%\''
                         : 'id < 0';
	$p_tab = 'contact';
	$p_id = 'id';
	$p_ord = 'codice';
	$p_desc = 'nome';
} elseif ($tipo == 't') {
        $where = $search ? 'codice LIKE \'%'.mysql_escape_string($search).'%\''
                         : '1 = 1';
	$p_tab = 'INT_pratiche_tipo';
	$p_id = 'codice';
	$p_ord = 'codice';
	$p_desc = 'ttp_desc';
}

$rs=$DB->Execute("	SELECT * 
			FROM $p_tab
			WHERE $where 
			ORDER BY $p_ord asc");

if (!$rs->RecordCount()) print '<tr class="per-riga-01"><td colspan=5 align="center"><br><b>Nessun risultato</b><br><br></td></tr>';

while (!$rs->EOF) {
$row=$rs->FetchRow();

if (isset($_REQUEST[id])) {$id=$_REQUEST[id];} else $id="";
if (isset($_POST[on])) {$newon=$_POST[on];} else $newon="";

$result=check_perm_group($row[id],$_GET[module],$id,$newon);

//print_r($result);
?>
	
    <tr class="per-riga-01" onMouseOver="this.className='per-riga-focus-a'" onMouseOut="this.className='per-riga-01'">
      <td><?=$row[$p_ord].' - <i>'.$row[$p_desc].'</i>' ?></td>
      <td>
	<input type="text" size="10" name="<?=$row[$p_id].'-'.$tipo ?>" class=""  onFocus="this.className='campo-focus-02'" onBlur="this.className='null'"> &euro;
      </td>
    </tr>
<?
}
?>

</table>

  <p align="center">
    <input type="button" class="bot-submit" value="Applica" onClick="getonor(); this.form.submit(); ">
  </p>
<br>
</form>

</body>
</html>
