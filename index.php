<?php
error_reporting(0);
	// output buffer..
	ob_start("ob_gzhandler");

    // my system key cheker..
    define("inside",true);

    // get funcamental file which contain config and template files,settings.
	include("./inc/fundamentals.php");

	include("./inc/Classes/system.logs.php");
	$logs      = new logs();

	if($login->doCheck() == false)
	{
 		$smarty->assign(logMode,1);
		$smarty->assign(logdata,$lang['LGN_YOU_MUST_LOGIN']);
		$tm->fetch("تسجيل الدخول","user-login.tpl");
	}else
	{
		
		

		$smarty->assign(footJs,array('dashboard.js'));
		$tm->display("الصفحة الرئيسية","dashboard.tpl");
		}
	
	$db->disconnect();
	ob_end_flush();
?>