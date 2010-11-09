<?
ob_start();
include("../../../framework/framework.php");

// Define page specific text for template
$PAGE[PAGE_PICTITLE]="money.png";
//$module="studio";
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
$str_prima_nota="prima_nota_view.php?form_id=listprestaz&form_page=1&ref_id[realval][]=".$result[ref_id]."&id_prat=".$result[ref_id]."&operatore[text]=".$_SESSION[user][codice]."&sp_studio=0&primanota=1&day_from[day]=01&day_from[month]=1&day_from[year]=".$TY."&day_to[day]=31&day_to[month]=3&day_to[year]=".$TY."&fltr=1trim";
}
else if ($m0>=4 && $m0<=6) 
{ 
$str_prima_nota="prima_nota_view.php?form_id=listprestaz&form_page=1&ref_id[realval][]=".$result[ref_id]."&id_prat=".$result[ref_id]."&operatore[text]=".$_SESSION[user][codice]."&sp_studio=0&primanota=1&day_from[day]=04&day_from[month]=1&day_from[year]=".$TY."&day_to[day]=30&day_to[month]=6&day_to[year]=".$TY."&fltr=2trim";
}
else if ($m0>=7 && $m0<=9) 
{ 
$str_prima_nota="prima_nota_view.php?form_id=listprestaz&form_page=1&ref_id[realval][]=".$result[ref_id]."&id_prat=".$result[ref_id]."&operatore[text]=".$_SESSION[user][codice]."&sp_studio=0&primanota=1&day_from[day]=07&day_from[month]=1&day_from[year]=".$TY."&day_to[day]=30&day_to[month]=9&day_to[year]=".$TY."&fltr=3trim";
}
else if ($m0>=10 && $m0<=12) 
{ 
$str_prima_nota="prima_nota_view.php?form_id=listprestaz&form_page=1&ref_id[realval][]=".$result[ref_id]."&id_prat=".$result[ref_id]."&operatore[text]=".$_SESSION[user][codice]."&sp_studio=0&primanota=1&day_from[day]=01&day_from[month]=10&day_from[year]=".$TY."&day_to[day]=31&day_to[month]=12&day_to[year]=".$TY."&fltr=4trim";
}


//template_init(); //mobile=6 - desktop =()


$thisform= load_fwobject("form","prestazioni",1);

if (!isset($_GET[app_id]))
{
	unset ($thisform[Fields][keepscad]);
	unset ($thisform[Fields][continuaIns]);
}

if (isset($_GET[id]) && $_POST[form_id]!= $thisform["name"])
{
	
	$PAGE[PAGE_INTITLE]=STUDIO_ADD_SPESA;
	$PAGE[TXT_TITLE]=STUDIO_ADD_SPESA;
	$rs=$DB->Execute("SELECT * FROM $module WHERE id=".$_GET[id]);
	$result=$rs->FetchRow();
	$PAGE_ELEMENT[PAGE][1][0][param]=$result[ref_id];

	if (check_perm_obj("pratiche",$result[ref_id],"w"))
	{ 
		insert_last_viewed($result[ref_id],"pratiche");
		$rs2=$DB->Execute("SELECT * FROM pratiche WHERE id=".$result[ref_id]);
		$result_prat=$rs2->FetchRow();
		$thisform[Fields][title_pratica][title]=PRESTAZIONI_REF_PRATICA;
		$thisform[Fields][title_pratica][content]="text||".$result_prat[pr_codice]."||wid::40;;disab::1";
		$thisform[Fields][ref_id][content]="hidden||".$result[ref_id]."||";
		$thisform[Fields][valore_pratica][content]="hidden||".$result_prat[pr_valore]."||";
		$thisform[Fields][tipo_pratica][content]="hidden||".$result_prat[pr_comp_cod]."||";
		
		////CONTINUA AD INSERIRE NUOVE PRESTAZIONI
		//$thisform[Fields][continuaIns][title]=PRESTAZIONI_CONTINUA_INS_TIT;
		//$thisform[Fields][continuaIns][content]="checkbox||||opt::".PRESTAZIONI_CONTINUA_INS."=>1;;size::1";

		if($result[criterio]=="") $result[criterio]=$result_prat[pr_criterio];
			
		$thisform[onpost]=str_replace("type::add","type::upd",$thisform[onpost]);
		$thisform[Fields][send][content]="submit||".PRESTAZIONI_UPD."||";
		$response[title]=PRESTAZIONI_UPD_DONE;



		$response[text]= PRESTAZIONI_UPD_DONE_TXT."<br><br>".make_button($str_prima_nota,PRESTAZIONI_BACK_LIST);
	} else {
		$response[title]=FW_ERROR_NO_PERM;
		$response[text]=FW_ERROR_NO_PERM_TXT;
		$iserror=1;
		print draw_response($response);
	}

} elseif (isset($_GET[app_id]) && $_POST[form_id]!= $thisform["name"]) //CONVERTI IN PRESTAZIONE
{
	
	$PAGE[PAGE_INTITLE]=STUDIO_ADD_SPESA; //CONVERTI IN PRESTAZIONE
	$PAGE[TXT_TITLE]=STUDIO_ADD_SPESA;
   
	$rs=$DB->Execute(perm_sql_read("SELECT *, m.note as notem FROM calendar m, pratiche p WHERE %[PERM]% AND p.id=m.ref_prat  AND m.id=".$_GET[app_id],"calendar"));
	if ($result_cal=$rs->FetchRow())
	{ 
		insert_last_viewed($result_cal[ref_id],"pratiche");
		$PAGE_ELEMENT[PAGE][1][0][param]=$result_cal[ref_prat];
		//$result[ref_id]=$result_cal[ref_prat];
		//$CONF[key]=$result_cal[ref_prat];
		$rs2=$DB->Execute("SELECT * FROM pratiche WHERE id=".$result_cal[ref_prat]);
		$result_prat=$rs2->FetchRow();
		$thisform[Fields][title_pratica][title]=PRESTAZIONI_REF_PRATICA;
		$thisform[Fields][title_pratica][content]="text||".$result_prat[pr_codice]."||wid::40;;disab::1";
		$thisform[Fields][ref_id][content]="hidden||".$result_prat[id]."||";
		$thisform[Fields][valore_pratica][content]="hidden||".$result_prat[pr_valore]."||";
		$thisform[Fields][tipo_pratica][content]="hidden||".$result_prat[pr_comp_cod]."||";
		

		////CONTINUA AD INSERIRE NUOVE PRESTAZIONI
		//$thisform[Fields][continuaIns][title]=PRESTAZIONI_CONTINUA_INS_TIT;
		//$thisform[Fields][continuaIns][content]="checkbox||||opt::".PRESTAZIONI_CONTINUA_INS."=>1;;size::1";
		
		if($result[criterio]=="") $result[criterio]=$result_prat[pr_criterio];
		$result[codice]=$result_cal[codice];
		$result[testo]=$result_cal[title];
		$result[note]=$result_cal[notem];
		$result[operatore]=$_SESSION[fw_userid];
				
		$thisform[onpost]=str_replace("type::add","type::upd",$thisform[onpost]);
		$thisform[Fields][send][content]="submit||".PRESTAZIONI_ADD."||";
		$response[title]=PRESTAZIONI_ADD_DONE;
		$response[text]= PRESTAZIONI_ADD_DONE_TXT."<br><br>".make_button($str_prima_nota,PRESTAZIONI_BACK_LIST);

	} else {
		$response[title]=FW_ERROR_NO_PERM;
		$response[text]=FW_ERROR_NO_PERM_TXT;
		$iserror=1;
		print draw_response($response);
	}

} 
elseif (isset($_GET[app_id]) && $_POST[form_id]== $thisform["name"]) //Nuova prestazione DA CONVERSIONE SENZA CODICI
{
	
	$PAGE[PAGE_INTITLE]=STUDIO_ADD_SPESA."  2";
	$PAGE[TXT_TITLE]=STUDIO_ADD_SPESA;
   $ad="add";
	$rs=$DB->Execute(perm_sql_read("SELECT * FROM calendar m, pratiche p WHERE %[PERM]% AND p.id=m.ref_prat  AND m.id=".$_GET[app_id],"calendar"));
	if ($result_cal=$rs->FetchRow())
	{ 
		insert_last_viewed($result_cal[ref_id],"pratiche");
		$PAGE_ELEMENT[PAGE][1][0][param]=$result_cal[ref_prat];
		//$result[ref_id]=$result_cal[ref_prat];

		$rs2=$DB->Execute("SELECT * FROM pratiche WHERE id=".$result_cal[ref_prat]);
		$result_prat=$rs2->FetchRow();

		$thisform[Fields][title_pratica][title]=PRESTAZIONI_REF_PRATICA;
		$thisform[Fields][title_pratica][content]="text||".$result_prat[pr_codice]."||wid::40;;disab::1";
		$thisform[Fields][ref_id][content]="hidden||".$result_prat[id]."||";
		$thisform[Fields][valore_pratica][content]="hidden||".$result_prat[pr_valore]."||";
		$thisform[Fields][tipo_pratica][content]="hidden||".$result_prat[pr_comp_cod]."||";
		//
		////CONTINUA AD INSERIRE NUOVE PRESTAZIONI
		//$thisform[Fields][continuaIns][title]=PRESTAZIONI_CONTINUA_INS_TIT;
		//$thisform[Fields][continuaIns][content]="checkbox||||opt::".PRESTAZIONI_CONTINUA_INS."=>1;;size::1";


		if($result[criterio]=="") $result[criterio]=$result_prat[pr_criterio];
				
		//$thisform[onpost]=str_replace("type::add","type::upd",$thisform[onpost]);
		$thisform[Fields][send][content]="submit||".PRESTAZIONI_ADD."||";
		$response[title]=PRESTAZIONI_ADD_DONE;
		$response[text]= PRESTAZIONI_ADD_DONE_TXT."<br><br>".make_button($str_prima_nota,PRESTAZIONI_BACK_LIST)." &nbsp;&nbsp;&nbsp; ".make_button($CONF[url_base].$CONF[dir_modules]."calendar/pages/app_view.php?form_id=listcont&form_page=1&ref_prat[text]=&ref_prat[realval][]=".$result[ref_id],CALENDAR_BACK_LIST) ;
	} else {
		$response[title]=FW_ERROR_NO_PERM;
		$response[text]=FW_ERROR_NO_PERM_TXT;
		$iserror=1;
		print draw_response($response);
	}

} elseif (isset($_GET[id]))
{
	if (check_perm_obj("pratiche",$_POST[ref_id],"w"))  //UPDATE SENZA CODICI
	{ 
		$ad="upd";
		$result=$_POST;
		$PAGE_ELEMENT[PAGE][1][0][param]=$result[ref_id];
		$PAGE[PAGE_INTITLE]=STUDIO_ADD_SPESA;
		$PAGE[TXT_TITLE]=STUDIO_ADD_SPESA;
		$response[title]=PRESTAZIONI_UPD_DONE;
		$response[text]= PRESTAZIONI_UPD_DONE_TXT."<br><br>".make_button($str_prima_nota,PRESTAZIONI_BACK_LIST);
		$thisform[onpost]=str_replace("type::add","type::upd",$thisform[onpost]);
		$thisform[Fields][title_pratica][title]=PRESTAZIONI_REF_PRATICA;
		$thisform[Fields][title_pratica][content]="text||".$_POST[title_pratica]."||wid::40;;disab::1";
		$thisform[Fields][ref_id][content]="hidden||".$_POST[ref_id]."||";
		$thisform[Fields][valore_pratica][content]="hidden||".$_POST[valore_pratica]."||";
		$thisform[Fields][tipo_pratica][content]="hidden||".$_POST[tipo_pratica]."||";
		
		$thisform[Fields][send][content]="submit||".PRESTAZIONI_UPD."||";
		////CONTINUA AD INSERIRE NUOVE PRESTAZIONI
		//$thisform[Fields][continuaIns][title]=PRESTAZIONI_CONTINUA_INS_TIT;
		//$thisform[Fields][continuaIns][content]="checkbox||||opt::".PRESTAZIONI_CONTINUA_INS."=>1;;size::1";

	} else {
		$response[title]=FW_ERROR_NO_PERM;
		$response[text]=FW_ERROR_NO_PERM_TXT;
		$iserror=1;
		print draw_response($response);
	}

} elseif (isset($_GET[ref_id])  && $_POST[form_id]!= $thisform["name"]) {
//NUOVA PRESTAZ QUESTA E' QUELLA NORMALE


	$PAGE[PAGE_INTITLE]=STUDIO_ADD_SPESA;
	$PAGE[TXT_TITLE]=STUDIO_ADD_SPESA;
	$PAGE_ELEMENT[PAGE][1][0][param]=$_GET[ref_id];


	if (check_perm_obj("pratiche",$_GET[ref_id],"w"))
	{ 

		insert_last_viewed($_GET[ref_id],"pratiche");

		$rs2=$DB->Execute("SELECT * FROM pratiche WHERE id=".$_GET[ref_id]);
		$result_prat=$rs2->FetchRow();
		
		$thisform[Fields][title_pratica][title]=PRESTAZIONI_REF_PRATICA;
		$thisform[Fields][title_pratica][content]="text||".$result_prat[pr_codice]."||wid::40;;disab::1";
		$thisform[Fields][ref_id][content]="hidden||".$result_prat[id]."||";
		$result[ref_id]=$result_prat[id];
		$thisform[Fields][valore_pratica][content]="hidden||".$result_prat[pr_valore]."||";
		$thisform[Fields][tipo_pratica][content]="hidden||".$result_prat[pr_comp_cod]."||";
		
		$CONF[key]=$_GET[ref_id];

		if($result[criterio]=="") $result[criterio]=$result_prat[pr_criterio];
		//CONTINUA AD INSERIRE NUOVE PRESTAZIONI
		//$thisform[Fields][continuaIns][title]=PRESTAZIONI_CONTINUA_INS_TIT;
		//$thisform[Fields][continuaIns][content]="checkbox||||opt::".PRESTAZIONI_CONTINUA_INS."=>1;;size::1";

		$response[title]=PRESTAZIONI_ADD_DONE;
		$response[text]= PRESTAZIONI_ADD_DONE_TXT."<br><br>".make_button($str_prima_nota,PRESTAZIONI_BACK_LIST);


 	} else {
		$response[title]=FW_ERROR_NO_PERM;
		$response[text]=FW_ERROR_NO_PERM_TXT;
		$iserror=1;
		print draw_response($response);
	}
}  elseif (isset($_GET[ref_id]) && $_POST[form_id]== $thisform["name"]) {
//NUOVA PRESTAZ 
	$PAGE[PAGE_INTITLE]=STUDIO_ADD_SPESA."  3";///."  3" DA AGGIUNTA SENZA CODICI
	$PAGE[TXT_TITLE]=STUDIO_ADD_SPESA;
	$PAGE_ELEMENT[PAGE][1][0][param]=$_GET[ref_id];
  $ad="upd";
	if (check_perm_obj("pratiche",$_GET[ref_id],"w"))
	{ 

		$rs2=$DB->Execute("SELECT * FROM pratiche WHERE id=".$_GET[ref_id]);
		$result_prat=$rs2->FetchRow();
	
		$thisform[Fields][title_pratica][title]=PRESTAZIONI_REF_PRATICA;
		$thisform[Fields][title_pratica][content]="text||".$result_prat[pr_codice]."||wid::40;;disab::1";
		$thisform[Fields][ref_id][content]="hidden||".$result_prat[id]."||";
		$thisform[Fields][valore_pratica][content]="hidden||".$result_prat[pr_valore]."||";
		$thisform[Fields][tipo_pratica][content]="hidden||".$result_prat[pr_comp_cod]."||";
		
		////CONTINUA AD INSERIRE NUOVE PRESTAZIONI
		//$thisform[Fields][continuaIns][title]=PRESTAZIONI_CONTINUA_INS_TIT;
		//$thisform[Fields][continuaIns][content]="checkbox||||opt::".PRESTAZIONI_CONTINUA_INS."=>1;;size::1";

		if($result[criterio]=="") $result[criterio]=$result_prat[pr_criterio];

		$response[title]=PRESTAZIONI_ADD_DONE;
		$response[text]= PRESTAZIONI_ADD_DONE_TXT."<br><br>".make_button($str_prima_nota,PRESTAZIONI_BACK_LIST);


 	} else {
		$response[title]=FW_ERROR_NO_PERM;
		$response[text]=FW_ERROR_NO_PERM_TXT;
		$iserror=1;
		print draw_response($response);
	}


}else {
	$PAGE[PAGE_INTITLE]=STUDIO_ADD_SPESA."  4";//."  4" PRESTAZIONE SENZA PRATICA
	$PAGE[TXT_TITLE]=STUDIO_ADD_SPESA;
	$ad="add";
	$response[title]=PRESTAZIONI_ERROR_NO_PARENT;
	$response[text]=PRESTAZIONI_ERROR_NO_PARENT_TXT;
	$iserror=1;
	print draw_response($response);
}

if ($iserror!=1){


	if ($_POST[form_id]==$thisform["name"])
	{	if(isset($_POST[form_page])) {$page=$_POST[form_page];}
		else $page=1;
		$error=check_form($thisform,$_POST,$page);
		if($error==1) {
			$_POST[spese_imponibili]=str_replace(",",".",$_POST[spese_imponibili]);
			$_POST[spese_non_imponibili]=str_replace(",",".",$_POST[spese_non_imponibili]);
			$_POST[diritti]=str_replace(",",".",$_POST[diritti]);
			$_POST[onorari]=str_replace(",",".",$_POST[onorari]);
			$_POST[on_onorari]=str_replace(",",".",$_POST[on_onorari]);
			$_POST[on_utente]=str_replace(",",".",$_POST[on_utente]);
			$_POST[acconti]=str_replace(",",".",$_POST[acconti]);
			$_POST[anticipazioni]=str_replace(",",".",$_POST[anticipazioni]);
			$manage=manage_post($thisform,$error,$_POST,$_GET[id]);
		} else print draw_form($thisform,$module,$error,$_POST,$page);
		if ($manage==1) {
			$page=($_POST[form_page]+1);
			print draw_form($thisform,$module,$error,$_POST,$page);
		}
		elseif ($manage > 1)
		{
			print draw_response($response);
			if (isset($_GET[app_id]) && $_POST[keepscad] !=1)
			{
				$DB->Execute("DELETE FROM calendar WHERE id=".$_GET[app_id]);
			}
//$g0=(date("d"));
//$m0=(date("m"));
//$TY=(date("Y"));
//$PY=date('Y',strtotime('-1 years'));
if ($m0>=1 && $m0<=3) 
{ 
$str_prima_nota1="prima_nota_view.php?actdone=$ad&form_id=listprestaz&form_page=1&ref_id[realval][]=".$_POST[ref_id]."&id_prat=".$_POST[ref_id]."&operatore[text]=".$_SESSION[user][codice]."&sp_studio=0&primanota=1&day_from[day]=01&day_from[month]=1&day_from[year]=".$TY."&day_to[day]=31&day_to[month]=3&day_to[year]=".$TY."&fltr=1trim";
}
else if ($m0>=4 && $m0<=6) 
{ 
$str_prima_nota1="prima_nota_view.php?actdone=$ad&form_id=listprestaz&form_page=1&ref_id[realval][]=".$_POST[ref_id]."&id_prat=".$_POST[ref_id]."&operatore[text]=".$_SESSION[user][codice]."&sp_studio=0&primanota=1&day_from[day]=04&day_from[month]=1&day_from[year]=".$TY."&day_to[day]=30&day_to[month]=6&day_to[year]=".$TY."&fltr=2trim";
}
else if ($m0>=7 && $m0<=9) 
{ 
$str_prima_nota1="prima_nota_view.php?actdone=$ad&form_id=listprestaz&form_page=1&ref_id[realval][]=".$_POST[ref_id]."&id_prat=".$_POST[ref_id]."&operatore[text]=".$_SESSION[user][codice]."&sp_studio=0&primanota=1&day_from[day]=07&day_from[month]=1&day_from[year]=".$TY."&day_to[day]=30&day_to[month]=9&day_to[year]=".$TY."&fltr=3trim";
}
else if ($m0>=10 && $m0<=12) 
{ 
$str_prima_nota1="prima_nota_view.php?actdone=$ad&form_id=listprestaz&form_page=1&ref_id[realval][]=".$_POST[ref_id]."&id_prat=".$_POST[ref_id]."&operatore[text]=".$_SESSION[user][codice]."&sp_studio=0&primanota=1&day_from[day]=01&day_from[month]=10&day_from[year]=".$TY."&day_to[day]=31&day_to[month]=12&day_to[year]=".$TY."&fltr=4trim";
}

			header("location: ".$str_prima_nota1);
			//header("location: prima_nota_view.php?actdone=$ad&form_id=listprestaz&form_page=1&ref_id[realval][]=".$_POST[ref_id]."&id_prat=".$_POST[ref_id]);
			

			die();
		}
		
	} else {
		print draw_form($thisform,$module,"",$result);
	}
}


$PAGE[PAGE_CONTENT] = ob_get_contents();
ob_end_clean();
template_define_elements();

final_render();


?>

