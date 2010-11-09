<? 
include ("framework.php");

// Define page specific text for template
$PAGE[TXT_TITLE]="Test title";

$DEF_TYPE = array('','','','L','M','C','P');

template_init();

$is_pratica = ($_REQUEST['module'] == 'pratiche') ? true : false;
?>

<!-- <!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"> -->
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<script>

/////////////////////
function getperms() {

f = document.forms[0];

var str = "";

//alert(f.permessi.value);

for (i = 0; i < f.elements.length; i++) { 

  el = f.elements[i];

  if (el.name.match(/^(U|G)[0-9]+-<?=($is_pratica ? 'pra' : 'con') ?>$/)) {
     res = el.name.match(/^((U|G)[0-9]+)-<?=($is_pratica ? 'pra' : 'con') ?>$/);
     base = res[1];
<? if ($is_pratica) { ?>
     values = f.elements[i].value + f.elements[i+1].value + f.elements[i+2].value + f.elements[i+3].value;
     str = (values != "0000") ? base + "=" + values : "";
<? } else { ?>
     values = f.elements[i].value;
     str = (values != "0") ? base + "=" + values : "";
<? } ?>
     rex = new RegExp(base+'=[0-9]+');

     if (f.permessi.value.match(rex)) {
	f.permessi.value = f.permessi.value.replace(rex,str);
     } else {
	f.permessi.value += str ? '|'+str : '';
     }

     i += <?=($is_pratica ? '3' : '0') ?>;
  }
}

f.permessi.value = f.permessi.value.replace(/\|+/,'|');
f.permessi.value = f.permessi.value.replace(/\|+$/,'');
f.permessi.value = f.permessi.value.replace(/^\|+/,'');

//alert(f.permessi.value);
window.parent.document.<?=$_GET['formname'] ?>.permessi.value = f.permessi.value;
window.parent.closeLayerWindow();
}

//////////////////////////////////////
function change_style(el, def_col) {

if (el.selectedIndex == 0) {
  el.options[el.selectedIndex].style.background = '#339900';
  el.style.background = '#339900';
} else if (el.selectedIndex == 1) {
  el.options[el.selectedIndex].style.background = '#ff0000';
  el.style.background = '#ff0000';
} else if (el.selectedIndex == 2) {
  el.options[el.selectedIndex].style.background = def_col;
  el.style.background = def_col;
} else {
  el.options[el.selectedIndex].style.background = '#339900';
  el.style.background = '#339900';
}

}

function resizeit() {

if (document.all) {
//  f = window.parent.document.getElementById('window_layer_iframe');
//  f.style.height = f.contentWindow.document.body.scrollHeight + 5;
} else {
//  myHeight = window.parent.document.getElementById('window_layer_iframe').contentDocument.body.scrollHeight;
//  window.parent.document.getElementById('window_layer_iframe').height = myHeight;
}


}


function disable_owner(f) {

return;
  for (i=0; i < f.elements.length; i++) {
    el = f.elements[i];
    if (el.type && el.type.match(/select-one/)) {
      if (el.selectedIndex==3) el.disabled = true;
    }
  }
}

function calc_perms() {
  str = getperms();
  window.parent.document.<?=$_GET['formname'] ?>.permessi.value = str;
  document.permes.permessi.value = str;
}

function get_perms_from_parent() {
  document.permes.permessi.value = window.parent.document.<?=$_GET['formname'] ?>.permessi.value;
  //document.permes.submit();
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

<? 
if ($_GET['reloadperms'] != 1) {
	$func = 'calc_perms(); disable_owner(document.permes);';
} else {
 	$func = 'get_perms_from_parent()'; 
	$_SERVER["REQUEST_URI"] = ereg_replace('&reloadperms=1','',$_SERVER["REQUEST_URI"]);
}

$search = strlen(trim($_POST['search'])) ? trim($_POST['search']) : '';

?>

<body class="per-iframe-body" onLoad="get_perms_from_parent(); disable_owner(document.permes); resizeit();">
<form action="<?=$_SERVER["REQUEST_URI"]?>" method="post" name="permes" style="display: inline">
  <input type="hidden" name="permessi" value="">
  <input type="hidden" name="id" value="<?=$_REQUEST['id'] ?>">
  <input type="hidden" name="apply" value="0">

  <table width="100%"  border="0" cellpadding="2" cellspacing="1" class="per-table">

    <tr class="per-riga-01">
      <td colspan="5">
	<input type="text" name="search" size="20" value="<?=htmlspecialchars($search) ?>"> 
	<input type="button" value="<?=FW_PERM_SRCUSRGRP?>"  class="bot-submit" onClick="this.form.apply.value=0; this.form.submit();">
	</td>
    </tr>

<? if ($is_pratica) { ?>
    <tr>
      <td class="per-tit"><?=FW_PERM_GRP?></td>
      <td class="per-tit"><?=FW_PERM_PRA?></td>
      <td class="per-tit"><?=FW_PERM_PRE?></td>
      <td class="per-tit"><?=FW_PERM_SCA?></td>
      <td class="per-tit"><?=FW_PERM_DOC?></td>
    </tr>
<? } else { ?>
    <tr>
      <td class="per-tit"><?=FW_PERM_GRP?></td>
      <td class="per-tit"><?=FW_PERM_CNT?></td>
    </tr>
<? } ?>


<?

$where = $search ? 'name LIKE \'%'.mysql_escape_string($search).'%\''
		 : 'id < 0';

$rs=$DB->Execute("	SELECT * 
			FROM ".$CONF[auth_groups_table]." 
			WHERE $where 
			ORDER BY id asc");

if (!$rs->RecordCount()) print '<tr class="per-riga-01"><td colspan=5 align="center"><br><b>Nessun gruppo</b><br><br></td></tr>';

while (!$rs->EOF) {
$row=$rs->FetchRow();

if (isset($_REQUEST[id])) {$id=$_REQUEST[id];} else $id="";
if (isset($_POST[permessi])) {$newperm=$_POST[permessi];} else $newperm="";

$result=check_perm_group($row[id],$_GET[module],$id,$newperm);

//print_r($result);
?>
	
    <tr class="per-riga-01" onMouseOver="this.className='per-riga-focus-a'" onMouseOut="this.className='per-riga-01'">
      <td width="200"><?=$row[$CONF[auth_groups_namefield]]?></td>
   	<? 
	$cl = ($result[0][value] != 2 ) ? "per-select-default-si" : "per-select-default-no";
	$col = ($result[0][value] != 2 ) ? '#339900' : '#ff0000';
	$def_val = strlen($DEF_TYPE[$result[0][value]]) ? " (".$DEF_TYPE[$result[0][value]].")": "";
      	?>
      <td>
	<select name="G<?=$row[id]?>-<?=($is_pratica ? 'pra' : 'con') ?>" onChange="change_style(this,'<?=$col ?>');" class="<?=$cl?>">
	  <option value="0"  class="<?=$cl?>" <?if (strstr($result[0][source],"D"))  {print "selected";}  ?> >Default<?=$def_val?></option>
	  <option value="2" class="per-select-default-no" <?if (strstr($result[0][source],"OG") && $result[0][value]==2)  {print "selected";}  ?>><?=FW_PERM_NO?></option>
	  <option value="3" class="per-select-default-si" <?if (strstr($result[0][source],"OG") && $result[0][value]==3)  {print "selected";}  ?>><?=FW_PERM_R?></option>
	  <option value="4" class="per-select-default-si" <?if (strstr($result[0][source],"OG") && $result[0][value]==4)  {print "selected";}  ?>><?=FW_PERM_W?></option>
	  <option value="5" class="per-select-default-si" <?if (strstr($result[0][source],"OG") && $result[0][value]==5)  {print "selected";}  ?>><?=FW_PERM_D?></option>
	  <option value="6" class="per-select-default-si" <?if (strstr($result[0][source],"OG") && $result[0][value]==6)  {print "selected";}  ?>><?=FW_PERM_P?></option>
	</select>
      </td>

<? if ($is_pratica) {  ?> 

        <? 
	$cl = ($result[1][value] != 2)  ? "per-select-default-si" : "per-select-default-no";
	$col = ($result[1][value] != 2)  ? '#339900' : '#ff0000';
	$def_val = strlen($DEF_TYPE[$result[1][value]]) ? " (".$DEF_TYPE[$result[1][value]].")": "";
      	?>
      <td>
	<select name="G<?=$row[id]?>-pre" onChange="change_style(this,'<?=$col ?>');" class="<?=$cl?>">
  	  <option value="0"  class="<?=$cl?>" <?if (strstr($result[1][source],"D"))  {print "selected";}  ?> >Default<?=$def_val?></option>
  	  <option value="2" class="per-select-default-no" <?if (strstr($result[1][source],"OG") && $result[1][value]==2)  {print "selected";}  ?>><?=FW_PERM_NO?></option>
  	  <option value="3" class="per-select-default-si" <?if (strstr($result[1][source],"OG") && $result[1][value]==3)  {print "selected";}  ?>><?=FW_PERM_R?></option>
  	  <option value="4" class="per-select-default-si" <?if (strstr($result[1][source],"OG") && $result[1][value]==4)  {print "selected";}  ?>><?=FW_PERM_W?></option>
  	  <option value="5" class="per-select-default-si" <?if (strstr($result[1][source],"OG") && $result[1][value]==5)  {print "selected";}  ?>><?=FW_PERM_D?></option>
  	  <option value="6" class="per-select-default-si" <?if (strstr($result[1][source],"OG") && $result[1][value]==6)  {print "selected";}  ?>><?=FW_PERM_P?></option>
	</select>
	</td>
                 	<? 
	$cl = ($result[2][value] != 2)  ? "per-select-default-si" : "per-select-default-no";
	$col = ($result[2][value] != 2)  ? '#339900' : '#ff0000';
	$def_val = strlen($DEF_TYPE[$result[2][value]]) ? " (".$DEF_TYPE[$result[2][value]].")": "";
      	?>
      <td>
	<select name="G<?=$row[id]?>-sca" onChange="change_style(this,'<?=$col ?>');" class="<?=$cl?>">
  	  <option value="0"  class="<?=$cl?>" <?if (strstr($result[2][source],"D"))  {print "selected";}  ?> >Default<?=$def_val?></option>
  	  <option value="2" class="per-select-default-no" <?if (strstr($result[2][source],"OG") && $result[2][value]==2)  {print "selected";}  ?>><?=FW_PERM_NO?></option>
  	  <option value="3" class="per-select-default-si" <?if (strstr($result[2][source],"OG") && $result[2][value]==3)  {print "selected";}  ?>><?=FW_PERM_R?></option>
  	  <option value="4" class="per-select-default-si" <?if (strstr($result[2][source],"OG") && $result[2][value]==4)  {print "selected";}  ?>><?=FW_PERM_W?></option>
  	  <option value="5" class="per-select-default-si" <?if (strstr($result[2][source],"OG") && $result[2][value]==5)  {print "selected";}  ?>><?=FW_PERM_D?></option>
  	  <option value="6" class="per-select-default-si" <?if (strstr($result[2][source],"OG") && $result[2][value]==6)  {print "selected";}  ?>><?=FW_PERM_P?></option>
	</select>
	</td>
                 	<? 
	$cl = ($result[3][value] != 2)  ? "per-select-default-si" : "per-select-default-no";
	$col = ($result[3][value] != 2)  ? '#339900' : '#ff0000';
	$def_val = strlen($DEF_TYPE[$result[3][value]]) ? " (".$DEF_TYPE[$result[3][value]].")": "";
      	?>
      <td>
	<select name="G<?=$row[id]?>-doc" onChange="change_style(this,'<?=$col ?>');" class="<?=$cl?>">
  	  <option value="0"  class="<?=$cl?>" <?if (strstr($result[3][source],"D"))  {print "selected";}  ?> >Default<?=$def_val?></option>
  	  <option value="2" class="per-select-default-no" <?if (strstr($result[3][source],"OG") && $result[3][value]==2)  {print "selected";}  ?>><?=FW_PERM_NO?></option>
  	  <option value="3" class="per-select-default-si" <?if (strstr($result[3][source],"OG") && $result[3][value]==3)  {print "selected";}  ?>><?=FW_PERM_R?></option>
  	  <option value="4" class="per-select-default-si" <?if (strstr($result[3][source],"OG") && $result[3][value]==4)  {print "selected";}  ?>><?=FW_PERM_W?></option>
  	  <option value="5" class="per-select-default-si" <?if (strstr($result[3][source],"OG") && $result[3][value]==5)  {print "selected";}  ?>><?=FW_PERM_D?></option>
  	  <option value="6" class="per-select-default-si" <?if (strstr($result[3][source],"OG") && $result[3][value]==6)  {print "selected";}  ?>><?=FW_PERM_P?></option>
	</select>
	</td>

<? } // is_pratica ?>

    </tr>
<?
}
?>

</table>

  <table width="100%"  border="0" cellpadding="2" cellspacing="1" class="per-table">

<? if ($is_pratica) { ?>
    <tr>
      <td class="per-tit"><?=FW_PERM_USR?></td>
      <td class="per-tit"><?=FW_PERM_PRA?></td>
      <td class="per-tit"><?=FW_PERM_PRE?></td>
      <td class="per-tit"><?=FW_PERM_SCA?></td>
      <td class="per-tit"><?=FW_PERM_DOC?></td>
    </tr>
<? } else { ?>
    <tr>
      <td class="per-tit"><?=FW_PERM_USR?></td>
      <td class="per-tit"><?=FW_PERM_CNT?></td>
    </tr>
<? } ?>
 
<?
$where = $search ? 'nome LIKE \'%'.mysql_escape_string($search).'%\''
                 : 'id < 0';

$rs=$DB->Execute("      SELECT *
                        FROM ".$CONF[auth_db_table]."
                        WHERE $where 
                        ORDER BY id asc");

if (!$rs->RecordCount()) print '<tr class="per-riga-01"><td colspan=5 align="center"><br><b>Nessun utente</b><br><br></td></tr>';

while (!$rs->EOF) {
$row=$rs->FetchRow();

if (isset($_REQUEST[id])) {$id=$_REQUEST[id];} else $id="";
if (isset($_POST[permessi])) {$newperm=$_POST[permessi];} else $newperm="";
if ($id=="" && $newperm=="") $newperm="U".$_SESSION[fw_userid]."=33333";

$result=check_perm_user($row[id],$_GET[module],$id,$newperm);
//print_r($result)."<br>";
?>
	
    <tr class="per-riga-01" onMouseOver="this.className='per-riga-focus-a'" onMouseOut="this.className='per-riga-01'">
      <td width="200"><?=$row[nome] ?></td><!-- <?=$row[$CONF[auth_login_field]]?></td>  -->
         <? 
	$cl = ($result[0][value] != 2) ? "per-select-default-si" : "per-select-default-no";
	$col = ($result[0][value] != 2 ) ? '#339900' : '#ff0000';
	$def_val = strlen($DEF_TYPE[$result[0][value]]) ? " (".$DEF_TYPE[$result[0][value]].")": "";
      	?>
     	 <td>
	<select name="U<?=$row[id]?>-<?=($is_pratica ? 'pra' : 'con') ?>" onChange="change_style(this,'<?=$col ?>');" class="<?=$cl?>">
	  <option value="0"  class="<?=$cl?>" <?if (strstr($result[0][source],"D"))  {print "selected";}  ?> >Default<?=$def_val?></option>
	  <option value="2" class="per-select-default-no" <?if (strstr($result[0][source],"OU") && $result[0][value]==2)  {print "selected";}  ?>><?=FW_PERM_NO?></option>
	  <option value="3" class="per-select-default-si" <?if (strstr($result[0][source],"OU") && $result[0][value]==3)  {print "selected";}  ?>><?=FW_PERM_R?></option>
	  <option value="4" class="per-select-default-si" <?if (strstr($result[0][source],"OU") && $result[0][value]==4)  {print "selected";}  ?>><?=FW_PERM_W?></option>
	  <option value="5" class="per-select-default-si" <?if (strstr($result[0][source],"OU") && $result[0][value]==5)  {print "selected";}  ?>><?=FW_PERM_D?></option>
	  <option value="6" class="per-select-default-si" <?if (strstr($result[0][source],"OU") && $result[0][value]==6)  {print "selected";}  ?>><?=FW_PERM_P?></option>
	</select>
        </td>

<? if ($is_pratica) { ?>

      	<? 
	$cl = ($result[1][value] != 2)  ? "per-select-default-si" : "per-select-default-no";
	$col = ($result[1][value] != 2)  ? '#339900' : '#ff0000';
	$def_val = strlen($DEF_TYPE[$result[1][value]]) ? " (".$DEF_TYPE[$result[1][value]].")": "";
      	?>
      <td>
	<select name="U<?=$row[id]?>-pre" onChange="change_style(this,'<?=$col ?>');" class="<?=$cl?>">
  	  <option value="0"  class="<?=$cl?>" <?if (strstr($result[1][source],"D"))  {print "selected";}  ?> >Default<?=$def_val?></option>
  	  <option value="2" class="per-select-default-no" <?if (strstr($result[1][source],"OU") && $result[1][value]==2)  {print "selected";}  ?>><?=FW_PERM_NO?></option>
  	  <option value="3" class="per-select-default-si" <?if (strstr($result[1][source],"OU") && $result[1][value]==3)  {print "selected";}  ?>><?=FW_PERM_R?></option>
  	  <option value="4" class="per-select-default-si" <?if (strstr($result[1][source],"OU") && $result[1][value]==4)  {print "selected";}  ?>><?=FW_PERM_W?></option>
  	  <option value="5" class="per-select-default-si" <?if (strstr($result[1][source],"OU") && $result[1][value]==5)  {print "selected";}  ?>><?=FW_PERM_D?></option>
  	  <option value="6" class="per-select-default-si" <?if (strstr($result[1][source],"OU") && $result[1][value]==6)  {print "selected";}  ?>><?=FW_PERM_P?></option>
	</select>
      </td>
        <? 
	$cl = ($result[2][value] != 2)  ? "per-select-default-si" : "per-select-default-no";
	$col = ($result[2][value] != 2)  ? '#339900' : '#ff0000';
	$def_val = strlen($DEF_TYPE[$result[2][value]]) ? " (".$DEF_TYPE[$result[2][value]].")": "";
      	?>
      <td>
	<select name="U<?=$row[id]?>-sca" onChange="change_style(this,'<?=$col ?>');" class="<?=$cl?>">
  	  <option value="0"  class="<?=$cl?>" <?if (strstr($result[2][source],"D"))  {print "selected";}  ?> >Default<?=$def_val?></option>
  	  <option value="2" class="per-select-default-no" <?if (strstr($result[2][source],"OU") && $result[2][value]==2)  {print "selected";}  ?>><?=FW_PERM_NO?></option>
  	  <option value="3" class="per-select-default-si" <?if (strstr($result[2][source],"OU") && $result[2][value]==3)  {print "selected";}  ?>><?=FW_PERM_R?></option>
  	  <option value="4" class="per-select-default-si" <?if (strstr($result[2][source],"OU") && $result[2][value]==4)  {print "selected";}  ?>><?=FW_PERM_W?></option>
  	  <option value="5" class="per-select-default-si" <?if (strstr($result[2][source],"OU") && $result[2][value]==5)  {print "selected";}  ?>><?=FW_PERM_D?></option>
  	  <option value="6" class="per-select-default-si" <?if (strstr($result[2][source],"OU") && $result[2][value]==6)  {print "selected";}  ?>><?=FW_PERM_P?></option>
	</select>
	</td>
        <? 
	$cl = ($result[3][value] != 2) ? "per-select-default-si" : "per-select-default-no";
	$col = ($result[3][value] != 2) ? '#339900' : '#ff0000';
	$def_val = strlen($DEF_TYPE[$result[3][value]]) ? " (".$DEF_TYPE[$result[3][value]].")": "";
      	?>
      <td>
	<select name="U<?=$row[id]?>-doc" onChange="change_style(this,'<?=$col ?>');" class="<?=$cl?>">
  	  <option value="0"  class="<?=$cl?>" <?if (strstr($result[3][source],"D"))  {print "selected";}  ?> >Default<?=$def_val?></option>
  	  <option value="2" class="per-select-default-no" <?if (strstr($result[3][source],"OU") && $result[3][value]==2)  {print "selected";}  ?>><?=FW_PERM_NO?></option>
  	  <option value="3" class="per-select-default-si" <?if (strstr($result[3][source],"OU") && $result[3][value]==3)  {print "selected";}  ?>><?=FW_PERM_R?></option>
  	  <option value="4" class="per-select-default-si" <?if (strstr($result[3][source],"OU") && $result[3][value]==4)  {print "selected";}  ?>><?=FW_PERM_W?></option>
  	  <option value="5" class="per-select-default-si" <?if (strstr($result[3][source],"OU") && $result[3][value]==5)  {print "selected";}  ?>><?=FW_PERM_D?></option>
  	  <option value="6" class="per-select-default-si" <?if (strstr($result[3][source],"OU") && $result[3][value]==6)  {print "selected";}  ?>><?=FW_PERM_P?></option>
	</select>
      </td>

<? } ?>

    </tr>
<?
}
?>

  </table>
  <p align="center">
    <input type="button" class="bot-submit" value="<?=FW_PERM_APPLY?>" onClick="getperms(); this.form.submit(); ">
  </p>
<br>
</form>

</body>
</html>
