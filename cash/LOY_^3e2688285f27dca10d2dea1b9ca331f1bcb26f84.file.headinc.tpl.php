<?php /* Smarty version Smarty-3.0.8, created on 2018-12-06 09:44:37
         compiled from "./assets/themes/headinc.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1363373645c08ef85305079-91665487%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3e2688285f27dca10d2dea1b9ca331f1bcb26f84' => 
    array (
      0 => './assets/themes/headinc.tpl',
      1 => 1544019999,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1363373645c08ef85305079-91665487',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
	<!-- page level plugin styles -->
    <link rel="stylesheet" href="plugins/jvectormap/jquery-jvectormap-1.2.2.css">
    <!-- /page level plugin styles -->

    <!-- core styles -->
    <link rel="stylesheet" href="./assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="./assets/css/font-awesome.css">
    <link rel="stylesheet" href="./assets/css/themify-icons.css">
    <link rel="stylesheet" href="./assets/css/animate.min.css">
    <link rel="stylesheet" href="./assets/css/jquery.datetimepicker.min.css">
    <!-- /core styles -->

    <!-- template styles -->
    <link rel="stylesheet" href="./assets/css/skins/palette.css" id="skin">
    <link rel="stylesheet" href="./assets/css/fonts/font.css">
    <link rel="stylesheet" href="./assets/css/main.css">
    <!-- template styles -->
    <?php echo $_smarty_tpl->getVariable('headCss')->value;?>


    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- load modernizer -->
    <script src="./assets/plugins/modernizr.js"></script>
    <script src="./assets/js/jquery.js"></script>
    <script src="./assets/js/jquery.datetimepicker.full.js"></script>
 
    <?php echo $_smarty_tpl->getVariable('headJs')->value;?>
