          	{if $area_name eq 'list'}
          		<input type="hidden" value="groups" id="page">
          		<input type="hidden" value="المجموعة" id="lang_name">
          		<input type="hidden" value="هل أنت متأكد أنك تود حذف هذه" id="lang_del">
                <input type="hidden" value="هل أنت متأكد من تغير تفعيل هذه" id="lang_status">
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
								<h5> قائمة<b> المجموعات  </b></h5>
							</div>
							<div class="panel-body">
								<table class="table table-hover no-m">
									<thead>
										<tr>
											<th>#</th>
											<th>إسم</th>
											<th>الحالة</th>
											<th>الإعدادات</th>
										</tr>
									</thead>
									<tbody>
										{foreach from=$u item="c"}
											<tr id="tr_{$c.id}">
												<td><a href="groups.html?do=view&id={$c.id}">{$c.id}</a> </td>
												<td><a href="groups.html?do=view&id={$c.id}">{$c.name}</a> </td>
												<td>
													<span id="active_{$c.id}" class="sta_{$c.status}">
													{if $c.status eq 1}
													<a class="badge bg-success status_deactive" id="{$c.id}"  title="مفعلة">مفعلة</a>
													{else}<a class="badge bg-danger status_active" id="{$c.id}" title="تفعيل"> معطلة </a>
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
									<tfoot>
										<tr>
											<td colspan="3" align="right">{$pager}</td>
											<td colspan="1" align="left"><a class="btn btn-success btn-sm pull-left" href="groups.html?do=add">إضافة مجموعة جديدة</a></td>
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
						<header class="panel-heading"> تعديل المجموعة ( # {$u.id} )</header>
						<div class="panel-body">
						<form class="form-horizontal" role="form" method="post" action="groups.html?do=update&id={$u.id}" enctype="multipart/form-data">
							<div class="form-group">
								<div class="col-sm-10">
									<input type="text" class="form-control" name="name" placeholder="إسم المجموع هنا" value="{if $n.name neq ""}{$n.name}{else}{$u.name}{/if}">
								</div>
								<label class="col-sm-2 control-label">إسم المجموعة</label>
							</div>
							<div class="form-group">
								<div class="col-sm-10">
									<select class="form-control" name="status">
										<option value="0" {if $u.status eq 0}selected="selected"{/if}>غير مفعلة</option>
										<option value="1" {if $u.status eq 1}selected="selected"{/if}>مفعلة</option>
									</select>
								</div>
								<label class="col-sm-2 control-label">  حالة المجموعة    </label>
							</div>
							<div class="form-group">
								<div class="col-sm-1" >
									<input id="groups_active"  name="groups_active" type="checkbox" value="1" {if $u.groups_active eq 1}checked="checked" value="1"{/if}/>
								    <label for="groups_active">   التحكم فى التفعيل   </label>
								</div>
								<div class="col-sm-1" >
									<input id="groups_edit"  name="groups_edit" type="checkbox" value="1" {if $u.groups_edit eq 1}checked="checked" value="1"{/if}/>
								    <label for="groups_edit">   التحكم فى التعديل   </label>
								</div>
								<div class="col-sm-2" >
									<input id="groups_add"  name="groups_add" type="checkbox" value="1" {if $u.groups_add eq 1}checked="checked" value="1"{/if}/>
								    <label for="groups_add">   التحكم فى الاضافة   </label>
								</div>
								<div class="col-sm-2" >
									<input id="groups_delete"  name="groups_delete" type="checkbox" value="1" {if $u.groups_delete eq 1}checked="checked" value="1"{/if}/>
								    <label for="groups_delete">   التحكم فى الحذف   </label>
								</div>
								<div class="col-sm-2" >
									<input id="groups_view"  name="groups_view" type="checkbox" value="1" {if $u.groups_view eq 1}checked="checked" value="1"{/if}/>
								    <label for="groups_view">   رؤية المحتوى   </label>
								</div>
								<div class="col-sm-2" >
									<input id="groups_list" name="groups_list" type="checkbox" value="1" {if $u.groups_list eq 1}checked="checked" value="1"{/if}/>
									<label for="groups_list">   رؤية القائمة   </label>
								</div>
								<label class="col-sm-2 control-label"> المجموعات    </label>
							 </div>
							
							 
							
						

							   <div class="form-group">
								<div class="col-sm-8" >
									<input id="contacts_view"  name="contacts_view" type="checkbox" value="1" {if $u.contacts_view eq 1}checked="checked" value="1"{/if}/>
								    <label for="contacts_active">      رؤية المحتوى   </label>
								</div>
								<div class="col-sm-2" >
									<input id="contacts_list" name="contacts_list" type="checkbox" value="1" {if $u.contacts_list eq 1}checked="checked" value="1"{/if}/>
									<label for="contacts_list">   رؤية القائمة   </label>
								</div>
								<label class="col-sm-2 control-label">   جهات  الاتصال   </label>
							 </div>
							
							 

							  <div class="form-group">
							   <div class="col-sm-8" >
									<input id="logs_view"  name="logs_view" type="checkbox" value="1" {if $u.logs_view eq 1}checked="checked" value="1"{/if}/>
								    <label for="logs_view">   رؤية السجل   </label>
								</div>
								<div class="col-sm-2" >
									<input id="logs" name="logs" type="checkbox" value="1" {if $u.logs eq 1}checked="checked" value="1"{/if}/>
									<label for="logs">    رؤية القائمة  </label>
								</div>
								<label class="col-sm-2 control-label"> سجلات الدخول </label>
							 </div>
							 
							 
							 
							 <div class="form-group">
								<div class="col-sm-10" >
									<input id="search" name="search" type="checkbox" value="1" {if $u.search eq 1}checked="checked" value="1"{/if}/>
									<label for="search">    امكانية استخدام البحث   </label>
								</div>
								<label class="col-sm-2 control-label">      البحث    </label>
							 </div>
							 <div class="form-group">
								<div class="col-sm-10" >
									<input id="settings" name="settings" type="checkbox" value="1" {if $u.settings eq 1}checked="checked" value="1"{/if}/>
									<label for="settings">    امكانية التعديل    </label>
								</div>
								<label class="col-sm-2 control-label">      التعديل على البيانات الشخصية </label>
							 </div>
							 
							 

							<div class="form-group">
								<div class="col-sm-10"><button type="submit" class="btn btn-default">تحديث البيانات</button></div>
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
						<header class="panel-heading"> إضافة مجموعة جديد</header>
						<div class="panel-body">
						<form class="form-horizontal" role="form" method="post" action="groups.html?do=add" enctype="multipart/form-data">
                          <div class="form-group">
								<div class="col-sm-10">
									<input type="text" class="form-control" name="name" placeholder="إسم المجموع هنا">
								</div>
								<label class="col-sm-2 control-label">إسم المجموعة</label>
							</div>

							<div class="form-group">
								<div class="col-sm-10"><button type="submit" class="btn btn-default">إضافة مجموعة</button></div>
							</div>
						</form>
						</div>
					</section>
					</div>
				</div>
				{elseif $area_name eq 'view'}
          		<input type="hidden" value="groups" id="page">
          		<input type="hidden" value="المجموعة" id="lang_name">
          		<input type="hidden" value="هل أنت متأكد أنك تود حذف هذه" id="lang_del">
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
						<header class="panel-heading">بيانات المجموعة ( # {$u.id} )</header>
						<div class="panel-body">
						<form class="form-horizontal" role="form" method="post" action="groups.html?do=update&id={$u.id}">
							<div class="alert alert-info">
								<span style="width:10%;display:inline-block;vertical-align:top;"><strong>الإسم : </strong></span>
								<span style="width:80%;display:inline-block;">{$u.name}</span>
							</div>
							<div class="alert alert-info">
								<span style="width:10%;display:inline-block;vertical-align:top;"><strong>حالة القسم : </strong></span>
								<span style="width:80%;display:inline-block;">{if $u.status eq 0}غير مفعلة{else}مفعلة{/if}</span>
							</div>
							<div class="alert alert-info">
								<span style="width:10%;display:inline-block;vertical-align:top;"><strong> المجموعات : </strong></span>
								<span style="width:14%;display:inline-block;">{if $u.groups_list eq 0}<i class="fa fa-close" style="font-size:18px;color:red" dir="ltr">   رؤية القائمة   </i> {else}<i class="fa fa-check" style="font-size:18px" dir="ltr" > رؤية القائمة</i>{/if}</span>
								<span style="width:14%;display:inline-block;">{if $u.groups_view eq 0}<i class="fa fa-close" style="font-size:18px;color:red" dir="ltr">   رؤية المحتوى</i>{else}<i class="fa fa-check" style="font-size:18px" dir="ltr" > رؤية المحتوى</i>{/if}</span>
								<span style="width:14%;display:inline-block;">{if $u.groups_add eq 0}<i class="fa fa-close" style="font-size:18px;color:red" dir="ltr">   التحكم فى الاضافة</i>{else}<i class="fa fa-check" style="font-size:18px" dir="ltr" > التحكم فى الاضافة</i>{/if}</span>
								<span style="width:14%;display:inline-block;">{if $u.groups_edit eq 0}<i class="fa fa-close" style="font-size:18px;color:red" dir="ltr">   التحكم فى الحذف</i>{else}<i class="fa fa-check" style="font-size:18px" dir="ltr" > التحكم فى الحذف</i>{/if}</span>
								<span style="width:15%;display:inline-block;">{if $u.groups_delete eq 0}<i class="fa fa-close" style="font-size:18px;color:red" dir="ltr">   التحكم فى التعديل</i> {else}<i class="fa fa-check" style="font-size:18px" dir="ltr" > التحكم فى التعديل</i>{/if}</span>
								<span style="width:15%;display:inline-block;">{if $u.groups_active eq 0}<i class="fa fa-close" style="font-size:18px;color:red" dir="ltr">   التحكم فى التغعيل</i>{else}<i class="fa fa-check" style="font-size:18px" dir="ltr" > التحكم فى التفعيل</i>{/if}</span>
							</div>
							
							
							
							<div class="alert alert-info">
								<span style="width:20%;display:inline-block;vertical-align:top;"><strong>  جهات الاتصال  : </strong></span>
								<span style="width:35%;display:inline-block;">{if $u.contacts_list eq 0}<i class="fa fa-close" style="font-size:18px;color:red" dir="ltr">   رؤية القائمة   </i> {else}<i class="fa fa-check" style="font-size:18px" dir="ltr" > رؤية القائمة</i>{/if}</span>
								<span style="width:35%;display:inline-block;">{if $u.contacts_view eq 0}<i class="fa fa-close" style="font-size:18px;color:red" dir="ltr">   رؤية المحتوى </i>{else}<i class="fa fa-check" style="font-size:18px" dir="ltr" > رؤية المحتوى </i>{/if}</span>
							</div>
							
<!--
							<div class="alert alert-info">
								<span style="width:25%;display:inline-block;vertical-align:top;"><strong>   رؤية الصفحة الرئيسية  : </strong></span>
								<span style="width:35%;display:inline-block;">{if $u.index eq 0}<i class="fa fa-close" style="font-size:18px;color:red" dir="ltr">  رؤية الصفحة   </i>{else}<i class="fa fa-check" style="font-size:18px" dir="ltr" > رؤية الصفحة </i>{/if}</span>
								<span style="width:35%;display:inline-block;">{if $u.controller eq 0}<i class="fa fa-close" style="font-size:18px;color:red" dir="ltr">التحكم فى الشاشات</i>{else}<i class="fa fa-check" style="font-size:18px" dir="ltr" > التحكم فى الشاشات </i>{/if}</span>
							</div>
-->
							<div class="alert alert-info">
								<span style="width:25%;display:inline-block;vertical-align:top;"><strong>   سجلات الدخول  : </strong></span>
								<span style="width:35%;display:inline-block;">{if $u.logs eq 0}<i class="fa fa-close" style="font-size:18px;color:red" dir="ltr">  رؤية القائمة   </i>{else}<i class="fa fa-check" style="font-size:18px" dir="ltr" > رؤية الصفحة </i>{/if}</span>
								<span style="width:35%;display:inline-block;">{if $u.logs_view eq 0}<i class="fa fa-close" style="font-size:18px;color:red" dir="ltr">رؤية المحتوى</i>{else}<i class="fa fa-check" style="font-size:18px" dir="ltr" > رؤية المحتوى </i>{/if}</span>
							</div>
							
							<div class="alert alert-info">
								<span style="width:20%;display:inline-block;vertical-align:top;"><strong>   البحث  : </strong></span>
								<span style="width:75%;display:inline-block;">{if $u.search eq 0}<i class="fa fa-close" style="font-size:18px;color:red" dir="ltr">   يمكن استخدام البحث   </i>{else}<i class="fa fa-check"style="font-size:18px"  dir="ltr">  يمكن استخدام البحث  </i>{/if}</span>
							</div>
							<div class="alert alert-info">
								<span style="width:25%;display:inline-block;vertical-align:top;"><strong>   التعديل على البيانات  : </strong></span>
								<span style="width:70%;display:inline-block;">{if $u.settings eq 0}<i class="fa fa-close" style="font-size:18px;color:red" dir="ltr">يمكن التعديل       </i>{else}<i class="fa fa-check" style="font-size:18px" dir="ltr"> يمكن التعديل </i>{/if}</span>
							</div>
							

							<div class="form-group" id="item_{$u.id}">
								<a class="hidden-print btn btn-info btn-sm" href="javascript:window.print();" style="margin-right: 20px">طباعة</a>
								<a class="hidden-print btn btn-warning btn-sm" href="groups.html?do=edit&id={$u.id}">تعديل المجموعة </a>
								<a class="hidden-print btn btn-danger btn-sm delete" href="groups.html?do=del&id={$u.id}">حذف هذه المجموعة</a>
							</div>
						</form>
						</div>
					</section>
					</div>
				</div>
			{/if}