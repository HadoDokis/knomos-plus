<?
//
//  Creative Web FrameWork
//  Italian language
//



//Error Definition
define("FW_ERROR_NOMODCONG", "Формата %MOD% не притежава изискваният файл");
define("FW_ERROR_DBCONNECTION", "Грешка при свързване с База Данни");
define("FW_ERROR_AUTHQUERY", "Грешка при оторизацията");
define("FW_ERROR_SES_NEVER", "Предупреждение: Опитвате се да започнете сесия, въпреки че настройката на конфигурацията е била \"никога\"");
define("FW_ERROR_NOTEMPLATE", "Шаблонът %TEMPL% не съществува във файл %FOLD%");
define("FW_ERROR_NOTEMPLATE", "Страница %PAGE% от шаблон %TEMPL% не съществува във файл %FOLD%");
define("FW_ERROR_NOFORMELEMENT", "Невъзможно да се намери функция, свързана с елемента %ELEMENT%");
define("FW_ERROR_NOFORMERROR", "Невъзможно да се намери функция, свързана с този вид невалидма форма или грешка във формат %ELEMENT%");
define("FW_ERROR_NOFORMTABLE", "Таблицата на Бази Данни не е посочена в тази форма");
define("FW_ERROR_NOFORMWHERE", "Валидно ID не е използвано за актуализиране");
define("FW_ERROR_NOVALIDSIZE", "Размерът, посочен за checkbox/radio не се съдържа от 1 до 3");
define("FW_ERROR_NO_OBJ", "Обектът не е намерен");
define("FW_ERROR_NO_OBJ_FOUND", "Невъзможно да се намери обект, свързан с това ID или ID не е валидно.");
define("FW_ERROR_NO_PERM", "Достъпът до тази Страница е забранен");
define("FW_ERROR_NO_PERM_TXT", "Нямате разрешение да завършите исканата операция.");
define("FW_ERROR_NO_PERM_DEL", "Нямате разрешение да изтриете този обект");


//Form Error Manager
define("FW_ERRORFORM_REGNOVALID","Полето %FIELD% не е валидно");
define("FW_ERRORFORM_MINSTR","Полето %FIELD% трябва да бъде най-малко %VAL% символа");
define("FW_ERRORFORM_MINSEL","Полето %FIELD% трябва да бъде избрано %VAL%");
define("FW_ERRORFORM_MAXSTR","Полето %FIELD% трябва да бъде най-малко %VAL% символа");
define("FW_ERRORFORM_MAXSEL","Полето %FIELD% трябв да бъде избрано %VAL%");
define("FW_ERRORFORM_NOCHK","Полето %FIELD% трябва да бъде избрано");
define("FW_ERRORFORM_TYPECRIT","Полето %FIELD% трябва да съдържа валиден критерий (es. MIN*2 MAX/3 MED.4)");
define("FW_ERRORFORM_TYPEFLOAT","Полето %FIELD% трябва да е валиден номер");
define("FW_ERRORFORM_TYPEMAIL","Полето %FIELD% не съдържа валиден email адрес");
define("FW_ERRORFORM_TYPEURL","Полето %FIELD% не съдържа валиден линк");
define("FW_ERRORFORM_TYPEPHONE","Полето %FIELD% не съдържа валиден телефонен номер");
define("FW_ERRORFORM_TYPEINT","Полето %FIELD% не съдържа пълен номер");
define("FW_ERRORFORM_TSELECT_MULTI","Полето %FIELD% дава резултат (%VAL%)");
define("FW_ERRORFORM_IS_DUPE", "Съществува запис  \"%FIELD%\" с въведената стойност");
define("FW_ERRORFORM_ALFANUM","Полето %FIELD% може да съдържа само букви на цифрови символи");


//List Engine
define("FW_LIST_PREV","Предишна");
define("FW_LIST_NEXT","Следваща");
define("FW_ACTION","Потвърди");

//PERMISSION ENGINE
define("FW_PERM_DEF","Default");
define("FW_PERM_NO","Не");
define("FW_PERM_R","Четене");
define("FW_PERM_C","Създаване");
define("FW_PERM_P","Разрешение");
define("FW_PERM_D","Изтрий");
define("FW_PERM_W","Промени");
define("FW_PERM_REFRESH","Добави разрешение");
define("FW_PERM_OPEN","Отворени права за администрация");
define("FW_PERM_GRP","Групи");
define("FW_PERM_USR","Потребители");
define("FW_PERM_PRA","Предмет");
define("FW_PERM_PRE","Дейности");
define("FW_PERM_SCA","Дневна програма");
define("FW_PERM_DOC","Документи");
define("FW_PERM_CNT","Контакти");
define("FW_PERM_SRCUSRGRP","Търси потребители/ групи");
define("FW_PERM_APPLY","Приложи");

//DATE TEXT

define("CALENDAR_MONTH_1", "Януари");
define("CALENDAR_MONTH_2", "Февруари");
define("CALENDAR_MONTH_3", "Март");
define("CALENDAR_MONTH_4", "Април");
define("CALENDAR_MONTH_5", "Май");
define("CALENDAR_MONTH_6", "Юни");
define("CALENDAR_MONTH_7", "Юли");
define("CALENDAR_MONTH_8", "Август");
define("CALENDAR_MONTH_9", "Септември");
define("CALENDAR_MONTH_10", "Октомври");
define("CALENDAR_MONTH_11", "Ноември");
define("CALENDAR_MONTH_12", "Декември");


//General
define("FW_MODIFY","Промени");
define("FW_NO","Не");
define("FW_LANGUAGE","Език");
define("FW_REQ",'<span class="obbligat-campo">*</span> ');
define("FW_NONE","Нищо");
define("FW_SHOW","Покажи");
define("FW_OPEN","Отвори");
define("FW_CANCEL","Откажи");
define("FW_DELETE","Изтрий");
define("FW_INSERT","Вмъкни");
define("FW_SEARCH","Търси");
define("FW_PERMISSION","Разрешение");
define("FW_TYPE","Вид");
define("FW_HOME","Home Page");
define("FW_DATE","Дата");
define("FW_FILE","Файл");
define("FW_TEXT","Текст");
define("FW_NOTE","Бележка");
define("FW_DESC","Описание");
define("FW_CODE","Код");
define("FW_NAME","Име");
define("FW_LOGIN","Влез");
define("FW_PASSWORD","Парола");
define("FW_FROM","От");
define("FW_TO","До");
define("FW_SUBJ","Предмет");
define("FW_NEWDOC","Нов документ");
define("FW_ANY","Всеки");
define("FW_INSERT","Вмъкни");
define("FW_DEL_OK","Изтрий");
define("FW_DEL_KO","Грешка, обектът не е изтрит");
define("FW_TSEL_OPEN","Отвори Интелигентна Помощ");

define("FW_MANT_LOCK_ALERT","ВНИМАНИЕ: Системата ще се изключи за поддръжка до: ");
define("FW_MANT_LOCK_TITLE","Система Заключена");
define("FW_MANT_LOCK_TEXT","Системата е заключена не непланирана поддръжка.");
define("FW_MANT_LOCK_UNLOCK","Отключи системата");
define("FW_MANT_LOCK_ADMIN","Напиши парола за отключване и възстанови системата за работа за всички потребители.");
define("FW_MANT_LOCK_PWERR","Вмъкнатата парола е грешна");
?>
