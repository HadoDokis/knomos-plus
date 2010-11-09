<?
/**  
* @package Creative Web Framework  
* @copyright (C) 2000 - 2005 Creative Web Snc 
* @website http://www.creativeweb.it  
* @license http://www.gnu.org/copyleft/gpl.html GNU/GPL  
* Knomos & Creative Web Framework is Free Software  
*/

//
//  Creative Web FrameWork
//  Permission management
//

//NO LONGER IN USE
/*
function perm_sql_owner($query,$module)
{
	GLOBAL $CONF,$DB,$PERMISSION;
	
	if (isset($PERMISSION[$module])) {
		$conf=array_merge($CONF,$PERMISSION[$module]);
	} else $conf=$CONF;

		
	if ($conf[perm_type]=="advanced")
	{
	
		$WHERE=$conf[perm_field]." LIKE '%U".$_SESSION[fw_userid]."=3333%' AND id > 1 ";
		$sql=str_replace("%[PERM]%",$WHERE,$query);
		return $sql;
				
		//end of Advanced permission query manager
	} elseif ($conf[perm_type]=="simple") {		
		$sql=str_replace("%[PERM]%",$conf[perm_ref_field]."=".$_SESSION[fw_userid],$sql);
		return $sql;
		//end of Simple permission query manager
	}
	
}
*/



function perm_sql_read($query,$module)
{
	GLOBAL $CONF,$DB,$PERMISSION;
	
	for ($cnt=0;$cnt < $CONF[perm_mod_ofs][$module]; $cnt++)
	{
		$mod_ofs.= '_';
	}
	unset($cnt);
	
	if (isset($PERMISSION[$module])) {
		$conf=array_merge($CONF,$PERMISSION[$module]);
	} else $conf=$CONF;


	if (isset($CONF[perm_mod_par][$module]))
	{
		$parent_tab=$CONF[perm_mod_par][$module];
	} else $parent_tab=$module;

		
	if ($conf[perm_type]=="advanced")
	{
		
		//Get default values
		$def=$DB->Execute("SELECT ".$conf[perm_field]." FROM ".$parent_tab." WHERE id=1");
		foreach (explode("|",$def->fields[$conf[perm_field]]) as $value)
		{	
			$tmp=explode("=",$value);
			$default_perm[$tmp[0]]=$tmp[1];
		}
		
		
		//If user is in groups for which we have no default permission, set them to module general permission
		if (strlen($_SESSION[fw_user_groups])>0) {
			foreach(explode(",",$_SESSION[fw_user_groups]) as $user_group) 
			{
				if (!isset($default_perm['G'.$user_group]))
				{
					$default_perm['G'.$user_group]=$default_perm[D];
				}
			}
		}
		
		
		
		//First check, do we have a user specific default permission ?
		if (isset($default_perm['U'.$_SESSION[fw_userid]]))
		{	
			if ($default_perm['U'.$_SESSION[fw_userid]][0]>=3) {
				$WHERE=" p.".$conf[perm_field]." NOT LIKE '%U".$_SESSION[fw_userid]."=".$mod_ofs."2%' AND p.id > 1 ";
			} elseif ($default_perm['U'.$_SESSION[fw_userid]][0]==2)
			{
				$WHERE="( p.".$conf[perm_field]." LIKE '%U".$_SESSION[fw_userid]."=".$mod_ofs."3%' OR p.".$conf[perm_field]." LIKE '%U".$_SESSION[fw_userid]."=".$mod_ofs."4%' OR p.".$conf[perm_field]." LIKE '%U".$_SESSION[fw_userid]."=".$mod_ofs."5%' OR p.".$conf[perm_field]." LIKE '%U".$_SESSION[fw_userid]."=".$mod_ofs."6%')  AND p.id > 1 ";
			}
		} 
		
		//Lets check for user with no default user setting but are in groups
		elseif (!isset($default_perm['U'.$_SESSION[fw_userid]]) && strlen($_SESSION[fw_user_groups])>0)
		{
			$WHERE="( (p.".$conf[perm_field]." LIKE '%U".$_SESSION[fw_userid]."=".$mod_ofs."3%') OR (p.".$conf[perm_field]." LIKE '%U".$_SESSION[fw_userid]."=".$mod_ofs."4%') OR (p.".$conf[perm_field]." LIKE '%U".$_SESSION[fw_userid]."=".$mod_ofs."5%') OR (p.".$conf[perm_field]." LIKE '%U".$_SESSION[fw_userid]."=".$mod_ofs."6%') OR ( ( p.".$conf[perm_field]." NOT LIKE '%U".$_SESSION[fw_userid]."=".$mod_ofs."2%') AND ( ";
			
			//Set Sql operator for group conflicts
			if ($conf[perm_group_conflict]==2) {$op=" AND ";} else $op=" OR ";
			
			//Set sql rule for each group
			$cnt=0;
			foreach(explode(",",$_SESSION[fw_user_groups]) as $user_group)
			{
				if ($default_perm['G'.$user_group][0]==2)
				{
					if ($cnt >0) {$WHERE.= $op;}
					$WHERE.= "( p.".$conf[perm_field]." LIKE '%G".$user_group."=".$mod_ofs."3%' OR p.".$conf[perm_field]." LIKE '%G".$user_group."=".$mod_ofs."4%' OR p.".$conf[perm_field]." LIKE '%G".$user_group."=".$mod_ofs."5%' OR p.".$conf[perm_field]." LIKE '%G".$user_group."=".$mod_ofs."6%')";
					$cnt++;
				} else 
				{
					if ($cnt >0) {$WHERE.= $op;}
					$WHERE.= "p.".$conf[perm_field]." NOT LIKE '%G".$user_group."=".$mod_ofs."2%' ";
					$cnt++;
				}	
			}
			$WHERE .=") )   ) AND p.id > 1";
		} elseif (!isset($default_perm['U'.$_SESSION[fw_userid]]) && strlen($_SESSION[fw_user_groups])==0)
		{
			if ($default_perm[D]>3) {
				$WHERE="p.".$conf[perm_field]." NOT LIKE '%U".$_SESSION[fw_userid]."=".$mod_ofs."2%' AND p.id > 1 ";
			} elseif ($default_perm[D][0]==2)
			{
				$WHERE="( p.".$conf[perm_field]." LIKE '%U".$_SESSION[fw_userid]."=".$mod_ofs."3%' OR p.".$conf[perm_field]." LIKE '%U".$user_group."=".$mod_ofs."4%' OR p.".$conf[perm_field]." LIKE '%U".$user_group."=".$mod_ofs."5%' OR p.".$conf[perm_field]." LIKE '%U".$user_group."=".$mod_ofs."6%') AND p.id > 1 ";
			}
						
		}
		if ($_SESSION[user][admin]==0)
		{
			$sql=str_replace("%[PERM]%",$WHERE,$query);
		} else $sql=str_replace("%[PERM]%","1=1",$query);
		//print $sql;
		return $sql;
				
		//end of Advanced permission query manager
	} elseif ($conf[perm_type]=="simple") {		
		$sql=str_replace("%[PERM]%",$conf[perm_ref_field]."=".$_SESSION[fw_userid],$sql);
		return $sql;
		//end of Simple permission query manager
	} elseif ($conf[perm_type]=="none") {
		$sql=str_replace("%[PERM]%","1=1",$query);
		return $sql;		
	}
	
}

//standard perm=rwpdc*****
function check_perm_obj($module,$obj_id,$permtype)
{
	GLOBAL $CONF,$DB,$PERMISSION;


	$mod_ofs.= $CONF[perm_mod_ofs][$module];

	
	
	$type_perm=$CONF[perm_types][$permtype];

	if (isset($CONF[perm_mod_par][$module]))
	{
		$parent_tab=$CONF[perm_mod_par][$module];
	} else $parent_tab=$module;

	
	if ($_SESSION[user][admin]==1) return true;
	
	//LOAD CONFIG
	if (isset($PERMISSION[$module])) {
		$conf=array_merge($CONF,$PERMISSION[$module]);
	} else $conf=$CONF;

	
	//IS ADVANCED  Permission ?
	if ($conf[perm_type]=="advanced")
	{
		
		
		//Get default values
		$def=$DB->Execute("SELECT ".$conf[perm_field]." FROM ".$parent_tab." WHERE id=1");
		foreach (explode("|",$def->fields[$conf[perm_field]]) as $value)
		{	
			$tmp=explode("=",$value);
			$default_perm[$tmp[0]]=$tmp[1];
		}

		if (strlen($_SESSION[fw_user_groups])>0) {
			foreach(explode(",",$_SESSION[fw_user_groups]) as $user_group) 
			{
				if (!isset($default_perm['G'.$user_group]))
				{
					$default_perm['G'.$user_group]=$default_perm[D];
				}
			}
		}

	
		//Get Object values
		//print "SELECT ".$conf[perm_field]." FROM ".$parent_tab." WHERE id=$obj_id";
		$obj=$DB->Execute("SELECT ".$conf[perm_field]." FROM ".$parent_tab." WHERE id=$obj_id");
		if ($obj->RecordCount()==0) return 0;
		foreach (explode("|",$obj->fields[$conf[perm_field]]) as $value)
		{	
			$tmp=explode("=",$value);
			$obj_perm[$tmp[0]]=$tmp[1];
		}
			

		//Lets check permission
		if ($obj_perm['U'.$_SESSION[fw_userid]][$mod_ofs] >= $CONF[perm_vals][$permtype] || ($obj_perm['U'.$_SESSION[fw_userid]][$mod_ofs]!=2 && $default_perm['U'.$_SESSION[fw_userid]][$mod_ofs]>=$CONF[perm_vals][$permtype]) ) 
		{ return true;}
		elseif ($obj_perm['U'.$_SESSION[fw_userid]][$mod_ofs]==2 || ($obj_perm['U'.$_SESSION[fw_userid]][$mod_ofs] < $CONF[perm_vals][$permtype] && $default_perm['U'.$_SESSION[fw_userid]][$mod_ofs]==2) ) 
		{ return false;} 
		elseif (strlen($_SESSION[fw_user_groups])==0 && !isset($obj_perm['U'.$_SESSION[fw_userid]][$mod_ofs]) && !isset($default_perm['U'.$_SESSION[fw_userid]][$mod_ofs]) && $default_perm[D][$mod_ofs]>=$CONF[perm_vals][$permtype])
		{ return true;}
		elseif (strlen($_SESSION[fw_user_groups])==0 && !isset($obj_perm['U'.$_SESSION[fw_userid]][$mod_ofs]) && !isset($default_perm['U'.$_SESSION[fw_userid]][$mod_ofs]) && $default_perm[D][$mod_ofs]==2)
		{ return false;}
		if (!isset($default_perm['U'.$_SESSION[fw_userid]][$mod_ofs]) && strlen($_SESSION[fw_user_groups]) >0)
		{	$cnt=0;
			foreach(explode(",",$_SESSION[fw_user_groups]) as $user_group) 
			{
				if ($obj_perm['G'.$user_group][$mod_ofs]>=$CONF[perm_vals][$permtype] || ( $default_perm['G'.$user_group][$mod_ofs] >= $CONF[perm_vals][$permtype]  && $obj_perm['G'.$user_group][$mod_ofs]!=2))
				{
					$cnt++;
				}
			}
			if ( ($cnt>0 && $conf[perm_group_conflict]==1) || ($cnt==count(explode(",",$_SESSION[fw_user_groups])) && $conf[perm_group_conflict]==2) ) {
				return true;
			} else return false;
		}
	}
}


function check_perm_mod($module,$perm_type)
{
	GLOBAL $CONF,$PERMISSION;
	
	if ($_SESSION[user][admin]==1) return 1;

	if (isset($PERMISSION[$module])) {
		$conf=array_merge($CONF,$PERMISSION[$module]);
	} else $conf=$CONF;

	
	if ($conf[perm_type]=="advanced")
	{
		
		if ($perm_type==1) return 1;
		if (!is_int($CONF[perm_vals][$perm_type])) return 0;
				
		if (isset($_SESSION[user][$CONF[perm_db_user_field]]))
		{
			foreach(explode("||",$_SESSION[user][$CONF[perm_db_user_field]]) as $v)
			{
				list($mod,$perm)=explode("::",$v);
				if ($mod==$module)
				{
					if ($perm >= $CONF[perm_vals][$perm_type]) {return 1;} else return 0;
				}
			}
		}

		if ($PERMISSION[$module][default_permission] >= $CONF[perm_vals][$perm_type]) {return 1;} else return 0;
	} else return 1;
	
	
}


//standard perm=rwpdc*****
function check_perm_user($user_id,$module,$obj_id="",$newperm="")
{
	GLOBAL $CONF,$DB,$PERMISSION;
	//LOAD CONFIG
	
	if (isset($PERMISSION[$module])) {
		$conf=array_merge($CONF,$PERMISSION[$module]);
	} else $conf=$CONF;
	
	if (isset($CONF[perm_mod_par][$module]))
	{
		$parent_tab=$CONF[perm_mod_par][$module];
	} else $parent_tab=$module;
	
	//IS ADVANCED  Permission ?
	if ($conf[perm_type]=="advanced")
	{
		
		//Get default values
		$def=$DB->Execute("SELECT ".$conf[perm_field]." FROM ".$parent_tab." WHERE id=1");
		foreach (explode("|",$def->fields[$conf[perm_field]]) as $value)
		{	
			$tmp=explode("=",$value);
			$default_perm[$tmp[0]]=$tmp[1];
		}


		$ug=$DB->Execute("SELECT * FROM ".$CONF[auth_group_table]." WHERE userid=$user_id");
		while (!$ug->EOF)
		{	
			$user_group=$ug->FetchRow();
			if (!isset($default_perm['G'.$user_group[groupid]]))
			{
				$default_perm['G'.$user_group]=$default_perm[D];
			}
			$groups_user[$gcnt]=$user_group[groupid];
			$gcnt++;
		}


	
		
		//Get Object values
		if ($obj_id != "" && $newperm=="")
		{
			
			$obj=$DB->Execute("SELECT ".$conf[perm_field]." FROM ".$parent_tab." WHERE id=$obj_id");
			foreach (explode("|",$obj->fields[$conf[perm_field]]) as $value)
			{	
				$tmp=explode("=",$value);
				$obj_perm[$tmp[0]]=$tmp[1];
			}
		} elseif ($newperm != "")
		{
			foreach (explode("|",$newperm) as $value)
			{	
				$tmp=explode("=",$value);
				$obj_perm[$tmp[0]]=$tmp[1];
			}
						
		}
		
				
		foreach($CONF[perm_mod_ofs] as $w => $off)
		{

		//Lets check permission
		if ($obj_perm['U'.$user_id][$off]>0) 
		{ 
			$result[$off][value]=$obj_perm['U'.$user_id][$off];
			$result[$off][source]='OU';
		}
		elseif ( $default_perm['U'.$user_id][$off]>0 ) 
		{ 
			$result[$off][value]=$default_perm['U'.$user_id][$off];
			$result[$off][source]='DU';
		}
		elseif (count($groups_user) > 0 ) 
		{ 	
			$cnt=0;
			$gok=0;
			$gko=0;
			$top=0;
			foreach($groups_user as $user_group)
			{
				
				if ($obj_perm['G'.$user_group][$off]>0 )
				{
					if($obj_perm['G'.$user_group][$off]==2){ $gko++;} else {
						$gok++;
						if ($obj_perm['G'.$user_group][$off] > $top) $top=$obj_perm['G'.$user_group][$off];
					}
					
					$cnt++;
				}
			}
			
			if ($cnt >0 && $gok >0 && $gko >0 && $conf[perm_group_conflict]==1)
			{
				$result[$off][value]=$top;
				$result[$off][source]='OG';
			} elseif ($cnt >0 && $gok >0 && $gko >0 && $conf[perm_group_conflict]!=1)
			{
				$result[$off][value]=2;
				$result[$off][source]='OG';
			} elseif ($cnt >0 && $gok >0 && $gko ==0)
			{
				$result[$off][value]=$top;
				$result[$off][source]='OG';
			} elseif ($cnt >0 && $gok ==0 && $gko >0)
			{
				$result[$off][value]=2;
				$result[$off][source]='OG';
			} else
			{	//Check for default group
				$cnt=0;
				$gok=0;
				$gko=0;
				$top=0;
				foreach($groups_user as $user_group) 
				{
					if ($default_perm['G'.$user_group][$off]>0 )
					{
						if($default_perm['G'.$user_group][$off]==2){ $gko++;} else {
							$gok++;
							if ($obj_perm['G'.$user_group][$off] > $top) $top=$obj_perm['G'.$user_group][$off];
						}
						$cnt++;
					}
				}
				
				if ($cnt >0 && $gok >0 && $gko >0 && $conf[perm_group_conflict]==1)
				{
					$result[$off][value]=$top;
					$result[$off][source]='DG';
				} elseif ($cnt >0 && $gok >0 && $gko >0 && $conf[perm_group_conflict]!=1)
				{
					$result[$off][value]=2;
					$result[$off][source]='DG';
				} elseif ($cnt >0 && $gok >0 && $gko ==0)
				{
					$result[$off][value]=$top;
					$result[$off][source]='DG';
				} elseif ($cnt >0 && $gok ==0 && $gko >0)
				{
					$result[$off][value]=2;
					$result[$off][source]='DG';
				}
			}
		}  
		
		if (!isset($result[$off][value]) && !isset($result[$off][source]))
		{
			$result[$off][value]=$default_perm[D][$off];
			$result[$off][source]='D';
		}
		
		}

	}
	

	return $result;
}



//standard perm=rwpdc*****
function check_perm_group($group_id,$module,$obj_id="",$newperm="")
{
	GLOBAL $CONF,$DB,$PERMISSION;
	
	
	//LOAD CONFIG
	if (isset($PERMISSION[$module])) {
		$conf=array_merge($CONF,$PERMISSION[$module]);
	} else $conf=$CONF;
	
	if (isset($CONF[perm_mod_par][$module]))
	{
		$parent_tab=$CONF[perm_mod_par][$module];
	} else $parent_tab=$module;

	//IS ADVANCED  Permission ?
	if ($conf[perm_type]=="advanced")
	{
		
		//Get default values
		$def=$DB->Execute("SELECT ".$conf[perm_field]." FROM ".$parent_tab." WHERE id=1");
		
		foreach (explode("|",$def->fields[$conf[perm_field]]) as $value)
		{	
			$tmp=explode("=",$value);
			$default_perm[$tmp[0]]=$tmp[1];
		}
			
		
		//Get Object values
		if ($obj_id != "" && $newperm=="")
		{	
			$obj=$DB->Execute("SELECT ".$conf[perm_field]." FROM ".$parent_tab." WHERE id=$obj_id");
			foreach (explode("|",$obj->fields[$conf[perm_field]]) as $value)
			{	
				$tmp=explode("=",$value);
				$obj_perm[$tmp[0]]=$tmp[1];
			}
		} elseif ($newperm != "")
		{
			foreach (explode("|",$newperm) as $value)
			{	
				$tmp=explode("=",$value);
				$obj_perm[$tmp[0]]=$tmp[1];
			}
						
		}
		
		
		
		foreach($CONF[perm_mod_ofs] as $w => $off)
		{
			
		//Lets check permission
		if ($obj_perm['G'.$group_id][$off]>0 ) 
		{ 
			$result[$off][value]=$obj_perm['G'.$group_id][$off];
			$result[$off][source]='OG';
		}
		elseif ( $default_perm['G'.$group_id][$off] >0 ) 
		{ 
			$result[$off][value]=$default_perm['G'.$group_id][$off];
			$result[$off][source]='DG';
		} else 
		{
			$result[$off][value]=$default_perm[D][$off];
			$result[$off][source]='D';
		}
		
		}

	}
	

	return $result;
}











?>