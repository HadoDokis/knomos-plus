<?
include("../../../framework/framework.php");
include("../functions.php");

// Define page specific text for template
$PAGE[TXT_TITLE]=CALENDAR_MENU_0;
$PAGE[PAGE_INTITLE]=CALENDAR_MENU_0;
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


if ($_GET[action]=="del" )
{
	if (check_perm_obj($module,$_GET[ref_parent],"d"))
	{
		if($DB->Execute("DELETE FROM $module WHERE id=".$_GET[id]))
		{
			log_event("D","calendar",$_GET[id]);
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


if ($_GET[actdone]=="upd")
{
	$rspact[title]=CALENDAR_UPD_DONE;
	print draw_response($rspact);	
} elseif ($_GET[actdone]=="add")
{
	$rspact[title]=CALENDAR_ADD_DONE;
	print draw_response($rspact);	
}


if (check_perm_mod($module,"r")==1)
{
	$thissearch= load_fwobject("search",$module,0);
	if ($_GET[form_id]==$thissearch[form][name] ){
	$error=check_form($thissearch[form],$_GET,$page);
	if($error==1) {	
		if (count($_GET[ref_prat][realval]) ==1 && strlen($_GET[ref_prat][realval]) > 0) {
			$PAGE_ELEMENT[PAGE][1][0][param]=$_GET[ref_prat][realval][0];

			if($_GET[ref_prat][realval][0]==$CONF[id_studio]){
			$PAGE[PAGE_INTITLE].= " &nbsp;&nbsp;<span > ( <a href=\"".$CONF[url_base].$CONF[dir_modules]."calendar/pages/new_app.php?ref_id=".$_GET[ref_prat][realval][0]."\">"."Nuovo impegno"."</a> )</span>";
			}
			else
			{
			$PAGE[PAGE_INTITLE].= "
&nbsp;&nbsp; <span >Aggiungi: 

		<select name='CalCalcoli' id='CalCalcoli'  onchange='SelectCalAzioni(value)' onFocus='this.className='campo-focus-02'' onBlur='this.className='null''>

		<option style='font-weight: normal' selected='selected' value='#'>Selezionare</option>
		<option style='font-weight: normal' value='".$_GET[ref_prat][realval][0]."'>Nuovo impegno</option>
		<option style='font-weight: normal' value='#1'>Termine processuale</option>
		<option style='font-weight: normal' value='#2'>Termine di impugnazione penale</option>
		</select>

";
			}
		}
		
		print draw_form($thissearch[form],$module,$error,$_GET);
		print menage_search($thissearch[search]);
	} else print draw_form($thissearch[form],$module,$error,$_GET);
	
	} else 
	{print draw_form($thissearch[form],$module);
	 //print menage_search($thissearch[search]);
	}
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
