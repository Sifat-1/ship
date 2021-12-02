/* ===================================================
 * THEME INITIALIZATION SCRIPTS
 * ========================================================== */

	var isMobile = {
	    Android: function() {
			"use strict";
	        return navigator.userAgent.match(/Android/i) ? true : false;
	    },
	    BlackBerry: function() {
			"use strict";
	        return navigator.userAgent.match(/BlackBerry/i) ? true : false;
	    },
	    iOS: function() {
			"use strict";
	        return navigator.userAgent.match(/iPhone|iPad|iPod/i) ? true :
	            false;
	    },
	    Windows: function() {
			"use strict";
	        return navigator.userAgent.match(/IEMobile/i) ? true : false;
	    },
	    any: function() {
			"use strict";
	        return (isMobile.Android() || isMobile.BlackBerry() || isMobile
	            .iOS() || isMobile.Windows());
	    }
	};

	$(function() {
		"use strict";
	    if (!isMobile.any()) {
	        var s = skrollr.init({
	                forceHeight: false
	            }
	            //
	            //	{
	            //    	render: function(data) {
	            //       	 //Log the current scroll position.
	            //        	//console.log(data.curTop);
	            //        	$('#offset').text(data.curTop);
	            //    	}
	            //	}
	        );

	    }
	});

/* ===================================================
 * WOW INIT
 * ========================================================== */

 new WOW().init();


/* ===================================================
 * FANCYBOX
 * ========================================================== */

    jQuery(document).ready(function() {
		"use strict";
        jQuery('.fancybox').fancybox({
           padding: 0,
            openEffect: 'elastic'
        });
    });


/* ===================================================
 * LIBRARY / COMPONENTS / CAROUSELS / HOME INFO CAROUSEL / HOME INFO CAROUSEL
 * ========================================================== */

    jQuery(document).ready(function() {
		"use strict";
        jQuery('#owl-home-info').owlCarousel({
            margin: 0,
            nav: true,
            loop: true,
            autoplay: false,
            autoplayHoverPause: true, // Stops autoplay
            autoplayTimeout: 5000,
            responsive: {
                0: {
                    items: 1
                },
                768: {
                    items: 2
                },
                1200: {
                    items: 4
                }
            }
        });
    });



/* ===================================================
 * LIBRARY / PRO-COMPONENTS / CAROUSELS / CUSTOMERS / CUSTOMERS
 * ========================================================== */

    jQuery(document).ready(function() {
		"use strict";
        jQuery('#owl-customers').owlCarousel({
            margin: 10,
            nav: true,
            loop: true,
            autoplay: true,
            autoplayTimeout: 5000,
            responsive: {
                0: {
                    items: 1
                },
                768: {
                    items: 1
                },
                1200: {
                    items: 1
                }
            }
        });
    });


/* ===================================================
 * LIBRARY / PRO-COMPONENTS / CAROUSELS / LAPTOP / LAPTOP
 * ========================================================== */

    jQuery(document).ready(function() {
		"use strict";
        jQuery('#owl-laptop').owlCarousel({
            margin: 10,
            nav: true,
            loop: true,
            autoplay: true,
            autoplayTimeout: 5000,
            responsive: {
                0: {
                    items: 1
                },
                768: {
                    items: 1
                },
                1200: {
                    items: 1
                }
            }
        });
    });


/* ===================================================
 * LIBRARY / PRO-COMPONENTS / CAROUSELS / LOGOS / LOGOS
 * ========================================================== */

    jQuery(document).ready(function() {
		"use strict";
        jQuery('#owl-logos').owlCarousel({
            margin: 10,
            nav: true,
            loop: true,
            autoplay: true,
            autoplayTimeout: 5000,
            responsive: {
                0: {
                    items: 6
                },
                768: {
                    items: 8
                },
                1200: {
                    items: 9
                }
            }
        });
    });


/* ===================================================
 * LIBRARY / PRO-COMPONENTS / CAROUSELS / PROJECTS / PROJECTS
 * ========================================================== */

    jQuery(document).ready(function() {
		"use strict";
        jQuery('#owl-projects').owlCarousel({
            margin: 10,
            nav: true,
            loop: true,
            autoplay: true,
            autoplayTimeout: 5000,
            responsive: {
                0: {
                    items: 1
                },
                768: {
                    items: 2
                },
                1200: {
                    items: 4
                }
            }
        });
    });


/* ===================================================
 * LIBRARY / PRO-COMPONENTS / CAROUSELS / RELATED / RELATED
 * ========================================================== */

    jQuery(document).ready(function() {
		"use strict";
        jQuery('#owl-related').owlCarousel({
            margin: 10,
            nav: true,
            loop: true,
            autoplay: true,
            autoplayTimeout: 5000,
            responsive: {
                0: {
                    items: 1
                },
                768: {
                    items: 2
                },
                1200: {
                    items: 3
                }
            }
        });
    });

/* ===================================================
 * LIBRARY / PRO-COMPONENTS / CAROUSELS / SERVICES / SERVICES
 * ========================================================== */

     jQuery(document).ready(function() {
		 "use strict";
        jQuery('#owl-services').owlCarousel({
            margin: 10,
            nav: true,
            loop: true,
            autoplay: true,
            autoplayTimeout: 5000,
            responsive: {
                0: {
                    items: 1
                },
                768: {
                    items: 2
                },
                1200: {
                    items: 2
                }
            }
        });
    });

/* ===================================================
 * LIBRARY / PRO-COMPONENTS / CAROUSELS / SINGLE / SINGLE
 * ========================================================== */

     jQuery(document).ready(function() {
		 "use strict";
        jQuery('#owl-single').owlCarousel({
            margin: 10,
            nav: true,
            loop: true,
            autoplay: true,
            autoplayTimeout: 5000,
            responsive: {
                0: {
                    items: 1
                },
                768: {
                    items: 1
                },
                1200: {
                    items: 1
                }
            }
        });
    });

/* ===================================================
 * LIBRARY / PRO-COMPONENTS / CAROUSELS / ABOUT / ABOUT
 * ========================================================== */

     jQuery(document).ready(function() {
		 "use strict";
        jQuery('#owl-about').owlCarousel({
            margin: 10,
            nav: true,
            loop: true,
            autoplay: false,
            autoplayTimeout: 5000,
            responsive: {
                0: {
                    items: 1
                },
                768: {
                    items: 1
                },
                1200: {
                    items: 1
                }
            }
        });
    });
/* ===================================================
 * LIBRARY / PRO-COMPONENTS / CAROUSELS / TEAM / TEAM
 * ========================================================== */

     jQuery(document).ready(function() {
		 "use strict";
        jQuery('#owl-team').owlCarousel({
            margin: 10,
            nav: true,
            loop: true,
            autoplay: true,
            autoplayTimeout: 5000,
            responsive: {
                0: {
                    items: 1
                },
                768: {
                    items: 2
                },
                1200: {
                    items: 4
                }
            }
        });
    });

/* ===================================================
 * LIBRARY / PRO-COMPONENTS / CAROUSELS / BREADCRUMB / BREADCRUMB
 * ========================================================== */

     jQuery(document).ready(function() {
		 "use strict";
        jQuery('#owl-breadcrumb').owlCarousel({
            margin: 10,
            nav: true,
            loop: true,
            autoplay: true,
            autoplayTimeout: 15000,
            responsive: {
                0: {
                    items: 1
                },
                768: {
                    items: 3
                },
                1200: {
                    items: 3
                }
            }
        });
    });

/* ===================================================
 * LIBRARY / PRO-COMPONENTS / CAROUSELS / TESTIMONIALS / TESTIMONIALS
 * ========================================================== */

     jQuery(document).ready(function() {
		 "use strict";
        jQuery('#owl-testimonials').owlCarousel({
            margin: 10,
            nav: true,
            loop: true,
            autoplay: true,
            autoplayTimeout: 5000,
            responsive: {
                0: {
                    items: 1
                },
                768: {
                    items: 1
                },
                1200: {
                    items: 1
                }
            }
        });
    });

/* ===================================================
 * LIBRARY / PRO-COMPONENTS / CAROUSELS / SOCIAL / SOCIAL
 * ========================================================== */

    jQuery(document).ready(function() {
		"use strict";
        jQuery('#social-icon').owlCarousel({
            margin: 10,
            nav: true,
            loop: true,
            autoplay: true,
            autoplayTimeout: 5000,
            responsive: {
                0: {
                    items: 2
                },
                768: {
                    items: 4
                },
                1200: {
                    items: 6
                }
            }
        });
    });

/* ===================================================
 * LIBRARY / PRO-COMPONENTS / COUNTERS / COUNTDOWN / COUNTDOWN
 * ========================================================== */

     jQuery(document).ready(function() {
		 "use strict";
        if (jQuery().countdown) {
            jQuery('#countdown').countdown({
                until: new Date(2017, 12 - 3, 25)
            });
        }
    });


/* ===================================================
 * LIBRARY / PRO-COMPONENTS / THUMB LOADERS / CLIENTS / HISTORY
 * ========================================================== */

      	jQuery(document).ready(function() {
			"use strict";
    	jQuery(".thumb-load").click(function() {
                jQuery(this).children("img").show();
                var t = jQuery(this).children("img");
                setTimeout(function() {
                    t.hide();
                }, 2e3), jQuery(".thumb-hide").delay(2e3).slideDown()
            });
        });

/* ===================================================
 * PRODUCT FEATURED
 * ========================================================== */

    $('#product-featured1').carousel({
        interval: 15000
    });

    $('#product-featured2').carousel({
        interval: 15000
    });

    $('#product-featured3').carousel({
        interval: 15000
    });

/* ===================================================
 * LIBRARY / PRO-COMPONENTS / CAROUSELS / BS-WELCOME / BS-WELCOME
 * ========================================================== */

    $('#bootstrap-slider').carousel({
        interval: 15000
    });

/* ===================================================
 * LIBRARY / PRO-COMPONENTS / CAROUSELS / BS-WELCOME / BS-WELCOME
 * ========================================================== */

    $('#bs-welcome').carousel({
        interval: 15000
    });

/* ===================================================
 * LIBRARY / PRO-COMPONENTS / CAROUSELS / BS-QUOTES / BS-QUOTES
 * ========================================================== */

    $('#bs-quotes').carousel({
        interval: 20000
    });

/* ===================================================
 * LIBRARY / PRO-COMPONENTS / CAROUSELS / BS-TESTIMONIALS / BS-TESTIMONIALS
 * ========================================================== */

    $('#bs-testimonials').carousel({
        interval: 25000
    });

  /* ===================================================
 * LIBRARY / COMPONENTS / CAROUSELS / INDEX-CAROUSEL / INDEX-CAROUSEL
 * ========================================================== */

    $('#index-box-carousel').carousel({
        interval: 30000
    });

/* ===================================================
 * LIBRARY / COMPONENTS / CAROUSELS / TEAM-CAROUSEL / TEAM-CAROUSEL
 * ========================================================== */

    $('#ibc').carousel({
        interval: 30000
    });


 /* ===================================================
 * LIBRARY / SLIDERS / JUMBOTRON-CAROUSEL / JUMBOTRON-CAROUSEL
 * ========================================================== */

    $('#jumbo-carousel').carousel({
        interval: 8000
    });


/* ===================================================
 * LIBRARY / PRO-COMPONENTS / PROGRESSBAR / PROGRESSBAR
 * ========================================================== */
   // jQuery(window).load(function() {
		//"use strict";
       // setTimeout(function() {
           // jQuery('.progress-bar').addClass('stretchRight');
        //}, 2000);
   // });

/* ===================================================
 * YOUTUBEBACKGROUND - index.htm
 * ========================================================== */

    jQuery(function($) {

      jQuery('#background-video').YTPlayer({
        fitToBackground: false,
        videoId: 'QKKUcssY58g',
        pauseOnScroll: true,
		start: 0,
        repeat: false,
        callback: function() {
          var player = jQuery('#background-video').data('ytPlayer').player;
          console.log("callback", player);


        }
      });

});



/* ===================================================
 * MORPHTEXT
 * ========================================================== */
jQuery(".morph-fade").Morphext({
    // The [in] animation type. Refer to Animate.css for a list of available animations.
    animation: "fadeIn",
    // An array of phrases to rotate are created based on this separator. Change it if you wish to separate the phrases differently (e.g. So Simple | Very Doge | Much Wow | Such Cool).
    separator: ",",
    // The delay between the changing of each phrase in milliseconds.
    speed: 4000,
    complete: function () {
        // Called after the entrance animation is executed.
    }
});

/* ===================================================
 * LOADING ANIMATIONS
 * ========================================================== */

jQuery(document).ready(function () {
    //jQuery('.phone').delay(1500).fadeIn(1000);
    //$('.menu-top').fadeIn(2200);
    // OR $('.menu-top').show(2200);
    // OR $('.menu-top').slideDown("slow");
});

jQuery(document).ready(function () {
    //jQuery('.text-links').delay(2000).fadeIn(1000);
    //$('.menu-top').fadeIn(2200);
    // OR $('.menu-top').show(2200);
    // OR $('.menu-top').slideDown("slow");
});
jQuery(document).ready(function () {
    jQuery('.section-top--image').delay(2000).fadeIn(5000);
    //$('.').fadeIn(2200);
    // OR $('.menu-top').show(2200);
    // OR $('.menu-top').slideDown("slow");
});



/* ===================================================
 * PARALLAX SETTINGS
 * ========================================================== */

jQuery(document).ready(function(){

	//.parallax(xPosition, speedFactor, outerHeight) options:
	//xPosition - Horizontal position of the element
	//inertia - speed to move relative to vertical scroll. Example: 0.1 is one tenth the speed of scrolling, 2 is twice the speed of scrolling
	//outerHeight (true/false) - Whether or not jQuery should use it's outerHeight option to determine when a section is in the viewport
	jQuery('.parallax-image-a').parallax("50%", 0.3);
	jQuery('.parallax-image-b').parallax("50%", 0.3);
	jQuery('.parallax-image-c').parallax("50%", 0.3);
	jQuery('.sparallax-image-d').parallax("50%", 0.3);
	jQuery('.parallax-image-e').parallax("50%", 0.3);
	jQuery('.parallax-image-f').parallax("50%", 0.3);
	jQuery('.parallax-image-g').parallax("50%", 0.3);
	jQuery('.parallax-image-h').parallax("50%", 0.3);
	jQuery('.main').parallax("50%", 3.6);
})





