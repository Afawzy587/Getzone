<?
	define("inside",true);
	ob_start("ob_gzhandler");

	// get funcamental file which contain config and template files,settings.
	include("./inc/fundamentals.php");

	include("./inc/Classes/system.logs.php");
	$logs  = new logs();


	include("./inc/Classes/system-staff.php");
	$staffs = new systemStaff();

    include("./inc/Classes/system-groups.php");
    $group        = new systemGroups();


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
				if($login->doCheckPermission("staff_list") == false)
					{
						$tm->fetch("لا يوجد صلاحية","user-permission.tpl");
					}
					else
					{
					include("./inc/Classes/pager.class.php");
					$pager = new pager();
					$page 		= intval($_GET[page]);

					$pager->doAnalysisPager("page",$page,$basicLimit,$staffs->getTotalStaff(),"staff.html".$paginationAddons,$paginationDialm);

					$thispage = $pager->getPage();
					$limitmequry = " LIMIT ".($thispage-1) * $basicLimit .",". $basicLimit;
					$smarty->assign(area_name,"list");
					$smarty->assign('pager',$pager->getAnalysis());
					$smarty->assign(u,$staffs->getsiteStaff($limitmequry));
					$logs->addLog(23,
									array(
										"type" 		        => 	"admin",
										"module" 	        => 	"staff",
										"mode" 		        => 	"list",
										"staff" 			=> 	$staffs->getTotalStaff(),
										"id" 	        	=>	$login->getUserId(),
									),"admin",$login->getUserId(),1
								);
					}

			break;
			case"delete":
				if($login->doCheckPermission("staff_delete") == false)
					{
						$tm->fetch("لا يوجد صلاحية","user-permission.tpl");
					}
					else
					{
						$mId = intval($_POST['id']);
						$delete = $staffs->deleteStaff($mId);
						if($delete == 1)
						{
							echo 116;
							$logs->addLog(24,
										array(
											"type" 		        => 	"admin",
											"module" 	        => 	"staff",
											"mode" 		        => 	"list",
											"staff" 			=> 	$mId,
											"id" 	        	=>	$login->getUserId(),
										),"admin",$login->getUserId(),1
									);
							exit;
						}
				}
			break;
			case"edit":
				if($login->doCheckPermission("staff_edit") == false)
					{
						$tm->fetch("لا يوجد صلاحية","user-permission.tpl");
					}
					else
					{
						$mId = intval($_GET['id']);
						if($mId != 0)
						{
							$smarty->assign(area_name,"edit");
							$smarty->assign(g,$group->getsiteGroups());
							$smarty->assign(u,$staffs->getStaffInformation($mId));
							$logs->addLog(25,
										array(
											"type" 		        => 	"admin",
											"module" 	        => 	"staff",
											"mode" 		        => 	"edit",
											"staff" 			=> 	$mId,
											"id" 	        	=>	$login->getUserId(),
										),"admin",$login->getUserId(),1
									);
						}
					}
			break;
				
			case"status":
				if($login->doCheckPermission("staff_active") == false)
					{
						$tm->fetch("لا يوجد صلاحية","user-permission.tpl");
					}
					else
					{
						$mId    = $_POST['id'];
						$status = $_POST['status'];
						$active = $staffs->activestatusStaff($mId,$status);
						if($active == 1)
							{
							
								$logs->addLog(26,
								array(
									"type" 		        => 	"admin",
									"module" 	        => 	"staff",
									"mode" 		        => 	"active",
									"staff" 			=> 	$mId,
									"id" 	        	=>	$login->getUserId(),
								),"admin",$login->getUserId(),1
							);
								echo 1190;
								exit;
							}	
					}	
			case"view":
				if($login->doCheckPermission("staff_view") == false)
					{
						$tm->fetch("لا يوجد صلاحية","user-permission.tpl");
					}
					else
					{
						$mId = intval($_GET['id']);
						if($mId != 0)
						{
							$smarty->assign(area_name,"view");
							

							$smarty->assign(u,$staffs->getStaffInformation($mId));
							$logs->addLog(27,
										array(
											"type" 		        => 	"admin",
											"module" 	        => 	"staff",
											"mode" 		        => 	"view",
											"staff" 			=> 	$mId,
											"id" 	        	=>	$login->getUserId(),
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
					$smarty->assign(g,$group->getsiteGroups());
					$smarty->assign(u,$staffs->getStaffInformation($mId));
	        		if($_POST)
	        		{

	        			$_staff['id'] 			= 	$mId;
	        			$_staff[name] 			= 	sanitize($_POST["name"]);
	        			$_staff[email] 			= 	sanitize($_POST["email"]);
	        			$_staff[mobile] 		= 	sanitize($_POST["mobile"]);
						$_staff[group]          =   intval($_POST["group"]);
	        			$_staff[notes] 			= 	sanitize($_POST["notes"],area);
	        			$_staff[password] 		= 	sanitize($_POST["password"]);
	        			$_staff[status] 		= 	intval($_POST["status"]);


	        			if ($_staff[name] =="" )
	        			{
	        				$errors[name] = "عفوا يجب إدخال خانة الإسم";
	        			}

	        			if ($_staff[email] == "" )
	        			{
	        				$errors[email] = "عفوا يجب إدخال البريد الإلكتروني";
	        			}else
	        			{
	        				if(checkMail($_staff[email]) == false )
	        				{
	        					$errors[email] = "عفوا يجب إدخال بريد إلكتروني صحيح";
	        				}else
	        				{
	        					if($staffs->checkDuplicatedStaff($_staff[email]) != true)
	        					{
	        						$stData = $staffs->getDuplicatedStaff($_staff[email]);
	        						if($stData['id'] != $_staff[id])
	        						{
	        							$errors[email] = "عفوا يجب إدخال بريد إلكتروني غير مستخدم مسبقا";
	        						}
	        					}
	        				}
	        			}



             			if(is_array($errors))
	                    {
	                    	$smarty->assign(errors,$errors);
	                    }else
	                    {
	                    	$update = $staffs->setStaffInformation($_staff);
							if($update == 1)
							{
								$logs->addLog(28,
								array(
									"type" 		        => 	"admin",
									"module" 	        => 	"staff",
									"mode" 		        => 	"update",
									"staff" 			=> 	$mId,
									"id" 	        	=>	$login->getUserId(),
								),"admin",$login->getUserId(),1
							);
								$smarty->assign(success,"تم تحديث بيانات الموظف بنجاح");
								include("./inc/Classes/pager.class.php");
								$pager = new pager();
								$page 		= intval($_GET[page]);

				                $pager->doAnalysisPager("page",$page,$basicLimit,$staffs->getTotalStaff(),"degrees.html".$paginationAddons,$paginationDialm);

				                $thispage = $pager->getPage();
				                $limitmequry = " LIMIT ".($thispage-1) * $basicLimit .",". $basicLimit;

								$smarty->assign(area_name,"list");
								$smarty->assign('pager',$pager->getAnalysis());
								$smarty->assign(u,$staffs->getsiteStaff($limitmequry));
							}
	                    }
	                }
				}
            break;
            case"add":
				if($login->doCheckPermission("staff_add") == false)
					{
						$tm->fetch("لا يوجد صلاحية","user-permission.tpl");
					}
					else
					{
					$smarty->assign(area_name,"add");
					$smarty->assign(g,$group->getsiteGroups());	
					if($_POST)
					{

						$_staff[name]           = sanitize($_POST["name"]);
						$_staff[email]          = sanitize($_POST["email"]);
						$_staff[mobile]         = sanitize($_POST["mobile"]);
						$_staff[group]          =   intval($_POST["group"]);
						$_staff[notes]          = sanitize($_POST["notes"],area);
						$_staff[password]       = sanitize($_POST["password"]);

						if ($_staff[name] =="" )
						{
							$errors[name] = "عفوا يجب إدخال خانة الإسم";
						}

						if ($_staff[email] == "" )
						{
							$errors[email] = "عفوا يجب إدخال البريد الإلكتروني";
						}else
						{
							if(checkMail($_staff[email]) == false )
							{
								$errors[email] = "عفوا يجب إدخال بريد إلكتروني صحيح";
							}else
							{
								if($staffs->checkDuplicatedStaff($_staff[email]) != true)
								{
									$errors[email] = "عفوا يجب إدخال بريد إلكتروني غير مستخدم مسبقا";
								}
							}
						}
						if ($_staff[password] =="" )
						{
							$errors[name] = "عفوا يجب إدخال خانة كلمه المرور";
						}




						if(is_array($errors))
						{
							$smarty->assign(errors,$errors);
						}else
						{
							$add = $staffs->addNewStaff($_staff);
							if($add == 1)
							{
									$logs->addLog(29,
									array(
										"type" 		        => 	"admin",
										"module" 	        => 	"staff",
										"mode" 		        => 	"add",
										"staff" 			=> 	$mId,
										"id" 	        	=>	$login->getUserId(),
									),"admin",$login->getUserId(),1
								);
								$smarty->assign(success,"تم إضافة الموظف بنجاح");
								include("./inc/Classes/pager.class.php");
								$pager = new pager();
								$page 		= intval($_GET[page]);

								$pager->doAnalysisPager("page",$page,$basicLimit,$staffs->getTotalStaff(),"staff.html".$paginationAddons,$paginationDialm);

								$thispage = $pager->getPage();
								$limitmequry = " LIMIT ".($thispage-1) * $basicLimit .",". $basicLimit;

								$smarty->assign(area_name,"list");
								$smarty->assign('pager',$pager->getAnalysis());
								$smarty->assign(u,$staffs->getsiteStaff($limitmequry));
							}
						}
					}
					}
            break;
		}
		$smarty->assign(footJs,array('list-controls.js'));
		$tm->display("إدارة الموظفيين","staff.tpl");
	}

	$db->disconnect();
	ob_end_flush();
?>