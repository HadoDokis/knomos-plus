<?
ob_start();
include("../../../framework/framework.php");
include("../functions.php");

// Define page specific text for template
$PAGE[PAGE_PICTITLE]="ico_doc_01_med.gif";
$module="document";


if ($_SESSION[mobile]==true){
	template_init(6); //mobile=6 - normale=2
} 
 else {
	template_init(); //mobile=6 - normale=2
}
	
//template_init(); //mobile=6 - desktop =()


$thisform= load_fwobject("form","document",0);


if (isset($_GET[id]))
{
					

	$PAGE[PAGE_INTITLE]=DOCUMENT_UPD;
	$PAGE[TXT_TITLE]=DOCUMENT_UPD;

	$rsf = $DB->Execute("SELECT * FROM $module where id=".$_GET[id]);
	$curfile=$rsf->FetchRow();
	$PAGE_ELEMENT[PAGE][1][0][param]=$curfile[ref_prat];

/*	if (!check_perm_obj("pratiche",$_GET[pid],"w"))
	{ 
		$response[title]=FW_ERROR_NO_PERM;
		$response[text]=FW_ERROR_NO_PERM_TXT;
		$iserror=1;
		print draw_response($response);
	}
*/
}  


if ($iserror!=1){

	
	if (!isset($_GET[action]))
	{
		if (isset($_GET[title]))
		{ 
			$PAGE[PAGE_INTITLE]=DOCUMENT_UPD;
			$PAGE[TXT_TITLE]=DOCUMENT_UPD;
			$name = ereg_replace("[^0-9]","",$_GET['file']);
			$rs_insnew=$DB->Execute("INSERT INTO document SET operatore=".$_SESSION[fw_userid].", descr='".urldecode($_GET[title])."', version=1, ref_id=0, ref_orig=0, filename='".$name."', data=NOW(), ext='sxw', ref_prat=".$_GET[ref_prat]);
			$_GET[id]= mysql_insert_id();
			$more_get="&nonewver=1";
			$rsf = $DB->Execute("SELECT * FROM $module where id=".$_GET[id]);
			$curfile=$rsf->FetchRow();			
			if (!file_exists($CONF[path_base].$CONF[dir_upload].'export/cache/'.$name.'.sxw')) return false;
			copy($CONF[path_base].$CONF[dir_upload].'export/cache/'.$name.'.sxw', $CONF[path_base].$CONF[dir_upload]."document/".$name.'-'.$_GET[id]."-1.sxw");
		}



		$filename= put_tmp_file($_GET[id]);	
		//$response[text]= DOCUMENT_UPDATE_TEXT."<br><br>";

		if ($CONF[web_dav]==1 && $curfile[ext]=="sxw")
		{
			$response[text] .= '<h3>'.DOCUMENT_MOD_WEBDAV.'</h3><br>'.DOCUMENT_MOD_WEBDAV_TXT.'<br><input type="button" value="'.DOCUMENT_OPEN_WEBDAV.'" class="bot-submit" onClick="newwin = window.open(\'vnd.sun.star.webdav://'.str_replace("http://","",$CONF[url_base]).$CONF[dir_upload].$filename.'\',\'newwin\',\'left=0,top=0,screenX=0,screenY=0,width=800,height=600,resizable=yes,scrollbars=yes\'); newwin.resizeTo(screen.width,screen.height);"> &nbsp;&nbsp;&nbsp'.make_button("mod_document.php?id=".$_GET[id]."&action=upload&ext=".$curfile[ext]."$more_get",DOCUMENT_UPDATE_DOC).' &nbsp;&nbsp;&nbsp'.make_button("mod_document.php?id=".$_GET[id]."&action=cancel",FW_CANCEL).'<br><br><br>';
		}
			
		$response[text] .= '<h3>'.DOCUMENT_MOD_WEB.'</h3><br>'.DOCUMENT_MOD_WEB_TXT.'<br><input type="button" value="'.DOCUMENT_OPEN_WEB.'" class="bot-submit" onClick="newwin = window.open(\''.$CONF[url_base].$CONF[dir_upload].$filename.'\',\'newwin\',\'left=0,top=0,screenX=0,screenY=0,width=800,height=600,resizable=yes,scrollbars=yes\'); newwin.resizeTo(screen.width,screen.height);"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'.make_button("mod_document.php?id=".$_GET[id]."&action=cancel",FW_CANCEL);
		$response[text] .= '<br><br><form method="POST" enctype="multipart/form-data" action="mod_document.php?id='.$_GET[id].'&action=upload&ext='.$curfile[ext].$more_get.'" ><input type="file" name="fileupl"> &nbsp;&nbsp; <input class="bot-submit" type="submit" value="'.DOCUMENT_UPDATE_DOC.'"></form>';
		
		print draw_response($response);

	}  elseif ($_GET[action] == "cancel")
	{

		$filename=$curfile[filename].'-'.$curfile[id].'-'.$curfile[version].'.'.$curfile[ext];
		unlink ($CONF[path_base].$CONF[dir_upload].$filename);
		$rs_updold=$DB->Execute("UPDATE document SET `lock`=0, user_lock=0 WHERE id=".$_GET[id]);
		$rs_updusr=$DB->Execute("UPDATE ".$CONF[auth_db_table]." SET  `lock`=0 WHERE id=".$curfile[user_lock]);
		$_SESSION[user][lock]=0;
		$response[text]= DOCUMENT_UPDATE_CANCEL_TEXT;
		$response[text] .= '<br><br>'.make_button("document_show.php?id=".$_GET[id],DOCUMENT_BACK_SHOW);
		print draw_response($response);
	
	} 	elseif ($_GET[action]=="lock")
	{
		$filename=$curfile[filename].'-'.$curfile[id].'-'.$curfile[version].'.'.$curfile[ext];
		//$response[text]= DOCUMENT_UPDATE_TEXT.'<br><br>';
		
		if ($CONF[web_dav]==1 && $curfile[ext]=="sxw")
		{
			$response[text] .= '<h3>'.DOCUMENT_MOD_WEBDAV.'</h3><br>'.DOCUMENT_MOD_WEBDAV_TXT.'<br><input type="button" value="'.DOCUMENT_OPEN_WEBDAV.'" class="bot-submit" onClick="newwin = window.open(\'vnd.sun.star.webdav://'.str_replace("http://","",$CONF[url_base]).$CONF[dir_upload].$filename.'\',\'newwin\',\'left=0,top=0,screenX=0,screenY=0,width=800,height=600,resizable=yes,scrollbars=yes\'); newwin.resizeTo(screen.width,screen.height);"> &nbsp;&nbsp;&nbsp'.make_button("mod_document.php?id=".$_GET[id]."&action=upload&ext=".$curfile[ext]."$more_get",DOCUMENT_UPDATE_DOC).' &nbsp;&nbsp;&nbsp'.make_button("mod_document.php?id=".$_GET[id]."&action=cancel",FW_CANCEL).'<br><br><br>';
		}
			
		$response[text] .= '<h3>'.DOCUMENT_MOD_WEB.'</h3><br>'.DOCUMENT_MOD_WEB_TXT.'<br><input type="button" value="'.DOCUMENT_OPEN_WEB.'" class="bot-submit" onClick="newwin = window.open(\''.$CONF[url_base].$CONF[dir_upload].$filename.'\',\'newwin\',\'left=0,top=0,screenX=0,screenY=0,width=800,height=600,resizable=yes,scrollbars=yes\'); newwin.resizeTo(screen.width,screen.height);"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'.make_button("mod_document.php?id=".$_GET[id]."&action=cancel",FW_CANCEL);
		$response[text] .= '<br><br><form method="POST" enctype="multipart/form-data" action="mod_document.php?id='.$_GET[id].'&action=upload&ext='.$curfile[ext].$more_get.'" ><input type="file" name="fileupl"> &nbsp;&nbsp; <input class="bot-submit" type="submit" value="'.DOCUMENT_UPDATE_DOC.'"><hidden name="isupload" value="1"></form>';
		print draw_response($response);		
		
	} elseif  ($_GET[action]=="upload")
	{
		$_SESSION[user][lock]=0;
		//ADD HERE CHECK FOR FILE UPLOAD INSTEAD OF WEBDAV !!!!
		$filename=get_tmp_file($_GET[id],$_GET[nonewver]);
		header ("location: document_show.php?actdone=upd&id=".$_GET[id]);
		$response[text]= DOCUMENT_UPD_DONE_TXT;
		$response[text] .= '<br><br>'.make_button("document_show.php?id=".$_GET[id],DOCUMENT_BACK_SHOW);
		print draw_response($response);		

	}

}


$PAGE[PAGE_CONTENT] = ob_get_contents();
ob_end_clean();
template_define_elements();

final_render();

?>
