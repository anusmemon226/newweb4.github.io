jQuery(window).load(function(){window.fusionAccordianClick=!1,jQuery(document).on("click dblclick",".fusion-accordian .panel-title a",function(a){if(!0!==window.fusionAccordianClick){window.fusionAccordianClick=!0;var b,c,d;a.preventDefault(),b=jQuery(this),c=jQuery(jQuery(this).data("target")).find(".panel-body"),d=b.parents(".fusion-accordian").find(".panel-title a"),b.hasClass("collapsed")?d.removeClass("active"):(d.removeClass("active"),b.addClass("active"),setTimeout(function(){"function"==typeof jQuery.fn.reinitializeGoogleMap&&c.find(".shortcode-map").each(function(){jQuery(this).reinitializeGoogleMap()}),c.find(".fusion-carousel").length&&"function"==typeof generateCarousel&&generateCarousel(),c.find(".fusion-portfolio").each(function(){jQuery(this).find(".fusion-portfolio-wrapper").isotope()}),c.find(".flexslider, .rev_slider_wrapper, .ls-container").length&&jQuery(window).trigger("resize"),"function"==typeof jQuery.fn.fusionCalcFlipBoxesHeight&&c.find(".flip-box-inner-wrapper").each(function(){jQuery(this).fusionCalcFlipBoxesHeight()}),"function"==typeof jQuery.fn.equalHeights&&c.find(".fusion-fullwidth.fusion-equal-height-columns").each(function(){jQuery(this).find(".fusion-layout-column .fusion-column-wrapper").equalHeights()}),c.find(".fusion-blog-shortcode").each(function(){var a,b=2;for(i=1;i<7;i++)jQuery(this).find(".fusion-blog-layout-grid").hasClass("fusion-blog-layout-grid-"+i)&&(b=i);a=Math.floor(100/b*100)/100+"%",jQuery(this).find(".fusion-blog-layout-grid").find(".fusion-post-grid").css("width",a),jQuery(this).find(".fusion-blog-layout-grid").isotope(),"function"==typeof calcSelectArrowDimensions&&calcSelectArrowDimensions()})},350)),window.fusionAccordianClick=!1}})}),jQuery(document).ready(function(a){jQuery(".fusion-accordian .panel-title a").click(function(a){a.preventDefault()})});