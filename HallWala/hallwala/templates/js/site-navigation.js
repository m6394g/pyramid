function initiateMobileNavigation(){
	var $desktopNav=$('#primary-nav li a').not('#header-login-register'),$mobileNavLayout=$('#hw-site-mobile-nav'),$pushdownContainer=$('.pushdown-container'),currentNav,currentMobileNav,$pushdownMobileContainer,$mobileHeaderMenu=$("#mobile_menu"),$overlayMask=$("#site-mobile-nav-mask"),positionVal=0,$mobileNavWrapper=$('#site-mobile-nav-wrapper');
	var $mobileUserLayout=$('#hw-site-mobile-user'),$mobileUserItems=$('.pushdown-container .mobile-user-menu a'),$mobileHeaderUser=$("#mobile_user");
	var $headerSearchForm=$("#header_search_form"),$mobileSearchLayout=$("#hw-site-mobile-search"),$headerSearchMobileForm=$("#header_search_mobile_form"),emptySearch='',$mobileHeaderSearch=$("#mobile_search");
	
	var $userNav=$("#primary-nav li a#header-login-register"),$userMeganav=$('#user-access-meganav').parents(".pushdown-container");
	
	emptySearch=$headerSearchForm.html();
	$headerSearchMobileForm.append(emptySearch);
	
	$headerSearchMobileForm.find("#header_search_from").attr("id","mobile_search_from_date");
	$headerSearchMobileForm.find("#header_search_to").attr("id","mobile_search_to_date");
	
	$( "#mobile_search_from_date" ).datepicker({
      defaultDate: "+1w",
      numberOfMonths: 1,
	  prevText: "",
	  nextText: "",
      onClose: function( selectedDate ) {
        $( "#to" ).datepicker( "option", "minDate", selectedDate );
      }
    });
    $( "#mobile_search_to_date" ).datepicker({
      defaultDate: "+1w",
      numberOfMonths: 1,
	  prevText: "",
	  nextText: "",
      onClose: function( selectedDate ) {
        $( "#from" ).datepicker( "option", "maxDate", selectedDate );
      }
    });
	
	$mobileSearchLayout.find("div#hw-site-mobile-search-wrapper").append("<a href='#' class='cta-link secondary' id='mobile-header-search-close'>Close<span class='cta-arrow icons-cancel'></span></a>");
	$mobileSearchLayout.css('height',$(window).height());
	$(window).resize(function(e) {
        $mobileSearchLayout.css('height',$(window).height());
    });
	
	$mobileHeaderSearch.click(function(e){
		e.preventDefault();
		$('body').addClass('overlay-active');
		$overlayMask.fadeIn("fast");
		$mobileSearchLayout.css("top","0").fadeIn('fast').scrollTop(0);
	});
	
	$mobileSearchLayout.find("div#hw-site-mobile-search-wrapper #mobile-header-search-close").click(function(e) {
        e.preventDefault();
		$overlayMask.fadeOut("fast");
		$mobileSearchLayout.fadeOut('fast',function(e){
			$mobileSearchLayout.css("top","-200%");
			$('body').removeClass('overlay-active');
		});
    });
	
	$desktopNav.each(function(index, element) {
        $(this).clone().addClass("hw-mobile-nav-link").append("<span class='nav-expand-collapse icons-plus'></span><span class='nav-expand-collapse icons-minus'></span>").appendTo($mobileNavLayout);
		currentNav=$(this).prop('id');
		$pushdownContainer.each(function(index, element) {
            if($(this).data('nav')==currentNav){
				$(this).clone().appendTo($mobileNavLayout);
				return false;
			}
        });
    });
	$pushdownMobileContainer=$('#hw-site-mobile-nav .pushdown-container');
	$mobileNavLayout.find("a.hw-mobile-nav-link").click(function(e){
		e.preventDefault();
		if($(this).hasClass('active')){
			$pushdownMobileContainer.slideUp('fast');
			$mobileNavLayout.find("a.hw-mobile-nav-link").removeClass('active');
		}
		else{
			currentMobileNav=$(this).prop('id');
			$pushdownMobileContainer.slideUp('fase');
			$pushdownMobileContainer.each(function(index, element) {
				if($(this).data('nav')==currentMobileNav){
					$(this).slideDown('slow');
					return false;
				}
			});
			$mobileNavLayout.find("a.hw-mobile-nav-link").removeClass('active');
			$(this).addClass('active');
		}
	});
	$mobileHeaderMenu.click(function(e) {
        e.preventDefault();
		positionVal=parseInt($mobileNavLayout.css('right'));
		$('body').addClass('overlay-active');
		$mobileNavWrapper.show();
		$overlayMask.removeClass('on-left').addClass('on-right');
		$overlayMask.fadeIn("fast",function(){
			$mobileNavLayout.show().animate({
				right: 0
			}, 250, function() {});
			$overlayMask.show().animate({
				right: -positionVal
			}, 250, function() {});
		});
    });
	
	if($userNav.hasClass('logged-in')){
		$userMeganav.clone().appendTo($mobileUserLayout);
	}
	else {
		$mobileUserItems.clone().appendTo($mobileUserLayout);
	}
	
	$mobileHeaderUser.click(function(e) {
        e.preventDefault();
		positionVal=parseInt($mobileUserLayout.css('left'));
		$('body').addClass('overlay-active');
		$mobileNavWrapper.show();
		$overlayMask.fadeIn("fast",function(){
			$mobileUserLayout.show().animate({
				left: 0
			}, 250, function() {});
			$overlayMask.show().animate({
				left: -positionVal
			}, 250, function() {});
		});
    });
	
	$overlayMask.click(function(e){
		e.preventDefault();
		if($mobileNavLayout.css('display')=='block'){
			$mobileNavLayout.animate({
				right: positionVal
			}, 250, function() {});
			$overlayMask.animate({
				right: 0
			}, 250, function() {
				$mobileNavLayout.hide();
				$overlayMask.fadeOut('fast').removeClass('on-right').addClass('on-left');
			});
		}
		else if($mobileUserLayout.css('display')=='block'){
			$mobileUserLayout.animate({
				left: positionVal
			}, 250, function() {});
			$overlayMask.animate({
				left: 0
			}, 250, function() {
				$mobileNavLayout.hide();
				$overlayMask.fadeOut('fast');
			});
		}
		$('body').removeClass('overlay-active');
	});
	
	$mobileNavWrapper.swipe({
	swipeRight:function(){
		$mobileNavLayout.animate({
			right: positionVal
		}, 250, function() {});
		$overlayMask.animate({
			right: 0
		}, 250, function() {
			$mobileNavLayout.hide();
			$overlayMask.fadeOut('fast').removeClass('on-right').addClass('on-left');
		});
		$('body').removeClass('overlay-active');
	},swipeLeft:function(){
		$mobileUserLayout.animate({
			left: positionVal
		}, 250, function() {});
		$overlayMask.animate({
			left: 0
		}, 250, function() {
			$mobileNavLayout.hide();
			$overlayMask.fadeOut('fast');
		});
		$('body').removeClass('overlay-active');
	}, allowPageScroll:"auto"} );
}
function initiatePrimaryNavigation(){
	var $primaryNav=$("#primary-nav li a"),$headerSearch=$("a#header-search"),$megamenuContainer=$("#site-nav-wrapper"),$pushdownWrapper=$(".pushdown-wrapper"),$pushdownContainer=$('.pushdown-container'),$closeMegamenu=$megamenuContainer.find("#megamenu-close"),currentNav='';
	$pushdownWrapper.removeClass("hide"),$headerFromSearchDate=$('#header_search_from'),$headerToSearchDate=$('#header_search_to');
	$primaryNav.hoverIntent(function(){
		if($pushdownWrapper.hasClass("active") && $pushdownWrapper.hasClass("utility")){
			$headerSearch.trigger('click');
			$headerFromSearchDate.blur(function(e) { $(this).datepicker("hide"); });
			$headerToSearchDate.blur(function(e) { $(this).datepicker("hide"); });
			$headerFromSearchDate.trigger('blur');
			$headerToSearchDate.trigger('blur');
		}
		$primaryNav.removeClass('active');
		$pushdownWrapper.addClass("active").removeClass('utility');
		$(this).addClass("active");
		$pushdownContainer.removeClass('active');
		currentNav=$(this).attr('id');
		$pushdownContainer.each(function(index1,value1){
			if($(this).data("nav")==currentNav){
				$(this).addClass("active");
			}
		});
	},function(e){});
	$headerSearch.click(function(e) {
        e.preventDefault();
		if($pushdownWrapper.hasClass("active")){
			$(this).removeClass("active");
			$primaryNav.removeClass('active');
			$pushdownWrapper.removeClass("active");
			$pushdownContainer.removeClass('active');
		}
		else{
			$primaryNav.removeClass('active');
			$pushdownWrapper.addClass("active");
			$(this).addClass("active");
			$pushdownWrapper.addClass("utility");
			$pushdownContainer.removeClass('active');
			currentNav=$(this).attr('id');
			$pushdownContainer.each(function(index1,value1){
				if($(this).data("nav")==currentNav){
					$(this).addClass("active");
				}
			});
		}
    });
	$megamenuContainer.hoverIntent(function(){},function(){
		if($pushdownWrapper.hasClass('utility')){}
		else{
			$primaryNav.removeClass('active');
			$pushdownWrapper.removeClass("active");
			$pushdownContainer.removeClass('active');
		}
	});
	
	initiateMobileNavigation();
}
$(document).ready(function(e) {
    initiatePrimaryNavigation();
});