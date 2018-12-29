          	{if $area_name eq 'list'}
          		<input type="hidden" value="staff" id="page">
          		<input type="hidden" value="الموظف" id="lang_name">
          		<input type="hidden" value="هل أنت متأكد أنك تود حذف هذا" id="lang_del">
                <input type="hidden" value="هل أنت متأكد من تغير تفعيل هذا" id="lang_status">

                <ol class="breadcrumb">
					<li>
						<a href="index.html"><i class="ti-home ml5"></i>الصفحة الرئيسية</a>
					</li>
					<li class="active">{$title}</li>
				</ol>
                <div class="row mt">
					<div class="col-md-12">
						{if $success}<div class="alert alert-success">{$success}</div>{/if}
						<section class="panel">
							<div class="panel-heading no-b">
								<h5>قائمة <b>الموظفين</b></h5>
							</div>
							<div class="panel-body">
								
								<table class="table table-hover no-m">
									{if $u}
									<thead>
										<tr>
											<th>#</th>
											<th>إسم الموظف</th>
											<th>الحالة </th>
											<th>الإعدادات</th>
										</tr>
									</thead>
									<tbody>
										{foreach from=$u item="c"}
											<tr id="tr_{$c.id}">
												<td>{$c.id}</td>
												<td><a href="staff.html?do=view&id={$c.id}">{$c.name}</a></td>
												<td>
													<span id="active_{$c.id}" class="sta_{$c.status}">
													{if $c.status eq 1}
													<a class="badge bg-success status_deactive" id="{$c.id}"  title="مفعل">مفعل</a>
													{else}<a class="badge bg-danger status_active" id="{$c.id}" title="تفعيل"> معطل </a>
													{/if}
												</span>	
												</td>
												<td id="item_{$c.id}">
													<button class="btn btn-primary btn-xs edit" title="تعديل"><i class="fa fa-pencil"></i></button>
													<button class="btn btn-danger btn-xs delete" title="حذف"><i class="fa fa-trash-o"></i></button>
												</td>
											</tr>
										{/foreach}
									</tbody>
									{else}<tr><td align="center" colspan="4"><b>عفوا لا يوجد موظفين</b></td></tr>{/if}
									<tfoot>
										<tr>
											<td colspan="3" align="right">{$pager}</td>
											<td colspan="1" align="left"><a class="btn btn-success btn-sm pull-left" href="staff.html?do=add">إضافة موظف جديد</a></td>
										</tr>
									</tfoot>
									
								</table>
							</div>
						</section>
					</div>
				</div>
          	{elseif $area_name eq 'edit'}
          		<ol class="breadcrumb">
					<li>
						<a href="index.html"><i class="ti-home ml5"></i>الصفحة الرئيسية</a>
					</li>
					<li class="active">{$title}</li>
				</ol>
				<div class="row">
					<div class="col-lg-12">
					{if $success}
						<div class="alert alert-success">{$success}</div>
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
						<header class="panel-heading"> تعديل موظف ( # {$u.id} )</header>
						<div class="panel-body">
						<form class="form-horizontal" role="form" method="post" action="staff.html?do=update&id={$u.id}">

						<div class="form-group">
								<div class="col-sm-10">
									<input type="text" class="form-control" autocomplete="new-password" name="name" placeholder="يجب إدخال  اسم الموظف" value="{$u.name}">
								</div>
								<label class="col-sm-2 control-label"> إسم الموظف</label>
							</div>

							<div class="form-group">
								<div class="col-sm-10">
									<input type="text" class="form-control" name="email" placeholder=" email@site.com " value="{$u.email}">
								</div>
								<label class="col-sm-2 control-label"> البريد الإلكتروني</label>
							</div>

							<div class="form-group">
								<div class="col-sm-10">
									<input type="password" class="form-control" autocomplete="new-password" name="password" placeholder="كلمة المرور " value="">
									<p class="help-block">اتركها فارغة إذا كنت لا تريد تغيير كلمة المرور.</p>
								</div>
								<label class="col-sm-2 control-label"> كلمة المرور</label>
							</div>
							
							<div class="form-group">
                                <div class="col-sm-10">
                                <select class="form-control" name="group">
										{foreach from=$g item="_g"}
											<option value="{$_g.id}"{if $_g.id eq $u.group}selected="selected"{/if}>{$_g.name}</option>
										{/foreach}
									</select>
							    </div>
								<label class="col-sm-2 control-label">  المجموعة   </label>
							</div> 


							<div class="form-group">
								<div class="col-sm-10">
									<input type="text" class="form-control" name="mobile" placeholder="يجب إدخال  رقم الهاتف" value="{$u.mobile}">
								</div>
								<label class="col-sm-2 control-label"> رقم الهاتف</label>
							</div>
							
							<div class="form-group">
								<div class="col-sm-10">
									<textarea class="form-control" rows="3" name="notes" placeholder="اكتب ملاحظاتك هنا">{$u.notes}</textarea>
								</div>
								<label class="col-sm-2 control-label">الملاحظات</label>
							</div>


							<div class="form-group">
								<div class="col-sm-10">
									<select class="form-control" name="status">
										<option value="0" {if $u.status eq 0}selected="selected"{/if}>غير مفعل</option>
										<option value="1" {if $u.status eq 1}selected="selected"{/if}>مفعل</option>
									</select>
								</div>
								<label class="col-sm-2 control-label"> الحالة</label>
							</div>
							<div class="form-group">
								<div class="col-sm-10"><button type="submit" class="btn btn-default">تحديث البيانات</button></div>
							</div>
						</form>
						</div>
					</section>
					</div>
				</div>
          	{elseif $area_name eq 'view'}
          		<input type="hidden" value="staff" id="page">
          		<input type="hidden" value="الموظف" id="lang_name">
          		<input type="hidden" value="هل أنت متأكد أنك تود حذف هذا" id="lang_del">
          		<ol class="breadcrumb hidden-print">
					<li>
						<a href="index.html"><i class="ti-home ml5"></i>الصفحة الرئيسية</a>
					</li>
					<li class="active">{$title}</li>
				</ol>
				<div class="row">
					<div class="col-lg-12">
					{if $success}
						<div class="alert alert-success">{$success}</div>
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
						<header class="panel-heading"> بيانات الموظف ( # {$u.id} )</header>
						<div class="panel-body">
						<form class="form-horizontal" role="form" method="post" action="staff.html?do=update&id={$u.id}">
							<div class="alert alert-info">
								<span style="width:15%;display:inline-block;vertical-align:top;"><strong>إسم الموظف : </strong></span>
								<span style="width:80%;display:inline-block;">{$u.name}</span>
							</div>
							<div class="alert alert-info">
								<span style="width:15%;display:inline-block;vertical-align:top;"><strong>البريد الإلكتروني : </strong></span>
								<span style="width:80%;display:inline-block;">{$u.email}</span>
							</div>
							<div class="alert alert-info">
								<span style="width:15%;display:inline-block;vertical-align:top;"><strong>رقم الهاتف : </strong></span>
								<span style="width:80%;display:inline-block;">{$u.mobile}</span>
							</div>
							<div class="alert alert-info">
								<span style="width:15%;display:inline-block;vertical-align:top;"><strong>ملاحظات  : </strong></span>
								<span style="width:80%;display:inline-block;">{$u.notes|nl2br}</span>
							</div>
							<div class="alert alert-info">
								<span style="width:15%;display:inline-block;vertical-align:top;"><strong>أخر تسجيل دخول  : </strong></span>
								<span style="width:80%;display:inline-block;">{$u.log_time|full_date_format}</span>
							</div>
							<div class="alert alert-info">
								<span style="width:15%;display:inline-block;vertical-align:top;"><strong>المجموعة : </strong></span>
								<span style="width:80%;display:inline-block;">{getFromTable a=$u.group b="groups" c="getGroupsInformations" d="name"}</span>
							</div>

							<div class="alert alert-info">
								<span style="width:15%;display:inline-block;vertical-align:top;"><strong>الحالة  : </strong></span>
								<span style="width:80%;display:inline-block;">{if $u.status eq 0}غير مفعل{else}مفعل{/if}</span>
							</div>

							<div class="form-group" id="item_{$u.id}">
								<a class="hidden-print btn btn-info btn-sm" href="javascript:window.print();">طباعة</a>
								<a class="hidden-print btn btn-warning btn-sm" href="staff.html?do=edit&id={$u.id}">تعديل الموظف</a>
								<a class="hidden-print btn btn-danger btn-sm delete" href="staff.html?do=del&id={$u.id}">حذف هذا الموظف </a>
							</div>
						</form>
						</div>
					</section>
					</div>
				</div>
          	{elseif $area_name eq 'add'}
				<ol class="breadcrumb">
					<li>
						<a href="index.html"><i class="ti-home ml5"></i>الصفحة الرئيسية</a>
					</li>
					<li class="active">{$title}</li>
				</ol>
				<div class="row">
					<div class="col-lg-12">
					{if $success}
						<div class="alert alert-success">{$success}</div>
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
						<header class="panel-heading"> إضافة موظف جديد </header>
						<div class="panel-body">
						<form class="form-horizontal" role="form" method="post" action="staff.html?do=add">
							<div class="form-group">
								<div class="col-sm-10">
									<input type="text" class="form-control" name="name" placeholder="يجب إدخال اسم الموظف" value="">
								</div>
								<label class="col-sm-2 control-label"> إسم الموظف</label>
							</div>

							<div class="form-group">
								<div class="col-sm-10">
									<input type="text" class="form-control" name="email" placeholder="email@site.com" value="">
								</div>
								<label class="col-sm-2 control-label"> البريد الإلكتروني</label>
							</div>

							<div class="form-group">
								<div class="col-sm-10">
									<input type="password" class="form-control" autocomplete="new-password" name="password" placeholder="يجب إدخال كلمة المرور " value="">
								</div>
								<label class="col-sm-2 control-label"> كلمة المرور</label>
							</div>
							 
							 <div class="form-group">
                                <div class="col-sm-10">
                                <select class="form-control" name="group">
										{foreach from=$g item="_g"}
											<option value="{$_g.id}"{if $_g.id eq $u.group}selected="selected"{/if}>{$_g.name}</option>
										{/foreach}
									</select>
							    </div>
								<label class="col-sm-2 control-label">  المجموعة   </label>
							</div> 


							<div class="form-group">
								<div class="col-sm-10">
									<input type="text" class="form-control" name="mobile" placeholder="يجب إدخال رقم الهاتف" value="">
								</div>
								<label class="col-sm-2 control-label"> رقم الهاتف</label>
							</div>
							<div class="form-group">
								<div class="col-sm-10">
									<textarea class="form-control" rows="3" name="notes" placeholder="اكتب ملاحظاتك هنا"></textarea>
								</div>
								<label class="col-sm-2 control-label">الملاحظات</label>
							</div>

							<div class="form-group">
								<div class="col-sm-10"><button type="submit" class="btn btn-default">إضافة موظف</button></div>
							</div>
						</form>
						</div>
					</section>
					</div>
				</div>
			{/if}