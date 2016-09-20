<?php
//ini_set('display_errors', 1);
//error_reporting(E_ALL);
$pagetitle = "Learn";
include("../includes/header.inc.php");
?>
<script>
//$('#Contact').addClass('current');
</script>
			<div id="content" class="learn"><table><tr>
				<td colspan="2" class="learnText">
					<h3>The Institute for Sensory Research, located just outside Manhattan, is full-service sensory research provider with ASTM-standard sensory testing facilities.  Providing sensory research solutions since 2000, ISR serves hundreds of clients in the food, beverage, beverage alcohol, personal care, cosmetics and home care industries.  </h3>
					<ul>
						<li>
							WHAT (Capabilities)
							<ul> <li>Designed specifically for sensory testing with 10 ASTM-standard personal care, 12 ASTM-standard food/beverage booths, a commercial test kitchen, focus group suite & multi-purpose room.
							</li><li>A panel of trained sensory experts provides product evaluations and testing.
							</li></ul>
						</li>
					</ul>

				</td></tr>
				<tr><td  class="learnText">
					<ul>
						<li>
							WHERE
							<ul><li>White Plains, NY, just outside of Manhattan.
							</li></ul>
							</li>
							</ul>
							<ul>
							<li>

							HOW (Methodologies)
							<ul><li>Hybrid Descriptive Analysis
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
						</li>
					</ul>
				</td>
				<td>
				<div id="ContactForm">
					<span style="color:#9F206B;font-weight:bold;">FREE REPORT:<br/> The Do's & Don'ts of Category Appraisal</span>
					<br/>
					<form name="contact" action="http://survey1.reckner.com/isr/add.php" method="POST" autocomplete="on">
					<fieldset>
						<input type="hidden" id="referral" name="referral" value="<?php print (isset($_REQUEST['ref']) ? $_REQUEST['ref'] : "none");?>"/>
						<label for="fname">First Name:</label><br/> <input type="text" id="fname" name="fname" placeholder="First Name" value="" autofocus/><br/>
						<label for="lname">Last Name:</label><br/> <input type="text" id="lname" name="lname" placeholder="Last Name" value=""/><br/>
						<label for="company">Company:</label><br/> <input type="text" id="company" name="company" placeholder="Company Name" value=""/><br/>
						<label for="email">Email<span style="color:red;">*</span>:</label><br/> <input type="email" id="email" name="email" required placeholder="Email Address" value=""/><br/>
						<input type="submit" id="submit" name="submit" value="Download Now" style="margin-top:0.6em;"/>
					</fieldset>
					</form>
<script>
function submitForm() {
	$("#submit").replaceWith(spinner());

	//isn't it cool that we're using JSONP?
	$.ajax({
		url: "http://survey1.reckner.com/isr/add.php",
		jsonp: "callback",
		dataType: "jsonp",
		data: {
				referral: $("#referral").val(),
				fname: $("#fname").val(),
				lname: $("#lname").val(),
				company: $("#company").val(),
				email: $("#email").val()
		},
		success: function( response, status, thingy ) {
			if (response == "error1") {
				//bad email
				$("label[for=email]").css("background-color","red");
				$(".spinner").replaceWith('<input type="submit" id="submit" name="submit" value="Download Now"/>');
				$("#submit").click(function(e) {
					e.preventDefault();
					submitForm();
					return false;
				});
				return false;
			}
			if (response == "W00t!") {
				//success!
			}
/*			window.open('http://www.sensoryguidance.com/documents/ISR-CategoryAppraisal.pdf',"_blank");
			$(".spinner").replaceWith('<input type="submit" id="submit" name="submit" value="Download Now"/>');
			$("#submit").click(function(e) {
				e.preventDefault();
				submitForm();
				return false;
			});
			return false;
*/
			window.location.href='http://www.sensoryguidance.com/documents/ISR-CategoryAppraisal.pdf';
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


/*
// Using YQL and JSONP
$.ajax({
    url: "http://query.yahooapis.com/v1/public/yql",

    // the name of the callback parameter, as specified by the YQL service
    jsonp: "callback",

    // tell jQuery we're expecting JSONP
    dataType: "jsonp",

    // tell YQL what we want and that we want JSON
    data: {
        q: "select title,abstract,url from search.news where query=\"cat\"",
        format: "json"
    },

    // work with the response
    success: function( response ) {
        console.log( response ); // server response
    }
});
*/

/*
$.ajax({
    url: "http://survey1.reckner.com/isr/add.php",

    // the name of the callback parameter, as specified by the YQL service
    jsonp: "callback",

    // tell jQuery we're expecting JSONP
    dataType: "jsonp",

    // tell YQL what we want and that we want JSON
    data: {
			referral: $("#referral").val(),
			fname: $("#fname").val(),
			lname: $("#lname").val(),
			company: $("#company").val(),
			email: $("#email").val()
    },

    // work with the response
    success: function( response ) {
        console.log( response ); // server response
    }
});
*/
/*
	$.get(
		"http://survey1.reckner.com/isr/add.php",
		{
			referral: $("#referral").val(),
			fname: $("#fname").val(),
			lname: $("#lname").val(),
			company: $("#company").val(),
			email: $("#email").val()
		},
		function(data, textStatus, jqXHR) {
			alert("Hey");
			alert(data);
		},
		"jsonp"
	);
*/


</script>
				</div>
				</td></tr>
				<tr><td colspan="2" class="learnText">
					<ul>
						<li>
							WHY (Management)
							<ul> <li>Directed by Avishan Amanat, a 15-year veteran of sensory sciences with a strong background in consumer products goods manufacturing.
							</li><li>Owned by J. Reckner Associates, a U.S.-based market researcher provider
							</li><li>Proudly adhering to the code of ethics set forth by CASRO, MRA and ASTM.
							</li><li>Solutions custom-crafted to your information, timing and budgetary requirements.
							</li></ul>
						</li>
					</ul>

				</td>
				</tr></table>
			</div>

<?php
include("../includes/footer.inc.php");
?>
