<?php
/*
 +--------------------------------------------------------------------------+
 | phpMyBackupPro                                                           |
 +--------------------------------------------------------------------------+
 | Copyright (c) 2004-2008 by Dirk Randhahn                                 |                               
 | http://www.phpMyBackupPro.net                                            |
 | version information can be found in definitions.php.                     |
 |                                                                          |
 | This program is free software; you can redistribute it and/or            |
 | modify it under the terms of the GNU General Public License              |
 | as published by the Free Software Foundation; either version 2           |
 | of the License, or (at your option) any later version.                   |
 |                                                                          |
 | This program is distributed in the hope that it will be useful,          |
 | but WITHOUT ANY WARRANTY; without even the implied warranty of           |
 | MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the            |
 | GNU General Public License for more details.                             |
 |                                                                          |
 | You should have received a copy of the GNU General Public License        |
 | along with this program; if not, write to the Free Software              |
 | Foundation, Inc., 59 Temple Place - Suite 330, Boston, MA 02111-1307,USA.|
 +--------------------------------------------------------------------------+
*/
/*
 +--------------------------------------------------------------------------+
 | phpMyBackupPro Italian translation                                       |
 +--------------------------------------------------------------------------+
 | Italian translation 2.1                                                  |
 | November 2007 by Leonardo Sarais, crazy4linux@gmail.com                  |
 +--------------------------------------------------------------------------+
*/

/*basic data*/
define('BD_LANG_SHORTCUT',"it"); // used for the php function setlocale() (http://www.php.net/setlocale)
define('BD_DATE_FORMAT',"%x %X"); // used for the php function strftime() (http://www.php.net/strftime)
define('BD_CHARSET_HTML',"ISO-8859-1"); // the charset used in you language for html
define('BD_CHARSET_EMAIL',"ISO-8859-1"); // the charset used in your langauge for MIME-emails

/*functions.inc.php*/
define('F_START',"start");
define('F_CONFIG',"configurazione");
define('F_IMPORT',"importa");
define('F_BACKUP',"backup");
define('F_SCHEDULE',"pianifica backup");
define('F_DB_INFO',"info database");
define('F_SQL_QUERY',"query sql");
define('F_HELP',"aiuto");
define('F_LOGOUT',"logout");
define('F_FOOTER',"Visita il %ssito del progetto phpMyBackupPro %s per nuove versioni e info.");
define('F_NOW_AVAILABLE',"Una nuova versione di phpMyBackupPro &egrave; su %s".PMBP_WEBSITE."%s");
define('F_SELECT_DB',"Seleziona i database");
define('F_SELECT_ALL',"seleziona tutto");
define('F_COMMENTS',"Commenti");
define('F_EX_TABLES',"esporta tabelle");
define('F_EX_DATA',"esporta dati");
define('F_EX_DROP',"aggiungi 'drop table'");
define('F_EX_COMP',"compressione");
define('F_EX_OFF',"nessuna");
define('F_EX_GZIP',"gzip");
define('F_EX_ZIP',"zip");
define('F_DEL_FAILED',"Non posso cancellare il backup %s");
define('F_FTP_1',"Connessione al server FTP fallita");
define('F_FTP_2',"Login errato");
define('F_FTP_3',"Upload FTP fallito");
define('F_FTP_4',"Upload avvenuto con successo sul server FTP");
define('F_FTP_5',"Cancellazione del file '%s' fallita sul server FTP");
define('F_FTP_6',"Cancellazione del file '%s' avvenuta con successo sul server FTP");
define('F_FTP_7',"File '%s' non trovato sul server FTP");
define('F_MAIL_1',"Uno dei destinatari delle email &egrave; errato");
define('F_MAIL_2',"Questa mail &egrave; stata inviata da phpMyBackupPro ".PMBP_VERSION." ".PMBP_WEBSITE." in esecuzione su");
define('F_MAIL_3',"non pu&ograve; essere letto");
define('F_MAIL_4',"Backup MySQL da");
define('F_MAIL_5',"L'email non pu&ograve; essere inviata");
define('F_MAIL_6',"File inviati con successo via mail a");
define('F_YES',"si");
define('F_NO',"no");
define('F_DURATION',"Durata");
define('F_SECONDS',"secondi");

/*index.php*/
define('I_SQL_ERROR',"ERRORE: inserisci i dati corretti nella configurazione di MySQL!");
define('I_NAME',"Questo &egrave; phpMyBackupPro");
define('I_WELCOME',"phpMyBackupPro &egrave; software libero rilasciato sotto licenza GNU GPL.<br>
Per informazioni prova l'help online o visita %s.<br><br>
Scegli dal men&ugrave; principale cosa vuoi fare! Se &egrave; la prima volta che usi phpMyBackupPro dovresti iniziare con la configurazione!
I permessi della cartella 'export' e del file 'global_conf.php' devono essere impostati a 0777.");
define('I_CONF_ERROR',"Il file ".PMBP_GLOBAL_CONF." non &egrave; scrivibile!");
define('I_DIR_ERROR',"La directory ".PMBP_EXPORT_DIR." non &egrave; scrivibile!");
define('PMBP_I_INFO',"Informazioni Sistema");
define('PMBP_I_SERVER',"Server");
define('PMBP_I_TIME',"Time");
define('PMBP_I_PHP_VERS',"Versione PHP");
define('PMBP_I_MEM_LIMIT',"Limite Memoria PHP");
define('PMBP_I_SAFE_MODE',"Safe Mode attivato");
define('PMBP_I_FTP',"Trasferimento FTP possibile");
define('PMBP_I_MAIL',"Email inviabili");
define('PMBP_I_GZIP',"compressione gzip possibile");
define('PMBP_I_SQL_SERVER',"MySQL Server");
define('PMBP_I_SQL_CLIENT',"MySQL Client");
define('PMBP_I_NO_RES',"*Can not be retrieved*");
define('PMBP_I_LAST_SCHEDULED',"Ultimo backup schedulato");
define('PMBP_I_LAST_LOGIN',"Ultimo login");
define('PMBP_I_LAST_LOGIN_ERROR',"Ultimo login incorretto");

/*config.php*/
define('C_SITENAME',"nome sito");
define('C_LANG',"linguaggio");
define('C_SQL_HOST',"MySQL hostname");
define('C_SQL_USER',"MySQL username");
define('C_SQL_PASSWD',"MySQL password");
define('C_SQL_DB',"solo questo database");
define('C_FTP_USE',"salvare via FTP?");
define('C_FTP_BACKUP',"usare directory di backup?");
define('C_FTP_REC',"backup directory ricorsivo?");
define('C_FTP_SERVER',"FTP server (url o IP)");
define('C_FTP_USER',"FTP username");
define('C_FTP_PASSWD',"FTP password");
define('C_FTP_PATH',"Directory FTP");
define('C_FTP_PASV',"usa ftp passivo?");
define('C_FTP_PORT',"Porta FTP");
define('C_FTP_DEL',"cancella i file sul server FTP");
define('C_EMAIL_USE',"utilizza email?");
define('C_EMAIL',"indirizzo email");
define('C_STYLESHEET',"skin");
define('C_DATE',"stile data");
define('C_DEL_TIME',"cancella i backup locali dopo x giorni");
define('C_DEL_NUMBER',"salva al massimo x files per database");
define('C_TIMELIMIT',"php timelimit");
define('C_IMPORT_ERROR',"visualizzare errori di importazione?");
define('C_NO_LOGIN',"disabilita funzione login?");
define('C_LOGIN',"Autenticazione HTTP?");
define('C_DIR_BACKUP',"abilita backup directory?");
define('C_DIR_REC',"backup di directory e sottodirectory?");
define('C_CONFIRM',"livello di conferma");
define('C_CONFIRM_1',"vuoto, cancella, importa");
define('C_CONFIRM_2',"... tutti");
define('C_CONFIRM_3',"... TUTTI");
define('C_CONFIRM_4',"non confermare nulla");

define('C_BASIC_VAL',"Configurazione Base");
define('C_EXT_VAL',"Configurazione Avanzata");
define('PMBP_C_SYSTEM_VAL',"Variabili di sistema");
define('PMBP_C_SYS_WARNING',"Queste variabili sono gestite da phpMyBackupPro. Non cambiarle se non sai cosa stai facendo!");
define('C_TITLE_SQL',"Dati SQL");
define('C_TITLE_FTP',"Impostazioni FTP");
define('C_TITLE_EMAIL',"Backup via email");
define('C_TITLE_STYLE',"Stile di phpMyBackupPro");
define('C_TITLE_DELETE',"Cancellazione automatica backup");
define('C_TITLE_CONFIG',"Configurazioni aggiuntive");
define('C_WRONG_TYPE',"non è corretto!");
define('C_WRONG_SQL',"Dati MySQL non  corretti!");
define('C_WRONG_DB',"Database MySQL non corretto!");
define('C_WRONG_FTP',"Dati FTP non corretti!");
define('C_OPEN',"Non posso aprire");
define('C_WRITE',"Non posso scrivere in");
define('C_SAVED',"Dati salvati con successo");
define('C_WRITEABLE',"non scrivibile");
define('C_SAVE',"Salva dati");

/*import.php*/
define('IM_ERROR',"%d error(s) occured. You can use 'empty database' to be sure the database does not contain any tables.");
define('IM_SUCCESS',"Importato con successo");
define('IM_TABLES',"tabelle e");
define('IM_ROWS',"righe");

define('B_EMPTIED_ALL',"Tutti i database sono stati svuotati con successo");
define('B_EMPTIED',"Database svuotato con successo");
define('B_DELETED',"File correttamente cancellato");
define('B_DELETED_ALL',"Tutti i file correttamente cancellati");
define('B_NO_FILES',"Non ci sono al momento file di backup");
define('B_DELETE_ALL_2',"cancella TUTTI i backup");
define('B_IMPORT_ALL',"importa TUTTI i backup");
define('B_EMPTY_ALL',"svuota TUTTI i database");
define('B_EMPTY_DB',"svuota database");
define('B_DELETE_ALL',"cancella tutti i backup");
define('B_INFO',"info");
define('B_VIEW',"visualizza");
define('B_DOWNLOAD',"download");
define('B_IMPORT',"importa");
define('B_IMPORT_FRAG',"frammentati");
define('B_DELETE',"cancella");
define('B_CONF_EMPTY_DB',"Vuoi veramente svuotare il database?");
define('B_CONF_DEL_ALL',"Vuoi veramente cancellare tutti i backup di questo database?");
define('B_CONF_IMP',"Vuoi veramente importare questo backup?");
define('B_CONF_DEL',"Vuoi veramente cancellare questo backup?");
define('B_CONF_EMPT_ALL',"Vuoi veramente svuotare TUTTI i database?");
define('B_CONF_IMP_ALL',"Vuoi veramente importare TUTTI gli ultimi backup?");
define('B_CONF_DEL_ALL_2',"Vuoi veramente cancellare TUTTI i backup?");
define('B_LAST_BACKUP',"Ultimo backup eseguito");
define('B_SIZE_SUM',"Dimensione totale dei backup");

/*backup.php*/
define('EX_SAVED',"File corretamente salvato come");
define('EX_NO_DB',"Nessun databas selezionato");
define('EX_EXPORT',"Backup");
define('EX_NOT_SAVED',"Non posso salvare il backup del database %s in '%s'");
define('EX_DIRS',"Seleziona le directory per il backup via FTP");
define('EX_DIRS_MAN',"Inserisci pi&ugrave; percorsi di directory relativi alla directory di phpMyBackupPro.<br>Separali con '|'");
define('EX_PACKED',"Crea un solo file ZIP");
define('PMBP_EX_NO_AVAILABLE',"Il database %s non &egrave; disponibile");
define('PMBP_EXS_UPDATE_DIRS',"Aggiorna lista directory");
define('PMBP_EX_NO_ARGV',"Esempio utilizzo:\n$ php backup.php db1,db2,db3
Per pi&ugrave; funzioni per favore leggi 'SHELL_MODE.txt' nella directory 'documentation'");

/*scheduled.php*/
define('EXS_PERIOD',"Seleziona il periodo di backup");
define('EXS_PATH',"Seleziona la directory dove il file PHP sar&agrave; salvato");
define('EXS_BACK',"indietro");
define('PMBP_EXS_ALWAYS',"Ad ogni chiamata");
define('EXS_HOUR',"ora");
define('EXS_HOURS',"ore");
define('EXS_DAY',"giorno");
define('EXS_DAYS',"giorni");
define('EXS_WEEK',"settimana");
define('EXS_WEEKS',"settimane");
define('EXS_MONTH',"mese");
define('EXS_SHOW',"Visualizza script");
define('PMBP_EXS_INCL',"Includi questo script nel file PHP (%s) con il quale vuoi eseguire il backup");
define('PMBP_EXS_SAVE',"o salva questo script in un nuovo file (sovrascrive i file esistenti!)");

/*file_info.php*/
define('INF_INFO',"info");
define('INF_DATE',"Data");
define('INF_DB',"Database");
define('INF_SIZE',"Dimensione Backup");
define('INF_COMP',"E' compresso");
define('INF_DROP',"Contiene 'drop table'");
define('INF_TABLES',"Contiene tabelle");
define('INF_DATA',"Contiene dati");
define('INF_COMMENT',"Commenti");
define('INF_NO_FILE',"Nessun file selezionato");

/*db_status.php*/
define('DB_NAME',"nome del database");
define('DB_NUM_TABLES',"numero di tabelle");
define('DB_NUM_ROWS',"numero di righe");
define('DB_SIZE',"dimensione");
define('DB_DIFF',"Le dimensioni possono differire dalla dimensione dei file di backup!");
define('DB_NO_DB',"Database non disponibile");
define('DB_TABLES',"info tabelle");
define('DB_TAB_TITLE',"tabella del database ");
define('DB_TAB_NAME',"nome della tabella");
define('DB_TAB_COLS',"numero dei campi");

/*sql_query.php*/
define('SQ_ERROR',"Errore nella linea numero");
define('SQ_SUCCESS',"Eseguito con successo");
define('SQ_RESULT',"Risultato query");
define('SQ_AFFECTED',"Numero di righe interessate");
define('SQ_WARNING',"Attenzione: questa pagina serve per inviare semplici query al database. Usala con cautela, potresti perdere dati!");
define('SQ_SELECT_DB',"Seleziona database");
define('SQ_INSERT',"Inserisci la tua query sql qui");
define('SQ_FILE',"Carica file sql");
define('SQ_SEND',"Esegui");

/*login.php*/
define('LI_MSG',"Per favore loggati (usa le tue credenziali MySQL)");
define('LI_USER',"username");
define('LI_PASSWD',"password");
define('LI_LOGIN',"Login");
define('LI_LOGED_OUT',"Disconnesso con successo!");
define('LI_NOT_LOGED_OUT',"Disconnessione non avvenuta!<br>Per disconnettersi inserire una password errata");

/*big_import.php*/
define('BI_IMPORTING_FILE',"Importa file");
define('BI_INTO_DB',"Nel database");
define('BI_SESSION_NO',"Numero sessione");
define('BI_STARTING_LINE',"Inizio a linea");
define('BI_STOPPING_LINE',"Fine a linea");
define('BI_QUERY_NO',"Numero di query eseguite");
define('BI_BYTE_NO',"Numero di byte processati");
define('BI_DURATION',"Durata ultima sessione");
define('BI_THIS_LAST',"questa sessione/totale");
define('BI_END',"Fine del file raggiunta, importazione OK");
define('BI_RESTART',"Rinizia l'importazione del file ");
define('BI_SCRIPT_RUNNING',"Questo script &egrave ancora in esecuzione!<br>Aspetta finch&egrave; non finisca");
define('BI_CONTINUE',"Continua dalla linea");
define('BI_ENABLE_JS',"Abilita JavaScript per continuare automaticamente");
define('BI_BROKEN_ZIP',"File ZIP rovinato");
define('BI_WRONG_FILE',"Fermato a linea %s.<br>Il file contiene pi&ugrave di %s linee di dump. Questo succede se il file &egrave; stato creato
da qualche programma che non usa il punto e virgola seguito da nuova linea alla fine di una query o da un file di backup che contiene le insert estese");
?>