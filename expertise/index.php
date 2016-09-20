<?php
//ini_set('display_errors', 1);
//error_reporting(E_ALL);
$pagetitle = "Expertise";
include("../includes/header.inc.php");
?>
<script>
$('#Expertise').addClass('current');
</script>
			<div id="content" class="expertise about expertiseText">
				<div ondrop="drop(event)" ondragover="drag_over(event)" id="aboutImages" width="400" height="600">
					<img draggable="true" ondragstart="drag_start(event)" id="lipstick" class="circular" src="../about/img/lipstick.png" alt="Lipstick"/>
					<img draggable="true" ondragstart="drag_start(event)" id="family" class="circular" src="../about/img/family.png" alt="Family"/>
					<img draggable="true" ondragstart="drag_start(event)" id="clean" class="circular" src="../about/img/clean.png" alt="Clean"/>
				</div>
			
				<h3>
					The Institute for Sensory Research has extensive experience conducting sensory evaluations of foods, beverages, cosmetics, fragrances, fabrics, health care, personal care and home care products.  We offer a range of sensory solutions to align with your budget, timing and data requirements.  Our methodologies are designed to answer all of your product sensory questions.
				</h3>

				<ul>
					<li class="toggler"><a>Hybrid Descriptive Analysis</a>
						<div>Uncovering quality data with meaningful/useful attributes and references for your product category
					</div></li>
					<li class="toggler"><a>Discrimination Testing</a>
						<div>Determining if a sensory difference exists between samples using various methodologies
					</div></li>
					<li class="toggler"><a>Preference Mapping / Category Appraisal</a>
						<div>Benchmarking against competitors and identifying sensory space and market gaps of a product category
					</div></li>
					<li class="toggler"><a>Shelf-life Studies</a>
						<div>Helping to determine product shelf-life or extension
					</div></li>
					<li class="toggler"><a>Round-table Tasting/ Product Screening</a>
						<div>Narrowing down variants in team meetings with R&amp;D and Market Research
					</div></li>
					<li class="toggler"><a>Flash Profiling</a>
						<div>Rapid sensory mapping of selected samples
					</div></li>
					<li class="toggler"><a>Time Intensity</a>
						<div>Understanding the evolution of an attribute over a period of time
					</div></li>
					<li class="toggler"><a>Temporal Dominance of Sensation</a>
						<div>Focusing on dominant sensations over a period of time
					</div></li>
					<li class="toggler"><a>On-site Training</a>
						<div>Conducting panel development and training at your location or ours.
					</div></li>
					<li class="toggler"><a>Product ideation & innovation</a>
						<div>Partnering with sister company, Blueberry, to provide full-service product lifecycle research solutions.
					</div></li>
					<li class="toggler"><a>Customized, hybrid solutions for your specific research needs</a>
						<div><a title="email Avishan Amanat" href="mailto:aamanat@sensoryguidance.com?subject=ISR%20Examples">Contact us</a> for examples, case studies & information.
					</div></li>
				</ul>

<script>
$(function() {
	var toggles=$('.toggler');
	toggles.children('div').hide();
	toggles.children('a').prop("title","click to see description");
	toggles.children('a').click(function() {
		$(this).parent().find('div').toggle();
		return false;
	});
});
</script>

			</div>
<?php
include("../includes/footer.inc.php");
?>
