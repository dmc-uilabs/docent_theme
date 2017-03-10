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
	require(dirname(__FILE__).'/components/header-common.php');?>
	

	<div class="container" id="mainContent">
		<h3> Start New Assessment</h3>
		<p class="instruction">Use this option to start a new assessment.</p>	
		<form>
		<label>Team Members</label>
			<div class="row memberRow">
		<div class="col-sm-5">
				<input type="text" class="form-control" placeholder="Member Name"/>
			</div>
		<div class="col-sm-5">
			<input type="text" class="form-control" placeholder="Member Role"/>
		</div>
		<div class="col-sm-2">
			<button class="removeButton col-sm-2">Remove</button>
		</div>
	</div>

		<div class="memberSection">
			<div class="row memberRow">
		<div class="col-sm-5">
				<input type="text" class="form-control" placeholder="Member Name"/>
			</div>
		<div class="col-sm-5">
			<input type="text" class="form-control" placeholder="Member Role"/>
		</div>
		<div class="col-sm-2">
			<button class="removeButton col-sm-2">Remove</button>
		</div>
	</div>

		<button class="addButton">Add Team Member</button>
</div>

<div class="row">
	<div class="col-sm-6">
		<div class="form-group">
			<label>Scope</label>
			<textarea class="form-control" placeholder="Enter Scope Here" rows=6 style="height:139px;"></textarea>


		</div>
		<div class="form-group">
			<label>Location</label>
			<input type = "text" class="form-control" placeholder="Enter Location"/>
		</div>

	</div>
	<div class="col-sm-6">
	<div class="form-group">
		<label>Target MRL</label>
		<select class="form-control">
			<option>1</option>
			<option>2</option>
			<option>3</option>
			<option>4</option>
			<option>5</option>
		</select>
	</div>

	<div class="form-group">
	<label>Date to Achieve Target MRL</label>
	<div class="input-group date" data-provide="datepicker">
	    <input type="date" class="form-control">
	    <div class="input-group-addon">
	        <span class="glyphicon glyphicon-th"></span>
	    </div>
	</div>
	</div>
	<div class="form-group">
		<label>Deskbook Version</label>
		<select class="form-control">
			<option>V2.4 August 2015</option>
			<option>2</option>
			<option>3</option>
			<option>4</option>
			<option>5</option>
		</select>
	</div>
	</div>
</div>
	<button class="btn btn-primary pull-right">Start</button>
	<div class="continueSection">
	<div class="row">
	<div class="col-sm-6">
	<h3>Continue Existing Assessment</h3>
	<p>Use this option to start working on an existing assessment. You will be required to import your assessment data.</p>
	</div>

	<div class="col-sm-6">
		<button class="btn ">Help Importing</button>
		<button class="btn ">Import Assessment</button>
	
	</div>
	</div>
	</div>

</div>
		</form>
		</div>
	<script src="../../bower_components/jquery/dist/jquery.min.js"></script>
	<script src="../../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
  <script src="../../dist/js/app.min.js"></script>
</body>
</html>
