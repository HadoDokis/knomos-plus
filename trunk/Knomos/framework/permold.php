<?
//
//  Creative Web FrameWork
//  Permission management
//

function perm_sql_owner($query,$module)
{
	GLOBAL $CONF,$DB,$PERMISSION;
	
	if (isset($PERMISSION[$module])) {
		$conf=array_merge($CONF,$PERMISSION[$module]);
	} else $conf=$CONF;

		
	if ($conf[perm_type]=="advanced")
	{
	
		$WHERE=$conf[perm_field]." LIKE '%U".$_SESSION[fw_userid]."=33333%' AND id > 1 ";
		$sql=str_replace("%[PERM]%",$WHERE,$query);
		return $sql;
				
		//end of Advanced permission query manager
	} elseif ($conf[perm_type]=="simple") {		
		$sql=str_replace("%[PERM]%",$conf[perm_ref_field]."=".$_SESSION[fw_userid],$sql);
		return $sql;
		//end of Simple permission query manager
	}
	
}




function perm_sql_read($query,$module)
{
	GLOBAL $CONF,$DB,$PERMISSION;
	
	if (isset($PERMISSION[$module])) {
		$conf=array_merge($CONF,$PERMISSION[$module]);
	} else $conf=$CONF;

		
	if ($conf[perm_type]=="advanced")
	{
		
		//Get default values
		$def=$DB->Execute("SELECT ".$conf[perm_field]." FROM ".$module." WHERE id=1");
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
			if ($default_perm['U'.$_SESSION[fw_userid]][0]==1) {
				$WHERE=$conf[perm_field]." NOT LIKE '%U".$_SESSION[fw_userid]."=2%' AND id > 1 ";
			} elseif ($default_perm['U'.$_SESSION[fw_userid]][0]==2)
			{
				$WHERE="( ".$conf[perm_field]." LIKE '%U".$_SESSION[fw_userid]."=1%' OR ".$conf[perm_field]." LIKE '%U".$_SESSION[fw_userid]."=3%')  AND id > 1 ";
			}
		} 
		
		//Lets check for user with no default user setting but are in groups
		elseif (!isset($default_perm['U'.$_SESSION[fw_userid]]) && strlen($_SESSION[fw_user_groups])>0)
		{
			$WHERE="( (".$conf[perm_field]." LIKE '%U".$_SESSION[fw_userid]."=3%') OR (".$conf[perm_field]." LIKE '%U".$_SESSION[fw_userid]."=1%') OR ( (".$conf[perm_field]." NOT LIKE '%U".$_SESSION[fw_userid]."=2%') AND ( ";
			
			//Set Sql operator for group conflicts
			if ($conf[perm_group_conflict]==2) {$op=" AND ";} else $op=" OR ";
			
			//Set sql rule for each group
			$cnt=0;
			foreach(explode(",",$_SESSION[fw_user_groups]) as $user_group)
			{
				if ($default_perm['G'.$user_group][0]==2)
				{
					if ($cnt >0) {$WHERE.= $op;}
					$WHERE.= "( ".$conf[perm_field]." LIKE '%G".$user_group."=1%' OR ".$conf[perm_field]." LIKE '%G".$user_group."=3%' )";
					$cnt++;
				} else 
				{
					if ($cnt >0) {$WHERE.= $op;}
					$WHERE.= $conf[perm_field]." NOT LIKE '%G".$user_group."=2%' ";
					$cnt++;
				}	
			}
			$WHERE .=") )   ) AND id > 1";
		} elseif (!isset($default_perm['U'.$_SESSION[fw_userid]]) && strlen($_SESSION[fw_user_groups])==0)
		{
			if ($default_perm[D][0]==1) {
				$WHERE=$conf[perm_field]." NOT LIKE '%U".$_SESSION[fw_userid]."=2%' AND id > 1 ";
			} elseif ($default_perm[D][0]==2)
			{
				$WHERE="( ".$conf[perm_field]." LIKE '%U".$_SESSION[fw_userid]."=1%' OR ".$conf[perm_field]." LIKE '%G".$user_group."=3%') AND id > 1 ";
			}
						
		}
		
		$sql=str_replace("%[PERM]%",$WHERE,$query);
		return $sql;
				
		//end of Advanced permission query manager
	} elseif ($conf[perm_type]=="simple") {		
		$sql=str_replace("%[PERM]%",$conf[perm_ref_field]."=".$_SESSION[fw_userid],$sql);
		return $sql;
		//end of Simple permission query manager
	}
	
}

//standard perm=rwpdc*****
function check_perm_obj($module,$obj_id,$permtype)
{
	GLOBAL $CONF,$DB,$PERMISSION;
	
	$type_perm=$CONF[perm_types][$permtype];

	//LOAD CONFIG
	if (isset($PERMISSION[$module])) {
		$conf=array_merge($CONF,$PERMISSION[$module]);
	} else $conf=$CONF;

	
	//IS ADVANCED  Permission ?
	if ($conf[perm_type]=="advanced")
	{
		
		//Get default values
		$def=$DB->Execute("SELECT ".$conf[perm_field]." FROM ".$module." WHERE id=1");
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
		$obj=$DB->Execute("SELECT ".$conf[perm_field]." FROM ".$module." WHERE id=$obj_id");
		if ($obj->RecordCount()==0) return 0;
		foreach (explode("|",$obj->fields[$conf[perm_field]]) as $value)
		{	
			$tmp=explode("=",$value);
			$obj_perm[$tmp[0]]=$tmp[1];
		}
			
		//Lets check permission
		if ($obj_perm['U'.$_SESSION[fw_userid]][$type_perm]==3 || $obj_perm['U'.$_SESSION[fw_userid]][$type_perm]==1 || ($obj_perm['U'.$_SESSION[fw_userid]][$type_perm]!=2 && $default_perm['U'.$_SESSION[fw_userid]][$type_perm]==1) ) 
		{ return true;}
		elseif ($obj_perm['U'.$_SESSION[fw_userid]][$type_perm]==2 || ($obj_perm['U'.$_SESSION[fw_userid]][$type_perm]!=3 && $obj_perm['U'.$_SESSION[fw_userid]][$type_perm]!=1 && $default_perm['U'.$_SESSION[fw_userid]][$type_perm]==2) ) 
		{ return false;} 
		elseif (strlen($_SESSION[fw_user_groups])==0 && !isset($obj_perm['U'.$_SESSION[fw_userid]][$type_perm]) && !isset($default_perm['U'.$_SESSION[fw_userid]][$type_perm]) && $default_perm[D][$type_perm]==1)
		{ return true;}
		elseif (strlen($_SESSION[fw_user_groups])==0 && !isset($obj_perm['U'.$_SESSION[fw_userid]][$type_perm]) && !isset($default_perm['U'.$_SESSION[fw_userid]][$type_perm]) && $default_perm[D][$type_perm]==2)
		{ return false;}
		if (!isset($default_perm['U'.$_SESSION[fw_userid]][$type_perm]) && strlen($_SESSION[fw_user_groups]) >0)
		{	$cnt=0;
			foreach(explode(",",$_SESSION[fw_user_groups]) as $user_group) 
			{
				if ($obj_perm['G'.$user_group][$type_perm]==3 || $obj_perm['G'.$user_group][$type_perm]==1 || (($default_perm['G'.$user_group][$type_perm]==1 || $default_perm['G'.$user_group][$type_perm]==3) && $obj_perm['G'.$user_group][$type_perm]!=2))
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
	
	if (isset($_SESSION[user][$CONF[perm_db_user_field]]))
	{
		foreach(explode("||",$_SESSION[user][$CONF[perm_db_user_field]]) as $v)
		{
			list($mod,$perm)=explode("::",$v);
			if ($mod==$module)
			{
				$offset=$CONF[perm_types][$perm_type];
				if ($perm[$offset]==1) return 1;
				if ($perm[$offset]==0) return 0;
			}
		}
	}
	
	$offset=$CONF[perm_types][$perm_type];
	if ($PERMISSION[$module][default_permission][$offset]==1) return 1;
	if ($PERMISSION[$module][default_permission][$offset]==0) return 0;
	
	
}


//standard perm=rwpdc*****
function check_perm_user($user_id,$module,$obj_id="",$newperm="")
{
	GLOBAL $CONF,$DB,$PERMISSION;
	//LOAD CONFIG
	
	if (isset($PERMISSION[$module])) {
		$conf=array_merge($CONF,$PERMISSION[$module]);
	} else $conf=$CONF;
	
	
	
	//IS ADVANCED  Permission ?
	if ($conf[perm_type]=="advanced")
	{
		
		//Get default values
		$def=$DB->Execute("SELECT ".$conf[perm_field]." FROM ".$module." WHERE id=1");
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
			
			$obj=$DB->Execute("SELECT ".$conf[perm_field]." FROM ".$module." WHERE id=$obj_id");
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
		
				
		foreach($CONF[perm_types] as $w => $off)
		{

		//Lets check permission
		if ($obj_perm['U'.$user_id][$off]==1 || $obj_perm['U'.$user_id][$off]==2 || $obj_perm['U'.$user_id][$off]==3) 
		{ 
			$result[$off][value]=$obj_perm['U'.$user_id][$off];
			$result[$off][source]='OU';
		}
		elseif ( $default_perm['U'.$user_id][$off]==1 || $default_perm['U'.$user_id][$off]==2 ) 
		{ 
			$result[$off][value]=$default_perm['U'.$user_id][$off];
			$result[$off][source]='DU';
		}
		elseif (count($groups_user) > 0 ) 
		{ 	
			$cnt=0;
			$gok=0;
			$gko=0;
			foreach($groups_user as $user_group)
			{
				
				if ($obj_perm['G'.$user_group][$off]==1 ||  $obj_perm['G'.$user_group][$off]==2 ||  $obj_perm['G'.$user_group][$off]==3)
				{
					if($obj_perm['G'.$user_group][$off]==1){ $gok++;}
					if($obj_perm['G'.$user_group][$off]==3){ $gok++;}
					if($obj_perm['G'.$user_group][$off]==2){ $gko++;}
					$cnt++;
				}
			}
			
			if ($cnt >0 && $gok >0 && $gko >0 && $conf[perm_group_conflict]==1)
			{
				$result[$off][value]=1;
				$result[$off][source]='OG';
			} elseif ($cnt >0 && $gok >0 && $gko >0 && $conf[perm_group_conflict]!=1)
			{
				$result[$off][value]=2;
				$result[$off][source]='OG';
			} elseif ($cnt >0 && $gok >0 && $gko ==0)
			{
				$result[$off][value]=1;
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
				foreach($groups_user as $user_group) 
				{
					if ($default_perm['G'.$user_group][$off]==1 ||  $default_perm['G'.$user_group][$off]==2)
					{
						if($default_perm['G'.$user_group][$off]==1){ $gok++;}
						if($default_perm['G'.$user_group][$off]==2){ $gko++;}
						$cnt++;
					}
				}
				
				if ($cnt >0 && $gok >0 && $gko >0 && $conf[perm_group_conflict]==1)
				{
					$result[$off][value]=1;
					$result[$off][source]='DG';
				} elseif ($cnt >0 && $gok >0 && $gko >0 && $conf[perm_group_conflict]!=1)
				{
					$result[$off][value]=2;
					$result[$off][source]='DG';
				} elseif ($cnt >0 && $gok >0 && $gko ==0)
				{
					$result[$off][value]=1;
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
	
	

	//IS ADVANCED  Permission ?
	if ($conf[perm_type]=="advanced")
	{
		
		//Get default values
		$def=$DB->Execute("SELECT ".$conf[perm_field]." FROM ".$module." WHERE id=1");
		
		foreach (explode("|",$def->fields[$conf[perm_field]]) as $value)
		{	
			$tmp=explode("=",$value);
			$default_perm[$tmp[0]]=$tmp[1];
		}
			
		
		//Get Object values
		if ($obj_id != "" && $newperm=="")
		{	
			$obj=$DB->Execute("SELECT ".$conf[perm_field]." FROM ".$module." WHERE id=$obj_id");
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
		
		
		
		foreach($CONF[perm_types] as $w => $off)
		{
			
		//Lets check permission
		if ($obj_perm['G'.$group_id][$off]==1 || $obj_perm['G'.$group_id][$off]==2 || $obj_perm['G'.$group_id][$off]==3) 
		{ 
			$result[$off][value]=$obj_perm['G'.$group_id][$off];
			$result[$off][source]='OG';
		}
		elseif ( $default_perm['G'.$group_id][$off]==1 || $default_perm['G'.$group_id][$off]==2 ) 
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