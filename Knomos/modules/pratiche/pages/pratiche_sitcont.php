<?
include("../../../framework/framework.php");

// Define page specific text for template
$module="pratiche";

template_init(4);
template_define_elements();

ob_start();

//Include Form

	$rs=$DB->Execute("SELECT SUM(spese_imponibili) as simp, SUM(spese_non_imponibili) as snimp, SUM(diritti) as dir, SUM(onorari) as onor, SUM(on_onorari) as onor_or, SUM(on_utente) as onor_ut, SUM(acconti) as acco, SUM(anticipazioni) as anti FROM prestazioni WHERE ref_id=".$_GET[id]); 
	$tot=$rs->FetchRow();

	$rs2=$DB->Execute("SELECT * FROM pratiche WHERE id=".$_GET[id]); 
	$prat=$rs2->FetchRow();
	
	//Search for billing done
	$cnt=0;
	$rs3=$DB->Execute("SELECT DISTINCT nota1,nota2 FROM prestazioni WHERE ref_id=".$_GET[id]." AND nota1 <> '0'"); 
	while (!$rs3->EOF)
	{
		if ($cnt >0) $billem.=", ";
		$nota_emessa=$rs3->FetchRow();
		$billem.=$nota_emessa[nota1].'/'.$nota_emessa[nota2];
		$cnt++;
	}
	
	//Search for fatture done
	$cnt=0;
	
	$rs4=$DB->Execute("SELECT DISTINCT fattura1,fattura2 FROM prestazioni WHERE ref_id=".$_GET[id]." AND fattura1 <> '0'"); 
	while (!$rs4->EOF)
	{
		if ($cnt >0) $fattem.=", ";
		$fatt_emessa=$rs4->FetchRow();
		$fattem.=$fatt_emessa[fattura1].'/'.$fatt_emessa[fattura2];
		$cnt++;
	}	
	
	
	
	$tot[billem]=$billem;
	$tot[fattem]=$fattem;
	$tot[pr_codice]=$prat[pr_codice];
	$tot[pr_oggetto]=$prat[pr_oggetto];
	$tot[pr_valore]=$prat[pr_valore];
	$tot[pr_fido]=$prat[pr_fido];
	$tot[subt1]=$tot[onor_ut]+$tot["dir"];
	$tot[subt2]=$tot[simp]+$tot[snimp];
	$tot[subt3]=$tot[subt1]+$tot[subt2];
	$tot[subm]=$tot[acco]+$tot[anti];
	$tot[subf]=$tot[subt3]-$tot[subm];



	$thisobj= load_fwobject("show","pratiche",1);
	print draw_object($thisobj,"",$module,$tot);




$PAGE[PAGE_CONTENT] = ob_get_contents();
ob_end_clean();

final_render();

?>