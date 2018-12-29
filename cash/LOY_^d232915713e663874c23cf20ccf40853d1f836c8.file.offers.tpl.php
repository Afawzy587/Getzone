<?php /* Smarty version Smarty-3.0.8, created on 2018-11-09 21:55:31
         compiled from "./assets/themes/internal/offers.tpl" */ ?>
<?php /*%%SmartyHeaderCode:21166771945be60253818963-44087461%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd232915713e663874c23cf20ccf40853d1f836c8' => 
    array (
      0 => './assets/themes/internal/offers.tpl',
      1 => 1541715287,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '21166771945be60253818963-44087461',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
          	<?php if ($_smarty_tpl->getVariable('area_name')->value=='list'){?>
          		<input type="hidden" value="offers" id="page">
          		<input type="hidden" value="العرض" id="lang_name">
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
								<h5>قائمة <b>العروض</b></h5>
							</div>
							<div class="panel-body">
								<table class="table table-hover no-m">
									<thead>
										<tr>
											<th>#</th>
											<th>العرض</th>
											<th>تاريخ الانتهاء</th>
											<th>الفرع</th>
											<th>حالة العرض</th>
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
													<a href="offers.html?do=view&id=<?php echo $_smarty_tpl->getVariable('c')->value['id'];?>
"><?php echo $_smarty_tpl->getVariable('c')->value['offer_content'];?>
 - <?php echo $_smarty_tpl->getVariable('c')->value['offer_content_ar'];?>
</a> <br />
												</td>
												<td dir="ltr" style="text-align: right"><?php echo date('Y-m-d H:i',$_smarty_tpl->getVariable('c')->value['offer_expire']);?>
</td>
												<td>
													<?php if ($_smarty_tpl->getVariable('c')->value['branch_id']==0){?>متاح فى جميع الافرع
													 <?php }else{ ?>
													<a href="branches.html?do=view&id=<?php echo $_smarty_tpl->getVariable('c')->value['branch_id'];?>
"><?php echo getFromTable(array('a'=>$_smarty_tpl->getVariable('c')->value['branch_id'],'b'=>"branches",'c'=>"getServicesInformation",'d'=>"name_ar"),$_smarty_tpl);?>
</a> <br />
												<?php }?>
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
											<td colspan="1" align="left"><a class="btn btn-success btn-sm pull-left" href="offers.html?do=add">إضافة عرض جديد</a></td>
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
						<header class="panel-heading"> تعديل عرض ( # <?php echo $_smarty_tpl->getVariable('u')->value['id'];?>
 )</header>
						<div class="panel-body">
						<form class="form-horizontal" role="form" method="post" action="offers.php?do=update&id=<?php echo $_smarty_tpl->getVariable('u')->value['id'];?>
" enctype="multipart/form-data">
							<div class="form-group">
								<div class="col-sm-10">
									<select class="form-control" name="branch_id">
										<option value="0" <?php if ($_smarty_tpl->getVariable('u')->value['branch_id']==1){?>selected="selected"<?php }?> >متاح فى جميع الافرع</option>
										<option value="1" <?php if ($_smarty_tpl->getVariable('u')->value['branch_id']==1){?>selected="selected"<?php }?>><?php echo getFromTable(array('a'=>1,'b'=>"branches",'c'=>"getServicesInformation",'d'=>"name_ar"),$_smarty_tpl);?>
</option>
										<option value="2" <?php if ($_smarty_tpl->getVariable('u')->value['branch_id']==2){?>selected="selected"<?php }?>><?php echo getFromTable(array('a'=>2,'b'=>"branches",'c'=>"getServicesInformation",'d'=>"name_ar"),$_smarty_tpl);?>
</option>
										<option value="3" <?php if ($_smarty_tpl->getVariable('u')->value['branch_id']==3){?>selected="selected"<?php }?>><?php echo getFromTable(array('a'=>3,'b'=>"branches",'c'=>"getServicesInformation",'d'=>"name_ar"),$_smarty_tpl);?>
</option>
										<option value="4" <?php if ($_smarty_tpl->getVariable('u')->value['branch_id']==4){?>selected="selected"<?php }?>><?php echo getFromTable(array('a'=>4,'b'=>"branches",'c'=>"getServicesInformation",'d'=>"name_ar"),$_smarty_tpl);?>
</option>
										<option value="5" <?php if ($_smarty_tpl->getVariable('u')->value['branch_id']==5){?>selected="selected"<?php }?>><?php echo getFromTable(array('a'=>5,'b'=>"branches",'c'=>"getServicesInformation",'d'=>"name_ar"),$_smarty_tpl);?>
</option>
										<option value="6" <?php if ($_smarty_tpl->getVariable('u')->value['branch_id']==6){?>selected="selected"<?php }?>><?php echo getFromTable(array('a'=>6,'b'=>"branches",'c'=>"getServicesInformation",'d'=>"name_ar"),$_smarty_tpl);?>
</option>
										<option value="7" <?php if ($_smarty_tpl->getVariable('u')->value['branch_id']==7){?>selected="selected"<?php }?>><?php echo getFromTable(array('a'=>7,'b'=>"branches",'c'=>"getServicesInformation",'d'=>"name_ar"),$_smarty_tpl);?>
</option>
										<option value="8" <?php if ($_smarty_tpl->getVariable('u')->value['branch_id']==8){?>selected="selected"<?php }?>><?php echo getFromTable(array('a'=>8,'b'=>"branches",'c'=>"getServicesInformation",'d'=>"name_ar"),$_smarty_tpl);?>
</option>
									</select>
								</div>
								<label class="col-sm-2 control-label"> الفرع</label>
							</div>
							<div class="form-group">
								<div class="col-sm-10">
									<textarea class="form-control" rows="3" name="offer_content_ar" placeholder="اكتب وصف العرض العربي هنا"><?php echo br2nl($_smarty_tpl->getVariable('u')->value['offer_content_ar']);?>
</textarea>
								</div>
								<label class="col-sm-2 control-label">وصف العرض العربي</label>
							</div>
							<div class="form-group">
								<div class="col-sm-10">
									<textarea class="form-control" dir="rtl" rows="3" name="offer_content" placeholder="اكتب وصف العرض الإنجليزي هنا"><?php echo br2nl($_smarty_tpl->getVariable('u')->value['offer_content']);?>
</textarea>
								</div>
								<label class="col-sm-2 control-label">وصف العرض الإنجليزي</label>
							</div>
							<div class="form-group ">
								<div class="col-sm-10">
									<input  id="datetime" autocomplete="off" class="form-control" dir="ltr" name="_date"  value="<?php echo date('Y-m-d H:i',$_smarty_tpl->getVariable('u')->value['offer_expire']);?>
"><!-- <?php echo _date_format($_smarty_tpl->getVariable('u')->value['offer_expire']);?>
 -->
								</div>
								<label class="col-sm-2 control-label">تاريخ انتهاء العرض </label>
							</div>
							<div class="form-group">
								<div class="col-sm-10">
									<input type="file" class="form-control" name="img" value="">
									<?php if ($_smarty_tpl->getVariable('u')->value['img']){?><p class="help-block"><a target="_blank" href="../<?php echo $_smarty_tpl->getVariable('u')->value['img'];?>
">اضغط هنا لمشاهدة صورة العرض </a></p><?php }?>
								</div>
								<label class="col-sm-2 control-label">صورة العرض</label>
							</div>
							<div class="form-group">
								<div class="col-sm-10">
									<select class="form-control" name="status">
										<option value="0" <?php if ($_smarty_tpl->getVariable('u')->value['status']==0){?>selected="selected"<?php }?>>غير مفعل</option>
										<option value="1" <?php if ($_smarty_tpl->getVariable('u')->value['status']==1){?>selected="selected"<?php }?>>مفعل</option>
									</select>
								</div>
								<label class="col-sm-2 control-label">حالة العرض</label>
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
          		<input type="hidden" value="offers" id="page">
          		<input type="hidden" value="العرض" id="lang_name">
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
						<header class="panel-heading"> بيانات العرض ( # <?php echo $_smarty_tpl->getVariable('u')->value['id'];?>
 )</header>
						<div class="panel-body">
						<form class="form-horizontal" role="form" method="post" action="offers.html?do=update&id=<?php echo $_smarty_tpl->getVariable('u')->value['id'];?>
">
							<div class="alert alert-info">
								<span style="width:15%;display:inline-block;vertical-align:top;"><strong>إسم الفرع : </strong></span>
								<?php if ($_smarty_tpl->getVariable('u')->value['branch_id']==0){?>
								<span style="width:80%;display:inline-block;">متاح فى جميع الافرع</span>
								<?php }else{ ?>
								<span style="width:80%;display:inline-block;"><?php echo getFromTable(array('a'=>$_smarty_tpl->getVariable('u')->value['branch_id'],'b'=>"branches",'c'=>"getServicesInformation",'d'=>"name_ar"),$_smarty_tpl);?>
</span>
								<?php }?>
							</div>
							<div class="alert alert-info">
								<span style="width:15%;display:inline-block;vertical-align:top;"><strong>وصف العرض : </strong></span>
								<span style="width:80%;display:inline-block;"><?php echo $_smarty_tpl->getVariable('u')->value['offer_content'];?>
 - <?php echo $_smarty_tpl->getVariable('u')->value['offer_content_ar'];?>
</span>
							</div>
							<div class="alert alert-info">
								<span style="width:15%;display:inline-block;vertical-align:top;"><strong> تاريخ انتهاء العرض : </strong></span>
								<span style="width:80%;display:inline-block;"><?php echo full_date_format($_smarty_tpl->getVariable('u')->value['offer_expire']);?>
</span>
							</div>
							<div class="alert alert-info">
								<span style="width:15%;display:inline-block;vertical-align:top;"><strong>صورة العرض : </strong></span>
								<span style="width:80%;display:inline-block;"><a href="../<?php echo $_smarty_tpl->getVariable('u')->value['img'];?>
" target="_blank"><img style="border-radius:5px;" src="../<?php echo $_smarty_tpl->getVariable('u')->value['img'];?>
" width="100" /></a></span>
							</div>
							<div class="alert alert-info">
								<span style="width:15%;display:inline-block;vertical-align:top;"><strong>حالة العرض : </strong></span>
								<span style="width:80%;display:inline-block;"><?php if ($_smarty_tpl->getVariable('u')->value['status']==0){?>غير مفعل<?php }else{ ?>مفعل<?php }?></span>
							</div>
							<div class="form-group" id="item_<?php echo $_smarty_tpl->getVariable('u')->value['id'];?>
">
								<a class="hidden-print btn btn-info btn-sm" href="javascript:window.print();">طباعة</a>
								<a class="hidden-print btn btn-warning btn-sm" href="offers.html?do=edit&id=<?php echo $_smarty_tpl->getVariable('u')->value['id'];?>
">تعديل العرض </a>
								<a class="hidden-print btn btn-danger btn-sm delete" href="offers.html?do=del&id=<?php echo $_smarty_tpl->getVariable('u')->value['id'];?>
">حذف هذا العرض</a>
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
						<header class="panel-heading"> إضافة عرض جديد</header>
						<div class="panel-body">
						<form class="form-horizontal" role="form" method="post" action="offers.php?do=add" enctype="multipart/form-data">
							
							<div class="form-group">
								<div class="col-sm-10">
									<select class="form-control" name="branch_id">
										<option value="0" >متاح فى جميع الافرع</option>
										<option value="1" ><?php echo getFromTable(array('a'=>1,'b'=>"branches",'c'=>"getServicesInformation",'d'=>"name_ar"),$_smarty_tpl);?>
</option>
										<option value="2" ><?php echo getFromTable(array('a'=>2,'b'=>"branches",'c'=>"getServicesInformation",'d'=>"name_ar"),$_smarty_tpl);?>
</option>
										<option value="3" ><?php echo getFromTable(array('a'=>3,'b'=>"branches",'c'=>"getServicesInformation",'d'=>"name_ar"),$_smarty_tpl);?>
</option>
										<option value="4" ><?php echo getFromTable(array('a'=>4,'b'=>"branches",'c'=>"getServicesInformation",'d'=>"name_ar"),$_smarty_tpl);?>
</option>
										<option value="5" ><?php echo getFromTable(array('a'=>5,'b'=>"branches",'c'=>"getServicesInformation",'d'=>"name_ar"),$_smarty_tpl);?>
</option>
										<option value="6" ><?php echo getFromTable(array('a'=>6,'b'=>"branches",'c'=>"getServicesInformation",'d'=>"name_ar"),$_smarty_tpl);?>
</option>
										<option value="7" ><?php echo getFromTable(array('a'=>7,'b'=>"branches",'c'=>"getServicesInformation",'d'=>"name_ar"),$_smarty_tpl);?>
</option>
										<option value="8" ><?php echo getFromTable(array('a'=>8,'b'=>"branches",'c'=>"getServicesInformation",'d'=>"name_ar"),$_smarty_tpl);?>
</option>
									</select>
								</div>
								<label class="col-sm-2 control-label"> الفرع</label>
							</div>
							<div class="form-group">
								<div class="col-sm-10">
									<textarea class="form-control" rows="3" name="offer_content_ar" placeholder="اكتب وصف العرض العربي هنا"></textarea>
								</div>
								<label class="col-sm-2 control-label">وصف العرض العربي</label>
							</div>
							<div class="form-group">
								<div class="col-sm-10">
									<textarea class="form-control" dir="ltr" rows="3" name="offer_content" placeholder="اكتب وصف العرض الإنجليزي هنا"></textarea>
								</div>
								<label class="col-sm-2 control-label">وصف العرض الإنجليزي</label>
							</div>
							<div class="form-group">
								<div class="col-sm-10">
									<input id="datetime" autocomplete="off" class="form-control" name="_date">
										
								</div>
								<label class="col-sm-2 control-label">تاريخ انتهاء العرض </label>
							</div>

							<div class="form-group">
								<div class="col-sm-10">
									<input type="file" class="form-control" name="img" value="">
								</div>
								<label class="col-sm-2 control-label">صورة العرض</label>
							</div>
							<div class="form-group">
								<div class="col-sm-10"><button type="submit" class="btn btn-default">إضافة عرض</button></div>
							</div>
						</form>
						</div>
					</section>
					</div>
				</div>
			<?php }?>
			<script>
				$("#datetime").datetimepicker(
				{
												step:15
											});
			</script>