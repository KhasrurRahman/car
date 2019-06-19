$(function(){
	
	'use strict';

	var Winvar=$(window);
//slick slider

$('.slider_item').slick({
	dots: false,
	infinite: true,
	speed: 800,
	arrows: false,
	nextArrow: ".nxtbtn",
	prevArrow: ".prevbtn",
	autoplay: true,
	autoplaySpeed: 2000,
	slidesToShow: 1,
	slidesToScroll: 1,
	fade:true
});
//slick cars first

$('.all_cars').slick({
	dots: false,
	infinite: true,
	speed: 800,
	arrows: true,
	nextArrow: ".nxtbtn",
	prevArrow: ".prevbtn",
	autoplay: true,
	autoplaySpeed: 2000,
	slidesToShow: 4,
	slidesToScroll: 1,
	responsive: [
		{
			breakpoint: 991,
			settings: {
				slidesToShow: 2,
				slidesToScroll: 1
			}
		},
		{
			breakpoint: 767,
			settings: {
				slidesToShow: 2,
				slidesToScroll: 1
			}
		},
		{
			breakpoint: 479,
			settings: {
				slidesToShow: 1,
				slidesToScroll: 1
			}
		}
	  ]
});
//slick cars second

$('.all_carss').slick({
	dots: false,
	infinite: true,
	speed: 800,
	arrows: true,
	nextArrow: ".nxtbtn1",
	prevArrow: ".prevbtn1",
	autoplay: true,
	autoplaySpeed: 2000,
	slidesToShow: 4,
	slidesToScroll: 1,
	responsive: [
		{
			breakpoint: 991,
			settings: {
				slidesToShow: 2,
				slidesToScroll: 1
			}
		},
		{
			breakpoint: 767,
			settings: {
				slidesToShow: 2,
				slidesToScroll: 1
			}
		},
		{
			breakpoint: 479,
			settings: {
				slidesToShow: 1,
				slidesToScroll: 1
			}
		}
	  ]
});
//slick cars third

$('.all_carsr').slick({
	dots: false,
	infinite: true,
	speed: 800,
	arrows: true,
	nextArrow: ".nxtbtn2",
	prevArrow: ".prevbtn2",
	autoplay: true,
	autoplaySpeed: 2000,
	slidesToShow: 4,
	slidesToScroll: 1,
	responsive: [
		{
			breakpoint: 991,
			settings: {
				slidesToShow: 2,
				slidesToScroll: 1
			}
		},
		{
			breakpoint: 767,
			settings: {
				slidesToShow: 2,
				slidesToScroll: 1
			}
		},
		{
			breakpoint: 479,
			settings: {
				slidesToShow: 1,
				slidesToScroll: 1
			}
		}
	  ]
});
//slick cars e-store

$('.all_Estore').slick({
	dots: false,
	infinite: true,
	speed: 800,
	arrows: true,
	nextArrow: ".nxtbtn5",
	prevArrow: ".prevbtn5",
	autoplay: true,
	autoplaySpeed: 2000,
	slidesToShow: 4,
	slidesToScroll: 1,
	responsive: [
		{
			breakpoint: 991,
			settings: {
				slidesToShow: 2,
				slidesToScroll: 1
			}
		},
		{
			breakpoint: 767,
			settings: {
				slidesToShow: 2,
				slidesToScroll: 1
			}
		},
		{
			breakpoint: 479,
			settings: {
				slidesToShow: 1,
				slidesToScroll: 1
			}
		}
	  ]
});
//slick cars e-store

$('.all_Estore12').slick({
	dots: false,
	infinite: true,
	speed: 800,
	arrows: true,
	nextArrow: ".nxtbtn6",
	prevArrow: ".prevbtn6",
	autoplay: true,
	autoplaySpeed: 2000,
	slidesToShow: 4,
	slidesToScroll: 1,
	responsive: [
		{
			breakpoint: 991,
			settings: {
				slidesToShow: 2,
				slidesToScroll: 1
			}
		},
		{
			breakpoint: 767,
			settings: {
				slidesToShow: 2,
				slidesToScroll: 1
			}
		},
		{
			breakpoint: 479,
			settings: {
				slidesToShow: 1,
				slidesToScroll: 1
			}
		}
	  ]
});
//slick cars e-store

$('.all_Estore13').slick({
	dots: false,
	infinite: true,
	speed: 800,
	arrows: true,
	nextArrow: ".nxtbtn7",
	prevArrow: ".prevbtn7",
	autoplay: true,
	autoplaySpeed: 2000,
	slidesToShow: 4,
	slidesToScroll: 1,
	responsive: [
		{
			breakpoint: 991,
			settings: {
				slidesToShow: 2,
				slidesToScroll: 1
			}
		},
		{
			breakpoint: 767,
			settings: {
				slidesToShow: 2,
				slidesToScroll: 1
			}
		},
		{
			breakpoint: 479,
			settings: {
				slidesToShow: 1,
				slidesToScroll: 1
			}
		}
	  ]
});
//slick partners

$('.partner_slider').slick({
	dots: false,
	infinite: true,
	speed: 800,
	arrows: true,
	nextArrow: ".nxtbtn3",
	prevArrow: ".prevbtn3",
	autoplay: true,
	autoplaySpeed: 2000,
	slidesToShow: 7,
	slidesToScroll: 1,
	responsive: [
		{
			breakpoint: 991,
			settings: {
				slidesToShow: 4,
				slidesToScroll: 1
			}
		},
		{
			breakpoint: 767,
			settings: {
				slidesToShow: 3,
				slidesToScroll: 1
			}
		},
		{
			breakpoint: 479,
			settings: {
				slidesToShow: 2,
				slidesToScroll: 1
			}
		}
	  ]
});
//slick blog

$('.blog_slide').slick({
	dots: false,
	infinite: true,
	speed: 800,
	arrows: true,
	nextArrow: ".nxtbtn4",
	prevArrow: ".prevbtn4",
	autoplay: true,
	autoplaySpeed: 2000,
	slidesToShow: 3,
	slidesToScroll: 1,
	responsive: [
		{
			breakpoint: 991,
			settings: {
				slidesToShow: 2,
				slidesToScroll: 1
			}
		},
		{
			breakpoint: 767,
			settings: {
				slidesToShow: 2,
				slidesToScroll: 1
			}
		},
		{
			breakpoint: 479,
			settings: {
				slidesToShow: 1,
				slidesToScroll: 1
			}
		}
	  ]
});
// Closes responsive menu when a scroll link is clicked start.
    $('.nav-link').on('click', function () {
        $('.navbar-collapse').collapse('hide');
    });
// Closes responsive menu when a scroll link is clicked end.
	
//animation scroll js start
    $('#mynav ul li a').on('click', function () {
        if (location.pathname.replace(/^\//, '') === this.pathname.replace(/^\//, '') && location.hostname === this.hostname) {
            var target = $(this.hash);
            target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
            if (target.length) {
                $('html,body').animate({
                    scrollTop: target.offset().top -90
                }, 1000);
                return false;
            }
        }
	});
//animation scroll js end.

//scrollspy

	$('body').scrollspy({
	target: '#navbar-example',
	offset:200,
	});
	
//scrollspy
	
//scroll top button start.

	Winvar.on('scroll',function(){
		var winscroll = Winvar.scrollTop();
		if(winscroll > 500 ){
			$(".scroll_top").fadeIn(1000);
		}else{
			$(".scroll_top").fadeOut(1000);
		}
	});

	 $(".scroll_top").on('click',function(){
			 $('html, body').animate({
				 scrollTop:0
			 },800)
	});
//scroll top button start.

//top fixed menue
		$(document).ready(function(){
		var a = $(".header_area");
		var pos = a.position();
		$(window).scroll(function(){
			var windowpos = $(window).scrollTop();
			if (windowpos >= pos.top){
				a.addClass("mvw");
			} else {
				a.removeClass("mvw");
			}
		});
	});	
	






	
});