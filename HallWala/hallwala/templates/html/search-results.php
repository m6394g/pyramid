<?php
	$title = 'Search Results';
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
            <div class="padding-base" id="search-results-info-filter">
            	<div class="padding-base-grad">
                	<div class="padding-base-container">
                        <label class="padding-base-imp-label">36 Halls found</label>
                        <a href="#" id="grid-layout" class="cta-link secondary icons-alone active"><span class="icons-layout"></span></a>
                        <a href="#" id="list-layout" class="cta-link secondary icons-alone"><span class="icons-list"></span></a>
                        <a href="#" id="modify-search" class="cta-link primary">Modify search<span class="cta-arrow icons-search"></span></a>
                    </div>
                </div>
            </div>
            
            <?php
				require('components/search-filters.php');
			?>
            
            <div class="page-content">
            	<div class="flexi-grid">
                	<article class="flexi-grid-article" data-article-id="12345">
						<div class="flexi-grid-article-content">                    
                            <div class="image-thumb">
                                <a href="#"><img src="../images/hotels/h1.jpg" alt=""></a>
                                <div class="hall-rating">
                                    <span class="icons-star"></span><span class="icons-star"></span><span class="icons-star"></span><span class="icons-star"></span><span class="icons-star"></span>                            
                                </div>
                            </div>
                            <div class="hall-info">
                                <div class="hall-name-wrapper"><a href="#" class="hall-name">Hotel 1 Lorem</a></div>
                                <div class="hall-place-wrapper"><a href="#" class="hall-place">Lorem ipsum dolor, 123456, Madhapur</a></div>
                                <label class="hall-price"><span class="icon-currency icons-rupee"></span>8,88,000 - 8,88,000<span class="tarrif-schecule">per day</span></label>
                                <p class="hall-desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed eu velit ornare, dictum quam et, aliquet justo. Sed euismod ipsum nec enim elementum, quis mollis magna fringilla. Vestibulum purus metus, scelerisque nec bibendum non, porttitor sed erat. Duis suscipit odio lectus.</p>
                                <div class="hall-features">
                                	<div title="Guests capacity" class="guests-capacity hall-feature-item"><span class="icons-users-1"></span>300-500</div>
                                	<span title="Parking" class="icons-parking hall-feature-item"></span>
                                    <span title="Conference room" class="icons-briefcase hall-feature-item"></span>
                                    <span title="Wi-fi" class="icons-signal hall-feature-item"></span>
                                    <span title="Cafe" class="icons-coffee hall-feature-item"></span>
                                    <span title="Lunch/Dinner" class="icons-food hall-feature-item"></span>
                                    <span title="Bar" class="icons-beer hall-feature-item"></span>
                                </div>
                            </div>
                        </div>
                        <div class="flexi-grid-article-tools">
                        	<div class="tools-wrapper">
                            	<a href="#" data-nav="" title="Select" class="flexi-checkbox"><span class="icons-ok-squared"></span></a>
                                <a href="#" data-nav="results-details-tools-availability" title="Available dates"><span class="icons-calendar"></span></a>
                            	<a href="#" data-nav="results-details-tools-contact-details" title="Enquiry"><span class="icons-phone"></span></a>
                                <a href="#" data-nav="results-details-tools-email-details" title="Email"><span class="icons-mail-alt"></span></a>
                                <a href="#" data-nav="results-details-tools-quick-map" title="View on map"><span class="icons-location"></span></a>
                            </div>
                        </div>
                    </article>
                    <article class="flexi-grid-article" data-article-id="45678">
						<div class="flexi-grid-article-content">                    
                            <div class="image-thumb">
                                <a href="#"><img src="../images/hotels/h1.jpg" alt=""></a>
                                <div class="hall-rating">
                                    <span class="icons-star"></span><span class="icons-star"></span><span class="icons-star"></span><span class="icons-star"></span><span class="icons-star"></span>                            
                                </div>
                            </div>
                            <div class="hall-info">
                                <div class="hall-name-wrapper"><a href="#" class="hall-name">Hotel 1 Lorem</a></div>
                                <div class="hall-place-wrapper"><a href="#" class="hall-place">Lorem ipsum dolor, 123456, Madhapur</a></div>
                                <label class="hall-price"><span class="icon-currency icons-rupee"></span>8,88,000 - 8,88,000<span class="tarrif-schecule">per day</span></label>
                                <p class="hall-desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed eu velit ornare, dictum quam et, aliquet justo. Sed euismod ipsum nec enim elementum, quis mollis magna fringilla. Vestibulum purus metus, scelerisque nec bibendum non, porttitor sed erat. Duis suscipit odio lectus.</p>
                                <div class="hall-features">
                                	<div title="Guests capacity" class="guests-capacity hall-feature-item"><span class="icons-users-1"></span>300-500</div>
                                	<span title="Parking" class="icons-parking hall-feature-item"></span>
                                    <span title="Conference room" class="icons-briefcase hall-feature-item"></span>
                                    <span title="Wi-fi" class="icons-signal hall-feature-item"></span>
                                    <span title="Cafe" class="icons-coffee hall-feature-item"></span>
                                    <span title="Lunch/Dinner" class="icons-food hall-feature-item"></span>
                                    <span title="Bar" class="icons-beer hall-feature-item"></span>
                                </div>
                            </div>
                        </div>
                        <div class="flexi-grid-article-tools">
                        	<div class="tools-wrapper">
                            	<a href="#" data-nav="" title="Select" class="flexi-checkbox"><span class="icons-ok-squared"></span></a>
                                <a href="#" data-nav="results-details-tools-availability" title="Available dates"><span class="icons-calendar"></span></a>
                            	<a href="#" data-nav="results-details-tools-contact-details" title="Enquiry"><span class="icons-phone"></span></a>
                                <a href="#" data-nav="results-details-tools-email-details" title="Email"><span class="icons-mail-alt"></span></a>
                                <a href="#" data-nav="results-details-tools-quick-map" title="View on map"><span class="icons-location"></span></a>
                            </div>
                        </div>
                    </article>
                    	<article class="flexi-grid-article" data-article-id="12345">
						<div class="flexi-grid-article-content">                    
                            <div class="image-thumb">
                                <a href="#"><img src="../images/hotels/h1.jpg" alt=""></a>
                                <div class="hall-rating">
                                    <span class="icons-star"></span><span class="icons-star"></span><span class="icons-star"></span><span class="icons-star"></span><span class="icons-star"></span>                            
                                </div>
                            </div>
                            <div class="hall-info">
                                <div class="hall-name-wrapper"><a href="#" class="hall-name">Hotel 1 Lorem</a></div>
                                <div class="hall-place-wrapper"><a href="#" class="hall-place">Lorem ipsum dolor, 123456, Madhapur</a></div>
                                <label class="hall-price"><span class="icon-currency icons-rupee"></span>8,88,000 - 8,88,000<span class="tarrif-schecule">per day</span></label>
                                <p class="hall-desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed eu velit ornare, dictum quam et, aliquet justo. Sed euismod ipsum nec enim elementum, quis mollis magna fringilla. Vestibulum purus metus, scelerisque nec bibendum non, porttitor sed erat. Duis suscipit odio lectus.</p>
                                <div class="hall-features">
                                	<div title="Guests capacity" class="guests-capacity hall-feature-item"><span class="icons-users-1"></span>300-500</div>
                                	<span title="Parking" class="icons-parking hall-feature-item"></span>
                                    <span title="Conference room" class="icons-briefcase hall-feature-item"></span>
                                    <span title="Wi-fi" class="icons-signal hall-feature-item"></span>
                                    <span title="Cafe" class="icons-coffee hall-feature-item"></span>
                                    <span title="Lunch/Dinner" class="icons-food hall-feature-item"></span>
                                    <span title="Bar" class="icons-beer hall-feature-item"></span>
                                </div>
                            </div>
                        </div>
                        <div class="flexi-grid-article-tools">
                        	<div class="tools-wrapper">
                            	<a href="#" data-nav="" title="Select" class="flexi-checkbox"><span class="icons-ok-squared"></span></a>
                                <a href="#" data-nav="results-details-tools-availability" title="Available dates"><span class="icons-calendar"></span></a>
                            	<a href="#" data-nav="results-details-tools-contact-details" title="Enquiry"><span class="icons-phone"></span></a>
                                <a href="#" data-nav="results-details-tools-email-details" title="Email"><span class="icons-mail-alt"></span></a>
                                <a href="#" data-nav="results-details-tools-quick-map" title="View on map"><span class="icons-location"></span></a>
                            </div>
                        </div>
                    </article>
                    <article class="flexi-grid-article" data-article-id="45678">
						<div class="flexi-grid-article-content">                    
                            <div class="image-thumb">
                                <a href="#"><img src="../images/hotels/h1.jpg" alt=""></a>
                                <div class="hall-rating">
                                    <span class="icons-star"></span><span class="icons-star"></span><span class="icons-star"></span><span class="icons-star"></span><span class="icons-star"></span>                            
                                </div>
                            </div>
                            <div class="hall-info">
                                <div class="hall-name-wrapper"><a href="#" class="hall-name">Hotel 1 Lorem</a></div>
                                <div class="hall-place-wrapper"><a href="#" class="hall-place">Lorem ipsum dolor, 123456, Madhapur</a></div>
                                <label class="hall-price"><span class="icon-currency icons-rupee"></span>8,88,000 - 8,88,000<span class="tarrif-schecule">per day</span></label>
                                <p class="hall-desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed eu velit ornare, dictum quam et, aliquet justo. Sed euismod ipsum nec enim elementum, quis mollis magna fringilla. Vestibulum purus metus, scelerisque nec bibendum non, porttitor sed erat. Duis suscipit odio lectus.</p>
                                <div class="hall-features">
                                	<div title="Guests capacity" class="guests-capacity hall-feature-item"><span class="icons-users-1"></span>300-500</div>
                                	<span title="Parking" class="icons-parking hall-feature-item"></span>
                                    <span title="Conference room" class="icons-briefcase hall-feature-item"></span>
                                    <span title="Wi-fi" class="icons-signal hall-feature-item"></span>
                                    <span title="Cafe" class="icons-coffee hall-feature-item"></span>
                                    <span title="Lunch/Dinner" class="icons-food hall-feature-item"></span>
                                    <span title="Bar" class="icons-beer hall-feature-item"></span>
                                </div>
                            </div>
                        </div>
                        <div class="flexi-grid-article-tools">
                        	<div class="tools-wrapper">
                            	<a href="#" data-nav="" title="Select" class="flexi-checkbox"><span class="icons-ok-squared"></span></a>
                                <a href="#" data-nav="results-details-tools-availability" title="Available dates"><span class="icons-calendar"></span></a>
                            	<a href="#" data-nav="results-details-tools-contact-details" title="Enquiry"><span class="icons-phone"></span></a>
                                <a href="#" data-nav="results-details-tools-email-details" title="Email"><span class="icons-mail-alt"></span></a>
                                <a href="#" data-nav="results-details-tools-quick-map" title="View on map"><span class="icons-location"></span></a>
                            </div>
                        </div>
                    </article>
                    	<article class="flexi-grid-article" data-article-id="12345">
						<div class="flexi-grid-article-content">                    
                            <div class="image-thumb">
                                <a href="#"><img src="../images/hotels/h1.jpg" alt=""></a>
                                <div class="hall-rating">
                                    <span class="icons-star"></span><span class="icons-star"></span><span class="icons-star"></span><span class="icons-star"></span><span class="icons-star"></span>                            
                                </div>
                            </div>
                            <div class="hall-info">
                                <div class="hall-name-wrapper"><a href="#" class="hall-name">Hotel 1 Lorem</a></div>
                                <div class="hall-place-wrapper"><a href="#" class="hall-place">Lorem ipsum dolor, 123456, Madhapur</a></div>
                                <label class="hall-price"><span class="icon-currency icons-rupee"></span>8,88,000 - 8,88,000<span class="tarrif-schecule">per day</span></label>
                                <p class="hall-desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed eu velit ornare, dictum quam et, aliquet justo. Sed euismod ipsum nec enim elementum, quis mollis magna fringilla. Vestibulum purus metus, scelerisque nec bibendum non, porttitor sed erat. Duis suscipit odio lectus.</p>
                                <div class="hall-features">
                                	<div title="Guests capacity" class="guests-capacity hall-feature-item"><span class="icons-users-1"></span>300-500</div>
                                	<span title="Parking" class="icons-parking hall-feature-item"></span>
                                    <span title="Conference room" class="icons-briefcase hall-feature-item"></span>
                                    <span title="Wi-fi" class="icons-signal hall-feature-item"></span>
                                    <span title="Cafe" class="icons-coffee hall-feature-item"></span>
                                    <span title="Lunch/Dinner" class="icons-food hall-feature-item"></span>
                                    <span title="Bar" class="icons-beer hall-feature-item"></span>
                                </div>
                            </div>
                        </div>
                        <div class="flexi-grid-article-tools">
                        	<div class="tools-wrapper">
                            	<a href="#" data-nav="" title="Select" class="flexi-checkbox"><span class="icons-ok-squared"></span></a>
                                <a href="#" data-nav="results-details-tools-availability" title="Available dates"><span class="icons-calendar"></span></a>
                            	<a href="#" data-nav="results-details-tools-contact-details" title="Enquiry"><span class="icons-phone"></span></a>
                                <a href="#" data-nav="results-details-tools-email-details" title="Email"><span class="icons-mail-alt"></span></a>
                                <a href="#" data-nav="results-details-tools-quick-map" title="View on map"><span class="icons-location"></span></a>
                            </div>
                        </div>
                    </article>
                    <article class="flexi-grid-article" data-article-id="45678">
						<div class="flexi-grid-article-content">                    
                            <div class="image-thumb">
                                <a href="#"><img src="../images/hotels/h1.jpg" alt=""></a>
                                <div class="hall-rating">
                                    <span class="icons-star"></span><span class="icons-star"></span><span class="icons-star"></span><span class="icons-star"></span><span class="icons-star"></span>                            
                                </div>
                            </div>
                            <div class="hall-info">
                                <div class="hall-name-wrapper"><a href="#" class="hall-name">Hotel 1 Lorem</a></div>
                                <div class="hall-place-wrapper"><a href="#" class="hall-place">Lorem ipsum dolor, 123456, Madhapur</a></div>
                                <label class="hall-price"><span class="icon-currency icons-rupee"></span>8,88,000 - 8,88,000<span class="tarrif-schecule">per day</span></label>
                                <p class="hall-desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed eu velit ornare, dictum quam et, aliquet justo. Sed euismod ipsum nec enim elementum, quis mollis magna fringilla. Vestibulum purus metus, scelerisque nec bibendum non, porttitor sed erat. Duis suscipit odio lectus.</p>
                                <div class="hall-features">
                                	<div title="Guests capacity" class="guests-capacity hall-feature-item"><span class="icons-users-1"></span>300-500</div>
                                	<span title="Parking" class="icons-parking hall-feature-item"></span>
                                    <span title="Conference room" class="icons-briefcase hall-feature-item"></span>
                                    <span title="Wi-fi" class="icons-signal hall-feature-item"></span>
                                    <span title="Cafe" class="icons-coffee hall-feature-item"></span>
                                    <span title="Lunch/Dinner" class="icons-food hall-feature-item"></span>
                                    <span title="Bar" class="icons-beer hall-feature-item"></span>
                                </div>
                            </div>
                        </div>
                        <div class="flexi-grid-article-tools">
                        	<div class="tools-wrapper">
                            	<a href="#" data-nav="" title="Select" class="flexi-checkbox"><span class="icons-ok-squared"></span></a>
                                <a href="#" data-nav="results-details-tools-availability" title="Available dates"><span class="icons-calendar"></span></a>
                            	<a href="#" data-nav="results-details-tools-contact-details" title="Enquiry"><span class="icons-phone"></span></a>
                                <a href="#" data-nav="results-details-tools-email-details" title="Email"><span class="icons-mail-alt"></span></a>
                                <a href="#" data-nav="results-details-tools-quick-map" title="View on map"><span class="icons-location"></span></a>
                            </div>
                        </div>
                    </article>
                    	<article class="flexi-grid-article" data-article-id="12345">
						<div class="flexi-grid-article-content">                    
                            <div class="image-thumb">
                                <a href="#"><img src="../images/hotels/h1.jpg" alt=""></a>
                                <div class="hall-rating">
                                    <span class="icons-star"></span><span class="icons-star"></span><span class="icons-star"></span><span class="icons-star"></span><span class="icons-star"></span>                            
                                </div>
                            </div>
                            <div class="hall-info">
                                <div class="hall-name-wrapper"><a href="#" class="hall-name">Hotel 1 Lorem</a></div>
                                <div class="hall-place-wrapper"><a href="#" class="hall-place">Lorem ipsum dolor, 123456, Madhapur</a></div>
                                <label class="hall-price"><span class="icon-currency icons-rupee"></span>8,88,000 - 8,88,000<span class="tarrif-schecule">per day</span></label>
                                <p class="hall-desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed eu velit ornare, dictum quam et, aliquet justo. Sed euismod ipsum nec enim elementum, quis mollis magna fringilla. Vestibulum purus metus, scelerisque nec bibendum non, porttitor sed erat. Duis suscipit odio lectus.</p>
                                <div class="hall-features">
                                	<div title="Guests capacity" class="guests-capacity hall-feature-item"><span class="icons-users-1"></span>300-500</div>
                                	<span title="Parking" class="icons-parking hall-feature-item"></span>
                                    <span title="Conference room" class="icons-briefcase hall-feature-item"></span>
                                    <span title="Wi-fi" class="icons-signal hall-feature-item"></span>
                                    <span title="Cafe" class="icons-coffee hall-feature-item"></span>
                                    <span title="Lunch/Dinner" class="icons-food hall-feature-item"></span>
                                    <span title="Bar" class="icons-beer hall-feature-item"></span>
                                </div>
                            </div>
                        </div>
                        <div class="flexi-grid-article-tools">
                        	<div class="tools-wrapper">
                            	<a href="#" data-nav="" title="Select" class="flexi-checkbox"><span class="icons-ok-squared"></span></a>
                                <a href="#" data-nav="results-details-tools-availability" title="Available dates"><span class="icons-calendar"></span></a>
                            	<a href="#" data-nav="results-details-tools-contact-details" title="Enquiry"><span class="icons-phone"></span></a>
                                <a href="#" data-nav="results-details-tools-email-details" title="Email"><span class="icons-mail-alt"></span></a>
                                <a href="#" data-nav="results-details-tools-quick-map" title="View on map"><span class="icons-location"></span></a>
                            </div>
                        </div>
                    </article>
                    <article class="flexi-grid-article" data-article-id="45678">
						<div class="flexi-grid-article-content">                    
                            <div class="image-thumb">
                                <a href="#"><img src="../images/hotels/h1.jpg" alt=""></a>
                                <div class="hall-rating">
                                    <span class="icons-star"></span><span class="icons-star"></span><span class="icons-star"></span><span class="icons-star"></span><span class="icons-star"></span>                            
                                </div>
                            </div>
                            <div class="hall-info">
                                <div class="hall-name-wrapper"><a href="#" class="hall-name">Hotel 1 Lorem</a></div>
                                <div class="hall-place-wrapper"><a href="#" class="hall-place">Lorem ipsum dolor, 123456, Madhapur</a></div>
                                <label class="hall-price"><span class="icon-currency icons-rupee"></span>8,88,000 - 8,88,000<span class="tarrif-schecule">per day</span></label>
                                <p class="hall-desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed eu velit ornare, dictum quam et, aliquet justo. Sed euismod ipsum nec enim elementum, quis mollis magna fringilla. Vestibulum purus metus, scelerisque nec bibendum non, porttitor sed erat. Duis suscipit odio lectus.</p>
                                <div class="hall-features">
                                	<div title="Guests capacity" class="guests-capacity hall-feature-item"><span class="icons-users-1"></span>300-500</div>
                                	<span title="Parking" class="icons-parking hall-feature-item"></span>
                                    <span title="Conference room" class="icons-briefcase hall-feature-item"></span>
                                    <span title="Wi-fi" class="icons-signal hall-feature-item"></span>
                                    <span title="Cafe" class="icons-coffee hall-feature-item"></span>
                                    <span title="Lunch/Dinner" class="icons-food hall-feature-item"></span>
                                    <span title="Bar" class="icons-beer hall-feature-item"></span>
                                </div>
                            </div>
                        </div>
                        <div class="flexi-grid-article-tools">
                        	<div class="tools-wrapper">
                            	<a href="#" data-nav="" title="Select" class="flexi-checkbox"><span class="icons-ok-squared"></span></a>
                                <a href="#" data-nav="results-details-tools-availability" title="Available dates"><span class="icons-calendar"></span></a>
                            	<a href="#" data-nav="results-details-tools-contact-details" title="Enquiry"><span class="icons-phone"></span></a>
                                <a href="#" data-nav="results-details-tools-email-details" title="Email"><span class="icons-mail-alt"></span></a>
                                <a href="#" data-nav="results-details-tools-quick-map" title="View on map"><span class="icons-location"></span></a>
                            </div>
                        </div>
                    </article>
                    	<article class="flexi-grid-article" data-article-id="12345">
						<div class="flexi-grid-article-content">                    
                            <div class="image-thumb">
                                <a href="#"><img src="../images/hotels/h1.jpg" alt=""></a>
                                <div class="hall-rating">
                                    <span class="icons-star"></span><span class="icons-star"></span><span class="icons-star"></span><span class="icons-star"></span><span class="icons-star"></span>                            
                                </div>
                            </div>
                            <div class="hall-info">
                                <div class="hall-name-wrapper"><a href="#" class="hall-name">Hotel 1 Lorem</a></div>
                                <div class="hall-place-wrapper"><a href="#" class="hall-place">Lorem ipsum dolor, 123456, Madhapur</a></div>
                                <label class="hall-price"><span class="icon-currency icons-rupee"></span>8,88,000 - 8,88,000<span class="tarrif-schecule">per day</span></label>
                                <p class="hall-desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed eu velit ornare, dictum quam et, aliquet justo. Sed euismod ipsum nec enim elementum, quis mollis magna fringilla. Vestibulum purus metus, scelerisque nec bibendum non, porttitor sed erat. Duis suscipit odio lectus.</p>
                                <div class="hall-features">
                                	<div title="Guests capacity" class="guests-capacity hall-feature-item"><span class="icons-users-1"></span>300-500</div>
                                	<span title="Parking" class="icons-parking hall-feature-item"></span>
                                    <span title="Conference room" class="icons-briefcase hall-feature-item"></span>
                                    <span title="Wi-fi" class="icons-signal hall-feature-item"></span>
                                    <span title="Cafe" class="icons-coffee hall-feature-item"></span>
                                    <span title="Lunch/Dinner" class="icons-food hall-feature-item"></span>
                                    <span title="Bar" class="icons-beer hall-feature-item"></span>
                                </div>
                            </div>
                        </div>
                        <div class="flexi-grid-article-tools">
                        	<div class="tools-wrapper">
                            	<a href="#" data-nav="" title="Select" class="flexi-checkbox"><span class="icons-ok-squared"></span></a>
                                <a href="#" data-nav="results-details-tools-availability" title="Available dates"><span class="icons-calendar"></span></a>
                            	<a href="#" data-nav="results-details-tools-contact-details" title="Enquiry"><span class="icons-phone"></span></a>
                                <a href="#" data-nav="results-details-tools-email-details" title="Email"><span class="icons-mail-alt"></span></a>
                                <a href="#" data-nav="results-details-tools-quick-map" title="View on map"><span class="icons-location"></span></a>
                            </div>
                        </div>
                    </article>
                    <article class="flexi-grid-article" data-article-id="45678">
						<div class="flexi-grid-article-content">                    
                            <div class="image-thumb">
                                <a href="#"><img src="../images/hotels/h1.jpg" alt=""></a>
                                <div class="hall-rating">
                                    <span class="icons-star"></span><span class="icons-star"></span><span class="icons-star"></span><span class="icons-star"></span><span class="icons-star"></span>                            
                                </div>
                            </div>
                            <div class="hall-info">
                                <div class="hall-name-wrapper"><a href="#" class="hall-name">Hotel 1 Lorem</a></div>
                                <div class="hall-place-wrapper"><a href="#" class="hall-place">Lorem ipsum dolor, 123456, Madhapur</a></div>
                                <label class="hall-price"><span class="icon-currency icons-rupee"></span>8,88,000 - 8,88,000<span class="tarrif-schecule">per day</span></label>
                                <p class="hall-desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed eu velit ornare, dictum quam et, aliquet justo. Sed euismod ipsum nec enim elementum, quis mollis magna fringilla. Vestibulum purus metus, scelerisque nec bibendum non, porttitor sed erat. Duis suscipit odio lectus.</p>
                                <div class="hall-features">
                                	<div title="Guests capacity" class="guests-capacity hall-feature-item"><span class="icons-users-1"></span>300-500</div>
                                	<span title="Parking" class="icons-parking hall-feature-item"></span>
                                    <span title="Conference room" class="icons-briefcase hall-feature-item"></span>
                                    <span title="Wi-fi" class="icons-signal hall-feature-item"></span>
                                    <span title="Cafe" class="icons-coffee hall-feature-item"></span>
                                    <span title="Lunch/Dinner" class="icons-food hall-feature-item"></span>
                                    <span title="Bar" class="icons-beer hall-feature-item"></span>
                                </div>
                            </div>
                        </div>
                        <div class="flexi-grid-article-tools">
                        	<div class="tools-wrapper">
                            	<a href="#" data-nav="" title="Select" class="flexi-checkbox"><span class="icons-ok-squared"></span></a>
                                <a href="#" data-nav="results-details-tools-availability" title="Available dates"><span class="icons-calendar"></span></a>
                            	<a href="#" data-nav="results-details-tools-contact-details" title="Enquiry"><span class="icons-phone"></span></a>
                                <a href="#" data-nav="results-details-tools-email-details" title="Email"><span class="icons-mail-alt"></span></a>
                                <a href="#" data-nav="results-details-tools-quick-map" title="View on map"><span class="icons-location"></span></a>
                            </div>
                        </div>
                    </article>
                    	<article class="flexi-grid-article" data-article-id="12345">
						<div class="flexi-grid-article-content">                    
                            <div class="image-thumb">
                                <a href="#"><img src="../images/hotels/h1.jpg" alt=""></a>
                                <div class="hall-rating">
                                    <span class="icons-star"></span><span class="icons-star"></span><span class="icons-star"></span><span class="icons-star"></span><span class="icons-star"></span>                            
                                </div>
                            </div>
                            <div class="hall-info">
                                <div class="hall-name-wrapper"><a href="#" class="hall-name">Hotel 1 Lorem</a></div>
                                <div class="hall-place-wrapper"><a href="#" class="hall-place">Lorem ipsum dolor, 123456, Madhapur</a></div>
                                <label class="hall-price"><span class="icon-currency icons-rupee"></span>8,88,000 - 8,88,000<span class="tarrif-schecule">per day</span></label>
                                <p class="hall-desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed eu velit ornare, dictum quam et, aliquet justo. Sed euismod ipsum nec enim elementum, quis mollis magna fringilla. Vestibulum purus metus, scelerisque nec bibendum non, porttitor sed erat. Duis suscipit odio lectus.</p>
                                <div class="hall-features">
                                	<div title="Guests capacity" class="guests-capacity hall-feature-item"><span class="icons-users-1"></span>300-500</div>
                                	<span title="Parking" class="icons-parking hall-feature-item"></span>
                                    <span title="Conference room" class="icons-briefcase hall-feature-item"></span>
                                    <span title="Wi-fi" class="icons-signal hall-feature-item"></span>
                                    <span title="Cafe" class="icons-coffee hall-feature-item"></span>
                                    <span title="Lunch/Dinner" class="icons-food hall-feature-item"></span>
                                    <span title="Bar" class="icons-beer hall-feature-item"></span>
                                </div>
                            </div>
                        </div>
                        <div class="flexi-grid-article-tools">
                        	<div class="tools-wrapper">
                            	<a href="#" data-nav="" title="Select" class="flexi-checkbox"><span class="icons-ok-squared"></span></a>
                                <a href="#" data-nav="results-details-tools-availability" title="Available dates"><span class="icons-calendar"></span></a>
                            	<a href="#" data-nav="results-details-tools-contact-details" title="Enquiry"><span class="icons-phone"></span></a>
                                <a href="#" data-nav="results-details-tools-email-details" title="Email"><span class="icons-mail-alt"></span></a>
                                <a href="#" data-nav="results-details-tools-quick-map" title="View on map"><span class="icons-location"></span></a>
                            </div>
                        </div>
                    </article>
                    <article class="flexi-grid-article" data-article-id="45678">
						<div class="flexi-grid-article-content">                    
                            <div class="image-thumb">
                                <a href="#"><img src="../images/hotels/h1.jpg" alt=""></a>
                                <div class="hall-rating">
                                    <span class="icons-star"></span><span class="icons-star"></span><span class="icons-star"></span><span class="icons-star"></span><span class="icons-star"></span>                            
                                </div>
                            </div>
                            <div class="hall-info">
                                <div class="hall-name-wrapper"><a href="#" class="hall-name">Hotel 1 Lorem</a></div>
                                <div class="hall-place-wrapper"><a href="#" class="hall-place">Lorem ipsum dolor, 123456, Madhapur</a></div>
                                <label class="hall-price"><span class="icon-currency icons-rupee"></span>8,88,000 - 8,88,000<span class="tarrif-schecule">per day</span></label>
                                <p class="hall-desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed eu velit ornare, dictum quam et, aliquet justo. Sed euismod ipsum nec enim elementum, quis mollis magna fringilla. Vestibulum purus metus, scelerisque nec bibendum non, porttitor sed erat. Duis suscipit odio lectus.</p>
                                <div class="hall-features">
                                	<div title="Guests capacity" class="guests-capacity hall-feature-item"><span class="icons-users-1"></span>300-500</div>
                                	<span title="Parking" class="icons-parking hall-feature-item"></span>
                                    <span title="Conference room" class="icons-briefcase hall-feature-item"></span>
                                    <span title="Wi-fi" class="icons-signal hall-feature-item"></span>
                                    <span title="Cafe" class="icons-coffee hall-feature-item"></span>
                                    <span title="Lunch/Dinner" class="icons-food hall-feature-item"></span>
                                    <span title="Bar" class="icons-beer hall-feature-item"></span>
                                </div>
                            </div>
                        </div>
                        <div class="flexi-grid-article-tools">
                        	<div class="tools-wrapper">
                            	<a href="#" data-nav="" title="Select" class="flexi-checkbox"><span class="icons-ok-squared"></span></a>
                                <a href="#" data-nav="results-details-tools-availability" title="Available dates"><span class="icons-calendar"></span></a>
                            	<a href="#" data-nav="results-details-tools-contact-details" title="Enquiry"><span class="icons-phone"></span></a>
                                <a href="#" data-nav="results-details-tools-email-details" title="Email"><span class="icons-mail-alt"></span></a>
                                <a href="#" data-nav="results-details-tools-quick-map" title="View on map"><span class="icons-location"></span></a>
                            </div>
                        </div>
                    </article>
                    	<article class="flexi-grid-article" data-article-id="12345">
						<div class="flexi-grid-article-content">                    
                            <div class="image-thumb">
                                <a href="#"><img src="../images/hotels/h1.jpg" alt=""></a>
                                <div class="hall-rating">
                                    <span class="icons-star"></span><span class="icons-star"></span><span class="icons-star"></span><span class="icons-star"></span><span class="icons-star"></span>                            
                                </div>
                            </div>
                            <div class="hall-info">
                                <div class="hall-name-wrapper"><a href="#" class="hall-name">Hotel 1 Lorem</a></div>
                                <div class="hall-place-wrapper"><a href="#" class="hall-place">Lorem ipsum dolor, 123456, Madhapur</a></div>
                                <label class="hall-price"><span class="icon-currency icons-rupee"></span>8,88,000 - 8,88,000<span class="tarrif-schecule">per day</span></label>
                                <p class="hall-desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed eu velit ornare, dictum quam et, aliquet justo. Sed euismod ipsum nec enim elementum, quis mollis magna fringilla. Vestibulum purus metus, scelerisque nec bibendum non, porttitor sed erat. Duis suscipit odio lectus.</p>
                                <div class="hall-features">
                                	<div title="Guests capacity" class="guests-capacity hall-feature-item"><span class="icons-users-1"></span>300-500</div>
                                	<span title="Parking" class="icons-parking hall-feature-item"></span>
                                    <span title="Conference room" class="icons-briefcase hall-feature-item"></span>
                                    <span title="Wi-fi" class="icons-signal hall-feature-item"></span>
                                    <span title="Cafe" class="icons-coffee hall-feature-item"></span>
                                    <span title="Lunch/Dinner" class="icons-food hall-feature-item"></span>
                                    <span title="Bar" class="icons-beer hall-feature-item"></span>
                                </div>
                            </div>
                        </div>
                        <div class="flexi-grid-article-tools">
                        	<div class="tools-wrapper">
                            	<a href="#" data-nav="" title="Select" class="flexi-checkbox"><span class="icons-ok-squared"></span></a>
                                <a href="#" data-nav="results-details-tools-availability" title="Available dates"><span class="icons-calendar"></span></a>
                            	<a href="#" data-nav="results-details-tools-contact-details" title="Enquiry"><span class="icons-phone"></span></a>
                                <a href="#" data-nav="results-details-tools-email-details" title="Email"><span class="icons-mail-alt"></span></a>
                                <a href="#" data-nav="results-details-tools-quick-map" title="View on map"><span class="icons-location"></span></a>
                            </div>
                        </div>
                    </article>
                    <article class="flexi-grid-article" data-article-id="45678">
						<div class="flexi-grid-article-content">                    
                            <div class="image-thumb">
                                <a href="#"><img src="../images/hotels/h1.jpg" alt=""></a>
                                <div class="hall-rating">
                                    <span class="icons-star"></span><span class="icons-star"></span><span class="icons-star"></span><span class="icons-star"></span><span class="icons-star"></span>                            
                                </div>
                            </div>
                            <div class="hall-info">
                                <div class="hall-name-wrapper"><a href="#" class="hall-name">Hotel 1 Lorem</a></div>
                                <div class="hall-place-wrapper"><a href="#" class="hall-place">Lorem ipsum dolor, 123456, Madhapur</a></div>
                                <label class="hall-price"><span class="icon-currency icons-rupee"></span>8,88,000 - 8,88,000<span class="tarrif-schecule">per day</span></label>
                                <p class="hall-desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed eu velit ornare, dictum quam et, aliquet justo. Sed euismod ipsum nec enim elementum, quis mollis magna fringilla. Vestibulum purus metus, scelerisque nec bibendum non, porttitor sed erat. Duis suscipit odio lectus.</p>
                                <div class="hall-features">
                                	<div title="Guests capacity" class="guests-capacity hall-feature-item"><span class="icons-users-1"></span>300-500</div>
                                	<span title="Parking" class="icons-parking hall-feature-item"></span>
                                    <span title="Conference room" class="icons-briefcase hall-feature-item"></span>
                                    <span title="Wi-fi" class="icons-signal hall-feature-item"></span>
                                    <span title="Cafe" class="icons-coffee hall-feature-item"></span>
                                    <span title="Lunch/Dinner" class="icons-food hall-feature-item"></span>
                                    <span title="Bar" class="icons-beer hall-feature-item"></span>
                                </div>
                            </div>
                        </div>
                        <div class="flexi-grid-article-tools">
                        	<div class="tools-wrapper">
                            	<a href="#" data-nav="" title="Select" class="flexi-checkbox"><span class="icons-ok-squared"></span></a>
                                <a href="#" data-nav="results-details-tools-availability" title="Available dates"><span class="icons-calendar"></span></a>
                            	<a href="#" data-nav="results-details-tools-contact-details" title="Enquiry"><span class="icons-phone"></span></a>
                                <a href="#" data-nav="results-details-tools-email-details" title="Email"><span class="icons-mail-alt"></span></a>
                                <a href="#" data-nav="results-details-tools-quick-map" title="View on map"><span class="icons-location"></span></a>
                            </div>
                        </div>
                    </article>
                    	<article class="flexi-grid-article" data-article-id="12345">
						<div class="flexi-grid-article-content">                    
                            <div class="image-thumb">
                                <a href="#"><img src="../images/hotels/h1.jpg" alt=""></a>
                                <div class="hall-rating">
                                    <span class="icons-star"></span><span class="icons-star"></span><span class="icons-star"></span><span class="icons-star"></span><span class="icons-star"></span>                            
                                </div>
                            </div>
                            <div class="hall-info">
                                <div class="hall-name-wrapper"><a href="#" class="hall-name">Hotel 1 Lorem</a></div>
                                <div class="hall-place-wrapper"><a href="#" class="hall-place">Lorem ipsum dolor, 123456, Madhapur</a></div>
                                <label class="hall-price"><span class="icon-currency icons-rupee"></span>8,88,000 - 8,88,000<span class="tarrif-schecule">per day</span></label>
                                <p class="hall-desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed eu velit ornare, dictum quam et, aliquet justo. Sed euismod ipsum nec enim elementum, quis mollis magna fringilla. Vestibulum purus metus, scelerisque nec bibendum non, porttitor sed erat. Duis suscipit odio lectus.</p>
                                <div class="hall-features">
                                	<div title="Guests capacity" class="guests-capacity hall-feature-item"><span class="icons-users-1"></span>300-500</div>
                                	<span title="Parking" class="icons-parking hall-feature-item"></span>
                                    <span title="Conference room" class="icons-briefcase hall-feature-item"></span>
                                    <span title="Wi-fi" class="icons-signal hall-feature-item"></span>
                                    <span title="Cafe" class="icons-coffee hall-feature-item"></span>
                                    <span title="Lunch/Dinner" class="icons-food hall-feature-item"></span>
                                    <span title="Bar" class="icons-beer hall-feature-item"></span>
                                </div>
                            </div>
                        </div>
                        <div class="flexi-grid-article-tools">
                        	<div class="tools-wrapper">
                            	<a href="#" data-nav="" title="Select" class="flexi-checkbox"><span class="icons-ok-squared"></span></a>
                                <a href="#" data-nav="results-details-tools-availability" title="Available dates"><span class="icons-calendar"></span></a>
                            	<a href="#" data-nav="results-details-tools-contact-details" title="Enquiry"><span class="icons-phone"></span></a>
                                <a href="#" data-nav="results-details-tools-email-details" title="Email"><span class="icons-mail-alt"></span></a>
                                <a href="#" data-nav="results-details-tools-quick-map" title="View on map"><span class="icons-location"></span></a>
                            </div>
                        </div>
                    </article>
                    <article class="flexi-grid-article" data-article-id="45678">
						<div class="flexi-grid-article-content">                    
                            <div class="image-thumb">
                                <a href="#"><img src="../images/hotels/h1.jpg" alt=""></a>
                                <div class="hall-rating">
                                    <span class="icons-star"></span><span class="icons-star"></span><span class="icons-star"></span><span class="icons-star"></span><span class="icons-star"></span>                            
                                </div>
                            </div>
                            <div class="hall-info">
                                <div class="hall-name-wrapper"><a href="#" class="hall-name">Hotel 1 Lorem</a></div>
                                <div class="hall-place-wrapper"><a href="#" class="hall-place">Lorem ipsum dolor, 123456, Madhapur</a></div>
                                <label class="hall-price"><span class="icon-currency icons-rupee"></span>8,88,000 - 8,88,000<span class="tarrif-schecule">per day</span></label>
                                <p class="hall-desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed eu velit ornare, dictum quam et, aliquet justo. Sed euismod ipsum nec enim elementum, quis mollis magna fringilla. Vestibulum purus metus, scelerisque nec bibendum non, porttitor sed erat. Duis suscipit odio lectus.</p>
                                <div class="hall-features">
                                	<div title="Guests capacity" class="guests-capacity hall-feature-item"><span class="icons-users-1"></span>300-500</div>
                                	<span title="Parking" class="icons-parking hall-feature-item"></span>
                                    <span title="Conference room" class="icons-briefcase hall-feature-item"></span>
                                    <span title="Wi-fi" class="icons-signal hall-feature-item"></span>
                                    <span title="Cafe" class="icons-coffee hall-feature-item"></span>
                                    <span title="Lunch/Dinner" class="icons-food hall-feature-item"></span>
                                    <span title="Bar" class="icons-beer hall-feature-item"></span>
                                </div>
                            </div>
                        </div>
                        <div class="flexi-grid-article-tools">
                        	<div class="tools-wrapper">
                            	<a href="#" data-nav="" title="Select" class="flexi-checkbox"><span class="icons-ok-squared"></span></a>
                                <a href="#" data-nav="results-details-tools-availability" title="Available dates"><span class="icons-calendar"></span></a>
                            	<a href="#" data-nav="results-details-tools-contact-details" title="Enquiry"><span class="icons-phone"></span></a>
                                <a href="#" data-nav="results-details-tools-email-details" title="Email"><span class="icons-mail-alt"></span></a>
                                <a href="#" data-nav="results-details-tools-quick-map" title="View on map"><span class="icons-location"></span></a>
                            </div>
                        </div>
                    </article>
                    	<article class="flexi-grid-article" data-article-id="12345">
						<div class="flexi-grid-article-content">                    
                            <div class="image-thumb">
                                <a href="#"><img src="../images/hotels/h1.jpg" alt=""></a>
                                <div class="hall-rating">
                                    <span class="icons-star"></span><span class="icons-star"></span><span class="icons-star"></span><span class="icons-star"></span><span class="icons-star"></span>                            
                                </div>
                            </div>
                            <div class="hall-info">
                                <div class="hall-name-wrapper"><a href="#" class="hall-name">Hotel 1 Lorem</a></div>
                                <div class="hall-place-wrapper"><a href="#" class="hall-place">Lorem ipsum dolor, 123456, Madhapur</a></div>
                                <label class="hall-price"><span class="icon-currency icons-rupee"></span>8,88,000 - 8,88,000<span class="tarrif-schecule">per day</span></label>
                                <p class="hall-desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed eu velit ornare, dictum quam et, aliquet justo. Sed euismod ipsum nec enim elementum, quis mollis magna fringilla. Vestibulum purus metus, scelerisque nec bibendum non, porttitor sed erat. Duis suscipit odio lectus.</p>
                                <div class="hall-features">
                                	<div title="Guests capacity" class="guests-capacity hall-feature-item"><span class="icons-users-1"></span>300-500</div>
                                	<span title="Parking" class="icons-parking hall-feature-item"></span>
                                    <span title="Conference room" class="icons-briefcase hall-feature-item"></span>
                                    <span title="Wi-fi" class="icons-signal hall-feature-item"></span>
                                    <span title="Cafe" class="icons-coffee hall-feature-item"></span>
                                    <span title="Lunch/Dinner" class="icons-food hall-feature-item"></span>
                                    <span title="Bar" class="icons-beer hall-feature-item"></span>
                                </div>
                            </div>
                        </div>
                        <div class="flexi-grid-article-tools">
                        	<div class="tools-wrapper">
                            	<a href="#" data-nav="" title="Select" class="flexi-checkbox"><span class="icons-ok-squared"></span></a>
                                <a href="#" data-nav="results-details-tools-availability" title="Available dates"><span class="icons-calendar"></span></a>
                            	<a href="#" data-nav="results-details-tools-contact-details" title="Enquiry"><span class="icons-phone"></span></a>
                                <a href="#" data-nav="results-details-tools-email-details" title="Email"><span class="icons-mail-alt"></span></a>
                                <a href="#" data-nav="results-details-tools-quick-map" title="View on map"><span class="icons-location"></span></a>
                            </div>
                        </div>
                    </article>
                    <article class="flexi-grid-article" data-article-id="45678">
						<div class="flexi-grid-article-content">                    
                            <div class="image-thumb">
                                <a href="#"><img src="../images/hotels/h1.jpg" alt=""></a>
                                <div class="hall-rating">
                                    <span class="icons-star"></span><span class="icons-star"></span><span class="icons-star"></span><span class="icons-star"></span><span class="icons-star"></span>                            
                                </div>
                            </div>
                            <div class="hall-info">
                                <div class="hall-name-wrapper"><a href="#" class="hall-name">Hotel 1 Lorem</a></div>
                                <div class="hall-place-wrapper"><a href="#" class="hall-place">Lorem ipsum dolor, 123456, Madhapur</a></div>
                                <label class="hall-price"><span class="icon-currency icons-rupee"></span>8,88,000 - 8,88,000<span class="tarrif-schecule">per day</span></label>
                                <p class="hall-desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed eu velit ornare, dictum quam et, aliquet justo. Sed euismod ipsum nec enim elementum, quis mollis magna fringilla. Vestibulum purus metus, scelerisque nec bibendum non, porttitor sed erat. Duis suscipit odio lectus.</p>
                                <div class="hall-features">
                                	<div title="Guests capacity" class="guests-capacity hall-feature-item"><span class="icons-users-1"></span>300-500</div>
                                	<span title="Parking" class="icons-parking hall-feature-item"></span>
                                    <span title="Conference room" class="icons-briefcase hall-feature-item"></span>
                                    <span title="Wi-fi" class="icons-signal hall-feature-item"></span>
                                    <span title="Cafe" class="icons-coffee hall-feature-item"></span>
                                    <span title="Lunch/Dinner" class="icons-food hall-feature-item"></span>
                                    <span title="Bar" class="icons-beer hall-feature-item"></span>
                                </div>
                            </div>
                        </div>
                        <div class="flexi-grid-article-tools">
                        	<div class="tools-wrapper">
                            	<a href="#" data-nav="" title="Select" class="flexi-checkbox"><span class="icons-ok-squared"></span></a>
                                <a href="#" data-nav="results-details-tools-availability" title="Available dates"><span class="icons-calendar"></span></a>
                            	<a href="#" data-nav="results-details-tools-contact-details" title="Enquiry"><span class="icons-phone"></span></a>
                                <a href="#" data-nav="results-details-tools-email-details" title="Email"><span class="icons-mail-alt"></span></a>
                                <a href="#" data-nav="results-details-tools-quick-map" title="View on map"><span class="icons-location"></span></a>
                            </div>
                        </div>
                    </article>
                    	<article class="flexi-grid-article" data-article-id="12345">
						<div class="flexi-grid-article-content">                    
                            <div class="image-thumb">
                                <a href="#"><img src="../images/hotels/h1.jpg" alt=""></a>
                                <div class="hall-rating">
                                    <span class="icons-star"></span><span class="icons-star"></span><span class="icons-star"></span><span class="icons-star"></span><span class="icons-star"></span>                            
                                </div>
                            </div>
                            <div class="hall-info">
                                <div class="hall-name-wrapper"><a href="#" class="hall-name">Hotel 1 Lorem</a></div>
                                <div class="hall-place-wrapper"><a href="#" class="hall-place">Lorem ipsum dolor, 123456, Madhapur</a></div>
                                <label class="hall-price"><span class="icon-currency icons-rupee"></span>8,88,000 - 8,88,000<span class="tarrif-schecule">per day</span></label>
                                <p class="hall-desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed eu velit ornare, dictum quam et, aliquet justo. Sed euismod ipsum nec enim elementum, quis mollis magna fringilla. Vestibulum purus metus, scelerisque nec bibendum non, porttitor sed erat. Duis suscipit odio lectus.</p>
                                <div class="hall-features">
                                	<div title="Guests capacity" class="guests-capacity hall-feature-item"><span class="icons-users-1"></span>300-500</div>
                                	<span title="Parking" class="icons-parking hall-feature-item"></span>
                                    <span title="Conference room" class="icons-briefcase hall-feature-item"></span>
                                    <span title="Wi-fi" class="icons-signal hall-feature-item"></span>
                                    <span title="Cafe" class="icons-coffee hall-feature-item"></span>
                                    <span title="Lunch/Dinner" class="icons-food hall-feature-item"></span>
                                    <span title="Bar" class="icons-beer hall-feature-item"></span>
                                </div>
                            </div>
                        </div>
                        <div class="flexi-grid-article-tools">
                        	<div class="tools-wrapper">
                            	<a href="#" data-nav="" title="Select" class="flexi-checkbox"><span class="icons-ok-squared"></span></a>
                                <a href="#" data-nav="results-details-tools-availability" title="Available dates"><span class="icons-calendar"></span></a>
                            	<a href="#" data-nav="results-details-tools-contact-details" title="Enquiry"><span class="icons-phone"></span></a>
                                <a href="#" data-nav="results-details-tools-email-details" title="Email"><span class="icons-mail-alt"></span></a>
                                <a href="#" data-nav="results-details-tools-quick-map" title="View on map"><span class="icons-location"></span></a>
                            </div>
                        </div>
                    </article>
                    <article class="flexi-grid-article" data-article-id="45678">
						<div class="flexi-grid-article-content">                    
                            <div class="image-thumb">
                                <a href="#"><img src="../images/hotels/h1.jpg" alt=""></a>
                                <div class="hall-rating">
                                    <span class="icons-star"></span><span class="icons-star"></span><span class="icons-star"></span><span class="icons-star"></span><span class="icons-star"></span>                            
                                </div>
                            </div>
                            <div class="hall-info">
                                <div class="hall-name-wrapper"><a href="#" class="hall-name">Hotel 1 Lorem</a></div>
                                <div class="hall-place-wrapper"><a href="#" class="hall-place">Lorem ipsum dolor, 123456, Madhapur</a></div>
                                <label class="hall-price"><span class="icon-currency icons-rupee"></span>8,88,000 - 8,88,000<span class="tarrif-schecule">per day</span></label>
                                <p class="hall-desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed eu velit ornare, dictum quam et, aliquet justo. Sed euismod ipsum nec enim elementum, quis mollis magna fringilla. Vestibulum purus metus, scelerisque nec bibendum non, porttitor sed erat. Duis suscipit odio lectus.</p>
                                <div class="hall-features">
                                	<div title="Guests capacity" class="guests-capacity hall-feature-item"><span class="icons-users-1"></span>300-500</div>
                                	<span title="Parking" class="icons-parking hall-feature-item"></span>
                                    <span title="Conference room" class="icons-briefcase hall-feature-item"></span>
                                    <span title="Wi-fi" class="icons-signal hall-feature-item"></span>
                                    <span title="Cafe" class="icons-coffee hall-feature-item"></span>
                                    <span title="Lunch/Dinner" class="icons-food hall-feature-item"></span>
                                    <span title="Bar" class="icons-beer hall-feature-item"></span>
                                </div>
                            </div>
                        </div>
                        <div class="flexi-grid-article-tools">
                        	<div class="tools-wrapper">
                            	<a href="#" data-nav="" title="Select" class="flexi-checkbox"><span class="icons-ok-squared"></span></a>
                                <a href="#" data-nav="results-details-tools-availability" title="Available dates"><span class="icons-calendar"></span></a>
                            	<a href="#" data-nav="results-details-tools-contact-details" title="Enquiry"><span class="icons-phone"></span></a>
                                <a href="#" data-nav="results-details-tools-email-details" title="Email"><span class="icons-mail-alt"></span></a>
                                <a href="#" data-nav="results-details-tools-quick-map" title="View on map"><span class="icons-location"></span></a>
                            </div>
                        </div>
                    </article>
                </div>
                <div class="pagination-wrapper">
                	<div class="align-left">
                        <a class="first-page" href="#"><span class="icons-left-open"></span>First</a>
                        <a class="previous-page" href="#"><span class="icons-left-open"></span>Prev</a>
                    </div>
                    <div class="middle-links">
                        <a class="page-link" href="#">1</a>
                        <a class="page-link active" href="#">2</a>
                        <a class="page-link" href="#">3</a>
                    </div>
                    <div class="align-right">
	                    <a class="next-page" href="#">Next<span class="icons-right-open"></span></a>
                    	<a class="last-page" href="#">Last<span class="icons-right-open"></span></a>
                    </div>
                </div>
            </div>
        </div>
	</div>
</div>
<div class="flexi-grid-tools">
	<a href="#" class="cta-link secondary" id="flexi-articles-count-clear">Clear<span id="flexi-articles-count"></span><span class="cta-arrow icons-right-open"></span></a>
	<a href="#" id="compare-tool-cta" class="cta-link primary">Compare (max 5)<span class="cta-arrow icons-right-open"></span></a>
</div>
<?php
	require('helper/footer.php');
?>
<?php
	require('helper/scripthelper.php');
?>
</body>
</html>
