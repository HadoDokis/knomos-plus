

function ShowRiepilogo() 
{

    if (document.MostraRiepilogo.ChkRiepilogo.checked)
    {
    //visualizza la tabella;
    //var el = document.getElementById("Tab2");
    document.getElementById("Tab2").style.display="inline";
    //visualizza le caselle;
    //document.Caselle.style.visibility="visible";
    }
    else
    {
    //Nasconde la tabella
    //var el = document.getElementById("Tab2");
    document.getElementById("Tab2").style.display="none";
    //Nasconde le caselle
    //document.Caselle.style.visibility="hidden";
    }

}

function FxStampa()
{



vPrat=document.stampaEpratica.TxPratica.value;

vCap=document.Dati.TxCapitale.value;
vTot=document.Risultato.TxTotale.value;

vs1=document.Caselle.txSaggio022.value;
vs2=document.Caselle.txSaggio031.value;
vs3=document.Caselle.txSaggio032.value;
vs4=document.Caselle.txSaggio041.value;
vs5=document.Caselle.txSaggio042.value;
vs6=document.Caselle.txSaggio051.value;
vs7=document.Caselle.txSaggio052.value;
vs8=document.Caselle.txSaggio061.value;
vs9=document.Caselle.txSaggio062.value;


vg1=document.Caselle.txgg022.value;
vg2=document.Caselle.txgg031.value;
vg3=document.Caselle.txgg032.value;
vg4=document.Caselle.txgg041.value;
vg5=document.Caselle.txgg042.value;
vg6=document.Caselle.txgg051.value;
vg7=document.Caselle.txgg052.value;
vg8=document.Caselle.txgg061.value;
vg9=document.Caselle.txgg062.value;


vi1=document.Caselle.txImp022.value;
vi2=document.Caselle.txImp031.value;
vi3=document.Caselle.txImp032.value;
vi4=document.Caselle.txImp041.value;
vi5=document.Caselle.txImp042.value;
vi6=document.Caselle.txImp051.value;
vi7=document.Caselle.txImp052.value;
vi8=document.Caselle.txImp061.value;
vi9=document.Caselle.txImp062.value;


var DaStampare=(
"Calcolo degli interessi moratori ex D.Lgs. 231/2002" + 
"<br>"+"<br>"+
"PRATICA:" + "<br>"+
vPrat+"<br>"+"<br>"+
"CAPITALE:" + "<br>"+
vCap+"<br>"+"<br>"+
"TOTALE: " + "<br>"+
vTot+"<br>"+"<br>"+
"RIEPILOGO: " + "<br>"+
"08.08.02 - 31.12.02" +
"<br>"+ "  Saggio: "+ vs1+ " - Giorni: "+ vg1+ " - Importo: Euro "+ vi1+ "<br>"+
"01.01.03 - 30.06.03" + 
"<br>"+ "  Saggio: "+ vs2 + " - Giorni: "+ vg2 + " - Importo: Euro "+ vi2 + "<br>"+
"01.07.03 - 31.12.03" +
"<br>"+ "  Saggio: "+ vs3 + " - Giorni: "+ vg3 + " - Importo: Euro "+ vi3+"<br>"+
"01.01.04 - 30.06.04 " +
"<br>"+ "  Saggio: "+ vs4 + " - Giorni: "+ vg4 + " - Importo: Euro "+ vi4+"<br>"+
"01.07.04 - 31.12.04" +
"<br>"+ "  Saggio: "+ vs5 + " - Giorni: "+ vg5 + " - Importo: Euro "+ vi5+"<br>"+
"01.01.05 - 30.06.05" +
"<br>"+ "  Saggio: "+ vs6 + " - Giorni: "+ vg6 + " - Importo: Euro "+ vi6+"<br>"+
"01.07.05 - 31.12.05" +
"<br>"+ "  Saggio: "+vs7 + " - Giorni: "+ vg7 + " - Importo: Euro "+ vi7+"<br>"+
"01.01.06 - 30.06.06" +
"<br>"+ "  Saggio: "+ vs8 + " - Giorni: "+ vg8 + " - Importo: Euro "+ vi8+"<br>"+
"01.07.06 - 31.12.06" +
"<br>"+ "  Saggio: "+ vs9 + " - Giorni: "+ vg9 + " - Importo: Euro "+ vi9+"<br>"+

"<br>"+"<br>"

);

var pippo=""

//PASSA ALLA STAMPA
fin=window.open("about:blank","Finestra_Stampa.html")
fin.document.location.reload()
fin.document.write("<html><body onLoad='self.print()'><form style='font-family: Helvetica,Arial,sans-serif; '>"+DaStampare+"</body></html>")

}



function CalcolaIntLeg() 
{
//Select
var ggDa=document.DataDa.giorno[document.DataDa.giorno.selectedIndex].value;
var mmDa=document.DataDa.mese[document.DataDa.mese.selectedIndex].value;
var yyDa=document.DataDa.anno[document.DataDa.anno.selectedIndex].value;
var ggA=document.DataA.giorno[document.DataA.giorno.selectedIndex].value;
var mmA=document.DataA.mese[document.DataA.mese.selectedIndex].value;
var yyA=document.DataA.anno[document.DataA.anno.selectedIndex].value;

//Caselle
//var ggDa=document.DataDa.TxggDa.value;
//var mmDa=document.DataDa.TxmmDa.value;
//var yyDa=document.DataDa.TxaaDa.value;
//var ggA=document.DataA.TxggA.value;
//var mmA=document.DataA.TxmmA.value;
//var yyA=document.DataA.TxaaA.value;

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
//	1) verifica che sia stato inserito qualcosa
SeimportoNo = document.Dati.TxCapitale
if(SeimportoNo.value==""){alert("Inserire il capitale.");return};
//	2) verifica che il dato sia numerico o POSITIVO
SeImportoNull = document.Dati.TxCapitale//.value
//alert(SeImportoNull.value>0)
if(SeImportoNull.value>0){}else{alert("L'importo del capitale inserito non è corretto.");document.Dati.TxCapitale.value="";return};
//---
var importo = document.Dati.TxCapitale.value



//Calcolo GLI SCAGLIONI
//1 scaglione
var sc1da = new Date(""+"April"+", "+"21"+" "+"1970"+" 00:00");
var sc1a = new Date(""+"December"+", "+"15"+" "+"1990"+" 00:00");
//2 scaglione
var sc2da = new Date(""+"December"+", "+"16"+" "+"1990"+" 00:00");
var sc2a = new Date(""+"December"+", "+"31"+" "+"1996"+" 00:00");
//3 scaglione
var sc3da = new Date(""+"January"+", "+"01"+" "+"1997"+" 00:00");
var sc3a = new Date(""+"December"+", "+"31"+" "+"1998"+" 00:00");
//4 scaglione
var sc4da = new Date(""+"January"+", "+"01"+" "+"1999"+" 00:00");
var sc4a = new Date(""+"December"+", "+"31"+" "+"2000"+" 00:00");
//5 scaglione
var sc5da = new Date(""+"January"+", "+"01"+" "+"2001"+" 00:00");
var sc5a = new Date(""+"December"+", "+"31"+" "+"2001"+" 00:00");
//6 scaglione
var sc6da = new Date(""+"January"+", "+"01"+" "+"2002"+" 00:00");
var sc6a = new Date(""+"December"+", "+"31"+" "+"2003"+" 00:00");
//7 scaglione
var sc7da = new Date(""+"January"+", "+"01"+" "+"2004"+" 00:00");
var sc7a = new Date(""+"December"+", "+"31"+" "+"2007"+" 00:00");
//8 scaglione
var sc8da = new Date(""+"January"+", "+"01"+" "+"2008"+" 00:00");
var sc8a = new Date(""+"Decembre"+", "+"31"+" "+"2009"+" 00:00");
//9 scaglione
var sc9da = new Date(""+"January"+", "+"01"+" "+"2010"+" 00:00");
var sc9a = new Date(""+"December"+", "+"31"+" "+"2010"+" 00:00");






//1 scaglione
  if ((DataDa<sc1da) )
  {
  DataDa=sc1da;
  }

  //2002 2 sem
  if ((DataDa>=sc1da) && (DataDa<=sc1a) )
  {
      var days = Calgg(DataDa, sc1a) +1;

      if (days <= 0){days=0;}
      document.Caselle.txgg022.value=Math.floor(days);
      document.Caselle.txImp022.value=(importo*((document.Caselle.txSaggio022.value*days)/36500)).toFixed(2);
  }

  else
  {
  document.Caselle.txgg022.value="0";
  document.Caselle.txImp022.value="0";
  }



//2 scaglione

    if ((DataDa<sc2da) ) //Se la data iniziale è minore dell'inizio scaglione (passa in questo scaglione
    {
      if (DataA>=sc2a){var days = Calgg(sc2da, sc2a) +1;} // Se la data Finale (dataA) è maggiore (scade cioè nello scaglione successivo
      else {var days = Calgg(sc2da, DataA) +1;} // Altrimenti (scade cioè in questo scaglione
      if (days <= 0){days=0;}
      document.Caselle.txgg031.value=Math.floor(days);
      document.Caselle.txImp031.value=(importo*((document.Caselle.txSaggio031.value*days)/36500)).toFixed(2);
    }
  //Se INVECE la iniziale dataDA è maggiore o uguale dell'inizio scaglione bisogna distinguere
    else 
    {  
      if ((DataDa<sc2a)) // Se DataDA è MINORE DI fine scaglione
      {
      var days = Calgg(DataDa, DataA) +1; // ERA COSì: var days = Calgg(DataDa, sc2a) +1;
      document.Caselle.txgg031.value=Math.floor(days);
      document.Caselle.txImp031.value=(importo*((document.Caselle.txSaggio031.value*days)/36500)).toFixed(2);
      }
      //Se DataDA è MINORE DI fine scaglione deve dare sempre 0
      else
      {
	document.Caselle.txgg031.value="0"
	document.Caselle.txImp031.value=("0")
      }
     }


//3 scaglione
    if ((DataDa<=sc3da) ) //Se la data iniziale è minore dell'inizio scaglione (passa in questo scaglione
    {
      if (DataA>=sc3a){var days = Calgg(sc3da, sc3a) +1} // Se la data Finale (dataA) è maggiore (scade cioè nello scaglione successivo
      else {var days = Calgg(sc3da, DataA) +1} // Altrimenti (scade cioè in questo scaglione
      if (days <= 0){days=0;}
      document.Caselle.txgg032.value=Math.floor(days)
      document.Caselle.txImp032.value=(importo*((document.Caselle.txSaggio032.value*days)/36500)).toFixed(2);
    }
    else
    { if ((DataDa<sc3a)) // Se DataDA è MINORE DI fine scaglione
      {var days = Calgg(DataDa, DataA) +1;
      document.Caselle.txgg032.value=Math.floor(days);
      document.Caselle.txImp032.value=(importo*((document.Caselle.txSaggio032.value*days)/36500)).toFixed(2);}
      else
      {	document.Caselle.txgg032.value="0"
	document.Caselle.txImp032.value=("0")}
     }


//4 scaglione

    if ((DataDa<sc4da) ) //Se la data iniziale è minore dell'inizio scaglione (passa in questo scaglione
    {
      if (DataA>=sc4a){var days = Calgg(sc4da, sc4a) +1;} // Se la data Finale (dataA) è maggiore (scade cioè nello scaglione successivo
      else {var days = Calgg(sc4da, DataA) +1;} // Altrimenti (scade cioè in questo scaglione
      if (days <= 0){days=0;}
      document.Caselle.txgg041.value=Math.floor(days);
      document.Caselle.txImp041.value=(importo*((document.Caselle.txSaggio041.value*days)/36500)).toFixed(2);
    }
  //Se INVECE la iniziale dataDA è maggiore o uguale dell'inizio scaglione bisogna distinguere
    else 
    {  
      if ((DataDa<sc4a)) // Se DataDA è MINORE DI fine scaglione
      {
//alert("asda")
      var days = Calgg(DataDa, DataA) +1;
      document.Caselle.txgg041.value=Math.floor(days);
      document.Caselle.txImp041.value=(importo*((document.Caselle.txSaggio041.value*days)/36500)).toFixed(2);
      }
      //Se DataDA è MINORE DI fine scaglione deve dare sempre 0
      else
      {
	document.Caselle.txgg041.value="0"
	document.Caselle.txImp041.value=("0")
      }
     }

//5 scaglione
    if ((DataDa<=sc5da) ) //Se la data iniziale è minore dell'inizio scaglione (passa in questo scaglione
    {
      if (DataA>=sc5a){var days = Calgg(sc5da, sc5a) +1} // Se la data Finale (dataA) è maggiore (scade cioè nello scaglione successivo
      else {var days = Calgg(sc5da, DataA) +1} // Altrimenti (scade cioè in questo scaglione
      if (days <= 0){days=0;}
      document.Caselle.txgg042.value=Math.floor(days)
      document.Caselle.txImp042.value=(importo*((document.Caselle.txSaggio042.value*days)/36500)).toFixed(2);
    }
    else
    { if ((DataDa<sc5a)) // Se DataDA è MINORE DI fine scaglione
      {var days = Calgg(DataDa, DataA) +1;
      document.Caselle.txgg042.value=Math.floor(days);
      document.Caselle.txImp042.value=(importo*((document.Caselle.txSaggio042.value*days)/36500)).toFixed(2);}
      else
      {	document.Caselle.txgg042.value="0"
	document.Caselle.txImp042.value=("0")}
     }

//6 scaglione

    if ((DataDa<=sc6da) ) //Se la data iniziale è minore dell'inizio scaglione (passa in questo scaglione
    {
      if (DataA>=sc6a){var days = Calgg(sc6da, sc6a) +1} // Se la data Finale (dataA) è maggiore (scade cioè nello scaglione successivo
      else {var days = Calgg(sc6da, DataA) +1} // Altrimenti (scade cioè in questo scaglione
      if (days <= 0){days=0;}
      document.Caselle.txgg051.value=Math.floor(days)
      document.Caselle.txImp051.value=(importo*((document.Caselle.txSaggio051.value*days)/36500)).toFixed(2);
    }
    else
    { if ((DataDa<sc6a)) // Se DataDA è MINORE DI fine scaglione
      {var days = Calgg(DataDa, DataA) +1;
      document.Caselle.txgg051.value=Math.floor(days);
      document.Caselle.txImp051.value=(importo*((document.Caselle.txSaggio051.value*days)/36500)).toFixed(2);}
      else
      {	document.Caselle.txgg051.value="0"
	document.Caselle.txImp051.value=("0")
      }
     }

//7 scaglione
    if ((DataDa<=sc7da) ) //Se la data iniziale è minore dell'inizio scaglione (passa in questo scaglione
    {
      if (DataA>=sc7a){var days = Calgg(sc7da, sc7a) +1} // Se la data Finale (dataA) è maggiore (scade cioè nello scaglione successivo
      else {var days = Calgg(sc7da, DataA) +1} // Altrimenti (scade cioè in questo scaglione
      if (days <= 0){days=0;}
      document.Caselle.txgg052.value=Math.floor(days)
      document.Caselle.txImp052.value=(importo*((document.Caselle.txSaggio052.value*days)/36500)).toFixed(2);
    }
    else
    { if ((DataDa<sc7a)) // Se DataDA è MINORE DI fine scaglione
      {var days = Calgg(DataDa, DataA) +1;
      document.Caselle.txgg052.value=Math.floor(days);
      document.Caselle.txImp052.value=(importo*((document.Caselle.txSaggio052.value*days)/36500)).toFixed(2);}
      else
      {	document.Caselle.txgg052.value="0"
	document.Caselle.txImp052.value=("0")
      }
     }


//8 scaglione

    if ((DataDa<=sc8da) ) //Se la data iniziale è minore dell'inizio scaglione (passa in questo scaglione
    {
      if (DataA>=sc8a){var days = Calgg(sc8da, sc8a) +1} // Se la data Finale (dataA) è maggiore (scade cioè nello scaglione successivo
      else {var days = Calgg(sc8da, DataA) +1} // Altrimenti (scade cioè in questo scaglione
      if (days <= 0){days=0;}
      document.Caselle.txgg061.value=Math.floor(days)
      document.Caselle.txImp061.value=(importo*((document.Caselle.txSaggio061.value*days)/36500)).toFixed(2);
    }
    else
    { if ((DataDa<sc8a)) // Se DataDA è MINORE DI fine scaglione
      {var days = Calgg(DataDa, DataA) +1;
      document.Caselle.txgg061.value=Math.floor(days);
      document.Caselle.txImp061.value=(importo*((document.Caselle.txSaggio061.value*days)/36500)).toFixed(2);}
      else
      {	document.Caselle.txgg061.value="0"
	document.Caselle.txImp061.value=("0")}
     }

//9 scaglione (ULTIMO)

    if ((DataDa<=sc9da) ) //Se la data iniziale è minore dell'inizio scaglione (passa in questo scaglione
    {
      if (DataA>=sc9a){var days = Calgg(sc9da, sc9a) +1;} // Se la data Finale (dataA) è maggiore (scade cioè nello scaglione successivo
      else {var days = Calgg(sc9da, DataA) +1 } // Altrimenti (scade cioè in questo scaglione
      if (days <= 0){days=0;}
      document.Caselle.txgg062.value=Math.floor(days)
      document.Caselle.txImp062.value=(importo*((document.Caselle.txSaggio062.value*days)/36500)).toFixed(2);
    }
    else
    { if ((DataDa<sc9a)) // Se DataDA è MINORE DI fine scaglione
      {var days = Calgg(DataDa, DataA) +1;
//alert(days)
      document.Caselle.txgg062.value=Math.floor(days);
      document.Caselle.txImp062.value=(importo*((document.Caselle.txSaggio062.value*days)/36500)).toFixed(2);}
      else
      {	document.Caselle.txgg062.value="0"
	document.Caselle.txImp062.value=("0")}
     }

//alert("fine")

//Calcola il totale
var nTotale = (

Number(document.Caselle.txImp022.value)+
Number(document.Caselle.txImp031.value)+
Number(document.Caselle.txImp032.value)+
Number(document.Caselle.txImp041.value)+
Number(document.Caselle.txImp042.value)+
Number(document.Caselle.txImp051.value)+
Number(document.Caselle.txImp062.value)+
Number(document.Caselle.txImp061.value)+
Number(document.Caselle.txImp062.value)

)



document.Risultato.TxTotale.value = Number(nTotale).toFixed(2)//nTotale

//Visualizza il pulsante nuova prstazione
//document.getElementById("PulsNewPrest").type="button";
//Visualizza il pulsante stampa
document.getElementById("PulsSta").type="button";
//e il form pratica
document.getElementById("FormPratica").style.visibility="visible";


//FINE FUNZIONE CALCOLO
}

function ResetAll()
{
//parent.document.getElementById("Fr1").height="309px"
ScriviSaggio()

document.Caselle.txgg022.value="-";
document.Caselle.txgg031.value="-";
document.Caselle.txgg032.value="-";
document.Caselle.txgg041.value="-";
document.Caselle.txgg042.value="-";
document.Caselle.txgg051.value="-";
document.Caselle.txgg052.value="-";
document.Caselle.txgg061.value="-";
document.Caselle.txgg062.value="-";


document.Caselle.txImp022.value="-";
document.Caselle.txImp031.value="-";
document.Caselle.txImp032.value="-";
document.Caselle.txImp041.value="-";
document.Caselle.txImp042.value="-";
document.Caselle.txImp051.value="-";
document.Caselle.txImp052.value="-";
document.Caselle.txImp061.value="-";
document.Caselle.txImp062.value="-";


//document.Maggiorazione.Chkmagg.checked=false


//Select1
Oggi()

//Select2
document.DataDa.giorno.value="08";
document.DataDa.mese.value="08";
document.DataDa.anno.value="2002";

document.Risultato.TxTotale.value = "0"
document.Dati.TxCapitale.value=""
//nasconde il pulsante stampa
document.getElementById("PulsSta").type="hidden";
document.getElementById("FormPratica").style.visibility="hidden";
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



function ScriviSaggio()
{

//var SeMagg = document.Maggiorazione.Chkmagg.checked
//alert(document.Maggiorazione.Chkmagg.checked)


//if (document.Maggiorazione.Chkmagg.checked)
//{var m = 2;}
//else
//{var m = 0;}

m=0

s1=(5 + m);
s2=(10 + m);
s3=(5 + m);
s4=(2.5 + m);
s5=(3.5 + m);
s6=(3 + m);
s7=(2.5 + m);
s8=(3 + m);
s9=(1 + m);

document.Caselle.txSaggio022.value=s1;
document.Caselle.txSaggio031.value=s2;
document.Caselle.txSaggio032.value=s3;
document.Caselle.txSaggio041.value=s4;
document.Caselle.txSaggio042.value=s5;
document.Caselle.txSaggio051.value=s6;
document.Caselle.txSaggio052.value=s7;
document.Caselle.txSaggio061.value=s8;
document.Caselle.txSaggio062.value=s9;

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


