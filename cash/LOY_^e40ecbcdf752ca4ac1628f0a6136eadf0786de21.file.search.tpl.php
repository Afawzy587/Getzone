<?php /* Smarty version Smarty-3.0.8, created on 2018-12-19 14:20:00
         compiled from "./assets/themes\internal/search.tpl" */ ?>
<?php /*%%SmartyHeaderCode:16252075465c1a4580663280-12739548%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e40ecbcdf752ca4ac1628f0a6136eadf0786de21' => 
    array (
      0 => './assets/themes\\internal/search.tpl',
      1 => 1545225542,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '16252075465c1a4580663280-12739548',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
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
                                <h5>نتائج البحث</h5>
							</div>
							<div class="panel-body">
								
                                <table class="table table-hover no-m">
									<?php if ($_smarty_tpl->getVariable('points')->value||$_smarty_tpl->getVariable('cards')->value||$_smarty_tpl->getVariable('groups')->value||$_smarty_tpl->getVariable('notifications')->value||$_smarty_tpl->getVariable('contacts')->value||$_smarty_tpl->getVariable('orders')->value||$_smarty_tpl->getVariable('cakes')->value||$_smarty_tpl->getVariable('offers_reg')->value||$_smarty_tpl->getVariable('category')->value||$_smarty_tpl->getVariable('items')->value||$_smarty_tpl->getVariable('caketypes')->value||$_smarty_tpl->getVariable('offers')->value||$_smarty_tpl->getVariable('branches')->value){?>
                                    <thead>
										<tr>
											<th>في</th>
											<th>التفاصيل</th>
										</tr>
									</thead>
                                    <tbody>
<!--
										<?php if ($_smarty_tpl->getVariable('points')->value){?><?php  $_smarty_tpl->tpl_vars["c"] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('points')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars["c"]->key => $_smarty_tpl->tpl_vars["c"]->value){
?>
										<tr>
											<td>[ الفواتير ]</td>
											<td>
											فاتورة رقم <b><a href="invoices.html?do=view&id=<?php echo $_smarty_tpl->getVariable('c')->value['id'];?>
"><?php echo $_smarty_tpl->getVariable('c')->value['id'];?>
</a></b><br />
												للعميل <b><a href="cards.html?do=view&id=<?php echo $_smarty_tpl->getVariable('c')->value['client_id'];?>
"><?php echo getFromTable(array('a'=>$_smarty_tpl->getVariable('c')->value['client_id'],'b'=>'cards','c'=>'getCardInformation','d'=>'name'),$_smarty_tpl);?>
</a></b> <br />
												 بقيمة <b><a href="invoices.html?do=view&id=<?php echo $_smarty_tpl->getVariable('c')->value['id'];?>
"><?php echo $_smarty_tpl->getVariable('c')->value['total'];?>
 <?php echo $_smarty_tpl->getVariable('currancy')->value;?>
</a></b> -
												بنسبة خصم <b><a href="invoices.html?do=view&id=<?php echo $_smarty_tpl->getVariable('c')->value['id'];?>
"><?php echo getFromTable(array('a'=>$_smarty_tpl->getVariable('c')->value['client_id'],'b'=>'cards','c'=>'getCardInformation','d'=>'discount'),$_smarty_tpl);?>
%</a></b> -
												 بمبلغ نهائي <b><a href="invoices.html?do=view&id=<?php echo $_smarty_tpl->getVariable('c')->value['id'];?>
"><?php echo $_smarty_tpl->getVariable('c')->value['final'];?>
 <?php echo $_smarty_tpl->getVariable('currancy')->value;?>
</a></b>
											</td>
										</tr>
										<?php }} ?><?php }?>
										<?php if ($_smarty_tpl->getVariable('cards')->value){?><?php  $_smarty_tpl->tpl_vars["c"] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('cards')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars["c"]->key => $_smarty_tpl->tpl_vars["c"]->value){
?>
										<tr>
											<td>[ العضويات ]</td>
											<td>
												عضوية رقم <b><a href="cards.html?do=view&id=<?php echo $_smarty_tpl->getVariable('c')->value['id'];?>
"><?php echo $_smarty_tpl->getVariable('c')->value['number'];?>
</a></b> <br />
												إسم صاحب العضوية <b><a href="cards.html?do=view&id=<?php echo $_smarty_tpl->getVariable('c')->value['id'];?>
"><?php echo $_smarty_tpl->getVariable('c')->value['name'];?>
</a></b>
											</td>
										</tr>
										<?php }} ?><?php }?>
-->
										<?php if ($_smarty_tpl->getVariable('groups')->value){?><?php  $_smarty_tpl->tpl_vars["c"] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('groups')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars["c"]->key => $_smarty_tpl->tpl_vars["c"]->value){
?>
										<tr>
											<td>[ المجموعات ]</td>
											<td>
												إسم المجموعة <b><a href="groups.html?do=view&id=<?php echo $_smarty_tpl->getVariable('c')->value['id'];?>
"><?php echo $_smarty_tpl->getVariable('c')->value['name'];?>
</a></b>
											</td>
										</tr>
										<?php }} ?><?php }?>
										<?php if ($_smarty_tpl->getVariable('notifications')->value){?><?php  $_smarty_tpl->tpl_vars["c"] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('notifications')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars["c"]->key => $_smarty_tpl->tpl_vars["c"]->value){
?>
										<tr>
											<td>[ الاشعارات ]</td>
											<td>
												المحتوى  <b><a href="notifications.html?do=view&id=<?php echo $_smarty_tpl->getVariable('c')->value['id'];?>
"><?php echo $_smarty_tpl->getVariable('c')->value['content'];?>
</a></b>
											</td>
										</tr>
										<?php }} ?><?php }?>
										<?php if ($_smarty_tpl->getVariable('contacts')->value){?><?php  $_smarty_tpl->tpl_vars["c"] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('contacts')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars["c"]->key => $_smarty_tpl->tpl_vars["c"]->value){
?>
										<tr>
											<td>[جهات الاتصال ]</td>
											<td>
												الاسم  <b><a href="contacts.html?do=view&id=<?php echo $_smarty_tpl->getVariable('c')->value['id'];?>
"><?php echo $_smarty_tpl->getVariable('c')->value['name'];?>
</a></b>
												الهاتف <b><a href="contacts.html?do=view&id=<?php echo $_smarty_tpl->getVariable('c')->value['id'];?>
"><?php echo $_smarty_tpl->getVariable('c')->value['mobile'];?>
</a></b>
												الرسالة <b><a href="contacts.html?do=view&id=<?php echo $_smarty_tpl->getVariable('c')->value['id'];?>
"><?php echo $_smarty_tpl->getVariable('c')->value['message'];?>
</a></b>
											</td>
										</tr>
										<?php }} ?><?php }?>
										<?php if ($_smarty_tpl->getVariable('orders')->value){?><?php  $_smarty_tpl->tpl_vars["c"] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('orders')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars["c"]->key => $_smarty_tpl->tpl_vars["c"]->value){
?>
										<tr>
											<td> [ حجوزات الاوردرات ]</td>
											<td>
												الاسم  <b><a href="orders.html?do=view&id=<?php echo $_smarty_tpl->getVariable('c')->value['id'];?>
"><?php echo $_smarty_tpl->getVariable('c')->value['name'];?>
</a></b>
												الهاتف <b><a href="orders.html?do=view&id=<?php echo $_smarty_tpl->getVariable('c')->value['id'];?>
"><?php echo $_smarty_tpl->getVariable('c')->value['mobile'];?>
</a></b>
												الاوردر <b><a href="orders.html?do=view&id=<?php echo $_smarty_tpl->getVariable('c')->value['id'];?>
"><?php echo parseItems($_smarty_tpl->getVariable('c')->value['items']);?>
</a></b>
											</td>
										</tr>
										<?php }} ?><?php }?>
										<?php if ($_smarty_tpl->getVariable('cakes')->value){?><?php  $_smarty_tpl->tpl_vars["c"] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('cakes')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars["c"]->key => $_smarty_tpl->tpl_vars["c"]->value){
?>
										<tr>
											<td> [حجوزات التورت] </td>
											<td>
												الاسم  <b><a href="cakes.html?do=view&id=<?php echo $_smarty_tpl->getVariable('c')->value['id'];?>
"><?php echo $_smarty_tpl->getVariable('c')->value['name'];?>
</a></b>
												الهاتف <b><a href="cakes.html?do=view&id=<?php echo $_smarty_tpl->getVariable('c')->value['id'];?>
"><?php echo $_smarty_tpl->getVariable('c')->value['mobile'];?>
</a></b>
												الاوردر <b><a href="cakes.html?do=view&id=<?php echo $_smarty_tpl->getVariable('c')->value['id'];?>
"><?php echo parseItems($_smarty_tpl->getVariable('c')->value['items']);?>
</a></b>
											</td>
										</tr>
										<?php }} ?><?php }?>
										<?php if ($_smarty_tpl->getVariable('offers_reg')->value){?><?php  $_smarty_tpl->tpl_vars["c"] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('offers_reg')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars["c"]->key => $_smarty_tpl->tpl_vars["c"]->value){
?>
										<tr>
											<td> [حجوزات العروض] </td>
											<td>
												الاسم  <b><a href="offers.html?do=view&id=<?php echo $_smarty_tpl->getVariable('c')->value['id'];?>
"><?php echo $_smarty_tpl->getVariable('c')->value['name'];?>
</a></b>
												الهاتف <b><a href="offers.html?do=view&id=<?php echo $_smarty_tpl->getVariable('c')->value['id'];?>
"><?php echo $_smarty_tpl->getVariable('c')->value['mobile'];?>
</a></b>
												إسم العرض <b><a href="offers.html?do=view&id=<?php echo $_smarty_tpl->getVariable('c')->value['offer_id'];?>
">offer # <?php echo $_smarty_tpl->getVariable('c')->value['offer_id'];?>
</a><br><?php echo getoffer($_smarty_tpl->getVariable('c')->value['offer_id']);?>
</b>
											</td>
										</tr>
										<?php }} ?><?php }?>
										<?php if ($_smarty_tpl->getVariable('category')->value){?><?php  $_smarty_tpl->tpl_vars["c"] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('category')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars["c"]->key => $_smarty_tpl->tpl_vars["c"]->value){
?>
										<tr>
											<td> [ الاقسام] </td>
											<td>
												القسم  <b><a href="categories.html?do=view&id=<?php echo $_smarty_tpl->getVariable('c')->value['id'];?>
"><?php echo $_smarty_tpl->getVariable('c')->value['name'];?>
 - <?php echo $_smarty_tpl->getVariable('c')->value['name_ar'];?>
</a></b>
												عدد المنتجات <b><a href="categories.html?do=view&id=<?php echo $_smarty_tpl->getVariable('c')->value['id'];?>
"><?php echo getcategoryitems($_smarty_tpl->getVariable('c')->value['id']);?>
 </a></b>
											</td>
										</tr>
										<?php }} ?><?php }?>
										<?php if ($_smarty_tpl->getVariable('items')->value){?><?php  $_smarty_tpl->tpl_vars["c"] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('items')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars["c"]->key => $_smarty_tpl->tpl_vars["c"]->value){
?>
										<tr>
											<td> [المنتجات] </td>
											<td>
												القسم  <b><a href="items.html?do=view&id=<?php echo $_smarty_tpl->getVariable('c')->value['id'];?>
"><?php echo $_smarty_tpl->getVariable('c')->value['name'];?>
 - <?php echo $_smarty_tpl->getVariable('c')->value['name_ar'];?>
</a></b>
												السعر <b><a href="items.html?do=view&id=<?php echo $_smarty_tpl->getVariable('c')->value['id'];?>
"><b><?php echo $_smarty_tpl->getVariable('c')->value['price'];?>
 </b>جنيه مصري </a></b>
											</td>
										</tr>
										<?php }} ?><?php }?>
										<?php if ($_smarty_tpl->getVariable('caketypes')->value){?><?php  $_smarty_tpl->tpl_vars["c"] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('caketypes')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars["c"]->key => $_smarty_tpl->tpl_vars["c"]->value){
?>
										<tr>
											<td> [انواع الكيك] </td>
											<td>
												النوع  <b><a href="caketypes.html?do=view&id=<?php echo $_smarty_tpl->getVariable('c')->value['id'];?>
"><?php echo $_smarty_tpl->getVariable('c')->value['name'];?>
 - <?php echo $_smarty_tpl->getVariable('c')->value['name_ar'];?>
</a></b>
											</td>
										</tr>
										<?php }} ?><?php }?>
										<?php if ($_smarty_tpl->getVariable('offers')->value){?><?php  $_smarty_tpl->tpl_vars["c"] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('offers')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars["c"]->key => $_smarty_tpl->tpl_vars["c"]->value){
?>
										<tr>
											<td> [ العروض] </td>
											<td>
												العرض  <b><a href="offers.html?do=view&id=<?php echo $_smarty_tpl->getVariable('c')->value['id'];?>
"><?php echo $_smarty_tpl->getVariable('c')->value['offer_content'];?>
 - <?php echo $_smarty_tpl->getVariable('c')->value['offer_content_ar'];?>
</a></b>
												وقت الانتهاء  <b dir="ltr" style="text-align: right"><a href="offers.html?do=view&id=<?php echo $_smarty_tpl->getVariable('c')->value['id'];?>
"><?php echo date('Y-m-d H:i',$_smarty_tpl->getVariable('c')->value['offer_expire']);?>
</a></b>
											</td>
										</tr>
										<?php }} ?><?php }?>
										<?php if ($_smarty_tpl->getVariable('branches')->value){?><?php  $_smarty_tpl->tpl_vars["c"] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('branches')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars["c"]->key => $_smarty_tpl->tpl_vars["c"]->value){
?>
										<tr>
											<td> [ الفروع] </td>
											<td>
												الفرع  <b><a href="branches.html?do=view&id=<?php echo $_smarty_tpl->getVariable('c')->value['id'];?>
"><?php echo $_smarty_tpl->getVariable('c')->value['name'];?>
<br /><?php echo $_smarty_tpl->getVariable('c')->value['name_ar'];?>
</a></b><br>
												 العنوان <b ><a href="branches.html?do=view&id=<?php echo $_smarty_tpl->getVariable('c')->value['id'];?>
"><?php echo $_smarty_tpl->getVariable('c')->value['address'];?>
<br /><?php echo $_smarty_tpl->getVariable('c')->value['address_ar'];?>
</a></b>
											</td>
										</tr>
										<?php }} ?><?php }?>
									</tbody>
                                  
                                    <?php }else{ ?>
                                    <tbody>
                                        <tr>
								            <td colspan="6" align="center"><?php if ($_smarty_tpl->getVariable('err_msg')->value){?><?php echo $_smarty_tpl->getVariable('err_msg')->value;?>
<?php }else{ ?>لا توجد نتائج <?php }?></td>
								        </tr>
                                    </tbody>
									<?php }?>
								</table>
							</div>
						</section>
					</div>
				</div>
			<?php if ($_smarty_tpl->getVariable('area_name')->value=='list'){?>
          		<?php echo $_smarty_tpl->getVariable('datum')->value;?>

          	<?php }?>