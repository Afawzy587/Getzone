<?php /* Smarty version Smarty-3.0.8, created on 2018-12-29 12:38:55
         compiled from "./assets/themes\user-login.tpl" */ ?>
<?php /*%%SmartyHeaderCode:12282557985c275ccfb736b2-35716562%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '21882e423c7a2f0b7574095540fef8dbbce43aa2' => 
    array (
      0 => './assets/themes\\user-login.tpl',
      1 => 1546083533,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12282557985c275ccfb736b2-35716562',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<!doctype html>
<html class="signin no-js" lang="">

<head>
    <!-- meta -->
    <meta charset="utf-8">
    <meta name="description" content="<?php echo $_smarty_tpl->getVariable('title')->value;?>
">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1, maximum-scale=1">
    <!-- /meta -->

    <title><?php echo $_smarty_tpl->getVariable('title')->value;?>
</title>

    <!-- page level plugin styles -->
    <!-- /page level plugin styles -->

    <!-- core styles -->
    <link rel="stylesheet" href="./assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="./assets/css/font-awesome.css">
    <link rel="stylesheet" href="./assets/css/themify-icons.css">
    <link rel="stylesheet" href="./assets/css/animate.min.css">
    <!-- /core styles -->

    <!-- template styles -->
    <link rel="stylesheet" href="./assets/css/skins/palette.css">
    <link rel="stylesheet" href="./assets/css/fonts/font.css">
    <link rel="stylesheet" href="./assets/css/main.css">
    <!-- template styles -->

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- load modernizer -->
    <script src="./assets/plugins/modernizr.js"></script>
    <?php echo $_smarty_tpl->getVariable('hockHeader')->value;?>

</head>

<body class="bg-primary">

    <div class="cover" style="background-image: url(./assets/img/cover1.jpg)"></div>

    <div class="overlay bg-primary"></div>

    <div class="center-wrapper">
        <div class="center-content">

            <?php if ($_smarty_tpl->getVariable('logLast')->value==1){?>
            	<div class="row"><div class="col-xs-10 col-xs-offset-1 col-sm-6 col-sm-offset-3 col-md-4 col-md-offset-4" style="float:none;">
                    <section class="panel bg-white no-b"><ul class="switcher-dash-action">
						<li><a href="#" class="selected"><?php echo $_smarty_tpl->getVariable('logdata')->value;?>
</a></li>
					</ul></section>
                </div></div>
            <?php }?>

            <?php if ($_smarty_tpl->getVariable('logexception')->value==1){?>
            	<div class="row"><div class="col-xs-10 col-xs-offset-1 col-sm-6 col-sm-offset-3 col-md-4 col-md-offset-4" style="float:none;">
                    <section class="panel bg-white no-b"><ul class="switcher-dash-action">
						<li><a href="#" class="selected"><?php echo $_smarty_tpl->getVariable('logdata')->value;?>
</a></li>
					</ul></section>
                </div></div>
            <?php }?>

            <?php if ($_smarty_tpl->getVariable('logFine')->value!=1){?>
            <div class="row" style="widdth:99%;">
                <div class="col-xs-10 col-xs-offset-1 col-sm-6 col-sm-offset-3 col-md-4 col-md-offset-4" style="float:none;">
                   <?php if ($_smarty_tpl->getVariable('area_name')->value=='login'){?>
                    <section class="panel bg-white no-b">
                        <ul class="switcher-dash-action">
                            <li><a href="#" class="selected"><?php if ($_smarty_tpl->getVariable('logMode')->value==1){?><?php echo $_smarty_tpl->getVariable('logdata')->value;?>
<?php }?></a></li>
                        </ul>
                        <div class="p15">
                            <form role="form" id="ForM" action="login.html?do=login" method="post">
                                <input type="text" class="form-control input-lg mb25" placeholder="البريد الإلكتروني" name="email" id="email" autofocus>
                                <input type="password" class="form-control input-lg mb25" placeholder="كلمة المرور" name="password" id="password">
                                
                                <button class="btn btn-primary btn-lg btn-block" type="submit">تسجيل الدخول</button>
                                <input name="remember" type="hidden" value="1" >
                                <a href="login.html?do=forgetten" class="input-sm mb25">  هل نسيت الحساب ؟</a>
                            </form>
                        </div>
                    </section>
                  <?php }elseif($_smarty_tpl->getVariable('area_name')->value=='forgetten'){?>
                   <section class="panel bg-white no-b">
                        <ul class="switcher-dash-action">
                            <li><a href="#" class="selected"><?php echo $_smarty_tpl->getVariable('logdata')->value;?>
</a></li>
                        </ul>
                        <div class="p15">
                            <form role="form" id="ForM" action="login.html?do=login" method="post">
                                <input type="text" autocomplete="new-password" class="form-control input-lg mb25" placeholder="البريد الإلكتروني" name="email" id="email" autofocus>
                                <button class="btn btn-primary btn-lg btn-block" type="submit"> استرجاع الحساب </button>
                            </form>
                        </div>
                    </section>
                    <?php }?>
                    <p class="text-center">
                        Copyright &copy;
                        <span id="year" class="mr5"></span>
                        <span><b>EraMint Inc</b></span>
                    </p>
                </div>
            </div>
            <?php }?>

        </div>
    </div>
    <script type="text/javascript">
        var el = document.getElementById("year"),
            year = (new Date().getFullYear());
        el.innerHTML = year;
    </script>
</body>

</html>





