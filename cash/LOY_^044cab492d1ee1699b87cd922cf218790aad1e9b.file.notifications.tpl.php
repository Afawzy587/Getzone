<?php /* Smarty version Smarty-3.0.8, created on 2018-11-08 21:42:37
         compiled from "./assets/themes/internal/notifications.tpl" */ ?>
<?php /*%%SmartyHeaderCode:4225348705be4adcd6c51c2-22247488%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '044cab492d1ee1699b87cd922cf218790aad1e9b' => 
    array (
      0 => './assets/themes/internal/notifications.tpl',
      1 => 1541713338,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4225348705be4adcd6c51c2-22247488',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
          	<?php if ($_smarty_tpl->getVariable('area_name')->value=='list'){?>
          		<input type="hidden" value="notifications" id="page">
          		<input type="hidden" value="الإشعار" id="lang_name">
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
								<h5>قائمة <b>الإشعارات</b></h5>
							</div>
							<div class="panel-body">
								<table class="table table-hover no-m">
									<thead>
										<tr>
											<th>#</th>
											<th>المحتوى</th>
											<th>نوع الاشعار</th>
											<th>التاريخ</th>
											<th>نوع الهاتف</th>
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
												<td><a href="notifications.html?do=view&id=<?php echo $_smarty_tpl->getVariable('c')->value['id'];?>
"><?php echo $_smarty_tpl->getVariable('c')->value['id'];?>
</a></td>
												<td>
													<a href="notifications.html?do=view&id=<?php echo $_smarty_tpl->getVariable('c')->value['id'];?>
"><span style="display:block;width: 200px;overflow:auto; white-space: nowrap;"><?php echo $_smarty_tpl->getVariable('c')->value['content'];?>
</span></a><br/>
												</td>
												<td><?php if ($_smarty_tpl->getVariable('c')->value['Type_id']==1){?>قائمة
													<?php }elseif($_smarty_tpl->getVariable('c')->value['Type_id']==2){?>عرض
													<?php }elseif($_smarty_tpl->getVariable('c')->value['Type_id']==3){?>قسم
													<?php }elseif($_smarty_tpl->getVariable('c')->value['Type_id']==4){?>فرع
													<?php }?>
												</td>
												<td dir="ltr" style="text-align: right"><?php if ($_smarty_tpl->getVariable('c')->value['active_time']=="now"){?>now<?php }else{ ?> <?php echo date('Y-m-d H:i',$_smarty_tpl->getVariable('c')->value['active_time']);?>
<?php }?></td>
												<td><?php if ($_smarty_tpl->getVariable('c')->value['phone_kind']==3){?>الجميع
												    <?php }elseif($_smarty_tpl->getVariable('c')->value['phone_kind']==1){?>ايفون
												    <?php }else{ ?>اندرويد
												    <?php }?>
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
											<td colspan="5" align="right"><?php echo $_smarty_tpl->getVariable('pager')->value;?>
</td>
											<td colspan="1" align="left"><a class="btn btn-success btn-sm pull-left" href="notifications.html?do=add">إضافة اشعار جديد</a></td>
										</tr>
									</tfoot>
								</table>
							</div>
						</section>
					</div>
				</div>
          	<?php }elseif($_smarty_tpl->getVariable('area_name')->value=='edit'){?>
                <SCRIPT> 	
					function show(select_item) {
						if (select_item == "2") {
							Offer.style.visibility='visible';
							Offer.style.display='block';
							Category.style.visibility='hidden';
							Category.style.display='none';
							Branch.style.visibility='hidden';
							Branch.style.display='none';
							Form.fileURL.focus();
						} 
						else if (select_item == "3") {
							Category.style.visibility='visible';
							Category.style.display='block';
							Offer.style.visibility='hidden';
							Offer.style.display='none';
							Branch.style.visibility='hidden';
							Branch.style.display='none';
							Form.fileURL.focus();
						} 
						
						
						else if (select_item == "4") {
							Branch.style.visibility='visible';
							Branch.style.display='block';
							Category.style.visibility='hidden';
							Category.style.display='none';
							Offer.style.visibility='hidden';
							Offer.style.display='none';
							Form.fileURL.focus();
						}
						else if (select_item == "1") {
							Branch.style.visibility='hidden';
							Branch.style.display='block';
							Category.style.visibility='hidden';
							Category.style.display='none';
							Offer.style.visibility='hidden';
							Offer.style.display='none';
							Form.fileURL.focus();
						} 
						
					}
				   
				   function show_date(select_date) {
						if (select_date == "1") {
							Later.style.visibility='visible';
							Later.style.display='block';
							Form.fileURL.focus();
						} 
						else{
							Later.style.visibility='hidden';
							Later.style.display='none';
						}}
				</SCRIPT>
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
						<header class="panel-heading"> تعديل الاشعار ( # <?php echo $_smarty_tpl->getVariable('u')->value['id'];?>
 )</header>
						<div class="panel-body">
						<form class="form-horizontal" role="form" method="post" action="notifications.html?do=update&id=<?php echo $_smarty_tpl->getVariable('u')->value['id'];?>
" enctype="multipart/form-data">
							
							<div class="form-group">
								<div class="col-sm-10">
									<select class="form-control" name="massege_kind" onchange="java_script_:show(this.options[this.selectedIndex].value)">
										<option    value="1"<?php if ($_smarty_tpl->getVariable('u')->value['Type_id']==1){?>selected<?php }?>>قائمة</option>
										<option    value="2"<?php if ($_smarty_tpl->getVariable('u')->value['Type_id']==2){?>selected<?php }?> >عروض </option>
										<option    value="3"<?php if ($_smarty_tpl->getVariable('u')->value['Type_id']==3){?>selected<?php }?> >القسم</option>
										<option    value="4"<?php if ($_smarty_tpl->getVariable('u')->value['Type_id']==4){?>selected<?php }?> >فرع</option>
									</select>
								</div>
								<label class="col-sm-2 control-label">نوع الرسالة</label>
							</div>
							<?php if ($_smarty_tpl->getVariable('u')->value['Type_id']==2){?>
							<div class="form-group" id='Offer' >
							<?php }else{ ?><div class="form-group" id='Offer' style="display: none"><?php }?>
								<div class="col-sm-10">
									<select class="form-control" name="offer">
										<option value=""selected>أختار الإشعار</option>
										<?php  $_smarty_tpl->tpl_vars["_o"] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('o')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars["_o"]->key => $_smarty_tpl->tpl_vars["_o"]->value){
?>
											<option value='<?php echo getposition(array('a'=>$_smarty_tpl->getVariable('_o')->value['id'],'b'=>"offers"),$_smarty_tpl);?>
' <?php ob_start();?><?php echo getposition(array('a'=>$_smarty_tpl->getVariable('_o')->value['id'],'b'=>'offers'),$_smarty_tpl);?>
<?php $_tmp1=ob_get_clean();?><?php if ($_smarty_tpl->getVariable('u')->value['Type']==$_tmp1){?>selected<?php }?>><?php echo $_smarty_tpl->getVariable('_o')->value['offer_content'];?>
 - <?php echo $_smarty_tpl->getVariable('_o')->value['offer_content_ar'];?>
</option>
										<?php }} ?>
									</select>
								</div>
								<label class="col-sm-2 control-label">الإشعار</label>
							</div>
							<?php if ($_smarty_tpl->getVariable('u')->value['Type_id']==3){?>
							<div class="form-group" id='Category'  >
							<?php }else{ ?>
							<div class="form-group" id='Category' style="display: none" ><?php }?>
								<div class="col-sm-10">
									<select class="form-control" name="category">
										<option value="">أختار القسم</option>
										<?php  $_smarty_tpl->tpl_vars["_c"] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('c')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars["_c"]->key => $_smarty_tpl->tpl_vars["_c"]->value){
?>
											<option value='<?php echo getposition(array('a'=>$_smarty_tpl->getVariable('_c')->value['id'],'b'=>"categories"),$_smarty_tpl);?>
' <?php ob_start();?><?php echo getposition(array('a'=>$_smarty_tpl->getVariable('_c')->value['id'],'b'=>'categories'),$_smarty_tpl);?>
<?php $_tmp2=ob_get_clean();?><?php if ($_smarty_tpl->getVariable('u')->value['Type']==$_tmp2){?>selected<?php }?>><?php echo $_smarty_tpl->getVariable('_c')->value['name'];?>
 - <?php echo $_smarty_tpl->getVariable('_c')->value['name_ar'];?>
</option>
										<?php }} ?>
									</select>
								</div>
								<label class="col-sm-2 control-label">القسم</label>
							</div>
							<?php if ($_smarty_tpl->getVariable('u')->value['Type_id']==4){?>
							<div class="form-group" id='Branch' >
							<?php }else{ ?>
							<div class="form-group" id='Branch'style="display: none"><?php }?>
								<div class="col-sm-10">
									<select class="form-control" name="branch">
										<option value="">أختار الفرع</option>
										<?php  $_smarty_tpl->tpl_vars["_b"] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('b')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars["_b"]->key => $_smarty_tpl->tpl_vars["_b"]->value){
?>
											<option value='<?php echo getposition(array('a'=>$_smarty_tpl->getVariable('_b')->value['id'],'b'=>"branches"),$_smarty_tpl);?>
' <?php ob_start();?><?php echo getposition(array('a'=>$_smarty_tpl->getVariable('_b')->value['id'],'b'=>'branches'),$_smarty_tpl);?>
<?php $_tmp3=ob_get_clean();?><?php if ($_smarty_tpl->getVariable('u')->value['Type']==$_tmp3){?>selected<?php }?>><?php echo $_smarty_tpl->getVariable('_b')->value['name'];?>
</option>
										<?php }} ?>
									</select>
								</div>
								<label class="col-sm-2 control-label">أختار الفرع</label>
							</div>
							
							<div class="form-group">
								<div class="col-sm-10">
									<select class="form-control" name="Date" onchange="java_script_:show_date(this.options[this.selectedIndex].value)">
										<option    value="0" <?php if ($_smarty_tpl->getVariable('u')->value['active_time']=='now'){?>selected<?php }?>>حالى</option>
										<option    value="1" <?php if ($_smarty_tpl->getVariable('u')->value['active_time']!='now'){?>selected<?php }?>>مؤجل</option>
									</select>
								</div>
								<label class="col-sm-2 control-label">تاريخ الارسال</label>
							</div>
							<?php if ($_smarty_tpl->getVariable('u')->value['active_time']=='now'){?>
							<div class="form-group" id='Later' style="display: none">
							<?php }else{ ?>
							<div class="form-group" id='Later'>
							<?php }?>
								<div class="col-sm-10">
								<input id="datetime" class="form-control" autocomplete="off" style="text-align: right"  name="date" value="<?php echo date('Y-m-d H:i',$_smarty_tpl->getVariable('u')->value['active_time']);?>
">
								</div>
								<label class="col-sm-2 control-label">أختار التاريخ</label>
							</div>
							
							<div class="form-group">
								<div class="col-sm-10">
									<textarea class="form-control" style=" width:500px" maxlength="400" dir="rtl" rows="5" name="content" placeholder="اكتب محتوى الإشعار هنا"><?php echo br2nl($_smarty_tpl->getVariable('u')->value['content']);?>
</textarea>
								</div>
								<label class="col-sm-2 control-label">المحتوى  </label>
							</div>
							
							<div class="form-group">
								<div class="col-sm-10">
									<select class="form-control" name="phone_kind">
										<option    value="3" <?php if ($_smarty_tpl->getVariable('u')->value['phone_kind']==3){?>selected<?php }?>>الجميع</option>
										<option    value="1" <?php if ($_smarty_tpl->getVariable('u')->value['phone_kind']==1){?>selected<?php }?>>أيفون</option>
										<option    value="2" <?php if ($_smarty_tpl->getVariable('u')->value['phone_kind']==2){?>selected<?php }?> >اندرويد</option>
									</select>
								</div>
								<label class="col-sm-2 control-label">  نوع الهاتف</label>
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
          		<input type="hidden" value="notifications" id="page">
          		<input type="hidden" value="الاشعار" id="lang_name">
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
						<header class="panel-heading"> بيانات الإشعار ( # <?php echo $_smarty_tpl->getVariable('u')->value['id'];?>
 )</header>
						<div class="panel-body">
						<form class="form-horizontal" role="form" method="post" action="categories.html?do=update&id=<?php echo $_smarty_tpl->getVariable('u')->value['id'];?>
">
							
							<div class="alert alert-info">
								<span style="width:15%;display:inline-block;vertical-align:top;"><strong> نوع  : </strong></span>
								<span style="width:80%;display:inline-block;">
									<?php if ($_smarty_tpl->getVariable('u')->value['Type_id']==1){?>قائمة
									<?php }elseif($_smarty_tpl->getVariable('u')->value['Type_id']==2){?>عرض
									<?php }elseif($_smarty_tpl->getVariable('u')->value['Type_id']==3){?>قسم
									<?php }elseif($_smarty_tpl->getVariable('u')->value['Type_id']==4){?>فرع
									<?php }?> </span>
							</div>
							<?php if ($_smarty_tpl->getVariable('u')->value['Type']){?>
							<div class="alert alert-info">
								<span style="width:15%;display:inline-block;vertical-align:top;"><strong> نوع الرسالة : </strong></span>
								<span style="width:80%;display:inline-block;">
									<?php if ($_smarty_tpl->getVariable('u')->value['Type_id']==1){?>قائمة
									<?php }elseif($_smarty_tpl->getVariable('u')->value['Type_id']==2){?><?php echo getFromTable(array('a'=>$_smarty_tpl->getVariable('u')->value['Type'],'b'=>"offers",'c'=>"getOffersInformation",'d'=>"offer_content"),$_smarty_tpl);?>
 - <?php echo getFromTable(array('a'=>$_smarty_tpl->getVariable('u')->value['Type'],'b'=>"offers",'c'=>"getOffersInformation",'d'=>"offer_content_ar"),$_smarty_tpl);?>

									<?php }elseif($_smarty_tpl->getVariable('u')->value['Type_id']==3){?><?php echo getFromTable(array('a'=>$_smarty_tpl->getVariable('u')->value['Type'],'b'=>"categories",'c'=>"getCategoryInformation",'d'=>"name_ar"),$_smarty_tpl);?>
 - <?php echo getFromTable(array('a'=>$_smarty_tpl->getVariable('u')->value['Type'],'b'=>"categories",'c'=>"getCategoryInformation",'d'=>"name"),$_smarty_tpl);?>

									<?php }elseif($_smarty_tpl->getVariable('u')->value['Type_id']==4){?><?php echo getFromTable(array('a'=>$_smarty_tpl->getVariable('u')->value['Type'],'b'=>"branches",'c'=>"getServicesInformation",'d'=>"name_ar"),$_smarty_tpl);?>
 - <?php echo getFromTable(array('a'=>$_smarty_tpl->getVariable('u')->value['Type'],'b'=>"branches",'c'=>"getServicesInformation",'d'=>"name"),$_smarty_tpl);?>

									<?php }?> </span>
							</div>
							<?php }?>
							<div class="alert alert-info">
								<span style="width:15%;display:inline-block;vertical-align:top;"><strong> تاريخ الارسال   : </strong></span>
								<span style="width:80%;display:inline-block;text-align: right;" dir="ltr" ><?php echo date('Y-m-d H:i',$_smarty_tpl->getVariable('u')->value['active_time']);?>
</span>
							</div>
							<div class="alert alert-info">
								<span style="width:15%;display:inline-block;vertical-align:top;"><strong> نوع الهاتف   : </strong></span>
								<span style="width:80%;display:inline-block;">
									<?php if ($_smarty_tpl->getVariable('u')->value['phone_kind']==3){?>الجميع
									<?php }elseif($_smarty_tpl->getVariable('u')->value['phone_kind']==1){?>ايفون
									<?php }elseif($_smarty_tpl->getVariable('u')->value['phone_kind']==2){?>اندرويد
									<?php }?></span>
							</div>
							<div class="alert alert-info">
								<span style="width:15%;display:inline-block;vertical-align:top;"><strong> المحتوى   : </strong></span>
								<span style="width:80%;display:inline-block;"><?php echo $_smarty_tpl->getVariable('u')->value['content'];?>
</span>
							</div>
							
							<div class="form-group" id="item_<?php echo $_smarty_tpl->getVariable('u')->value['id'];?>
">
								<a class="hidden-print btn btn-info btn-sm" href="javascript:window.print();">طباعة</a>
								<a class="hidden-print btn btn-warning btn-sm" href="notifications.html?do=edit&id=<?php echo $_smarty_tpl->getVariable('u')->value['id'];?>
">تعديل الاشعار</a>
								<a class="hidden-print btn btn-danger btn-sm delete" href="notifications.html?do=del&id=<?php echo $_smarty_tpl->getVariable('u')->value['id'];?>
">حذف هذا الاشعار</a>
							</div>
						</form>
						</div>
					</section>
					</div>
				</div>
       	<?php }elseif($_smarty_tpl->getVariable('area_name')->value=='add'){?>
               <SCRIPT> 	
					function show(select_item) {
						if (select_item == "2") {
							Offer.style.visibility='visible';
							Offer.style.display='block';
							Category.style.visibility='hidden';
							Category.style.display='none';
							Branch.style.visibility='hidden';
							Branch.style.display='none';
							Form.fileURL.focus();
						} 
						else if (select_item == "3") {
							Category.style.visibility='visible';
							Category.style.display='block';
							Offer.style.visibility='hidden';
							Offer.style.display='none';
							Branch.style.visibility='hidden';
							Branch.style.display='none';
							Form.fileURL.focus();
						} 
						
						
						else if (select_item == "4") {
							Branch.style.visibility='visible';
							Branch.style.display='block';
							Category.style.visibility='hidden';
							Category.style.display='none';
							Offer.style.visibility='hidden';
							Offer.style.display='none';
							Form.fileURL.focus();
						}
						else if (select_item == "1") {
							Branch.style.visibility='hidden';
							Branch.style.display='block';
							Category.style.visibility='hidden';
							Category.style.display='none';
							Offer.style.visibility='hidden';
							Offer.style.display='none';
							Form.fileURL.focus();
						} 
						
					}
				   
				   function show_date(select_date) {
						if (select_date == "1") {
							Later.style.visibility='visible';
							Later.style.display='block';
							Form.fileURL.focus();
						} 
						else{
							Later.style.visibility='hidden';
							Later.style.display='none';
						}}
				</SCRIPT> 
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
						<header class="panel-heading"> اضافة اشعار جديد</header>
						<div class="panel-body">
						<form class="form-horizontal" role="form" method="post" action="notifications.html?do=add" enctype="multipart/form-data">
							
							<div class="form-group">
								<div class="col-sm-10">
									<select class="form-control" name="massege_kind" onchange="java_script_:show(this.options[this.selectedIndex].value)">
										<option    value="1" >قائمة</option>
										<option    value="2" >عروض </option>
										<option    value="3" >القسم</option>
										<option    value="4" >فرع</option>
									</select>
								</div>
								<label class="col-sm-2 control-label">نوع الرسالة</label>
							</div>
							
							<div class="form-group" id='Offer' style="display: none">
								<div class="col-sm-10">
									<select class="form-control" name="offer">
										<option value=""selected>أختار الإشعار</option>
										<?php  $_smarty_tpl->tpl_vars["_o"] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('o')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars["_o"]->key => $_smarty_tpl->tpl_vars["_o"]->value){
?>
											<option value='<?php echo getposition(array('a'=>$_smarty_tpl->getVariable('_o')->value['id'],'b'=>"offers"),$_smarty_tpl);?>
'><?php echo $_smarty_tpl->getVariable('_o')->value['offer_content'];?>
 - <?php echo $_smarty_tpl->getVariable('_o')->value['offer_content_ar'];?>
</option>
										<?php }} ?>
									</select>
								</div>
								<label class="col-sm-2 control-label">الإشعار</label>
							</div>
							
							<div class="form-group" id='Category' style="display: none" >
								<div class="col-sm-10">
									<select class="form-control" name="category">
										<option value="">أختار القسم</option>
										<?php  $_smarty_tpl->tpl_vars["_c"] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('c')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars["_c"]->key => $_smarty_tpl->tpl_vars["_c"]->value){
?>
											<option value='<?php echo getposition(array('a'=>$_smarty_tpl->getVariable('_c')->value['id'],'b'=>"categories"),$_smarty_tpl);?>
'><?php echo $_smarty_tpl->getVariable('_c')->value['name'];?>
 - <?php echo $_smarty_tpl->getVariable('_c')->value['name_ar'];?>
</option>
										<?php }} ?>
									</select>
								</div>
								<label class="col-sm-2 control-label">القسم</label>
							</div>
							
							<div class="form-group" id='Branch' style="display: none">
								<div class="col-sm-10">
									<select class="form-control" name="branch">
										<option value="">أختار الفرع</option>
										<?php  $_smarty_tpl->tpl_vars["_b"] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('b')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars["_b"]->key => $_smarty_tpl->tpl_vars["_b"]->value){
?>
											<option value='<?php echo getposition(array('a'=>$_smarty_tpl->getVariable('_b')->value['id'],'b'=>"branches"),$_smarty_tpl);?>
'><?php echo $_smarty_tpl->getVariable('_b')->value['name'];?>
</option>
										<?php }} ?>
									</select>
								</div>
								<label class="col-sm-2 control-label">أختار الفرع</label>
							</div>
							
							<div class="form-group">
								<div class="col-sm-10">
									<select class="form-control" name="Date" onchange="java_script_:show_date(this.options[this.selectedIndex].value)">
										<option    value="0" selected >حالى</option>
										<option    value="1" >مؤجل</option>
									</select>
								</div>
								<label class="col-sm-2 control-label">تاريخ الارسال</label>
							</div>
							
							<div class="form-group" id='Later' style="display: none">
								<div class="col-sm-10">
									<input id="datetime" autocomplete="off" class="form-control" style="text-align: right" name="date" value="">
								</div>
								<label class="col-sm-2 control-label">أختار التاريخ</label>
							</div>
							
							

							
							<div class="form-group">
								<div class="col-sm-10">
									<textarea class="form-control"style=" width:500px " dir="rtl" rows="5" name="content" placeholder="اكتب محتوى الإشعار هنا"><?php echo br2nl($_smarty_tpl->getVariable('n')->value['content']);?>
</textarea>
								</div>
								<label class="col-sm-2 control-label">المحتوى  </label>
							</div>
							
							<div class="form-group">
								<div class="col-sm-10">
									<select class="form-control" name="phone_kind">
										<option    value="3" >الجميع</option>
										<option    value="1" >أيفون</option>
										<option    value="2" >اندرويد</option>
									</select>
								</div>
								<label class="col-sm-2 control-label">  نوع الهاتف</label>
							</div>
							

							
							<div class="form-group">
								<div class="col-sm-10"><button type="submit" class="btn btn-default">ارسال الاشعار</button></div>
							</div>
						</form>
						</div>
					</section>
					</div>
				</div>

<?php }?>
 
										  <script>
											$("#datetime").datetimepicker({
												step:15
											});
										</script>