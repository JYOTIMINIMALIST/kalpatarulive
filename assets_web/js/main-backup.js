// var mobile_breakpoint=769;
var mobile_breakpoint=1200;
var base_url = $("#base_url").val();
$(window).resize(function() {
});     
window.addEventListener("orientationchange", function() {
}, false);
jQuery(document).ready(function($) {
}); 
var date = new Date();
var hours = date.getHours();
var minutes = date.getMinutes();
var month = date.getMonth();
var day = date.getDate();
var year = date.getFullYear();
var version = hours+""+minutes+""+day+""+month+""+year;

$(function(){
    // Main menu for desktop
    $('.navbar-toggler').click(function(){
        $('.mainMenu').fadeIn();
    });
    $('.menuCloseBtn').click(function(){
        $('.mainMenu').fadeOut();
    });

    // Menu Animation
    $(".navbar-toggler").click(function(){
        $('.mainMenu').addClass('activeMenu');
    });

    $('.mainMenuAccordionHeader h2').click(function(){
        var banner_id = $(this).attr('id');
        if(banner_id){
          $('.mainMenuRightImg').removeClass('activeImg');
          $("."+banner_id).addClass("activeImg");
        }
    });

    $(".menuCloseBtn").click(function(){
        $('.mainMenu').removeClass('activeMenu');
    });

    //Dropdown for Enquiry
    $('.enquiryNowRoundIco').click(function(){
        $(this).toggleClass('active');
    });

    $(document).on('click touch', function(event) {
        if (!$(event.target).parents().addBack().is('.enquiryNowRoundIco')) { 
            $('.enquiryNowRoundIco').removeClass('active');
        } 
    });

    // Home filter search pop-up
    $('.banner-search-container .round-button').click(function(){
        $('.searchFilterWrapper').slideDown();
    });
    $('.filter_close_button').click(function(){
        $('.searchFilterWrapper').slideUp();
    });


    menu_scroll_check();
    var home_banner_slider = new Swiper('.home-banner .swiper-container', {
        slidesPerView: 1,
        spaceBetween: 0,
        effect: 'fade',
        // simulateTouch: false,
        observer: true,
        observeParents: true,
        observeSlideChildren: true,
        autoplay: {
            delay: 5000,
        },
        navigation: {
            nextEl: '.home-banner .swiper-button-next',
            prevEl: '.home-banner .swiper-button-prev',
        },
        pagination: {
            el: '.home-banner .swiper-pagination',
            type: 'fraction',
            clickable: true,
            // dynamicBullets: true,
            renderFraction: function (currentClass, totalClass) {
              return '<span class="' + currentClass + '"></span>' +
                      '<span class="fraction-divider"></span>' +
                      '<span class="' + totalClass + '"></span>';
            },
        },
        on: {
            init: function () {
                if($(window).width()>mobile_breakpoint){
                    load_home_banner();
                }
            },
            transitionEnd: function () {
                if($(window).width()>mobile_breakpoint){
                    load_home_banner();
                }
            },
        },
        breakpoints: {
            // when window width is <= 1100px
            1100: {
                // effect: 'slide',                
            },
        },
    });
    var home_featured_slider = new Swiper('.home-featured-section .swiper-container', {
        slidesPerView: 2,
        spaceBetween: 0,
        simulateTouch: false,
        observer: true,
        observeParents: true,
        observeSlideChildren: true,
        breakpoints: {
            // when window width is <= 1100px
            1100: {
                slidesPerView: 1, 
                spaceBetween: 10, 
                simulateTouch: true,    
                pagination: {
                    el: '.home-featured-section .swiper-pagination',
                    type: 'fraction',
                    autoplay: {
                        delay: 5000,
                    },
                    clickable: true,
                    // dynamicBullets: true,
                    renderFraction: function (currentClass, totalClass) {
                      return '<span class="' + currentClass + '"></span>' +
                              '<span class="fraction-divider"></span>' +
                              '<span class="' + totalClass + '"></span>';
                    },
                },              
            },
        },
    });

    // Listing page section slider
    /*var home_featured_slider = new Swiper('.listing_top_picks_section .swiper-container', {
        slidesPerView: 2,
        spaceBetween: 0,
        simulateTouch: false,
        observer: true,
        observeParents: true,
        observeSlideChildren: true,
        breakpoints: {
            // when window width is <= 1100px
            1100: {
                slidesPerView: 1, 
                spaceBetween: 10, 
                simulateTouch: true,    
                pagination: {
                    el: '.listing_top_picks_section .swiper-pagination',
                    type: 'fraction',
                    autoplay: {
                        delay: 5000,
                    },
                    clickable: true,
                    // dynamicBullets: true,
                    renderFraction: function (currentClass, totalClass) {
                      return '<span class="' + currentClass + '"></span>' +
                              '<span class="fraction-divider"></span>' +
                              '<span class="' + totalClass + '"></span>';
                    },
                },              
            },
        },
    });*/

    var home_featured_slider = new Swiper('.listing_on_going_section .swiper-container', {
        slidesPerView: 2,
        spaceBetween: 0,
        simulateTouch: false,
        observer: true,
        observeParents: true,
        observeSlideChildren: true,
        breakpoints: {
            // when window width is <= 1100px
            1100: {
                slidesPerView: 1, 
                spaceBetween: 10, 
                simulateTouch: true,    
                pagination: {
                    el: '.listing_on_going_section .swiper-pagination',
                    type: 'fraction',
                    autoplay: {
                        delay: 5000,
                    },
                    clickable: true,
                    // dynamicBullets: true,
                    renderFraction: function (currentClass, totalClass) {
                      return '<span class="' + currentClass + '"></span>' +
                              '<span class="fraction-divider"></span>' +
                              '<span class="' + totalClass + '"></span>';
                    },
                },              
            },
        },
    });

    // Map Section 
    var project_banner_slider = new Swiper('.filter-maps-list-mobile-slider .swiper-container', {
        slidesPerView: 2.5,
        spaceBetween: 0,
        // simulateTouch: false,
       /* autoplay: {
            delay: 5000,
        },*/
        observer: true,
        observeParents: true,
        observeSlideChildren: true,
        /*autoplay: {
            delay: 2000,
        },*/
        /*breakpoints: {
            // when window width is <= 1100px
            1100: {
                slidesPerView: 2.3,              
            },
            // when window width is <= 768px
            768: {
                slidesPerView: 1.3,              
            },
        },*/
    });


    var project_banner_slider = new Swiper('.project-banner .swiper-container', {
        slidesPerView: 1,
        spaceBetween: 0,
        // simulateTouch: false,
        observer: true,
        observeParents: true,
        observeSlideChildren: true,
        /*autoplay: {
            delay: 2000,
        },*/
        pagination: {
            el: '.project-banner .swiper-pagination',
            type: 'fraction',
            clickable: true,
            // dynamicBullets: true,
            renderFraction: function (currentClass, totalClass) {
              return '<span class="' + currentClass + '"></span>' +
                      '<span class="fraction-divider"></span>' +
                      '<span class="' + totalClass + '"></span>';
            },
        },
    });
    var project_inner_menu_slider = new Swiper('.project-details-menu .swiper-container', {
        slidesPerView: 5.2,
        spaceBetween: 0,
        // simulateTouch: false,
        observer: true,
        observeParents: true,
        /*autoplay: {
            delay: 5000,
        },*/
        observeSlideChildren: true,
        /*autoplay: {
            delay: 2000,
        },*/
        breakpoints: {
            // when window width is <= 1100px
            1100: {
                slidesPerView: 4.3,              
            },
            // when window width is <= 768px
            768: {
                slidesPerView: 1.3,              
            },
        },
    });
    var project_inner_overview_slider = new Swiper('.project-inner-overview-slider .swiper-container', {
        slidesPerView: 4,
        spaceBetween: 20,
        simulateTouch: true,
        observer: true,
        observeParents: true,
        observeSlideChildren: true,
        breakpoints: {
            // when window width is <= 1100px
            1100: {
                slidesPerView: 3,    
                simulateTouch: true,          
            },
            // when window width is <= 768px
            768: {
                slidesPerView: 1,              
            },
        },
        pagination: {
            el: '.project-inner-overview-slider .swiper-pagination',
            type: 'fraction',
            clickable: true,
            // dynamicBullets: true,
            renderFraction: function (currentClass, totalClass) {
              return '<span class="' + currentClass + '"></span>' +
                      '<span class="fraction-divider"></span>' +
                      '<span class="' + totalClass + '"></span>';
            },
        },
    });
    // Inner page slider <=1024
    if ($(window).width() <= 1024) {
        var project_inner_amenities_slider = new Swiper('.project-inner-amenities-slider .swiper-container', {
            slidesPerView: 3,    
            spaceBetween: 20,
            slidesPerColumn: 1,       
            pagination: {
                el: '.project-inner-amenities-slider .swiper-pagination',
                type: 'fraction',
                clickable: true,
                // dynamicBullets: true,
                renderFraction: function (currentClass, totalClass) {
                  return '<span class="' + currentClass + '"></span>' +
                          '<span class="fraction-divider"></span>' +
                          '<span class="' + totalClass + '"></span>';
                },
            },
        });
    }

    var project_inner_contruction_update_slider = new Swiper('.project-inner-contruction-update-slider .swiper-container', {
        slidesPerView: 1,
        spaceBetween: 20,
        /*autoplay: {
            delay: 2000,
        },*/
        pagination: {
            el: '.project-inner-contruction-update-slider .swiper-pagination',
            type: 'fraction',
            clickable: true,
            // dynamicBullets: true,
            renderFraction: function (currentClass, totalClass) {
              return '<span class="' + currentClass + '"></span>' +
                      '<span class="fraction-divider"></span>' +
                      '<span class="' + totalClass + '"></span>';
            },
        },
    });
    var project_inner_contruction_update_slider = new Swiper('.project-inner-experiences-slider .swiper-container', {
        slidesPerView: 1,
        spaceBetween: 20,
       /* autoplay: {
            delay: 2000,
        },*/
        pagination: {
            el: '.project-inner-experiences-slider .swiper-pagination',
            type: 'fraction',
            clickable: true,
            // dynamicBullets: true,
            renderFraction: function (currentClass, totalClass) {
              return '<span class="' + currentClass + '"></span>' +
                      '<span class="fraction-divider"></span>' +
                      '<span class="' + totalClass + '"></span>';
            },
        },
    });
    var project_inner_featured_videos_slider = new Swiper('.project-inner-featured-videos-slider .swiper-container', {
        slidesPerView: 2.8,
        spaceBetween: 50,
        loop: true,
       /* autoplay: {
            delay: 2000,
        },*/
        breakpoints: {
            // when window width is <= 1100px
            1100: {
                slidesPerView: 2,    
                spaceBetween: 20,      
            },
            // when window width is <= 768px
            768: {
                slidesPerView: 2,             
            },
            // when window width is <= 480px
            480: {
                slidesPerView: 1,             
            },
        },
        pagination: {
            el: '.project-inner-featured-videos-slider .swiper-pagination',
            type: 'fraction',
            clickable: true,
            // dynamicBullets: true,
            renderFraction: function (currentClass, totalClass) {
              return '<span class="' + currentClass + '"></span>' +
                      '<span class="fraction-divider"></span>' +
                      '<span class="' + totalClass + '"></span>';
            },
        },
    });
    var project_inner_awards_slider = new Swiper('.project-inner-awards-slider .swiper-container', {
        slidesPerView: 3.2,
        spaceBetween: 20,
        loop: true,
        breakpoints: {
            // when window width is <= 1100px
            1100: {
                slidesPerView: 2,    
                simulateTouch: false,          
            },
            // when window width is <= 768px
            768: {
                slidesPerView: 1,              
            },
        },
        pagination: {
            el: '.project-inner-awards-slider .swiper-pagination',
            type: 'fraction',
            clickable: true,
            // dynamicBullets: true,
            renderFraction: function (currentClass, totalClass) {
              return '<span class="' + currentClass + '"></span>' +
                      '<span class="fraction-divider"></span>' +
                      '<span class="' + totalClass + '"></span>';
            },
        },
    });

    var project_inner_experts_slider = new Swiper('.project-inner-kalpataru-way-slider .swiper-container', {
        slidesPerView: 1.6,
        spaceBetween: 90,
        loop: true,
        /*autoplay: {
            delay: 5000,
        },*/
        breakpoints: {
            // when window width is <= 1100px
            1100: {
                slidesPerView: 1,             
                spaceBetween: 20,
            },
            // when window width is <= 768px
            768: {
                slidesPerView: 1,              
            },
        },
        pagination: {
            el: '.project-inner-kalpataru-way-slider .swiper-pagination',
            type: 'fraction',
            clickable: true,
            // dynamicBullets: true,
            renderFraction: function (currentClass, totalClass) {
              return '<span class="' + currentClass + '"></span>' +
                      '<span class="fraction-divider"></span>' +
                      '<span class="' + totalClass + '"></span>';
            },
        },
    });

    var project_inner_experts_slider = new Swiper('.project-inner-experts-slider .swiper-container', {
        slidesPerView: 2,
        spaceBetween: 150,
        loop: true,
        /*autoplay: {
            delay: 2000,
        },*/
        breakpoints: {
            // when window width is <= 1100px
            1100: {
                slidesPerView: 1,             
                spaceBetween: 20,
            },
            // when window width is <= 768px
            768: {
                slidesPerView: 1,              
            },
        },
        pagination: {
            el: '.project-inner-experts-slider .swiper-pagination',
            type: 'fraction',
            clickable: true,
            // dynamicBullets: true,
            renderFraction: function (currentClass, totalClass) {
              return '<span class="' + currentClass + '"></span>' +
                      '<span class="fraction-divider"></span>' +
                      '<span class="' + totalClass + '"></span>';
            },
        },
    });
    var project_inner_you_may_like_slider = new Swiper('.project-inner-you-may-like-slider .swiper-container', {
        slidesPerView: 3,
        spaceBetween: 30,
        simulateTouch: false,
        autoplay: {
            delay: 2000,
        },
        breakpoints: {
            // when window width is <= 1100px
            1100: {
                slidesPerView: 2,    
                simulateTouch: true,          
            },
            // when window width is <= 768px
            768: {
                slidesPerView: 1,              
            },
        },
        pagination: {
            el: '.project-inner-you-may-like-slider .swiper-pagination',
            type: 'fraction',
            clickable: true,
            // dynamicBullets: true,
            renderFraction: function (currentClass, totalClass) {
              return '<span class="' + currentClass + '"></span>' +
                      '<span class="fraction-divider"></span>' +
                      '<span class="' + totalClass + '"></span>';
            },
        },
    });

    // Leadership team slider
    var leadership_team_slider01 = new Swiper('.leadership_team_slider .swiper-container', {
        slidesPerView: 1,
        spaceBetween: 0,
        observer: true,
        simulateTouch: false,  
        /*autoplay: {
            delay: 2000,
        },*/
        observeParents: true,
        observeSlideChildren: true,
        breakpoints: {
            // when window width is <= 768px
            768: {
                slidesPerView: 1, 
                spaceBetween: 10, 
                simulateTouch: true,    
                autoHeight: true, //enable auto height
                pagination: {
                    el: '.leadership_team_slider .swiper-pagination',
                    type: 'fraction',
                    clickable: true,
                    // dynamicBullets: true,
                    renderFraction: function (currentClass, totalClass) {
                      return '<span class="' + currentClass + '"></span>' +
                              '<span class="fraction-divider"></span>' +
                              '<span class="' + totalClass + '"></span>';
                    },
                },              
            },
        },
    });

    // Company ValueBox slider Mobile
    var company_Awards_Slider = new Swiper('.companyValueBoxWrapperMobile .swiper-container', {
        slidesPerView: 1,
        spaceBetween: 0,
        pagination: {
            el: '.companyValueBoxWrapperMobile .swiper-pagination',
            type: 'fraction',
            clickable: true,
            // dynamicBullets: true,
            renderFraction: function (currentClass, totalClass) {
              return '<span class="' + currentClass + '"></span>' +
                      '<span class="fraction-divider"></span>' +
                      '<span class="' + totalClass + '"></span>';
            },
        },
    });

    var company_Awards_Slider = new Swiper('.companyAwardsSlider .swiper-container', {
        slidesPerView: 3,
        spaceBetween: 60,
       /* autoplay: {
            delay: 2000,
        },*/
        breakpoints: {
            // when window width is <= 1100px
            1100: {
                slidesPerView: 2,    
                simulateTouch: true,          
            },
            // when window width is <= 768px
            768: {
                slidesPerView: 1,              
            },
        },
        pagination: {
            el: '.companyAwardsSlider .swiper-pagination',
            type: 'fraction',
            clickable: true,
            // dynamicBullets: true,
            renderFraction: function (currentClass, totalClass) {
              return '<span class="' + currentClass + '"></span>' +
                      '<span class="fraction-divider"></span>' +
                      '<span class="' + totalClass + '"></span>';
            },
        },
    });

    // Company Profile tabs
    var lifeAt_Kalpataru_Tab_Slider = new Swiper('.lifeAtKalpataruTabSlider .swiper-container', {
        slidesPerView: 3,
        spaceBetween: 0,
        breakpoints: {
            768: {
                slidesPerView: 2,
                spaceBetween: 10,
            },
        },
    });

    // Select custom Dropdown
    $(".dropdown-menu li").click(function(){
      var selText = $(this).text();
      $(this).parents('.custom_dropdown_box').find('.selectedValue').html(selText);
    });

    // Creating Icons of Concrete Section slider
    var about_All_Project_Slider = new Swiper('.aboutAllProjectSlider .swiper-container', {
      slidesPerView: 1,
      spaceBetween: 30,
      loop: true,
      pagination: {
        el: '.aboutAllProjectSlider .swiper-pagination',
        clickable: true,
      },
      navigation: {
        nextEl: '.aboutAllProjectSlider .swiper-button-next',
        prevEl: '.aboutAllProjectSlider .swiper-button-prev',
      },
    });

    // Building Landmarks of trust Slider
    var building_Landmarks_Slider = new Swiper('.buildingLandmarksSlider .swiper-container', {
        slidesPerView: 3.8,
        spaceBetween: 50,
        loop: true,
       /* autoplay: {
            delay: 2000,
        },*/
        breakpoints: {
            // when window width is <= 1100px
            1100: {
                slidesPerView:1.7,    
                spaceBetween: 20,      
            },
        },
        pagination: {
            el: '.buildingLandmarksSlider .swiper-pagination',
            type: 'fraction',
            clickable: true,
            // dynamicBullets: true,
            renderFraction: function (currentClass, totalClass) {
              return '<span class="' + currentClass + '"></span>' +
                      '<span class="fraction-divider"></span>' +
                      '<span class="' + totalClass + '"></span>';
            },
        },
    });


     // Building Landmarks of trust Slider
    var building_Landmarks_Slider = new Swiper('.enhancingEverydayLivesSlider .swiper-container', {
        slidesPerView: 1.4,
        spaceBetween: 30,
        loop: true,
       /* autoplay: {
            delay: 2000,
        },*/
        breakpoints: {
            // when window width is <= 1100px
            1100: {
                slidesPerView: 2,    
                spaceBetween: 20,      
            },
            // when window width is <= 768px
            768: {
                slidesPerView: 2, 
                spaceBetween: 10,            
            },
            // when window width is <= 480px
            480: {
                slidesPerView: 1, 
                spaceBetween: 0,   
            },
        },
        pagination: {
            el: '.enhancingEverydayLivesSlider .swiper-pagination',
            type: 'fraction',
            clickable: true,
            // dynamicBullets: true,
            renderFraction: function (currentClass, totalClass) {
              return '<span class="' + currentClass + '"></span>' +
                      '<span class="fraction-divider"></span>' +
                      '<span class="' + totalClass + '"></span>';
            },
        },
    });

     // Our partners slider
    var our_Partners_Slider = new Swiper('.ourPartnersSlider .swiper-container', {
        slidesPerView: 5.5,
        spaceBetween:20,
        // centeredSlides: true,
        loop: true,
       /* autoplay: {
            delay: 2000,
        },*/
        breakpoints: {
            // when window width is <= 1100px
            1100: {
                slidesPerView: 4.4,    
                spaceBetween: 20,      
            },
            768: {
                slidesPerView: 3.3,       
                spaceBetween: 10,          
            },
            480: {
                slidesPerView: 3.3,       
                spaceBetween: 10,          
            },
        },
        pagination: {
            el: '.ourPartnersSlider .swiper-pagination',
            type: 'fraction',
            clickable: true,
            // dynamicBullets: true,
            renderFraction: function (currentClass, totalClass) {
              return '<span class="' + currentClass + '"></span>' +
                      '<span class="fraction-divider"></span>' +
                      '<span class="' + totalClass + '"></span>';
            },
        },
    });

// Empire Description slider with years
    var swiper = new Swiper('.year-slider', {
        loop:true,
        direction: 'vertical',
        slidesPerView: 6,
        centeredSlides:true,
        slideToClickedSlide:true,
        loopedSlides:$(".year-slider .swiper-wrapper .swiper-slide").length,
        // navigation: {
        //   nextEl: '.slider-year-next',
        //   prevEl: '.slider-year-prev',
        // },
         breakpoints: {
          3000: {
            slidesPerView: 7,
            slidesPerGroup: 1,
          },
          1024: {
            slidesPerView: 3,
            slidesPerGroup: 1,
            direction: 'horizontal',
            spaceBetween: 0,
          },
        },
    });

var empire_mobile_Slider = new Swiper('.empireMobileSlider .swiper-container', {
        slidesPerView: 3,
        spaceBetween:10,
        // centeredSlides: true,
        loop: true,
       /* autoplay: {
            delay: 2000,
        },*/
        breakpoints: {
            // when window width is <= 1100px
            /*1100: {
                slidesPerView: 2,    
                spaceBetween: 20,      
            },*/
            // when window width is <= 768px
            /*768: {
                slidesPerView: 2,             
            },*/
            // when window width is <= 480px
            /*480: {
                slidesPerView: 1,             
            },*/
        },
        pagination: {
            el: '.empireMobileSlider .swiper-pagination',
            type: 'fraction',
            clickable: true,
            // dynamicBullets: true,
            renderFraction: function (currentClass, totalClass) {
              return '<span class="' + currentClass + '"></span>' +
                      '<span class="fraction-divider"></span>' +
                      '<span class="' + totalClass + '"></span>';
            },
        },
    });

    // Show all amenities
    $('.show-amenities-btn').click(function(){
        $('.project-inner-amenities-slider .swiper-slide').slideDown(500);
        $(this).parent().fadeOut();
    });

    // Project inner banner animation
    setTimeout(function(){
        $('.project-inner-banner').addClass('activeShutter'); 
    }, 800);


    // Gallery Slider
    var gallery_Slider = new Swiper('.gallerySlider .swiper-container', {
        slidesPerView: 1.8,
        spaceBetween: 90,
        centeredSlides: true,
        loop: true,
       /* autoplay: {
            delay: 2000,
        },*/
        pagination: {
            el: '.gallerySlider .swiper-pagination',
            type: 'fraction',
            clickable: true,
            // dynamicBullets: true,
            renderFraction: function (currentClass, totalClass) {
              return '<span class="' + currentClass + '"></span>' +
                      '<span class="fraction-divider"></span>' +
                      '<span class="' + totalClass + '"></span>';
            },
        },
        on: {
            click: function() {
                brands_selection_container_slider.slideTo(gallery_Slider.clickedIndex);
            },
        },
    });
    
});
function load_home_banner(){
    var /*active_banner_line = CSSRulePlugin.getRule(".home-banner .swiper-slide.swiper-slide-active:before"),*/
        active_banner_slide = (".home-banner .swiper-slide.swiper-slide-active"),
        active_banner_heading = (".home-banner .swiper-slide.swiper-slide-active .home-banner-text .home-banner-project-name>div"),
        active_banner_location = (".home-banner .swiper-slide.swiper-slide-active .home-banner-text .home-banner-project-location"),
        active_banner_description = (".home-banner .swiper-slide.swiper-slide-active .home-banner-text .home-banner-project-description"),
        active_banner_img = (".home-banner .swiper-slide.swiper-slide-active .home-banner-img-bg"),
        non_active_banner_img = (".home-banner .swiper-slide:not(.swiper-slide-active) .home-banner-img-bg"),
        active_banner_button = (".home-banner .swiper-slide.swiper-slide-active .home-banner-project-link-button"),
        active_banner_button = (".home-banner .swiper-slide.swiper-slide-active .home-banner-project-view-all-link-button"),
        active_banner_button_text = (".home-banner .swiper-slide.swiper-slide-active .home-banner-project-link-button>span")
        // ;

    tl = new TimelineLite({});
    // console.log(active_banner_line);
    // TweenMax.set(active_banner_line, {cssRule: {width: 0}});
    $(active_banner_button).removeClass("active_animation");
    $(active_banner_slide).removeClass("active_animation");
    tl
        .fromTo(active_banner_img, 1, {scale: 1.7, rotate: 1, webkitFilter:"blur(5px)"}, {scale: 1, rotate: 0, webkitFilter:"blur(0)"})
        .set(non_active_banner_img, {webkitFilter:"blur(5px)"})
        .fromTo(active_banner_heading, 1, {y: 100, opacity: 0}, {y: 0, opacity: 1})
        // .to(active_banner_line, 1, {cssRule: {width: "100%"}})
        .fromTo(active_banner_location, 1, {y: 10, opacity: 0}, {y: 0, opacity: 1, onComplete: function(){ $(active_banner_slide).addClass('active_animation')}}, "-=0.5")
        .fromTo(active_banner_description, 1, {y: 10, opacity: 0}, {y: 0, opacity: 1, onComplete: add_active_banner_button}, "-=0.5" )
        .staggerFromTo(active_banner_button_text, 1, {y: 10, opacity: 0}, {y: 0, opacity: 1}, "-=0.5" )
        // .fromTo(active_banner_description, 1, {y: 10, opacity: 0}, {y: 0, opacity: 1}, "-=0.5")
        // .setClassToggle(active_banner_button, "+=active_animation")

}
function add_active_banner_button(){
    $('.swiper-slide.swiper-slide-active .home-banner-project-link-button').addClass('active_animation');
    $('.swiper-slide.swiper-slide-active .home-banner-project-view-all-link-button').addClass('active_animation');
}
/*$('.home-featured-list').on('mousemove', function(e){
    $('.project_bg').css({
       left:  e.pageX,
       top:   e.pageY
    });
});*/
var $circle = $('.project_bg');
function moveCircle(e) {
    TweenLite.to($circle, 0.7, {
    css: {
      left: e.pageX,
      top: e.pageY,
      /*left: e.offsetX,
      top: e.offsetY,*/
    }
  });
}
function menu_scroll_check(){
    var scrolled = $(window).scrollTop();
    if (scrolled >= 50) {
        $("body").addClass("page-scrolled");
    } else {
        $("body").removeClass("page-scrolled");
    }    
}
// $('.home-featured-list').hover(function () {
$('.home-featured-list .home-featured-list-item .home-featured-list-item-container .home-featured-list-img-container, .home-featured-list .home-featured-list-item .home-featured-list-item-container .home-featured-list-text-container').hover(function () {
      $('.page-content').addClass('home-featured-hovered');
    },     
    function () {
      $('.page-content').removeClass('home-featured-hovered');
    }
);
/*$('.home-featured-list .home-featured-list-item .home-featured-list-item-container .home-featured-list-img-container').hover(function () {
      $('.page-content').addClass('home-featured-img-hovered');
    },     
    function () {
      $('.page-content').removeClass('home-featured-img-hovered');
    }
);*/
if($('.page-content').hasClass('home')){
    // $('.home-featured-list').on('mousemove', moveCircle);
    $(window).on('mousemove', moveCircle);
}
$(document).ready(function () {
    // Aos Animation
    AOS.init({
        duration: 500,
    });
    /*AOS.init({
    duration: 500,
        disable: function() {
        var maxWidth = 800;
        return window.innerWidth < maxWidth;
      }
    });*/
	Modernizr.addTest('firefox', function () {
	   return !!navigator.userAgent.match(/firefox/i);
	});
    Modernizr.addTest('ios', function () {
        return (Modernizr.ipad || Modernizr.ipod || Modernizr.iphone);
    });
    if (document.documentMode || /Edge/.test(navigator.userAgent)) {
        $('html').addClass('ie-browser');
    }
});
$.validator.methods.email = function(value, element) {
    return this.optional(element) || /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/.test(value);
}
jQuery.validator.addMethod("noSpace", function(value, element) { 
  return value == '' || value.trim().length != 0;  
}, "No space please and don't leave it empty");
jQuery.validator.setDefaults({
    highlight: function(element, errorClass, validClass) {
        // default function
        // console.log(element);
        if (element.type === "radio") {
            this.findByName(element.name).addClass(errorClass).removeClass(validClass);
        } else {
            $(element).addClass(errorClass).removeClass(validClass);
        }
        // custom additions
        element.parents('div.form-group').addClass('has-error');
    },
    unhighlight: function(element, errorClass, validClass) {
        // default function
        if (element.type === "radio") {
            this.findByName(element.name).removeClass(errorClass).addClass(validClass);
        } else {
            $(element).removeClass(errorClass).addClass(validClass);
        }
        // custom additions
        element.parents('div.form-group').removeClass('has-error');
    },
});
$('#get-in-touch-form').validate({
    errorPlacement: function(error, element) {
        return false;
    },
    rules: {
        name: {
            required: true,
            noSpace: true,
        },
        select_option: {
            required: true,
        },
        phone: {
            required: true,
            digits:true,
            maxlength:10,
            minlength:10,
        },
        email: {
            required: true,
            email:true
        },
        message: {
            required: true,
        },
    },
    highlight: function (element, errorClass) {
        $(element).addClass('error');
    },
    unhighlight: function (element, errorClass) {
        $(element).removeClass('error');
    },
    submitHandler: function(form) {
        $("#get-in-touch-form .submit_btn").text("Loading.....");
        $("#get-in-touch-form .submit_btn").attr("disabled", "disabled");
        // var aUrl = "drop_line.php";
        var data = $(form).serialize();
        $.ajax({
            type: 'POST',
            data:data,
            url: aUrl,
            success: function(data) {
                // console.log(data);              
                
            }
        });
    }
});
Number.prototype.numberFormat = function(decimals, dec_point, thousands_sep) {
    dec_point = typeof dec_point !== 'undefined' ? dec_point : '.';
    thousands_sep = typeof thousands_sep !== 'undefined' ? thousands_sep : ',';
    var parts = this.toFixed(decimals).split('.');
    parts[0] = parts[0].replace(/\B(?=(\d{3})+(?!\d))/g, thousands_sep);
    return parts.join(dec_point);
}
$(window).scroll(function(e) {   
    // moveCircle(e);
    menu_scroll_check();
    $('.counter-box').each(function(i) {
        var top_of_object = $(this).position().top + 60;
        var bottom_of_window = $(window).scrollTop() + $(window).height();
        if ($('.counter-box').hasClass('counter-finish')) {} else {
            if (bottom_of_window > top_of_object) {
                $('.counter-box').addClass('counter-finish');
                for (let i = 0; i < $(".count").length; i++) {
                    let counter = {
                        var: 0
                    };
                    let tal = document.getElementsByClassName("count")[i];
                    let tal_end = document.getElementsByClassName("count")[i].getAttribute('counter-value');
                    let tal_decimal = document.getElementsByClassName("count")[i].getAttribute('decimal-place');
                    TweenMax.to(counter, 2, {
                        var: tal_end,
                        onUpdate: function() {
                            let nwc = counter.var.numberFormat(tal_decimal);
                            tal.innerHTML = nwc;
                        },
                        ease: Circ.easeOut
                    });
                }
            }
        }
    });
    if($('.project-details-menu').length){
        var menuHeight = $('.main-menu>.navbar').innerHeight();
        var scrollValue = $(window).scrollTop() + menuHeight;
        var menuscrollTop = $(".project-details-container").offset().top;
        var menuscrollBottom = menuscrollTop + $(".project-details-container").innerHeight();
        // console.log(scrollValue, menuscrollTop, menuscrollBottom);
        if (scrollValue > menuscrollTop && scrollValue < menuscrollBottom) {
            // if (scrollValue < menuscrollBottom) {
                $('.project-details-menu').addClass('affix');
            // }
        } else{
            $('.project-details-menu').removeClass('affix');
        }
        var fromTop = $(this).scrollTop()+topMenuHeight;
        var cur = scrollItems.map(function(){
            if ($(this).offset().top < fromTop)
            return this;
        });
        cur = cur[cur.length-1];
        var id = cur && cur.length ? cur[0].id : "";
        if (lastId !== id) {
            lastId = id;
            menuItems.parent().removeClass("active").end().filter("[href='#"+id+"']").parent().addClass("active");
        } 
    }
    // setTimeout(function() {

    // }, 600);
});
var lastId,
    topMenu = $(".project-details-menu"),
    mainMenuHeight = $('.main-menu>.navbar').innerHeight();
    // topMenuHeight = topMenu.outerHeight() + mainMenuHeight,
    topMenuHeight = topMenu.outerHeight() + 60,
    // All list items
    menuItems = topMenu.find(".menu-item"),
    // Anchors corresponding to menu items
    scrollItems = menuItems.map(function(){
      var item = $($(this).attr("href"));
      if (item.length) { return item; }
    });

// Bind click handler to menu items
// so we can get a fancy scroll animation
menuItems.click(function(e){
  var href = $(this).attr("href"),
      offsetTop = href === "#" ? 0 : $(href).offset().top-topMenuHeight+1;
  $('html, body').stop().animate({ 
      scrollTop: offsetTop
  }, 300);
  e.preventDefault();
});

// var controller = new ScrollMagic.Controller({
//     globalSceneOptions: {
//         // triggerHook: 'onLeave'
//         triggerHook: 'onLeave'
//     }
// });
// var scene = new ScrollMagic.Scene({
//     triggerElement: '.project-details-menu'/*, offset: '-65'*/
// }).setPin('.project-details-menu', {pushFollowers: false}).addTo(controller);


/*$('body').on('click', '.main-menu .navbar-toggler', function (event) {
    // event.stopPropagation();
    $('body').removeClass('cart-visible');
    // $('body').addClass('open-menu');
    $('body').toggleClass('open-menu');
});
const $menu = $('#main-menu2');
// $(document).mouseup(e => {
$(document).bind("mouseup", function(e){
    if (
    !$menu.is(e.target) // if the target of the click isn't the container...
    && $menu.has(e.target).length === 0 // ... nor a descendant of the container
    ){
        // $('body').removeClass('open-menu');
        var clicked_element = $(e.target).parent();
        if($(clicked_element).hasClass('navbar-toggler')){
            // $('body').removeClass('open-menu');
        }else{
            $('body').removeClass('open-menu');
        }
    }
});*/