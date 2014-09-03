<?php
	$title = 'Logged in Homepage';
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
            <div class="logged-in-home">
            	<h2>Welcome Pankaj!</h2>
                <section class="two-column">
                	<section class="left-align">
                    	<article class="teaser-block">
                            <div class="teaser-content chart-display">
                            	 <div id="hall-30days-ratings" class="demo-placeholder"></div>
                            </div>
                            <div class="teaser-footer">
                            	<p>Hall views in last 15 days</p>
                            </div>
                        </article>
                        <article class="teaser-block">
                            <div class="teaser-content chart-display">
                            	 <div id="hall-30days-views" class="demo-placeholder"></div>
                            </div>
                            <div class="teaser-footer">
                            	<p>Hall ratings in last 15 days</p>
                            </div>
                        </article>
                    </section>
                    <section class="right-align">
                    	<article class="teaser-block no-background">
                            <div class="teaser-content">
                            	<a href="#" class="cta-link primary large">Add a hall<span class="cta-arrow icons-right-open"></span></a>
                        		<a href="#" class="cta-link secondary large">My halls<span class="cta-arrow icons-right-open"></span></a>
                            </div>
                        </article>
                        <article class="teaser-block no-background-more">
                            <div class="teaser-content">
                            	<a href="#" class="cta-link secondary">My profile<span class="cta-arrow icons-right-open"></span></a>
                            </div>
                        </article>
                    </section>
                </section>
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
<script type="text/javascript">	
		
		
var build_pass_data = [
                [1, 5],
                [2, 4],
                [3, 3],
                [4, 2],
                [5, 1],
				[6, 0],
                [7, 1],
                [8, 2],
                [9, 3],
                [10, 4],
				[11, 5],
                [12, 5]
            ];
var build_fail_data = [
                [1, 1],
                [2, 2],
                [3, 3],
                [4, 4],
                [5, 5],
				[6, 5],
                [7, 4],
                [8, 3],
                [9, 2],
                [10, 1],
				[11, 1],
                [12, 2]
            ];
var build_new_data = [
                [1, 5],
                [2, 0],
                [3, 4],
                [4, 1],
                [5, 3],
				[6, 2],
                [7, 2],
                [8, 1],
                [9, 4],
                [10, 0],
				[11, 5],
                [12, 5]
            ];

var data = [
            {label: "Hall 1 long name", data: build_pass_data},
            {label: "Hall 2", data: build_fail_data},
			{label: "Hall 3", data: build_new_data}
           ];

var options = {
                xaxis: {
                    min: 0,
                    max: 13,
                    mode: null,
                    ticks: [
                        [1, "Jan"],
                        [2, "Feb"],
                        [3, "Mar"],
                        [4, "Apr"],
                        [5, "May"],
						[6, "Jun"],
                        [7, "Jul"],
                        [8, "Aug"],
                        [9, "Sep"],
                        [10, "Oct"],
						[11, "Nov"],
                        [12, "Dec"]
                    ],
                    tickLength: 0,
                    axisLabel: "App"
                }, yaxis: {
                    axisLabel: "",
                    tickDecimals: 0
                }, grid: {
                    clickable: false,
                    borderWidth: 1
                }, series: {
                    shadowSize: 1, 
                    bars: {
                        show: true, 
                        barWidth: 0.05, 
                        order: 1
                    }
                }
            };

var options2={	grid: {
					clickable: false,
					borderWidth: 1
            	},
				xaxis: {
                    min: 0,
                    max: 13,
                    mode: null,
                    ticks: [
                        [1, "Jan"],
                        [2, "Feb"],
                        [3, "Mar"],
                        [4, "Apr"],
                        [5, "May"],
						[6, "Jun"],
                        [7, "Jul"],
                        [8, "Aug"],
                        [9, "Sep"],
                        [10, "Oct"],
						[11, "Nov"],
                        [12, "Dec"]
                    ],
                    tickLength: 0,
                    axisLabel: "App"
                }
		};
			
$.plot($("#hall-30days-views"), data, options);

$.plot("#hall-30days-ratings", [{
			data: build_new_data,label:'Hall 1 long name',
			lines: { show: true }
		}, {
			data: build_pass_data,label:'Hall 2',
			lines: { show: true }
		}, {
			data: build_fail_data,label:'Hall 3',
			lines: { show: true }
		}], options2);

$(window).resize(function(){
	$("#hall-30days-views").html('');
	$.plot($("#hall-30days-views"), data, options);
	$("#hall-30days-ratings").html('');
	$.plot("#hall-30days-ratings", [{
			data: build_new_data,label:'Hall 1 long name',
			lines: { show: true }
		}, {
			data: build_pass_data,label:'Hall 2',
			lines: { show: true }
		}, {
			data: build_fail_data,label:'Hall 3',
			lines: { show: true }
		}], options2);
});

</script>
</body>
</html>
