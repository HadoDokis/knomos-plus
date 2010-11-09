
// PROVE

function pippo(){
//alert("iii")

//Frame=document.getElementById("file-box");
//alert(Frame.name)

//<a href="/browse2/New Folder" title="" style="display: none; ">New Folder</a>

//Frame1.location.href="/browse2/New Folder"
//ImpegnoDerivato=document.Frame1.getElementById("entered-folder-name").value;
//ImpegnoDerivato=document.Frame1.getElementById("file-box").name;
//alert(ImpegnoDerivato)
//id="entered-folder-name"

//Il pulsante su dropbox è questo:
//<input type="button" class="button" onclick="Modal.vars.action($F('entered-folder-name')); return Modal.hide(event);" value="Create folder"/>
//&nbsp;<input type="button" onclick="Modal.hide(event)" class="button grayed" value="Cancel"/> 



}



// FUNZIONI

function MailInviate()
{
arr = document.getElementsByTagName("span");
vPratica = arr [0].innerHTML;

apri="https://mail.google.com/a/ammannati.it/?tab=cm#search/"


url=apri+vPratica
var stile = "top=10, left=10, width=750, height=500, status=no, menubar=no, toolbar=no scrollbar=no";  
window.open(url, "", stile);
     
}


function NuovaMail()
{

arr = document.getElementsByTagName("span");
vPratica = arr [0].innerHTML;
//alert(vPratica)

var stringa="Mailto:?SUBJECT="
//alert(stringa + vPratica )
//window.loadLayerWindow(stringa + vPratica,"ppp")
location.href=stringa + vPratica 


}



// TARIFFARIO FORENSE  (seno 4 funzioni che aprono la pagina di immissione della prestazione
function TarOnPenale()
{
//Prende il valore Id
var params = getParameterDaFrame();
var vId = params['ref_id[realval][]'];

//Prende i valori passati dalla select
ctrlSelect=document.getElementById("SelOnPen")
var vCod = ctrlSelect.options[ctrlSelect.selectedIndex].value;
var vDesc = ctrlSelect.options[ctrlSelect.selectedIndex].text;

if (vCod == "0") {}
else {
if (vCod == "#") {alert("Il tariffario prescelto non è implementato.")}
else{
parent.location.href="/modules/prestazioni/pages/new_prestazione.php?ref_id=" + vId + "&CodPrest=" + vCod + "&TextPrest=" + vDesc + "&PagProv=NuovaPrestazioneDaTariffario"; 
}
};
//FINE FUNZIONE
}

function TarDirCogn()
{
//alert(navigator.appVersion )
//Prende il valore Id
var params = getParameterDaFrame();
var vId = params['ref_id[realval][]'];

//Prende i valori passati dalla select
ctrlSelect=document.getElementById("SelDirCogn")
var vCod = ctrlSelect.options[ctrlSelect.selectedIndex].value;
var vDesc = ctrlSelect.options[ctrlSelect.selectedIndex].text;

if (vCod == "0") {}
else {
if (vCod == "#") {alert("Il tariffario prescelto non è implementato.")}
else{
parent.location.href="/modules/prestazioni/pages/new_prestazione.php?ref_id=" + vId + "&CodPrest=" + vCod + "&TextPrest=" + vDesc + "&PagProv=NuovaPrestazioneDaTariffario";  
}
};

//FINE FUNZIONE
}

function TarDirEsec()
{

//Prende il valore Id
var params = getParameterDaFrame();
var vId = params['ref_id[realval][]'];

//Prende i valori passati dalla select
ctrlSelect=document.getElementById("SelDirEsec")
var vCod = ctrlSelect.options[ctrlSelect.selectedIndex].value;
var vDesc = ctrlSelect.options[ctrlSelect.selectedIndex].text;

if (vCod == "0") {}
else {
if (vCod == "#") {alert("Il tariffario prescelto non è implementato.")}
else{
parent.location.href="/modules/prestazioni/pages/new_prestazione.php?ref_id=" + vId + "&CodPrest=" + vCod + "&TextPrest=" + vDesc + "&PagProv=NuovaPrestazioneDaTariffario";  
}
};

}

function TarOnCiv()
{

//Prende il valore Id
var params = getParameterDaFrame();
var vId = params['ref_id[realval][]'];

//Prende i valori passati dalla select
ctrlSelect=document.getElementById("SelOnCiv")
var vCod = ctrlSelect.options[ctrlSelect.selectedIndex].value;
var vDesc = ctrlSelect.options[ctrlSelect.selectedIndex].text;

if (vCod == "0") {}
else {
if (vCod == "#") {alert("Il tariffario prescelto non è implementato.")}
else{
parent.location.href="/modules/prestazioni/pages/new_prestazione.php?ref_id=" + vId + "&CodPrest=" + vCod + "&TextPrest=" + vDesc + "&PagProv=NuovaPrestazioneDaTariffario";  
}
};

}

// FINE TARIFFARIO


//                             I M P E G N I

//IMPEGNI VELOCI

function ApriPagVeloci()
{
//richiamata dal select in adde_calendar_veloci.php (SelImpegniVeloci)
//PARAMETRI PASSATI DALLA SELECT: orario,codiceprestazione,priorita,genere

//Per prima cosa prende l'ID
var params = getParameterDaFrame();
var vId = params['ref_prat[realval][]']
//alert(vId)


//Poi gli altri parametri
//quelli della select
Sel=document.getElementById("SelImpegniVeloci");
//alert(Sel.name)
var TxTesto = Sel.options[Sel.selectedIndex].text;
var TxValue = Sel.options[Sel.selectedIndex].value;
stringa=TxValue
var i;
for (i = 0; i < TxValue.length; i++) {var c = TxValue.charAt(i);}
var splittata = TxValue.split("/");
var vCod = splittata[0]
var vGenere =splittata[1]

//Setta quindi I PARAMETRI CALCOLATI
switch (vGenere) {  
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

//Poi la data, che sarà quella di oggi visto che si inserisce un impegno veloce
Oggi = new Date();
var gg1 = Oggi.getDate();
var mm1 = Oggi.getMonth()+1;
var aa1 =Oggi.getFullYear(); 


//aggiungere + "&gg=" + gg1 + "&mm=" + mm1 + "&aa=" + aa1
TxUrl = "/modules/calendar/pages/new_app.php?ref_id=" + vId + "&gg=" + gg1 + "&mm=" + mm1 + "&aa=" + aa1 + "&orario=" + vOra +  "&codice=" + vCod +  "&evento=" + vEvento +
"&descrizione=" + TxTesto + "&priorita=" + vPriorita + "&genere=" + vGenere + "&PagProv=" + "InsVeloci" 
//alert(TxUrl)
//TxUrl = "/modules/calendar/pages/new_app.php?ref_id=" + vId + "&codice[text]='ciaociao'" + "&input='ciaociao'" //WWWW
//Apre la pagina
parent.location.href=TxUrl
}


function SetCalVeloci(id,giorno,mese,anno,orario,evento,codiceprestazione,descrizione,priorita,genere,nota)
{

//Questa funzione viene richiamata dalla gestione della pagina aperta
//alert("qui")
//SetCalVeloci("","","",pOrario,pEvento,pCodice,pDescrizione,pPriorita,pGenere,nota)

//DATA
arr0 = document.getElementsByName("day[day]");
arr0 [0].value=giorno;
//mese
arr1 = document.getElementsByName("day[month]"); 
arr1 [0].value=mese;
//anno
arr2 = document.getElementsByName("day[year]");
arr2 [0].value=anno;
//orario
arr3 = document.getElementsByName("time");
arr3 [0].value=orario;
//evento
if (evento == "true") {arr4 = document.getElementsByTagName("input"); arr4 [5].checked=evento;}
//codice prestazione
arr5 = document.getElementsByName("codice[text]"); 
arr5 [0].value=codiceprestazione;
//descrizione
arr6 = document.getElementsByTagName("input"); 
//alert(arr4 [11].name) 
arr6 [12].value=descrizione;
//Priorità
arr7 = document.getElementsByName("priorita[]"); 
arr7 [0].value =priorita;
//Genere
arr8 = document.getElementsByName("type_app[]"); 
arr8 [0].value =genere;//"UD";
//Nota
arr9 = document.getElementsByName("note"); 
arr9 [0].value=nota;
}

//FINE VELOCI

//     --------------------------------------------------------------------------------------

//RINVIO

function Rinvia()
{

//Compone le variabili
var params = getParameterDaFrame();
var valoreId = params['id'];

var gg = document.FormRinvio.MyDay.value;

var mm = document.FormRinvio.MyMonth.value;
var aa = document.FormRinvio.MyYear.value;
var hh = document.FormRinvio.MyOra.value;
//alert("qui")
var min = document.FormRinvio.txMin.value;
var per = document.FormRinvio.txPer.value;
var ist = document.FormRinvio.txIstruz.value;
var exRel = document.FormRinvio.txRelUd.value;
//alert("qui")
//e le passa alla pagina php
//FileModificaApp="/plus/pages/calendar/rinvia_app.php?id="+valoreId + "&gg=" + gg + "&mm=" + mm + "&aa=" + aa + "&hh=" + hh + "&min=" + min + "&per=" + per + "&ist=" + ist + "&exRel=" + exRel;
FileModificaApp="/modules/calendar/pages/new_app.php?id="+valoreId + "&gg=" + gg + "&mm=" + mm + "&aa=" + aa + "&hh=" + hh + "&min=" + min + "&per=" + per + "&ist=" + ist + "&exRel=" + exRel + "&PagProv=Rinvio";

parent.location.href=FileModificaApp;

}
//FINE RINVIO

//  ---------------------------     fine impegni     -----------------------------------


// ---------  INIZIO AGGIUNTA CONTATTO DA CODICE FISCALE -----------------------------

function AddeContattoDaCF()
{
//alert("qui")

var cognome = document.CodiceFiscale.iCognome.value
var prenome = document.CodiceFiscale.iNome.value
var nome= cognome + " " + prenome

var gg=document.CodiceFiscale.iGiorno.value
var mmm=document.CodiceFiscale.iMese.value

switch (mmm){
case "A":
mm="01"
break
case "B":
mm="02"
break
case "C":
mm="03"
break
case "D":
mm="04"
break
case "E":
mm="05"
break
case "H":
mm="06"
break
case "L":
mm="07"
break
case "M":
mm="08"
break
case "P":
mm="09"
break
case "R":
mm="10"
break
case "S":
mm="11"
break
case "T":
mm="12"
break
}

var aa=document.CodiceFiscale.iAnno.value
var luogo=document.CodiceFiscale.iComune.value
var cf=document.CodiceFiscale.Risultato.value

// Richiama la funzione che apre la pagina (segue)
OpenPagContattoDaCF(nome,cf,luogo,gg,mm,aa)
}

function OpenPagContattoDaCF(nome,codfisc,luogo,g,m,a)
{
//alert("sono qui")
variabile="/modules/contact/pages/new_contact.php?codice=" + nome + "&nome=" + nome +"&cod_fis=" + codfisc +"&luogo=" + luogo +"&giorno=" + g  +"&mese=" + m  +"&anno=" + a + "&PagProv=ContattoDaCF";
//ccc
//alert(window.name)
parent.parent.parent.location.href=variabile;
}

// --------------------------- FINE AGGIUNTA CONTATTO DA CODICE FISCALE -------------------------





//	                                	G E N E R A L I

// -------------------------------------- A P E R T U R A   P A G I N A   --------------------------------------


function SetPageLoad()
{
var PaginaAperta = document.title;
//alert(PaginaAperta)

//  ---------------------------------------   Aggiungi pratica   ------------------------------
//if (PaginaAperta=="Aggiungi pratica")
//{

	//arrCaselleInput = document.getElementsByTagName("input");
	//for (i = 0; i < arrCaselleInput.length; i++)
	//{if(arrCaselleInput[i].name=="pr_criterio") {arrCaselleInput[i].value="Min*5"}
	//}//fine for

	//for (i = 0; i < arrCaselleInput.length; i++)
	//{if(arrCaselleInput[i].name=="pr_valore") {arrCaselleInput[i].checked=true;return}//deve uscire al primo(ce ne sono tre)
	//}//fine for

//arrCriterio = document.getElementsByName("pr_criterio");
//arrCriterio [0].value="Min*5"
//arrValore = document.getElementsByName("pr_valore");
//arrValore [0].checked=true
//alert(vCriterio)
//}



//  ---------------------------------------   AGGIUNGI IMPEGNO VELOCE   ------------------------------

if (PaginaAperta=="Modifica Impegno")
{
var params = getParameterDaFrame();
var pPagProv = params['PagProv'];

if (pPagProv == "Rinvio")
{
ac = String.fromCharCode(10);
//alert("eccomi")
//Prende dalla pagina di modifica (ora aperta) la data e l'ora dell'udienza di rinvio
//giorno
arr0 = document.getElementsByName("day[day]");
exGG = arr0 [0].value;
//mese
arr1 = document.getElementsByName("day[month]"); 
exMM = arr1 [0].value;
//anno
arr2 = document.getElementsByName("day[year]");
exAA = arr2 [0].value;
//orario
//alert("eccomi")
//arr3 = document.getElementsByName("time");
//exHH = arr3 [0].value;
arr3 = document.getElementsByTagName("input"); 
//alert(arr3 [8].name)
exHH = arr3 [8].value;

//Crea la stringa con la data di provenienza
strProv = "Provenienza: "+  exGG + "-" + exMM  + "-" + exAA  + " h. " + exHH ;
//Carica i parametri passati dalla funzione alla pagina php 
var params = getParameter();
// forma il campo note ( per  ist +  exRel;)
//alert(document.title);
var paramPer = params['per'];
var paramIstruz = params['ist'];
var paramExRel = params['exRel'];
var paramGG = params['gg'];
var paramMM = params['mm'];
var paramAA = params['aa'];
var paramHH = params['hh'];
var paramMIN = params['min'];



var FineVecchiaNota = ac + "Esito:" + ac + paramExRel + ac + "---" + ac

var NuovaNota =  "Udienza del " + paramGG + "-" + paramMM + "-" + paramAA + " h. " + paramHH + ":" + paramMIN +
ac + strProv + ac +
"Per: "  + paramPer  + ac + "Istruzioni:" + paramIstruz + ac

//Qindi gli altri 
//poi
//Passa i parametri ai campi della pagina

//giorno
arr0 = document.getElementsByName("day[day]");
arr0 [0].value=paramGG;
//mese

arr1 = document.getElementsByName("day[month]"); 
arr1 [0].value=paramMM;
//anno

arr2 = document.getElementsByName("day[year]");
arr2 [0].value=paramAA;
//orario


//arr3 = document.getElementsByName("time");
//arr3 [0].value=paramHH + ":" + paramMIN;
arr3 = document.getElementsByTagName("input"); 
arr3 [8].value=paramHH + ":" + paramMIN;


//Nota
//var paramCod6 = params['note'];

//arr6 = document.getElementsByName("note");
arr6 = document.getElementsByTagName("textarea"); 
VecchiaNota = arr6 [0].value;



var StrPrimaUdienza = ""
if (VecchiaNota == ""){StrPrimaUdienza = "Udienza del "+  exGG + "-" + exMM  + "-" + exAA  + " h. " + exHH ;}
arr6 [0].value = StrPrimaUdienza + VecchiaNota + FineVecchiaNota + NuovaNota;

}
}

if (PaginaAperta=="Aggiungi Impegno")
{

//Pagine di provenienza (definita dal parametro PagProv) :  CalcTerProc, CalcImPen, InsVeloci, InsTerCalc, InsTerDeriv

///www
var params = getParameterDaFrame();
var pPagProv = params['PagProv'];

//alert(pPagProv)
switch (pPagProv)
{
case "CalcTerProc":
//alert(pPagProv)
// PARAMETRI DA CERCARE: gg=,mm,aa,orario,evento,codice,descrizione,priorita,genere
// La pagina aperta non ha l'Id perchè non è collegata ad alcuna pratica, che verrà ricercata in seguito
    var pGG = params['gg'];
    var pMM = params['mm'];
    var pAA = params['aa'];
    var pOrario = params['orario'];
    var pEvento = params['evento'];
    var pCodice = params['codice'];
    var pDescrizione = params['descrizione'];
    var pPriorita = params['priorita'];
    var pGenere = params['genere'];
    //alert(pEvento)
    SetCalVeloci("",pGG,pMM,pAA,pOrario,pEvento,pCodice,pDescrizione,pPriorita,pGenere,"")

break

case "CalcImPen":
//alert(pPagProv)
// PARAMETRI DA CERCARE: gg=,mm,aa,orario,evento,codice,descrizione,priorita,genere
// La pagina aperta non ha l'Id perchè non è collegata ad alcuna pratica, che verrà ricercata in seguito
    var pGG = params['gg'];
    var pMM = params['mm'];
    var pAA = params['aa'];
    var pOrario = params['orario'];
    var pEvento = params['evento'];
    var pCodice = params['codice'];
    var pDescrizione = params['descrizione'];
    var pPriorita = params['priorita'];
    var pGenere = params['genere'];
    //alert(pEvento)
    SetCalVeloci("",pGG,pMM,pAA,pOrario,pEvento,pCodice,pDescrizione,pPriorita,pGenere,"")

break

case "CalcImpCalcDeriv":
// PARAMETRI DA CERCARE: gg=,mm,aa,orario,evento,codice,descrizione,priorita,genere
// La pagina aperta ha l'Id perchè è collegata ad alcuna pratica, che verrà ricercata in seguito
    var pId = params['ref_id']
//alert(pId)
    var pGG = params['gg'];
    var pMM = params['mm'];
    var pAA = params['aa'];
    var pOrario = params['orario'];
    var pEvento = params['evento'];
    var pCodice = params['codice'];
    var pDescrizione = params['descrizione'];
    var pPriorita = params['priorita'];
    var pGenere = params['genere'];
    //alert(pEvento)
    SetCalVeloci(pId,pGG,pMM,pAA,pOrario,pEvento,pCodice,pDescrizione,pPriorita,pGenere,"")

break

case "InsVeloci":
//alert(pPagProv)
// PARAMETRI DA CERCARE: ref_id,orario,evento,codice,descrizione,priorita,genere
    var pGG = params['gg'];
    var pMM = params['mm'];
    var pAA = params['aa'];
    var pId = params['ref_id'];
    var pOrario = params['orario'];
    var pEvento = params['evento'];
    var pCodice = params['codice'];
    var pDescrizione = params['descrizione'];
    var pPriorita = params['priorita'];
    var pGenere = params['genere'];
    //alert(pEvento)
    SetCalVeloci(pId,pGG,pMM,pAA,pOrario,pEvento,pCodice,pDescrizione,pPriorita,pGenere,"")
break

}
}



//  -------------------------------------   AGGIUNGI PRESTAZIONE   ----------------------------------


if (PaginaAperta=="Aggiungi prestazione")
{
//alert("qui")

	arrCaselleInput = document.getElementsByTagName("input");

	var params = getParameterDaFrame();
	var pPagProv = params['PagProv'];

	if (pPagProv == "NuovaPrestazioneDaTariffario")
	{
		//Prende i parametri del codice e della descrizione
		var params = getParameter();
		var paramCod = params['CodPrest'];
		var paramDesc = params['TextPrest'];
		//e li mette nei campi

		for (i = 0; i < arrCaselleInput.length; i++)
		{
			if(arrCaselleInput[i].name=="testo")
			{
			arrCaselleInput[i].value=paramDesc
			}// FINE if(arrDescrizione[i].name=="testo")
		}//fine for
		for (i = 0; i < arrCaselleInput.length; i++)
		{
			if(arrCaselleInput[i].name=="codice[text]")
			{
			arrCaselleInput[i].value=paramCod
			}// FINE if(arrDescrizione[i].name=="testo")
		}//fine for
	}//FINE if (pPagProv == "NuovaPrestazioneDaTariffario")
	else
	{
		for (i = 0; i < arrCaselleInput.length; i++)
		{
			if(arrCaselleInput[i].name=="testo")
			{
			stringa=arrCaselleInput[i].value
			var i;
			for (ii = 0; ii < stringa.length; ii++) {var c = stringa.charAt(ii);}
			var splittata = stringa.split("Udienza");
			EsitoSplittata=splittata[0]
				if (EsitoSplittata=="") //Se cioè è un'udienza
				{
					for (iii = 0; iii < arrCaselleInput.length; iii++)
					{
					if(arrCaselleInput[iii].name=="keepscad")
						arrCaselleInput[iii].checked=true;
					}
				}
			}// FINE if(arrDescrizione[i].name=="testo")
		}//fine for
	}
}//FINE if (PaginaAperta=="Aggiungi prestazione")



//  ------------------------------------------   IMPEGNI  -----------------------------------------

if (PaginaAperta=="Impegni")
{
arr = parent.document.getElementsByTagName("span");
stringa=arr [0].innerHTML;

if (stringa == "Udienza "){document.getElementById("ModuloRinvio").style.display="inline"}
}


//  ---------------------------------------   RINVIA IMPEGNO  -----------------------------------

if (PaginaAperta=="Rinvia Impegno")
{
//alert(document.title);
//gigi();


}

//  ----------------------------------   NUOVA ANAGRAFICA (CALCOLATA) ------------------------------
//  ---------------------------------------   AGGIUNGI ANAGRAFICA DA Cf   ------------------------------

//ccc


if (PaginaAperta=="Nuova Anagrafica")
{

//var params = getParameterDaFrame();


//Carico i parametri
var params = getParameter();
var pPagProv = params['PagProv'];
//alert(pPagProv)
if (pPagProv == "ContattoDaCF")
{
//Passo i parametri ai campi della pagina
var paramCod1 = params['codice'];
arr0 = document.getElementsByTagName("input");
arr0 [4].value=paramCod1;
//nome
var paramCod2 = params['nome'];
arr0 = document.getElementsByTagName("input");
arr0 [5].value=paramCod2;
//codice fiscale
var paramCod3 = params['cod_fis'];
arr0 = document.getElementsByTagName("input");
arr0 [16].value=paramCod3;
//luogo di nascita
var paramCod4 = params['luogo'];
arr0 = document.getElementsByTagName("input");
arr0 [20].value=paramCod4;
//giorno
var paramCod5 = params['giorno'];
arr0 = document.getElementsByName("data[day]");
arr0 [0].value=paramCod5;
//mese
var paramCod6 = params['mese'];
arr1 = document.getElementsByName("data[month]"); 
arr1 [0].value=paramCod6;
//anno
var paramCod7 = params['anno'];
arr2 = document.getElementsByName("data[year]");
arr2 [0].value=paramCod7;
}
}

}


// ---------------------------------------  FINE APERTURA PAGINA  -------------------------------------------------



function getParameter()
{

//Array Associativo che conterrà i parametri presenti in querystring
var allParams = new Array();

//Recupero la URL visualizzata
var url = unescape( String(this.location) );
//alert(url)
//Restituisco NULL se non ci sono i parametri
if(url.indexOf('?') < 0)
return null;

//Recupero la lista dei parametri/valori
var paramList = url.split("?")[1];

//Recupero ogni coppia chiave/valore
var params = paramList.split("&");

//Scorro tutte le coppie chiave/valore
//e le separo
for(var i=0; i<params.length; i++)
{
var temp = params[i].split("=");

//Carico l'array con tutti i parametri trovati
allParams[temp[0]] = temp[1];
}

//Restituisco l'array dei parametri con i rispettivi valori
return allParams;
}



function getParameterDaFrame(){
//alert("qui")
//Array Associativo che conterrà i parametri presenti in querystring
var allParams = new Array();

//Recupero la URL visualizzata
var url = unescape( String(parent.location) );
//alert(url)
//Restituisco NULL se non ci sono i parametri
if(url.indexOf('?') < 0)
return null;

//Recupero la lista dei parametri/valori
var paramList = url.split("?")[1];

//Recupero ogni coppia chiave/valore
var params = paramList.split("&");

//Scorro tutte le coppie chiave/valore
//e le separo
for(var i=0; i<params.length; i++){
var temp = params[i].split("=");

//Carico l'array con tutti i parametri trovati
allParams[temp[0]] = temp[1];
}

//Restituisco l'array dei parametri con i rispettivi valori
return allParams;
}



// APRICHIUDI
function ApriChiudiPosta()
{
DisplayTabPosta = document.getElementById("TablePosta").style.display;
if (DisplayTabPosta == "inline") {document.getElementById("TablePosta").style.display="none"}
else {document.getElementById("TablePosta").style.display="inline"};
}




function ApriChiudiCalcolaTermini()
{
DisplayTabTerCalc = document.getElementById("TableTerminiCalcolati").style.display;
if (DisplayTabTerCalc == "inline") {document.getElementById("TableTerminiCalcolati").style.display="none"}
else {document.getElementById("TableTerminiCalcolati").style.display="inline"};
}

function ApriChiudiGestioneRinvio()
{
DisplayTabGestRinvio = document.getElementById("GestRinvio").style.display;
if (DisplayTabGestRinvio == "inline") {document.getElementById("GestRinvio").style.display="none";}
else {document.getElementById("GestRinvio").style.display="inline";
document.getElementById("GestImpDerivati").style.display="none"
};

}

function ApriChiudiImpegniDerivati()
{
DisplayTabImpDerivati = document.getElementById("GestImpDerivati").style.display;
if (DisplayTabImpDerivati == "inline") {document.getElementById("GestImpDerivati").style.display="none"}
else {document.getElementById("GestImpDerivati").style.display="inline";
document.getElementById("GestRinvio").style.display="none";};
}


function ApriChiudiSezione()
{
var flecchiaPiu =  "/template/skin_sutti/images/ico/home_flecchia_inf.gif"
var flecchiaMeno = "/template/skin_sutti/images/ico/home_flecchia_sopra.gif"

img1 = document.getElementById("ImmFlecchia");
var img = img1.getAttribute('src');


if (img==flecchiaPiu)
{
img1.src=flecchiaMeno;
document.getElementById("DivCollegato1").style.display="inline"
}

else
{
img1.src=flecchiaPiu;
document.getElementById("DivCollegato1").style.display="none"
}

}



// ------------------------------C O N T R O L L I   D I   K N O M O S  -------------------------------------

// IMPEGNI CALCOLATI
//Questa funzione vienerichiamata dal select Nuovo impegno calcolato nella pagina adde_calendar_veloci.php
//Serve solo per aprire la pagina (impug. pen / Termini proc.) nel layer
//Poi le funzioni che serivono sono nelle js delle pagine aperte
function SelectNuovoImpegnoCalcolato(valore)
{
switch (valore)
{
case "0":break
case "1":parent.loadLayerWindow('/plus/calcolatrici/Termini/Processuali/TerminiProcessualiHome1.php?modalita=CalImpCalc','Calcolatore dei termini processuali');break
case "2":parent.loadLayerWindow('/plus/calcolatrici/Termini/Impugnazioni/ImpugnazioniPenaliHome.php?modalita=CalImpCalc','Calcolatore dei termini delle impugnazioni penali');break
}
}
// FINE IMPEGNI CALCOLATI

function SelectNuovoImpegnoVeloce(valore)
{
ApriPagVeloci(valore)
}

//Pulsanti pagina Calcolatrici
function ApriCF(){Frame1.location.href="/plus/calcolatrici/cf/cf.php";}
function ApriCalArit(){Frame1.location.href="/plus/calcolatrici/Matematica/CalcolatriceAritmeticaH.html";}
function ApriInt(){Frame1.location.href="/plus/calcolatrici/Interessi/Interessi/CalcoloInteressiHome.html";}
function ApriIntLeg(){Frame1.location.href="/plus/calcolatrici/Interessi/Legali/InteressiLegaliH.html";}
function ApriIntMor(){Frame1.location.href="/plus/calcolatrici/Interessi/Moratori/InteressiMoratoriH.html";}
function ApriImPen(){Frame1.location.href="/plus/calcolatrici/Termini/Impugnazioni/ImpugnazioniPenali_H_FX.html";}
function ApriTerProc(){Frame1.location.href="/plus/calcolatrici/Termini/Processuali/TerminiProcessualiH.html";}
function ApriImpCalc(){Frame1.location.href="/plus/calcolatrici/Termini/Processuali/TerminiProcessualiH.html";}








// ------------------------------      D A    E L I M I N A R E     -----------------------------------------
// IMPEGNI DERIVATI
//Da cambiare: 
//1) Estrarre i valori che il select deve passare (FATTO NELLA PAG. CALCOLATORE TERMINI)
//2) Passarli all'apertura della pagina NUOVO IMPEGNO VELOCE con la stessa sintassi degli impegni calcolati da termini proc.
//    (FATTO NELLA PAG. CALCOLATORE TERMINI)
//3) Settare l'apertura pagina in modo che scorpori i valori passati e riempia i campi come ora SelezVeloci->SetCalVeloci
//4) Togliere tutte le funzioni



function pippo1_MODIFICANOMEPERVERIFICA()
{
//alert(valore)
arr = parent.document.getElementsByTagName("span");
stringa=arr [2].innerHTML

var i;
for (i = 0; i < stringa.length; i++) {var c = stringa.charAt(i);}
var splittata = stringa.split("/");
var gg1 = new Number(splittata[0])
var mm1 = new Number(splittata[1])
var aa1 = new Number(splittata[2])

DataDaDerivare = new Date(""+mm1+", "+gg1+" "+aa1+" 00:00");

DataDerivata=AddeData(DataDaDerivare,"g",30);
//alert(DataDerivata);

CalcIn = document.getElementById("SelCalcolaIn").value;
//alert(CalcIn);

ImpegnoDerivato=document.getElementById("SelImpegniDerivati");
var TxImpegnoDerivato = ImpegnoDerivato.options[ImpegnoDerivato.selectedIndex].text;
var CodImpegnoDerivato = ImpegnoDerivato.options[ImpegnoDerivato.selectedIndex].value;
//alert(TxImpegnoDerivato);
//alert(CodImpegnoDerivato);

genere=document.getElementById("SelTipoImp");
var TxGenere = genere.options[genere.selectedIndex].text;
var CodGenere = genere.options[genere.selectedIndex].value;
//alert(TxGenere);
//alert(CodGenere);

Termine=document.getElementById("txTerm").value;
//alert(Termine);
}


function AddeData_MODIFICANOMEPERVERIFICA(DataDaCalcolare,TipoAggiunta,DaAggiungere)
{
  switch (TipoAggiunta) {
    case "g":
      DataC = new Date(DataDaCalcolare.getTime() + DaAggiungere*86400000);
    break;
    case "m":
	mm=document.MyForm.MyMonthCalTer[document.MyForm.MyMonthCalTer.selectedIndex].value;
	CurMonth1a = mm - 1 ;
	CurMonth1 = CurMonth1a  + Number(DaAggiungere) ;

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


// FINE IMPEGNI DERIVATI



