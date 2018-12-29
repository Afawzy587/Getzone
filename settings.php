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
			case"update":

        		if($_POST)
        		{
        			$_user[name] = sanitize($_POST["name"]);
        			$_user[email] = sanitize($_POST["email"]);
        			$_user[mobile] = sanitize($_POST["mobile"]);
        			$_user[notes] = sanitize($_POST["notes"],area);
        			$_user[password] = sanitize($_POST["password"]);

        			if ($_user[name] =="" )
        			{
        				$errors[name] = "عفوا يجب إدخال خانة الإسم";
        			}

        			if ($_user[email] == "" )
        			{
        				$errors[email] = "عفوا يجب إدخال البريد الإلكتروني";
        			}else
        			{
        				if(checkMail($_user[email]) == false )
        				{
        					$errors[email] = "عفوا يجب إدخال بريد إلكتروني صحيح";
        				}
        			}

                    if(is_array($errors))
                    {
                    	$smarty->assign(errors,$errors);
                    }else
                    {
                    	$update = $login->setUserInformation($_user);
						if($update == 1)
						{ 
							$logs->addLog(22,
						array(
							"type" 		=> 	"admin",
							"module" 	=> 	"sittings",
							"mode" 		=> 	"update",
							"id" 		=>	$login->getUserId(),
						),"admin",$login->getUserId(),1
					);
							$smarty->assign(success,"تم تعديل بياناتك الشخصية بنجاح");
						}
                    }
                }
            break;
		}
		$smarty->assign(u,$login->getUserInformation());

		$smarty->assign(footJs,array('__dashboard.js'));
		$tm->display("الإعدادات","settings.tpl");
	}

	$db->disconnect();
	ob_end_flush();
?>