<?
include("../../../framework/framework.php");

// Define page specific text for template
$PAGE[PAGE_PICTITLE]="ico_admin_med.gif";
$module="admin";
	$PAGE[PAGE_INTITLE]=ADMIN_LOCK;
	$PAGE[TXT_TITLE]=ADMIN_LOCK;


template_init();
template_define_elements();

ob_start();

if ($_GET[action]=="del" )
{

	if ($_SESSION[user][admin]==1)
	{
		if($DB->Execute("DELETE FROM system_lock" ))
		{
			$res_del[title]=FW_DEL_OK;
			$res_del[text]=ADMIN_LOCK_DEL_OK;
			print draw_response($res_del);
		} else {
			$res_del[title]=FW_DEL_KO;
			print draw_response($res_del);
		}
		
	} else {
		$res_del[title]=FW_ERROR_NO_PERM_DEL;
		print draw_response($res_del);
	}	
	
} else {

	$thisform= load_fwobject("form",$module,7);
	
		$rs=$DB->Execute("SELECT * FROM system_lock order by id desc");
		if($rs->RecordCount() >0){
			$resultz=$rs->FetchRow();
			$PAGE[PAGE_INTITLE].= " &nbsp;&nbsp;&nbsp;".make_button("system_lock.php?action=del",ADMIN_LOCK_REMOVE);
		}
	
	if (isset($resultz) && $_POST[form_id]!= $thisform["name"])
	{
		
	
		$result=$resultz;
		
		$thisform[onpost]=str_replace("type::add","type::upd",$thisform[onpost]);
		$thisform[Fields][send][content]="submit||".ADMIN_LOCK_UPD."||";
		$response[title]=ADMIN_LOCK_UPD_DONE;
	
	
	} elseif (isset($resultz))
	{ 
		$result=$_POST;
	
		$response[title]=ADMIN_LOCK_UPD_DONE;
		$response[text]= ADMIN_LOCK_UPD_DONE_TXT."<br><br>";
		$thisform[onpost]=str_replace("type::add","type::upd",$thisform[onpost]);
		$thisform[Fields][send][content]="submit||".ADMIN_LOCK_UPD."||";
	
	} else {
	
		$response[title]=ADMIN_LOCK_ADD_DONE;
		$response[text]= ADMIN_LOCK_ADD_DONE_TXT."<br><br>";
		$thisform[Fields][send][content]="submit||".ADMIN_LOCK_ADD."||";
	}
	
	
	
	
	if ($_POST[form_id]==$thisform["name"])
	{	if(isset($_POST[form_page])) {$page=$_POST[form_page];}
		else $page=1;
		$error=check_form($thisform,$_POST,$page);
		if($error==1) {
			$manage=manage_post($thisform,$error,$_POST,$_GET[id]);
		} else { print draw_form($thisform,$module,$error,$_POST,$page); }
		if ($manage > 0)
		{
			print draw_response($response);
		}
		
	} else {
		print draw_form($thisform,$module,"",$result);
		
	}
}


$PAGE[PAGE_CONTENT] = ob_get_contents();
ob_end_clean();

final_render();

?>