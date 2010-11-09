<?
include("framework/framework.php");
$module="main";

// Define page specific text for template



if ($CONF[UsaGcal]==true)
{
	$percorso=$CONF[gcal_url];
	$gcal="&nbsp;&nbsp;<span > ( <a target=\"\" href=\"#\" onclick=\"javascript:ApriGcal('$percorso')\">".CALENDAR_GCAL."</a>  )";
}
else
{
	$gcal="";
}

$PAGE[TXT_TITLE]=FW_HOME;
$PAGE[PAGE_INTITLE]=FW_HOME.$gcal;


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

$PAGE[PAGE_PICTITLE]="ico_home_med.gif";
$PAGE_ELEMENT[PAGE][1][0][func]="pratiche_element_1";
$PAGE_ELEMENT[PAGE][2][0][func]="calendar_element_2";
$PAGE_ELEMENT[PAGE][3][0][func]="contact_element_1";

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



//URLS FOR SCADENZE
$url1=make_url(Array ("scad_type"=>1),1);
$url2=make_url(Array ("scad_type"=>2),1);
$url3=make_url(Array ("scad_type"=>3),1);

if ($_GET[scad_type]==1){
	$PAGE[TXT_SCADLINK]=CALENDAR_APPS.' | <a href="'.$url2.'">'.CALENDAR_SCADS.'</a> | <a href="'.$url3.'">'.FW_ALL.'</a>'.$Select;
} elseif ($_GET[scad_type]==2){
	$PAGE[TXT_SCADLINK]='<a href="'.$url1.'">'.CALENDAR_APPS.'</a> | '.CALENDAR_SCADS.' | <a href="'.$url3.'">'.FW_ALL.'</a>'.$Select;
} else {
	$PAGE[TXT_SCADLINK]='<a href="'.$url1.'">'.CALENDAR_APPS.'</a> | <a href="'.$url2.'">'.CALENDAR_SCADS.'</a> | '.FW_ALL.$Select;
}

if ($_SESSION[mobile]==true){
	template_init(5); //mobile=5 - normale=2
}
else {
	template_init(2); //mobile=5 - normale=2
}

template_define_elements();

final_render();

?>
