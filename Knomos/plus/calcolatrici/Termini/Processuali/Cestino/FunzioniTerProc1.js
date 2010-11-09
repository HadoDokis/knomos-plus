  

var  reportFestivo, DataCorretta, DataSentenza, PasquaDay, GiornoDiPasqua, MeseDiPasqua, GiornoMeseDiPasqua, DecDay, mmm, mm,bday,byear,year,year2,year3,thedate,thedate02, thedate03, thedateF, mm2,dd2,yy2,yourage,TMonth,CurMonth,bmonth,age2,timerID,timerID2,timerRunning,today,startday,enday,secPerDay,minPerDay,hourPerDay,secsLeft,secsRound,secsRemain,minLeft,minRound,minRemain,timeRemain;
//DivTitolo



function SetPageLoad()
{
//alert("qui")
//     oggi
Oggi = new Date();
var ddo = Oggi.getDate();
var mmo = Oggi.getMonth()+1;
var yyo=Oggi.getFullYear(); 
document.MyForm.MyDayCalTer.value=ddo;
document.MyForm.MyMonthCalTer.value=mmo;
document.MyForm.MyYearCalTer.value=yyo;
//------------
TxUrl=location.href
//alert(TxUrl)
//Inizio emulazione di GetParams con url = txUrl
var allParams = new Array();
//var url = unescape( String(this.location) );
var url = TxUrl
var paramList = url.split("?")[1];
var params = paramList.split("&");
for(var i=0; i<params.length; i++)
{
var temp = params[i].split("=");
allParams[temp[0]] = temp[1];
//Fine emulazione di GetParams
}

var vModalita = allParams['modalita'];
//alert(vModalita)
document.MyForm.txModalita.value=vModalita


//Imposta la pagina a seconda della modalità

if (vModalita =="CalTerProc")//Se la calcolatrice è normale
{parent.document.getElementById("Fr1").height="373px"} 

else //altrimenti
{
//SE SEMPLICE IMPEGNO CALCOLATO
document.getElementById("IT").style.display="none"; //Nasconde il div del titolo

//SE IMPEGNO DERIVATO
if (vModalita =="CalcImpDeriv")
{
//Nasconde ANCHE il div dei controlli data;
document.getElementById("DD").style.display="none";

//quindi Imposta la data derivata
arr = parent.document.getElementsByTagName("span");
stringa=arr [5].innerHTML
//alert(stringa)
var i;
for (i = 0; i < stringa.length; i++) {var c = stringa.charAt(i);}
var splittata = stringa.split("/");
var gg1 = new Number(splittata[0])
var mm1 = new Number(splittata[1])
var aa1 = new Number(splittata[2])

DataDaDerivare = new Date(""+mm1+", "+gg1+" "+aa1+" 00:00");
//alert(DataDaDerivare)
var ddd = DataDaDerivare.getDate();
var mmd = DataDaDerivare.getMonth()+1;
var yyd = DataDaDerivare.getFullYear(); 
//alert(ddd)
document.MyForm.MyDayCalTer.value=ddd;
document.MyForm.MyMonthCalTer.value=mmd;
document.MyForm.MyYearCalTer.value=yyd;
} // FINE IMPEGNO DERIVATO
} //fine Impostazione della pagina a seconda della modalità


}


function FormData(DataDaFormattare)
{

//Setta le variabili
//thedateF = new Date();
//thedateF=DataDaFormattare
var tday=""
var dGiorno = DataDaFormattare.getDay();
var dd5 = DataDaFormattare.getDate();
var mm5 = DataDaFormattare.getMonth()+1;
var yy5 = DataDaFormattare.getFullYear();
//yy5 += 1900;

//Calcola il giorno della settimana
switch (dGiorno){
case 0:
  tday="Dom";
break
case 1:
    tday="Lun";
break
case 2:
    tday="Mar";
break
case 3:
    tday="Mer";
break
case 4:
    tday="Gio";
break
case 5:
    tday="Ven";
break
case 6:
    tday="Sab";
break
}

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

//Calcola la data
var fData =""

//fData = tday + " " + dt + "-" + mt + "-" + yt
fData = dt + "-" + mt + "-" + yt
//Restituisce il valore (in formato stringa)
return fData
}




function CalcolaInsMano()
{
//	checked == true
//SeInserito = document.MyForm.txMano1.value
//alert(SeInserito)

//	1) verifica che sia stato inserito qualcosa
SeInseritoNo = document.MyForm.txMano1
if(SeInseritoNo.value==""){alert("Inserire il termine da calcolare.");return};
//	2) verifica che il dato sia numerico o POSITIVO
SeInseritoNull = document.MyForm.txMano1
//alert(SeImportoNull.value>0)
if(SeInseritoNull.value>0 || SeInseritoNull.value<0){}else{alert("Inserimento termine: Attenzione! Cifra non corretta.");document.MyForm.txMano1.value="";return};




//Azzera tutti i valori
document.MyForm.SelTerminiCivili.value=0
document.MyForm.SelTerminiPenali.value=0


// Prendo dalle caselle i parametri var1, 2 e 3
v1=Number(document.MyForm.txMano1.value);


//Bisogna vedere se il liberi sono da togliere o aggiungere
// POI Prendo dalle caselle i parametri liberi1, 2 e 3 e setto la variabile L1,2,3

if (v1>=0){if (document.MyForm.ckLib1.checked==true){l1=2;}else {l1=0;}}else{if (document.MyForm.ckLib1.checked==true){l1=-2;}else {l1=0;}}


//if (document.MyForm.ckLib2.checked==true){l2=-2;}else {l2=0;}
//if (document.MyForm.ckLib2.checked==true){l2=-2;}else {l2=0;}
//if (document.MyForm.ckLib3.checked==true){l3=-2;}else {l3=0;}

// Prendo dalle caselle i parametri time1, 2 e 3
t1=document.MyForm.MyCalcolaIn1[document.MyForm.MyCalcolaIn1.selectedIndex].value;
//alert(t1)
// Passo i parametri alla funzione di calcolo
//WWWaggiungere
CalcolaInsSel(v1,t1,l1)

 }


function CalcolaInsSel(var1,time1,liberi1,tipo1,codicek1)
{

//         CALCOLA LA DATA 

mm = document.MyForm.MyMonthCalTer[document.MyForm.MyMonthCalTer.selectedIndex].value;
bday = document.MyForm.MyDayCalTer[document.MyForm.MyDayCalTer.selectedIndex].value;
byear = document.MyForm.MyYearCalTer[document.MyForm.MyYearCalTer.selectedIndex].value;

//MESE
//Converte il numero in testo
TMonth = new Array(
'January','February','March',
'April','May','June','July',
'August','September','October',
'November','December'
);
CurMonth = mm - 1;
bmonth = TMonth[CurMonth];

//         DATA
dDay = new Date(""+bmonth+", "+bday+" "+byear+" 00:00");
var AnnoProssimo= dDay.getFullYear()+1;
dDay = VerificaDataImmessaCalTer(bday,mm,byear,dDay)

//         FINE CALCOLO DELLA DATA


VarGG= Number(var1) + Number(liberi1)
// SOMME
Data1=AddeData(dDay,time1,VarGG)

NgSett=Data1.getDay()
switch (NgSett){
case 0:
  sday="Dom";
break
case 1:
    sday="Lun";
break
case 2:
    sday="Mar";
break
case 3:
    sday="Mer";
break
case 4:
    sday="Gio";
break
case 5:
    sday="Ven";
break
case 6:
    sday="Sab";
break
}
//alert(sday)
//Prende la stringa del tipo di festivita
var $Festivita1 = ControllaFestivo(Data1)


//Prepara le stringhe per txgg
//var $io1

if (var1==1 || var1==-1){var $io1="o";$ei1="e";}else {var $io1="i";$ei1="i";}
switch (time1){case "g": var $time1="giorn"+$io1; break; case "m": var $time1 = "mes"+$ei1; break; case "a": var $time1="ann"+$io1; break;default: var $time1="-"}
if (liberi1==0){var $liberi1="";}else {var $liberi1="liber"+$io1;}
if (var1==0){var $Stringa1="-";var $StringaNota0="-"; var $StringaSc1="-"; var $StringaNota1="-"; var SeFestivo1 = false;}else {var $Stringa1= var1; var $StringaNota0=$time1+" "+$liberi1; var $StringaSc1=FormData(Data1); var $StringaNota1= $Festivita1; var SeFestivo1 = true;}


//NB Il ciclo èrecedente ha settato una variabile che può essere importante per lo spostamento del termine SeFestivo=true/false

//if (SeFestivo1==true){;}
//else {}


//-----


//Scrive

document.MyForm.txData.value=FormData(dDay)
document.MyForm.txgg1.value=$Stringa1;
document.MyForm.txNota0.value=$StringaNota0;
document.MyForm.txSc1.value=$StringaSc1;
document.MyForm.txGset.value=sday;
document.MyForm.txNota1.value=$StringaNota1;
document.MyForm.txTipo1.value=tipo1;
document.MyForm.txCodiceK1.value=codicek1;
//FINE

//INIZIO CALCOLO FESTIVITÀ E PROROGHE

if ($StringaNota1=="") //Se non è una festa comandata
{
//alert("non è festa comandata")
    //Se è domenica
    if (sday=="Dom")
    {
      //alert(Data1)
      var DataProrogata = AddeData(Data1,"g","1")
      document.MyForm.txScProrogata.value=FormData(DataProrogata);

      var SeFestivita2 = ControllaFestivo(DataProrogata)
      if (SeFestivita2=="") 
      {
	//alert("è domenica ma non è festivo") //non deve fare niente
      }
      else
      {
      alert("Attenzione. La scadenza originaria, prorogata per la domenica, cade in un giorno festivo (" + SeFestivita2 + 
	    ") e viene ulteriormente spostata.")
      ProrogaFestaComandata(SeFestivita2,DataProrogata)
      }
      //Riempie entrambi i campi ed in particolare txScProrogataFinale, che poi verrà usato per creare l'impegno knomos
      //document.MyForm.txScProrogataFinale.value=FormData(DataProrogata);
      //visualizza il check ed il div proroga ed allunga l'altezza del frame
      document.getElementById("SeUsaPror").style.display="inline"
      document.getElementById("DivPror").style.display="inline"
      parent.document.getElementById("Fr1").height="393px"
      NgSettDP=DataProrogata.getDay()
      switch (NgSettDP){
      case 0:
	gSettDP="Dom";
      break
      case 1:
	  gSettDP="Lun";
      break
      case 2:
	  gSettDP="Mar";
      break
      case 3:
	  gSettDP="Mer";
      break
      case 4:
	  gSettDP="Gio";
      break
      case 5:
	  gSettDP="Ven";
      break
      case 6:
	  gSettDP="Sab";
      break
      }
      document.MyForm.txGsetDP.value=gSettDP;
    }
      else 
      {
      //non deve fare niente
      //alert("non è domenica")    
      }
}
else // se invece è una festa comandata
{
document.getElementById("DivFestaComandata").style.display="inline"
ProrogaFestaComandata($StringaNota1,Data1)
}

}
//FINE FUNZIONE

function ProrogaFestaComandata(FestaComandata,DataFesta)
{

      switch (FestaComandata)
      {  
	  case "Pasqua":
	    var DataProrogata1 = AddeData(DataFesta,"g","2")
	    document.MyForm.txScProrogata.value=FormData(DataProrogata1);
	    break;  
	  case "Natale":
	    var DataProrogata1 = AddeData(DataFesta,"g",2)
	    //document.MyForm.txScProrogata.value=FormData(DataProrogata1);
	    break;
	    default: 
	    var DataProrogata1 = AddeData(DataFesta,"g",1)
	  
      }

      //Scrive la data prorogata per il festivo (natale, pasqua ecc)
      document.MyForm.txScProrogata.value=FormData(DataProrogata1);
      //Riempie entrambi i campi ed in particolare txScProrogataFinale, che poi verrà usato per creare l'impegno knomos
      document.MyForm.txScProrogataFinale.value=FormData(DataProrogata1);
      //visualizza il check ed il div proroga ed allunga l'altezza del frame
      document.getElementById("SeUsaPror").style.display="inline"
      document.getElementById("DivPror").style.display="inline"
      parent.document.getElementById("Fr1").height="393px"


      //Verifica se il giorno prorogato cade di domenica
      NgSettDP=DataProrogata1.getDay()
      switch (NgSettDP){
      case 0:
	gSettDP="Dom";
      break
      case 1:
	  gSettDP="Lun";
      break
      case 2:
	  gSettDP="Mar";
      break
      case 3:
	  gSettDP="Mer";
      break
      case 4:
	  gSettDP="Gio";
      break
      case 5:
	  gSettDP="Ven";
      break
      case 6:
	  gSettDP="Sab";
      break
      }
      document.MyForm.txGsetDP.value=gSettDP;
      // e  se il giorno prorogato cade di domenica
      if (gSettDP=="Dom")
      {
	    var DataProrogata2= new Date(DataProrogata1)
	    var DataProrogataF = AddeData(DataProrogata2,"g","1")
	    document.MyForm.txScProrogataFinale.value=FormData(DataProrogataF);
      //Visualizza il div della seconda proroga
	    document.getElementById("dom2").style.display="inline"
      }


}



function ControllaFestivo(DataDaControllare)
{

var AnnoDaControllare=DataDaControllare.getFullYear()
TMonth = new Array('January','February','March','April','May','June','July','August','September','October','November','December');
//	imposta le variabili dei mesi
	    var gennaio=TMonth[0]
	    var febbraio=TMonth[1]
	    var marzo=TMonth[2]
	    var aprile=TMonth[3]
	    var maggio=TMonth[4]
	    var giugno=TMonth[5]
	    var luglio=TMonth[6]
	    var agosto=TMonth[7]
	    var settembre=TMonth[8]
	    var ottobre=TMonth[9]
	    var novembre=TMonth[10]
	    var dicembre=TMonth[11]



// PASQUA
var Pasqua = new Date(CalcolaPasqua(DataDaControllare.getFullYear()));
var GiornoDiPasqua=Pasqua.getDate();
var MeseDiPasqua = Pasqua.getMonth();
CurMonthPasqua = MeseDiPasqua;
MeseDiPasquaDaImmettere = TMonth[CurMonthPasqua];
var AnnoDiPasqua = Pasqua.getFullYear();

var LuAngelo = new Date(""+MeseDiPasquaDaImmettere+", "+(GiornoDiPasqua+1)+" "+AnnoDiPasqua+" 00:00:00 GMT+0100");

// FINE PASQUA

var Capodanno = new Date(""+gennaio+", "+1+" "+AnnoDaControllare+" 00:00:00 GMT+0100");
var Epifania = new Date(""+gennaio+", "+6+" "+AnnoDaControllare+" 00:00:00 GMT+0100");
var Aprile25 = new Date(""+aprile+", "+25+" "+AnnoDaControllare+" 00:00:00 GMT+0100");
var Maggio1 = new Date(""+maggio+", "+1+" "+AnnoDaControllare+" 00:00:00 GMT+0100");
var Ognissanti = new Date(""+novembre+", "+1+" "+AnnoDaControllare+" 00:00:00 GMT+0100");
var Giugno2 = new Date(""+giugno+", "+2+" "+AnnoDaControllare+" 00:00:00 GMT+0100");
var Natale = new Date(""+dicembre+", "+25+" "+AnnoDaControllare+" 00:00:00 GMT+0100");
var SStefano = new Date(""+dicembre+", "+26+" "+AnnoDaControllare+" 00:00:00 GMT+0100");
var Dicembre8 = new Date(""+dicembre+", "+8+" "+AnnoDaControllare+" 00:00:00 GMT+0100");


var scelta=FormData(DataDaControllare)

  switch (scelta) { 
    case FormData(Pasqua):
	var $festivita = "Pasqua";
      break;  
    case FormData(LuAngelo):
	var $festivita = "Lunedì dell'Angelo";
      break;  
    case FormData(Capodanno):
	var $festivita = "Capodanno";
      break;  
    case FormData(Epifania):
	var $festivita = "Epifania";
      break;  
    case FormData(Aprile25):
	var $festivita = "Ann. Liberazione";
      break;  
    case FormData(Maggio1):
	var $festivita = "Festa del Lavoro";
      break;  
    case FormData(Giugno2):
	var $festivita = "Festa della Repubblica";
      break;  
    case FormData(Ognissanti):
	var $festivita = "Ognissanti";
      break;  
    case FormData(Dicembre8):
	var $festivita = "Immacolata Concezione";
      break;  
    case FormData(Natale):
	var $festivita = "Natale";
      break;  
    case FormData(SStefano):
	var $festivita = "S. Stefano";
      break;  
    default: 
	var $festivita = "";
 }

return $festivita
}




function AddeData(DataDaCalcolare,TipoAggiunta,DaAggiungere)
{

//alert(DataDaCalcolare)
//alert(TipoAggiunta)
//alert("fx" + DaAggiungere)

  switch (TipoAggiunta) {
    case "g":

      DataC = new Date(DataDaCalcolare.getTime() + DaAggiungere*86400000);
//alert(DaAggiungere)
    break;
    case "m":
	mm=document.MyForm.MyMonthCalTer[document.MyForm.MyMonthCalTer.selectedIndex].value;
	CurMonth1a = mm - 1 ;
 //Questo perchè pensavo che se fosse stata il mese o gen avrei dovuto fare una cosa particolare invece non è così
	//if (CurMonth1a==0) {
	//CurMonth1b = CurMonth1a  + Number(DaAggiungere) ;
	//CurMonth1 = CurMonth1b // - 1;
	//}
	//else {
	CurMonth1 = CurMonth1a  + Number(DaAggiungere) ;
//}
	// se si va all'anno prossimo
	if (CurMonth1>=12) {
	nuovomese=CurMonth1-11 ;
	CurMonth1 = nuovomese-1;
	byear=AnnoProssimo
	}

	var bmonth1 = TMonth[CurMonth1];
	DataC = new Date(""+bmonth1+", "+bday+" "+byear+" 00:00");
    break;
    case "a":
	var AnnoCalc= DataDaCalcolare.getFullYear()+DaAggiungere;
	//var AnnoCalc = (AnnoCalc1 < 2000) ? AnnoCalc1 + 1900 : AnnoCalc1;
	DataC = new Date(""+bmonth+", "+bday+" "+AnnoCalc+" 00:00");
    break;
 }
return DataC
}

function resetAll()
{

//Select
document.MyForm.SelTerminiPenali.value=0
document.MyForm.SelTerminiCivili.value=0
//data
document.MyForm.txData.value="";
//Risultati
document.MyForm.txgg1.value="0";
document.MyForm.txSc1.value="-";
//A mano
document.MyForm.txMano1.value="";
document.MyForm.ckLib1.checked==false;
document.MyForm.MyCalcolaIn1.value="g";
//alert("reset")
document.MyForm.txData.value="-"
document.MyForm.txgg1.value="-";
document.MyForm.txNota0.value="-";
document.MyForm.txSc1.value="-";
document.MyForm.txGset.value="-";
document.MyForm.txNota1.value="-";
document.MyForm.txTipo1.value="-";
document.MyForm.txCodiceK1.value="-";
document.MyForm.txScProrogataFinale.value="-";
document.MyForm.txScProrogata.value="-";
document.MyForm.txGsetDP.value="-";
//Nasconde i div
document.getElementById("SeUsaPror").style.display="none"
document.getElementById("DivPror").style.display="none"
document.getElementById("dom2").style.display="none"
document.getElementById("DivFestaComandata").style.display="none"

}



function AddeImpegno()
{
  var SeEseguitiCalcoli = document.MyForm.txSc1.value
  if (SeEseguitiCalcoli=="-") {alert("Prima di aggiungere un impegno si deve calcolare un termine")}
  else
  {
      var SeProrogatoTermine=document.MyForm.txScProrogataFinale.value
      if (SeProrogatoTermine=="-") //Se il termine non è stato prorogato
      {
	  var vScad = document.MyForm.txSc1.value;
      }
      else  //Se il termine è stato prorogato
      {
	  //var SeUtilizzaTermineProrogato=document.MyForm.ChkUsaProroga.checked      //Se il termine prorogato viene utilizzato
	  var SeUtilizzaTermineProrogato=document.getElementById("ChkUP")
	      //alert(SeUtilizzaTermineProrogato.name)
	  if (SeUtilizzaTermineProrogato.checked==true)
	      {
	      var vScad = document.MyForm.txScProrogataFinale.value;
	      }
	  else                                                               //Se il termine prorogato NON viene utilizzato
	      {
	      var vScad = document.MyForm.txSc1.value;
	      }
      }

      //Recupera la data
      var i;
      for (i = 0; i < vScad.length; i++) {var c = vScad.charAt(i);}
      var splittata = vScad.split("-");
      var gg1 = new Number(splittata[0])
      var mm1 = new Number(splittata[1])
      var aa1 = new Number(splittata[2])

      //Inserimento da select
      var SeCalcolatoMano = document.MyForm.txMano1.value;
      if (SeCalcolatoMano == "")
      {
      //Codice
      var cod1 = document.MyForm.txCodiceK1.value
      //Testo
      Sel=document.getElementById("SelTerCiv");
      var TxValue = Sel.options[Sel.selectedIndex].value;
      if (TxValue == "0") {
	Sel=document.getElementById("SelTerPen");
	var vTesto = Sel.options[Sel.selectedIndex].text;
	}
      else {
	//var vTesto = Sel.options[Sel.selectedIndex].text;
//alert("yyy")
	var vTesto1 = Sel.options[Sel.selectedIndex].text;
	var i;
	for (i = 0; i < vTesto1.length; i++) {var c = vTesto1.charAt(i);}
	var splittata2 = vTesto1.split("/");
	var vTesto = splittata2[0]
//alert(vTesto)
	}

      //Genere
      var vTipoScad = document.MyForm.txTipo1.value;
      }
      // inserimento a mano
      else
      {var cod1 = ""; var vTesto = ""; Sel=document.getElementById("SelTipoImp"); var vTipoScad = Sel.options[Sel.selectedIndex].value;}


      //Priorità
      //Setta I PARAMETRI CALCOLATI
      switch (vTipoScad) {  
	  case "APPE":
      vPriorita = "0"
      vOra="09:00"
      vEvento="true"
	    break;  
	  case "APPI":
      vPriorita = "0"
      vOra="09:00"
      vEvento="true"
	    break; 
	  case "REDZ":
      vPriorita = "1"
      vOra="00:00"
      vEvento="false"
	    break;
	  case "SC":
      vPriorita = "2"
      vOra="00:00"
      vEvento="false"
	    break;  
	  case "TEL":
      vPriorita = "1"
      vOra="00:00"
      vEvento="false"
	    break; 
	  case "TRIB":
      vPriorita = "1"
      vOra="00:00"
      vEvento="false"
	    break;
	  case "UD":
      vPriorita = "2"
      vOra="09:00"
      vEvento="true"
	    break;
      }


      vModalita=document.MyForm.txModalita.value

      switch (vModalita)
      {
      case "CalTerProc":
      TxUrl = "/modules/calendar/pages/new_app.php?gg=" + gg1 + "&mm=" + mm1 + "&aa=" + aa1 + "&orario=" + vOra +
      "&evento=" + vEvento + "&codice=" + cod1 + "&descrizione=" + vTesto + "&priorita=" + vPriorita + "&genere=" +
      vTipoScad + "&PagProv=" + "CalcTerProc"
      //"&PagProv=" + "CalcTerProc" 
      //alert(TxUrl)
      parent.location.href=TxUrl
      break

      case "CalcImpDeriv":

      //BARBATRUCCO per prendere l'ID PRATICA

      // Non posso usare getparameter poichgè la pagina principale contiene l'id dell'impegno dal quale deriva quello da immettere
      //QUINDI Ricerco l'HREF del pulsante IMPEGNI Grigio a sinistra
      arr = parent.document.getElementsByTagName("a");
      LinkImpegni=arr [16].getAttribute("href");
      //alert(LinkImpegni)

      //Inizio emulazione di GetParams passando come url LINKIMPEGNI per prendere l'ID della pratica
      var allParams = new Array();
      var url = LinkImpegni;
      var paramList = url.split("?")[1];
      var params = paramList.split("&");
      for(var i=0; i<params.length; i++)
      {
      var temp = params[i].split("=");
      allParams[temp[0]] = temp[1];
      }
      //Fine emulazione di GetParams
      // FINE BARBATRUCCO
      var vId = allParams['ref_prat[realval][]'];
      //alert(vId)

      //COMPONE LA URL
      TxUrl = "/modules/calendar/pages/new_app.php?ref_id=" + vId + "&gg=" + gg1 + "&mm=" + mm1 + "&aa=" + aa1 + "&orario=" + vOra +
      "&evento=" + vEvento + "&codice=" + cod1 + "&descrizione=" + vTesto + "&priorita=" + vPriorita + "&genere=" + vTipoScad + 
      "&PagProv=" + "CalcImpCalcDeriv"
      // E LA LANCIA
      parent.location.href=TxUrl

      break

      case "CalImpCalc":
      //ref_prat[realval][]
      //Inizio emulazione di GetParams per prendere l'ID
      var allParams = new Array();
      var url = unescape( String(parent.location) );
      var paramList = url.split("?")[1];
      var params = paramList.split("&");
      for(var i=0; i<params.length; i++)
      {
      var temp = params[i].split("=");
      allParams[temp[0]] = temp[1];
      }
      //Fine emulazione di GetParams
      var vId = allParams['ref_prat[realval][]'];
      //alert(vId)


      //COMPONE LA URL
      TxUrl = "/modules/calendar/pages/new_app.php?ref_id=" + vId + "&gg=" + gg1 + "&mm=" + mm1 + "&aa=" + aa1 + "&orario=" + vOra +
      "&evento=" + vEvento + "&codice=" + cod1 + "&descrizione=" + vTesto + "&priorita=" + vPriorita + "&genere=" +
      vTipoScad + "&PagProv=" + "CalcImpCalcDeriv"
      parent.location.href=TxUrl
      //alert(TxUrl)


      break
      }
  }
}//FINEFUNZIONE



function SelTerminiCiv()
{
//alert("www")
//resetAll()
//Nasconde i div
document.getElementById("SeUsaPror").style.display="none"
document.getElementById("DivPror").style.display="none"
document.getElementById("dom2").style.display="none"
document.getElementById("DivFestaComandata").style.display="none"
//Azzera i dati inseriti a mano 
document.MyForm.txMano1.value="";
document.MyForm.ckLib1.checked==false;
document.MyForm.MyCalcolaIn1.value="g";
document.MyForm.SelTipoImpegno.value="SC";

Sel=document.getElementById("SelTerCiv");
//alert(Sel.name)
var TxTesto = Sel.options[Sel.selectedIndex].text;
var TxValue = Sel.options[Sel.selectedIndex].value;

//alert(TxTesto)


var i;
for (i = 0; i < TxValue.length; i++) {var c = TxValue.charAt(i);}
var splittata = TxValue.split("/");
//var vTermine = splittata[0]
var vGMA = splittata[0]
var vLib = splittata[1]
var vTipo =splittata[2]
var vCodK =splittata[3]

//Prende il termine
var i;
for (i = 0; i < TxTesto.length; i++) {var c = TxTesto.charAt(i);}
var splittata2 = TxTesto.split("/");
var vTermine = splittata2[1]

//alert(vTermine)
//alert(vGMA)
//alert(vLib)
//alert(vTipo)

CalcolaInsSel(vTermine,vGMA,vLib,vTipo,vCodK)

document.MyForm.SelTerminiPenali.value=0
}

function SelTerminiPen()
{
//Azzera i dati inseriti a mano 
document.MyForm.txMano1.value="";
document.MyForm.ckLib1.checked==false;
document.MyForm.MyCalcolaIn1.value="g";
document.MyForm.SelTipoImpegno.value="SC";

Sel=document.getElementById("SelTerPen");
//alert(Sel.name)
var TxTesto = Sel.options[Sel.selectedIndex].text;
var TxValue = Sel.options[Sel.selectedIndex].value;

//alert(TxTesto)

//arr = parent.document.getElementsByTagName("span");
stringa=TxValue
//9/g/SC
var i;
for (i = 0; i < TxValue.length; i++) {var c = TxValue.charAt(i);}
var splittata = TxValue.split("/");
//var vTermine = splittata[0]
var vGMA = splittata[0]
var vLib = splittata[1]
var vTipo =splittata[2]
var vCodK =splittata[3]

//Prende il termine
var i;
for (i = 0; i < TxTesto.length; i++) {var c = TxTesto.charAt(i);}
var splittata2 = TxTesto.split("/");
var vTermine = splittata2[1]
//alert(vTermine)
CalcolaInsSel(vTermine,vGMA,vLib,vTipo,vCodK)
document.MyForm.SelTerminiCivili.value=0

}

function SetTipoImp(valore)
{
//alert(valore)
document.MyForm.txTipo1.value=valore;
}




function DeleDays(DataDaSottrarre, giorni)
{
    return new Date(DataDaSottrarre.getTime() - giorni*86400000)
}


function VerificaDataImmessaCalTer(giorno, mese, anno, DataDaControllare)
{
// Setta il valore iniziale della DataCorretta

//Calcola il giorno della data immessa
if (giorno<=9) {
	      giorno = "0"+giorno;
	    } 
//Calcola il mese
if (mese<=9) {
	      mese = "0"+mese;
	    } 
	    else {
	    //var $mese=String(mese);
	    }


var DataImmessa = giorno+"-"+mese+"-"+anno;
//alert (DataImmessa);

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



function CalcolaPasqua(AnnoDiPasqua) 
{

      year = parseInt(AnnoDiPasqua, 10);
      if (isNaN(year))
      year = 0;
      
      
      if ((year <= 325) || (year > 4099))
      {
      alert("scegli un anno fra il 326 e il 4099");
      }
      
      if ((year > 325) && (year <= 1582)) 
      
      {
	  var jDay;
	  
	  jDay = parseInt(jDay, 10);
	  if (isNaN(jDay))
	  jDay = 0;
	  
	  
	  var g;
	  var i;
	  var j;
	  var p;
	  
	    g = year % 19;
	    i = (19 * g + 15) % 30;
	    j = (year + Math.floor(year / 4) + i) % 7;
	    p = i - j + 28;
	  
	  if (p <= 31)
	  {
	  jDay = p;

	  GiornoMeseDiPasqua=jDay + " " + "marzo";
	  GiornoDiPasqua=wDay;
	  MeseDiPasqua = "marzo";

	  }
	  if (p > 31)
	  {
	  jDay = p - 31;
	  GiornoMeseDiPasqua=jDay + " " + "aprile";
	  GiornoDiPasqua=wDay;
	  MeseDiPasqua = "aprile";
	  }
      }
      
      if ((year >= 1583) && (year <= 4099))         
      {      
      
	  var wDay;
	  //var oDay;
	  
	  wDay = parseInt(wDay, 10);
	  if (isNaN(wDay))
	  wDay = 0;
	  
	  var g;
	  var i;
	  var j;
	  var p;
	  
	    g = year % 19;
	    i = (19 * g + 15) % 30;
	    j = (year + Math.floor(year / 4) + i) % 7;
	    p = i - j + 28;
	  
	  var a;
	  var c;
	  var h;
	  var b;
	  var d;
	  var q;
	  
	    a = year % 19;
	    c = Math.floor(year / 100);
	    h = (c - Math.floor(c / 4) - Math.floor((8 * c + 13) / 25) + 19 * a + 15) % 30;
	    b = h - Math.floor(h / 28) * (1 - Math.floor(h / 28) * Math.floor(29 / (h + 1)) * Math.floor((21 - a) / 11));
	    d = (year + Math.floor(year / 4) + b + 2 - c + Math.floor(c / 4)) % 7;
	    q = b - d + 28;
	  
	  var extra;
      
	  if ((year > 1582) && (year <= 1600))
	  {
	  extra = 10;
	  }
	  
	  var tmp;
      
	  if (year > 1600)
	  {
	  tmp = Math.floor(year / 100) - 16;
	  extra = 10 + tmp - Math.floor(tmp / 4);
	  }
      
	    if (q <= 31)
	    {
	    wDay = q;
	    //form.FPasqua.value = wDay + " " + "marzo";
	    GiornoMeseDiPasqua = wDay + " " + "marzo";
	    GiornoDiPasqua=wDay;
	    $MeseDiPasqua = "marzo";
	    MeseDiPasqua = 2;
	    //alert(wDay + " " + "marzo");
	    }
	    if (q > 31)
	    {
	    wDay = q - 31;
	    //form.FPasqua.value = wDay + " " + "aprile";
	    GiornoMeseDiPasqua = wDay + " " + "aprile";
	    GiornoDiPasqua=wDay;
	    $MeseDiPasqua = "aprile";
	    MeseDiPasqua = 3;
	    //alert(wDay + " " + "aprile");
	    }
      //alert(MeseDiPasqua)
      }
      //Calcola la Pasqua in formato data
      TMonthPasqua = new Array(
      'January','February','March',
      'April','May','June','July',
      'August','September','October',
      'November','December'
      );
      CurMonthPasqua = MeseDiPasqua;
      MeseDiPasquaDaImmettere = TMonthPasqua[CurMonthPasqua];
      //alert(MeseDiPasquaDaImmettere)
//Formato da ottenere: Fri Jan 01 2010 00:00:00 GMT+0100
      $PasquaDay  = "Sun "+MeseDiPasquaDaImmettere+" "+GiornoDiPasqua+" "+AnnoDiPasqua+" 00:00:00 GMT+0100";
      //alert($PasquaDay);

return $PasquaDay
}
 
 
function Oggi()
{

Oggi = new Date();

var ddo = Oggi.getDate();
var mmo = Oggi.getMonth()+1;
var yyo=Oggi.getFullYear(); 

document.MyForm.MyDayCalTer.value=ddo;
document.MyForm.MyMonthCalTer.value=mmo;
document.MyForm.MyYearCalTer.value=yyo;

}



