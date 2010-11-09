<?
//
//  Creative Web FrameWork
//  Italian language
//



//Error Definition
define("FW_ERROR_NOMODCONG", "The module %MOD% does not find the file required");
define("FW_ERROR_DBCONNECTION", "Database connection error");
define("FW_ERROR_AUTHQUERY", "Error during autentication");
define("FW_ERROR_SES_NEVER", "Warning: Trying to start a session while the configuaration setup is \"never\"");
define("FW_ERROR_NOTEMPLATE", "The template %TEMPL% doesn't exist %FOLD%");
define("FW_ERROR_NOTEMPLATE", "The page %PAGE% from the template %TEMPL% doesn't exist in the file %FOLD%");
define("FW_ERROR_NOFORMELEMENT", "Impossible to find a function associated with the form element %ELEMENT%");
define("FW_ERROR_NOFORMERROR", "Impossible to find a function associeted with this error or error unknown %ELEMENT%");
define("FW_ERROR_NOFORMTABLE", "The database table is not indicated in this form");
define("FW_ERROR_NOFORMWHERE", "A valid ID has not been used for this update");
define("FW_ERROR_NOVALIDSIZE", "The size indicated for the radio checkbox is not comprised between 1 to 3");
define("FW_ERROR_NO_OBJ", "No Object Found");
define("FW_ERROR_NO_OBJ_FOUND", "Impossible to find an object connected to this ID or invalid ID");
define("FW_ERROR_NO_PERM", "Page access denied");
define("FW_ERROR_NO_PERM_TXT", "You do not have permission to complete the requested operation");
define("FW_ERROR_NO_PERM_DEL", "You do not have permission to delete this object");


//Form Error Manager
define("FW_ERRORFORM_REGNOVALID","The field %FIELD% is not valid");
define("FW_ERRORFORM_MINSTR","The field %FIELD% must be at least %VAL% characters");
define("FW_ERRORFORM_MINSEL","The field %FIELD% must be choosen %VAL%");
define("FW_ERRORFORM_MAXSTR","The field %FIELD% must be at least %VAL% characters");
define("FW_ERRORFORM_MAXSEL","The field %FIELD% must be choosen %VAL%");
define("FW_ERRORFORM_NOCHK","The field %FIELD% must be selected");
define("FW_ERRORFORM_TYPECRIT","The field %FIELD% must contain valid criteria (es. MIN*2 MAX/3 MED.4)");
define("FW_ERRORFORM_TYPEFLOAT","The field %FIELD% must be a valid number");
define("FW_ERRORFORM_TYPEMAIL","The field %FIELD% does not contain a valid e-mail address");
define("FW_ERRORFORM_TYPEURL","The field %FIELD% does not contain a valid URL");
define("FW_ERRORFORM_TYPEPHONE","The field %FIELD% does not contain a valid phone number");
define("FW_ERRORFORM_TYPEINT","The field %FIELD% does not contain a complete number");
define("FW_ERRORFORM_TSELECT_MULTI","The field %FIELD% has produced a result (%VAL%)");
define("FW_ERRORFORM_IS_DUPE", "There is already a record \"%FIELD%\" with the value indicated");
define("FW_ERRORFORM_ALFANUM","The field %FIELD% can only contain alphanumeric characters");


//List Engine
define("FW_LIST_PREV","Previous");
define("FW_LIST_NEXT","Next");
define("FW_ACTION","Action");

//PERMISSION ENGINE
define("FW_PERM_DEF","Default");
define("FW_PERM_NO","No");
define("FW_PERM_R","Reading");
define("FW_PERM_C","Creation");
define("FW_PERM_P","Permission");
define("FW_PERM_D","Delete");
define("FW_PERM_W","Modify");
define("FW_PERM_REFRESH","Add permission");
define("FW_PERM_OPEN","Open permission administration");
define("FW_PERM_GRP","Groups");
define("FW_PERM_USR","Users");
define("FW_PERM_PRA","Matter");
define("FW_PERM_PRE","Activities");
define("FW_PERM_SCA","To-do List");
define("FW_PERM_DOC","Documents");
define("FW_PERM_CNT","Contacts");
define("FW_PERM_SRCUSRGRP","Search users/groups");
define("FW_PERM_APPLY","Apply");

//DATE TEXT

define("CALENDAR_MONTH_1", "January");
define("CALENDAR_MONTH_2", "February");
define("CALENDAR_MONTH_3", "March");
define("CALENDAR_MONTH_4", "April");
define("CALENDAR_MONTH_5", "May");
define("CALENDAR_MONTH_6", "June");
define("CALENDAR_MONTH_7", "July");
define("CALENDAR_MONTH_8", "August");
define("CALENDAR_MONTH_9", "September");
define("CALENDAR_MONTH_10", "October");
define("CALENDAR_MONTH_11", "November");
define("CALENDAR_MONTH_12", "December");


//General
define("FW_MODIFY","Modify");
define("FW_NO","No");
define("FW_LANGUAGE","Language");
define("FW_REQ",'<span class="obbligat-campo">*</span> ');
define("FW_NONE","None");
define("FW_SHOW","View");
define("FW_OPEN","Open");
define("FW_CANCEL","Cancel");
define("FW_DELETE","Delete");
define("FW_INSERT","Insert");
define("FW_SEARCH","Search");
define("FW_PERMISSION","Permission");
define("FW_TYPE","Type");
define("FW_HOME","Home Page");
define("FW_DATE","Date");
define("FW_FILE","File");
define("FW_TEXT","Text");
define("FW_NOTE","Note");
define("FW_DESC","Description");
define("FW_CODE","Code");
define("FW_NAME","Name");
define("FW_LOGIN","Login");
define("FW_PASSWORD","Password");
define("FW_FROM","From");
define("FW_TO","To");
define("FW_SUBJ","Subject");
define("FW_NEWDOC","New Document");
define("FW_ANY","Any");
define("FW_INSERT","Insert");
define("FW_DEL_OK","Deleted");
define("FW_DEL_KO","Error, object not deleted");
define("FW_TSEL_OPEN","Open Smart Help");
define("FW_MOVE","Move");
define("FW_MANT_LOCK_ALERT","ATTENZIONE: The system will be suspended for maintenance until: ");
define("FW_MANT_LOCK_TITLE","System locked");
define("FW_MANT_LOCK_TEXT","The system is locked for unscheduled maintenance.");
define("FW_MANT_LOCK_UNLOCK","Unlock the system");
define("FW_MANT_LOCK_ADMIN","Input password to unlock the system and restore full operation for all users.");
define("FW_MANT_LOCK_PWERR","The password typed is incorrect");

//TEMPLATE TEXT
define("FW_USER","User");
define("FW_DOCUMENTS","Documents");
define("FW_CALENDAR","Calendar");
define("FW_IMMINENT","Imminent Events");
define("FW_EVENTS","Entire Agenda");
define("FW_LASTPRAT","Last Matters Accessed");
define("FW_CONTACT","Contacts");
define("FW_SUPPORT","Support");
define("FW_DOCUMENTS","Documents");
define("FW_CALENDAR","Calendar");
define("FW_IMMINENT","Imminent");

define("FW_MANT_LOCK_ALERT","ATTENZIONE: The system will be suspended for maintenence until: ");
define("FW_MANT_LOCK_TITLE","System locked");
define("FW_MANT_LOCK_TEXT","The system is locked for unscheduled maintenence.");
define("FW_MANT_LOCK_UNLOCK","Unlock the system");
define("FW_MANT_LOCK_ADMIN","Input password to unlock and restore the system to operative for all users.");
define("FW_MANT_LOCK_PWERR","The password inserted is incorrect");
?>
