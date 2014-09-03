 <?php
	$title = 'Add a Hall';
	require('helper/headtag.php');
?>
<div id="main-wrapper">
	<div id="content-wrapper">
		<div id="main-container">
        	<?php
				require('helper/header.php');
			?>
            <?php
				require('helper/navigation-logged-in.php');
			?>
            <?php
				require('components/plain-banner.php');
			?>
            <div class="padding-base">
            	<div class="padding-base-grad">
                	<div class="padding-base-container">
                    	<label class="padding-base-imp-label">Step <span id="add-hall-step">1</span> of 10</label>
                    	<a href="#" class="cta-link primary">My profile<span class="cta-arrow icons-right-open"></span></a>
                        <a href="#" class="cta-link secondary">FAQs<span class="cta-arrow icons-help-circled"></span></a>
                    </div>
                </div>
            </div>
            <div class="general-form-container adding-a-hall" id="add-hall-form-step-1">
                <h2>1. Select a package</h2>
                <form id="add_hall_price_package">
                    <table class="form-table">
                    <tr>
                    	<td>
                            <div class="hw-form-info">
                                <span class="icons-info-circled"></span>
                                Online Hall Booking is available for Hyderabad only.<br><br>
                                Hallwala will charge 10% of the advance payments done towards Hall bookings.
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="hw-form-input grey">
                                <label><input type="radio" name="display_fees"><span class="icons-rupee"></span>100 / month</label>
                                <label><input type="radio" name="display_fees"><span class="icons-rupee"></span>275 / quarter</label>
                                <label><input type="radio" name="display_fees"><span class="icons-rupee"></span>525 / half year</label>
                                <label><input type="radio" name="display_fees"><span class="icons-rupee"></span>1000 / year</label>
                            </div>
                        </td>
                        <td>
                            <a href="#" class="form-input-help">
                                <span class="icons-help-circled"></span>
                            </a>
                        </td>
                    </tr>
                    <tr>
                    	<td>
                            <div class="hw-form-input grey">
                                <label><input type="checkbox" name="terms_checkbox">I accept the <a href="#">Pricing terms &amp; conditions</a>.</label>
                            </div>
                        </td>
                        <td>
                            <a href="#" class="form-input-help">
                                <span class="icons-help-circled"></span>
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td>
                           <button type="submit" class="cta-link primary">Confirm package<span class="cta-arrow icons-right-open"></span></button>
                        </td>
                    </tr>
                </table>
                </form>
            </div>
            <div class="general-form-container adding-a-hall hidden" id="add-hall-form-step-2">
                <h2>2. Basic information</h2>
                <form id="add_hall_general_info">                    
                    <div class="add-hall-details">
                    	<table class="form-table">
                        	<tr>
                            	<th>Name</th>
                            </tr>
                            <tr>
                            	<td>
                                    <div class="hw-form-input">
                                        <input type="text"/>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                            	<th>Hall type(s)</th>
                            </tr>
                            <tr>
                            	<td>
                                    <div class="hw-form-input grey">
                                        <label><input type="checkbox" name="add_hall_type">Corporate</label>
                                        <label><input type="checkbox" name="add_hall_type">Marriage</label>
                                        <label><input type="checkbox" name="add_hall_type">Party</label>
                                        <label><input type="checkbox" name="add_hall_type">Banquet</label>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                            	<th>Manager's Name</th>
                            </tr>
                            <tr>
                            	<td>
                                    <div class="hw-form-input">
                                        <input type="text"/>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                            	<th>Landline number</th>
                            </tr>
                            <tr>
                            	<td>
                                    <div class="hw-form-input">
                                        <input type="number"/>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                            	<th>Mobile number</th>
                            </tr>
                            <tr>
                            	<td>
                                    <div class="hw-form-input">
                                        <input type="number"/>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                            	<th>Email</th>
                            </tr>
                            <tr>
                            	<td>
                                    <div class="hw-form-input">
                                        <input type="email"/>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                            	<th>Brief description about the hall</th>
                            </tr>
                            <tr>
                            	<td>
                                    <div class="hw-form-input">
                                        <textarea></textarea>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                            	<td>
                                    <button type="submit" class="cta-link secondary">Save and proceed<span class="cta-arrow icons-right-open"></span></button>
                                </td>
                            </tr>
                        </table>
                    </div>
                </form>
            </div>
            <div class="general-form-container adding-a-hall hidden" id="add-hall-form-step-3">
                <h2>3. Confirm hall information</h2>
                <form id="add_hall_general_info_confirm">                    
                    <div class="add-hall-details">
                    	<table class="form-table">
                        	 <tr>
                                <td>
                                    <div class="hw-form-info">
                                        <span class="icons-info-circled"></span>
                                        Once payment is done, you can add photos, video, address and availability for this hall. Also, you can manage all of this information anytime.
                                    </div>
                                </td>
                            </tr>
                        	<tr>
                            	<th>Name</th>
                            </tr>
                            <tr>
                            	<td>
                                    <div class="hw-form-input grey">
                                        <span class="readonly-label">Hall Name with a lot of text</span>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                            	<th>Hall type(s)</th>
                            </tr>
                            <tr>
                            	<td>
                                    <div class="hw-form-input grey">
                                        <span class="readonly-label">Corporate, Banquet</span>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                            	<th>Manager's Name</th>
                            </tr>
                            <tr>
                            	<td>
                                    <div class="hw-form-input grey">
                                        <span class="readonly-label">John Doe</span>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                            	<th>Landline number</th>
                            </tr>
                            <tr>
                            	<td>
                                    <div class="hw-form-input grey">
                                        <span class="readonly-label"><a href="tel:040-12345678">040-12345678</a></span>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                            	<th>Mobile number</th>
                            </tr>
                            <tr>
                            	<td>
                                    <div class="hw-form-input grey">
                                        <span class="readonly-label"><a href="tel:9876543210">9876543210</a></span>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                            	<th>Email</th>
                            </tr>
                            <tr>
                            	<td>
                                	<div class="hw-form-input grey">
                                    	<span class="readonly-label"><a href="mailto:nosuchhallexists@nodomainfound.com">nosuchhallexists@nodomainfound.com</a></span>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                            	<th>Brief description about the hall</th>
                            </tr>
                            <tr>
                            	<td>
                                    <div class="hw-form-input grey">
                                    	<span class="readonly-label">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin gravida consectetur enim vitae vulputate. Nullam sed fringilla nibh. Praesent iaculis tellus est, quis rutrum nulla pulvinar nec. Aenean pellentesque ipsum in leo varius pulvinar. Fusce et urna sed nulla lobortis consectetur.</span>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                            	<td>
                                    <button type="button" class="cta-link secondary">Review and edit<span class="cta-arrow icons-right-open"></span></button><button type="submit" class="cta-link primary">Make payment<span class="cta-arrow icons-right-open"></span></button>
                                </td>
                            </tr>
                        </table>
                    </div>
                </form>
            </div>
            <div class="general-form-container adding-a-hall hidden large" id="add-hall-form-step-4">
                <h1>Congratulations!</h1>
                <h4>Your hall is added to Hallwala&trade;.</h4>
                	<form id="add_hall_general_info_confirmed">
                    	<table class="form-table">
                     <tr>
                        <td>
                            <div class="hw-form-info">
                                <span class="icons-info-circled"></span>
                                Your payment of <span class="icons-rupee"></span>1000 was successfully received.<br/><br />Your hall id is generated as <strong><u>HW-040-32156</u></strong>. Please keep this id handy for your future reference.
                            </div>
                        </td>
                    </tr>
                    <tr>
                    	<td>
                    	<button type="submit" class="cta-link primary large">Proceed to next steps<span class="cta-arrow icons-right-open"></span></button>
                <br/><br/>
                <a href="#" class="cta-link secondary">View your halls<span class="cta-arrow icons-right-open"></span></a>
                    	</td>
                    </tr>
                </table>
                    </form>
            </div>
            <div class="general-form-container adding-a-hall hidden" id="add-hall-form-step-5">
                <h2>4. Address and location</h2>
                <form id="add_hall_address_location">                    
                    <div class="add-hall-details">
                    	<table class="form-table">
                        	<tr>
                            	<th>Address Line 1</th>
                            </tr>
                            <tr>
                            	<td>
                                    <div class="hw-form-input">
                                        <input type="text"/>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                            	<th>Address Line 2</th>
                            </tr>
                            <tr>
                            	<td>
                                    <div class="hw-form-input">
                                        <input type="text"/>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                            	<th>State</th>
                            </tr>
                            <tr>
                            	<td>
                                    <div class="hw-form-input">
                                        <select>
                                        	<option>Andhra Pradesh</option>
                                            <option>Karnataka</option>
                                        </select>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                            	<th>City</th>
                            </tr>
                            <tr>
                            	<td>
                                    <div class="hw-form-input">
                                        <select>
                                        	<option>Hyderabad</option>
                                            <option>Hitec City</option>
                                        </select>
                                    </div>
                                </td>
                            </tr>
                            </tr>
                            <tr>
                            	<th>Pin</th>
                            </tr>
                            <tr>
                            	<td>
                                    <div class="hw-form-input">
                                        <input type="number"/>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                            	<th>Google&reg; Maps&reg; addess</th>
                            </tr>
                            <tr>
                            	<td>
                                    <div class="hw-form-info">
                                        <span class="icons-info-circled"></span>
                                        Please enter the address which can help the customer to find your hall on <a href="http://maps.google.com" title="Google Maps" target="_blank">Google&reg; Maps&reg;</a>.<br /><br />
                                        Please read Google&reg;'s <a href="#">Terms &amp; Conditions</a>. 
                                    </div>
                                </td>
                            </tr>
                            <tr>
                            	<td>
                                    <div class="hw-form-input">
                                        <textarea></textarea>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                            	<td>
                                    <button type="submit" class="cta-link secondary">Save and proceed<span class="cta-arrow icons-right-open"></span></button>
                                </td>
                            </tr>
                        </table>
                    </div>
                </form>
            </div>
            <div class="general-form-container adding-a-hall hidden" id="add-hall-form-step-6">
                <h2>5. Photos and Video</h2>
                <form id="add_hall_photos_video">                    
                    <div class="add-hall-details">
                    	<table class="form-table">
                        	<tr>
                            	<th>Youtube&reg; video</th>
                            </tr>
                            <tr>
                            	<td>
                                    <div class="hw-form-info">
                                        <span class="icons-info-circled"></span>
                                        Please read Youtube&reg;'s <a href="http://maps.google.com" title="Google Maps" target="_blank">Terms &amp; Conditions</a>.
                                    </div>
                                </td>
                            </tr>
                            <tr>
                            	<td>
                                    <div class="hw-form-input">
                                        <input type="text"/>
                                    </div>
                                </td>
                            </tr>
                        	<tr>
                            	<td>
                                    <button type="submit" class="cta-link secondary">Save and proceed<span class="cta-arrow icons-right-open"></span></button>
                                </td>
                            </tr>
                        </table>
                    </div>
                </form>
            </div>
            <div class="general-form-container adding-a-hall hidden" id="add-hall-form-step-7">
                <h2>6. Price packages</h2>
                <form id="add_hall_price_packages"> 
                	<div class="add-hall-details">
                    	<table class="form-table">
                        	<tr>
                            	<th>Number of proposed packages</th>
                            </tr>
                            <tr>
                            	<td>
                                    <div class="hw-form-input">
                                        <select>
                                        	<option>One</option>
                                            <option>Two</option>
                                            <option>Three</option>
                                            <option>Four</option>
                                            <option>Five</option>
                                            <option>Six</option>
                                    	</select>
                                    </div>
                                </td>
                            </tr>
                        </table>
                    </div>                   
                    <div class="add-hall-details">
                    	<a href="#" class="price-package-list-item active"><span class="icons-rupee"></span><span class="label">Package 1</span><span class="nav-expand-collapse icons-plus"></span><span class="nav-expand-collapse icons-minus"></span></span></a>
                        <div id="hall-price-package-1" class="hall-price-package-info" style="display:block">
                        	<table class="form-table">
                        	<tr>
                            	<th>Package name</th>
                            </tr>
                            <tr>
                            	<td>
                                    <div class="hw-form-input">
                                        <input type="text"/>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                            	<th>Price range</th>
                            </tr>
                            <tr>
                            	<td>
                                    <div class="hw-form-input divided-two">
                                        <input type="text" placeholder="Minimum"/>
                                    </div>
                                    <div class="hw-form-input divided-two">
                                        <input type="text" placeholder="Maximum"/>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                            	<th>Description</th>
                            </tr>
                            <tr>
                            	<td>
                                    <div class="hw-form-input double">
                                        <textarea></textarea>
                                    </div>
                                </td>
                            </tr>
                        </table>
                        </div>
                        <a href="#" class="price-package-list-item"><span class="icons-rupee"></span><span class="label">Package 2</span><span class="nav-expand-collapse icons-plus"></span><span class="nav-expand-collapse icons-minus"></span></span></a>
                        <div id="hall-price-package-2" class="hall-price-package-info">
                        	<table class="form-table">
                        	<tr>
                            	<th>Package name</th>
                            </tr>
                            <tr>
                            	<td>
                                    <div class="hw-form-input">
                                        <input type="text"/>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                            	<th>Price range</th>
                            </tr>
                            <tr>
                            	<td>
                                    <div class="hw-form-input divided-two">
                                        <input type="text" placeholder="Minimum"/>
                                    </div>
                                    <div class="hw-form-input divided-two">
                                        <input type="text" placeholder="Maximum"/>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                            	<th>Description</th>
                            </tr>
                            <tr>
                            	<td>
                                    <div class="hw-form-input double">
                                        <textarea></textarea>
                                    </div>
                                </td>
                            </tr>
                        </table>
                        </div>
                    </div>
                    <div class="add-hall-details">
                    	<table class="form-table">
                        <tr>
                        	<td>
                            </td>
                            <td>
								<button type="submit" class="cta-link secondary">Save and proceed<span class="cta-arrow icons-right-open"></span></button>
                            </td>
                        </tr>
                    </table>
                    </div>
                </form>
            </div>
            <div class="general-form-container adding-a-hall hidden" id="add-hall-form-step-8">
                <h2>7. Availability</h2>
                <form id="add_hall_dates_availability">
                	<table class="form-table">
                    	<tr>
                        	<td><div class="hw-form-info text-align-center">
                                        <span class="icons-info-circled"></span>
                                        Select one or more dates to be marked as booked.
                                    </div>
                            </td>
                        </tr>
                    </table>                
                    <div class="add-hall-details">
                    	<div id="add-hall-booked-dates" class="booking-inline-calendar" data-disabled-dates="2014-09-01;2014-09-02;2014-09-03;2014-09-05;2014-09-10;2014-09-16;2014-09-22;2014-09-30"></div>
                    	<table class="form-table add-hall-availibility">
                            <tr>
                            	<td>
                                    <input type="hidden" id="add-hall-booked-dates-hidden" value=""/>
                                    <!--<br /><br />
                                    <textarea style="border:1px solid #f00" id="add-hall-booked-dates-hidden-alt" value=""></textarea>-->
                                </td>
                            </tr>
                            <tr>
                            	<td colspan="2">
                                	<div id="add-booked-hall-info-parent">
                                    <button type="button" id="add-booked-hall-info" class="cta-link secondary">Add selected dates<span class="cta-arrow icons-plus"></span></button>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                            	<td>
                            	<table id="listed-booked-slots" class="form-table">
                                	<tr>
                            	<td>12/12/1123</td><td>
                                	<a href="#" class="booked-dates-type active" data-cal-class="fullday"><span class="icons-ok-squared"></span>Full day</a>
                                    <a href="#" class="booked-dates-type" data-cal-class="firsthalf"><span class="icons-ok-squared"></span>First half</a>
                                    <a href="#" class="booked-dates-type" data-cal-class="secondhalf"><span class="icons-ok-squared"></span>Second half</a>
                                    <a href="#" class="remove-added-date"><span class="cta-arrow icons-cancel"></span></a>
                                    </td>
                                  </tr>
                               </table>
                               </td>
                            </tr>
                        </table>
                    </div>
                    <button type="submit" class="cta-link primary">Save<span class="cta-arrow icons-right-open"></span></button>
                </form>
            </div>
        </div>
	</div>
</div>
<?php
	require('helper/footer.php');
?>
<?php
	require('helper/scripthelper.php');
?>
</body>
</html>
