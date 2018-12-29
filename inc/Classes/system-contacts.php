<?php if(!defined("inside")) exit;

/*/////////////////////////////////////
* Filename: admin-lengths.php
* Purpose: site settings actions ( update ).
* Author: ibnkamal@msn.com
* Date: 04/04/2015
/////////////////////////////////////*/

class systemContacts
{
	var $tableName 	= "contacts";

	function getsiteContacts($addon = "")
	{
		if($GLOBALS['login']->doCheck() == true)
		{
			$query = $GLOBALS['db']->query("SELECT * FROM `".$this->tableName."` ORDER BY `id` DESC ".$addon);
			$queryTotal = $GLOBALS['db']->resultcount();
			if($queryTotal > 0)
			{
				return($GLOBALS['db']->fetchlist());
			}else{return null;}
		}else{$GLOBALS['login']->doDestroy();return false;}
	}

	function getTotalContacts($addon = "")
	{
		if($GLOBALS['login']->doCheck() == true)
		{
			$query 				= $GLOBALS['db']->query("SELECT COUNT(*) AS `total` FROM `".$this->tableName."` ");
			$queryTotal 		= $GLOBALS['db']->fetchrow();
			$total 				= $queryTotal['total'];
			return ($total);
		}else{$GLOBALS['login']->doDestroy();return false;}
	}
	function activestatusContacts($mId,$status)
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
	function getContactsInformations($mId)
	{
		if($GLOBALS['login']->doCheck() == true)
		{
			$query = $GLOBALS['db']->query("SELECT * FROM `".$this->tableName."` WHERE `id` = '".$mId."' LIMIT 1 ");
			$queryTotal = $GLOBALS['db']->resultcount();
			if($queryTotal > 0)
			{
				$sitecontect = $GLOBALS['db']->fetchitem($query);
				return array(
					"id"			=> 		$sitecontect['id'],
					"name"			=> 		$sitecontect['name'],
					"mobile"		=> 		$sitecontect['mobile'],
					"subject"		=> 		$sitecontect['subject'],
					"email"		    => 		$sitecontect['email'],
					"message"	    => 		$sitecontect['message'],
					"time"	        => 		$sitecontect['time'],
					"status"	    => 		$sitecontect['status']
				);


			}else{return null;}
		}else{$GLOBALS['login']->doDestroy();return false;}
	}
	
	function deleteContacts($mId)
	{
		$GLOBALS['db']->query("DELETE LOW_PRIORITY FROM `".$this->tableName."` WHERE `id` = '".$mId."' LIMIT 1 ");
		return 1;
	}
	
	function setContactsInformation($contect)
	{
		$GLOBALS['db']->query("UPDATE  `".$this->tableName."` SET
			`name`		       =	'".$contect[name]."',
			`mobile`           =	'".$contect[mobile]."',
			`message`          =	'".$contect[message]."',
			`subject`          =	'".$contect[subject]."',
			`email`            =	'".$contect[email]."',
			`time`             =	'".$contect[_time]."',
			`status`           =	'".$contect[status]."'
			WHERE `id` 		   = 	'".$contect[id]."' LIMIT 1 ");
		return 1;
	}
	
	function addNewContacts($contect)
	{
		$GLOBALS['db']->query("INSERT LOW_PRIORITY INTO `".$this->tableName."`
		(`id`, `name`,`mobile`, `message`, `time`, `status`)VALUES
		( NULL ,  '".$contect[name]."','".$contect[mobile]."' ,  '".$contect[message]."',  '".$contect[_time]."', 1)");
		
		
   
		return 1;
	}

}
?>