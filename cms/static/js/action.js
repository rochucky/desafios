$(document).ready(function(){


	// Menu Transparency
	$(window).scroll(function() {
        if($(this).scrollTop() > 250){
        	$(".navbar").addClass('black');
        }
        else{
        	$(".navbar").removeClass('black');
        }
    });

	// Editing Menu
	$('.table tr').dblclick(function(){
		$(this).children('td').each(function(){
			var name = $(this).attr('name');
			$('#' + name).val($(this).html());
		});
		$('#edit').show();
	});
	$('#cancelEdit').click(function(){
		$('#edit').hide();
	});
	
	$('#create').click(function(){
		$('#new').show();
	});
	$('#cancelNew').click(function(){
		$('#new').hide();
	});

});