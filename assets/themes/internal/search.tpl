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
                                <h5>نتائج البحث</h5>
							</div>
							<div class="panel-body">
								
                                <table class="table table-hover no-m">
									{if  $groups|| $contacts }
                                    <thead>
										<tr>
											<th>في</th>
											<th>التفاصيل</th>
										</tr>
									</thead>
                                    <tbody>

										{if $groups}{foreach from=$groups item="c"}
										<tr>
											<td>[ المجموعات ]</td>
											<td>
												إسم المجموعة <b><a href="groups.html?do=view&id={$c.id}">{$c.name}</a></b>
											</td>
										</tr>
										{/foreach}{/if}
										
										{if $contacts}{foreach from=$contacts item="c"}
										<tr>
											<td>[جهات الاتصال ]</td>
											<td>
												الاسم  <b><a href="contacts.html?do=view&id={$c.id}">{$c.name}</a></b>
												الهاتف <b><a href="contacts.html?do=view&id={$c.id}">{$c.mobile}</a></b>
												الرسالة <b><a href="contacts.html?do=view&id={$c.id}">{$c.message}</a></b>
											</td>
										</tr>
										{/foreach}{/if}
									</tbody>
                                  
                                    {else}
                                    <tbody>
                                        <tr>
								            <td colspan="6" align="center">{if $err_msg}{$err_msg}{else}لا توجد نتائج {/if}</td>
								        </tr>
                                    </tbody>
									{/if}
								</table>
							</div>
						</section>
					</div>
				</div>
			{if $area_name eq 'list'}
          		{$datum}
          	{/if}