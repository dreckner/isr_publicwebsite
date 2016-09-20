<?php
//ini_set('display_errors', 1);
//error_reporting(E_ALL);
$pagetitle = "Facilities";
include("../includes/header.inc.php");
?>
<script>
$('#Facilities').addClass('current');
</script>
			<div id="content" class="facilities">

				<h3 id="facilitiesHeader">ASTM-Standard Sensory Facilities, conveniently located just outside New York City (Harrison, NY)</h3>

				<div id="facilitiesImages">
					<div class="blue"><!--<a href="#foodbev_link">--><img id="foodbev_img" style="height:auto;" src="img/ISRweb-food-bev-photo-350px.png" alt="Food & Beverage Booths"/><!--</a>-->
						<!--<div class="caption"><B>FOOD & BEVERAGE BOOTHS</B>
							<br/>ASTM STANDARD (23 BOOTHS)</div>-->
					</div>
					<div class="purple even"><!--<a href="#personalcare_link">--><img id="personalcare_img" class="circular" style="height:auto;" src="img/ISRweb-pers-care-photo-350px.png" alt="Personal Care Booths"/><!--</a>-->
						<!--<div class="caption"><B>PERSONAL CARE BOOTHS</B>
							<br/>ASTM STANDARD (12 BOOTHS)</div>-->
					</div>
					<div class="red"><!--<a href="#testkitchen_link">--><img id="testkitchen_img" class="circular" style="height:auto;" src="img/ISRweb-kitchen-photo-350px.png" alt="Test Kitchen"/><!--</a>-->
						<!--<div class="caption"><B>TEST KITCHEN & LAB</B>
							<br/>(18' x 30')</div>-->
					</div>
				<!-- <br clear="all"> -->
					<!-- <div class="red extraindent"><a href="#conferenceroom_link"><img id="conferenceroom_img" class="circular" src="img/conferenceroom.png" alt="Conference Room"/></a>
						<div class="caption"><B>CONFERENCE ROOM</B>
							<br/>(SEATS 15)</div>
					</div> -->
					<div class="blue even"><!--<a href="#multipurpose_link">--><img id="multipurpose_img" class="circular" style="height:auto;" src="img/ISRweb-muti-focus-room-photo-350px.png" alt="Multi-Purpose Room"/><!--</a>-->
						<!--<div class="caption"><B>MULTI-PURPOSE ROOM</B>
							<br/>(23' x 36')</div>-->
					</div>
					<div class="purple"><!--<a href="#focusgroup_link">--><img id="focusgroup_img" class="circular" style="height:auto;" src="img/ISRweb-prep-area-photo-350px.png" alt="Product Prep Area"/><!--</a>-->
						<!--<div class="caption"><B>FOCUS GROUP ROOM</B>
							<br/>(SEATS 15)</div>-->
					</div>
				</div>
				<br clear="all">
				<hr/>
				<p class="blue" style="padding-left:50px;"><b>Download our
					<a rel="external" title="To Download, Right-Click -> Save as..." href="ISR-Harrison-Facility-SpecSheet.pdf">Facility Specifications & Floor plan</a></b>
				</p>
				<hr/>

				<div id="spacer1" class="spacer"></div>
<!--
				<ul id="roomdescriptions">
					<li id="foodbev_link" class="toplink"><a href="#container" title="go back to the top of the page">Top</a></li>
					<li id="foodbev" class="blue">FOOD & BEVERAGE BOOTHS.  ASTM Standard (12 booths)
					<ul>
						<li>Customized lighting.  ASTM standard.  Color masking available.</li>
						<li>Positive air pressure capabilities, allow panelists to evaluate products under controlled conditions</li>
						<li>Compusense 5 version 4.8</li>
						<li>Breadboxes provide pass-through to Test Kitchen & Lab</li>
					</ul></li>
					<li id="conferenceroom_link" class="toplink"><a href="#container" title="go back to the top of the page">Top</a></li>
					<li id="conferenceroom" class="red">CONFERENCE ROOM (seats 15)
					<ul>
						<li>For client meetings & panel training</li>
						<li>Accessible to Test Kitchen & Lab</li>
						<li>ASTM lighting</li>
						<li>Color-masking available</li>
						<li>Positive air pressure capabilities allow panelists to evaluate products under controlled conditions</li>
					</ul></li>
					<li id="personalcare_link" class="toplink"><a href="#container" title="go back to the top of the page">Top</a></li>
					<li id="personalcare" class="purple">PERSONAL CARE BOOTHS.  ASTM Standard (10 booths)
					<ul>
						<li>Sink with temperature, pressure & hardness-controlled water</li>
						<li>Small appliance outlets</li>
						<li>Compusense 5 version 4.8</li>
						<li>Air exchange = 5 turns/hr</li>
						<li>Customized lighting.  ASTM standard.  Color masking available.</li>
						<li>Sliding mirrors provide pass-through to Product Preparation Area</li>
					</ul></li>
					<li id="multipurpose_link" class="toplink"><a href="#container" title="go back to the top of the page">Top</a></li>
					<li id="multipurpose" class="blue">MULTI-PURPOSE ROOM (26' x 36')
					<ul>
						<li>Seats up to 30 classroom style or 50 theatre style</li>
						<li>Configurable to 12 individual interviewing booths</li>
						<li>Attached to Test Kitchen & Lab</li>
					</ul></li>
					<li id="testkitchen_link" class="toplink"><a href="#container" title="go back to the top of the page">Top</a></li>
					<li id="testkitchen" class="red">TEST KITCHEN & LAB (45' x 15')
					<ul>
						<li>Walk-in cooler & 3 refrigerators</li>
						<li>40 cu. ft. commercial freezer space</li>
						<li>Ice machine</li>
						<li>9' commercial vent hood with fire suppression system</li>
						<li>3 electric industrial ovens & 18 gas burners</li>
						<li>10 microwave ovens</li>
						<li>2 short cycle commercial dishwashers</li>
					</ul></li>
					<li id="focusgroup_link" class="toplink"><a href="#container" title="go back to the top of the page">Top</a></li>
					<li id="focusgroup" class="purple">FOCUS GROUP SUITE (seats 15)
					<ul>
						<li>Tiered client viewing</li>
						<li>Private lounge with CCTV</li>
						<li>Separate client entrance & restroom</li>
						<li>Internet access , Videostreaming, DVD recording</li>
					</ul></li>
				</ul>
				<div id="spacer2" class="spacer"></div>
<script>
function addSpace() {
	$('#spacer1').height( ($(window).height() - $('nav').height() - $('#facilitiesHeader').height() - $('#facilitiesImages').height() - 160) + "px" ); //160 subtracted for padding
	$('#spacer2').height( ($(window).height() - $('#focusgroup').height() - $('#focusgroup_link').height() - $('footer').height()) - 110 + "px" ); //110 subtracted for padding
}
$(function() { addSpace(); });
$(window).resize(function(){
	addSpace();
});
</script>
-->
			</div>
<?php
include("../includes/footer.inc.php");
?>
