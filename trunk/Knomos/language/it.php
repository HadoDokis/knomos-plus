<?
//
//  Creative Web FrameWork
//  Italian language
//



//Error Definition
define("FW_ERROR_NOMODCONG", "Il modulo %MOD% non contiene un file di definizione");
define("FW_ERROR_DBCONNECTION", "Il collegamento al database è fallito");
define("FW_ERROR_AUTHQUERY", "Errore nella query di autenticazione");
define("FW_ERROR_SES_NEVER", "Avviso: Tentativo di inizializzare una sessione nonostante il settaggio della configurazione sia \"never\"");
define("FW_ERROR_NOTEMPLATE", "Il template %TEMPL% non esiste nella cartella %FOLD%");
define("FW_ERROR_NOTEMPLATE", "La pagina %PAGE% del template %TEMPL% non esiste nella cartella %FOLD%");
define("FW_ERROR_NOFORMELEMENT", "Impossibile trovare una funzione associata all'elemento %ELEMENT% della form");
define("FW_ERROR_NOFORMERROR", "Impossibile trovare una funzione associata al tipo di errore %ELEMENT% della form o formato errore non valido");
define("FW_ERROR_NOFORMTABLE", "Non è indicata una tabella del database per questa form");
define("FW_ERROR_NOFORMWHERE", "Non è indicato un ID valido per l'aggiornamento");
define("FW_ERROR_NOVALIDSIZE", "Il size indicato per il checkbox/radio non è compreso fra 1 e 3");
define("FW_ERROR_NO_OBJ", "Nessun oggetto trovato");
define("FW_ERROR_NO_OBJ_FOUND", "Non è stato possibile trovare alcun oggetto collegato all'id specificato o id non valido.");
define("FW_ERROR_NO_PERM", "Pagina proibita");
define("FW_ERROR_NO_PERM_TXT", "Non si disponde dei permessi necessari per effettuare l'operazione richiesta.");
define("FW_ERROR_NO_PERM_DEL", "Non si dispone dei permessi per eliminare questo oggetto");


//Form Error Manager
define("FW_ERRORFORM_REGNOVALID","Il campo %FIELD% non è valido");
define("FW_ERRORFORM_MINSTR","Il campo %FIELD% deve essere lungo almeno %VAL% caratteri");
define("FW_ERRORFORM_MINSEL","Il campo %FIELD% deve essere contenere almeno %VAL% scelta/e");
define("FW_ERRORFORM_MAXSTR","Il campo %FIELD% non deve essere pi&ugrave; lungo di %VAL% caratteri");
define("FW_ERRORFORM_MAXSEL","Il campo %FIELD% deve essere contenere al massimo %VAL% scelta/e");
define("FW_ERRORFORM_NOCHK","Il campo %FIELD% deve essere selezionato");
define("FW_ERRORFORM_TYPECRIT","Il campo %FIELD% deve contenere un criterio valido (es. MIN*2 MAX/3 MED.4)");
define("FW_ERRORFORM_TYPEFLOAT","Il campo %FIELD% deve essere un valore decimale");
define("FW_ERRORFORM_TYPEMAIL","Il campo %FIELD% non contiene un indirizzo email valido");
define("FW_ERRORFORM_TYPEURL","Il campo %FIELD% non contiene un url valido");
define("FW_ERRORFORM_TYPEPHONE","Il campo %FIELD% non contiene un numero telefonico valido");
define("FW_ERRORFORM_TYPEINT","Il campo %FIELD% non contiene un numero intero");
define("FW_ERRORFORM_TSELECT_MULTI","Il campo %FIELD% ha restituito più di un risultato (%VAL%)");
define("FW_ERRORFORM_IS_DUPE", "Esiste già un record avente come \"%FIELD%\" con il valore inserito");
define("FW_ERRORFORM_ALFANUM","Il campo %FIELD% può contenere solo caratteri alfanumerici");


//List Engine
define("FW_LIST_PREV","Precedente");
define("FW_LIST_NEXT","Successivo");
define("FW_ACTION","Azione");

//PERMISSION ENGINE
define("FW_PERM_DEF","Default");
define("FW_PERM_NO","No");
define("FW_PERM_R","Lettura");
define("FW_PERM_C","Creazione");
define("FW_PERM_P","Permessi");
define("FW_PERM_D","Cancell.");
define("FW_PERM_W","Modifica");
define("FW_PERM_REFRESH","Aggiorna Permessi");
define("FW_TNF_REFRESH","Aggiorna Calcolo Tariffe");
define("FW_PERM_OPEN","Apri gestione permessi");
define("FW_PERM_GRP","Gruppi");
define("FW_PERM_USR","Utenti");
define("FW_PERM_PRA","Pratica");
define("FW_PERM_PRE","Prestazioni");
define("FW_PERM_SCA","Scadenze");
define("FW_PERM_DOC","Documenti");
define("FW_PERM_CNT","Contatti");
define("FW_PERM_SRCUSRGRP","Cerca utenti/gruppi");
define("FW_PERM_APPLY","Applica");

//DATE TEXT

define("CALENDAR_MONTH_1", "Gennaio");
define("CALENDAR_MONTH_2", "Febbraio");
define("CALENDAR_MONTH_3", "Marzo");
define("CALENDAR_MONTH_4", "Aprile");
define("CALENDAR_MONTH_5", "Maggio");
define("CALENDAR_MONTH_6", "Giugno");
define("CALENDAR_MONTH_7", "Luglio");
define("CALENDAR_MONTH_8", "Agosto");
define("CALENDAR_MONTH_9", "Settembre");
define("CALENDAR_MONTH_10", "Ottobre");
define("CALENDAR_MONTH_11", "Novembre");
define("CALENDAR_MONTH_12", "Dicembre");


//General
define("FW_MODIFY","Modifica");
define("FW_NO","No");
define("FW_LANGUAGE","Lingua");
define("FW_REQ",'<span class="obbligat-campo">*</span> ');
define("FW_NONE","Nessuno");
define("FW_SHOW","Visualizza");
define("FW_OPEN","Apri");
define("FW_CANCEL","Annulla");
define("FW_DELETE","Cancella");
define("FW_INSERT","Inserisci");
define("FW_MOVE","Sposta");
define("FW_SEARCH","Cerca");
define("FW_PERMISSION","Permessi");
define("FW_TYPE","Tipo");
define("FW_HOME","Home Page");
define("FW_DATE","Data");
define("FW_FILE","File");
define("FW_TEXT","Testo");
define("FW_NOTE","Note");
define("FW_DESC","Descrizione");
define("FW_CODE","Codice");
define("FW_NAME","Nome");
define("FW_LOGIN","Login");
define("FW_PASSWORD","Password");
define("FW_FROM","Dal");
define("FW_TO","Al");
define("FW_SUBJ","Oggetto");
define("FW_NEWDOC","Nuovo Doc.");
define("FW_ANY","Qualsiasi");
define("FW_INSERT","Inserisci");
define("FW_DEL_OK","Eliminazione avvenuta");
define("FW_DEL_KO","Errore, oggetto NON eliminato");
define("FW_TSEL_OPEN","Apri Smart Help");
define("FW_ALL","Tutti");

define("FW_MANT_LOCK_ALERT","ATTENZIONE: Il sistema verrà sospeso per manutenzione alle ore: ");
define("FW_MANT_LOCK_TITLE","Sistema Bloccato");
define("FW_MANT_LOCK_TEXT","Il sistema è attualmente bloccato per manutenzione straordinaria.");
define("FW_MANT_LOCK_UNLOCK","Sblocca sistema");
define("FW_MANT_LOCK_ADMIN","Immettere la password di sblocco per ripristinare l'operatività del sistema a tutti gli utenti.");
define("FW_MANT_LOCK_PWERR","La password inserita è errata");

//TEMPLATE TEXT
define("FW_USER","Utente");
define("FW_DOCUMENTS","Documenti");
define("FW_CALENDAR","Calendario");
define("FW_IMMINENT","Eventi imminenti");
define("FW_EVENTS","Impegni");
define("FW_LASTPRAT","Ultime Pratiche");
define("FW_CONTACT","Anagrafiche");
//define("FW_SUPPORT","Assistenza");
define("FW_SUPPORT","Knomos Plus");
?>
