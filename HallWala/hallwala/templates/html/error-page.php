<?php
	$title = 'Error page';
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
            <div class="general-form-container">
                <h2>Oops, something went wrong!</h2>
                <form id="add_hall_price_package">
                    <table class="form-table">
                    <tr>
                    	<td>Sorry, it seems we have not yet perfected our systems to resolve the request you just made.<br /><br />
								Our minions will be looking into this soon and will make sure such issues don't pop up in future. Alternatively, you can try to <a href="#">make a new search</a> or <a href="#">go to homepage</a>.</td>
                    </tr>
                    <!--<tr>
                    	<th>
                            Name
                        </th>
                    </tr>
                    <tr>
                        <td>
                            <div class="hw-form-input">
                                <input type="text" />
                            </div>
                        </td>
                        <td>
                            <a href="#" class="form-input-help">
                                <span class="icons-help-circled"></span>
                            </a>
                        </td>
                    </tr>
                    <tr>
                    	<th>
                            How did you land up here?
                        </th>
                    </tr>
                    <tr>
                    	<td>
                            <div class="hw-form-input">
                                <textarea></textarea>
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
                           <button type="submit" class="cta-link primary">Send<span class="cta-arrow icons-right-open"></span></button>
                        </td>
                    </tr>-->
                </table>
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
