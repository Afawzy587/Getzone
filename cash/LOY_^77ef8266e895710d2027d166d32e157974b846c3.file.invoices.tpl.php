<?php /* Smarty version Smarty-3.0.8, created on 2018-10-30 07:50:01
         compiled from "./assets/themes/internal/invoices.tpl" */ ?>
<?php /*%%SmartyHeaderCode:12757811435bd80d291482a3-68037474%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '77ef8266e895710d2027d166d32e157974b846c3' => 
    array (
      0 => './assets/themes/internal/invoices.tpl',
      1 => 1540816218,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12757811435bd80d291482a3-68037474',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
          	<?php if ($_smarty_tpl->getVariable('area_name')->value=='list'){?>
          		<input type="hidden" value="invoices" id="page">
          		<input type="hidden" value="الفواتير" id="lang_name">
          		<input type="hidden" value="هل أنت متأكد أنك تود حذف هذه" id="lang_del">
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
                                <h5>قائمة فواتير <b><span style="color:red;">اليوم</span></b></h5>
							</div>
							<div class="panel-body">
								
                                <table class="table table-hover no-m">
									<?php if ($_smarty_tpl->getVariable('u')->value){?>
                                    <thead>
										<tr>
											<th>فاتورة رقم #</th>
											<th>نسبة الخصم</th>
											<th>إسم صاحب العضوية</th>
											<th>قيمة الفاتورة النهائية</th>
											<th>المستلم</th>
											<th>تاريخ الفاتورة</th>
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
												<td><a href="invoices.html?do=view&id=<?php echo $_smarty_tpl->getVariable('c')->value['id'];?>
"><?php echo $_smarty_tpl->getVariable('c')->value['id'];?>
</a></td>
												<td dir="ltr" align="right">%<?php echo getFromTable(array('a'=>$_smarty_tpl->getVariable('c')->value['client_id'],'b'=>'cards','c'=>'getCardInformation','d'=>'discount'),$_smarty_tpl);?>
</td>
												<td><a href="cards.html?do=view&id=<?php echo $_smarty_tpl->getVariable('c')->value['client_id'];?>
"><?php echo getFromTable(array('a'=>$_smarty_tpl->getVariable('c')->value['client_id'],'b'=>'cards','c'=>'getCardInformation','d'=>'name'),$_smarty_tpl);?>
</a></td>
												<td><b><?php echo $_smarty_tpl->getVariable('c')->value['final'];?>
</b> <?php echo $_smarty_tpl->getVariable('currancy')->value;?>
</td>
												<td><b><?php echo getFromTable(array('a'=>$_smarty_tpl->getVariable('c')->value['staff_id'],'b'=>'staff','c'=>'getStaffInformation','d'=>'name'),$_smarty_tpl);?>
</b></td>
												<td><b><?php echo $_smarty_tpl->getVariable('c')->value['date'];?>
</b></td>
											</tr>
										<?php }} ?>
									</tbody>
                                    <?php }else{ ?>
                                    <tbody>
                                        <tr id="tr_<?php echo $_smarty_tpl->getVariable('c')->value['id'];?>
">
								            <td colspan="6" align="center">لا توجد فواتير لهذا اليوم</td>
								        </tr>
                                    </tbody>
									<?php }?>
                                    <tfoot>
										<tr>
											<td colspan="5" align="right"><?php echo $_smarty_tpl->getVariable('pager')->value;?>
</td>
											<td colspan="1" align="left"><a class="btn btn-success btn-sm pull-left" href="invoices.html?do=add">فاتورة جديدة</a></td>
										</tr>
									</tfoot>
								</table>
							</div>
						</section>
					</div>
				</div>
          	<?php }elseif($_smarty_tpl->getVariable('area_name')->value=='showBeforeApproved'){?>
                <input type="hidden" value="invoices" id="page">
          		<input type="hidden" value="الفواتير" id="lang_name">
          		<input type="hidden" value="هل أنت متأكد أنك تود حذف هذه" id="lang_del">
          		<input type="hidden" value="هل أنت متأكد أنك تود تأكيد هذه" id="lang_approve">
                <ol class="breadcrumb hidden-xs">
					<li>
						<a href="index.html"><i class="ti-home ml5"></i>الصفحة الرئيسية</a>
					</li>
					<li class="active"><?php echo $_smarty_tpl->getVariable('title')->value;?>
</li>
				</ol>
                <div class="row">
					<div class="col-lg-12">
					<section class="panel">
						<header class="panel-heading">إدارة الفواتير</header>
						<div class="panel-body">
                            <div align="right">    
                                <?php echo $_smarty_tpl->getVariable('content')->value;?>

                            </div>
                        </div>    
					</section>
					</div>
				</div>
            <?php }elseif($_smarty_tpl->getVariable('area_name')->value=='view'){?>
				<input type="hidden" value="sell" id="page">
          		<input type="hidden" value="البضاعة" id="lang_name">
          		<input type="hidden" value="هل أنت متأكد أنك تود حذف هذه" id="lang_del">
                <input type="hidden" value="هل أنت متأكد أنك تود تأكيد هذه" id="lang_approve">
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
						<header class="panel-heading"> مشاهدة فاتورة </header>
						<div class="panel-body">
						<form class="form-horizontal" role="form" method="post" action="">
							<div class="form-group" style="border-bottom:rgb(234,239,244) 1px solid;padding-bottom:10px;">
								<div class="col-sm-10" style="padding-top:7px;"><b><?php echo $_smarty_tpl->getVariable('u')->value['invoice']['date'];?>
</b> </div>
								<label class="col-sm-2 control-label">تاريخ الفاتورة</label>
							</div>
							 <div class="form-group" style="border-bottom:rgb(234,239,244) 1px solid;padding-bottom:10px;">
								<div class="col-sm-10" style="padding-top:7px;"><b><?php echo $_smarty_tpl->getVariable('u')->value['person']['name'];?>
</b></div>
								<label class="col-sm-2 control-label">اسم العميل</label>
							</div>
							<div class="form-group" style="border-bottom:rgb(234,239,244) 1px solid;padding-bottom:10px;">
								<div class="col-sm-10" style="padding-top:7px;"><b><?php echo $_smarty_tpl->getVariable('u')->value['invoice']['total'];?>
</b> <?php echo $_smarty_tpl->getVariable('currancy')->value;?>
</div>
								<label class="col-sm-2 control-label">قيمة الفاتورة</label>
							</div>
							<div class="form-group" style="border-bottom:rgb(234,239,244) 1px solid;padding-bottom:10px;">
								<div class="col-sm-10" style="padding-top:7px;"><b dir="ltr"><?php echo $_smarty_tpl->getVariable('u')->value['person']['discount'];?>
</b>%</div>
								<label class="col-sm-2 control-label">نسبة الخصم</label>
							</div>
							<div class="form-group" style="border-bottom:rgb(234,239,244) 1px solid;padding-bottom:10px;">
								<div class="col-sm-10" style="padding-top:7px;"><b><?php echo $_smarty_tpl->getVariable('u')->value['invoice']['final'];?>
</b> <?php echo $_smarty_tpl->getVariable('currancy')->value;?>
</div>
								<label class="col-sm-2 control-label">المبلغ النهائي</label>
							</div>
                            <div class="form-group" style="border-bottom:rgb(234,239,244) 1px solid;padding-bottom:10px;">
								<div class="col-sm-10" style="padding-top:7px;"><?php echo getFromTable(array('a'=>$_smarty_tpl->getVariable('u')->value['invoice']['staff_id'],'b'=>'staff','c'=>'getStaffInformation','d'=>'name'),$_smarty_tpl);?>
</div>
								<label class="col-sm-2 control-label">المستلم</label>
							</div>
                            <div class="form-group">
                                <div class="col-sm-10"><button type="submit" class="btn btn-success" onClick="window.print();return false;">طباعة الفاتورة</button> </div>
                            </div>
						</form>
						</div>
					</section>
					</div>
				</div>
			<?php }elseif($_smarty_tpl->getVariable('area_name')->value=='add'){?>
                <script type='text/javascript'>
					var _membership_1 = "<?php echo $_smarty_tpl->getVariable('membership_1')->value;?>
";
					var _membership_2 = "<?php echo $_smarty_tpl->getVariable('membership_2')->value;?>
";
					var _membership_3 = "<?php echo $_smarty_tpl->getVariable('membership_3')->value;?>
";
					
					
					 function checkBeforeSubmit(){
						var _client_number = ($("#i_client_number").val());
						var _invoice_payed = Number($("#invoice_payed").val());
						var _client_id = Number($("#i_client_id").val());
						var _discount = Number($("#discount").val());
						var _client_mobile = ($("#i_client_mobile").val());
						 
						if(_client_number == "" || _client_number.length != 14)
						{
							alert("يتوجب عليك إدخال رقم الكارت المكون من 14 رقم");
							return false;
						}else
						{
							if(_client_mobile == "" || _client_mobile.length != 11)
							{
								alert("يتوجب عليك إدخال رقم الهاتف المكون من 11 رقم");
								return false;
							}else
							{
								if(_invoice_payed < 10)
								{
									alert("يتوجب عليك إدخال مبلغ لا يقل عن 10 جنيهات");
									return false;
								}else
								{
									 if(_client_id != 0 && _invoice_payed != "")
									 {
										return true;
									 }else{
										 alert("يتوجب عليك إدخال بيانات الفاتورة بشكل صحيح");
										return false;
									 }
								}	
							}
						}							
					 }
					 
                </script>
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
						<header class="panel-heading"> إضافة فاتورة جديدة </header>
						<div class="panel-body">
						<form name="ShipManagment" class="form-horizontal" role="form" method="post" onSubmit="return(checkBeforeSubmit());return false;"  action="invoices.html?do=add">
                            <div class="form-group">
								<div class="col-sm-10">
									<input type="text" style="width:245px;" class="form-control datePicker" name="invoice_date" placeholder="يجب إدخال تاريخ الفاتورة" value="<?php echo $_smarty_tpl->getVariable('mydate')->value;?>
">
								</div>
								<label class="col-sm-2 control-label">تاريخ الفاتورة</label>
							</div>
							<div class="form-group">
								<div class="col-sm-10">
									<input type="text" class="form-control" id="i_client_number" name="i_client_number" placeholder="يجب إدخال رقم الكارت المكون من 14 رقم" value="<?php if ($_smarty_tpl->getVariable('_key_')->value['_n']){?><?php echo $_smarty_tpl->getVariable('_key_')->value['_n'];?>
<?php }else{ ?><?php echo $_smarty_tpl->getVariable('token')->value['number'];?>
<?php }?>">
								</div>
								<label class="col-sm-2 control-label"> رقم الكارت</label>
							</div>
							<div class="form-group">
								<div class="col-sm-10" style="padding-top:7px;"><b id="_i_type_name_"><?php if ($_smarty_tpl->getVariable('_key_')->value['_type']){?><?php echo getMembershipType($_smarty_tpl->getVariable('_key_')->value['_type']);?>
<?php }else{ ?><?php if ($_smarty_tpl->getVariable('token')->value['type']!=''){?><?php echo getMembershipType($_smarty_tpl->getVariable('token')->value['type']);?>
<?php }else{ ?>غير محدد<?php }?><?php }?></b></div>
								<input type="hidden" id="i_type_id" name="i_type_id" value="<?php if ($_smarty_tpl->getVariable('_key_')->value['_type']){?><?php echo $_smarty_tpl->getVariable('_key_')->value['_type'];?>
<?php }else{ ?><?php if ($_smarty_tpl->getVariable('token')->value['type']!=''){?><?php echo $_smarty_tpl->getVariable('token')->value['type'];?>
<?php }else{ ?>0<?php }?><?php }?>">
								<label class="col-sm-2 control-label">نوع العضوية</label>
							</div>
							<div class="form-group">
								<div class="col-sm-10" style="padding-top:7px;"><b id="_i_client_name_"><?php if ($_smarty_tpl->getVariable('_key_')->value['_name']){?><?php echo $_smarty_tpl->getVariable('_key_')->value['_name'];?>
<?php }else{ ?><?php if ($_smarty_tpl->getVariable('token')->value['name']!=''){?><?php echo $_smarty_tpl->getVariable('token')->value['name'];?>
<?php }else{ ?>---<?php }?><?php }?></b></div>
								<input type="hidden" id="i_client_id" name="i_client_id" value="<?php if ($_smarty_tpl->getVariable('_key_')->value['_id']){?><?php echo $_smarty_tpl->getVariable('_key_')->value['_id'];?>
<?php }else{ ?><?php if ($_smarty_tpl->getVariable('token')->value['id']!=''){?><?php echo $_smarty_tpl->getVariable('token')->value['id'];?>
<?php }else{ ?>0<?php }?><?php }?>">
								<label class="col-sm-2 control-label">اسم العميل</label>
							</div>
							<div class="form-group">
								<div class="col-sm-10">
									<input type="text" class="form-control" id="i_client_mobile" name="i_client_mobile" placeholder="يجب إدخال رقم الهاتف" value="<?php echo $_smarty_tpl->getVariable('u')->value['client_mobile'];?>
">
								</div>
								<label class="col-sm-2 control-label"> رقم الهاتف</label>
							</div>
							<div class="form-group">
								<div class="col-sm-10" style="padding-top:7px;"><b id="_points_"><?php if ($_smarty_tpl->getVariable('_key_')->value['_points']){?><?php echo $_smarty_tpl->getVariable('_key_')->value['_points'];?>
<?php }else{ ?><?php if ($_smarty_tpl->getVariable('token')->value['points']!=''){?><?php echo $_smarty_tpl->getVariable('token')->value['points'];?>
<?php }else{ ?>0<?php }?><?php }?></b> نقطة</div>
								<input type="hidden" id="points" name="points" value="<?php if ($_smarty_tpl->getVariable('_key_')->value['_points']){?><?php echo $_smarty_tpl->getVariable('_key_')->value['_points'];?>
<?php }else{ ?><?php if ($_smarty_tpl->getVariable('token')->value['points']!=''){?><?php echo $_smarty_tpl->getVariable('token')->value['points'];?>
<?php }else{ ?>0<?php }?><?php }?>">
								<label class="col-sm-2 control-label">إجمالي النقاط</label>
							</div>
							<div class="form-group">
								<div class="col-sm-10" style="padding-top:7px;"><b id="_times_"><?php if ($_smarty_tpl->getVariable('_key_')->value['_times']){?><?php echo $_smarty_tpl->getVariable('_key_')->value['_times'];?>
<?php }else{ ?><?php if ($_smarty_tpl->getVariable('token')->value['times']!=''){?><?php echo $_smarty_tpl->getVariable('token')->value['times'];?>
<?php }else{ ?>0<?php }?><?php }?></b> مرة</div>
								<input type="hidden" id="times" name="points" value="<?php if ($_smarty_tpl->getVariable('_key_')->value['_times']){?><?php echo $_smarty_tpl->getVariable('_key_')->value['_times'];?>
<?php }else{ ?><?php if ($_smarty_tpl->getVariable('token')->value['times']!=''){?><?php echo $_smarty_tpl->getVariable('token')->value['times'];?>
<?php }else{ ?>0<?php }?><?php }?>">
								<label class="col-sm-2 control-label">عدد مرات الشراء</label>
							</div>
							<div class="form-group">
								<div class="col-sm-6" style="padding-top:6px;"><?php echo $_smarty_tpl->getVariable('currancy')->value;?>
</div>
                                <div class="col-sm-4">
									<input type="text" class="form-control" id="invoice_payed" name="invoice_payed" placeholder="يجب إدخال المبلغ الإجمالي للفاتورة" dir="ltr" value="<?php echo $_smarty_tpl->getVariable('u')->value['invoice_payed'];?>
">
								</div>
								<label class="col-sm-2 control-label">المبلغ الإجمالي</label>
							</div>	
							<div class="form-group" style="display:none;">
								<div class="col-sm-10" style="padding-top:7px;"><b id="_discount_" dir="ltr"><?php if ($_smarty_tpl->getVariable('_key_')->value['_discount']){?><?php echo $_smarty_tpl->getVariable('_key_')->value['_discount'];?>
<?php }else{ ?><?php if ($_smarty_tpl->getVariable('token')->value['discount']!=''){?><?php echo $_smarty_tpl->getVariable('token')->value['discount'];?>
<?php }else{ ?>0<?php }?><?php }?></b>%</div>
								<input type="hidden" id="discount" name="discount" value="<?php if ($_smarty_tpl->getVariable('_key_')->value['_discount']){?><?php echo $_smarty_tpl->getVariable('_key_')->value['_discount'];?>
<?php }else{ ?><?php if ($_smarty_tpl->getVariable('token')->value['discount']!=''){?><?php echo $_smarty_tpl->getVariable('token')->value['discount'];?>
<?php }else{ ?>0<?php }?><?php }?>">
								<label class="col-sm-2 control-label">نسبة الخصم</label>
							</div>
							<div class="form-group">
								<div class="col-sm-10" style="padding-top:7px;"><b id="_invoice_final_">0</b> <?php echo $_smarty_tpl->getVariable('currancy')->value;?>
 <span id="hint"></span> </div>
								<input type="hidden" id="invoice_final" name="invoice_final" value="<?php if ($_smarty_tpl->getVariable('token')->value['discount']!=''){?><?php echo $_smarty_tpl->getVariable('token')->value['discount'];?>
<?php }else{ ?>0<?php }?>">
								<label class="col-sm-2 control-label">المبلغ النهائي</label>
							</div>
                            <div id="inputsContainer"></div>
							<div class="form-group">
								<div class="col-sm-10"><button type="submit" class="btn btn-default">إضافة الفاتورة</button></div>
							</div>
						</form>
						</div>
					</section>
					</div>
				</div>
            <?php }?>