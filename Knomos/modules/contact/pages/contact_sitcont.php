<?
include("../../../framework/framework.php");

// Define page specific text for template
$module="contact";

template_init(4);
template_define_elements();

ob_start();

//Include Form

//	print "SELECT SUM(spese_imponibili) as simp, SUM(spese_non_imponibili) as snimp, SUM(diritti) as dir, SUM(onorari) as onor, SUM(on_onorari) as onor_or, SUM(on_utente) as onor_ut, SUM(acconti) as acco, SUM(anticipazioni) as anti FROM prestazioni m, pratiche p WHERE m.ref_id=p.id AND p.pr_ref_idcliente=".$_GET[id];
	$rs=$DB->Execute("SELECT COUNT(DISTINCT m.ref_id) as tot_prats, COUNT(m.id) as tot_prests, SUM(spese_imponibili) as simp, SUM(spese_non_imponibili) as snimp, SUM(diritti) as dir, SUM(onorari) as onor, SUM(on_onorari) as onor_or, SUM(on_utente) as onor_ut, SUM(acconti) as acco, SUM(anticipazioni) as anti FROM prestazioni m, pratiche p WHERE m.ref_id=p.id AND p.pr_ref_idcliente=".$_GET[id]); 
	$tot=$rs->FetchRow();

	
	//Search for billing done
	$cnt=0;
	$rs3=$DB->Execute("SELECT DISTINCT nota1,nota2 FROM prestazioni m, pratiche p WHERE m.ref_id=p.id AND p.pr_ref_idcliente=".$_GET[id]." AND nota1 <> '' AND nota2 <> ''"); 
	while (!$rs3->EOF)
	{
		if ($cnt >0) $billem.=", ";
		$nota_emessa=$rs3->FetchRow();
		$billem.=$nota_emessa[nota1].'/'.$nota_emessa[nota2];
		$cnt++;
	}
	
	//Search for fatture done
	$cnt=0;
	
	
	$rs2=$DB->Execute("SELECT * FROM contact WHERE id=".$_GET[id]); 
	$cont=$rs2->FetchRow();
	
	
	$tot[billem]=$billem;
	$tot[fattem]=$fattem;
	$tot[codice]=$cont[codice];
	$tot[nome]=$cont[nome];

	$tot[pr_oggetto]=$prat[pr_oggetto];
	$tot[pr_valore]=$prat[pr_valore];
	$tot[pr_fido]=$prat[pr_fido];
	$tot[subt1]=$tot[onor]+$tot["dir"];
	$tot[subt2]=$tot[simp]+$tot[snimp];
	$tot[subt3]=$tot[subt1]+$tot[subt2];
	$tot[subm]=$tot[acco]+$tot[anti];
	$tot[subf]=$tot[subt3]-$tot[subm];



	$thisobj= load_fwobject("show","contact",1);
	print draw_object($thisobj,"",$module,$tot);




$PAGE[PAGE_CONTENT] = ob_get_contents();
ob_end_clean();

final_render();

?>