<?php /* Smarty version Smarty-3.0.8, created on 2018-11-08 21:49:29
         compiled from "./assets/themes/internal/contacts.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3920671435be4af69e49919-07228341%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2a1c336e260fc671492ab4fcaf7edbd3d549ec71' => 
    array (
      0 => './assets/themes/internal/contacts.tpl',
      1 => 1541713723,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3920671435be4af69e49919-07228341',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
          	<?php if ($_smarty_tpl->getVariable('area_name')->value=='list'){?>
          		<input type="hidden" value="contacts" id="page">
          		<input type="hidden" value="الجهة" id="lang_name">
          		<input type="hidden" value="هل أنت متأكد أنك تود حذف هذا" id="lang_del">
                <input type="hidden" value="هل أنت متأكد أنك تود قراءة هذه" id="lang_status">
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
								<h5>قائمة <b>جهات الإتصال</b></h5>
							</div>
							<div class="panel-body">
								<table class="table table-hover no-m">
									<thead>
										<tr style="text-align: center">
											<th>#</th>
											<th>الإسم</th>
											<th>رقم الهاتف</th>
											<th>الرسالة</th>
											<th>التوقيت</th>
											<th>قراءة</th>
										</tr>
									</thead>
									<tbody>
										<?php  $_smarty_tpl->tpl_vars["c"] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('u')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars["c"]->key => $_smarty_tpl->tpl_vars["c"]->value){
?>
											<tr>
												<td><a href="contacts.html?do=view&id=<?php echo $_smarty_tpl->getVariable('c')->value['id'];?>
"><?php echo $_smarty_tpl->getVariable('c')->value['id'];?>
</a></td>
												<td>
													<a href="contacts.html?do=view&id=<?php echo $_smarty_tpl->getVariable('c')->value['id'];?>
">
													<span style="display:block;width: 200px;overflow:auto; white-space: nowrap;"><?php echo $_smarty_tpl->getVariable('c')->value['name'];?>
</span><br/>
													</a>
												</td>
												<td><a href="contacts.html?do=view&id=<?php echo $_smarty_tpl->getVariable('c')->value['id'];?>
"><?php echo $_smarty_tpl->getVariable('c')->value['mobile'];?>
</a></td>
												<td><?php echo $_smarty_tpl->getVariable('c')->value['message'];?>
</td>
												<td dir="ltr" style="text-align: right"><?php echo date('Y-m-d  H:i',$_smarty_tpl->getVariable('c')->value['time']);?>
</td>
												<td id="item_<?php echo $_smarty_tpl->getVariable('c')->value['id'];?>
">
												<span id="active_<?php echo $_smarty_tpl->getVariable('c')->value['id'];?>
" class="sta_<?php echo $_smarty_tpl->getVariable('c')->value['status'];?>
">
													<?php if ($_smarty_tpl->getVariable('c')->value['status']==1){?>
													<a class="badge bg-danger status_active" id="<?php echo $_smarty_tpl->getVariable('c')->value['id'];?>
" title="قراءة">لم تقراء</a>
													<?php }else{ ?><a class="badge bg-success" id="<?php echo $_smarty_tpl->getVariable('c')->value['id'];?>
"  title="">تم القراءة</a>
													<?php }?>
												</span>	
												</td>
											</tr>
										<?php }} ?>
									</tbody>
									<tfoot>
										<tr>
											<td colspan="6" align="right"><?php echo $_smarty_tpl->getVariable('pager')->value;?>
</td>
<!--											<td colspan="1" align="left"><a class="btn btn-success btn-sm pull-left" href="contacts.html?do=add">إضافة جهة جديد</a></td>-->
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
						<form class="form-horizontal" role="form" method="post" action="contacts.html?do=update&id=<?php echo $_smarty_tpl->getVariable('u')->value['id'];?>
" enctype="multipart/form-data">
							<div class="form-group">
								<div class="col-sm-10">
									<input type="text" class="form-control" name="name" placeholder="الإسم هنا" value="<?php if ($_smarty_tpl->getVariable('n')->value['name_ar']!=''){?><?php echo $_smarty_tpl->getVariable('n')->value['name'];?>
<?php }else{ ?><?php echo $_smarty_tpl->getVariable('u')->value['name'];?>
<?php }?>">
								</div>
								<label class="col-sm-2 control-label">الإسم</label>
							</div>
							<div class="form-group">
								<div class="col-sm-10">
									<input type="tel" class="form-control" dir="ltr" name="mobile" placeholder="رقم الهاتف هنا " value="<?php if ($_smarty_tpl->getVariable('n')->value['mobile']!=''){?><?php echo $_smarty_tpl->getVariable('n')->value['mobile'];?>
<?php }else{ ?><?php echo $_smarty_tpl->getVariable('u')->value['mobile'];?>
<?php }?>">
								</div>
								<label class="col-sm-2 control-label">رقم الهاتف</label>
							</div>
							<div class="form-group">
								<div class="col-sm-10">
									<textarea class="form-control" rows="5" name="message" placeholder="اكتب الرسالة هنا"><?php echo $_smarty_tpl->getVariable('u')->value['message'];?>
</textarea>
								</div>
								<label class="col-sm-2 control-label">الرسالة</label>
							</div>
                            <div class="form-group">
								<div class="col-sm-10">
								<input id="datetime" class="form-control" name="time" value="<?php echo date('Y-m-d| H:i',$_smarty_tpl->getVariable('u')->value['time']);?>
">
								</div>
								<label class="col-sm-2 control-label">تاريخ الرسالة</label>
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
						<header class="panel-heading"> جهة الإتصال( # <?php echo $_smarty_tpl->getVariable('u')->value['id'];?>
 )</header>
						<div class="panel-body">
                          <form class="form-horizontal" role="form" method="post" action="contacts.html?do=update&id=<?php echo $_smarty_tpl->getVariable('u')->value['id'];?>
">
                           <div class="alert alert-info">
								<span style="width:15%;display:inline-block;vertical-align:top;"><strong> الاسم  : </strong></span>
								<span style="width:80%;display:inline-block;"><?php echo $_smarty_tpl->getVariable('u')->value['name'];?>
</span>
							</div>
							<div class="alert alert-info">
								<span style="width:15%;display:inline-block;vertical-align:top;"><strong> رقم الهاتف  : </strong></span>
								<span style="width:80%;display:inline-block;"><?php echo $_smarty_tpl->getVariable('u')->value['mobile'];?>
</span>
							</div>
							<div class="alert alert-info">
								<span style="width:15%;display:inline-block;vertical-align:top;"><strong> الرسالة   : </strong></span>
								<span style="width:80%;display:inline-block;"><?php echo $_smarty_tpl->getVariable('u')->value['message'];?>
</span>
							</div>
							<div class="alert alert-info">
								<span style="width:15%;display:inline-block;vertical-align:top;"><strong> توقيت الرسالة   : </strong></span>
								<span style="width:80%;display:inline-block;"><?php echo date('Y-m-d  H:i',$_smarty_tpl->getVariable('u')->value['time']);?>
</span>
							</div>
							
							
							<div class="form-group" id="item_<?php echo $_smarty_tpl->getVariable('u')->value['id'];?>
">
<!--							     <a class="hidden-print btn btn-warning btn-sm" href="contacts.html?do=edit&id=<?php echo $_smarty_tpl->getVariable('u')->value['id'];?>
">تعديل العرض </a>-->
								<a class="hidden-print btn btn-info btn-sm" href="javascript:window.print();">طباعة</a>
<!--								<a class="hidden-print btn btn-danger btn-sm delete" href="contacts.html?do=del&id=<?php echo $_smarty_tpl->getVariable('u')->value['id'];?>
">حذف هذا العرض</a>-->
							</div>
						</form>
						</div>
					</section>
					</div>
				</div>

<?php }?>
   <script>
	$("#datetime").datetimepicker({
					step:1
	});
	</script>