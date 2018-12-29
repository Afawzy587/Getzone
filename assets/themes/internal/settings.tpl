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
                                    <header class="panel-heading">الإعدادات الشخصية</header>
                                    <div class="panel-body">
                                        <form class="form-horizontal" role="form" method="post" action="settings.html?do=update">
                                            <div class="form-group">
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control" name="name" placeholder="اكتب إسمك هنا" value="{$u.name}">
                                                </div>
                                                <label class="col-sm-2 control-label">الإسم</label>
                                            </div>

                                            <div class="form-group">
                                                <div class="col-sm-10">
                                                    <input type="password" class="form-control" autocomplete="new-password" id="inputPassword" placeholder="كلمة المرور" name="password">
                                                    <p class="help-block">اتركها فارغة إذا كنت لا تريد تغيير كلمة المرور.</p>
                                                </div>
                                                <label class="col-sm-2 control-label">كلمة المرور</label>
                                            </div>

                                            <div class="form-group">
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control" name="email" placeholder="بريدك الإلكتروني هنا" value="{$u.email}">
                                                </div>
                                                <label class="col-sm-2 control-label">البريد الإلكتروني</label>
                                            </div>

                                            <div class="form-group">
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control" name="mobile" placeholder="رقم هاتفك هنا" value="{$u.mobile}">
                                                </div>
                                                <label class="col-sm-2 control-label">رقم الهاتف</label>
                                            </div>

                                            <div class="form-group">
                                                <div class="col-sm-10">
                                                    <textarea class="form-control" rows="3" name="notes" placeholder="اكتب ملاحظاتك هنا">{$u.notes}</textarea>
                                                </div>
                                                <label class="col-sm-2 control-label">الملاحظات</label>
                                            </div>
                                            <div class="form-group">
                                            <div class="col-sm-10"><button type="submit" class="btn btn-default">تحديث البيانات</button></div>
                                            </div>
                                        </form>
                                    </div>
                                </section>
                            </div>
                        </div>
