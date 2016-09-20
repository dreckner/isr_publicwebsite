<?php
//if(!isset($_SESSION['creator_user'])){
//	exit("Proxy Login Error");
//}
phpinfo();

	// PHP Proxy
	// Loads a XML from any location. Used with Flash/Flex apps to bypass security restrictions
	// Author: Paulo Fierro
	// January 29, 2006
	// usage: proxy.php?url=http://mysite.com/myxml.xml

	$url = "http://survey1.reckner.com/isr/add.php?fname=".$_REQUEST['fname']."&lname=".$_REQUEST['lname']."&company=".$_REQUEST['company']."&referral=".$_REQUEST['referral']."&email=".$_REQUEST['email'];

//	$session = curl_init($_REQUEST['url']); 	               // Open the Curl session
	$session = curl_init($url); 	               // Open the Curl session
	curl_setopt($session, CURLOPT_HEADER, false); 	       // Do not return HTTP headers
	curl_setopt($session, CURLOPT_RETURNTRANSFER, true);   // Do return the contents of the call

//	curl_setopt( $session, CURLOPT_COOKIE, $strCookie ); //pass cookie

	$xml = curl_exec($session); 	                       // Make the call
	header("Content-Type: text/xml"); 	               // Set the content type appropriately
	echo $xml; 	      // Spit out the xml
	curl_close($session); // And close the session

?>