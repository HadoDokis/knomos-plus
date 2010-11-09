<?
include("../../../framework/framework.php");
include("../functions.php");
include($CONF[path_base]."modules/pratiche/functions.php");

// Define page specific text for template
$PAGE[PAGE_PICTITLE]="ico_admin_med.gif";
$module="admin";
$PAGE[PAGE_INTITLE]=ADMIN_USER_ADD;
$PAGE[TXT_TITLE]=ADMIN_USER_ADD;

template_init();
template_define_elements();

ob_start();

if (check_perm_mod($module,"c")==1)
{
	$thisform= load_fwobject("form",$module,0);

	if (isset($_GET[id]) && $_POST[form_id]!= $thisform["name"])
	{

		$PAGE[PAGE_INTITLE]=ADMIN_USER_UPD;
		$PAGE[TXT_TITLE]=ADMIN_USER_UPD;
		$rs=$DB->Execute("SELECT * FROM ".$CONF[auth_db_table]." WHERE id=".$_GET[id]);
		$result=$rs->FetchRow();

		if ($result[ref_prat] > 0)
		{
			$rs_prat=$DB->Execute("SELECT * FROM pratiche WHERE id=".$result[ref_prat]);
			if ($rs_prat->RecordCount() >0)
			{
				$prat_user=$rs_prat->FetchRow();
				$result[ref_prat]="<b>".$prat_user[pr_codice]."</b>";
			} else $result[ref_prat]="";
		} else $result[ref_prat]="";

		$rsg=$DB->Execute("SELECT * FROM ".$CONF[auth_group_table]." WHERE userid=".$_GET[id]);

		while (!$rsg->EOF)
		{
			$g=$rsg->FetchRow();
			$gruppi[]=$g[groupid];
		}

		$result[gruppi]=$gruppi;

		$thisform[onpost]=str_replace("type::add","type::upd",$thisform[onpost]);
		$thisform[Fields][send][content]="submit||".ADMIN_USER_UPD."||";
		$thisform[Fields][ref_prat][title]=ADMIN_USER_PERSPRAT;
		$thisform[Fields][ref_prat][content]="htmltext||||";
		$response[title]=ADMIN_USER_UPD_DONE;
		$response[text]= ADMIN_USER_UPD_DONE_TXT."<br><br>".make_button("users_view.php",ADMIN_USER_BACK_LIST);

	} elseif (isset($_GET[id]))
	{
		$rs2=$DB->Execute("SELECT * FROM ".$CONF[auth_db_table]." WHERE id=".$_GET[id]);
		$result2=$rs2->FetchRow();
		if ($result2[ref_prat] > 0)
		{
			$rs_prat=$DB->Execute("SELECT * FROM pratiche WHERE id=".$result2[ref_prat]);
			if ($rs_prat->RecordCount() >0)
			{
				$prat_user=$rs_prat->FetchRow();
				$result2[ref_prat]="<b>".$prat_user[pr_codice]."</b>";
			} else $result2[ref_prat]="";
		} else $result2[ref_prat]="";

		$result=$_POST;
		$result[ref_prat]=$result2[ref_prat];
		$PAGE[PAGE_INTITLE]=ADMIN_USER_UPD;
		$PAGE[TXT_TITLE]=ADMIN_USER_UPD;
		$response[title]=ADMIN_USER_UPD_DONE;
		$response[text]= ADMIN_USER_UPD_DONE_TXT."<br><br>".make_button("users_view.php",ADMIN_USER_BACK_LIST);
		$thisform[onpost]=str_replace("type::add","type::upd",$thisform[onpost]);
		$thisform[Fields][send][content]="submit||".ADMIN_USER_UPD."||";
		$thisform[Fields][ref_prat][title]=ADMIN_USER_PERSPRAT;
		$thisform[Fields][ref_prat][content]="htmltext||".$result2[ref_prat]."||";

	} else {
		$PAGE[PAGE_INTITLE]=ADMIN_USER_ADD;
		$PAGE[TXT_TITLE]=ADMIN_USER_ADD;
		$response[title]=ADMIN_USER_ADD_DONE;
		$response[text]= ADMIN_USER_ADD_DONE_TXT."<br><br>".make_button("users_view.php",ADMIN_USER_BACK_LIST);
	}




	if ($_POST[form_id]==$thisform["name"])
	{	if(isset($_POST[form_page])) {$page=$_POST[form_page];}
	else $page=1;
	$error=check_form($thisform,$_POST,$page);
	if($error==1) {
		$manage=manage_post($thisform,$error,$_POST,$_GET[id]);
	} else print draw_form($thisform,$module,$error,$_POST,$page);
	if ($manage >= 1)
	{

		$rsg=$DB->Execute("DELETE FROM ".$CONF[auth_group_table]." WHERE userid=".$manage);
			
		if (is_array($_POST[gruppi]))
		{
			foreach($_POST[gruppi] as $gru)
			{
				$DB->Execute("INSERT INTO ".$CONF[auth_group_table]." SET groupid='$gru', userid='".$manage."'");
			}
		}
			
		if (!isset($_GET[id]) && $_POST[ref_prat]==1)
		{
			$rs_dupe=$DB->Execute("SELECT * FROM users WHERE nome='".$_POST[nome]."'");
			if ($rs_dupe->RecordCount() > 1)
			{
				$DB->Execute("INSERT INTO pratiche SET pr_codice='".make_nome_prat($_POST[nome]." ".$_POST[codice])."', pr_numero='".get_first_prat()."', pr_oggetto='".ADMIN_USER_PERSPRAT." ".$_POST[nome]."', pr_operatore='".$manage."', pr_data_ins=NOW(), pr_data_mod=NOW(), pr_criterio='MIN*1', permessi='U".$manage."=6666'");
			} else $DB->Execute("INSERT INTO pratiche SET pr_codice='".make_nome_prat($_POST[nome])."', pr_numero='".get_first_prat()."', pr_oggetto='".ADMIN_USER_PERSPRAT." ".$_POST[nome]."', pr_operatore='".$manage."', pr_data_ins=NOW(), pr_data_mod=NOW(), pr_criterio='MIN*1', permessi='U".$manage."=6666'");
			$pratid=mysql_insert_id();
			$DB->Execute("UPDATE users SET ref_prat=$pratid WHERE id=$manage");
		}

		print draw_response($response);
	}

	} else {
		print draw_form($thisform,$module,"",$result);
	}

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