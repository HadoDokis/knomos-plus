
function Calcola(){
alert("qui")
// -----------   verifica dati inseriti -------------
//	1) verifica che sia stato inserito qualcosa nella casella importo
SeInseritoNo = document.getElementById("importo")//.value=""
if(SeInseritoNo.value==""){alert("Inserire la cifra da scorporare.");return};
//	2) verifica che il dato sia numerico o POSITIVO
SeInseritoNull = document.getElementById("importo")
//alert(SeImportoNull.value>0)
if(SeInseritoNull.value>0){}else{alert("Importo: Attenzione! Cifra non corretta.");document.getElementById("importo").value="";return};
//	3) verifica che sia stato inserito qualcosa nella casella anticip
SeInseritoNo2 = document.getElementById("anticip")//.value=""
if(SeInseritoNo2.value==""){alert("Inserire le spese non imponibili.");document.getElementById("anticip").value=0; return};
//	4) verifica che il dato sia numerico o POSITIVO
SeInseritoNull2 = document.getElementById("anticip")
//alert(SeInseritoNull.value>0)
if(SeInseritoNull2.value>=0 ){}else{alert("Spese non imponibili: Attenzione! Cifra non corretta.");document.getElementById("importo").value="";document.getElementById("anticip").value=0;return};
// -----------   fine verifica dati inseriti -------------

// -------  IMPOSTAZIONE PARAMETRI --------------
var ParScorporoRA=Number("0.1909")
var ParScorporoIVA=Number("1.20")
var ParIVA=Number("0.20")
var ParRA=Number("0.20")
var ParSG=Number("0.125")
//Se CPA 4%
if (ChkCPA4.checked==true) {var ValCPA=ChkCPA4.value; var ParCPA=Number("0.04");}
else {var ValCPA=ChkCPA2.value; var ParCPA=Number("0.02");}
// ----  FINE IMPOSTAZIONE PARAMETRI -------------

//Prende i valori dalle caselle di testo
Importo=document.getElementById("importo")
SpNON=document.getElementById("anticip")
IncassoNetto=Number(Importo.value)-Number(SpNON.value)

//Prende i valori dalle check
ChkCPA2=document.getElementById("ChkCPA2")
ChkCPA4=document.getElementById("ChkCPA4")
ChkSG=document.getElementById("ChkSG")
ChkRA=document.getElementById("ChkRA")

//ESEGUE I CALCOLI Con ritenuta
if (ChkRA.checked==true)
{
var TotaleParcella= IncassoNetto+(IncassoNetto*ParScorporoRA);
//Calcola imponibile IVA
var ImponIVA=(TotaleParcella)/ParScorporoIVA;
var IVA=ImponIVA*ParIVA;
//Calcola imponibile CPA
var ImponCPA=ImponIVA/ValCPA;
var CPA=ImponCPA*ParCPA;
//Calcola la Ritenuta d'acconto
var RA = (ImponCPA)*ParRA; 
}
//ESEGUE I CALCOLI Senza Ritenuta
else
{
var RA = 0; 
var TotaleParcella= IncassoNetto;
//Calcola imponibile IVA
var ImponIVA=(TotaleParcella)/ParScorporoIVA;
var IVA=ImponIVA*ParIVA
//Calcola imponibile CPA
var ImponCPA=ImponIVA/ValCPA
var CPA=ImponCPA*ParCPA
}

//Se scorporo spese Generali
if (ChkSG.checked==true){var ImportoDaNotulare=ImponCPA/(ChkSG.value); var SG = ImportoDaNotulare*ParSG} else {ImportoDaNotulare=ImponCPA; var SG = 0}


//Scrive nelle caselle di riepilogo

document.getElementById("Tximpcpa").value=ImponCPA.toFixed(2)
document.getElementById("Txcpa").value=CPA.toFixed(2)
document.getElementById("Tximpiva").value=ImponIVA.toFixed(2)
document.getElementById("Txiva").value=IVA.toFixed(2)
document.getElementById("Txtotnot").value=ImportoDaNotulare.toFixed(2)
document.getElementById("Txsg").value=SG.toFixed(2)
document.getElementById("Txra").value=RA.toFixed(2)
document.getElementById("Txtotali").value=(ImportoDaNotulare+SG+CPA+IVA+Number(SpNON.value)-RA).toFixed(2)

}

function Reset(){
//alert("qui")
document.getElementById("importo").value=""
document.getElementById("anticip").value=0
//Azzera le caselle di riepilogo
document.getElementById("Tximpcpa").value=""
document.getElementById("Txcpa").value=""
document.getElementById("Tximpiva").value=""
document.getElementById("Txiva").value=""
document.getElementById("Txtotnot").value=""
document.getElementById("Txsg").value=""
document.getElementById("Txra").value=""
document.getElementById("Txtotali").value=""

}

