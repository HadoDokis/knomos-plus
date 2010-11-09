<?
include_once('ziplib.php');

function document_create($result,$id,$template,$module)
{
	GLOBAL $CONF,$DB;
	

	//Fetch Template
	//if (!isset($result[ref_template])) return 0;
	$rs_temp=$DB->Execute("SELECT * FROM INT_document_template WHERE id=".$template);
	$this_template=$rs_temp->FetchRow();
	
	//Read template from sxw
	list ($tmpdir, $this_page) = read_sxw_template($template.".sxw");

	//print "tmpdir: $tmpdir<br>";	
	if (isset($result[ref_prat][realval])) {$rp=$result[ref_prat][realval][0];}
	else $rp=$pres[ref_id];
	
	//Fetch Pratica
	$rs_prat=$DB->Execute("SELECT * FROM pratiche WHERE id=".$rp);
	$this_pratica=$rs_prat->FetchRow();
	
	//Fetch Cliente
	
	$rs_cli=$DB->Execute("SELECT * FROM contact WHERE id=".$this_pratica[pr_ref_idcliente]);
	$this_cli=$rs_cli->FetchRow();
	
	//Fetch avversario
	$this_avv = array();
	$avv = explode(',,',$this_pratica[pr_ref_idavvr]);
	if (is_numeric($avv[0])) {
		$rs_avv=$DB->Execute("SELECT * FROM contact WHERE id=".$avv[0]);
	        $old_avv=$rs_avv->FetchRow();
		foreach ($old_avv as $k => $v) $this_avv["avv_$k"] = $v;
	}

	$this_result=array_merge($this_cli,$this_avv,$this_pratica);
	
	//Replace content tags
	$this_page = replace_content($this_page,$this_result);

	//print "dest: ".$CONF[path_base].$CONF[dir_upload].$module."/".$result[filename].".sxw<br>";
	//Write sxw
	write_sxw($tmpdir,$this_page,$CONF[path_base].$CONF[dir_upload].$module."/".$result[filename].'-'.$id."-1.sxw");
	
	//$md5f=md5_file($CONF[path_base].$CONF[dir_upload].$module."/".$result[filename].'-'.$id."-1.sxw");
	//$rs_updf=$DB-Execute("UPDATE document set checksum='".$md5f."' WHERE id=$id");
	return $result[filename].'-'.$id."-1.sxw";
	
}

function zip_file($dir,$name) {

        $olddir = getcwd();

        @chdir($dir);

        // zip file
        exec("/usr/bin/zip -r '$name' *");

        @chdir($olddir);

/*
        $zip = new zipfile();
        $cdir = opendir($dir);

        while ($fname = readdir($cdir)) {
                if(!is_dir("$dir/$fname")) {
                        $zip->addFile(file_get_contents("$dir/$fname"), $fname);
		}
        }
        closedir($cdir);

        $fp = fopen($name, 'w+');
        fputs($fp, $zip->file());
        fclose($fp);
*/
	return $name;
}

function replace_content($content,$replace) {

	GLOBAL $CONF;

	print "$content<br><hr><br>";
	
	$arr_remap = array (	
		CODICE => '%pr_codice%', OGGETTO => '%pr_oggetto%', VALORE => '%pr_valore%',
		AUTORITA => '%pr comp_cod% %pr_comp_desc%', GIUDICE => '%pr_giudice%',
		NOMECLI => '%nome%', VIACLI => '%indirizzo%', CAPCLI => '%cap%', CITYCLI => '%citta%',
		STATCLI => '%stato%', CFISCLI => '%cod_fis%', PIVACLI => '%piva%', CIAACLI => '%iscr_ccia%',
		TRIBCLI => '%iscr_trib%', PFPGCLI => '%tipo_contatto%', DNASCLI => '%data%', LNASCLI => '%luogo%',
		NOMEAVV => '%avv_nome%', VIAAVV => '%avv_indirizzo%', CAPAVV => '%avv_cap%', CITYAVV => '%avv_citta%',
              STATAVV => '%avv_stato%', CFISAVV => '%avv_cod_fis%', PIVAAVV => '%avv_piva%', CIAAAVV => '%avv_iscr_ccia%',
              TRIBAVV => '%avv_iscr_trib%', PFPGAVV => '%avv_tipo_contatto%', DNASAVV => '%avv_data%', LNASAVV => '%avv_luogo%',
		TODAY => '%today%', ME => '%me%'
		);
	// rimappa i campi
	foreach ($arr_remap as $k => $v) $content = eregi_replace("&lt;$k&gt;",utf8_encode($v),$content);

	foreach ($replace as $k => $v) {
		if ($k == 'pr_valore') {
			if ($v == -1) $v = 'Indeterminato';
			if ($v == -2) $v = 'Indeterminato/Extra';
		}
		$content = eregi_replace("%$k%",$v,$content);
	}
	$content = eregi_replace("%today%",date($CONF[date_format]),$content);
	$content = eregi_replace("%me%",$_SESSION[user][nome],$content);

	return $content;
}


function read_sxw_template($template) {

	GLOBAL $CONF,$DB;

	$sxw = $CONF[path_base].'/modules/document/doc_template/'.$template;

	// temporary dir
	$basetmp = $CONF[path_base].$CONF[dir_upload].'document';
	$uniquedir = md5(uniqid(rand(), true));
	$tmpdir = "$basetmp/$uniquedir";

	if (!@mkdir($tmpdir)) die("Impossibile creare la directory temporanea $tmpdir. Uscita.");

	exec("unzip '$sxw' -d $tmpdir");
	
	// read template
	$fd = fopen($tmpdir.'/content.xml','r');
	while (!feof($fd)) $contents .= fread($fd,10000);
	fclose($fd);

	return array($tmpdir,$contents);
}

function write_sxw($tmpdir,$contents,$filename) {

	GLOBAL $CONF,$DB;

	// write modified document
        $fd = fopen($tmpdir.'/content.xml','w');
        fwrite($fd,$contents);
        fclose($fd);

	zip_file($tmpdir,$filename);

	exec("rm -rf '$tmpdir'");
}


function put_tmp_file($id)
{
	GLOBAL $CONF,$DB,$PAGE_ELEMENT;
 	
	$rs=$DB->Execute("SELECT * FROM document WHERE id=$id");
	if (!$thisfile=$rs->FetchRow()) return false;
	$PAGE_ELEMENT[PAGE][1][0][param]=$thisfile[ref_prat];
	$filename=$thisfile[filename].'-'.$thisfile[id].'-'.$thisfile[version].'.'.$thisfile[ext];
	if (!file_exists($CONF[path_base].$CONF[dir_upload].'document/'.$filename)) {return false;}
	copy($CONF[path_base].$CONF[dir_upload].'document/'.$filename, $CONF[path_base].$CONF[dir_upload].$filename);
	

		if ($thisfile[ref_id]==0)
		{
			$rs_upd=$DB->Execute("UPDATE document SET `lock`='$id', user_lock=".$_SESSION[fw_userid]." WHERE id=$id");
		} else $rs_upd=$DB->Execute("UPDATE document SET `lock`='$id', user_lock=".$_SESSION[fw_userid]." WHERE id=".$thisfile[id]);
		$rs_upd2=$DB->Execute("UPDATE ".$CONF[auth_db_table]." SET `lock`=1 WHERE id=".$_SESSION[fw_userid]);
		$_SESSION[user][lock]=1;
		return $filename;
	
}


function get_tmp_file($id,$nonewver="")
{
	GLOBAL $CONF,$DB,$PAGE_ELEMENT;
 	
	$rs=$DB->Execute("SELECT * FROM document WHERE id=$id");
	if (!$thisfile=$rs->FetchRow()) return false;
	$PAGE_ELEMENT[PAGE][1][0][param]=$thisfile[ref_prat];
	if ($thisfile[ref_id]==0)
	{
		$old_ref=$thisfile[id];
		$old_ver=$thisfile[version];
		$old_note=$thisfile[note];
		$old_desc=$thisfile[descr];
		$ref_orig=$thisfile[version];
		$ref_ext=$thisfile[ext];
	} else
	{
		$rs2=$DB->Execute("SELECT * FROM document WHERE id=".$thisfile[ref_id]);
		$thisfile_base=$rs2->FetchRow();
		
		$old_ref=$thisfile_base[id];
		$old_ver=$thisfile_base[version];
		$old_note=$thisfile_base[note];
		$old_desc=$thisfile_base[descr];
		$ref_orig=$thisfile[version];
		$ref_ext=$thisfile[ext];
		
	}
	
	if ($nonewver!=1)
	{
		//Insert new document
		$rs_insnew=$DB->Execute("INSERT INTO document SET operatore=".$_SESSION[fw_userid].", descr='".$old_desc."', note='".$old_note."', version=".($old_ver+1).", ref_id=0, ref_orig=".$ref_orig.", filename='".$thisfile[filename]."', data=NOW(), ref_prat=".$thisfile[ref_prat].", ref_pres=".$thisfile[ref_pres].", ext='".$ref_ext."'");

		//REMEMBER Change with adodb syntax
		$ret= mysql_insert_id();

	} else $ret=0;
	
	//Update other document and unlock user
	$rs_updold=$DB->Execute("UPDATE document SET ref_id=$ret, `lock`=0, user_lock=0 WHERE ref_id=$old_ref OR id=$old_ref");
	$rs_updusr=$DB->Execute("UPDATE ".$CONF[auth_db_table]." SET  `lock`=0 WHERE id=".$thisfile[user_lock]);		
	
	if ($nonewver!=1)
	{
		$filename=$thisfile[filename].'-'.$thisfile[id].'-'.$thisfile[version].'.'.$thisfile[ext];
		$newfilename=$thisfile[filename].'-'.$ret.'-'.($old_ver+1).'.'.$thisfile[ext];
	} else {
		$filename=$thisfile[filename].'-'.$thisfile[id].'-'.$thisfile[version].'.'.$thisfile[ext];
		$newfilename=$thisfile[filename].'-'.$thisfile[id].'-'.$thisfile[version].'.'.$thisfile[ext];
	}
	
	if ($thisfile[ext]=="sxw")
	{	
		if (!file_exists($CONF[path_base].$CONF[dir_upload].$filename)) return false;
		copy($CONF[path_base].$CONF[dir_upload].$filename, $CONF[path_base].$CONF[dir_upload].'document/'.$newfilename);
		unlink($CONF[path_base].$CONF[dir_upload].$filename);
		getTextfromSXW($CONF[path_base].$CONF[dir_upload].'document/'.$newfilename);
	} else {
		if (!file_exists($CONF[path_base].$CONF[dir_upload].$filename)) return false;
		copy($_FILES["fileupl"]['tmp_name'], $CONF[path_base].$CONF[dir_upload].'document/'.$newfilename);
		unlink($CONF[path_base].$CONF[dir_upload].$filename);
	}
	

	return $newfilename;
	$_SESSION[user][lock]=0;
}

function getTextfromSXW($path) {

	global $CONF;

	$current_dir = getcwd();

	$CONF[rgrep_path] = '/usr/bin/rgrep';

	$filename = basename($path);
	$tempdir = $CONF[path_base].$CONF[dir_upload].'sxw/'.md5(microtime());

	if (!mkdir($tempdir)) return false;
	if (!copy($path,"$tempdir/$filename")) return false;
	if (!chdir($tempdir)) return false;

	exec("/usr/bin/unzip '$filename'",$out,$rt);
	
	if ($rt != 0) return false;
	if (!is_file("$tempdir/content.xml")) return false;

	$fr = fopen("$tempdir/content.xml","r");
	while ($l = fgets($fr)) $contents .= $l;
	fclose($fr);

	preg_match('!<office:body>(.*?)</office:body>!ms',$contents,$p);
	$contents = str_replace("</text:p>","#^#",$contents);
	$contents = strip_tags($contents);
	$contents = str_replace("\r\n","#^#",$contents);
	$contents = str_replace("\n","#^#",$contents);
	$contents = str_replace("\r","#^#",$contents);
	$contents = str_replace("Â","",$contents);

	exec("rm -rf '$tempdir'");

	$destdir = $CONF[path_base].$CONF[dir_upload].'document/txtindex/'.date('Ym');
	@mkdir($destdir);
	$txtfile = $destdir.'/'.ereg_replace('\.sxw$','.txt',$filename);

	$fw = fopen($txtfile,'w');
	fwrite($fw,$contents);
	fclose($fw);

	chdir($current_dir);
}

function rgrep_quote($str) {

	$str = str_replace('\\','\\\\\\',$str);
	$str = str_replace('"','\"',$str);
	$str = str_replace('!','\!',$str);
	return $str;
}

function awk_quote($str) {

	$str = str_replace('\\','\\\\\\',$str);
        $str = str_replace('/','\/',$str);
	$str = str_replace('"','\"',$str);
	$str = str_replace('!','\!',$str);
        return $str;
}

function searchDocuments($srcstring) {

	global $CONF;

	$plus_words = $minus_words = $matches = array();

	//composite words
        while (preg_match('!\s?-"([^"]*?)"!',$srcstring,$pp)) {
                $minus_words[] = $pp[1];
                $srcstring = ereg_replace(quotemeta($pp[0]),'',$srcstring);
        }
        while (preg_match('!"([^"]*?)"!',$srcstring,$pp)) {
                $plus_words[] = $pp[1];
                $srcstring = ereg_replace(quotemeta($pp[0]),'',$srcstring);
        }
	while (preg_match('![^-]"([^"]*?)"!',$srcstring,$pp)) {
                $plus_words[] = $pp[1];
                $srcstring = ereg_replace(quotemeta($pp[0]),'',$srcstring);
        }

	//single words
        while (preg_match('!\s?-(\S+)!',$srcstring,$pp)) {
		$minus_words[] = $pp[1];
                $srcstring = ereg_replace(quotemeta($pp[0]),'',$srcstring);
        }
	while (preg_match('!(\S+)!',$srcstring,$pp)) {
                $plus_words[] = $pp[1];
                $srcstring = ereg_replace(quotemeta($pp[0]),'',$srcstring);
        }

	$current_dir = getcwd();

        $CONF[rgrep_path] = '/usr/bin/rgrep';

	chdir($CONF[path_base].$CONF[dir_upload]."document/txtindex");

	foreach($plus_words as $w) $matches[] = '/'.awk_quote($w).'/';
	foreach($minus_words as $w) $matches[] = '!/'.awk_quote($w).'/';
	exec('awk "'.implode(" && ",$matches).' { print FILENAME}" IGNORECASE=1 */*',$out);

	//print 'awk "'.implode(" && ",$matches).' { print FILENAME}" IGNORECASE=1 */*';print "\n";

	//print_r($out);
	$res = array();

	foreach ($out as $o) {
		$fname = basename($o);
		if (ereg('-([0-9]+)-[0-9]+\.txt$',$fname,$pp)) $res[] = $pp[1];
		//print "$fname\n";
	}

	chdir($current_dir);
	return $res;
}

?>
