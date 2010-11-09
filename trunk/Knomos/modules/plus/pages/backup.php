<?
include("../../../framework/framework.php");
//include("../functions.php");
$module="calendar";
//Questo serve per scrivere i titoli
	$PAGE[PAGE_INTITLE]='Backup';
	$PAGE[TXT_TITLE]='Backup;';
$PAGE[PAGE_PICTITLE]="backup1.png";


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
$PAG_Backup="/backup/backup.php";
 $PAG_DA_APRIRE=$PAG_Backup;

$PAGE[PAGE_CONTENT] = '

	
	<div style="width:100%;"  class="pratica" id = "DivBackup" border="0" cellpadding="0" cellspacing="0">

	<iframe  " VSPACE="0" name="Frame1" id="Fr1"  src="'.$PAG_DA_APRIRE.'"  width="100%" height="455px" frameborder=0 MARGINWIDTH="0" marginheight="0"> </iframe>



</div>

';
ob_end_clean();
final_render();

?>
