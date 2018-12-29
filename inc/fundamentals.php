<?php  if(!defined("inside"))  exit;?>
<?php
    
	error_reporting (E_ALL ^ E_NOTICE);


    ######### Main PATHs #########
	define('INCLUDES_PATH',dirname(__FILE__) . DIRECTORY_SEPARATOR);
	define('ASSETS_PATH', INCLUDES_PATH . "../assets". DIRECTORY_SEPARATOR);

	#########  Db & config Files  #########
	include(INCLUDES_PATH 	. 	"/Classes/database.class.php");
	include(INCLUDES_PATH 	. 	"/config.php");
	include(ASSETS_PATH		.	"/assets.php");
    

	######### START SMARTY ENGINE #########
	require_once(INCLUDES_PATH . "Classes/libs/Smarty.class.php" );
	$smarty 				= new Smarty;
	$smarty->compile_check 	= true;
	$smarty->debugging 		= false;
	$smarty->compile_dir 	= './cash/';
	$smarty->compile_id 	= "LOY_";
	require_once(INCLUDES_PATH . "Classes/libs/customSmarty.php" );
	$smarty->template_dir 	= "./assets/themes";

	$tm = new Template("admin",$db,$smarty);
    $smarty->assign('headinc',"headinc.tpl");
    $smarty->assign('topmenu',"topmenu.tpl");
    $smarty->assign('sidebar',"sidebar.tpl");
    $smarty->assign('footinc',"footinc.tpl");
    $smarty->assign('currancy',$Currancy);
    $smarty->assign('bussiness_type',$bussinessType);



    ######### Registered Admin Functions (Smarty) #########
	$smarty->registerPlugin("function","getFromTable", "getFromTable");
	$smarty->registerPlugin("function","buildaddress", "buildaddress");
	$smarty->registerPlugin("function","getposition", "getposition");
	######### Admin Authorization Class #########
	include("./inc/Classes/user-login.php");
	$login = new userLogin();

   





    ######### Language files #########
    include("./assets/Languages/ar.php");
    $smarty->assign("lang",$lang);
    $smarty->assign('site_name',"GiTZONE");






//------------------CONTROL IN LINK ---------------//
	$GLOBALS['db']->query("SELECT  `group` FROM `staff` WHERE `id` = '".$GLOBALS['login']->getUserId()."' ");
	 $queryTotal = $GLOBALS['db']->resultcount();
	if($queryTotal == 1)
	{
		$siteNotify = $GLOBALS['db']->fetchitem();
		$query = $GLOBALS['db']->query("SELECT * FROM `groups`  WHERE `id` = '".$siteNotify['group']."' ");
		$queryTotal = $GLOBALS['db']->resultcount();
		if($queryTotal >0)
		{
			$sitegroup = $GLOBALS['db']->fetchitem();
			$group= array(
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
			$smarty->assign('group',$group);
		}
		
	}






    if($login->doCheck() == true)
	{
		$smarty->assign('username',$login->getName());
	}


	$smarty->assign('pagetime',time());


	$basicLimit = 20;
// -------------------PATH-FOR-IMAGE-------------------//
  $uploadimg_path="../uploads/";
  $path_img      ="../";
  $smarty->assign('path_img',$path_img);




?>