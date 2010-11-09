<?

//utilità e calcoli MODULE CONFIGURATION 


$shortname="plus";
load_module_language($shortname);

//General Module Definition
$MODULES[$shortname][title]="PLUS";
$MODULES[$shortname][version]="1.0.0";

$MENU[$shortname][0][title]=PLUS_MENU_0;
$MENU[$shortname][0][icon]="utilita4.png";

$MENU[$shortname][0][1][title]=PLUS_MENU_0_1; //backup
$MENU[$shortname][0][1][perm]="r";
$MENU[$shortname][0][1][page]=$CONF[url_base].$CONF[dir_modules]."plus/pages/backup.php";

$MENU[$shortname][0][2][title]=PLUS_MENU_0_2; //calcoli
$MENU[$shortname][0][2][perm]="r";
$MENU[$shortname][0][2][page]=$CONF[url_base]."/plus/calcolatrici/pages/calcolatrici.php?TipoUtCal=8";

	$MENU[$shortname][0][2][1][title]=PLUS_MENU_0_2_1; //codice fiscale
	$MENU[$shortname][0][2][1][perm]="r";
	$MENU[$shortname][0][2][1][page]=$CONF[url_base]."/plus/calcolatrici/pages/calcolatrici.php?TipoUtCal=3"; 

	$MENU[$shortname][0][2][2][title]=PLUS_MENU_0_2_2;//scorporo IVA
	$MENU[$shortname][0][2][2][perm]="r";
	$MENU[$shortname][0][2][2][page]=$CONF[url_base]."/plus/calcolatrici/pages/calcolatrici.php?TipoUtCal=2";

	$MENU[$shortname][0][2][3][title]=PLUS_MENU_0_2_3;//interessi
	$MENU[$shortname][0][2][3][perm]="r";
		$MENU[$shortname][0][2][3][1][title]=PLUS_MENU_0_2_3_1;
		$MENU[$shortname][0][2][3][1][page]=$CONF[url_base]."/plus/calcolatrici/pages/calcolatrici.php?TipoUtCal=4";
		$MENU[$shortname][0][2][3][1][perm]="r";
		$MENU[$shortname][0][2][3][2][title]=PLUS_MENU_0_2_3_2;
		$MENU[$shortname][0][2][3][2][page]=$CONF[url_base]."/plus/calcolatrici/pages/calcolatrici.php?TipoUtCal=5";
		$MENU[$shortname][0][2][3][2][perm]="c";
		$MENU[$shortname][0][2][3][3][title]=PLUS_MENU_0_2_3_3;
		$MENU[$shortname][0][2][3][3][page]=$CONF[url_base]."/plus/calcolatrici/pages/calcolatrici.php?TipoUtCal=6";
		$MENU[$shortname][0][2][3][3][perm]="r";

	$MENU[$shortname][0][2][4][title]=PLUS_MENU_0_2_4;//termini
	$MENU[$shortname][0][2][4][perm]="r";
		$MENU[$shortname][0][2][4][1][title]=PLUS_MENU_0_2_4_1;
		$MENU[$shortname][0][2][4][1][page]=$CONF[url_base]."/plus/calcolatrici/pages/calcolatrici.php?TipoUtCal=8";
		$MENU[$shortname][0][2][4][1][perm]="r";
		$MENU[$shortname][0][2][4][2][title]=PLUS_MENU_0_2_4_2;
		$MENU[$shortname][0][2][4][2][page]=$CONF[url_base]."/plus/calcolatrici/pages/calcolatrici.php?TipoUtCal=7";
		$MENU[$shortname][0][2][4][2][perm]="c";

$MENU[$shortname][0][3][title]=PLUS_MENU_0_3;
$MENU[$shortname][0][3][perm]="r";

	if ($CONF[usa_link1]==true)
	{
	$MENU[$shortname][0][3][1][title]=PLUS_MENU_0_3_1;
	$MENU[$shortname][0][3][1][page]=$CONF[url_base]."/plus/comunicazioni/pages/link1.php";
	$MENU[$shortname][0][3][1][perm]="r";
	}
	if ($CONF[usa_link2]==true)
	{
	$MENU[$shortname][0][3][2][title]=PLUS_MENU_0_3_2;
	$MENU[$shortname][0][3][2][page]=$CONF[url_base]."/plus/comunicazioni/pages/link2.php";
	$MENU[$shortname][0][3][2][perm]="c";
	}
	if ($CONF[usa_link2]==true)
	{
	$MENU[$shortname][0][3][3][title]=PLUS_MENU_0_3_3;
	$MENU[$shortname][0][3][3][page]=$CONF[url_base]."/plus/comunicazioni/pages/link3.php";
	$MENU[$shortname][0][3][3][perm]="r";
	}

?>
