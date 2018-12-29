<?php /* Smarty version Smarty-3.0.8, created on 2018-11-10 15:44:41
         compiled from "./assets/themes/internal/groups.tpl" */ ?>
<?php /*%%SmartyHeaderCode:11687446955be6fce96282c7-24955932%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '85f50fa6116244323249436cb2e7cb8137fa8c7d' => 
    array (
      0 => './assets/themes/internal/groups.tpl',
      1 => 1541864671,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11687446955be6fce96282c7-24955932',
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
"  title="قفل">مفعلة</a>
													<?php }else{ ?><a class="badge bg-danger status_active" id="<?php echo $_smarty_tpl->getVariable('c')->value['id'];?>
" title="قفل">مفعلة</a>
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
								<div class="col-sm-1" >
								    <input id="items_category"  name="items_category" type="checkbox" value="1" <?php if ($_smarty_tpl->getVariable('u')->value['items_category']==1){?>checked="checked" value="1"<?php }?>/>
								    <label for="items_category">   التحكم فى التصنيف   </label>	
								</div>
								<div class="col-sm-1" >
									<input id="items_edit"  name="items_edit" type="checkbox" value="1" <?php if ($_smarty_tpl->getVariable('u')->value['items_edit']==1){?>checked="checked" value="1"<?php }?>/>
								    <label for="items_edit">   التحكم فى التعديل   </label>
								</div>
								<div class="col-sm-2" >
									<input id="items_add"  name="items_add" type="checkbox" value="1" <?php if ($_smarty_tpl->getVariable('u')->value['items_add']==1){?>checked="checked" value="1"<?php }?>/>
								    <label for="items_add">   التحكم فى الاضافة   </label>
								</div>
								<div class="col-sm-2" >
									<input id="items_delete"  name="items_delete" type="checkbox" value="1" <?php if ($_smarty_tpl->getVariable('u')->value['items_delete']==1){?>checked="checked" value="1"<?php }?>/>
								    <label for="items_delete">   التحكم فى الحذف   </label>
								</div>
								<div class="col-sm-2" >
									<input id="items_view"  name="items_view" type="checkbox" value="1" <?php if ($_smarty_tpl->getVariable('u')->value['items_view']==1){?>checked="checked" value="1"<?php }?>/>
								    <label for="items_view">   رؤية المحتوى   </label>
								</div>
								<div class="col-sm-2" >
									<input id="items_list" name="items_list" type="checkbox" value="1" <?php if ($_smarty_tpl->getVariable('u')->value['items_list']==1){?>checked="checked" value="1"<?php }?>/>
									<label for="items_list">   رؤية القائمة   </label>
								</div>
								<label class="col-sm-2 control-label"> المنتجات    </label>
							 </div>
							 <div class="form-group">
								
								<div class="col-sm-2" >
									<input id="notifications_edit"  name="notifications_edit" type="checkbox" value="1" <?php if ($_smarty_tpl->getVariable('u')->value['notifications_edit']==1){?>checked="checked" value="1"<?php }?>/>
								    <label for="notifications_edit">   التحكم فى التعديل   </label>
								</div>
								<div class="col-sm-2" >
									<input id="notifications_add"  name="notifications_add" type="checkbox" value="1" <?php if ($_smarty_tpl->getVariable('u')->value['notifications_add']==1){?>checked="checked" value="1"<?php }?>/>
								    <label for="notifications_add">   التحكم فى الاضافة   </label>
								</div>
								<div class="col-sm-2" >
									<input id="notifications_delete"  name="notifications_delete" type="checkbox" value="1" <?php if ($_smarty_tpl->getVariable('u')->value['notifications_delete']==1){?>checked="checked" value="1"<?php }?>/>
								    <label for="notifications_delete">   التحكم فى الحذف   </label>
								</div>
								<div class="col-sm-2" >
									<input id="notifications_view"  name="notifications_view" type="checkbox" value="1" <?php if ($_smarty_tpl->getVariable('u')->value['notifications_view']==1){?>checked="checked" value="1"<?php }?>/>
								    <label for="notifications_view">   رؤية المحتوى   </label>
								</div>
								<div class="col-sm-2" >
									<input id="notifications_list" name="notifications_list" type="checkbox" value="1" <?php if ($_smarty_tpl->getVariable('u')->value['notifications_list']==1){?>checked="checked" value="1"<?php }?>/>
									<label for="notifications_list">   رؤية القائمة   </label>
								</div>
								<label class="col-sm-2 control-label"> الاشعارات    </label>
							 </div>
							  <div class="form-group">
								<div class="col-sm-2" >
									<input id="categories_edit"  name="categories_edit" type="checkbox" value="1" <?php if ($_smarty_tpl->getVariable('u')->value['categories_edit']==1){?>checked="checked" value="1"<?php }?>/>
								    <label for="categories_edit">   التحكم فى التعديل   </label>
								</div>
								<div class="col-sm-2" >
									<input id="categories_add"  name="categories_add" type="checkbox" value="1" <?php if ($_smarty_tpl->getVariable('u')->value['categories_add']==1){?>checked="checked" value="1"<?php }?>/>
								    <label for="categories_add">   التحكم فى الاضافة   </label>
								</div>
								<div class="col-sm-2" >
									<input id="categories_delete"  name="categories_delete" type="checkbox" value="1" <?php if ($_smarty_tpl->getVariable('u')->value['categories_delete']==1){?>checked="checked" value="1"<?php }?>/>
								    <label for="categories_delete">   التحكم فى الحذف   </label>
								</div>
								<div class="col-sm-2" >
									<input id="categories_view"  name="categories_view" type="checkbox" value="1" <?php if ($_smarty_tpl->getVariable('u')->value['categories_view']==1){?>checked="checked" value="1"<?php }?>/>
								    <label for="categories_view">   رؤية المحتوى   </label>
								</div>
								<div class="col-sm-2" >
									<input id="categories_list" name="categories_list" type="checkbox" value="1" <?php if ($_smarty_tpl->getVariable('u')->value['categories_list']==1){?>checked="checked" value="1"<?php }?>/>
									<label for="categories_list">   رؤية القائمة   </label>
								</div>
								<label class="col-sm-2 control-label"> الاقسام    </label>
							 </div>
							 
							 <div class="form-group">
								
								<div class="col-sm-2" >
									<input id="caketypes_edit"  name="caketypes_edit" type="checkbox" value="1" <?php if ($_smarty_tpl->getVariable('u')->value['caketypes_edit']==1){?>checked="checked" value="1"<?php }?>/>
								    <label for="caketypes_edit">   التحكم فى التعديل   </label>
								</div>
								<div class="col-sm-2" >
									<input id="caketypes_add"  name="caketypes_add" type="checkbox" value="1" <?php if ($_smarty_tpl->getVariable('u')->value['caketypes_add']==1){?>checked="checked" value="1"<?php }?>/>
								    <label for="caketypes_add">   التحكم فى الاضافة   </label>
								</div>
								<div class="col-sm-2" >
									<input id="caketypes_delete"  name="caketypes_delete" type="checkbox" value="1" <?php if ($_smarty_tpl->getVariable('u')->value['caketypes_delete']==1){?>checked="checked" value="1"<?php }?>/>
								    <label for="caketypes_delete">   التحكم فى الحذف   </label>
								</div>
								<div class="col-sm-2" >
									<input id="caketypes_view"  name="caketypes_view" type="checkbox" value="1" <?php if ($_smarty_tpl->getVariable('u')->value['caketypes_view']==1){?>checked="checked" value="1"<?php }?>/>
								    <label for="caketypes_view">   رؤية المحتوى   </label>
								</div>
								<div class="col-sm-2" >
									<input id="caketypes_list" name="caketypes_list" type="checkbox" value="1" <?php if ($_smarty_tpl->getVariable('u')->value['caketypes_list']==1){?>checked="checked" value="1"<?php }?>/>
									<label for="caketypes_list">   رؤية القائمة   </label>
								</div>
								<label class="col-sm-2 control-label"> انواع الكيكك    </label>
							 </div>
							 <div class="form-group">
							
								<div class="col-sm-2" >
									<input id="offers_edit"  name="offers_edit" type="checkbox" value="1" <?php if ($_smarty_tpl->getVariable('u')->value['offers_edit']==1){?>checked="checked" value="1"<?php }?>/>
								    <label for="offers_edit">   التحكم فى التعديل   </label>
								</div>
								<div class="col-sm-2" >
									<input id="offers_add"  name="offers_add" type="checkbox" value="1" <?php if ($_smarty_tpl->getVariable('u')->value['offers_add']==1){?>checked="checked" value="1"<?php }?>/>
								    <label for="offers_add">   التحكم فى الاضافة   </label>
								</div>
								<div class="col-sm-2" >
									<input id="offers_delete"  name="offers_delete" type="checkbox" value="1" <?php if ($_smarty_tpl->getVariable('u')->value['offers_delete']==1){?>checked="checked" value="1"<?php }?>/>
								    <label for="offers_delete">   التحكم فى الحذف   </label>
								</div>
								<div class="col-sm-2" >
									<input id="offers_view"  name="offers_view" type="checkbox" value="1" <?php if ($_smarty_tpl->getVariable('u')->value['offers_view']==1){?>checked="checked" value="1"<?php }?>/>
								    <label for="offers_view">   رؤية المحتوى   </label>
								</div>
								<div class="col-sm-2" >
									<input id="offers_list" name="offers_list" type="checkbox" value="1" <?php if ($_smarty_tpl->getVariable('u')->value['offers_list']==1){?>checked="checked" value="1"<?php }?>/>
									<label for="offers_list">   رؤية القائمة   </label>
								</div>
								<label class="col-sm-2 control-label">   العروض     </label>
							 </div> 
							<div class="form-group">
							
								<div class="col-sm-2" >
									<input id="branches_edit"  name="branches_edit" type="checkbox" value="1" <?php if ($_smarty_tpl->getVariable('u')->value['branches_edit']==1){?>checked="checked" value="1"<?php }?>/>
								    <label for="branches_edit">   التحكم فى التعديل   </label>
								</div>
								<div class="col-sm-2" >
									<input id="branches_add"  name="branches_add" type="checkbox" value="1" <?php if ($_smarty_tpl->getVariable('u')->value['branches_add']==1){?>checked="checked" value="1"<?php }?>/>
								    <label for="branches_add">   التحكم فى الاضافة   </label>
								</div>
								<div class="col-sm-2" >
									<input id="branches_delete"  name="branches_delete" type="checkbox" value="1" <?php if ($_smarty_tpl->getVariable('u')->value['branches_delete']==1){?>checked="checked" value="1"<?php }?>/>
								    <label for="branches_delete">   التحكم فى الحذف   </label>
								</div>
								<div class="col-sm-2" >
									<input id="branches_view"  name="branches_view" type="checkbox" value="1" <?php if ($_smarty_tpl->getVariable('u')->value['branches_view']==1){?>checked="checked" value="1"<?php }?>/>
								    <label for="branches_view">   رؤية المحتوى   </label>
								</div>
								<div class="col-sm-2" >
									<input id="branches_list" name="branches_list" type="checkbox" value="1" <?php if ($_smarty_tpl->getVariable('u')->value['branches_list']==1){?>checked="checked" value="1"<?php }?>/>
									<label for="branches_list">   رؤية القائمة   </label>
								</div>
								<label class="col-sm-2 control-label">   الفروع     </label>
							 </div>

							   <div class="form-group">
								<div class="col-sm-8" >
									<input id="contacts_active"  name="contacts_active" type="checkbox" value="1" <?php if ($_smarty_tpl->getVariable('u')->value['contacts_active']==1){?>checked="checked" value="1"<?php }?>/>
								    <label for="contacts_active">   التحكم فى التفعيل   </label>
								</div>
								<div class="col-sm-2" >
									<input id="contacts_list" name="contacts_list" type="checkbox" value="1" <?php if ($_smarty_tpl->getVariable('u')->value['contacts_list']==1){?>checked="checked" value="1"<?php }?>/>
									<label for="contacts_list">   رؤية القائمة   </label>
								</div>
								<label class="col-sm-2 control-label">   جهات  الاتصال   </label>
							 </div>
							<div class="form-group">
								<div class="col-sm-8" >
									<input id="orders_view"  name="orders_view" type="checkbox" value="1" <?php if ($_smarty_tpl->getVariable('u')->value['orders_view']==1){?>checked="checked" value="1"<?php }?>/>
								    <label for="orders_view">   رؤية الاوردر   </label>
								</div>
								<div class="col-sm-2" >
									<input id="orders_list" name="orders_list" type="checkbox" value="1" <?php if ($_smarty_tpl->getVariable('u')->value['orders_list']==1){?>checked="checked" value="1"<?php }?>/>
									<label for="orders_list">   رؤية القائمة   </label>
								</div>
								<label class="col-sm-2 control-label">     حجوزات الاوردرات    </label>
							 </div>
							 <div class="form-group">
								<div class="col-sm-6" >
								 </div>
								<div class="col-sm-2" >
									<input id="cakes_view"  name="cakes_view" type="checkbox" value="1" <?php if ($_smarty_tpl->getVariable('u')->value['cakes_view']==1){?>checked="checked" value="1"<?php }?>/>
								    <label for="cakes_view">   رؤية الكيك   </label>
								</div>
								<div class="col-sm-2" >
									<input id="cakes_list" name="cakes_list" type="checkbox" value="1" <?php if ($_smarty_tpl->getVariable('u')->value['cakes_list']==1){?>checked="checked" value="1"<?php }?>/>
									<label for="cakes_list">   رؤية القائمة   </label>
								</div>
								<label class="col-sm-2 control-label">     حجوزات الكيك    </label>
							 </div> 
							 
							 <div class="form-group">
							   <div class="col-sm-8" >
									<input id="controller"  name="controller" type="checkbox" value="1" <?php if ($_smarty_tpl->getVariable('u')->value['controller']==1){?>checked="checked" value="1"<?php }?>/>
								    <label for="controller">   التحكم فى الشاشات   </label>
								</div>
								<div class="col-sm-2" >
									<input id="index" name="index" type="checkbox" value="1" <?php if ($_smarty_tpl->getVariable('u')->value['index']==1){?>checked="checked" value="1"<?php }?>/>
									<label for="index">    رؤية الصفحة  </label>
								</div>
								<label class="col-sm-2 control-label">   الصفحة الرئيسية </label>
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
							   <div class="col-sm-8" >
									<input id="messages"  name="messages" type="checkbox" value="1" <?php if ($_smarty_tpl->getVariable('u')->value['messages']==1){?>checked="checked" value="1"<?php }?>/>
								    <label for="messages">    ارسال رسالة   </label>
								</div>
								<div class="col-sm-2" >
									<input id="setting" name="setting" type="checkbox" value="1" <?php if ($_smarty_tpl->getVariable('u')->value['setting']==1){?>checked="checked" value="1"<?php }?>/>
									<label for="setting">    اعدادات الرسائل  </label>
								</div>
								<label class="col-sm-2 control-label">   الرسائل </label>
							 </div>
							 
							 <div class="form-group">
								<div class="col-sm-10" >
									<input id="offers_reg_list" name="offers_reg_list" type="checkbox" value="1" <?php if ($_smarty_tpl->getVariable('u')->value['offers_reg_list']==1){?>checked="checked" value="1"<?php }?>/>
									<label for="offers_reg_list">   رؤية القائمة   </label>
								</div>
								<label class="col-sm-2 control-label">     حجوزات العروض    </label>
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
<!--
							<div class="form-group">
								<div class="col-sm-10">
									<select class="form-control" name="status">
										<option value="0" <?php if ($_smarty_tpl->getVariable('u')->value['status']==0){?>selected="selected"<?php }?>>غير مفعلة</option>
										<option value="1" <?php if ($_smarty_tpl->getVariable('u')->value['status']==1){?>selected="selected"<?php }?>>مفعلة</option>
									</select>
								</div>
								<label class="col-sm-2 control-label">  حالة المجموعة    </label>
							</div>
-->
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
							   <span style="width:10%;display:inline-block;vertical-align:top;"><strong> الاقسام : </strong></span>
							    <span style="width:15%;display:inline-block;"><?php if ($_smarty_tpl->getVariable('u')->value['categories_list']==0){?><i class="fa fa-close" style="font-size:18px;color:red" dir="ltr">   رؤية القائمة   </i> <?php }else{ ?><i class="fa fa-check" style="font-size:18px" dir="ltr" > رؤية القائمة</i><?php }?></span>
							   <span style="width:15%;display:inline-block;"><?php if ($_smarty_tpl->getVariable('u')->value['categories_view']==0){?><i class="fa fa-close" style="font-size:18px;color:red" dir="ltr">   رؤية المحتوى</i><?php }else{ ?><i class="fa fa-check" style="font-size:18px" dir="ltr" > رؤية المحتوى</i><?php }?></span>
							   <span style="width:15%;display:inline-block;"><?php if ($_smarty_tpl->getVariable('u')->value['categories_add']==0){?><i class="fa fa-close" style="font-size:18px;color:red" dir="ltr">   التحكم فى الاضافة</i><?php }else{ ?><i class="fa fa-check" style="font-size:18px" dir="ltr" > التحكم فى الاضافة</i><?php }?></span>
							   <span style="width:15%;display:inline-block;"><?php if ($_smarty_tpl->getVariable('u')->value['categories_delete']==0){?><i class="fa fa-close" style="font-size:18px;color:red" dir="ltr">   التحكم فى الحذف</i> <?php }else{ ?><i class="fa fa-check" style="font-size:18px" dir="ltr" > التحكم فى الحذف</i><?php }?></span>
							   <span style="width:15%;display:inline-block;"><?php if ($_smarty_tpl->getVariable('u')->value['categories_edit']==0){?><i class="fa fa-close" style="font-size:18px;color:red" dir="ltr">   التحكم فى التعديل</i><?php }else{ ?><i class="fa fa-check" style="font-size:18px" dir="ltr" > التحكم فى التعديل</i><?php }?></span>
							</div>
							<div class="alert alert-info">
								<span style="width:10%;display:inline-block;vertical-align:top;"><strong> الاشعارات : </strong></span>
								<span style="width:15%;display:inline-block;"><?php if ($_smarty_tpl->getVariable('u')->value['notifications_list']==0){?><i class="fa fa-close" style="font-size:18px;color:red" dir="ltr">   رؤية القائمة   </i> <?php }else{ ?><i class="fa fa-check" style="font-size:18px" dir="ltr" > رؤية القائمة</i><?php }?></span>
								<span style="width:15%;display:inline-block;"><?php if ($_smarty_tpl->getVariable('u')->value['notifications_view']==0){?><i class="fa fa-close" style="font-size:18px;color:red" dir="ltr">   رؤية المحتوى</i><?php }else{ ?><i class="fa fa-check" style="font-size:18px" dir="ltr" > رؤية المحتوى</i><?php }?></span>
								<span style="width:15%;display:inline-block;"><?php if ($_smarty_tpl->getVariable('u')->value['notifications_add']==0){?><i class="fa fa-close" style="font-size:18px;color:red" dir="ltr">   التحكم فى الاضافة</i><?php }else{ ?><i class="fa fa-check" style="font-size:18px" dir="ltr" > التحكم فى الاضافة</i><?php }?></span>
								<span style="width:15%;display:inline-block;"><?php if ($_smarty_tpl->getVariable('u')->value['notifications_delete']==0){?><i class="fa fa-close" style="font-size:18px;color:red" dir="ltr">   التحكم فى الحذف</i> <?php }else{ ?><i class="fa fa-check" style="font-size:18px" dir="ltr" > التحكم فى الحذف</i><?php }?></span>
								<span style="width:15%;display:inline-block;"><?php if ($_smarty_tpl->getVariable('u')->value['notifications_edit']==0){?><i class="fa fa-close" style="font-size:18px;color:red" dir="ltr">   التحكم فى التعديل</i><?php }else{ ?><i class="fa fa-check" style="font-size:18px" dir="ltr" > التحكم فى التعديل</i><?php }?></span>
							</div>
							<div class="alert alert-info">
								<span style="width:10%;display:inline-block;vertical-align:top;"><strong> المنتجات : </strong></span>
								<span style="width:14%;display:inline-block;"><?php if ($_smarty_tpl->getVariable('u')->value['items_list']==0){?><i class="fa fa-close" style="font-size:18px;color:red" dir="ltr">   رؤية القائمة   </i> <?php }else{ ?><i class="fa fa-check" style="font-size:18px" dir="ltr" > رؤية القائمة</i><?php }?></span>
								<span style="width:14%;display:inline-block;"><?php if ($_smarty_tpl->getVariable('u')->value['items_view']==0){?><i class="fa fa-close" style="font-size:18px;color:red" dir="ltr">   رؤية المحتوى</i><?php }else{ ?><i class="fa fa-check" style="font-size:18px" dir="ltr" > رؤية المحتوى</i><?php }?></span>
								<span style="width:14%;display:inline-block;"><?php if ($_smarty_tpl->getVariable('u')->value['items_add']==0){?><i class="fa fa-close" style="font-size:18px;color:red" dir="ltr">   التحكم فى الاضافة</i><?php }else{ ?><i class="fa fa-check" style="font-size:18px" dir="ltr" > التحكم فى الاضافة</i><?php }?></span>
								<span style="width:14%;display:inline-block;"><?php if ($_smarty_tpl->getVariable('u')->value['items_delete']==0){?><i class="fa fa-close" style="font-size:18px;color:red" dir="ltr">   التحكم فى الحذف</i> <?php }else{ ?><i class="fa fa-check" style="font-size:18px" dir="ltr" > التحكم فى الحذف</i><?php }?></span>
								<span style="width:15%;display:inline-block;"><?php if ($_smarty_tpl->getVariable('u')->value['items_edit']==0){?><i class="fa fa-close" style="font-size:18px;color:red" dir="ltr">   التحكم فى التعديل</i><?php }else{ ?><i class="fa fa-check" style="font-size:18px" dir="ltr" > التحكم فى التعديل</i><?php }?></span>
								<span style="width:15%;display:inline-block;"><?php if ($_smarty_tpl->getVariable('u')->value['items_category']==0){?><i class="fa fa-close" style="font-size:18px;color:red" dir="ltr">    رؤية متجات القسم</i><?php }else{ ?><i class="fa fa-check" style="font-size:18px" dir="ltr" > رؤية منتجات القسم</i><?php }?></span>
							</div>
							<div class="alert alert-info">
								<span style="width:10%;display:inline-block;vertical-align:top;"><strong>  انواع الكيكك : </strong></span>
								<span style="width:15%;display:inline-block;"><?php if ($_smarty_tpl->getVariable('u')->value['caketypes_list']==0){?><i class="fa fa-close" style="font-size:18px;color:red" dir="ltr">   رؤية القائمة   </i> <?php }else{ ?><i class="fa fa-check" style="font-size:18px" dir="ltr" > رؤية القائمة</i><?php }?></span>
								<span style="width:15%;display:inline-block;"><?php if ($_smarty_tpl->getVariable('u')->value['caketypes_view']==0){?><i class="fa fa-close" style="font-size:18px;color:red" dir="ltr">   رؤية المحتوى  </i><?php }else{ ?><i class="fa fa-check" style="font-size:18px" dir="ltr" > رؤية المحتوى</i><?php }?></span>
								<span style="width:15%;display:inline-block;"><?php if ($_smarty_tpl->getVariable('u')->value['caketypes_add']==0){?><i class="fa fa-close" style="font-size:18px;color:red" dir="ltr">   التحكم فى الاضافة</i><?php }else{ ?><i class="fa fa-check" style="font-size:18px" dir="ltr" > التحكم فى الاضافة</i><?php }?></span>
								<span style="width:15%;display:inline-block;"><?php if ($_smarty_tpl->getVariable('u')->value['caketypes_delete']==0){?><i class="fa fa-close" style="font-size:18px;color:red" dir="ltr">   التحكم فى الحذف</i> <?php }else{ ?><i class="fa fa-check" style="font-size:18px" dir="ltr" > التحكم فى الحذف</i><?php }?></span>
								<span style="width:15%;display:inline-block;"><?php if ($_smarty_tpl->getVariable('u')->value['caketypes_edit']==0){?><i class="fa fa-close" style="font-size:18px;color:red" dir="ltr">   التحكم فى التعديل</i><?php }else{ ?><i class="fa fa-check" style="font-size:18px" dir="ltr" > التحكم فى التعديل</i><?php }?></span>
							</div>
							<div class="alert alert-info">
								<span style="width:10%;display:inline-block;vertical-align:top;"><strong>  العروض  : </strong></span>
								<span style="width:15%;display:inline-block;"><?php if ($_smarty_tpl->getVariable('u')->value['offers_list']==0){?><i class="fa fa-close" style="font-size:18px;color:red" dir="ltr">   رؤية القائمة   </i> <?php }else{ ?><i class="fa fa-check" style="font-size:18px" dir="ltr" > رؤية القائمة</i><?php }?></span>
								<span style="width:15%;display:inline-block;"><?php if ($_smarty_tpl->getVariable('u')->value['offers_view']==0){?><i class="fa fa-close" style="font-size:18px;color:red" dir="ltr">   رؤية المحتوى</i><?php }else{ ?><i class="fa fa-check" style="font-size:18px" dir="ltr" > رؤية المحتوى</i><?php }?></span>
								<span style="width:15%;display:inline-block;"><?php if ($_smarty_tpl->getVariable('u')->value['offers_add']==0){?><i class="fa fa-close" style="font-size:18px;color:red" dir="ltr">   التحكم فى الاضافة</i><?php }else{ ?><i class="fa fa-check" style="font-size:18px" dir="ltr" > التحكم فى الاضافة</i><?php }?></span>
								<span style="width:15%;display:inline-block;"><?php if ($_smarty_tpl->getVariable('u')->value['offers_delete']==0){?><i class="fa fa-close" style="font-size:18px;color:red" dir="ltr">   التحكم فى الحذف</i> <?php }else{ ?><i class="fa fa-check" style="font-size:18px" dir="ltr" > التحكم فى الحذف</i><?php }?></span>
								<span style="width:15%;display:inline-block;"><?php if ($_smarty_tpl->getVariable('u')->value['offers_edit']==0){?><i class="fa fa-close" style="font-size:18px;color:red" dir="ltr">   التحكم فى التعديل</i><?php }else{ ?><i class="fa fa-check" style="font-size:18px" dir="ltr" > التحكم فى التعديل</i><?php }?></span>
							</div>
							<div class="alert alert-info">
								<span style="width:10%;display:inline-block;vertical-align:top;"><strong> الفروع  : </strong></span>
								<span style="width:15%;display:inline-block;"><?php if ($_smarty_tpl->getVariable('u')->value['branches_list']==0){?><i class="fa fa-close" style="font-size:18px;color:red" dir="ltr">   رؤية القائمة   </i> <?php }else{ ?><i class="fa fa-check" style="font-size:18px" dir="ltr" > رؤية القائمة</i><?php }?></span>
								<span style="width:15%;display:inline-block;"><?php if ($_smarty_tpl->getVariable('u')->value['branches_view']==0){?><i class="fa fa-close" style="font-size:18px;color:red" dir="ltr">   رؤية المحتوى</i><?php }else{ ?><i class="fa fa-check" style="font-size:18px" dir="ltr" > رؤية المحتوى</i><?php }?></span>
								<span style="width:15%;display:inline-block;"><?php if ($_smarty_tpl->getVariable('u')->value['branches_add']==0){?><i class="fa fa-close" style="font-size:18px;color:red" dir="ltr">   التحكم فى الاضافة</i><?php }else{ ?><i class="fa fa-check" style="font-size:18px" dir="ltr" > التحكم فى الاضافة</i><?php }?></span>
								<span style="width:15%;display:inline-block;"><?php if ($_smarty_tpl->getVariable('u')->value['branches_delete']==0){?><i class="fa fa-close" style="font-size:18px;color:red" dir="ltr">   التحكم فى الحذف</i> <?php }else{ ?><i class="fa fa-check" style="font-size:18px" dir="ltr" > التحكم فى الحذف</i><?php }?></span>
								<span style="width:15%;display:inline-block;"><?php if ($_smarty_tpl->getVariable('u')->value['branches_edit']==0){?><i class="fa fa-close" style="font-size:18px;color:red" dir="ltr">   التحكم فى التعديل</i><?php }else{ ?><i class="fa fa-check" style="font-size:18px" dir="ltr" > التحكم فى التعديل</i><?php }?></span>
							</div>
							<div class="alert alert-info">
								<span style="width:20%;display:inline-block;vertical-align:top;"><strong>  جهات الاتصال  : </strong></span>
								<span style="width:35%;display:inline-block;"><?php if ($_smarty_tpl->getVariable('u')->value['contacts_list']==0){?><i class="fa fa-close" style="font-size:18px;color:red" dir="ltr">   رؤية القائمة   </i> <?php }else{ ?><i class="fa fa-check" style="font-size:18px" dir="ltr" > رؤية القائمة</i><?php }?></span>
								<span style="width:35%;display:inline-block;"><?php if ($_smarty_tpl->getVariable('u')->value['contacts_active']==0){?>لا يمكن التحكم فى التفعيل  <?php }else{ ?><i class="fa fa-check" style="font-size:18px" dir="ltr" > التحكم فى التفعيل</i><?php }?></span>
							</div>
							<div class="alert alert-info">
								<span style="width:20%;display:inline-block;vertical-align:top;"><strong>   حجوزات الاوردرات  : </strong></span>
								<span style="width:35%;display:inline-block;"><?php if ($_smarty_tpl->getVariable('u')->value['orders_list']==0){?><i class="fa fa-close" style="font-size:18px;color:red" dir="ltr">   رؤية القائمة   </i> <?php }else{ ?><i class="fa fa-check" style="font-size:18px" dir="ltr" > رؤية القائمة</i><?php }?></span>
								<span style="width:35%;display:inline-block;"><?php if ($_smarty_tpl->getVariable('u')->value['orders_view']==0){?> <i class="fa fa-close" style="font-size:18px;color:red" dir="ltr">   رؤية المحتوى</i><?php }else{ ?><i class="fa fa-check" style="font-size:18px" dir="ltr" > رؤية المحتوى </i><?php }?></span>
							</div>
							<div class="alert alert-info">
								<span style="width:20%;display:inline-block;vertical-align:top;"><strong>   حجوزات الكيك  : </strong></span>
								<span style="width:35%;display:inline-block;"><?php if ($_smarty_tpl->getVariable('u')->value['cakes_list']==0){?><i class="fa fa-close" style="font-size:18px;color:red" dir="ltr">   رؤية القائمة   </i> <?php }else{ ?><i class="fa fa-check" style="font-size:18px" dir="ltr" > رؤية القائمة</i><?php }?></span>
								<span style="width:35%;display:inline-block;"><?php if ($_smarty_tpl->getVariable('u')->value['cakes_view']==0){?> <i class="fa fa-close" style="font-size:18px;color:red" dir="ltr">   رؤية المحتوى</i><?php }else{ ?><i class="fa fa-check" style="font-size:18px" dir="ltr" > رؤية المحتوى </i>  <?php }?></span>
							</div>
							<div class="alert alert-info">
								<span style="width:25%;display:inline-block;vertical-align:top;"><strong>   رؤية الصفحة الرئيسية  : </strong></span>
								<span style="width:35%;display:inline-block;"><?php if ($_smarty_tpl->getVariable('u')->value['index']==0){?><i class="fa fa-close" style="font-size:18px;color:red" dir="ltr">  رؤية الصفحة   </i><?php }else{ ?><i class="fa fa-check" style="font-size:18px" dir="ltr" > رؤية الصفحة </i><?php }?></span>
								<span style="width:35%;display:inline-block;"><?php if ($_smarty_tpl->getVariable('u')->value['controller']==0){?><i class="fa fa-close" style="font-size:18px;color:red" dir="ltr">التحكم فى الشاشات</i><?php }else{ ?><i class="fa fa-check" style="font-size:18px" dir="ltr" > التحكم فى الشاشات </i><?php }?></span>
							</div>
							<div class="alert alert-info">
								<span style="width:25%;display:inline-block;vertical-align:top;"><strong>   سجلات الدخول  : </strong></span>
								<span style="width:35%;display:inline-block;"><?php if ($_smarty_tpl->getVariable('u')->value['logs']==0){?><i class="fa fa-close" style="font-size:18px;color:red" dir="ltr">  رؤية القائمة   </i><?php }else{ ?><i class="fa fa-check" style="font-size:18px" dir="ltr" > رؤية الصفحة </i><?php }?></span>
								<span style="width:35%;display:inline-block;"><?php if ($_smarty_tpl->getVariable('u')->value['logs_view']==0){?><i class="fa fa-close" style="font-size:18px;color:red" dir="ltr">رؤية المحتوى</i><?php }else{ ?><i class="fa fa-check" style="font-size:18px" dir="ltr" > رؤية المحتوى </i><?php }?></span>
							</div>
							<div class="alert alert-info">
								<span style="width:25%;display:inline-block;vertical-align:top;"><strong>   الرسائل  : </strong></span>
								<span style="width:35%;display:inline-block;"><?php if ($_smarty_tpl->getVariable('u')->value['setting']==0){?><i class="fa fa-close" style="font-size:18px;color:red" dir="ltr"> اعداات الرسائل  </i><?php }else{ ?><i class="fa fa-check" style="font-size:18px" dir="ltr" > اعداات الرسائل  </i><?php }?></span>
								<span style="width:35%;display:inline-block;"><?php if ($_smarty_tpl->getVariable('u')->value['messages']==0){?><i class="fa fa-close" style="font-size:18px;color:red" dir="ltr">ارسال رسالة   </i><?php }else{ ?><i class="fa fa-check" style="font-size:18px" dir="ltr" > ارسال رسالة </i><?php }?></span>
							</div>
							<div class="alert alert-info">
								<span style="width:20%;display:inline-block;vertical-align:top;"><strong>   حجوزات العروض  : </strong></span>
								<span style="width:70%;display:inline-block;"><?php if ($_smarty_tpl->getVariable('u')->value['offers_reg_list']==0){?><i class="fa fa-close" style="font-size:18px;color:red" dir="ltr">   رؤية القائمة   </i> <?php }else{ ?><i class="fa fa-check" style="font-size:18px" dir="ltr" > رؤية القائمة</i><?php }?></span>
							</div>
							<div class="alert alert-info">
								<span style="width:20%;display:inline-block;vertical-align:top;"><strong>   البحث  : </strong></span>
								<span style="width:75%;display:inline-block;"><?php if ($_smarty_tpl->getVariable('u')->value['search']==0){?><i class="fa fa-close" style="font-size:18px;color:red" dir="ltr">   يمكن استخدام البحث   </i><?php }else{ ?><i class="fa fa-check"style="font-size:18px"  dir="ltr">  يمكن استخدام البحث  </i><?php }?></span>
							</div>
							<div class="alert alert-info">
								<span style="width:25%;display:inline-block;vertical-align:top;"><strong>   التعديل على البيانات  : </strong></span>
								<span style="width:70%;display:inline-block;"><?php if ($_smarty_tpl->getVariable('u')->value['settings']==0){?><i class="fa fa-close" style="font-size:18px;color:red" dir="ltr">يمكن التعديل      </i><?php }else{ ?><i class="fa fa-check" style="font-size:18px" dir="ltr"> يمكن التعديل </i><?php }?></span>
							</div>
							

							<div class="form-group" id="item_<?php echo $_smarty_tpl->getVariable('u')->value['id'];?>
">
								<a class="hidden-print btn btn-info btn-sm" href="javascript:window.print();">طباعة</a>
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