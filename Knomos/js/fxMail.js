

function ApriGcal(urlGcal)
{
//alert(urlGcal)
	url=urlGcal;
	var stile = "top=10, left=10, width=950, height=500, status=no, menubar=no, toolbar=no scrollbar=no";  
	window.open(url, "", stile);
}


function InviaIstruzioni(curia,luogocuria,magistrato,avversario,nRuolo)
{

	El = parent.document.getElementById("DATA");
	stringa = El.innerHTML;
	//DATA
	var i;
	var Tx="";
	var splittataBis = new Array();
	//PRIMO GIRO (A DESTRA)
	for (i = 0; i < stringa.length; i++) {var c = stringa.charAt(i);}
	var splittata = stringa.split("<");
	//SECONDO GIRO (A SINISTRA)
	for (i = 0; i < splittata[1]; i++){var c = splittata[1].charAt(i);}
	var valoreottenuto = splittata[1].split(">");
	vData=valoreottenuto[1]

	//ORA
	var i;
	var Tx="";
	var splittataBis = new Array();
	//PRIMO GIRO (A DESTRA)
	for (i = 0; i < stringa.length; i++) {var c = stringa.charAt(i);}
	var splittata = stringa.split("<");
	//SECONDO GIRO (A SINISTRA)
	for (i = 0; i < splittata[3]; i++){var c = splittata[3].charAt(i);}
	var valoreottenuto = splittata[3].split(">");
	vOra=valoreottenuto[1]

	//TIPO
	El = parent.document.getElementById("TIPO");
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
	vTipo=valoreottenuto[1]

	//DINAMICA
	El = parent.document.getElementById("DINAM");
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
	vDinamica=valoreottenuto[1]

	//PRATICA
	El = parent.document.getElementById("NOMEPRAT");
	TxValue = El.innerHTML;
	var i;
	for (i = 0; i < TxValue.length; i++) {var c = TxValue.charAt(i);}
	var splittata = TxValue.split(">");
	var vPratica = splittata[1]

	//NOTE
	El = parent.document.getElementById("NOTE");
	TxValue = El.innerHTML;
	var i;
	for (i = 0; i < TxValue.length; i++) {var c = TxValue.charAt(i);}
	var splittata = TxValue.split(">");
	var vNote = splittata[2]

	//COMPOSIZIONE
	var aCapoMail="%0A"
	var ac = String.fromCharCode(10)
	while (vNote.indexOf(ac) != -1) {vNote = vNote.replace(ac,aCapoMail);}

	var stringa="Mailto:?SUBJECT="+vPratica+"&BODY="
	+"Da fare: "+vTipo+" ("+vDinamica+")"+aCapoMail
	+"Data: "+vData+" Ore: "+vOra+aCapoMail+aCapoMail
	+"Pratica: "+vPratica + aCapoMail
	+"Curia: "+curia+" "+luogocuria+aCapoMail
	+"Magistrato: "+magistrato+aCapoMail
	+"N. Ruolo: "+nRuolo+aCapoMail+aCapoMail
	+"Riepilogo ed istruzioni:"+aCapoMail+vNote

	location.href=stringa;

}//FINE FUNZIONE


function ApriGmail(stringa,urlGmail)
{
//alert(stringa)
	if (stringa=="cliente"){
		//Calcola il nome+cognome;
		El = parent.document.getElementById("PA1a");
		stringa1 = El.innerHTML;
		var i;
		var Tx="";
		var splittataBis = new Array();
		//PRIMO GIRO (A DESTRA)
		for (i = 0; i < stringa1.length; i++) {var c = stringa1.charAt(i);}
		var splittata = stringa1.split("<");
		//SECONDO GIRO (A SINISTRA)
		for (i = 0; i < splittata[4]; i++){var c = splittata[4].charAt(i);}
		var valoreottenuto = splittata[4].split(">");
		vCliente=valoreottenuto[1]
		//calcola il solo cognome
		var i;
		for (i = 0; i < vCliente.length; i++) {var c = vCliente.charAt(i);}
		var splittata = vCliente.split(" ");
		var vCognome = splittata[0]
		//Setta la stringa=vCognome
		stringa=vCognome;
	}
	url=urlGmail+stringa;
	var stile = "top=10, left=10, width=750, height=500, status=no, menubar=no, toolbar=no scrollbar=no";  
	window.open(url, "", stile);
}

function ApriGmailDaContatto(stringa,urlGmail)
{
	url=urlGmail+stringa;
	var stile = "top=10, left=10, width=750, height=500, status=no, menubar=no, toolbar=no scrollbar=no";  
	window.open(url, "", stile);
}

function NewRicDropBox(Dbox)
{
url1 = document.getElementById("TxPerc");
var url = Dbox+url1.value;
var vuoto=" "
while (url.indexOf(vuoto) != -1) {url = url.replace(vuoto, "%20");}
//alert(url);

Frame1.location.href=url;
}

function NuovaMail1(usa_mail_default,url_nuova_mail,fin_mail_default)
{
//alert(usa_mail_default)
//alert(url_nuova_mail)
//alert(fin_mail_default)
//$CONF[usa_mail_default],$CONF[url_webmail],$CONF[url_nuova_mail],$CONF[fin_mail_default]
	El = parent.document.getElementById("PRAT");
	stringa1 = El.innerHTML;
	var i;
	var Tx="";
	var splittataBis = new Array();
	//PRIMO GIRO (A DESTRA)
	for (i = 0; i < stringa1.length; i++) {var c = stringa1.charAt(i);}
	var splittata = stringa1.split("<");
	//SECONDO GIRO (A SINISTRA)
	for (i = 0; i < splittata[1]; i++){var c = splittata[1].charAt(i);}
	var valoreottenuto = splittata[1].split(">");
	vPratica=valoreottenuto[1]
	if (usa_mail_default==1)//Se si usa la webmail
	{
		if (fin_mail_default==1)//Se si apre in una finestra popup
		{
		url=url_nuova_mail+"?SUBJECT="+vPratica;
		var stile = "top=10, left=10, width=750, height=500, status=no, menubar=no, toolbar=no scrollbar=no";  
		window.open(url, "", stile);
		}
		else//Se si apre in una pagina knomos
		{
		url=url_nuova_mail+"?SUBJECT="+vPratica;
		window.loadLayerWindow(url,"Nuova mail")
		}
	}
	else //Se si usa il client predefinito
	{
		var stringa="Mailto:?SUBJECT="
		//alert(stringa + vPratica )
		//window.loadLayerWindow(stringa + vPratica,"ppp")
		location.href=stringa + vPratica
	}
}

function NuovaMail()
{
	El = parent.document.getElementById("PRAT");
	stringa1 = El.innerHTML;
	var i;
	var Tx="";
	var splittataBis = new Array();
	//PRIMO GIRO (A DESTRA)
	for (i = 0; i < stringa1.length; i++) {var c = stringa1.charAt(i);}
	var splittata = stringa1.split("<");
	//SECONDO GIRO (A SINISTRA)
	for (i = 0; i < splittata[1]; i++){var c = splittata[1].charAt(i);}
	var valoreottenuto = splittata[1].split(">");
	vPratica=valoreottenuto[1]

	var stringa="Mailto:?SUBJECT="
	//alert(stringa + vPratica )
	//window.loadLayerWindow(stringa + vPratica,"ppp")
	location.href=stringa + vPratica 
}


function NuovaZohoMail(vPrat)
{

//var url="http://mail.zoho.com/mail/compose.do?mode=compose&subject="+vPrat
//loadLayerWindow(url,'Nuova mail da Zoho');


}





