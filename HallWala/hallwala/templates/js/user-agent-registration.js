$(document).ready(function(e) {
	var $registrationFormStep1=$("#registration-form-step-1"),$registrationFormStep2=$("#registration-form-step-2"),$registrationFormStep3=$("#registration-form-step-3");
	
	var addHalls=["add_hall_price_package","add_hall_general_info","add_hall_general_info_confirm","add_hall_general_info_confirmed","add_hall_address_location","add_hall_photos_video","add_hall_price_packages","add_hall_dates_availability"],$addHallForm,$addHallStep=$("#add-hall-step"),addHallCnt=1;
	
    if($registrationFormStep1 && $registrationFormStep1.length){
		$registrationFormStep1.find('form').submit(function(e){
			e.preventDefault();
			$registrationFormStep1.hide();
			$registrationFormStep2.show();
		});
		$registrationFormStep2.find('form').submit(function(e){
			e.preventDefault();
			$registrationFormStep2.hide();
			$registrationFormStep3.show();
		});
	}
	
	$.each(addHalls,function(index,value){
		$addHallForm=$("#"+value);
		$addHallStep.text(addHallCnt);
		$addHallForm.submit(function(e){
			e.preventDefault();
			$(this).parents(".general-form-container").addClass("hidden");
			$addHallStep.text(++addHallCnt);
			$("#"+addHalls[index+1]).parents(".general-form-container").removeClass("hidden");
		});
	});
});