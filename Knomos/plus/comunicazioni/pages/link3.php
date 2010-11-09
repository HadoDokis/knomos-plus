<?
include("../../../framework/framework.php");
//include("../functions.php");
$module="calendar";
//Questo serve per scrivere i titoli

$PAGE[PAGE_INTITLE]=$CONF[label_link3].
'
<iframe  VSPACE="0" name="FrameSel" id="FrSel"  src="sel_link3.php"  width="100%" height="25px" frameborder=0 MARGINWIDTH="0" marginheight="0"> </iframe>
';
$PAGE[TXT_TITLE]=$CONF[label_link3];
$PAGE[PAGE_PICTITLE]=$CONF[ico_link3];


if ($_SESSION[mobile]==true){
	template_init(6); //mobile=6 - normale=2
} 
 else {
	template_init(); //mobile=6 - normale=2
}
	
//template_init(); //mobile=6 - desktop =()

template_define_elements();
ob_start();

?>

<?
	include('../../../config/config.php');
	include('../../../config/config_plus.php');
	$x=0;
	//Accede ai db
	$host=$CONF[db_host]; 
	$user=$CONF[db_user]; 
	$password= $CONF[db_pass];
	mysql_connect($host,$user,$password); 
	mysql_select_db($CONF[db_database]); 
	//Forma la query
	$sql = 'SELECT id, descrizione, url, link, pulsante, target FROM INT_links where link = 3 ORDER BY id' ;
	$esegui_query=mysql_query($sql) or die("Errore di autenticazione. "); 
	while ($campo=mysql_fetch_array($esegui_query))
	{ 
		if ($x==0)
		{
		$url_default=$campo[url];
		$x=$x+1;
		}
	}
 ?> 
      
<?
$PAGE[PAGE_CONTENT] = '

<iframe  VSPACE="0" name="Frame1" id="Fr1"  src='.$url_default.'  width="100%" height="555px" frameborder=0 MARGINWIDTH="0" marginheight="0"> </iframe>
<iframe  VSPACE="0" name="FramePuls" id="FrPuls"  src="puls_link3.php"  width="100%" height="75px" frameborder=0 MARGINWIDTH="0" marginheight="0"> </iframe>
</div>

';
ob_end_clean();
final_render();

?>
