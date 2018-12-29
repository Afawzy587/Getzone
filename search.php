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
		include("./inc/Classes/system-search.php");
		$results = new sysSearch();

        switch($_GET['do'])
		{
			case"":
				if (isset($_GET['query']) && $_GET['query'] != "" )
				{
					$query = (sanitize($_GET['query']));
					if(strlen($query) < 3)
					{
						 $smarty->assign("q",$query);
						 $smarty->assign("err_msg","يجب كتابة كلمة تزيد عن ٣ أحرف");
					}else
					{
						$smarty->assign("q",$query);
						$smarty->assign("cards",$results->doSearchAdvancedCards($query));
						$smarty->assign("points",$results->doSearchAdvancedPoints($query));
						$smarty->assign("groups",$results->doSearchAdvancedgroups($query));
						$smarty->assign("notifications",$results->doSearchAdvancednotifications($query));
						$smarty->assign("contacts",$results->doSearchAdvancedcontacts($query));
						$smarty->assign("orders",$results->doSearchAdvancedorders($query));
						$smarty->assign("cakes",$results->doSearchAdvancedorders($query));
						$smarty->assign("offers_reg",$results->doSearchAdvancedoffers_reg($query));
						$smarty->assign("category",$results->doSearchAdvancedcategories($query));
						$smarty->assign("items",$results->doSearchAdvanceditems($query));
						$smarty->assign("caketypes",$results->doSearchAdvancedcaketypes($query));
						$smarty->assign("offers",$results->doSearchAdvancedoffers($query));
						$smarty->assign("branches",$results->doSearchAdvancedbranches($query));
						$logs->addLog(21,
						array(
							"type" 		=> 	"admin",
							"module" 	=> 	"search",
							"mode" 		=> 	"search",
							"id" 		=>	$login->getUserId(),
						),"admin",$login->getUserId(),1
					);

					}
					
				}else
				{
					$smarty->assign("err_msg","يجب كتابة كلمات البحث أولا");
				}
				$smarty->assign(footJs,array('list-controls.js' , 'jquery-ui.js', 'datePicker-init.js' , 'jquery.autocomplete.js' , 'auto-int.js' ));
				$smarty->assign(headCss,'<link rel="stylesheet" href="./assets/css/jquery-ui.css">'."\n" . '<link rel="stylesheet" href="./assets/css/jquery.autocomplete.css">'."\n".'<link rel="stylesheet" href="./assets/css/invoicestyle.css">');
				$tm->display("نتائج البحث","search.tpl");
				exit;
			break;
		}
	}

	$db->disconnect();
	ob_end_flush();
?>