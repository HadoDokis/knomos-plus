<?

$SEARCHES[admin][0][form][form_method]="GET";
$SEARCHES[admin][0][form][name]="search_home";
$SEARCHES[admin][0][form][onpost]="action::db||table::test||type::add||wf::id";
$SEARCHES[admin][0][form][ignore]="";
$SEARCHES[admin][0][form][Fields]["codice"]["title"]=FW_CODE;
$SEARCHES[admin][0][form][Fields]["codice"]["content"]="text||||wid::25";
$SEARCHES[admin][0][form][Fields]["descr"]["title"]=FW_DESC;
$SEARCHES[admin][0][form][Fields]["descr"]["content"]="text||||wid::25";
$SEARCHES[admin][0][form][Fields]["formname"]["content"]="hidden||".$_GET["formname"]."||";
$SEARCHES[admin][0][form][Fields]["fieldname"]["content"]="hidden||".$_GET["fieldname"]."||";
$SEARCHES[admin][0][form][Fields]["fieldname2"]["content"]="hidden||".$_GET["fieldname2"]."||";
$SEARCHES[admin][0][form][Fields]["send"]["content"]="submit||".FW_SEARCH."||";
$SEARCHES[admin][0][search][tables][admin]="5||||exp::1;;lock::1||0";
$SEARCHES[admin][0][search][tablesql][admin]="SELECT * FROM INT_tariffe WHERE 1=1 ";
$SEARCHES[admin][0][search][allow_empty]=1;
$SEARCHES[admin][0][search][fields][codice][content]="text_start||";
$SEARCHES[admin][0][search][fields][codice][search_field]="admin-tatid";
$SEARCHES[admin][0][search][fields][descr][content]="text_like||";
$SEARCHES[admin][0][search][fields][descr][search_field]="admin-tat_desc";

$SEARCHES[admin][3][form][form_method]="GET";
$SEARCHES[admin][3][form][name]="search_home";
$SEARCHES[admin][3][form][onpost]="action::db||table::test||type::add||wf::id";
$SEARCHES[admin][3][form][ignore]="";
$SEARCHES[admin][3][form][Fields]["codice"]["title"]=FW_CODE;
$SEARCHES[admin][3][form][Fields]["codice"]["content"]="text||||wid::25";
$SEARCHES[admin][3][form][Fields]["descr"]["title"]=FW_DESC;
$SEARCHES[admin][3][form][Fields]["descr"]["content"]="text||||wid::25";
$SEARCHES[admin][3][form][Fields]["simple_ins"]["content"]="hidden||".$_GET["simple_ins"]."||";
$SEARCHES[admin][3][form][Fields]["formname"]["content"]="hidden||".$_GET["formname"]."||";
$SEARCHES[admin][3][form][Fields]["fieldname"]["content"]="hidden||".$_GET["fieldname"]."||";
$SEARCHES[admin][3][form][Fields]["fieldname2"]["content"]="hidden||".$_GET["fieldname2"]."||";
$SEARCHES[admin][3][form][Fields]["send"]["content"]="submit||".FW_SEARCH."||";
$SEARCHES[admin][3][search][tables][admin]="8||||exp::1;;lock::1||0";
$SEARCHES[admin][3][search][tablesql][admin]="SELECT * FROM INT_tariffe WHERE 1=1 ";
$SEARCHES[admin][3][search][allow_empty]=1;
$SEARCHES[admin][3][search][fields][codice][content]="text_start||";
$SEARCHES[admin][3][search][fields][codice][search_field]="admin-tatid";
$SEARCHES[admin][3][search][fields][descr][content]="text_like||";
$SEARCHES[admin][3][search][fields][descr][search_field]="admin-tat_desc";




$SEARCHES[admin][1][form][form_method]="GET";
$SEARCHES[admin][1][form][name]="search_home";
$SEARCHES[admin][1][form][onpost]="action::db||table::test||type::add||wf::id";
$SEARCHES[admin][1][form][ignore]="";
$SEARCHES[admin][1][form][Fields]["codice"]["title"]=FW_CODE;
$SEARCHES[admin][1][form][Fields]["codice"]["content"]="text||||wid::25";
$SEARCHES[admin][1][form][Fields]["descr"]["title"]=FW_NAME;
$SEARCHES[admin][1][form][Fields]["descr"]["content"]="text||||wid::25";
$SEARCHES[admin][1][form][Fields]["formname"]["content"]="hidden||".$_GET["formname"]."||";
$SEARCHES[admin][1][form][Fields]["fieldname"]["content"]="hidden||".$_GET["fieldname"]."||";
$SEARCHES[admin][1][form][Fields]["send"]["content"]="submit||".FW_SEARCH."||";
$SEARCHES[admin][1][search][allow_empty]=1;
$SEARCHES[admin][1][search][tables][admin]="6||||exp::1;;lock::1||0";
$SEARCHES[admin][1][search][tablesql][admin]="SELECT * FROM ".$CONF[auth_db_table]." WHERE 1=1 ";
$SEARCHES[admin][1][search][fields][codice][content]="text_start||";
$SEARCHES[admin][1][search][fields][codice][search_field]="admin-codice";
$SEARCHES[admin][1][search][fields][descr][content]="text_like||";
$SEARCHES[admin][1][search][fields][descr][search_field]="admin-nome";


$SEARCHES[admin][2][form][form_method]="GET";
$SEARCHES[admin][2][form][name]="search_home";
$SEARCHES[admin][2][form][onpost]="action::db||table::test||type::add||wf::id";
$SEARCHES[admin][2][form][ignore]="";
$SEARCHES[admin][2][form][Fields]["codice"]["title"]=FW_CODE;
$SEARCHES[admin][2][form][Fields]["codice"]["content"]="text||||wid::25";
$SEARCHES[admin][2][form][Fields]["descr"]["title"]=FW_NAME;
$SEARCHES[admin][2][form][Fields]["descr"]["content"]="text||||wid::25";
$SEARCHES[admin][2][form][Fields]["formname"]["content"]="hidden||".$_GET["formname"]."||";
$SEARCHES[admin][2][form][Fields]["fieldname"]["content"]="hidden||".$_GET["fieldname"]."||";
$SEARCHES[admin][2][form][Fields]["send"]["content"]="submit||".FW_SEARCH."||";
$SEARCHES[admin][2][search][tables][admin]="7||||exp::1;;lock::1||0";
$SEARCHES[admin][2][search][tablesql][admin]="SELECT * FROM ".$CONF[auth_db_table]." WHERE 1=1 ";
$SEARCHES[admin][2][search][allow_empty]=1;
$SEARCHES[admin][2][search][fields][codice][content]="text_start||";
$SEARCHES[admin][2][search][fields][codice][search_field]="admin-codice";
$SEARCHES[admin][2][search][fields][descr][content]="text_like||";
$SEARCHES[admin][2][search][fields][descr][search_field]="admin-nome";



//GROUP LISTING FOR DEPT
$SEARCHES[admin][4][form][form_method]="GET";
$SEARCHES[admin][4][form][name]="search_group";
$SEARCHES[admin][4][form][onpost]="action::db||table::test||type::add||wf::id";
$SEARCHES[admin][4][form][ignore]="";
$SEARCHES[admin][4][form][Fields]["descr"]["title"]=FW_NAME;
$SEARCHES[admin][4][form][Fields]["descr"]["content"]="text||||wid::25";
$SEARCHES[admin][4][form][Fields]["formname"]["content"]="hidden||".$_GET["formname"]."||";
$SEARCHES[admin][4][form][Fields]["fieldname"]["content"]="hidden||".$_GET["fieldname"]."||";
$SEARCHES[admin][4][form][Fields]["gtipo"]["content"]="hidden||".$_GET["gtipo"]."||";
$SEARCHES[admin][4][form][Fields]["send"]["content"]="submit||".FW_SEARCH."||";
$SEARCHES[admin][4][search][tables][admin]="9||||exp::1;;lock::1||0";
$SEARCHES[admin][4][search][tablesql][admin]="SELECT * FROM ".$CONF[auth_groups_table]." WHERE 1=1 AND tipo=%tipo% ";
$SEARCHES[admin][4][search][allow_empty]=1;
$SEARCHES[admin][4][search][fields][descr][content]="text_like||";
$SEARCHES[admin][4][search][fields][descr][search_field]="admin-name";



//GROUP LISTING FOR DEPT
$SEARCHES[admin][5][form][form_method]="GET";
$SEARCHES[admin][5][form][name]="search_group";
$SEARCHES[admin][5][form][onpost]="action::db||table::test||type::add||wf::id";
$SEARCHES[admin][5][form][ignore]="";
$SEARCHES[admin][5][form][Fields]["descr"]["title"]=FW_NAME;
$SEARCHES[admin][5][form][Fields]["descr"]["content"]="text||||wid::25";
$SEARCHES[admin][5][form][Fields]["formname"]["content"]="hidden||".$_GET["formname"]."||";
$SEARCHES[admin][5][form][Fields]["fieldname"]["content"]="hidden||".$_GET["fieldname"]."||";
$SEARCHES[admin][5][form][Fields]["send"]["content"]="submit||".FW_SEARCH."||";
$SEARCHES[admin][5][search][tables][admin]="9||||exp::1;;lock::1||0";
$SEARCHES[admin][5][search][tablesql][admin]="SELECT * FROM ".$CONF[auth_groups_table]." WHERE 1=1 ";
$SEARCHES[admin][5][search][allow_empty]=1;
$SEARCHES[admin][5][search][fields][descr][content]="text_like||";
$SEARCHES[admin][5][search][fields][descr][search_field]="admin-name";

?>