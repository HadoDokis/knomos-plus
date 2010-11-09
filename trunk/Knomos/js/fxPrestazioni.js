



// FUNZIONI

function SelectPrestAzioni(valore)
{
Sel=document.getElementById("PrestCalcoli")
index=Sel.selectedIndex
//alert(valore)
		switch (valore) 
		{  
		    case "#3":
			SelectNuovoImpegnoCalcolato('3')//Nuovo termine impugnazione penale
		      break;
		    case "#4":
			ApriImpegniDerivati()//Nuovo termine processuale derivato
		      break;
			default: //per tutti valore=id della pratica
			if(index==1){location.href="/modules/prestazioni/pages/new_prestazione.php?ref_id="+valore;}//nuova prestazione
			if(index==2){NuovaPrestazioneDerivata(valore)}//nuova prestazione derivata
			if(index==3){NuovoImpegnoDerivato(valore)}	//nuovo impegno derivato		
		}//FINE switch

Sel.selectedIndex=0
}



function NuovaPrestazioneDerivata(id_pratica)
{
	// Imposta la data derivata

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
//alert(DataDaDerivare)

url="/modules/prestazioni/pages/new_prestazione.php?ref_id="+id_pratica+"&mod=deriv"+"&gg="+ddd+"&mm="+mmd+"&aa="+yyd
//alert(url)
location.href=url
}

function TarDaSelect(IdSelect)
{
switch (IdSelect){
case 1:
	ctrlSelect=document.getElementById("SelPrest1");
break
case 2:
	ctrlSelect=document.getElementById("SelPrest2");
break
case 3:
	ctrlSelect=document.getElementById("SelPrest3");
break
case 4:
	ctrlSelect=document.getElementById("SelPrest4");
break
case 5:
	ctrlSelect=document.getElementById("SelPrest5");
break
case 6:
	ctrlSelect=document.getElementById("SelPrest6");
break
}

//Prende i valori passati dalla select
var vCod = ctrlSelect.options[ctrlSelect.selectedIndex].value;
var vDesc = ctrlSelect.options[ctrlSelect.selectedIndex].text;

	if (vCod == "0") {}
	else {
		if (vCod == "#") {alert("Il tariffario prescelto non è implementato.")}
		else{
			arrCaselleInput = parent.document.getElementsByTagName("input");
			for (i = 0; i < arrCaselleInput.length; i++)
			{
				if(arrCaselleInput[i].name=="testo")
				{
				arrCaselleInput[i].value=vDesc
				}
				}//fine for
				for (i = 0; i < arrCaselleInput.length; i++)
				{
				if(arrCaselleInput[i].name=="codice[text]")
				{
				arrCaselleInput[i].value=vCod
				}
			}//fine for
//parent.location.href="/modules/prestazioni/pages/new_prestazione.php?ref_id=" + vId + "&CodPrest=" + vCod + "&TextPrest=" + vDesc + "&PagProv=NuovaPrestazioneDaTariffario";  
		}
	}
	//Esegue i calcoli e li scrive
	code_field_l = parent.document.new_prest.elements['codice[text]'].value.length;
	oper_field_l = parent.document.new_prest.elements['operatore[text]'].value.length;	
	if (code_field_l > 0 && oper_field_l > 0) {
		mywf = parent.window.frames['tnf_iframe'];
		mywf.update_fields();
//alert(mywf.getElementByName("on_utente").name)
		mywf.copy_values();
		mywf.document.form_iframe.submit();

	} else alert('Inserire codice e operatore!');

// NB in /framework/calcolo_tnf_iframe.php è stato impostato mywf.document.form_iframe.on_utente.value = mywf.document.form_iframe.onorari.value 

//setta il select a index=0
ctrlSelect.selectedIndex=0

}//FINE FUNZIONE

//togliere

// TARIFFARIO FORENSE  (seno 4 funzioni che aprivano la pagina di immissione della prestazione. ADESSO: IMMETTONO LA PRESTAZIONE
function TarOnPenale()
{
//Prende il valore Id
//var params = getParameterDaFrame();
//var vId = params['ref_id[realval][]'];

//Prende i valori passati dalla select
ctrlSelect=document.getElementById("SelOnPen")
var vCod = ctrlSelect.options[ctrlSelect.selectedIndex].value;
var vDesc = ctrlSelect.options[ctrlSelect.selectedIndex].text;
	if (vCod == "0") {}
	else {
		if (vCod == "#") {alert("Il tariffario prescelto non è implementato.")}
		else{
			arrCaselleInput = parent.document.getElementsByTagName("input");
				for (i = 0; i < arrCaselleInput.length; i++)
				{
					if(arrCaselleInput[i].name=="testo")
					{
					arrCaselleInput[i].value=vDesc
					}
				}//fine for
				for (i = 0; i < arrCaselleInput.length; i++)
				{
					if(arrCaselleInput[i].name=="codice[text]")
					{
					arrCaselleInput[i].value=vCod
					}
				}//fine for
		//parent.location.href="/modules/prestazioni/pages/new_prestazione.php?ref_id=" + vId + "&CodPrest=" + vCod + "&TextPrest=" + vDesc + "&PagProv=NuovaPrestazioneDaTariffario"; 
		}
	}
	//Esegue i calcoli e li scrive
	code_field_l = parent.document.new_prest.elements['codice[text]'].value.length;
	oper_field_l = parent.document.new_prest.elements['operatore[text]'].value.length;	
	if (code_field_l > 0 && oper_field_l > 0) {
		mywf = parent.window.frames['tnf_iframe'];
		mywf.update_fields();
		mywf.copy_values();
		mywf.document.form_iframe.submit();
	} else alert('Inserire codice e operatore!');

		//alert(mywf.document.form_iframe.on_utente.value);
		//alert(mywf.document.form_iframe.onorari.value);

//calc_totals(); 
//copy_values();

}//FINE FUNZIONE


function TarDirCogn()
{
//Prende il valore Id
//var params = getParameterDaFrame();
//var vId = params['ref_id[realval][]'];

//Prende i valori passati dalla select
ctrlSelect=document.getElementById("SelDirCogn")
var vCod = ctrlSelect.options[ctrlSelect.selectedIndex].value;
var vDesc = ctrlSelect.options[ctrlSelect.selectedIndex].text;

	if (vCod == "0") {}
	else {
		if (vCod == "#") {alert("Il tariffario prescelto non è implementato.")}
		else{
			arrCaselleInput = parent.document.getElementsByTagName("input");
			for (i = 0; i < arrCaselleInput.length; i++)
			{
				if(arrCaselleInput[i].name=="testo")
				{
				arrCaselleInput[i].value=vDesc
				}
				}//fine for
				for (i = 0; i < arrCaselleInput.length; i++)
				{
				if(arrCaselleInput[i].name=="codice[text]")
				{
				arrCaselleInput[i].value=vCod
				}
			}//fine for
//parent.location.href="/modules/prestazioni/pages/new_prestazione.php?ref_id=" + vId + "&CodPrest=" + vCod + "&TextPrest=" + vDesc + "&PagProv=NuovaPrestazioneDaTariffario";  
		}
	}
	//Esegue i calcoli e li scrive
	code_field_l = parent.document.new_prest.elements['codice[text]'].value.length;
	oper_field_l = parent.document.new_prest.elements['operatore[text]'].value.length;	
	if (code_field_l > 0 && oper_field_l > 0) {
		mywf = parent.window.frames['tnf_iframe'];
		mywf.update_fields();
		mywf.copy_values();
		mywf.document.form_iframe.submit();
	} else alert('Inserire codice e operatore!');
}//FINE FUNZIONE

function TarDirEsec()
{

//Prende il valore Id
//var params = getParameterDaFrame();
//var vId = params['ref_id[realval][]'];

//Prende i valori passati dalla select
ctrlSelect=document.getElementById("SelDirEsec")
var vCod = ctrlSelect.options[ctrlSelect.selectedIndex].value;
var vDesc = ctrlSelect.options[ctrlSelect.selectedIndex].text;

	if (vCod == "0") {}
	else {
		if (vCod == "#") {alert("Il tariffario prescelto non è implementato.")}
		else{
			arrCaselleInput = parent.document.getElementsByTagName("input");
			for (i = 0; i < arrCaselleInput.length; i++)
			{
				if(arrCaselleInput[i].name=="testo")
				{
				arrCaselleInput[i].value=vDesc
				}
				}//fine for
				for (i = 0; i < arrCaselleInput.length; i++)
				{
				if(arrCaselleInput[i].name=="codice[text]")
				{
				arrCaselleInput[i].value=vCod
				}
			}//fine for



	//parent.location.href="/modules/prestazioni/pages/new_prestazione.php?ref_id=" + vId + "&CodPrest=" + vCod + "&TextPrest=" + vDesc + "&PagProv=NuovaPrestazioneDaTariffario";  
		}
	}
	//Esegue i calcoli e li scrive
	code_field_l = parent.document.new_prest.elements['codice[text]'].value.length;
	oper_field_l = parent.document.new_prest.elements['operatore[text]'].value.length;	
	if (code_field_l > 0 && oper_field_l > 0) {
		mywf = parent.window.frames['tnf_iframe'];
		mywf.update_fields();
		mywf.copy_values();
		mywf.document.form_iframe.submit();
	} else alert('Inserire codice e operatore!');
}//FINE FUNZIONE

function TarOnCiv()
{

//Prende il valore Id
//var params = getParameterDaFrame();
//var vId = params['ref_id[realval][]'];

//Prende i valori passati dalla select
ctrlSelect=document.getElementById("SelOnCiv")
var vCod = ctrlSelect.options[ctrlSelect.selectedIndex].value;
var vDesc = ctrlSelect.options[ctrlSelect.selectedIndex].text;

	if (vCod == "0") {}
	else {
		if (vCod == "#") {alert("Il tariffario prescelto non è implementato.")}
		else{
			arrCaselleInput = parent.document.getElementsByTagName("input");
			for (i = 0; i < arrCaselleInput.length; i++)
			{
				if(arrCaselleInput[i].name=="testo")
				{
				arrCaselleInput[i].value=vDesc
				}
				}//fine for
				for (i = 0; i < arrCaselleInput.length; i++)
				{
				if(arrCaselleInput[i].name=="codice[text]")
				{
				arrCaselleInput[i].value=vCod
				}
			}//fine for
//parent.location.href="/modules/prestazioni/pages/new_prestazione.php?ref_id=" + vId + "&CodPrest=" + vCod + "&TextPrest=" + vDesc + "&PagProv=NuovaPrestazioneDaTariffario";  
		}
	}
	//Esegue i calcoli e li scrive
	code_field_l = parent.document.new_prest.elements['codice[text]'].value.length;
	oper_field_l = parent.document.new_prest.elements['operatore[text]'].value.length;	
	if (code_field_l > 0 && oper_field_l > 0) {
		mywf = parent.window.frames['tnf_iframe'];
		mywf.update_fields();
		mywf.copy_values();
		mywf.document.form_iframe.submit();
	} else alert('Inserire codice e operatore!');
}//FINE FUNZIONE

// FINE TARIFFARIO
//fine togliere

