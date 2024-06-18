function goBack() {
  window.history.back()
};
  // Fixed menu
  jQuery("header").waypoint(function () {
    jQuery(".btm-header").toggleClass("navbar-fixed-top animated fadeInDown");
    jQuery(".btm-header.js-toggleClass").toggleClass("js-toggleClass");
    return false;
  }, {offset: '-0.1px'});

  
jQuery(document).ready(function ($) {


    AOS.init();
//Hover Menu Dropdown in Bootstrap
    jQuery('ul.navbar-nav li.dropdown').hover(function () {
        jQuery(this).find('.dropdown-menu').stop(true, true).show();
        jQuery(this).addClass('open');
    }, function () {
        jQuery(this).find('.dropdown-menu').stop(true, true).hide();
        jQuery(this).removeClass('open');
    });
// Scroll to top
    $(window).scroll(function () {
        if ($(this).scrollTop() > 100) {
            $('.scrollup').fadeIn();
        } else {
            $('.scrollup').fadeOut();
        }
    });

    $('.scrollup').click(function () {
        $("html, body").animate({
            scrollTop: 0
        }, 600);
        return false;
    });
    //Add div clearfix after 3 list
    $("ul.services-ul li:nth-child(3n)").after("<div class='clearfix'></div>")
    var swiper = new Swiper(".swiper-popular-courses", {
        slidesPerView: 3, 
        breakpoints: {
            // when window width is >= 320px
            320: {
              slidesPerView: 1,
              spaceBetween: 20
            },
            // when window width is >= 480px
            480: {
              slidesPerView: 1,
              spaceBetween: 30
            },
            // when window width is >= 640px
            1024: {
              slidesPerView: 3,
              spaceBetween: 40
            }
          }
    });


const sliderImages = new Swiper('.slider__images .swiper-container', { 
    autoplay: true,
	direction: 'vertical', 
	slidesPerView: 1, 
	spaceBetween: 32, 
	mousewheel: true,
	navigation: { 
		nextEl: '.slider__next', 
		prevEl: '.slider__prev'
	},
	grabCursor: true, 
	
	breakpoints: { 
		0: {
			direction: 'horizontal', 
		},
		768: { 
			direction: 'vertical', 
		}
	}
});
var swiper2 = new Swiper(".swiper--bottom", {
    spaceBetween: 10,
    slidesPerView: 7,
    loop: true,
    autoplay: {
      delay: 0,
      disableOnInteraction: false,
    },
    speed:2000,
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
    },
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
    breakpoints: {
        // when window width is >= 320px
        320: {
          slidesPerView: 2,
          spaceBetween: 10
        },
        // when window width is >= 480px
        480: {
          slidesPerView: 3,
          spaceBetween: 10
        },
        // when window width is >= 640px
        1024: {
          slidesPerView: 7,
          spaceBetween: 10
        }
      }
  });
  
  
  $('.swiper--bottom .swiper-slide').hover(function(){
    swiper2.autoplay.stop();
  }, function(){
    swiper2.autoplay.start();
  });
  
// Responsive tab for courses
    // http://www.entheosweb.com/tutorials/css/tabs.asp
    $(".dwk_tab_content").hide();
    $(".dwk_tab_content:first").show();

  /* if in tab mode */
    $("ul.dwk_tabs li").click(function() {
		
      $(".dwk_tab_content").hide();
      var activeTab = $(this).attr("rel"); 
      $("#"+activeTab).fadeIn();		
		
      $("ul.dwk_tabs li").removeClass("active");
      $(this).addClass("active");

	  $(".dwk_tab_drawer_heading").removeClass("d_active");
	  $(".dwk_tab_drawer_heading[rel^='"+activeTab+"']").addClass("d_active");
	  
    });
	/* if in drawer mode */
	$(".dwk_tab_drawer_heading").click(function() {
      
      $(".dwk_tab_content").hide();
      var d_activeTab = $(this).attr("rel"); 
      $("#"+d_activeTab).fadeIn();
	  
	  $(".dwk_tab_drawer_heading").removeClass("d_active");
      $(this).addClass("d_active");
	  
	  $("ul.dwk_tabs li").removeClass("active");
	  $("ul.dwk_tabs li[rel^='"+d_activeTab+"']").addClass("active");
    });
	
	
	/* Extra class "tab_last" 
	   to add border to right side
	   of last tab */
	$('ul.dwk_tabs li').last().addClass("tab_last");
	
  document.addEventListener('DOMContentLoaded', function() {
    const sidebar = document.querySelector('.sidebar-widget');
    const offset = sidebar.offsetTop;

    window.addEventListener('scroll', function() {
      if (window.scrollY > offset - 120) { // 60 is the height of the fixed header
        sidebar.classList.add('fixed-sidebar');
      } else {
        sidebar.classList.remove('fixed-sidebar');
      }
    });
  });
});

