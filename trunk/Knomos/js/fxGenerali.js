

//	                                	G E N E R A L I


function elementExists(id) {
	var el = document.getElementById(id);
 
	if (el != null) {
		return true;
	}
 
	return false;
}
 
function MsgBox1() {
alert('testo');

}
 
function CalcolaContributoUnificato2(uno, due, tre) {

alert(uno);

alert(due);

}//FINE FUNZIONE

function MsgBox(testo) {
alert(testo);

}
 
function CalcolaContributoUnificato2(uno, due, tre) {

alert(uno);

alert(due);

}//FINE FUNZIONE

function Trim(stringa)
   {
   reTrim=/\s+$|^\s+/g;
   return stringa.replace(reTrim,"");
   }

function ApriLinkDaSelect()
{

Sel=document.getElementById("selink");
var parametri = Sel.options[Sel.selectedIndex].value;
//alert(parametri)
var i;
var Tx="";
var splittata = new Array();
for (i = 0; i < parametri.length; i++) {var c = parametri.charAt(i);}
var splittata = parametri.split(";")

var url=splittata[0];
var target=splittata[1];

switch (target)
	{
	case "0":parent.Frame1.location.href=url; break
	case "1":ApriPopUp(url);break
	}
}//fine funzione


function ApriLink(parametri)
{
var i;
var Tx="";
var splittata = new Array();
for (i = 0; i < parametri.length; i++) {var c = parametri.charAt(i);}
var splittata = parametri.split(";");

var url=splittata[0];
var target=splittata[1];
switch (target)
	{
	case "0":parent.Frame1.location.href=url; break
	case "1":ApriPopUp(url);break
	}
}//fine funzione


function ApriPopUp(url)
{
  var stile = "top=10, left=10, width=750, height=500, status=no, menubar=no, toolbar=no scrollbar=no";
  window.open(url, "", stile);
}

function replace (str, first, last) {
    while (str.indexOf(first) != -1) {
        str = str.replace(first, last);
    }
    return str;
}


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

function ApriChiudiParti()
{
var flecchiaPiu =  "/template/skin_sutti/images/ico/home_flecchia_inf.gif"
var flecchiaMeno = "/template/skin_sutti/images/ico/home_flecchia_sopra.gif"
img1 = document.getElementById("ImmFlecchia1");
var img = img1.getAttribute('src');
	if (img==flecchiaPiu)
	{
	img1.src=flecchiaMeno;
	document.getElementById("PA1a").style.display="inline"
	document.getElementById("PA1b").style.display="inline"
	document.getElementById("PA2a").style.display="inline"
	document.getElementById("PA2b").style.display="inline"
	}
	else
	{
	img1.src=flecchiaPiu;
	document.getElementById("PA1a").style.display="none"
	document.getElementById("PA1b").style.display="none"
	document.getElementById("PA2a").style.display="none"
	document.getElementById("PA2b").style.display="none"
	}
}//fine funzione

function ApriChiudiAutoritaGiudiziaria()
{
var flecchiaPiu =  "/template/skin_sutti/images/ico/home_flecchia_inf.gif"
var flecchiaMeno = "/template/skin_sutti/images/ico/home_flecchia_sopra.gif"
img1 = document.getElementById("ImmFlecchia2");
var img = img1.getAttribute('src');
	if (img==flecchiaPiu)
	{
	img1.src=flecchiaMeno;
	document.getElementById("AG1a").style.display="inline"
	document.getElementById("AG1b").style.display="inline"
	document.getElementById("AG2a").style.display="inline"
	document.getElementById("AG2b").style.display="inline"
	document.getElementById("AG3a").style.display="inline"
	document.getElementById("AG3b").style.display="inline"

	}
	else
	{
	img1.src=flecchiaPiu;
	document.getElementById("AG1a").style.display="none"
	document.getElementById("AG1b").style.display="none"
	document.getElementById("AG2a").style.display="none"
	document.getElementById("AG2b").style.display="none"
	document.getElementById("AG3a").style.display="none"
	document.getElementById("AG3b").style.display="none"
	}
}//fine funzione

function ApriChiudiUffici()
{
var flecchiaPiu =  "/template/skin_sutti/images/ico/home_flecchia_inf.gif"
var flecchiaMeno = "/template/skin_sutti/images/ico/home_flecchia_sopra.gif"
img1 = document.getElementById("ImmFlecchia3");
var img = img1.getAttribute('src');
	if (img==flecchiaPiu)
	{
	img1.src=flecchiaMeno;
	document.getElementById("UF1a").style.display="inline"
	document.getElementById("UF1b").style.display="inline"
	document.getElementById("UF2a").style.display="inline"
	document.getElementById("UF2b").style.display="inline"
	}
	else
	{
	img1.src=flecchiaPiu;
	document.getElementById("UF1a").style.display="none"
	document.getElementById("UF1b").style.display="none"
	document.getElementById("UF2a").style.display="none"
	document.getElementById("UF2b").style.display="none"
	}
}//fine funzione

function ApriChiudiParametriNotulazione()
{
var flecchiaPiu =  "/template/skin_sutti/images/ico/home_flecchia_inf.gif"
var flecchiaMeno = "/template/skin_sutti/images/ico/home_flecchia_sopra.gif"
img1 = document.getElementById("ImmFlecchia4");
var img = img1.getAttribute('src');
	if (img==flecchiaPiu)
	{
	img1.src=flecchiaMeno;
	document.getElementById("PN1a").style.display="inline"
	document.getElementById("PN1b").style.display="inline"
	document.getElementById("PN2a").style.display="inline"
	document.getElementById("PN2b").style.display="inline"
	document.getElementById("PN3a").style.display="inline"
	document.getElementById("PN3b").style.display="inline"

	}
	else
	{
	img1.src=flecchiaPiu;
	document.getElementById("PN1a").style.display="none"
	document.getElementById("PN1b").style.display="none"
	document.getElementById("PN2a").style.display="none"
	document.getElementById("PN2b").style.display="none"
	document.getElementById("PN3a").style.display="none"
	document.getElementById("PN3b").style.display="none"
	}
}//fine funzione


function ApriChiudiAltriDati()
{
var flecchiaPiu =  "/template/skin_sutti/images/ico/home_flecchia_inf.gif"
var flecchiaMeno = "/template/skin_sutti/images/ico/home_flecchia_sopra.gif"
img1 = document.getElementById("ImmFlecchia5");
var img = img1.getAttribute('src');
	if (img==flecchiaPiu)
	{
	img1.src=flecchiaMeno;
	document.getElementById("AD1a").style.display="inline"
	document.getElementById("AD1b").style.display="inline"
	document.getElementById("AD2a").style.display="inline"
	document.getElementById("AD2b").style.display="inline"
	}
	else
	{
	img1.src=flecchiaPiu;
	document.getElementById("AD1a").style.display="none"
	document.getElementById("AD1b").style.display="none"
	document.getElementById("AD2a").style.display="none"
	document.getElementById("AD2b").style.display="none"
	}
}//fine funzione

function ApriChiudiNotePratica()
{
var flecchiaPiu =  "/template/skin_sutti/images/ico/home_flecchia_inf.gif"
var flecchiaMeno = "/template/skin_sutti/images/ico/home_flecchia_sopra.gif"
img1 = document.getElementById("ImmFlecchia6");
var img = img1.getAttribute('src');
	if (img==flecchiaPiu)
	{
	img1.src=flecchiaMeno;
	document.getElementById("NO").style.display="inline"
	}
	else
	{
	img1.src=flecchiaPiu;
	document.getElementById("NO").style.display="none"
	}
}//fine funzione


function ApriChiudiCollegamentiPratiche()
{
var flecchiaPiu =  "/template/skin_sutti/images/ico/home_flecchia_inf.gif"
var flecchiaMeno = "/template/skin_sutti/images/ico/home_flecchia_sopra.gif"
img1 = document.getElementById("ImmFlecchia7");
var img = img1.getAttribute('src');
	if (img==flecchiaPiu)
	{
	img1.src=flecchiaMeno;
	document.getElementById("CP1a").style.display="inline"
	document.getElementById("CP1b").style.display="inline"
	document.getElementById("CP2").style.display="inline"
	document.getElementById("CP3").style.display="inline"
	}
	else
	{
	img1.src=flecchiaPiu;
	document.getElementById("CP1a").style.display="none"
	document.getElementById("CP1b").style.display="none"
	document.getElementById("CP2").style.display="none"
	document.getElementById("CP3").style.display="none"
	}
}//fine funzione

function ApriChiudiGestioneRinvio()
{
var flecchiaPiu =  "/template/skin_sutti/images/ico/home_flecchia_inf.gif"
var flecchiaMeno = "/template/skin_sutti/images/ico/home_flecchia_sopra.gif"
img1 = document.getElementById("ImmFlecchia");
var img = img1.getAttribute('src');
	if (img==flecchiaPiu)
	{
	img1.src=flecchiaMeno;
	document.getElementById("GestRinvio").style.display="inline"
	}
	else
	{
	img1.src=flecchiaPiu;
	document.getElementById("GestRinvio").style.display="none"
	}
}//fine funzione

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
case "3":parent.loadLayerWindow('/plus/calcolatrici/Termini/Impugnazioni/ImpugnazioniPenaliHome.php?modalita=CalImpDeriv','Calcolatore dei termini delle impugnazioni penali');break
}
}
// FINE IMPEGNI CALCOLATI

//Pulsanti pagina Calcolatrici
function ApriCF(){Frame1.location.href="/plus/calcolatrici/cf/cf.php";}
function ApriCalArit(){Frame1.location.href="/plus/calcolatrici/Matematica/CalcolatriceAritmeticaH.html";}
function ApriInt(){Frame1.location.href="/plus/calcolatrici/Interessi/Interessi/CalcoloInteressiHome.html";}
function ApriIntLeg(){Frame1.location.href="/plus/calcolatrici/Interessi/Legali/InteressiLegaliH.html";}
function ApriIntMor(){Frame1.location.href="/plus/calcolatrici/Interessi/Moratori/InteressiMoratoriH.html";}
function ApriImPen(){Frame1.location.href="/plus/calcolatrici/Termini/Impugnazioni/ImpugnazioniPenali_H_FX.html";}
function ApriTerProc(){Frame1.location.href="/plus/calcolatrici/Termini/Processuali/TerminiProcessualiH.html";}
function ApriImpCalc(){Frame1.location.href="/plus/calcolatrici/Termini/Processuali/TerminiProcessualiH.html";}






