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

});