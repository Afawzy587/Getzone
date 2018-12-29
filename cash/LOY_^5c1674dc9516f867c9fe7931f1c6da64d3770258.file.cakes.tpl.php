<?php /* Smarty version Smarty-3.0.8, created on 2018-12-24 20:08:27
         compiled from "./assets/themes\internal/cakes.tpl" */ ?>
<?php /*%%SmartyHeaderCode:12106340755c212eabb3a8e7-31663403%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5c1674dc9516f867c9fe7931f1c6da64d3770258' => 
    array (
      0 => './assets/themes\\internal/cakes.tpl',
      1 => 1544542551,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12106340755c212eabb3a8e7-31663403',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
			<?php if ($_smarty_tpl->getVariable('area_name')->value=="list"){?>
				<input type="hidden" value="cakes" id="page">
          		<input type="hidden" value="العنوان" id="lang_name">
          		<input type="hidden" value="هل أنت متأكد أنك تود اعتماد هذا" id="lang_confirm">
          		<input type="hidden" value="هل أنت متأكد أنك تود الغاء هذا" id="lang_cel">
          		<input type="hidden" value="هل أنت متأكد أنك تود اضافة هذا" id="lang_add">
                <input type="hidden" value="هل تريد تأكيد موعد الاستلام" id="lang_tim">
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
								<h5>قائمة <b>حجوزات التورت</b></h5>
							</div>
							<div class="panel-body">
								<?php if ($_smarty_tpl->getVariable('u')->value){?>
								<table class="table table-hover no-m">
									<thead>
										<tr>
											<th>#</th>
											<th>الإسم</th>
											<th>رقم الهاتف</th>
											<th>التوقيت</th>
											<th>تفاصيل التورتة</th>
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
												<td><a href="cakes.html?do=view&id=<?php echo $_smarty_tpl->getVariable('c')->value['id'];?>
"><?php echo $_smarty_tpl->getVariable('c')->value['id'];?>
</a></td>
												<td><a href="cakes.html?do=view&id=<?php echo $_smarty_tpl->getVariable('c')->value['id'];?>
"><?php echo $_smarty_tpl->getVariable('c')->value['name'];?>
</a></td>
												<td dir="rtl"><a href="cakes.html?do=view&id=<?php echo $_smarty_tpl->getVariable('c')->value['id'];?>
"><?php echo $_smarty_tpl->getVariable('c')->value['mobile'];?>
</a></td>
												<td dir="ltr" style="text-align: right"><?php echo date('Y-m-d  H:i',$_smarty_tpl->getVariable('c')->value['time']);?>
</td>
												<td dir="rtl" style="max-width: 330px">
													<span dir="rtl">تورتة <?php echo parseCakeTypeName($_smarty_tpl->getVariable('c')->value['caketype']);?>
 مقاس </span><b dir="ltr"><?php echo $_smarty_tpl->getVariable('c')->value['size'];?>
</b><br />
													<span>من فرع </span><?php echo parseBranchName($_smarty_tpl->getVariable('c')->value['branch_id']);?>
<br />
													<?php if ($_smarty_tpl->getVariable('c')->value['template_id']){?><span>من المنتج </span><?php echo parseTemplateName($_smarty_tpl->getVariable('c')->value['template_id']);?>
<br /><?php }?>
													<?php if ($_smarty_tpl->getVariable('c')->value['text']){?><span>مكتوب عليها </span><b><?php echo $_smarty_tpl->getVariable('c')->value['text'];?>
</b><br /><?php }?>
													<?php if ($_smarty_tpl->getVariable('c')->value['user_img']){?><span>وملصوق عليها </span><b><a href="<?php echo $_smarty_tpl->getVariable('c')->value['user_img'];?>
" target="_blank">اضغط هنا</a></b><br /><?php }?>
													<?php if ($_smarty_tpl->getVariable('c')->value['temp_img']){?><span>بشكل نهائي تقريبي </span><b><a href="<?php echo $_smarty_tpl->getVariable('c')->value['temp_img'];?>
" target="_blank">اضغط هنا</a></b><br /><?php }?>
													<br>
													<b>العنوان:</b>
													<br><br>
													<?php ob_start();?><?php echo $_smarty_tpl->getVariable('c')->value['mobile'];?>
<?php $_tmp1=ob_get_clean();?><?php ob_start();?><?php echo getFromTable(array('a'=>$_smarty_tpl->getVariable('c')->value['mobile'],'b'=>"address",'c'=>"getAddressInformations",'d'=>"mobile"),$_smarty_tpl);?>
<?php $_tmp2=ob_get_clean();?><?php if ($_tmp1==$_tmp2){?>
													<?php echo gotoaddress(array('a'=>$_smarty_tpl->getVariable('c')->value['id'],'b'=>$_smarty_tpl->getVariable('c')->value['mobile'],'c'=>$_smarty_tpl->getVariable('c')->value['address_id']),$_smarty_tpl);?>

													<?php }?>
													<div class="form-group">
													<form>
													<span id="item_<?php echo $_smarty_tpl->getVariable('c')->value['id'];?>
" >
													<input type="text" class="form-control"  style="display:inline;width:94%;float:lift;height: 28px; " name="newaddress<?php echo $_smarty_tpl->getVariable('c')->value['id'];?>
"  placeholder=" لعنوان جديد هنا" >
													<button class="btn btn-primary btn-xs addaddress"   style="float:right;height:28px;margin: auto" ><i class="fa fa-plus" aria-hidden="true"></i></button>
													</span>
													</form>
													<form>
													<span id="item_<?php echo $_smarty_tpl->getVariable('c')->value['id'];?>
" >
													<br><br>

														 <label>خدمة التوصيل: </label>
															<select class="form-control"  name="delivery<?php echo $_smarty_tpl->getVariable('c')->value['id'];?>
">
																<option value="0" <?php if ($_smarty_tpl->getVariable('c')->value['delivery']==0){?>selected="selected"<?php }?>>استلام من الفرع</option>
																<option value="1"<?php if ($_smarty_tpl->getVariable('c')->value['delivery']==1){?>selected="selected"<?php }?> >خدمة التوصيل</option>
															</select>
													<br>
													<div class="form-group" id='Later' >
														<div >
															 <b>توقيت الاستلام:</b>
															 <br>
															<input class="datetime form-control" autocomplete="off"  style="text-align: right" name="delivery_time<?php echo $_smarty_tpl->getVariable('c')->value['id'];?>
" value="<?php echo date('Y-m-d  H:i',$_smarty_tpl->getVariable('c')->value['delivery_time']);?>
">
														</div>
													</div>
													<button class="btn btn-primary btn-xs addtime"   style="float:right;height:28px;margin: auto" >تأكيد</button>
													</span>
												</form>
												</div>
												</td>
												<td id="item_<?php echo $_smarty_tpl->getVariable('c')->value['id'];?>
">
													<!--<button class="btn btn-primary btn-xs edit" title="تعديل"><i class="fa fa-pencil"></i></button>-->
													<?php if ($_smarty_tpl->getVariable('c')->value['status']==0){?><button class="btn btn-success btn-xs" title="تمت القراءة" onClick="window.location='cakes.html?do=view&id=<?php echo $_smarty_tpl->getVariable('c')->value['id'];?>
';"><i class="fa fa-eye"></i></button> تم <?php }else{ ?>
													<button class="btn btn-danger btn-xs" title="للقراءة" onClick="window.location='cakes.html?do=view&id=<?php echo $_smarty_tpl->getVariable('c')->value['id'];?>
';"><i class="fa fa-eye"></i></button> غير منتهى <?php }?>
												</td>
											</tr>
										<?php }} ?>
									</tbody>
									<tfoot>
										<tr>
											<td colspan="15" align="right"><?php echo $_smarty_tpl->getVariable('pager')->value;?>
</td>
										</tr>
									</tfoot>
								</table>
								<?php }else{ ?><div align="center">عفوا لا توجد حجوزات للتورت قيد التنفيذ</div><?php }?>
							</div>
						</section>
					</div>
				</div>
			<?php }elseif($_smarty_tpl->getVariable('area_name')->value=='view'){?>
          		<input type="hidden" value="cakes" id="page">
          		<input type="hidden" value="الطلب" id="lang_name">
          		<input type="hidden" value="هل أنت متأكد أنك تود إتمام هذا" id="lang_del">
          		<input type="hidden" value="هل أنت متأكد أنك تود الغاء هذا" id="lang_cel">
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
						<header class="panel-heading">بيانات الأوردر ( # <?php echo $_smarty_tpl->getVariable('u')->value['id'];?>
 )</header>
						<div class="panel-body">
						<form class="form-horizontal" role="form" method="post" action="cakes.html?do=update&id=<?php echo $_smarty_tpl->getVariable('u')->value['id'];?>
">
							<div class="alert alert-info">
								<span style="width:15%;display:inline-block;vertical-align:top;"><strong>الإسم : </strong></span>
								<span style="width:80%;display:inline-block;"><?php echo $_smarty_tpl->getVariable('u')->value['name'];?>
</span>
							</div>
							<div class="alert alert-info">
								<span style="width:15%;display:inline-block;vertical-align:top;"><strong>رقم الهاتف : </strong></span>
								<span style="width:80%;display:inline-block;"><?php echo $_smarty_tpl->getVariable('u')->value['mobile'];?>
</span>
							</div>
							<div class="alert alert-info">
								<span style="width:15%;display:inline-block;vertical-align:top;"><strong>وقت الطلب : </strong></span>
								<span style="width:80%;display:inline-block;"><?php echo full_date_format($_smarty_tpl->getVariable('u')->value['time']);?>
</span>
							</div>
							<div class="alert alert-info">
								<span style="width:15%;display:inline-block;vertical-align:top;"><strong>الأوردر : </strong></span>
								<span style="width:80%;display:inline-block;">
									<span dir="rtl">تورتة <?php echo parseCakeTypeName($_smarty_tpl->getVariable('u')->value['caketype']);?>
 مقاس </span>
									<b dir="ltr"><?php echo $_smarty_tpl->getVariable('u')->value['size'];?>
</b><br />
									<span>من فرع </span><?php echo parseBranchName($_smarty_tpl->getVariable('u')->value['branch_id']);?>
<br />
									<?php if ($_smarty_tpl->getVariable('u')->value['template_id']){?><span>من المنتج </span><?php echo parseTemplateName($_smarty_tpl->getVariable('u')->value['template_id']);?>
<br /><?php }?>
									<?php if ($_smarty_tpl->getVariable('u')->value['text']){?><span>مكتوب عليها </span><b><?php echo $_smarty_tpl->getVariable('u')->value['text'];?>
</b><br /><?php }?>
									<?php if ($_smarty_tpl->getVariable('u')->value['user_img']){?><span>وملصوق عليها </span><b><a href="<?php echo $_smarty_tpl->getVariable('u')->value['user_img'];?>
" target="_blank">اضغط هنا</a></b><br /><?php }?>
									<?php if ($_smarty_tpl->getVariable('u')->value['temp_img']){?><span>بشكل نهائي تقريبي </span><b><a href="<?php echo $_smarty_tpl->getVariable('u')->value['temp_img'];?>
" target="_blank">اضغط هنا</a></b><br /><?php }?>
								</span>
							</div>
							<div class="alert alert-info">
								<span style="width:15%;display:inline-block;vertical-align:top;"><strong>العنوان : </strong></span>
								<span style="width:80%;display:inline-block;"><?php echo getFromTable(array('a'=>$_smarty_tpl->getVariable('u')->value['address_id'],'b'=>"address",'c'=>"getAddressInformations",'d'=>"address"),$_smarty_tpl);?>
</span>
							</div>
							<?php if ($_smarty_tpl->getVariable('u')->value['delivery_time']){?>
							<div class="alert alert-info">
								<span style="width:15%;display:inline-block;vertical-align:top;"><strong>موعد استلام الطلب : </strong></span>
								<span style="width:80%;display:inline-block;"><?php echo date('Y-m-d H:i',$_smarty_tpl->getVariable('u')->value['delivery_time']);?>
</span>
							</div>
							<?php }?>
							<div class="alert alert-info">
								<span style="width:15%;display:inline-block;vertical-align:top;"><strong> استلام الطلب : </strong></span>
								<span style="width:80%;display:inline-block;"><?php if ($_smarty_tpl->getVariable('u')->value['delivery']==0){?>استلام من الفرع<?php }else{ ?>توصيل للمنزل<?php }?> </span>
							</div>
							<?php if ($_smarty_tpl->getVariable('u')->value['cancel']==0){?>
							<div class="alert alert-info">
								<span style="width:15%;display:inline-block;vertical-align:top;"><strong>حالة الطلب : </strong></span>
								<span style="width:80%;display:inline-block;"><?php if ($_smarty_tpl->getVariable('u')->value['status']==0){?>تم تنفيذ الطلب بنجاح<?php }else{ ?>غير منتهي<?php }?></span>
							</div>
							<?php }?>
							<?php if ($_smarty_tpl->getVariable('u')->value['cancel']==1){?>
							<div class="alert alert-info">
								<span style="width:15%;display:inline-block;vertical-align:top;"><strong>الغاء الطلب : </strong></span>
								<span style="width:80%;display:inline-block;">تم الغاء الطلب</span>
							<?php }?>
							</div>
							<div class="form-group"  >
							   <span class="mob_<?php echo $_smarty_tpl->getVariable('u')->value['mobile'];?>
" id="item_<?php echo $_smarty_tpl->getVariable('u')->value['id'];?>
">
								<a class="hidden-print btn btn-info btn-sm" href="javascript:window.print();">طباعة</a>
<!--								<?php if ($_smarty_tpl->getVariable('u')->value['status']==1){?><a class="hidden-print btn btn-success btn-sm setItDone" href="">إتمام الطلب</a><?php }?>-->
								<?php if ($_smarty_tpl->getVariable('u')->value['status']==1){?><a class="hidden-print btn btn-primary btn-sm setItmessage"  href=""> إتمام الطلب برسالة</a>
								<?php if ($_smarty_tpl->getVariable('u')->value['cancel']==0){?><a class="hidden-print btn btn-danger btn-sm setitcancel" href="">الغاء الطلب</a><?php }?><?php }?>
								</span>
							</div>
						</form>
						</div>
					</section>
					</div>
				</div>
			<?php }?>
			<script>
			
											$("input.datetime").datetimepicker({
												step:15
											});
				
										</script>