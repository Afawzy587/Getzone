<!--
                        <div class="row">
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <section class="dash-tile bg-success">
                                    <div class="tile-title">إجمالي عضويات اليوم</div>
									<div class="tile-stats"><b>{if $u.stats.1.total}<a href="cards.html?do=today">{$u.stats.1.total}</a>{else}لا توجد {/if}</b> عضويات جديدة لهذا اليوم</div>
									<div class="tile-icon">
                                        <i class="ti-timer"></i>
                                    </div>
                                </section>
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <section class="dash-tile bg-success">
                                    <div class="tile-title">إجمالي فواتير اليوم</div>
                                    <div class="tile-stats"><b>{if $u.stats.0.total}<a href="invoices.html?do=today">{$u.stats.0.total}</a>{else}لا توجد {/if}</b> فواتير لهذا اليوم</div>
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