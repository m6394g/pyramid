<?php
	$title = 'List of pages';
	require('helper/headtag.php');
?>
<div id="main-wrapper">
	<div id="content-wrapper">
		<div id="main-container">
        	<?php
				require('helper/header.php');
			?>
            <div style="
            			margin:0 auto;
                        max-width:960px;
                        padding:150px 5%;">
                    <ul>
                        <li><a target="_blank" href="homepage.php">Homepage</a></li>
                        <li><a target="_blank" href="search-results.php">Search Results</a></li>
                        <li><a target="_blank" href="advanced-search.php">Advanced Search</a></li>
                        <li><a target="_blank" href="hall-info.php">Hall Info</a></li>
                        <li><a target="_blank" href="map-page.php">Map Page</a></li>
                        <li><a target="_blank" href="error-page.php">Error page</a><br /><br /></li>
                        
                        <li><a target="_blank" href="agent-registration.php">Agent Registration</a></li>
                        <li><a target="_blank" href="login-page.php">Login page</a></li>
                        <li><a target="_blank" href="change-password.php">Change Password / Forgot Password</a></li>
                        <li><a target="_blank" href="add-a-hall.php">Add a Hall</a></li>
						<li><a target="_blank" href="my-halls.php">My Halls</a></li>
                        <li><a target="_blank" href="my-profile.php">My Profile</a><br /><br /></li>
                        
                        <li><a target="_blank" href="loggedin-homepage.php">Logged in Homepage</a><br/><br /></li>
                        
                        <li><a target="_blank" href="terms.php">Terms &amp; Conditions</a></li>
                    </ul>
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
