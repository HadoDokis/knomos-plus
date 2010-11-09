<?


$SHOW[document][0]["object_template"]="document.tpl";
$SHOW[document][0]["sql_select"]="SELECT * FROM document WHERE id=%[ID]%";
$SHOW[document][0]["options"]="perm::0";
$SHOW[document][0]["Fields"]["data"]=FW_DATE."::date";
$SHOW[document][0]["Fields"]["descr"]=FW_DESC;
$SHOW[document][0]["Fields"]["ref_prat"]=DOCUMENT_REF_PRATICA."::[SELECT * FROM pratiche WHERE id='%ID%';;pr_codice]";
$SHOW[document][0]["Fields"]["operatore"]=DOCUMENT_OPER."::[SELECT * FROM ".$CONF[auth_db_table]." WHERE id='%ID%';;nome]";
$SHOW[document][0]["Fields"]["note"]=FW_NOTE;
$SHOW[document][0]["Fields"]["version"]=DOCUMENT_VERSION;
$SHOW[document][0]["Fields"]["doc_hist"]=DOCUMENT_HISTORY;
$SHOW[document][0]["Fields"]["document"]=DOCUMENT_TITLE;

$SHOW[document][0]["Fields"]["button1"]=make_button("prestazioni_view.php",PRESTAZIONI_BACK_LIST);
$SHOW[document][0]["Fields"]["button2"]=make_button("new_prestazione.php?id=".$_GET[id],PRESTAZIONI_UPD);

?>