<?php
	$title = 'Map Page';
	require('helper/headtag.php');
?>
<link href="../css/components/map-specific.css" rel="stylesheet">
<div id="main-wrapper">
	<div id="content-wrapper" class="map-page">
		<div id="main-container">
        	<?php
				require('helper/header.php');
			?>
            <?php
				require('helper/navigation.php');
			?>
            <div id="map-content">
            	<div id="map-canvas">
                </div>
            </div>
            <div class="map-search-wrapper" id="map-search-wrapper">
                <div class="map-search-container">
                    <div class="map-search-main">
                        <div class="map-search-content">
                            <div class="map-search">
                                <h4>Search a hall</h4>
                                <form id="map_search_form">
                                    <table class="form-table">
                                        <tr>
                                            <td>
                                                <div class="hw-form-input">
                                                    <select id="hall_filter">
                                                        <option value="all">All</option>
                                                        <option value="corporate">For corporates</option>
                                                        <option value="wedding">For weddings</option>
                                                        <option value="party">For parties</option>
                                                        <option value="banquet">For banquets</option>
                                                    </select>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="hw-form-input">
                                                    <input id="hall_place" type="text" placeholder="Enter city or area"/>
                                                    <button type="submit"><span class="icons-search"></span></button>
                                                </div>
                                            </td>
                                        </tr>
                                    </table>
                                </form>
                            </div>
                        </div>
                        <div class="map-search-list-container">
                        </div>
                    </div>
                </div>
            </div>
        	<div id="map-mobile-content">
            	<img src="#" id="map-mobile-image" />
                <div id="map-mobile-ctas">
                	<a href="#" class="cta-link secondary">Get directions<span class="cta-arrow icons-right-open"></span></a>
                    <a href="#" class="cta-link primary">View hall<span class="cta-arrow icons-right-open"></span></a>
                </div>
            </div>
            <div id="cloned-map-result">
            </div>
            <div id="map-mobile-search-results">
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
