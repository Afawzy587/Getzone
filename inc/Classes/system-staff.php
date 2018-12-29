<?php if(!defined("inside")) exit;

/*/////////////////////////////////////
* Filename: admin-staff.php
* Purpose: site staff actions ( update - add - delete - view - retreive ).
* Author: ibnkamal@msn.com
* Date: 20/03/2016
/////////////////////////////////////*/

class systemStaff
{
	var $tableName 	= "staff";

	function getsiteStaff($addon = "")
	{
		if($GLOBALS['login']->doCheck() == true)
		{
			$query = $GLOBALS['db']->query("SELECT * FROM `".$this->tableName."` WHERE `group` != '-1' ORDER BY `id` ASC ".$addon);
			$queryTotal = $GLOBALS['db']->resultcount();
			if($queryTotal > 0)
			{
				return($GLOBALS['db']->fetchlist());
			}else{return null;}
		}else{$GLOBALS['login']->doDestroy();return false;}
	}


	function getTotalStaff($addon = "")
	{
		if($GLOBALS['login']->doCheck() == true)
		{
			$query 				= $GLOBALS['db']->query("SELECT COUNT(*) AS `total` FROM `".$this->tableName."` WHERE `group` != '-1' ");
			$queryTotal 		= $GLOBALS['db']->fetchrow();
			$total 				= $queryTotal['total'];
			return ($total);
		}else{$GLOBALS['login']->doDestroy();return false;}
	}

	function getStaffInformation($mId)
	{
		if($GLOBALS['login']->doCheck() == true)
		{
			$query = $GLOBALS['db']->query("SELECT * FROM `".$this->tableName."` WHERE `id` = '".$mId."' LIMIT 1 ");
			$queryTotal = $GLOBALS['db']->resultcount();
			if($queryTotal > 0)
			{
				$siteStaff = $GLOBALS['db']->fetchitem($query);
				return array(
					"id"			=> 		$siteStaff['id'],
					"email"			=> 		$siteStaff['email'],
					"name"			=> 		$siteStaff['name'],
					"mobile"		=> 		$siteStaff['mobile'],
					"group"		    => 		$siteStaff['group'],
					"notes"			=> 		br2nl($siteStaff['notes']),
					"log_time"		=> 		$siteStaff['log_time'],
					"status"		=> 		$siteStaff['status']
				);


			}else{return null;}
		}else{$GLOBALS['login']->doDestroy();return false;}
	}

	function setStaffInformation($staff)
	{
		if($staff[password] != "")
		{
			$queryGlue = "`password`='".(md5($GLOBALS['login']->salt.$staff[password].$GLOBALS['login']->salt))."',";
		}else
		{
			$queryGlue = "";
		}

		$GLOBALS['db']->query("UPDATE LOW_PRIORITY `".$this->tableName."` SET
			`name`     ='".$staff[name]."',
			`email`    ='".$staff[email]."',".$queryGlue."
			`status`   ='".$staff[status]."',
			`notes`    ='".$staff[notes]."',
			`group`    ='".$staff[group]."',
			`mobile`   ='".$staff[mobile]."'
			WHERE `id` = '".$staff[id]."' LIMIT 1 ");


		return 1;
	}

	function addNewStaff($staff)
	{
		if($staff[password] != "")
		{
			$staff[password] = md5($GLOBALS['login']->salt.$staff[password].$GLOBALS['login']->salt);
        }else
        {
        	$staff[password] = "";
        }


		$GLOBALS['db']->query("INSERT LOW_PRIORITY INTO `".$this->tableName."` ( `id` , `name` ,  `email` ,  `password` ,  `mobile` , `notes` , `group`, `status` ) 
		VALUES ( NULL , '".$staff[name]."' , '".$staff[email]."' , '".$staff[password]."' , '".$staff[mobile]."' , '".$staff[notes]."' ,'".$staff[group]."' , '1' ) ");


		return 1;
	}

	function checkDuplicatedStaff($email)
	{
		if($GLOBALS['login']->doCheck() == true)
		{
			$query = $GLOBALS['db']->query("SELECT * FROM `".$this->tableName."` WHERE `email` = '".$email."' ");
			$queryTotal = $GLOBALS['db']->resultcount();
			if($queryTotal > 0)
			{
				return false;
			}else{return 1;}
		}else{$GLOBALS['login']->doDestroy();return false;}
	}
	
	function activestatusStaff($mId,$status)
	{  
		if($status==1)
		{
			$GLOBALS['db']->query("UPDATE LOW_PRIORITY `".$this->tableName."` SET
			`status`    =	'0'
			 WHERE `id` 		 = 	'".$mId."' LIMIT 1 ");
			return 1;
		}else
		{
			$GLOBALS['db']->query("UPDATE LOW_PRIORITY `".$this->tableName."` SET
				`status`    =	'1'
			 	WHERE `id` 		 = 	'".$mId."' LIMIT 1 ");
			return 1;
		}
	}

	function getDuplicatedStaff($email)
	{
		if($GLOBALS['login']->doCheck() == true)
		{
			$query = $GLOBALS['db']->query("SELECT * FROM `".$this->tableName."` WHERE `email` = '".$email."' ");
			$queryTotal = $GLOBALS['db']->resultcount();
			if($queryTotal > 0)
			{
				return($GLOBALS['db']->fetchItem());
			}else{return 1;}
		}else{$GLOBALS['login']->doDestroy();return false;}
	}


	function deleteStaff($mId)
	{
		$GLOBALS['db']->query("DELETE LOW_PRIORITY FROM `".$this->tableName."` WHERE `id`	=	'".$mId."' LIMIT 1 ");
		return 1;
	}

}
?>