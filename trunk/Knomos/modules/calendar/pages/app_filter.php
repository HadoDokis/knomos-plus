<?
include("../../../framework/framework.php");
include("../functions.php");

// Define page specific text for template
$PAGE[TXT_TITLE]="Filtro impegni"; //letto da openpage
$lbl="ritorna alla home page";
$percorsoHome= "&nbsp;&nbsp;<span > <a target=\"\" href=\"/main.php\" >".$lbl."</a>  ";

$g0=(date("d"));
$m0=(date("m"));
$y0=(date("Y"));
$g1=date('d', strtotime('+1 days'));
$m1=date('m', strtotime('+1 days'));
$y1=date('y', strtotime('+1 days'));

$g7=date('d',strtotime('+1 weeks'));
$m7=date('m',strtotime('+1 weeks'));
$y7=date('Y',strtotime('+1 weeks'));

$g30=date('d',strtotime('+1 months'));
$m30=date('m',strtotime('+1 months'));
$y30=date('Y',strtotime('+1 months'));
//echo $g30.$m30.$y30;

$flt0gg=$CONF[url_base].$CONF[dir_modules]."calendar/pages/app_filter.php?form_id=listcont&form_page=1&title=&day_from[day]=".$g0."&day_from[month]=".$m0."&day_from[year]=".$y0."&day_to[day]=".$g0."&day_to[month]=".$m0."&day_to[year]=".$y0."&fltr=oggi";

$flt1gg=$CONF[url_base].$CONF[dir_modules]."calendar/pages/app_filter.php?form_id=listcont&form_page=1&title=&day_from[day]=".$g1."&day_from[month]=".$m1."&day_from[year]=".$y1."&day_to[day]=".$g1."&day_to[month]=".$m1."&day_to[year]=".$y1."&fltr=domani";

$flt2gg=$CONF[url_base].$CONF[dir_modules]."calendar/pages/app_filter.php?form_id=listcont&form_page=1&title=&day_from[day]=".$g0."&day_from[month]=".$m0."&day_from[year]=".$y0."&day_to[day]=".$g1."&day_to[month]=".$m1."&day_to[year]=".$y1."&fltr=oggidomani";

$flt7gg=$CONF[url_base].$CONF[dir_modules]."calendar/pages/app_filter.php?form_id=listcont&form_page=1&title=&day_from[day]=".$g0."&day_from[month]=".$m0."&day_from[year]=".$y0."&day_to[day]=".$g7."&day_to[month]=".$m7."&day_to[year]=".$y7."&fltr=settimana";

$flt30gg=$CONF[url_base].$CONF[dir_modules]."calendar/pages/app_filter.php?form_id=listcont&form_page=1&title=&day_from[day]=".$g0."&day_from[month]=".$m0."&day_from[year]=".$y0."&day_to[day]=".$g30."&day_to[month]=".$m30."&day_to[year]=".$y30."&fltr=mese";

$fltInCorso=$CONF[url_base].$CONF[dir_modules]."calendar/pages/app_filter.php?form_id=listcont&form_page=1&title=&day_from[day]=&day_from[month]=&day_from[year]=&day_to[day]=&day_to[month]=&day_to[year]=&codice[text]=&codice[realval]=&ref_prat[text]=&ref_prat[realval]=&operatore[text]=avv1&operatore[realval]=&done[]=0&type[]=&type_app[]=&note=&send=Cerca&fltr=incorso";
$fltRiserva=$CONF[url_base].$CONF[dir_modules]."calendar/pages/app_filter.php?form_id=listcont&form_page=1&title=&day_from[day]=&day_from[month]=&day_from[year]=&day_to[day]=&day_to[month]=&day_to[year]=&codice[text]=&codice[realval]=&ref_prat[text]=&ref_prat[realval]=&operatore[text]=avv1&operatore[realval]=&done[]=1&type[]=&type_app[]=&note=&send=Cerca&fltr=inriserva";
$fltCompletato=$CONF[url_base].$CONF[dir_modules]."calendar/pages/app_filter.php?form_id=listcont&form_page=1&title=&day_from[day]=&day_from[month]=&day_from[year]=&day_to[day]=&day_to[month]=&day_to[year]=&codice[text]=&codice[realval]=&ref_prat[text]=&ref_prat[realval]=&operatore[text]=avv1&operatore[realval]=&done[]=2&type[]=&type_app[]=&note=&send=Cerca&fltr=completati";
$fltDaAggiornare=$CONF[url_base].$CONF[dir_modules]."calendar/pages/app_filter.php?form_id=listcont&form_page=1&title=&day_from[day]=&day_from[month]=&day_from[year]=&day_to[day]=&day_to[month]=&day_to[year]=&codice[text]=&codice[realval]=&ref_prat[text]=&ref_prat[realval]=&operatore[text]=avv1&operatore[realval]=&done[]=3&type[]=&type_app[]=&note=&send=Cerca&fltr=daaggiornare";
$fltProvvedimenti=$CONF[url_base].$CONF[dir_modules]."calendar/pages/app_filter.php?form_id=listcont&form_page=1&title=&day_from[day]=&day_from[month]=&day_from[year]=&day_to[day]=&day_to[month]=&day_to[year]=&codice[text]=&codice[realval]=&ref_prat[text]=&ref_prat[realval]=&operatore[text]=avv1&operatore[realval]=&done[]=&type[]=2&type_app[]=&note=&send=Cerca&fltr=provvedimenti";
$fltNote=$CONF[url_base].$CONF[dir_modules]."calendar/pages/app_filter.php?form_id=listcont&form_page=1&title=&day_from[day]=&day_from[month]=&day_from[year]=&day_to[day]=&day_to[month]=&day_to[year]=&codice[text]=&codice[realval]=&ref_prat[text]=&ref_prat[realval]=&operatore[text]=avv1&operatore[realval]=&done[]=&type[]=3&type_app[]=&note=&send=Cerca&fltr=note";
$Select=' |&nbsp;&nbsp;<span > Filtra gli impegni per: '."<select name='SelZoho' id='SelZoho' size='1' onchange='location.href=value'  onFocus=(this.className='campo-focus-02') onBlur=(this.className='null') >
		<option selected='selected' value=''>Selezionare il filtro</option>
		<option value='$fltInCorso'>Dinamica: In corso</option>
		<option value='$fltRiserva'>Dinamica: Riserva / In attesa</option>
		<option value='$fltCompletato'>Dinamica: Completato</option>
		<option value='$fltDaAggiornare'>Dinamica: Da aggiornare</option>
		<option value='$fltProvvedimenti'>Tipo: Provvedimenti</option>
		<option value='$fltNote'>Tipo: Note</option>
		<option value='$flt0gg'>Planning: giornaliero (oggi)</option>
		<option value='$flt1gg'>Planning: domani</option>
		<option value='$flt2gg'>Planning: oggi e domani</option>
		<option value='$flt7gg'>Planning: settimanale</option>
		<option value='$flt30gg'>Planning: mensile</option>
		</option>
		</select></span >";

//$PAGE[PAGE_INTITLE]="Filtro impegni".$percorsoHome;//CALENDAR_MENU_0;
switch ($_GET[fltr]) 
{ 
        case "incorso":  
	 $TitPag="Impegni in corso";
        break;
        case "inriserva":  
	 $TitPag="Impegni in riserva / decisione";
        break; 
        case "completati":  
	 $TitPag="Impegni completati";
        break; 
        case "daaggiornare":  
	 $TitPag="Impegni da aggiornare";
        break;
        case "provvedimenti":  
	 $TitPag="Provvedimenti";
        break; 
        case "note":  
	 $TitPag="Note";
        break;
        case "oggi":  
	 $TitPag="Impegni di oggi";
        break;
        case "domani":  
	 $TitPag="Impegni di domani";
        break; 
        case "oggidomani":  
	 $TitPag="Impegni di oggi e domani";
        break; 
        case "settimana":  
	 $TitPag="Impegni della settimana";
        break;  
        case "mese":  
	 $TitPag="Impegni del mese";
        break;  
}
$PAGE[PAGE_INTITLE]=$TitPag.$percorsoHome.$Select;//CALENDAR_MENU_0;

$PAGE[PAGE_PICTITLE]="ico_calendar_med.gif";
$module="calendar";

if ($_SESSION[mobile]==true){
	template_init(6); //mobile=6 - normale=2
} 
 else {
	template_init(); //mobile=6 - normale=2
}
	
//template_init(); //mobile=6 - desktop =()

ob_start();

//Include Form

if (check_perm_mod($module,"r")==1)
{
	$thissearch= load_fwobject("search",$module,0);
	if ($_GET[form_id]==$thissearch[form][name] ){
	$error=check_form($thissearch[form],$_GET,$page);
	if($error==1) {	
		print menage_search($thissearch[search]);
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
