<?php /* Smarty version Smarty-3.0.8, created on 2018-11-05 22:13:17
         compiled from "./assets/themes/internal/setting.tpl" */ ?>
<?php /*%%SmartyHeaderCode:16445132435be0c07d6ebd91-22775817%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd10c3a3cabb0b64075769d66d0496f66b8b4c8b2' => 
    array (
      0 => './assets/themes/internal/setting.tpl',
      1 => 1541455985,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '16445132435be0c07d6ebd91-22775817',
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
                                    <header class="panel-heading"> اعدادات الرسائل</header>
                                    <div class="panel-body">
                                        <form class="form-horizontal" role="form" method="post" action="setting.html">
                                            <div class="form-group">
												<div class="col-sm-10">
													<select class="form-control" name="allow_sms">
														<option value="0" <?php if ($_smarty_tpl->getVariable('u')->value['allow_sms']==0){?>selected="selected"<?php }?>>غير مفعلة</option>
														<option value="1" <?php if ($_smarty_tpl->getVariable('u')->value['allow_sms']==1){?>selected="selected"<?php }?>>مفعلة</option>
													</select>
												</div>
												<label class="col-sm-2 control-label">خدمة الإرسال</label>
											</div>
											<div class="form-group">
                                                <div class="col-sm-10">
                                                    <input type="text" dir="ltr" class="form-control" name="url" placeholder="اكتب رابط الإرسال هنا" value="<?php echo $_smarty_tpl->getVariable('u')->value['url'];?>
" />
													<p class="help-block">اكتب رابط الإرسال الذي سيتم إرسال رسائل نصية من خلاله</p>
                                                </div>
                                                <label class="col-sm-2 control-label">رابط الإرسال</label>
                                            </div>
											<div class="form-group">
                                                <div class="col-sm-10">
                                                    <input type="text" dir="ltr" class="form-control" name="sender" placeholder="اكتب إسم الإرسال هنا" value="<?php echo $_smarty_tpl->getVariable('u')->value['sender'];?>
" />
													<p class="help-block">اكتب إسم الإرسال الذي سيتم إرسال رسائل نصية به</p>
                                                </div>
                                                <label class="col-sm-2 control-label">إسم الإرسال</label>
                                            </div>
											<div class="form-group">
                                                <div class="col-sm-10">
                                                    <input type="text" dir="ltr" class="form-control" name="employee_numbers" placeholder="اكتب أرقام الموظفين هنا" value="<?php echo $_smarty_tpl->getVariable('u')->value['employee_numbers'];?>
" />
													<p class="help-block">اكتب أرقام هواتف الموظفين مفصولة بعلامة الفاصلة</p>
                                                </div>
                                                <label class="col-sm-2 control-label">أرقام الموظفين </label>
                                            </div>
                                            <div class="form-group">
                                                <div class="col-sm-10">
                                                    <textarea class="form-control" rows="3" name="mess_order_cli" placeholder="اكتب الرسالة هنا"><?php echo $_smarty_tpl->getVariable('u')->value['mess_order_cli'];?>
</textarea>
                                                	<p class="help-block">اكتب الرسالة التي ستصل للعميل بعد ساعة من تنفيذ الأوردر</p>
												</div>
                                                <label class="col-sm-2 control-label"> الأوردر - للعميل</label>
                                            </div>
                                            <div class="form-group">
                                                <div class="col-sm-10">
                                                    <textarea class="form-control" rows="3" name="mess_cake_cli" placeholder="اكتب الرسالة هنا"><?php echo $_smarty_tpl->getVariable('u')->value['mess_cake_cli'];?>
</textarea>
                                                	<p class="help-block">اكتب الرسالة التي ستصل للعميل بعد ساعة من تنفيذ الأوردر</p>
												</div>
                                                <label class="col-sm-2 control-label"> حجز التورت - للعميل</label>
                                            </div>
											<div class="form-group">
                                                <div class="col-sm-10">
                                                    <textarea class="form-control" rows="3" name="mess_offer_cli" placeholder="اكتب الرسالة هنا"><?php echo $_smarty_tpl->getVariable('u')->value['mess_offer_cli'];?>
</textarea>
                                                	<p class="help-block">اكتب الرسالة التي ستصل للعميل فور حجز العرض</p>
												</div>
                                                <label class="col-sm-2 control-label"> حجز العروض - للعميل</label>
                                            </div>
											<div class="form-group">
                                                <div class="col-sm-10">
                                                    <textarea class="form-control" rows="3" name="mess_order_emp" placeholder="اكتب الرسالة هنا"><?php echo $_smarty_tpl->getVariable('u')->value['mess_order_emp'];?>
</textarea>
                                                	<p class="help-block">اكتب الرسالة التي ستصل للموظف فور طلب الأوردر</p>
												</div>
                                                <label class="col-sm-2 control-label"> الأوردر - للموظف</label>
                                            </div>
                                            <div class="form-group">
                                                <div class="col-sm-10">
                                                    <textarea class="form-control" rows="3" name="mess_cake_emp" placeholder="اكتب الرسالة هنا"><?php echo $_smarty_tpl->getVariable('u')->value['mess_cake_emp'];?>
</textarea>
                                                	<p class="help-block">اكتب الرسالة التي ستصل للموظف فور طلب حجز التورت</p>
												</div>
                                                <label class="col-sm-2 control-label"> حجز التورت - للموظف</label>
                                            </div>
											<div class="form-group">
                                                <div class="col-sm-10">
                                                    <textarea class="form-control" rows="3" name="mess_contact_emp" placeholder="اكتب الرسالة هنا"><?php echo $_smarty_tpl->getVariable('u')->value['mess_contact_emp'];?>
</textarea>
                                                	<p class="help-block">اكتب الرسالة التي ستصل للموظف فور محاولة الاتصال بإدارة الموقع</p>
												</div>
                                                <label class="col-sm-2 control-label"> اتصل بنا  - للموظف</label>
                                            </div>
											<div class="form-group">
                                                <div class="col-sm-10">
                                                    <textarea class="form-control" rows="3" name="mess_offer_man" placeholder="اكتب الرسالة هنا"><?php echo $_smarty_tpl->getVariable('u')->value['mess_offer_man'];?>
</textarea>
                                                	<p class="help-block">اكتب الرسالة التي ستصل لمديري الفروع عند حجز العروض</p>
												</div>
                                                <label class="col-sm-2 control-label"> حجز العروض - م. الفروع</label>
                                            </div>
                                            <div class="form-group">
                                            <div class="col-sm-10"><button type="submit" class="btn btn-default">تحديث البيانات</button></div>
                                            </div>
                                        </form>
                                    </div>
                                </section>
                            </div>
                        </div>
