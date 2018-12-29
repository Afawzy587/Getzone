<?php /* Smarty version Smarty-3.0.8, created on 2018-12-27 11:53:13
         compiled from "./assets/themes\internal/dashboard.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1306888485c24af195d4710-69121515%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3219b415dba58dc3254def591e8f4893db76c7cc' => 
    array (
      0 => './assets/themes\\internal/dashboard.tpl',
      1 => 1545907954,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1306888485c24af195d4710-69121515',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<!--
                        <div class="row">
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <section class="dash-tile bg-success">
                                    <div class="tile-title">إجمالي عضويات اليوم</div>
									<div class="tile-stats"><b><?php if ($_smarty_tpl->getVariable('u')->value['stats'][1]['total']){?><a href="cards.html?do=today"><?php echo $_smarty_tpl->getVariable('u')->value['stats'][1]['total'];?>
</a><?php }else{ ?>لا توجد <?php }?></b> عضويات جديدة لهذا اليوم</div>
									<div class="tile-icon">
                                        <i class="ti-timer"></i>
                                    </div>
                                </section>
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <section class="dash-tile bg-success">
                                    <div class="tile-title">إجمالي فواتير اليوم</div>
                                    <div class="tile-stats"><b><?php if ($_smarty_tpl->getVariable('u')->value['stats'][0]['total']){?><a href="invoices.html?do=today"><?php echo $_smarty_tpl->getVariable('u')->value['stats'][0]['total'];?>
</a><?php }else{ ?>لا توجد <?php }?></b> فواتير لهذا اليوم</div>
                                    <div class="tile-icon">
                                        <i class="ti-timer"></i>
                                    </div>
                                </section>
                            </div>
                        </div>
-->
 
						<div class="row" style="display:none;">
                            <div class="col-md-3 col-sm-6 col-xs-12">
                                <section class="dash-tile bg-danger">
                                    <div class="tile-title">
                                        <span class="pull-left">
                                            <i class="ti-arrow-circle-up ml5"></i>8%
                                        </span>
                                        <span>مستوي التقدم</span>
                                    </div>
                                    <div class="tile-stats"><b>4565</b>
                                    </div>
                                    <div class="mb20"></div>
                                    <div class="tile-chart tile-line"></div>
                                    <div class="tile-footer">محدثة كل 4 دقائق</div>
                                </section>
                            </div>
                        </div>