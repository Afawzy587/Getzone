			<div class="brand hidden-xs">
                <!-- toggle offscreen menu -->
                <a href="javascript:;" class="ti-menu off-right visible-xs" data-toggle="offscreen" data-move="rtl"></a>
                <!-- /toggle offscreen menu -->

                <!-- logo -->
                <a href="index.html" style="max-width:100px;margin:auto;display:block;text-align:center;">
                    <img src="./assets/img/" alt="GITZONE" style="">
                </a>
                <!-- /logo -->
            </div>

			<ul class="nav navbar-nav">
				{if $notifications}	
                <li class="notifications dropdown">
                    <a href="javascript:;" data-toggle="dropdown">
                        <i class="ti-bell"></i>
                        <div class="badge badge-top bg-danger animated flash">
                            <span>{$notifications}</span>
                        </div>
                    </a>
                    <div class="dropdown-menu animated fadeInRight">
                        <div class="panel panel-default no-m">
                            <div class="panel-heading small"><b>العضويات المتاحة</b></div>
                            <ul class="list-group">
								{foreach from=$tokens item="c"}
									<li class="list-group-item membership_{$c.number}">
<!--										<span class="pull-right mt5 ml15"><img src="" class="avatar avatar-sm img-circle" alt=""></span>-->
										<div class="m-body">
											<span> عضوية رقم <b>{$c.number}</b> بإسم <b>{$c.name}</b> <br />
												<a href="#" class="deleteThisMembership" membership="{$c.number}">حذف</a> - <a href="#" class="useThisMembership" membership="{$c.number}">إستخدام</a>
											</span>
										</div>
									</li>
								{/foreach}
                            </ul>
                        </div>
                    </div>
                </li>
				{/if}	
                <li class="off-left">
                    <a href="javascript:;" data-toggle="dropdown">
<!--                        <img src="./assets/img/" class="header-avatar img-circle" alt="{$username}" title="{$username}">-->
                        <span class="hidden-xs mr10">{$username}</span>
                        <i class="ti-angle-down ti-caret hidden-xs"></i>
                    </a>
                    <ul class="dropdown-menu animated fadeInRight">
                       {if $group.settings eq 1 }
                        <li>
                            <a href="settings.html">الإعدادات الشخصية</a>
                        </li>
                        {/if}
                        <li>
                            <a href="login.html?do=logout">تسجيل الخروج</a>
                        </li>
                    </ul>
                </li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li class="header-search {if $q}open{/if}">
                    <!-- toggle search -->
                    <a href="javascript:;" class="toggle-search">
                        <i class="ti-search"></i>
                    </a>
                    <!-- /toggle search -->
                    <div class="search-container">
                        <form role="search" action="search.html" method="get">
                            <input type="text" name="query" class="form-control search" placeholder="أكتب رقم الفاتورة أو العضوية هنا" value="{$q}">
                        </form>
                    </div>
                </li>
                <li class="hidden-xs">
                    <!-- toggle small menu -->
                    <a href="javascript:;" class="toggle-sidebar">
                        <i class="ti-menu"></i>
                    </a>
                    <!-- /toggle small menu -->
                </li>
            </ul>