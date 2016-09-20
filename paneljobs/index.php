<?php
//ini_set('display_errors', 1);
//error_reporting(E_ALL);
$pagetitle = "Panel Jobs";
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

				<h3>Looking for a very, very part-time job?</h3>
				<p style="margin-left:30px;color:#083A81;">
					Seeking Caucasian females, ages <span title="Age/Gender criteria is due to nature of the research.">21-45*</span> for a part-time position with a steady schedule. <br/>
					Position starts in May 2015.  Employment includes ten - twelve weeks of training learning to evaluate personal care products.
				</p>
				<ul>
				<li>
					<u>Training Schedule</u><br/>
					May 1 - July 25, 2013<br/>
					11am-12:30pm, Monday-Thursday (1.5 hours per day)
				</li>
				<li>
					<u>Work Schedule</u><br/>
					Upon completion of training<br/>
					10:00am - 11:00am, Monday - Thursday  (1 hour per day)
				</li>
				<li>
					<u>The ideal candidate</u> 
					<ul>
					<li style="font-size:1em;">has a flexible schedule</li>
					<li style="font-size:1em;">is available to work at the days and times indicated</li>
					<li style="font-size:1em;">pay rate would be $15-$20 per hour</li>
					</ul>
				</li>
				</ul>
				<p style="margin-left:30px;color:#083A81;">
					This is NOT a full-time position and there are NO evenings and NO weekends required.
				</p>
				<ul>
				<li>
					<u>To be considered</u><br/>
					Call <a href="tel:9146965155">914-696-5155 x7</a> or <br/>
					Email your contact information to <a href="mailto:info@sensoryguidance.com?subject=Panel%20Job">info@sensoryguidance.com</a>.
				</li>
				</ul>
				<p style="font-style:italic;margin-left:30px;color:#083A81;">
					*Age/Gender criteria is due to nature of the research.
				</p>
			</div>

<?php
include("../includes/footer.inc.php");
?>
