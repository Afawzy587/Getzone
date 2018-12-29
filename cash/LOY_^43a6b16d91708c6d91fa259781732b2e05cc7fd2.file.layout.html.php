<?php /* Smarty version Smarty-3.0.8, created on 2018-10-29 12:30:47
         compiled from "./assets/themes/layout.html" */ ?>
<?php /*%%SmartyHeaderCode:4701662805bd6fd770969a1-28074954%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '43a6b16d91708c6d91fa259781732b2e05cc7fd2' => 
    array (
      0 => './assets/themes/layout.html',
      1 => 1540816210,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4701662805bd6fd770969a1-28074954',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<!doctype html>
<html class="no-js" lang="">

<head>
    <!-- meta -->
    <meta charset="utf-8">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1, maximum-scale=1">
    <!-- /meta -->

    <title><?php echo $_smarty_tpl->getVariable('site_name')->value;?>
 :: <?php echo $_smarty_tpl->getVariable('title')->value;?>
</title>
    <?php $_template = new Smarty_Internal_Template($_smarty_tpl->getVariable('headinc')->value, $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate(); $_template->rendered_content = null;?><?php unset($_template);?>
</head>

<!-- body -->

<body>
    <div class="app right-menu">
        <!-- top header -->
        <header class="header header-fixed navbar hidden-xs">
            <?php $_template = new Smarty_Internal_Template($_smarty_tpl->getVariable('topmenu')->value, $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate(); $_template->rendered_content = null;?><?php unset($_template);?>
        </header>
        <!-- /top header -->

        <section class="layout">

            <?php $_template = new Smarty_Internal_Template($_smarty_tpl->getVariable('sidebar')->value, $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate(); $_template->rendered_content = null;?><?php unset($_template);?>
            <!-- main content -->
            <section class="main-content">

                <!-- content wrapper -->
                <div class="content-wrap">

                    <!-- inner content wrapper -->
                    <div class="wrapper">
	            	<?php if ($_smarty_tpl->getVariable('filename')->value!=''){?>
			            <?php $_template = new Smarty_Internal_Template($_smarty_tpl->getVariable('filename')->value, $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate(); $_template->rendered_content = null;?><?php unset($_template);?>
			        <?php }else{ ?>
			        	no file page to include ( layout.html )
			        <?php }?>
			        </div>
                    <!-- /inner content wrapper -->

                </div>
                <!-- /content wrapper -->
                <a class="exit-offscreen"></a>
            </section>
            <!-- /main content -->
        </section>

    </div>
    <?php $_template = new Smarty_Internal_Template($_smarty_tpl->getVariable('footinc')->value, $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate(); $_template->rendered_content = null;?><?php unset($_template);?>
</body>
<!-- /body -->

</html>
