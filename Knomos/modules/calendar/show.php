<?

if ($CONF[storico_impegni]==1){
$SHOW[calendar][0]["object_template"]="appuntamento.tpl";
}
else{
$SHOW[calendar][0]["object_template"]="appuntamento1.tpl";
}
$SHOW[calendar][0]["sql_select"]="SELECT * FROM calendar  WHERE id=%[ID]%";
$SHOW[calendar][0]["options"]="perm::0";
$SHOW[calendar][0]["Fields"]["title"]=CALENDAR_ADESC;
//$SHOW[calendar][0]["Fields"]["done"]=CALENDAR_FATTO."::func=>calendar_fatto_show";
$SHOW[calendar][0]["Fields"]["done"]=CALENDAR_FATTO."::[SELECT * FROM INT_tipologie_varie WHERE tipologia=4 and codice='%ID%';;descrizione]";
//$SHOW[calendar][0]["Fields"]["type"]=CALENDAR_APP."::func=>calendar_evento_show";
$SHOW[calendar][0]["Fields"]["type"]=CALENDAR_APP."::[SELECT * FROM INT_tipologie_varie WHERE tipologia=3 and codice='%ID%';;descrizione]";
$SHOW[calendar][0]["Fields"]["day"]=CALENDAR_ADATE_INI."::date";
$SHOW[calendar][0]["Fields"]["time"]=CALENDAR_ATIME;
$SHOW[calendar][0]["Fields"]["codice"]=FW_CODE;

$SHOW[calendar][0]["Fields"]["cal_comp_desc"]=PRATICHE_AUT_COMP_DESC;
$SHOW[calendar][0]["Fields"]["cal_luogo"]=PRATICHE_LUOGO_UFF_GIUD;
$SHOW[calendar][0]["Fields"]["cal_giudice"]=PRATICHE_GIUD;

$SHOW[calendar][0]["Fields"]["dayend"]=CALENDAR_ADATE_FIN."::date";
$SHOW[calendar][0]["Fields"]["priorita"]=CALENDAR_PRIORITY."::(0=>".CALENDAR_PRIORITY_LOW."||1=>".CALENDAR_PRIORITY_MED."||2=>".CALENDAR_PRIORITY_HIGH.")";
$SHOW[calendar][0]["Fields"]["type_app"]=CALENDAR_ATYPE."::[SELECT * FROM INT_calendar_tipo WHERE ttsid='%ID%';;tts_desc]";
$SHOW[calendar][0]["Fields"]["ref_prat"]=CALENDAR_REF_PRATICA."::[SELECT * FROM pratiche WHERE id='%ID%';;pr_codice]";
$SHOW[calendar][0]["Fields"]["operator"]=CALENDAR_OPER."::func=>calendar_operator_show";
$SHOW[calendar][0]["Fields"]["note"]=FW_NOTE;
$SHOW[calendar][0]["Fields"]["provenienza"]=CALENDAR_PROVENIENZA."::date";
//$SHOW[calendar][0]["Fields"]["notulato"]=CALENDAR_NOTULATO;
$SHOW[calendar][0]["Fields"]["notulato"]=CALENDAR_NOTULATO."::func=>calendar_notulato_show";
if($_SESSION[history]==0)
{
	$SHOW[calendar][0]["Fields"]["button1"]=make_button("new_app.php?id=".$_GET[id],CALENDAR_UPD_APP);
} else $SHOW[calendar][0]["Fields"]["button1"]=CALENDAR_UPD_APP;


function calendar_notulato_show($row)
{
	if ($row[notulato]=="0") return "Da notulare";
	if ($row[notulato]=="1") return "Notulato";
	//if ($row[pr_valore]=="-3") return PRATICHE_VAL_PENALE;
	return $row[notulato];
}


function calendar_operator_show($row)
{
	global $DB,$CONF;
	
	$cnt=0;
	
	foreach(explode(",,",$row[operator]) as $v)
	{
		if ($cnt > 0) $cur .= ", ";
		$rs=$DB->Execute("SELECT * FROM ".$CONF[auth_db_table]." WHERE id='".$v."'");
		$op=$rs->FetchRow();
		$cur .= $op[nome]." (".$op[codice].")";
		$cnt++;
	}
	return $cur;
}

function calendar_fatto_show($row)
{
	global $DB,$CONF;
	
	$cnt=0;
	
	foreach(explode(",,",$row[done]) as $v)
	{
		if ($cnt > 0) $cur .= ", ";
		$rs=$DB->Execute("SELECT * FROM INT_tipologie_varie WHERE tipologia=4 and codice='".$v."'");
		$op=$rs->FetchRow();
		//$cur .= $op[nome]." (".$op[codice].")";
		$cur .= $op[descrizione];
		$cnt++;
	}
	return $cur;
}
//DA TOGLIERE ENTRAMBE
function calendar_evento_show($row)
{
	global $DB,$CONF;
	
	$cnt=0;
	
	foreach(explode(",,",$row[type]) as $v)
	{
		if ($cnt > 0) $cur .= ", ";
		$rs=$DB->Execute("SELECT * FROM INT_tipologie_varie WHERE tipologia=3 and codice='".$v."'");
		$op=$rs->FetchRow();
		//$cur .= $op[nome]." (".$op[codice].")";
		$cur .= $op[descrizione];
		$cnt++;
	}
	return $cur;
}


	
?>
