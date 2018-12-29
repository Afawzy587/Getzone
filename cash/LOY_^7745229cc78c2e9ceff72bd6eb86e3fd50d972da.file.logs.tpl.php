<?php /* Smarty version Smarty-3.0.8, created on 2018-11-11 16:04:03
         compiled from "./assets/themes/internal/logs.tpl" */ ?>
<?php /*%%SmartyHeaderCode:9430593275be852f3b7d969-65655300%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7745229cc78c2e9ceff72bd6eb86e3fd50d972da' => 
    array (
      0 => './assets/themes/internal/logs.tpl',
      1 => 1541952231,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9430593275be852f3b7d969-65655300',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
          	<?php if ($_smarty_tpl->getVariable('area_name')->value=='list'){?>
          		<input type="hidden" value="logs" id="page">
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
								<h5>قائمة <b>سجلات الدخول</b></h5>
							</div>
							<div class="panel-body">
								<table class="table table-hover no-m">
									<thead>
										<tr style="text-align: center">
											<th>#</th>
											<th>النوع</th>
											<th>بواسطة</th>
											<th>اسم المستخدم</th>
											<th>التوقيت</th>
										</tr>
									</thead>
									<tbody>
										<?php  $_smarty_tpl->tpl_vars["c"] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('u')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars["c"]->key => $_smarty_tpl->tpl_vars["c"]->value){
?>
											<tr>
												<td><a href="logs.html?do=view&id=<?php echo $_smarty_tpl->getVariable('c')->value['id'];?>
"><?php echo $_smarty_tpl->getVariable('c')->value['id'];?>
</a></td>
												<td>
													<a href="logs.html?do=view&id=<?php echo $_smarty_tpl->getVariable('c')->value['id'];?>
" dir="ltr" ><?php echo getlog_type($_smarty_tpl->getVariable('c')->value['type']);?>
<br>
													<?php echo replacestring($_smarty_tpl->getVariable('c')->value['message']);?>

</a>
												</td>
												<td><a href="logs.html?do=view&id=<?php echo $_smarty_tpl->getVariable('c')->value['id'];?>
"><?php echo $_smarty_tpl->getVariable('c')->value['who'];?>
</a></td>
												<td><a href="logs.html?do=view&id=<?php echo $_smarty_tpl->getVariable('c')->value['id'];?>
"><?php echo getusername($_smarty_tpl->getVariable('c')->value['user_id']);?>
</a></td>
												<td dir="ltr" style="text-align: right"><?php echo date('Y-m-d  H:i',$_smarty_tpl->getVariable('c')->value['time']);?>
</td>
												
											</tr>
										<?php }} ?>
									</tbody>
									<tfoot>
										<tr>
											<td colspan="6" align="right"><?php echo $_smarty_tpl->getVariable('pager')->value;?>
</td>
<!--											<td colspan="1" align="left"><a class="btn btn-success btn-sm pull-left" href="logs.html?do=add">إضافة جهة جديد</a></td>-->
										</tr>
									</tfoot>
								</table>
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
						<header class="panel-heading">  التفاعل( # <?php echo $_smarty_tpl->getVariable('u')->value['id'];?>
 )</header>
						<div class="panel-body">
                          <form class="form-horizontal" role="form" method="post" action="logs.html?do=update&id=<?php echo $_smarty_tpl->getVariable('u')->value['id'];?>
">
                           <div class="alert alert-info">
								<span style="width:15%;display:inline-block;vertical-align:top;"><strong> المستخدم  : </strong></span>
								<span style="width:80%;display:inline-block;"><?php echo getusername($_smarty_tpl->getVariable('u')->value['user_id']);?>
</span>
							</div>
							<div class="alert alert-info">
								<span style="width:15%;display:inline-block;vertical-align:top;"><strong>المجموعة: </strong></span>
								<span style="width:80%;display:inline-block;"><?php echo $_smarty_tpl->getVariable('u')->value['who'];?>
</span>
							</div>
							<div class="alert alert-info">
								<span style="width:15%;display:inline-block;vertical-align:top;"><strong> نوع التفاعل: </strong></span>
								<span style="width:80%;display:inline-block;"><?php echo getlog_type($_smarty_tpl->getVariable('u')->value['type']);?>
</span>
							</div>
							<div class="alert alert-info">
								<span style="width:15%;display:inline-block;vertical-align:top;"><strong> توقيت التفاعل   : </strong></span>
								<span style="width:80%;display:inline-block;"><?php echo date('Y-m-d  H:i',$_smarty_tpl->getVariable('u')->value['time']);?>
</span>
							</div>
							<div class="alert alert-info">
								<span style="width:15%;display:inline-block;vertical-align:top;"><strong> الرسالة  : </strong></span>
								<span style="width:80%;display:inline-block;"><?php echo $_smarty_tpl->getVariable('u')->value['message'];?>
</span>
							</div>
							
							
							<div class="form-group" id="item_<?php echo $_smarty_tpl->getVariable('u')->value['id'];?>
">
<!--							     <a class="hidden-print btn btn-warning btn-sm" href="logs.html?do=edit&id=<?php echo $_smarty_tpl->getVariable('u')->value['id'];?>
">تعديل العرض </a>-->
								<a class="hidden-print btn btn-info btn-sm" href="javascript:window.print();">طباعة</a>
<!--								<a class="hidden-print btn btn-danger btn-sm delete" href="logs.html?do=del&id=<?php echo $_smarty_tpl->getVariable('u')->value['id'];?>
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