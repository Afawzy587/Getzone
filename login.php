<?
	define("inside",true);
	ob_start("ob_gzhandler");

	// get funcamental file which contain config and template files,settings.
	include("./inc/fundamentals.php");

    include("./inc/Classes/system.logs.php");
	$logs = new logs();

	switch($_GET['do'])
	{
        case"":

	        if($login->doCheck() == true)
			{
				$logs->addLog(10,
						array(
							"type" 		=> 	"admin",
							"module" 	=> 	"login",
							"mode" 		=> 	"login",
							"id" 		=>	$login->getUserId(),
						),"admin",$login->getUserId(),1
					);
				$smarty->assign(area_name,"login");
		       	$smarty->assign(logexception,1);
	       		$smarty->assign(logdata,$lang['LGN_IS_DUPLICATED']);
	       		$smarty->assign(logFine,1);
	       		$smarty->assign(hockHeader,"<META HTTP-EQUIV=\"Refresh\" CONTENT=\"2; url=index.html\">");
			}else
			{
				$smarty->assign(area_name,"login");
				$smarty->assign(logMode,1);
	       		$smarty->assign(logdata,"يمكنك تسجيل الدخول الان");
				
			}

        break;
        case"login":
			$logs->addLog(11,
						array(
							"type" 		=> 	"admin",
							"module" 	=> 	"login",
							"mode" 		=> 	"login",
							"id" 		=>	$login->getUserId(),
						),"admin",$login->getUserId(),1
					);
            if($login->doCheck() == true)
			{
				
				$smarty->assign(area_name,"login");
				$smarty->assign(logexception,1);
	       		$smarty->assign(logdata,$lang['LGN_IS_DUPLICATED']);
	       		$smarty->assign(logFine,1);
	       		$smarty->assign(hockHeader,"<META HTTP-EQUIV=\"Refresh\" CONTENT=\"2; url=index.html\">");
				
			}else
			{
	            // recieving the parameters
	            $logResult = $login->doLogin(sanitize($_POST["email"]),sanitize($_POST["password"]),intval($_POST["remember"]));
				$logs->addLog(12,
						array(
							"type" 		=> 	"admin",
							"module" 	=> 	"login",
							"mode" 		=> 	"login",
							"id" 		=>	$login->getUserId(),
						),"admin",$login->getUserId(),1
					);

	        	if($logResult ==0)
	        	{
					$logs->addLog(13,
						array(
							"type" 		=> 	"admin",
							"module" 	=> 	"login",
							"mode" 		=> 	"login",
							"id" 		=>	$login->getUserId(),
						),"admin",$login->getUserId(),1
					);
					$smarty->assign(area_name,"login");
	        		$smarty->assign(logMode,1);
	                $smarty->assign(logdata,$lang['LGN_EMPTY_DATA']);
	        	}elseif($logResult ==1)
	        	{
					$logs->addLog(14,
						array(
							"type" 		=> 	"admin",
							"module" 	=> 	"login",
							"mode" 		=> 	"login",
							"id" 		=>	$login->getUserId(),
						),"admin",$login->getUserId(),1
					);
					$smarty->assign(area_name,"login");
	        		$smarty->assign(logLast,1);
	               	$smarty->assign(logdata,$lang['LGN_IS_SUCESSFULLY']);
	       			$smarty->assign(logFine,1);
	       			$smarty->assign(hockHeader,"<META HTTP-EQUIV=\"Refresh\" CONTENT=\"2; url=index.html\">");
	        	}elseif($logResult ==3)
	        	{
					$logs->addLog(15,
						array(
							"type" 		=> 	"admin",
							"module" 	=> 	"login",
							"mode" 		=> 	"login",
							"id" 		=>	$login->getUserId(),
						),"admin",$login->getUserId(),1
					);
					$smarty->assign(area_name,"login");
	        		$smarty->assign(logexception,1);
	       			$smarty->assign(logdata,$lang['LGN_IS_DUPLICATED']);
	       			$smarty->assign(logFine,1);
	       			$smarty->assign(hockHeader,"<META HTTP-EQUIV=\"Refresh\" CONTENT=\"2; url=index.html\">");
	        	}else
	       		{
					$logs->addLog(16,
						array(
							"type" 		=> 	"admin",
							"module" 	=> 	"login",
							"mode" 		=> 	"login",
							"id" 		=>	$login->getUserId(),
						),"admin",$login->getUserId(),1
					);
					$smarty->assign(area_name,"login");
	         		$smarty->assign(logMode,1);
	       			$smarty->assign(logdata,$lang['LGN_WORNG_DATA']);
	       		}
       		}

        break;
        case"logout":
       		if($login->doLogout() == true)
       		{
				$logs->addLog(17,
						array(
							"type" 		=> 	"admin",
							"module" 	=> 	"login",
							"mode" 		=> 	"logout",
							"id" 		=>	$login->getUserId(),
						),"admin",$login->getUserId(),1
					);
				$smarty->assign(area_name,"login");
       			$smarty->assign(logexception,1);
               	$smarty->assign(logdata,$lang['LGN_SUCCESSFUL_LOGOUT']);
       			$smarty->assign(logFine,1);
       			$smarty->assign(hockHeader,"<META HTTP-EQUIV=\"Refresh\" CONTENT=\"2; url=login.html\">");

       		}else
       		{
				$logs->addLog(18,
						array(
							"type" 		=> 	"admin",
							"module" 	=> 	"login",
							"mode" 		=> 	"not login",
							"id" 		=>	$login->getUserId(),
						),"admin",$login->getUserId(),1
					);
				$smarty->assign(area_name,"login");
       			$smarty->assign(logexception,1);
               	$smarty->assign(logdata,"قم بتسجيل الدخول أولاً");
       			$smarty->assign(logFine,1);
       			$smarty->assign(hockHeader,"<META HTTP-EQUIV=\"Refresh\" CONTENT=\"2; url=login.html\">");
       		}

        break;
	  case"forgetten":
			$smarty->assign(area_name,"forgetten");
            $smarty->assign(logdata," استرجاع الحساب ");
			break;		
	}
	$tm->fetch("تسجيل الدخول","user-login.tpl");
	$db->disconnect();
	ob_end_flush();
?>