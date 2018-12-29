<?php /* Smarty version Smarty-3.0.8, created on 2018-11-10 15:09:30
         compiled from "./assets/themes/internal/items.tpl" */ ?>
<?php /*%%SmartyHeaderCode:20506134715be6f4aacaeea2-45067856%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c22daf77fd3d710b7fa64681f0edc8a9592750d6' => 
    array (
      0 => './assets/themes/internal/items.tpl',
      1 => 1541862567,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20506134715be6f4aacaeea2-45067856',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
          	<?php if ($_smarty_tpl->getVariable('area_name')->value=='list'){?>
          		<input type="hidden" value="items" id="page">
          		<input type="hidden" value="المنتج" id="lang_name">
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
								<h5>قائمة <b>المنتجات</b></h5>
							</div>
							<div class="panel-body">
								<table class="table table-hover no-m">
									<thead>
										<tr>
											<th>#</th>
											<th>إسم المنتج</th>
											<th>سعر المنتج</th>
											<th>قسم المنتج</th>
											<th>حالة المنتج</th>
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
 <?php if ($_smarty_tpl->getVariable('c')->value['caketype_id']!=0){?><span style="color:red;">*</span><?php }?></td>
												<td>
													<a href="items.html?do=view&id=<?php echo $_smarty_tpl->getVariable('c')->value['id'];?>
"><?php echo $_smarty_tpl->getVariable('c')->value['name'];?>
 - <?php echo $_smarty_tpl->getVariable('c')->value['name_ar'];?>
</a> <br />
												</td>
												<td><b><?php echo $_smarty_tpl->getVariable('c')->value['price'];?>
 </b>جنيه مصري</td>
												<td>
													<a href="categories.html?do=view&id=<?php echo $_smarty_tpl->getVariable('c')->value['category'];?>
"><?php echo getFromTable(array('a'=>$_smarty_tpl->getVariable('c')->value['category'],'b'=>"categories",'c'=>"getCategoryInformation",'d'=>"name_ar"),$_smarty_tpl);?>
</a> <br />
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
											<td colspan="5" align="right"><?php echo $_smarty_tpl->getVariable('pager')->value;?>
</td>
											<td colspan="1" align="left"><a class="btn btn-success btn-sm pull-left" href="items.html?do=add">إضافة منتج جديد</a></td>
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
						<header class="panel-heading"> تعديل منتج ( # <?php echo $_smarty_tpl->getVariable('u')->value['id'];?>
 )</header>
						<div class="panel-body">
						<form class="form-horizontal" role="form" method="post" action="items.html?do=update&id=<?php echo $_smarty_tpl->getVariable('u')->value['id'];?>
" enctype="multipart/form-data">
							<div class="form-group">
								<div class="col-sm-10">
									<input type="text" class="form-control" name="name_ar" placeholder="إسم المنتج هنا" value="<?php if ($_smarty_tpl->getVariable('n')->value['name_ar']!=''){?><?php echo $_smarty_tpl->getVariable('n')->value['name_ar'];?>
<?php }else{ ?><?php echo $_smarty_tpl->getVariable('u')->value['name_ar'];?>
<?php }?>">
								</div>
								<label class="col-sm-2 control-label">إسم المنتج العربي</label>
							</div>
							<div class="form-group">
								<div class="col-sm-10">
									<input type="text" class="form-control" dir="ltr" name="name" placeholder="إسم المنتج هنا" value="<?php if ($_smarty_tpl->getVariable('n')->value['name']!=''){?><?php echo $_smarty_tpl->getVariable('n')->value['name'];?>
<?php }else{ ?><?php echo $_smarty_tpl->getVariable('u')->value['name'];?>
<?php }?>">
								</div>
								<label class="col-sm-2 control-label">إسم المنتج الإنجليزي</label>
							</div>
							<div class="form-group">
								<div class="col-sm-10">
									<textarea class="form-control" rows="3" name="des_ar" placeholder="اكتب وصف المنتج العربي هنا"><?php echo $_smarty_tpl->getVariable('u')->value['des_ar'];?>
</textarea>
								</div>
								<label class="col-sm-2 control-label">وصف المنتج العربي</label>
							</div>
							<div class="form-group">
								<div class="col-sm-10">
									<textarea class="form-control" dir="ltr" rows="3" name="des" placeholder="اكتب وصف المنتج الإنجليزي هنا"><?php echo $_smarty_tpl->getVariable('u')->value['des'];?>
</textarea>
								</div>
								<label class="col-sm-2 control-label">وصف المنتج الإنجليزي</label>
							</div>
							<div class="form-group">
								<div class="col-sm-10">
									<input type="text" class="form-control" dir="ltr" name="price" placeholder="سعر المنتج هنا" value="<?php if ($_smarty_tpl->getVariable('n')->value['price']!=''){?><?php echo $_smarty_tpl->getVariable('n')->value['price'];?>
<?php }else{ ?><?php echo $_smarty_tpl->getVariable('u')->value['price'];?>
<?php }?>">
								</div>
								<label class="col-sm-2 control-label">سعر المنتج</label>
							</div>
							<div class="form-group">
								<div class="col-sm-10">
									<select class="form-control" name="category">
										<option value="0">[ اختر القسم ]</option>
										<?php  $_smarty_tpl->tpl_vars["_c"] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('c')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars["_c"]->key => $_smarty_tpl->tpl_vars["_c"]->value){
?>
											<option value="<?php echo $_smarty_tpl->getVariable('_c')->value['id'];?>
" <?php if ($_smarty_tpl->getVariable('_c')->value['id']==$_smarty_tpl->getVariable('u')->value['category']){?>selected="selected"<?php }?>><?php echo $_smarty_tpl->getVariable('_c')->value['name'];?>
 - <?php echo $_smarty_tpl->getVariable('_c')->value['name_ar'];?>
</option>
										<?php }} ?>
									</select>
								</div>
								<label class="col-sm-2 control-label">القسم</label>
							</div>
							<div class="form-group">
								<div class="col-sm-10">
									<select class="form-control" name="cake">
										<option value="0">[ اختر النوع ]</option>
										<?php  $_smarty_tpl->tpl_vars["_d"] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('d')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars["_d"]->key => $_smarty_tpl->tpl_vars["_d"]->value){
?>
											<option value="<?php echo $_smarty_tpl->getVariable('_d')->value['id'];?>
" <?php if ($_smarty_tpl->getVariable('_d')->value['id']==$_smarty_tpl->getVariable('u')->value['caketype_id']){?>selected="selected"<?php }?>><?php echo $_smarty_tpl->getVariable('_d')->value['name'];?>
 - <?php echo $_smarty_tpl->getVariable('_d')->value['name_ar'];?>
</option>
										<?php }} ?>
									</select>
								</div>
								<label class="col-sm-2 control-label">النوع</label>
							</div>
							
							<div class="form-group">
								<div class="col-sm-10">
									<input type="file" class="form-control" name="img" value="" />
									<?php if ($_smarty_tpl->getVariable('u')->value['img']){?><p class="help-block"><a target="_blank" href="../<?php echo $_smarty_tpl->getVariable('u')->value['img'];?>
">اضغط هنا لمشاهدة صورة المنتج </a></p><?php }?>
								</div>
								<label class="col-sm-2 control-label">صورة المنتج</label>
							</div>
							<div class="form-group">
								<div class="col-sm-10">
									<select class="form-control" name="status">
										<option value="0" <?php if ($_smarty_tpl->getVariable('u')->value['status']==0){?>selected="selected"<?php }?>>غير مفعل</option>
										<option value="1" <?php if ($_smarty_tpl->getVariable('u')->value['status']==1){?>selected="selected"<?php }?>>مفعل</option>
									</select>
								</div>
								<label class="col-sm-2 control-label">حالة المنتج</label>
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
          		<input type="hidden" value="items" id="page">
          		<input type="hidden" value="المنتج" id="lang_name">
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
						<header class="panel-heading"> بيانات المنتج ( # <?php echo $_smarty_tpl->getVariable('u')->value['id'];?>
 )</header>
						<div class="panel-body">
						<form class="form-horizontal" role="form" method="post" action="items.html?do=update&id=<?php echo $_smarty_tpl->getVariable('u')->value['id'];?>
">
							<div class="alert alert-info">
								<span style="width:15%;display:inline-block;vertical-align:top;"><strong>إسم المنتج : </strong></span>
								<span style="width:80%;display:inline-block;"><?php echo $_smarty_tpl->getVariable('u')->value['name'];?>
 - <?php echo $_smarty_tpl->getVariable('u')->value['name_ar'];?>
</span>
							</div>
							<div class="alert alert-info">
								<span style="width:15%;display:inline-block;vertical-align:top;"><strong>اسم القسم : </strong></span>
								<span style="width:80%;display:inline-block;"><a href="categories.html?do=view&id=<?php echo $_smarty_tpl->getVariable('u')->value['category'];?>
"><?php echo getFromTable(array('a'=>$_smarty_tpl->getVariable('u')->value['category'],'b'=>"categories",'c'=>"getCategoryInformation",'d'=>"name"),$_smarty_tpl);?>
 - <?php echo getFromTable(array('a'=>$_smarty_tpl->getVariable('u')->value['category'],'b'=>"categories",'c'=>"getCategoryInformation",'d'=>"name_ar"),$_smarty_tpl);?>
</a></span>
							</div>
							<div class="alert alert-info">
								<span style="width:15%;display:inline-block;vertical-align:top;"><strong>وصف المنتج : </strong></span>
								<span style="width:80%;display:inline-block;"><?php echo $_smarty_tpl->getVariable('u')->value['des'];?>
 - <?php echo $_smarty_tpl->getVariable('u')->value['des_ar'];?>
</span>
							</div>
							<?php if ($_smarty_tpl->getVariable('u')->value['caketype_id']){?>
							<div class="alert alert-info">
								<span style="width:15%;display:inline-block;vertical-align:top;"><strong>النوع : </strong></span>
								<span style="width:80%;display:inline-block;"><a href="categories.html?do=view&id=<?php echo $_smarty_tpl->getVariable('u')->value['caketype_id'];?>
"><?php echo getFromTable(array('a'=>$_smarty_tpl->getVariable('u')->value['caketype_id'],'b'=>"caketypes",'c'=>"getCaketypesInformations",'d'=>"name"),$_smarty_tpl);?>
 - <?php echo getFromTable(array('a'=>$_smarty_tpl->getVariable('u')->value['caketype_id'],'b'=>"caketypes",'c'=>"getCaketypesInformations",'d'=>"name_ar"),$_smarty_tpl);?>
</a></span>
							</div>
							<?php }?>
							
							<div class="alert alert-info">
								<span style="width:15%;display:inline-block;vertical-align:top;"><strong>السعر : </strong></span>
								<span style="width:80%;display:inline-block;"><b><?php echo $_smarty_tpl->getVariable('u')->value['price'];?>
</b> جنيه مصري</span>
							</div>
							<div class="alert alert-info">
								<span style="width:15%;display:inline-block;vertical-align:top;"><strong>صورة المنتج : </strong></span>
								<span style="width:80%;display:inline-block;"><a href="../<?php echo $_smarty_tpl->getVariable('u')->value['img'];?>
" target="_blank"><img style="border-radius:5px;" src="../<?php echo $_smarty_tpl->getVariable('u')->value['img'];?>
" width="100" /></a></span>
							</div>
							<div class="alert alert-info">
								<span style="width:15%;display:inline-block;vertical-align:top;"><strong>عدد مرات المشاهدة : </strong></span>
								<span style="width:80%;display:inline-block;"><?php echo $_smarty_tpl->getVariable('u')->value['views'];?>
 مشاهدة</span>
							</div>
							<div class="alert alert-info">
								<span style="width:15%;display:inline-block;vertical-align:top;"><strong>حالة المنتج : </strong></span>
								<span style="width:80%;display:inline-block;"><?php if ($_smarty_tpl->getVariable('u')->value['status']==0){?>غير مفعل<?php }else{ ?>مفعل<?php }?></span>
							</div>
							<div class="form-group" id="item_<?php echo $_smarty_tpl->getVariable('u')->value['id'];?>
">
								<a class="hidden-print btn btn-info btn-sm" href="javascript:window.print();">طباعة</a>
								<a class="hidden-print btn btn-warning btn-sm" href="items.html?do=edit&id=<?php echo $_smarty_tpl->getVariable('u')->value['id'];?>
">تعديل المنتج</a>
								<a class="hidden-print btn btn-danger btn-sm delete" href="items.html?do=del&id=<?php echo $_smarty_tpl->getVariable('u')->value['id'];?>
">حذف هذا المنتج</a>
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
						<header class="panel-heading"> إضافة منتج جديد</header>
						<div class="panel-body">
						<form class="form-horizontal" role="form" method="post" action="items.html?do=add" enctype="multipart/form-data">
							<div class="form-group">
								<div class="col-sm-10">
									<input type="text" class="form-control" name="name_ar" placeholder="إسم المنتج هنا" value="<?php echo $_smarty_tpl->getVariable('u')->value['name_ar'];?>
">
								</div>
								<label class="col-sm-2 control-label">إسم المنتج العربي</label>
							</div>
							<div class="form-group">
								<div class="col-sm-10">
									<input type="text" class="form-control" dir="ltr" name="name" placeholder="إسم المنتج هنا" value="<?php echo $_smarty_tpl->getVariable('u')->value['name'];?>
">
								</div>
								<label class="col-sm-2 control-label">إسم المنتج الإنجليزي</label>
							</div>
							<div class="form-group">
								<div class="col-sm-10">
									<textarea class="form-control" rows="3" name="des_ar" placeholder="اكتب وصف المنتج العربي هنا"><?php echo br2nl($_smarty_tpl->getVariable('n')->value['description_ar']);?>
</textarea>
								</div>
								<label class="col-sm-2 control-label">وصف المنتج العربي</label>
							</div>
							<div class="form-group">
								<div class="col-sm-10">
									<textarea class="form-control" dir="ltr" rows="3" name="des" placeholder="اكتب وصف المنتج الإنجليزي هنا"><?php echo br2nl($_smarty_tpl->getVariable('n')->value['description']);?>
</textarea>
								</div>
								<label class="col-sm-2 control-label">وصف المنتج الإنجليزي</label>
							</div>
							<div class="form-group">
								<div class="col-sm-10">
									<input type="text" class="form-control" dir="ltr" name="price" placeholder="سعر المنتج هنا" value="<?php echo $_smarty_tpl->getVariable('u')->value['price'];?>
">
								</div>
								<label class="col-sm-2 control-label">سعر المنتج</label>
							</div>
							<div class="form-group">
								<div class="col-sm-10">
									<select class="form-control" name="category">
										<option value="0" selected="selected">[ اختر القسم ]</option>
										<?php  $_smarty_tpl->tpl_vars["_c"] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('c')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars["_c"]->key => $_smarty_tpl->tpl_vars["_c"]->value){
?>
											<option value="<?php echo $_smarty_tpl->getVariable('_c')->value['id'];?>
"><?php echo $_smarty_tpl->getVariable('_c')->value['name'];?>
 - <?php echo $_smarty_tpl->getVariable('_c')->value['name_ar'];?>
</option>
										<?php }} ?>
									</select>
								</div>
								<label class="col-sm-2 control-label">القسم</label>
							</div>
							<div class="form-group">
								<div class="col-sm-10">
									<select class="form-control" name="cake">
										<option value="0" selected="selected">[ اختر النوع ]</option>
										<?php  $_smarty_tpl->tpl_vars["_d"] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('d')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars["_d"]->key => $_smarty_tpl->tpl_vars["_d"]->value){
?>
											<option value="<?php echo $_smarty_tpl->getVariable('_d')->value['id'];?>
"><?php echo $_smarty_tpl->getVariable('_d')->value['name'];?>
 - <?php echo $_smarty_tpl->getVariable('_d')->value['name_ar'];?>
</option>
										<?php }} ?>
									</select>
								</div>
								<label class="col-sm-2 control-label">النوع</label>
							</div>							
							<div class="form-group">
								<div class="col-sm-10">
									<input type="file" class="form-control" name="img" value="" />
								</div>
								<label class="col-sm-2 control-label">صورة المنتج</label>
							</div>
							<div class="form-group">
								<div class="col-sm-10"><button type="submit" class="btn btn-default">إضافة المنتج</button></div>
							</div>
						</form>
						</div>
					</section>
					</div>
				</div>
			<?php }?>