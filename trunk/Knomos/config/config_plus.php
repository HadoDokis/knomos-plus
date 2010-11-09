<?

//  -----------------------------  I M P O S T A Z I O N I   K N O M O S   P L U S   ---------------------------------------

//PRENDE I DATI DALLE IMPOSTAZIONI
//Accede ai db
$host=$CONF[db_host]; 
$user=$CONF[db_user]; 
$password= $CONF[db_pass];
mysql_connect($host,$user,$password); 
mysql_select_db($CONF[db_database]); 
//Forma la query
$sql = 'SELECT usa_link1, label_link1, ico_link1, usa_link2, label_link2, ico_link2, usa_link3, label_link3, ico_link3, usa_tariffario_knomos,  tar_titolo_selettore1,  tar_titolo_selettore2,  tar_titolo_selettore3,  tar_titolo_selettore4,  tar_titolo_selettore5,  tar_titolo_selettore6, fatt_avvocato, fatt_citta_studio, fatt_indirizzo_studio, fatt_codicefiscale, fatt_partitaIVA, fatt_domicilio_fiscale, fatt_data_luogo_nascita, UsaTelefonoIP, UsaCentralino, UsaDbox, dbox_url, dbox_mobile_url, dbox_schedario, dbox_contatto, UsaGmail, UsaGcal, DominioGapps, gmail_url, gmail_new_url, gmail_mobile_url, gapps_url, gapps_new_url, gapps_mobile_url, gapps_service1, gapps_service2, gapps_service3, gcal_url, usa_mail_default, new_mail_default, url_webmail, url_nuova_mail, fin_mail_default, webmail_service1, webmail_service2, webmail_service3, webmail_service4, webmail_service5, calc_autom_prest, div_last_prat
FROM INT_settings where id = 1' ;
$esegui_query=mysql_query($sql) or die("Errore di autenticazione. "); 
$campo=mysql_fetch_array($esegui_query);

//--- imposta le variabili
//storico attività
$CONF[storico_impegni]=1;
$CONF[strike_impegni_fatti]=1;
$CONF[gg_evidenza_scadenze]=10;

//mail
$CONF[usa_mail_default]=$campo['usa_mail_default'];
$CONF[url_webmail]=$campo['url_webmail'];
$CONF[url_nuova_mail]=$campo['url_nuova_mail'];
$CONF[fin_mail_default]=$campo['fin_mail_default'];

//home page

//sezione ultime pratiche
if ($campo['div_last_prat']==1){$CONF[div_last_prat]=true;}else{$CONF[div_last_prat]=false;}

//LINKS
if ($campo['usa_link1']==1){$CONF[usa_link1]=true;}else{$CONF[usa_link1]=false;}
$CONF[label_link1]=$campo['label_link1'];
//$CONF[url_link1]=$campo['url_link1'];
$CONF[ico_link1]=$campo['ico_link1'];
$CONF[pag_link1]=$CONF[url_base]."plus/comunicazioni/pages/link1.php";
if ($campo['usa_link2']==1){$CONF[usa_link2]=true;}else{$CONF[usa_link2]=false;}
$CONF[label_link2]=$campo['label_link2'];
//$CONF[url_link2]=$campo['url_link2'];
$CONF[ico_link2]=$campo['ico_link2'];
$CONF[pag_link2]=$CONF[url_base]."plus/comunicazioni/pages/link2.php";
if ($campo['usa_link3']==1){$CONF[usa_link3]=true;}else{$CONF[usa_link3]=false;}
$CONF[label_link3]=$campo['label_link3'];
//$CONF[url_link3]=$campo['url_link3'];
$CONF[ico_link3]=$campo['ico_link3'];
$CONF[pag_link3]=$CONF[url_base]."plus/comunicazioni/pages/link3.php";

//tariffario
$CONF[usa_tariffario_knomos]=$campo['usa_tariffario_knomos']; //tariffario da usare nei select della pagina aggiungi prestazione
$CONF[calc_autom_prest]=$campo['calc_autom_prest'];
if ($CONF[usa_tariffario_knomos]==true)
{
$CONF[titolo_selettore1]=$campo['tar_titolo_selettore1'];
$CONF[titolo_selettore2]=$campo["tar_titolo_selettore2"];
$CONF[titolo_selettore3]=$campo["tar_titolo_selettore3"];
$CONF[titolo_selettore4]=$campo["tar_titolo_selettore4"];
$CONF[titolo_selettore5]=$campo["tar_titolo_selettore5"];
$CONF[titolo_selettore6]=$campo["tar_titolo_selettore6"];
}
else
{
$CONF[titolo_selettore1]="Diritti nel processo di cognizione";
$CONF[titolo_selettore2]="Diritti nel processo di esecuzione";
$CONF[titolo_selettore3]="Onorari civili";
$CONF[titolo_selettore4]="Onorari stragiudiziali";
$CONF[titolo_selettore5]="Onorari penali";
$CONF[titolo_selettore6]="Correnti";
}

//Fatturazione (questi dati servono per Elenchi/Prestazioni parcelle)
$CONF[fatt_avvocato]=$campo["fatt_avvocato"]; //lasciando il campo = "" prende i dati dell'utente loggato
$CONF[fatt_citta_studio]=$campo["fatt_citta_studio"];
$CONF[fatt_indirizzo_studio]=$campo["fatt_indirizzo_studio"];
$CONF[fatt_codicefiscale]=$campo["fatt_codicefiscale"];
$CONF[fatt_partitaIVA]=$campo["fatt_partitaIVA"];
$CONF[fatt_domicilio_fiscale]=$campo["fatt_domicilio_fiscale"];
$CONF[fatt_data_luogo_nascita]=$campo["fatt_data_luogo_nascita"];



//C o n t a t t i: telefono IP
$CONF[UsaTelefonoIP]=$campo["UsaTelefonoIP"];
$CONF[UsaCentralino]=$campo["UsaCentralino"];

//D R O P B O X
$CONF[UsaDbox]=$campo["UsaDbox"];
$CONF[dbox_url]=$campo["dbox_url"]; // percorso normale
$CONF[dbox_m_url]=$campo["dbox_mobile_url"]; // (percorso per cellulari, consigliato perchè più veloce)
$CONF[dbox_schedario]=$campo["dbox_schedario"];
$CONF[dbox_contatto]=$campo["dbox_contatto"];
//Setta quale delle due url deve essere usata dal sistema
$CONF[dbox_url_used]=$CONF[dbox_m_url];
$CONF[dbox_url_used_schedario]=$CONF[dbox_url_used].$CONF[dbox_schedario];
$CONF[dbox_url_used_contatto]=$CONF[dbox_url_used].$CONF[dbox_contatto];
// COMUNICAZIONI
$CONF[UsaMaildefault]=$campo["usa_mail_default"];

//G O O G L E
//if ($CONF[UsaMaildefault]==1){$CONF[UsaGmail]=1;} else {$CONF[UsaGmail]=0;}
$CONF[UsaGmail]=$campo["UsaGmail"];
$CONF[UsaGcal]=$campo["UsaGcal"];
$DOMINIO=$campo["DominioGapps"]; //Scrivere il nome del dominio (es.: "tizio.it") oppure lasciare in bianco ("")

if ($DOMINIO=="") //Se non si utilizza GoogleApps (si usa Gmail)
{
$CONF[gmail_url]=$campo["gmail_url"];
$CONF[gmail_new_url]=$campo["gmail_new_url"]; //url per inviare nuove mail
$CONF[gmail_m_url]=$campo["gmail_mobile_url"];//Questa è l'url per gmail mobile 
//Setta quale delle due url deve essere usata dal sistema
$CONF[gmail_url_used]=$CONF[gmail_url]; 
$CONF[gcal_url]=$campo["gcal_url"];
}
else //Se invece si utilizza GoogleApps:
{
//$CONF[gmail_url]="https://mail.google.com/a/".$DOMINIO."/?tab=cm#search/"; // Questa è l'url normale
//$CONF[gmail_m_url]="http://mail.google.com/a/".$DOMINIO."/x/2ryyqy343b0l-/?ie=UTF-8&s=q&q=";//Questa è l'url per gmail mobile
//$CONF[gmail_new_url]="http://mail.google.com/a/".$DOMINIO."/?tab=cm#compose"; //url per inviare nuove mail

$CONF[gapps_url]="https://mail.google.com/a/";//$campo["gapps_url"];
$CONF[gmail_url]=$CONF[gapps_url].$DOMINIO."/";

$CONF[gmail_m_url]="http://mail.google.com/a/".$DOMINIO."/x/2ryyqy343b0l-/?ie=UTF-8&s=q&q=";//Questa è l'url per gapps mobile
$CONF[gapps_new_url]=$campo["gapps_new_url"].$DOMINIO; //url per inviare nuove mail


//Setta quale delle due url deve essere usata dal sistema
$CONF[gmail_url_used]=$CONF[gmail_url];
$CONF[gcal_url]="https://www.google.com/calendar/hosted/".$DOMINIO."/render?mog&gl=it"; 
}

//  -----------------------------------------------------------------------------------------------------------------------

?>
