<?php /* Smarty version Smarty-3.0.8, created on 2018-12-27 15:54:57
         compiled from "./assets/themes\sidebar.tpl" */ ?>
<?php /*%%SmartyHeaderCode:13491652145c24e7c1b3bd14-16322142%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e8eb96ce1082519e6dff4cf350ab7aeaddfb060e' => 
    array (
      0 => './assets/themes\\sidebar.tpl',
      1 => 1545922495,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13491652145c24e7c1b3bd14-16322142',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
			<!-- sidebar menu -->
            <aside class="sidebar offscreen-left">
                <!-- main navigation -->
                <nav style="margin-top:15px;" class="main-navigation" data-height="auto" data-size="6px" data-distance="0" data-rail-visible="true" data-wheel-step="10">
				
	     
	     
	     		<ul class="nav">
                        <li>
                            <a href="javascript:;">
                                <i class="toggle-accordion"></i>
                                <i class="ti-layers"></i>
                                <span>  الموظفين </span>
                            </a>
                            <ul class="sub-menu">
                           
                                <li>
                                    <a href="staff.html">
                                        <span>قائمة الموظفين </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="staff.html?do=add">
                                        <span>إضافة موظف جديد</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                   </ul>
		     
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
                                        <span>إضافة مجموعة جديدة </span>
                                    </a>
                                </li>
                             <?php }?>
                            </ul>
                        </li>
                    </ul>

                 
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
                            </ul>
                        </li>
                    </ul>
                    <?php }?>
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
					<br><br><br><br><br><br>
                    
                </nav>
                
            </aside>
            <!-- /sidebar menu -->