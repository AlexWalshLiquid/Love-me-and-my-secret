/*! Customized Jquery from Mahesh Vaghani.  mahesh@templatemela.com  : www.templatemela.com
Authors & copyright (c) 2013: TemplateMela - Megnor Computer Private Limited. */
// Megnor Start
"use strict";

function menuFix() {
	if (jQuery(window).width() > 999) {
		jQuery(window).scroll(function () {
			if (jQuery(this).scrollTop() > 170) {
				jQuery('.site-header .navigation-block, .style-2 .site-header-main').addClass("fix-nav");
				
			} else {
				jQuery('.site-header .navigation-block, .style-2 .site-header-main').removeClass("fix-nav");
				
			}
		});
	}
}
jQuery(document).ready(function() { menuFix();});
jQuery(window).resize(function() { menuFix();});

function isotopAutoSet() {
    var e = jQuery.noConflict();
    e(function() {
        "use strict";
        var t = e("#container .masonry");
        e("#container .masonry").css("display", "block");
        e("#container .loading").css("display", "none");
        t.isotope({})
    });
    var t = jQuery.noConflict();
    t(function() {
        "use strict";
        var e = t("#box_filter");
        t("#container #box_filter").css("display", "block");
        t("#container .loading").css("display", "none");
        e.isotope({});
        var n = t("#blog_filter_options .option-set"),
            r = n.find("a");
        r.click(function() {
            var n = t(this);
            if (n.hasClass("selected")) {
                return false
            }
            var r = n.parents(".option-set");
            r.find(".selected").removeClass("selected");
            n.addClass("selected");
            var i = {},
                s = r.attr("data-option-key"),
                o = n.attr("data-option-value");
            o = o === "false" ? false : o;
            i[s] = o;
            if (s === "layoutMode" && typeof changeLayoutMode === "function") {
                changeLayoutMode(n, i)
            } else {
                e.isotope(i)
            }
            return false
        })
    });
	
	//jQuery('.woocommerce .products').jscroll();
	
    var n = jQuery.noConflict();
    n(function() {
        "use strict";
        var e = n("#portfolio_filter");
        t("#portfolio_filter").css("display", "block");
        t(".loading").css("display", "none");
        e.isotope({});
        var r = n("#portfolio_filter_options .option-set"),
            i = r.find("a");
        i.click(function() {
            var t = n(this);
            if (t.hasClass("selected")) {
                return false
            }
            var r = t.parents(".option-set");
            r.find(".selected").removeClass("selected");
            t.addClass("selected");
            var i = {},
                s = r.attr("data-option-key"),
                o = t.attr("data-option-value");
            o = o === "false" ? false : o;
            i[s] = o;
            if (s === "layoutMode" && typeof changeLayoutMode === "function") {
                changeLayoutMode(t, i)
            } else {
                e.isotope(i)
            }
            return false
        })
    })
}
jQuery(document).ready(function() {
    "use strict";
    function t() {
        "use strict";
        var e;
        if (jQuery(window).width() >= 979) {
            e = "hover";
            jQuery(".mega-menu .mega").dcMegaMenu({
                rowItems: 4,
                speed: "fast",
                effect: "slide",
                event: e,
                fullWidth: false,
                mbarIcon: true
            })
        }
    }
    if (jQuery(window).width() < 1000){
			jQuery('.mega-menu .mega').attr('id', 'menu-menu');
	}else {
		jQuery('.mega-menu .mega > ul').addClass('mega');
		jQuery('.mega-menu .mega > ul').attr('id', 'menu-menu');
	}
	jQuery("#secondary .widget_pages ul").addClass("treeview-list");
	jQuery(".tagcloud,.widget_text .textwidget").addClass("main-ul");
    jQuery("#calendar_wrap").addClass("main-ul");
	jQuery(".primary-sidebar .widget select").addClass("main-ul");
	jQuery(".widget_shopping_cart .widget_shopping_cart_content").addClass("main-ul");
	jQuery(".res-icon").click(function() {
        jQuery(".topbar-social").slideToggle("slow");
    });
	jQuery(".postform").addClass("main-ul");
	jQuery(".woocommerce-product-search").addClass("main-ul");
    jQuery(".price_slider_wrapper").addClass("main-ul");
    jQuery("#primary-sidebar #searchform").addClass("main-ul");
    Shadowbox.init({
        overlayOpacity: .8
    }, setupDemos);
    jQuery("br", ".liststyle_content").remove();
    jQuery('input[type="checkbox"]').tmMark();
    jQuery('input[type="radio"]').tmMark();
    jQuery("select.orderby").customSelect();
    jQuery("ul li:empty").remove();
    jQuery("br", ".brand_block").remove();
    jQuery("br", ".pricing-content-inner").remove();
    jQuery("br", "#vertical_tab .tabs").remove();
    jQuery(".site-main .primary-sidebar .widget ul").addClass("main-ul");
    jQuery(".tagcloud").addClass("main-ul");
    jQuery("p").each(function() {
        var e = jQuery(this);
        if (e.html().replace(/\s|&nbsp;/g, "").length == 0) e.remove()
    });
    var e = jQuery.noConflict();
    e(".nav-button").click(function() {
        e(".nav-button, .primary-nav").toggleClass("open")
    });
    jQuery(window).resize(t);
    jQuery(t);
    jQuery(".woocommerce-breadcrumb").appendTo(jQuery(".main_inner .page-title .page-title-inner"));
    jQuery(".gridlist-toggle").prependTo(jQuery("#primary #content"));
    jQuery(".woocommerce-result-count").wrap(" <div class='category-toolbar'> </div>");
	jQuery(".products > h2, .cross-sells > h2").wrap(" <div class='shortcode-title center'> </div>");
	jQuery(".products .product-category").wrapInner(" <div class='container-inner'> </div>");
    jQuery(".woocommerce-ordering").appendTo(".category-toolbar");
	jQuery(".format-video .desc").appendTo(".format-video .entry-content-other");
    jQuery(".gridlist-toggle").prependTo(".category-toolbar");
	jQuery('h1.widget-title').parent().addClass('toggled-off');	
    jQuery(".accordion.style5 .single_accordion").each(function(e) {
        jQuery(this).addClass("accord-" + (e + 1))
    });
	
	jQuery("ul.products li .container-inner").find(".star-rating").each(function(i){
	   jQuery(this).prependTo(jQuery(this).parent().parent().find(".rating-block"));
 	 });
	
	jQuery("ul.products li .container-inner").find("div[itemprop='description']").each(function(i){
	   jQuery(this).prependTo(jQuery(this).parent().parent().find(".product-block-hover"));
 	 });
	
	
	
    jQuery(".quantity.buttons_added").find("input.input-text").attr({
        type: "text"
    });
    jQuery(".nav-menu:first > li").each(function(e) {
        jQuery(this).addClass("main-li")
    });

    jQuery("#woo-small-products p img").each(function(e) {
        jQuery(this).wrap("<div class='image-block'> </div>");
    });
	
	jQuery(".primary-sidebar .widget .widget-title,.content-sidebar .widget .widget-title").each(function(e) {
        jQuery(this).wrap("<div class='title-outer'> </div>");
    });
	
	jQuery(".sub-container .inner-image").each(function(e) {
        jQuery(this).addClass("image-" + (e + 1))
    });
    (function($) {
        "use strict";
        jQuery("#horizontalTab").easyResponsiveTabs({
            type: "default",
            width: "auto",
            fit: true,
            closed: "accordion",
            activate: function(e) {
                var t = jQuery(this);
                var n = jQuery("#tabInfo");
                var r = jQuery("span", n);
                r.text(t.text());
                n.show()
            }
        })
    })(jQuery);
    (function($) {
        "use strict";
        jQuery("#categorytab").easyResponsiveTabs({
            type: "default",
            width: "auto",
            fit: true,
            closed: "accordion",
            activate: function(e) {
                var t = jQuery(this);
                var n = jQuery("#tabInfo");
                var r = jQuery("span", n);
                r.text(t.text());
                n.show()
            }
        })
     })(jQuery);
    (function(e) {
        "use strict";
        var t;
        var n = false;
        var r = e("#to_top");
        var i = e(window);
        var s = e(document.body).children(0).position().top;
        e("#to_top").click(function(t) {
            t.preventDefault();
            e("html, body").animate({
                scrollTop: 0
            }, "slow")
        });
        i.scroll(function() {
            window.clearTimeout(t);
            t = window.setTimeout(function() {
                if (i.scrollTop() <= s) {
                    n = false;
                    r.fadeOut(500)
                } else if (n == false) {
                    n = true;
                    r.stop(true, true).show().click(function() {
                        r.fadeOut(500)
                    })
                }
            }, 100)
        })
    })(jQuery);
    (function(e) {
        "use strict";
        e(".toogle_div a.tog").click(function(t) {
            var n = e(this).parent().find(".tab_content");
            e(this).parent().find(".tab_content").not(n).slideUp();
            if (e(this).hasClass("current")) {
                e(this).removeClass("current")
            } else {
                e(this).addClass("current")
            }
            n.stop(false, true).slideToggle().css({
                display: "block"
            });
            t.preventDefault()
        })
    })(jQuery);
    (function(e) {
        "use strict";
        var t = e(".accordion .tab_content").hide();
        e(".accordion a").click(function() {
            t.slideUp();
            e(this).parent().next().slideDown();
            return false
        })
    })(jQuery);
    (function(e) {
        "use strict";
        e(".togg div.tog").click(function(t) {
            var n = e(this).parent().find(".tab_content");
            e(this).parent().find(".tab_content").not(n).slideUp();
            if (e(this).hasClass("current")) {
                e(this).removeClass("current")
            } else {
                e(this).addClass("current")
            }
            n.stop(false, true).slideToggle().css({
                display: "block"
            });
            t.preventDefault()
        })
    })(jQuery);
    (function(e) {
        "use strict";
        e(".accordion a.tog").click(function(t) {
            var n = e(this).parent().find(".tab_content");
            e(this).parent().parent().find(".tab_content").not(n).slideUp();
            if (e(this).hasClass("current")) {
                e(this).removeClass("current")
            } else {
                e(this).parent().parent().find(".tog").removeClass("current");
                e(this).addClass("current");
                n.stop(false, true).slideToggle().css({
                    display: "block"
                })
            }
            t.preventDefault()
        })
    })(jQuery);
    (function(e) {
        "use strict";
        e(".accordion.style5 .accord-1 a.tog").addClass("current");
        e(".accordion.style5 .accord-1 a.tog").parent().find(".tab_content").stop(false, true).slideToggle().css({
            display: "block"
        });
        e(".accordion.style5 .accord-1 a.tog").click(function(t) {
            var n = e(this).parent().find(".tab_content");
            e(this).parent().parent().find(".tab_content").not(n).slideUp();
            if (e(this).hasClass("current")) {
                e(this).removeClass("current");
                e(".accordion.style5 .accord-1 a.tog").removeClass("current")
            } else {
                e(this).parent().parent().find(".tog").removeClass("current");
                e(this).addClass("current");
                n.stop(false, true).slideToggle().css({
                    display: "block"
                })
            }
            t.preventDefault()
        })
    })(jQuery);
    (function(e) {
        "use strict";
        e(".tab ul.tabs li:first-child a").addClass("current");
        e(".tab .tab_groupcontent div.tabs_tab").hide();
        e(".tab .tab_groupcontent div.tabs_tab:first-child").css("display", "block");
        e(".tab ul.tabs li a").click(function(t) {
            var n = e(this).parent().parent().parent(),
                r = e(this).parent().index();
            n.find("ul.tabs").find("a").removeClass("current");
            e(this).addClass("current");
            n.find(".tab_groupcontent").find("div.tabs_tab").not("div.tabs_tab:eq(" + r + ")").slideUp();
            n.find(".tab_groupcontent").find("div.tabs_tab:eq(" + r + ")").slideDown();
            t.preventDefault()
        })
    })(jQuery);
    (function(e) {
        "use strict";
        e(".animated").each(function() {
            e(this).one("inview", function(t, n) {
                var r = "";
                var i = e(this),
                    s = i.data("animated") !== undefined ? i.data("animated") : "slideUp";
                r = i.data("delay") !== undefined ? i.data("delay") : 300;
                if (n === true) {
                    setTimeout(function() {
                        i.addClass(s);
                        i.css("opacity", 1)
                    }, r)
                } else {
                    setTimeout(function() {
                        i.removeClass(s);
                        i.css("opacity", 0)
                    }, r)
                }
            })
        })
    })(jQuery);
    (function(e) {
        "use strict";
        e(".active_progresbar > span").each(function() {
            e(this).data("origWidth", e(this).width()).width(0).animate({
                width: e(this).data("origWidth")
            }, 1200)
        })
    })(jQuery);
    jQuery("#commentform textarea").addClass("required");
    jQuery("#commentform").validate();
    jQuery("#shortcode_contactform").validate();
    var n = jQuery.noConflict();
		var $owl_carousel=jQuery.noConflict();	
    jQuery(".portfolio-carousel").each(function() {
        if (n(this).attr("id")) {
            var e = n(this).attr("id").replace("_portfolio_carousel", "");
            n(".portfolio-carousel").addClass("owl-carousel");
            n(".portfolio-carousel").owlCarousel({
                navigation: true,
                pagination: false,
                items: e,
                itemsDesktop: [1199, 3],
                itemsDesktopSmall: [979, 2],
                itemsTablet: [767, 2],
                itemsMobile: [479, 1]
            })
        }
    });
    jQuery(".latest-news-carousel").each(function() {
        if (n(this).attr("id")) {
            var e = n(this).attr("id").replace("_latest_news_carousel", "");
            n(".latest-news-carousel").addClass("owl-carousel");
            n(".latest-news-carousel").owlCarousel({
                navigation: true,
                pagination: false,
                items: e,
                itemsDesktop: [1199, e],
                itemsDesktopSmall: [979, 1],
                itemsTablet: [767, 1],
                itemsMobile: [479, 1]
            })
        }
    });
	jQuery(".blog-carousel").each(function() {
        if (n(this).attr("id")) {
            var e = n(this).attr("id").replace("_blog_carousel", "");
            n(".blog-carousel").addClass("owl-carousel");
            n(".blog-carousel").owlCarousel({
                navigation: true,
                pagination: false,
                items: e,
                itemsDesktop: [1199, e],
                itemsDesktopSmall: [979, 2],
                itemsTablet: [767, 2],
                itemsMobile: [479, 1]
            })
        }
    });
	jQuery(".sidebar-blog-carousel").each(function() {
        if (n(this).attr("id")) {
            var e = n(this).attr("id").replace("_sidebar_blog_carousel", "");
            n(".sidebar-blog-carousel").addClass("owl-carousel");
            n(".sidebar-blog-carousel").owlCarousel({
                navigation: true,
                pagination: false,
                items: e,
                itemsDesktop: [1199, e],
                itemsDesktopSmall: [979, 1],
                itemsTablet: [767, 2],
                itemsMobile: [479, 1]
            })
        }
    });
    jQuery(".cat-carousel").each(function() {
        if (n(this).attr("id")) {
            var e = n(this).attr("id").replace("_cat_carousel", "");
            n(".cat-carousel").addClass("owl-carousel");
            n(".cat-carousel").owlCarousel({
                navigation: true,
                pagination: false,
                items: e,
				itemsLarge: [1400, e],
                itemsDesktop: [1249, 3],
                itemsDesktopSmall: [979, 2],
                itemsTablet: [767, 2],
                itemsMobile: [479, 1]
            })
        }
    });
    jQuery(".brand-carousel").each(function() {
        if (n(this).attr("id")) {
            var e = n(this).attr("id").replace("_brand_carousel", "");
            n(".brand-carousel").addClass("owl-carousel");
            n(".brand-carousel").owlCarousel({
                navigation: true,
                pagination: false,
                items: e,
                itemsDesktop: [1199, e],
                itemsDesktopSmall: [979, 3],
                itemsTablet: [767, 2],
                itemsMobile: [479, 1]
            })
        }
    });
    jQuery(".testimonial-carousel").each(function() {
        if (n(this).attr("id")) {
            var e = n(this).attr("id").replace("_testimonial_carousel", "");
            n(".testimonial-carousel").addClass("owl-carousel");
            n(".testimonial-carousel").owlCarousel({
                navigation: false,
                pagination: true,
                items: e,
                itemsDesktop: [1199, e],
                itemsDesktopSmall: [979, 1],
                itemsTablet: [767, 1],
                itemsMobile: [479, 1]
            })
        }
    });
    var r = n(".upsells ul.products li").length;
    if (r > 3) {
        n(".upsells ul.products").addClass("owl-carousel");
        n(".upsells ul.products").owlCarousel({
            navigation: true,
            pagination: false,
            items: 4,
            itemsDesktop: [1199, 2],
            itemsDesktopSmall: [979, 2],
            itemsTablet: [767, 2],
            itemsMobile: [479, 1]
        })
    }
    var i = n(".cross-sells ul.products li").length;
    if (i > 3) {
        n(".cross-sells ul.products").addClass("owl-carousel");
        n(".cross-sells ul.products").owlCarousel({
            navigation: true,
            pagination: false,
            items: 4,
            itemsDesktop: [1199, 2],
            itemsDesktopSmall: [979, 2],
            itemsTablet: [767, 2],
            itemsMobile: [479, 1]
        })
    }
	var k = n(".related ul.products li").length;
    if (k > 3) {
        n(".related ul.products").addClass("owl-carousel");
        n(".related ul.products").owlCarousel({
            navigation: true,
            pagination: false,
            items: 4,
            itemsDesktop: [1199, 2],
            itemsDesktopSmall: [979, 2],
            itemsTablet: [767, 2],
            itemsMobile: [479, 1]
        })
    }
    jQuery(".team-carousel").each(function() {
        if (n(this).attr("id")) {
            var e = n(this).attr("id").replace("_team_carousel", "");
            n(".team-carousel").addClass("owl-carousel");
            n(".team-carousel").owlCarousel({
                navigation: false,
                pagination: true,
                items: e,
                itemsDesktop: [1199, e],
                itemsDesktopSmall: [979, 3],
                itemsTablet: [767, 2],
                itemsMobile: [479, 1]
            })
        }
    });
    jQuery(".woo-carousel").each(function() {
        if (n(this).attr("id")) {
            var e = n(this).attr("id").replace("_woo_carousel", "");
            var t = n(this).find("ul.products .product").length;
            if (t > e) {
                n(this).find("ul.products").addClass("owl-carousel");
                n(this).find("ul.products").owlCarousel({
                    navigation: true,
                    pagination: false,
                    items: e,
                    itemsDesktop: [1199, 3],
                    itemsDesktopSmall: [979, 2],
                    itemsTablet: [767, 2],
                    itemsMobile: [479, 1]
                })
            }
        }
    })
});

document.createElement("div");
document.createElement("section");
jQuery(window).load(function() {
    "use strict";
    isotopAutoSet()
});
jQuery(window).resize(function() {
    "use strict";
    isotopAutoSet()
});
function navigationMenu() {
	if (jQuery(window).width() < 1000){
			jQuery('#menu-menu').addClass('treeview-list');
			jQuery("#menu-menu.treeview-list").treeview({
				animated: "slow",
				collapsed: true,
				unique: true		
			});
			jQuery('#menu-menu.treeview-list a.active').parent().removeClass('expandable');
			jQuery('#menu-menu.treeview-list a.active').parent().addClass('collapsable');
			jQuery('.treeview-list .collapsable ul').css('display','block');
	}
}
jQuery(document).ready(navigationMenu);
function leftPageMenu()
{
	jQuery("#secondary .widget_pages ul").addClass('page-list');
	jQuery("#secondary .widget_pages ul.page-list").treeview({
		animated: "slow",
		collapsed: true,
		unique: true		
	});
}
jQuery(document).ready(leftPageMenu);
function leftCatMenu()
{
	jQuery('.product-categories,.widget_nav_menu').addClass('treeview-list');
	jQuery(".product-categories.treeview-list,.widget_nav_menu.treeview-list").treeview({
		animated: "slow",
		collapsed: true,
		unique: true		
	});
	jQuery('.treeview-list a.active').parent().removeClass('expandable');
	jQuery('.treeview-list a.active').parent().addClass('collapsable');
	jQuery('.treeview-list .collapsable ul').css('display','block');
}
jQuery(document).ready(leftCatMenu);


(function($) {
		  if (jQuery(window).width() < 980) {					
				jQuery('.primary-sidebar .title-outer').click(function () {
				if(jQuery(this).parent().hasClass('toggled-on')){									  
					jQuery(this).parent().removeClass('toggled-on');
					jQuery(this).parent().addClass('toggled-off');
				}
				else {
					jQuery(this).parent().addClass('toggled-on');
					jQuery(this).parent().removeClass('toggled-off');
				}
			});
		  }
		  		
})(jQuery);
// JS for toggle for container
(function($) {
	"use strict";	
	if (jQuery(window).width() < 768) {					
		jQuery('.toggle-content .title-outer').click(function () {
			if(jQuery(this).parent().hasClass('toggled-on')){									  
				jQuery(this).parent().removeClass('toggled-on');
				jQuery(this).parent().addClass('toggled-off');
			}
			else {
				jQuery(this).parent().addClass('toggled-on');
				jQuery(this).parent().removeClass('toggled-off');
			}
		});
	}		  		
})(jQuery);

function mobileToggleColumn() {
    if (jQuery(window).width() < 980) {
		jQuery(".site-footer .widget ul,.site-footer .widget .main-ul").css("display", "none");
        jQuery(".site-footer .widget .widget-title .mobile_togglecolumn").removeClass("clearfix");
        jQuery(".site-footer .widget .widget-title .mobile_togglecolumn").remove();
        jQuery(".site-footer .widget .widget-title").append("<span class='mobile_togglecolumn'></span>");
        jQuery(".site-footer .widget .widget-title").addClass("toggle");
        jQuery(".site-footer .widget .widget-title .mobile_togglecolumn").click(function() {
            jQuery(this).parent().toggleClass("active").parent().find("ul,.main-ul").toggle();
        })
    } else {
        jQuery(".site-footer .widget ul,.site-footer .widget .main-ul").css("display", "block");
        jQuery(".site-footer .widget .product-categories ul.children").css("display", "none");
        jQuery(".site-footer .widget .widget-title .mobile_togglecolumn").css("display", "none");
        jQuery(".site-footer .widget .widget-title").removeClass("toggle active");
        jQuery(".site-footer .widget .widget-title .mobile_togglecolumnn").remove()
    }
}
jQuery(document).ready(function() {
    "use strict";
    mobileToggleColumn()
});
jQuery(window).resize(function() {
    "use strict";
    mobileToggleColumn()
});


jQuery(window).load(function() {
    "use strict";
    jQuery(".sc-flexslider").flexslider({
		animation: "fade"								
	});
	
});

jQuery(window).load(function() {
    "use strict";
    jQuery(".flexslider1").flexslider();
});

// JS for Flexslider loading image 
jQuery(window).load(function() {
    "use strict";
    jQuery(".slider-loading").fadeOut('slow');	
})

function mobile(){
   	"use strict";
      var parallax = document.querySelectorAll(".parallax-container"),
       speed = 0.4;
  
  window.onscroll = function(){
    [].slice.call(parallax).forEach(function(el,i){

      var windowYOffset = window.pageYOffset,
          elBackgrounPos = "50%" + (windowYOffset * speed) + "px";
      
      el.style.backgroundPosition = elBackgrounPos;

    });
  };
}
jQuery(document).ready(function() { 
	"use strict";
	mobile();
});
jQuery(window).resize(function() {
    "use strict";
    mobile()
});

// JS for move the cross sale section	
function preloadFunc(){
	"use strict";
	jQuery(".cross-sells").appendTo(".cart-collaterals");
}
jQuery(document).ready(function() {
    "use strict";
    preloadFunc();
});



function headerSearch(){
	"use strict";
		jQuery(".search-btn").click(function(){
		 	jQuery(".header-search").toggle('slow');		
		}); 		

}
jQuery(document).ready(function() { 
	"use strict";
	headerSearch();
});

function headerLinks(){
	"use strict";
	jQuery(".link-btn").click(function(){
		jQuery(".header-links").slideToggle();		
	}); 		
}
jQuery(document).ready(function() { 
	"use strict";
	headerLinks();
});


jQuery(window).load(function(){	 
	"use strict";
	var isMobile = /Android|webOS|iPhone|iPad|iPod|BlackBerry/i.test(navigator.userAgent);
	if(!isMobile) {
		if(jQuery(".parallax").length){  jQuery(".parallax").sitManParallex({  invert: true });};    
	}else{
		jQuery(" .parallax").sitManParallex({  invert: true });
		
		}	
});
// JS for adding menu more link
function moreTab() {
	"use strict";
	if ((jQuery(window).width() >= 1250)) {	
		var max_elem = 8 ;
		jQuery('#site-navigation').addClass('more');
		jQuery('#site-navigation.more #menu-menu > li').first().addClass('home_first');
		var items = jQuery('#site-navigation.more #menu-menu > li');
		var surplus = items.slice(max_elem, items.length);	
		surplus.wrapAll('<li class="cat-item level-0 hiden_menu cat-parent"><ul class="children">');
		jQuery('.hiden_menu').prepend('<a href="#" class="level-0  activSub">More</a>');	
		}
	 	if ((jQuery(window).width() >= 980) && (jQuery(window).width() < 1250)) {	
		var max_elem = 5 ;
		jQuery('#site-navigation').addClass('more');
		jQuery('#site-navigation.more #menu-menu > li').first().addClass('home_first');
		var items = jQuery('#site-navigation.more #menu-menu > li');
		var surplus = items.slice(max_elem, items.length);	
		surplus.wrapAll('<li class="cat-item level-0 hiden_menu cat-parent"><ul class="children">');
		jQuery('.hiden_menu').prepend('<a href="#" class="level-0  activSub">More</a>');	
}
}
jQuery(document).ready(function() {
    "use strict";
    moreTab()
});

function mobile(){
   "use strict";
      var parallax = document.querySelectorAll(".parallax-bg"),
         speed = 0.42;
  
  window.onscroll = function(){
    [].slice.call(parallax).forEach(function(el,i){

      var windowYOffset = window.pageYOffset,
          elBackgrounPos = "50%" + -(windowYOffset * speed) + "px";
      
      el.style.backgroundPosition = elBackgrounPos;

    });
  };
}
jQuery(document).ready(function() { "use strict"; mobile();});
jQuery(window).resize(function() { "use strict"; mobile();});

function listgrid()
{
	"use strict"; 
	if (jQuery(window).width() < 767) {
			jQuery('.products').removeClass("list");
			jQuery('.products').addClass("grid");
	}
	else {
		if (jQuery('#list').hasClass("active") ){
			jQuery('.products').removeClass("grid");
			jQuery('.products').addClass("list");
		}
	}
}
jQuery(window).resize(listgrid);
jQuery(document).ready(listgrid);