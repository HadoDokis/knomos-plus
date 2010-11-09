<?

//Dati della pratica
$idP=ref_prat;  //ok
$LISTS[pratiche][2]["sql_select"]="SELECT * FROM pratiche p, calendar m WHERE id = .$idP";
$curia=pr_comp_desc;
$luogocuria=pr_luogo_uff_giud;
$giud=pr_giudice;


//PROVEDIMENTI RESTRITTIVI
$LISTS[calendar][6]["sql_select"]="SELECT * FROM pratiche p, calendar m WHERE  p.id=m.ref_prat AND m.ref_prat=".$_GET[id];
$LISTS[calendar][6]["options"]="perpage::20||defordfield::day||defordtype::asc||defordfield2::time||defordtype2::desc||exp::0";
$LISTS[calendar][6]["titles"]=" ||".CALENDAR_ADATE_FROM."::ord||".CALENDAR_ADATE_TO."||".CALENDAR_ATYPE."||".CALENDAR_ADESC."||".FW_CODE."||".CALENDAR_REF_PRATICA."||".CALENDAR_USERS;
$LISTS[calendar][6]["fields"]="note::func=>calendar_note_pic||day::date||dayend::date||type_app||title::linkid=>".$CONF[url_base].$CONF[dir_modules]."calendar/pages/appunt_show.php?id=%ID%||codice::func=>calendar_codice||ref_prat::func=>calendar_format_prat||calendar_operator::func=>calendar_shortoper";
$LISTS[calendar][6]["action"]="id;;".FW_SHOW.";;".$CONF[url_base].$CONF[dir_modules]."calendar/pages/appunt_show.php?id=%ID%||id;;".FW_MODIFY.";;".$CONF[url_base].$CONF[dir_modules]."calendar/pages/new_app.php?id=%ID%||id;;".FW_DELETE.";;".$CONF[url_base].$CONF[dir_modules]."calendar/pages/app_view.php?action=del&id=%ID%";


//Ricerca impegni
if($CONF[storico_impegni]==1)
{
$LISTS[calendar][0]["sql_select"]="SELECT * FROM calendar WHERE %[PERM]% ";
$LISTS[calendar][0]["options"]="perpage::50||defordfield::day||defordtype::asc||defordfield2::time||defordtype2::asc||exp::0";
$LISTS[calendar][0]["titles"]=" ||".CALENDAR_ADATE."::ord||".CALENDAR_ATIME."||".CALENDAR_ATYPE."||".CALENDAR_CURIA."||".CALENDAR_LUOGO_CURIA."||".CALENDAR_GIUDICE."||".PRATICHE_PM."||".CALENDAR_IMPEGNO."||".FW_CODE."||".CALENDAR_REF_PRATICA."||".CALENDAR_USERS."||".CALENDAR_PROVENIENZA;
$LISTS[calendar][0]["fields"]="note::func=>calendar_note_pic||day::func=>calendar_data||time::func=>calendar_ora||type_app::func=>calendar_tipo||cal_comp_desc::func=>calendar_curia||cal_luogo::func=>calendar_luogo||cal_giudice::func=>calendar_giudice||".$pm."::func=>calendar_pm_avv"."||title::func=>calendar_format_impegno||codice::func=>calendar_codice||ref_prat::func=>calendar_format_prat||calendar_operator::func=>calendar_shortoper||provenienza::func=>calendar_format_prov";
//$LISTS[calendar][0]["fields"]="note::func=>calendar_note_pic||day::date||time||type_app||cal_comp_desc::func=>calendar_curia||cal_luogo::func=>calendar_luogo||cal_giudice::func=>calendar_giudice||title::linkid=>".$CONF[url_base].$CONF[dir_modules]."calendar/pages/appunt_show.php?id=%ID%||codice||calendar_operator::func=>calendar_shortoper||ref_prat::func=>calendar_format_prat||provenienza::func=>calendar_format_prov";

//$LISTS[calendar][0]["fields"]="note::func=>calendar_note_pic||day::date||time||type_app||$curia||$luogocuria||$giud||title::linkid=>".$CONF[url_base].$CONF[dir_modules]."calendar/pages/appunt_show.php?id=%ID%||codice||calendar_operator::func=>calendar_shortoper||ref_prat::func=>calendar_format_prat||provenienza::func=>calendar_format_prov";
}
else
{
$LISTS[calendar][0]["sql_select"]="SELECT * FROM calendar WHERE %[PERM]% ";
$LISTS[calendar][0]["options"]="perpage::50||defordfield::day||defordtype::asc||defordfield2::time||defordtype2::asc||exp::0";
$LISTS[calendar][0]["titles"]=" ||".CALENDAR_ADATE."::ord||".CALENDAR_ATIME."||".CALENDAR_ATYPE."||".CALENDAR_CURIA."||".CALENDAR_LUOGO_CURIA."||".CALENDAR_GIUDICE."||".PRATICHE_PM."||".CALENDAR_IMPEGNO."||".FW_CODE."||".CALENDAR_REF_PRATICA."||".CALENDAR_USERS;
$LISTS[calendar][0]["fields"]="note::func=>calendar_note_pic||day::func=>calendar_data||time::func=>calendar_ora||type_app::func=>calendar_tipo||cal_comp_desc::func=>calendar_curia||cal_luogo::func=>calendar_luogo||cal_giudice::func=>calendar_giudice||".$pm."::func=>calendar_pm_avv"."||title::func=>calendar_format_impegno||codice::func=>calendar_codice||ref_prat::func=>calendar_format_prat||calendar_operator::func=>calendar_shortoper";

//$LISTS[calendar][0]["titles"]=" ||".CALENDAR_ADATE."::ord||".CALENDAR_ATIME."::ord||".CALENDAR_ATYPE."||".CALENDAR_CURIA."||".CALENDAR_LUOGO_CURIA."||".CALENDAR_GIUDICE."||".CALENDAR_ADESC."::ord||".FW_CODE."::ord||".CALENDAR_USERS."||".CALENDAR_REF_PRATICA."::ord";
$LISTS[calendar][0]["fields"]="note::func=>calendar_note_pic||day::date||time||type_app||$curia||$luogocuria||$giud||title::linkid=>".$CONF[url_base].$CONF[dir_modules]."calendar/pages/appunt_show.php?id=%ID%||codice::func=>calendar_codice||calendar_operator::func=>calendar_shortoper||ref_prat::func=>calendar_format_prat";
}



// ????

$LISTS[calendar][1]["sql_select"]="SELECT * FROM calendar WHERE %[PERM]% ";
$LISTS[calendar][1]["options"]="perpage::10000||defordfield::day||defordtype::asc||defordfield2::time||defordtype2::asc||exp::0";
$LISTS[calendar][1]["titles"]=CALENDAR_ADATE."||".CALENDAR_ATIME."||".CALENDAR_ATYPE."||".CALENDAR_ADESC."||".FW_CODE."||".CALENDAR_USERS."||".CALENDAR_REF_PRATICA;
$LISTS[calendar][1]["fields"]="day::date||time||type_app||title||codice::func=>calendar_codice||calendar_operator::func=>calendar_shortoper||ref_prat::[SELECT * FROM pratiche WHERE id='%ID%';;pr_codice]";



//LISTA IMPEGNI NELLA SCHEDA PRATICHE

if($CONF[storico_impegni]==1)
{
$LISTS[calendar][3]["sql_select"]="SELECT * FROM pratiche p, calendar m WHERE  p.id=m.ref_prat AND m.ref_prat=".$_GET[id];
$LISTS[calendar][3]["options"]="perpage::20||defordfield::day||defordtype::asc||defordfield2::time||defordtype2::desc||exp::0";
$LISTS[calendar][3]["titles"]=" ||".CALENDAR_ADATE."::ord||".CALENDAR_ATIME."||".CALENDAR_ATYPE."||".CALENDAR_CURIA."||".CALENDAR_LUOGO_CURIA."||".CALENDAR_GIUDICE."||".PRATICHE_PM."||".CALENDAR_IMPEGNO."||".FW_CODE."||".CALENDAR_USERS."||".CALENDAR_PROVENIENZA;
$LISTS[calendar][3]["fields"]="note::func=>calendar_note_pic||day::func=>calendar_data||time::func=>calendar_ora||type_app::func=>calendar_tipo||cal_comp_desc::func=>calendar_curia||cal_luogo::func=>calendar_luogo||cal_giudice::func=>calendar_giudice||".$pm."::func=>calendar_pm_avv"."||title::func=>calendar_format_impegno||codice::func=>calendar_codice||calendar_operator::func=>calendar_shortoper||provenienza::func=>calendar_format_prov";

//$LISTS[calendar][3]["fields"]="note::func=>calendar_note_pic||day::date||time||type_app||$curia||$luogocuria||$giud||title::linkid=>".$CONF[url_base].$CONF[dir_modules]."calendar/pages/appunt_show.php?id=%ID%||codice||calendar_operator::func=>calendar_shortoper||ref_prat::func=>calendar_format_prat||provenienza::func=>calendar_format_prov";
$LISTS[calendar][3]["action"]="id;;".FW_SHOW.";;".$CONF[url_base].$CONF[dir_modules]."calendar/pages/appunt_show.php?id=%ID%||id;;".FW_MODIFY.";;".$CONF[url_base].$CONF[dir_modules]."calendar/pages/new_app.php?id=%ID%||id;;".FW_DELETE.";;".$CONF[url_base].$CONF[dir_modules]."calendar/pages/app_view.php?action=del&id=%ID%";
}
else
{
$LISTS[calendar][3]["sql_select"]="SELECT * FROM pratiche p, calendar m WHERE  p.id=m.ref_prat AND m.ref_prat=".$_GET[id];
$LISTS[calendar][3]["options"]="perpage::20||defordfield::day||defordtype::asc||defordfield2::time||defordtype2::desc||exp::0";
$LISTS[calendar][3]["titles"]=" ||".CALENDAR_ADATE."::ord||".CALENDAR_ATIME."||".CALENDAR_ATYPE."||".CALENDAR_CURIA."||".CALENDAR_LUOGO_CURIA."||".CALENDAR_GIUDICE."||".PRATICHE_PM."||".CALENDAR_IMPEGNO."||".FW_CODE."||".CALENDAR_USERS;
$LISTS[calendar][3]["fields"]="note::func=>calendar_note_pic||day::func=>calendar_data||time::func=>calendar_ora||type_app::func=>calendar_tipo||cal_comp_desc::func=>calendar_curia||cal_luogo::func=>calendar_luogo||cal_giudice::func=>calendar_giudice||".$pm."::func=>calendar_pm_avv"."||title::func=>calendar_format_impegno||codice::func=>calendar_codice||calendar_operator::func=>calendar_shortoper";

//$LISTS[calendar][3]["fields"]="note::func=>calendar_note_pic||day::date||time||type_app||$curia||$luogocuria||$giud||title::linkid=>".$CONF[url_base].$CONF[dir_modules]."calendar/pages/appunt_show.php?id=%ID%||codice||calendar_operator::func=>calendar_shortoper||ref_prat::func=>calendar_format_prat";
$LISTS[calendar][3]["action"]="id;;".FW_SHOW.";;".$CONF[url_base].$CONF[dir_modules]."calendar/pages/appunt_show.php?id=%ID%||id;;".FW_MODIFY.";;".$CONF[url_base].$CONF[dir_modules]."calendar/pages/new_app.php?id=%ID%||id;;".FW_DELETE.";;".$CONF[url_base].$CONF[dir_modules]."calendar/pages/app_view.php?action=del&id=%ID%";
}

//HOME: TUTTI

$LISTS[calendar][2]["sql_select"]="SELECT * FROM pratiche p, calendar m WHERE (operator LIKE '".$_SESSION[fw_userid].",,%' OR operator LIKE '".$_SESSION[fw_userid]."' OR operator LIKE '%,,".$_SESSION[fw_userid]."' OR operator LIKE '%,,".$_SESSION[fw_userid].",,%') AND p.id=m.ref_prat and m.done=0";
$LISTS[calendar][2]["options"]="perpage::20||defordfield::day||defordtype::asc||defordfield2::time||defordtype2::desc||exp::0";
$LISTS[calendar][2]["titles"]=" ||".CALENDAR_ADATE."::ord||".CALENDAR_ATIME."||".CALENDAR_ATYPE."||".CALENDAR_CURIA."||".CALENDAR_LUOGO_CURIA."||".CALENDAR_GIUDICE."||".PRATICHE_PM."||".CALENDAR_IMPEGNO."||".FW_CODE."||".CALENDAR_REF_PRATICA."||".CALENDAR_USERS;
$LISTS[calendar][2]["fields"]="note::func=>calendar_note_pic||day::func=>calendar_data||time::func=>calendar_ora||type_app::func=>calendar_tipo||cal_comp_desc::func=>calendar_curia||cal_luogo::func=>calendar_luogo||cal_giudice::func=>calendar_giudice||".$pm."::func=>calendar_pm_avv"."||title::func=>calendar_format_impegno||codice::func=>calendar_codice||ref_prat::func=>calendar_format_prat||calendar_operator::func=>calendar_shortoper";
//$LISTS[calendar][2]["fields"]="note::func=>calendar_note_pic||day::func=>calendar_data||time::func=>calendar_ora||type_app::func=>calendar_tipo||cal_comp_desc::func=>calendar_curia||cal_luogo::func=>calendar_luogo||cal_giudice::func=>calendar_giudice||".$pm."::func=>calendar_pm_avv"."||title::linkid=>".$CONF[url_base].$CONF[dir_modules]."calendar/pages/appunt_show.php?id=%ID%||codice::func=>calendar_codice||ref_prat::func=>calendar_format_prat||calendar_operator::func=>calendar_shortoper";

$LISTS[calendar][2]["action"]="id;;".FW_SHOW.";;".$CONF[url_base].$CONF[dir_modules]."calendar/pages/appunt_show.php?id=%ID%||id;;".FW_MODIFY.";;".$CONF[url_base].$CONF[dir_modules]."calendar/pages/new_app.php?id=%ID%||id;;".FW_DELETE.";;".$CONF[url_base].$CONF[dir_modules]."calendar/pages/app_view.php?action=del&id=%ID%";

//HOME: INCOMBENTI
$LISTS[pratiche][4]["sql_select"]="SELECT * FROM pratiche p, calendar m WHERE id = .$idP";

$curia=pr_comp_desc;
$luogocuria=pr_luogo_uff_giud;
$giud=pr_giudice;	
$LISTS[calendar][4]["sql_select"]="SELECT * FROM pratiche p, calendar m WHERE m.type=1 AND (operator LIKE '".$_SESSION[fw_userid].",,%' OR operator LIKE '".$_SESSION[fw_userid]."' OR operator LIKE '%,,".$_SESSION[fw_userid]."' OR operator LIKE '%,,".$_SESSION[fw_userid].",,%') AND p.id=m.ref_prat and m.done=0";
$LISTS[calendar][4]["options"]="perpage::20||defordfield::day||defordtype::asc||defordfield2::time||defordtype2::desc||exp::0";
//$LISTS[calendar][4]["titles"]=" ||".CALENDAR_ADATE."::ord||".CALENDAR_ATIME."||".CALENDAR_ATYPE."||".CALENDAR_CURIA."||".CALENDAR_LUOGO_CURIA."||".CALENDAR_GIUDICE."||".CALENDAR_IMPEGNO."||".FW_CODE."||".CALENDAR_REF_PRATICA."||".CALENDAR_USERS;

//Con ora e giudice
//$LISTS[calendar][4]["titles"]=" ||".CALENDAR_ADATE."::ord||".CALENDAR_ATIME."||".CALENDAR_ATYPE."||".CALENDAR_CURIA."||".CALENDAR_LUOGO_CURIA."||".CALENDAR_GIUDICE."||".PRATICHE_PM."||".CALENDAR_IMPEGNO."||".FW_CODE."||".CALENDAR_REF_PRATICA."||".CALENDAR_USERS;
//$LISTS[calendar][4]["fields"]="note::func=>calendar_note_pic||day::func=>calendar_data||time::func=>calendar_ora||type_app::func=>calendar_tipo||cal_comp_desc::func=>calendar_curia||cal_luogo::func=>calendar_luogo||cal_giudice::func=>calendar_giudice||".$pm."::func=>calendar_pm_avv"."||title::func=>calendar_format_impegno||codice::func=>calendar_codice||ref_prat::func=>calendar_format_prat||calendar_operator::func=>calendar_shortoper";

//senza ora con giudice
//$LISTS[calendar][4]["titles"]=" ||".CALENDAR_ADATE."::ord||".CALENDAR_ATYPE."||".CALENDAR_CURIA."||".CALENDAR_LUOGO_CURIA."||".CALENDAR_GIUDICE."||".PRATICHE_PM."||".CALENDAR_IMPEGNO."||".FW_CODE."||".CALENDAR_REF_PRATICA."||".CALENDAR_USERS;
//$LISTS[calendar][4]["fields"]="note::func=>calendar_note_pic||day::func=>calendar_data||type_app::func=>calendar_tipo||cal_comp_desc::func=>calendar_curia||cal_luogo::func=>calendar_luogo||cal_giudice::func=>calendar_giudice||".$pm."::func=>calendar_pm_avv"."||title::func=>calendar_format_impegno||codice::func=>calendar_codice||ref_prat::func=>calendar_format_prat||calendar_operator::func=>calendar_shortoper";

//senza ora senza giudice
$LISTS[calendar][4]["titles"]=" ||".CALENDAR_ADATE."::ord||".CALENDAR_ATYPE."||".PRATICHE_PM."||".CALENDAR_IMPEGNO."||".FW_CODE."||".CALENDAR_REF_PRATICA."||".CALENDAR_USERS;
$LISTS[calendar][4]["fields"]="note::func=>calendar_note_pic||day::func=>calendar_data||type_app::func=>calendar_tipo||".$pm."::func=>calendar_pm_avv"."||title::func=>calendar_format_impegno||codice::func=>calendar_codice||ref_prat::func=>calendar_format_prat||calendar_operator::func=>calendar_shortoper";

$LISTS[calendar][4]["action"]="id;;".FW_SHOW.";;".$CONF[url_base].$CONF[dir_modules]."calendar/pages/appunt_show.php?id=%ID%||id;;".FW_MODIFY.";;".$CONF[url_base].$CONF[dir_modules]."calendar/pages/new_app.php?id=%ID%||id;;".FW_DELETE.";;".$CONF[url_base].$CONF[dir_modules]."calendar/pages/app_view.php?action=del&id=%ID%";

//HOME: EVENTI
$LISTS[pratiche][5]["sql_select"]="SELECT * FROM pratiche p, calendar m WHERE id = .$idP";
$curia=pr_comp_desc;
$luogocuria=pr_luogo_uff_giud;
$giud=pr_giudice;	
$LISTS[calendar][5]["sql_select"]="SELECT * FROM pratiche p, calendar m WHERE m.type=0 AND (operator LIKE '".$_SESSION[fw_userid].",,%' OR operator LIKE '".$_SESSION[fw_userid]."' OR operator LIKE '%,,".$_SESSION[fw_userid]."' OR operator LIKE '%,,".$_SESSION[fw_userid].",,%') AND p.id=m.ref_prat and m.done=0";
$LISTS[calendar][5]["options"]="perpage::20||defordfield::day||defordtype::asc||defordfield2::time||defordtype2::desc||exp::0";
//$LISTS[calendar][5]["titles"]=" ||".CALENDAR_ADATE."::ord||".CALENDAR_ATIME."||".CALENDAR_ATYPE."||".CALENDAR_CURIA."||".CALENDAR_LUOGO_CURIA."||".CALENDAR_GIUDICE."||".CALENDAR_IMPEGNO."||".FW_CODE."||".CALENDAR_REF_PRATICA."||".CALENDAR_USERS;


$LISTS[calendar][5]["titles"]=" ||".CALENDAR_ADATE."::ord||".CALENDAR_ATIME."||".CALENDAR_ATYPE."||".CALENDAR_CURIA."||".CALENDAR_LUOGO_CURIA."||".CALENDAR_GIUDICE."||".PRATICHE_PM."||".CALENDAR_IMPEGNO."||".FW_CODE."||".CALENDAR_REF_PRATICA."||".CALENDAR_USERS;
$LISTS[calendar][5]["fields"]="note::func=>calendar_note_pic||day::func=>calendar_data||time::func=>calendar_ora||type_app::func=>calendar_tipo||cal_comp_desc::func=>calendar_curia||cal_luogo::func=>calendar_luogo||cal_giudice::func=>calendar_giudice||".$pm."::func=>calendar_pm_avv"."||title::func=>calendar_format_impegno||codice::func=>calendar_codice||ref_prat::func=>calendar_format_prat||calendar_operator::func=>calendar_shortoper";
$LISTS[calendar][5]["action"]="id;;".FW_SHOW.";;".$CONF[url_base].$CONF[dir_modules]."calendar/pages/appunt_show.php?id=%ID%||id;;".FW_MODIFY.";;".$CONF[url_base].$CONF[dir_modules]."calendar/pages/new_app.php?id=%ID%||id;;".FW_DELETE.";;".$CONF[url_base].$CONF[dir_modules]."calendar/pages/app_view.php?action=del&id=%ID%";

//funzioni

function calendar_note_pic($row)
{
	if (strlen($row[note])>0)
	{
		 $output="<img src=\"%[IMAGE_GPATH]%ico/ico_note_min.gif\"> ";
	}

	if ($row[day] < date("Y-m-d") && $row[done] != 1)
	{
		$output.="<img src=\"%[IMAGE_GPATH]%ico/ico_appu_scad_min.gif\"> ";
	}
    	if ($row[type] == 1)
	{
		$output.="<img src=\"%[IMAGE_GPATH]%ico/ico_incombente.gif\"> ";
	}
    	if ($row[notulato] == 1)
	{
		$output.="<img src=\"%[IMAGE_GPATH]%ico/euro.png\" width=\"11\" height=\"12\"> ";
	}
    	if ($row[done] == 2)
	{
		$output.="<img src=\"%[IMAGE_GPATH]%ico/done5.png\" > ";
	}
	return $output;
}

function calendar_format_prov($row)
{
	GLOBAL $DB,$CONF;
	
	$rs=$DB->Execute("SELECT * FROM calendar WHERE id=".$row[id]);
	$prat=$rs->FetchRow();
	if ($row[provenienza]=="0000-00-00")
	{
	return "";
	}
	else
	{
	$prov=$row[provenienza];
	$gp=(date("d",strtotime($prov)));
	$mp=(date("m",strtotime($prov)));
	$ap=(date("Y",strtotime($prov)));
	$provenienza=$gp."-".$mp."-".$ap;
	if($row[done] == 2){
		if($row[day] < date("Y-m-d")){return "<a href=\"".$CONF[url_base].$CONF[dir_modules]."calendar/pages/appunt_show.php?id=".$row[id_provenienza]."\">"."<font color='grey'><strike>".$provenienza."</font></strike>"."</a>";}
		else{return "<a href=\"".$CONF[url_base].$CONF[dir_modules]."calendar/pages/appunt_show.php?id=".$row[id_provenienza]."\">"."<strike>".$provenienza."<strike></a>";}
	}
	else
	{
		if($row[day] < date("Y-m-d")){return "<a href=\"".$CONF[url_base].$CONF[dir_modules]."calendar/pages/appunt_show.php?id=".$row[id_provenienza]."\">"."<font color='grey'>".$provenienza."</font>"."</a>";}
		else
		{return "<a href=\"".$CONF[url_base].$CONF[dir_modules]."calendar/pages/appunt_show.php?id=".$row[id_provenienza]."\">".$provenienza."</a>";}
	}
		}
	}

function calendar_curia($row)
{
	GLOBAL $DB,$CONF;
	$curia="";
	$rsC=$DB->Execute("SELECT * FROM calendar WHERE id=".$row[id]);
	$cal=$rsC->FetchRow();

	$rsP=$DB->Execute("SELECT * FROM pratiche WHERE id=".$row[ref_prat]);
	$prat=$rsP->FetchRow();

	if($cal[type_app]=="UD")
	{
		if($cal[cal_comp_desc]=="")
		{$curia="<i>".$prat[pr_comp_desc]."</i>";}
		else{$curia=$cal[cal_comp_desc];}
	}
	else {$curia=$cal[cal_comp_desc];}

	if($row[day] < date("Y-m-d")){$curia="<font color='grey'>".$curia."</font>";}

	if($CONF[strike_impegni_fatti]==1){if($row[done] == 2){$curia="<strike>".$curia."</strike>";}}
	return $curia;


}
function calendar_data($row)
{
	GLOBAL $DB,$CONF;
	$g=(date("d",strtotime($row[day])));
	$m=(date("m",strtotime($row[day])));
	$a=(date("Y",strtotime($row[day])));
	$day=$g."-".$m."-".$a;

	if($row[day] < date("Y-m-d")){$data="<font color='grey'>".$day."</font>";}

	//udienze+scadenze = oggi
	else if($row[day] == date("Y-m-d"))
	{
	if($row[type_app] =="UD"){$data="<font color='green'>"."<strong>".$day."</font>"."</strong>";}
	else if($row[type_app] =="SCAD"){$data="<font color='red'>"."<strong>".$day."</font>"."</strong>";}else{$data=$day;}
	}

	//udienze+scadenze = domani
	else if($row[day] == date("Y-m-d", strtotime('+1 days')))
	{
	if($row[type_app] =="UD"){$data="<font color='blue'>"."<strong>".$day."</font>"."</strong>";}
	else if($row[type_app] =="SCAD"){$data="<font color='red'>"."<strong>".$day."</font>"."</strong>";}else{$data=$day;}
	}


	//scadenze
	else if($row[day] < date("Y-m-d", strtotime('+3 days')))
	{
	if($row[type_app] =="SCAD"){$data="<font color='red'>"."<strong>".$day."</font>"."</strong>";}else{$data=$day;}
	}
	else if($row[day] < date("Y-m-d", strtotime('+'.$CONF[gg_evidenza_scadenze].' days'))){
	if($row[type_app] =="SCAD"){$data="<font color='orange'>"."<strong>".$day."</font>"."</strong>";}else{$data=$day;}
	}
	else{$data=$day;}

	if($CONF[strike_impegni_fatti]==1){if($row[done] == 2){$data="<strike>".$data."</strike>";}}
	return $data;
}
function calendar_ora($row)
{
	GLOBAL $DB,$CONF;
	$orario=date("H:i",strtotime($row[time]));
	if($row[day] < date("Y-m-d")){
	if($orario=="00:00"){$ora="";}else{$ora="<font color='grey'>".$orario."</font>";}
	}
	else{
	if($orario=="00:00"){$ora="";}else{$ora=$orario;}
	}
	if($CONF[strike_impegni_fatti]==1){if($row[done] == 2){$ora="<strike>".$ora."</strike>";}}
	return $ora;

}
function calendar_tipo($row)
{
	GLOBAL $DB,$CONF;
	if($row[day] < date("Y-m-d")){$tipo="<font color='grey'>".$row[type_app]."</font>";}
	else{$tipo=$row[type_app];}
	if($CONF[strike_impegni_fatti]==1){if($row[done] == 2){$tipo="<strike>".$tipo."</strike>";}}

	return $tipo;
}
function calendar_codice($row)
{
	GLOBAL $DB,$CONF;
	if($row[day] < date("Y-m-d")){$codice="<font color='grey'>".$row[codice]."</font>";}
	else{$codice=$row[codice];}

	if($CONF[strike_impegni_fatti] == 1){if($row[done] == 2){$codice="<strike>".$codice."</strike>";}}

	return $codice;
}



function calendar_luogo($row)
{
	GLOBAL $DB,$CONF;
	$luogo="";
	$rsC=$DB->Execute("SELECT * FROM calendar WHERE id=".$row[id]);
	$cal=$rsC->FetchRow();

	$rsP=$DB->Execute("SELECT * FROM pratiche WHERE id=".$row[ref_prat]);
	$prat=$rsP->FetchRow();

	if($cal[type_app]=="UD")
	{
		if($cal[cal_luogo]=="")
		{$luogo="<i>".$prat[pr_luogo_uff_giud]."</i>";}
		else{$luogo=$cal[cal_luogo];}
	}
	else {$luogo=$cal[cal_luogo];}
	if($row[day] < date("Y-m-d")){$luogo="<font color='grey'>".$luogo."</font>";}

	if($CONF[strike_impegni_fatti] == 1){if($row[done] == 2){$luogo="<strike>".$luogo."</strike>";}}
	return $luogo;
}

function calendar_giudice($row)
{
	GLOBAL $DB,$CONF;
	$giudice="";
	$rsC=$DB->Execute("SELECT * FROM calendar WHERE id=".$row[id]);
	$cal=$rsC->FetchRow();

	$rsP=$DB->Execute("SELECT * FROM pratiche WHERE id=".$row[ref_prat]);
	$prat=$rsP->FetchRow();

	if($cal[type_app]=="UD")
	{
		if($cal[cal_giudice]=="")
		{$giudice="<i>".$prat[pr_giudice]."</i>";}
		else{$giudice=$cal[cal_giudice];}
	}
	else {$giudice=$cal[cal_giudice];}
	if($row[day] < date("Y-m-d")){$giudice="<font color='grey'>".$giudice."</font>";}
	if($CONF[strike_impegni_fatti]==1){if($row[done] == 2){$giudice="<strike>".$giudice."</strike>";}}
	return $giudice;
}
function calendar_pm_avv($row)
{
	GLOBAL $DB,$CONF;
	$rsP=$DB->Execute("SELECT * FROM pratiche WHERE id=".$row[ref_prat]);
	$prat=$rsP->FetchRow();

	$pmavv=$prat[pr_referral];

	if($row[day] < date("Y-m-d")){$pmavv="<font color='grey'>".$pmavv."</font>";}
	if($CONF[strike_impegni_fatti]==1){if($row[done] == 2){$pmavv="<strike>".$pmavv."</strike>";}}

	return $pmavv;
}

function calendar_format_impegno($row)
{
	GLOBAL $DB,$CONF;
	
	$rs=$DB->Execute("SELECT * FROM pratiche WHERE id=".$row[ref_prat]);
	$prat=$rs->FetchRow();
	if($CONF[strike_impegni_fatti]==1 && $row[done] == 2){
		if($row[day] < date("Y-m-d")){	return "<a href=\"".$CONF[url_base].$CONF[dir_modules]."calendar/pages/appunt_show.php?id=".$row[id]."\">"."<font color='grey'><strike>".$row[title]."</strike></font>"."</a>";}
		else{return "<a href=\"".$CONF[url_base].$CONF[dir_modules]."calendar/pages/appunt_show.php?id=".$row[id]."\">"."<strike>".$row[title]."</strike></a>";
		}
	}
	else
	{
		if($row[day] < date("Y-m-d")){	return "<a href=\"".$CONF[url_base].$CONF[dir_modules]."calendar/pages/appunt_show.php?id=".$row[id]."\">"."<font color='grey'>".$row[title]."</font>"."</a>";}
		else{return "<a href=\"".$CONF[url_base].$CONF[dir_modules]."calendar/pages/appunt_show.php?id=".$row[id]."\">".$row[title]."</a>";
		}
	}
}

function calendar_format_prat($row)
{
	GLOBAL $DB,$CONF;
	
	$rs=$DB->Execute("SELECT * FROM pratiche WHERE id=".$row[ref_prat]);
	$prat=$rs->FetchRow();


	if($row[day] < date("Y-m-d")){	return "<a href=\"".$CONF[url_base].$CONF[dir_modules]."pratiche/pages/pratiche_show.php?id=".$prat[id]."\">"."<font color='grey'>".$prat[pr_codice]."</font>"."</a>";}
	else{return "<a href=\"".$CONF[url_base].$CONF[dir_modules]."pratiche/pages/pratiche_show.php?id=".$prat[id]."\">".$prat[pr_codice]."</a>";}

}

function calendar_shortoper($row)
{
	GLOBAL $DB,$CONF;
	
	if (strlen($row[operator]) > 0)
	{
		$cnt=0;
		foreach (explode(",,",$row[operator]) as $k=> $v)
		{
			$rs=$DB->Execute("SELECT * FROM users WHERE id=".$v);
			if ($rs->RecordCount() > 0)
			{
				$r = rand(1, 100000);
				$usr=$rs->FetchRow();
				if ($cnt==0)
				{$out.='<span onMouseOut="HideHelp(\'d' . $r . '\')" onMouseOver="ShowHelp(\'d' . $r . '\', \''. $usr[codice] . ' - '. $usr[nome] .'\', \'\')" >'.$usr[codice].'</span> <div style="display:none" id="d' . $r . '"></div>';}
				else {$out.=" - ".'<span onMouseOut="HideHelp(\'d' . $r . '\')" onMouseOver="ShowHelp(\'d' . $r . '\', \''. $usr[codice] . ' - '. $usr[nome] . '\', \'\')" >'.$usr[codice].'</span> <div style="display:none" id="d' . $r . '"></div>';}
				$cnt++;
			}
		}
	}
	if($row[day] < date("Y-m-d")){$out="<font color='grey'>".$out."</font>";}
	if($CONF[strike_impegni_fatti]==1){if($row[done] == 2){$out="<strike>".$out."</strike>";}}

	return $out;
}




?>
