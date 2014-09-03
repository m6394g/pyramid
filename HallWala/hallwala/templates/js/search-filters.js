$(document).ready(function(e) {
	var $modifySearch=$("#modify-search"),$searchFilterWrapper=$("#search-filter-wrapper"),$searchResultsInfoWrapper=$("#search-results-info-filter"),$filterLinkTitles=$(".hw-filter-link"),$filterCriteriaContainers=$('.hw-filter-container'),tempId="";
	
	var $responsiveSpans=$("#hw-responsive-test span.hw-responsive"),deviceDetected="";
    $modifySearch.click(function(e) {
        e.preventDefault();
		$searchFilterWrapper.slideDown("fast");
		$searchResultsInfoWrapper.slideUp("fast");
    });
	$("#cancel-filter").click(function(e) {
        e.preventDefault();
		$searchFilterWrapper.slideUp("fast");
		$searchResultsInfoWrapper.slideDown("fast");
		$('html,body').animate({ scrollTop: 0 }, 250, function() {});
    });
	$("#apply-filter").click(function(e) {
        e.preventDefault();
		$searchFilterWrapper.slideUp("fast");
		$searchResultsInfoWrapper.slideDown("fast");
		$('html,body').animate({ scrollTop: 0 }, 250, function() {});
    });
	$filterLinkTitles.click(function(e) {
        e.preventDefault();
		tempId=$(this).prop('id');
		if($(this).hasClass('active')){
			$(this).removeClass('active');
			$filterCriteriaContainers.each(function(index, element) {
                if($(this).data('nav')==tempId){
					$(this).slideUp('fast');
					return false;
				}
            });
		}
		else{
			$(this).addClass('active');
			$filterCriteriaContainers.each(function(index, element) {
                if($(this).data('nav')==tempId){
					$(this).slideDown('fast');
					return false;
				}
            });
		}
    });
});