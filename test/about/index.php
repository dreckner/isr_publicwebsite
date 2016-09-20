<?php
//ini_set('display_errors', 1);
//error_reporting(E_ALL);
$pagetitle = "About";
include("../includes/header.inc.php");
?>
<script>
$('#About').addClass('current');
//$('#About2').addClass('current');
</script>
			<div id="content" class="about">
				<div ondrop="drop(event)" ondragover="drag_over(event)" id="aboutImages" width="400" height="600">
					<img draggable="true" ondragstart="drag_start(event)" id="lipstick" class="circular" src="img/lipstick.png" alt="Lipstick"/>
					<img draggable="true" ondragstart="drag_start(event)" id="family" class="circular" src="img/family.png" alt="Family"/>
					<img draggable="true" ondragstart="drag_start(event)" id="clean" class="circular" src="img/clean.png" alt="Clean"/>
				</div>


				<h3>
					Located just outside New York City, we are nationally-recognized, full-service sensory research organization, providing sensory research solutions, sensory panel administration, and ASTM-standard sensory testing facilities.  
					<br/><br/>
					We are one of the most experienced scientific sensory research organizations in the nation with more than fifteen years' working with food, beverage, home care and personal care manufacturers from across the United States and around the globe.  
					<br/><br/>
					Our approach links established sensory and scientific methodologies with strict quality controls at the facility and panel level to provide reliable research results for confident decision making.
				</h3>

				<ul><li>Capabilities
					<ul> <li>Custom research solutions
					</li><li>Trained sensory panelists
					</li><li>ASTM-standard personal care booths (12)
					</li><li>ASTM-standard food/beverage booths (23)
					</li><li>Test kitchen, focus group & multipurpose room research facilities
					</li></ul>
					</li>

				<li>Specialties
					<ul> <li>Recruiting and screening panels
					</li><li>Training expert panels for descriptive studies
					</li><li>Collecting discrimination & descriptive data
					</li><li>Providing detailed reports, analysis and guidance
					</li><li>Managing both long & short term projects
					</li><li>Monitoring the performance of panelists, as individuals & as groups
					</li></ul>
					</li>

				<li>Management
					<ul> <li>Directed by Avishan Amanat, a 18-year veteran of sensory sciences with a strong background in consumer products goods manufacturing.
					</li><li>Owned by J. Reckner Associates, a U.S.-based market researcher provider
					</li><li>Proudly adhering to the code of ethics set forth by CASRO, MRA and ASTM.
					</li><li><a href="/management/">Learn more...</a>
					</li></ul>
					</li>
				</ul>
				<div class="brochure">
					<a rel="external" title="Right click->Save as, to download PDF" href="/documents/ISR%20email%20brochure.pdf">Download our brochure</a>
				</div>
			</div>

<?php
include("../includes/footer.inc.php");
?>
