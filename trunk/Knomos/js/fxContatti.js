
function AddeNome() {
	// prende il valore del nome
	arrCaselleInput = parent.document.getElementsByTagName("input");
	for (i = 0; i < arrCaselleInput.length; i++) {
		switch (arrCaselleInput[i].name) {
		case "codice":
			var vNome = arrCaselleInput[i].value;
			break;
		}// FINE switch
	}// fine for
	// Lo aggiunge alla casella nome
	arrCaselleInput = parent.document.getElementsByTagName("input");
	for (i = 0; i < arrCaselleInput.length; i++) {
		switch (arrCaselleInput[i].name) {
		case "nome":
			arrCaselleInput[i].value = vNome;
			break;
		}// FINE switch
	}// fine for

}

// --------- INIZIO AGGIUNTA CONTATTO DA CODICE FISCALE
// -----------------------------

function AddeContattoDaCF() {

	var vIviRes = document.CodiceFiscale.ckIviRes.checked;
	// alert(vIviRes)
	var cognome = document.CodiceFiscale.iCognome.value;
	var prenome = document.CodiceFiscale.iNome.value;
	var nome = cognome + " " + prenome;

	var gg = document.CodiceFiscale.iGiorno.value;
	var mmm = document.CodiceFiscale.iMese.value;

	switch (mmm) {
	case "A":
		mm = "01";
		break;
	case "B":
		mm = "02";
		break;
	case "C":
		mm = "03";
		break;
	case "D":
		mm = "04";
		break;
	case "E":
		mm = "05";
		break;
	case "H":
		mm = "06";
		break;
	case "L":
		mm = "07";
		break;
	case "M":
		mm = "08";
		break;
	case "P":
		mm = "09";
		break;
	case "R":
		mm = "10";
		break;
	case "S":
		mm = "11";
		break;
	case "T":
		mm = "12";
		break;
	}

	var aa = document.CodiceFiscale.iAnno.value;
	var luogo = document.CodiceFiscale.iComune.value;
	var cf = document.CodiceFiscale.Risultato.value;

	// Richiama la funzione che apre la pagina (segue)
	OpenPagContattoDaCF(vIviRes, nome, cf, luogo, gg, mm, aa);
}

function OpenPagContattoDaCF(iviresid, nome, codfisc, luogo, g, m, a) {
	// alert("sono qui")
	variabile = "/modules/contact/pages/new_contact.php?ivires=" + iviresid
			+ "&nome=" + nome + "&cod_fis=" + codfisc + "&luogo=" + luogo
			+ "&giorno=" + g + "&mese=" + m + "&anno=" + a
			+ "&PagProv=ContattoDaCF";
	// ccc
	// alert(window.name)
	parent.parent.parent.location.href = variabile;
}

// --------------------------- FINE AGGIUNTA CONTATTO DA CODICE FISCALE
// -------------------------

