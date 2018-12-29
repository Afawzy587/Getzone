<?php /* Smarty version Smarty-3.0.8, created on 2018-11-08 22:17:21
         compiled from "./assets/themes/internal/caketypes.tpl" */ ?>
<?php /*%%SmartyHeaderCode:14375876545be4b5f1f1d391-64721086%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'be21842862ff93293bdcba0b3ae7606b76b45948' => 
    array (
      0 => './assets/themes/internal/caketypes.tpl',
      1 => 1541715439,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14375876545be4b5f1f1d391-64721086',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
          	<?php if ($_smarty_tpl->getVariable('area_name')->value=='list'){?>
          		<input type="hidden" value="caketypes" id="page">
          		<input type="hidden" value="النوع" id="lang_name">
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
								<h5>قائمة <b>انواع الكيك</b></h5>
							</div>
							<div class="panel-body">
								<table class="table table-hover no-m">
									<thead>
										<tr>
											<th>#</th>
											<th>إسم</th>
											<th>لون الكلام</th>
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
												<td><a href="caketypes.html?do=view&id=<?php echo $_smarty_tpl->getVariable('c')->value['id'];?>
"><?php echo $_smarty_tpl->getVariable('c')->value['id'];?>
</a></td>
												<td><a href="caketypes.html?do=view&id=<?php echo $_smarty_tpl->getVariable('c')->value['id'];?>
"><?php echo $_smarty_tpl->getVariable('c')->value['name'];?>
 - <?php echo $_smarty_tpl->getVariable('c')->value['name_ar'];?>
</a></td>
												<td><input type="color"  dir="ltr" name="text_color" value="<?php echo $_smarty_tpl->getVariable('c')->value['text_color'];?>
" width="50%" readonly></td>
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
											<td colspan="1" align="left"><a class="btn btn-success btn-sm pull-left" href="caketypes.html?do=add">إضافة نوع جديد</a></td>
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
						<header class="panel-heading"> تعديل نوع الكيك ( # <?php echo $_smarty_tpl->getVariable('u')->value['id'];?>
 )</header>
						<div class="panel-body">
						<form class="form-horizontal" role="form" method="post" action="caketypes.html?do=update&id=<?php echo $_smarty_tpl->getVariable('u')->value['id'];?>
" enctype="multipart/form-data">
							<div class="form-group">
								<div class="col-sm-10">
									<input type="text" class="form-control" name="name_ar" placeholder="إسم الكيك هنا" value="<?php if ($_smarty_tpl->getVariable('n')->value['name_ar']!=''){?><?php echo $_smarty_tpl->getVariable('n')->value['name_ar'];?>
<?php }else{ ?><?php echo $_smarty_tpl->getVariable('u')->value['name_ar'];?>
<?php }?>">
								</div>
								<label class="col-sm-2 control-label">إسم النوع العربي</label>
							</div>
							<div class="form-group">
								<div class="col-sm-10">
									<input type="text" class="form-control" dir="ltr" name="name" placeholder="إسم الكيك هنا" value="<?php if ($_smarty_tpl->getVariable('n')->value['name']!=''){?><?php echo $_smarty_tpl->getVariable('n')->value['name'];?>
<?php }else{ ?><?php echo $_smarty_tpl->getVariable('u')->value['name'];?>
<?php }?>">
								</div>
								<label class="col-sm-2 control-label">إسم النوع الإنجليزي</label>
							</div>

							<div class="form-group">
								<div class="col-sm-10">
									<input type="color" class="form-control" dir="ltr" name="text_color" value="<?php if ($_smarty_tpl->getVariable('n')->value['text_color']!=''){?><?php echo $_smarty_tpl->getVariable('n')->value['text_color'];?>
<?php }else{ ?><?php echo $_smarty_tpl->getVariable('u')->value['text_color'];?>
<?php }?>">
								</div>
								<label class="col-sm-2 control-label">لون الكلام</label>
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
						<header class="panel-heading"> إضافة كيك جديد</header>
						<div class="panel-body">
						<form class="form-horizontal" role="form" method="post" action="caketypes.html?do=add" enctype="multipart/form-data">
                           <div class="form-group">
								<div class="col-sm-10">
									<input type="text" class="form-control" name="name_ar" placeholder="إسم الكيك هنا" value="<?php if ($_smarty_tpl->getVariable('n')->value['name_ar']!=''){?><?php echo $_smarty_tpl->getVariable('n')->value['name_ar'];?>
<?php }else{ ?><?php echo $_smarty_tpl->getVariable('u')->value['name_ar'];?>
<?php }?>">
								</div>
								<label class="col-sm-2 control-label">إسم النوع العربي</label>
							</div>
							<div class="form-group">
								<div class="col-sm-10">
									<input type="text" class="form-control" dir="ltr" name="name" placeholder="إسم الكيك هنا" value="<?php if ($_smarty_tpl->getVariable('n')->value['name']!=''){?><?php echo $_smarty_tpl->getVariable('n')->value['name'];?>
<?php }else{ ?><?php echo $_smarty_tpl->getVariable('u')->value['name'];?>
<?php }?>">
								</div>
								<label class="col-sm-2 control-label">إسم النوع الإنجليزي</label>
							</div>

							<div class="form-group">
								<div class="col-sm-10">
									<input type="color" class="form-control" dir="ltr" name="text_color" value="<?php if ($_smarty_tpl->getVariable('n')->value['text_color']!=''){?><?php echo $_smarty_tpl->getVariable('n')->value['text_color'];?>
<?php }else{ ?><?php echo $_smarty_tpl->getVariable('u')->value['text_color'];?>
<?php }?>">
								</div>
								<label class="col-sm-2 control-label">لون الكلام</label>
							</div>
							<div class="form-group">
								<div class="col-sm-10"><button type="submit" class="btn btn-default">إضافة كيك جديد</button></div>
							</div>
						</form>
						</div>
					</section>
					</div>
				</div>
				<?php }elseif($_smarty_tpl->getVariable('area_name')->value=='view'){?>
				<input type="hidden" value="caketypes" id="page">
          		<input type="hidden" value="الكيك" id="lang_name">
          		<input type="hidden" value="هل أنت متأكد أنك تود حذف هذا" id="lang_del">
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
						<header class="panel-heading">انواع الكيك( # <?php echo $_smarty_tpl->getVariable('u')->value['id'];?>
 )</header>
						<div class="panel-body">
                          <form class="form-horizontal" role="form" method="post" action="caketypes.html?do=update&id=<?php echo $_smarty_tpl->getVariable('u')->value['id'];?>
">
                           <div class="alert alert-info">
								<span style="width:15%;display:inline-block;vertical-align:top;"><strong> النوع : </strong></span>
								<span style="width:80%;display:inline-block;"><?php echo $_smarty_tpl->getVariable('u')->value['name'];?>
 - <?php echo $_smarty_tpl->getVariable('u')->value['name_ar'];?>
</span>
							</div>
							
							<div class="alert alert-info">
								<span style="width:15%;display:inline-block;vertical-align:top;"><strong> لون الكلام : </strong></span>
								<span style="width:80%;display:inline-block;">
								<input type="color" class="form-control" dir="ltr" name="text_color" value="<?php echo $_smarty_tpl->getVariable('u')->value['text_color'];?>
"readonly>
                                </span>
							</div>
							<div class="form-group" id="item_<?php echo $_smarty_tpl->getVariable('u')->value['id'];?>
">
								<a class="hidden-print btn btn-info btn-sm" style="margin: 0px 15px 0px 0px" href="javascript:window.print();">طباعة</a>
								<a class="hidden-print btn btn-warning btn-sm" href="caketypes.html?do=edit&id=<?php echo $_smarty_tpl->getVariable('u')->value['id'];?>
">تعديل الكيك </a>
								<a class="hidden-print btn btn-danger btn-sm delete">حذف هذا الكيك </a>
							</div>
						</form>
						</div>
					</section>
					</div>
				</div>

			<?php }?>