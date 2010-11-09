<?
//
//  Creative Web FrameWork
//  Italian language for module PRATICHE
//

define("PRATICHE_TITLE", "Pratiche");

//Menu Definition
define("PRATICHE_MENU_0", "Pratiche");
define("PRATICHE_MENU_0_1", "Ricerca Pratiche");
define("PRATICHE_MENU_0_2", "Nuova Pratica");


define("PRATICHE_BACK_LIST", "Torna alla gestione pratiche");
define("PRATICHE_BACK_SHOW", "Torna alla scheda pratica");

define("PRATICHE_FOUND", "Pratiche trovate");
define("PRATICHE_SEARCH", "Ricerca Pratiche");

//Form
define("PRATICHE_PRAT", "Pratica");
define("PRATICHE_DEPT", "Dipartimenti");
define("PRATICHE_UFF", "Uffici");
define("PRATICHE_CODE", "Codice Pratica");
define("PRATICHE_CUSTOMER", "Cliente di riferimento");
define("PRATICHE_AVVR", "Avversari");
define("PRATICHE_VALUE", "Valore");
define("PRATICHE_FIDO", "Fido");
define("PRATICHE_RESP", "Responsabile");
define("PRATICHE_NPROV", "N. Provv.");
define("PRATICHE_NUMBER", "Numero");
define("PRATICHE_BENEF", "Altri clienti");
define("PRATICHE_NRUOLO", "N. Ruolo");
define("PRATICHE_NREP", "Repertorio numero (1/9)");
define("PRATICHE_AUT_COMP", "Aut. Comp.");
define("PRATICHE_AUT_COMP_DESC", "Foro");
define("PRATICHE_USER", "Operatore");
define("PRATICHE_SUBJ", "Oggetto");
define("PRATICHE_GIUD", "Giudice");
define("PRATICHE_CRIT", "Criterio");
define("PRATICHE_OTHERS", "Altri");
define("PRATICHE_VAL_IND", "Indeterminato");
define("PRATICHE_VAL_INDEXT", "Indeterminato Extra");
define("PRATICHE_INSERT_DATE", "Data Inserimento");
define("PRATICHE_LAST_UPDATE", "Ultima Modifica");
define("PRATICHE_START_PREST", "Inizio prestazione");
define("PRATICHE_ADD", "Aggiungi pratica");
define("PRATICHE_ADD_PRES", "Nuova prest.");
define("PRATICHE_ADD_PREST", "Nuova prestazione");
define("PRATICHE_VIEW_PRES", "Vis. prest.");
define("PRATICHE_ADD_DOC", "Nuovo documento");
define("PRATICHE_ADD_EVENT", "Nuovo impegno");
define("PRATICHE_HOUR_PRICE", "Onorario orario");
define("PRATICHE_PERC_ONOR", "Scostamento in % su onorari");
define("PRATICHE_UPD", "Modifica pratica");
define("PRATICHE_REL_SCAD", "Impegni collegati");
define("PRATICHE_IMPEGN", "Impegni");


//aggiunte
define("PRATICHE_MAIL", "Posta");
define("PRATICHE_NEWMAIL", "- Nuova mail ...");
define("PRATICHE_GOOGLE", "Google");
define("PRATICHE_GMAIL", "- Posta inviata ...");
define("PRATICHE_GCAL", "- Google calendar ...");
define("PRATICHE_GDOC", "- Google documents ...");
define("PRATICHE_IMPVELOCI", "- Impegni veloci ...");
define("PRATICHE_IMPCALCOLATI", "- Impegni calcolati ...");
define("PRATICHE_RICERCAPREST", "Ricerca Prestazioni");
define("PRATICHE_RICERCAIMP", "- Ricerca impegni");
define("PRATICHE_RICERCADOC", "Ricerca Documenti");
//fine agiunte






//aggiunte
define("PRATICHE_NOTE", "Note pratica");
define("PRATICHE_TOHIST", "Archivia");
define("PRATICHE_TOCURR", "Ripristina");
define("PRATICHE_MOVETIT", "Archiviazione pratica");
define("PRATICHE_RESTTIT", "Ripristino pratica");
define("PRATICHE_REFERRAL", "Riferimento");
define("PRATICHE_UORIG", "Ufficio Origine");
define("PRATICHE_PORIG", "Professionista Origine");
define("PRATICHE_MOVE_ERRCAL", "<font color=\"#BB0000\">Attenzione</font> impossibile spostare nell'archivio storico questa pratica perché ci sono ancora incombenze aperte.");
define("PRATICHE_MOVE_TXT", "Se si decide di archiviare la pratica tutte le informazioni relative ad essa (Documenti, Prestazioni) saranno spostati nell'archivio storico e non sarà più possibile effettuare alcuna modifica su questa pratica. Si è sicuri di voler proseguire ?");
define("PRATICHE_REST_TXT", "Se si decide ripristinare la pratica tutte le informazioni relative ad essa (Documenti, Prestazioni) saranno spostati nell'archivio corrente. Si è sicuri di voler proseguire ?");
define("PRATICHE_MOVE_DONE", "La pratica è stata correttamente spostata nell'archivio storico.");
define("PRATICHE_REST_DONE", "La pratica è stata correttamente spostata nell'archivio corrente.");

define("PRATICHE_UPD_DONE", "Modifica effettuata");
define("PRATICHE_UPD_DONE_TXT", "La pratica è stata aggiornata correttamente e le modifiche sono già visibili a tutti gli utenti con i necessari permessi.");
define("PRATICHE_ADD_DONE", "Pratica inserita");
define("PRATICHE_ADD_DONE_TXT", "La nuova pratica è stata inserita correttamente ed è già disponibile per tutti gli utenti autorizzati.");

//Aut Comp Type
//define("PRATICHE_AC_STRA", "STRA");
//define("PRATICHE_AC_CONC", "CONC");
//define("PRATICHE_AC_GDPA", "GDPA");
//define("PRATICHE_AC_PRET", "PRET");
//define("PRATICHE_AC_TRIB", "TRIB");
//define("PRATICHE_AC_GU", "G.U.");
//define("PRATICHE_AC_AMMN", "TAR");
//define("PRATICHE_AC_CA", "C.A.");
//define("PRATICHE_AC_CC", "C.C.");
//define("PRATICHE_AC_COST", "COST");

define("PRATICHE_AC_STRA", "STRA");
define("PRATICHE_AC_CONC", "CONC-GdPacePEN");
define("PRATICHE_AC_GDPA", "GdPaceCIV");
define("PRATICHE_AC_PRET", "PRET-TRIB.MON.-MAG.SORV");
define("PRATICHE_AC_TRIB", "TRIB");
define("PRATICHE_AC_GU", "G.U.");
define("PRATICHE_AC_AMMN", "TAR-GIP&GUP");
define("PRATICHE_AC_CA", "C.App.-Trib.Sorv.");
define("PRATICHE_AC_CC", "C.Cassazione");
define("PRATICHE_AC_COST", "COST-ASSISE-ASS.APP");




// For Billing status
define("PRATICHE_ONOR", "Onorario");
define("PRATICHE_ONOR_OR", "Onorario Orario");
define("PRATICHE_ONOR_UT", "Onorario Fatturabile");
define("PRATICHE_DIR", "Diritti");
define("PRATICHE_ACCO", "Acconti");
define("PRATICHE_ANTI", "Anticipazioni");
define("PRATICHE_SIMP", "Spese imp.");
define("PRATICHE_SNIMP", "Spese non imp.");
define("PRATICHE_SUBT", "Subtotale");
define("PRATICHE_TOBILL", "Da fatturare");
define("PRATICHE_BILLEM", "Note emesse");
define("PRATICHE_FATTEM", "Fatture emesse");
define("PRATICHE_SITCONT", "Situazione Contabile");
//Error Definition






//
// NOTE LANGUAGE DEFINITION COMMON TO ALL APPZ
//

define("NOTE_ADD", "Aggiungi nota");
define("NOTE_UPD", "Modifica nota");
define("NOTE_ADD_DONE", "Nota aggiunta");
define("NOTE_ADD_DONE_TXT", "Nota aggiunta correttamente e già visibile a tutti gli utenti con i necessari permessi");
define("NOTE_UPD_DONE", "Nota aggiornata");
define("NOTE_UPD_DONE_TXT", "Nota aggiornata correttamente e già visibile a tutti gli utenti con i necessari permessi");
define("NOTE_PRAT", "Note Pratica");
