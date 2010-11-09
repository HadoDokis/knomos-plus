<?
include("../../../framework/framework.php");


// Define page specific text for template
$newCont="&nbsp;&nbsp;<span > ( <a target=\"\" href=\"#\" onclick=\"javascript:NewPraticaDaContatto()\">".CONTACT_NEW_PRAT."</a> )";
$PAGE[TXT_TITLE]=CONTACT_SCHEDA;
$PAGE[PAGE_INTITLE]=CONTACT_SCHEDA.$newCont ;
$PAGE[PAGE_PICTITLE]="ico_clienti_med.gif";
$module="contact";

if ($_SESSION[mobile]==true){
	template_init(6); //mobile=6 - normale=2
} 
 else {
	template_init(); //mobile=6 - normale=2
}
	
//template_init(); //mobile=6 - desktop =()
template_define_elements();

ob_start();

if ($_GET[actdone]=="upd")
{
	$rspact[title]=CONTACT_UPD_DONE;
	print draw_response($rspact);	
} elseif ($_GET[actdone]=="add")
{
	$rspact[title]=CONTACT_ADD_DONE;
	print draw_response($rspact);	
}


if (check_perm_mod($module,"r")==1)
{
	$thisobj= load_fwobject("show","contact",0);
	
	$rs=$DB->Execute(perm_sql_read("SELECT * FROM pratiche p WHERE %[PERM]% AND (pr_ref_idcliente=".$_GET[id]
					." OR pr_ref_idavvr=".$_GET[id]
					." OR pr_ref_idbenefic=".$_GET[id]
					." OR pr_ref_idaltri=".$_GET[id]
					.")","pratiche"));

	if ($rs->RecordCount() >0)
	{
		$thisobj["Fields"]["button_sitcont"]=make_button_clean(PRATICHE_SITCONT,'onClick="loadLayerWindow(\''.$CONF[url_base].$CONF[dir_modules].'contact/pages/contact_sitcont.php?id='.$_GET[id].'\');"');
	
		$thislist=load_fwobject("lists","pratiche",0);
		$thislist["sql_select"]="SELECT * FROM pratiche p WHERE %[PERM]% AND (pr_ref_idcliente=".$_GET[id]
					." OR pr_ref_idavvr=".$_GET[id]
					." OR pr_ref_idbenefic=".$_GET[id]
					." OR pr_ref_idaltri=".$_GET[id]
					.")";
		$thisobj["Fields"]["prat_col"]='  <tr>
                <th colspan="2" width="100%" align="center"> <b>'.CONTACT_PRAT_RELATED.'</b></th>
             </tr>
              <tr>
                <td width="100%" colspan="2" onMouseOver="this.className=\'pratica-over-sub\'" onMouseOut="this.className=\'null\'">'.draw_list($thislist,"pratiche").'</td>
      			   </tr>';
	} else {$thisobj["Fields"]["prat_col"]=""; 	$thisobj["Fields"]["button_sitcont"]="";}


	$rs2=$DB->Execute(perm_sql_read("SELECT * FROM calendar p WHERE %[PERM]% AND (ref_cont=".$_GET[id].")","calendar"));

	if ($rs2->RecordCount() >0)
	{
		$restlist=load_fwobject("lists","calendar",6);
		$restlist["sql_select"]="SELECT * FROM calendar p WHERE %[PERM]% AND (ref_cont=".$_GET[id].")";

		$thisobj["Fields"]["pro_restr"]='  <tr>
                <th colspan="2" width="100%" align="center"> <b>'.CONTACT_PROVV_RESTR.'</b></th>
             </tr>
              <tr>
                <td width="100%" colspan="2" onMouseOver="this.className=\'pratica-over-sub\'" onMouseOut="this.className=\'null\'">'.draw_list($restlist,"calendar").'</td>
      			   </tr>';
	} else {$thisobj["Fields"]["pro_restr"]=""; }
	
	print draw_object($thisobj,intval($_GET[id]),$module);
} else {
	$response[title]=FW_ERROR_NO_PERM;
	$response[text]=FW_ERROR_NO_PERM_TXT;
	$iserror=1;
	print draw_response($response);
}


$PAGE[PAGE_CONTENT] = ob_get_contents();
ob_end_clean();

final_render();

?>
