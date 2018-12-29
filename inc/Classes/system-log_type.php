<?php if(!defined("inside")) exit;

/*/////////////////////////////////////
* Filename: admin-settings.php
* Purpose: site settings actions ( update ).
* Author: ibnkamal@msn.com
* Date: 03/04/2015
/////////////////////////////////////*/

class Log_type
{
	var $tableName 	= "log_type";


	
		function getsiteLog_type($addon = "")
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

	function getTotalLog_type()
	{
		if($GLOBALS['login']->doCheck() == true)
		{
			$query 				= $GLOBALS['db']->query("SELECT COUNT(*) AS `total` FROM `".$this->tableName."` ");
			$queryTotal 		= $GLOBALS['db']->fetchrow();
			$total 				= $queryTotal['total'];
			return ($total);
		}else{$GLOBALS['login']->doDestroy();return false;}
	}
	
	function getLog_type($mId)
	{
		if($GLOBALS['login']->doCheck() == true)
		{
			$query = $GLOBALS['db']->query("SELECT * FROM `".$this->tableName."` WHERE `id` = '".$mId."' LIMIT 1 ");
			$queryTotal = $GLOBALS['db']->resultcount();
			if($queryTotal > 0)
			{
				$sitelog = $GLOBALS['db']->fetchitem($query);
				return array(
					"id"			=> 		$sitelog['id'],
					"type"			=> 		$sitelog['type'],
					"module"		=> 		$sitelog['module'],
					"mode"			=> 		$sitelog['mode'],
					"params"		=> 		$sitelog['params']
					
				);
			}else{return null;}
		}else{$GLOBALS['login']->doDestroy();return false;}
	}
	
 

}
?>