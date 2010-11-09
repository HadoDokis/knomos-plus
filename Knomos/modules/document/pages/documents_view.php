<?
include("../../../framework/framework.php");
include("../functions.php");

// Define page specific text for template
$PAGE[TXT_TITLE]=DOCUMENT_MENU_0;
$PAGE[PAGE_INTITLE]=DOCUMENT_MENU_0;
$PAGE[PAGE_PICTITLE]="ico_doc_01_med.gif";
$module="document";

if ($_SESSION[mobile]==true){
	template_init(6); //mobile=6 - normale=2
} 
 else {
	template_init(); //mobile=6 - normale=2
}
	
//template_init(); //mobile=6 - desktop =()
ob_start();



if ($_GET[action]=="del" )
{

	$rs=$DB->Execute("SELECT * FROM document where id=".$_GET[id]);
	$thisfile=$rs->FetchRow();
	
	if (check_perm_obj("pratiche",$thisfile[ref_prat],"d"))
	{
		if($DB->Execute("DELETE FROM $module WHERE id=".$_GET[id]))
		{
			$PAGE_ELEMENT[PAGE][1][0][param]=$thisfile[ref_prat];
			$filename=$thisfile[filename].'-'.$thisfile[id].'-'.$thisfile[version].'.'.$thisfile[ext];
			if (file_exists($CONF[path_base].$CONF[dir_upload].'document/'.$filename))
			{
				unlink ($CONF[path_base].$CONF[dir_upload].'document/'.$filename);
				if ($thisfile[version] > 1) {
					if ($thisfile[ref_id] == 0) {
						$rs_old=$DB->Execute("SELECT * FROM document WHERE ref_id=".$thisfile[id]." order by version desc");
						if ($rs_old->RecordCount() > 0)
						{
							$older=$rs_old->FetchRow();
							$rs_upd1=$DB->Execute("UPDATE document set ref_id=0 WHERE id=".$older[id]);
							$rs_upd1=$DB->Execute("UPDATE document set ref_id=".$older[id]." WHERE ref_id=".$thisfile[id]);
						}
						
					}
				}
			}
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



if (check_perm_mod($module,"r")==1)
{

	$thissearch= load_fwobject("search","document",0);
	
	//Check for parent Perm
	$perm_parent = perm_sql_read("%[PERM]%","pratiche");
	$perm_parent = str_replace ("permessi","p.permessi",$perm_parent);
	$perm_parent = str_replace ("id","p.id",$perm_parent);
	$true_sql="SELECT m.* FROM document m, pratiche p WHERE $perm_parent AND p.id=m.ref_id ";
	
	
	if ($_GET[form_id]==$thissearch[form][name] ){
		$error=check_form($thissearch[form],$_GET,$page);
		if($error==1) {	
			
			if (count($_GET[ref_prat][realval]) ==1 && strlen($_GET[ref_prat][realval]) > 0) {
				$PAGE_ELEMENT[PAGE][1][0][param]=$_GET[ref_prat][realval][0];
				$PAGE[PAGE_INTITLE].= " &nbsp;&nbsp;<span > ( <a href=\"".$CONF[url_base].$CONF[dir_modules]."document/pages/new_document.php?pid=".$_GET[ref_prat][realval][0]."\">".PRATICHE_ADD_DOC."</a> )</span>";
			}
			
			
			print draw_form($thissearch[form],$module,$error,$_GET);
			if (strlen($_GET[testo]) > 4)
			{
				$resfile=searchDocuments($_GET[testo]);
				if (count($resfile)==0)
				{$_GET[testo]="";} else $_GET[testo]=$resfile;
			} else $_GET[testo]="";
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
