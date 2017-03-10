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
	require(dirname(__FILE__).'/components/header-question.php');?>
	

	<div class="container" id="mainContent">

			<div class="row">
			<div class="col-md-8">
					<div class="question-header">
					<h4>MRL: 6</h4>
					<h1>
Are the producibility enhancement efforts (e.g., Design For <span data-toggle="tooltip" data-placement="bottom"  title="The scope is Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.">Manufacturing</span> and Design for Assembly) ongoing for an optimized integrated system?</h1>
					<span class="collapse-link" data-toggle="collapse" data-target="#question-explanation" aria-expanded="false" aria-controls="question-explanation">Show Explanation</span>
					<p class="collapse" id="question-explanation">Representative model or prototype system, which is well beyond that of TRL 5, is tested in a relevant environment. Represents a major step up in a technology’s demonstrated readiness. Examples include testing a prototype in a jigh-fidelity laboratory environment or in a simunlated operational environment.</p>
					
</div>

					
					<form>
					  <div class="form-group">
					    <label for="answer-select">Answer</label>
					    <select class="form-control" id="answer-select">
					      <option>Yes</option>
					      <option>No</option>
					      </select>
					  </div>
					  <div class="form-group">
					    <label for="answer-evidence">Objective Evidence</label>
					    <textarea class="form-control" id="answer-evidence" rows="5"></textarea>
					  </div>

					  <hr/>

					  <div class="form-group">
					    <label for="answer-assumptions">Assumptions</label>
					    <textarea class="form-control" id="answer-assumptions" rows="5" placeholder="Enter any assumptions here..."></textarea>
					  </div>

					  <div class="form-group">
					    <label for="answer-notes">Notes</label>
					    <textarea class="form-control" id="answer-notes" rows="5" placeholder="Enter any notes here..."></textarea>
					  </div>

					</form>
						<div class="attachments">
						<dl class="attachments-list">
						<dt>Attachments</dt>
						<dd><a href="#">Filename.pdf</a><span class="attachment-remove"></span></dd>
						<dd><a href="#">Filename.pdf</a><span class="attachment-remove"></span></dd>
						<dd><a href="#">Filename.pdf</a><span class="attachment-remove"></span></dd>
						<dd><a href="#">Filename.pdf</a><span class="attachment-remove"></span></dd>
						</dl>
						<span class="btn btn-default">Attach File</span>
						
					</div>
					</div>



		<div class="col-md-3 col-md-offset-1">
			<div class="navigation-controls">
				<div class="btn btn-primary"> <span class="glyphicon glyphicon-triangle-left"></span>Previous</div>
				<div class="btn btn-primary">Next<span class="glyphicon glyphicon-triangle-right"></div>
			</span>
			</div>
		

</div>
	
		
	<script src="../../bower_components/jquery/dist/jquery.min.js"></script>
	<script src="../../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
  <script src="../../dist/js/app.min.js"></script>
</body>
</html>
