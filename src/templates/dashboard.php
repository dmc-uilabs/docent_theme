<!DOCTYPE html>
<html dir="ltr" lang="en" class="no-js">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
<link rel="stylesheet" href="../../dist/css/main.css">

</head>
<body id="docent">


	<?php 
	// Get the proper header
	require(dirname(__FILE__).'/components/header-dashboard.php');?>
	

	<div class="container" id="mainContent">
	<table class="table progressTable">
	<thead>
	<tr >
	<th></th>
	<th>1</th>
	<th>2</th>
	<th>3</th>
	<th>4</th>
	<th>5</th>
	<th>6</th>
	<th>7</th>
	<th>8</th>
	<th>9</th>
	<th>10</th>
	<th>Completion Date</th>
	</tr>
</thead>
		<?php 

		for ($i = 0; $i < 20; $i++){?>
		<tr>
		<th colspan="12"><h3>Technology Maturity</h3></th>
		</tr>
		<tr>
			
		
					<td>Technology Maturity</td>
					<td class="indicator "></td>
					<td class="indicator correct"></td>
					<td class="indicator incorrect"></td>
					<td class="indicator correct"></td>
					<td class="indicator incorrect"></td>
					<td class="indicator incomplete"></td>
					<td class="indicator "></td>
					<td class="indicator "></td>
					<td class="indicator "></td>
					<td class="indicator "></td>
					<td>3240187</td>
				</tr>
				<tr>
					<td>Technology Maturity</td>
					<td class="indicator "></td>
					<td class="indicator correct"></td>
					<td class="indicator incorrect"></td>
					<td class="indicator correct"></td>
					<td class="indicator incorrect"></td>
					<td class="indicator incomplete"></td>
					<td class="indicator "></td>
					<td class="indicator "></td>
					<td class="indicator "></td>
					<td class="indicator "></td>
					<td>3240187</td>
				</tr>
		
		<? } ?>
	
	
	</table>


		</div>

		<script src="../../bower_components/jquery/dist/jquery.min.js"></script>
		<script src="../../bower_components/bootstrap-sass/assets/javascripts/bootstrap.min.js"></script>

</body>
</html>
