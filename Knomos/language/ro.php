<?  
//
//  Creative Web FrameWork
//  Italian language
//



//Error Definition
define("FW_ERROR_NOMODCONG", "Modulul %MOD% nu conţine un file de definire");
define("FW_ERROR_DBCONNECTION", "Conexiunea la database nu este posibilă");
define("FW_ERROR_AUTHQUERY", "Eroare cu privire la query-ul de autentificare");
define("FW_ERROR_SES_NEVER", "Aviz: Tentativă de iniţializare a sesiunii chiar dacă configuraţia este setată \"never\"");
define("FW_ERROR_NOTEMPLATE", "Template-ul %TEMPL% nu există în folder-ul %FOLD%");
define("FW_ERROR_NOTEMPLATE", "Pagina %PAGE% al template-ului %TEMPL% nu există în folder-ul %FOLD%");
define("FW_ERROR_NOFORMELEMENT", "Nu este posibilă găsirea unei funcţii cu privire la elementul %ELEMENT% al form-ului");
define("FW_ERROR_NOFORMERROR", "Nu este posibilă găsirea unei funcţii cu privire la tipul de eroare %ELEMENT% a form-ului sau este un format eroare invalid");
define("FW_ERROR_NOFORMTABLE", "Nu a fost specificat un tabel al database-ului pentru acest form");
define("FW_ERROR_NOFORMWHERE", "Nu este specificat un ID valid pentru update");
define("FW_ERROR_NOVALIDSIZE", "Mărimea indicată pentru checkbox/radio nu este cuprinsă între 1 şi 3");
define("FW_ERROR_NO_OBJ", "Nici un obiect nu a fost găsit");
define("FW_ERROR_NO_OBJ_FOUND", "Nu a fost posibilă găsirea nici unui obiect cu privre la id-ul specificat sau id invalid.");
define("FW_ERROR_NO_PERM", "Pagină interzisă");
define("FW_ERROR_NO_PERM_TXT", "Nu aveţi permisiunea necesară pentru a efectua operaţiunea dorită.");
define("FW_ERROR_NO_PERM_DEL", "Nu aveţi permisiunea de a elimina acest obiect");


//Form Error Manager
define("FW_ERRORFORM_REGNOVALID","Câmpul %FIELD% nu este valid");
define("FW_ERRORFORM_MINSTR","Câmpul %FIELD% trebuie să aibă cel puţin %VAL% caractere");
define("FW_ERRORFORM_MINSEL","Câmpul %FIELD% trebuie să conţină cel puţin %VAL% opţiune/i");
define("FW_ERRORFORM_MAXSTR","Câmpul %FIELD% trebuie să aibă cel puţin %VAL% caractere");
define("FW_ERRORFORM_MAXSEL","Câmpul %FIELD% trebuie să conţină cel puţin %VAL% opţiune/i");
define("FW_ERRORFORM_NOCHK","Câmpul %FIELD% trebuie să fie selecţionat");
define("FW_ERRORFORM_TYPECRIT","Câmpul %FIELD% trebuie să conţină un criteriu valid (de ex. MIN*2 MAX/3 MED.4)");
define("FW_ERRORFORM_TYPEFLOAT","Câmpul %FIELD% trebuie să fie o valoare decimală");
define("FW_ERRORFORM_TYPEMAIL","Câmpul %FIELD% nu conţine o adresă email validă");
define("FW_ERRORFORM_TYPEURL","Câmpul %FIELD% nu conţine un url valid");
define("FW_ERRORFORM_TYPEPHONE","Câmpul %FIELD% nu conţine un număr telefonic valid");
define("FW_ERRORFORM_TYPEINT","Câmpul %FIELD% nu conţine un număr valid");
define("FW_ERRORFORM_TSELECT_MULTI","Câmpul %FIELD% a generat mai mult de un rezultat (%VAL%)");
define("FW_ERRORFORM_IS_DUPE", "Există deja o înregistrare având ca \"%FIELD%\" valoarea inserată");
define("FW_ERRORFORM_ALFANUM","Câmpul %FIELD% poate conţine doar caractere alfanumerice");


//List Engine
define("FW_LIST_PREV","Precedent");
define("FW_LIST_NEXT","Succesiv");
define("FW_ACTION","Acţiune");

//PERMISSION ENGINE
define("FW_PERM_DEF","Default");
define("FW_PERM_NO","Nu");
define("FW_PERM_R","Lectură");
define("FW_PERM_C","Creare");
define("FW_PERM_P","Permisiune");
define("FW_PERM_D","Anulează");
define("FW_PERM_W","Modifică");
define("FW_PERM_REFRESH","Actualizează Accesul");
define("FW_PERM_OPEN","Deschide gestionarea accesului");
define("FW_PERM_GRP","Grupuri");
define("FW_PERM_USR","Utilizatori");
define("FW_PERM_PRA","Dosar");
define("FW_PERM_PRE","Prestaţii");
define("FW_PERM_SCA","Scadenţe");
define("FW_PERM_DOC","Documente");
define("FW_PERM_CNT","Contacte");
define("FW_PERM_SRCUSRGRP","Caută utilizatori/grupuri");
define("FW_PERM_APPLY","Aplică");

//DATE TEXT

define("CALENDAR_MONTH_1", "Ianuarie");
define("CALENDAR_MONTH_2", "Februarie");
define("CALENDAR_MONTH_3", "Martie");
define("CALENDAR_MONTH_4", "Aprilie");
define("CALENDAR_MONTH_5", "Mai");
define("CALENDAR_MONTH_6", "Iunie");
define("CALENDAR_MONTH_7", "Iulie");
define("CALENDAR_MONTH_8", "August");
define("CALENDAR_MONTH_9", "Septembrie");
define("CALENDAR_MONTH_10", "Octombrie");
define("CALENDAR_MONTH_11", "Noiembrie");
define("CALENDAR_MONTH_12", "Decembrie");


//General
define("FW_MODIFY","Modifică");
define("FW_NO","Nu");
define("FW_LANGUAGE","Limbă");
define("FW_REQ",'<span class="obbligat-campo">*</span> ');
define("FW_NONE","Nimeni");
define("FW_SHOW","Vizualizează");
define("FW_OPEN","Deschide");
define("FW_CANCEL","Anulează");
define("FW_DELETE","Elimină");
define("FW_INSERT","Inserează");
define("FW_SEARCH","Caută");
define("FW_PERMISSION","Acces");
define("FW_TYPE","Tip");
define("FW_HOME","Home Page");
define("FW_DATE","Date");
define("FW_FILE","File");
define("FW_TEXT","Test");
define("FW_NOTE","Note");
define("FW_DESC","Descrieri");
define("FW_CODE","Cod");
define("FW_NAME","Nume");
define("FW_LOGIN","Login");
define("FW_PASSWORD","Parolă");
define("FW_FROM","De la");
define("FW_TO","La");
define("FW_SUBJ","Obiect");
define("FW_NEWDOC","Doc. Nou");
define("FW_ANY","Oricare");
define("FW_INSERT","Inserează");
define("FW_DEL_OK","Eliminare efectuată");
define("FW_DEL_KO","Eroare, obiectul NU a fost eliminat");
define("FW_TSEL_OPEN","Deschide Smart Help");

define("FW_MANT_LOCK_ALERT","ATENŢIE: Sistemul va fi suspendat pentru maintenance la ora: ");
define("FW_MANT_LOCK_TITLE","Sistem Blocat");
define("FW_MANT_LOCK_TEXT","Sistemul este momentan blocat pentru maintenance extraordinar.");
define("FW_MANT_LOCK_UNLOCK","Deblochează sistemul");
define("FW_MANT_LOCK_ADMIN","Introdu parola de deblocare pentru a reda funcţionalitatea sistemului la toţi utilizatorii");
define("FW_MANT_LOCK_PWERR","Parola introdusă nu este corectă");

//TEMPLATE TEXT
define("FW_USER","Utilizator");
define("FW_DOCUMENTS","Documente");
define("FW_CALENDAR","Calendar");
define("FW_IMMINENT","Evenimente");
define("FW_EVENTS","Lucrări");
define("FW_LASTPRAT","Ultimele Dosare");
define("FW_CONTACT","Date");
define("FW_SUPPORT","Asistenţă");
