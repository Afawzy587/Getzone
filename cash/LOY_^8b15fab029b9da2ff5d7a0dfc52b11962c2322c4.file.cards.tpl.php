<?php /* Smarty version Smarty-3.0.8, created on 2018-10-29 19:53:55
         compiled from "./assets/themes/internal/cards.tpl" */ ?>
<?php /*%%SmartyHeaderCode:18835683975bd765538fb028-37510131%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8b15fab029b9da2ff5d7a0dfc52b11962c2322c4' => 
    array (
      0 => './assets/themes/internal/cards.tpl',
      1 => 1540816216,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18835683975bd765538fb028-37510131',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
          	<?php if ($_smarty_tpl->getVariable('area_name')->value=='list'){?>
          		<input type="hidden" value="cards" id="page">
          		<input type="hidden" value="العضوية" id="lang_name">
          		<input type="hidden" value="هل أنت متأكد أنك تود حذف هذه" id="lang_del">
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
								<h5><b>قائمة عضويات <span style="color:red;">اليوم</span></b></h5>
							</div>
							<div class="panel-body">
								
								<table class="table table-hover no-m">
									<?php if ($_smarty_tpl->getVariable('u')->value){?>
									<thead>
										<tr>
											<th>#</th>
											<th>إسم العضوية</th>
											<th>نسبة الخصم</th>
											<th>وقت الإضافة </th>
											<th>أضيفت بواسطة</th>
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
												<td><a href="cards.html?do=view&id=<?php echo $_smarty_tpl->getVariable('c')->value['id'];?>
"><?php echo $_smarty_tpl->getVariable('c')->value['name'];?>
</a></td>
												<td>%<?php echo $_smarty_tpl->getVariable('c')->value['discount'];?>
</td>
												<td><?php echo $_smarty_tpl->getVariable('c')->value['date'];?>
</td>
												<td><b><?php echo getFromTable(array('a'=>$_smarty_tpl->getVariable('c')->value['staff_id'],'b'=>'staff','c'=>'getStaffInformation','d'=>'name'),$_smarty_tpl);?>
</b></td>
												<td><?php if ($_smarty_tpl->getVariable('c')->value['status']==1){?><span class="badge bg-success">عضوية مفعلة</span><?php }else{ ?><span class="badge bg-important">عضوية غير مفعلة</span><?php }?></td>
												<td id="item_<?php echo $_smarty_tpl->getVariable('c')->value['id'];?>
">
													<button class="btn btn-primary btn-xs edit" title="تعديل"><i class="fa fa-pencil"></i></button>
												</td>
											</tr>
										<?php }} ?>
									</tbody>
									<?php }else{ ?><tr><td align="center" colspan="7"><b>عفوا لا يوجد عضويات</b></td></tr><?php }?>
									<tfoot>
										<tr>
											<td colspan="6" align="right"><?php echo $_smarty_tpl->getVariable('pager')->value;?>
</td>
											<td colspan="1" align="left"><a class="btn btn-success btn-sm pull-left" href="cards.html?do=add">إضافة عضوية جديد</a></td>
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
						<header class="panel-heading"> تعديل عضوية ( # <?php echo $_smarty_tpl->getVariable('u')->value['number'];?>
 )</header>
						<div class="panel-body">
						<form class="form-horizontal" role="form" method="post" action="cards.html?do=update&id=<?php echo $_smarty_tpl->getVariable('u')->value['id'];?>
">
							<div class="form-group">
								<div class="col-sm-10" align="right">
									<?php echo $_smarty_tpl->getVariable('u')->value['number'];?>

									<input type="hidden" name="number" value="<?php echo $_smarty_tpl->getVariable('u')->value['number'];?>
" />
								</div>
								<label class="col-sm-2 control-label"> رقم العضوية</label>
							</div>
							<div class="form-group">
								<div class="col-sm-10">
									<select class="form-control" name="type">
										<option value="0" <?php if ($_smarty_tpl->getVariable('u')->value['type']==0){?>selected="selected"<?php }?>>[ إختر نوع العضوية ]</option>
										<option value="1" <?php if ($_smarty_tpl->getVariable('u')->value['type']==1){?>selected="selected"<?php }?>><?php echo $_smarty_tpl->getVariable('membership_1')->value;?>
</option>
										<option value="2" <?php if ($_smarty_tpl->getVariable('u')->value['type']==2){?>selected="selected"<?php }?>><?php echo $_smarty_tpl->getVariable('membership_2')->value;?>
</option>
										<option value="3" <?php if ($_smarty_tpl->getVariable('u')->value['type']==3){?>selected="selected"<?php }?>><?php echo $_smarty_tpl->getVariable('membership_3')->value;?>
</option>
									</select>
								</div>
								<label class="col-sm-2 control-label"> نوع العضوية</label>
							</div>
							<div class="form-group">
								<div class="col-sm-10" align="right">
									<input type="text" class="form-control" name="name" placeholder="يجب إدخال اسم صاحب العضوية" value="<?php echo $_smarty_tpl->getVariable('u')->value['name'];?>
">
								</div>
								<label class="col-sm-2 control-label"> إسم صاحب العضوية</label>
							</div>
							<div class="form-group">
								<div class="col-sm-10" align="right">
									<input type="text" class="form-control" name="mobile" placeholder="يجب إدخال رقم الهاتف" value="<?php echo $_smarty_tpl->getVariable('u')->value['mobile'];?>
">
								</div>
								<label class="col-sm-2 control-label"> رقم الهاتف</label>
							</div>
							<div class="form-group">
								<div class="col-sm-6" style="padding-top:7px;">%</div>	
								<div class="col-sm-4">
									<input type="text" class="form-control" name="discount" dir="ltr" placeholder="يجب إدخال نسبة الخصم" value="<?php echo $_smarty_tpl->getVariable('u')->value['discount'];?>
">
								</div>
								<label class="col-sm-2 control-label"> نسبة الخصم</label>
							</div>
							<div class="form-group">
								<div class="col-sm-10">
									<textarea class="form-control" rows="3" name="notes" placeholder="اكتب أي ملاحظات هنا"><?php echo $_smarty_tpl->getVariable('u')->value['notes'];?>
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
          		<input type="hidden" value="cards" id="page">
          		<input type="hidden" value="العضوية" id="lang_name">
          		<input type="hidden" value="هل أنت متأكد أنك تود حذف هذه" id="lang_del">
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
						<header class="panel-heading"> بيانات العضوية ( # <?php echo $_smarty_tpl->getVariable('u')->value['number'];?>
 )</header>
						<div class="panel-body">
						<form class="form-horizontal" role="form" method="post" action="#">
							<div class="alert alert-info">
								<span style="width:15%;display:inline-block;vertical-align:top;"><strong>رقم العضوية : </strong></span>
								<span style="width:80%;display:inline-block;"><?php echo $_smarty_tpl->getVariable('u')->value['number'];?>
</span>
							</div>
							<div class="alert alert-info">
								<span style="width:15%;display:inline-block;vertical-align:top;"><strong>نوع العضوية : </strong></span>
								<span style="width:80%;display:inline-block;"><?php if ($_smarty_tpl->getVariable('u')->value['type']==1){?><?php echo $_smarty_tpl->getVariable('membership_1')->value;?>
<?php }elseif($_smarty_tpl->getVariable('u')->value['type']==2){?><?php echo $_smarty_tpl->getVariable('membership_2')->value;?>
<?php }elseif($_smarty_tpl->getVariable('u')->value['type']==3){?><?php echo $_smarty_tpl->getVariable('membership_3')->value;?>
<?php }else{ ?>غير محددة<?php }?></span>
							</div>
							<div class="alert alert-info">
								<span style="width:15%;display:inline-block;vertical-align:top;"><strong>إسم صاحب العضوية : </strong></span>
								<span style="width:80%;display:inline-block;"><?php echo $_smarty_tpl->getVariable('u')->value['name'];?>
</span>
							</div>
							<div class="alert alert-info">
								<span style="width:15%;display:inline-block;vertical-align:top;"><strong>نسبة الخصم : </strong></span>
								<span style="width:80%;display:inline-block;">%<?php echo $_smarty_tpl->getVariable('u')->value['discount'];?>
</span>
							</div>
							<div class="alert alert-info">
								<span style="width:15%;display:inline-block;vertical-align:top;"><strong>عدد النقاط : </strong></span>
								<span style="width:80%;display:inline-block;"><?php echo $_smarty_tpl->getVariable('u')->value['points'];?>
 نقطة</span>
							</div>
							<div class="alert alert-info">
								<span style="width:15%;display:inline-block;vertical-align:top;"><strong>اضيف بواسطة  : </strong></span>
								<span style="width:80%;display:inline-block;"><?php echo getFromTable(array('a'=>$_smarty_tpl->getVariable('u')->value['staff_id'],'b'=>'staff','c'=>'getStaffInformation','d'=>'name'),$_smarty_tpl);?>
</span>
							</div>
							<div class="alert alert-info">
								<span style="width:15%;display:inline-block;vertical-align:top;"><strong>الحالة  : </strong></span>
								<span style="width:80%;display:inline-block;">عضوية <?php if ($_smarty_tpl->getVariable('u')->value['status']==0){?>غير مفعلة<?php }else{ ?>مفعلة<?php }?></span>
							</div>

							<div class="form-group" id="item_<?php echo $_smarty_tpl->getVariable('u')->value['id'];?>
">
								<!--<a class="hidden-print btn btn-info btn-sm" href="javascript:window.print();">طباعة</a>-->
								<a class="hidden-print btn btn-success btn-sm" onClick="window.location='invoices.html?do=add&key=<?php echo $_smarty_tpl->getVariable('u')->value['number'];?>
'">إضافة فاتورة لهذه العضوية</a>
								<?php if ($_smarty_tpl->getVariable('u')->value['type']==0){?><a class="hidden-print btn btn-info btn-sm" onClick="window.location='cards.html?do=edit&id=<?php echo $_smarty_tpl->getVariable('u')->value['id'];?>
'">إنشاء هذه العضوية</a><?php }?>
								<!--<a class="hidden-print btn btn-danger btn-sm delete" href="cards.html?do=del&id=<?php echo $_smarty_tpl->getVariable('u')->value['id'];?>
">حذف هذه العضوية </a>-->
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
						<header class="panel-heading"> إضافة عضوية جديد </header>
						<div class="panel-body">
						<form class="form-horizontal" role="form" method="post" action="cards.html?do=add">
							<div class="form-group">
								<div class="col-sm-10">
									<input type="text" class="form-control" dir="ltr" name="number" placeholder="يجب إدخال رقم العضوية" value="">
								</div>
								<label class="col-sm-2 control-label"> رقم العضوية</label>
							</div>
							<div class="form-group">
								<div class="col-sm-10">
									<input type="text" class="form-control" name="name" placeholder="يجب إدخال اسم صاحب العضوية" value="">
								</div>
								<label class="col-sm-2 control-label"> إسم صاحب العضوية</label>
							</div>
							<div class="form-group">
								<div class="col-sm-10">
									<input type="text" class="form-control" name="mobile" dir="ltr" placeholder="يجب إدخال رقم الهاتف" value="">
								</div>
								<label class="col-sm-2 control-label"> رقم الهاتف</label>
							</div>
							<div class="form-group">
								<div class="col-sm-6" style="padding-top:7px;">%</div>	
								<div class="col-sm-4">
									<input type="text" class="form-control" name="discount" dir="ltr" placeholder="يجب إدخال نسبة الخصم" value="">
								</div>
								<label class="col-sm-2 control-label"> نسبة الخصم</label>
							</div>
							<div class="form-group">
								<div class="col-sm-10">
									<textarea class="form-control" rows="3" name="notes" placeholder="اكتب ملاحظاتك هنا"></textarea>
								</div>
								<label class="col-sm-2 control-label">الملاحظات</label>
							</div>

							<div class="form-group">
								<div class="col-sm-10"><button type="submit" class="btn btn-default">إضافة عضوية جديدة</button></div>
							</div>
						</form>
						</div>
					</section>
					</div>
				</div>
			<?php }?>