<?php /* Smarty version Smarty-3.0.8, created on 2018-11-10 15:20:49
         compiled from "./assets/themes/sidebar.tpl" */ ?>
<?php /*%%SmartyHeaderCode:15544120565be6f751242da4-15497048%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0ec290d9a6a13060efccf0c9a526bf1bd7462970' => 
    array (
      0 => './assets/themes/sidebar.tpl',
      1 => 1541863071,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '15544120565be6f751242da4-15497048',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
			<!-- sidebar menu -->
            <aside class="sidebar offscreen-left">
                <!-- main navigation -->
                <nav style="margin-top:15px;" class="main-navigation" data-height="auto" data-size="6px" data-distance="0" data-rail-visible="true" data-wheel-step="10">
<!--
                    <ul class="nav">
                        <li>
                            <a href="invoices.html?do=today">
								<i class="ti-control-record text-success"></i>
                                <span> فواتير اليوم</span>
							</a>
                        </li>
                    </ul>
					<br />
					<ul class="nav">
                        <!-- Credits -->
<!--                        <li>
                            <a href="invoices.html?do=add">
                                <i class="ti-layers"></i>
                               <span>إنشاء فاتورة جديدة</span>
                            </a>
                        </li>-->
                        <!-- /Credits -->
<!--                    </ul>
					<br />
					<ul class="nav">
						<li>
                            <a href="cards.html?do=today">
                                <i class="ti-control-record text-success"></i>
								<span> عضويات اليوم</span>
                            </a>
                        </li>
                    </ul>
					
					<br />
					<ul class="nav"> 
 -->                      
                        <!-- Cards -->
<!--
                        <li>
                            <a href="cards.html?do=add">
                                <i class="ti-layers"></i>
                                <span>إنشاء عضوية جديدة</span>
                            </a>
                        </li>

                        
                    </ul>
					<br />
					
-->				
		     
			     <p class="nav-title"><b> التحكم فى التطبيق</b> </p>
                 <br>
                 <ul class="nav">
                        <li>
                           <?php if ($_smarty_tpl->getVariable('group')->value['groups_list']==1){?>
                            <a href="javascript:;">
                                <i class="toggle-accordion"></i>
                                <i class="ti-layers"></i>
                                <span>المجموعات</span>
                            </a>
                            <ul class="sub-menu">
                              
                               <li>
                                    <a href="groups.html">
                                        <span>قائمة المجموعات</span>
                                    </a>
                                </li>
                             <?php }?>
                             <?php if ($_smarty_tpl->getVariable('group')->value['groups_add']==1){?>  
                                <li>
                                    <a href="groups.html?do=add">
                                        <span>إضافة مجموعة جديدة  <?php echo $_smarty_tpl->getVariable('g')->value;?>
</span>
                                    </a>
                                </li>
                             <?php }?>
                            </ul>
                        </li>
                    </ul>
				 <!-- notifications -->
					<ul class="nav">
                        <?php if ($_smarty_tpl->getVariable('group')->value['notifications_list']==1){?>
                        <li>
                            <a href="javascript:;">
                                <i class="toggle-accordion"></i>
                                <i class="ti-layers"></i>
                                <span>الإشعارات</span>
                            </a>
                            <ul class="sub-menu">
                                <li>
                                    <a href="notifications.html">
                                        <span>قائمة الإشعارات</span>
                                    </a>
                                </li>
                                <?php }?>
                                <?php if ($_smarty_tpl->getVariable('group')->value['notifications_add']==1){?>
                                <li>
                                    <a href="notifications.html?do=add">
                                        <span>إضافة إشعار جديد</span>
                                    </a>
                                </li>
                                <?php }?>
                            </ul>
                        </li>
                    </ul>
					<!-- /notifications -->
					<!-- notifications -->
					<?php if ($_smarty_tpl->getVariable('group')->value['contacts_list']==1){?>
					<ul class="nav">
                        <li>
                            <a href="javascript:;">
                                <i class="toggle-accordion"></i>
                                <i class="ti-layers"></i>
                                <span>جهات الاتصال</span>
                            </a>
                            <ul class="sub-menu">
                           
                                <li>
                                    <a href="contacts.html">
                                        <span>قائمة جهات الاتصال</span>
                                    </a>
                                </li>
<!--
                                <li>
                                    <a href="contacts.html?do=add">
                                        <span>إضافة جهة جديد</span>
                                    </a>
                                </li>
-->
                            </ul>
                        </li>
                    </ul>
                    <?php }?>
					<!-- /notifications -->
<!--					<ul class="nav">
                        <li>
                            <a href="javascript:;">
                                <i class="toggle-accordion"></i>
                                <i class="ti-layers"></i>
                                <span>الموظفين</span>
                            </a>
                            <ul class="sub-menu">
                                <li>
                                    <a href="staff.html">
                                        <span>قائمة الموظفين</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="staff.html?do=add">
                                        <span>إضافة موظف جديد</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul> -->
					<?php if ($_smarty_tpl->getVariable('notifications')->value){?>	
					
                    <ul class="nav">
                        <!-- Notifications -->
                        <?php  $_smarty_tpl->tpl_vars["c"] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('tokens')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars["c"]->key => $_smarty_tpl->tpl_vars["c"]->value){
?>
						<li class="membership_<?php echo $_smarty_tpl->getVariable('c')->value['number'];?>
">
                            <a href="javascript:;">
                                <i class="toggle-accordion"></i>
                                <i class=""></i>
                                <span style="display:inline-block;">رقم <?php echo $_smarty_tpl->getVariable('c')->value['number'];?>
 <br  />بإٍسم <?php echo $_smarty_tpl->getVariable('c')->value['name'];?>
</span>
                            </a>
                            <ul class="sub-menu">
                                <li>
                                    <a href="staff.html" class="deleteThisMembership" membership="<?php echo $_smarty_tpl->getVariable('c')->value['number'];?>
">
                                        <span>حذف هذه العضوية </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="staff.html?do=add" class="useThisMembership" membership="<?php echo $_smarty_tpl->getVariable('c')->value['number'];?>
">
                                        <span>إستخدام هذه العضوية</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
						<?php }} ?>
                        <!-- /Notifications -->
                    </ul>
					<?php }?>	
					
					<ul class="nav">
                        <!-- staff -->
                        
                           <?php if ($_smarty_tpl->getVariable('group')->value['orders_list']==1){?>
                           <li>
                            <a href="javascript:;">
                                <i class="toggle-accordion"></i>
                                <i class="ti-layers"></i>
                                <span>الأوردرات</span>
                            </a>
                            <ul class="sub-menu">
                                <li>
                                   
                                    <a href="orders.html">
                                        <span>قائمة الأوردرات الحالية</span>
                                    </a><?php }?>
                                    <?php if ($_smarty_tpl->getVariable('group')->value['cakes_list']==1){?>
									<a href="cakes.html">
                                        <span>قائمة حجوزات التورت</span>
                                    </a><?php }?>
                                    <?php if ($_smarty_tpl->getVariable('group')->value['offers_reg_list']==1){?>
                                    <a href="offers_reg.html">
                                        <span>قائمة حجوزات العروض</span>
                                    </a><?php }?>
                                </li>
                            </ul>
                        </li>
                        <!-- /staff -->
                    </ul>
					
					
					<ul class="nav">
                        <!-- Categories -->
                        
                           <?php if ($_smarty_tpl->getVariable('group')->value['categories_list']==1){?>
                           <li>
                            <a href="javascript:;">
                                <i class="toggle-accordion"></i>
                                <i class="ti-layers"></i>
                                <span>الأقسام</span>
                            </a>
                            <ul class="sub-menu">
                                <li>
                                    <a href="categories.html">
                                        <span>قائمة الأقسام</span>
                                    </a>
                                </li>
                                <?php }?>
                                <?php if ($_smarty_tpl->getVariable('group')->value['categories_add']==1){?>
                                <li>
                                    <a href="categories.html?do=add">
                                        <span>إضافة قسم جديد</span>
                                    </a>
                                </li>
                                <?php }?>
                            </ul>
                        </li>
                        <!-- /Categories -->
                    </ul>
					
					<ul class="nav">
                        <!-- Products -->
                       
                           <?php if ($_smarty_tpl->getVariable('group')->value['items_list']==1){?>
                           <li>
                            <a href="javascript:;">
                                <i class="toggle-accordion"></i>
                                <i class="ti-layers"></i>
                                <span>المنتجات</span>
                            </a>
                            <ul class="sub-menu">
                                <li>
                                    <a href="items.html">
                                        <span>قائمة المنتجات</span>
                                    </a>
                                </li>
                                <?php }?>
                                <?php if ($_smarty_tpl->getVariable('group')->value['items_add']==1){?>
                                <li>
                                    <a href="items.html?do=add">
                                        <span>إضافة منتج جديد</span>
                                    </a>
                                </li>
                                <?php }?>
                            </ul>
                        </li>
                        
                           <?php if ($_smarty_tpl->getVariable('group')->value['caketypes_list']==1){?>
                           <li>
                            <a href="javascript:;">
                                <i class="toggle-accordion"></i>
                                <i class="ti-layers"></i>
                                <span>انواع الكيك</span>
                            </a>
                            <ul class="sub-menu">
                                <li>
                                    <a href="caketypes.html">
                                        <span>قائمة الكيك</span>
                                    </a>
                                </li>
                                <?php }?>
                                <?php if ($_smarty_tpl->getVariable('group')->value['caketypes_add']==1){?>
                                <li>
                                    <a href="caketypes.html?do=add">
                                        <span>إضافة كيك جديدة</span>
                                    </a>
                                </li>
                                <?php }?>
                            </ul>
                        </li>
                        <!-- /Products -->
						<!-- offers -->
                           <?php if ($_smarty_tpl->getVariable('group')->value['offers_list']==1){?>
                        <li>
                            <a href="javascript:;">
                                <i class="toggle-accordion"></i>
                                <i class="ti-layers"></i>
                                <span>العروض</span>
                            </a>
                            <ul class="sub-menu">
                                <li>
                                    <a href="offers.html">
                                        <span>قائمة العروض</span>
                                    </a>
                                </li>
                                <?php }?>
                                <?php if ($_smarty_tpl->getVariable('group')->value['offers_add']==1){?>
                                <li>
                                    <a href="offers.html?do=add">
                                        <span>إضافة عرض جديد</span>
                                    </a>
                                </li>
                                <?php }?>
                            </ul>
                        </li>
					</ul>
                        <!-- /offers -->
						<!-- Branches -->
                        <ul class="nav"> 
                        <?php if ($_smarty_tpl->getVariable('group')->value['branches_list']==1){?> 
                        <li>
                            <a href="javascript:;">
                                <i class="toggle-accordion"></i>
                                <i class="ti-layers"></i>
                                <span>الفروع</span>
                            </a>
                            <ul class="sub-menu">
                               
                                <li>
                                    <a href="branches.html">
                                        <span>قائمة الفروع</span>
                                    </a>
                                </li>
                                <?php }?>
                                <?php if ($_smarty_tpl->getVariable('group')->value['branches_add']==1){?>
                                <li>
                                    <a href="branches.html?do=add">
                                        <span>إضافة فرع جديد</span>
                                    </a>
                                </li>
                                <?php }?>
                            </ul>
                        </li>
                        
                    </ul>
                   <?php if ($_smarty_tpl->getVariable('group')->value['logs']==1){?>
                    <ul class="nav"> 
                      
                        <!-- Cards -->

                        <li>
                            <a href="logs.html">
                                <i class="ti-layers"></i>
                                <span>سجلات الدخول </span>
                            </a>
                        </li>

                        
                    </ul>
                    <?php }?>
					<!-- /Branches -->
					<br><br><br><br><br><br>
                    
                </nav>
            </aside>
            <!-- /sidebar menu -->