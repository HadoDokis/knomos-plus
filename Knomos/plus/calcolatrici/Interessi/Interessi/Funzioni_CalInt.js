


function CalcolaInteressi() 
{
var ggDa=document.DataDa.giorno[document.DataDa.giorno.selectedIndex].value;
var mmDa=document.DataDa.mese[document.DataDa.mese.selectedIndex].value;
var yyDa=document.DataDa.anno[document.DataDa.anno.selectedIndex].value;
var ggA=document.DataA.giorno[document.DataA.giorno.selectedIndex].value;
var mmA=document.DataA.mese[document.DataA.mese.selectedIndex].value;
var yyA=document.DataA.anno[document.DataA.anno.selectedIndex].value;

TMonth = new Array(
'January','February','March',
'April','May','June','July',
'August','September','October',
'November','December'
);

//calcolo meseDA
CurMonth = mmDa- 1;
meseDa = TMonth[CurMonth];
//calcolo meseA
CurMonth = mmA- 1;
meseA = TMonth[CurMonth];
//Calcolo DataDa
var DataDa = new Date(""+meseDa+", "+ggDa+" "+yyDa+" 00:00");
//Calcolo DataA
var DataA = new Date(""+meseA+", "+ggA+" "+yyA+" 00:00");


//VERIFICA CHE DATAA E DATADA siano corrette
//alert(ggA)
DataDa=VerificaDataImmessaIntMor(ggDa, mmDa, yyDa, DataDa)
DataA=VerificaDataImmessaIntMor(ggA, mmA, yyA, DataA)

//alert(DataDa)


//VERIFICA L?INTERVALLO DI DATE
DataInizio = new Date (""+"April"+", "+"21"+" "+"1942"+" 00:00");
DataFine = new Date(""+"December"+", "+"31"+" "+"2010"+" 00:00");

if(DataA>DataFine){alert("Attenzione. La data finale immessa è successiva al 31-12.2010.");return};
if(DataA>DataFine){alert("Attenzione. La data finale immessa è anteriore al 21-4-1942.");return};

//CONTROLLA CHE LA STRINGA INSERITA SIA CORRETTA
// CAPITALE
//	1) verifica che sia stato inserito qualcosa
SeimportoNo = document.Dati.TxCapitale
if(SeimportoNo.value==""){alert("Inserire il capitale.");return};
//	2) verifica che il dato sia numerico o POSITIVO
SeImportoNull = document.Dati.TxCapitale//.value
//alert(SeImportoNull.value>0)
if(SeImportoNull.value>0){}else{alert("Inserimento capitale: Attenzione! Cifra non corretta.");document.Dati.TxCapitale.value="";return};

// SAGGIO
//	1) verifica che sia stato inserito qualcosa
SeSaggioNo = document.Risultato.txSaggio
if(SeSaggioNo.value==""){alert("Inserire il saggio annuo di interesse.");return};
//	2) verifica che il dato sia numerico o POSITIVO
SeSaggioNull = document.Risultato.txSaggio//.value
//alert(SeImportoNull.value>0)
if(SeSaggioNull.value>0){}else{alert("Inserimento saggio annuo: Attenzione! Cifra non corretta.");document.Risultato.txSaggio.value="";return};

//---
var importo = document.Dati.TxCapitale.value


var days = Calgg(DataDa, DataA) +1;
if (days <= 0){days=0;}
document.Risultato.txgg.value=Math.floor(days);
document.Risultato.TxTotale.value=(importo*((document.Risultato.txSaggio.value*days)/36500)).toFixed(2);



//document.Risultato.TxTotale.value = Number(nTotale).toFixed(2)//nTotale



//FINE FUNZIONE CALCOLO
}

function ResetAll()
{

//parent.document.getElementById("Fr1").height="279px"

document.Risultato.TxTotale.value = "0"
document.Dati.TxCapitale.value=""
document.Risultato.txSaggio.value=""
document.Risultato.txgg.value="0"

//document.Risultato.txgg.value="-";

//Select1
Oggi()

//Select2
document.DataDa.giorno.value="08";
document.DataDa.mese.value="08";
document.DataDa.anno.value="2002";



}


function DeleDays(DataDaSottrarre, giorni)
{
    return new Date(DataDaSottrarre.getTime() - giorni*86400000)
}


function VerificaDataImmessaIntMor(giorno, mese, anno, DataDaControllare)
{
// Setta il valore iniziale della DataCorretta
var DataImmessa = giorno+"-"+mese+"-"+anno;
// CALCOLA
//Setta le variabili
thedateF = new Date();
thedateF=DataDaControllare;
var tday=""
var dday = thedateF.getDay();
var dd5 = thedateF.getDate();
var mm5 = thedateF.getMonth()+1;
var yy5=thedateF.getFullYear(); 
//Calcola il giorno
if (dd5<=9) {
	      var dt = "0"+String(dd5);
	    } 
	    else {
	    var dt=String(dd5);
	    }
//Calcola il mese
if (mm5<=9) {
	      var mt = "0"+String(mm5);
	    } 
	    else {
	    var mt=String(mm5);
	    }
//Calcola l'anno
var yt=String(yy5)
//Crea la stringa della data OTTENUTA DAL SISTEMA
var StrDataDaControllare = dt + "-" + mt + "-" + yt
var DataCorretta = new Date
	    if (DataImmessa!=StrDataDaControllare) {
		DataCorretta = DeleDays(DataDaControllare, Number(dt));
		//Calcola il giorno CORRETTO (come stringa da passare al messaggio)
			var Correctday1 = DataCorretta.getDate();
			if (Correctday1<=9) {
			  var Correctday = "0"+String(Correctday1);
			} 
			else {
			var Correctday=String(Correctday1);
			}
			//Calcola il mese CORRETTO (come stringa da passare al messaggio)
			var CorrectMonth1 = DataCorretta.getMonth()+1;

			if (CorrectMonth1<=9) {
			  var CorrectMonth = "0"+String(CorrectMonth1);
			} 
			else {
			var CorrectMonth=String(CorrectMonth1);
			}
//		Compone la stringa Data Corretta
		var StrDataCorretta=Correctday + "-" + CorrectMonth + "-" + yt
//		Compone la stringa messaggio
		var msg="La data immessa" + String.fromCharCode(10) + DataImmessa + String.fromCharCode(10) + "non " + String.fromCharCode(232) + "  corretta." + String.fromCharCode(10) + String.fromCharCode(200) + " stata sostituita con" + String.fromCharCode(10) + StrDataCorretta + "."; 
		alert (msg); //qui
	    } 
	    else {
		DataCorretta=DataDaControllare;
	    }
return DataCorretta

}





function Oggi()
{
Today = new Date();
//Giorno
var ddo1 = Today.getDate();
if (ddo1<=9){ddo="0"+String(ddo1)}else{ddo=String(ddo1)}
//Mese
var mmo1 = Today.getMonth()+1;
if (mmo1<=9){mmo="0"+String(mmo1)}else{mmo=String(mmo1)}
//Anno
var yyo = Today.getFullYear(); 
//Scrive
document.DataA.giorno.value=ddo;
document.DataA.mese.value=mmo;
document.DataA.anno.value=yyo;

}


function Calgg(DataFrom, DataTo)
{

//

//Calcola le due date (in giorni)
var ggDataDa = DataFrom.getTime()/(1000*60*60*24);// giorni trascorsi tra la mezzanotte del 1 Gennaio 1970 e la data immessa
var ggDataA = DataTo.getTime()/(1000*60*60*24);// giorni trascorsi tra la mezzanotte del 1 Gennaio 1970 e la data immessa

//Calcola la differenza (in giorni)
var giorni = ggDataA-ggDataDa

return giorni

}


