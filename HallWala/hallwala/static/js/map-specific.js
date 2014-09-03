var styleArray=[{"featureType":"water","stylers":[{"visibility":"on"},{"color":"#acbcc9"}]},{"featureType":"landscape","stylers":[{"color":"#f2e5d4"}]},{"featureType":"road.highway","elementType":"geometry","stylers":[{"color":"#c5c6c6"}]},{"featureType":"road.arterial","elementType":"geometry","stylers":[{"color":"#e4d7c6"}]},{"featureType":"road.local","elementType":"geometry","stylers":[{"color":"#fbfaf7"}]},{"featureType":"poi.park","elementType":"geometry","stylers":[{"color":"#c5dac6"}]},{"featureType":"administrative","stylers":[{"visibility":"on"},{"lightness":33}]},{"featureType":"road"},{"featureType":"poi.park","elementType":"labels","stylers":[{"visibility":"on"},{"lightness":20}]},{},{"featureType":"road","stylers":[{"lightness":20}]}];

var mapObject,$mapContainer=$("#map-content"),$mapSearchContainer=$('#map-search-wrapper'),jsonResponse,$locatorList=$('.map-search-list-container'),markerList=[],$searchListContainer=$(".map-search-list-container"),$mapSearchContent=$(".map-search-content"),$footerContainer=$("#footer-wrapper"),tempHeight=0,hallFilterVal='',hallMapFeaturs="",$locatorMobileList=$("#map-mobile-search-results");

function adjustSearchResultsList(){
	tempHeight=($(window).height()-parseInt($mapSearchContainer.css("top"))-$mapSearchContent.outerHeight()-$footerContainer.outerHeight()-10);
	$searchListContainer.css("max-height",tempHeight).fadeIn('slow');
}

function populateLocations(jsData,hallFilterVal){
    var latlngbounds = new google.maps.LatLngBounds(null) , myloc = null,listContent="",count=0,ratingArray="",ratingCount=0,goAhead=false,vcnt=0,hallFeaturesArray=[];
    $locatorList.html("");
    $(markerList).each(function () {
		 this.setMap(null);
	});
    $.each(jsData, function (i, myloc) {
		$.each(myloc, function (i1, location) {
            var cont = location,weburl="",infocontent="";
	        lat = parseFloat(cont.hall_address.latitude);
	        lng = parseFloat(cont.hall_address.longitude);
	        location = new google.maps.LatLng(lat, lng);
			if(hallFilterVal=='all') goAhead=true;
			else if(hallFilterVal=="corporate" && cont.hall_type.corporate=="true") goAhead=true;
			else if(hallFilterVal=="wedding" && cont.hall_type.wedding=="true") goAhead=true;
			else if(hallFilterVal=="party" && cont.hall_type.party=="true") goAhead=true;
			else if(hallFilterVal=="banquet" && cont.hall_type.banquet=="true") goAhead=true;
			else goAhead=false;
			if(goAhead){
				latlngbounds.extend(location);
				listContent="<div class='map-search-result' id='hall_id_"+cont.hall_id+"' data-markerid='"+count+"' data-longitude='"+lng+"' data-latitude='"+lat+"'>";
				listContent+="<div class='map-pin-container'><img src='../images/hall-map-pin.png' class='map-pin'></div>";
				listContent+="<div class='map-search-result-info'>";
				listContent+="<p class='hallname'>"+cont.hall_name+"</p>";
				listContent+="<p class='address'>";
				listContent+=cont.hall_address.address_1+"<br/>";
				listContent+=cont.hall_address.address_2+"<br/>";
				listContent+=cont.hall_address.locality;
				listContent+="</p>";
				listContent+="<p class='links'>";
				
				if($("html").hasClass("lt-ie8")){
					listContent+=cont.hall_phone;
				}
				else{
					listContent+="<a class='map-result-link' href='tel:"+cont.hall_phone+"'>"+cont.hall_phone+"</a>";
				}
				
				listContent+="</p></div>";
				listContent+="</div>";
				
				$locatorList.append(listContent);
				$locatorMobileList.append(listContent);
				
				ratingArray="<div class='hall-rating'>";
				ratingCount=parseInt(cont.hall_rating);
				
				for(var i=0;i<ratingCount;i++){
					ratingArray+="<span class='icons-star'></span>";
				}
				ratingArray+="</div>"
				
				infocontent+="<div class='infoBox-arrow'></div><div class='infoBox-content'><div class='infoBox-content-wrapper'><p class='title'>"+cont.hall_name+"</p>"+ratingArray+"</div>";
				
				infocontent+="<div class='infoBox-content-wrapper text-align-center'>";
				hallMapFeaturs="";
				if(cont.hall_features.length>0){
					for(vcnt=0;vcnt<cont.hall_features.length;vcnt++){
						hallFeaturesArray=cont.hall_features[vcnt].split(";");
						hallMapFeaturs+="<span title='"+hallFeaturesArray[1]+"' class='icon-hall-feature "+hallFeaturesArray[0]+"'></span>"
					}
				}
				infocontent+=hallMapFeaturs;
				infocontent+="</div>";
				infocontent+="<a href='#' onclick='javascript:directionsInfoEvent($(this))' class='cta-link secondary'>Get Directions<span class='cta-arrow icons-right-open'></span></a><a href='#' onclick='javascript:directionsInfoEvent($(this))' class='cta-link primary'>View<span class='cta-arrow icons-right-open'></span></a></div>";
				// onclick=\"initializeDirectionTabs($(this))\"
				var infowindowid = {
					content: infocontent,
					disableAutoPan: false,
					maxWidth: 0,
					pixelOffset: new google.maps.Size(15,-47),
					zIndex: null,
					boxStyle: {
						background: "url('../images/infobox-arrow.png') no-repeat 0 22px",
						opacity: 2,
						width: "240"
					},
					closeBoxMargin: "5px 5px 2px 2px",
					closeBoxURL: "../images/map-infobox-close.png",
					infoBoxClearance: new google.maps.Size(1, 1),
					isHidden: false,
					pane: "floatPane",
					enableEventPropagation: true
				};
	
				var ib = new InfoBox(infowindowid);
				
				var markerid = new google.maps.Marker({
					position: location,
					map: mapObject,
					icon: "../images/hall-map-pin.png",
					animation: google.maps.Animation.DROP
				});
				markerList.push(markerid);
				
				google.maps.event.addListener(markerid, 'click', function () {
					$('.infoBox').hide(); //Reset & Hide the infobox 
					ib.open(mapObject, this);
				});
			}
			mapObject.fitBounds(latlngbounds);
			count++;
        });
    });
	google.maps.event.addDomListener(window, "resize", function() {
		mapObject.fitBounds(latlngbounds);
	});
	$locatorList.find('div.map-search-result').each(function(index, element) {
		$(this).click(function (event) {
			event.preventDefault();
			$('.infoBox').hide(); //Reset & Hide the infobox 
			var j = $(this).attr('data-markerid');
			google.maps.event.trigger(markerList[j], "click");
			//$locatorMobileList.find('li div.search-result').eq(index)
		});
	}).find('a.map-result-link').click(function(e) {
		e.stopPropagation();
	});
	$locatorMobileList.on("click",'div.map-search-result',function(event) {
			event.preventDefault();
			$locatorMobileList.find('div.map-search-result').show().removeClass("active");
			$(this).addClass("active");
			var markers = "",lat= $(this).data("latitude"),lng= $(this).data("longitude");
			markers=markers+"&markers=icon:"+$(this).find(".map-pin-container img").attr("src")+"|"+lat+","+lng;
			var mapURL="//maps.google.com/maps/api/staticmap?center="+parseFloat(lat)+","+parseFloat(lng)+markers+"&zoom=11&size=640x480&maptype=roadmap&sensor=false";
			$("#map-mobile-image").attr("src",mapURL);
			$('html,body').animate({scrollTop: $("#map-mobile-image").offset().top}, 1500, 'easeInOutQuint',function(){});
			$("#cloned-map-result").html($(this).clone());
			$(this).hide();
			$("#map-mobile-ctas").show();
    }).find('a.map-result-link').click(function(e) {
		e.stopPropagation();
	});
}
function initializeMap(hallFilterVal){
    jsonResponse = sampleJson.map,
	populateLocations(jsonResponse,hallFilterVal);
}
function initialize() {
       var mapOptions = {
			center: new google.maps.LatLng(42.032974,-15.468750),
			zoom: 2,
			mapTypeId: google.maps.MapTypeId.ROADMAP,
			panControl: false,
			zoomControl:false,
			mapTypeControl: false,
			streetViewControl: false
            //,styles: styleArray
		};
        mapObject = new google.maps.Map(document.getElementById("map-canvas"),
            mapOptions);
		$("#map-mobile-image").attr("src","//maps.google.com/maps/api/staticmap?center=0,0&zoom=1&size=640x480&maptype=roadmap&sensor=false");
}
$(document).ready(function(e) {
    $mapContainer.height($(window).height()-$footerContainer.outerHeight()-70);
	$mapSearchContainer.find("form#map_search_form").submit(function(e){
		e.preventDefault();
		if($.trim(''+$mapSearchContainer.find("form#map_search_form #hall_place").val()).length>0){	
			hallFilterVal=$(this).find("#hall_filter").val();
			if($.trim(''+hallFilterVal)=='') hallFilterVal="all";
			initializeMap(hallFilterVal);
		}
	});
	$("form#map_search_form #hall_filter").change(function(e) {
        e.preventDefault();
		$(this).parents('form').trigger('submit');
    });
    google.maps.event.addDomListener(window, 'load', initialize);
	adjustSearchResultsList();
	$(window).resize(function(e) {
		$mapContainer.height($(window).height()-$footerContainer.outerHeight()-70);
        adjustSearchResultsList();
    });
});