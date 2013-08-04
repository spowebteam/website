$(document).ready(function() {
	
	$('.ex_menu').hide();
	
	$('.active-acc-ul').show();
	
	$('.star').click(function(){
		$('.active-acc').removeClass('active-acc');
		$('.active-acc-ul').slideUp();
		$('.active-acc-ul').removeClass('active-acc-ul');
		$(this).siblings('.ex_menu').addClass('active-acc-ul');		
		$(this).siblings('.ex_menu').slideDown();
	
	});
	
	
	
});