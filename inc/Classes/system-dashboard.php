<?php if(!defined("inside")) exit;

/*/////////////////////////////////////
* Filename: admin-invoices.php
* Purpose: site settings actions ( update ).
* Author: ibnkamal@msn.com
* Date: 04/04/2015
/////////////////////////////////////*/

//class systemDashboard
//{
//	var $tableName 	       = "cards";
//
//	function getInitialedData()
//	{
//		if($GLOBALS['login']->doCheck() == true)
//		{
//			$staffId 			= $GLOBALS['login']->getUserId();
//			$query 				= $GLOBALS['db']->query(" 
//				( SELECT COUNT(*) AS `total`,1 as `type` FROM `points` WHERE `date` = '".date("Y-m-d")."' AND `staff_id` = '".$staffId."' )
//				UNION ALL ( SELECT COUNT(*) AS `total`,2 as `type` FROM `cards` WHERE `date` = '".date("Y-m-d")."' AND `staff_id` = '".$staffId."' AND `status` = '1' )
//			");
//			$todayStats 		= $GLOBALS['db']->fetchlist();
//			return array("stats"=>$todayStats);
//		}else{$GLOBALS['login']->doDestroy();return false;}
//	}
//	
//}
	
?>