<?php
//ini_set('display_errors', 1);
//error_reporting(E_ALL);
$pagetitle = "Panels";
include("../includes/header.inc.php");
?>
<script>
$('#Panels').addClass('current');
</script>
			<div id="content" class="panels">
				<div ondrop="drop(event)" ondragover="drag_over(event)" id="panelImages" width="400" height="600">
					<img draggable="true" ondragstart="drag_start(event)" id="perfume" class="circular" src="img/perfume.png" alt="Perfume"/>
					<img draggable="true" ondragstart="drag_start(event)" id="soapdispenser" class="circular" src="img/soapdispenser.png" alt="Soap Dispenser"/>
					<img draggable="true" ondragstart="drag_start(event)" id="eating" class="circular" src="img/eating.png" alt="Eating"/>
				</div>


				<h3>Join our Panels!</h3>

				<ul>
				<li><a href="mailto:info@sensoryguidance.com?subject=Join Our Descriptive Panel">JOIN OUR DESCRIPTIVE PANEL</a>
					<br/>This is a part-time, long-term position.  There are no evenings or weekends required.
					<br/>We offer 10 - 12 weeks of PAID training. Upon training completion, a regular work schedule of 4-6 hours per week will be scheduled, Monday thru Thursday.  To apply: <a href="tel:9146965155">914-696-5155</a> x7 or <a href="mailto:info@sensoryguidance.com?subject=Join Our Descriptive Panel">info@sensoryguidance.com</a>.
					</li>

				<li><a target="_blank" rel="external" href="http://www.reckneropinions.com/" title="reckneropinions.com">JOIN OUR CONSUMER PANEL</a>
					<br/>This is an online and/or on-site panel of consumers who are paid when they participate in surveys.  Participation may be once every 3 to 6 months.
					</li>
				</ul>
			</div>

<?php
include("../includes/footer.inc.php");
?>
