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

chdir("..");
require_once("definitions.php");

echo "<!DOCTYPE HTML PUBLIC \"-//W3C//DTD HTML 4.01//EN\"
   \"http://www.w3.org/TR/html4/loose.dtd\">
<html".ARABIC_HTML.">
<head>
<meta http-equiv=\"Content-Type\" content=\"text/html;charset=".BD_CHARSET_HTML."\">
<link rel=\"stylesheet\" href=\"./../".PMBP_STYLESHEET_DIR.$CONF['stylesheet'].".css\" type=\"text/css\">
<title>phpMyBackupPro - ".F_HELP."</title>
</head>
<body>
<table border=\"0\" cellspacing=\"2\" cellpadding=\"0\" width=\"100%\">\n
<tr><th colspan=\"2\" class=\"active\">";
echo PMBP_image_tag("../".PMBP_IMAGE_DIR."logo.png","phpMyBackupPro ".PMBP_WEBSITE,PMBP_WEBSITE);
echo "</th></tr>\n";

// choose help text
switch(preg_replace("'^.*/'","",$_GET['script'])) {
    case 'index.php': $filename=F_START;
    $html="In questa pagina puoi vedere le informazioni sul server dove phpMyBackupPro &egrave; in esecuzione.<br><br>
    ".PMBP_I_SERVER.": Qui puoi vedere su quale tipo di server phpMyBackupPro &egrave; in esecuzione e l'orario del server<br><br>
    "."PHP".": Qui puoi vedere la versione di PHP e le informazioni circa i diversi moduli e funzioni PHP.
    Puoi vedere se il PHP safe mode &egrave; attivato, il valore del PHP memory limit, se &egrave; possibile la compressione gzip,
    e se il server &egrave; in grado di inviare email e se &egrave possibile trasferire file via FTP sul server.<br>
    "."MySQL".": Qui puoi vedere la versione del tuo server e del tuo client MySQL.<br>
    ".F_BACKUP.": Qui puoi vedere lo spazio disco occupato dai backup, 
    quando &egrave; stato eseguito l'ultimo backup manuale e quando &egrave; stato eseguito l'ultimo backup schedulato.<br>
    ".LI_LOGIN.": Qui puoi vedere quando ti sei loggato a phpMyBackupPro l'ultima volta e da quale indirizzo IP.";
    break;
    case 'config.php': $filename=F_CONFIG;
    $html="Ci sono due livelli di configurazione: opzioni di configurazione base o avanzate. Editare le configurazioni avanzate &egrave; opzionale.
        Il segno * indica che il valore non pu&ograve; essere nullo.<br><br>
        Configurazione base:<br>
        ".C_SITENAME.": Dai al tuo sistema un nome, per esempio 'server di produzione'.<br>
	".C_LANG.": Cambia il linguaggio di phpMyBackupPro. Puoi scaricare diversi pacchetti delle lingue dal sito di phpMyBackupPro.<br>
	".C_SQL_HOST.": Inserisci il tuo host MySQL, per esempio 'localhost'.<br>
	".C_SQL_USER.": Inserisci il tuo username MySQL.<br>
	".C_SQL_PASSWD.": Inserisci la tua password MySQL.<br>
	".C_SQL_DB.": Soltanto se vuoi usare un solo database sul server inseriscine il nome qui.<br>
	".C_FTP_USE.": Seleziona questo soltanto se vuoi usare le funzioni FTP per fare l'upload FTP in automatico su un server FTP.<br>
	".C_FTP_BACKUP.": Seleziona questo soltanto se tu vuoi abilitare la directory di backup sul server FTP.<br>
	".C_FTP_REC.": Seleziona questo se vuoi effettuare il backup di directory e includere le sottodirectory.<br>
	".C_FTP_SERVER.": Inserisci l'IP o l'URL del tuo server FTP.<br>
	".C_FTP_USER.": Inserisci il tuo username FTP.<br>
	".C_FTP_PASSWD.": Inserisci la tua password FTP.<br>
	".C_FTP_PATH.": Inserisci un percorso di una directory del server FTP dove salvare i backup.<br>
	".C_FTP_PASV.": Seleziona questo se usi l'FTP passivo.<br>
	".C_FTP_PORT.": Inserisci la porta del server FTP. Quella di default &egrave; la 21.<br>
	".C_FTP_DEL.": Seleziona questo soltanto se vuoi che i file di backup sul server FTP vengano cancellati quando li cancelli localmente.<br>
	".C_EMAIL_USE.": Seleziona questo soltanto se vuoi inviare i backup automaticamente via email.<br>
	".C_EMAIL.": Inserisci l'indirizzo email del destinatario dei backup.<br><br>
	Configurazione Avanzata:<br>
	".C_STYLESHEET.": Seleziona un foglio di sile per phpMyBackupPro. Puoi scaricare o inviare fogli di stile sul sito di phpMyBackupPro.<br>
	".C_DATE.": Seleziona il tuo formato data preferito.<br>
	".C_LOGIN.": Qui puoi impostare il metodo di autenticazione HTTP se lo vuoi.<br>
	".C_DEL_TIME.": Specifica il numero di giorni dopo i quali i file di backup vengono automaticamente cancellati. Usa 0 per disabilitare questa funzione.<br>
	".C_DEL_NUMBER.": Specifica un numero di massimo di file di backup per ogni database.<br>
	".C_TIMELIMIT.": Aumenta il PHP time limit se hai problemi di importazione o esecuzione dei backup. Questa impostazione non ha effetto se il PHP safe mode &egrave; attivato.<br>
	".C_CONFIRM.": Scegli quale azione di importazione deve essere confermata.<br>
	".C_IMPORT_ERROR.": Seleziona questo per ricevere una lista di errori di importazione, nel caso ce ne siano.<br>
	".C_DIR_BACKUP.": Seleziona questo per abilitare i backup su directory. Dati FTP validi devono essere inseriti per usare questa funzione.<br>
	".C_DIR_REC.": Seleziona questo per effettuare il backup in modo ricorsivo.<br>
	".C_NO_LOGIN.": Seleziona questo per disabilitare la funzione di login. Questo non &egrave; raccomandato visto che chiunque protr&agrave; fare accesso al tuo database!<br><br>
	Variabili di sistema:<br>
	Qui puoi cambiare il valore delle variabili di sistema di phpMyBackupPro. Fallo soltanto se sei sicuro di ci&ograve; che stai facendo.
	Potrai trovare pi&ugrave; aiuto guardando il file 'SYSTEM_VARIABLES.txt' che si trova nella documentazione.";
    break;
    case 'import.php': $filename=F_IMPORT;
    $html="Qui puoi vedere tutti i file di backup locali.<br>
    Puoi avere pi&ugrave; informazioni cliccando '".B_INFO."'.<br>
    Per scaricare il file di backup clicca '".B_DOWNLOAD."'.<br>
    Clicca '".B_IMPORT."' per reimportare il file nel database. Prima di fare ci&ograve; puoi svuotare il database cliccando '".B_EMPTY_DB."'.<br>
    Puoi importare bakcup di grandi dimensioni usando l'importazione '".B_IMPORT_FRAG."'. Questo importer&agrave; il backup bit a bit.<br>
    Per cancellare un file di backup clicca '".B_DELETE."'. Puoi cancelalre tutti i backup di un database cliccando '".B_DELETE_ALL."'.<br><br>
    Clicca '".B_EMPTY_ALL."' per svuotare tutti i database, clicca '".B_IMPORT_ALL."' per importare l'ultimo backup di ogni database,
    clicca '".B_DELETE_ALL_2."' per cancellare tutti i file di backup disponibili.";
    break;
    case 'backup.php': $filename=F_BACKUP;
    $html="Qui puoi selezionare quali per database vuoi effettuare il backup.<br>
    Sar&agrave; salvato un commento per ogni file di backup.<br>
    Puoi scegliere soltanto la struttura delle tabelle, soltanto i dati o entrambi.<br>
    Aggiungi la riga 'drop table if exists ...' a ogni tabella cliccando 'add drop table'<br>
    Puoi anche scegliere il tipo di compressione per i file di backup. Su qualche sistema non tutti i formati sono disponibili.<br><br>
	Se hai attivato le funzioni FTP puoi anche backuppare directory complete sul tuo server FTP.<br>
	Le directory selezionate e i loro file verranno copiati su '".C_FTP_PATH."' configurato nella pagina '".F_CONFIG."'.<br>
	Non &egrave; possibile inviare i file via mail, ma puoi selezionare '".EX_PACKED."' per creare un solo file ZIP.
	In questo modo ci vorr&agrave; pi&ugrave; tempo per il trasferimento. La lista delle directory viene generata durante il login. Se vuoi
	aggiornare la lista clicca '".PMBP_EXS_UPDATE_DIRS."'.";
    break;
    case 'scheduled.php': $filename=F_SCHEDULE;
    $html="Per automatizzare il backup, puoi generare del codice da includere in uno script PHP.<br>
    Quando lo script viene caricato, il backup parte automaticamente. Puoi schedulare quando il backup verr&agrave; eseguito.<br><br>
    Successivamente scegli dove salvare lo script. La directory di phpMyBackupPro non deve essere spostata dopo questo cambiamento!
        (se hai una buona conoscenza del PHP puoi cambiare il percorso successivamente)<br><br>
        Un click su '".EXS_SHOW."' ti mostrer&agrave; uno script che pu&ograve; essere usato per fare bakcup schedulati. Copia il codice e includilo in file,
        oppure usa '".C_SAVE."' per salvare con nome lo script. Questo sovrascriver&agrave; i file gi&agrave; esistenti con lo stesso nome!<br>
        Nota: Il file deve essere nella directory selezionata nella pagina precedente per funzionare correttamente.<br>
    Il backup verr&agrave; eseguito soltanto quando lo script verr&agrave; aperto o eseguito. Puoi includerlo in qualsiasi file PHP esistente o usare un frame set con un frame invisibile.<br><br>
    Tutte le configurazioni funzioneranno in questo script!<br> Puoi trovare pi&ugrave; informazioni circa le opzioni di backup nel 'backup' help.<br><br>
    Se vuoi vedere una maggiore lista di directory disponibili vai nella pagina di configurazione e cambia la variabile di sistema 'dir_lists' e impostala a 2!";
    break;
    case 'db_info.php': $filename=F_DB_INFO;
    $html="Qui puoi vedere alcune informazioni sul tuo database.<br><br>
    Nella colonna 'numero di righe' puoi trovare la somma delle righe di tutte le tabelle.<br>
    Se il database contiene tabelle puoi cliccare su 'info tabelle' per sapere i nomi delle colonne, il numero di righe e le dimensioni della tabelle del relativo database.<br>
    Le dimensioni possono differire dalle dimensioni dei file di backup poich&egrave; questi ultimi potrebbero contenere informazioni aggiuntive";
    break;
    case 'sql_query.php': $filename=F_SQL_QUERY;
    $html="Questa pagina serve per mandare semplici query al database.<br><br>
    Puoi selezionare il database dove eseguire le query.<br>
    Puoi inserire una o pi&ugrave query nella casella di testo.<br>
    Query come 'select ...' mostreranno come risultato una tabella.<br>
    Query come 'delete ...' ti diranno soltanto '".SQ_SUCCESS."'<br><br>
    Se fai l'upload di un file per essere eseguito riceverai un messaggio di errore per ogni errore incontrato! (e potrebbero essere molti!)<br>
    L'ultimo messaggio di errore conterr&agrave; un lista di query che hanno generato errore. Una 'F' prima del numero di query significa che quella query era in un file.<br><br>
    Queste funzioni sono ancora in beta test! Non c'&egrave; garanzia che tutte le query vengano eseguite con successo!";
    break;
    default: $html="Nessun aiuto disponibile.";
}

echo "<tr>\n<td>\n";
if ($filename) echo "<br><div class=\"bold_left\">Aiuto per ".$filename.":</div><br>\n";
echo $html;
echo "</td>\n</tr>\n</table>\n</body>\n</html>";
?>