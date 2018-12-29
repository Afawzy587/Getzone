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
                           {if $group.groups_list eq 1 }
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
                             {/if}
                             {if $group.groups_add eq 1 }  
                                <li>
                                    <a href="groups.html?do=add">
                                        <span>إضافة مجموعة جديدة </span>
                                    </a>
                                </li>
                             {/if}
                            </ul>
                        </li>
                    </ul>

                 
                    {if $group.contacts_list eq 1 }
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
                    {/if}
                    {if $group.logs eq 1 }
                    <ul class="nav"> 
                      
                        <!-- Cards -->

                        <li>
                            <a href="logs.html">
                                <i class="ti-layers"></i>
                                <span>سجلات الدخول </span>
                            </a>
                        </li>

                        
                    </ul>
                    {/if}
					<br><br><br><br><br><br>
                    
                </nav>
                
            </aside>
            <!-- /sidebar menu -->