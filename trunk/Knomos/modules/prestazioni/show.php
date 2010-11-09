<?


$SHOW[prestazioni][0]["object_template"]="prestazione.tpl";
$SHOW[prestazioni][0]["sql_select"]="SELECT * FROM prestazioni WHERE id=%[ID]%";
$SHOW[prestazioni][0]["options"]="perm::0";
$SHOW[prestazioni][0]["Fields"]["data"]=FW_DATE."::date";
$SHOW[prestazioni][0]["Fields"]["testo"]=FW_TEXT;
$SHOW[prestazioni][0]["Fields"]["codice"]=PRESTAZIONI_CODE;
$SHOW[prestazioni][0]["Fields"]["ref_id"]=PRESTAZIONI_REF_PRATICA."::[SELECT * FROM pratiche WHERE id='%ID%';;pr_codice]";
$SHOW[prestazioni][0]["Fields"]["operatore"]=PRESTAZIONI_USER."::func=>prestazioni_operator_show";
$SHOW[prestazioni][0]["Fields"]["nota1"]=PRESTAZIONI_NOTEN;
$SHOW[prestazioni][0]["Fields"]["nota2"]=PRESTAZIONI_NOTEN;
$SHOW[prestazioni][0]["Fields"]["fattura1"]=PRESTAZIONI_FATTN;
$SHOW[prestazioni][0]["Fields"]["fattura2"]=PRESTAZIONI_FATTN;
$SHOW[prestazioni][0]["Fields"]["cost"]=PRESTAZIONI_COSTS;
$SHOW[prestazioni][0]["Fields"]["quantita"]=PRESTAZIONI_QUANT;
$SHOW[prestazioni][0]["Fields"]["unita_misura"]=PRESTAZIONI_UNMIS;
$SHOW[prestazioni][0]["Fields"]["tempo"]=PRESTAZIONI_TIME;
$SHOW[prestazioni][0]["Fields"]["criterio"]=PRESTAZIONI_CRIT;
$SHOW[prestazioni][0]["Fields"]["spese_imponibili"]=PRESTAZIONI_COST_IMP;
$SHOW[prestazioni][0]["Fields"]["spese_non_imponibili"]=PRESTAZIONI_COST_NIMP;
$SHOW[prestazioni][0]["Fields"]["diritti"]=PRESTAZIONI_COST_RIGHTS;
$SHOW[prestazioni][0]["Fields"]["on_utente"]=PRESTAZIONI_COST_ONUT;
$SHOW[prestazioni][0]["Fields"]["on_onorari"]=PRESTAZIONI_COST_ONORAR;
$SHOW[prestazioni][0]["Fields"]["onorari"]=PRESTAZIONI_COST_ONOR;
$SHOW[prestazioni][0]["Fields"]["acconti"]=PRESTAZIONI_ACCONT;
$SHOW[prestazioni][0]["Fields"]["anticipazioni"]=PRESTAZIONI_ANTIC;
$SHOW[prestazioni][0]["Fields"]["note"]=FW_NOTE;
$SHOW[prestazioni][0]["Fields"]["button1"]=make_button("prestazioni_view.php",PRESTAZIONI_BACK_LIST);
$SHOW[prestazioni][0]["Fields"]["button2"]=make_button("new_prestazione.php?id=".$_GET[id],PRESTAZIONI_UPD);


$SHOW[prestazioni][1]["object_template"]="spesa_studio.tpl";
$SHOW[prestazioni][1]["sql_select"]="SELECT * FROM prestazioni WHERE id=%[ID]%";
$SHOW[prestazioni][1]["options"]="perm::0";

$SHOW[prestazioni][1]["Fields"]["data"]=FW_DATE."::date";
$SHOW[prestazioni][1]["Fields"]["testo"]=FW_TEXT;
$SHOW[prestazioni][1]["Fields"]["codice"]=PRESTAZIONI_CODE;
$SHOW[prestazioni][1]["Fields"]["ref_id"]="Riferimento"."::[SELECT * FROM pratiche WHERE id='%ID%';;pr_codice]";
$SHOW[prestazioni][1]["Fields"]["operatore"]=PRESTAZIONI_USER."::func=>prestazioni_operator_show";
$SHOW[prestazioni][1]["Fields"]["sp_studio"]="Importo";
$SHOW[prestazioni][1]["Fields"]["note"]=FW_NOTE;

$SHOW[prestazioni][1]["Fields"]["button1"]=make_button("prestazioni_view.php",PRESTAZIONI_BACK_LIST);
$SHOW[prestazioni][1]["Fields"]["button2"]=make_button("new_spesa_studio.php?id=".$_GET[id],PRESTAZIONI_UPD);

function prestazioni_operator_show($row)
{
	global $DB,$CONF;
	
	$cnt=0;
	
	foreach(explode(",,",$row[operatore]) as $v)
	{
		if ($cnt > 0) $cur .= ", ";
		$rs=$DB->Execute("SELECT * FROM ".$CONF[auth_db_table]." WHERE id='".$v."'");
		$op=$rs->FetchRow();
		$cur .= $op[nome]." (".$op[codice].")";
		$cnt++;
	}
	return $cur;
}
?>