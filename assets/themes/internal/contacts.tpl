          	{if $area_name eq 'list'}
          		<input type="hidden" value="contacts" id="page">
          		<input type="hidden" value="الجهة" id="lang_name">
          		<input type="hidden" value="هل أنت متأكد أنك تود حذف هذا" id="lang_del">
                <input type="hidden" value="هل أنت متأكد أنك تود قراءة هذه" id="lang_status">
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
								<h5> قائمة <b>جهات الإتصال</b></h5>
							</div>
							<div class="panel-body">
								<table class="table table-hover no-m">
									<thead>
										<tr style="text-align: center">
											<th>#</th>
											<th>الإسم</th>
											<th>رقم الهاتف</th>
											<th> البريد الالكترونى </th>
											<th> موضوع الرسالة </th>
											<th>الرسالة</th>
											<th>التوقيت</th>
											<th>قراءة</th>
										</tr>
									</thead>
									<tbody>
										{foreach from=$u item="c"}
											<tr>
												<td><a href="contacts.html?do=view&id={$c.id}">{$c.id}</a></td>
												<td>
													<a href="contacts.html?do=view&id={$c.id}">
													<span style="display:block;width: 200px;overflow:auto; white-space: nowrap;">{$c.name}</span><br/>
													</a>
												</td>
												<td><a href="contacts.html?do=view&id={$c.id}">{$c.mobile}</a></td>
												<td><a href="contacts.html?do=view&id={$c.id}">{$c.email}</a></td>
												<td><a href="contacts.html?do=view&id={$c.id}">{$c.subject}</a></td>
												<td>{$c.message}</td>
												<td dir="ltr" style="text-align: right">{date('Y-m-d  H:i',$c.time)}</td>
												<td id="item_{$c.id}">
												<span id="active_{$c.id}" class="sta_{$c.status}">
													{if $c.status eq 1}
													<a class="badge bg-danger status_active" id="{$c.id}" title="قراءة">لم تقراء</a>
													{else}<a class="badge bg-success" id="{$c.id}"  title="">تم القراءة</a>
													{/if}
												</span>	
												</td>
											</tr>
										{/foreach}
									</tbody>
									<tfoot>
										<tr>
											<td colspan="8" align="right">{$pager}</td>
<!--											<td colspan="1" align="left"><a class="btn btn-success btn-sm pull-left" href="contacts.html?do=add">إضافة جهة جديد</a></td>-->
										</tr>
									</tfoot>
								</table>
							</div>
						</section>
					</div>
				</div>
          	
  
       	{elseif $area_name eq 'view'}
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
						<header class="panel-heading"> جهة الإتصال( # {$u.id} )</header>
						<div class="panel-body">
                          <form class="form-horizontal" role="form" method="post" action="contacts.html?do=update&id={$u.id}">
                           <div class="alert alert-info">
								<span style="width:15%;display:inline-block;vertical-align:top;"><strong> الاسم  : </strong></span>
								<span style="width:80%;display:inline-block;">{$u.name}</span>
							</div>
							 <div class="alert alert-info">
								<span style="width:15%;display:inline-block;vertical-align:top;"><strong> البريد الالكتروى  : </strong></span>
								<span style="width:80%;display:inline-block;">{$u.email}</span>
							</div>
							<div class="alert alert-info">
								<span style="width:15%;display:inline-block;vertical-align:top;"><strong> رقم الهاتف  : </strong></span>
								<span style="width:80%;display:inline-block;">{$u.mobile}</span>
							</div>
							<div class="alert alert-info">
								<span style="width:15%;display:inline-block;vertical-align:top;"><strong>  موضوع الرسالة   : </strong></span>
								<span style="width:80%;display:inline-block;">{$u.subject}</span>
							</div>
							<div class="alert alert-info">
								<span style="width:15%;display:inline-block;vertical-align:top;"><strong> الرسالة   : </strong></span>
								<span style="width:80%;display:inline-block;">{$u.message}</span>
							</div>
							<div class="alert alert-info">
								<span style="width:15%;display:inline-block;vertical-align:top;"><strong> توقيت الرسالة   : </strong></span>
								<span style="width:80%;display:inline-block;">{date('Y-m-d  H:i',$u.time)}</span>
							</div>
							
							
							<div class="form-group" id="item_{$u.id}">
<!--							     <a class="hidden-print btn btn-warning btn-sm" href="contacts.html?do=edit&id={$u.id}">تعديل العرض </a>-->
								<a class="hidden-print btn btn-info btn-sm" href="javascript:window.print();" style="margin-right: 20px">طباعة</a>
<!--								<a class="hidden-print btn btn-danger btn-sm delete" href="contacts.html?do=del&id={$u.id}">حذف هذا العرض</a>-->
							</div>
						</form>
						</div>
					</section>
					</div>
				</div>

{/if}
   <script>
	$("#datetime").datetimepicker({
					step:1
	});
	</script>