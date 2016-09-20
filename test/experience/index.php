<?php
//ini_set('display_errors', 1);
//error_reporting(E_ALL);
$pagetitle = "Experience";
include("../includes/header.inc.php");
?>
<script>
$('#Experience').addClass('current');
</script>
			<div id="content" class="experience">
				<div ondrop="drop(event)" ondragover="drag_over(event)" id="experienceImages" width="460" height="500">
					<img draggable="true" ondragstart="drag_start(event)" id="panelists" class="circular" src="img/panelists.png" alt="Panelists"/>
					<img draggable="true" ondragstart="drag_start(event)" id="sinkbooth" class="circular" src="img/sinkbooth.png" alt="Sinkbooth"/>
					<img draggable="true" ondragstart="drag_start(event)" id="training" class="circular" src="img/training.png" alt="Training"/>
				</div>

				<h3>
					As one of the industry's first sensory research providers, we know that ensuring panel quality is essential to producing accurate research results.  Whether you need your own on-site panel, a panel at our location designed for you, or a trained descriptive panel that you can use as needed, we offer a variety of flexible panel solutions to align with your sensory research needs. And, all panels are screened, trained and managed with our scrupulous attention to the scientific principles of sensory research.
					<br/><br/>
					Our expert panels are among the highest quality in the industry.  Panelists are carefully selected and screened to ensure high levels of sensory acuity and articulacy. They are trained with protocol and lexicon instruction, utilizing terminology that is precise.  We also employ standard rating scales for intensity and standards for clarification of descriptors. And, panelists are consistently monitored - individually and as a group - to ensure consistency and repeatability.
				</h3>


				<ul><li><B>DESCRIPTIVE PANELS.  Quality and Consistency.</B>
					<ul><li>We maintain our own descriptive panels for your convenience and ease in scheduling.  Our panels work regularly across a variety of industries. This ensures that they have exposure to a broad array of tastes, scents and textures and can therefore accurately assess and describe certain characteristics.
					</li></ul>
					</li>

				<li><B>CLIENT PANELS.  Your Site, Our Site. Your Choice.</B>
					<ul><li>Recruiting and maintaining your own trained, descriptive analysis panel is an investment. Whether you are creating a new panel or directing an existing one, ISR will manage the tasks of screening, training, monitoring, and maintaining your panel, at your facility or at ours.  And, your panels will be screened, trained and managed with our signature, scrupulous attention to detail.
					</li></ul>
					</li>

				<li><B>CUSTOM PANELS.  Flexible Solutions Aligned to You.</B>
					<ul><li>We know that not every need can be anticipated, and many needs require a discussion prior to knowing how to proceed.  We welcome an opportunity to provide a sensory consultation...to understand your goals and craft custom sensory solutions tailored to your business needs.
					</li></ul>
					</li>

				</ul>



			</div>
<?php
include("../includes/footer.inc.php");
?>
