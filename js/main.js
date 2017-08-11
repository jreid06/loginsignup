$(document).ready(function(){
	$('.submitBtn').on('click', function(e){
		console.log('clicked');
	})

	setTimeout(function(){
		console.log('i run');
		$('.error_message').fadeOut('slow');
		$('.success_message').fadeOut('slow');

	}, 3000);

})