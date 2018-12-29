<?php /* Smarty version Smarty-3.0.8, created on 2018-11-05 22:53:10
         compiled from "./assets/themes/internal/messages.tpl" */ ?>
<?php /*%%SmartyHeaderCode:16255943445be0c9d6429e99-24755043%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '326d286c98d1f9d1d6d71edbc99128be19400937' => 
    array (
      0 => './assets/themes/internal/messages.tpl',
      1 => 1541458385,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '16255943445be0c9d6429e99-24755043',
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
                                    <header class="panel-heading">ارسال رسالة</header>
                                    <div class="panel-body">
                                        <form class="form-horizontal" role="form" method="post" action="messages.html?do=message" enctype="multipart/form-data">
											<div class="form-group">
												<div class="col-sm-10">
													<input type="tel" class="form-control" dir="ltr" name="mobile" placeholder="رقم الهاتف هنا " value="<?php echo $_smarty_tpl->getVariable('u')->value['mobile'];?>
">
												</div>
												<label class="col-sm-2 control-label">رقم الهاتف</label>
											</div>
											<div class="form-group">
												<div class="col-sm-10">
													<textarea class="form-control" rows="5" name="message" placeholder="اكتب الرسالة هنا"><?php echo br2nl($_smarty_tpl->getVariable('u')->value['message']);?>
</textarea>
												</div>
												<label class="col-sm-2 control-label">الرسالة</label>
											</div>
											<div class="form-group" id="item_<?php echo $_smarty_tpl->getVariable('u')->value['id'];?>
">
												<div class="col-sm-10"><button type="submit" class="hidden-print btn btn-primary btn-sm ">ارسال الرسالة</button></div>
											</div>
										</form>
                                    </div>
                                </section>
                            </div>
                        </div>
