

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
vs10=document.Caselle.txSaggio071.value;
vs11=document.Caselle.txSaggio072.value;
vs12=document.Caselle.txSaggio081.value;
vs13=document.Caselle.txSaggio082.value;
vs14=document.Caselle.txSaggio091.value;
vs15=document.Caselle.txSaggio092.value;
vs16=document.Caselle.txSaggio101.value;

vg1=document.Caselle.txgg022.value;
vg2=document.Caselle.txgg031.value;
vg3=document.Caselle.txgg032.value;
vg4=document.Caselle.txgg041.value;
vg5=document.Caselle.txgg042.value;
vg6=document.Caselle.txgg051.value;
vg7=document.Caselle.txgg052.value;
vg8=document.Caselle.txgg061.value;
vg9=document.Caselle.txgg062.value;
vg10=document.Caselle.txgg071.value;
vg11=document.Caselle.txgg072.value;
vg12=document.Caselle.txgg081.value;
vg13=document.Caselle.txgg082.value;
vg14=document.Caselle.txgg091.value;
vg15=document.Caselle.txgg092.value;
vg16=document.Caselle.txgg101.value;

vi1=document.Caselle.txImp022.value;
vi2=document.Caselle.txImp031.value;
vi3=document.Caselle.txImp032.value;
vi4=document.Caselle.txImp041.value;
vi5=document.Caselle.txImp042.value;
vi6=document.Caselle.txImp051.value;
vi7=document.Caselle.txImp052.value;
vi8=document.Caselle.txImp061.value;
vi9=document.Caselle.txImp062.value;
vi10=document.Caselle.txImp071.value;
vi11=document.Caselle.txImp072.value;
vi12=document.Caselle.txImp081.value;
vi13=document.Caselle.txImp082.value;
vi14=document.Caselle.txImp091.value;
vi15=document.Caselle.txImp092.value;
vi16=document.Caselle.txImp101.value;

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
"<br>"+ "  Saggio: "+ vs2 + " - Giorni: "+ vg2 + " - Importo: Euro"+ vi2 + "<br>"+
"01.07.03 - 31.12.03" +
"<br>"+ "  Saggio: "+ vs3 + " - Giorni: "+ vg3 + " - Importo: Euro"+ vi3+"<br>"+
"01.01.04 - 30.06.04 " +
"<br>"+ "  Saggio: "+ vs4 + " - Giorni: "+ vg4 + " - Importo: Euro"+ vi4+"<br>"+
"01.07.04 - 31.12.04" +
"<br>"+ "  Saggio: "+ vs5 + " - Giorni: "+ vg5 + " - Importo: Euro"+ vi5+"<br>"+
"01.01.05 - 30.06.05" +
"<br>"+ "  Saggio: "+ vs6 + " - Giorni: "+ vg6 + " - Importo: Euro"+ vi6+"<br>"+
"01.07.05 - 31.12.05" +
"<br>"+ "  Saggio: "+vs7 + " - Giorni: "+ vg7 + " - Importo: Euro"+ vi7+"<br>"+
"01.01.06 - 30.06.06" +
"<br>"+ "  Saggio: "+ vs8 + " - Giorni: "+ vg8 + " - Importo: Euro"+ vi8+"<br>"+
"01.07.06 - 31.12.06" +
"<br>"+ "  Saggio: "+ vs9 + " - Giorni: "+ vg9 + " - Importo: Euro"+ vi9+"<br>"+
"01.01.07 - 30.06.07" +
"<br>"+ "  Saggio: "+ vs10 + " - Giorni: "+ vg10 + " - Importo: Euro"+ vi10+"<br>"+
"01.07.07 - 31.12.07" +
"<br>"+ "  Saggio: "+ vs11 + " - Giorni: "+ vg11 + " - Importo: Euro"+ vi11+"<br>"+
"01.01.08 - 30.06.08" +
"<br>"+ "  Saggio: "+ vs12 + " - Giorni: "+ vg12 + " - Importo: Euro"+ vi12+"<br>"+
"01.07.08 - 31.12.08" +
"<br>"+ "  Saggio: "+ vs13 + " - Giorni: "+ vg13 + " - Importo: Euro"+ vi13+"<br>"+
"01.01.09 - 30.06.09" +
"<br>"+ "  Saggio: "+ vs14 + " - Giorni: "+ vg14 + " - Importo: Euro"+ vi14+"<br>"+
"1.07.09 - 31.12.09" +
"<br>"+ "  Saggio: "+ vs15 + " - Giorni: "+ vg15 + " - Importo: Euro"+ vi15+"<br>"+
"01.01.10 - 30.06.10 " +
"<br>"+ "  Saggio: "+ vs16 + " - Giorni: " + vg16 + " - Importo: Euro"+ vi16+ "<br>"+
"<br>"+"<br>"

);

var pippo=""

//PASSA ALLA STAMPA
fin=window.open("about:blank","Finestra_Stampa.html")
fin.document.location.reload()
fin.document.write("<html><body onLoad='self.print()'><form style='font-family: Helvetica,Arial,sans-serif; '>"+DaStampare+"</body></html>")

//fin.document.close()

}



function CalcolaIntMor() 
{
//alert("jjj")
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
DataInizio = new Date (""+"August"+", "+"8"+" "+"2002"+" 00:00");
DataFine = new Date(""+"July"+", "+"01"+" "+"2010"+" 00:00");

if(DataA>DataFine){alert("Attenzione. La data finale immessa è sucessiva al 30-6.2010.");return};
if(DataA>DataFine){alert("Attenzione. La data finale immessa è anteriore all'8-8-2002.");return};

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
//2002
var sc02da2 = new Date(""+"August"+", "+"8"+" "+"2002"+" 00:00");
var sc02a2 = new Date(""+"December"+", "+"31"+" "+"2002"+" 00:00");
//2003
var sc03da1 = new Date(""+"January"+", "+"01"+" "+"2003"+" 00:00");
var sc03a1 = new Date(""+"June"+", "+"30"+" "+"2003"+" 00:00");
var sc03da2 = new Date(""+"July"+", "+"01"+" "+"2003"+" 00:00");
var sc03a2 = new Date(""+"December"+", "+"31"+" "+"2003"+" 00:00");
//2004
var sc04da1 = new Date(""+"January"+", "+"01"+" "+"2004"+" 00:00");
var sc04a1 = new Date(""+"June"+", "+"30"+" "+"2004"+" 00:00");
var sc04da2 = new Date(""+"July"+", "+"01"+" "+"2004"+" 00:00");
var sc04a2 = new Date(""+"December"+", "+"31"+" "+"2004"+" 00:00");
//2005
var sc05da1 = new Date(""+"January"+", "+"01"+" "+"2005"+" 00:00");
var sc05a1 = new Date(""+"June"+", "+"30"+" "+"2005"+" 00:00");
var sc05da2 = new Date(""+"July"+", "+"01"+" "+"2005"+" 00:00");
var sc05a2 = new Date(""+"December"+", "+"31"+" "+"2005"+" 00:00");
//2006
var sc06da1 = new Date(""+"January"+", "+"01"+" "+"2006"+" 00:00");
var sc06a1 = new Date(""+"June"+", "+"30"+" "+"2006"+" 00:00");
var sc06da2 = new Date(""+"July"+", "+"01"+" "+"2006"+" 00:00");
var sc06a2 = new Date(""+"December"+", "+"31"+" "+"2006"+" 00:00");
//2003
var sc06da1 = new Date(""+"January"+", "+"01"+" "+"2006"+" 00:00");
var sc06a1 = new Date(""+"June"+", "+"30"+" "+"2006"+" 00:00");
var sc06da2 = new Date(""+"July"+", "+"01"+" "+"2006"+" 00:00");
var sc06a2 = new Date(""+"December"+", "+"31"+" "+"2006"+" 00:00");
//2003
var sc07da1 = new Date(""+"January"+", "+"01"+" "+"2007"+" 00:00");
var sc07a1 = new Date(""+"June"+", "+"30"+" "+"2007"+" 00:00");
var sc07da2 = new Date(""+"July"+", "+"01"+" "+"2007"+" 00:00");
var sc07a2 = new Date(""+"December"+", "+"31"+" "+"2007"+" 00:00");
//2003
var sc08da1 = new Date(""+"January"+", "+"01"+" "+"2008"+" 00:00");
var sc08a1 = new Date(""+"June"+", "+"30"+" "+"2008"+" 00:00");
var sc08da2 = new Date(""+"July"+", "+"01"+" "+"2008"+" 00:00");
var sc08a2 = new Date(""+"December"+", "+"31"+" "+"2008"+" 00:00");
//2003
var sc09da1 = new Date(""+"January"+", "+"01"+" "+"2009"+" 00:00");
var sc09a1 = new Date(""+"June"+", "+"30"+" "+"2009"+" 00:00");
var sc09da2 = new Date(""+"July"+", "+"01"+" "+"2009"+" 00:00");
var sc09a2 = new Date(""+"December"+", "+"31"+" "+"2009"+" 00:00");
//2003
var sc10da1 = new Date(""+"January"+", "+"01"+" "+"2010"+" 00:00");
var sc10a1 = new Date(""+"June"+", "+"30"+" "+"2010"+" 00:00");
var sc10da2 = new Date(""+"July"+", "+"01"+" "+"2010"+" 00:00");
var sc10a2 = new Date(""+"December"+", "+"31"+" "+"2010"+" 00:00");





//Cambia data a 8.8.02, se la dataDA è inferiore
  if ((DataDa<sc02da2) )
  {
  DataDa=sc02da2;
  }

  //2002 2 sem
  if ((DataDa>=sc02da2) && (DataDa<=sc02a2) )
  {
      var days = Calgg(DataDa, sc02a2) +1;

      if (days <= 0){days=0;}
      document.Caselle.txgg022.value=Math.floor(days);
      document.Caselle.txImp022.value=(importo*((document.Caselle.txSaggio022.value*days)/36500)).toFixed(2);
  }

  else
  {
  document.Caselle.txgg022.value="0";
  document.Caselle.txImp022.value="0";
  }


//2003 1 sem
//2003 1 sem

    if ((DataDa<sc03da1) ) //Se la data iniziale è minore dell'inizio scaglione (passa in questo scaglione
    {
      if (DataA>=sc03a1){var days = Calgg(sc03da1, sc03a1) +1;} // Se la data Finale (dataA) è maggiore (scade cioè nello scaglione successivo
      else {var days = Calgg(sc03da1, DataA) +1;} // Altrimenti (scade cioè in questo scaglione
      if (days <= 0){days=0;}
      document.Caselle.txgg031.value=Math.floor(days);
      document.Caselle.txImp031.value=(importo*((document.Caselle.txSaggio031.value*days)/36500)).toFixed(2);
    }
  //Se INVECE la iniziale dataDA è maggiore o uguale dell'inizio scaglione bisogna distinguere
    else 
    {  
      if ((DataDa<sc03a1)) // Se DataDA è MINORE DI fine scaglione
      {
      var days = Calgg(DataDa, DataA) +1;
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
//2003 2 sem
    if ((DataDa<=sc03da2) ) //Se la data iniziale è minore dell'inizio scaglione (passa in questo scaglione
    {
      if (DataA>=sc03a2){var days = Calgg(sc03da2, sc03a2) +1} // Se la data Finale (dataA) è maggiore (scade cioè nello scaglione successivo
      else {var days = Calgg(sc03a2, DataA) +1} // Altrimenti (scade cioè in questo scaglione
      if (days <= 0){days=0;}
      document.Caselle.txgg032.value=Math.floor(days)
      document.Caselle.txImp032.value=(importo*((document.Caselle.txSaggio032.value*days)/36500)).toFixed(2);
    }
    else
    { if ((DataDa<sc03a2)) // Se DataDA è MINORE DI fine scaglione
      {var days = Calgg(DataDa, DataA) +1;
      document.Caselle.txgg032.value=Math.floor(days);
      document.Caselle.txImp032.value=(importo*((document.Caselle.txSaggio032.value*days)/36500)).toFixed(2);}
      else
      {	document.Caselle.txgg032.value="0"
	document.Caselle.txImp032.value=("0")}
     }


//2004 1 sem

    if ((DataDa<sc04da1) ) //Se la data iniziale è minore dell'inizio scaglione (passa in questo scaglione
    {
      if (DataA>=sc04a1){var days = Calgg(sc04da1, sc04a1) +1;} // Se la data Finale (dataA) è maggiore (scade cioè nello scaglione successivo
      else {var days = Calgg(sc04da1, DataA) +1;} // Altrimenti (scade cioè in questo scaglione
      if (days <= 0){days=0;}
      document.Caselle.txgg041.value=Math.floor(days);
      document.Caselle.txImp041.value=(importo*((document.Caselle.txSaggio041.value*days)/36500)).toFixed(2);
    }
  //Se INVECE la iniziale dataDA è maggiore o uguale dell'inizio scaglione bisogna distinguere
    else 
    {  
      if ((DataDa<sc04a1)) // Se DataDA è MINORE DI fine scaglione
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
//2004 2 sem
    if ((DataDa<=sc04da2) ) //Se la data iniziale è minore dell'inizio scaglione (passa in questo scaglione
    {
      if (DataA>=sc04a2){var days = Calgg(sc04da2, sc04a2) +1} // Se la data Finale (dataA) è maggiore (scade cioè nello scaglione successivo
      else {var days = Calgg(sc04a2, DataA) +1} // Altrimenti (scade cioè in questo scaglione
      if (days <= 0){days=0;}
      document.Caselle.txgg042.value=Math.floor(days)
      document.Caselle.txImp042.value=(importo*((document.Caselle.txSaggio042.value*days)/36500)).toFixed(2);
    }
    else
    { if ((DataDa<sc04a2)) // Se DataDA è MINORE DI fine scaglione
      {var days = Calgg(DataDa, DataA) +1;
      document.Caselle.txgg042.value=Math.floor(days);
      document.Caselle.txImp042.value=(importo*((document.Caselle.txSaggio042.value*days)/36500)).toFixed(2);}
      else
      {	document.Caselle.txgg042.value="0"
	document.Caselle.txImp042.value=("0")}
     }

//2005 1 sem

    if ((DataDa<=sc05da1) ) //Se la data iniziale è minore dell'inizio scaglione (passa in questo scaglione
    {
      if (DataA>=sc05a1){var days = Calgg(sc05da1, sc05a1) +1} // Se la data Finale (dataA) è maggiore (scade cioè nello scaglione successivo
      else {var days = Calgg(sc05da1, DataA) +1} // Altrimenti (scade cioè in questo scaglione
      if (days <= 0){days=0;}
      document.Caselle.txgg051.value=Math.floor(days)
      document.Caselle.txImp051.value=(importo*((document.Caselle.txSaggio051.value*days)/36500)).toFixed(2);
    }
    else
    { if ((DataDa<sc05a1)) // Se DataDA è MINORE DI fine scaglione
      {var days = Calgg(DataDa, DataA) +1;
      document.Caselle.txgg051.value=Math.floor(days);
      document.Caselle.txImp051.value=(importo*((document.Caselle.txSaggio051.value*days)/36500)).toFixed(2);}
      else
      {	document.Caselle.txgg051.value="0"
	document.Caselle.txImp051.value=("0")}
     }

//2005 2 sem
    if ((DataDa<=sc05da2) ) //Se la data iniziale è minore dell'inizio scaglione (passa in questo scaglione
    {
      if (DataA>=sc05a2){var days = Calgg(sc05da2, sc05a2) +1} // Se la data Finale (dataA) è maggiore (scade cioè nello scaglione successivo
      else {var days = Calgg(sc05a2, DataA) +1} // Altrimenti (scade cioè in questo scaglione
      if (days <= 0){days=0;}
      document.Caselle.txgg052.value=Math.floor(days)
      document.Caselle.txImp052.value=(importo*((document.Caselle.txSaggio052.value*days)/36500)).toFixed(2);
    }
    else
    { if ((DataDa<sc05a2)) // Se DataDA è MINORE DI fine scaglione
      {var days = Calgg(DataDa, DataA) +1;
      document.Caselle.txgg052.value=Math.floor(days);
      document.Caselle.txImp052.value=(importo*((document.Caselle.txSaggio052.value*days)/36500)).toFixed(2);}
      else
      {	document.Caselle.txgg052.value="0"
	document.Caselle.txImp052.value=("0")}
     }


//2006 1 sem

    if ((DataDa<=sc06da1) ) //Se la data iniziale è minore dell'inizio scaglione (passa in questo scaglione
    {
      if (DataA>=sc06a1){var days = Calgg(sc06da1, sc06a1) +1} // Se la data Finale (dataA) è maggiore (scade cioè nello scaglione successivo
      else {var days = Calgg(sc06da1, DataA) +1} // Altrimenti (scade cioè in questo scaglione
      if (days <= 0){days=0;}
      document.Caselle.txgg061.value=Math.floor(days)
      document.Caselle.txImp061.value=(importo*((document.Caselle.txSaggio061.value*days)/36500)).toFixed(2);
    }
    else
    { if ((DataDa<sc06a1)) // Se DataDA è MINORE DI fine scaglione
      {var days = Calgg(DataDa, DataA) +1;
      document.Caselle.txgg061.value=Math.floor(days);
      document.Caselle.txImp061.value=(importo*((document.Caselle.txSaggio061.value*days)/36500)).toFixed(2);}
      else
      {	document.Caselle.txgg061.value="0"
	document.Caselle.txImp061.value=("0")}
     }

//2006 2 sem
    if ((DataDa<=sc06da2) ) //Se la data iniziale è minore dell'inizio scaglione (passa in questo scaglione
    {
      if (DataA>=sc06a2){var days = Calgg(sc06da2, sc06a2) +1} // Se la data Finale (dataA) è maggiore (scade cioè nello scaglione successivo
      else {var days = Calgg(sc06a2, DataA) +1} // Altrimenti (scade cioè in questo scaglione
      if (days <= 0){days=0;}
      document.Caselle.txgg062.value=Math.floor(days)
      document.Caselle.txImp062.value=(importo*((document.Caselle.txSaggio062.value*days)/36500)).toFixed(2);
    }
    else
    { if ((DataDa<sc06a2)) // Se DataDA è MINORE DI fine scaglione
      {var days = Calgg(DataDa, DataA) +1;
      document.Caselle.txgg062.value=Math.floor(days);
      document.Caselle.txImp062.value=(importo*((document.Caselle.txSaggio062.value*days)/36500)).toFixed(2);}
      else
      {	document.Caselle.txgg062.value="0"
	document.Caselle.txImp062.value=("0")}
     }

//2007 1 sem
    if ((DataDa<=sc07da1) ) //Se la data iniziale è minore dell'inizio scaglione (passa in questo scaglione
    {
      if (DataA>=sc07a1){var days = Calgg(sc07da1, sc07a1) +1} // Se la data Finale (dataA) è maggiore (scade cioè nello scaglione successivo
      else {var days = Calgg(sc07da1, DataA) +1} // Altrimenti (scade cioè in questo scaglione
      if (days <= 0){days=0;}
      document.Caselle.txgg071.value=Math.floor(days)
      document.Caselle.txImp071.value=(importo*((document.Caselle.txSaggio071.value*days)/36500)).toFixed(2);
    }
    else
    { if ((DataDa<sc07a1)) // Se DataDA è MINORE DI fine scaglione
      {var days = Calgg(DataDa, DataA) +1;
      document.Caselle.txgg071.value=Math.floor(days);
      document.Caselle.txImp071.value=(importo*((document.Caselle.txSaggio071.value*days)/36500)).toFixed(2);}
      else
      {	document.Caselle.txgg071.value="0"
	document.Caselle.txImp071.value=("0")}
     }

//2007 2 sem
    if ((DataDa<=sc07da2) ) //Se la data iniziale è minore dell'inizio scaglione (passa in questo scaglione
    {
      if (DataA>=sc07a2){var days = Calgg(sc07da2, sc07a2) +1} // Se la data Finale (dataA) è maggiore (scade cioè nello scaglione successivo
      else {var days = Calgg(sc07da2, DataA) +1} // Altrimenti (scade cioè in questo scaglione
      if (days <= 0){days=0;}
      document.Caselle.txgg072.value=Math.floor(days)
      document.Caselle.txImp072.value=(importo*((document.Caselle.txSaggio072.value*days)/36500)).toFixed(2);
    }
    else
    { if ((DataDa<sc07a2)) // Se DataDA è MINORE DI fine scaglione
      {var days = Calgg(DataDa, DataA) +1;
      document.Caselle.txgg072.value=Math.floor(days);
      document.Caselle.txImp072.value=(importo*((document.Caselle.txSaggio072.value*days)/36500)).toFixed(2);}
      else
      {	document.Caselle.txgg072.value="0"
	document.Caselle.txImp072.value=("0")}
     }

//2008 1 sem
    if ((DataDa<=sc08da1) ) //Se la data iniziale è minore dell'inizio scaglione (passa in questo scaglione
    {
      if (DataA>=sc08a1){var days = Calgg(sc08da1, sc08a1) +1} // Se la data Finale (dataA) è maggiore (scade cioè nello scaglione successivo
      else {var days = Calgg(sc08da1, DataA) +1} // Altrimenti (scade cioè in questo scaglione
      if (days <= 0){days=0;}
      document.Caselle.txgg081.value=Math.floor(days)
      document.Caselle.txImp081.value=(importo*((document.Caselle.txSaggio081.value*days)/36500)).toFixed(2);
    }
    else
    { if ((DataDa<sc08a1)) // Se DataDA è MINORE DI fine scaglione
      {var days = Calgg(DataDa, DataA) +1;
      document.Caselle.txgg081.value=Math.floor(days);
      document.Caselle.txImp081.value=(importo*((document.Caselle.txSaggio081.value*days)/36500)).toFixed(2);}
      else
      {	document.Caselle.txgg081.value="0"
	document.Caselle.txImp081.value=("0")}
     }

//2008 2 sem
    if ((DataDa<=sc08da2) ) //Se la data iniziale è minore dell'inizio scaglione (passa in questo scaglione
    {
      if (DataA>=sc08a2){var days = Calgg(sc08da2, sc08a2) +1} // Se la data Finale (dataA) è maggiore (scade cioè nello scaglione successivo
      else {var days = Calgg(sc08da2, DataA) +1} // Altrimenti (scade cioè in questo scaglione
      if (days <= 0){days=0;}
      document.Caselle.txgg082.value=Math.floor(days)
      document.Caselle.txImp082.value=(importo*((document.Caselle.txSaggio082.value*days)/36500)).toFixed(2);
    }
    else
    { if ((DataDa<sc08a2)) // Se DataDA è MINORE DI fine scaglione
      {var days = Calgg(DataDa, DataA) +1;
      document.Caselle.txgg082.value=Math.floor(days);
      document.Caselle.txImp082.value=(importo*((document.Caselle.txSaggio082.value*days)/36500)).toFixed(2);}
      else
      {	document.Caselle.txgg082.value="0"
	document.Caselle.txImp082.value=("0")}
     }

//2009 1 sem
    if ((DataDa<=sc09da1) ) //Se la data iniziale è minore dell'inizio scaglione (passa in questo scaglione
    {
      if (DataA>=sc09a1){var days = Calgg(sc09da1, sc09a1) +1} // Se la data Finale (dataA) è maggiore (scade cioè nello scaglione successivo
      else {var days = Calgg(sc09da1, DataA) +1} // Altrimenti (scade cioè in questo scaglione
      if (days <= 0){days=0;}
      document.Caselle.txgg091.value=Math.floor(days)
      document.Caselle.txImp091.value=(importo*((document.Caselle.txSaggio091.value*days)/36500)).toFixed(2);
    }
    else
    { if ((DataDa<sc09a1)) // Se DataDA è MINORE DI fine scaglione
      {var days = Calgg(DataDa, DataA) +1;
      document.Caselle.txgg091.value=Math.floor(days);
      document.Caselle.txImp091.value=(importo*((document.Caselle.txSaggio091.value*days)/36500)).toFixed(2);}
      else
      {	document.Caselle.txgg091.value="0"
	document.Caselle.txImp091.value=("0")}
     }

//2009 2 sem
    if ((DataDa<=sc09da2) ) //Se la data iniziale è minore dell'inizio scaglione (passa in questo scaglione
    {
      if (DataA>=sc09a2){var days = Calgg(sc09da2, sc09a2) +1} // Se la data Finale (dataA) è maggiore (scade cioè nello scaglione successivo
      else {var days = Calgg(sc09a2, DataA) +1} // Altrimenti (scade cioè in questo scaglione
      if (days <= 0){days=0;}
      document.Caselle.txgg092.value=Math.floor(days)
      document.Caselle.txImp092.value=(importo*((document.Caselle.txSaggio092.value*days)/36500)).toFixed(2);
    }
    else
    { if ((DataDa<sc09a2)) // Se DataDA è MINORE DI fine scaglione
      {var days = Calgg(DataDa, DataA) +1;
      document.Caselle.txgg092.value=Math.floor(days);
      document.Caselle.txImp092.value=(importo*((document.Caselle.txSaggio092.value*days)/36500)).toFixed(2);}
      else
      {	document.Caselle.txgg092.value="0"
	document.Caselle.txImp092.value=("0")}
     }

//2010 1 sem

    if ((DataDa<=sc10da1) ) //Se la data iniziale è minore dell'inizio scaglione (passa in questo scaglione
    {
      if (DataA>=sc10a1){var days = Calgg(sc10da1, sc10a1) +1} // Se la data Finale (dataA) è maggiore (scade cioè nello scaglione successivo
      else {var days = Calgg(sc10da1, DataA) +1} // Altrimenti (scade cioè in questo scaglione
      if (days <= 0){days=0;}
      document.Caselle.txgg101.value=Math.floor(days)
      document.Caselle.txImp101.value=(importo*((document.Caselle.txSaggio101.value*days)/36500)).toFixed(2);
    }
    else
    { if ((DataDa<sc10a1)) // Se DataDA è MINORE DI fine scaglione
      {var days = Calgg(DataDa, DataA) +1;
      document.Caselle.txgg101.value=Math.floor(days);
      document.Caselle.txImp101.value=(importo*((document.Caselle.txSaggio101.value*days)/36500)).toFixed(2);}
      else
      {	document.Caselle.txgg101.value="0"
	document.Caselle.txImp101.value=("0")}
     }


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
Number(document.Caselle.txImp062.value)+
Number(document.Caselle.txImp071.value)+
Number(document.Caselle.txImp072.value)+
Number(document.Caselle.txImp081.value)+
Number(document.Caselle.txImp082.value)+
Number(document.Caselle.txImp091.value)+
Number(document.Caselle.txImp092.value)+
Number(document.Caselle.txImp101.value)
)



//Number(document.Caselle.txImp051.value).toFixed(2)
//alert(n2.toFixed(2));
//Number(nTotale).toFixed(2)


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

//parent.document.getElementById("Fr1").height="371px"
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
document.Caselle.txgg071.value="-";
document.Caselle.txgg072.value="-";
document.Caselle.txgg081.value="-";
document.Caselle.txgg082.value="-";
document.Caselle.txgg091.value="-";
document.Caselle.txgg092.value="-";
document.Caselle.txgg101.value="-";

document.Caselle.txImp022.value="-";
document.Caselle.txImp031.value="-";
document.Caselle.txImp032.value="-";
document.Caselle.txImp041.value="-";
document.Caselle.txImp042.value="-";
document.Caselle.txImp051.value="-";
document.Caselle.txImp052.value="-";
document.Caselle.txImp061.value="-";
document.Caselle.txImp062.value="-";
document.Caselle.txImp071.value="-";
document.Caselle.txImp072.value="-";
document.Caselle.txImp081.value="-";
document.Caselle.txImp082.value="-";
document.Caselle.txImp091.value="-";
document.Caselle.txImp092.value="-";
document.Caselle.txImp101.value="-";

document.Maggiorazione.Chkmagg.checked=false


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
//alert(DataDaControllare)
//Calcola il giorno della data immessa
//if (giorno<=9) {
	      //giorno = "0"+giorno;
	    //} 
//Calcola il mese
//if (mese<=9) {
	      //mese = "0"+mese;
	    //} 
	    //else {
	   // }


var DataImmessa = giorno+"-"+mese+"-"+anno;
//alert(DataDaControllare)

// CALCOLA
//Setta le variabili
thedateF = new Date();
thedateF=DataDaControllare;
var tday=""
var dday = thedateF.getDay();
var dd5 = thedateF.getDate();
var mm5 = thedateF.getMonth()+1;
var yy5=thedateF.getFullYear(); 

//alert (dday);
//Calcola il giorno
if (dd5<=9) {
	      var dt = "0"+String(dd5);
	    } 
	    else {
	    var dt=String(dd5);
	    }
//alert(dt)
//Calcola il mese
if (mm5<=9) {
	      var mt = "0"+String(mm5);
	    } 
	    else {
	    var mt=String(mm5);
	    }
//alert(mt)
//Calcola l'anno
var yt=String(yy5)
//alert(yt)

//Crea la stringa della data OTTENUTA DAL SISTEMA
//alert(yt)
//var StrDataCalcolata =""
var StrDataDaControllare = dt + "-" + mt + "-" + yt
//alert(StrDataDaControllare)
//alert (dt + "-" + mt + "-" + yt);
//Confronta le date
//alert("QUI "+DataImmessa+ " " + StrDataDaControllare)
	    //
var DataCorretta = new Date
	    if (DataImmessa!=StrDataDaControllare) {
//alert("QUI "+DataImmessa+ " " + StrDataDaControllare)
		DataCorretta = DeleDays(DataDaControllare, Number(dt));
//alert(DataCorretta)
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
//alert(DataCorretta)

return DataCorretta

}



function ScriviSaggio()
{

//var SeMagg = document.Maggiorazione.Chkmagg.checked
//alert(document.Maggiorazione.Chkmagg.checked)


if (document.Maggiorazione.Chkmagg.checked)
{var m = 2;}
else
{var m = 0;}
//alert(document.Maggiorazione.Chkmagg.checked)

//alert(m)

s1=(10.35 + m);
s2=(9.85 + m);
s3a=Number(9.10 + m).toFixed(2);var s3=String(s3a);
s4=(9.02 + m);
s5=(9.01 + m);
s6=(9.09 + m);
s7=(9.05 + m);
s8=(9.25 + m);
s9=(9.83 + m);
s10=(10.58 + m);
s11=(10.07 + m);
s12a=Number(11.20 + m).toFixed(2);var s12=String(s12a);
s13a=Number(11.10 + m).toFixed(2);var s13=String(s13a);
s14a=Number(9.50 + m).toFixed(2);var s14=String(s14a);
s15a=Number(8.00 + m).toFixed(2);var s15=String(s15a);
s16a=Number(8.00 + m).toFixed(2);var s16=String(s16a);


document.Caselle.txSaggio022.value=s1;
document.Caselle.txSaggio031.value=s2;
document.Caselle.txSaggio032.value=s3;
document.Caselle.txSaggio041.value=s4;
document.Caselle.txSaggio042.value=s5;
document.Caselle.txSaggio051.value=s6;
document.Caselle.txSaggio052.value=s7;
document.Caselle.txSaggio061.value=s8;
document.Caselle.txSaggio062.value=s9;
document.Caselle.txSaggio071.value=s10;
document.Caselle.txSaggio072.value=s11;
document.Caselle.txSaggio081.value=s12;
document.Caselle.txSaggio082.value=s13;
document.Caselle.txSaggio091.value=s14;
document.Caselle.txSaggio092.value=s15;
document.Caselle.txSaggio101.value=s16;





}



function Oggi()
{
Today = new Date();
//alert(oggi)
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
//alert(ggDataDa)

var ggDataA = DataTo.getTime()/(1000*60*60*24);// giorni trascorsi tra la mezzanotte del 1 Gennaio 1970 e la data immessa


//Calcola la differenza (in giorni)
var giorni = ggDataA-ggDataDa

return giorni

}


