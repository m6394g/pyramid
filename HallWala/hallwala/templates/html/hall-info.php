<?php
	$title = 'Hall info';
	require('helper/headtag.php');
?>
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
            <div class="padding-base">
            	<div class="padding-base-grad">
                	<div class="padding-base-container">
                        <a href="#" class="cta-link primary">New search<span class="cta-arrow icons-right-open"></span></a>
                        <a href="#" class="cta-link secondary">Back<span class="cta-arrow icons-right-open"></span></a>
                    </div>
                </div>
            </div>
            <div class="view-hotel-container">
                <div class="container-left">
                    <section class="container-primary text-align-center">
                        <div class="image-content">
                            <img src="../images/container-bg2.jpg">
                        </div>
                        <h2>Hall name with a very long info in text</h2>
                        <p>12345, Building name, Street name, Locality</p>
                    </section>
                    <section class="container-secondary text-align-left">
                        <h3>Contact</h3>
                        <table class="contact-table">
                            <tr><td rowspan="4" class="label">Phone:</td><td><a href="tel:0123-456-7890">0123-456-7890</a></td></tr>
                            <tr><td><a href="tel:0123-456-7890">0123-456-7890</a></td></tr>
                            <tr><td><a href="tel:0123-456-7890">0123-456-7890</a></td></tr>
                            <tr><td><a href="tel:0123-456-7890">0123-456-7890</a></td></tr>
                            
                            <tr><td rowspan="3" class="label">Email:</td><td><a href="mailto:noreplyemail@nodomainexists.com">noreplyemail@nodomainexists.com</a></td></tr>
                            <tr><td><a href="mailto:noreplyemail@nodomainexists.com">noreplyemail@nodomainexists.com</a></td></tr>
                            <tr><td><a href="mailto:noreplyemail@nodomainexists.com">noreplyemail@nodomainexists.com</a></td></tr>
                            
                            <tr><td class="label">Website:</td><td><a href="http://www.nodomainexists.com" target="_blank">www.nodomainexists.com</a></td></tr>
                            
                        </table>
                    </section>
					<section class="container-primary text-align-left">
                        <h3>Facilities</h3>
                        <section class="hall-facility-wrapper">
                            <article class="hall-facility">
                                <span class="icon-facility icons-parking"></span>
                                <span class="icon-facility-text">Parking</span>
                            </article>
                            <article class="hall-facility">
                                <span class="icon-facility icons-tree-2"></span>
                                <span class="icon-facility-text">Lawn</span>
                            </article>
                            <article class="hall-facility">
                                <span class="icon-facility icons-gym"></span>
                                <span class="icon-facility-text">Gym</span>
                            </article>
                            <article class="hall-facility">
                                <span class="icon-facility icons-flag-checkered"></span>
                                <span class="icon-facility-text">Carting</span>
                            </article>
                            <article class="hall-facility">
                                <span class="icon-facility icons-flight"></span>
                                <span class="icon-facility-text">Airport pickup / drop</span>
                            </article>
                            <article class="hall-facility">
                                <span class="icon-facility icons-chart-bar"></span>
                                <span class="icon-facility-text">Conference room</span>
                            </article>
                            <article class="hall-facility">
                                <span class="icon-facility icons-coffee"></span>
                                <span class="icon-facility-text">Cafe</span>
                            </article>
                            <article class="hall-facility">
                                <span class="icon-facility icons-food"></span>
                                <span class="icon-facility-text">Dining</span>
                            </article>
                            <article class="hall-facility">
                                <span class="icon-facility icons-bar"></span>
                                <span class="icon-facility-text">Bar</span>
                            </article>
                            <article class="hall-facility">
                                <span class="icon-facility icons-taxi"></span>
                                <span class="icon-facility-text">Transport</span>
                            </article>
                            <article class="hall-facility">
                                <span class="icon-facility icons-note-beamed"></span>
                                <span class="icon-facility-text">DJ / Dancing floor</span>
                            </article>
                            <article class="hall-facility">
                                <span class="icon-facility icons-book"></span>
                                <span class="icon-facility-text">Reading hall</span>
                            </article>
                            
                            <article class="hall-facility">
                                <span class="icon-facility icons-shop"></span>
                                <span class="icon-facility-text">Shopping gallery</span>
                            </article>
                            <article class="hall-facility">
                                <span class="icon-facility icons-signal"></span>
                                <span class="icon-facility-text">Wi-fi</span>
                            </article>
                            <article class="hall-facility">
                                <span class="icon-facility icons-monitor"></span>
                                <span class="icon-facility-text">Stage monitors</span>
                            </article>
                            <article class="hall-facility">
                                <span class="icon-facility icons-videocam-alt"></span>
                                <span class="icon-facility-text">Video recording</span>
                            </article>
                            <article class="hall-facility">
                                <span class="icon-facility icons-swimming"></span>
                                <span class="icon-facility-text">Swimming pool</span>
                            </article>
                            <article class="hall-facility">
                                <span class="icon-facility icons-theatre"></span>
                                <span class="icon-facility-text">Mini theatre</span>
                            </article>
                            
                            <article class="hall-facility">
                                <span class="icon-facility icons-golf"></span>
                                <span class="icon-facility-text">Golf area</span>
                            </article>
                            <article class="hall-facility">
                                <span class="icon-facility icons-ambulance"></span>
                                <span class="icon-facility-text">Medical facilities</span>
                            </article>
                        </section>
                    </section>
                    <section class="container-secondary video-intro">
                        <div class="video-container">
                            <!--<iframe width="420" height="315" src="//www.youtube.com/embed/ubTveCihjoQ" frameborder="0" allowfullscreen></iframe>-->
                        </div>
                    </section>
                    <section class="container-primary img-gallery">
                        <a href="#" data-start-slide='0'><img src="../images/container-bg1.jpg"><img class="grayscale" src="../images/container-bg1.jpg"></a>
                        <a href="#" data-start-slide='1'><img src="../images/container-bg2.jpg"><img class="grayscale" src="../images/container-bg2.jpg"></a>
                        <a href="#" data-start-slide='2'><img src="../images/holi-one2.jpg"><img class="grayscale" src="../images/holi-one2.jpg"></a>
                        <a href="#" data-start-slide='3'><img src="../images/container-bg1.jpg"><img class="grayscale" src="../images/container-bg1.jpg"></a>
                        <a href="#" data-start-slide='4'><img src="../images/container-bg2.jpg"><img class="grayscale" src="../images/container-bg2.jpg"></a>
                        <a href="#" data-start-slide='5'><img src="../images/holi-one2.jpg"><img class="grayscale" src="../images/holi-one2.jpg"></a>
                        <a href="#" data-start-slide='6'><img src="../images/container-bg1.jpg"><img class="grayscale" src="../images/container-bg1.jpg"></a>
                        <a href="#" data-start-slide='7'><img src="../images/container-bg2.jpg"><img class="grayscale" src="../images/container-bg2.jpg"></a>
                    </section>
                    <section class="container-secondary text-align-left reviews-container">
                        <h3>Reviews</h3>
                        <article class="hall-review">
                            <div class="hall-review-title"><h6>Pankaj Nikhade</h6><div class="hall-rating">
                                    <span class="icons-star"></span><span class="icons-star"></span><span class="icons-star"></span><span class="icons-star"></span><span class="icons-star"></span>                            
                                </div></div>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla quam erat, sollicitudin ac arcu sed, sagittis eleifend nibh. Aliquam erat volutpat. Vestibulum in lacinia augue. In eget augue mattis, condimentum risus vel, pharetra odio. Phasellus ut pretium nisl. Phasellus volutpat commodo justo vel commodo.</p>
                        </article>
                        <article class="hall-review">
                            <div class="hall-review-title"><h6>Pankaj Nikhade</h6><div class="hall-rating">
                                    <span class="icons-star"></span><span class="icons-star"></span><span class="icons-star"></span><span class="icons-star"></span><span class="icons-star"></span>                            
                                </div></div>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla quam erat, sollicitudin ac arcu sed, sagittis eleifend nibh. Aliquam erat volutpat. Vestibulum in lacinia augue. In eget augue mattis, condimentum risus vel, pharetra odio. Phasellus ut pretium nisl. Phasellus volutpat commodo justo vel commodo.</p>
                        </article>
                        <article class="hall-review">
                            <div class="hall-review-title"><h6>Pankaj Nikhade</h6><div class="hall-rating">
                                    <span class="icons-star"></span><span class="icons-star"></span><span class="icons-star"></span><span class="icons-star"></span><span class="icons-star"></span>                            
                                </div></div>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla quam erat, sollicitudin ac arcu sed, sagittis eleifend nibh. Aliquam erat volutpat. Vestibulum in lacinia augue. In eget augue mattis, condimentum risus vel, pharetra odio. Phasellus ut pretium nisl. Phasellus volutpat commodo justo vel commodo.</p>
                        </article>
                        <article class="hall-review">
                            <div class="hall-review-title"><h6>Pankaj Nikhade</h6><div class="hall-rating">
                                    <span class="icons-star"></span><span class="icons-star"></span><span class="icons-star"></span><span class="icons-star"></span><span class="icons-star"></span>                            
                                </div></div>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla quam erat, sollicitudin ac arcu sed, sagittis eleifend nibh. Aliquam erat volutpat. Vestibulum in lacinia augue. In eget augue mattis, condimentum risus vel, pharetra odio. Phasellus ut pretium nisl. Phasellus volutpat commodo justo vel commodo.</p>
                        </article>
                        <a href="#" class="cta-link secondary">View all<span class="cta-arrow icons-right-open"></span></a>
                    </section>
                    
                </div>
                <div class="container-right">
                	<section class="container-primary">
                        <h4>Availability</h4>
                        <div id="booking-calendar" class="booking-inline-calendar" data-disabled-dates="05/31/2014:fullday;05/20/2014:fullday;05/02/2014:firsthalf;05/10/2014:secondhalf;04/02/2014:fullday;04/03/2014:fullday;04/05/2014:firsthalf;04/07/2014:secondhalf;06/30/2014:fullday;06/20/2014:fullday;06/02/2014:firsthalf;06/10/2014:secondhalf;06/11/2014:fullday;06/03/2014:fullday;06/05/2014:firsthalf;06/07/2014:secondhalf"></div>
                    </section>
                	<section class="container-secondary booking-information">
                        <h4>Booking information</h4>
                        <table class="form-table">
                        	<tr>
                            	<th class="large"><span class="icons-rupee"></span></th><td class="large"><strong>8,88,000 to 8,88,000</strong></td>
                            </tr>
                            <tr>
                            	<th><span class="icons-calendar"></span></th><td>14-Apr-2014 to 18-Apr-2014</td>
                            </tr>
                            <tr>
                            	<th><span class="icons-users-1"></span></th><td>800 to 1000</td>
                            </tr>
                            <tr>
                            	<th><span class="icons-food"></span></th><td>800 to 1000</td>
                            </tr>
                        </table>
                        <a href="#" class="cta-link primary large">Get a quote<span class="cta-arrow icons-right-open"></span></a>
                        <a href="#" class="cta-link secondary">Customize package<span class="cta-arrow icons-right-open"></span></a>
                        <a href="#" class="cta-link secondary">Policies / FAQ<span class="cta-arrow icons-right-open"></span></a>
                        <a href="#" class="cta-link tertiary print-page"><span class="icon-tertiary icons-print"></span>Print this page</a>
                    </section>
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
