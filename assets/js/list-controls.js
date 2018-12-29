$(document).ready(function(){
	
		$('th').wrapInner('<span title=" ترتيب "/>').each(function (col) {
							
							$(this).hover(
									function () {
										$(this).addClass('focus');
									},
									function () {
										$(this).removeClass('focus');
									}
							);
							$(this).click(function () {
								if ($(this).is('.asc')) {
									$(this).removeClass('asc');
									$(this).addClass('desc selected');
									sortOrder = -1;
								} else {
									$(this).addClass('asc selected');
									$(this).removeClass('desc');
									sortOrder = 1;
								}
								$(this).siblings().removeClass('asc selected');
								$(this).siblings().removeClass('desc selected');
								var arrData = $('table').find('tbody >tr:has(td)').get();
								arrData.sort(function (a, b) {
									var val1 = $(a).children('td').eq(col).text().toUpperCase().replace("*","");
									var val2 = $(b).children('td').eq(col).text().toUpperCase().replace("*","");
									
									
									if ($.isNumeric(val1) && $.isNumeric(val2))
										return sortOrder == 1 ? val1 - val2 : val2 - val1;
									else
										return (val1 < val2) ? -sortOrder : (val1 > val2) ? sortOrder : 0;
								});
								$.each(arrData, function (index, row) {
									$('tbody').append(row);
								});
							});
						});
	
	
    $('button.approveTestImport').click(function(e){
        e.preventDefault();
        page=$('#page').val();
		
		id = $(this).parent().attr('id').replace("item_","");
        
		if (confirm($('#lang_approve').val()+" "+$('#lang_name').val()+" ؟ "))
		{
			window.location= 'imports.html?do=approve&id='+id;
		}
	});
	

		$('a.status_active').click(function(e){
        e.preventDefault();
		page=$('#page').val();
	    id     = $(this).parent('span').attr('id').replace("active_","");
		status = $(this).parent('span').attr('class').replace("sta_","");
		if (confirm($('#lang_status').val()+" "+$('#lang_name').val()+" ؟ "))
		{
			jQuery.ajax( {
				async :true,
				type :"POST",
				url :page+".php?do=status",
				data:  "id=" + id + "&status="+ status,
				success : function(data) {
				if(data == 1190)
				{
					setTimeout(location.reload(), 1000);
					$("a.status_active").attr("title","تم التفعيل");
					$("a.status_active#"+id+"").attr("class","badge bg-success");
							   

				}else if(data == 111)
				{
					alert("we can't Active default items.");
				}
				},
				error : function() {
					return true;
				}
			});
		}
	});
	
	
	$('a.status_deactive').click(function(e){
        e.preventDefault();
		page=$('#page').val();
	    id     = $(this).parent('span').attr('id').replace("active_","");
		status = $(this).parent('span').attr('class').replace("sta_","");
		if (confirm($('#lang_status').val()+" "+$('#lang_name').val()+" ؟ "))
		{
			jQuery.ajax( {
				async :true,
				type :"POST",
				url :page+".php?do=status",
				data:  "id=" + id + "&status="+ status,
				success : function(data) {
				if(data == 1190)
				{
					setTimeout(location.reload(), 1000);
					$("a.status_deactive").attr("title"," غير مفعل");
					$("a.status_deactive#"+id+"").attr("class","badge bg-danger");
				}else if(data == 111)
				{
					alert("we can't Active default items.");
				}
				},
				error : function() {
					return true;
				}
			});
		}
	});
    




	
	
    $('button.deleteTestImport').click(function(e){
        e.preventDefault();
        page=$('#page').val();
		
		id = $(this).parent().attr('id').replace("item_","");
        
		if (confirm($('#lang_del').val()+" "+$('#lang_name').val()+" ؟ "))
		{
			jQuery.ajax( {
				async :true,
				type :"POST",
				url :page+".php?do=delete",
				data: "id=" + id + "",
				success : function(data) {
				if(data == 116)
				{
					setTimeout(redirectNow, 1000);
				}else if(data == 111)
				{
					alert("we can't delete default items.");
				}
				},
				error : function() {
					return true;
				}
			});
		}
	});
    

    

    
	$('button.delete').click(function(e){
        e.preventDefault();
		page=$('#page').val();
		id = $(this).parent('td').attr('id').replace("item_","");
		if (confirm($('#lang_del').val()+" "+$('#lang_name').val()+" ؟ "))
		{
			jQuery.ajax( {
				async :true,
				type :"POST",
				url :page+".php?do=delete",
				data: "id=" + id + "",
				success : function(data) {
				if(data == 116)
				{
					$("#tr_" + id).fadeTo(400, 0, function () { $("#tr_" + id).slideUp(400);});
				}else if(data == 111)
				{
					alert("we can't delete default items.");
				}
				},
				error : function() {
					return true;
				}
			});
		}
	});
    
    $( "input[type=checkbox]").on( "click", function() {
        var moh = $('input#boat_sys[type=checkbox]').is(':checked');
        if(moh == true)
        {
            $("div#boat_to_hide").css("display","none");
        }else
        {
            $("div#boat_to_hide").css("display","block");
        }
    });
	
	$( "input[type=radio]").on( "click", function() {
        var moh = $('input.invoice_type[type=radio]').is(':checked');
        if(moh == true)
        {
			valieeno = $('input.invoice_type[type=radio]:checked').val();
            if(valieeno == 2)
			{
				$("div#supplier_to_hide").css("display","none");
				$("div#client_to_hide").css("display","block");
				$("b#_credit_").text("");
				$("div#credit_to_hide").css("display","none");
				$("input#credit").val("");
			}else if(valieeno == 1)
			{
				$("div#supplier_to_hide").css("display","block");
				$("div#client_to_hide").css("display","none");
				$("b#_credit_").text("");
				$("div#credit_to_hide").css("display","none");
				$("input#credit").val("");
			}
        }
    });


	$('button.edit').click(function(e){
        e.preventDefault();
		page=$('#page').val();
		id = $(this).parent('td').attr('id').replace("item_","");
		window.location = page+".html?do=edit&id=" + id;
	});
    $('button.testImportedit').click(function(e){
        e.preventDefault();
		page=$('#page').val();
		id = $(this).parent('td').attr('id').replace("item_","");
		window.location = page+".html?do=test&id=" + id;
	});

	$('button.view').click(function(e){
        e.preventDefault();
		page=$('#page').val();
		id = $(this).parent('td').attr('id').replace("item_","");
		window.location = page+".html?do=view&id=" + id;
	});

	function redirectNow()
	{
		window.location= page+'.html';
	}

	$('a.delete').click(function(e){
        e.preventDefault();
		page=$('#page').val();

		id = $(this).parent('div').attr('id').replace("item_","");
		if (confirm($('#lang_del').val()+" "+$('#lang_name').val().toLowerCase()+" ؟ "))
		{
			jQuery.ajax( {
				async :true,
				type :"POST",
				url :page+".html?do=delete",
				data: "id=" + id + "",
				success : function(data) {
				if(data == 116)
				{
			        setTimeout(redirectNow, 1000);
			        return false;
				}
			},
			error : function() {
					return true;
				}
			});
		}
	});

});