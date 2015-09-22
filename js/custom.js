
/* *************************************** */ 
/* Scroll to Top */
/* *************************************** */  
	 
$(".scroll-to-top").hide();

$(function(){
	$(window).scroll(function(){
		if ($(this).scrollTop()>300)
		{
			$('.scroll-to-top').fadeIn();
		} 
		else
		{
			$('.scroll-to-top').fadeOut();
		}
	});

	$('.scroll-to-top a').click(function(e) {
		e.preventDefault();
		$('body,html').animate({scrollTop: 0}, 700);
	});
});

$('.offer-tooltip').tooltip();

/* ******************************************** */
/* Style Switcher js */
/* *************************************** */  

$(document).ready(function() {
	$('.style-switcher').styleSwitcher({
		preview:false,
        slidein:false
	});
});

/* *************************************** */ 
/* PrettyPhoto for Recent Post */
/* *************************************** */  

	// Recent Item
	$(".p-item-link").prettyPhoto({
	   overlay_gallery: false, social_tools: false
	});
	
		
/* ******************************************** */
/*  JS for Revolution slider  */
/* ******************************************** */

var slider;

jQuery(document).ready(function() {

	   slider = jQuery('.banner').revolution(
		{
			delay:8000,
			startwidth:1170,
			startheight:450,
			
			hideThumbs:10,
			
			navigationType:"bullet",	
			
			
			hideArrowsOnMobile:"on",
			
			touchenabled:"on",
			onHoverStop:"on",
			
			navOffsetHorizontal:0,
			navOffsetVertical:20,
			
			stopAtSlide:-1,
			stopAfterLoops:-1,

			shadow:0,
			
			fullWidth:"on",
			fullScreen:"off"
		});

});

/* *************************************** */  
/* Way Points JS */
/* *************************************** */  

$(document).ready(function(){
	
	// Hero's Way Points
	$('.hero-logo').waypoint(function(down){
		$(this).addClass('animation');
		$(this).addClass('bounceInDown');
	}, { 
		offset: '70%' 
	});
	
});

/* *************************************** */ 
/* Progress Bar [About Us] JS */
/* *************************************** */  

$('.about-skill-progress .progress-bar').waypoint(function(down) {
	
	if(!$(this).hasClass('progress-stop')){
		
		setTimeout(function(){

			$('.about-skill-progress .progress-bar').each(function() {
				var me = $(this);
				var perc = me.attr("data-end");
				var current_perc = 0;
				var progress = setInterval(function() {

					if (current_perc>=perc) {
						clearInterval(progress);
					} else {
						current_perc +=1;
						me.css('width', (current_perc)+'%');
						me.children('span').html(current_perc+'%');
					}
					
				}, 40);

			});

		},40);  
		
		$(this).addClass('progress-stop');
	}
	
},{ offset: '100%' });

/* *************************************** */ 
/* Slide Animation in Product page */
/* ******************************************** */

$(document).ready(function() {
    $('.product-sidebar .nav').navgoco();
});

/* ******************************************** */