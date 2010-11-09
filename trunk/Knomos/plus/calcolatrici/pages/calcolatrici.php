<?
include("../../../framework/framework.php");
//include("../functions.php");
$module="calendar";
//Questo serve per scrivere i titoli
	$PAGE[PAGE_INTITLE]='Utilit&agrave e calcoli';
	$PAGE[TXT_TITLE]='Utilit&agrave;';
$PAGE[PAGE_PICTITLE]="calcolatrice.ico";


if ($_SESSION[mobile]==true){
	template_init(6); //mobile=6 - normale=2
} 
 else {
	template_init(); //mobile=6 - normale=2
}
	
//template_init(); //mobile=6 - desktop =()


template_define_elements();
ob_start();

?>

 
      
<?
$PAG_444=$CONF[url_base]."plus/calcolatrici/444/patteggiamento.html";
$PAG_ScorporoIVA=$CONF[url_base]."plus/calcolatrici/ScorporoIVA/ScorporoIVA.html";
$PAG_CodFisc=$CONF[url_base]."plus/calcolatrici/cf/810cf.php";
$PAG_Interessi=$CONF[url_base]."plus/calcolatrici/Interessi/Interessi/CalcoloInteressiHome.php";
$PAG_IntLeg=$CONF[url_base]."plus/calcolatrici/Interessi/Legali/InteressiLegaliHome.php";
$PAG_IntMor=$CONF[url_base]."plus/calcolatrici/Interessi/Moratori/InteressiMoratoriHome.php";
$PAG_CalImpPen=$CONF[url_base]."plus/calcolatrici/Termini/Impugnazioni/ImpugnazioniPenaliHome.php?modalita=CalcImPen";
$PAG_CalTerProc=$CONF[url_base]."plus/calcolatrici/Termini/Processuali/TerminiProcessualiHome1.php?modalita=CalTerProc";

switch ($_GET[TipoUtCal])
{
case 1:
  $PAG_DA_APRIRE=$PAG_444; $hf="599";
break;
case 2:
  $PAG_DA_APRIRE=$PAG_ScorporoIVA; $hf="630";
break;
case 3:
  $PAG_DA_APRIRE=$PAG_CodFisc; $hf="450";
break;
case 4:
  $PAG_DA_APRIRE=$PAG_Interessi; $hf="450";
break;
case 5:
  $PAG_DA_APRIRE=$PAG_IntLeg; $hf="450";
break;
case 6:
  $PAG_DA_APRIRE=$PAG_IntMor; $hf="470";
break;
case 7:
  $PAG_DA_APRIRE=$PAG_CalImpPen; $hf="890";
break;
case 8:
  $PAG_DA_APRIRE=$PAG_CalTerProc; $hf="450";
break;

}

$PAGE[PAGE_CONTENT] = '

	
	<div style="width:100%;" height="'.$hf.'"  class="pratica" id = "TableImpegniVeloci" border="0" cellpadding="0" cellspacing="0">

	<iframe  " VSPACE="0" name="Frame1" id="Fr1"  src="'.$PAG_DA_APRIRE.'"  width="100%" height="'.$hf.'" frameborder=0 MARGINWIDTH="0" marginheight="0"> </iframe>

</div>

';
ob_end_clean();
final_render();

?>
