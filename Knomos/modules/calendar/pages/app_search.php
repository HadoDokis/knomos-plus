<?
include("../../../framework/framework.php");
include("../functions.php");


$fltInCorso=$CONF[url_base].$CONF[dir_modules]."calendar/pages/app_search.php?form_id=listcont&form_page=1&title=&day_from[day]=&day_from[month]=&day_from[year]=&day_to[day]=&day_to[month]=&day_to[year]=&codice[text]=&codice[realval]=&ref_prat[text]=&ref_prat[realval]=&operatore[text]=avv1&operatore[realval]=&done[]=0&type[]=&type_app[]=&note=&send=Cerca&fltr=incorso";
$fltRiserva=$CONF[url_base].$CONF[dir_modules]."calendar/pages/app_search.php?form_id=listcont&form_page=1&title=&day_from[day]=&day_from[month]=&day_from[year]=&day_to[day]=&day_to[month]=&day_to[year]=&codice[text]=&codice[realval]=&ref_prat[text]=&ref_prat[realval]=&operatore[text]=avv1&operatore[realval]=&done[]=1&type[]=&type_app[]=&note=&send=Cerca&fltr=inriserva";
$fltCompletato=$CONF[url_base].$CONF[dir_modules]."calendar/pages/app_search.php?form_id=listcont&form_page=1&title=&day_from[day]=&day_from[month]=&day_from[year]=&day_to[day]=&day_to[month]=&day_to[year]=&codice[text]=&codice[realval]=&ref_prat[text]=&ref_prat[realval]=&operatore[text]=avv1&operatore[realval]=&done[]=2&type[]=&type_app[]=&note=&send=Cerca&fltr=completati";
$fltDaAggiornare=$CONF[url_base].$CONF[dir_modules]."calendar/pages/app_search.php?form_id=listcont&form_page=1&title=&day_from[day]=&day_from[month]=&day_from[year]=&day_to[day]=&day_to[month]=&day_to[year]=&codice[text]=&codice[realval]=&ref_prat[text]=&ref_prat[realval]=&operatore[text]=avv1&operatore[realval]=&done[]=3&type[]=&type_app[]=&note=&send=Cerca&fltr=daaggiornare";
$fltProvvedimenti=$CONF[url_base].$CONF[dir_modules]."calendar/pages/app_search.php?form_id=listcont&form_page=1&title=&day_from[day]=&day_from[month]=&day_from[year]=&day_to[day]=&day_to[month]=&day_to[year]=&codice[text]=&codice[realval]=&ref_prat[text]=&ref_prat[realval]=&operatore[text]=avv1&operatore[realval]=&done[]=&type[]=2&type_app[]=&note=&send=Cerca&fltr=provvedimenti";
$fltNote=$CONF[url_base].$CONF[dir_modules]."calendar/pages/app_search.php?form_id=listcont&form_page=1&title=&day_from[day]=&day_from[month]=&day_from[year]=&day_to[day]=&day_to[month]=&day_to[year]=&codice[text]=&codice[realval]=&ref_prat[text]=&ref_prat[realval]=&operatore[text]=avv1&operatore[realval]=&done[]=&type[]=3&type_app[]=&note=&send=Cerca&fltr=note";
$Select=' <span > Filtra gli impegni per: '."<select name='SelZoho' id='SelZoho' size='1' onchange='location.href=value'  onFocus=(this.className='campo-focus-02') onBlur=(this.className='null') >
		<option selected='selected' value=''>Selezionare il filtro</option>
		<option value='$fltInCorso'>Dinamica: In corso</option>
		<option value='$fltRiserva'>Dinamica: Riserva / In attesa</option>
		<option value='$fltCompletato'>Dinamica: Completato</option>
		<option value='$fltDaAggiornare'>Dinamica: Da aggiornare</option>
		<option value='$fltProvvedimenti'>Tipo: Provvedimenti</option>
		<option value='$fltNote'>Tipo: Note</option>
		</option>
		</select></span >";


$module="calendar";

template_init(10); 
print $Select;
ob_start();

//Include Form

if (check_perm_mod($module,"r")==1)
{
	$thissearch= load_fwobject("search",$module,0);
	if ($_GET[form_id]==$thissearch[form][name] ){
	$error=check_form($thissearch[form],$_GET,$page);
	if($error==1) {	
		print menage_search($thissearch[search]); //menage_search1 in: FRAMEWORK/SEARCH.PHP
	} else print draw_form($thissearch[form],$module,$error,$_GET);
	
	} else 
	{print draw_form($thissearch[form],$module);	}
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
