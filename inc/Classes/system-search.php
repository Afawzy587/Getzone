<?php if(!defined("inside")) exit;

/*/////////////////////////////////////
* Filename: admin-search.php
* Purpose: admin search queries ( select , view , edit ).
* Author: ibnkamal@msn.com
* Date: 23/04/2015
/////////////////////////////////////*/

class sysSearch
{


	function doSearchAdvancedgroups($q)
	{
		if($GLOBALS['login']->doCheck() == true)
		{
			$query = $GLOBALS['db']->query("SELECT 
			c.id,
			c.name
			FROM `groups` c WHERE ( c.`name` LIKE '%".$q."%' ) ORDER BY c.`id` DESC ");
			$queryTotal = $GLOBALS['db']->resultcount();
			if($queryTotal > 0)
			{
				return($GLOBALS['db']->fetchlist());
			}else{return null;}
		}else{$GLOBALS['login']->doDestroy();return false;}
	}

	function doSearchAdvancedcontacts($q)
	{
		if($GLOBALS['login']->doCheck() == true)
		{
			$query = $GLOBALS['db']->query("SELECT 
			c.id,
			c.name,
			c.mobile,
			c.message
			FROM `contacts` c WHERE ( c.`name` LIKE '%".$q."%'|| c.`message` LIKE '%".$q."%'  || c.`mobile` = '".$q."') ORDER BY c.`id` DESC ");
			$queryTotal = $GLOBALS['db']->resultcount();
			if($queryTotal > 0)
			{
				return($GLOBALS['db']->fetchlist());
			}else{return null;}
		}else{$GLOBALS['login']->doDestroy();return false;}
	}
	


}
?>