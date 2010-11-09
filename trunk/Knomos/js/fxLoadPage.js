// -------------------------------------- A P E R T U R A   P A G I N A   --------------------------------------

function SetPageLoad() {
	var PaginaAperta = document.title;
	// alert(PaginaAperta)

	// --------------------------------------- Aggiungi pratica
	// ------------------------------
	if (PaginaAperta == "Aggiungi pratica") {
		var DaPagina = '';
		var vCodice = '';
		var vSchedario = '';
		var params = getParameter();
		if (params != null) {
			var DaPagina = params['pPagProv'] != null ? params['pPagProv'] : '';
			var vCodice = params['pr_codice'];
			var vSchedario = params['pr_schedario'];
		}

		// --------------------------------------- Aggiungi pratica DA CONTATTO
		if (DaPagina == "DaContatto") {
			// passa i valori alle caselle
			arrCaselleInput = document.getElementsByTagName("input");
			for (i = 0; i < arrCaselleInput.length; i++) {
				switch (arrCaselleInput[i].name) {
				case "pr_codice":
					arrCaselleInput[i].value = params['pr_codice']; // + " N. "
					break;
				case "pr_oggetto":
					arrCaselleInput[i].value = params['pr_codice'];
					break;
				case "pr_schedario":
					arrCaselleInput[i].value = params['pr_schedario'];
					break;
				case "pr_ref_idcliente[text]":
					arrCaselleInput[i].value = params['pr_codice'];
					break;
				}// FINE switch
			}// fine for
		}
	}

	// --------------------------------------- Prestazioni/Parcelle
	// ------------------------------

	if (PaginaAperta == "Prestazioni/Parcelle") {

		var Pagina = '';
		var params = getParameter();
		if (params != null) {
			var Pagina = params['form_page'];
		}

		if (Pagina == "1") {
			// TUTTO QUESTO É INUTILE
			// Prende i valori dei select
			arrSelect = document.getElementsByTagName("SELECT");
			for (i = 0; i < arrSelect.length; i++) {
				switch (arrSelect[i].name) {
				case "tipo_stampa[]":
					TipoDoc = arrSelect[i].value;
					break;
				}// FINE switch
			}// fine for
			switch (TipoDoc) {
			case "Prova":
				Doc = "Nota spese";
				break;
			case "Nota":
				Doc = "Progetto di notula";
				break;
			case "Fatture":
				Doc = "Parcella N. ";
				break;
			}// FINE switch
			// FINE TUTTO QUESTO É INUTILE

			// Madifica le caselle di testo
			arrCaselleInput = document.getElementsByTagName("input");
			for (i = 0; i < arrCaselleInput.length; i++) {
				switch (arrCaselleInput[i].name) {
				case "dicit1":
					arrCaselleInput[i].value = "Per l'assistenza nella pratica ";
					break;
				case "dicit2":
					arrCaselleInput[i].value = "Acconto";
					break;
				case "oggetto":
					arrCaselleInput[i].value = "Progetto di notula";
					break;
				}// FINE switch
			}// fine for
		}
	}

	// --------------------------------------- MODIFICA IMPEGNO
	// ------------------------------

	// FATTO / DA FARE ------------------------------

	if (PaginaAperta == "Modifica Impegno") {
		// Abilita la casella di uscita dopo il salvataggio (Dopo l'inserimento
		// apri la scheda dell'impegno)
		arrCaselleInput = document.getElementsByTagName("input");
		for (i = 0; i < arrCaselleInput.length; i++) {
			switch (arrCaselleInput[i].name) {
			case "continuaIns":
				arrCaselleInput[i].checked = true;
				break;
			}// FINE switch
		}// fine for

		var params = getParameterDaFrame();
		var pPagProv = params['PagProv'];
		var vFatto = params['fatto'];
		// alert(vFatto)
		if (vFatto == "true") {
			pFatto = true;
		} else {
			pFatto = false;
		}

		// FATTO / DA FARE ------------------------------
		if (pPagProv == "Fatto") {
			arrCaselleInput = document.getElementsByTagName("input");
			for (i = 0; i < arrCaselleInput.length; i++) {
				switch (arrCaselleInput[i].name) {
				case "done":
					arrCaselleInput[i].checked = pFatto;
					break;
				}// FINE switch
			}// fine for
		}

		// ULTIMA UDIENZA ------------------------------

		if (pPagProv == "UltimaUdienza") {
			// alert("qui")
			ac = String.fromCharCode(10);
			// Prende dalla pagina la data e l'ora dell'udienza

			arrCaselleInput = document.getElementsByTagName("input");
			for (i = 0; i < arrCaselleInput.length; i++) {
				switch (arrCaselleInput[i].name) {
				case "day[day]":
					exGG = arrCaselleInput[i].value;
					break;
				case "day[month]":
					exMM = arrCaselleInput[i].value;
					break;
				case "day[year]":
					exAA = arrCaselleInput[i].value;
					break;
				case "time":
					exHH = arrCaselleInput[i].value;
					break;
				}// FINE switch
			}// fine for

			// alert(exGG)
			// Carica i parametri passati dalla funzione alla pagina php
			var params = getParameter();
			var NuovaNota = params['exRel'];
			// Passa i valori alla nota
			arrTextArea = document.getElementsByTagName("textarea");
			for (i = 0; i < arrTextArea.length; i++) {
				switch (arrTextArea[i].name) {
				case "note":
					// prende il valore della vecchia nota
					VecchiaNota = arrTextArea[i].value;
					// Compone la stringa della nuova nota
					var StrPrimaUdienza = "";
					var FineVecchiaNota = ac + "Esito:" + ac; // + paramExRel
					// + ac + "---"
					// + ac
					if (VecchiaNota == "" || VecchiaNota.substr(0, 1) == "/") {
						StrPrimaUdienza = "Udienza del " + exGG + "-" + exMM + "-" + exAA
								+ " h. " + exHH;
					}
					NewNota = StrPrimaUdienza + VecchiaNota + FineVecchiaNota + NuovaNota;
					// Scrive
					arrTextArea[i].value = NewNota;
					break;
				}// FINE switch
			}// fine for
		}// FINE FUNZIONE

		// RINVIO ------------------------------

		if (pPagProv == "Rinvio") {
			ac = String.fromCharCode(10);
			// alert("eccomi")
			// Prende dalla pagina di modifica (ora aperta) la data e l'ora
			// dell'udienza di rinvio

			arrCaselleInput = document.getElementsByTagName("input");
			for (i = 0; i < arrCaselleInput.length; i++) {
				switch (arrCaselleInput[i].name) {
				case "day[day]":
					exGG = arrCaselleInput[i].value;
					break;
				case "day[month]":
					exMM = arrCaselleInput[i].value;
					break;
				case "day[year]":
					exAA = arrCaselleInput[i].value;
					break;
				case "time":
					exHH = arrCaselleInput[i].value;
					break;
				}// FINE switch
			}// fine for

			// Crea la stringa con la data di provenienza
			strProv = "Provenienza: " + exGG + "-" + exMM + "-" + exAA + " h. "
					+ exHH;

			// Carica i parametri passati dalla funzione alla pagina php
			var params = getParameter();
			// forma il campo note ( per ist + exRel;)
			var paramPer = params['per'];
			var paramIstruz = params['ist'];
			var paramExRel = params['exRel'];
			var paramGG = params['gg'];
			var paramMM = params['mm'];
			var paramAA = params['aa'];
			var paramHH = params['hh'];
			var paramMIN = params['min'];
			var FineVecchiaNota = ac + "Esito:" + ac + paramExRel + ac + "---" + ac;
			var NuovaNota = "Udienza del " + paramGG + "-" + paramMM + "-" + paramAA
					+ " h. " + paramHH + ":" + paramMIN + ac + strProv + ac + "Per: "
					+ paramPer + ac + "Istruzioni:" + paramIstruz + ac;

			// poi
			// Passa i parametri ai campi della pagina

			arrCaselleInput = document.getElementsByTagName("input");
			for (i = 0; i < arrCaselleInput.length; i++) {
				switch (arrCaselleInput[i].name) {
				case "day[day]":
					arrCaselleInput[i].value = paramGG;
					break;
				case "day[month]":
					arrCaselleInput[i].value = paramMM;
					break;
				case "day[year]":
					arrCaselleInput[i].value = paramAA;
					break;
				case "time":
					arrCaselleInput[i].value = paramHH + ":" + paramMIN;
					break;
				}// FINE switch
			}// fine for

			// Passa i valori alla nota
			arrTextArea = document.getElementsByTagName("textarea");
			for (i = 0; i < arrTextArea.length; i++) {
				switch (arrTextArea[i].name) {
				case "note":
					// prende il valore della vecchia nota
					VecchiaNota = arrTextArea[i].value;
					// Compone la stringa della nuova nota
					var StrPrimaUdienza = "";
					// alert(VecchiaNota.substr(1,1))
					if (VecchiaNota == "" || VecchiaNota.substr(0, 1) == "/") {
						StrPrimaUdienza = "Udienza del " + exGG + "-" + exMM + "-" + exAA
								+ " h. " + exHH;
					}
					NewNota = StrPrimaUdienza + VecchiaNota + FineVecchiaNota + NuovaNota;
					// Scrive
					arrTextArea[i].value = NewNota;
					break;
				}// FINE switch
			}// fine for

		}
	}// fine funzione

	// ------------------------------------------ IMPEGNI
	// -----------------------------------------
	// VISUALIZZA SEZIONE RINVIO ------------------------------
	if (PaginaAperta == "Impegni") {
		// descrizione
		El = parent.document.getElementById("TITOLO_TIPO");
		stringa = El.innerHTML;
		// alert(stringa)
		var i;
		var Tx = "";
		var splittataBis = new Array();
		// PRIMO GIRO (A DESTRA)
		for (i = 0; i < stringa.length; i++) {
			var c = stringa.charAt(i);
		}
		var splittata = stringa.split("<");
		// SECONDO GIRO (A SINISTRA)
		for (i = 0; i < splittata[1]; i++) {
			var c = splittata[1].charAt(i);
		}
		var valoreottenuto = splittata[1].split(">");
		stringa = valoreottenuto[1];

		if (stringa == "Udienza ") {
			document.getElementById("ModuloRinvio").style.display = "inline";
		}

	}// FINE FUNZIONE

	// --------------------------------------- AGGIUNGI IMPEGNO
	// ------------------------------

	if (PaginaAperta == "Aggiungi Impegno") {

		// Abilita la casella di uscita dopo il salvataggio (Dopo l'inserimento
		// apri la scheda dell'impegno)
		arrCaselleInput = document.getElementsByTagName("input");
		for (i = 0; i < arrCaselleInput.length; i++) {
			switch (arrCaselleInput[i].name) {
			case "continuaIns":
				arrCaselleInput[i].checked = true;
				break;
			}// FINE switch
		}// fine for

		// Pagine di provenienza (definita dal parametro PagProv) : Rinvio
		// CalcTerProc, CalcImPen, InsVeloci, InsTerCalc, InsTerDeriv

		// /www
		var params = getParameterDaFrame();
		var pPagProv = params ? params['PagProv'] : '' ;

		// alert(pPagProv)
		switch (pPagProv) {

		// aggiungere:
		case "Rinvio": // RINVIO NUOVO

			ac = String.fromCharCode(10);
			// alert("eccomi")

			arrCaselleInput = document.getElementsByTagName("input");

			// Carica i parametri passati dalla funzione alla pagina php
			var params = getParameter();
			// forma il campo note ( per ist + exRel;)
			var paramPer = params['per'];
			var paramIstruz = params['ist'];
			var paramExRel = params['exRel'];
			var paramGG = params['gg'];
			var paramMM = params['mm'];
			var paramAA = params['aa'];
			var paramHH = params['hh'];
			var paramMIN = params['min'];
			var paramORARIO = paramHH + ":" + paramMIN;
			var exMM = params['exmm'];
			var exAA = params['exaa'];
			var exGG = params['exgg'];
			var exID = params['id_prov'];
			var exCod = params['exCodice'];
			var exDesc = params['exDescrizione'];
			// alert(exCod);
			// alert(exDesc);
			var FineVecchiaNota = ac + "Esito:" + ac + paramExRel + ac + "---" + ac;
			// Crea la stringa con la data di provenienza
			strProv = "Provenienza: " + exGG + "-" + exMM + "-" + exAA;

			var NuovaNota = "Udienza del " + paramGG + "-" + paramMM + "-" + paramAA
					+ " h. " + paramHH + ":" + paramMIN + ac + strProv + ac + "Per: "
					+ paramPer + ac + "Istruzioni:" + paramIstruz + ac;

			// poi
			// Passa i parametri ai campi della pagina

			arrCaselleInput = document.getElementsByTagName("input");
			for (i = 0; i < arrCaselleInput.length; i++) {
				switch (arrCaselleInput[i].name) {
				case "day[day]":
					arrCaselleInput[i].value = paramGG;
					break;
				case "day[month]":
					arrCaselleInput[i].value = paramMM;
					break;
				case "day[year]":
					arrCaselleInput[i].value = paramAA;
					break;
				case "time":
					arrCaselleInput[i].value = paramHH + ":" + paramMIN;
					break;
				case "provenienza[day]":
					arrCaselleInput[i].value = exGG;
					break;
				case "provenienza[month]":
					arrCaselleInput[i].value = exMM;
					break;
				case "provenienza[year]":
					arrCaselleInput[i].value = exAA;
					break;
				case "codice[text]":
					arrCaselleInput[i].value = exCod;
					break;
				case "id_provenienza":
					arrCaselleInput[i].value = exID;
					break;
				case "title":
					arrCaselleInput[i].value = exDesc;
					break;
				}// FINE switch
			}// fine for
			// Passa i valori ai select
			arrSelect = document.getElementsByTagName("SELECT");
			for (i = 0; i < arrSelect.length; i++) {
				switch (arrSelect[i].name) {
				// case "type[]":
				// arrSelect[i].value = evento
				// break;
				case "priorita[]":
					arrSelect[i].value = 2;
					break;
				// case "done[]":
				// arrSelect[i].value = fatto
				// break;
				case "type_app[]":
					arrSelect[i].value = "UD";
					break;
				}// FINE switch
			}// fine for
			// Passa i valori alla nota

			arrTextArea = document.getElementsByTagName("textarea");
			for (i = 0; i < arrTextArea.length; i++) {
				switch (arrTextArea[i].name) {
				case "note":
					// prende il valore della vecchia nota
					VecchiaNota = arrTextArea[i].value;
					// Compone la stringa della nuova nota
					var StrPrimaUdienza = "";
					// alert(VecchiaNota.substr(1,1))
					if (VecchiaNota == "" || VecchiaNota.substr(0, 1) == "/") {
						StrPrimaUdienza = "Udienza del " + exGG + "-" + exMM + "-" + exAA;
					}
					NewNota = StrPrimaUdienza + VecchiaNota + FineVecchiaNota + NuovaNota;
					// Scrive
					arrTextArea[i].value = NewNota;
					break;
				}// FINE switch
			}// fine for

			break;

		case "CalcTerProc":
			// alert(pPagProv)
			// PARAMETRI DA CERCARE:
			// gg=,mm,aa,orario,evento,codice,descrizione,priorita,genere,nota
			// La pagina aperta non ha l'Id perchè non è collegata ad alcuna
			// pratica, che verrà ricercata in seguito
			var pGG = params['gg'];
			var pMM = params['mm'];
			var pAA = params['aa'];
			var pOrario = params['orario'];
			var pEvento = params['evento'];
			var pFatto = params['fatto'];
			var pCodice = params['codice'];
			var pDescrizione = params['descrizione'];
			var pPriorita = params['priorita'];
			var pGenere = params['genere'];
			// alert(pEvento)
			SetPageCalendar("", pGG, pMM, pAA, pOrario, pEvento, pFatto, pCodice,
					pDescrizione, pPriorita, pGenere, "");

			break;

		case "CalcImPen":
			// alert(pPagProv)
			// PARAMETRI DA CERCARE:
			// gg=,mm,aa,orario,evento,codice,descrizione,priorita,genere,nota
			// La pagina aperta non ha l'Id perchè non è collegata ad alcuna
			// pratica, che verrà ricercata in seguito
			var pGG = params['gg'];
			var pMM = params['mm'];
			var pAA = params['aa'];
			var pOrario = params['orario'];
			var pEvento = params['evento'];
			var pFatto = params['fatto'];
			var pCodice = params['codice'];
			var pDescrizione = params['descrizione'];
			var pPriorita = params['priorita'];
			var pGenere = params['genere'];
			var pNota = params['InNota'];
			// alert(pEvento)
			SetPageCalendar("", pGG, pMM, pAA, pOrario, pEvento, pFatto, pCodice,
					pDescrizione, pPriorita, pGenere, pNota);

			break;

		case "CalcImpCalcDeriv":
			// PARAMETRI DA CERCARE:
			// gg=,mm,aa,orario,evento,codice,descrizione,priorita,genere,nota
			// La pagina aperta ha l'Id perchè è collegata ad alcuna pratica,
			// che verrà ricercata in seguito
			var pId = params['ref_id'];
			// alert(pId)
			var pGG = params['gg'];
			var pMM = params['mm'];
			var pAA = params['aa'];
			var pOrario = params['orario'];
			var pEvento = params['evento'];
			var pFatto = params['fatto'];
			var pCodice = params['codice'];
			var pDescrizione = params['descrizione'];
			var pPriorita = params['priorita'];
			var pGenere = params['genere'];
			var pNota = params['InNota'];
			// alert(pEvento)
			SetPageCalendar(pId, pGG, pMM, pAA, pOrario, pEvento, pFatto, pCodice,
					pDescrizione, pPriorita, pGenere, pNota);

			break;

		}
	}

	// ------------------------------------- MODIFICA PRESTAZIONE
	// ----------------------------------
	if (PaginaAperta == "Modifica prestazione") {
		arrCaselleInput = document.getElementsByTagName("input");
		for (iii = 0; iii < arrCaselleInput.length; iii++) {
			if (arrCaselleInput[iii].name == "continuaIns")
				arrCaselleInput[iii].checked = true;
		}
		// alert("qui")

	}

	// ------------------------------------- AGGIUNGI PRESTAZIONE
	// ----------------------------------
	if (PaginaAperta == "Aggiungi prestazione") {
		var params = getParameter();
		var pModalita = params['mod'];

		if (pModalita == "deriv") {
			var gg = params['gg'];
			var mm = params['mm'];
			var aa = params['aa'];
			arrCaselleInput = document.getElementsByTagName("input");
			for (iii = 0; iii < arrCaselleInput.length; iii++) {
				if (arrCaselleInput[iii].name == "data[day]")
					arrCaselleInput[iii].value = gg;
				if (arrCaselleInput[iii].name == "data[month]")
					arrCaselleInput[iii].value = mm;
				if (arrCaselleInput[iii].name == "data[year]")
					arrCaselleInput[iii].value = aa;
			}
		}

	}

	if (PaginaAperta == "Aggiungi prestazione (da impegno)") {
		var params = getParameter();
		var pTipo = params['Tipo'];

		// OGGI
		var now = new Date();
		CurMonth = now.getMonth();
		TMonth = new Array('January', 'February', 'March', 'April', 'May', 'June',
				'July', 'August', 'September', 'October', 'November', 'December');
		odd = now.getDate();
		omm = TMonth[CurMonth];
		oyy = now.getFullYear();
		var oggi = new Date("" + omm + ", " + odd + " " + oyy + " 00:00");
		// alert(oggi);

		// DATA IMPEGNO
		var pDataImpegno = params['dataimpegno'];
		// alert(pDataImpegno)
		var pYear = pDataImpegno.substr(0, 4);
		var pMonth = pDataImpegno.substr(5, 2);
		var pDay = pDataImpegno.substr(8, 2);
		var imm = TMonth[Number(pMonth) - 1];
		var DataImpegno = new Date("" + imm + ", " + pDay + " " + pYear + " 00:00");
		// alert(DataImpegno)
		// alert(oggi)
		// CONFRONTA LA DATA DI OGGI CON QUELLA DELL'IMPEGNO
		if (oggi > DataImpegno) // Se oggi è maggiore alla data dell'impegno
		// (se cioè l'aggiornamento avviene quando
		// l'impegno è passato)
		{
			gg = pDay;
			mm = pMonth;
			aa = pYear;
			// alert(oggi)
		} else // Se invece l'aggiornamento avviene lo stesso giorno di
		// scadenza (=) ovvero prima (<)
		{
			gg = odd;
			mm = CurMonth + 1;
			aa = oyy;
			alert("Attenzione. Il programma inserirà come data dell'udienza quella di oggi.");
		}

		arrCaselleInput = document.getElementsByTagName("input");
		if (pTipo == "UD") {
			for (iii = 0; iii < arrCaselleInput.length; iii++) {
				if (arrCaselleInput[iii].name == "keepscad")
					arrCaselleInput[iii].checked = true;
				if (arrCaselleInput[iii].name == "data[day]")
					arrCaselleInput[iii].value = gg;
				if (arrCaselleInput[iii].name == "data[month]")
					arrCaselleInput[iii].value = mm;
				if (arrCaselleInput[iii].name == "data[year]")
					arrCaselleInput[iii].value = aa;
			}
		}
		check_tnf();

	}// FINE if (PaginaAperta=="Aggiungi prestazione")

	// ---------------------------------- NUOVA ANAGRAFICA
	// ------------------------------
	// AGGIUNGI ANAGRAFICA DA Cf ------------------------------

	// ccc

	if (PaginaAperta == "Nuova Anagrafica") {

		var pPagProv = '';
		var params = getParameter();
		if (params != null) {
			var pPagProv = params['PagProv'];
		}

		if (pPagProv == "ContattoDaCF") {

			// codice,nome,cod_fis,luogo.ivi_res,data[day],data[month]data[month]

			arrCaselleInput = document.getElementsByTagName("input");
			for (i = 0; i < arrCaselleInput.length; i++) {
				switch (arrCaselleInput[i].name) {
				case "codice":
					arrCaselleInput[i].value = params['nome'];
					break;
				case "nome":
					arrCaselleInput[i].value = params['nome'];
					break;
				case "cod_fis":
					arrCaselleInput[i].value = params['cod_fis'];
					break;
				case "luogo":
					arrCaselleInput[i].value = params['luogo'];
					break;
				case "data[day]":
					arrCaselleInput[i].value = params['giorno'];
					break;
				case "data[month]":
					arrCaselleInput[i].value = params['mese'];
					break;
				case "data[year]":
					arrCaselleInput[i].value = params['anno'];
					break;
				case "citta":
					if (params['ivires'] == "true") {
						arrCaselleInput[i].value = params['luogo'];
					}
					break;
				}// FINE switch
			}// fine for

		}
	}// FINE FUNZIONE

}// FINE TUTTO

// --------------------------------------- FINE APERTURA PAGINA
// -------------------------------------------------

