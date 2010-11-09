<?


$SHOW[prestazioni][0]["object_template"]="prestazione.tpl";
$SHOW[prestazioni][0]["sql_select"]="SELECT * FROM prestazioni WHERE id=%[ID]%";
$SHOW[prestazioni][0]["options"]="perm::0";
$SHOW[prestazioni][0]["Fields"]["data"]=FW_DATE;
$SHOW[prestazioni][0]["Fields"]["testo"]=FW_TEXT;
$SHOW[prestazioni][0]["Fields"]["codice"]=PRESTAZIONI_CODE;
$SHOW[prestazioni][0]["Fields"]["ref_id"]=PRESTAZIONI_REF_PRATICA."::[SELECT * FROM pratiche WHERE id='%ID%';;pr_codice]";
$SHOW[prestazioni][0]["Fields"]["operatore"]=PRESTAZIONI_USER;
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
$SHOW[prestazioni][0]["Fields"]["onorari"]=PRESTAZIONI_COST_ONORAR;
$SHOW[prestazioni][0]["Fields"]["acconti"]=PRESTAZIONI_ACCONT;
$SHOW[prestazioni][0]["Fields"]["anticipazioni"]=PRESTAZIONI_ANTIC;
$SHOW[prestazioni][0]["Fields"]["nota_pres"]="<a href=\"".$CONF[url_base].$CONF[dir_modules]."pratiche/pages/note.php?type=B&id=".$_GET[id]."\">".PRESTAZIONI_NOTE."</a>";
$SHOW[prestazioni][0]["Fields"]["button1"]=make_button("prestazioni_view.php",PRESTAZIONI_BACK_LIST);
$SHOW[prestazioni][0]["Fields"]["button2"]=make_button("new_prestazione.php?id=".$_GET[id],PRESTAZIONI_UPD);

?>