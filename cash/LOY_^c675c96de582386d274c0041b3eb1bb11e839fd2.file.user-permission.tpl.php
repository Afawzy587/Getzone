<?php /* Smarty version Smarty-3.0.8, created on 2018-10-29 12:40:49
         compiled from "./assets/themes/user-permission.tpl" */ ?>
<?php /*%%SmartyHeaderCode:15484362075bd6ffd171b573-58099968%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c675c96de582386d274c0041b3eb1bb11e839fd2' => 
    array (
      0 => './assets/themes/user-permission.tpl',
      1 => 1540816212,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '15484362075bd6ffd171b573-58099968',
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

           
            <div class="row"><div class="col-xs-10 col-xs-offset-1 col-sm-6 col-sm-offset-3 col-md-4 col-md-offset-4" style="float:none;">
				<section class="panel bg-white no-b"><ul class="switcher-dash-action">
					<li><a href="#" class="selected">لا يوجد لديك صلاحية لدخول على هذا القسم</a></li>
				</ul></section>
			</div></div>

            

        </div>
    </div>
    <script type="text/javascript">
        var el = document.getElementById("year"),
            year = (new Date().getFullYear());
        el.innerHTML = year;
    </script>
</body>

</html>





