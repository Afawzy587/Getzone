          	{if $area_name eq 'list'}
          		<input type="hidden" value="logs" id="page">
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
								<h5>قائمة <b>سجلات الدخول</b></h5>
							</div>
							<div class="panel-body">
								<table class="table table-hover no-m">
									<thead>
										<tr style="text-align: center">
											<th>#</th>
											<th>النوع</th>
											<th>بواسطة</th>
											<th>اسم المستخدم</th>
											<th>التوقيت</th>
										</tr>
									</thead>
									<tbody>
										{foreach from=$u item="c"}
											<tr>
												<td><a href="logs.html?do=view&id={$c.id}">{$c.id}</a></td>
												<td>
													<a href="logs.html?do=view&id={$c.id}" dir="ltr" >{$c.type|getlog_type}<br>
													{$c.message|replacestring}
</a>
												</td>
												<td><a href="logs.html?do=view&id={$c.id}">{$c.who}</a></td>
												<td><a href="logs.html?do=view&id={$c.id}">{$c.user_id|getusername}</a></td>
												<td dir="ltr" style="text-align: right">{date('Y-m-d  H:i',$c.time)}</td>
												
											</tr>
										{/foreach}
									</tbody>
									<tfoot>
										<tr>
											<td colspan="6" align="right">{$pager}</td>
<!--											<td colspan="1" align="left"><a class="btn btn-success btn-sm pull-left" href="logs.html?do=add">إضافة جهة جديد</a></td>-->
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
						<header class="panel-heading">  التفاعل( # {$u.id} )</header>
						<div class="panel-body">
                          <form class="form-horizontal" role="form" method="post" action="logs.html?do=update&id={$u.id}">
                           <div class="alert alert-info">
								<span style="width:15%;display:inline-block;vertical-align:top;"><strong> المستخدم  : </strong></span>
								<span style="width:80%;display:inline-block;">{$u.user_id|getusername}</span>
							</div>
							<div class="alert alert-info">
								<span style="width:15%;display:inline-block;vertical-align:top;"><strong>المجموعة: </strong></span>
								<span style="width:80%;display:inline-block;">{$u.who}</span>
							</div>
							<div class="alert alert-info">
								<span style="width:15%;display:inline-block;vertical-align:top;"><strong> نوع التفاعل: </strong></span>
								<span style="width:80%;display:inline-block;">{$u.type|getlog_type}</span>
							</div>
							<div class="alert alert-info">
								<span style="width:15%;display:inline-block;vertical-align:top;"><strong> توقيت التفاعل   : </strong></span>
								<span style="width:80%;display:inline-block;">{date('Y-m-d  H:i',$u.time)}</span>
							</div>
							<div class="alert alert-info">
								<span style="width:15%;display:inline-block;vertical-align:top;"><strong> الرسالة  : </strong></span>
								<span style="width:80%;display:inline-block;">{$u.message}</span>
							</div>
							
							
							<div class="form-group" id="item_{$u.id}">
<!--							     <a class="hidden-print btn btn-warning btn-sm" href="logs.html?do=edit&id={$u.id}">تعديل العرض </a>-->
								<a class="hidden-print btn btn-info btn-sm" href="javascript:window.print();">طباعة</a>
<!--								<a class="hidden-print btn btn-danger btn-sm delete" href="logs.html?do=del&id={$u.id}">حذف هذا العرض</a>-->
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