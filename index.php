<!DOCTYPE html>
<html dir="ltr" lang="en" class="no-js">
<head>
<link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="dist/css/main.css">
	
	<style>
		dd {margin-left:20px;}
		dt {margin: 10px 0 5px;}
	</style>

</head>
<body>
	<?php 
	$title = "Templates";
	require(dirname(__FILE__).'/src/templates/components/header-general.php');?>
	
	<div class="container" id="mainContent">
	<p> Todo: Introduction, explanation goes here</p>
	
	<dl>
		<dt>Common Components</dt>
		<dd><a href="/src/templates/components/header-question.php">Question Header</a></dd>
		<dd><a href="/src/templates/components/header-dashboard.php">Dashboard Header</a></dd>
		<dd><a href="/src/templates/components/header-general.php">General Header</a></dd>
		<dd><a href="/src/templates/base.php">Page Base</a></dd>

<dt>Pages</dt>
<dd><a href="/src/templates/acronyms.php">Acronyms</a></dd>
<dd><a href="/src/templates/action-items.php">Action Items</a>*</dd>
<dd><a href="/src/templates/criteria.php">Criteria</a>*</dd>
<dd><a href="/src/templates/dashboard.php">Dashboard</a></dd>
<dd><a href="/src/templates/definitions.php">Definitions</a></dd>
<dd><a href="/src/templates/help.php">Help</a>*</dd>
<dd><a href="/src/templates/na-questions.php">N/A Questions</a></dd>
<dd><a href="/src/templates/skipped-quesitons.php">Skipped Questions</a></dd>
<dd>Question <ul>
<li><a href="/src/templates/question-yes.php">Question-yes</a> - In Progress</li>
<li><a href="/src/templates/question-no.php">Question-no</a> - In Progress</li>
</ul>
<dd><a href="/src/templates/review.php">Review</a>*</dd>
<dd><a href="/src/templates/start.php">Start</a></dd>
<dd><a href="/src/templates/navigation.php">Navigation</a>*</dd>


<dd>* pending final design</dd>


<dt>Flattened pages</dt>
<dd><a href="/src/flats/question-yes.html">Question-yes</a> - In Progress</dd>
<dd><a href="/src/flats/question-no.html">Question-no</a> - In Progress</dd>


</dl>
	</div>
	<script src="bower_components/jquery/dist/jquery.min.js"></script>
	<script src="bower_components/bootstrap/dist/js/bootstrap.min.js"/>
  <script src="dist/js/app.min.js"></script>
</body>
</html>
