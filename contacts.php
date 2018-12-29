<?
	define("inside",true);
	ob_start("ob_gzhandler");

	// get funcamental file which contain config and template files,settings.
	include("./inc/fundamentals.php");


	include("./inc/Classes/system-contacts.php");
	include("./inc/Classes/system.logs.php");
	$logs = new logs();
	$contact = new systemContacts();
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
				if($login->doCheckPermission("contacts_list") == false)
				{
					$tm->fetch("لا يوجد صلاحية","user-permission.tpl");
				}else
				{
				include("./inc/Classes/pager.class.php");
				$pager = new pager();
				$page 		= intval($_GET[page]);
				

                $pager->doAnalysisPager("page",$page,$basicLimit,$contact->getTotalContacts(),"contacts.html".$paginationAddons,$paginationDialm);

                $thispage = $pager->getPage();
                $limitmequry = " LIMIT ".($thispage-1) * $basicLimit .",". $basicLimit;
				$smarty->assign(area_name,"list");
				$smarty->assign('pager',$pager->getAnalysis());
				$smarty->assign(u,$contact->getsiteContacts($limitmequry));
					$logs->addLog(1,
						array(
							"type" 		=> 	"admin",
							"module" 	=> 	"contacts",
							"mode" 		=> 	"list",
							"contacts" 	=> 	$contact->getTotalContacts(),
							"id" 		=>	$login->getUserId(),
						),"admin",$login->getUserId(),1
					);
				}
			break;
			case"status":
				if($login->doCheckPermission("contacts_active") == false)
				{
					$tm->fetch("لا يوجد صلاحية","user-permission.tpl");
				}else
				{
				$mId = $_POST['id'];
				
				$status = $_POST['status'];
				$active = $contact->activestatusContacts($mId,$status);
				if($active == 1)
				{
					$logs->addLog(2,
						array(
							"type" 		=> 	"admin",
							"module" 	=> 	"contacts",
							"mode" 		=> 	"status",
							"contacts" 	=> 	$mId,
							"id" 		=>	$login->getUserId(),
						),"admin",$login->getUserId(),1
					);
					echo 1190;
					exit;
				}
				}
			break;
			case"view":
				
				if($login->doCheckPermission("contacts_view") == false)
				{
					$tm->fetch("لا يوجد صلاحية","user-permission.tpl");
				}else
				{
					$mId = intval($_GET['id']);
					if($mId != 0)
					{
						$smarty->assign(area_name,"view");
						$smarty->assign(u,$contact->getContactsInformations($mId));
						$logs->addLog(3,
						array(
							"type" 		=> 	"admin",
							"module" 	=> 	"contacts",
							"mode" 		=> 	"view",
							"contact" 	=> 	$mId,
							"id" 		=>	$login->getUserId(),
						),"admin",$login->getUserId(),1
					);
					}
				}
			break;	
				
		}
		$smarty->assign(footJs,array('list-controls.js'));
		$tm->display("جهات الإتصال","contacts.tpl");
	}

	$db->disconnect();
	ob_end_flush();
?>