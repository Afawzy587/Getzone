<?php /* Smarty version Smarty-3.0.8, created on 2018-11-06 23:20:11
         compiled from "./assets/themes/internal/controler.tpl" */ ?>
<?php /*%%SmartyHeaderCode:12853356995be221ab356130-64852374%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '72842ed572578820d365105dff49829c63d8203d' => 
    array (
      0 => './assets/themes/internal/controler.tpl',
      1 => 1541546409,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12853356995be221ab356130-64852374',
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
                        <div class="row">
                            <div class="col-lg-12">
                                <?php if ($_smarty_tpl->getVariable('success')->value){?><div class="alert alert-success"><?php echo $_smarty_tpl->getVariable('success')->value;?>
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
                                    <header class="panel-heading"> اعدادات الصفحة الرئيسية</header>
                                    <div class="panel-body">
                                        <form class="form-horizontal" role="form" method="post" action="controler.html">
                                          <div class="form-group">
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control" name="link" placeholder="اكتب الينك هنا" value="<?php echo $_smarty_tpl->getVariable('u')->value['link'];?>
">
                                                </div>
                                                <label class="col-sm-2 control-label">اللينك</label>
                                            </div>
                                           <div class="form-group">
												<div class="col-sm-10">
													<select class="form-control" name="visitors_in_real_time">
														<option value="0" <?php if ($_smarty_tpl->getVariable('u')->value['visitors_in_real_time']==0){?>selected="selected"<?php }?>>غير مفعل</option>
														<option value="1" <?php if ($_smarty_tpl->getVariable('u')->value['visitors_in_real_time']==1){?>selected="selected"<?php }?>>مفعل</option>
													</select>
												</div>
											   <label class="col-sm-2 control-label"><a target="_blank" href="<?php echo $_smarty_tpl->getVariable('u')->value['link'];?>
module=Widgetize&action=iframe&widget=1&moduleToWidgetize=Live&actionToWidgetize=widget&idSite=1&period=day&date=yesterday&disableLink=1&widget=1"> تفاصيل الزائرين حاليا </a></label>
											</div>
                                             <div class="form-group">
												<div class="col-sm-10">
													<select class="form-control" name="real_time_visitor_count">
														<option value="0" <?php if ($_smarty_tpl->getVariable('u')->value['real_time_visitor_count']==0){?>selected="selected"<?php }?>>غير مفعل</option>
														<option value="1" <?php if ($_smarty_tpl->getVariable('u')->value['real_time_visitor_count']==1){?>selected="selected"<?php }?>>مفعل</option>
													</select>
												</div>
												 <label class="col-sm-2 control-label"><a target="_blank" href="<?php echo $_smarty_tpl->getVariable('u')->value['link'];?>
module=Widgetize&action=iframe&widget=1&moduleToWidgetize=Live&actionToWidgetize=getSimpleLastVisitCount&idSite=1&period=day&date=yesterday&disableLink=1&widget=1"> عدد الزائرين فى اخر 3  دقائق </a> </label>
											</div>
                                            <div class="form-group">
												<div class="col-sm-10">
													<select class="form-control" name="visitor_log">
														<option value="0" <?php if ($_smarty_tpl->getVariable('u')->value['visitor_log']==0){?>selected="selected"<?php }?>>غير مفعل</option>
														<option value="1" <?php if ($_smarty_tpl->getVariable('u')->value['visitor_log']==1){?>selected="selected"<?php }?>>مفعل</option>
													</select>
												</div>
												<label class="col-sm-2 control-label"><a target="_blank" href="<?php echo $_smarty_tpl->getVariable('u')->value['link'];?>
module=Widgetize&action=iframe&forceView=1&viewDataTable=VisitorLog&small=1&widget=1&moduleToWidgetize=Live&actionToWidgetize=getLastVisitsDetails&idSite=1&period=day&date=yesterday&disableLink=1&widget=1"> سجل الزوار </a> </label>
											</div>
                                           <div class="form-group">
												<div class="col-sm-10">
													<select class="form-control" name="visits_over_time">
														<option value="0" <?php if ($_smarty_tpl->getVariable('u')->value['visits_over_time']==0){?>selected="selected"<?php }?>>غير مفعل</option>
														<option value="1" <?php if ($_smarty_tpl->getVariable('u')->value['visits_over_time']==1){?>selected="selected"<?php }?>>مفعل</option>
													</select>
												</div>
											   <label class="col-sm-2 control-label"><a target="_blank" href="<?php echo $_smarty_tpl->getVariable('u')->value['link'];?>
module=Widgetize&action=iframe&forceView=1&viewDataTable=graphEvolution&widget=1&moduleToWidgetize=VisitsSummary&actionToWidgetize=getEvolutionGraph&idSite=1&period=day&date=yesterday&disableLink=1&widget=1"> الزيارات مع مرور الوقت </a> </label>
											</div>
                                            <div class="form-group">
												<div class="col-sm-10">
													<select class="form-control" name="real_time_map">
														<option value="0" <?php if ($_smarty_tpl->getVariable('u')->value['real_time_map']==0){?>selected="selected"<?php }?>>غير مفعل</option>
														<option value="1" <?php if ($_smarty_tpl->getVariable('u')->value['real_time_map']==1){?>selected="selected"<?php }?>>مفعل</option>
													</select>
												</div>
												<label class="col-sm-2 control-label"><a target="_blank" href="<?php echo $_smarty_tpl->getVariable('u')->value['link'];?>
module=Widgetize&action=iframe&widget=1&moduleToWidgetize=UserCountryMap&actionToWidgetize=realtimeMap&idSite=1&period=day&date=yesterday&disableLink=1&widget=1"> اماكن المستخدمين حول العالم </a> </label>
											</div>
                                         <div class="form-group">
												<div class="col-sm-10">
													<select class="form-control" name="event_category">
														<option value="0" <?php if ($_smarty_tpl->getVariable('u')->value['event_category']==0){?>selected="selected"<?php }?>>غير مفعل</option>
														<option value="1" <?php if ($_smarty_tpl->getVariable('u')->value['event_category']==1){?>selected="selected"<?php }?>>مفعل</option>
													</select>
												</div>
											 <label class="col-sm-2 control-label"><a target="_blank" href="<?php echo $_smarty_tpl->getVariable('u')->value['link'];?>
module=Widgetize&action=iframe&secondaryDimension=eventAction&widget=1&moduleToWidgetize=Events&actionToWidgetize=getCategory&idSite=1&period=day&date=yesterday&disableLink=1&widget=1"> استخدام التطبيق والتفاعل معه </a> </label>
											</div>
                                          <div class="form-group">
												<div class="col-sm-10">
													<select class="form-control" name="entry_page_title">
														<option value="0" <?php if ($_smarty_tpl->getVariable('u')->value['entry_page_title']==0){?>selected="selected"<?php }?>>غير مفعل</option>
														<option value="1" <?php if ($_smarty_tpl->getVariable('u')->value['entry_page_title']==1){?>selected="selected"<?php }?>>مفعل</option>
													</select>
												</div>
											  <label class="col-sm-2 control-label"><a target="_blank" href="<?php echo $_smarty_tpl->getVariable('u')->value['link'];?>
module=Widgetize&action=iframe&widget=1&moduleToWidgetize=Actions&actionToWidgetize=getPageTitles&idSite=1&period=day&date=yesterday&disableLink=1&widget=1"> تفاصيل الصفحات التى تم دخولها </a> </label>
											</div>
                                          <div class="form-group">
												<div class="col-sm-10">
													<select class="form-control" name="visitors_devices_models">
														<option value="0" <?php if ($_smarty_tpl->getVariable('u')->value['visitors_devices_models']==0){?>selected="selected"<?php }?>>غير مفعل</option>
														<option value="1" <?php if ($_smarty_tpl->getVariable('u')->value['visitors_devices_models']==1){?>selected="selected"<?php }?>>مفعل</option>
													</select>
												</div>
											  <label class="col-sm-2 control-label"> <a target="_blank" href="<?php echo $_smarty_tpl->getVariable('u')->value['link'];?>
module=Widgetize&action=iframe&widget=1&moduleToWidgetize=DevicesDetection&actionToWidgetize=getModel&idSite=1&period=day&date=yesterday&disableLink=1&widget=1"> تفاصيل عن اجهزة المستخدمين </a> </label>
											</div>
                                           <div class="form-group">
												<div class="col-sm-10">
													<select class="form-control" name="goals_overview">
														<option value="0" <?php if ($_smarty_tpl->getVariable('u')->value['goals_overview']==0){?>selected="selected"<?php }?>>غير مفعل</option>
														<option value="1" <?php if ($_smarty_tpl->getVariable('u')->value['goals_overview']==1){?>selected="selected"<?php }?>>مفعل</option>
													</select>
												</div>
											   <label class="col-sm-2 control-label"><a target="_blank" href="<?php echo $_smarty_tpl->getVariable('u')->value['link'];?>
module=Widgetize&action=iframe&containerId=GoalsOverview&widget=1&moduleToWidgetize=CoreHome&actionToWidgetize=renderWidgetContainer&idSite=1&period=day&date=2018-11-05&disableLink=1&widget=1"> الاهداف </a></label>
											</div>
                                               
                                            <div class="form-group">
                                            <div class="col-sm-10"><button type="submit" class="btn btn-default">تحديث البيانات</button></div>
                                            </div>
                                        </form>
                                    </div>
                                </section>
                            </div>
                        </div>
