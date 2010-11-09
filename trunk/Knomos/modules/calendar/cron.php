<?

function  pratiche_cron_1($param)
{
	if (is_array($param)) { print_r($param);} else print $param;
}


function calendar_cron_appuntamenti($minutes)
{
        GLOBAL $CONF,$DB;

	if (!is_numeric($minutes)) $minutes = 60;
	
	$curtime = date('H:i:00');
	$maxtime = date('H:i:00', mktime(date('H'), date('i') + $minutes, 0, date('n'), date('j'), date('Y')));

	$where_conds = "type=1 AND day = CURDATE() AND time > '$curtime' AND time <= '$maxtime'";

	$rs = $DB->Execute(perm_sql_read("SELECT * FROM calendar WHERE operator LIKE ".$_SESSION[fw_userid].",,%' AND $where_conds ORDER BY time ASC LIMIT 1",'calendar'));

	if ($rs) {
		$app=$rs->GetArray();

		if (count($app)) {
			$info = $app[0];
			$div_contents = '<b>'.$info['title'].'</b> (ore '.substr($info['time'],0,5).')';
		
			return '
			<script>
			mydiv = window.parent.document.getElementById(\'appuntamenti_content_div\');
			mytab = window.parent.document.getElementById(\'appuntamenti_table_div\');
			mybut = window.parent.document.getElementById(\'calendario_button\');
			mydiv.innerHTML = \''.text_to_js($div_contents).'\';
			mytab.style.display = \'inline\';
			mybut.className = \'opz-calendar-brillo\';
			</script>
			';
		} else {
	                return '
                        <script>
                        mydiv = window.parent.document.getElementById(\'appuntamenti_content_div\');
                        mytab = window.parent.document.getElementById(\'appuntamenti_table_div\');
			mybut = window.parent.document.getElementById(\'calendario_button\');
                        mydiv.innerHTML = \'\';
                        mytab.style.display = \'none\';
			mybut.className = \'col-opz-link\';
                        </script>
                        ';
		}

	}
}

?>
