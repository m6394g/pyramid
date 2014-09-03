<?php
	$title = 'My halls';
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
            <div class="padding-base" id="search-results-info-filter">
            	<div class="padding-base-grad">
                	<div class="padding-base-container">
                        <label class="padding-base-imp-label">1 Hall found</label>
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
                            </div>
                            <div class="hall-info">
                                <div class="hall-name-wrapper"><a href="#" class="hall-name">Hotel 1 Lorem</a></div>
                                <div class="hall-place-wrapper"><a href="#" class="hall-place">Lorem ipsum dolor, 123456, Madhapur</a></div>
                            </div>
                        </div>
                        <div class="flexi-grid-article-tools">
                        	<div class="tools-wrapper">
                            	<a href="#" data-nav="" title="Manage" class="flexi-checkbox"><span class="icons-arrows-cw"></span></a>
                                <a href="#" data-nav="results-details-tools-availability" title="Manage availibility"><span class="icons-calendar"></span></a>
                            	<a href="#" data-nav="results-details-tools-contact-details" title="Manage price package"><span class="icons-rupee"></span></a>
                                <a href="#" data-nav="results-details-tools-email-details" title="Email"><span class="icons-mail-alt"></span></a>
                                <a href="#" data-nav="results-details-tools-quick-map" title="Remove"><span class="icons-cancel-circled"></span></a>
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
