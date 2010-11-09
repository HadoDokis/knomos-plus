
function AddeRuolo()
{
//prende il valore del ruolo
	arrCaselleInput = parent.document.getElementsByTagName("input");
	for (i = 0; i < arrCaselleInput.length; i++)
	{
		switch (arrCaselleInput[i].name) 
		{  
		    case "pr_nruolo":
			var vRuolo=arrCaselleInput[i].value
		      break;
		}//FINE switch
	}//fine for

//alert(vRuolo)
//Lo aggiunge alla pratica
	arrCaselleInput = parent.document.getElementsByTagName("input");
	for (i = 0; i < arrCaselleInput.length; i++)
	{
		switch (arrCaselleInput[i].name) 
		{  
		    case "pr_codice":
			arrCaselleInput[i].value = arrCaselleInput[i].value + " N. "+vRuolo
		      break;
		}//FINE switch
	}//fine for

}

function SelectPrAzioni(valore)
{

		switch (valore) 
		{  
		    case "1"://nuova mail
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
		      break;
		    case "2":
			alert(valore)
		      break;
			default:
			alert(valore)
		}

}


function StampaPratica(uno,due,tre,tre_a,quattro,cinque,sei,seiA,sette,otto,nove,dieci)
{
TxPratica= uno
TxN= "N.Knomos: "+due
TxFascicolo="Fascicolo: "+tre
TxPosizione="Posizione nella pratica: "+tre_a
TxSchedario="Schedario: "+quattro
TxNote="Note: "+cinque //tipo
TxCuria="Curia: "+sei + " " + seiA; //Curia
TxMagistrato="Magistrato: "+sette //giudice
TxNruolo="N. ruolo principale: "+otto //Ruolo principale
TxAltriNruolo="Altri NN. ruolo: "+nove //altri ruoli
TxAvversario="P.M. / Avv.: "+dieci //avversario

//Dati delle parti


// ---------------------------------SOGGETTI--------------------------------
	//Cliente referente
	El = document.getElementById("PA1a");
	TxClienteReferente = El.innerHTML;
	var i;
	var Tx="";
	var tagDx="</a>"
	//alert(TxClienteReferente)
	if (TxClienteReferente.indexOf("</a>")==-1) {var tagDx="</A>"};
	//PRIMO GIRO (A DESTRA)
	for (i = 0; i < TxClienteReferente.length; i++) {var c = TxClienteReferente.charAt(i);}
	var splittata = TxClienteReferente.split(tagDx);
	//SECONDO GIRO (A SINISTRA)
	//alert(splittata[0])
	for (i = 0; i < splittata[1]; i++){var c = splittata[1].charAt(i);}
	var valoreottenuto = splittata[1].split(">");
	TxClienteReferente="Cliente ref.: "+valoreottenuto[1]
	//alert(TxClienteReferente)

	//Altri clienti
	El = document.getElementById("PA2a");
	TxAltriClienti = El.innerHTML;
	var i;
	var Tx="";
	var splittataBis = new Array();
	//PRIMO GIRO (A DESTRA)
	for (i = 0; i < TxAltriClienti.length; i++) {var c = TxAltriClienti.charAt(i);}
	var splittata = TxAltriClienti.split(tagDx);
	//SECONDO GIRO (A SINISTRA)
	for (ii = 0; ii < splittata.length-1; ii++)
	{
		i=0
		for (i = 0; i < splittata[ii]; i++){var c = splittata[ii].charAt(i);}
		var valoreottenuto = splittata[ii].split(">");
		//alert(valoreottenuto[1])
		splittataBis[ii]=valoreottenuto[1]
	}
	//TESTO FINALE
	for (ii = 0; ii < splittata.length-1; ii++)
	{if (ii == splittata.length-2){Tx=Tx+splittataBis[ii];} else {Tx=Tx+splittataBis[ii]+", ";}	}
	TxAltriClienti="Altri clienti: "+Tx
	//alert(TxAltriClienti)

	//Avversari
	El = document.getElementById("PA1b");
	TxAvversari = El.innerHTML;
	var i;
	var Tx="";
	var splittataBis = new Array();
	//PRIMO GIRO (A DESTRA)
	for (i = 0; i < TxAvversari.length; i++) {var c = TxAvversari.charAt(i);}
	var splittata = TxAvversari.split(tagDx);
	//SECONDO GIRO (A SINISTRA)
	for (ii = 0; ii < splittata.length-1; ii++)
	{
		i=0
		for (i = 0; i < splittata[ii]; i++){var c = splittata[ii].charAt(i);}
		var valoreottenuto = splittata[ii].split(">");
		//alert(valoreottenuto[1])
		splittataBis[ii]=valoreottenuto[1]
	}
	//TESTO FINALE
	for (ii = 0; ii < splittata.length-1; ii++)
	{if (ii == splittata.length-2){Tx=Tx+splittataBis[ii];} else {Tx=Tx+splittataBis[ii]+", ";}	}
	TxAvversari="Avversari: "+Tx
	//alert(TxAvversari)

	//Altri soggetti
	El = document.getElementById("PA2b");
	TxAltriSoggetti = El.innerHTML;
	var i;
	var Tx="";
	var splittataBis = new Array();
	//PRIMO GIRO (A DESTRA)
	for (i = 0; i < TxAltriSoggetti.length; i++) {var c = TxAltriSoggetti.charAt(i);}
	var splittata = TxAltriSoggetti.split(tagDx);
	//SECONDO GIRO (A SINISTRA)
	for (ii = 0; ii < splittata.length-1; ii++)
	{
		i=0
		for (i = 0; i < splittata[ii]; i++){var c = splittata[ii].charAt(i);}
		var valoreottenuto = splittata[ii].split(">");
		//alert(valoreottenuto[1])
		splittataBis[ii]=valoreottenuto[1]
	}
	//TESTO FINALE
	for (ii = 0; ii < splittata.length-1; ii++)
	{if (ii == splittata.length-2){Tx=Tx+splittataBis[ii];} else {Tx=Tx+splittataBis[ii]+", ";}	}
	TxAltriSoggetti="Altri soggetti: "+Tx
	//alert(TxAltriSoggetti)

	//Responsabile
	El = document.getElementById("RESP");
	TxResponsabile = El.innerHTML;
	var i;
	var Tx="";
	var splittataBis = new Array();
	//PRIMO GIRO (A DESTRA)
	for (i = 0; i < TxResponsabile.length; i++) {var c = TxResponsabile.charAt(i);}
	var splittata = TxResponsabile.split("<");
	//SECONDO GIRO (A SINISTRA)
	for (i = 0; i < splittata[1]; i++){var c = splittata[1].charAt(i);}
	var valoreottenuto = splittata[1].split(">");
	TxResponsabile="Responsabile: "+valoreottenuto[1]
	//alert(TxResponsabile)

	//tIPO
	El = document.getElementById("TIPO");
	TxTipo = El.innerHTML;
	var i;
	var Tx="";
	var splittataBis = new Array();
	//PRIMO GIRO (A DESTRA)
	for (i = 0; i < TxTipo.length; i++) {var c = TxTipo.charAt(i);}
	var splittata = TxTipo.split("<");
	//SECONDO GIRO (A SINISTRA)
	for (i = 0; i < splittata[1]; i++){var c = splittata[1].charAt(i);}
	var valoreottenuto = splittata[1].split(">");
	TxTipo="Tipo: "+valoreottenuto[1]
	//alert(TxResponsabile)


var DaStampare=(

//logo studio
//"<div align='center'>"+"<img src='/template/skin_sutti/images/ico/LogoStudio.gif'>"+"</div>"+
//fine logo studio

"<table width='500px' align='center' border='0' cellspacing='1'>"+
"<tr>"+
"<td width='100%' ALIGN='left' VALIGN='top' colspan='2'>"+"<b>"+TxPratica+"</b>"+"</td>"+
"</tr>"+
"</table>"+

"<table width='500px' align='center' border='0' cellspacing='1'>"+
"<tr>"+
"<td style='font-size:10px' width='100%' ALIGN='left' VALIGN='top' colspan='2'>"+
"<b>"+TxResponsabile+"</b>"+"<br>"+"<br>"+
TxFascicolo+"<br>"+
TxSchedario+"<br>"+
TxPosizione+"<br>"+
TxTipo+"<br>"+"<br>"+
TxClienteReferente+"<br>"+
TxAltriClienti+"<br>"+
TxAvversari+"<br>"+
TxAltriSoggetti+"<br>"+"<br>"+
TxCuria+"<br>"+
TxMagistrato+"<br>"+
TxAvversario+"<br>"+
TxNruolo+"<br>"+
TxAltriNruolo+"<br>"+"<br>"+
TxNote+"<br>"+
"</td>"+
"</tr>"+
"</table>"+


"<br>"+"<br>"

);


//PASSA ALLA STAMPA
fin=window.open("about:blank","Finestra_Stampa")
fin.document.location.reload()
fin.document.write("<html><body onLoad='self.print()'><form style='font-family: Helvetica,Arial,sans-serif; '>"+DaStampare+"</body></html>")

//fin.document.close()

}//FINE FUNZIONE

function NewPraticaDaContatto()
{
	//Calcola il nome;

	El = parent.document.getElementById("CODICE");
	TxValue = El.innerHTML;

	var i;
	for (i = 0; i < TxValue.length; i++) {var c = TxValue.charAt(i);}
	var splittata = TxValue.split(">");
	var TxValue = splittata[1]
	var i;
	for (i = 0; i < TxValue.length; i++) {var c = TxValue.charAt(i);}
	var splittata = TxValue.split("<");
	var vNome = Trim(splittata[0])
	var vIniziale=vNome.substr(0,1)
	var vSchedario= "/" + vIniziale + "/" + vNome
	var url=knomos_urlbase+"modules/pratiche/pages/new_pratiche.php?pr_codice="+vNome+"&pr_schedario="+vSchedario+"&pPagProv=DaContatto"
	location.href=url
}



function SetTipoPratica()
{
//alert("qui")
	//valori della select
	Sel=document.getElementById("SelTP");
	var TxTesto = Sel.options[Sel.selectedIndex].text;
	var TxValue = Sel.options[Sel.selectedIndex].value;
	stringa=TxValue
	if (TxValue=="#") {
		var vTipo = "AMM";
		var vAutComp=0
		var vCuria=""
		var vLuogo=""
		var vMagistrato=""
		var vCriterio=""
		var vDept= 0

	}
	else
	{
	var i;
	for (i = 0; i < TxValue.length; i++) {var c = TxValue.charAt(i);}
	var splittata = TxValue.split(",");
	var vTipo = splittata[0];
	var vAutComp=splittata[1]
	var vCuria=splittata[2]
//alert(splittata[2])
	//var vUffGiud=splittata[3]
	var vStato=splittata[3]
//alert(splittata[3])
	var vLuogo=splittata[4]
	var vMagistrato=splittata[5]
	var vCriterio=splittata[6]
	var vDept= splittata[7]
	var vFase= splittata[8]
	var vPosCiente= splittata[9]
//alert(splittata[8])
//alert(vAutComp)
}
	// passa i valori alle caselle
	arrCaselleInput = parent.document.getElementsByTagName("input");
	for (i = 0; i < arrCaselleInput.length; i++)
	{
		switch (arrCaselleInput[i].name) 
		{  
		    case "pr_criterio":
			arrCaselleInput[i].value = vCriterio
		      break;
		    //case "pr_comp_desc":
			//arrCaselleInput[i].value = vCuria
		      //break;
		    //case "pr_uff_giud":
			//arrCaselleInput[i].value = vUffGiud
		      //break;
		    case "pr_luogo_uff_giud":
			arrCaselleInput[i].value = vLuogo
		      break;
		    case "pr_giudice":
			arrCaselleInput[i].value = vMagistrato
		      break;

		}//FINE switch
	}//fine for

	//Passa i valori ai select
	arrSelect = parent.document.getElementsByTagName("SELECT");
	for (i = 0; i < arrSelect.length; i++)
	{
		switch (arrSelect[i].name) 
		{  
		    case "pr_oggetto2[]":
			arrSelect[i].value = vPosCiente
		      break;

		    case "pr_stato[]":
			arrSelect[i].value = vStato
		      break;
		    case "pr_comp_desc[]":
			arrSelect[i].value = vCuria
		      break;
		    case "pr_fase[]":
			arrSelect[i].value = vFase
		      break;
		    case "pr_comp_cod[]":
			arrSelect[i].selectedIndex = vAutComp
		      break;
		    case "pr_dept[]":
			arrSelect[i].value = vDept
		      break;
		}//FINE switch
	}//fine for
//alert("fff")
Sel.selectedIndex=0

}



