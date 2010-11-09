<?
//
//  Creative Web FrameWork
//  Italian language
//



//Error Definition
define("FW_ERROR_NOMODCONG", "Das Modul %MOD% enthält keine Definitionsdatei");
define("FW_ERROR_DBCONNECTION", "Die Verbindung zur database wurde unterbrochen");
define("FW_ERROR_AUTHQUERY", "Fehler bei der Authentifizierungsabfrage");
define("FW_ERROR_SES_NEVER", "Achtung: Es wurde versucht, eine Sitzung zu starten, obwohl die Konfigurationseinstellung auf \"never\" gesetzt ist");
define("FW_ERROR_NOTEMPLATE", "Das template %TEMPL% konnte nicht im Verzeichnis %FOLD% gefunden");
define("FW_ERROR_NOTEMPLATE", "Die Seite %PAGE% des template %TEMPL% konnte nicht im Verzeichnis %FOLD% gefunden werden");
define("FW_ERROR_NOFORMELEMENT", "Es konnte keine Funktion gefunden werden, die mit dem Element %ELEMENT% della form??? verknüpft ist");
define("FW_ERROR_NOFORMERROR", "Es konnte keine Funktion gefunden werden, die mit dem Fehlertyp %ELEMENT% della form??? verknüpft ist oder das Fehlerformat ist nicht gültig");
define("FW_ERROR_NOFORMTABLE", "Es ist kein Tabelle der database für dieses form??? festgelegt");
define("FW_ERROR_NOFORMWHERE", "Es ist kein gültiges ID für die Aktualisierung angegeben");
define("FW_ERROR_NOVALIDSIZE", "Die angegebene Größe der checkbox/ des radio button ist nicht zwischen 1 und 3");
define("FW_ERROR_NO_OBJ", "Kein Objekt gefunden");
define("FW_ERROR_NO_OBJ_FOUND", "Es konnte kein Objekt gefunden werden, das mit der angegebenen ID verknüpft ist oder die ID ist ungültig");
define("FW_ERROR_NO_PERM", "Seite nicht erlaubt");
define("FW_ERROR_NO_PERM_TXT", "Sie verfügen nicht über die notwendigen Rechte, um diese Operation auszuführen");
define("FW_ERROR_NO_PERM_DEL", "Sie verfügen nicht über die notwendigen Rechte, um dieses Objekt zu löschen");


//Form Error Manager
define("FW_ERRORFORM_REGNOVALID","Das Feld %FIELD% ist nicht gültig");
define("FW_ERRORFORM_MINSTR","Das Feld %FIELD% muß mindestens %VAL% Zeichen enthalten");
define("FW_ERRORFORM_MINSEL","Das Feld %FIELD% muß mindestens %VAL%  Auswahl(en) enthalten");
define("FW_ERRORFORM_MAXSTR","Das Feld %FIELD% darf nicht länger sein als %VAL% Zeichen");
define("FW_ERRORFORM_MAXSEL","Das Feld %FIELD% darf höchstens %VAL% Auswahl(en) enthalten");
define("FW_ERRORFORM_NOCHK","Das Feld %FIELD% muß ausgewählt werden");
define("FW_ERRORFORM_TYPECRIT","Das Feld %FIELD% muß ein gültiges Kriterium enthalten (z.B. MIN*2 MAX/3 MED.4)");
define("FW_ERRORFORM_TYPEFLOAT","Das Feld %FIELD% muß ein Dezimalwert sein");
define("FW_ERRORFORM_TYPEMAIL","Das Feld %FIELD% enthält keine gültige email-Adresse");
define("FW_ERRORFORM_TYPEURL","Das Feld %FIELD% enthält keine gültige URL");
define("FW_ERRORFORM_TYPEPHONE","Das Feld %FIELD% enthält keine gültige Telefonnummer");
define("FW_ERRORFORM_TYPEINT","Das Feld %FIELD% enthält keine ganze Zahl");
define("FW_ERRORFORM_TSELECT_MULTI","Das Feld %FIELD% hat mehr als einen Wert zurückgegeben (%VAL%)");
define("FW_ERRORFORM_IS_DUPE", "Es existiert bereits ein Datensatz mit \"%FIELD%\" mit dem eingegebenen Wert");
define("FW_ERRORFORM_ALFANUM","Das Feld %FIELD% kann nur alphanumerische Werte beinhalten");


//List Engine
define("FW_LIST_PREV","vorhergend");
define("FW_LIST_NEXT","nachfolgend");
define("FW_ACTION","Aktion");

//PERMISSION ENGINE
define("FW_PERM_DEF","Default");
define("FW_PERM_NO","Nein");
define("FW_PERM_R","Lesen");
define("FW_PERM_C","Schreiben");
define("FW_PERM_P","Rechte");
define("FW_PERM_D","Löschen");
define("FW_PERM_W","Verändern");
define("FW_PERM_REFRESH","Rechte aktualisieren");
define("FW_TNF_REFRESH","Gebührenberechnung aktualisieren");
define("FW_PERM_OPEN","Rechteverwaltung öffnen");
define("FW_PERM_GRP","Gruppen");
define("FW_PERM_USR","Benutzer");
define("FW_PERM_PRA","Akte");
define("FW_PERM_PRE","Tätigkeiten");
define("FW_PERM_SCA","fällige Aufgaben");
define("FW_PERM_DOC","Dokumente");
define("FW_PERM_CNT","Kontakte");
define("FW_PERM_SRCUSRGRP","Suche Benutzer/Gruppen");
define("FW_PERM_APPLY","Anwenden");

//DATE TEXT

define("CALENDAR_MONTH_1", "Januar");
define("CALENDAR_MONTH_2", "Februar");
define("CALENDAR_MONTH_3", "März");
define("CALENDAR_MONTH_4", "April");
define("CALENDAR_MONTH_5", "Mai");
define("CALENDAR_MONTH_6", "Juni");
define("CALENDAR_MONTH_7", "Juli");
define("CALENDAR_MONTH_8", "August");
define("CALENDAR_MONTH_9", "September");
define("CALENDAR_MONTH_10", "Oktober");
define("CALENDAR_MONTH_11", "November");
define("CALENDAR_MONTH_12", "Dezember");


//General
define("FW_MODIFY","Verändern");
define("FW_NO","Nein");
define("FW_LANGUAGE","Sprachen");
define("FW_REQ",'<span class="obbligat-campo">*</span> ');
define("FW_NONE","Keine");
define("FW_SHOW","Anzeigen");
define("FW_OPEN","╓Öffnen");
define("FW_CANCEL","Abbrechen");
define("FW_DELETE","Löschen");
define("FW_INSERT","Einfügen");
define("FW_SEARCH","Suchen");
define("FW_PERMISSION","Rechte");
define("FW_TYPE","Typ");
define("FW_HOME","Homepage");
define("FW_DATE","Daten");
define("FW_FILE","Datei");
define("FW_TEXT","Text");
define("FW_NOTE","Notiz");
define("FW_DESC","Beschreibung");
define("FW_CODE","Code");
define("FW_NAME","Name");
define("FW_LOGIN","Login");
define("FW_PASSWORD","Passwort");
define("FW_FROM","Von");
define("FW_TO","Bis");
define("FW_SUBJ","Objekt");
define("FW_NEWDOC","Neues Dok.");
define("FW_ANY","Beliebiges");
define("FW_INSERT","Einfügen");
define("FW_DEL_OK","Löschung erfolgt");
define("FW_DEL_KO","Fehler, Objekt NICHT gelöscht");
define("FW_TSEL_OPEN","Öffnen Smart Hilfe");

define("FW_MANT_LOCK_ALERT","ACHTUNG: Das System wird wegen Wartungsarbeiten um ... Uhr heruntergefahren: ");
define("FW_MANT_LOCK_TITLE","Systemstillstand");
define("FW_MANT_LOCK_TEXT","Das System ist wegen außergewöhnlicher Wartung heruntergefahren.");
define("FW_MANT_LOCK_UNLOCK","System entsperren");
define("FW_MANT_LOCK_ADMIN","Passwort ... eingeben, um das System erneut für alle Benutzer verfügbar/funktionsfähig/operativ zu machen.");
define("FW_MANT_LOCK_PWERR","Das eingegebene Passwort ist falsch");

//TEMPLATE TEXT
define("FW_USER","Benutzer");
define("FW_DOCUMENTS","Dokumente");
define("FW_CALENDAR","Kalender");
define("FW_IMMINENT","bevorstehende Ereignisse");
define("FW_EVENTS","Aufgaben");
define("FW_LASTPRAT","aufgerufene Akten");
define("FW_CONTACT","Visitenkarten");
define("FW_SUPPORT","Hilfe");
?>
