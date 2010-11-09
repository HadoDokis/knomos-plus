<?
ob_start();
include("../../../framework/framework.php");
include("../functions.php");

// Define page specific text for template
$PAGE[PAGE_PICTITLE]="ico_calendar_med.gif";
$module="calendar";


if (isset ($_GET[day]) && is_numeric($_GET[day]))
{
	$curday=$_GET[day];
}else $curday=(date("d"));


if (isset ($_GET[month]) && is_numeric($_GET[month]))
{
	$curmonth=$_GET[month];
}else $curmonth=date("m");

if (isset ($_GET[year]) && is_numeric($_GET[year]))
{
	$curyear=$_GET[year];
} else $curyear=date("Y");



if ($_SESSION[mobile]==true){
	template_init(6); //mobile=6 - normale=2
} 
 else {
	template_init(); //mobile=6 - normale=2
}
	
//template_init(); //mobile=6 - desktop =()

$thisform= load_fwobject("form","calendar",0);
//Continua INS
if (!isset($_GET[id]))
{
	//unset ($thisform[Fields][continuaIns]);
}
?>


<?

if (isset($_GET[id]))
{
	$rs=$DB->Execute("SELECT * FROM $module WHERE id=".$_GET[id]);
	$resultz=$rs->FetchRow();
	$PAGE_ELEMENT[PAGE][1][0][param]=$resultz[ref_prat];
}

if (isset($_GET[id]) && $_POST[form_id]!= $thisform["name"]) //modifica impegno (normale)
{
	$PAGE[PAGE_INTITLE]=CALENDAR_UPD_APP;
	$PAGE[TXT_TITLE]=CALENDAR_UPD_APP;

	if (check_perm_obj($module,$resultz[ref_prat],"w"))
	{ 
		$result=$resultz;

	
		$thisform[onpost]=str_replace("type::add","type::upd",$thisform[onpost]);
		$thisform[Fields][send][content]="submit||".CALENDAR_UPD_APP."||";
		////CONTINUA AD INSERIRE NUOVI IMPEGNI
		$thisform[Fields][continuaIns][title]=CALENDAR_CONTINUA_INS_TIT;
		$thisform[Fields][continuaIns][content]="checkbox||||opt::".CALENDAR_CONTINUA_INS."=>1;;size::1";

		$response[title]=CALENDAR_UPD_DONE;
		$response[text]= CONTACT_UPD_DONE."<br><br>".make_button("app_view.php?form_id=listcont&form_page=1&ref_prat[text]=&ref_prat[realval][]=".$resultz[ref_prat],CALENDAR_BACK_LIST);

	}  else {
		$response[title]=FW_ERROR_NO_PERM;
		$response[text]=FW_ERROR_NO_PERM_TXT;
		$iserror=1;
		print draw_response($response);
	}

	
} elseif (isset($_GET[id]))  //modifica impegno (su errore modifica)
{
	$PAGE[PAGE_INTITLE]=CALENDAR_UPD_APP;
	$PAGE[TXT_TITLE]=CALENDAR_UPD_APP;

	if (check_perm_obj($module,$resultz[ref_prat],"w"))
	{ 
		$ad="upd";

		$result=$_POST;
		$response[title]=CALENDAR_UPD_DONE;
		$response[text]= CALENDAR_UPD_DONE."<br><br>".make_button("app_view.php?form_id=listcont&form_page=1&ref_prat[text]=&ref_prat[realval][]=".$resultz[ref_prat],CALENDAR_BACK_LIST);
		$thisform[onpost]=str_replace("type::add","type::upd",$thisform[onpost]);
		$thisform[Fields][send][content]="submit||".CALENDAR_UPD_APP."||";
	} else {
		$response[title]=FW_ERROR_NO_PERM;
		$response[text]=FW_ERROR_NO_PERM_TXT;
		$iserror=1;
		print draw_response($response);
	}


} else {
//                          NUOVO IMPEGNO

$dir=$CONF[url_base].$CONF[dir_modules]."calendar/pages/adde_calendar_veloci.php";
$selVel=" &nbsp;&nbsp;<span >
<iframe    name='Frame1' id='Frame1'  src=$dir width='100%' height='25' frameborder='0' MARGINWIDTH='0' marginheight='0' VSPACE='0'> 
</iframe></span>";

	

			if($_GET[ref_id]==$CONF[id_studio])
			{$PAGE[PAGE_INTITLE]=CALENDAR_ADD_APP;}
			else
			{$PAGE[PAGE_INTITLE]=CALENDAR_ADD_APP.$selVel;}



	$PAGE[TXT_TITLE]=CALENDAR_ADD_APP;
	if (check_perm_mod($module,"c")==1)
	{
		$ad="add";


		if ($_POST[form_id]== $thisform["name"]) $result=$_POST;
		else {
			$result[permessi]="U".$_SESSION[fw_userid]."=33330";
			if (isset($_GET[ref_id])) {
				$result[ref_prat]=$_GET[ref_id];
				//CONTINUA AD INSERIRE NUOVI IMPEGNI
				if($_GET[PagProv]=="Rinvio")
				{$thisform[Fields][continuaIns][content]="checkbox||||opt::=>1;;size::1";}
				else{
				$thisform[Fields][continuaIns][title]=CALENDAR_CONTINUA_INS_TIT;
				$thisform[Fields][continuaIns][content]="checkbox||||opt::".CALENDAR_CONTINUA_INS."=>1;;size::1";
				}
				$PAGE_ELEMENT[PAGE][1][0][param]=$_GET[ref_id];
			}


			if (isset($_GET[month]) &&  isset($_GET[year]) &&  isset($_GET[day])  ) {$result[day]=$_GET[year].'-'.$_GET[month].'-'.$_GET[day];}
			if (isset($_GET[hour]) && isset($_GET["min"])) {$result["time"]=$_GET[hour].':'.str_replace("0","00",$_GET[min]);}
		}


		$response[title]=CALENDAR_ADD_DONE;

	} else {
		$response[title]=FW_ERROR_NO_PERM;
		$response[text]=FW_ERROR_NO_PERM_TXT;
		$iserror=1;
		print draw_response($response);
	}
}


if ($iserror!=1){

	if ($_POST[form_id]==$thisform["name"])
	{	if(isset($_POST[form_page])) {$page=$_POST[form_page];}
		else $page=1;
		if (!isset($_POST[type])) 
		{
			$_POST[type]=1;
			//$_POST[time]="00:00";
		}
		$error=check_form($thisform,$_POST,$page);
		if($error==1) {
		
			$manage=manage_post($thisform,$error,$_POST,$_GET[id]);
		
		} else print draw_form($thisform,$module,$error,$result);
		if ($manage==1) {
			$page=($_POST[form_page]+1);
			print draw_form($thisform,$module,$error,$result,$page);
		}
		elseif ($manage > 1)
		{
			if ($_POST[continuaIns] !=1) //SE VIENE CAMBIATO (cambia in fxLoadPage.js) + VALORE=SPUNTATO -> continua
			{
				if ($PAGE[TXT_TITLE]==CALENDAR_UPD_APP)
				{
				header("location: appunt_show.php?id=".$_GET[id]);	
				}
				else
				{
				header("location: new_app.php?ref_id=".$_POST[ref_prat][realval][0]);
				}
			} 
			else //Abbandona ed apre la scheda impegno
			{
				if ($PAGE[TXT_TITLE]==CALENDAR_UPD_APP) //Se MODIFICA (es ultima udienza)
				{
					if ($_GET[convPrest]==1)//Se converte in prestazione
					{
						if ($CONF[storico_impegni]==0)
						{
header("location: ".$CONF[url_base].$CONF[dir_modules]."prestazioni/pages/new_prestazione.php?Tipo=UD&dataimpegno=".$_GET[aa]."-".$_GET[mm]."-".$_GET[gg]."&app_id=".$_GET[id]."&storico=".$_GET[storico]."&curiaimpegno=".$result[cal_comp_desc]."&tipoimpegno=".$result[type_app]."&curiapratica=".$curia);}
						else{	//SE STORICO IMPEGNI = 1

							if ($_GET[PagProv]=="UltimaUdienza") //
							{
							// contrassegna l'impegno come completato
							$DB->Execute("UPDATE calendar SET done=2 WHERE id=".$_GET[id]);							
							}
							//quindi converte in prestazione
							header("location: ".$CONF[url_base].$CONF[dir_modules]."prestazioni/pages/new_prestazione1.php?Tipo=UD&dataimpegno=".$_GET[exaa]."-".$_GET[exmm]."-".$_GET[exgg]."&app_id=".$_GET[id]."&storico=".$_GET[storico]);}
					}
					else //se non converte in prestazione
					{
						if ($CONF[storico_impegni]==0){}
						//SE STORICO IMPEGNI = 1
						else{	
							if ($_GET[PagProv]=="UltimaUdienza") //
							{
							// contrassegna l'impegno come completato
							$DB->Execute("UPDATE calendar SET done=2 WHERE id=".$_GET[id]);							
							}
						}
					header("location: appunt_show.php?id=".$_GET[id]);
					}	
				}
				else//Se NON modifica (SE CIOE' E' NUOVO IMPEGNO SECCO)
				{
					if ($_GET[SeTerDep]==1) //Serve per le impugnazioni penali -> aggiunge altro impegno (dep. sent)
					{
header("location: new_app.php?ref_id=".$_POST[ref_prat][realval][0]."&gg=".$_GET[ggD]."&mm=".$_GET[mmD]."&aa=".$_GET[aaD]."&orario=00.00&evento=1&codice=XIP20&descrizione=Rich. copie sentenza&priorita=1&genere=TRIB&PagProv=CalcImPen&InNota=");
					}
					else
					{
						if ($_GET[PagProv]=="Rinvio") //
						{
							if ($CONF[storico_impegni]==0){
		header("location: ".$CONF[url_base].$CONF[dir_modules]."prestazioni/pages/new_prestazione.php?Tipo=UD&dataimpegno=".$_GET[aa]."-".$_GET[mm]."-".$_GET[gg]."&app_id=".$_GET[id]."&storico=".$_GET[storico]."&curiaimpegno=".$result[cal_comp_desc]."&tipoimpegno=".$result[type_app]."&curiapratica=".$curia);}
							else{
	
						//prende la vecchia nota
							$rsX=$DB->Execute("SELECT * FROM calendar WHERE id=".$_GET[id_prov]);
							$resultX=$rsX->FetchRow();
							$vecchia_nota=$resultX[note];
						//prende la nota attuale
							$rs=$DB->Execute("select * from $module order by id desc limit 1");
							$resultz=$rs->FetchRow();
							$lastRecIns=mysql_insert_id();
							$nota_attuale=$resultz[note];
						//compone la nota finale
							$nuova_nota_finale=$vecchia_nota.$nota_attuale;
						//la salva nell'ultimo record
							$DB->Execute("UPDATE calendar SET note = '"."\n".$nuova_nota_finale."' WHERE id=".$lastRecIns);
						//APRE LA SCHEDA IMPEGNO
						header("location: appunt_show.php?id=".$lastRecIns);
						//QUINDI
			 				// aggiorna la nota dell'impegno di provenienza
$str_rinvio="\n"."Rinvio al ".$_GET[gg]."-".$_GET[mm]."-".$_GET[aa]." h.: ".$_GET[hh].":".$_GET[min]." per: ".$_GET[per];
							$strNota=$_GET[exRel]."\n".$str_rinvio;
							$DB->Execute("UPDATE calendar SET note = 'Relazione: "."\n".$strNota."' WHERE id=".$_GET[id_prov]);

			 				// contrassegna l'impegno di provenienza come completato
							$DB->Execute("UPDATE calendar SET done=2 WHERE id=".$_GET[id_prov]);							
							
								if ($_GET[convPrest]==1)//Se converte in prestazione
								{
								//CONVERTE L'IMPEGNO DI PROVENIENZA IN PRESTAZIONE
header("location: ".$CONF[url_base].$CONF[dir_modules]."prestazioni/pages/new_prestazione.php?Tipo=UD&dataimpegno=".$_GET[exaa]."-".$_GET[exmm]."-".$_GET[exgg]."&app_id=".$_GET[id_prov]."&storico=".$_GET[storico]."&curiaimpegno=".$result[cal_comp_desc]."&tipoimpegno=".$result[type_app]."&curiapratica=".$curia);
								}
							}
						}
						else
						{
						$rs=$DB->Execute("select * from $module order by id desc limit 1");
						$resultz=$rs->FetchRow();
						$lastRecIns=mysql_insert_id();
						header("location: appunt_show.php?id=".$lastRecIns);
						}
					}
				}

			}
//ORIGINALE:
			//header("location: app_view.php?actdone=$ad&form_id=listcont&form_page=1&ref_prat[text]=&ref_prat[realval][]=".$_POST[ref_prat][realval][0]); //ORIGINALE

			die();
			if (!isset($_GET[id]))
			{
			$response[text]= CALENDAR_ADD_DONE."<br><br>".make_button("app_view.php?form_id=listcont&form_page=1&ref_prat[text]=&ref_prat[realval][]=".$_POST[ref_prat][realval][0],CALENDAR_BACK_LIST);
			}
			
			print draw_response($response);
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
