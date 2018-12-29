<?php /* Smarty version Smarty-3.0.8, created on 2018-11-03 18:17:23
         compiled from "./assets/themes/internal/branches.tpl" */ ?>
<?php /*%%SmartyHeaderCode:7740377815bdde633546583-07889431%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ab1d160c1f4c461491f4e59f01933a00d97b6db6' => 
    array (
      0 => './assets/themes/internal/branches.tpl',
      1 => 1541268853,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7740377815bdde633546583-07889431',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
          	<?php if ($_smarty_tpl->getVariable('area_name')->value=='list'){?>
          		<input type="hidden" value="branches" id="page">
          		<input type="hidden" value="الفرع" id="lang_name">
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
								<h5>قائمة <b>الفروع</b></h5>
							</div>
							<div class="panel-body">
								<table class="table table-hover no-m">
									<thead>
										<tr>
											<th>#</th>
											<th>إسم الفرع</th>
											<th>العنوان</th>
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
												<td><a href="branches.html?do=view&id=<?php echo $_smarty_tpl->getVariable('c')->value['id'];?>
"><?php echo $_smarty_tpl->getVariable('c')->value['name'];?>
<br /><?php echo $_smarty_tpl->getVariable('c')->value['name_ar'];?>
</a></td>
												<td><?php echo $_smarty_tpl->getVariable('c')->value['address'];?>
<br /><?php echo $_smarty_tpl->getVariable('c')->value['address_ar'];?>
</td>
												<td><?php if ($_smarty_tpl->getVariable('c')->value['status']==1){?><span class="badge bg-success">مفعل</span><?php }else{ ?><span class="badge bg-important">غير مفعل</span><?php }?></td>
												<td id="item_<?php echo $_smarty_tpl->getVariable('c')->value['id'];?>
">
													<button class="btn btn-primary btn-xs edit" title="تعديل"><i class="fa fa-pencil"></i></button>
													<button class="btn btn-danger btn-xs delete" title="حذف"><i class="fa fa-trash-o"></i></button>
												</td>
											</tr>
										<?php }} ?>
									</tbody>
									<tfoot>
										<tr>
											<td colspan="4" align="right"><?php echo $_smarty_tpl->getVariable('pager')->value;?>
</td>
											<td colspan="1" align="left"><a class="btn btn-success btn-sm pull-left" href="branches.html?do=add">إضافة فرع جديد</a></td>
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
						<header class="panel-heading"> تعديل فرع ( # <?php echo $_smarty_tpl->getVariable('u')->value['id'];?>
 )</header>
						<div class="panel-body">
						<form name="servicesForm" id="servicesForm" class="form-horizontal" role="form" method="post" action="branches.html?do=update&id=<?php echo $_smarty_tpl->getVariable('u')->value['id'];?>
" enctype="multipart/form-data">
							<div class="form-group">
								<div class="col-sm-10">
									<input type="text" class="form-control" name="name_ar" placeholder="باللغة العربية" value="<?php echo $_smarty_tpl->getVariable('u')->value['name_ar'];?>
"> <br />
									<input type="text" class="form-control" name="name" dir="ltr" placeholder="In English" value="<?php echo $_smarty_tpl->getVariable('u')->value['name'];?>
">
								</div>
								<label class="col-sm-2 control-label"> إسم الفرع</label>
							</div>
							<div class="form-group">
								<div class="col-sm-10">
									<input type="text" class="form-control" name="address_ar" placeholder="باللغة العربية" value="<?php echo $_smarty_tpl->getVariable('u')->value['address_ar'];?>
"> <br />
									<input type="text" class="form-control" name="address" dir="ltr" placeholder="In English" value="<?php echo $_smarty_tpl->getVariable('u')->value['address'];?>
">
								</div>
								<label class="col-sm-2 control-label"> عنوان الفرع</label>
							</div>
							<div class="form-group">
								<div class="col-sm-10">
									<input type="text" class="form-control" name="times_ar" placeholder="باللغة العربية" value="<?php echo $_smarty_tpl->getVariable('u')->value['times_ar'];?>
"> <br />
									<input type="text" class="form-control" name="times" dir="ltr" placeholder="In English" value="<?php echo $_smarty_tpl->getVariable('u')->value['times'];?>
">

								</div>
								<label class="col-sm-2 control-label"> مواعيد العمل </label>
							</div>
							<div class="form-group">
								<div class="col-sm-10">
									<input type="text" class="form-control" name="phones" dir="ltr" placeholder="comma seperated" value="<?php echo $_smarty_tpl->getVariable('u')->value['phones'];?>
">
								</div>
								<label class="col-sm-2 control-label">أرقام الهاتف</label>
							</div>
							<div class="form-group">
								<div class="col-sm-10">
									<input type="text" class="form-control" name="lon" dir="ltr" placeholder="lon" value="<?php echo $_smarty_tpl->getVariable('u')->value['lon'];?>
"> <br />
									<input type="text" class="form-control" name="lat" dir="ltr" placeholder="lat" value="<?php echo $_smarty_tpl->getVariable('u')->value['lat'];?>
">
								</div>
								<label class="col-sm-2 control-label">مكان الخريطة</label>
							</div>
							
							<div class="form-group">
								<div class="col-sm-10">
									<input type="file" class="form-control" name="icon" style="display:inline-block" />
									<?php if ($_smarty_tpl->getVariable('u')->value['icon']){?><p class="help-block"><a target="_blank" href="../<?php echo $_smarty_tpl->getVariable('u')->value['icon'];?>
">اضغط هنا لمشاهدة أيقونة الفرع</a></p><?php }?>
								</div>
								<label class="col-sm-2 control-label">الأيقونة</label>
							</div>
							<div class="form-group">
								<div class="col-sm-10">
									<input type="file" class="form-control" name="img" style="display:inline-block" />
									<?php if ($_smarty_tpl->getVariable('u')->value['img']){?><p class="help-block"><a target="_blank" href="../<?php echo $_smarty_tpl->getVariable('u')->value['img'];?>
">اضغط هنا لمشاهدة صورة الفرع</a></p><?php }?>
								</div>
								<label class="col-sm-2 control-label">صورة الفرع</label>
							</div>
							<div class="form-group">
								<div class="col-sm-10">
									<input type="text" class="form-control" name="managers_phone" dir="ltr" placeholder="comma seperated" value="<?php echo $_smarty_tpl->getVariable('u')->value['managers_phone'];?>
">
								</div>
								<label class="col-sm-2 control-label">أرقام هاتف مديري الفرع</label>
							</div>
							<div class="form-group">
								<div class="col-sm-10">
									<select class="form-control" name="status">
										<option value="0" <?php if ($_smarty_tpl->getVariable('u')->value['status']==0){?>selected="selected"<?php }?>>غير مفعل</option>
										<option value="1" <?php if ($_smarty_tpl->getVariable('u')->value['status']==1){?>selected="selected"<?php }?>>مفعل</option>
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
          		<input type="hidden" value="branches" id="page">
          		<input type="hidden" value="الفرع" id="lang_name">
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
						<header class="panel-heading"> بيانات الفرع ( # <?php echo $_smarty_tpl->getVariable('u')->value['id'];?>
 )</header>
						<div class="panel-body">
						<form class="form-horizontal" role="form" method="post" action="branches.html?do=update&id=<?php echo $_smarty_tpl->getVariable('u')->value['id'];?>
">
							<div class="alert alert-info">
								<span style="width:15%;display:inline-block;vertical-align:top;"><strong>إسم الفرع : </strong></span>
								<span style="width:80%;display:inline-block;"><?php echo $_smarty_tpl->getVariable('u')->value['name'];?>
<br /><?php echo $_smarty_tpl->getVariable('u')->value['name_ar'];?>
</span>
							</div>
							<div class="alert alert-info">
								<span style="width:15%;display:inline-block;vertical-align:top;"><strong>العنوان : </strong></span>
								<span style="width:80%;display:inline-block;"><?php echo $_smarty_tpl->getVariable('u')->value['address'];?>
<br /><?php echo $_smarty_tpl->getVariable('u')->value['address_ar'];?>
</span>
							</div>
							<div class="alert alert-info">
								<span style="width:15%;display:inline-block;vertical-align:top;"><strong>مواعيد العمل : </strong></span>
								<span style="width:80%;display:inline-block;"><?php echo $_smarty_tpl->getVariable('u')->value['times'];?>
<br /><?php echo $_smarty_tpl->getVariable('u')->value['times_ar'];?>
</span>
							</div>
							<div class="alert alert-info">
								<span style="width:15%;display:inline-block;vertical-align:top;"><strong>أرقام الهواتف : </strong></span>
								<span style="width:80%;display:inline-block;direction:ltr;text-align:right;"><?php echo commaSeperate($_smarty_tpl->getVariable('u')->value['phones']);?>
</span>
							</div>
							<div class="alert alert-info">
								<span style="width:15%;display:inline-block;vertical-align:top;"><strong>الأيقونة : </strong></span>
								<span style="width:80%;display:inline-block;"><?php if ($_smarty_tpl->getVariable('u')->value['icon']){?><a target="_blank" href="../<?php echo $_smarty_tpl->getVariable('u')->value['icon'];?>
">اضغط هنا لمشاهدة الأيقونة</a><?php }?></span>
							</div>
							<div class="alert alert-info">
								<span style="width:15%;display:inline-block;vertical-align:top;"><strong>صورة الفرع : </strong></span>
								<span style="width:80%;display:inline-block;"><?php if ($_smarty_tpl->getVariable('u')->value['img']){?><a target="_blank" href="../<?php echo $_smarty_tpl->getVariable('u')->value['img'];?>
">اضغط هنا لمشاهدة صورة الفرع</a><?php }?></span>
							</div>
							<div class="alert alert-info">
								<span style="width:15%;display:inline-block;vertical-align:top;"><strong>الخريطة : </strong></span>
								<span style="width:80%;display:inline-block;"><?php if ($_smarty_tpl->getVariable('u')->value['lon']&&$_smarty_tpl->getVariable('u')->value['lat']){?><a target="_blank" href="http://www.maps.google.com/<?php echo $_smarty_tpl->getVariable('u')->value['lon'];?>
,<?php echo $_smarty_tpl->getVariable('u')->value['lat'];?>
">اضغط هنا لمشاهدة الخريطة</a><?php }?></span>
							</div>
							<div class="alert alert-info">
								<span style="width:15%;display:inline-block;vertical-align:top;"><strong>أرقام هواتف مديري الفروع : </strong></span>
								<span style="width:80%;display:inline-block;direction:ltr;text-align:right;"><?php echo commaSeperate($_smarty_tpl->getVariable('u')->value['managers_phone']);?>
</span>
							</div>
							<div class="alert alert-info">
								<span style="width:15%;display:inline-block;vertical-align:top;"><strong>الحالة  : </strong></span>
								<span style="width:80%;display:inline-block;"><?php if ($_smarty_tpl->getVariable('u')->value['status']==0){?>غير مفعل<?php }else{ ?>مفعل<?php }?></span>
							</div>
							<div class="form-group" id="item_<?php echo $_smarty_tpl->getVariable('u')->value['id'];?>
">
								<a class="hidden-print btn btn-info btn-sm" href="javascript:window.print();">طباعة</a>
								<a class="hidden-print btn btn-warning btn-sm" href="branches.html?do=edit&id=<?php echo $_smarty_tpl->getVariable('u')->value['id'];?>
">تعديل الفرع</a>
								<a class="hidden-print btn btn-danger btn-sm delete" href="branches.html?do=del&id=<?php echo $_smarty_tpl->getVariable('u')->value['id'];?>
">حذف هذا الفرع </a>
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
						<header class="panel-heading"> إضافة فرع جديد </header>
						<div class="panel-body">
						<form name="servicesForm" id="servicesForm" class="form-horizontal" role="form" method="post" action="branches.html?do=add" enctype="multipart/form-data">
							<div class="form-group">
								<div class="col-sm-10">
									<input type="text" class="form-control" name="name_ar" placeholder="باللغة العربية" value=""> <br />
									<input type="text" class="form-control" name="name" dir="ltr" placeholder="In English" value="">
								</div>
								<label class="col-sm-2 control-label"> إسم الفرع</label>
							</div>
							<div class="form-group">
								<div class="col-sm-10">
									<input type="text" class="form-control" name="address_ar" placeholder="باللغة العربية" value=""> <br />
									<input type="text" class="form-control" name="address" dir="ltr" placeholder="In English" value="">
								</div>
								<label class="col-sm-2 control-label"> عنوان الفرع</label>
							</div>
							<div class="form-group">
								<div class="col-sm-10">
									<input type="text" class="form-control" name="times_ar" placeholder="باللغة العربية" value=""> <br />
									<input type="text" class="form-control" name="times" dir="ltr" placeholder="In English" value="">

								</div>
								<label class="col-sm-2 control-label"> مواعيد العمل </label>
							</div>
							<div class="form-group">
								<div class="col-sm-10">
									<input type="text" class="form-control" name="phones" dir="ltr" placeholder="comma seperated" value="">
								</div>
								<label class="col-sm-2 control-label">أرقام الهاتف</label>
							</div>
							<div class="form-group">
								<div class="col-sm-10">
									<input type="text" class="form-control" name="lon" dir="ltr" placeholder="lon" value=""> <br />
									<input type="text" class="form-control" name="lat" dir="ltr" placeholder="lat" value="">
								</div>
								<label class="col-sm-2 control-label">مكان الخريطة</label>
							</div>
							<div class="form-group">
								<div class="col-sm-10">
									<input type="file" class="form-control" name="icon" style="display:inline-block" />
								</div>
								<label class="col-sm-2 control-label">الأيقونة</label>
							</div>
							<div class="form-group">
								<div class="col-sm-10">
									<input type="file" class="form-control" name="img" style="display:inline-block" />
								</div>
								<label class="col-sm-2 control-label">صورة الفرع</label>
							</div>
							<div class="form-group">
								<div class="col-sm-10">
									<input type="text" class="form-control" name="managers_phone" dir="ltr" placeholder="comma seperated" value="">
								</div>
								<label class="col-sm-2 control-label">أرقام هاتف مديري الفرع</label>
							</div>
							<div class="form-group">
								<div class="col-sm-10"><button type="submit" class="btn btn-default">إضافة الفرع</button></div>
							</div>
						</form>
						</div>
					</section>
					</div>
				</div>
			<?php }?>