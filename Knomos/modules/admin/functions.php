<?

function make_nome_prat($str)
{
 $str = str_replace('�','e',$str);
 $str = str_replace('�','e',$str);
 $str = str_replace('�','a',$str);
 $str = str_replace('�','o',$str);
 $str = str_replace('�','u',$str);
 $str = str_replace('�','i',$str);
 $str = eregi_replace('[^a-z ]','',$str);
 $str = strtoupper($str);
return($str);
	
}

?>
