jQuery(function($){
 	"use strict";
   	jQuery('.main-menu-navigation > ul').superfish({
		delay:       0,
		animation:   {opacity:'show',height:'show'},  
		speed:       'fast'
   	});
});

function advance_automobile_resmenu_open() {
  	window.mobileMenu=true;
	jQuery(".sidebar").addClass('display');
}
function advance_automobile_resmenu_close() {
  	window.mobileMenu=false;
	jQuery(".sidebar").removeClass('display');
}

jQuery(document).ready(function () {

	window.currentfocus=null;
  	advance_automobile_checkfocusdElement();
	var body = document.querySelector('body');
	body.addEventListener('keyup', advance_automobile_check_tab_press);
	var gotoHome = false;
	var gotoClose = false;
	window.mobileMenu=false;
 	function advance_automobile_checkfocusdElement(){
	 	if(window.currentfocus=document.activeElement.className){
		 	window.currentfocus=document.activeElement.className;
	 	}
 	}
	function advance_automobile_check_tab_press(e) {
		"use strict";
		// pick passed event or global event object if passed one is empty
		e = e || event;
		var activeElement;

		if(window.innerWidth < 999){
			if (e.keyCode == 9) {
				if(window.mobileMenu){
					if (!e.shiftKey) {
						if(gotoHome) {
							jQuery( ".main-menu-navigation ul:first li:first a:first-child" ).focus();
						}
					}
					if (jQuery("a.closebtn.mobile-menu").is(":focus")) {
						gotoHome = true;
					} else {
						gotoHome = false;
					}

				}else{

					if(window.currentfocus=="mobiletoggle"){
						jQuery( "" ).focus();
					}
				}
			}
		}
		if (e.shiftKey && e.keyCode == 9) {
			if(window.innerWidth < 999){
				if(window.currentfocus=="header-search"){
					jQuery(".mobiletoggle").focus();
				}else{
					if(window.mobileMenu){
						if(gotoClose){
							jQuery("a.closebtn.mobile-menu").focus();
						}
						if (jQuery( ".main-menu-navigation ul:first li:first a:first-child" ).is(":focus")) {
							gotoClose = true;
						} else {
							gotoClose = false;
					}
				
				}else{

					if(window.mobileMenu){
					}
				}

				}
			}
		}
	 	advance_automobile_checkfocusdElement();
	}

});

(function( $ ) {
	jQuery(document).ready(function() {
		var owl = jQuery('#category .owl-carousel');
			owl.owlCarousel({
				nav: true,
				autoplay:true,
				autoplayTimeout:2000,
				autoplayHoverPause:true,
				loop: true,
				navText : ['<i class="fa fa-lg fa-chevron-left" aria-hidden="true"></i>','<i class="fa fa-lg fa-chevron-right" aria-hidden="true"></i>'],
				responsive: {
				  0: {
				    items: 1
				  },
				  600: {
				    items: 1
				  },
				  1000: {
				    items: 1
				}
			}
		})
	})
})( jQuery );

// scroll
jQuery(document).ready(function () {
	jQuery(window).scroll(function () {
	  if (jQuery(this).scrollTop() > 0) {
	      jQuery('#scroll-top').fadeIn();
	  } else {
	      jQuery('#scroll-top').fadeOut();
	  }
	});
	jQuery(window).on("scroll", function () {
	  document.getElementById("scroll-top").style.display = "block";
	});
	jQuery('#scroll-top').click(function () {
	  jQuery("html, body").animate({
	      scrollTop: 0
	  }, 600);
	  return false;
	});
});

(function( $ ) {

	$(window).scroll(function(){
	  var sticky = $('.sticky-header'),
	      scroll = $(window).scrollTop();

	  if (scroll >= 100) sticky.addClass('fixed-header');
	  else sticky.removeClass('fixed-header');
	});

})( jQuery );

jQuery(function($){
  $(window).load(function() {
    $("#loader-wrapper").delay(1000).fadeOut("slow");
      $("#loader").delay(1000).fadeOut("slow");
  })
});

