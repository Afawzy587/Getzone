<?php /* Smarty version Smarty-3.0.8, created on 2018-11-04 12:05:49
         compiled from "./assets/themes/internal/offers_reg.tpl" */ ?>
<?php /*%%SmartyHeaderCode:5884892125bdee09d8c89d2-62889879%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '62d23c38732e2f080b3efbd71c89685f7d82fc75' => 
    array (
      0 => './assets/themes/internal/offers_reg.tpl',
      1 => 1541082015,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5884892125bdee09d8c89d2-62889879',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
			<?php if ($_smarty_tpl->getVariable('area_name')->value=="list"){?>
				<input type="hidden" value="offers_reg" id="page">
          		<input type="hidden" value="العرض" id="lang_name">
          		<input type="hidden" value="هل أنت متأكد أنك تود اعتماد هذا" id="lang_del">
                <input type="hidden" value="هل أنت متأكد أنك تود الغاء هذا" id="lang_cel">
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
								<h5>قائمة <b>حجوزات العروض</b></h5>
							</div>
							<div class="panel-body">
								<?php if ($_smarty_tpl->getVariable('u')->value){?>
								<table class="table table-hover no-m">
									<thead>
										<tr>
											<th>#</th>
											<th>إسم العرض</th>
											<th>الإسم</th>
											<th>رقم الهاتف</th>
											<th>توقيت الحجز</th>
											<th>الحالة</th>
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
												<td><a href="offers_reg.html?do=view&id=<?php echo $_smarty_tpl->getVariable('c')->value['id'];?>
"><?php echo $_smarty_tpl->getVariable('c')->value['id'];?>
</a></td>
												<td><a href="offers.html?do=view&id=<?php echo $_smarty_tpl->getVariable('c')->value['offer_id'];?>
">offer # <?php echo $_smarty_tpl->getVariable('c')->value['offer_id'];?>
</a><br><?php echo getoffer($_smarty_tpl->getVariable('c')->value['offer_id']);?>
</td>
												<td><?php echo $_smarty_tpl->getVariable('c')->value['name'];?>
</td>
												<td dir="rtl"><?php echo $_smarty_tpl->getVariable('c')->value['mobile'];?>
</td>
												<td dir="ltr" style="text-align: right"><?php echo date('Y-m-d  H:i',$_smarty_tpl->getVariable('c')->value['time']);?>
</td>
												<td id="item_<?php echo $_smarty_tpl->getVariable('c')->value['id'];?>
">
<!--													<button class="btn btn-primary btn-xs edit" title="تعديل"><i class="fa fa-pencil"></i></button>-->
												<button class="btn btn-success btn-xs" title="تمت القراءة" onClick="window.location='offers_reg.html?do=view&id=<?php echo $_smarty_tpl->getVariable('c')->value['id'];?>
';"><i class="fa fa-eye"></i></button>
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
								<?php }else{ ?><div align="center">عفوا لا توجد حجوزات للعروض قيد التنفيذ</div><?php }?>
							</div>
						</section>
					</div>
				</div>
			<?php }elseif($_smarty_tpl->getVariable('area_name')->value=='view'){?>
          		<input type="hidden" value="offers_reg" id="page">
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
						<header class="panel-heading">بيانات الحجز ( # <?php echo $_smarty_tpl->getVariable('u')->value['id'];?>
 )</header>
						<div class="panel-body">
						<form class="form-horizontal" role="form" method="post" action="offers_reg.html?do=send&id=<?php echo $_smarty_tpl->getVariable('u')->value['id'];?>
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
								<span style="width:15%;display:inline-block;vertical-align:top;"><strong>الحجز : </strong></span>
								<span style="width:80%;display:inline-block;">
									<span dir="rtl"><a href="offers.html?do=view&id=<?php echo $_smarty_tpl->getVariable('c')->value['offer_id'];?>
">offer # <?php echo $_smarty_tpl->getVariable('u')->value['offer_id'];?>
</a><br><?php echo getoffer($_smarty_tpl->getVariable('u')->value['offer_id']);?>
 </span>
								</span>
							</div>
<!--
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
-->
							<div class="form-group"  >
							   <span class="mob_<?php echo $_smarty_tpl->getVariable('u')->value['mobile'];?>
" id="item_<?php echo $_smarty_tpl->getVariable('u')->value['id'];?>
">
								<a class="hidden-print btn btn-info btn-sm" href="javascript:window.print();">طباعة</a>
<!--								<?php if ($_smarty_tpl->getVariable('u')->value['status']==1){?><a class="hidden-print btn btn-success btn-sm setItDone" href="">إتمام الطلب</a><?php }?>-->
<!--								<?php if ($_smarty_tpl->getVariable('u')->value['status']==1){?><a class="hidden-print btn btn-primary btn-sm setItmessage"  href=""> إتمام الطلب برسالة</a>-->
<!--								<?php if ($_smarty_tpl->getVariable('u')->value['cancel']==0){?><a class="hidden-print btn btn-danger btn-sm setitcancel" href="">الغاء الطلب</a><?php }?><?php }?>-->
								</span>
							</div>
						</form>
						</div>
					</section>
					</div>
				</div>
				<?php }elseif($_smarty_tpl->getVariable('area_name')->value=='message'){?>
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
						<header class="panel-heading"> ارسال رسالة (#<?php echo $_smarty_tpl->getVariable('u')->value['id'];?>
 )</header>
						<div class="panel-body">
						<form class="form-horizontal" role="form" method="post" action="offers_reg.html?do=send&id=<?php echo $_smarty_tpl->getVariable('u')->value['id'];?>
" enctype="multipart/form-data">
							<div class="form-group">
								<div class="col-sm-10">
									<input type="tel" class="form-control" dir="ltr" name="mobile" placeholder="رقم الهاتف هنا " value="<?php echo $_smarty_tpl->getVariable('u')->value['mobile'];?>
">
								</div>
								<label class="col-sm-2 control-label">رقم الهاتف</label>
							</div>
							<div class="form-group">
								<div class="col-sm-10">
									<textarea class="form-control" rows="5" name="message" placeholder="اكتب الرسالة هنا"></textarea>
								</div>
								<label class="col-sm-2 control-label">الرسالة</label>
							</div>
							<div class="form-group">
								<div class="col-sm-10"><button type="submit" class="btn btn-default">ارسال الرسالة</button></div>
							</div>
						</form>
						</div>
					</section>
					</div>
				</div>
			<?php }?>