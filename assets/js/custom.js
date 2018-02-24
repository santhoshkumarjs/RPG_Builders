(function ($) {
	//caption hover End
	$(window).scroll(function(){
		if ($(this).scrollTop() > 100) {
			$('.scrollup').fadeIn();
		} else {
			$('.scrollup').fadeOut();
		}
	});
	$('.scrollup').click(function(){
		$("html, body").animate({ scrollTop: 0 }, 1000);
			return false;
	});
})(jQuery);

/* ----------------- Start JS Document ----------------- */
var $ = jQuery.noConflict();
$(function($) {
'use strict';
///////////////////////////////////////////
///////////////// Loading /////////////////
///////////////////////////////////////////
	$(window).load(function () {
		$("#testimonials_slider").show();
		$(".post_slider_media").show();
		$("#loading").delay(1000).fadeOut(500);
		$("#loading-center").click(function() {
			$("#loading").fadeOut(500);
		})
	});
});