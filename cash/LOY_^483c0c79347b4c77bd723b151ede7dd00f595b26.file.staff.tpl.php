<?php /* Smarty version Smarty-3.0.8, created on 2018-11-08 11:24:06
         compiled from "./assets/themes/internal/staff.tpl" */ ?>
<?php /*%%SmartyHeaderCode:10136232465be41cd6b09357-27964828%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '483c0c79347b4c77bd723b151ede7dd00f595b26' => 
    array (
      0 => './assets/themes/internal/staff.tpl',
      1 => 1541074015,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10136232465be41cd6b09357-27964828',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
          	<?php if ($_smarty_tpl->getVariable('area_name')->value=='list'){?>
          		<input type="hidden" value="staff" id="page">
          		<input type="hidden" value="الموظف" id="lang_name">
          		<input type="hidden" value="هل أنت متأكد أنك تود حذف هذا" id="lang_del">
                <ol class="breadcrumb">
					<li>
						<a href="index.html"><i class="ti-home ml5"></i>الصفحة الرئيسية</a>
					</li>
					<li class="active"><?php echo $_smarty_tpl->getVariable('title')->value;?>
</li>
				</ol>
                <div class="row mt">
					<div class="col-md-12">
						<?php if ($_smarty_tpl->getVariable('success')->value){?><div class="alert alert-success"><?php echo $_smarty_tpl->getVariable('success')->value;?>
</div><?php }?>
						<section class="panel">
							<div class="panel-heading no-b">
								<h5>قائمة <b>الموظفين</b></h5>
							</div>
							<div class="panel-body">
								
								<table class="table table-hover no-m">
									<?php if ($_smarty_tpl->getVariable('u')->value){?>
									<thead>
										<tr>
											<th>#</th>
											<th>إسم الموظف</th>
											<th>الحالة </th>
											<th>الإعدادات</th>
										</tr>
									</thead>
									<tbody>
										<?php  $_smarty_tpl->tpl_vars["c"] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('u')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars["c"]->key => $_smarty_tpl->tpl_vars["c"]->value){
?>
											<tr id="tr_<?php echo $_smarty_tpl->getVariable('c')->value['id'];?>
">
												<td><?php echo $_smarty_tpl->getVariable('c')->value['id'];?>
</td>
												<td><a href="staff.html?do=view&id=<?php echo $_smarty_tpl->getVariable('c')->value['id'];?>
"><?php echo $_smarty_tpl->getVariable('c')->value['name'];?>
</a></td>
												<td><?php if ($_smarty_tpl->getVariable('c')->value['status']==1){?><span class="badge bg-success">مفعلة</span><?php }else{ ?><span class="badge bg-important">غير مفعلة</span><?php }?></td>
												<td id="item_<?php echo $_smarty_tpl->getVariable('c')->value['id'];?>
">
													<button class="btn btn-primary btn-xs edit" title="تعديل"><i class="fa fa-pencil"></i></button>
													<button class="btn btn-danger btn-xs delete" title="حذف"><i class="fa fa-trash-o"></i></button>
												</td>
											</tr>
										<?php }} ?>
									</tbody>
									<?php }else{ ?><tr><td align="center" colspan="4"><b>عفوا لا يوجد موظفين</b></td></tr><?php }?>
									<tfoot>
										<tr>
											<td colspan="3" align="right"><?php echo $_smarty_tpl->getVariable('pager')->value;?>
</td>
											<td colspan="1" align="left"><a class="btn btn-success btn-sm pull-left" href="staff.html?do=add">إضافة موظف جديد</a></td>
										</tr>
									</tfoot>
									
								</table>
							</div>
						</section>
					</div>
				</div>
          	<?php }elseif($_smarty_tpl->getVariable('area_name')->value=='edit'){?>
          		<ol class="breadcrumb">
					<li>
						<a href="index.html"><i class="ti-home ml5"></i>الصفحة الرئيسية</a>
					</li>
					<li class="active"><?php echo $_smarty_tpl->getVariable('title')->value;?>
</li>
				</ol>
				<div class="row">
					<div class="col-lg-12">
					<?php if ($_smarty_tpl->getVariable('success')->value){?>
						<div class="alert alert-success"><?php echo $_smarty_tpl->getVariable('success')->value;?>
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
						<header class="panel-heading"> تعديل موظف ( # <?php echo $_smarty_tpl->getVariable('u')->value['id'];?>
 )</header>
						<div class="panel-body">
						<form class="form-horizontal" role="form" method="post" action="staff.html?do=update&id=<?php echo $_smarty_tpl->getVariable('u')->value['id'];?>
">

						<div class="form-group">
								<div class="col-sm-10">
									<input type="text" class="form-control" autocomplete="new-password" name="name" placeholder="يجب إدخال  اسم الموظف" value="<?php echo $_smarty_tpl->getVariable('u')->value['name'];?>
">
								</div>
								<label class="col-sm-2 control-label"> إسم الموظف</label>
							</div>

							<div class="form-group">
								<div class="col-sm-10">
									<input type="text" class="form-control" name="email" placeholder=" email@site.com " value="<?php echo $_smarty_tpl->getVariable('u')->value['email'];?>
">
								</div>
								<label class="col-sm-2 control-label"> البريد الإلكتروني</label>
							</div>

							<div class="form-group">
								<div class="col-sm-10">
									<input type="password" class="form-control" autocomplete="new-password" name="password" placeholder="كلمة المرور " value="">
									<p class="help-block">اتركها فارغة إذا كنت لا تريد تغيير كلمة المرور.</p>
								</div>
								<label class="col-sm-2 control-label"> كلمة المرور</label>
							</div>
							
							<div class="form-group">
                                <div class="col-sm-10">
                                <select class="form-control" name="group">
										<?php  $_smarty_tpl->tpl_vars["_g"] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('g')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars["_g"]->key => $_smarty_tpl->tpl_vars["_g"]->value){
?>
											<option value="<?php echo $_smarty_tpl->getVariable('_g')->value['id'];?>
"<?php if ($_smarty_tpl->getVariable('_g')->value['id']==$_smarty_tpl->getVariable('u')->value['group']){?>selected="selected"<?php }?>><?php echo $_smarty_tpl->getVariable('_g')->value['name'];?>
</option>
										<?php }} ?>
									</select>
							    </div>
								<label class="col-sm-2 control-label">  المجموعة   </label>
							</div> 


							<div class="form-group">
								<div class="col-sm-10">
									<input type="text" class="form-control" name="mobile" placeholder="يجب إدخال  رقم الهاتف" value="<?php echo $_smarty_tpl->getVariable('u')->value['mobile'];?>
">
								</div>
								<label class="col-sm-2 control-label"> رقم الهاتف</label>
							</div>
							
							<div class="form-group">
								<div class="col-sm-10">
									<textarea class="form-control" rows="3" name="notes" placeholder="اكتب ملاحظاتك هنا"><?php echo $_smarty_tpl->getVariable('u')->value['notes'];?>
</textarea>
								</div>
								<label class="col-sm-2 control-label">الملاحظات</label>
							</div>


							<div class="form-group">
								<div class="col-sm-10">
									<select class="form-control" name="status">
										<option value="0" <?php if ($_smarty_tpl->getVariable('u')->value['status']==0){?>selected="selected"<?php }?>>غير مفعلة</option>
										<option value="1" <?php if ($_smarty_tpl->getVariable('u')->value['status']==1){?>selected="selected"<?php }?>>مفعلة</option>
									</select>
								</div>
								<label class="col-sm-2 control-label"> الحالة</label>
							</div>
							<div class="form-group">
								<div class="col-sm-10"><button type="submit" class="btn btn-default">تحديث البيانات</button></div>
							</div>
						</form>
						</div>
					</section>
					</div>
				</div>
          	<?php }elseif($_smarty_tpl->getVariable('area_name')->value=='view'){?>
          		<input type="hidden" value="staff" id="page">
          		<input type="hidden" value="الموظف" id="lang_name">
          		<input type="hidden" value="هل أنت متأكد أنك تود حذف هذا" id="lang_del">
          		<ol class="breadcrumb hidden-print">
					<li>
						<a href="index.html"><i class="ti-home ml5"></i>الصفحة الرئيسية</a>
					</li>
					<li class="active"><?php echo $_smarty_tpl->getVariable('title')->value;?>
</li>
				</ol>
				<div class="row">
					<div class="col-lg-12">
					<?php if ($_smarty_tpl->getVariable('success')->value){?>
						<div class="alert alert-success"><?php echo $_smarty_tpl->getVariable('success')->value;?>
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
						<header class="panel-heading"> بيانات الموظف ( # <?php echo $_smarty_tpl->getVariable('u')->value['id'];?>
 )</header>
						<div class="panel-body">
						<form class="form-horizontal" role="form" method="post" action="staff.html?do=update&id=<?php echo $_smarty_tpl->getVariable('u')->value['id'];?>
">
							<div class="alert alert-info">
								<span style="width:15%;display:inline-block;vertical-align:top;"><strong>إسم الموظف : </strong></span>
								<span style="width:80%;display:inline-block;"><?php echo $_smarty_tpl->getVariable('u')->value['name'];?>
</span>
							</div>
							<div class="alert alert-info">
								<span style="width:15%;display:inline-block;vertical-align:top;"><strong>البريد الإلكتروني : </strong></span>
								<span style="width:80%;display:inline-block;"><?php echo $_smarty_tpl->getVariable('u')->value['email'];?>
</span>
							</div>
							<div class="alert alert-info">
								<span style="width:15%;display:inline-block;vertical-align:top;"><strong>رقم الهاتف : </strong></span>
								<span style="width:80%;display:inline-block;"><?php echo $_smarty_tpl->getVariable('u')->value['mobile'];?>
</span>
							</div>
							<div class="alert alert-info">
								<span style="width:15%;display:inline-block;vertical-align:top;"><strong>ملاحظات  : </strong></span>
								<span style="width:80%;display:inline-block;"><?php echo nl2br($_smarty_tpl->getVariable('u')->value['notes']);?>
</span>
							</div>
							<div class="alert alert-info">
								<span style="width:15%;display:inline-block;vertical-align:top;"><strong>أخر تسجيل دخول  : </strong></span>
								<span style="width:80%;display:inline-block;"><?php echo full_date_format($_smarty_tpl->getVariable('u')->value['log_time']);?>
</span>
							</div>
							<div class="alert alert-info">
								<span style="width:15%;display:inline-block;vertical-align:top;"><strong>المجموعة : </strong></span>
								<span style="width:80%;display:inline-block;"><?php echo getFromTable(array('a'=>$_smarty_tpl->getVariable('u')->value['group'],'b'=>"groups",'c'=>"getGroupsInformations",'d'=>"name"),$_smarty_tpl);?>
</span>
							</div>

							<div class="alert alert-info">
								<span style="width:15%;display:inline-block;vertical-align:top;"><strong>الحالة  : </strong></span>
								<span style="width:80%;display:inline-block;"><?php if ($_smarty_tpl->getVariable('u')->value['status']==0){?>غير مفعلة<?php }else{ ?>مفعلة<?php }?></span>
							</div>

							<div class="form-group" id="item_<?php echo $_smarty_tpl->getVariable('u')->value['id'];?>
">
								<a class="hidden-print btn btn-info btn-sm" href="javascript:window.print();">طباعة</a>
								<a class="hidden-print btn btn-warning btn-sm" href="staff.html?do=edit&id=<?php echo $_smarty_tpl->getVariable('u')->value['id'];?>
">تعديل الموظف</a>
								<a class="hidden-print btn btn-danger btn-sm delete" href="staff.html?do=del&id=<?php echo $_smarty_tpl->getVariable('u')->value['id'];?>
">حذف هذا الموظف </a>
							</div>
						</form>
						</div>
					</section>
					</div>
				</div>
          	<?php }elseif($_smarty_tpl->getVariable('area_name')->value=='add'){?>
				<ol class="breadcrumb">
					<li>
						<a href="index.html"><i class="ti-home ml5"></i>الصفحة الرئيسية</a>
					</li>
					<li class="active"><?php echo $_smarty_tpl->getVariable('title')->value;?>
</li>
				</ol>
				<div class="row">
					<div class="col-lg-12">
					<?php if ($_smarty_tpl->getVariable('success')->value){?>
						<div class="alert alert-success"><?php echo $_smarty_tpl->getVariable('success')->value;?>
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
						<header class="panel-heading"> إضافة موظف جديد </header>
						<div class="panel-body">
						<form class="form-horizontal" role="form" method="post" action="staff.html?do=add">
							<div class="form-group">
								<div class="col-sm-10">
									<input type="text" class="form-control" name="name" placeholder="يجب إدخال اسم الموظف" value="">
								</div>
								<label class="col-sm-2 control-label"> إسم الموظف</label>
							</div>

							<div class="form-group">
								<div class="col-sm-10">
									<input type="text" class="form-control" name="email" placeholder="email@site.com" value="">
								</div>
								<label class="col-sm-2 control-label"> البريد الإلكتروني</label>
							</div>

							<div class="form-group">
								<div class="col-sm-10">
									<input type="password" class="form-control" autocomplete="new-password" name="password" placeholder="يجب إدخال كلمة المرور " value="">
								</div>
								<label class="col-sm-2 control-label"> كلمة المرور</label>
							</div>
							 
							 <div class="form-group">
                                <div class="col-sm-10">
                                <select class="form-control" name="group">
										<?php  $_smarty_tpl->tpl_vars["_g"] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('g')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars["_g"]->key => $_smarty_tpl->tpl_vars["_g"]->value){
?>
											<option value="<?php echo $_smarty_tpl->getVariable('_g')->value['id'];?>
"<?php if ($_smarty_tpl->getVariable('_g')->value['id']==$_smarty_tpl->getVariable('u')->value['group']){?>selected="selected"<?php }?>><?php echo $_smarty_tpl->getVariable('_g')->value['name'];?>
</option>
										<?php }} ?>
									</select>
							    </div>
								<label class="col-sm-2 control-label">  المجموعة   </label>
							</div> 


							<div class="form-group">
								<div class="col-sm-10">
									<input type="text" class="form-control" name="mobile" placeholder="يجب إدخال رقم الهاتف" value="">
								</div>
								<label class="col-sm-2 control-label"> رقم الهاتف</label>
							</div>
							<div class="form-group">
								<div class="col-sm-10">
									<textarea class="form-control" rows="3" name="notes" placeholder="اكتب ملاحظاتك هنا"></textarea>
								</div>
								<label class="col-sm-2 control-label">الملاحظات</label>
							</div>

							<div class="form-group">
								<div class="col-sm-10"><button type="submit" class="btn btn-default">إضافة موظف</button></div>
							</div>
						</form>
						</div>
					</section>
					</div>
				</div>
			<?php }?>