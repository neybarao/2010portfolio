$(function () {
	$('.workHolder ul').cycle({
		fx: 'fade',
		next: '#next-w',
		prev: '#prev-w',
		pause: 1,
    	timeout: 5000
	});
	
	$('a#contact').fancybox(); 
});
