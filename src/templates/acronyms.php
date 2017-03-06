<!DOCTYPE html>
<html dir="ltr" lang="en" class="no-js">
<head>
<link rel="stylesheet" href="../../bower_components/bootstrap/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="../../dist/css/main.css">
</head>
<body>

	<?php 
	// Get the proper header
	$title = "Acronyms";
	require(dirname(__FILE__).'/components/header-general.php');?>
	

	<div class="container">
		<div class="row">
		<div class="col-md-9">		
		Jump bar
		</div>
		
		<div class="col-md-3">
		<form>
		
		   <div class="input-group">
		     <input type="text" class="form-control" placeholder="Search for...">
		     <span class="input-group-btn">
		       <button class="btn btn-default" type="button"><span class="glyphicon glyphicon-search"></span></button>
		     </span>
		   </div><!-- /input-group -->
		   </form>

		   </div>
		</div>
		<table class="table table-striped">
		<tr>
			<th>Ancronym</th>
			<td>Definition</td>
		</tr>
		<tr>
			<th>Ancronym</th>
			<td>Definition</td>
		</tr>
		<tr>
			<th>Ancronym</th>
			<td>Definition</td>
		</tr>
		<tr>
			<th>Ancronym</th>
			<td>Definition</td>
		</tr>
		</table>


		</div>
	<script src="../../bower_components/jquery/dist/jquery.min.js"></script>
	<script src="../../bower_components/bootstrap/dist/js/bootstrap.min.js"/>
  <script src="../../dist/js/app.min.js"></script>
</body>
</html>
