// JavaScript for themezinho
(function($) {
$(document).ready(function() {
	"use strict";
	
	// FANCYBOX
		$(".fancybox").fancybox();
	
	// HAMBURGER MENU
		$('.hamburger-menu').on('click', function(e) {
		$("main").toggleClass("side-box-open");
		$("body").toggleClass("overflow-hidden");
		});
		
	// 	CLOSE SIDE BOX
		$('.close-side-box').on('click', function(e) {
		$("main").removeClass("side-box-open");
		$("body").removeClass("overflow-hidden");
		});	
		
	// SEARCH	
		$('.search-btn').on('click', function(e) {
		$(".search-box").toggleClass("search-box-open");
		});
		
	// TOOLTIP
		$('[data-toggle="tooltip"]').tooltip()
	
	// CUSTOM SELECT
		$('.selectpicker').selectpicker();
	
	// DATE PICKER
		$('.datepicker').datepicker()
	
	// MAIN SLIDER
		$('.main-slider').slick({
		  dots: true,
		  infinite: true,
		  speed: 500,
		  arrows:false,
		  fade: true,
		  autoplay: true,
		  cssEase: 'linear'
		});
	
	// CONTENT CAROUSEL
		$('.content-carousel').slick({
		dots: true,
		arrows:false,
		autoplay: true
		});
		
	// COUNTER
		$('.counter').counterUp({
			delay: 10,
		   time: 1000
		});
		$('.numbers').counterUp({
			delay: 1000,
		   time: 60000
		});
		
	// STELLAR PARALLAX
		$.stellar({
			horizontalScrolling: false,
			verticalOffset: 0,
			responsive:true
		});
		
	// TRANSITION OVERLAY
		$('.transition').on('click', function(e) {
      	$('.transition-overlay').toggleClass("open");
	    });
		
	// TRANSITION DELAY
		$('.transition').on('click', function(e) {
    	e.preventDefault();                  
    	var goTo = this.getAttribute("href"); 
		setTimeout(function(){
         window.location = goTo;
    	},500);       
		});
		
	// SOFT TRANSTION
		$('.soft-transition').addClass('hide-me');
		});

	// MASONRY
		var $container = $('.masonry');
		$container.masonry({
		  columnWidth: 0,
		  itemSelector: '.masonry li'
		});
		
		
})(jQuery);