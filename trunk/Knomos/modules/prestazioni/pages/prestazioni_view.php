<?
include("../../../framework/framework.php");


// Define page specific text for template
$PAGE[TXT_TITLE]=PRESTAZIONI_MENU_0;
$PAGE[PAGE_INTITLE]=PRESTAZIONI_MENU_0;
$PAGE[PAGE_PICTITLE]="ico_tariffe_med.gif";
$module="prestazioni";

if ($_SESSION[mobile]==true){
	template_init(6); //mobile=6 - normale=2
} 
 else {
	template_init(); //mobile=6 - normale=2
}
	
//template_init(); //mobile=6 - desktop =()
ob_start();

if ($_GET[ref_id][realval][0]){
//Prende i dati della pratica
$rsP=$DB->Execute("SELECT * FROM pratiche WHERE id=".$_GET[ref_id][realval][0]);
$resultP=$rsP->FetchRow();
$curia=str_replace("'","&acute;",$resultP[pr_comp_desc]); 
$luogocuria=str_replace("'","&acute;",$resultP[pr_luogo_uff_giud]); 
$giudice=str_replace("'","&acute;",$resultP[pr_giudice]); 
$avversario=str_replace("'","&acute;",$resultP[pr_referral]); 
$nRuolo=str_replace("'","&acute;",$resultP[pr_nRuolo]);

//Prende i dati relativi al contributo unificato
$cu_valore=$resultP[pr_valore]; 
$cu_giud=$resultP[pr_comp_cod];
$cu_tipo=$resultP[pr_tipo];
//calcola il contributo
$c_un=CalcolaContributoUnificato($cu_valore, $cu_giud, $cu_tipo);
//FINE Prende i dati della pratica
}

if ($_GET[action]=="del" )
{
	if (check_perm_obj($module,$_GET[ref_parent],"d"))
	{
		if($DB->Execute("DELETE FROM $module WHERE id=".$_GET[id]))
		{
			log_event("D","prestazioni",$_GET[id]);
			$res_del[title]=FW_DEL_OK;
			print draw_response($res_del);
		} else {
			$res_del[title]=FW_DEL_KO;
			print draw_response($res_del);
		}
			
		
	} else {
		$res_del[title]=FW_ERROR_NO_PERM_DEL;
		print draw_response($res_del);
	}	
	
}


if ($_GET[actdone]=="upd")
{
	$rspact[title]=PRESTAZIONI_UPD_DONE;
	print draw_response($rspact);	
} elseif ($_GET[actdone]=="add")
{
	$rspact[title]=PRESTAZIONI_ADD_DONE;
	print draw_response($rspact);	
}



if (check_perm_mod($module,"r")==1)
{

	$thissearch= load_fwobject("search","prestazioni",0);
	
	//Check for parent Perm
	$perm_parent = perm_sql_read("%[PERM]%","pratiche");
	$perm_parent = str_replace ("permessi","p.permessi",$perm_parent);
	$perm_parent = str_replace ("id","p.id",$perm_parent);
	$true_sql="SELECT m.* FROM prestazioni m, pratiche p WHERE $perm_parent AND p.id=m.ref_id ";
	
	
	if ($_GET[form_id]==$thissearch[form][name] ){
		$error=check_form($thissearch[form],$_GET,$page);
		if($error==1) {	
			if (count($_GET[ref_id][realval]) ==1 && strlen($_GET[ref_id][realval]) > 0) {
				 $PAGE_ELEMENT[PAGE][1][0][param]=$_GET[ref_id][realval][0];
				 if($_SESSION[history]==0)
				 {
				 		$PAGE[PAGE_INTITLE].= " &nbsp;&nbsp;<span > ( <a href=\"".$CONF[url_base].$CONF[dir_modules]."prestazioni/pages/new_prestazione.php?ref_id=".$_GET[ref_id][realval][0]."&contr_unif=".$c_un."\">".PRATICHE_ADD_PRES."</a> )";
				 }
			}
			print draw_form($thissearch[form],$module,$error,$_GET);
			print menage_search($thissearch[search]);

		} else print draw_form($thissearch[form],$module,$error,$_GET);
		
		} else 
		{print draw_form($thissearch[form],$module,"",$_GET);
		 //print menage_search($thissearch[search]);
		}
} else {
	$response[title]=FW_ERROR_NO_PERM;
	$response[text]=FW_ERROR_NO_PERM_TXT;
	$iserror=1;
	print draw_response($response);
}


$PAGE[PAGE_CONTENT] = ob_get_contents();
ob_end_clean();
template_define_elements();

final_render();

?>
