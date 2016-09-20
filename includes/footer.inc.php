			<footer>
<div id="sharethis">
<!--<span class='st_sharethis_large' displayText='ShareThis'></span>-->
<a rel="external" href="http://www.facebook.com/theinstituteforsensoryresearch" class='facebook_large' displayText='Facebook'></a>
<a rel="external" href="http://www.linkedin.com/company/the-institute-for-sensory-research" class='linkedin_large' displayText='LinkedIn'></a>
</div>

<a href="/">HOME</a>
<?php
$menu = array(
	"About" => "/about/",
	"Management" => "/management/",
	"Panels" => "/experience/",
	"Methodologies" => "/expertise/",
	"Facilities" => "/facilities/",
	"Contact" => "/contact/"
);
foreach (array_keys($menu) as $menu_item) {
	print " | <a href=\"".$menu[$menu_item]."\">".strtoupper($menu_item)."</a>\n";
}
?>
<br/>
The Institute for Sensory Research | <a href="mailto:info@sensoryguidance.com">info@sensoryguidance.com</a> | <a href="tel:9146965155">+1 914 696 5155</a>


			</footer>
		</div>

        <script>
            var _gaq=[['_setAccount','UA-41761030-1'],['_trackPageview']];
            (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
            g.src='//www.google-analytics.com/ga.js';
            s.parentNode.insertBefore(g,s)}(document,'script'));
        </script>
    </body>
</html>
