<?php /* Smarty version Smarty-3.0.8, created on 2018-11-10 16:06:50
         compiled from "./assets/themes/topmenu.tpl" */ ?>
<?php /*%%SmartyHeaderCode:19481450435be7021acc2439-80089095%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8a59d27fc01b7d465a28d969aa4ece153e73052f' => 
    array (
      0 => './assets/themes/topmenu.tpl',
      1 => 1541866008,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19481450435be7021acc2439-80089095',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
			<div class="brand hidden-xs">
                <!-- toggle offscreen menu -->
                <a href="javascript:;" class="ti-menu off-right visible-xs" data-toggle="offscreen" data-move="rtl"></a>
                <!-- /toggle offscreen menu -->

                <!-- logo -->
                <a href="index.html" style="max-width:100px;margin:auto;display:block;text-align:center;">
                    <img src="./assets/img/logo.png" alt="Kreaz" style="">
                </a>
                <!-- /logo -->
            </div>

			<ul class="nav navbar-nav">
				<?php if ($_smarty_tpl->getVariable('notifications')->value){?>	
                <li class="notifications dropdown">
                    <a href="javascript:;" data-toggle="dropdown">
                        <i class="ti-bell"></i>
                        <div class="badge badge-top bg-danger animated flash">
                            <span><?php echo $_smarty_tpl->getVariable('notifications')->value;?>
</span>
                        </div>
                    </a>
                    <div class="dropdown-menu animated fadeInRight">
                        <div class="panel panel-default no-m">
                            <div class="panel-heading small"><b>العضويات المتاحة</b></div>
                            <ul class="list-group">
								<?php  $_smarty_tpl->tpl_vars["c"] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('tokens')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars["c"]->key => $_smarty_tpl->tpl_vars["c"]->value){
?>
									<li class="list-group-item membership_<?php echo $_smarty_tpl->getVariable('c')->value['number'];?>
">
										<span class="pull-right mt5 ml15"><img src="./assets/img/faceless.jpg" class="avatar avatar-sm img-circle" alt=""></span>
										<div class="m-body">
											<span>عضوية رقم <b><?php echo $_smarty_tpl->getVariable('c')->value['number'];?>
</b> بإسم <b><?php echo $_smarty_tpl->getVariable('c')->value['name'];?>
</b> <br />
												<a href="#" class="deleteThisMembership" membership="<?php echo $_smarty_tpl->getVariable('c')->value['number'];?>
">حذف</a> - <a href="#" class="useThisMembership" membership="<?php echo $_smarty_tpl->getVariable('c')->value['number'];?>
">إستخدام</a>
											</span>
										</div>
									</li>
								<?php }} ?>
                            </ul>
                        </div>
                    </div>
                </li>
				<?php }?>	
                <li class="off-left">
                    <a href="javascript:;" data-toggle="dropdown">
                        <img src="./assets/img/kreaz.jpg" class="header-avatar img-circle" alt="<?php echo $_smarty_tpl->getVariable('username')->value;?>
" title="<?php echo $_smarty_tpl->getVariable('username')->value;?>
">
                        <span class="hidden-xs mr10"><?php echo $_smarty_tpl->getVariable('username')->value;?>
</span>
                        <i class="ti-angle-down ti-caret hidden-xs"></i>
                    </a>
                    <ul class="dropdown-menu animated fadeInRight">
                        <li>
                            <a href="settings.html">الإعدادات الشخصية</a>
                        </li>
                        <?php if ($_smarty_tpl->getVariable('group')->value['controller']==1){?>
                        <li>
                            <a href="controler.html">اعدادات الصفحة الرئيسية</a>
                        </li>
                        <?php }?>
                        <?php if ($_smarty_tpl->getVariable('group')->value['setting']==1){?>
                        <li>
                            <a href="setting.html">اعدادات الرسائل</a>
                        </li>
                        <?php }?>
                        <?php if ($_smarty_tpl->getVariable('group')->value['messages']==1){?>
                        <li>
                            <a href="messages.html">ارسال رسالة</a>
                        </li>
                        <?php }?>
                        <li>
                            <a href="login.html?do=logout">تسجيل الخروج</a>
                        </li>
                    </ul>
                </li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li class="header-search <?php if ($_smarty_tpl->getVariable('q')->value){?>open<?php }?>">
                    <!-- toggle search -->
                    <a href="javascript:;" class="toggle-search">
                        <i class="ti-search"></i>
                    </a>
                    <!-- /toggle search -->
                    <div class="search-container">
                        <form role="search" action="search.html" method="get">
                            <input type="text" name="query" class="form-control search" placeholder="أكتب رقم الفاتورة أو العضوية هنا" value="<?php echo $_smarty_tpl->getVariable('q')->value;?>
">
                        </form>
                    </div>
                </li>
                <li class="hidden-xs">
                    <!-- toggle small menu -->
                    <a href="javascript:;" class="toggle-sidebar">
                        <i class="ti-menu"></i>
                    </a>
                    <!-- /toggle small menu -->
                </li>
            </ul>