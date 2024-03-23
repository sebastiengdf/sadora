(function($) {
	$('.bzsearchproduct form input[type="text"]').attr('placeholder','Search...');
	var headerbg = $('.header-bg').data('header-bg');
	$('#home.bg-inner').css('background','url('+ headerbg +') no-repeat scroll center center / cover');
})(jQuery); 