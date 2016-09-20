<?php
//ini_set('display_errors', 1);
//error_reporting(E_ALL);
include("includes/header.inc.php");
?>
<script>
$('#Home').addClass('current');
</script>
			<div id="content" class="home">

<!-- Start Slideshow -->
				<div style="width:100%;" class="container">
					<div id="slides">
						<img alt="Personal Care Research" src="/img/sISR_slideshow1.png"/>
						<img alt="Food & Beverage Research" src="/img/sISR_slideshow2.png"/>
						<img alt="Home Care Research" src="/img/sISR_slideshow3.png"/>
					</div>
				</div>

				<script src="/js/vendor/jquery.slides.min.js"></script>
				<script>
				  $(function() {
					$('#slides').slidesjs({
						width: 1310,
						height: 366,
						play: {
							active: true,
							auto: true,
							interval: 5000,
							swap: true
						}
					});
				  });
				</script>
<!-- End Slideshow -->

				<table class="homepoint"><tr>
				<td class="spacer"></td>
				<td id="homepoint1" class="homepoint">
					<h2>Creating Meaningful Research</h2>
					Wherever you are in the product development cycle, ISR has the sensory research solutions you need.
				</td>
				<td class="spacer"></td>
				<td id="homepoint2" class="homepoint">
					<h2>Identifying actionable solutions</h2>
					We craft custom research to provide insightful understanding of what drives product preferences and decision making.
				</td>
				<td class="spacer"></td>
				<td id="homepoint3" class="homepoint">
					<h2>Ensuring product success</h2>
					We create actionable solutions that build the bridge between where you are and where you want to be.
				</td>
				<td class="spacer"></td>
				</tr></table>
			</div>
<?php
include("includes/footer.inc.php");
?>
