<?php
//ini_set('display_errors', 1);
//error_reporting(E_ALL);
$pagetitle = "About";
include("../includes/header.inc.php");
?>
<script>
$('#About').addClass('current');
</script>
			<div id="content" class="about">

				<h3>Located just outside Manhattan, a full-service sensory research provider with ASTM-standard sensory testing facilities.  We have provided sensory research solutions since 2000, and we serve hundreds of clients in the food, beverage, beverage alcohol, personal care, cosmetics and home care industries.</h3>

				<div class="left about">
					<ul> <li>Capabilities
						<ul> <li>10 ASTM-standard Personal Care Booths
						</li><li>12 ASTM-standard Food & Beverage Booths
						</li><li>Commercial Test Kitchen
						</li><li>Focus Group Suite
						</li><li>Multi-purpose Room
						</li><li>Trained Sensory Panel
						</li></ul>
					</li><li>Methodologies
						<ul> <li>Hybrid Descriptive Analysis
						</li><li>Discrimination Testing
						</li><li>Preference Mapping / Category Appraisal
						</li><li>Shelf-life Studies
						</li><li>Round-table Tasting/ Product Screening
						</li><li>Flash Profiling
						</li><li>Time Intensity
						</li><li>Temporal Dominance of Sensation
						</li><li>On-site Training
						</li><li>Product ideation & innovation
						</li><li>Custom solutions
						</li></ul>
					</li></ul>
				</div>
				<div class="right">

					<div class="dl_button button_box">
						<a href="http://www.sensoryguidance.com/documents/ISR-CategoryAppraisal.pdf" rel="external">
							<div class="title">The Do's and Don'ts of Category Appraisal</div>
							Download now
						</a>
					</div>

					<div class="email_button button_box">
						<div class="title">Learn More</div>
						Share your email for ISR's quarterly tips and trends

						<form name="contact" action="http://survey8.reckner.com/isr/add.php" method="POST" autocomplete="on">
						<fieldset>
							<input type="hidden" id="referral" name="referral" value="<?php print (isset($_REQUEST['ref']) ? $_REQUEST['ref'] : "info");?>"/>
							<input type="email" id="email" name="email" required placeholder="Email Address" value=""/><br/>
							<input type="submit" id="submit" name="submit" value="Sign Up!" style="margin-top:0.6em;"/>
						</fieldset>
						</form>
<script>
function submitForm() {
	$("#submit").replaceWith(spinner());
	$("div.error").remove();

	//isn't it cool that we're using JSONP?
	$.ajax({
		url: "http://survey8.reckner.com/isr/add.php",
		jsonp: "callback",
		dataType: "jsonp",
		data: {
				referral: $("#referral").val(),
//				fname: $("#fname").val(),
//				lname: $("#lname").val(),
//				company: $("#company").val(),
				email: $("#email").val()
		},
		success: function( response, status, thingy ) {
			if (response == "error1") {
				//bad email
				//$("label[for=email]").css("background-color","red");
				$(".spinner").replaceWith('<div class="error">Please enter a valid email address</div><input type="submit" id="submit" name="submit" value="Sign Up!"/>');
				$("#submit").click(function(e) {
					e.preventDefault();
					submitForm();
					return false;
				});
				return false;
			}
			if (response == "W00t!") {
				//success!
				$(".spinner").replaceWith('thanks for signing up!');
			}
		},
		complete: function( response, status) {
		}
	});
}

$("#submit").click(function(e) {
	e.preventDefault();
	submitForm();
	return false;
});
</script>


					</div>
				</div>
				<div class="clearfix"></div>

			</div>

<?php
include("../includes/footer.inc.php");
?>
