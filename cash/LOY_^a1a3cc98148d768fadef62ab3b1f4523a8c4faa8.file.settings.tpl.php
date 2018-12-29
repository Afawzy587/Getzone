<?php /* Smarty version Smarty-3.0.8, created on 2018-12-27 14:10:29
         compiled from "./assets/themes\internal/settings.tpl" */ ?>
<?php /*%%SmartyHeaderCode:11167598695c24cf4584fba2-50984778%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a1a3cc98148d768fadef62ab3b1f4523a8c4faa8' => 
    array (
      0 => './assets/themes\\internal/settings.tpl',
      1 => 1544542543,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11167598695c24cf4584fba2-50984778',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
                        <ol class="breadcrumb">
                            <li>
                                <a href="index.html"><i class="ti-home ml5"></i>الصفحة الرئيسية</a>
                            </li>
                            <li class="active"><?php echo $_smarty_tpl->getVariable('title')->value;?>
</li>
                        </ol>
                        <div class="row">
                            <div class="col-lg-12">
                                <?php if ($_smarty_tpl->getVariable('success')->value){?><div class="alert alert-success"><?php echo $_smarty_tpl->getVariable('success')->value;?>
</div>
                                <?php }else{ ?>
                                	<?php if ($_smarty_tpl->getVariable('errors')->value){?>
                                	<div class="alert alert-danger">
                                        <ul>
                                        <?php  $_smarty_tpl->tpl_vars["e"] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('errors')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars["e"]->key => $_smarty_tpl->tpl_vars["e"]->value){
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars["e"]->key;
?>
                                         <li><strong><?php echo $_smarty_tpl->getVariable('e')->value;?>
</strong></li>
                                        <?php }} ?>
                                        </ul>
                                    </div>
                                    <?php }?>
                                <?php }?>
                                <section class="panel">
                                    <header class="panel-heading">الإعدادات الشخصية</header>
                                    <div class="panel-body">
                                        <form class="form-horizontal" role="form" method="post" action="settings.html?do=update">
                                            <div class="form-group">
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control" name="name" placeholder="اكتب إسمك هنا" value="<?php echo $_smarty_tpl->getVariable('u')->value['name'];?>
">
                                                </div>
                                                <label class="col-sm-2 control-label">الإسم</label>
                                            </div>

                                            <div class="form-group">
                                                <div class="col-sm-10">
                                                    <input type="password" class="form-control" autocomplete="new-password" id="inputPassword" placeholder="كلمة المرور" name="password">
                                                    <p class="help-block">اتركها فارغة إذا كنت لا تريد تغيير كلمة المرور.</p>
                                                </div>
                                                <label class="col-sm-2 control-label">كلمة المرور</label>
                                            </div>

                                            <div class="form-group">
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control" name="email" placeholder="بريدك الإلكتروني هنا" value="<?php echo $_smarty_tpl->getVariable('u')->value['email'];?>
">
                                                </div>
                                                <label class="col-sm-2 control-label">البريد الإلكتروني</label>
                                            </div>

                                            <div class="form-group">
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control" name="mobile" placeholder="رقم هاتفك هنا" value="<?php echo $_smarty_tpl->getVariable('u')->value['mobile'];?>
">
                                                </div>
                                                <label class="col-sm-2 control-label">رقم الهاتف</label>
                                            </div>

                                            <div class="form-group">
                                                <div class="col-sm-10">
                                                    <textarea class="form-control" rows="3" name="notes" placeholder="اكتب ملاحظاتك هنا"><?php echo $_smarty_tpl->getVariable('u')->value['notes'];?>
</textarea>
                                                </div>
                                                <label class="col-sm-2 control-label">الملاحظات</label>
                                            </div>
                                            <div class="form-group">
                                            <div class="col-sm-10"><button type="submit" class="btn btn-default">تحديث البيانات</button></div>
                                            </div>
                                        </form>
                                    </div>
                                </section>
                            </div>
                        </div>
