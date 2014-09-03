<?php
	$title = 'Advanced Search page';
	require('helper/headtag.php');
?>
<link href="../css/components/map-specific.css" rel="stylesheet">
<div id="main-wrapper">
	<div id="content-wrapper">
		<div id="main-container">
        	<?php
				require('helper/header.php');
			?>
            <?php
				require('helper/navigation.php');
			?>
            <?php
				require('components/plain-banner.php');
			?>
            <div class="general-form-container text-align-center">
                <h2>Search a hall</h2>
                <form id="add_hall_price_package">
                    <div class="filter-container">
                <div class="filter-options-wrapper">
                	<a href="#" class="hw-filter-link" id="city-filter">City - Hyderabad<span class="nav-expand-collapse icons-plus"></span><span class="nav-expand-collapse icons-minus"></span></a>
                    <div class="hw-filter-container" data-nav="city-filter">
                    	<div class="hw-form-input">
                            <input type="text" placeholder="Enter a city...">
                        </div>
                    </div>
                    <a href="#" class="hw-filter-link" id="date-range-filter">Dates - 04/10/2014 to 04/13/2014<span class="nav-expand-collapse icons-plus"></span><span class="nav-expand-collapse icons-minus"></span></a>
                    <div class="hw-filter-container" data-nav="date-range-filter">
                    	<table class="form-table">
                            <tr>
                                <td>
                                    <div class="hw-form-input">
                                        <input type="text" placeholder="From" class="hw-datepicker" id="filter_search_from_date">
                                    </div>
                                </td>
                                <td>
                                    <div class="hw-form-input">
                                        <input type="text" placeholder="To" class="hw-datepicker" id="filter_search_to_date">
                                    </div>
                                </td>
                            </tr>
                        </table>
                    </div>
                    <a href="#" class="hw-filter-link" id="price-range-filter">Price (in <span class="icons-rupee"></span>) - <span class="icons-rupee"></span> 8,88,000 to <span class="icons-rupee"></span> 8,88,000<span class="nav-expand-collapse icons-plus"></span><span class="nav-expand-collapse icons-minus"></span></a>
                    <div class="hw-filter-container" data-nav="price-range-filter">
                    	<table class="form-table">
                            <tr>
                                <td>
                                    <div class="hw-form-input">
                                        <input type="text" placeholder="Min">
                                    </div>
                                </td>
                                <td>
                                    <div class="hw-form-input">
                                        <input type="text" placeholder="Max">
                                    </div>
                                </td>
                            </tr>
                        </table>
                    </div>
                    <a href="#" class="hw-filter-link" id="guests-range-filter">Guests capacity - 400 to 1000<span class="nav-expand-collapse icons-plus"></span><span class="nav-expand-collapse icons-minus" data-nav="guests-range-filter"></span></a>
                    <div class="hw-filter-container" data-nav="guests-range-filter">
                    	<table class="form-table">
                            <tr>
                                <td>
                                    <div class="hw-form-input">
                                        <input type="text" placeholder="Min">
                                    </div>
                                </td>
                                <td>
                                    <div class="hw-form-input">
                                        <input type="text" placeholder="Max">
                                    </div>
                                </td>
                            </tr>
                        </table>
                    </div>
                    <a href="#" class="hw-filter-link" id="locality-filter">Locality<span class="nav-expand-collapse icons-plus"></span><span class="nav-expand-collapse icons-minus"></span></a>
                    <div class="hw-filter-container" data-nav="locality-filter">
                    	<a href="#" class="checkbox-filter"><span class="icons-ok-squared"></span>Madhapur</a>
                        <a href="#" class="checkbox-filter active"><span class="icons-ok-squared"></span>Banjara Hills</a>
                        <a href="#" class="checkbox-filter"><span class="icons-ok-squared"></span>Madhapur with a very long text</a>
                        <a href="#" class="checkbox-filter"><span class="icons-ok-squared"></span>Madhapur</a>
                        <a href="#" class="checkbox-filter active"><span class="icons-ok-squared"></span>Banjara Hills</a>
                        <a href="#" class="checkbox-filter"><span class="icons-ok-squared"></span>Madhapur with a very long text</a>
                        <a href="#" class="checkbox-filter"><span class="icons-ok-squared"></span>Madhapur</a>
                        <a href="#" class="checkbox-filter active"><span class="icons-ok-squared"></span>Banjara Hills</a>
                        <a href="#" class="checkbox-filter"><span class="icons-ok-squared"></span>Madhapur with a very long text</a>
                        <a href="#" class="checkbox-filter"><span class="icons-ok-squared"></span>Madhapur</a>
                        <a href="#" class="checkbox-filter active"><span class="icons-ok-squared"></span>Banjara Hills</a>
                        <a href="#" class="checkbox-filter"><span class="icons-ok-squared"></span>Madhapur with a very long text</a>
                        <a href="#" class="checkbox-filter"><span class="icons-ok-squared"></span>Madhapur</a>
                        <a href="#" class="checkbox-filter active"><span class="icons-ok-squared"></span>Banjara Hills</a>
                        <a href="#" class="checkbox-filter"><span class="icons-ok-squared"></span>Madhapur with a very long text</a>
                        <a href="#" class="checkbox-filter"><span class="icons-ok-squared"></span>Madhapur</a>
                        <a href="#" class="checkbox-filter active"><span class="icons-ok-squared"></span>Banjara Hills</a>
                        <a href="#" class="checkbox-filter"><span class="icons-ok-squared"></span>Madhapur with a very long text</a>
                        <a href="#" class="checkbox-filter"><span class="icons-ok-squared"></span>Madhapur</a>
                        <a href="#" class="checkbox-filter active"><span class="icons-ok-squared"></span>Banjara Hills</a>
                        <a href="#" class="checkbox-filter"><span class="icons-ok-squared"></span>Madhapur with a very long text</a>
                        <a href="#" class="checkbox-filter"><span class="icons-ok-squared"></span>Madhapur</a>
                        <a href="#" class="checkbox-filter active"><span class="icons-ok-squared"></span>Banjara Hills</a>
                        <a href="#" class="checkbox-filter"><span class="icons-ok-squared"></span>Madhapur with a very long text</a>
                    </div>
                    <a href="#" class="hw-filter-link" id="facilities-filter">Facilities<span class="nav-expand-collapse icons-plus"></span><span class="nav-expand-collapse icons-minus"></span></a>
                    <div class="hw-filter-container" data-nav="facilities-filter">
                    	<a href="#" class="checkbox-filter"><span class="icon-facility icons-signal"></span>Wi-fi</a>
                        <a href="#" class="checkbox-filter"><span class="icon-facility icons-monitor"></span>Stage monitors</a>
                        <a href="#" class="checkbox-filter"><span class="icon-facility icons-videocam-alt"></span>Video recordings</a>
                        <a href="#" class="checkbox-filter"><span class="icon-facility icons-taxi"></span>Transport</a>
                        <a href="#" class="checkbox-filter"><span class="icon-facility icons-swimming"></span>Swimming pool</a>
                        <a href="#" class="checkbox-filter"><span class="icon-facility icons-lodging"></span>Lodging</a>
                        <a href="#" class="checkbox-filter"><span class="icon-facility icons-ambulance"></span>Medical facilities</a>
                        <a href="#" class="checkbox-filter"><span class="icon-facility icons-parking"></span>Parking</a>
                    </div>
                    <a href="#" class="hw-filter-link" id="sort-filter">Sort by<span class="nav-expand-collapse icons-plus"></span><span class="nav-expand-collapse icons-minus"></span></a>
                    <div class="hw-filter-container" data-nav="sort-filter">
                    	<div class="hw-form-input">
                            <select>
                                <option value="">Popularity</option>
                            	<option value="">Ratings</option>
                                <option value="">Price</option>
                                <option value="">Location</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
            <a href="#" id="cancel-filter" class="cta-link secondary">Cancel<span class="cta-arrow icons-right-open"></span></a>
            <a href="#" id="apply-filter" class="cta-link primary">Apply filters<span class="cta-arrow icons-right-open"></span></a>
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
<!-- <script src="http://maps.googleapis.com/maps/api/js?sensor=false"></script> -->
<script src="http://maps.googleapis.com/maps/api/js?sensor=false"></script>
<script type="text/javascript" src="../js/infobox.js"></script>
<script type="text/javascript" src="../mapjson.js"></script>
<script type="text/javascript" src="../js/map-specific.js"></script>
</body>
</html>
