function greyScaleImplementation() {
	/*$(window).load(function(){
		
		// Fade in images so there isn't a color "pop" document load and then on window load
		$(".hall-gallery-section img").fadeIn(500);
		
		// clone image
		$('.hall-gallery-section img').each(function(){
			var el = $(this);
			el.css({"position":"absolute"}).wrap("<div class='img_wrapper' style='display: inline-block'>").clone().addClass('img_grayscale').css({"position":"absolute","z-index":"4","opacity":"0"}).insertBefore(el).queue(function(){
				var el = $(this);
				el.parent().css({"width":"100%","height":"100%"});
				el.dequeue();
			});
			this.src = grayscale(this.src);
		});
		
		// Fade image 
		$(".hall-gallery-section img").mouseover(function(){
			$(this).parent().find('img:first').stop().animate({opacity:1}, 200);
		})
		$('.img_grayscale').mouseout(function(){
			$(this).stop().animate({opacity:0}, 200);
		});		
	});
	
	// Grayscale w canvas method
	function grayscale(src){
		var canvas = document.createElement('canvas');
		var ctx = canvas.getContext('2d');
		var imgObj = new Image();
		imgObj.src = src;
		canvas.width = imgObj.width;
		canvas.height = imgObj.height; 
		ctx.drawImage(imgObj, 0, 0); 
		var imgPixels = ctx.getImageData(0, 0, canvas.width, canvas.height);
		for(var y = 0; y < imgPixels.height; y++){
			for(var x = 0; x < imgPixels.width; x++){
				var i = (y * 4) * imgPixels.width + x * 4;
				var avg = (imgPixels.data[i] + imgPixels.data[i + 1] + imgPixels.data[i + 2]) / 3;
				imgPixels.data[i] = avg; 
				imgPixels.data[i + 1] = avg; 
				imgPixels.data[i + 2] = avg;
			}
		}
		ctx.putImageData(imgPixels, 0, 0, 0, 0, imgPixels.width, imgPixels.height);
		return canvas.toDataURL();
    }*/
}
function makePagePrint(){
	$('.print-page').click(function(e) {
        e.preventDefault();
		window.print();return false;
    });
}
function initializeHomeSearch() {
	var countries = new Bloodhound({
	  datumTokenizer: Bloodhound.tokenizers.obj.whitespace('name'),
	  queryTokenizer: Bloodhound.tokenizers.whitespace,
	  limit: 10,
	  prefetch: {
		// url points to a json file that contains an array of country names, see
		// https://github.com/twitter/typeahead.js/blob/gh-pages/data/countries.json
		url: '../countries.json',
		// the json file contains an array of strings, but the Bloodhound
		// suggestion engine expects JavaScript objects so this converts all of
		// those strings
		filter: function(list) {
		  return $.map(list, function(country) { return { name: country }; });
		}
	  }
	});
	 
	// kicks off the loading/processing of `local` and `prefetch`
	countries.initialize();
	 
	// passing in `null` for the `options` arguments will result in the default
	// options being used
	$('#header_search_form .typeahead').typeahead(null, {
	  name: 'countries',
	  displayKey: 'name',
	  // `ttAdapter` wraps the suggestion engine in an adapter that
	  // is compatible with the typeahead jQuery plugin
	  source: countries.ttAdapter()
	});
}
function activateSearchCheckboxes(){
	var $articleLinkControls=$(".flexi-grid-article"),compareArray=[],tempCnt,$compareBar=$(".flexi-grid-tools"),$clearSpan=$("#flexi-articles-count-clear span#flexi-articles-count"),$articleLinkControlsLinks=$articleLinkControls.find('a.flexi-checkbox');
	var checkboxClickFn=function($el){
		if($el.hasClass("active")){
			$el.removeClass("active");
			for(tempCnt = compareArray.length; tempCnt--;) {
				if(compareArray[tempCnt] === $(this).parents('.flexi-grid-article').data('article-id')) {
				  compareArray.splice(tempCnt, 1);
				}
			}	  
		}
		else{
			$el.addClass("active");
			compareArray.push($(this).parents('.flexi-grid-article').data('article-id'));
		}
		if(compareArray.length>0){
			$compareBar.slideDown("fast");
			$clearSpan.html('&nbsp;'+compareArray.length+'&nbsp;selected');
		}
		else{
			$compareBar.slideUp("fast");
		}
	}
	$articleLinkControlsLinks.each(function(index,value){
		$(this).on("click",function(e){
			e.preventDefault();
			checkboxClickFn($(this));
		});
	});
}
function activateSearchTools(){
	var $searchToolsContainer=$("#results-details-tools-container"),tempId="",$searchToolsContainerLinks=$searchToolsContainer.find("a.results-details-tools-title"),$searchToolsContainerDetails=$searchToolsContainer.find(".results-details-tools-details"),$tempEl;
	
	var $articleLinkControls=$(".flexi-grid-article"),currentArticleId="",currentArticleNav="";
	
	var $searchToolsWrapper=$("#results-details-tools-wrapper");
	
	$searchToolsContainerLinks.each(function(index, element) {
        $(this).click(function(e) {
            e.preventDefault();
			tempId=$(this).prop("id");
			$tempEl=$(this);
			$searchToolsContainerDetails.each(function(index1, element1) {
				if($(this).data('nav')==tempId){
					if($tempEl.hasClass('active')){
						$tempEl.removeClass('active');
						$(this).slideUp('slow');
					}
					else{
						$searchToolsContainerLinks.removeClass('active');
						$searchToolsContainerDetails.slideUp('slow');
						$tempEl.addClass('active');
						$(this).slideDown('slow');
					}
					return false;
				}
            });
        });
    });
	$searchToolsContainer.find('a.overlay-close').click(function(e){
		e.preventDefault();
		$('body').removeClass('overlay-active');
		$searchToolsWrapper.fadeOut("slow");
		$searchToolsContainer.find("a.results-details-tools-title.active").trigger('click');
	});
	
	$articleLinkControls.find(".flexi-grid-article-tools a").not(".flexi-checkbox").click(function(e){
		e.preventDefault();
		currentArticleId=$(this).parents('.flexi-grid-article').data("article-id");
		currentArticleNav=$(this).data('nav');
		/***************
			Make an ajax call to get the related data w.r.t. the article id,
			and update the containers
		**************/
	//"&markers=icon:"+$(this).find(".result-number img").attr("src")+"|"+lat+","+longitude
		$("#map_static_view").attr("src","//maps.google.com/maps/api/staticmap?center="+parseFloat(17.253077)+","+parseFloat(78.255961)+"&markers="+parseFloat(17.253077)+","+parseFloat(78.255961)+"&zoom=13&size=400x300&maptype=roadmap&sensor=false");
		$searchToolsContainerLinks.each(function(index, element) {
			if($(this).prop('id')==currentArticleNav){
				$('body').addClass('overlay-active');
				$searchToolsWrapper.fadeIn("slow");
				$(this).trigger('click');
				return false;
			}
		});
	});
}
function initializeMultipleLayout(){
	var $gridLayout=$("#grid-layout"),$listLayout=$("#list-layout"),$flexiArticle=$(".flexi-grid-article"),$responsiveTest=$("#hw-responsive-test .hw-responsive"),rdevice="";
	$gridLayout.click(function(e){
		e.preventDefault();
		$(this).addClass("active");
		$listLayout.removeClass("active");
		$flexiArticle.removeClass("full-width");
	});
	$listLayout.click(function(e){
		e.preventDefault();
		$(this).addClass("active");
		$gridLayout.removeClass("active");
		$flexiArticle.addClass("full-width");
	});
	$(window).resize(function(e) {
        $responsiveTest.each(function(index, element) {
            if($(this).css("display")=="block"){
				rdevice=$(this).data('device');
			}
        });
		if(rdevice=="mobile"){
			$gridLayout.addClass("active");
			$listLayout.removeClass("active");
			$flexiArticle.removeClass("full-width");
		}
    });	
}
$(document).ready(function(e) {
	initializeMultipleLayout();
	initializeHomeSearch();
	greyScaleImplementation();
	activateSearchTools();
	activateSearchCheckboxes();
	makePagePrint();
});