<?php /* Smarty version Smarty-3.0.8, created on 2018-12-27 16:28:13
         compiled from "./assets/themes\internal/groups.tpl" */ ?>
<?php /*%%SmartyHeaderCode:5761790115c24ef8da4ca07-18945626%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '85099614079ad7ab44b610fe715958c59792d81c' => 
    array (
      0 => './assets/themes\\internal/groups.tpl',
      1 => 1545924490,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5761790115c24ef8da4ca07-18945626',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
          	<?php if ($_smarty_tpl->getVariable('area_name')->value=='list'){?>
          		<input type="hidden" value="groups" id="page">
          		<input type="hidden" value="المجموعة" id="lang_name">
          		<input type="hidden" value="هل أنت متأكد أنك تود حذف هذه" id="lang_del">
                <input type="hidden" value="هل أنت متأكد من تغير تفعيل هذه" id="lang_status">
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
								<h5> قائمة<b> المجموعات  </b></h5>
							</div>
							<div class="panel-body">
								<table class="table table-hover no-m">
									<thead>
										<tr>
											<th>#</th>
											<th>إسم</th>
											<th>الحالة</th>
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
												<td><a href="groups.html?do=view&id=<?php echo $_smarty_tpl->getVariable('c')->value['id'];?>
"><?php echo $_smarty_tpl->getVariable('c')->value['id'];?>
</a> </td>
												<td><a href="groups.html?do=view&id=<?php echo $_smarty_tpl->getVariable('c')->value['id'];?>
"><?php echo $_smarty_tpl->getVariable('c')->value['name'];?>
</a> </td>
												<td>
													<span id="active_<?php echo $_smarty_tpl->getVariable('c')->value['id'];?>
" class="sta_<?php echo $_smarty_tpl->getVariable('c')->value['status'];?>
">
													<?php if ($_smarty_tpl->getVariable('c')->value['status']==1){?>
													<a class="badge bg-success status_deactive" id="<?php echo $_smarty_tpl->getVariable('c')->value['id'];?>
"  title="مفعلة">مفعلة</a>
													<?php }else{ ?><a class="badge bg-danger status_active" id="<?php echo $_smarty_tpl->getVariable('c')->value['id'];?>
" title="تفعيل"> معطلة </a>
													<?php }?>
												</span>	
												</td>
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
											<td colspan="3" align="right"><?php echo $_smarty_tpl->getVariable('pager')->value;?>
</td>
											<td colspan="1" align="left"><a class="btn btn-success btn-sm pull-left" href="groups.html?do=add">إضافة مجموعة جديدة</a></td>
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
						<header class="panel-heading"> تعديل المجموعة ( # <?php echo $_smarty_tpl->getVariable('u')->value['id'];?>
 )</header>
						<div class="panel-body">
						<form class="form-horizontal" role="form" method="post" action="groups.html?do=update&id=<?php echo $_smarty_tpl->getVariable('u')->value['id'];?>
" enctype="multipart/form-data">
							<div class="form-group">
								<div class="col-sm-10">
									<input type="text" class="form-control" name="name" placeholder="إسم المجموع هنا" value="<?php if ($_smarty_tpl->getVariable('n')->value['name']!=''){?><?php echo $_smarty_tpl->getVariable('n')->value['name'];?>
<?php }else{ ?><?php echo $_smarty_tpl->getVariable('u')->value['name'];?>
<?php }?>">
								</div>
								<label class="col-sm-2 control-label">إسم المجموعة</label>
							</div>
							<div class="form-group">
								<div class="col-sm-10">
									<select class="form-control" name="status">
										<option value="0" <?php if ($_smarty_tpl->getVariable('u')->value['status']==0){?>selected="selected"<?php }?>>غير مفعلة</option>
										<option value="1" <?php if ($_smarty_tpl->getVariable('u')->value['status']==1){?>selected="selected"<?php }?>>مفعلة</option>
									</select>
								</div>
								<label class="col-sm-2 control-label">  حالة المجموعة    </label>
							</div>
							<div class="form-group">
								<div class="col-sm-1" >
									<input id="groups_active"  name="groups_active" type="checkbox" value="1" <?php if ($_smarty_tpl->getVariable('u')->value['groups_active']==1){?>checked="checked" value="1"<?php }?>/>
								    <label for="groups_active">   التحكم فى التفعيل   </label>
								</div>
								<div class="col-sm-1" >
									<input id="groups_edit"  name="groups_edit" type="checkbox" value="1" <?php if ($_smarty_tpl->getVariable('u')->value['groups_edit']==1){?>checked="checked" value="1"<?php }?>/>
								    <label for="groups_edit">   التحكم فى التعديل   </label>
								</div>
								<div class="col-sm-2" >
									<input id="groups_add"  name="groups_add" type="checkbox" value="1" <?php if ($_smarty_tpl->getVariable('u')->value['groups_add']==1){?>checked="checked" value="1"<?php }?>/>
								    <label for="groups_add">   التحكم فى الاضافة   </label>
								</div>
								<div class="col-sm-2" >
									<input id="groups_delete"  name="groups_delete" type="checkbox" value="1" <?php if ($_smarty_tpl->getVariable('u')->value['groups_delete']==1){?>checked="checked" value="1"<?php }?>/>
								    <label for="groups_delete">   التحكم فى الحذف   </label>
								</div>
								<div class="col-sm-2" >
									<input id="groups_view"  name="groups_view" type="checkbox" value="1" <?php if ($_smarty_tpl->getVariable('u')->value['groups_view']==1){?>checked="checked" value="1"<?php }?>/>
								    <label for="groups_view">   رؤية المحتوى   </label>
								</div>
								<div class="col-sm-2" >
									<input id="groups_list" name="groups_list" type="checkbox" value="1" <?php if ($_smarty_tpl->getVariable('u')->value['groups_list']==1){?>checked="checked" value="1"<?php }?>/>
									<label for="groups_list">   رؤية القائمة   </label>
								</div>
								<label class="col-sm-2 control-label"> المجموعات    </label>
							 </div>
							
							 
							
						

							   <div class="form-group">
								<div class="col-sm-8" >
									<input id="contacts_view"  name="contacts_view" type="checkbox" value="1" <?php if ($_smarty_tpl->getVariable('u')->value['contacts_view']==1){?>checked="checked" value="1"<?php }?>/>
								    <label for="contacts_active">      رؤية المحتوى   </label>
								</div>
								<div class="col-sm-2" >
									<input id="contacts_list" name="contacts_list" type="checkbox" value="1" <?php if ($_smarty_tpl->getVariable('u')->value['contacts_list']==1){?>checked="checked" value="1"<?php }?>/>
									<label for="contacts_list">   رؤية القائمة   </label>
								</div>
								<label class="col-sm-2 control-label">   جهات  الاتصال   </label>
							 </div>
							
							 

							  <div class="form-group">
							   <div class="col-sm-8" >
									<input id="logs_view"  name="logs_view" type="checkbox" value="1" <?php if ($_smarty_tpl->getVariable('u')->value['logs_view']==1){?>checked="checked" value="1"<?php }?>/>
								    <label for="logs_view">   رؤية السجل   </label>
								</div>
								<div class="col-sm-2" >
									<input id="logs" name="logs" type="checkbox" value="1" <?php if ($_smarty_tpl->getVariable('u')->value['logs']==1){?>checked="checked" value="1"<?php }?>/>
									<label for="logs">    رؤية القائمة  </label>
								</div>
								<label class="col-sm-2 control-label"> سجلات الدخول </label>
							 </div>
							 
							 
							 
							 <div class="form-group">
								<div class="col-sm-10" >
									<input id="search" name="search" type="checkbox" value="1" <?php if ($_smarty_tpl->getVariable('u')->value['search']==1){?>checked="checked" value="1"<?php }?>/>
									<label for="search">    امكانية استخدام البحث   </label>
								</div>
								<label class="col-sm-2 control-label">      البحث    </label>
							 </div>
							 <div class="form-group">
								<div class="col-sm-10" >
									<input id="settings" name="settings" type="checkbox" value="1" <?php if ($_smarty_tpl->getVariable('u')->value['settings']==1){?>checked="checked" value="1"<?php }?>/>
									<label for="settings">    امكانية التعديل    </label>
								</div>
								<label class="col-sm-2 control-label">      التعديل على البيانات الشخصية </label>
							 </div>
							 
							 

							<div class="form-group">
								<div class="col-sm-10"><button type="submit" class="btn btn-default">تحديث البيانات</button></div>
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
						<header class="panel-heading"> إضافة مجموعة جديد</header>
						<div class="panel-body">
						<form class="form-horizontal" role="form" method="post" action="groups.html?do=add" enctype="multipart/form-data">
                          <div class="form-group">
								<div class="col-sm-10">
									<input type="text" class="form-control" name="name" placeholder="إسم المجموع هنا">
								</div>
								<label class="col-sm-2 control-label">إسم المجموعة</label>
							</div>

							<div class="form-group">
								<div class="col-sm-10"><button type="submit" class="btn btn-default">إضافة مجموعة</button></div>
							</div>
						</form>
						</div>
					</section>
					</div>
				</div>
				<?php }elseif($_smarty_tpl->getVariable('area_name')->value=='view'){?>
          		<input type="hidden" value="groups" id="page">
          		<input type="hidden" value="المجموعة" id="lang_name">
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
						<header class="panel-heading">بيانات المجموعة ( # <?php echo $_smarty_tpl->getVariable('u')->value['id'];?>
 )</header>
						<div class="panel-body">
						<form class="form-horizontal" role="form" method="post" action="groups.html?do=update&id=<?php echo $_smarty_tpl->getVariable('u')->value['id'];?>
">
							<div class="alert alert-info">
								<span style="width:10%;display:inline-block;vertical-align:top;"><strong>الإسم : </strong></span>
								<span style="width:80%;display:inline-block;"><?php echo $_smarty_tpl->getVariable('u')->value['name'];?>
</span>
							</div>
							<div class="alert alert-info">
								<span style="width:10%;display:inline-block;vertical-align:top;"><strong>حالة القسم : </strong></span>
								<span style="width:80%;display:inline-block;"><?php if ($_smarty_tpl->getVariable('u')->value['status']==0){?>غير مفعلة<?php }else{ ?>مفعلة<?php }?></span>
							</div>
							<div class="alert alert-info">
								<span style="width:10%;display:inline-block;vertical-align:top;"><strong> المجموعات : </strong></span>
								<span style="width:14%;display:inline-block;"><?php if ($_smarty_tpl->getVariable('u')->value['groups_list']==0){?><i class="fa fa-close" style="font-size:18px;color:red" dir="ltr">   رؤية القائمة   </i> <?php }else{ ?><i class="fa fa-check" style="font-size:18px" dir="ltr" > رؤية القائمة</i><?php }?></span>
								<span style="width:14%;display:inline-block;"><?php if ($_smarty_tpl->getVariable('u')->value['groups_view']==0){?><i class="fa fa-close" style="font-size:18px;color:red" dir="ltr">   رؤية المحتوى</i><?php }else{ ?><i class="fa fa-check" style="font-size:18px" dir="ltr" > رؤية المحتوى</i><?php }?></span>
								<span style="width:14%;display:inline-block;"><?php if ($_smarty_tpl->getVariable('u')->value['groups_add']==0){?><i class="fa fa-close" style="font-size:18px;color:red" dir="ltr">   التحكم فى الاضافة</i><?php }else{ ?><i class="fa fa-check" style="font-size:18px" dir="ltr" > التحكم فى الاضافة</i><?php }?></span>
								<span style="width:14%;display:inline-block;"><?php if ($_smarty_tpl->getVariable('u')->value['groups_edit']==0){?><i class="fa fa-close" style="font-size:18px;color:red" dir="ltr">   التحكم فى الحذف</i><?php }else{ ?><i class="fa fa-check" style="font-size:18px" dir="ltr" > التحكم فى الحذف</i><?php }?></span>
								<span style="width:15%;display:inline-block;"><?php if ($_smarty_tpl->getVariable('u')->value['groups_delete']==0){?><i class="fa fa-close" style="font-size:18px;color:red" dir="ltr">   التحكم فى التعديل</i> <?php }else{ ?><i class="fa fa-check" style="font-size:18px" dir="ltr" > التحكم فى التعديل</i><?php }?></span>
								<span style="width:15%;display:inline-block;"><?php if ($_smarty_tpl->getVariable('u')->value['groups_active']==0){?><i class="fa fa-close" style="font-size:18px;color:red" dir="ltr">   التحكم فى التغعيل</i><?php }else{ ?><i class="fa fa-check" style="font-size:18px" dir="ltr" > التحكم فى التفعيل</i><?php }?></span>
							</div>
							
							
							
							<div class="alert alert-info">
								<span style="width:20%;display:inline-block;vertical-align:top;"><strong>  جهات الاتصال  : </strong></span>
								<span style="width:35%;display:inline-block;"><?php if ($_smarty_tpl->getVariable('u')->value['contacts_list']==0){?><i class="fa fa-close" style="font-size:18px;color:red" dir="ltr">   رؤية القائمة   </i> <?php }else{ ?><i class="fa fa-check" style="font-size:18px" dir="ltr" > رؤية القائمة</i><?php }?></span>
								<span style="width:35%;display:inline-block;"><?php if ($_smarty_tpl->getVariable('u')->value['contacts_view']==0){?><i class="fa fa-close" style="font-size:18px;color:red" dir="ltr">   رؤية المحتوى </i><?php }else{ ?><i class="fa fa-check" style="font-size:18px" dir="ltr" > رؤية المحتوى </i><?php }?></span>
							</div>
							
<!--
							<div class="alert alert-info">
								<span style="width:25%;display:inline-block;vertical-align:top;"><strong>   رؤية الصفحة الرئيسية  : </strong></span>
								<span style="width:35%;display:inline-block;"><?php if ($_smarty_tpl->getVariable('u')->value['index']==0){?><i class="fa fa-close" style="font-size:18px;color:red" dir="ltr">  رؤية الصفحة   </i><?php }else{ ?><i class="fa fa-check" style="font-size:18px" dir="ltr" > رؤية الصفحة </i><?php }?></span>
								<span style="width:35%;display:inline-block;"><?php if ($_smarty_tpl->getVariable('u')->value['controller']==0){?><i class="fa fa-close" style="font-size:18px;color:red" dir="ltr">التحكم فى الشاشات</i><?php }else{ ?><i class="fa fa-check" style="font-size:18px" dir="ltr" > التحكم فى الشاشات </i><?php }?></span>
							</div>
-->
							<div class="alert alert-info">
								<span style="width:25%;display:inline-block;vertical-align:top;"><strong>   سجلات الدخول  : </strong></span>
								<span style="width:35%;display:inline-block;"><?php if ($_smarty_tpl->getVariable('u')->value['logs']==0){?><i class="fa fa-close" style="font-size:18px;color:red" dir="ltr">  رؤية القائمة   </i><?php }else{ ?><i class="fa fa-check" style="font-size:18px" dir="ltr" > رؤية الصفحة </i><?php }?></span>
								<span style="width:35%;display:inline-block;"><?php if ($_smarty_tpl->getVariable('u')->value['logs_view']==0){?><i class="fa fa-close" style="font-size:18px;color:red" dir="ltr">رؤية المحتوى</i><?php }else{ ?><i class="fa fa-check" style="font-size:18px" dir="ltr" > رؤية المحتوى </i><?php }?></span>
							</div>
							
							<div class="alert alert-info">
								<span style="width:20%;display:inline-block;vertical-align:top;"><strong>   البحث  : </strong></span>
								<span style="width:75%;display:inline-block;"><?php if ($_smarty_tpl->getVariable('u')->value['search']==0){?><i class="fa fa-close" style="font-size:18px;color:red" dir="ltr">   يمكن استخدام البحث   </i><?php }else{ ?><i class="fa fa-check"style="font-size:18px"  dir="ltr">  يمكن استخدام البحث  </i><?php }?></span>
							</div>
							<div class="alert alert-info">
								<span style="width:25%;display:inline-block;vertical-align:top;"><strong>   التعديل على البيانات  : </strong></span>
								<span style="width:70%;display:inline-block;"><?php if ($_smarty_tpl->getVariable('u')->value['settings']==0){?><i class="fa fa-close" style="font-size:18px;color:red" dir="ltr">يمكن التعديل       </i><?php }else{ ?><i class="fa fa-check" style="font-size:18px" dir="ltr"> يمكن التعديل </i><?php }?></span>
							</div>
							

							<div class="form-group" id="item_<?php echo $_smarty_tpl->getVariable('u')->value['id'];?>
">
								<a class="hidden-print btn btn-info btn-sm" href="javascript:window.print();" style="margin-right: 20px">طباعة</a>
								<a class="hidden-print btn btn-warning btn-sm" href="groups.html?do=edit&id=<?php echo $_smarty_tpl->getVariable('u')->value['id'];?>
">تعديل المجموعة </a>
								<a class="hidden-print btn btn-danger btn-sm delete" href="groups.html?do=del&id=<?php echo $_smarty_tpl->getVariable('u')->value['id'];?>
">حذف هذه المجموعة</a>
							</div>
						</form>
						</div>
					</section>
					</div>
				</div>
			<?php }?>