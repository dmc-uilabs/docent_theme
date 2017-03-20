<!DOCTYPE html>
<html dir="ltr" lang="en" class="no-js">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
<link rel="stylesheet" href="../../dist/css/main.css">

</head>
<body id="docent">


	<?php 
	// Get the proper header

	$title = "Review";
	require(dirname(__FILE__).'/components/header-general.php');?>
	

	<div class="container" id="mainContent">
	<a class="export" href="#"><span class="glyphicon glyphicon-export"></span>Export</a>

		<p>The scope is Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>


	<dl class="inline-list">
	<dt>Target MRL:</dt><dd>7</dd>
	<dt>Target Date:</dt> <dd>2017--14-04</dd>
	<dt>Location: </dt><dd>Chicago IL</dd>
	<dt>Team Members</dt><dd>John Smith - Project Manager</dd>
	</dl>


	<div class="review-block">
		<h2><a href="#">Is the stability of all sole/single/foreign sources and obsolescence issues being assessed/monitored?</a></h2>
		<div class="status-skipped">Skipped</div>
		<dl>
			<dt>Assumptions:</dt>
			<dd>Assumptions for skipped qustion</dd>
			<dt>Notes:</dt><dd>Notes for skipped question</dd>
			<dt>Attachements:</dt>
			<dd><a href="#">Operational-Inspection-Q2-2017.pdf</a></dd>
		</dl>
	</div>

	<div class="review-block">
		<h2><a href="#">Are the necessary alternatives to sole/single/foreign sources being developed?</a></h2>
		<div class="status-no">No</div>
	</div>

	<div class="review-block">
		<h2><a href="#">Have the required manufacturing science and manufacturing technology development solutions been demonstrated in a production representative environment?</a></h2>
		<div class="status-yes">Yes</div>
		<dl>
			<dt>Object Evidence:</dt>
			<dd>Product is in the market.</dd>
		</dl>
	</div>

	<div class="review-block">
		<h2><a href="#">Are the producibility enhancement efforts (e.g., Design For Manufacturing and Design for Assembly) ongoing for an optimized integrated system?</a></h2>
		<div class="status-na">Not Applicable</div>
	</div>


	</div>

	<script src="../../bower_components/jquery/dist/jquery.min.js"></script>
	<script src="../../bower_components/bootstrap-sass/assets/javascripts/bootstrap.min.js"></script>

</body>
</html>
