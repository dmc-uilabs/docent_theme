<!DOCTYPE html>
<html dir="ltr" lang="en" class="no-js">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
<link rel="stylesheet" href="../../bower_components/bootstrap/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="../../dist/css/main.css">
</head>
<body>

	<?php 
	// Get the proper header
	$title = "Acronyms";
	require(dirname(__FILE__).'/components/header-general.php');?>
	

	<div class="container" id="mainContent">
		<?php require(dirname(__FILE__).'/components/search-jump.php');?>

		<?php
		// This looks goofy, but the redunant divs are nessesary to keep the left and right edges aligned due to how bootstrap uses margins.
		?>
		<div class="acronymTable row-striped">
		
		<div><div class="row">
		
			<div class="col-sm-3">A/W</div>
			<div class="col-sm-9">Air Worthiness</div>
		</div>
		</div>
		<div>
		<div class="row">
			<div class="col-sm-3">AAC</div>
			<div class="col-sm-9">Air Armament Center</div>
		</div></div>
		<div>
		<div class="row">
			<div class="col-sm-3">ACO</div>
			<div class="col-sm-9">Administrative Contracting Officer</div>
		</div></div>
		<div>
		<div class="row">
			<div class="col-sm-3">ACTD</div>
			<div class="col-sm-9">Advanced Concept Technology Demonstration</div>
		</div></div>

	</div>

		</div>
	<script src="../../bower_components/jquery/dist/jquery.min.js"></script>
	<script src="../../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
  <script src="../../dist/js/app.min.js"></script>
</body>
</html>
