function initializeFullGallerySlider($hallFullGallery,dataSlideStart){
	console.log(dataSlideStart)
	$hallFullGallery.carouFredSel({
			responsive: true,
			items: {
				visible: 1,
				start: dataSlideStart
			},
			scroll: {
				duration: 500,
				timeoutDuration: 6000,
				fx: 'crossfade'
			},
			prev : "#hall-gallery-full-prev",
    		next : "#hall-gallery-full-next"
		});
}
function initializeFullGallery(){
	var $hallFullGallery=$("#hall-gallery-full-content"),$hallFullGallerySrc=$(".container-primary.img-gallery a"),winHeight=$(window).height(),dataSlideStart=0,$hallFullGallerWrapper=$('#hall-gallery-full-wrapper'),$hallFullGallerMask=$('#hall-gallery-full-mask');
	if($hallFullGallerySrc.length>0){
		$hallFullGallerySrc.each(function(index, element) {
            $hallFullGallery.append("<div class='hall-full-gallery-img' style='background-image:url("+$(this).find('img.grayscale').prop('src')+")'></div>");
		});
		$hallFullGallerySrc.each(function(index, element) {
		$(this).click(function(e) {
				e.preventDefault();
				dataSlideStart=$(this).data('start-slide');
				$('body').addClass('overlay-active');
				$hallFullGallerWrapper.fadeIn('slow');
				$hallFullGallerMask.fadeIn('slow');
				$('.hall-full-gallery-img').height($(window).height());
				initializeFullGallerySlider($hallFullGallery,dataSlideStart);
			});
		});
	}
	$("#hall-gallery-full-close").click(function(e) {
        e.preventDefault();
		$hallFullGallery.trigger("destroy");
		$('body').removeClass('overlay-active');
		$hallFullGallerWrapper.fadeOut('slow');
		$hallFullGallerMask.fadeOut('slow',function(){});
    });
	$(window).resize(function(e){
		if($hallFullGallerWrapper.css('display')=='block'){
			$('.hall-full-gallery-img').height($(window).height());
			initializeFullGallerySlider($hallFullGallery,dataSlideStart);
		}
	});
}
function initializeSiteSliders(){
	var $primaryBanner=$('#primary-banner'),$secondaryBanner=$('#secondary-banner');
	var $featuredTabs=$('#featured-tab-wrapper a'),featuredCarousel='',$featuredHalls=$('.featured-halls'),$featuredHallsContainer=$('.featured-halls-container'),$featuredMobileTabs=$('#featured-halls-wrapper a.featured-tab-mobile');
	var $hallGallery=$("#hall-gallery");
	
	if($primaryBanner.length>0){
		$primaryBanner.find("div.banner-slider").each(function(index, element) {
           $(this).css("background-image","url("+$(this).data("background-img")+")"); 
        });
		$primaryBanner.carouFredSel({
			responsive: true,
			items: {
				visible: 1
			},
			scroll: {
				duration: 500,
				timeoutDuration: 6000,
				fx: 'crossfade'
			}
		});
	}
	if($secondaryBanner.length>0){
		$secondaryBanner.find("div.banner-slider-bg").each(function(index, element) {
           $(this).css("background-image","url("+$(this).data("background-img")+")"); 
        });
		$secondaryBanner.carouFredSel({
			responsive: true,
			items: {
				visible: 1
			},
			scroll: {
				duration: 500,
				timeoutDuration: 6000,
				fx: 'fade'
			}
		});
	}
	$featuredHallsContainer.carouFredSel({
		width: '100%',
		height:300,
		auto: {
			items: 1
		},
		items: {
			height:300,
			width:200
		},
		scroll: {
			duration: 500,
			timeoutDuration: 6000
		},
		prev: function(){
			return $(this).parents(".featured-halls").find(".featured-halls-controller a.prev-slide");
		},
		next: function(){
			return $(this).parents(".featured-halls").find(".featured-halls-controller a.next-slide");
		}
	});
	$featuredTabs.click(function(event) {
        event.preventDefault();
		$featuredTabs.removeClass('active');
		$(this).addClass('active');
		featuredCarousel=$(this).attr('id');
		$featuredHalls.removeClass('active');
		$featuredHalls.each(function(index, element) {
            if($(this).data('nav')==featuredCarousel) {
				$(this).addClass('active');
				$(this).find('.featured-halls-container').carouFredSel({
					width: '100%',
					height:300,
					auto: {
						items: 1
					},
					items: {
						height:300,
						width:200
					},
					scroll: {
						duration: 500,
						timeoutDuration: 6000
					},
					prev: function(){
						return $(this).parents(".featured-halls").find(".featured-halls-controller a.prev-slide");
					},
					next: function(){
						return $(this).parents(".featured-halls").find(".featured-halls-controller a.next-slide");
					}
				});
				return false;
			}
        });
    });
	$featuredMobileTabs.click(function(e) {
        e.preventDefault();
		$featuredMobileTabs.removeClass('active');
		$(this).addClass('active');
		featuredCarousel=$(this).data('featured-tab');
		$featuredTabs.each(function(index, element) {
            if($(this).attr('id')==featuredCarousel){
				$(this).trigger('click');
			}
        });
    });
	$hallGallery.carouFredSel({
		width: '100%',
		items: {
			visible: 'odd+2',
			minimum: 4
		},
		auto: {
			items: 1,
			easing: 'linear',
			duration: 2000,
			timeoutDuration: 0
		},
		pagination: {
			container: '#pager',
			items: 1,
			duration: 0.5,
			queue: 'last'/*,
			onAfter: function() {
				var cur = $(this).triggerHandler( 'currentVisible' ),
					mid = Math.floor( cur.length / 2 );

				cur.eq( mid ).addClass( 'hover' );
			}*/
		}
	});
	$hallGallery.find("a").mouseover(function(e) {
        e.preventDefault();
		$(this).find("img.desaturated").fadeOut(500);
    }).mouseleave(function(e) {
        e.preventDefault();
		$(this).find("img.desaturated").fadeIn(500);
    });
	
}
$(document).ready(function(e) {
    initializeSiteSliders();
	initializeFullGallery();
});