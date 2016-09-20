<?php
//ini_set('display_errors', 1);
//error_reporting(E_ALL);
$pagetitle = "Contact";
include("../includes/header.inc.php");
?>
<script>
$('#Contact').addClass('current');
</script>
			<div itemscope itemtype="http://schema.org/LocalBusiness" id="content" class="contact"><table><tr>
				<td id="contactText">
					<h3>Thank you for your interest in the Institute for Sensory Research.  We welcome your inquiries.  Please feel free to contact us.</h3>

					<ul>
						<li>EMAIL
							<br/><a href="mailto:aamanat@sensoryguidance.com?subject=ISR%20Website%20Contact"><meta itemprop="email" content="aamanat@sensoryguidance.com">aamanat@sensoryguidance.com</a>
						</li>
						<li>VISIT
							<br/><span itemprop="name">The Institute for Sensory Research</span>
							<span itemprop="address" itemscope itemtype="http://schema.org/PostalAddress">
								<br/><a target="_blank" rel="external" title="View in Google Maps" href="https://www.google.com/maps/place/450+Mamaroneck+Ave+%23410,+Harrison,+NY+10528/@40.9736435,-73.7439652,830m/"><span itemprop="streetAddress">450 Mamaroneck Drive, Suite 410</span></a>
								<br/><span itemprop="addressLocality">Harrison</span>, <span itemprop="addressRegion">NY</span> <span itemprop="postalCode">10528</span>
								<meta itemprop="addressCountry" content="USA">
							</span>
							<br/><a href="tel:9146965155"><span itemprop="telephone">+1 914 696 5155</span></a> (tel)
							<meta itemprop="url" content="http://www.sensoryguidance.com">
						</li>
						<li>CORPORATE
							<br/><a href="http://www.reckner.com/" target="_blank" rel="external">www.reckner.com</a>
						</li>
						<li>JOIN OUR PANELS
							<br/><a href="/panels/">Learn more...</a>
						</li>
						<li>CAREERS <br/>

<?php
$path="careers";
$pat="/.*\.php$/";
$d=dir($path);
$ret=Array();
while (false!==($e=$d->read())) {
	if (($e==".")||($e=="..")) continue;
	if (!preg_match($pat,$e)) continue;
	$ret[]=$path."/".$e;
}
if (sizeof($ret)>0) {
	foreach($ret as $job) {
		$title = str_replace(".php","",str_replace("_"," ",str_replace("careers/","",$job)));
		print "<a href='$job'>$title</a><br/>\n";
	}
} else {
	print "There are no job postings at this time.\n";
}


?>

						</li>
					</ul>

				</td>
				<td id="contactImage">
					<img itemprop="image" id="exterior" src="img/exterior.jpg" alt="Exterior"/>
				</td>
				</tr></table>
			</div>

<?php
include("../includes/footer.inc.php");
?>
