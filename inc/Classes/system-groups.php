<?php if(!defined("inside")) exit;

/*/////////////////////////////////////
* Filename: admin-lengths.php
* Purpose: site settings actions ( update ).
* Author: ibnkamal@msn.com
* Date: 04/04/2015
/////////////////////////////////////*/

class systemGroups
{
	var $tableName 	= "groups";

	function getsiteGroups($addon = "")
	{
		if($GLOBALS['login']->doCheck() == true)
		{
			$query = $GLOBALS['db']->query("SELECT * FROM `".$this->tableName."`ORDER BY `id` ASC ".$addon);
			$queryTotal = $GLOBALS['db']->resultcount();
			if($queryTotal > 0)
			{
				return($GLOBALS['db']->fetchlist());
			}else{return null;}
		}else{$GLOBALS['login']->doDestroy();return false;}
	}

	function getTotalGroups($addon = "")
	{
		if($GLOBALS['login']->doCheck() == true)
		{
			$query 				= $GLOBALS['db']->query("SELECT COUNT(*) AS `total` FROM `".$this->tableName."` ");
			$queryTotal 		= $GLOBALS['db']->fetchrow();
			$total 				= $queryTotal['total'];
			return ($total);
		}else{$GLOBALS['login']->doDestroy();return false;}
	}

	function getGroupsInformations($mId)
	{
		if($GLOBALS['login']->doCheck() == true)
		{
			$query = $GLOBALS['db']->query("SELECT * FROM `".$this->tableName."` WHERE `id` = '".$mId."' LIMIT 1 ");
			$queryTotal = $GLOBALS['db']->resultcount();
			if($queryTotal > 0)
			{
				$sitegroup = $GLOBALS['db']->fetchitem($query);
				return array(
					"id"			                => 		$sitegroup['id'],
					"name"			                => 		$sitegroup['name'],
					"groups_list"			        => 		$sitegroup['groups_list'],
					"groups_delete"			        => 		$sitegroup['groups_delete'],
					"groups_add"			        => 		$sitegroup['groups_add'],
					"groups_edit"			        => 		$sitegroup['groups_edit'],
					"groups_active"			        => 		$sitegroup['groups_active'],
					"groups_view"			        => 		$sitegroup['groups_view'],
					"staff_list"			        => 		$sitegroup['staff_list'],
					"staff_delete"			        => 		$sitegroup['staff_delete'],
					"staff_add"			            => 		$sitegroup['staff_add'],
					"staff_edit"			        => 		$sitegroup['staff_edit'],
					"staff_active"			        => 		$sitegroup['staff_active'],
					"staff_view"			        => 		$sitegroup['staff_view'],
					"logs"			                => 		$sitegroup['logs'],
					"logs_view"			            => 		$sitegroup['logs_view'],
					"search"			            => 		$sitegroup['search'],
					"settings"			            => 		$sitegroup['settings'],
					"contacts_list"			        => 		$sitegroup['contacts_list'],
					"contacts_view"			        => 		$sitegroup['contacts_view'],
					"index"			                => 		$sitegroup['index'],
					"status"		                => 		$sitegroup['status']
				);


			}else{return null;}
		}else{$GLOBALS['login']->doDestroy();return false;}
	}
	
	function isGroupsExists($name)
	{
		if($GLOBALS['login']->doCheck() == true)
		{
			$query = $GLOBALS['db']->query("SELECT * FROM `".$this->tableName."` WHERE `name` = '".$name."' LIMIT 1 ");
			$queryTotal = $GLOBALS['db']->resultcount();
			if($queryTotal == 1)
			{
				$siteGroup = $GLOBALS['db']->fetchitem($query);
				return array(
					"id"			=> 		$siteGroup['id'],
				);


			}else{return true;}
		}else{$GLOBALS['login']->doDestroy();return false;}
	}

	function setGroupsInformation($group)
	{
		
		$GLOBALS['db']->query("UPDATE LOW_PRIORITY `".$this->tableName."` SET
			`name`                     ='".$group[name]."',
			`groups_list`              ='".$group[groups_list]."',
			`groups_delete`            ='".$group[groups_delete]."',
			`groups_add`               ='".$group[groups_add]."',
			`groups_edit`              ='".$group[groups_edit]."',
			`groups_active`            ='".$group[groups_active]."',
			`groups_view`              ='".$group[groups_view]."',
			`staff_list`               ='".$group[staff_list]."',
			`staff_delete`             ='".$group[staff_delete]."',
			`staff_add`                ='".$group[staff_add]."',
			`staff_edit`               ='".$group[staff_edit]."',
			`staff_active`             ='".$group[staff_active]."',
			`staff_view`               ='".$group[staff_view]."',
			`logs`                     ='".$group[logs]."',
			`logs_view`                ='".$group[logs_view]."',
			`search`                   ='".$group[search]."',
			`contacts_list`            ='".$group[contacts_list]."',
			`contacts_view`            ='".$group[contacts_view]."',
			`settings`                 ='".$group[settings]."',
			`index`                    ='".$group[index]."'
			WHERE `id` = '".$group[id]."' LIMIT 1 ");

		return 1;
	}
	function activestatusGroups($mId,$status)
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

	function addNewGroups($group)
	{
		$GLOBALS['db']->query("INSERT LOW_PRIORITY INTO `".$this->tableName."`
		(`id`  , `name`             , `status`, `groups_list`, `groups_delete`, `groups_add`, `groups_edit`, `groups_view`, `groups_active`, `notifications_list`, `notifications_delete`, `notifications_view`, `notifications_edit`, `notifications_add`, `contacts_list`, `contacts_active`, `orders_list`, `orders_view`, `cakes_list`, `cakes_view`, `offers_reg_list`, `categories_list`, `categories_view`, `categories_delete`, `categories_edit`, `categories_add`, `items_list`, `items_view`, `items_category`, `items_delete`, `items_edit`, `items_add`, `caketypes_list`, `caketypes_view`, `caketypes_delete`, `caketypes_edit`, `caketypes_add`, `offers_list`, `offers_view`, `offers_edit`, `offers_delete`, `offers_add`, `branches_list`, `branches_view`, `branches_edit`, `branches_delete`, `branches_add`, `search`, `settings`, `index`) VALUES
		( NULL , '".$group[name]."' ,   '1'   ,     '1'      ,      '1'       ,      '1'    ,    '1'       ,        '1'   ,     '1'        ,         '1'         ,        '1'            ,          '1'        ,         '1'         ,        '1'         ,       '1'      ,    '1'           ,      '1'     ,     '1'      ,   '1'       ,      '1'    ,      '1'         ,     '1'          ,        '1'       ,         '1'        ,     '1'          ,       '1'       ,      '1'    ,      '1'    ,        '1'      ,        '1'    ,      '1'    ,     '1'    ,        '1'      ,        '1'      ,         '1'       ,        '1'      ,        '1'     ,      '1'     ,      '1'     ,    '1'       ,       '1'      ,     '1'     ,      '1'       ,       '1'      ,      '1'       ,        '1'       ,      '1'      ,   '1'   ,    '1' ,'1')
");


		return 1;
	}


	function deleteGroups($mId)
	{
		$GLOBALS['db']->query("DELETE LOW_PRIORITY FROM `".$this->tableName."` WHERE `id`	=	'".$mId."' LIMIT 1 ");
		return 1;
	}

}
?>