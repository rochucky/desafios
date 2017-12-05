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

	// Table Item DoubleClick
	$('.table tr').dblclick(function(){
		$(this).children('td').each(function(){
			var name = $(this).attr('name');
			$('#' + name).val($(this).html());
		});
		$('input#id').val($(this).attr('id'));
		$('#edit').fadeIn();
	});
	// New Item Button
	$('#create').click(function(){
		$('#edit input').each(function(){
			$(this).val('');
		});
		$('#edit').fadeIn("fast");
	});


	// Form Cancel Button
	$('#cancel').click(function(){
		customConfirm({
			text: 'Deseja realmente cancelar?',
			functionYes: function(){
				$('#edit').fadeOut("fast");
				n.close();
			}
		});
	});
	



	// Form Save Button
	$('#save').click(function(){
		var fields = {};
		$('#edit input').each(function(){
			fields[$(this).attr('name')] = $(this).val();
		});
		$.ajax({
			url : '../../classes/dbOps.php',
			method : 'POST',
			data : {
				method : 'Save',
				data : {
					fields : fields,
					table : $('#formEdit').attr('data')
				}
			},
			success : function(response){
				var data = JSON.parse(response);
				if(data.response == false){
					new Noty({
					    text: data.message,
					    type: 'error',
					    layout:'center'
					}).show();
				}
				else{
					successAlert({
						text: data.message
					});
				}
				console.log(response);
			},
			error : function(err){
				alert('Falha ao executar ação.\n Contate o Administrador do sistema');
				console.log(err);
			}
		});
		console.log(fields);
	});


});