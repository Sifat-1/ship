/*  Top Cart */
// function slideEffectAjax() {
//     jQuery(".top-cart-contain").mouseenter(function() {
//         jQuery(this).find(".top-cart-content").stop(true, true).slideDown()
//     }), jQuery(".top-cart-contain").mouseleave(function() {
//         jQuery(this).find(".top-cart-content").stop(true, true).slideUp()
//     })
// }
	
jQuery(document).ready(function() {
        "use strict";
		/* menu */
        // jQuery(".toggle").click(function() {
        //     return jQuery(".submenu").is(":hidden") ? jQuery(".submenu").slideDown("fast") : jQuery(".submenu").slideUp("fast"), !1
        // }), jQuery(".topnav").accordion({
        //     accordion: !1,
        //     speed: 300,
        //     closedSign: "+",
        //     openedSign: "-"
        // }), jQuery("#nav > li").hover(function() {
        //     var e = jQuery(this).find(".level0-wrapper");
        //     e.hide(), e.css("left", "0"), e.stop(true, true).delay(150).fadeIn(300, "easeOutCubic")
        // }, function() {
        //     jQuery(this).find(".level0-wrapper").stop(true, true).delay(300).fadeOut(300, "easeInCubic")
        // });
        // jQuery("#nav li.level0.drop-menu").mouseover(function() {
        //     return jQuery(window).width() >= 740 && jQuery(this).children("ul.level1").fadeIn(100), !1
        // }).mouseleave(function() {
        //     return jQuery(window).width() >= 740 && jQuery(this).children("ul.level1").fadeOut(100), !1
        // }), jQuery("#nav li.level0.drop-menu li").mouseover(function() {
        //     if (jQuery(window).width() >= 740) {
        //         jQuery(this).children("ul").css({
        //             top: 0,
        //             left: "158px"
        //         });
        //         var e = jQuery(this).offset();
        //         e && jQuery(window).width() < e.left + 325 ? (jQuery(this).children("ul").removeClass("right-sub"), jQuery(this).children("ul").addClass("left-sub"), jQuery(this).children("ul").css({
        //             top: 0,
        //             left: "-155px"
        //         })) : (jQuery(this).children("ul").removeClass("left-sub"), jQuery(this).children("ul").addClass("right-sub")), jQuery(this).children("ul").fadeIn(100)
        //     }
        // }).mouseleave(function() {
        //     jQuery(window).width() >= 740 && jQuery(this).children("ul").fadeOut(100)
        // }), 


		/* best-seller-slider */
		jQuery("#best-seller-slider .slider-items").owlCarousel({
            items: 4,
            itemsDesktop: [1024, 4],
            itemsDesktopSmall: [991, 3],
            itemsTablet: [600, 2],
            itemsMobile: [320, 1],
            navigation: !0,
            navigationText: ['<a class="flex-prev"></a>', '<a class="flex-next"></a>'],
            slideSpeed: 500,
            pagination: !1
        }),
		/* featured-slider */
		 jQuery("#featured-slider .slider-items").owlCarousel({
            items: 6,
            itemsDesktop: [1024, 4],
            itemsDesktopSmall: [900, 3],
            itemsTablet: [600, 2],
            itemsMobile: [320, 1],
            navigation: !0,
            navigationText: ['<a class="flex-prev"></a>', '<a class="flex-next"></a>'],
            slideSpeed: 500,
            pagination: !1
        }), 
		/* bag-seller-slider */
		jQuery("#bag-seller-slider .slider-items").owlCarousel({
            items: 3,
            itemsDesktop: [1024, 3],
            itemsDesktopSmall: [900, 3],
            itemsTablet: [600, 2],
            itemsMobile: [320, 1],
            navigation: !0,
            navigationText: ['<a class="flex-prev"></a>', '<a class="flex-next"></a>'],
            slideSpeed: 500,
            pagination: !1
        }), 
		/* shoes-slider */
		jQuery("#shoes-slider .slider-items").owlCarousel({
            items: 3,
            itemsDesktop: [1024, 3],
            itemsDesktopSmall: [900, 3],
            itemsTablet: [600, 2],
            itemsMobile: [320, 1],
            navigation: !0,
            navigationText: ['<a class="flex-prev"></a>', '<a class="flex-next"></a>'],
            slideSpeed: 500,
            pagination: !1
        }), 
		/* recommend-slider */
		jQuery("#recommend-slider .slider-items").owlCarousel({
            items: 6,
            itemsDesktop: [1024, 4],
            itemsDesktopSmall: [900, 3],
            itemsTablet: [600, 2],
            itemsMobile: [320, 1],
            navigation: !0,
            navigationText: ['<a class="flex-prev"></a>', '<a class="flex-next"></a>'],
            slideSpeed: 500,
            pagination: !1
        }),
		/* brand-logo-slider */
		 jQuery("#brand-logo-slider .slider-items").owlCarousel({
            autoplay: !0,
            items: 6,
            itemsDesktop: [1024, 4],
            itemsDesktopSmall: [900, 3],
            itemsTablet: [600, 2],
            itemsMobile: [320, 1],
            navigation: !0,
            navigationText: ['<a class="flex-prev"></a>', '<a class="flex-next"></a>'],
            slideSpeed: 500,
            pagination: !1
        }), 
		/* category-desc-slider */
		jQuery("#category-desc-slider .slider-items").owlCarousel({
            autoplay: !0,
            items: 1,
            itemsDesktop: [1024, 1],
            itemsDesktopSmall: [900, 1],
            itemsTablet: [600, 1],
            itemsMobile: [320, 1],
            navigation: !0,
            navigationText: ['<a class="flex-prev"></a>', '<a class="flex-next"></a>'],
            slideSpeed: 500,
            pagination: !1
        }), 
		/* more-views-slider */
		jQuery("#more-views-slider .slider-items").owlCarousel({
            autoplay: !0,
            items: 3,
            itemsDesktop: [1024, 4],
            itemsDesktopSmall: [900, 3],
            itemsTablet: [600, 2],
            itemsMobile: [320, 1],
            navigation: !0,
            navigationText: ['<a class="flex-prev"></a>', '<a class="flex-next"></a>'],
            slideSpeed: 500,
            pagination: !1
        }), 
		
		/* related-products-slider */
		jQuery("#related-products-slider .slider-items").owlCarousel({
            items: 4,
            itemsDesktop: [1024, 4],
            itemsDesktopSmall: [900, 3],
            itemsTablet: [600, 2],
            itemsMobile: [320, 1],
            navigation: !0,
            navigationText: ['<a class="flex-prev"></a>', '<a class="flex-next"></a>'],
            slideSpeed: 500,
            pagination: !1
        }), 
		/* upsell-products-slider */
		jQuery("#upsell-products-slider .slider-items").owlCarousel({
            items: 4,
            itemsDesktop: [1024, 4],
            itemsDesktopSmall: [991, 3],
            itemsTablet: [600, 2],
            itemsMobile: [320, 1],
            navigation: !0,
            navigationText: ['<a class="flex-prev"></a>', '<a class="flex-next"></a>'],
            slideSpeed: 500,
            pagination: !1
        }), 
		/* more-views-slider */
		jQuery("#more-views-slider .slider-items").owlCarousel({
            autoplay: !0,
            items: 3,
            itemsDesktop: [1024, 4],
            itemsDesktopSmall: [900, 3],
            itemsTablet: [600, 2],
            itemsMobile: [320, 1],
            navigation: !0,
            navigationText: ['<a class="flex-prev"></a>', '<a class="flex-next"></a>'],
            slideSpeed: 500,
            pagination: !1
        }),
/*To top*/		
		//  jQuery(document).ready(function() {
        //     jQuery(".subDropdown")[0] && jQuery(".subDropdown").click(function() {
        //         jQuery(this).toggleClass("plus"), jQuery(this).toggleClass("minus"), jQuery(this).parent().find("ul").slideToggle()
        //     })
        // }), 
        jQuery().UItoTop()
    }), 
(jQuery);