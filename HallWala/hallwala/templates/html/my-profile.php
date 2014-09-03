<?php
	$title = 'My profile';
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
                        <a href="#" class="cta-link primary">My halls<span class="cta-arrow icons-right-open"></span></a>
                        <a href="#" class="cta-link secondary">FAQs<span class="cta-arrow icons-help-circled"></span></a>
                    </div>
                </div>
            </div>
            <div class="general-form-container">
                <div class="add-hall-details" id="my-profile-link-container">
                    	<table class="form-table">
                        	<tr>
                            	<th>First name</th>
                            </tr>
                            <tr>
                            	<td>
                                    <div class="hw-form-input grey">
                                        <span class="readonly-label">Pankaj</span>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                            	<th>Last name</th>
                            </tr>
                            <tr>
                            	<td>
                                    <div class="hw-form-input grey">
                                        <span class="readonly-label">Nikhade</span>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                            	<th>Email</th>
                            </tr>
                            <tr>
                            	<td>
                                    <div class="hw-form-input grey">
                                        <span class="readonly-label"><a href="mailto:Pankaj.Nikhade@someemaildomain.com">Pankaj.Nikhade@someemaildomain.com</a></span>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                            	<th>Contact number</th>
                            </tr>
                            <tr>
                            	<td>
                                    <div class="hw-form-input grey">
                                        <span class="readonly-label"><a href="tel:9876543210">9876543210</a></span>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                            	<td>
                                    <button type="button" class="cta-link secondary">Change password<span class="cta-arrow icons-right-open"></span></button><button type="submit" class="cta-link primary">Update<span class="cta-arrow icons-right-open"></span></button>
                                </td>
                            </tr>
                        </table>
                    </div>
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
