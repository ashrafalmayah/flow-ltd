/*
	ar-scripts.js
	
	License: GNU General Public License v3.0
	License URI: http://www.gnu.org/licenses/gpl-3.0.html
	
	Copyright: (c) 2013 Alexander "Alx" Agnarson, http://alx.media
*/

"use strict";

jQuery(document).ready(function($) {
$(".slick-featured").randomize().slick({
	  centerMode: true,
	  centerPadding: '0',
	  slidesToShow: 1,
	  appendArrows: '.slick-featured-nav',
	  dots: true,
	  rtl: true,
	  responsive: [
		 {
		  breakpoint: 1280,
		  settings: {
			arrows: true,
			centerMode: true,
			centerPadding: '0',
			slidesToShow: 1
		  }
		},
		{
		  breakpoint: 1024,
		  settings: {
			arrows: true,
			centerMode: true,
			centerPadding: '0',
			slidesToShow: 1
		  }
		},
		{
		  breakpoint: 768,
		  settings: {
			arrows: true,
			centerMode: true,
			centerPadding: '0',
			slidesToShow: 1
		  }
		},
		{
		  breakpoint: 480,
		  settings: {
			arrows: true,
			centerMode: true,
			centerPadding: '0',
			slidesToShow: 1
		  }
		}
	  ]
	});
	$('.slick-featured-wrap-outer').show();	

/*  Slick image slide
/* ------------------------------------ */	
	$('.slick-image-slide').each( function() {
        $( this ).slick( {
            dots: false,
			adaptiveHeight: true,
            appendArrows: $(this).parents('.slick-image-slide-wrapper').find('.slick-image-slide-nav'),
			appendDots: $(this).parents('.slick-image-slide-wrapper').find('.slick-image-slide-dots')
        } );
    } );

});