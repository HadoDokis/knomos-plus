<?
include("../../../framework/framework.php");


// Define page specific text for template
$PAGE[TXT_TITLE]="spesa di studio";
$PAGE[PAGE_INTITLE]="spesa di studio";

$PAGE[PAGE_PICTITLE]="money.png";

$module="prestazioni";

if ($_SESSION[mobile]==true){
	template_init(6); //mobile=6 - normale=2
} 
 else {
	template_init(); //mobile=6 - normale=2
}
	
$g0=(date("d"));
$m0=(date("m"));
$TY=(date("Y"));
$PY=date('Y',strtotime('-1 years'));
if ($m0>=1 && $m0<=3) 
{ 
$str_prima_nota=$CONF[url_base].$CONF[dir_modules]."prestazioni/pages/prima_nota_view.php?form_id=listprestaz&form_page=1&ref_id[text]=&ref_id[realval]=".$result[ref_id]."&action=del&id=".$_GET[id]."&ref_parent=".$result[ref_id]."&operatore[text]=".$_SESSION[user][codice]."&sp_studio=0&primanota=1&day_from[day]=01&day_from[month]=1&day_from[year]=".$TY."&day_to[day]=31&day_to[month]=03&day_to[year]=".$TY."&fltr=4trim";
}
else if ($m0>=4 && $m0<=6) 
{ 
$str_prima_nota=$CONF[url_base].$CONF[dir_modules]."prestazioni/pages/prima_nota_view.php?form_id=listprestaz&form_page=1&ref_id[text]=&ref_id[realval]=".$result[ref_id]."&action=del&id=".$_GET[id]."&ref_parent=".$result[ref_id]."&operatore[text]=".$_SESSION[user][codice]."&sp_studio=0&primanota=1&day_from[day]=01&day_from[month]=4&day_from[year]=".$TY."&day_to[day]=30&day_to[month]=06&day_to[year]=".$TY."&fltr=4trim";
}
else if ($m0>=7 && $m0<=9) 
{ 
$str_prima_nota=$CONF[url_base].$CONF[dir_modules]."prestazioni/pages/prima_nota_view.php?form_id=listprestaz&form_page=1&ref_id[text]=&ref_id[realval]=".$result[ref_id]."&action=del&id=".$_GET[id]."&ref_parent=".$result[ref_id]."&operatore[text]=".$_SESSION[user][codice]."&sp_studio=0&primanota=1&day_from[day]=01&day_from[month]=07&day_from[year]=".$TY."&day_to[day]=30&day_to[month]=09&day_to[year]=".$TY."&fltr=4trim";
}
else if ($m0>=10 && $m0<=12) 
{ 
$str_prima_nota=$CONF[url_base].$CONF[dir_modules]."prestazioni/pages/prima_nota_view.php?form_id=listprestaz&form_page=1&ref_id[text]=&ref_id[realval]=".$result[ref_id]."&action=del&id=".$_GET[id]."&ref_parent=".$result[ref_id]."&operatore[text]=".$_SESSION[user][codice]."&sp_studio=0&primanota=1&day_from[day]=01&day_from[month]=10&day_from[year]=".$TY."&day_to[day]=31&day_to[month]=12&day_to[year]=".$TY."&fltr=4trim";
}

ob_start();

$rs=$DB->Execute("SELECT * FROM $module WHERE id=".$_GET[id]);
if(!$result=$rs->FetchRow())
{
	$response[title]=FW_ERROR_NO_PERM;
	$response[text]=FW_ERROR_NO_PERM_TXT;
	$iserror=1;
	print draw_response($response);

	
} else {
	$PAGE_ELEMENT[PAGE][1][0][param]=$result[ref_id];

	
	if (check_perm_obj("pratiche",$result[ref_id],"r")) {
		insert_last_viewed($result[ref_id],"pratiche");
		$thisobj= load_fwobject("show","prestazioni",1);
		if($_SESSION[history]==0)
		{
			$thisobj["Fields"]["button_w"]=make_button("new_spesa_studio.php?id=".$_GET[id],FW_MODIFY);
		} else $thisobj["Fields"]["button_w"]=FW_MODIFY;
		$thisobj["Fields"]["button_d"]=make_button_del($str_prima_nota,FW_DELETE);
		
		print draw_object($thisobj,intval($_GET[id]),$module);
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
