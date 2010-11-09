
//                                                  I M P E G N I

function SelectCalAzioni(valore)
{
Sel=document.getElementById("CalCalcoli")
index=Sel.selectedIndex
//alert(valore)
//alert(index)
		switch (valore) 
		{  
		    case "#1":
			SelectNuovoImpegnoCalcolato('1')//dalla pag app_view (adde Termine processuale)
		      break;
		    case "#2":
			SelectNuovoImpegnoCalcolato('2')//dalla pag app_view (adde Termine imp pen)
		      break;
		    case "#3":
			SelectNuovoImpegnoCalcolato('3')//dalla pag appunt_show (Termine di impugnazione penale derivato)
		      break;
		    case "#4":
			ApriImpegniDerivati() //dalla pag appunt_show (Termine processuale derivato)
		      break;
			default:
			if (index==1){location.href=knomos_urlbase+"modules/calendar/pages/new_app.php?ref_id="+valore;}//NUOVO IMPEGNO (DA TUTTE LE PAGG)
			if (index==2){NuovoImpegnoDerivato(valore);}////dalla pag appunt_show (Nuovo impegno derivato)
		}//FINE switch

Sel.selectedIndex=0
}

function NuovoImpegnoDerivato(valore)
{
		//Imposta la data derivata
		El = document.getElementById("DATA");
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
		//alert(ddd); alert(mmd);alert(yyd);

	      //COMPONE LA URL
	      TxUrl = knomos_urlbase+"modules/calendar/pages/new_app.php?ref_id=" + valore + "&gg=" + ddd + "&mm=" + mmd + "&aa=" + yyd + "&orario=" + "" +
	      "&evento=" + "" +"&fatto=" + "" + "&codice=" + "" + "&descrizione=" + "" + "&priorita=" + "" + "&genere=" + "" + 
	      "&PagProv=" + "CalcImpCalcDeriv"+"&InNota="+""
		//alert(TxUrl)
      // E LA LANCIA
      location.href=TxUrl
}//FINE FUNZIONE




function StampaImpegno(descrizione,pratica,curia,luogocuria,giudice,avversario,nRuolo)
{
//alert("qui")
	TxDescrizione=descrizione;
	TxPratica=pratica;

	//TIPO
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
	//alert(TxTipo)

	//dinamica
	El = document.getElementById("DINAM");
	TxDinamica = El.innerHTML;
	var i;
	var Tx="";
	var splittataBis = new Array();
	//PRIMO GIRO (A DESTRA)
	for (i = 0; i < TxDinamica.length; i++) {var c = TxDinamica.charAt(i);}
	var splittata = TxDinamica.split("<");
	//SECONDO GIRO (A SINISTRA)
	for (i = 0; i < splittata[1]; i++){var c = splittata[1].charAt(i);}
	var valoreottenuto = splittata[1].split(">");
	TxDinamica="Dinamica: "+valoreottenuto[1]
	//alert(TxDinamica)

	//DATA
	El = document.getElementById("DATA");
	TxData = El.innerHTML;
//alert(TxData)
	var i;
	var Tx="";
	var splittataBis = new Array();
	//PRIMO GIRO (A DESTRA)
	for (i = 0; i < TxData.length; i++) {var c = TxData.charAt(i);}
	var splittata = TxData.split("<");
	//SECONDO GIRO (A SINISTRA)
	for (i = 0; i < splittata[1]; i++){var c = splittata[1].charAt(i);}
	var valoreottenuto = splittata[1].split(">");
	TxData="Data: "+valoreottenuto[1]
	//alert(TxData)
	//terzo giro GIRO (A SINISTRA)
	for (i = 0; i < splittata[1]; i++){var c = splittata[1].charAt(i);}
	var valoreottenuto = splittata[3].split(">");
	TxOra="Ora: "+valoreottenuto[1]
	//alert(TxOra)

	//priorita
	El = document.getElementById("PRIOR");
	TxPriorita = El.innerHTML;
	var i;
	var Tx="";
	var splittataBis = new Array();
	//PRIMO GIRO (A DESTRA)
	for (i = 0; i < TxPriorita.length; i++) {var c = TxPriorita.charAt(i);}
	var splittata = TxPriorita.split("<");
	//SECONDO GIRO (A SINISTRA)
	for (i = 0; i < splittata[1]; i++){var c = splittata[1].charAt(i);}
	var valoreottenuto = splittata[1].split(">");
	TxPriorita="Priorità: "+valoreottenuto[1]
	//alert(TxPriorita)

	//operatori
	El = document.getElementById("OPERAT");
	TxOperatori = El.innerHTML;
	var i;
	var Tx="";
	var splittataBis = new Array();
	//PRIMO GIRO (A DESTRA)
	for (i = 0; i < TxOperatori.length; i++) {var c = TxOperatori.charAt(i);}
	var splittata = TxOperatori.split("<");
	//SECONDO GIRO (A SINISTRA)
	for (i = 0; i < splittata[1]; i++){var c = splittata[1].charAt(i);}
	var valoreottenuto = splittata[1].split(">");
	TxOperatori="Operatori: "+valoreottenuto[1]
	//alert(TxOperatori)

	//note
	El = document.getElementById("NOTE");
	TxNote1 = El.innerHTML;
	var i;
	var Tx="";
	var splittataBis = new Array();
	//PRIMO GIRO (A DESTRA)
	for (i = 0; i < TxNote1.length; i++) {var c = TxNote1.charAt(i);}
	var splittata = TxNote1.split("<");
	//SECONDO GIRO (A SINISTRA)
	for (i = 0; i < splittata[0]; i++){var c = splittata[1].charAt(i);}
	var valoreottenuto = splittata[2].split(">");
	TxNote1=valoreottenuto[1]
	var aCapoMail=("</BR>")
	var ac = String.fromCharCode(10)
	//var sep="|";

	//while (TxNote1.indexOf("a") != -1) {TxNote1 = TxNote1.replace("a",aCapoMail;}
	var vNote = TxNote1
//alert(vNote)
	while (vNote.indexOf(ac) != -1) {vNote = vNote.replace(ac,aCapoMail);}
	//while (vNote.indexOf("|") != -1) {vNote = vNote.replace("|",aCapoMail);}
	//while (vNote.indexOf("---") != -1) {vNote = vNote.replace("---",aCapoMail+aCapoMail);}
	//alert(vNote)

var DaStampare=(

//logo studio
//"<div align='center'>"+"<img src='/template/skin_sutti/images/ico/LogoStudio.gif'>"+"</div>"+
//fine logo studio

"<table width='500px' align='center' border='0' cellspacing='1'>"+
"<tr>"+
"<td width='100%' ALIGN='left' VALIGN='top' colspan='2'>"+"<b>"+TxPratica+"</b>"+
"</td>"+
"</tr>"+
"</table>"+

"<table width='500px' align='center' border='0' cellspacing='1'>"+
"<tr>"+
"<td style='font-size:10px' width='100%' ALIGN='left' VALIGN='top' colspan='2'>"+
"<b>"+TxDescrizione+"</b>"+"<br>"+
TxData+"<br>"+
TxOra+"<br>"+
"Curia: "+curia+" "+luogocuria+"<br>"+
"Giudice: "+giudice+"<br>"+
"N. Ruolo: "+nRuolo+"<br>"+
"P.M. / Avv.: "+avversario+"<br>"+"<br>"+


TxTipo+"<br>"+
TxDinamica+"<br>"+
TxPriorita+"<br>"+
TxOperatori+"<br>"+"<br>"+

"<b>"+"Riepilogo ed istruzioni:"+"</b>"+aCapoMail+vNote+"<br>"+
"</td>"+
"</tr>"+
"</table>"+


"<br>"+"<br>"

);

//PASSA ALLA STAMPA
fin=window.open("about:blank","Finestra_Stampa")
fin.document.location.reload()
fin.document.write("<html><body onLoad='self.print()'><form style='font-family: Helvetica,Arial,sans-serif; '>"+DaStampare+"</body></html>")


}

//IMPEGNI DERIVATI
function ApriImpegniDerivati()
{
loadLayerWindow(knomos_urlbase+'plus/calcolatrici/Termini/Processuali/TerminiProcessualiHome1.php?modalita=CalcImpDeriv','Nuovo impegno derivato');
}

//IMPEGNI VELOCI

function SelectNuovoImpegnoVeloce(Select)
{

if (Select=="1") {Sel=document.getElementById("SelImpegniVelociC");} //else {Sel=document.getElementById("SelImpegniVelociP");}
else if (Select=="2") {Sel=document.getElementById("SelImpegniVelociP");} 
else if (Select=="3") {Sel=document.getElementById("SelImpegniVeloci3");} 
else if (Select=="4") {Sel=document.getElementById("SelImpegniVeloci4");} 
//alert(Sel.name)
var TxTesto = Sel.options[Sel.selectedIndex].text;
var TxValue = Sel.options[Sel.selectedIndex].value;
	if (TxValue=="#")
	{
		var TxTesto = ""
		var vFatto = "0"
		var vEvento = "1"
		var vCod = ""
		var vGenere = 0
		var vPriorita = 0
		var vOra="00:00"
		var vUG = ""
		var vLuogo = ""
		var vGiudice = ""
	}
	else
	{
		stringa=TxValue
		var i;
		for (i = 0; i < TxValue.length; i++) {var c = TxValue.charAt(i);}
		var splittata = TxValue.split(",");
		var vFatto=splittata[0]
		var vEvento=splittata[1]
		var vCod = splittata[2]
		var vGenere =splittata[3]
		var vPriorita = splittata[4]
		if (vGenere=="UD"){var vOra="09:00";} else {var vOra="00:00";}
		var vUG = splittata[5]
		var vLuogo = splittata[6]
		var vGiudice = splittata[7]
	}
//PASSA I VALORI ALLE CASELLE
	arrCaselleInput = parent.document.getElementsByTagName("input");
	for (i = 0; i < arrCaselleInput.length; i++)
	{
		switch (arrCaselleInput[i].name) 
		{  
		    case "time":
			arrCaselleInput[i].value = vOra
		      break;
		    case "title"://DESCRIZIONE
			arrCaselleInput[i].value = TxTesto
		      break;
		    case "codice[text]":
			arrCaselleInput[i].value = vCod
		      break;
		    case "cal_luogo":
			arrCaselleInput[i].value = vLuogo
		      break;
		    case "cal_giudice":
			arrCaselleInput[i].value = vGiudice
		      break;
		}//FINE switch
	}//fine for

	//Passa i valori ai select
	arrSelect = parent.document.getElementsByTagName("SELECT");
	for (i = 0; i < arrSelect.length; i++)
	{
		switch (arrSelect[i].name) 
		{  
		    case "priorita[]":
			arrSelect[i].value = vPriorita
		      break;
		    case "type[]"://EVENTO
			arrSelect[i].value = vEvento
			//arrCaselleInput[i].checked=vEvento
		      break;
		    case "done[]":
			arrSelect[i].value = vFatto
		      break;
		    case "type_app[]":
			arrSelect[i].value = vGenere
		      break;
		    case "cal_comp_desc[]"://ufficio giud
			arrSelect[i].value = vUG
			//arrCaselleInput[i].checked=vEvento
		      break;

		}//FINE switch
	}//fine for
Sel.selectedIndex=0
}//FINE FUNZIONE

//FINE VELOCI

//     --------------------------------------------------------------------------------------

//RINVIO

function ApriChiudiUltimaUdienza(){
ck=document.getElementById("UU")
	if (ck.checked==true)
	{
	document.getElementById("DR1").style.display="none"
	document.getElementById("DR2").style.display="none"
	document.getElementById("DR3").style.display="none"
	document.getElementById("DR4").style.display="none"
	}
	else
	{
	document.getElementById("DR1").style.display="inline"
	document.getElementById("DR2").style.display="inline"
	document.getElementById("DR3").style.display="inline"
	document.getElementById("DR4").style.display="inline"
	}
}//FINE FUNZIONE

function Rinvia(storico)
{

var params = getParameterDaFrame();
var valoreId = params['id'];
ck=document.getElementById("UU")

	      //BARBATRUCCO per prendere l'ID PRATICA

		El = parent.document.getElementById("NOMEPRAT");
	      	LinkImpegni=El.getAttribute("href");

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

//alert(storico)
	if (ck.checked==true) //SE ULTIMA UDIENZA
	{
	//Compone le variabili
	//prima prende quelle della data dell'impegno
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
	//QUINDI CALCOLA I PARAMETRI gg/mm/aa
	var i;
	var Tx="";
	var splittataBis = new Array();
	//PRIMO GIRO (A DESTRA)
	for (i = 0; i < vData.length; i++) {var c = vData.charAt(i);}
	var splittata = vData.split("/");
						var gg = splittata[0];
						var mm = splittata[1];
						var aa = splittata[2];
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
	//QUINDI CALCOLA I MINUTI
	var i;
	var Tx="";
	var splittataBis = new Array();
	//PRIMO GIRO (A DESTRA)
	for (i = 0; i < vOra.length; i++) {var c = vOra.charAt(i);}
	var splittata = vOra.split(":");
		var hh = splittata[0];
		var min = splittata[1];
		var exRel = document.FormRinvio.txRelUd.value;
	if(document.FormRinvio.convPrest.checked==true){var convPrest = 1;}else{var convPrest = 0;}
	//e le passa alla pagina php
	FileModificaApp=knomos_urlbase+"modules/calendar/pages/new_app.php?id="+valoreId  + "&gg=" + gg + "&mm=" + mm + "&aa=" + aa + "&hh=" + hh + "&min=" + min + "&exRel=" + exRel + "&PagProv=UltimaUdienza"+ "&convPrest=" + convPrest;
	parent.location.href=FileModificaApp;
//alert(FileModificaApp)
	}


	else  //SE NON E'ULTIMA UDIENZA
	{


	//prende le variabili dell'impegno
	//prima prende quelle della data (che diventerà provenienza)
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
	//QUINDI CALCOLA I PARAMETRI gg/mm/aa
	var i;
	var Tx="";
	var splittataBis = new Array();
	//PRIMO GIRO (A DESTRA)
	for (i = 0; i < vData.length; i++) {var c = vData.charAt(i);}
	var splittata = vData.split("/");
			var exgg = splittata[0];
			var exmm = splittata[1];
			var exaa = splittata[2];
	//DESCRIZIONE
	El = parent.document.getElementById("DESC");
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
	vDescrizione=valoreottenuto[1]

	//codice
	El = parent.document.getElementById("CODICE");
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
	//alert(valoreottenuto)
	vCodice=valoreottenuto[1];
	//vCodice=Trim(valoreottenuto[1]);
	//alert(vCodice)

	//NOTA
	El = parent.document.getElementById("NOTE");
	stringa = El.innerHTML;
	var i;
	var Tx="";
	var splittataBis = new Array();
	//PRIMO GIRO (A DESTRA)
	for (i = 0; i < stringa.length; i++) {var c = stringa.charAt(i);}
	var splittata = stringa.split("<");
	//SECONDO GIRO (A SINISTRA)
	for (i = 0; i < splittata[2]; i++){var c = splittata[2].charAt(i);}
	var valoreottenuto = splittata[2].split(">");
	vNota=valoreottenuto[1]
	//ac = String.fromCharCode(10);
	//while (vNota.indexOf(ac) != -1) {paramOldNote = paramOldNote.replace(ac,"|");}

//alert(vNota)
	//Compone le variabili
	var gg = document.FormRinvio.MyDay.value;

	var mm = document.FormRinvio.MyMonth.value;
	var aa = document.FormRinvio.MyYear.value;
	var hh = document.FormRinvio.MyOra.value;
						//alert("qui")
	var min = document.FormRinvio.txMin.value;
	var per = document.FormRinvio.txPer.value;
	var ist = document.FormRinvio.txIstruz.value;
	var exRel = document.FormRinvio.txRelUd.value;
	if(document.FormRinvio.convPrest.checked==true){var convPrest = 1;}else{var convPrest = 0;}
	//e le passa alla pagina php
	// distinguendo lo storico impegni
		//alert(storico)
		if(storico==0)
		{
		FileModificaApp=knomos_urlbase+"modules/calendar/pages/new_app.php?id="+valoreId + "&gg=" + gg + "&mm=" + mm + "&aa=" + aa + "&hh=" + hh + "&min=" + min + "&per=" + per + "&ist=" + ist + "&exRel=" + exRel + "&PagProv=Rinvio" + "&storico=0" + "&convPrest=" + convPrest;
		}
		else
		{
		FileModificaApp=knomos_urlbase+"modules/calendar/pages/new_app.php?ref_id="+vId+"&id_prov="+valoreId +"&gg=" + gg + "&mm=" + mm + "&aa=" + aa + "&hh=" + hh + "&min=" + min + "&per=" + per + "&ist=" + ist + "&exgg=" + exgg + "&exmm=" + exmm+ "&exaa=" + exaa+ "&exCodice="+vCodice+"&exDescrizione="+vDescrizione+"&exRel=" + exRel + "&PagProv=Rinvio" + "&storico=1" + "&convPrest=" + convPrest+"&vecchianota="+vNota;
		}
	parent.location.href=FileModificaApp;
	}


}//FINE FUNZIONE
//FINE RINVIO

//     --------------------------------- M E T T E   I   D A T I   N E I   C A M P I -----------------------------------------------------


function SetPageCalendar(id,giorno,mese,anno,orario,evento,fatto,codiceprestazione,descrizione,priorita,genere,nota)
{
// Questa funzione mette i valori nei campi della pagina nuovo impegno
//viene richiamata dalla gestione della pagina aperta
//alert("qui")
//SetPageCalendar("","","",pOrario,pEvento,pCodice,pDescrizione,pPriorita,pGenere,nota)
//alert(genere) 
	//Passa i valori alle caselle di testo e ai check
	arrCaselleInput = document.getElementsByTagName("input");
	for (i = 0; i < arrCaselleInput.length; i++)
	{
		switch (arrCaselleInput[i].name) 
		{  
		    case "day[day]":
			arrCaselleInput[i].value = giorno
		      break;
		    case "day[month]":
			arrCaselleInput[i].value = mese
		      break;  
		    case "day[year]":
			arrCaselleInput[i].value = anno
		      break; 
		    case "time":
			arrCaselleInput[i].value = orario
		      break;
		    //case "type"://EVENTO
			//if (evento == "true") {arrCaselleInput[i].checked=evento;} 
		      //break;
		    case "codice[text]":
			arrCaselleInput[i].value = codiceprestazione
		      break;
		    case "title"://DESCRIZIONE
			arrCaselleInput[i].value = descrizione
		      break;

		}//FINE switch
	}//fine for
//alert(evento)
	//Passa i valori ai select
	arrSelect = document.getElementsByTagName("SELECT");
	for (i = 0; i < arrSelect.length; i++)
	{
		switch (arrSelect[i].name) 
		{  

		    case "type[]":
			arrSelect[i].value = evento
		      break;
		    case "priorita[]":
			arrSelect[i].value = priorita
		      break;
		    case "done[]":
			arrSelect[i].value = fatto
		      break;
		    case "type_app[]":
			arrSelect[i].value = genere
		      break;
		}//FINE switch
	}//fine for

	//Passa i valori alla nota
	arrTextArea = document.getElementsByTagName("textarea");
	for (i = 0; i < arrTextArea.length; i++)
	{
		switch (arrTextArea[i].name) 
		{ 
		    case "note":
			arrTextArea[i].value = nota
		      break;
		}//FINE switch
	}//fine for


}//FINE FUNZIONE



//  ---------------------------     fine impegni     -----------------------------------


// DA ELIMINARE

function SelectNuovoImpegnoVeloceJS(Select)
{
//Questa fx crea una url che apre la pagina NuovoImpegno e passa i parametri
//richiamata dal select in adde_calendar_veloci.php (SelImpegniVeloci) - 
//PARAMETRI PASSATI DALLA SELECT: orario,codiceprestazione,priorita,genere

//Per prima cosa prende l'ID
//var params = getParameterDaFrame();
//var vId = params['ref_prat[realval][]']
//alert(vId)


//Poi gli altri parametri
//quelli della select
if (Select=="1") {Sel=document.getElementById("SelImpegniVelociC");} else {Sel=document.getElementById("SelImpegniVelociP");}

//alert(Sel.name)
var TxTesto = Sel.options[Sel.selectedIndex].text;
var TxValue = Sel.options[Sel.selectedIndex].value;
stringa=TxValue
var i;
for (i = 0; i < TxValue.length; i++) {var c = TxValue.charAt(i);}
var splittata = TxValue.split("/");
var vCod = splittata[0]
var vGenere =splittata[1]
//alert(splittata[1])
//Setta quindi I PARAMETRI CALCOLATI
switch (vGenere) {  
    case "APPE":
vPriorita = "0"
vOra="09:00"
vEvento="true"
vFatto="false"
      break;  
    case "APPI":
vPriorita = "0"
vOra="09:00"
vEvento="true"
vFatto="false"
      break; 
    case "REDZ":
vPriorita = "1"
vOra="00:00"
vEvento="false"
vFatto="false"
      break;
    case "SCAD":
vPriorita = "2"
vOra="00:00"
vEvento="false"
vFatto="false"
      break;  
    case "TEL":
vPriorita = "1"
vOra="00:00"
vEvento="false"
vFatto="false"
      break; 
    case "TRIB":
vPriorita = "1"
vOra="00:00"
vEvento="false"
vFatto="false"
      break;
    case "UD":
vPriorita = "2"
vOra="09:00"
vEvento="true"
vFatto="false"
      break;
    case "CAUT":
vPriorita = "2"
vOra="00:00"
vEvento="false"
vFatto="true"
      break;
    case "PROV":
vPriorita = "2"
vOra="00:00"
vEvento="false"
vFatto="true"
      break;
}
//alert(vCod)
//DA SetPageCalendar
	arrCaselleInput = parent.document.getElementsByTagName("input");
	for (i = 0; i < arrCaselleInput.length; i++)
	{
		switch (arrCaselleInput[i].name) 
		{  
		    case "time":
			arrCaselleInput[i].value = vOra
		      break;
		    case "title"://DESCRIZIONE
			arrCaselleInput[i].value = TxTesto
		      break;
		    case "codice[text]":
			arrCaselleInput[i].value = vCod
		      break;
		    case "done"://fattO
			if (vFatto == "true") {arrCaselleInput[i].checked=vFatto;} 
		      break;
		    case "type"://EVENTO
			if (vEvento == "true") {arrCaselleInput[i].checked=vEvento;} 
		      break;
		}//FINE switch
	}//fine for

	//Passa i valori ai select
	arrSelect = parent.document.getElementsByTagName("SELECT");
	for (i = 0; i < arrSelect.length; i++)
	{
		switch (arrSelect[i].name) 
		{  
		    case "priorita[]":
			arrSelect[i].value = vPriorita
		      break;
		    case "type_app[]":
			arrSelect[i].value = vGenere
		      break;
		}//FINE switch
	}//fine for

//Poi la data, che sarà quella di oggi visto che si inserisce un impegno veloce
//Oggi = new Date();
//var gg1 = Oggi.getDate();
//var mm1 = Oggi.getMonth()+1;
//var aa1 =Oggi.getFullYear(); 


//Crea la url con i parametri
//TxUrl = "/modules/calendar/pages/new_app.php?ref_id=" + vId + "&gg=" + gg1 + "&mm=" + mm1 + "&aa=" + aa1 + "&orario=" + vOra +  "&codice=" + vCod +  "&evento=" + vEvento + "&descrizione=" + TxTesto + "&priorita=" + vPriorita + "&genere=" + vGenere + "&PagProv=" + "InsVeloci" 

//parent.location.href=TxUrl
}//FINE FUNZIONE



