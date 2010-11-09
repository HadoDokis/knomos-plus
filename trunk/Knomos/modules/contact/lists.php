<?
$LISTS[contact][0]["sql_select"]="SELECT * FROM contact p WHERE %[PERM]%";
$LISTS[contact][0]["options"]="perpage::50||defordfield::nome||defordtype::asc||exp::0";
//$LISTS[contact][0]["multilevel"]="id||ref_contatto||0";
$LISTS[contact][0]["titles"]=" ||".CONTACT_CODE."||".CONTACT_NAME."::ord||".CONTACT_PHONE."::ord||".CONTACT_TYPER."::ord";
$LISTS[contact][0]["fields"]="note::func=>contact_note_pic||codice::linkid=>".$CONF[url_base].$CONF[dir_modules]."contact/pages/contact_show.php?id=%ID%||nome::linkid=>".$CONF[url_base].$CONF[dir_modules]."contact/pages/contact_show.php?id=%ID%||telefono||tipo::(1=>".CONTACT_TYPE_AVVR.";;2=>".CONTACT_TYPE_CLIE.";;3=>".CONTACT_TYPE_COLL.";;4=>".CONTACT_TYPE_CONS.";;5=>".CONTACT_TYPE_CORR.";;6=>".CONTACT_TYPE_FORN.";;7=>".CONTACT_TYPE_AVVO.")";
//$LISTS[contact][0]["action"]="id;;".FW_SHOW.";;contact_show.php?id=%ID%||id;;".FW_MODIFY.";;new_contact.php?id=%ID%||id;;".FW_DELETE.";;".$CONF[url_base].$CONF[dir_modules]."contact/pages/contacts_view.php?action=del&id=%ID%";



$LISTS[contact][1]["sql_select"]="SELECT * FROM contact p WHERE %[PERM]%";
$LISTS[contact][1]["options"]="perpage::50||defordfield::nome||defordtype::asc||exp::0";
$LISTS[contact][1]["multilevel"]="id||ref_contatto||0";
$LISTS[contact][1]["titles"]=CONTACT_NAME."||".CONTACT_PHONE;
$LISTS[contact][1]["fields"]="nome::linkid=>".$CONF[url_base].$CONF[dir_modules]."contact/pages/contact_show.php?id=%ID%||telefono";
//$LISTS[contact][1]["action"]="id;;".FW_SHOW.";;".$CONF[url_base].$CONF[dir_modules]."contact/pages/contact_show.php?id=%ID%";


$LISTS[contact][2]["sql_select"]="SELECT * FROM contact WHERE %[PERM]%";
$LISTS[contact][2]["options"]="perpage::99999||defordfield::nome||defordtype::asc||exp::0";
$LISTS[contact][2]["multilevel"]="id||ref_contatto||0";
$LISTS[contact][2]["titles"]=FW_CODE."||".CONTACT_NAME."||".CONTACT_EMAIL."||".CONTACT_PHONE."||".CONTACT_ADDRESS."||".CONTACT_CITY."||".CONTACT_CAP."||".CONTACT_COD_FIS."||".CONTACT_PIVA;
$LISTS[contact][2]["fields"]="codice||nome||email||telefono||indirizzo||citta||cap||cod_fis||piva";


$LISTS[contact][3]["sql_select"]="SELECT * FROM contact WHERE %[PERM]%";
$LISTS[contact][3]["options"]="perpage::30||defordfield::codice||defordtype::asc||exp::0";
$LISTS[contact][3]["multilevel"]="id||ref_contatto||0";
$LISTS[contact][3]["titles"]=CONTACT_CODE."||".FW_NAME;
$LISTS[contact][3]["fields"]="codice::func=>contact_user_tselect||nome::func=>contact_user_tselect";
//$LISTS[contact][3]["action"]="codice;;".FW_INSERT.";;Javascript:  insertTselect('".$_GET[formname]."','".$_GET[fieldname]."','%ID%');";

$LISTS[contact][4]["sql_select"]="SELECT * FROM contact WHERE %[PERM]%";
$LISTS[contact][4]["options"]="perpage::30||defordfield::codice||defordtype::asc||exp::0";
$LISTS[contact][4]["multilevel"]="id||ref_contatto||0";
$LISTS[contact][4]["titles"]=CONTACT_CODE."||".FW_NAME;
$LISTS[contact][4]["fields"]="codice::func=>contact_user_mselect||nome::func=>contact_user_mselect";




function contact_note_pic($row)
{
	if (strlen($row[note])>0)
	{
		 $output="<img src=\"%[IMAGE_GPATH]%ico/ico_note_min.gif\"> ";
	}	
	
	return $output;
}

function contact_user_mselect($row,$show)
{
	GLOBAL $DB,$CONF;
	
	return '<a href="javascript:parent.msel_add(parent.document.'.$_GET[formname].'.'.$_GET[fieldname].', \''.$row[codice].'\', \''.$row[id].'\'); parent.closeLayerWindow();">'.$row[$show].'</a>';
}


function contact_user_tselect($row,$show)
{
	GLOBAL $DB,$CONF;
	
	return "<a href=\"Javascript:  insertTselect('".$_GET[formname]."','".$_GET[fieldname]."','".$row[codice]."');\">".$row[$show]."</a>";
}


?>
