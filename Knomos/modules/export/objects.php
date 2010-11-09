<?

function pratiche_element_1()
{
	if (check_perm_mod("pratiche","r")==1)
	{
		$thislist= load_fwobject("lists","pratiche",1);
		//print_r ($thislist);
		$output=draw_list($thislist,"pratiche");
		return $output;

	} else return "";
}

function pratiche_element_6($test)
{
	return "Pratiche 6";
}

?>