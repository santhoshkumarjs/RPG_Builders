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