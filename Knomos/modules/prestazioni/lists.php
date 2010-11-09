<?

$perm_parent = perm_sql_read("%[PERM]%","pratiche");
$perm_parent = str_replace ("permessi","p.permessi",$perm_parent);
$perm_parent = str_replace ("id","p.id",$perm_parent);


if ($_GET[primanota]==1) {
$LISTS[prestazioni][0]["sql_select"]="SELECT m.* FROM prestazioni m, pratiche p WHERE $perm_parent AND p.id=m.ref_id ";
$LISTS[prestazioni][0]["options"]="perpage::50||defordfield::m.data||defordtype::desc||defordfield2::m.ref_id||defordtype2::asc||defordfield3::m.id||defordtype3::desc||exp::0";
$LISTS[prestazioni][0]["titles"]=" ||".FW_DATE."::ord||Causale||Incassi||Spese||Anticip.||Riferimento";

$LISTS[prestazioni][0]["fields"]="note::func=>prestazioni_note_pic||data::date||testo::func=>prestazioni_format_prestaz||acconti::func=>prestazioni_calc_incassi||sp_st::func=>prestazioni_calc_sp_st||sp_st::func=>prestazioni_calc_anticip||ref_id::func=>prestazioni_format_rif";
}
else
{
$LISTS[prestazioni][0]["sql_select"]="SELECT m.* FROM prestazioni m, pratiche p WHERE $perm_parent AND p.id=m.ref_id ";
$LISTS[prestazioni][0]["options"]="perpage::50||defordfield::m.data||defordtype::desc||defordfield2::m.ref_id||defordtype2::asc||defordfield3::m.id||defordtype3::desc||exp::0";
$LISTS[prestazioni][0]["titles"]=" ||".FW_DATE."::ord||".FW_TEXT."||Op.||Sp.||Dir.||On.||".PRESTAZIONI_REF_PRATICA;
$LISTS[prestazioni][0]["fields"]="note::func=>prestazioni_note_pic||data::date||testo::linkid=>".$CONF[url_base].$CONF[dir_modules]."prestazioni/pages/prestazione_show.php?id=%ID%||ref_id::func=>prestazioni_shortoper||ref_id::func=>prestazioni_calc_cost||diritti::func=>prestazioni_calc_dir||on_utente::func=>prestazioni_calc_onor||ref_id::func=>prestazioni_format_prat";
//$LISTS[prestazioni][0]["action"]="id;;".FW_SHOW.";;prestazione_show.php?id=%ID%||id;;".FW_MODIFY.";;new_prestazione.php?id=%ID%||id;;".FW_DELETE.";;".$CONF[url_base].$CONF[dir_modules]."prestazioni/pages/prestazioni_view.php?action=del&id=%ID%";
}




/*
$LISTS[prestazioni][1]["sql_select"]="SELECT * FROM pratiche WHERE %[PERM]%";
$LISTS[prestazioni][1]["options"]="perpage::8||defordfield::pr_codice||defordtype::asc||exp::0";
$LISTS[prestazioni][1]["titles"]=PRATICHE_CODE."||".FW_TYPE."||".PRATICHE_CUSTOMER."||".PRATICHE_VALUE."||".FW_ACTION;
$LISTS[prestazioni][1]["fields"]="pr_codice||pr_tipo::[SELECT * FROM INT_pratiche_tipo WHERE codice='%ID%';;ttp_desc]||pr_cliente||pr_valore||#action#";
$LISTS[prestazioni][1]["action"]="id;;".FW_SHOW.";;pratiche_show.php?id=%ID%||id;;".FW_MODIFY.";;new_pratiche.php?id=%ID%";
*/



//Function for printing notes field

function prestazioni_note_pic($row)
{
	if (strlen($row[note])>0)
	{
		return "<img src=\"%[IMAGE_GPATH]%ico/ico_note_min.gif\">";
	}	
}
function prestazioni_format_prestaz($row)
{
	GLOBAL $DB,$CONF;
	
	if ($row[sp_studio] >0) 
	{$spstudio=true;}else{$spstudio=false;}

	if($spstudio==true){//da sostituire con spesa_studio_show.php
								//studio/pages/spesa_studio_show.php
	return "<a href=\"".$CONF[url_base].$CONF[dir_modules]."prestazioni/pages/spesa_studio_show.php?id=".$row[id]."\">".$row[testo]."</a>";
	}
	else  {
	return "<a href=\"".$CONF[url_base].$CONF[dir_modules]."prestazioni/pages/prestazione_show.php?id=".$row[id]."\">".$row[testo]."</a>";
	}
}

function prestazioni_format_rif($row)
{
	GLOBAL $DB,$CONF;
	
	$rs=$DB->Execute("SELECT * FROM pratiche WHERE id=".$row[ref_id]);
	$prat=$rs->FetchRow();
	return $prat[pr_codice];
}

function prestazioni_format_prat($row)
{
	GLOBAL $DB,$CONF;
	
	$rs=$DB->Execute("SELECT * FROM pratiche WHERE id=".$row[ref_id]);
	$prat=$rs->FetchRow();
	return "<a href=\"".$CONF[url_base].$CONF[dir_modules]."pratiche/pages/pratiche_show.php?id=".$prat[id]."\">".$prat[pr_codice]."</a>";
}


function prestazioni_calc_cost($row)
{
	GLOBAL $CONF,$DB;
	
	$val= ($row[spese_imponibili] + $row[spese_non_imponibili]);
	$formatted = sprintf("%01.2f", $val);
	if ($val > 0) {return $formatted;}
	else return "";
	
}

function prestazioni_calc_dir($row)
{
	GLOBAL $CONF,$DB;
	
	if ($row[diritti] > 0) {return $row[diritti];}
	else return "";
	
}
function prestazioni_calc_sp_st($row)
{
	GLOBAL $CONF,$DB;
	
	if ($row[sp_studio] > 0) {return $row[sp_studio];}
	else return "";
	
}
function prestazioni_calc_anticip($row)
{
	GLOBAL $CONF,$DB;
	
	if ($row[anticipazioni] > 0) {return $row[anticipazioni];}
	else return "";
	
}


function prestazioni_calc_onor($row)
{
	GLOBAL $CONF,$DB;
	
	$val= $row[on_utente];
	if ($val > 0) {return $val;}
	else return "";
	
}
function prestazioni_calc_incassi($row)
{
	GLOBAL $CONF,$DB;

	$val= $row[acconti];
	if ($val > 0) {return $val;}
	else return "";
	
}

function prestazioni_shortoper($row)
{
	GLOBAL $DB,$CONF;
	
	if (strlen($row[operatore]) > 0)
	{
		$cnt=0;
			$rs=$DB->Execute("SELECT * FROM users WHERE id=".$row[operatore]);
			if ($rs->RecordCount() > 0)
			{
				$r = rand(1, 100000);
				$usr=$rs->FetchRow();
				if ($cnt==0)
				{$out.='<span onMouseOut="HideHelp(\'d' . $r . '\')" onMouseOver="ShowHelp(\'d' . $r . '\', \''. $usr[codice] . ' - '. $usr[nome] . '\', \'\')" >'.$usr[codice].'</span> <div style="display:none" id="d' . $r . '"></div>';}
				else {$out.=" - ".'<div onMouseOut="HideHelp(\'d' . $r . '\')" onMouseOver="ShowHelp(\'d' . $r . '\', \''. $usr[codice] . ' - '. $usr[nome] . '\', \'\')" >'.$usr[codice].'</div> <div style="display:none" id="d' . $r . '"></div>';}
				$cnt++;
			}
	}
	return $out;
}


?>
