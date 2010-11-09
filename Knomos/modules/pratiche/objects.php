<?

function pratiche_element_1()
{
	if (check_perm_mod("pratiche","r")==1)
	{
		$thislist= load_fwobject("lists","pratiche",1);
		//print_r ($thislist);
		$output=draw_list($thislist,"pratiche");
		return $output;

	} else return "";
}

function pratiche_element_2($ref_prat="")
{
	GLOBAL $DB,$CONF;
	
	if ($ref_prat=="") return "";//originale; la riga seguente serve per visualizzare la pratica con ref_prat=""
	//if ($ref_prat=="") $ref_prat=$CONF[id_studio];
	$rs_prat=$DB->Execute("SELECT * FROM pratiche WHERE id=".$ref_prat);
	$res_prat=$rs_prat->FetchRow();


	

if ($_SESSION[mobile]==true){
		$output='
			<div  class="col-shortcuts">
	    		<a id="NOMEPRAT" href="'.$CONF[url_base].$CONF[dir_modules].'pratiche/pages/pratiche_show.php?id='.$ref_prat.'" class="col-shortcuts-tit"><img src="%[IMAGE_GPATH]%ico/ico_prat_peq.gif" width="16" height="16" border="0" align="absmiddle">'.$res_prat[pr_codice].'</a>
			</div>
			';
	} 
else {

	if($ref_prat==$CONF[id_studio])
	{
$g0=(date("d"));
$m0=(date("m"));
$TY=(date("Y"));
$PY=date('Y',strtotime('-1 years'));
if ($m0>=1 && $m0<=3) 
{ 
$str_prima_nota='
<a href="'.$CONF[url_base].$CONF[dir_modules].'prestazioni/pages/prima_nota_view.php?form_id=listprestaz&form_page=1&ref_id[text]=&ref_id[realval][]=&operatore[text]='.$_SESSION[user][codice].'&sp_studio=0&primanota=1&day_from[day]=01&day_from[month]=1&day_from[year]='.$TY.'&day_to[day]=31&day_to[month]=3&day_to[year]='.$TY.'&fltr=1trim" class="col-shortcuts-link">'."Prima nota"."</a>";
}
else if ($m0>=4 && $m0<=6) 
{ 
$str_prima_nota='
<a href="'.$CONF[url_base].$CONF[dir_modules].'prestazioni/pages/prima_nota_view.php?form_id=listprestaz&form_page=1&ref_id[text]=&ref_id[realval][]=&operatore[text]='.$_SESSION[user][codice].'&sp_studio=0&primanota=1&day_from[day]=01&day_from[month]=4&day_from[year]='.$TY.'&day_to[day]=30&day_to[month]=6&day_to[year]='.$TY.'&fltr=2trim" class="col-shortcuts-link">'."Prima nota"."</a>";
}
else if ($m0>=7 && $m0<=9) 
{ 
$str_prima_nota='
<a href="'.$CONF[url_base].$CONF[dir_modules].'prestazioni/pages/prima_nota_view.php?form_id=listprestaz&form_page=1&ref_id[text]=&ref_id[realval][]=&operatore[text]='.$_SESSION[user][codice].'&sp_studio=0&primanota=1&day_from[day]=07&day_from[month]=1&day_from[year]='.$TY.'&day_to[day]=30&day_to[month]=9&day_to[year]='.$TY.'&fltr=3trim" class="col-shortcuts-link">'."Prima nota"."</a>";
}
else if ($m0>=10 && $m0<=12) 
{ 
$str_prima_nota='
<a href="'.$CONF[url_base].$CONF[dir_modules].'prestazioni/pages/prima_nota_view.php?form_id=listprestaz&form_page=1&ref_id[text]=&ref_id[realval][]=&operatore[text]='.$_SESSION[user][codice].'&sp_studio=0&primanota=1&day_from[day]=01&day_from[month]=10&day_from[year]='.$TY.'&day_to[day]=31&day_to[month]=12&day_to[year]='.$TY.'&fltr=4trim" class="col-shortcuts-link">'."Prima nota"."</a>";
}


	$output='
				<div  class="col-shortcuts">
		    		<a id="NOMEPRAT" href="'.$CONF[url_base].$CONF[dir_modules].'studio/pages/studio_show.php?id='.$CONF[id_studio].'" class="col-shortcuts-tit"><img src="%[IMAGE_GPATH]%ico/money.png" width="16" height="16" border="0" align="absmiddle">'.$res_prat[pr_codice].'</a>
				<a href="'.$CONF[url_base].$CONF[dir_modules].'studio/pages/pratiche_fuorifido.php?mod=1" class="col-shortcuts-link">'.PRATICHE_FUORI_FIDO.'</a>

'.$str_prima_nota.'

<!-- 
				<a href="'.$CONF[url_base].$CONF[dir_modules].'calendar/pages/app_view.php?form_id=listcont&form_page=1&ref_prat[text]='.urlencode($res_prat[pr_codice]).'&ref_prat[realval][]='.$ref_prat.'" class="col-shortcuts-link">'.PRATICHE_IMPEGN.'</a>
				<a href="'.$CONF[url_base].$CONF[dir_modules].'document/pages/documents_view.php?form_id=listdoc&form_page=1&ref_prat[text]='.urlencode($res_prat[pr_codice]).'&ref_prat[realval][]='.$ref_prat.'" class="col-shortcuts-link">'.DOCUMENT_TITLE.'</a>
				<a href="'.$CONF[url_base].$CONF[dir_modules].'document/pages/dropbox_view.php?form_id=listdoc&form_page=1&ref_prat[text]='.urlencode($res_prat[pr_codice]).'&ref_prat[realval][]='.$ref_prat.'" class="col-shortcuts-link">'.DOCUMENT_TITLE_DROPBOX.'</a>
-->
			</div>
	';
	} 
	else
	{
		$output='
			<div  class="col-shortcuts">
	    		<a id="NOMEPRAT" href="'.$CONF[url_base].$CONF[dir_modules].'pratiche/pages/pratiche_show.php?id='.$ref_prat.'" class="col-shortcuts-tit"><img src="%[IMAGE_GPATH]%ico/ico_prat_peq.gif" width="16" height="16" border="0" align="absmiddle">'.$res_prat[pr_codice].'</a>

	    		<a href="'.$CONF[url_base].$CONF[dir_modules].'prestazioni/pages/prestazioni_view.php?form_id=listprestaz&form_page=1&ref_id[text]='.urlencode($res_prat[pr_codice]).'&ref_id[realval][]='.$ref_prat.'" class="col-shortcuts-link">'.PRESTAZIONI_TITLE.'</a>
			<a href="'.$CONF[url_base].$CONF[dir_modules].'calendar/pages/app_view.php?form_id=listcont&form_page=1&ref_prat[text]='.urlencode($res_prat[pr_codice]).'&ref_prat[realval][]='.$ref_prat.'" class="col-shortcuts-link">'.PRATICHE_IMPEGN.'</a>
			<a href="'.$CONF[url_base].$CONF[dir_modules].'document/pages/documents_view.php?form_id=listdoc&form_page=1&ref_prat[text]='.urlencode($res_prat[pr_codice]).'&ref_prat[realval][]='.$ref_prat.'" class="col-shortcuts-link">'.DOCUMENT_TITLE.'</a>
			<a href="'.$CONF[url_base].$CONF[dir_modules].'document/pages/dropbox_view.php?form_id=listdoc&form_page=1&ref_prat[text]='.urlencode($res_prat[pr_codice]).'&ref_prat[realval][]='.$ref_prat.'" class="col-shortcuts-link">'.DOCUMENT_TITLE_DROPBOX.'</a>

	 </div>

	';
	}
}
	







	$keymap[54]=$CONF[url_base].$CONF[dir_modules]."/pratiche/pages/pratiche_show.php?id=".$ref_prat;
	$keymap[56]=$CONF[url_base].$CONF[dir_modules]."/prestazioni/pages/prestazioni_view.php?form_id=listprestaz&form_page=1&ref_id[text]=".urlencode($res_prat[pr_codice])."&ref_id[realval][]=".$ref_prat;
	$keymap[55]=$CONF[url_base].$CONF[dir_modules]."/calendar/pages/app_view.php?form_id=listcont&form_page=1&ref_prat[text]=".urlencode($res_prat[pr_codice])."&ref_prat[realval][]=".$ref_prat;
	$keymap[57]=$CONF[url_base].$CONF[dir_modules]."document/pages/documents_view.php?form_id=listdoc&form_page=1&ref_prat[text]=".urlencode($res_prat[pr_codice])."&ref_prat[realval][]=".$ref_prat;
		
	$output.= set_js_keyhandler($keymap);
	
	return $output;
}

?>

