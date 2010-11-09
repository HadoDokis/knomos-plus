<?

function contact_element_1($link_type=0)
{

	if (check_perm_mod("contact","r")==1)
	{
		$thissearch= load_fwobject("search","contact",1);
		$output= draw_form($thissearch[form]);
		
		if ($_GET[form_id]==$thissearch[form][name]){
			$output.= menage_search($thissearch[search]);
		}
		
		return $output;
	} else return "";
}





?>