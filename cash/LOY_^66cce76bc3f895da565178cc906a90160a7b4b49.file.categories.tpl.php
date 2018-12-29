<?php /* Smarty version Smarty-3.0.8, created on 2018-12-20 16:37:08
         compiled from "./assets/themes\internal/categories.tpl" */ ?>
<?php /*%%SmartyHeaderCode:5637715705c1bb7244d3b76-61272863%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '66cce76bc3f895da565178cc906a90160a7b4b49' => 
    array (
      0 => './assets/themes\\internal/categories.tpl',
      1 => 1544542549,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5637715705c1bb7244d3b76-61272863',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
          	<?php if ($_smarty_tpl->getVariable('area_name')->value=='list'){?>
          		<input type="hidden" value="categories" id="page">
          		<input type="hidden" value="القسم" id="lang_name">
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
								<h5>قائمة <b>الأقسام</b></h5>
							</div>
							<div class="panel-body">
								<table class="table table-hover no-m">
									<thead>
										<tr>
											<th>#</th>
											<th>إسم القسم</th>
											<th> عدد منتجات القسم</th>
											<th>حالة القسم</th>
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
												<td>
													<a href="categories.html?do=view&id=<?php echo $_smarty_tpl->getVariable('c')->value['id'];?>
"><?php echo $_smarty_tpl->getVariable('c')->value['name'];?>
 - <?php echo $_smarty_tpl->getVariable('c')->value['name_ar'];?>
</a> <br />
												</td>
												<td  dir="rtl">
													<a href="items.html?category=<?php echo $_smarty_tpl->getVariable('c')->value['id'];?>
" title="منتجات القسم" ><span style="text-align:center"><?php echo getcategoryitems($_smarty_tpl->getVariable('c')->value['id']);?>
 </span> </a> <br />
												</td>
												<td><?php if ($_smarty_tpl->getVariable('c')->value['status']==1){?><span class="badge bg-success">مفعل</span><?php }else{ ?><span class="badge bg-important">غير مفعل</span><?php }?></td>
												<td id="item_<?php echo $_smarty_tpl->getVariable('c')->value['id'];?>
">
													<button class="btn btn-primary btn-xs" title="منتجات القسم" onClick="window.location='items.html?category=<?php echo $_smarty_tpl->getVariable('c')->value['id'];?>
'"><i class="glyphicon glyphicon-list-alt"></i></button>
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
											<td colspan="1" align="left"><a class="btn btn-success btn-sm pull-left" href="categories.html?do=add">إضافة قسم جديد</a></td>
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
						<header class="panel-heading"> تعديل قسم ( # <?php echo $_smarty_tpl->getVariable('u')->value['id'];?>
 )</header>
						<div class="panel-body">
						<form class="form-horizontal" role="form" method="post" action="categories.html?do=update&id=<?php echo $_smarty_tpl->getVariable('u')->value['id'];?>
" enctype="multipart/form-data">
							<div class="form-group">
								<div class="col-sm-10">
									<input type="text" class="form-control" name="name_ar" placeholder="إسم القسم هنا" value="<?php if ($_smarty_tpl->getVariable('n')->value['name_ar']!=''){?><?php echo $_smarty_tpl->getVariable('n')->value['name_ar'];?>
<?php }else{ ?><?php echo $_smarty_tpl->getVariable('u')->value['name_ar'];?>
<?php }?>">
								</div>
								<label class="col-sm-2 control-label">إسم القسم العربي</label>
							</div>
							<div class="form-group">
								<div class="col-sm-10">
									<input type="text" class="form-control" dir="ltr" name="name" placeholder="إسم القسم هنا" value="<?php if ($_smarty_tpl->getVariable('n')->value['name']!=''){?><?php echo $_smarty_tpl->getVariable('n')->value['name'];?>
<?php }else{ ?><?php echo $_smarty_tpl->getVariable('u')->value['name'];?>
<?php }?>">
								</div>
								<label class="col-sm-2 control-label">إسم القسم الإنجليزي</label>
							</div>
							<div class="form-group">
								<div class="col-sm-10">
									<textarea class="form-control" rows="3" name="description_ar" placeholder="اكتب وصف القسم العربي هنا"><?php echo br2nl($_smarty_tpl->getVariable('u')->value['description_ar']);?>
</textarea>
								</div>
								<label class="col-sm-2 control-label">وصف القسم العربي</label>
							</div>
							<div class="form-group">
								<div class="col-sm-10">
									<textarea class="form-control" dir="ltr" rows="3" name="description" placeholder="اكتب وصف القسم الإنجليزي هنا"><?php echo br2nl($_smarty_tpl->getVariable('u')->value['description']);?>
</textarea>
								</div>
								<label class="col-sm-2 control-label">وصف القسم الإنجليزي</label>
							</div>
							<div class="form-group">
								<div class="col-sm-10">
									<input type="file" class="form-control" name="icon" value="">
									<?php if ($_smarty_tpl->getVariable('u')->value['icon']){?><p class="help-block"><a target="_blank" href="<?php echo $_smarty_tpl->getVariable('path_img')->value;?>
<?php echo $_smarty_tpl->getVariable('u')->value['icon'];?>
">اضغط هنا لمشاهدة صورة القسم </a></p><?php }?>
								</div>
								<label class="col-sm-2 control-label">صورة القسم</label>
							</div>
							<div class="form-group">
								<div class="col-sm-10">
									<select class="form-control" name="status">
										<option value="0" <?php if ($_smarty_tpl->getVariable('u')->value['status']==0){?>selected="selected"<?php }?>>غير مفعل</option>
										<option value="1" <?php if ($_smarty_tpl->getVariable('u')->value['status']==1){?>selected="selected"<?php }?>>مفعل</option>
									</select>
								</div>
								<label class="col-sm-2 control-label">حالة القسم</label>
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
          		<input type="hidden" value="categories" id="page">
          		<input type="hidden" value="القسم" id="lang_name">
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
						<header class="panel-heading"> بيانات قسم ( # <?php echo $_smarty_tpl->getVariable('u')->value['id'];?>
 )</header>
						<div class="panel-body">
						<form class="form-horizontal" role="form" method="post" action="categories.html?do=update&id=<?php echo $_smarty_tpl->getVariable('u')->value['id'];?>
">
							<div class="alert alert-info">
								<span style="width:15%;display:inline-block;vertical-align:top;"><strong>إسم القسم : </strong></span>
								<span style="width:80%;display:inline-block;"><?php echo $_smarty_tpl->getVariable('u')->value['name'];?>
 - <?php echo $_smarty_tpl->getVariable('u')->value['name_ar'];?>
</span>
							</div>
							<div class="alert alert-info">
								<span style="width:15%;display:inline-block;vertical-align:top;"><strong>وصف القسم : </strong></span>
								<span style="width:80%;display:inline-block;"><?php echo $_smarty_tpl->getVariable('u')->value['description'];?>
 - <?php echo $_smarty_tpl->getVariable('u')->value['description_ar'];?>
</span>
							</div>
							<div class="alert alert-info">
								<span style="width:15%;display:inline-block;vertical-align:top;"><strong>صورة القسم : </strong></span>
								<span style="width:80%;display:inline-block;"><a href="<?php echo $_smarty_tpl->getVariable('path_img')->value;?>
<?php echo $_smarty_tpl->getVariable('u')->value['icon'];?>
" target="_blank"><img style="border-radius:5px;" src="<?php echo $_smarty_tpl->getVariable('path_img')->value;?>
<?php echo $_smarty_tpl->getVariable('u')->value['icon'];?>
" width="100" /></a></span>
							</div>
							<div class="alert alert-info">
								<span style="width:15%;display:inline-block;vertical-align:top;"><strong>حالة القسم : </strong></span>
								<span style="width:80%;display:inline-block;"><?php if ($_smarty_tpl->getVariable('u')->value['status']==0){?>غير مفعل<?php }else{ ?>مفعل<?php }?></span>
							</div>
							<div class="form-group" id="item_<?php echo $_smarty_tpl->getVariable('u')->value['id'];?>
">
								<a class="hidden-print btn btn-info btn-sm" href="javascript:window.print();">طباعة</a>
								<a class="hidden-print btn btn-warning btn-sm" href="categories.html?do=edit&id=<?php echo $_smarty_tpl->getVariable('u')->value['id'];?>
">تعديل القسم</a>
								<a class="hidden-print btn btn-danger btn-sm delete" href="categories.html?do=del&id=<?php echo $_smarty_tpl->getVariable('u')->value['id'];?>
">حذف هذا القسم</a>
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
						<header class="panel-heading"> إضافة قسم جديد</header>
						<div class="panel-body">
						<form class="form-horizontal" role="form" method="post" action="categories.html?do=add" enctype="multipart/form-data">
							<div class="form-group">
								<div class="col-sm-10">
									<input type="text" class="form-control" name="name_ar" placeholder="إسم القسم هنا" value="<?php echo $_smarty_tpl->getVariable('n')->value['name_ar'];?>
">
								</div>
								<label class="col-sm-2 control-label">إسم القسم العربي</label>
							</div>
							<div class="form-group">
								<div class="col-sm-10">
									<input type="text" class="form-control" dir="ltr" name="name" placeholder="إسم القسم هنا" value="<?php echo $_smarty_tpl->getVariable('n')->value['name'];?>
">
								</div>
								<label class="col-sm-2 control-label">إسم القسم الإنجليزي</label>
							</div>
							<div class="form-group">
								<div class="col-sm-10">
									<textarea class="form-control" rows="3" name="description_ar" placeholder="اكتب وصف القسم العربي هنا"><?php echo br2nl($_smarty_tpl->getVariable('n')->value['description_ar']);?>
</textarea>
								</div>
								<label class="col-sm-2 control-label">وصف القسم العربي</label>
							</div>
							<div class="form-group">
								<div class="col-sm-10">
									<textarea class="form-control" dir="ltr" rows="3" name="description" placeholder="اكتب وصف القسم الإنجليزي هنا"><?php echo br2nl($_smarty_tpl->getVariable('n')->value['description']);?>
</textarea>
								</div>
								<label class="col-sm-2 control-label">وصف القسم الإنجليزي</label>
							</div>
							<div class="form-group">
								<div class="col-sm-10">
									<input type="file" class="form-control" name="icon" value="">
								</div>
								<label class="col-sm-2 control-label">صورة القسم</label>
							</div>
							<div class="form-group">
								<div class="col-sm-10"><button type="submit" class="btn btn-default">إضافة القسم</button></div>
							</div>
						</form>
						</div>
					</section>
					</div>
				</div>
			<?php }?>