<?
include("../../../framework/framework.php");
//include("../functions.php");
$module="calendar";
//Questo serve per scrivere i titoli
	$PAGE[PAGE_INTITLE]='Supporto';
	$PAGE[TXT_TITLE]='Supporto';
$PAGE[PAGE_PICTITLE]="ico_admin_med.gif";


template_init();
template_define_elements();
ob_start();

?>

 
      
<?
$PAGE[PAGE_CONTENT] = '

	
	<div style="width:100%;"  class="pratica" id = "TableImpegniVeloci" border="0" cellpadding="0" cellspacing="0">

	<iframe  " VSPACE="0" name="Frame1" id="Fr1"  src="/plus/mailer/dd-formmailer.php"  width="100%" height="555px" frameborder=0 MARGINWIDTH="0" marginheight="0"> </iframe>

	<p align="center">

		
	</p>


</div>

';
ob_end_clean();
final_render();

?>
