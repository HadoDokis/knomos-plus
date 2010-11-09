<?

//PRATICHE MODULE CONFIGURATION 


$shortname="admin";
load_module_language($shortname);

//General Module Definition
$MODULES[$shortname][title]=PRESTAZIONI_TITLE;
$MODULES[$shortname][version]="1.0.0";

//Menu definition for this module
if ($_SESSION[user][admin]==1)
{

	$MENU[$shortname][0][title]=ADMIN_MENU_0;
	$MENU[$shortname][0][icon]="ico_admin_peq.gif";
	$MENU[$shortname][0][1][title]=ADMIN_MENU_0_1;
	$MENU[$shortname][0][1][perm]="r";

	$MENU[$shortname][0][1][1][title]=ADMIN_MENU_0_1_1;
	$MENU[$shortname][0][1][1][page]=$CONF[url_base].$CONF[dir_modules]."$shortname/pages/users_view.php";
	$MENU[$shortname][0][1][1][perm]="r";
	$MENU[$shortname][0][1][2][title]=ADMIN_MENU_0_1_2;
	$MENU[$shortname][0][1][2][page]=$CONF[url_base].$CONF[dir_modules]."$shortname/pages/new_user.php";
	$MENU[$shortname][0][1][2][perm]="c";
	$MENU[$shortname][0][2][title]=ADMIN_MENU_0_2;
	$MENU[$shortname][0][2][perm]="r";
	$MENU[$shortname][0][2][1][title]=ADMIN_MENU_0_2_1;
	$MENU[$shortname][0][2][1][page]=$CONF[url_base].$CONF[dir_modules]."$shortname/pages/groups_view.php";
	$MENU[$shortname][0][2][1][perm]="r";
	$MENU[$shortname][0][2][2][title]=ADMIN_MENU_0_2_2;
	$MENU[$shortname][0][2][2][page]=$CONF[url_base].$CONF[dir_modules]."$shortname/pages/new_group.php";
	$MENU[$shortname][0][2][2][perm]="c";

	$MENU[$shortname][0][3][title]=ADMIN_MENU_0_3;
	$MENU[$shortname][0][3][perm]="r";

		$MENU[$shortname][0][3][1][title]=ADMIN_MENU_0_3_1;
		$MENU[$shortname][0][3][1][perm]="r";
			$MENU[$shortname][0][3][1][1][title]=ADMIN_MENU_0_3_1_1;
			$MENU[$shortname][0][3][1][1][page]=$CONF[url_base].$CONF[dir_modules]."$shortname/pages/ct_view.php";
			$MENU[$shortname][0][3][1][1][perm]="r";
			$MENU[$shortname][0][3][1][2][title]=ADMIN_MENU_0_3_1_2;
			$MENU[$shortname][0][3][1][2][page]=$CONF[url_base].$CONF[dir_modules]."$shortname/pages/new_ct.php";
			$MENU[$shortname][0][3][1][2][perm]="c";
		$MENU[$shortname][0][3][2][title]=ADMIN_MENU_0_3_2;
		$MENU[$shortname][0][3][2][perm]="r";
			$MENU[$shortname][0][3][2][1][title]=ADMIN_MENU_0_3_2_1;
			$MENU[$shortname][0][3][2][1][page]=$CONF[url_base].$CONF[dir_modules]."$shortname/pages/tp_view.php";
			$MENU[$shortname][0][3][2][1][perm]="r";
			$MENU[$shortname][0][3][2][2][title]=ADMIN_MENU_0_3_2_2;
			$MENU[$shortname][0][3][2][2][page]=$CONF[url_base].$CONF[dir_modules]."$shortname/pages/new_tp.php";
			$MENU[$shortname][0][3][2][2][perm]="c";
		$MENU[$shortname][0][3][3][title]=ADMIN_MENU_0_3_3;
			$MENU[$shortname][0][3][3][perm]="r";
			$MENU[$shortname][0][3][3][1][title]=ADMIN_MENU_0_3_3_1;
			$MENU[$shortname][0][3][3][1][page]=$CONF[url_base].$CONF[dir_modules]."$shortname/pages/templ_view.php";
			$MENU[$shortname][0][3][3][1][perm]="r";
			$MENU[$shortname][0][3][3][2][title]=ADMIN_MENU_0_3_3_2;
			$MENU[$shortname][0][3][3][2][page]=$CONF[url_base].$CONF[dir_modules]."$shortname/pages/new_templ.php";
			$MENU[$shortname][0][3][3][2][perm]="c";
		$MENU[$shortname][0][3][4][title]=ADMIN_MENU_0_3_4;
			$MENU[$shortname][0][3][4][perm]="r";
			$MENU[$shortname][0][3][4][1][title]=ADMIN_MENU_0_3_4_1;
			$MENU[$shortname][0][3][4][1][page]=$CONF[url_base].$CONF[dir_modules]."$shortname/pages/tip_varie_view.php";
			$MENU[$shortname][0][3][4][1][perm]="r";
			$MENU[$shortname][0][3][4][2][title]=ADMIN_MENU_0_3_4_2;
			$MENU[$shortname][0][3][4][2][page]=$CONF[url_base].$CONF[dir_modules]."$shortname/pages/new_tip_varie.php";
			$MENU[$shortname][0][3][4][2][perm]="c";
		$MENU[$shortname][0][3][5][title]=ADMIN_MENU_0_3_5;
			$MENU[$shortname][0][3][5][perm]="r";
			$MENU[$shortname][0][3][5][1][title]=ADMIN_MENU_0_3_5_1;
			$MENU[$shortname][0][3][5][1][page]=$CONF[url_base].$CONF[dir_modules]."$shortname/pages/tip_uff_giud_view.php";
			$MENU[$shortname][0][3][5][1][perm]="r";
			$MENU[$shortname][0][3][5][2][title]=ADMIN_MENU_0_3_5_2;
			$MENU[$shortname][0][3][5][2][page]=$CONF[url_base].$CONF[dir_modules]."$shortname/pages/new_tip_uff_giud.php";
			$MENU[$shortname][0][3][5][2][perm]="c";
	$MENU[$shortname][0][4][title]=ADMIN_MENU_0_4;
	$MENU[$shortname][0][4][perm]="r";
		$MENU[$shortname][0][4][1][title]=ADMIN_MENU_0_4_1;
		$MENU[$shortname][0][4][1][perm]="r";
			$MENU[$shortname][0][4][1][1][title]=ADMIN_MENU_0_4_1_1;
			$MENU[$shortname][0][4][1][1][page]=$CONF[url_base].$CONF[dir_modules]."$shortname/pages/pr_std_view.php";
			$MENU[$shortname][0][4][1][1][perm]="r";
			$MENU[$shortname][0][4][1][2][title]=ADMIN_MENU_0_4_1_2;
			$MENU[$shortname][0][4][1][2][page]=$CONF[url_base].$CONF[dir_modules]."$shortname/pages/new_pr_std.php";
			$MENU[$shortname][0][4][1][2][perm]="c";
		$MENU[$shortname][0][4][2][title]=ADMIN_MENU_0_4_2;
		$MENU[$shortname][0][4][2][perm]="r";
			$MENU[$shortname][0][4][2][1][title]=ADMIN_MENU_0_4_2_1;
			$MENU[$shortname][0][4][2][1][page]=$CONF[url_base].$CONF[dir_modules]."$shortname/pages/cal_std_view.php";
			$MENU[$shortname][0][4][2][1][perm]="r";
			$MENU[$shortname][0][4][2][2][title]=ADMIN_MENU_0_4_2_2;
			$MENU[$shortname][0][4][2][2][page]=$CONF[url_base].$CONF[dir_modules]."$shortname/pages/new_cal_std.php";
			$MENU[$shortname][0][4][2][2][perm]="c";
		$MENU[$shortname][0][4][3][title]=ADMIN_MENU_0_4_3;
		$MENU[$shortname][0][4][3][perm]="r";
			$MENU[$shortname][0][4][3][1][title]=ADMIN_MENU_0_4_3_1;
			$MENU[$shortname][0][4][3][1][page]=$CONF[url_base].$CONF[dir_modules]."$shortname/pages/ter_proc_view.php";
			$MENU[$shortname][0][4][3][1][perm]="r";
			$MENU[$shortname][0][4][3][2][title]=ADMIN_MENU_0_4_3_2;
			$MENU[$shortname][0][4][3][2][page]=$CONF[url_base].$CONF[dir_modules]."$shortname/pages/new_ter_proc.php";
			$MENU[$shortname][0][4][3][2][perm]="c";
	$MENU[$shortname][0][5][title]=ADMIN_MENU_0_5;
	$MENU[$shortname][0][5][perm]="r";
		$MENU[$shortname][0][5][1][title]=ADMIN_MENU_0_5_1;
		$MENU[$shortname][0][5][1][perm]="r";
			$MENU[$shortname][0][5][1][1][title]=ADMIN_MENU_0_5_1_1;
			$MENU[$shortname][0][5][1][1][page]=$CONF[url_base].$CONF[dir_modules]."$shortname/pages/ta_view.php";
			$MENU[$shortname][0][5][1][1][perm]="r";
			$MENU[$shortname][0][5][1][2][title]=ADMIN_MENU_0_5_1_2;
			$MENU[$shortname][0][5][1][2][page]=$CONF[url_base].$CONF[dir_modules]."$shortname/pages/new_ta.php";
			$MENU[$shortname][0][5][1][2][perm]="c";
		$MENU[$shortname][0][5][2][title]=ADMIN_MENU_0_5_2;
		$MENU[$shortname][0][5][2][perm]="r";
			$MENU[$shortname][0][5][2][1][title]=ADMIN_MENU_0_5_2_1;
			$MENU[$shortname][0][5][2][1][page]=$CONF[url_base].$CONF[dir_modules]."$shortname/pages/ta_STD_view.php";
			$MENU[$shortname][0][5][2][1][perm]="r";
			$MENU[$shortname][0][5][2][2][title]=ADMIN_MENU_0_5_2_2;
			$MENU[$shortname][0][5][2][2][page]=$CONF[url_base].$CONF[dir_modules]."$shortname/pages/new_ta_STD.php";
			$MENU[$shortname][0][5][2][2][perm]="c";
	$MENU[$shortname][0][6][title]=ADMIN_MENU_0_6;
		$MENU[$shortname][0][6][perm]="r";
		$MENU[$shortname][0][6][1][title]=ADMIN_MENU_0_6_1;
		$MENU[$shortname][0][6][1][page]=$CONF[url_base].$CONF[dir_modules]."$shortname/pages/new_set_home.php?id=1";
		$MENU[$shortname][0][6][1][perm]="c";
		$MENU[$shortname][0][6][2][title]=ADMIN_MENU_0_6_2;
		$MENU[$shortname][0][6][2][page]=$CONF[url_base].$CONF[dir_modules]."$shortname/pages/new_set_prest.php?id=1";
		$MENU[$shortname][0][6][2][perm]="c";
		$MENU[$shortname][0][6][3][title]=ADMIN_MENU_0_6_3;
		$MENU[$shortname][0][6][3][page]=$CONF[url_base].$CONF[dir_modules]."$shortname/pages/new_set_fatt.php?id=1";
		$MENU[$shortname][0][6][3][perm]="c";
		$MENU[$shortname][0][6][4][title]=ADMIN_MENU_0_6_4;
		$MENU[$shortname][0][6][4][page]=$CONF[url_base].$CONF[dir_modules]."$shortname/pages/new_set_dbox.php?id=1";
		$MENU[$shortname][0][6][4][perm]="c";
		$MENU[$shortname][0][6][5][title]=ADMIN_MENU_0_6_5;
		$MENU[$shortname][0][6][5][page]=$CONF[url_base].$CONF[dir_modules]."$shortname/pages/new_set_com.php?id=1";
		$MENU[$shortname][0][6][5][perm]="c";
		$MENU[$shortname][0][6][6][title]=ADMIN_MENU_0_6_6;
		$MENU[$shortname][0][6][6][page]=$CONF[url_base].$CONF[dir_modules]."$shortname/pages/new_set_google.php?id=1";
		$MENU[$shortname][0][6][6][perm]="c";

		$MENU[$shortname][0][6][8][title]=ADMIN_MENU_0_6_8;
		$MENU[$shortname][0][6][8][perm]="r";
			$MENU[$shortname][0][6][8][1][title]=ADMIN_MENU_0_6_8_1;
			$MENU[$shortname][0][6][8][1][page]=$CONF[url_base].$CONF[dir_modules]."$shortname/pages/link_view.php";
			$MENU[$shortname][0][6][8][1][perm]="r";
			$MENU[$shortname][0][6][8][2][title]=ADMIN_MENU_0_6_8_2;
			$MENU[$shortname][0][6][8][2][page]=$CONF[url_base].$CONF[dir_modules]."$shortname/pages/new_link.php";
			$MENU[$shortname][0][6][8][2][perm]="c";

		$MENU[$shortname][0][6][9][title]=ADMIN_MENU_0_6_9;
		$MENU[$shortname][0][6][9][perm]="r";
			$MENU[$shortname][0][6][9][1][title]=ADMIN_MENU_0_6_9_1;
			$MENU[$shortname][0][6][9][1][page]=$CONF[url_base].$CONF[dir_modules]."$shortname/pages/contr_unif_view.php";
			$MENU[$shortname][0][6][9][1][perm]="r";
			$MENU[$shortname][0][6][9][2][title]=ADMIN_MENU_0_6_9_2;
			$MENU[$shortname][0][6][9][2][page]=$CONF[url_base].$CONF[dir_modules]."$shortname/pages/new_contr_unif.php";
			$MENU[$shortname][0][6][9][2][perm]="c";

	$MENU[$shortname][0][7][title]=ADMIN_MENU_0_7;
	$MENU[$shortname][0][7][perm]="p";
	$MENU[$shortname][0][7][page]=$CONF[url_base].$CONF[dir_modules]."$shortname/pages/system_lock.php";
	$MENU[$shortname][0][8][title]=ADMIN_MENU_0_8;
	$MENU[$shortname][0][8][perm]="p";
	$MENU[$shortname][0][8][page]=$CONF[url_base].$CONF[dir_modules]."$shortname/pages/logged_users.php";

	$MENU[$shortname][0][9][title]=ADMIN_MENU_0_9;
	$MENU[$shortname][0][9][perm]="p";
	$MENU[$shortname][0][9][page]=$CONF[url_base].$CONF[dir_modules]."$shortname/pages/open_document.php";

	$MENU[$shortname][0][10][title]=ADMIN_MENU_0_10;
	$MENU[$shortname][0][10][perm]="p";
	$MENU[$shortname][0][10][page]="#";









} else {
	$MENU[$shortname][0][title]=ADMIN_MENU_0_9;
	$MENU[$shortname][0][icon]="ico_admin_peq.gif";
	$MENU[$shortname][0][page]=$CONF[url_base].$CONF[dir_modules]."$shortname/pages/mod_user.php";
	$MENU[$shortname][0][perm]="1";
}



//Specific Permission function
$PERMISSION[$shortname][perm_type]="advanced";
$PERMISSION[$shortname][perm_field]="permessi";
$PERMISSION[$shortname][perm_group_conflict]="2";
$PERMISSION[$shortname][default_permission]="2";




//FORM
$CONF[form_ignoretype]= Array ("page");
?>
