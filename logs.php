<?
	define("inside",true);
	ob_start("ob_gzhandler");

	// get funcamental file which contain config and template files,settings.
	include("./inc/fundamentals.php");


	include("./inc/Classes/system.logs.php");
	$logs = new logs();
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
				if($login->doCheckPermission("logs") == false)
				{
					$tm->fetch("لا يوجد صلاحية","user-permission.tpl");
				}else
				{
					include("./inc/Classes/pager.class.php");
					$pager = new pager();
					$page 		= intval($_GET[page]);


					$pager->doAnalysisPager("page",$page,$basicLimit,$logs->getTotallogs(),"logs.html".$paginationAddons,$paginationDialm);

					$thispage = $pager->getPage();
					$limitmequry = " LIMIT ".($thispage-1) * $basicLimit .",". $basicLimit;
					$smarty->assign(area_name,"list");
					$smarty->assign('pager',$pager->getAnalysis());
					$smarty->assign(u,$logs->getsitelogs($limitmequry));
						$logs->addLog(19,
							array(
								"type" 		=> 	"admin",
								"module" 	=> 	"logs",
								"mode" 		=> 	"list",
								"logs" 	    => 	$logs->getTotallogs(),
								"id" 		=>	$login->getUserId(),
							),"admin",$login->getUserId(),1
						);
				}
			break;
		
			case"view":
				
				if($login->doCheckPermission("logs_view") == false)
				{
					$tm->fetch("لا يوجد صلاحية","user-permission.tpl");
				}else
				{
					$mId = intval($_GET['id']);
					if($mId != 0)
					{
						$smarty->assign(area_name,"view");
						$smarty->assign(u,$logs->getlogsInformation($mId));
						$logs->addLog(20,
						array(
							"type" 		=> 	"admin",
							"module" 	=> 	"logs",
							"mode" 		=> 	"view",
							"logs" 	    => 	$mId,
							"id" 		=>	$login->getUserId(),
						),"admin",$login->getUserId(),1
					);
					}
				}
			break;	
				
		}
		$smarty->assign(footJs,array('list-controls.js'));
		$tm->display("سجلات الدخول على الموقع","logs.tpl");
	}

	$db->disconnect();
	ob_end_flush();
?>