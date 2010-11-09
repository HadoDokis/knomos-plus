<?
include("../../../framework/framework.php");


// Define page specific text for template
$PAGE[TXT_TITLE]=DOCUMENT_MENU_0;
$PAGE[PAGE_INTITLE]=DOCUMENT_MENU_0;
$PAGE[PAGE_PICTITLE]="ico_clienti_med.gif";
$module="document";

if ($_SESSION[mobile]==true){
	template_init(6); //mobile=6 - normale=2
} 
 else {
	template_init(); //mobile=6 - normale=2
}
	
//template_init(); //mobile=6 - desktop =()

ob_start();


if ($_GET[actdone]=="upd")
{
	$rspact[title]=DOCUMENT_UPD_DONE;
	print draw_response($rspact);	
} elseif ($_GET[actdone]=="add")
{
	$rspact[title]=DOCUMENT_ADD_DONE;
	print draw_response($rspact);	
}

	
	
	
	insert_last_viewed($_GET[id],$module);
	$myid=$_GET[id];
	
	$rs=$DB->Execute("SELECT * FROM $module WHERE id=".$_GET[id]);
	if(!$result=$rs->FetchRow())
	{
		$response[title]=FW_ERROR_NO_PERM;
		$response[text]=FW_ERROR_NO_PERM_TXT;
		$iserror=1;
		print draw_response($response);
	
		
	} else {
		if ($result[ref_id]!=0) {
			$rs2=$DB->Execute("SELECT * FROM $module WHERE id=".$result[ref_id]);
			if(!$result2=$rs2->FetchRow())
			{
				$response[title]=FW_ERROR_NO_PERM;
				$response[text]=FW_ERROR_NO_PERM_TXT;
				$iserror=1;
				print draw_response($response);
			
			} else {$result=$result2; $myid=$result[id]; $_GET[id]=$myid;}
		}
		
		if (check_perm_obj("pratiche",$result[ref_prat],"r") && isset($result[ref_prat])) {
			$thisobj= load_fwobject("show","document",0);
			
			
			// Button
			if (isset($result[ref_prat])){
				$PAGE_ELEMENT[PAGE][1][0][param]=$result[ref_prat];
				$thisobj["Fields"]["button_prat"]=make_button($CONF[url_base].$CONF[dir_modules]."pratiche/pages/pratiche_show.php?id=".$result[ref_prat],PRATICHE_PRAT);
				$thisobj["Fields"]["button_pres"]=make_button($CONF[url_base].$CONF[dir_modules]."prestazioni/pages/prestazioni_view.php?form_id=listprestaz&form_page=1&ref_id[text]=&ref_id[realval][]=".$result[ref_prat],PRESTAZIONI_TITLE);
				$thisobj["Fields"]["button_scad"]=make_button($CONF[url_base].$CONF[dir_modules]."calendar/pages/app_view.php?form_id=listcont&form_page=1&ref_prat[text]=&ref_prat[realval][]=".$result[ref_prat],PRATICHE_IMPEGN);
				$thisobj["Fields"]["button_doc"]=make_button($CONF[url_base].$CONF[dir_modules]."document/pages/documents_view.php?form_id=listdoc&form_page=1&ref_prat[text]=&ref_prat[realval][]=".$result[ref_prat],DOCUMENT_TITLE);
				$thisobj["Fields"]["button_dbox"]=make_button($CONF[url_base].$CONF[dir_modules]."document/pages/dropbox_view.php?form_id=listdoc&form_page=1&ref_prat[text]=&ref_prat[realval][]=".$result[ref_prat],DOCUMENT_TITLE_DROPBOX);

				$keymap[54]=$CONF[url_base].$CONF[dir_modules]."/pratiche/pages/pratiche_show.php?id=".$result[ref_prat];	
				$keymap[55]=$CONF[url_base].$CONF[dir_modules]."/prestazioni/pages/prestazioni_view.php?form_id=listprestaz&form_page=1&ref_id[text]=&ref_id[realval][]=".$result[ref_prat];
				$keymap[56]=$CONF[url_base].$CONF[dir_modules]."/calendar/pages/app_view.php?form_id=listcont&form_page=1&ref_prat[text]=&ref_prat[realval][]=".$result[ref_prat];
				$keymap[57]=$CONF[url_base].$CONF[dir_modules]."document/pages/documents_view.php?form_id=listdoc&form_page=1&ref_prat[text]=&ref_prat[realval][]=".$result[ref_prat];
				print set_js_keyhandler($keymap);
			} else {
				$thisobj["Fields"]["button_prat"]="";
				$thisobj["Fields"]["button_pres"]="";
				$thisobj["Fields"]["button_scad"]="";
				$thisobj["Fields"]["button_doc"]="";
			}
			
			// HISTORY
			$thislist= load_fwobject("lists","document",1);
			$thislist[sql_select].=$_GET[id];
			$rs_tmp=$DB->Execute($thislist[sql_select]);
			
	
			if ($result[ref_id]==0)
			{
				$rs_lock=$DB->Execute("SELECT * from $module WHERE (id=".$result[id]." or ref_id=".$result[id].") AND `lock`>0");
			} else $rs_lock=$DB->Execute("SELECT * from $module WHERE (id=".$result[ref_id]." or ref_id=".$result[ref_id].") AND `lock`>0");
			
			$thisobj["Fields"]["button_v"]='<input type="button" value="'.DOCUMENT_OPEN_WEB.'" class="bot-submit" onClick="newwin = window.open(\''.$CONF[url_base].$CONF[dir_upload].'document/'.$result[filename].'-'.$result[id].'-'.$result[version].'.'.$result[ext].'\',\'newwin\',\'left=0,top=0,screenX=0,screenY=0,width=800,height=600,resizable=yes,scrollbars=yes\'); newwin.resizeTo(screen.width,screen.height);">';
			$thisobj["Fields"]["button_w"]=FW_MODIFY;
			$thisobj["Fields"]["button_d"]=FW_DELETE;
	
	
			if ($rs_lock->RecordCount()==0)
			{
				$thisobj["Fields"]["button_v"]='<input type="button" value="'.DOCUMENT_OPEN_WEB.'" class="bot-submit" onClick="newwin = window.open(\''.$CONF[url_base].$CONF[dir_upload].'document/'.$result[filename].'-'.$result[id].'-'.$result[version].'.'.$result[ext].'\',\'newwin\',\'left=0,top=0,screenX=0,screenY=0,width=800,height=600,resizable=yes,scrollbars=yes\'); newwin.resizeTo(screen.width,screen.height);">';
				if($_SESSION[history]==0)
				{		
					$thisobj["Fields"]["button_w"]=make_button("mod_document.php?id=".$_GET[id],FW_MODIFY);
				} else $thisobj["Fields"]["button_w"]=FW_MODIFY;
				if($_SESSION["user"][admin]==1) {$thisobj["Fields"]["button_d"]=make_button_del($CONF[url_base].$CONF[dir_modules]."document/pages/documents_view.php?form_id=listdoc&form_page=1&ref_prat[text]=&ref_prat[realval][]=".$result[ref_prat]."&id=".$_GET[id]."&action=del",FW_DELETE);	} else $thisobj["Fields"]["button_d"]=FW_DELETE;

				if ($rs_tmp->RecordCount() > 0)
				{		
					$thisobj["Fields"]["history"]= draw_list($thislist,$module);
				} else $thisobj["Fields"]["history"]= '<b><center>'.DOCUMENT_NOHIST.'</center></b>';
			} else {
				
				$rs_user=$DB->Execute("SELECT * FROM ".$CONF[auth_db_table]." WHERE id=".$result[user_lock]);
				$thisuser=$rs_user->FetchRow();
				$thisobj["Fields"]["history"]= '<b><center>'.DOCUMENT_LOCKED.' '.$thisuser[nome].'</center></b>';
			}
			
			
			print draw_object($thisobj,$myid,$module);
		} else {
			$response[title]=FW_ERROR_NO_PERM;
			$response[text]=FW_ERROR_NO_PERM_TXT;
			$iserror=1;
			print draw_response($response);
		}	
	}
	

$PAGE[PAGE_CONTENT] = ob_get_contents();
ob_end_clean();
template_define_elements();

final_render();

?>
