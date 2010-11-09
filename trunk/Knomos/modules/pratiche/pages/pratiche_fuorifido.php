<?
include("../../../framework/framework.php");
include("../../../config/config.php");
include("../../../config/config_plus.php");
// Define page specific text for template
$module="pratiche";

template_init(14);
template_define_elements();

ob_start();

?>

<table width="100%" height="35%" border="0" cellspacing="1" class="form-01-table">

<? 
//Include Form
	$sql = "SELECT id, pr_codice FROM pratiche ORDER BY pr_codice" ;
	$esegui_query=mysql_query($sql) or die("Errore di autenticazione. ");
	$num_righe = mysql_num_rows($esegui_query);
		if ($num_righe > 0)
		{
			while ($campo=mysql_fetch_array($esegui_query))
			{
				$rs=$DB->Execute("SELECT SUM(spese_imponibili) as simp, SUM(spese_non_imponibili) as snimp, SUM(diritti) as dir, SUM(onorari) as onor, SUM(on_onorari) as onor_or, SUM(on_utente) as onor_ut, SUM(acconti) as acco, SUM(anticipazioni) as anti FROM prestazioni WHERE ref_id=".$campo[id]); 
				$tot=$rs->FetchRow();

				$rs2=$DB->Execute("SELECT * FROM pratiche WHERE id=".$campo[id]); 
				$prat=$rs2->FetchRow();
	
				//Search for billing done
				$cnt=0;
				$rs3=$DB->Execute("SELECT DISTINCT nota1,nota2 FROM prestazioni WHERE ref_id=".$campo[id]." AND nota1 <> '0'"); 
				while (!$rs3->EOF)
				{
					if ($cnt >0) $billem.=", ";
					$nota_emessa=$rs3->FetchRow();
					$billem.=$nota_emessa[nota1].'/'.$nota_emessa[nota2];
					$cnt++;
				}
	
				//Search for fatture done
				$cnt=0;
	
				$rs4=$DB->Execute("SELECT DISTINCT fattura1,fattura2 FROM prestazioni WHERE ref_id=".$campo[id]." AND fattura1 <> '0'"); 
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

				$fuori_fido=$tot[subf]-$prat[pr_fido];

			if ($prat[pr_codice]==""){}else
			{
			if ($prat[pr_fido]>0 && $fuori_fido>0){


			?>		
			 	<tr>
				<td  id="S12"  width="100%"  colspan="2" onMouseOver="this.className='pratica-over-sub'" onMouseOut="this.className='null'">
			<? 

			$href='<a target="_parent" href="/modules/pratiche/pages/pratiche_show.php?id='.$prat[id].'"   class="col-fuorifido-tit"><img src="%[IMAGE_GPATH]%ico/ico_prat_peq.gif" width="16" height="16" border="0" > '.$prat[pr_codice].'</a>';


			print $href."Fido: € ".$tot[pr_fido]." - Totale prestazioni: € ".$tot[subf]."<strong> - Fuori fido: € ".$fuori_fido."<strong>";
			//print $href."Fido: ".$tot[pr_fido]." - Totale prestazioni: ".$tot[subf].$ff;
//echo $ff;
			}//fineif
			}//fine while
			}
		}//Fine if ($num_righe > 0)

?>
	</td>
	</tr>

</table>
<? 

$PAGE[PAGE_CONTENT] = ob_get_contents();
ob_end_clean();

final_render();

?>
