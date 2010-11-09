<?


$LISTS[prestazioni][0]["sql_select"]="SELECT * FROM prestazioni ";
$LISTS[prestazioni][0]["options"]="perpage::50||defordfield::data||defordtype::asc||defordfield2::ref_id||defordtype2::asc||defordfield3::incr||defordtype3::asc||exp::0";
$LISTS[prestazioni][0]["titles"]="".FW_DATE."::ord||".FW_TEXT."||".PRESTAZIONI_REF_PRATICA."||".FW_ACTION;
$LISTS[prestazioni][0]["fields"]="data||testo||ref_id::[SELECT * FROM pratiche WHERE id='%ID%';;pr_codice]||#action#";
$LISTS[prestazioni][0]["action"]="id;;".FW_SHOW.";;prestazione_show.php?id=%ID%||id;;".FW_MODIFY.";;new_prestazione.php?id=%ID%";

/*
$LISTS[prestazioni][1]["sql_select"]="SELECT * FROM pratiche WHERE %[PERM]%";
$LISTS[prestazioni][1]["options"]="perpage::8||defordfield::pr_codice||defordtype::asc||exp::0";
$LISTS[prestazioni][1]["titles"]=PRATICHE_CODE."||".FW_TYPE."||".PRATICHE_CUSTOMER."||".PRATICHE_VALUE."||".FW_ACTION;
$LISTS[prestazioni][1]["fields"]="pr_codice||pr_tipo::[SELECT * FROM INT_pratiche_tipo WHERE codice='%ID%';;ttp_desc]||pr_cliente||pr_valore||#action#";
$LISTS[prestazioni][1]["action"]="id;;".FW_SHOW.";;pratiche_show.php?id=%ID%||id;;".FW_MODIFY.";;new_pratiche.php?id=%ID%";
*/


?>