  

var  reportFestivo, DataCorretta, DataSentenza, PasquaDay, GiornoDiPasqua, MeseDiPasqua, GiornoMeseDiPasqua, DecDay, mmm, mm,bday,byear,year,year2,year3,thedate,thedate02, thedate03, thedateF, mm2,dd2,yy2,yourage,TMonth,CurMonth,bmonth,age2,timerID,timerID2,timerRunning,today,startday,enday,secPerDay,minPerDay,hourPerDay,secsLeft,secsRound,secsRemain,minLeft,minRound,minRemain,timeRemain;




//  IMPUGNAZIONI PENALI


function SetPageLoad()
{

//     oggi
Oggi = new Date();
var ddo = Oggi.getDate();
var mmo = Oggi.getMonth()+1;
var yyo=Oggi.getFullYear(); 
document.MyForm.MyDay.value=ddo;
document.MyForm.MyMonth.value=mmo;
document.MyForm.MyYear.value=yyo;

//------------
TxUrl=location.href

//Inizio emulazione di GetParams con url = txUrl
var allParams = new Array();
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
document.txModalita.face.value=vModalita
//alert(vModalita)
//Imposta la pagina a seconda della modalità



//SE IMPEGNO DERIVATO DA IMPEGNO
if (vModalita =="CalImpDeriv")
	{
		//Nasconde ANCHE il div dei controlli data;
		//document.getElementById("DD").style.display="none";

		//quindi Imposta la data derivata
		//arr = parent.document.getElementsByTagName("span");
	El = parent.document.getElementById("DATA");
	stringa = El.innerHTML;
	var i;
	var Tx="";
	var splittataBis = new Array();
		//PRIMO GIRO (A DESTRA)
	for (i = 0; i < stringa.length; i++) {var c = stringa.charAt(i);}
	var splittata = stringa.split("<");
		//SECONDO GIRO (A SINISTRA)
	for (i = 0; i < splittata[1]; i++){var c = splittata[1].charAt(i);}
	var valoreottenuto = splittata[1].split(">");
	stringa=valoreottenuto[1]
		//alert(stringa)
		// SPlitta G M A
	var i;
	for (i = 0; i < stringa.length; i++) {var c = stringa.charAt(i);}
	var splittata = stringa.split("/");
	var mm1 = new Number(splittata[1])
	var gg1 = splittata[0]
	var aa1 = splittata[2]
	TMonth = new Array(
		'January','February','March',
		'April','May','June','July',
		'August','September','October',
		'November','December'
		);
	CurMonth = mm1 - 1;
	bmonth = TMonth[CurMonth];

		// ED ECCO LA DATA DA DERIVARE
	DataDaDerivare = new Date(""+bmonth+", "+gg1+" "+aa1+" 00:00");
	var ddd = DataDaDerivare.getDate();
	var mmd = DataDaDerivare.getMonth()+1;
	var yyd = DataDaDerivare.getFullYear(); 
	document.MyForm.MyDay.value=ddd;
	document.MyForm.MyMonth.value=mmd;
	document.MyForm.MyYear.value=yyd;



	      //BARBATRUCCO per prendere il NOME PRATICA

		El = parent.document.getElementById("NOMEPRAT");
	      	stringa=El.innerHTML;

		var i;
		var Tx="";
		var splittataBis = new Array();
		//PRIMO GIRO (A DESTRA)
		for (i = 0; i < stringa.length; i++) {var c = stringa.charAt(i);}
		var splittata = stringa.split("<");
		//SECONDO GIRO (A SINISTRA)
		for (i = 0; i < splittata[1]; i++){var c = splittata[1].charAt(i);}
		var valoreottenuto = splittata[1].split(">");
		vPratica=valoreottenuto[1]

		//alert(vPratica)
	      // FINE BARBATRUCCO

		//Mette il valore nell'etichetta della pratica
		document.getElementById("TxDescr").value=vPratica



}

if (vModalita =="CalcImPen")       //Se la calcolatrice è normale
{

} 
else //altrimenti - SE IMPEGNO CALCOLATO
{
	      //BARBATRUCCO per prendere il NOME PRATICA

		El = parent.document.getElementById("NOMEPRAT");
	      	stringa=El.innerHTML;

		var i;
		var Tx="";
		var splittataBis = new Array();
		//PRIMO GIRO (A DESTRA)
		for (i = 0; i < stringa.length; i++) {var c = stringa.charAt(i);}
		var splittata = stringa.split("<");
		//SECONDO GIRO (A SINISTRA)
		for (i = 0; i < splittata[1]; i++){var c = splittata[1].charAt(i);}
		var valoreottenuto = splittata[1].split(">");
		vPratica=valoreottenuto[1]

		//alert(vPratica)
	      // FINE BARBATRUCCO

		//Mette il valore nell'etichetta della pratica
		document.getElementById("TxDescr").value=vPratica
}


if (vModalita =="CalcImPen")       //Se la calcolatrice è normale
{
//parent.document.getElementById("Fr1").height="301px"
//document.txNota.face.value = ""//da vedere
} 
else //altrimenti - SE IMPEGNO CALCOLATO
{
//document.getElementById("TxDescr").value=  // titolo della pratica
//document.getElementById("IT").style.display="none"; //Nasconde il div del titolo
} //fine Impostazione della pagina a seconda della modalità

}//FINE FUNZIONE


function AddePagina()
{

if (txDataScad1=document.kn1.face.value=="-")//se NONsono stati eseguiti i calcoli
{
alert("Prima di aggiungere un nuovo impegno si devono eseguire i calcoli.")
}
else
{
//se sono stati eseguiti i calcoli
      Sel=document.getElementById("SelScad");
      var vValue = Sel.options[Sel.selectedIndex].value;
      //var vTesto= Sel.options[Sel.selectedIndex].text;

      switch (vValue){
      case "1":
	txDataScad1=document.kn1.face.value
	txDataScad=new Date(txDataScad1)
	var gg1 = txDataScad.getDate();
	var mm1 = txDataScad.getMonth()+1;
	var aa1 =txDataScad.getFullYear(); 
	var vTesto = "Impugnazione"
	var vTipoScad = "SCAD"
	var cod1="XIP75";
      break
      case "2":
	txDataScad1=document.kn3.face.value
	txDataScad=new Date(txDataScad1)
	var gg1 = txDataScad.getDate();
	var mm1 = txDataScad.getMonth()+1;
	var aa1 =txDataScad.getFullYear();
	var vTesto = "Impugnazione";
	var vTipoScad = "SCAD"; 
	var cod1="XIP75";
      break
      case "3":
	txDataScad1=document.kn4.face.value
	txDataScad=new Date(txDataScad1)
	var gg1 = txDataScad.getDate();
	var mm1 = txDataScad.getMonth()+1;
	var aa1 =txDataScad.getFullYear(); 
	var vTesto = "Impugnazione";
	var vTipoScad = "SCAD";
	var cod1="XIP75";
      break
      case "4":
	txDataScad1=document.kn2.face.value
	txDataScad=new Date(txDataScad1)
	var gg1 = txDataScad.getDate();
	var mm1 = txDataScad.getMonth()+1;
	var aa1 =txDataScad.getFullYear(); 
	var vTesto = "Richiedere copie sentenza";
	var vTipoScad = "TRIB";
	var cod1="XIP20";
      break
      case "5":
	var gg1 =  document.MyForm.MyDay02[document.MyForm.MyDay02.selectedIndex].value;
	var mm1 =  document.MyForm.MyMonth02[document.MyForm.MyMonth02.selectedIndex].value;
	var aa1 =  document.MyForm.MyYear02[document.MyForm.MyYear02.selectedIndex].value;
	var vTesto = "Esame e studio dopo la notifica estr. contum.";
	var vTipoScad = "TRIB";
	var cod1="XIP20";
      break
      case "6":
	var gg1 =  document.MyForm.MyDay03[document.MyForm.MyDay03.selectedIndex].value;
	var mm1 =  document.MyForm.MyMonth03[document.MyForm.MyMonth03.selectedIndex].value;
	var aa1 =  document.MyForm.MyYear03[document.MyForm.MyYear03.selectedIndex].value;
	var vTesto = "Esame e studio dopo la notifica deposito sentenza";
	var vTipoScad = "TRIB";
	var cod1="XIP20";
      break
      }

      //Setta I PARAMETRI CALCOLATI
      switch (vTipoScad) {  
	  case "SCAD":
      vPriorita = "2"
      vOra="00:00"
      vEvento="1"
	    break;  
	  case "TRIB":
      vPriorita = "1"
      vOra="00:00"
      vEvento="1"
	    break;
      }

//NOTANOTA
//vPrat=document.getElementById("TxDescr").value
//vPrat=document.TxDescrizione.value
v1=document.tx1.face.value //= FormData(DataSentenza);
v2=document.txTermineDepMotivazione.face.value  //= TermineDepMotivaz + " giorni";
v3=document.tx3.face.value  //= FormData(DataNotEstrCont);
v4=document.tx4.face.value  //= FormData(DataNotDepTardivo);
v5=document.tx5.face.value  //= FormData(DecorrenzaImpugnazioneNetta);
v6=document.tx6.face.value  //= $DecorrImpugnFeriato;//FormData(DecorrenzaImpugnazione);
v7=document.tx7.face.value  //= TermineImpugnazione + " giorni";
v8=document.tx8.face.value  //= FormData($ScadenzaImpugnazioneNetta);
v9=document.tx9.face.value  //= ggMaturatiNelFeriato + " giorni";
v10=document.tx10.face.value  //= $ScadImpugnFeriato + " " //+ reportFestivo;// FormData(ScadenzaImpugnazione)+reportFestivo;
v11=document.tx11.face.value  //= $ScadenzaImpugnazioneConFestivi//+ " " +reportDomenica //FormData(ScadenzaImpugnazioneConFestivi)+reportDomenica;
v12=document.tx12.face.value  //= $ScadenzaImpugnazioneFinale //FormData(ScadenzaImpugnazioneFinale);
v13=document.txScadenzaFinale.face.value
var aCapo="%0A"
var vTxInNota=(
aCapo+"CALCOLO DEI TERMINI PER LE IMPUGNAZIONI PENALI" + 
aCapo+aCapo+
//"PRATICA:" + 
//aCapo+
//vPrat+aCapo+aCapo+
"DATI DELLA SENTENZA " +
aCapo+
"Data di emissione: " + 
aCapo+ v1 +aCapo+
"Termine per il deposito della motivazione: " +
aCapo+ v2 +aCapo+
"Termine per impugnare: " +
aCapo+ v7 +aCapo+
"Data di notifica dell'estratto contumaciale: " +
aCapo+ v3 +aCapo+
"Data di notifica dell'avviso di deposito tardivo: " +
aCapo+ v4 +aCapo+aCapo+
"CALCOLO DELLA DECORRENZA DEL TERMINE PER IMPUGNARE" +
aCapo+
"Decorrenza termine: " +
aCapo+ v5 +aCapo+
"Spostamento del termine per il feriato: " +
aCapo+ v6 +aCapo+aCapo+
"CALCOLO DELLA SCADENZA" +
aCapo+
"Termine di scadenza: " +
aCapo+ v8 +aCapo+
"Giorni maturati nel feriato: " +
aCapo+ v9 +aCapo+
"Spostamento della scadenza per il feriato: " +
aCapo+ v10 +aCapo+
"Spostamento della scadenza dal giorno festivo: " +
aCapo+ v11 +aCapo+
"Spostamento della scadenza che cade di domenica: " +
aCapo+ v12 +aCapo+
aCapo+aCapo+
"TERMINE DI SCADENZA DELL'IMPUGNAZIONE: " +
aCapo+ v13+aCapo+
aCapo+aCapo
);
//alert(vTxInNota)
//FINE NOTANOTA
//alert(vEvento)

      vModalita=document.txModalita.face.value
      switch (vModalita)
      {
      case "CalcImPen":
	  TxUrl = "/modules/calendar/pages/new_app.php?gg=" + gg1 + "&mm=" + mm1 + "&aa=" + aa1 + "&orario=" + vOra +
	  "&evento=" + vEvento + "&codice=" + cod1 + "&descrizione=" + vTesto + "&priorita=" + vPriorita + "&genere=" +
	  vTipoScad + "&PagProv=" + "CalcImPen"+"&InNota="+vTxInNota

	  parent.location.href=TxUrl
      break
      case "CalImpDeriv":
	  //Inizio emulazione di GetParams per prendere l'ID
	  var allParams = new Array();
	  var url = unescape( String(parent.location) );
//alert(url)
	  var paramList = url.split("?")[1];
	  var params = paramList.split("&");
	  for(var i=0; i<params.length; i++)
	  {
	  var temp = params[i].split("=");
	  allParams[temp[0]] = temp[1];
	  }
	  //Fine emulazione di GetParams

	      //BARBATRUCCO per prendere l'ID PRATICA

	      // Non posso usare getparameter poichgè la pagina principale contiene l'id dell'impegno dal quale deriva quello da immettere
	      //QUINDI Ricerco l'HREF del pulsante IMPEGNI Grigio a sinistra
	      //arr = parent.document.getElementsByTagName("a");
	      //LinkImpegni=arr [17].getAttribute("href");

		El = parent.document.getElementById("NOMEPRAT");
	      	LinkImpegni=El.getAttribute("href");

	      //alert(LinkImpegni)
		//El = parent.document.getElementById("NOMEPRAT");
		//LinkImpegni = El.innerHTML;
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
	      var vId = allParams['id'];
	      //alert(vId)

	  //COMPONE LA URL
	  TxUrl = "/modules/calendar/pages/new_app.php?ref_id=" + vId + "&gg=" + gg1 + "&mm=" + mm1 + "&aa=" + aa1 + "&orario=" + vOra +
	  "&evento=" + vEvento + "&codice=" + cod1 + "&descrizione=" + vTesto + "&priorita=" + vPriorita + "&genere=" +
	  vTipoScad + "&PagProv=" + "CalcImpCalcDeriv"+"&InNota="+vTxInNota
	  parent.location.href=TxUrl
      break

      case "CalImpCalc" :
	  //Inizio emulazione di GetParams per prendere l'ID
	  var allParams = new Array();
	  var url = unescape( String(parent.location) );
//alert(url)
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
	  vTipoScad + "&PagProv=" + "CalcImpCalcDeriv"+"&InNota="+vTxInNota
	  parent.location.href=TxUrl
      break
      }
  }//Fine Se sono stati eseguiti i calcoli
}//FINE FUNZIONE




function VerificaDataImmessa(giorno, mese, anno, DataCalcolata, selettore)
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
thedateF=DataCalcolata;
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
var StrDataCalcolata = dt + "-" + mt + "-" + yt
//alert(StrDataCalcolata)
//alert (dt + "-" + mt + "-" + yt);
//Confronta le date
//alert("QUI "+DataImmessa+ " " + StrDataCalcolata)
	    //
var DataCorretta = new Date
	    if (DataImmessa!=StrDataCalcolata) {

		DataCorretta = DeleDays(DataCalcolata, Number(dt));
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

		//Aggiusta i selettori
		switch (selettore){
		case 1:
		  document.MyForm.MyDay.selectedIndex=Correctday1-1
		  document.MyForm.MyMonth.selectedIndex=CorrectMonth1-1
		break
		case 2:
		  document.MyForm.MyDay02.selectedIndex=Correctday1-1
		  document.MyForm.MyMonth02.selectedIndex=CorrectMonth1-1
		break
		case 3:
		  document.MyForm.MyDay03.selectedIndex=Correctday1-1
		  document.MyForm.MyMonth03.selectedIndex=CorrectMonth1-1
		break
		}
	    } 
	    else {
		DataCorretta=DataCalcolata;
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
//var yyo = Oggi.getYear();
//if(yyo < 200) {yyo += 1900;} // //QUESTO DISTURBA SU TUTTO
//if (yyo < 2000) yyo=yyo+1900; //QUESTO DISTURBA SU CHROME E FIREFOX
//yyo += 1900;  // Disturba su opera

document.MyForm.MyDay.value=ddo;
document.MyForm.MyMonth.value=mmo;
document.MyForm.MyYear.value=yyo;

}


function FormData(DataDaFormattare)
{

//Setta le variabili
//thedateF = new Date();
//thedateF=DataDaFormattare
//var tday=""
var GioSetDayF = DataDaFormattare.getDay();
var GioDayF = DataDaFormattare.getDate();
var MeseF = DataDaFormattare.getMonth()+1;
var AnnoF=DataDaFormattare.getFullYear(); 

//var AnnoF = DataDaFormattare.getYear();
//if(AnnoF < 200) {AnnoF += 1900;}//QUESTO DISTURBA SU TUTTO
//if (AnnoF < 2000) AnnoF=AnnoF+1900; //QUESTO DISTURBA SU CHROME E FIREFOX
//AnnoF += 1900; // Disturba su opera
//alert(GioSetDayF)
//Calcola il giorno della settimana
switch (GioSetDayF){
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
if (GioDayF<=9) {
	      var dt = "0"+String(GioDayF);
	    } 
	    else {
	    var dt=String(GioDayF);
	    }

//Calcola il mese
if (MeseF<=9) {
	      var mt = "0"+String(MeseF);
	    } 
	    else {
	    var mt=String(MeseF);
	    }

//Calcola l'anno
var yt=String(AnnoF)
//alert("FDATA "+AnnoF)
//Calcola la data
var fData = new Date
fData = tday + " " + dt + "-" + mt + "-" + yt 

//Restituisce il valore (in formato stringa)
//alert(fData)
return fData
}



function DeleDays(DataDaSottrarre, giorni)
{
    return new Date(DataDaSottrarre.getTime() - giorni*86400000)
}


function addDays($DataDaAggiungere, giorni)
{

//alert("addday "+DataDaAggiungere.getTime());
//alert(DataDaAggiungere.getMonth());
//alert(DataDaAggiungere.getTime());
//alert(bday+giorni)
//alert("adddays"+ giorni)

DataDaAggiungere= new Date($DataDaAggiungere)
DataOttenuta = new Date(DataDaAggiungere.getTime() + giorni*86400000)
//alert(DataOttenuta)
//alert(browser)
    return DataOttenuta
}




function Calcola(){


//         CALCOLA LA DATA DELLA SENTENZA

mm = document.MyForm.MyMonth[document.MyForm.MyMonth.selectedIndex].value;
bday = document.MyForm.MyDay[document.MyForm.MyDay.selectedIndex].value;
byear = document.MyForm.MyYear[document.MyForm.MyYear.selectedIndex].value;


TMonth = new Array(
'January','February','March',
'April','May','June','July',
'August','September','October',
'November','December'
);
CurMonth = mm - 1;
bmonth = TMonth[CurMonth];

//         DATA DELLA SENTENZA
SentDay = new Date(""+bmonth+", "+bday+" "+byear+" 00:00");
//		Verifica se la data immessa è corretta

var DataSentenza = VerificaDataImmessa(bday,mm,byear,SentDay,1) //originale
//var DataSentenza = VerificaDataImmessa(bday,bmonth,byear,SentDay,1)

//         FINE CALCOLO DELLA DATA DELLA SENTENZA
//  ----

//         CALCOLA LA DATA DI NOTIFICA DELL'ESTRATTO CONTUMACIALE
mm02 = document.MyForm.MyMonth02[document.MyForm.MyMonth02.selectedIndex].value;
bday02 = document.MyForm.MyDay02[document.MyForm.MyDay02.selectedIndex].value;
byear02 = document.MyForm.MyYear02[document.MyForm.MyYear02.selectedIndex].value;

TMonth02 = new Array(
'January','February','March',
'April','May','June','July',
'August','September','October',
'November','December'
);
CurMonth02 = mm02 - 1;
bmonth02 = TMonth02[CurMonth02];
//         ECCO LA DATA DI NOTIFICA DELL'ESTRATTO CONTUMACIALE
NotEstrContDay = new Date(""+bmonth02+", "+bday02+" "+byear02+" 00:00");

//		Verifica se la data immessa è corretta
var DataNotEstrCont = VerificaDataImmessa(bday02,mm02,byear02,NotEstrContDay,2)
//         FINE CALCOLO DELLA DATA DI NOTIFICA DELL'ESTRATTO CONTUMACIALE
//alert(DataNotEstrCont)

//   ---

//         CALCOLA LA DATA DI NOTIFICA DELL'AVVISO DI DEPOSITO TARDIVO DELLA SENTENZA
mm03 = document.MyForm.MyMonth03[document.MyForm.MyMonth03.selectedIndex].value;
bday03 = document.MyForm.MyDay03[document.MyForm.MyDay03.selectedIndex].value;
byear03 = document.MyForm.MyYear03[document.MyForm.MyYear03.selectedIndex].value;

//year03 = new Date();
//year203=year03.getFullYear();
//year203 = year03.getYear();
//year303 = (year203 < 2000) ? year203 + 1900 : year203;

TMonth03 = new Array(
'January','February','March',
'April','May','June','July',
'August','September','October',
'November','December'
);
CurMonth03 = mm03 - 1;
bmonth03 = TMonth03[CurMonth03];
//         DATA DI NOTIFICA DELL'AVVISO DI DEPOSITO TARDIVO DELLA SENTENZA
NotDepTardivoDay = new Date(""+bmonth03+", "+bday03+" "+byear03+" 00:00");
//		Verifica se la data immessa è corretta
var DataNotDepTardivo = VerificaDataImmessa(bday03,mm03,byear03,NotDepTardivoDay,3)
//         FINE CALCOLA LA DATA DI NOTIFICA DELL'AVVISO DI DEPOSITO TARDIVO DELLA SENTENZA
//alert(DataNotDepTardivo)
//   ----

// ---- IMPOSTA LE VARIABILI DEI MESI
	    var gennaio=TMonth02[0]
	    var febbraio=TMonth02[1]
	    var marzo=TMonth02[2]
	    var aprile=TMonth02[3]
	    var maggio=TMonth02[4]
	    var giugno=TMonth02[5]
	    var luglio=TMonth02[6]
	    var agosto=TMonth02[7]
	    var settembre=TMonth02[8]
	    var ottobre=TMonth02[9]
	    var novembre=TMonth02[10]
	    var dicembre=TMonth02[11]

//         CALCOLA LE DATE DI FERIATO
	    InizioFeriato = new Date(""+agosto+", "+1+" "+byear+" 00:00");
	    FineFeriato = new Date(""+settembre+", "+15+" "+byear+" 00:00");
	    DopoFeriato = new Date(""+settembre+", "+16+" "+byear+" 00:00");


// ----

//            DEPOSITO MOTIVAZIONE

var indDep = document.MyForm.DepSent[document.MyForm.DepSent.selectedIndex].value;
//alert(indDep)
//alert( document.MyForm.txTermineDepMotivazione.value)
switch (indDep){
case "0":
  //se contestuale il termine deposito motivazione =0
  //document.txTermineDepMotivazione.value=0;
  document.MyForm.txTermineDepMotivazione.value=0;
break
case "15":
    //se non contestuale il termine deposito motivazione =15
  //document.txTermineDepMotivazione.value=15;
  document.MyForm.txTermineDepMotivazione.value=15;
break
case "15":
    //se non contestuale il termine deposito motivazione =15
  //document.txTermineDepMotivazione.value=15;
  document.MyForm.txTermineDepMotivazione.value=15;
break
case "20":
    //se non contestuale il termine deposito motivazione =15
  //document.txTermineDepMotivazione.value=15;
  document.MyForm.txTermineDepMotivazione.value=20;
break
case "30":
    //se non contestuale il termine deposito motivazione =15
  //document.txTermineDepMotivazione.value=15;
  document.MyForm.txTermineDepMotivazione.value=30;
break
case "40":
    //se non contestuale il termine deposito motivazione =15
  //document.txTermineDepMotivazione.value=15;
  document.MyForm.txTermineDepMotivazione.value=40;
break
case "50":
    //se non contestuale il termine deposito motivazione =15
  //document.txTermineDepMotivazione.value=15;
  document.MyForm.txTermineDepMotivazione.value=50;
break
case "60":
    //se non contestuale il termine deposito motivazione =15
  //document.txTermineDepMotivazione.value=15;
  document.MyForm.txTermineDepMotivazione.value=60;
break
case "70":
    //se non contestuale il termine deposito motivazione =15
  //document.txTermineDepMotivazione.value=15;
  document.MyForm.txTermineDepMotivazione.value=70;
break
case "80":
    //se non contestuale il termine deposito motivazione =15
  //document.txTermineDepMotivazione.value=15;
  document.MyForm.txTermineDepMotivazione.value=80;
break
case "90":
    //se non contestuale il termine deposito motivazione =15
  //document.txTermineDepMotivazione.value=15;
  document.MyForm.txTermineDepMotivazione.value=90;
break

}
var TermineDepMotivaz=document.MyForm.txTermineDepMotivazione.value;
//var TermineDepMotivaz=document.txTermineDepMotivazione.value;
//            FINE DEPOSITO MOTIVAZIONE


// Prende il dato contenuto nella casella terminedepmotivazione
// e lo converte in variabile numerica
//var ggDep= document.txTermineDepMotivazione.value;
var ggDep= document.MyForm.txTermineDepMotivazione.value;
var ggDepN=parseInt(ggDep)

//            CALCOLO DEL TERMINE PER IMPUGNARE

var TermineImpugnazione=0

switch (ggDepN){
case 0:
  TermineImpugnazione=15;
break
case 15:
  TermineImpugnazione=30;
break
default:
  TermineImpugnazione=45;
break
}
//            FINE CALCOLO DEL TERMINE PER IMPUGNARE

// ---

//            CALCOLO DATA DI DECORRENZA DEL TERMINE DI IMPUGNAZIONE
//            Devo raffrontare la scadenza naturale con le eventuali date di notifica
// 1)   Calcola la data naturale
	    var DecorrNaturale = new Date()
	    DecorrNaturale = addDays(DataSentenza, ggDepN);
//alert(DecorrNaturale)
// 2)   Raffronta la data naturale con le altre 2
// 	2a) Raffronta prima le altre 2 (notifica estratto contumaciale e notifica tardivo deposito)
	    var DecorrDaNotifica= new Date
	    if (DataNotDepTardivo>=DataNotEstrCont) {
	      DecorrDaNotifica=DataNotDepTardivo;
	    } 
	    else {
	    DecorrDaNotifica=DataNotEstrCont;
	    }


// 	2b) Raffronta la vincitrice di 2a (notifica estratto contumaciale e notifica tardivo deposito)
//	    con la scadenza naturale
	    var DecorrenzaImpugnazione= new Date
	    
	    if (DecorrNaturale>=DecorrDaNotifica) {
	      DecorrenzaImpugnazione=DecorrNaturale;
	    }

	    else {
	      DecorrenzaImpugnazione=DecorrDaNotifica;
	    }


//          Setta una variabile al netto del feriato (solo per scrivere il dato su tx3)
	    var DecorrenzaImpugnazioneNetta=DecorrenzaImpugnazione;

//alert(DecorrenzaImpugnazione)
//QUI
//alert(DecorrenzaImpugnazioneNetta)

// 4)   Verifica se la data di decorrenza cade nel FERIATO

//alert(DecorrenzaImpugnazione+">="+InizioFeriato+" e "+DecorrenzaImpugnazione+"<="+FineFeriato)

	    if ((DecorrenzaImpugnazione>=InizioFeriato) &&  (DecorrenzaImpugnazione<=FineFeriato)) {
//	    	Se la data cade nel MEZZO del feriato
//		Imposta la decorrenza al 16/9
		DecorrenzaImpugnazione=DopoFeriato;
//		Setta la variabile per scrivere
		  var $DecorrImpugnFeriato = String(FormData(DecorrenzaImpugnazione));
	    }

	    else {
//		Lascia immutata la decorrenza
//		Setta la variabile per scrivere
		  var $DecorrImpugnFeriato = "No, rimane  " + String(FormData(DecorrenzaImpugnazione));
	    }
//            FINE CALCOLO DATA DI DECORRENZA DEL TERMINE DI IMPUGNAZIONE

//    --------	    

//                         F I N A L M E N T E


//            CALCOLO DELLA DATA DI SCADENZA DELL'IMPUGNAZIONE



	    var ScadenzaImpugnazione = new Date(addDays(DecorrenzaImpugnazione, TermineImpugnazione));

//          	Setta una variabile al netto del feriato (solo per scrivere il dato su tx8)
	    var $ScadenzaImpugnazioneNetta=ScadenzaImpugnazione

//	FERIATO

//		Verifica infine se la data di scadenza cade nel feriato
	    var ggMaturatiNelFeriato = 0;


	    if ((ScadenzaImpugnazione>=InizioFeriato) &&  (ScadenzaImpugnazione<=FineFeriato)) {

//	    	Se la data di scadenzacade nel MEZZO del feriato

//		a) Calcola i giorni maturati dal termine di scadenza all'inizio del feriato (1/8)

		  var strDate1 = ScadenzaImpugnazione
		  var strDate2 = InizioFeriato
		  datDate1= Date.parse(strDate1); 
		  datDate2= Date.parse(strDate2);

		  ggMaturatiNelFeriato = ((datDate1-datDate2)/(24*60*60*1000)+1); // BISOGNA AGGIUNGERE +1
//alert("true")
//alert(ggMaturatiNelFeriato)
//		  Li somma dopo il feriato (16/9)
//		b) Somma i ggMaturatiNelFeriato alla data FineFeriato (o DopoFeriato???)		  
		  var ScadenzaImpugnazione = addDays(FineFeriato, ggMaturatiNelFeriato);
//		Setta la variabile per scrivere
		  var $ScadImpugnFeriato = "Si. Si sposta a " + String(FormData(ScadenzaImpugnazione));
	    }

	    else {
//alert("false")
//		Setta la variabile per scrivere
		  var $ScadImpugnFeriato = "No, rimane " + String(FormData(ScadenzaImpugnazione));
	    }

		  var ScadImpugnDopoFeriato = ScadenzaImpugnazione
//  FINE FERIATO


//		CALCOLO DEI GIORNI FESTIVI   //Formato da ottenere: Fri Jan 01 2010 00:00:00 GMT+0100

//		Calcolo Anno in corso
		  var AnnoInCorso = ScadenzaImpugnazione.getFullYear();

//		  var AnnoInCorso1 = ScadenzaImpugnazione.getYear();
//		  AnnoInCorso = (AnnoInCorso1 < 2000) ? AnnoInCorso1 + 1900 : AnnoInCorso1;
//		Calcolo l'anno prossimo
//alert(AnnoInCorso)
		  var AnnoProssimo = ScadenzaImpugnazione.getFullYear()+1;

		  //var AnnoProx= ScadenzaImpugnazione.getYear()+1;
		  //AnnoProssimo = (AnnoProx < 2000) ? AnnoProx + 1900 : AnnoProx;

//		Calcolo i giorni festivi
//			PASQUA E PASQUETTA
		  var Pasqua = new Date(CalcolaPasqua(AnnoInCorso));

//		IMPOSTA LE ALTRE FESTIVITÀ
		  ProssimaPasqua=new Date(CalcolaPasqua(AnnoProssimo))
		  LuAngelo = new Date(""+MeseDiPasqua+", "+(GiornoDiPasqua+1)+" "+AnnoInCorso+" 00:00:00 GMT+0100");
		  ProssimoLuAngelo = new Date(""+MeseDiPasqua+", "+(GiornoDiPasqua+1)+" "+AnnoProssimo+" 00:00:00 GMT+0100");
		  //Altre festività
		  Capodanno = new Date(""+gennaio+", "+1+" "+AnnoInCorso+" 00:00:00 GMT+0100");
		  ProssimoCapodanno=new Date(""+gennaio+", "+1+" "+AnnoProssimo+" 00:00:00 GMT+0100");
		  Epifania = new Date(""+gennaio+", "+6+" "+AnnoInCorso+" 00:00:00 GMT+0100");
		  ProssimaEpifania = new Date(""+gennaio+", "+6+" "+AnnoProssimo+" 00:00:00 GMT+0100");

		  Aprile25 = new Date(""+aprile+", "+25+" "+AnnoInCorso+" 00:00:00 GMT+0100");
		  ProssimoAprile25 = new Date(""+aprile+", "+25+" "+AnnoProssimo+" 00:00:00 GMT+0100");

		  Maggio1 = new Date(""+maggio+", "+1+" "+AnnoInCorso+" 00:00:00 GMT+0100");
		  ProssimoMaggio1 = new Date(""+maggio+", "+1+" "+AnnoProssimo+" 00:00:00 GMT+0100");

		  Ognissanti = new Date(""+novembre+", "+1+" "+AnnoInCorso+" 00:00:00 GMT+0100");
		  Giugno2 = new Date(""+giugno+", "+2+" "+AnnoInCorso+" 00:00:00 GMT+0100");
		  Natale = new Date(""+dicembre+", "+25+" "+AnnoInCorso+" 00:00:00 GMT+0100");
		  SStefano = new Date(""+dicembre+", "+26+" "+AnnoInCorso+" 00:00:00 GMT+0100");
		  Dicembre8 = new Date(""+dicembre+", "+8+" "+AnnoInCorso+" 00:00:00 GMT+0100");

		  var ScadenzaImpugnazioneConFestivi= new Date(ScadenzaImpugnazione);
		  var reportFestivo =""

//alert(ScadenzaImpugnazioneConFestivi)
//			COMPARA I GIONI FESTIVI CON SCADENZAI 
		  switch (FormData(ScadenzaImpugnazioneConFestivi)){
		    case FormData(Pasqua): 
			ScadenzaImpugnazioneConFestivi = new Date(addDays(ScadenzaImpugnazione, 2));
			reportFestivo=" (Pasqua)";
		    break
		    case FormData(ProssimaPasqua): 
			ScadenzaImpugnazioneConFestivi = new Date(addDays(ScadenzaImpugnazione, 2));
			reportFestivo=" (Pasqua)";
		    break
		    case FormData(LuAngelo):
			ScadenzaImpugnazioneConFestivi = new Date(addDays(ScadenzaImpugnazione, 1));
			reportFestivo=" (Lun. dell'Angelo)";
		    break
		    case FormData(ProssimoLuAngelo):
			ScadenzaImpugnazioneConFestivi = new Date(addDays(ScadenzaImpugnazione, 1));
			report=" (Lun. dell'Angelo)";
		    break
		    case FormData(Capodanno): 
			ScadenzaImpugnazioneConFestivi = new Date(addDays(ScadenzaImpugnazione, 1));
			reportFestivo=" (Capodanno)";
		    break
		    case FormData(ProssimoCapodanno): 
			ScadenzaImpugnazioneConFestivi = new Date(addDays(ScadenzaImpugnazione, 1));
			reportFestivo=" (Capodanno)";
		    break
		    case FormData(Epifania):
			ScadenzaImpugnazioneConFestivi = new Date(addDays(ScadenzaImpugnazione, 1));
			reportFestivo=" (Epifania)";
		    break
		    case FormData(ProssimaEpifania):
			ScadenzaImpugnazioneConFestivi = new Date(addDays(ScadenzaImpugnazione, 1));
			reportFestivo=" (Epifania)";
		    break
		    case FormData(Aprile25): 
			ScadenzaImpugnazioneConFestivi = new Date(addDays(ScadenzaImpugnazione, 1));
			reportFestivo=" (Anniv. Liberazione)";
		    break
		    case FormData(ProssimoAprile25): 
			ScadenzaImpugnazioneConFestivi = new Date(addDays(ScadenzaImpugnazione, 1));
			reportFestivo=" (Anniv. Liberazione)";
		    break
		    case FormData(Maggio1): 
			ScadenzaImpugnazioneConFestivi = new Date(addDays(ScadenzaImpugnazione, 1));
			report=" (Festa del lavoro)";
		    break
		    case FormData(ProssimoMaggio1): 
			ScadenzaImpugnazioneConFestivi = new Date(addDays(ScadenzaImpugnazione, 1));
			reportFestivo=" (Festa del lavoro)";
		    break
		    case FormData(Giugno2): 
			ScadenzaImpugnazioneConFestivi = new Date(addDays(ScadenzaImpugnazione, 1));
			reportFestivo=" (Festa della Repubblica)";
		    break
		    case FormData(Ognissanti): 
			ScadenzaImpugnazioneConFestivi = new Date(addDays(ScadenzaImpugnazione, 1));
			reportFestivo=" (Ognissanti)";
		    break
		    case FormData(Natale): 
			ScadenzaImpugnazioneConFestivi = new Date(addDays(ScadenzaImpugnazione, 2));
			reportFestivo=" (Ognissanti)";
		    break
		    case FormData(SStefano):
			ScadenzaImpugnazioneConFestivi = new Date(addDays(ScadenzaImpugnazione, 1));
			reportFestivo=" (Santo Stefano)";
		    break
		    case FormData(Dicembre8): 
			ScadenzaImpugnazioneConFestivi = new Date(addDays(ScadenzaImpugnazione, 1));
			reportFestivo=" (Imm. Concezione)";
		    break
		  }

//		Valuta se è festivo
	    if (reportFestivo=="") {
//		Setta la variabile per scrivere LO SPOSTAMENTO DA FESTIVO
		  var $ScadenzaImpugnazioneConFestivi = "No, rimane " + String(FormData(ScadenzaImpugnazioneConFestivi));
	      }
	    else {
//		Setta la variabile per scrivere LO SPOSTAMENTO DA FESTIVO
		  var $ScadenzaImpugnazioneConFestivi = "Si, " + String.fromCharCode(232) + " festa " +reportFestivo+ ". Si sposta a "+String(FormData(ScadenzaImpugnazioneConFestivi));
	    }

	    var tdom
	    var reportDomenica=""
	    var ddom = ScadenzaImpugnazioneConFestivi.getDay();


	    if (ddom==0) {
		var ScadenzaImpugnazioneFinale = new Date(addDays(ScadenzaImpugnazioneConFestivi, 1));
		reportDomenica=" (DOMENICA)"
//		Setta la variabile per scrivere LO SPOSTAMENTO DA FESTIVO
		  var $ScadenzaImpugnazioneFinale = "Si, " + String.fromCharCode(232) + " domenica. Si sposta a " + String(FormData(ScadenzaImpugnazioneFinale));
	      }
	    else {
//		Lascia immutata la scadenza
		var ScadenzaImpugnazioneFinale = ScadenzaImpugnazioneConFestivi;
//		Setta la variabile per scrivere LO SPOSTAMENTO DA FESTIVO
		  var $ScadenzaImpugnazioneFinale = "No, rimane " + String(FormData(ScadenzaImpugnazioneFinale));
	    }





//            FINE CALCOLO DELLA DATA DI SCADENZA DELL'IMPUGNAZIONE
//            ---


//           SCRIVE I DATI NELLE CASELLE DI RIEPILOGO PER LA STAMPA

	document.tx1.face.value = FormData(DataSentenza);
	document.txTermineDepMotivazione.face.value = TermineDepMotivaz + " giorni";
	document.tx3.face.value = FormData(DataNotEstrCont);
	document.tx4.face.value = FormData(DataNotDepTardivo);
	document.tx5.face.value = FormData(DecorrenzaImpugnazioneNetta);
	document.tx6.face.value = $DecorrImpugnFeriato;//FormData(DecorrenzaImpugnazione);
	document.tx7.face.value = TermineImpugnazione + " giorni";
	document.tx8.face.value = FormData($ScadenzaImpugnazioneNetta);
	document.tx9.face.value = ggMaturatiNelFeriato + " giorni";
	document.tx10.face.value = $ScadImpugnFeriato + " " //+ reportFestivo;// FormData(ScadenzaImpugnazione)+reportFestivo;
	document.tx11.face.value = $ScadenzaImpugnazioneConFestivi+ " " +reportDomenica //FormData(ScadenzaImpugnazioneConFestivi)+reportDomenica;
	document.tx12.face.value = $ScadenzaImpugnazioneFinale //FormData(ScadenzaImpugnazioneFinale);
	document.txScadenzaFinale.face.value = FormData(ScadenzaImpugnazioneFinale);
	//document.txScadenzaFinale.face.value = ScadenzaImpugnazioneFinale;
	document.kn1.face.value = ScadenzaImpugnazioneFinale 
	document.kn2.face.value = addDays(DataSentenza,TermineDepMotivaz) 
	document.kn3.face.value = $ScadenzaImpugnazioneNetta
	document.kn4.face.value = ScadImpugnDopoFeriato


	//alert(addDays(DataSentenza,TermineDepMotivaz))
	//document.txTermineDepMotivazione.face.value = TermineDepMotivaz + " giorni";
	//document.tx7.face.value = TermineImpugnazione + " giorni";
	//document.txScadenzaFinale.face.value = FormData(ScadenzaImpugnazioneFinale);
	//document.getElementById("kScFin").value="yyy""
	//document.KScFinale.value="ppp"//ScadenzaImpugnazioneFinale


var StrNota = (
	"Data della sentenza: " +
	FormData(DataSentenza) +
	String.fromCharCode(10) +
	"Termine per il deposito della motivazione gg.: " + TermineDepMotivaz + 
	String.fromCharCode(10) +
	"Termine per impugnare gg.: " + TermineImpugnazione +
	String.fromCharCode(10) +
	"Data di notifica dell'estratto contumaciale: " +
	FormData(DataNotEstrCont)+
	String.fromCharCode(10) +
	"Data di notifica dell'avviso di deposito tardivo: " +
	FormData(DataNotDepTardivo)+
	String.fromCharCode(10) +
	String.fromCharCode(10) +


	"CALCOLO DEL TERMINE DI DECORRENZA:" +
	String.fromCharCode(10) +
	"Decorrenza del termine per impugnare: " +
	FormData(DecorrenzaImpugnazioneNetta) +
	String.fromCharCode(10) +
	"*  Spostamento del termine di decorrenza per il feriato:" +
	String.fromCharCode(10) +
	"    "+$DecorrImpugnFeriato+
	String.fromCharCode(10) +
	String.fromCharCode(10) +

	"CALCOLO DEL TERMINE DI IMPUGNAZIONE:" +
	String.fromCharCode(10) +
	"Termine di Scadenza: " +
	FormData($ScadenzaImpugnazioneNetta) +
	String.fromCharCode(10) +
	"*  Spostamento del termine di scadenza per il feriato:   " +
	String.fromCharCode(10) +
	"    "+$ScadImpugnFeriato +
	String.fromCharCode(10) +
	"Giorni maturati nel feriato e recuperati: " + ggMaturatiNelFeriato +// " giorni" +
	String.fromCharCode(10) +
	"*  Spostamento del termine di scadenza per il festivo: " +
	String.fromCharCode(10) +
	"    "+$ScadenzaImpugnazioneConFestivi +
	String.fromCharCode(10) +
	"*  Spostamento del termine che cade di domenica: " +
	String.fromCharCode(10) +
	"    "+$ScadenzaImpugnazioneFinale +

	String.fromCharCode(10) +
	String.fromCharCode(10) +

	"TERMINE DI SCADENZA PER PROPORRE IMPUGNAZIONE:" +
	String.fromCharCode(10) +
	FormData(ScadenzaImpugnazioneFinale)

)
//alert(StrNota)
document.txNota.face.value = StrNota


// Abilita il pulsante stampa
//document.StampaButton.type="button"//face.value="button"
//document.MyForm.LblDescrizione.type="text"//face.value="button"
//document.TxDescrizione.type="text"//face.value="button"
//document.getElementById("TxDescr").type="text"
//document.getElementById("StButton").type="button"
document.getElementById("TabRiep").style.display="inline"
//ecco
//document.MyForm.txTermineDepMotivazione.type="hidden"
}

function Reset()
{
document.location.reload()
}

function FxStampa()
{


vPrat=document.getElementById("TxDescr").value
//vPrat=document.TxDescrizione.value
v1=document.tx1.face.value //= FormData(DataSentenza);
v2=document.txTermineDepMotivazione.face.value  //= TermineDepMotivaz + " giorni";
v3=document.tx3.face.value  //= FormData(DataNotEstrCont);
v4=document.tx4.face.value  //= FormData(DataNotDepTardivo);
v5=document.tx5.face.value  //= FormData(DecorrenzaImpugnazioneNetta);
v6=document.tx6.face.value  //= $DecorrImpugnFeriato;//FormData(DecorrenzaImpugnazione);
v7=document.tx7.face.value  //= TermineImpugnazione + " giorni";
v8=document.tx8.face.value  //= FormData($ScadenzaImpugnazioneNetta);
v9=document.tx9.face.value  //= ggMaturatiNelFeriato + " giorni";
v10=document.tx10.face.value  //= $ScadImpugnFeriato + " " //+ reportFestivo;// FormData(ScadenzaImpugnazione)+reportFestivo;
v11=document.tx11.face.value  //= $ScadenzaImpugnazioneConFestivi//+ " " +reportDomenica //FormData(ScadenzaImpugnazioneConFestivi)+reportDomenica;
v12=document.tx12.face.value  //= $ScadenzaImpugnazioneFinale //FormData(ScadenzaImpugnazioneFinale);
v13=document.txScadenzaFinale.face.value


var DaStampare=(
"CALCOLO DEI TERMINI PER LE IMPUGNAZIONI PENALI" + 
"<br>"+"<br>"+
"PRATICA:" + 
"<br>"+
vPrat+"<br>"+"<br>"+
"DATI DELLA SENTENZA " +
"<br>"+
"Data di emissione: " + 
"<br>"+ v1 +"<br>"+
"Termine per il deposito della motivazione: " +
"<br>"+ v2 +"<br>"+
"Termine per impugnare: " +
"<br>"+ v7 +"<br>"+
"Data di notifica dell'estratto contumaciale: " +
"<br>"+ v3 +"<br>"+
"Data di notifica dell'avviso di deposito tardivo: " +
"<br>"+ v4 +"<br>"+"<br>"+
"CALCOLO DELLA DECORRENZA DEL TERMINE PER IMPUGNARE" +
"<br>"+
"Decorrenza termine: " +
"<br>"+ v5 +"<br>"+
"Spostamento del termine per il feriato: " +
"<br>"+ v6 +"<br>"+"<br>"+
"CALCOLO DELLA SCADENZA" +
"<br>"+
"Termine di scadenza: " +
"<br>"+ v8 +"<br>"+
"Giorni maturati nel feriato: " +
"<br>"+ v9 +"<br>"+
"Spostamento della scadenza per il feriato: " +
"<br>"+ v10 +"<br>"+
"Spostamento della scadenza dal giorno festivo: " +
"<br>"+ v11 +"<br>"+
"Spostamento della scadenza che cade di domenica: " +
"<br>"+ v12 +"<br>"+
"<br>"+"<br>"+
"TERMINE DI SCADENZA DELL'IMPUGNAZIONE: " +
"<br>"+ v13+"<br>"+
"<br>"+"<br>"

);

var pippo=""

//PASSA ALLA STAMPA
fin=window.open("about:blank","Finestra_Stampa")
fin.document.location.reload()
fin.document.write("<html><body onLoad='self.print()'><form style='font-family: Helvetica,Arial,sans-serif; '>"+DaStampare+"</body></html>")

//fin.document.close()

}



function ImmettiGGdeposito()
{
  var valore = document.MyForm.DepSent.value
  if (valore==1) {
  document.MyForm.txTermineDepMotivazione.type="text"
  var PromptGG=prompt ("Scrivere il termine indicato dal Giudice per il deposto della motivazione.","")
  if (PromptGG=="") {PromptGG=15}
  if (PromptGG<="15") {PromptGG=15}
  document.MyForm.txTermineDepMotivazione.value= PromptGG
  }
  else{document.MyForm.txTermineDepMotivazione.type="hidden"}
//document.MyForm.txTermineDepMotivazione.type="hidden"



}

