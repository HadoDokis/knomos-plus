<?

$perm_parent = perm_sql_read("%[PERM]%","pratiche");


$LISTS[document][0]["sql_select"]="SELECT m.* FROM document m, pratiche p WHERE $perm_parent AND p.id=m.ref_prat AND m.ref_id=0";
$LISTS[document][0]["options"]="perpage::50||defordfield::m.data||defordtype::desc||defordfield2::m.version||defordtype2::desc||exp::0";
$LISTS[document][0]["titles"]=" ||".FW_DATE."::ord||".DOCUMENT_FILENAME."||".DOCUMENT_VERSION."||".FW_DESC."||".PRESTAZIONI_REF_PRATICA;
$LISTS[document][0]["fields"]="note::func=>document_note_pic||data::date||filename::func=>document_filename||version||descr||ref_prat::[SELECT * FROM pratiche WHERE id='%ID%';;pr_codice]";
//$LISTS[document][0]["action"]="filename;;".FW_OPEN.";;".$CONF[url_base].$CONF[dir_upload]."document/%ID%.sxw;; ;;target=\"_blank\"||id;;".FW_SHOW.";;".$CONF[url_base].$CONF[dir_modules]."document/pages/document_show.php?id=%ID%";


$LISTS[document][1]["sql_select"]="SELECT m.* FROM document m, pratiche p WHERE $perm_parent AND p.id=m.ref_prat AND m.ref_id=";
$LISTS[document][1]["options"]="perpage::50||defordfield::m.version||defordtype::desc||exp::0";
$LISTS[document][1]["titles"]="".FW_DATE."::ord||".DOCUMENT_VERSION."||".DOCUMENT_ORIG."||".DOCUMENT_OPER."||".FW_ACTION;
$LISTS[document][1]["fields"]="data::date||version::ord||ref_orig||operatore::[SELECT * FROM ".$CONF[auth_db_table]." WHERE id='%ID%';;nome]||#action#";
$LISTS[document][1]["action"]="filename;;".FW_SHOW.";;".$CONF[url_base].$CONF[dir_upload]."document/%ID%.sxw;; ;;target=\"_blank\"||id;;".FW_MODIFY.";;".$CONF[url_base].$CONF[dir_modules]."document/pages/mod_document.php?id=%ID%";


/*
$LISTS[document][1]["sql_select"]="SELECT * FROM pratiche WHERE %[PERM]%";
$LISTS[document][1]["options"]="perpage::8||defordfield::pr_codice||defordtype::asc||exp::0";
$LISTS[document][1]["titles"]=PRATICHE_CODE."||".FW_TYPE."||".PRATICHE_CUSTOMER."||".PRATICHE_VALUE."||".FW_ACTION;
$LISTS[document][1]["fields"]="pr_codice||pr_tipo::[SELECT * FROM INT_pratiche_tipo WHERE codice='%ID%';;ttp_desc]||pr_cliente||pr_valore||#action#";
$LISTS[document][1]["action"]="id;;".FW_SHOW.";;pratiche_show.php?id=%ID%||id;;".FW_MODIFY.";;new_pratiche.php?id=%ID%";
*/

//Function for printing notes field

function document_note_pic($row)
{
	GLOBAL $DB;
	
	if (strlen($row[note])>0)
	{
		$output="<img src=\"%[IMAGE_GPATH]%ico/ico_note_min.gif\"> ";
	}
	if ($row[version] > 1) {
		$rs= $DB-> Execute("SELECT * FROM document WHERE (id=".$row[id]." OR ref_id=".$row[id].") AND `lock` > 0");
		if ($rs->RecordCount() >0)
		{
			$output .="<img src=\"%[IMAGE_GPATH]%ico/ico_lock_min.gif\">";
		}
	}		
		
		
		return $output;
}

function document_filename($row)
{
	GLOBAL $DB,$CONF;
	
	if ($row[ext]=="sxw")
	{
		if (file_exists($CONF[path_base].$CONF[dir_upload].'document/txtindex/'.str_replace("-","",substr($row[data],0,7)).'/'.$row[filename].'-'.$row[id].'-'.$row[version].'.txt'))
		{
			return '<a href="'.$CONF[url_base].$CONF[dir_modules]."document/pages/document_show.php?id=".$row[id].'">'.$row[filename].'.'.$row[ext].'</a> <a href="javascript: loadLayerWindow(\''.$CONF[url_base].'modules/document/pages/ds.php?id='.$row[id].'\',\''.$row[filename].'.'.$row[ext].'\');"><img src="%[IMAGE_GPATH]%ico/ico_cercare_peq.gif" width="12" height="12" border="0"></a>';
		} else return '<a href="'.$CONF[url_base].$CONF[dir_modules]."document/pages/document_show.php?id=".$row[id].'">'.$row[filename].'.'.$row[ext].'</a>';
	} else return '<a href="'.$CONF[url_base].$CONF[dir_modules]."document/pages/document_show.php?id=".$row[id].'">'.$row[filename].'.'.$row[ext].'</a>';
	
}

?>