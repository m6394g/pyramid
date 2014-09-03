var currentDateApplied='',i=0,addDatesFlag=false,dateCnt=0;
function verifyAndDisplayDates($bookedSlotsGrid,month,year,$hallBookedDates,$hallBookedDatesVal,hallBookingDatesObj,date1,date2,dArray,preservedDatesArray,tempFlag){
	$bookedSlotsGrid.find('tr').hide();
	if($bookedSlotsGrid.find('tr').length>0){
		$bookedSlotsGrid.find("tr.slot-"+month+"-"+year).show().find('a').off('click').click(function(e){
			e.preventDefault();
			if($(this).hasClass('booked-dates-type')){
				$(this).parent().find('a.booked-dates-type').removeClass('active');
				$(this).addClass('active');
				tempFlag=$(this).data('cal-class');
				dArray=$(this).parent('td').prop('class');
				dArray=dArray.split('_');
				dArray=dArray[1];
				$.each(hallBookingDatesObj,function(index,value){
					date1=value.split(":");
					date2=date1[0];
					if(date2===dArray){
						hallBookingDatesObj[index]=dArray+':'+tempFlag;
						currentDateApplied=dArray;
						return false;
					}
				});
			}
			else if($(this).hasClass('remove-added-date')){
				dArray=$(this).parent('td').prop('class');
				dArray=dArray.split('_');
				dArray=dArray[1];
				for(dateCnt = hallBookingDatesObj.length; dateCnt--;) {
					date1=hallBookingDatesObj[dateCnt];
					date1=date1.split(":");
					date2=date1[0];
					if(date2===dArray){
						hallBookingDatesObj.splice(dateCnt, 1);
						$(this).parent('td').parent('tr').remove();
						currentDateApplied=dArray;
					}
				}	
			}
			reserveHallBookingDatesFn($hallBookedDates,$hallBookedDatesVal,hallBookingDatesObj,date1,date2,dArray,preservedDatesArray,tempFlag);
		});
	}
}
function reserveHallBookingDatesFn($hallBookedDates,$hallBookedDatesVal,hallBookingDatesObj,date1,date2,dArray,preservedDatesArray,tempFlag){
	preservedDatesArray=[],tempFlag=false,date1='',date2='';
	currentDateApplied=(currentDateApplied.length>0)?new Date(currentDateApplied):new Date();
	console.log((++i)+'currentDateApplied: '+currentDateApplied)
	$hallBookedDates.multiDatesPicker('resetDates','picked').multiDatesPicker({
		altField:$hallBookedDatesVal,
		afterShow:function(){
			$hallBookedDates.find('td').removeClass('ui-datepicker-today ui-datepicker-current-day').append("<div class='booked-slot fullday'><label>Full day booked</label></div><div class='booked-slot firsthalf'><label>First half booked</label></div><div class='booked-slot secondhalf'><label>Second half booked</label></div>");
			$hallBookedDates.find('td a').removeClass('ui-state-active ui-state-highlight ui-state-hover');
		},
		deafultDate: currentDateApplied,
		beforeShowDay: function(dateFromCal) {
			date1=dateFromCal.getDate()+'-'+(dateFromCal.getMonth()+1)+'-'+dateFromCal.getFullYear();
			$.each(hallBookingDatesObj,function(index,value){
				dArray=value.split(':');
				date2=new Date(dArray[0]);
				date2=date2.getDate()+'-'+(date2.getMonth()+1)+'-'+date2.getFullYear();
				if(date1===date2){
					preservedDatesArray.push(date1);
					classnameInfo=dArray[1];
					return false;
				}
			});
			$.each(preservedDatesArray,function(i1,v1){
				if(v1==date1){
					tempFlag=true;
					return false;
				}
				else{
					tempFlag=false;
				}
			});
			if(tempFlag){
				return [false, classnameInfo, '']
			}
			else{
				return [true, '', '']
			}
			return [true]
		},
		onChangeMonthYear: function (year, month, inst) {
			$hallBookedDates.datepicker('setDate',month+'/01/'+year);
			verifyAndDisplayDates($('#listed-booked-slots'),month,year,$hallBookedDates,$hallBookedDatesVal,hallBookingDatesObj,date1,date2,dArray,preservedDatesArray,tempFlag);
			$hallBookedDatesVal.val('');
		}
	});
	//$hallBookedDatesVal.val('');
}
function getBookedSlotsDatesArray(staticBookedDaysString){
	return staticBookedDaysString.split(';');
}
function appendAddedDatesToGrid($hallBookedDates,$bookedSlotsGrid,hallBookingDatesObj,tempStr,dArray,tempArray,$hallBookedDatesVal){
	tempStr='';
	$.each(hallBookingDatesObj,function(index,value){
		//$bookedSlotsGrid.append();
		tempArray=value.split(':');
		dArray=new Date(tempArray[0]);
		tempStr+="<tr class='slot-"+(dArray.getMonth()+1)+'-'+(dArray.getFullYear())+"' style='display:none'><td>"+tempArray[0]+"</td>";
		tempStr+="<td class='date_"+tempArray[0]+"'>";
		if(tempArray[1]==='fullday'){
			tempStr+="<a href='#' class='booked-dates-type active' data-cal-class='fullday'><span class='icons-ok-squared'></span>Full day</a>";
			tempStr+="<a href='#' class='booked-dates-type' data-cal-class='firsthalf'><span class='icons-ok-squared'></span>First half</a>";
			tempStr+="<a href='#' class='booked-dates-type' data-cal-class='secondhalf'><span class='icons-ok-squared'></span>Second half</a>";
		}
		else if(tempArray[1]==='firsthalf'){
			tempStr+="<a href='#' class='booked-dates-type' data-cal-class='fullday'><span class='icons-ok-squared'></span>Full day</a>";
			tempStr+="<a href='#' class='booked-dates-type active' data-cal-class='firsthalf'><span class='icons-ok-squared'></span>First half</a>";
			tempStr+="<a href='#' class='booked-dates-type' data-cal-class='secondhalf'><span class='icons-ok-squared'></span>Second half</a>";
		}
		else if(tempArray[1]==='secondhalf'){
			tempStr+="<a href='#' class='booked-dates-type' data-cal-class='fullday'><span class='icons-ok-squared'></span>Full day</a>";
			tempStr+="<a href='#' class='booked-dates-type' data-cal-class='firsthalf'><span class='icons-ok-squared'></span>First half</a>";
			tempStr+="<a href='#' class='booked-dates-type active' data-cal-class='secondhalf'><span class='icons-ok-squared'></span>Second half</a>";
		}
		tempStr+="<a href='#' class='remove-added-date'><span class='cta-arrow icons-cancel'></span></a>";
		tempStr+="</td></tr>";
	});
	$bookedSlotsGrid.html('').append(tempStr);
	if($hallBookedDates.length>0){
		verifyAndDisplayDates($bookedSlotsGrid,($hallBookedDates.datepicker('getDate').getMonth()+1),$hallBookedDates.datepicker('getDate').getFullYear(),$hallBookedDates,$hallBookedDatesVal,hallBookingDatesObj,'','',dArray,[],'');
	}
}
function initiateDateRange(){
	var disabledDates=$( "#booking-calendar" ).data('disabled-dates'),disabledArray=[],tempVal='';
	if($( "#booking-calendar" ) && $( "#booking-calendar" ).length){
		if($.trim(''+disabledDates).length>0){
			disabledArray=disabledDates.split(';');
		}
	}
	var $headerSearchFrom=$('#header_search_from'),$headerSearchTo=$('#header_search_to');
	
	$headerSearchFrom.datepicker({
      defaultDate: "+1w",
      numberOfMonths: 1,
	  prevText: "",
	  nextText: "",
      onClose: function( selectedDate ) {
        $headerSearchTo.datepicker( "option", "minDate", selectedDate );
      }
    });
    $headerSearchTo.datepicker({
      defaultDate: "+1w",
      numberOfMonths: 1,
	  prevText: "",
	  nextText: "",
      onClose: function( selectedDate ) {
        $headerSearchFrom.datepicker( "option", "maxDate", selectedDate );
      }
    });
	
	$( "#filter_search_from_date" ).datepicker({
      defaultDate: "+1w",
      numberOfMonths: 1,
	  prevText: "",
	  nextText: "",
      onClose: function( selectedDate ) {
        $( "#filter_search_to_date" ).datepicker( "option", "minDate", selectedDate );
      }
    });
    $( "#filter_search_to_date" ).datepicker({
      defaultDate: "+1w",
      numberOfMonths: 1,
	  prevText: "",
	  nextText: "",
      onClose: function( selectedDate ) {
        $( "#filter_search_from_date" ).datepicker( "option", "maxDate", selectedDate );
      }
    });
	
	reserveHallBookingDatesFn($( "#booking-calendar" ),$( "#booking-calendar-hidden" ),getBookedSlotsDatesArray($( "#booking-calendar" ).data('disabled-dates')),date1,date2,dArray,preservedDatesArray,tempFlag);
	
	
	var $hallBookedDates=$('#add-hall-booked-dates'),$hallBookedDatesVal=$('#add-hall-booked-dates-hidden'),$bookingSlots=$('.booked-dates-type'),$activeBookingSlot=$('.booked-dates-type.active'),classnameInfo='',sampleDate,date1,date2,tempFlag=false;
	var staticBookedDaysString="05/31/2014:fullday;05/20/2014:fullday;05/02/2014:firsthalf;05/10/2014:secondhalf;04/02/2014:fullday;04/03/2014:fullday;04/05/2014:firsthalf;04/07/2014:secondhalf;06/30/2014:fullday;06/20/2014:fullday;06/02/2014:firsthalf;06/10/2014:secondhalf;06/11/2014:fullday;06/03/2014:fullday;06/05/2014:firsthalf;06/07/2014:secondhalf;07/05/2014:firsthalf;07/07/2014:secondhalf";
	
	var hallBookingDatesObj=getBookedSlotsDatesArray(staticBookedDaysString),tempDatesArray=[],dArray=[],preservedDatesArray=[],$bookedSlotsGrid=$('#listed-booked-slots'),tempStr='';
	
	reserveHallBookingDatesFn($hallBookedDates,$hallBookedDatesVal,hallBookingDatesObj,date1,date2,dArray,preservedDatesArray,tempFlag);
	
	$bookingSlots.each(function(index, element) {
        $(this).click(function(e) {
            e.preventDefault();
			$bookingSlots.removeClass('active');
			$(this).addClass('active');
			$activeBookingSlot=$(this);
        });
    });
	$bookedSlotsGrid.html('');
	appendAddedDatesToGrid($hallBookedDates,$bookedSlotsGrid,hallBookingDatesObj,tempDatesArray,dArray,tempStr,$hallBookedDatesVal);
	$("#add-booked-hall-info").click(function(e) {
        e.preventDefault();
		if($hallBookedDatesVal.val().length>0){
			tempStr='';
			tempDatesArray=$hallBookedDatesVal.val().split(',');
			$.each(tempDatesArray,function(index,value){
				hallBookingDatesObj.push(value+':fullday');
			});
			appendAddedDatesToGrid($hallBookedDates,$bookedSlotsGrid,hallBookingDatesObj,tempDatesArray,dArray,tempStr,$hallBookedDatesVal);
			reserveHallBookingDatesFn($hallBookedDates,$hallBookedDatesVal,hallBookingDatesObj,date1,date2,dArray,preservedDatesArray,tempFlag);
		}
    });
}
$(document).ready(function(e) {
    $.datepicker._updateDatepicker_original = $.datepicker._updateDatepicker;
	$.datepicker._updateDatepicker = function(inst) {
		$.datepicker._updateDatepicker_original(inst);
		var afterShow = this._get(inst, 'afterShow');
		if (afterShow)
			afterShow.apply((inst.input ? inst.input[0] : null));  // trigger custom callback
	}
	initiateDateRange();
});