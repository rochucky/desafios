$(document).ready(function(){

	$('#login').click(function(){
		$.ajax({
			method: 'POST',
			url: '../classes/dbOps.php',
			data: {
				method: 'Login',
				data: {
					username: $('#inputEmail').val(),
					password: $('#inputPass').val()
				}
			},
			success: function(response){
				console.log(response);
				data = JSON.parse(response);
				if (data.response == false){
					new Noty({
					    text: data.message,
					    type: 'error',
					    layout:'center'
					}).show();
				}else {
					location.reload();
				}
			},
			error: function(err){
				alert('Error');
			}
		})
	});

});