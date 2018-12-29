<?php /* Smarty version Smarty-3.0.8, created on 2018-11-07 16:16:39
         compiled from "./assets/themes/internal/dashboard.tpl" */ ?>
<?php /*%%SmartyHeaderCode:6922936315be30fe768eb13-07701653%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ba847af778695291215c83a035ddabdd0465206f' => 
    array (
      0 => './assets/themes/internal/dashboard.tpl',
      1 => 1541607397,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6922936315be30fe768eb13-07701653',
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
 
					  <div class="table">
                           <?php if ($_smarty_tpl->getVariable('c')->value['visitors_in_real_time']==1){?>
                            <div class="col-md-4 col-sm-4 col-xs-6">
                                <section class="dash-tile bg-info">
									<div class="tile-title" ><a target="_blank" href="<?php echo $_smarty_tpl->getVariable('c')->value['link'];?>
module=Widgetize&action=iframe&widget=1&moduleToWidgetize=Live&actionToWidgetize=widget&idSite=1&period=day&date=yesterday&disableLink=1&widget=1"><h3>تفاصيل الزائرين حاليا</h3></a></div>
                                    <br>
									<div id="widgetIframe">
                                    <iframe width="100%" height="350" src="<?php echo $_smarty_tpl->getVariable('c')->value['link'];?>
module=Widgetize&action=iframe&widget=1&moduleToWidgetize=Live&actionToWidgetize=widget&idSite=1&period=day&date=yesterday&disableLink=1&widget=1"  frameborder="0" marginheight="0" marginwidth="0">
                                    </iframe></div>
                                </section>
                            </div>
                            <?php }?>
                            <?php if ($_smarty_tpl->getVariable('c')->value['real_time_visitor_count']==1){?>
                            <div class="col-md-4 col-sm-4 col-xs-6">
                                <section class="dash-tile bg-info">
									<div class="tile-title" ><h3><a target="_blank" href="<?php echo $_smarty_tpl->getVariable('c')->value['link'];?>
module=Widgetize&action=iframe&widget=1&moduleToWidgetize=Live&actionToWidgetize=getSimpleLastVisitCount&idSite=1&period=day&date=yesterday&disableLink=1&widget=1">عدد الزائرين فى اخر 3  دقائق</a></h3></div>
                                    <br>
									<div id="widgetIframe">
                                    <iframe width="100%" height="350" src="<?php echo $_smarty_tpl->getVariable('c')->value['link'];?>
module=Widgetize&action=iframe&widget=1&moduleToWidgetize=Live&actionToWidgetize=getSimpleLastVisitCount&idSite=1&period=day&date=yesterday&disableLink=1&widget=1"  frameborder="0" marginheight="0" marginwidth="0">
                                    </iframe></div>
                                </section>
                            </div>
                            <?php }?>
                            <?php if ($_smarty_tpl->getVariable('c')->value['visitor_log']==1){?>
                            <div class="col-md-4 col-sm-4 col-xs-6">
                                <section class="dash-tile bg-info">
									<div class="tile-title" ><a target="_blank" href="<?php echo $_smarty_tpl->getVariable('c')->value['link'];?>
module=Widgetize&action=iframe&forceView=1&viewDataTable=VisitorLog&small=1&widget=1&moduleToWidgetize=Live&actionToWidgetize=getLastVisitsDetails&idSite=1&period=day&date=yesterday&disableLink=1&widget=1"><h3> سجل الزوار </h3></a></div>
                                    <br>
									<div id="widgetIframe">
                                    <iframe width="100%" height="350" src="<?php echo $_smarty_tpl->getVariable('c')->value['link'];?>
module=Widgetize&action=iframe&forceView=1&viewDataTable=VisitorLog&small=1&widget=1&moduleToWidgetize=Live&actionToWidgetize=getLastVisitsDetails&idSite=1&period=day&date=yesterday&disableLink=1&widget=1"  frameborder="0" marginheight="0" marginwidth="0">
                                    </iframe></div>
                                </section>
                            </div>
                            <?php }?>
                            <?php if ($_smarty_tpl->getVariable('c')->value['visits_over_time']==1){?>
                            <div class="col-md-4 col-sm-4 col-xs-6">
                                <section class="dash-tile bg-info">
									<div class="tile-title" ><a target="_blank" href="<?php echo $_smarty_tpl->getVariable('c')->value['link'];?>
module=Widgetize&action=iframe&forceView=1&viewDataTable=graphEvolution&widget=1&moduleToWidgetize=VisitsSummary&actionToWidgetize=getEvolutionGraph&idSite=1&period=day&date=yesterday&disableLink=1&widget=1"><h3> الزيارات مع مرور الوقت </h3></a></div>
                                    <br>
									<div id="widgetIframe">
                                    <iframe width="100%" height="350" src="<?php echo $_smarty_tpl->getVariable('c')->value['link'];?>
module=Widgetize&action=iframe&forceView=1&viewDataTable=graphEvolution&widget=1&moduleToWidgetize=VisitsSummary&actionToWidgetize=getEvolutionGraph&idSite=1&period=day&date=yesterday&disableLink=1&widget=1"  frameborder="0" marginheight="0" marginwidth="0">
                                    </iframe></div>
                                </section>
                            </div>
                            <?php }?>
                            <?php if ($_smarty_tpl->getVariable('c')->value['real_time_map']==1){?>
                            <div class="col-md-4 col-sm-4 col-xs-6">
                                <section class="dash-tile bg-info">
									<div class="tile-title" ><a target="_blank" href="<?php echo $_smarty_tpl->getVariable('c')->value['link'];?>
module=Widgetize&action=iframe&widget=1&moduleToWidgetize=UserCountryMap&actionToWidgetize=realtimeMap&idSite=1&period=day&date=yesterday&disableLink=1&widget=1"><h3>  اماكن المستخدمين حول العالم </h3></a></div>
                                    <br>
									<div id="widgetIframe">
                                    <iframe width="100%" height="350" src="<?php echo $_smarty_tpl->getVariable('c')->value['link'];?>
module=Widgetize&action=iframe&widget=1&moduleToWidgetize=UserCountryMap&actionToWidgetize=realtimeMap&idSite=1&period=day&date=yesterday&disableLink=1&widget=1"  frameborder="0" marginheight="0" marginwidth="0">
                                    </iframe></div>
                                </section>
                            </div>
                            <?php }?>
                            <?php if ($_smarty_tpl->getVariable('c')->value['entry_page_title']==1){?>
                            <div class="col-md-4 col-sm-4 col-xs-6">
                                <section class="dash-tile bg-info">
									<div class="tile-title" ><a target="_blank" href="<?php echo $_smarty_tpl->getVariable('c')->value['link'];?>
module=Widgetize&action=iframe&widget=1&moduleToWidgetize=Actions&actionToWidgetize=getPageTitles&idSite=1&period=day&date=yesterday&disableLink=1&widget=1"><h3>  تفاصيل الصفحات التى تم دخولها  </h3></a></div>
                                    <br>
									<div id="widgetIframe">
                                    <iframe width="100%" height="350" src="<?php echo $_smarty_tpl->getVariable('c')->value['link'];?>
module=Widgetize&action=iframe&widget=1&moduleToWidgetize=Actions&actionToWidgetize=getPageTitles&idSite=1&period=day&date=yesterday&disableLink=1&widget=1"  frameborder="0" marginheight="0" marginwidth="0">
                                    </iframe></div>
                                </section>
                            </div>
                            <?php }?>
                            <?php if ($_smarty_tpl->getVariable('c')->value['event_category']==1){?>
                            <div class="col-md-4 col-sm-4 col-xs-6">
                                <section class="dash-tile bg-info">
									<div class="tile-title" ><a target="_blank" href="<?php echo $_smarty_tpl->getVariable('c')->value['link'];?>
module=Widgetize&action=iframe&secondaryDimension=eventAction&widget=1&moduleToWidgetize=Events&actionToWidgetize=getCategory&idSite=1&period=day&date=yesterday&disableLink=1&widget=1"><h3> استخدام التطبيق والتفاعل معه</h3></a></div>
                                    <br>
									<div id="widgetIframe">
                                    <iframe width="100%" height="350" src="<?php echo $_smarty_tpl->getVariable('c')->value['link'];?>
module=Widgetize&action=iframe&secondaryDimension=eventAction&widget=1&moduleToWidgetize=Events&actionToWidgetize=getCategory&idSite=1&period=day&date=yesterday&disableLink=1&widget=1"  frameborder="0" marginheight="0" marginwidth="0">
                                    </iframe></div>
                                </section>
                            </div>
                            <?php }?>
                            <?php if ($_smarty_tpl->getVariable('c')->value['visitors_devices_models']==1){?>
                            <div class="col-md-4 col-sm-4 col-xs-6">
                                <section class="dash-tile bg-info">
									<div class="tile-title" ><a target="_blank" href="<?php echo $_smarty_tpl->getVariable('c')->value['link'];?>
module=Widgetize&action=iframe&widget=1&moduleToWidgetize=DevicesDetection&actionToWidgetize=getModel&idSite=1&period=day&date=yesterday&disableLink=1&widget=1"><h3>  تفاصيل عن اجهزة المستخدمين  </h3></a></div>
                                    <br>
									<div id="widgetIframe">
                                    <iframe width="100%" height="350" src="<?php echo $_smarty_tpl->getVariable('c')->value['link'];?>
module=Widgetize&action=iframe&widget=1&moduleToWidgetize=DevicesDetection&actionToWidgetize=getModel&idSite=1&period=day&date=yesterday&disableLink=1&widget=1"  frameborder="0" marginheight="0" marginwidth="0">
                                    </iframe></div>
                                </section>
                            </div>
                            <?php }?>
                            <?php if ($_smarty_tpl->getVariable('c')->value['goals_overview']==1){?>
                            <div class="col-md-4 col-sm-4 col-xs-6">
                                <section class="dash-tile bg-info">
									<div class="tile-title" ><a target="_blank" href="<?php echo $_smarty_tpl->getVariable('c')->value['link'];?>
module=Widgetize&action=iframe&containerId=GoalsOverview&widget=1&moduleToWidgetize=CoreHome&actionToWidgetize=renderWidgetContainer&idSite=1&period=day&date=2018-11-05&disableLink=1&widget=1"><h3>الاهداف</h3></a></div>
                                    <br>
									<div id="widgetIframe">
                                    <iframe width="100%" height="350" src="<?php echo $_smarty_tpl->getVariable('c')->value['link'];?>
module=Widgetize&action=iframe&containerId=GoalsOverview&widget=1&moduleToWidgetize=CoreHome&actionToWidgetize=renderWidgetContainer&idSite=1&period=day&date=2018-11-05&disableLink=1&widget=1"  frameborder="0" marginheight="0" marginwidth="0">
                                    </iframe></div>
                                </section>
                            </div>
                            <?php }?>
                        </div>
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