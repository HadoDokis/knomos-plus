<?
include("../../../framework/framework.php");
include("../functions.php");
// Define page specific text for template
$PAGE[PAGE_PICTITLE]="ico_doc_01_med.gif";
$module="document";


if ($CONF[knomos_mobile]==true){
	template_init(6); //mobile=6 - normale=2
} 
 else {
	template_init(); //mobile=6 - normale=2
}
	
//template_init(); //mobile=6 - desktop =()

ob_start();
$thisform= load_fwobject("form","document",0);



if (isset($_GET[pid]) && $_POST[form_id]!= $thisform["name"])
{
	
	$PAGE[PAGE_INTITLE]=DOCUMENT_CREATE;
	$PAGE[TXT_TITLE]=DOCUMENT_CREATE;
	$PAGE_ELEMENT[PAGE][1][0][param]=$_GET[pid];
	if (check_perm_obj("pratiche",$_GET[pid],"w"))
	{ 
		
		$rs=$DB->Execute("SELECT * FROM pratiche WHERE id=".$_GET[pid]);
		$result=$rs->FetchRow();
		$results[ref_prat][text]=$result[pr_codice];
		$thisform[Fields][send][content]="submit||".DOCUMENT_ADD."||";
	} else {
		$response[title]=FW_ERROR_NO_PERM;
		$response[text]=FW_ERROR_NO_PERM_TXT;
		$iserror=1;
		print draw_response($response);
	}

}  elseif (isset($_GET[pid]) && $_POST[form_id]== $thisform["name"]) {

	$PAGE[PAGE_INTITLE]=DOCUMENT_CREATE;
	$PAGE[TXT_TITLE]=DOCUMENT_CREATE;
	$PAGE_ELEMENT[PAGE][1][0][param]=$_GET[pid];

	if (check_perm_obj("pratiche",$_GET[pid],"w"))
	{ 
		
		$response[title]=DOCUMENT_ADD_DONE;
		//$response[text]= DOCUMENT_ADD_DONE_TXT;
	//	$response[text] .= "<br><br>".make_button("documents_view.php",DOCUMENT_BACK_LIST);
 	} else {
		$response[title]=FW_ERROR_NO_PERM;
		$response[text]=FW_ERROR_NO_PERM_TXT;
		$iserror=1;
		print draw_response($response);
	}


} elseif ($_POST[form_id]== $thisform["name"]) {
	$PAGE[PAGE_INTITLE]=DOCUMENT_CREATE;
	$PAGE[TXT_TITLE]=DOCUMENT_CREATE;

	$response[title]=DOCUMENT_ADD_DONE;
	//$response[text]= DOCUMENT_ADD_DONE_TXT;

} else {
	$PAGE[PAGE_INTITLE]=DOCUMENT_CREATE;
	$PAGE[TXT_TITLE]=DOCUMENT_CREATE;
}


if ($iserror!=1){


	if ($_POST[form_id]==$thisform["name"])
	{	
		if(isset($_POST[form_page])) {$page=$_POST[form_page];}
		else $page=1;

		$error=check_form($thisform,$_POST,$page);
		
		if($error==1) {			
			$manage=manage_post($thisform,$error,$_POST,$_GET[id]);
		} else print draw_form($thisform,$module,$error,$_POST,$page);
		
				
	
		if ($manage > 0)
		{
			insert_last_viewed($manage,$module);
			if ($_POST["template"][0] !=0)
			{
				$ext_cur="sxw";
				$fname=document_create($_POST,$manage,$_POST["template"][0],$module);
			} elseif (file_exists($_FILES["file"]['tmp_name'])) {
				
				copy($_FILES["file"]['tmp_name'],$CONF[path_base].$CONF[dir_upload].$module."/".$_POST["filename"].'-'.$manage."-1.".get_ext($_FILES["file"][name]));
				$fname=$_POST["filename"].'-'.$manage."-1.".get_ext($_FILES["file"][name]);
				$DB->Execute("UPDATE document SET ext='".get_ext($_FILES["file"][name])."' WHERE id=$manage");
				$ext_cur=get_ext($_FILES["file"][name]);
			}
			
			$curfile[ext]=$ext_cur;
			$curfile[filename]=$fname;

		$filename= put_tmp_file($manage);	
		//$response[text]= DOCUMENT_UPDATE_TEXT."<br><br>";
		
		if ($CONF[web_dav]==1 && $curfile[ext]=="sxw")
		{
			$response[text] .= '<h3>'.DOCUMENT_MOD_WEBDAV.'</h3><br>'.DOCUMENT_MOD_WEBDAV_TXT.'<br><input type="button" value="'.DOCUMENT_OPEN_WEBDAV.'" class="bot-submit" onClick="newwin = window.open(\'vnd.sun.star.webdav://'.str_replace("http://","",$CONF[url_base]).$CONF[dir_upload].$filename.'\',\'newwin\',\'left=0,top=0,screenX=0,screenY=0,width=800,height=600,resizable=yes,scrollbars=yes\'); newwin.resizeTo(screen.width,screen.height);"> &nbsp;&nbsp;&nbsp'.make_button("mod_document.php?id=".$manage."&action=upload&ext=".$curfile[ext]."$more_get",DOCUMENT_UPDATE_DOC).' &nbsp;&nbsp;&nbsp'.make_button("mod_document.php?id=".$manage."&action=cancel",FW_CANCEL).'<br><br><br>';
		}
			
		$response[text] .= '<h3>'.DOCUMENT_MOD_WEB.'</h3><br>'.DOCUMENT_MOD_WEB_TXT.'<br><input type="button" value="'.DOCUMENT_OPEN_WEB.'" class="bot-submit" onClick="newwin = window.open(\''.$CONF[url_base].$CONF[dir_upload].$filename.'\',\'newwin\',\'left=0,top=0,screenX=0,screenY=0,width=800,height=600,resizable=yes,scrollbars=yes\'); newwin.resizeTo(screen.width,screen.height);"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'.make_button("mod_document.php?id=".$manage."&action=cancel",FW_CANCEL);
		$response[text] .= '<br><br><form method="POST" enctype="multipart/form-data" action="mod_document.php?id='.$manage.'&action=upload&ext='.$curfile[ext].$more_get.'" ><input type="file" name="fileupl"> &nbsp;&nbsp; <input class="bot-submit" type="submit" value="'.DOCUMENT_UPDATE_DOC.'"><hidden name="isupload" value="1"></form>';

		print draw_response($response);
		}
		
	} else {
		print draw_form($thisform,$module,"",$results);
	}
}


$PAGE[PAGE_CONTENT] = ob_get_contents();
ob_end_clean();
template_define_elements();


final_render();

?>
