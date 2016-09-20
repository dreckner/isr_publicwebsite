<?php
error_reporting(E_ALL | E_STRICT);
ini_set('display_errors',1);
//ini_set('log_errors',1);
//ini_set('log_errors_max_len',0);
//ini_set('error_log','/test/phperrors.log');

ini_set('SMTP','exch1.reckner.com');


if (isset($_GET['submit'])) {
	if (isset($_GET['email'])) {
		$email = $_GET['email'];
		$fname = isset($_GET['fname']) ? $_GET['fname'] : "";
		$lname = isset($_GET['lname']) ? $_GET['lname'] : "";
		$company = isset($_GET['company']) ? $_GET['company'] : "";
		$msg = "Email: $email\r\nFirst Name: $fname\r\nLast Name: $lname\r\n Company: $company\r\n";

		$headers = 'From: webmaster@reckner.com' . "\r\n" .
		    'Reply-To: webmaster@reckner.com' . "\r\n" .
		    'X-Mailer: PHP/' . phpversion();


		$success = true;//mail("mfitzsimmons@reckner.com","ISR Request",$msg,$headers);

		if (!$success) {
			exit("Email Error");
		} else {

			/* AJAX check  */
			if(!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest') {
			/* special ajax here */
			die($content);
			}
		print "w00t!";
		}

	} else { exit("Error 902"); }
} else { exit("Error 901"); }

?>
