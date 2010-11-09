<?
if ($CONF[UsaCentralino]==true){$zero="0";} else{$zero="";}
$ipTel=$_SESSION[user][telefonoip];

$SHOW[contact][0]["object_template"]="contact.tpl";
$SHOW[contact][0]["sql_select"]="SELECT * FROM contact p WHERE %[PERM]% AND id=%[ID]%";
$SHOW[contact][0]["options"]="perm::1";
$SHOW[contact][0]["Fields"]["codice"]=CONTACT_CODE;
$SHOW[contact][0]["Fields"]["nome"]=CONTACT_NAME;
$SHOW[contact][0]["Fields"]["indirizzo"]=CONTACT_ADDRESS;
$SHOW[contact][0]["Fields"]["cap"]=CONTACT_CAP;
$SHOW[contact][0]["Fields"]["citta"]=CONTACT_CITY;
$SHOW[contact][0]["Fields"]["country"]=CONTACT_COUNTRY."::[SELECT * FROM INT_country WHERE id='%ID%';;country]";
if ($CONF[UsaGmail]==true)
{
$par="'%[EMAIL]%', '".$CONF[gmail_url_used]."'";
$gmail='<a href="javascript:ApriGmailDaContatto('.$par.')" class="pratica-resalt-01"><img src="%[IMAGE_GPATH]%ico/gmail.png" width="16" height="16" border="0" align="absmiddle"></a>  ';
}
else {$gmail="";}
$SHOW[contact][0]["Fields"]["email"]=$gmail.CONTACT_EMAIL;
if ($CONF[UsaGmail]==true)
{
$par="'%[EMAIL1]%', '".$CONF[gmail_url_used]."'";
$gmail='<a href="javascript:ApriGmailDaContatto('.$par.')" class="pratica-resalt-01"><img src="%[IMAGE_GPATH]%ico/gmail.png" width="16" height="16" border="0" align="absmiddle"></a>  ';
}
else {$gmail="";}
$SHOW[contact][0]["Fields"]["email1"]=$gmail.CONTACT_EMAIL1;
if ($CONF[UsaGmail]==true)
{
$par="'%[EMAIL2]%', '".$CONF[gmail_url_used]."'";
$gmail='<a href="javascript:ApriGmailDaContatto('.$par.')" class="pratica-resalt-01"><img src="%[IMAGE_GPATH]%ico/gmail.png" width="16" height="16" border="0" align="absmiddle"></a>  ';
}
else {$gmail="";}
$SHOW[contact][0]["Fields"]["email2"]=$gmail.CONTACT_EMAIL2;
$SHOW[contact][0]["Fields"]["fax"]=CONTACT_FAX;
$SHOW[contact][0]["Fields"]["fax1"]=CONTACT_FAX;
if($CONF[UsaTelefonoIP]==true)
{$SHOW[contact][0]["Fields"]["telefono"]="<a target='blank' href='".$ipTel."?NUMBER=".$zero."%[TELEFONO]%'>%[TELEFONO]%</a>";}
else
{$SHOW[contact][0]["Fields"]["telefono"]="%[TELEFONO]%";}
if($CONF[UsaTelefonoIP]==true)
{$SHOW[contact][0]["Fields"]["telefono2"]="<a target='blank' href='".$ipTel."?NUMBER=".$zero."%[TELEFONO2]%'>%[TELEFONO2]%</a>";}
else
{$SHOW[contact][0]["Fields"]["telefono2"]="%[TELEFONO2]%";}
if($CONF[UsaTelefonoIP]==true)
{$SHOW[contact][0]["Fields"]["telefono3"]="<a target='blank' href='".$ipTel."?NUMBER=".$zero."%[TELEFONO3]%'>%[TELEFONO3]%</a>";}
else
{$SHOW[contact][0]["Fields"]["telefono3"]="%[TELEFONO3]%";}
if($CONF[UsaTelefonoIP]==true)
{$SHOW[contact][0]["Fields"]["telefono4"]="<a target='blank' href='".$ipTel."?NUMBER=".$zero."%[TELEFONO4]%'>%[TELEFONO4]%</a>";}
else
{$SHOW[contact][0]["Fields"]["telefono4"]="%[TELEFONO4]%";}

if($CONF[UsaTelefonoIP]==true)
{$SHOW[contact][0]["Fields"]["mobile"]="<a target='blank' href='".$ipTel."?NUMBER=".$zero."%[MOBILE]%'>%[MOBILE]%</a>";}
else{$SHOW[contact][0]["Fields"]["mobile"]="%[MOBILE]%";}
if($CONF[UsaTelefonoIP]==true)
{$SHOW[contact][0]["Fields"]["mobile1"]="<a target='blank' href='".$ipTel."?NUMBER=".$zero."%[MOBILE1]%'>%[MOBILE1]%</a>";}
else{$SHOW[contact][0]["Fields"]["mobile1"]="%[MOBILE1]%";}
if($CONF[UsaTelefonoIP]==true)
{$SHOW[contact][0]["Fields"]["mobile2"]="<a target='blank' href='".$ipTel."?NUMBER=".$zero."%[MOBILE2]%'>%[MOBILE2]%</a>";}
else{$SHOW[contact][0]["Fields"]["mobile2"]="%[MOBILE2]%";}
if($CONF[UsaTelefonoIP]==true)
{$SHOW[contact][0]["Fields"]["mobile3"]="<a target='blank' href='".$ipTel."?NUMBER=".$zero."%[MOBILE3]%'>%[MOBILE3]%</a>";}
else{$SHOW[contact][0]["Fields"]["mobile3"]="%[MOBILE3]%";}
//SKYPE
//$SHOW[contact][0]["Fields"]["skype"]="<a target='blank' href='skype:%[SKYPE]%?call'>%[SKYPE]%</a>";
$SHOW[contact][0]["Fields"]["skype"]="%[SKYPE]%";

if($CONF[UsaDbox]==true)
{
$SHOW[contact][0]["Fields"]["sharedfolder"]="%[SHAREDFOLDER]%";
$St1=$CONF[dbox_url_used_contatto]; // Definita in Config.php
$StUrl="'".$St1."%[SHAREDFOLDER]%','%[SHAREDFOLDER]%'";
$dBox='<a href="javascript: loadLayerWindow('.$StUrl.')" class="pratica-resalt-01"><img src="%[IMAGE_GPATH]%ico/dropbox_logo_home.png" width="16" height="16" border="0" align="absmiddle"></a> ';
$SHOW[contact][0]["Fields"]["sharedfolder"]=$dBox.CONTACT_SHARED_FOLDER;
}
else
{$SHOW[contact][0]["Fields"]["sharedfolder"]="%[SHAREDFOLDER]%";
$SHOW[contact][0]["Fields"]["sharedfolder"]=CONTACT_SHARED_FOLDER;
}

$SHOW[contact][0]["Fields"]["accountm"]=CONTACT_ACCOUNT."::[SELECT * FROM users WHERE id='%ID%';;nome]";
$SHOW[contact][0]["Fields"]["mansione"]=CONTACT_ROLE;
$SHOW[contact][0]["Fields"]["tipo"]=CONTACT_TYPER."::(1=>".CONTACT_TYPE_AVVR."||2=>".CONTACT_TYPE_CLIE."||3=>".CONTACT_TYPE_COLL."||4=>".CONTACT_TYPE_CONS."||5=>".CONTACT_TYPE_CORR."||6=>".CONTACT_TYPE_FORN."||7=>".CONTACT_TYPE_AVVO.")";
$SHOW[contact][0]["Fields"]["tipo_contatto"]=CONTACT_TYPE."::(0=>".CONTACT_ALT_PERSON."||1=>".CONTACT_ALT_COMPANY."||2=>".CONTACT_ALT_PUBLIC."||3=>".CONTACT_ALT_NOPROF."||4=>".CONTACT_ALT_PROFES.")";
$SHOW[contact][0]["Fields"]["ref_contatto"]=CONTACT_REF_CONTACT."::[SELECT * FROM contact WHERE id='%ID%';;nome]";
$SHOW[contact][0]["Fields"]["stato"]="";
$SHOW[contact][0]["Fields"]["leg_rap"]=CONTACT_LEG_RAP;
$SHOW[contact][0]["Fields"]["cod_fis"]=CONTACT_COD_FIS;
$SHOW[contact][0]["Fields"]["piva"]=CONTACT_PIVA;
$SHOW[contact][0]["Fields"]["comp_data"]=CONTACT_COMPANY_DATA;
$SHOW[contact][0]["Fields"]["iscr_ccia"]=CONTACT_ISCR_CCIAA;
$SHOW[contact][0]["Fields"]["iscr_trib"]=CONTACT_ISCR_TRIB;
$SHOW[contact][0]["Fields"]["luogo"]=CONTACT_PLACE;
$SHOW[contact][0]["Fields"]["data"]=FW_DATE."::date";
$SHOW[contact][0]["Fields"]["note"]=FW_NOTE;

$SHOW[contact][0]["Fields"]["prat_related"]=CONTACT_PRAT_RELATED;
$SHOW[contact][0]["Fields"]["provv_rest"]=CONTACT_PROVV_RESTR;


$SHOW[contact][0]["Fields"]["button1"]=make_button("contacts_view.php",CONTACT_BACK_LIST);
$SHOW[contact][0]["Fields"]["button2"]=make_button("new_contact.php?id=".$_GET[id],CONTACT_UPD_CONTACT);
$SHOW[contact][0]["Fields"]["button3"]=make_button_del("contacts_view.php?action=del&id=".$_GET[id],FW_DELETE);


$SHOW[contact][1]["object_template"]="contact_sitcont.tpl";
$SHOW[contact][1]["Fields"]["codice"]=PRATICHE_CODE;
$SHOW[contact][1]["Fields"]["nome"]=PRATICHE_CODE;
$SHOW[contact][1]["Fields"]["simp"]=PRATICHE_SIMP;
$SHOW[contact][1]["Fields"]["snimp"]=PRATICHE_SNIMP;
$SHOW[contact][1]["Fields"]["dir"]=PRATICHE_DIR;
$SHOW[contact][1]["Fields"]["onor"]=PRATICHE_ONOR;
$SHOW[contact][1]["Fields"]["onor_or"]=PRATICHE_ONOR_OR;
$SHOW[contact][1]["Fields"]["onor_ut"]=PRATICHE_ONOR_UT;
$SHOW[contact][1]["Fields"]["acco"]=PRATICHE_ACCO;
$SHOW[contact][1]["Fields"]["anti"]=PRATICHE_ANTI;
$SHOW[contact][1]["Fields"]["subt1"]=PRATICHE_SUBT;
$SHOW[contact][1]["Fields"]["subt2"]=PRATICHE_SUBT;
$SHOW[contact][1]["Fields"]["subt3"]=PRATICHE_SUBT;
$SHOW[contact][1]["Fields"]["subm"]=PRATICHE_SUBT;
$SHOW[contact][1]["Fields"]["subf"]=PRATICHE_TOBILL;
$SHOW[contact][1]["Fields"]["pr_cliente"]=PRATICHE_CUSTOMER;
$SHOW[contact][1]["Fields"]["pr_oggetto"]=PRATICHE_SUBJ;
$SHOW[contact][1]["Fields"]["pr_valore"]=PRATICHE_VALUE;
$SHOW[contact][1]["Fields"]["pr_fido"]=PRATICHE_FIDO;
$SHOW[contact][1]["Fields"]["billem"]=PRATICHE_BILLEM;
$SHOW[contact][1]["Fields"]["fattem"]=PRATICHE_FATTEM;
$SHOW[contact][1]["Fields"]["tot_prats"]=CONTACT_TOT_PRATS;
$SHOW[contact][1]["Fields"]["tot_prests"]=CONTACT_TOT_PRESTS;

?>
