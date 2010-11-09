<?

function make_nome_prat($str)
{
 $str = str_replace('è','e',$str);
 $str = str_replace('é','e',$str);
 $str = str_replace('à','a',$str);
 $str = str_replace('ò','o',$str);
 $str = str_replace('ù','u',$str);
 $str = str_replace('ì','i',$str);
 $str = eregi_replace('[^a-z ]','',$str);
 $str = strtoupper($str);
return($str);
	
}

?>
