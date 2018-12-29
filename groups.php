<?
	define("inside",true);
	ob_start("ob_gzhandler");

	// get funcamental file which contain config and template files,settings.
	include("./inc/fundamentals.php");


	include("./inc/Classes/system-groups.php");
	include("./inc/Classes/system.logs.php");
	$logs = new logs();
	$group = new systemGroups();
	if($login->doCheck() == false)
	{
		$smarty->assign(logMode,1);
		$smarty->assign(logdata,$lang['LGN_YOU_MUST_LOGIN']);
		$tm->fetch("تسجيل الدخول","user-login.tpl");
	}else
	{
		switch($_GET['do'])
		{
			case"":
			case"list":
				if($login->doCheckPermission("groups_list") == false)
				{
					$tm->fetch("لا يوجد صلاحية","user-permission.tpl");
				}else
				{
				include("./inc/Classes/pager.class.php");
				$pager = new pager();
				$page 		= intval($_GET[page]);
				

                $pager->doAnalysisPager("page",$page,$basicLimit,$group->getTotalGroups(),"groups.php".$paginationAddons,$paginationDialm);
                $thispage = $pager->getPage();
                $limitmequry = " LIMIT ".($thispage-1) * $basicLimit .",". $basicLimit;
				$smarty->assign(area_name,"list");
				$smarty->assign('pager',$pager->getAnalysis());
				$smarty->assign(u,$group->getsiteGroups($limitmequry));
					$logs->addLog(4,
						array(
							"type" 		=> 	"admin",
							"module" 	=> 	"groups",
							"mode" 		=> 	"list",
							"groups" 	=> 	$group->getTotalGroups(),
							"id" 		=>	$login->getUserId(),
						),"admin",$login->getUserId(),1
					);
				}
			break;
			case"view":
				if($login->doCheckPermission("groups_view") == false)
				{
					$tm->fetch("لا يوجد صلاحية","user-permission.tpl");
				}else
				{
				$mId = intval($_GET['id']);
				if($mId != 0)
				{
					$logs->addLog(5,
						array(
							"type" 		=> 	"admin",
							"module" 	=> 	"groups",
							"mode" 		=> 	"view",
							"group" 	=> 	$mId,
							"id" 		=>	$login->getUserId(),
						),"admin",$login->getUserId(),1
					);
					$smarty->assign(area_name,"view");
					$smarty->assign(u,$group->getGroupsInformations($mId));
				}
				}
			break;	
			case"status":
				if($login->doCheckPermission("groups_active") == false)
					{
						$tm->fetch("لا يوجد صلاحية","user-permission.tpl");
					}
				else
					{
						$mId = $_POST['id'];
						$status = $_POST['status'];
						$active = $group->activestatusGroups($mId,$status);
						if($active == 1)
							{
							
								$logs->addLog(6,
									array(
										"type" 		=> 	"admin",
										"module" 	=> 	"groups",
										"mode" 		=> 	"status",
										"group" 	=> 	$mId,
										"id" 		=>	$login->getUserId(),
									),"admin",$login->getUserId(),1
								);
								echo 1190;
								exit;
							}	
					}	
			case"delete":
				if($login->doCheckPermission("groups_delete") == false)
				{
					$tm->fetch("لا يوجد صلاحية","user-permission.tpl");
				}else
				{
				$mId = intval($_POST['id']);
				$delete = $group->deleteGroups($mId);
				if($delete == 1)
				{
					$logs->addLog(7,
									array(
										"type" 		=> 	"admin",
										"module" 	=> 	"groups",
										"mode" 		=> 	"delete",
										"group" 	=> 	$mId,
										"id" 		=>	$login->getUserId(),
									),"admin",$login->getUserId(),1
								);
					echo 116;
					exit;
				}
				}
			break;
			case"edit":
				if($login->doCheckPermission("groups_edit") == false)
				{
					$tm->fetch("لا يوجد صلاحية","user-permission.tpl");
				}else
				{
				$mId = intval($_GET['id']);
				if($mId != 0)
				{
					$smarty->assign(area_name,"edit");
					$smarty->assign(u,$group->getGroupsInformations($mId));
					$logs->addLog(7,
									array(
										"type" 		=> 	"admin",
										"module" 	=> 	"groups",
										"mode" 		=> 	"edit",
										"group" 	=> 	$mId,
										"id" 		=>	$login->getUserId(),
									),"admin",$login->getUserId(),1
								);
				}
				}
			break;
			case"update":
			    $mId = intval($_GET['id']);
				if($mId != 0)
				{
					$smarty->assign(area_name,"edit");
                    $smarty->assign(u,$group->getGroupsInformations($mId));
	        		if($_POST)
	        		{
						$_group['id'] 				         =$mId;
	        			$_group['name'] 			         =sanitize($_POST["name"]);
						$_group['groups_list']               =$_POST["groups_list"];
						$_group['groups_delete']             =$_POST["groups_delete"];
						$_group['groups_add']                =$_POST["groups_add"];
						$_group['groups_edit']               =$_POST["groups_edit"];
						$_group['groups_active']             =$_POST["groups_active"];
						$_group['groups_view']               =$_POST["groups_view"];
						$_group['staff_list']                =$_POST["staff_list"];
						$_group['staff_delete']              =$_POST["staff_delete"];
						$_group['staff_add']                 =$_POST["staff_add"];
						$_group['staff_edit']                =$_POST["staff_edit"];
						$_group['staff_active']              =$_POST["staff_active"];
						$_group['staff_view']                =$_POST["staff_view"];
						$_group['contacts_list']             =$_POST["contacts_list"];
						$_group['contacts_view']             =$_POST["contacts_view"];
	        			$_group['status'] 		             =$_POST["status"];
	        			$_group['logs'] 		             =$_POST["logs"];
	        			$_group['logs_view'] 		         =$_POST["logs_view"];
	        			$_group['controller'] 		         =$_POST["controller"];
	        			$_group['search'] 		             =$_POST["search"];
	        			$_group['settings'] 		         =$_POST["settings"];
	        			$_group['messages'] 		         =$_POST["messages"];

	        			if ($_group[name] =="" )
	        			{
	        				$errors[name] = "عفوا يجب إدخال الإسم";
	        			}
						
						
                         
	                    if(is_array($errors))
	                    {
	                    	$smarty->assign(errors,$errors);
							$smarty->assign(n,$_group);
	                    }else
	                    { 
							
	                    	$update = $group->setGroupsInformation($_group);
							if($update == 1)
							{ 
								$logs->addLog(8,
									array(
										"type" 		=> 	"admin",
										"module" 	=> 	"groups",
										"mode" 		=> 	"update",
										"group" 	=> 	$mId,
										"id" 		=>	$login->getUserId(),
									),"admin",$login->getUserId(),1
								);
								$smarty->assign(success,"تم تحديث بيانات المجموعة بنجاح");
								include("./inc/Classes/pager.class.php");
								$pager	 	= new pager();
								$page 		= intval($_GET[page]);

				                $pager->doAnalysisPager("page",$page,$basicLimit,$group->getTotalGroups(),"groups.html".$paginationAddons,$paginationDialm);

				                $thispage = $pager->getPage();
				                $limitmequry = " LIMIT ".($thispage-1) * $basicLimit .",". $basicLimit;

								$smarty->assign(area_name,"list");
								$smarty->assign('pager',$pager->getAnalysis());
								$smarty->assign(u,$group->getsiteGroups($limitmequry));
							}
	                    }
	                }
				}
            break;
            case"add":
				if($login->doCheckPermission("groups_add") == false)
				{
					$tm->fetch("لا يوجد صلاحية","user-permission.tpl");
				}else
				{
                $smarty->assign(area_name,"add");
        		if($_POST)
        		{
						
	        			$_group['id'] 				= 	$mId;
	        			$_group['name'] 			= 	sanitize($_POST["name"]);
	        			$_group['status'] 		    = 	$_POST["status"];



	        			if ($_group[name] =="" )
	        			{
	        				$errors[name] = "عفوا يجب إدخال الإسم";
	        			}

						
						


	                    if(is_array($errors))
	                    {
	                    	$smarty->assign(errors,$errors);
							$smarty->assign(n,$_group);
	                    }else
	                    {    
						$add = $group->addNewGroups($_group);
						if($add == 1)
						{
							$logs->addLog(9,
									array(
										"type" 		=> 	"admin",
										"module" 	=> 	"groups",
										"mode" 		=> 	"add",
										"id" 		=>	$login->getUserId(),
									),"admin",$login->getUserId(),1
								);
							$smarty->assign(success,"تم إضافة المجموعة بنجاح");
							include("./inc/Classes/pager.class.php");
							$pager = new pager();
							$page 		= intval($_GET[page]);

			                $pager->doAnalysisPager("page",$page,$basicLimit,$group->getTotalGroups(),"groups.html".$paginationAddons,$paginationDialm);

			                $thispage = $pager->getPage();
			                $limitmequry = " LIMIT ".($thispage-1) * $basicLimit .",". $basicLimit;

							$smarty->assign(area_name,"list");
							$smarty->assign('pager',$pager->getAnalysis());
							$smarty->assign(u,$group->getsiteGroups($limitmequry));
						}
                    }
                }}
            break;
		}
		$smarty->assign(footJs,array('list-controls.js'));
		$tm->display("المجموعات","groups.tpl");
	}

	$db->disconnect();
	ob_end_flush();
?>