<?
//
//  Creative Web FrameWork
//  Italian language
//



//Error Definition
define("FW_ERROR_NOMODCONG", "Obrazac %MOD% ne sadrzi file definicije");
define("FW_ERROR_DBCONNECTION", "Spoj sa  database-om neuspesan");
define("FW_ERROR_AUTHQUERY", "Greska u query-ju autenticnosti");
define("FW_ERROR_SES_NEVER", "Obavestenje:Pokusaj inicijacije jedne sekcije iako je sett-up konfiguracije \"never\"");
define("FW_ERROR_NOTEMPLATE", "Il template %TEMPL% ne postoji u fajlu %FOLD%");
define("FW_ERROR_NOTEMPLATE", "Stranica %PAGE% od template %TEMPL% ne postoji u fajlu %FOLD%");
define("FW_ERROR_NOFORMELEMENT", "Nemoguce pronaci jednu funkciju povezanu sa elementom %ELEMENT% od form");
define("FW_ERROR_NOFORMERROR", "Nemoguce pronaci jednu funkciju povezanu sa tipom greske %ELEMENT% od form-a ili format greske ne vazeci");
define("FW_ERROR_NOFORMTABLE", "Nije oznacena tabela od database za ovaj form");
define("FW_ERROR_NOFORMWHERE", "Nije oznacen ID  validan za azuriranje");
define("FW_ERROR_NOVALIDSIZE", "Size oznacen za checkbox/radio nije obuhvacen izmedju 1 e 3");
define("FW_ERROR_NO_OBJ", "Nijedan pronadjen predmet");
define("FW_ERROR_NO_OBJ_FOUND", "Nemoguce pronaci bilo kakav predmet povezan sa specificnim 'id-em ili ne vazeci id.");
define("FW_ERROR_NO_PERM", "Zabranjena stranica");
define("FW_ERROR_NO_PERM_TXT", "Ne postoji dozvola potrebna za izvrsenje zahtevane operacije");
define("FW_ERROR_NO_PERM_DEL", "Ne postoji dozvola za eliminaciju ovog predmeta");


//Form Error Manager
define("FW_ERRORFORM_REGNOVALID","Polje %FIELD% ne vazece");
define("FW_ERRORFORM_MINSTR","Polje %FIELD% mora biti dugo najmanje %VAL% karaktera");
define("FW_ERRORFORM_MINSEL","Polje %FIELD% mora imati najmanje %VAL% izbor/e");
define("FW_ERRORFORM_MAXSTR","Polje %FIELD% mora imati najmanje %VAL% karakter");
define("FW_ERRORFORM_MAXSEL","Polje %FIELD% mora sadrzati najvise %VAL% izbor/e");
define("FW_ERRORFORM_NOCHK","Polje %FIELD% mora biti izabrano");
define("FW_ERRORFORM_TYPECRIT","Polje %FIELD% mora sadrzati jedan validan kriterijum  (es. MIN*2 MAX/3 MED.4)");
define("FW_ERRORFORM_TYPEFLOAT","Polje %FIELD% mora biti jedna decimalna vrednost");
define("FW_ERRORFORM_TYPEMAIL","Polje %FIELD% ne sadrzi validnu e-mail adresu");
define("FW_ERRORFORM_TYPEURL","Polje %FIELD% ne sadrzi validan url");
define("FW_ERRORFORM_TYPEPHONE","Polje %FIELD% ne sadrzi validan telefonski broj");
define("FW_ERRORFORM_TYPEINT","Polje  %FIELD% ne sadrzi ceo broj");
define("FW_ERRORFORM_TSELECT_MULTI","Polje %FIELD% dalo je vise od jednog resultata (%VAL%)");
define("FW_ERRORFORM_IS_DUPE", "Postoji vec jedan record kao \"%FIELD%\" sa upisanom vrednoscu");
define("FW_ERRORFORM_ALFANUM","Polje %FIELD% moze da sadrzi samo alfa-numericke karaktere");


//List Engine
define("FW_LIST_PREV","Prethodni");
define("FW_LIST_NEXT","Sledeci");
define("FW_ACTION","Akcija");

//PERMISSION ENGINE
define("FW_PERM_DEF","Default");
define("FW_PERM_NO","No");
define("FW_PERM_R","Citanje");
define("FW_PERM_C","Kreacija");
define("FW_PERM_P","Dozvole");
define("FW_PERM_D","Ponistavanje.");
define("FW_PERM_W","Izmene");
define("FW_PERM_REFRESH","Azuriranje dozvola");
define("FW_PERM_OPEN","Otvoriti upravljanje dozvolama ");
define("FW_PERM_GRP","Grupe");
define("FW_PERM_USR","Korisnici");
define("FW_PERM_PRA","Praksa");
define("FW_PERM_PRE","Prestacije");
define("FW_PERM_SCA","Rokovi");
define("FW_PERM_DOC","Dokumenti");
define("FW_PERM_CNT","Kontakti");
define("FW_PERM_SRCUSRGRP","Trazi korisnike/grupe");
define("FW_PERM_APPLY","Primeni");

//DATE TEXT

define("CALENDAR_MONTH_1", "Januar");
define("CALENDAR_MONTH_2", "Februar");
define("CALENDAR_MONTH_3", "Mart");
define("CALENDAR_MONTH_4", "April");
define("CALENDAR_MONTH_5", "Maj");
define("CALENDAR_MONTH_6", "Jun");
define("CALENDAR_MONTH_7", "Jul");
define("CALENDAR_MONTH_8", "Avgust");
define("CALENDAR_MONTH_9", "Septembar");
define("CALENDAR_MONTH_10", "Oktobar");
define("CALENDAR_MONTH_11", "Novembar");
define("CALENDAR_MONTH_12", "Decembar");


//General
define("FW_MODIFY","Promena");
define("FW_NO","Ne");
define("FW_LANGUAGE","Jezik");
define("FW_REQ",'<span class="obavezno polje">*</span> ');
define("FW_NONE","Niko");
define("FW_SHOW","Prikazi");
define("FW_OPEN","Otvori");
define("FW_CANCEL","Izbrisi");
define("FW_DELETE","Ponisti");
define("FW_INSERT","Ubaci");
define("FW_SEARCH","Trazi");
define("FW_PERMISSION","Dozvola");
define("FW_TYPE","Tip");
define("FW_HOME","Home Page");
define("FW_DATE","Datum");
define("FW_FILE","File");
define("FW_TEXT","Tekst");
define("FW_NOTE","Nota");
define("FW_DESC","Opis");
define("FW_CODE","Kod");
define("FW_NAME","Ime");
define("FW_LOGIN","Login");
define("FW_PASSWORD","Lozinka");
define("FW_FROM","Od");
define("FW_TO","Za");
define("FW_SUBJ","Predmet");
define("FW_NEWDOC","Novi Dok.");
define("FW_ANY","Bilo koji");
define("FW_INSERT","Ubaci");
define("FW_DEL_OK","Izvrsena elimiacija");
define("FW_DEL_KO","Greska, predmet Nije eliminisan");
define("FW_TSEL_OPEN","Otvori Smart Help");

define("FW_MANT_LOCK_ALERT","Paznja: Sistem ce biti suspendovan zbog odrzavanja u to i to vreme: ");
define("FW_MANT_LOCK_TITLE","Blokiran sistem");
define("FW_MANT_LOCK_TEXT","Sistem je trenutno blokiran zbog vanrednog odrzavanja.");
define("FW_MANT_LOCK_UNLOCK","Odblokiraj sistem");
define("FW_MANT_LOCK_ADMIN","Napisi lozinku odblokiranja kako bi se povratila operativnost sistema svim korisnicima.");
define("FW_MANT_LOCK_PWERR","Pogresna lozinka");
?>
