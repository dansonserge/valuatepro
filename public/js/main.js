jQuery(function($) {
	
	//Initiat WOW JS
	new WOW().init();
	//smoothScroll
	smoothScroll.init();
	
	// Progress Bar
	$('#about-us').bind('inview', function(event, visible, visiblePartX, visiblePartY) {
		if (visible) {
			$.each($('div.progress-bar'),function(){
				$(this).css('width', $(this).attr('aria-valuetransitiongoal')+'%');
			});
			$(this).unbind('inview');
		}
	});

	//Countdown
	$('#features').bind('inview', function(event, visible, visiblePartX, visiblePartY) {
		if (visible) {
			$(this).find('.timer').each(function () {
				var $this = $(this);
				$({ Counter: 0 }).animate({ Counter: $this.text() }, {
					duration: 2000,
					easing: 'swing',
					step: function () {
						$this.text(Math.ceil(this.Counter));
					}
				});
			});
			$(this).unbind('inview');
		}
	});
	
	$('.cert_login').click(function(e){
		e.preventDefault();

		$('#login_cert_modal').modal();

	});


	$('.valuer_login').click(function(e){
		e.preventDefault();

		$('#login_valuer_modal').modal();

	});
	$('.cert_register').click(function(e){
		e.preventDefault();

		$('#register_cert_modal').modal();

	});
	$('.valuer_register').click(function(e){
		e.preventDefault();

		$('#register_valuer_modal').modal();

	});
    




});

