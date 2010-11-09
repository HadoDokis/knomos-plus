<?
ob_start();
include("../framework/framework.php");
//include("../functions.php");

// Define page specific text for template
//$PAGE[PAGE_PICTITLE]="ico_calendar_med.gif";
//$module="calendar";


if ($_SESSION[mobile]==true){
	template_init(9); //mobile=9 - normale=2
} 
 else {
	template_init(); //mobile=9 - normale=2
}
	
//template_init(); //mobile=6 - desktop =()

//$thisform= load_fwobject("form","calendar",0);
//$gigi="ciaociao";


//$PAGE[PAGE_INTITLE]=CALENDAR_ADD_APP; 
//$PAGE[TXT_TITLE]=CALENDAR_ADD_APP;

//print draw_form($gigi,$module,"",$result);

//print" <br/> pippo ";

$PAGE[PAGE_CONTENT] = ' 
<table width="100%"  border="0" cellspacing="1" name="TableImpPen">
<form  method="post" name="Dati" >


	<tr>
	<td width="33%"  >
<a href='$CONF[url_base].$CONF[dir_modules].'"pratiche/pages/pratiche_view.php"><img src="%[IMAGE_GPATH]%ico/mobile/ric_prat.png" alt="Ricerca pratiche" width="128" height="128" border="0"></br>Ricerca pratiche</a>

	</td>
	<td width="33%" >
<a href='$CONF[url_base].$CONF[dir_modules].'"pratiche/pages/new_pratiche.php"><img src="%[IMAGE_GPATH]%ico/mobile/new_prat.png" alt="Nuova pratica" width="128" height="128" border="0"></br>Nuova pratica</a>
	</td>
	<td width="33%" >
vuoto
	</td>
	</tr>


	<tr>
	<td width="33%"  >
<a href='$CONF[url_base].$CONF[dir_modules].'"prestazioni/pages/prestazioni_view.php"><img src="%[IMAGE_GPATH]%ico/mobile/ric_prest.png" alt="Ricerca prestazioni" width="128" height="128" border="0"></br>Ricerca prestazioni</a>
	</td>
	<td width="33%" >
vuoto
	</td>
	<td width="33%" >
vuoto
	</td>
	</tr>

	<tr>
	<td width="33%"  >

<a href='$CONF[url_base].$CONF[dir_modules].'"calendar/pages/day_view.php"><img src="%[IMAGE_GPATH]%ico/mobile/today1.png" alt="Eventi odierni" width="128" height="128" border="0"></br>Eventi odierni</a>
	</td>
	<td width="33%" >
<a href='$CONF[url_base].$CONF[dir_modules].'"calendar/pages/new_app.php"><img src="%[IMAGE_GPATH]%ico/mobile/new__impegni.png" alt="Nuovo impegno" width="128" height="128" border="0"></br>Nuovo impegno</a>

	</td>
	<td width="33%" >
<a href='$CONF[url_base].$CONF[dir_modules].'"calendar/pages/app_view.php"><img src="%[IMAGE_GPATH]%ico/mobile/ric_impegni.png" alt="Ricerca impegni" width="128" height="128" border="0"></br>Ricerca impegni</a>

	</td>
	</tr>

	<tr>
	<td width="33%"  >
<a href='$CONF[url_base].$CONF[dir_modules].'"contact/pages/contacts_view.php"><img src="%[IMAGE_GPATH]%ico/mobile/ric_anagraf.png" alt="Ricerca anagrafiche" width="128" height="128" border="0"></br>Ricerca anagrafiche</a>

	</td>
	<td width="33%" >
<a href='$CONF[url_base].$CONF[dir_modules].'"contact/pages/new_contact.php"><img src="%[IMAGE_GPATH]%ico/mobile/new_anagraf.png" alt="Nuova anagrafica" width="128" height="128" border="0"></br>Nuova anagrafica</a>

	</td>
	<td width="33%" >
vuoto
	</td>
	</tr>

	<tr>
	<td width="33%"  >
<a href='$CONF[url_base].$CONF[dir_modules].'"document/pages/documents_view.php"><img src="%[IMAGE_GPATH]%ico/mobile/documents.png" alt="Documenti" width="128" height="128" border="0"></br>Documenti</a>

	</td>
	<td width="33%" >
<a href='$CONF[url_base].'"calcolatrici/pages/calcolatrici.php"><img src="%[IMAGE_GPATH]%ico/mobile/calculator.png" alt="Utilità e calcoli" width="128" height="128" border="0"></br>Utilità e calcoli</a>

	</td>
	<td width="33%" >
<a href='$CONF[url_base].$CONF[dir_modules].'"calendar/pages/week_view.php"><img src="%[IMAGE_GPATH]%ico/mobile/today2.png" alt="Calendario" width="128" height="128" border="0"></br>Calendario</a>

	</td>
	</tr>

	<tr>
	<td width="33%"  >
<a href='$CONF[url_base].'"comunicazioni/pages/link1.php"><img src="%[IMAGE_GPATH]%ico/mobile/preferiti.png" alt="Personale" width="128" height="128" border="0"></br>Personale</a>


	</td>
	<td width="33%" >
<a href='$CONF[url_base].'"comunicazioni/pages/link2.php"><img src="%[IMAGE_GPATH]%ico/mobile/preferiti.png" alt="Personale" width="128" height="128" border="0"></br>Personale</a>
	</td>
	<td width="33%" >
<a href='$CONF[url_base].'"comunicazioni/pages/link3.php"><img src="%[IMAGE_GPATH]%ico/mobile/preferiti.png" alt="Personale" width="128" height="128" border="0"></br>Personale</a>
	</td>
	</tr>
</table>


';
//ob_end_clean();
template_define_elements();

final_render();

?>
