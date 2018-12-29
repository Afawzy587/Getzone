                        <ol class="breadcrumb">
                            <li>
                                <a href="index.html"><i class="ti-home ml5"></i>الصفحة الرئيسية</a>
                            </li>
                            <li class="active">{$title}</li>
                        </ol>
                        <div class="row">
                            <div class="col-lg-12">
                                {if $success}<div class="alert alert-success">{$success}</div>
                                {else}
                                	{if $errors}
                                	<div class="alert alert-danger">
                                        <ul>
                                        {foreach from=$errors item="e" key=k}
                                         <li><strong>{$e}</strong></li>
                                        {/foreach}
                                        </ul>
                                    </div>
                                    {/if}
                                {/if}
                                <section class="panel">
                                    <header class="panel-heading"> اعدادات الرسائل</header>
                                    <div class="panel-body">
                                        <form class="form-horizontal" role="form" method="post" action="setting.html">
                                            <div class="form-group">
												<div class="col-sm-10">
													<select class="form-control" name="allow_sms">
														<option value="0" {if $u.allow_sms eq 0}selected="selected"{/if}>غير مفعلة</option>
														<option value="1" {if $u.allow_sms eq 1}selected="selected"{/if}>مفعلة</option>
													</select>
												</div>
												<label class="col-sm-2 control-label">خدمة الإرسال</label>
											</div>
											<div class="form-group">
                                                <div class="col-sm-10">
                                                    <input type="text" dir="ltr" class="form-control" name="url" placeholder="اكتب رابط الإرسال هنا" value="{$u.url}" />
													<p class="help-block">اكتب رابط الإرسال الذي سيتم إرسال رسائل نصية من خلاله</p>
                                                </div>
                                                <label class="col-sm-2 control-label">رابط الإرسال</label>
                                            </div>
											<div class="form-group">
                                                <div class="col-sm-10">
                                                    <input type="text" dir="ltr" class="form-control" name="sender" placeholder="اكتب إسم الإرسال هنا" value="{$u.sender}" />
													<p class="help-block">اكتب إسم الإرسال الذي سيتم إرسال رسائل نصية به</p>
                                                </div>
                                                <label class="col-sm-2 control-label">إسم الإرسال</label>
                                            </div>
											<div class="form-group">
                                                <div class="col-sm-10">
                                                    <input type="text" dir="ltr" class="form-control" name="employee_numbers" placeholder="اكتب أرقام الموظفين هنا" value="{$u.employee_numbers}" />
													<p class="help-block">اكتب أرقام هواتف الموظفين مفصولة بعلامة الفاصلة</p>
                                                </div>
                                                <label class="col-sm-2 control-label">أرقام الموظفين </label>
                                            </div>
                                            <div class="form-group">
                                                <div class="col-sm-10">
                                                    <textarea class="form-control" rows="3" name="mess_order_cli" placeholder="اكتب الرسالة هنا">{$u.mess_order_cli}</textarea>
                                                	<p class="help-block">اكتب الرسالة التي ستصل للعميل بعد ساعة من تنفيذ الأوردر</p>
												</div>
                                                <label class="col-sm-2 control-label"> الأوردر - للعميل</label>
                                            </div>
                                            <div class="form-group">
                                                <div class="col-sm-10">
                                                    <textarea class="form-control" rows="3" name="mess_cake_cli" placeholder="اكتب الرسالة هنا">{$u.mess_cake_cli}</textarea>
                                                	<p class="help-block">اكتب الرسالة التي ستصل للعميل بعد ساعة من تنفيذ الأوردر</p>
												</div>
                                                <label class="col-sm-2 control-label"> حجز التورت - للعميل</label>
                                            </div>
											<div class="form-group">
                                                <div class="col-sm-10">
                                                    <textarea class="form-control" rows="3" name="mess_offer_cli" placeholder="اكتب الرسالة هنا">{$u.mess_offer_cli}</textarea>
                                                	<p class="help-block">اكتب الرسالة التي ستصل للعميل فور حجز العرض</p>
												</div>
                                                <label class="col-sm-2 control-label"> حجز العروض - للعميل</label>
                                            </div>
											<div class="form-group">
                                                <div class="col-sm-10">
                                                    <textarea class="form-control" rows="3" name="mess_order_emp" placeholder="اكتب الرسالة هنا">{$u.mess_order_emp}</textarea>
                                                	<p class="help-block">اكتب الرسالة التي ستصل للموظف فور طلب الأوردر</p>
												</div>
                                                <label class="col-sm-2 control-label"> الأوردر - للموظف</label>
                                            </div>
                                            <div class="form-group">
                                                <div class="col-sm-10">
                                                    <textarea class="form-control" rows="3" name="mess_cake_emp" placeholder="اكتب الرسالة هنا">{$u.mess_cake_emp}</textarea>
                                                	<p class="help-block">اكتب الرسالة التي ستصل للموظف فور طلب حجز التورت</p>
												</div>
                                                <label class="col-sm-2 control-label"> حجز التورت - للموظف</label>
                                            </div>
											<div class="form-group">
                                                <div class="col-sm-10">
                                                    <textarea class="form-control" rows="3" name="mess_contact_emp" placeholder="اكتب الرسالة هنا">{$u.mess_contact_emp}</textarea>
                                                	<p class="help-block">اكتب الرسالة التي ستصل للموظف فور محاولة الاتصال بإدارة الموقع</p>
												</div>
                                                <label class="col-sm-2 control-label"> اتصل بنا  - للموظف</label>
                                            </div>
											<div class="form-group">
                                                <div class="col-sm-10">
                                                    <textarea class="form-control" rows="3" name="mess_offer_man" placeholder="اكتب الرسالة هنا">{$u.mess_offer_man}</textarea>
                                                	<p class="help-block">اكتب الرسالة التي ستصل لمديري الفروع عند حجز العروض</p>
												</div>
                                                <label class="col-sm-2 control-label"> حجز العروض - م. الفروع</label>
                                            </div>
                                            <div class="form-group">
                                            <div class="col-sm-10"><button type="submit" class="btn btn-default">تحديث البيانات</button></div>
                                            </div>
                                        </form>
                                    </div>
                                </section>
                            </div>
                        </div>
