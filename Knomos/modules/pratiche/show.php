<?



$SHOW[pratiche][0]["object_template"]="contact.tpl";
$SHOW[pratiche][0]["sql_select"]="SELECT * FROM pratiche p WHERE %[PERM]% AND id=%[ID]%";
$SHOW[pratiche][0]["options"]="perm::1";

$SHOW[pratiche][0]["Fields"]["pr_codice"]=PRATICHE_CODE;

if ($CONF[UsaGmail]==true)
{
$par="'%[PR_OGGETTO]%', '".$CONF[gmail_url_used]."'";
$gmail='<a href="javascript:ApriGmail('.$par.')" class="pratica-resalt-01"><img src="%[IMAGE_GPATH]%ico/gmail.png" width="16" height="16" border="0" align="absmiddle"></a>  ';
}
else {$gmail="";}
$SHOW[pratiche][0]["Fields"]["pr_oggetto"]=$gmail.PRATICHE_FASCSUBJ;
//(alternativa dropbox)
//$St1=$CONF[dbox_url_used]; // Definita in Config.php
//$SHOW[pratiche][0]["Fields"]["pr_schedario"]=PRATICHE_SCHEDARIO;
//$StUrl="'".$St1."%[PR_SCHEDARIO]%','%[PR_SCHEDARIO]%'";
//$SHOW[pratiche][0]["Fields"]["pr_schedario"]='<img src="%[IMAGE_GPATH]%ico/dropbox_logo_home.png" width="16" height="16" border="0" align="absmiddle"> Schedario:  <a href="javascript: loadLayerWindow('.$StUrl.')" class="pratica-resalt-01">%[PR_SCHEDARIO]%</a>';
if ($CONF[UsaDbox]==true)
{
$St1=$CONF[dbox_url_used_schedario]; // Definita in Config.php
$StUrl="'".$St1."%[PR_SCHEDARIO]%','%[PR_SCHEDARIO]%'";
$dBox='<a href="javascript: loadLayerWindow('.$StUrl.')" class="pratica-resalt-01"><img src="%[IMAGE_GPATH]%ico/dropbox_logo_home.png" width="16" height="16" border="0" align="absmiddle"></a> ';
}
else {$dBox="";}
$SHOW[pratiche][0]["Fields"]["pr_schedario"]=$dBox.PRATICHE_SCHEDARIO;
$SHOW[pratiche][0]["Fields"]["pr_numero"]=PRATICHE_NUMBER;
$SHOW[pratiche][0]["Fields"]["pr_tipo"]="Tipo::[SELECT * FROM INT_pratiche_tipo WHERE codice='%ID%';;ttp_desc]";
$SHOW[pratiche][0]["Fields"]["pr_data_ins"]=PRATICHE_INSERT_DATE."::date";
$SHOW[pratiche][0]["Fields"]["pr_data_mod"]=PRATICHE_LAST_UPDATE."::date";
$SHOW[pratiche][0]["Fields"]["pr_data_inizio"]=PRATICHE_START_PREST."::date";
if ($CONF[UsaGmail]==true)
{
$par="'cliente', '".$CONF[gmail_url_used]."'";
$gmail='<a href="javascript:ApriGmail('.$par.')" class="pratica-resalt-01"><img src="%[IMAGE_GPATH]%ico/gmail.png" width="16" height="16" border="0" align="absmiddle"></a>  ';
}
else {$gmail="";}
//$SHOW[pratiche][0]["Fields"]["pr_oggetto2"]=PRATICHE_POS."::func=>pratiche_parametro_posizione";
$SHOW[pratiche][0]["Fields"]["pr_oggetto2"]=PRATICHE_POS."::[SELECT * FROM INT_tipologie_varie WHERE tipologia=5 and codice='%ID%';;descrizione]";
$SHOW[pratiche][0]["Fields"]["pr_stato"]=PRATICHE_STATO."::[SELECT * FROM INT_tipologie_varie WHERE tipologia=1 and codice='%ID%';;descrizione]";
$SHOW[pratiche][0]["Fields"]["pr_fase"]=PRATICHE_FASE."::[SELECT * FROM INT_tipologie_varie WHERE tipologia=2 and  codice='%ID%';;descrizione]";
$SHOW[pratiche][0]["Fields"]["pr_ref_idcliente"]=$gmail.PRATICHE_CUSTOMER."::func=>pratiche_cliente_show";
$SHOW[pratiche][0]["Fields"]["pr_ref_idavvr"]=PRATICHE_AVVR."::func=>pratiche_avvr_show";
$SHOW[pratiche][0]["Fields"]["pr_ref_idbenefic"]=PRATICHE_BENEF."::func=>pratiche_benef_show";
$SHOW[pratiche][0]["Fields"]["pr_ref_idaltri"]=PRATICHE_OTHERS."::func=>pratiche_altri_show";
$SHOW[pratiche][0]["Fields"]["pr_operatore"]=PRATICHE_USER."::func=>pratiche_operator_show";
$SHOW[pratiche][0]["Fields"]["pr_valore"]=PRATICHE_VALUE."::func=>pratiche_format_value";
$SHOW[pratiche][0]["Fields"]["pr_fido"]=PRATICHE_FIDO;
$SHOW[pratiche][0]["Fields"]["pr_criterio"]=PRATICHE_CRIT;
//$SHOW[pratiche][0]["Fields"]["pr_comp_cod"]=PRATICHE_AUT_COMP;
//Creare un faunzione che distingua sulla base del codice
$SHOW[pratiche][0]["Fields"]["pr_comp_cod"]=PRATICHE_AUT_COMP."::func=>pratiche_parametro_giudice";

//$SHOW[pratiche][0]["Fields"]["pr_comp_desc"]=PRATICHE_UFF_GIUD;
$SHOW[pratiche][0]["Fields"]["pr_comp_desc"]=PRATICHE_UFF_GIUD."::[SELECT * FROM INT_uff_giud WHERE codice='%ID%';;descrizione]";


$SHOW[pratiche][0]["Fields"]["pr_uff_giud"]=PRATICHE_LUOGO_UFF_GIUD;
$SHOW[pratiche][0]["Fields"]["pr_luogo_uff_giud"]=PRATICHE_LUOGO_UFF_GIUD;
$SHOW[pratiche][0]["Fields"]["pr_nruolo_altri"]=PRATICHE_NRUOLO_ALTRI;
$SHOW[pratiche][0]["Fields"]["pr_nruolo"]=PRATICHE_NRUOLO;
$SHOW[pratiche][0]["Fields"]["pr_giudice"]=PRATICHE_GIUD;
$SHOW[pratiche][0]["Fields"]["pr_repertorio"]=PRATICHE_NREP;
$SHOW[pratiche][0]["Fields"]["pr_dept"]=PRATICHE_DEPT."::[SELECT * FROM gruppi WHERE Id='%ID%';;name]";
$SHOW[pratiche][0]["Fields"]["pr_uff"]=PRATICHE_UFF."::[SELECT * FROM gruppi WHERE Id='%ID%';;name]";

$SHOW[pratiche][0]["Fields"]["note"]=PRATICHE_NOTE;
$SHOW[pratiche][0]["Fields"]["pr_scad"]=PRATICHE_REL_SCAD;
$SHOW[pratiche][0]["Fields"]["pr_riun"]=PRATICHE_REL_RIUN;

$SHOW[pratiche][0]["Fields"]["pr_perc_onor"]=PRATICHE_PERC_ONOR;
$SHOW[pratiche][0]["Fields"]["pr_on_orar"]=PRATICHE_HOUR_PRICE;
$SHOW[pratiche][0]["Fields"]["pr_referral"]=PRATICHE_REFERRAL;
$SHOW[pratiche][0]["Fields"]["pr_uff_orig"]=PRATICHE_UORIG."::[SELECT * FROM gruppi WHERE id='%ID%';;name]";
$SHOW[pratiche][0]["Fields"]["pr_prof_orig"]=PRATICHE_PORIG."::[SELECT * FROM users WHERE id='%ID%';;nome]";
$SHOW[pratiche][0]["Fields"]["pr_riunita_il"]=PRATICHE_RIUNITA_IL."::date";

$SHOW[pratiche][0]["Fields"]["pr_riunita_a"]=PRATICHE_RIUNITA_A."::func=>pratiche_riunita_a_show";
//------



$SHOW[pratiche][1]["object_template"]="pratiche_sitcont.tpl";
$SHOW[pratiche][1]["Fields"]["pr_codice"]=PRATICHE_CODE;
$SHOW[pratiche][1]["Fields"]["simp"]=PRATICHE_SIMP;
$SHOW[pratiche][1]["Fields"]["snimp"]=PRATICHE_SNIMP;
$SHOW[pratiche][1]["Fields"]["dir"]=PRATICHE_DIR;
$SHOW[pratiche][1]["Fields"]["onor"]=PRATICHE_ONOR;
$SHOW[pratiche][1]["Fields"]["onor_or"]=PRATICHE_ONOR_OR;
$SHOW[pratiche][1]["Fields"]["onor_ut"]=PRATICHE_ONOR_UT;
$SHOW[pratiche][1]["Fields"]["acco"]=PRATICHE_ACCO;
$SHOW[pratiche][1]["Fields"]["anti"]=PRATICHE_ANTI;
$SHOW[pratiche][1]["Fields"]["subt1"]=PRATICHE_SUBT;
$SHOW[pratiche][1]["Fields"]["subt2"]=PRATICHE_SUBT;
$SHOW[pratiche][1]["Fields"]["subt3"]=PRATICHE_SUBT;
$SHOW[pratiche][1]["Fields"]["subm"]=PRATICHE_SUBT;
$SHOW[pratiche][1]["Fields"]["subf"]=PRATICHE_TOBILL;
$SHOW[pratiche][1]["Fields"]["pr_cliente"]=PRATICHE_CUSTOMER;
$SHOW[pratiche][1]["Fields"]["pr_oggetto"]=PRATICHE_SUBJ;
$SHOW[pratiche][1]["Fields"]["pr_valore"]=PRATICHE_VALUE."::func=>pratiche_format_value";
$SHOW[pratiche][1]["Fields"]["pr_fido"]=PRATICHE_FIDO;
$SHOW[pratiche][1]["Fields"]["billem"]=PRATICHE_BILLEM;
$SHOW[pratiche][1]["Fields"]["fattem"]=PRATICHE_FATTEM;

function pratiche_riunita_a_show($row)
{
	global $DB,$CONF;
	
	$cnt=0;
	
	foreach(explode(",,",$row[pr_riunita_a]) as $v)
	{
		if ($cnt > 0) $cur .= ", ";
		$rs=$DB->Execute("SELECT * FROM pratiche WHERE id='".$v."'");
		$op=$rs->FetchRow();

		//$link="http://localhost/modules/pratiche/pages/pratiche_show.php?id=".$v;
		$link=$CONF[url_base].$CONF[dir_modules]."pratiche/pages/pratiche_show.php?id=".$v;
		//$cur .= "N. ".$op[pr_numero]." - ".$op[pr_codice]." <a href=".$link." class='pratica-resalt-01'>".$op[pr_codice]."</a>";
		//$cur .= "N. ".$op[pr_numero]." - ".$op[pr_codice].")";
		$cur .= " <a href=".$link." >".$op[pr_codice]."</a>";
		$cnt++;
	}
	return $cur;
}



function pratiche_operator_show($row)
{
	global $DB,$CONF;
	
	$cnt=0;
	
	foreach(explode(",,",$row[pr_operatore]) as $v)
	{
		if ($cnt > 0) $cur .= ", ";
		$rs=$DB->Execute("SELECT * FROM ".$CONF[auth_db_table]." WHERE id='".$v."'");
		$op=$rs->FetchRow();
		$cur .= $op[nome]." (".$op[codice].")";
		$cnt++;
	}
	return $cur;
}



function pratiche_avvr_show($row)
{
	global $DB,$CONF;
	
	$cnt=0;
	
	foreach(explode(",,",$row[pr_ref_idavvr]) as $v)
	{
		if ($cnt > 0) $cur .= ", ";
		$rs=$DB->Execute("SELECT * FROM contact WHERE id='".$v."'");
		$op=$rs->FetchRow();
		$cur .= '<a href="javascript: loadLayerWindow(\''.$CONF[url_base].$CONF[dir_modules].'contact/pages/pratiche_contact.php?id='.$op[id].'\');">'.$op[nome].'</a>';
		$cnt++;
	}
	return $cur;
}



function pratiche_altri_show($row)
{
	global $DB,$CONF;
	
	$cnt=0;
	
	foreach(explode(",,",$row[pr_ref_idaltri]) as $v)
	{
		if ($cnt > 0) $cur .= ", ";
		$rs=$DB->Execute("SELECT * FROM contact WHERE id='".$v."'");
		$op=$rs->FetchRow();
		$cur .= '<a href="javascript: loadLayerWindow(\''.$CONF[url_base].$CONF[dir_modules].'contact/pages/pratiche_contact.php?id='.$op[id].'\');">'.$op[nome].'</a>';
		$cnt++;
	}
	return $cur;
}


function pratiche_cliente_show($row)
{
	global $DB,$CONF;
	
	$cnt=0;
	
		$rs=$DB->Execute("SELECT * FROM contact WHERE id='".$row[pr_ref_idcliente]."'");
		$op=$rs->FetchRow();
		$cur .= '<a  href="javascript: loadLayerWindow(\''.$CONF[url_base].$CONF[dir_modules].'contact/pages/pratiche_contact.php?id='.$op[id].'\');">'.$op[nome].'</a>';
	return $cur;
}


function pratiche_benef_show($row)
{
	global $DB,$CONF;
	
	$cnt=0;
	
	foreach(explode(",,",$row[pr_ref_idbenefic]) as $v)
	{
		if ($cnt > 0) $cur .= ", ";
		$rs=$DB->Execute("SELECT * FROM contact WHERE id='".$v."'");
		$op=$rs->FetchRow();
		$cur .= '<a href="javascript: loadLayerWindow(\''.$CONF[url_base].$CONF[dir_modules].'contact/pages/pratiche_contact.php?id='.$op[id].'\');">'.$op[nome].'</a>';
		$cnt++;
	}
	return $cur;
}

function pratiche_format_value($row)
{
	if ($row[pr_valore]=="-1") return PRATICHE_VAL_IND;
	if ($row[pr_valore]=="-2") return PRATICHE_VAL_INDEXT;
	//if ($row[pr_valore]=="-3") return PRATICHE_VAL_PENALE;
	return $row[pr_valore];
}

function pratiche_parametro_giudice($row)
{
	if ($row[pr_comp_cod]=="STRA") return ADMIN_TA_STRAG;
	if ($row[pr_comp_cod]=="CONC") return ADMIN_TA_CONC;
	if ($row[pr_comp_cod]=="GDPA") return ADMIN_TA_PRET;
	if ($row[pr_comp_cod]=="TRIB") return ADMIN_TA_TRIB;
	if ($row[pr_comp_cod]=="C.A.") return ADMIN_TA_CAPP;
	if ($row[pr_comp_cod]=="C.C.") return ADMIN_TA_CASS;
	if ($row[pr_comp_cod]=="COST") return ADMIN_TA_CCOST;
	if ($row[pr_comp_cod]=="AMMN") return ADMIN_TA_AMN;

	return $row[pr_comp_cod];
}


function pr_contr_unif($row)
{
	global $DB,$CONF;
	
	$cnt=0;

	$prat_val =  $row[pr_valore];
	$prat_giud =  $row[pr_comp_cod];
	$prat_tipo =  $row[pr_tipo];


        $contributo=CalcolaContributoUnificato($prat_val,$prat_giud,$prat_tipo); //la fx è in framework/functions.php
	$cur .= $contributo;
	return $cur;
}


function pr_contr_unif1($row) //prove
{
	global $DB;

	$rs=$DB->Execute("SELECT * FROM INT_pratiche_tipo WHERE codice='".$row[pr_tipo]."'");
	$op=$rs->FetchRow();


	$prat_val =  $row[pr_valore];

	$tipo_prat_cod=$op[codice];
	$tipo_prat_desc=$op[ttp_desc];
	$tipo_prat_contr_unif=$op[contr_unif];

        $contributo=CalcolaContributoUnificato($prat_val,$tipo_prat_cod,$tipo_prat_contr_unif);


	echo "contributo: ".$contributo;

		//$pippo1=CalcolaContributoUnificato($prat_val,$tipo_prat_cod,$tipo_prat_desc);

	$parametri="'".$pippo1."','".$pippo2."','".$pippo3."'";
	$link="javascript:CalcolaContributoUnificato1(".$parametri.")";
	$cur .= $op[ttp_desc]." - ".'<a  href="'.$link.'">'."(Calcola contributo unificato)".'</a>';

	return $cur;
}

?>
