<!DOCTYPE html>
<html dir="ltr" lang="en" class="no-js">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
  <link rel="stylesheet" href="dist/css/main.css">
	
	<style>
		dd {margin-left:20px;}
		dt {margin: 10px 0 5px;}
	</style>

</head>
<body  id="docent">
	<?php 
	$title = "Templates";
	require(dirname(__FILE__).'/src/templates/components/header-general.php');?>
	
	<div class="container" id="mainContent">
	
	<dl>
		<dt>Common Components</dt>
		<dd><a href="/src/templates/components/header-question.php">Question Header</a></dd>
		<dd><a href="/src/templates/components/header-dashboard.php">Dashboard Header</a></dd>
		<dd><a href="/src/templates/components/header-general.php">General Header</a></dd>
		<dd><a href="/src/templates/base.php">Page Base</a></dd>
		<dd><a href="/src/templates/components/search-jump.php">Search / Jump Menu</a></dd>

<dt>Pages</dt>
<dd><a href="/src/templates/acronyms.php">Acronyms</a> </dd>
<dd><a href="/src/templates/action-items.php">Action Items</a></dd>
<dd><a href="/src/templates/criteria.php">Criteria</a></dd>
<dd><a href="/src/templates/dashboard.php">Dashboard</a></dd>
<dd><a href="/src/templates/definitions.php">Definitions</a></dd>
<dd><a href="/src/templates/help.php">Help</a></dd>
<dd><a href="/src/templates/na-questions.php">N/A Questions</a></dd>
<dd><a href="/src/templates/skipped-questions.php">Skipped Questions</a></dd>
<dd>Question <ul>
<li><a href="/src/templates/question-yes.php">Question-yes</a></li>
<li><a href="/src/templates/question-no.php">Question-no</a> </li>
</ul>
<dd><a href="/src/templates/review.php">Review</a></dd>
<dd><a href="/src/templates/start.php">Start</a></dd>
<dd><a href="/src/templates/navigation.php">Navigation</a></dd>




</dl>
	</div>
	<script src="bower_components/jquery/dist/jquery.min.js"></script>
	<script src="bower_components/bootstrap-sass/assets/javascripts/bootstrap.min.js"></script>

</body>
</html>
