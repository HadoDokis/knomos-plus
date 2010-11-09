<?
include("../../../framework/framework.php");


// Define page specific text for template
$PAGE[TXT_TITLE]=STUDIO_MENU_0;


$percorsoHome= "&nbsp;&nbsp;<span > <a target=\"\" href=\"/main.php\" >".$lbl."</a>  ";

$g0=(date("d"));
$m0=(date("m"));
$TY=(date("Y"));
$PY=date('Y',strtotime('-1 years'));

//echo $TY;

$flt1trim=$CONF[url_base].$CONF[dir_modules]."prestazioni/pages/prima_nota_view.php?form_id=listprestaz&form_page=1&ref_id[text]=&ref_id[realval][]=&operatore[text]=".$_SESSION[user][codice]."&sp_studio=0&primanota=1&day_from[day]=01&day_from[month]=1&day_from[year]=".$TY."&day_to[day]=31&day_to[month]=3&day_to[year]=".$TY."&fltr=1trim";

$flt2trim=$CONF[url_base].$CONF[dir_modules]."prestazioni/pages/prima_nota_view.php?form_id=listprestaz&form_page=1&ref_id[text]=&ref_id[realval][]=&operatore[text]=".$_SESSION[user][codice]."&sp_studio=0&primanota=1&day_from[day]=01&day_from[month]=4&day_from[year]=".$TY."&day_to[day]=30&day_to[month]=6&day_to[year]=".$TY."&fltr=2trim";

$flt3trim=$CONF[url_base].$CONF[dir_modules]."prestazioni/pages/prima_nota_view.php?form_id=listprestaz&form_page=1&ref_id[text]=&ref_id[realval][]=&operatore[text]=".$_SESSION[user][codice]."&sp_studio=0&primanota=1&day_from[day]=01&day_from[month]=7&day_from[year]=".$TY."&day_to[day]=30&day_to[month]=9&day_to[year]=".$TY."&fltr=3trim";

$flt4trim=$CONF[url_base].$CONF[dir_modules]."prestazioni/pages/prima_nota_view.php?form_id=listprestaz&form_page=1&ref_id[text]=&ref_id[realval][]=&operatore[text]=".$_SESSION[user][codice]."&sp_studio=0&primanota=1&day_from[day]=01&day_from[month]=10&day_from[year]=".$TY."&day_to[day]=31&day_to[month]=12&day_to[year]=".$TY."&fltr=4trim";

$fltTY=$CONF[url_base].$CONF[dir_modules]."prestazioni/pages/prima_nota_view.php?form_id=listprestaz&form_page=1&ref_id[text]=&ref_id[realval][]=&operatore[text]=".$_SESSION[user][codice]."&sp_studio=0&primanota=1&day_from[day]=01&day_from[month]=01&day_from[year]=".$TY."&day_to[day]=31&day_to[month]=12&day_to[year]=".$TY."&fltr=annoincorso";

$flt1annoprec=$CONF[url_base].$CONF[dir_modules]."prestazioni/pages/prima_nota_view.php?form_id=listprestaz&form_page=1&ref_id[text]=&ref_id[realval][]=&operatore[text]=".$_SESSION[user][codice]."&sp_studio=0&primanota=1&day_from[day]=01&day_from[month]=01&day_from[year]=".$PY."&day_to[day]=31&day_to[month]=12&day_to[year]=".$PY."&fltr=annoprecedente";

$fltall=$CONF[url_base].$CONF[dir_modules]."prestazioni/pages/prima_nota_view.php?form_id=listprestaz&form_page=1&ref_id[text]=&ref_id[realval][]=&operatore[text]=".$_SESSION[user][codice]."&sp_studio=0&primanota=1&fltr=tutti";

$Select=' |&nbsp;&nbsp;<span > Filtra per: '."<select name='SelReg' id='SelZoho' size='1' onchange='location.href=value'  onFocus=(this.className='campo-focus-02') onBlur=(this.className='null') >
		<option selected='selected' value=''>Selezionare il filtro</option>
		<option value='$flt1trim'>1 trimestre</option>
		<option value='$flt2trim'>2 trimestre</option>
		<option value='$flt3trim'>3 trimestre</option>
		<option value='$flt4trim'>4 trimestre</option>
		<option value='$fltTY'>Anno in corso</option>
		<option value='$flt1annoprec'>Anno precedente</option>
		<option value='$fltall'>Tutti</option>
		</option>
		</select></span >";

switch ($_GET[fltr]) 
{ 
        case "1trim":  
	 $TitPag="1°trimestre ".$TY;
        break;
        case "2trim":  
	 $TitPag="2°trimestre ".$TY;
        break; 
        case "3trim":  
	 $TitPag="3°trimestre ".$TY;
        break; 
        case "4trim":  
	 $TitPag="4°trimestre ".$TY;
        break;
        case "annoincorso":  
	 $TitPag="Tutte ".$TY;
        break; 
        case "annoprecedente":  
	 $TitPag="Tutte ".$PY;
        break;
        case "tutti":  
	 $TitPag="tutte";
        break;
}
$PAGE[PAGE_INTITLE]=$TitPag.$percorsoHome.$Select;//CALENDAR_MENU_0;
$PAGE[PAGE_INTITLE].= " &nbsp;&nbsp;<span > ( <a href=\"".$CONF[url_base].$CONF[dir_modules]."prestazioni/pages/new_spesa_studio.php?ref_id=".$CONF[id_studio]."\">".STUDIO_ADD_SPESA."</a> )";








$PAGE[PAGE_PICTITLE]="money.png";
$module="prestazioni";

if ($_SESSION[mobile]==true){
	template_init(6); //mobile=6 - normale=2
} 
 else {
	template_init(); //mobile=6 - normale=2
}
	
//template_init(); //mobile=6 - desktop =()
ob_start();






if ($_GET[action]=="del" )
{
	if (check_perm_obj($module,$_GET[ref_parent],"d"))
	{
		if($DB->Execute("DELETE FROM $module WHERE id=".$_GET[id]))
		{
			log_event("D","prestazioni",$_GET[id]);
			$res_del[title]=FW_DEL_OK;
			print draw_response($res_del);
		} else {
			$res_del[title]=FW_DEL_KO;
			print draw_response($res_del);
		}
			
		
	} else {
		$res_del[title]=FW_ERROR_NO_PERM_DEL;
		print draw_response($res_del);
	}	
	
}


if (check_perm_mod($module,"r")==1)
{

	$thissearch= load_fwobject("search","prestazioni",0);
	
	//Check for parent Perm
	//$perm_parent = perm_sql_read("%[PERM]%","pratiche");
	//$perm_parent = str_replace ("permessi","p.permessi",$perm_parent);
	//$perm_parent = str_replace ("id","p.id",$perm_parent);
	//$true_sql="SELECT m.* FROM prestazioni m, pratiche p WHERE $perm_parent AND p.id=m.ref_id ";
	
	
	if ($_GET[form_id]==$thissearch[form][name] ){
		$error=check_form($thissearch[form],$_GET,$page);
		if($error==1) {	
			if (count($_GET[ref_id][realval]) ==1 && strlen($_GET[ref_id][realval]) > 0) {
				 $PAGE_ELEMENT[PAGE][1][0][param]=$_GET[ref_id][realval][0];
				 if($_SESSION[history]==0)
				 {
				 		//$PAGE[PAGE_INTITLE].= " &nbsp;&nbsp;<span > ( <a href=\"".$CONF[url_base].$CONF[dir_modules]."prestazioni/pages/new_spesa_studio.php?ref_id=".$_GET[ref_id][realval][0]."\">".STUDIO_ADD_SPESA."</a> )";
				 }
			}
			//print draw_form($thissearch[form],$module,$error,$_GET);
			print menage_search($thissearch[search]);

		} //else print draw_form($thissearch[form],$module,$error,$_GET);
		
		} //else 
		//{print draw_form($thissearch[form],$module,"",$_GET);
		 //print menage_search($thissearch[search]);
		//}
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
