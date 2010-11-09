<?

function get_first_prat() {

        global $CONF,$DB;

        $db1 = $CONF['db_database'];
        $db2 = $CONF['db_history_database'];

	$busy = array();

	$DB->SelectDB($db1);
        $rs = $DB->Execute("SELECT pr_numero FROM pratiche ORDER BY pr_numero ASC");
        while ($l = $rs->FetchRow()) $busy[] = intval($l['pr_numero']);

	$DB->SelectDB($db2);
        $rs = $DB->Execute("SELECT pr_numero FROM pratiche ORDER BY pr_numero ASC");
        while ($l = $rs->FetchRow()) $busy[] = intval($l['pr_numero']);

	$DB->SelectDB($db1);

	$num = count($busy);

	if ($num == 0) return 0;
	if ($num == 1) return ($busy[0] == 0) ? 1 : 0;

	$DB->SelectDB($db1);

	sort($busy,SORT_NUMERIC);

	for ($i=0; $i < $num - 1; $i++)
		if ($busy[$i+1] > ($busy[$i] + 1)) return ($busy[$i] + 1);

	return ($busy[$num-1] + 1);
}




function PratToHistory($id) {

	global $CONF,$DB;

	$db1 = $CONF['db_database'];
	$db2 = $CONF['db_history_database'];

	//disable history
	$old_session_history = $_SESSION[history];
	$_SESSION[history] = 0;

	// move pratica
	$DB->SelectDB($db1);
	$rs = $DB->Execute("SELECT * FROM pratiche WHERE id='$id'");
        $l = $rs->FetchRow();
	if (!$l) return false;
	foreach ($l as $k => $v) $f1[] = "`$k` = ".$DB->Quote($v);
	$DB->SelectDB($db2);
	$DB->Execute("INSERT INTO pratiche SET ".implode(",",$f1));
	$DB->SelectDB($db1);
	$DB->Execute("DELETE FROM pratiche WHERE id='$id'");
	//print "INSERT INTO pratiche SET ".implode(",",$f1)."<br><br>";

        // move prestazioni
        $DB->SelectDB($db1);
        $rs = $DB->Execute("SELECT * FROM prestazioni WHERE ref_id='$id'");
	$records = $rs->GetArray();
	$DB->SelectDB($db2);
        foreach($records as $a => $b) {
		$f = array();
        	foreach ($b as $k => $v) $f[] = "`$k` = ".$DB->Quote($v);
        	$DB->Execute("INSERT INTO prestazioni SET ".implode(",",$f));
		//print "INSERT INTO prestazioni SET ".implode(",",$f)."<br>";
	}
	$DB->SelectDB($db1);
	$DB->Execute("DELETE FROM prestazioni WHERE ref_id='$id'");

        // move documents
        $DB->SelectDB($db1);
        $rs = $DB->Execute("SELECT * FROM document WHERE ref_prat='$id'");
        $records = $rs->GetArray();
        $DB->SelectDB($db2);
        foreach($records as $a => $b) {
                $f = array();
                foreach ($b as $k => $v) $f[] = "`$k` = ".$DB->Quote($v);
                $DB->Execute("INSERT INTO document SET ".implode(",",$f));
                //print "INSERT INTO document SET ".implode(",",$f)."<br>";
        }
	$DB->SelectDB($db1);
	$DB->Execute("DELETE FROM document WHERE ref_prat='$id'");

        // move calendar
        $DB->SelectDB($db1);
        $rs = $DB->Execute("SELECT * FROM calendar WHERE ref_prat='$id'");
        $records = $rs->GetArray();
        $DB->SelectDB($db2);
        foreach($records as $a => $b) {
                $f = array();
                foreach ($b as $k => $v) $f[] = "`$k` = ".$DB->Quote($v);
                $DB->Execute("INSERT INTO calendar SET ".implode(",",$f));
                //print "INSERT INTO calendar SET ".implode(",",$f)."<br>";
        }
	$DB->SelectDB($db1);
	$DB->Execute("DELETE FROM calendar WHERE ref_prat='$id'");

	$DB->SelectDB($db1);
	$_SESSION[history] = $old_session_history;
}





function HistoryToPrat($id) {

        global $CONF,$DB;

        $db1 = $CONF['db_database'];
        $db2 = $CONF['db_history_database'];

        //disable history
        $old_session_history = $_SESSION[history];
        $_SESSION[history] = 0;

        // move pratica
        $DB->SelectDB($db2);
        $rs = $DB->Execute("SELECT * FROM pratiche WHERE id='$id'");
        $l = $rs->FetchRow();
        if (!$l) return false;
        foreach ($l as $k => $v) $f1[] = "`$k` = ".$DB->Quote($v);
        $DB->SelectDB($db1);
        $DB->Execute("INSERT INTO pratiche SET ".implode(",",$f1));
        $DB->SelectDB($db2);
        $DB->Execute("DELETE FROM pratiche WHERE id='$id'");
        //print "INSERT INTO pratiche SET ".implode(",",$f1)."<br><br>";

        // move prestazioni
        $DB->SelectDB($db2);
        $rs = $DB->Execute("SELECT * FROM prestazioni WHERE ref_id='$id'");
        $records = $rs->GetArray();
        $DB->SelectDB($db1);
        foreach($records as $a => $b) {
                $f = array();
                foreach ($b as $k => $v) $f[] = "`$k` = ".$DB->Quote($v);
                $DB->Execute("INSERT INTO prestazioni SET ".implode(",",$f));
                //print "INSERT INTO prestazioni SET ".implode(",",$f)."<br>";
        }
        $DB->SelectDB($db2);
        $DB->Execute("DELETE FROM prestazioni WHERE ref_id='$id'");

        // move documents
        $DB->SelectDB($db2);
        $rs = $DB->Execute("SELECT * FROM document WHERE ref_prat='$id'");
        $records = $rs->GetArray();
        $DB->SelectDB($db1);
        foreach($records as $a => $b) {
                $f = array();
                foreach ($b as $k => $v) $f[] = "`$k` = ".$DB->Quote($v);
                $DB->Execute("INSERT INTO document SET ".implode(",",$f));
                //print "INSERT INTO document SET ".implode(",",$f)."<br>";
        }
        $DB->SelectDB($db2);
        $DB->Execute("DELETE FROM document WHERE ref_prat='$id'");

        // move calendar
        $DB->SelectDB($db2);
        $rs = $DB->Execute("SELECT * FROM calendar WHERE ref_prat='$id'");
        $records = $rs->GetArray();
        $DB->SelectDB($db1);
        foreach($records as $a => $b) {
                $f = array();
                foreach ($b as $k => $v) $f[] = "`$k` = ".$DB->Quote($v);
                $DB->Execute("INSERT INTO calendar SET ".implode(",",$f));
                //print "INSERT INTO calendar SET ".implode(",",$f)."<br>";
        }
        $DB->SelectDB($db2);
        $DB->Execute("DELETE FROM calendar WHERE ref_prat='$id'");

        $DB->SelectDB($db1);
        $_SESSION[history] = $old_session_history;
}

?>
