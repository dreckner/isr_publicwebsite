<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8"/>
<?php
	if (isset($_SERVER['HTTP_USER_AGENT']) && (strpos($_SERVER['HTTP_USER_AGENT'], 'MSIE') !== false)) {
        	header('X-UA-Compatible: IE=edge,chrome=1');
	}
        //<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
?>
        <title><?php if (isset($pagetitle)) { print $pagetitle." | "; } ?>The Institute for Sensory Research</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width">

        <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->

        <link rel="stylesheet" href="/css/normalize.css">
        <link rel="stylesheet" href="/css/main.css?version=1.1">


        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="/js/vendor/jquery-1.9.1.min.js"><\/script>')</script>
        <script src="/js/plugins.js"></script>
        <script src="/js/main.js?version=1.1"></script>

		<script type="text/javascript">var switchTo5x=false;</script>
		<!--<script type="text/javascript" src="http://w.sharethis.com/button/buttons.js"></script>
		<script type="text/javascript">stLight.options({publisher: "ur-b53ffe0c-c1b4-b45b-8532-83b7cd02e59", doNotHash: false, doNotCopy: false, hashAddressBar: false});</script>-->

        <script src="/js/vendor/modernizr-2.6.2.min.js"></script>
    </head>
    <body>
		<div id="container">
			<!--[if lt IE 7]>
				<p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
			<![endif]-->
			<nav>
				<div id="logo"><a href="/" style="display:block;"><img style="width:237px;height:90px;" src="/img/sISR_logo.png" alt="The Institute for Sensory Research" title="The Institute for Sensory Research"/></a></div>
<!-- Start Navigation Menu -->
				<!-- for drop-down nav -->
				<div id="menu_button">MENU</div>
				<ul id="menu_list" class="inactive">
					<!-- <li><a id="Home" href="/">HOME</a></li> -->
					<li><a id="About" href="/about/">ABOUT</a></li>
					<li><a id="Management" href="/management/">MANAGEMENT</a></li>
					<li><a id="Experience" href="/experience/">PANELS</a></li>
					<li><a id="Expertise" href="/expertise/">METHODOLOGIES</a></li>
					<li><a id="Facilities" href="/facilities/">FACILITIES</a></li>
					<li><a id="Contact" href="/contact/">CONTACT</a></li>
				</ul>
			</nav>
<!-- End Navigation Menu -->
