<!DOCTYPE html>
<html dir="ltr" lang="en" class="no-js">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
<link rel="stylesheet" href="../../dist/css/main.css">

</head>
<body id="docent">


	<?php 
	// Get the proper header
	require(dirname(__FILE__).'/components/header-dashboard.php');

	// Test data

	$testData = [
			"Technology Maturity" => 
			["Technology Maturity"=>
				[1,1,1,1,1,1,1,2,3,0]],
			"Technology &amp; Industrial Base"=>[
				"Technology Transition to Production" =>[
						1,1,1,1,1,1,1,2,3,0
				],
				"Manufacturing Technology Development" => [
				0,0,0,0,1,2,2,0,0,0,]
			],
			"Design"=>[
				"Producibility Program" =>
				[0,0,0,0,0,0,0,0,0,0]
			],
			"Cost and Funding"=>[
				"Production Cost Knowledge (Cost Modeling)"=>
				[0,0,0,0,0,0,0,0,0,0],
				"Cost Analysis"=>
				[0,0,0,0,0,0,0,0,0,0],
				"Manufacturing Investment Budget"=>
				[0,0,0,0,0,0,0,0,0,0]
			],
			"Materials"=>[
				"Maturity"=>
				[0,0,0,0,0,0,0,0,0,0],
				"Availability"=>
				[0,0,0,0,0,0,0,0,0,0],
				"Supply Chain Management"=>
				[0,0,0,0,0,0,0,0,0,0],
				"Special Handling"=>
				[0,0,0,0,0,0,0,0,0,0]
			],
			"Process Capability &amp; Control"=>[
			"Modeling &amp; Simulation"=>
				[0,0,0,0,0,0,0,0,0,0]
			]
		];

	?>
	

	<div class="container" id="mainContent">
	<div class="row">
	<div class="col-xs-12">
		<a href="#" class="visible-xs pull-left btn-link" onclick="$('.collapse', '.navigation-group').each(function(){$(this).collapse()});"><span class="glyphicon glyphicon glyphicon-collapse-down"></span> Expand All</a>
		<a href="#" class="pull-right btn-link"><span class="glyphicon glyphicon-save"></span> Save as Image</a>
	</div>
	</div>
<div class="full-table hidden-xs table-responsive">

	<table class="table progress-table ">
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

		foreach ($testData as $section => $items) {
		?>
		<tr>
		<th colspan="12"><h3><?=$section;?></h3></th>
		</tr>
		<?php foreach ($items as $item => $rowData) {?>

		<tr>
			
		
					<td><?=$item;?></td>
					
					<?php for ($i = 0; $i<10; $i++){
						$class = "";
						switch ($rowData[$i]) {
							case 1:
								$class = "correct";
								break;
							case 2:
								$class = "incorrect";
								break;
								case 3: 
								$class = "incomplete";
								break;
						}
						?>
						<td>
							<span class="indicator <?=$class;?>"></span>
						</td>
					
					<?php } ?>



					<td>3240187</td>
				</tr>
	
		<?} 
		} ?>
	
	
	</table>
	</div>

	<div class="mobile-cards visible-xs">
	
		<div class="row">
		<div class="col-xs-12">
		<?php
				$i=1;
			 foreach ($testData as $section => $items) {
				
			 	?>
			 <div class="navigation-group">
				      <h4 class="group-title">
				        <a role="button" data-toggle="collapse" href="#collapse<?=$i;?>" aria-expanded="true" aria-controls="collapse<?=$i;?>" class="collapse-item collapsed">
				          <?=$section;?>
				        </a>
				      </h4>
				    <div id="collapse<?=$i;?>" class="collapse navigation-content">
				    <?php foreach ($items as $item => $rowData) {?>
				    <h3><?=$item;?></h3>
							<time datetime="2011-01-12">Completion date: 2017-01-03</time>			    	
				    	<table class="table table-responsive progress-table">
				    		<thead>
				    			<tr>
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
				    			</tr>
				    		</thead>
				    		<tbody>
				    			<tr>
				    				<?php for ($j = 0; $j<10; $j++){
				    										$class = "";
				    										switch ($rowData[$j]) {
				    											case 1:
				    												$class = "correct";
				    												break;
				    											case 2:
				    												$class = "incorrect";
				    												break;
				    												case 3: 
				    												$class = "incomplete";
				    												break;
				    										}
				    										?>
				    										<td> <span class="indicator <?=$class;?>"></span></td>
				    									
				    									<?php } ?>
				    			</tr>
				    		</tbody>
				    	</table>
				    <? } ?>
				    </div>

		</div>
		<?php 
			$i++;
		} 
		?>
		</div>
		

	</div>

		</div>
		<div class="row">
			
			<div class="col-xs-12 dashboard-controls">
				<button class="btn btn-primary">Action Items</button>
				<button class="btn btn-primary">Not Applicable Items</button>
				<button class="btn btn-primary">Skipped Items</button>
				
			</div>
		</div>

		<script src="../../bower_components/jquery/dist/jquery.min.js"></script>
		<script src="../../bower_components/bootstrap-sass/assets/javascripts/bootstrap.min.js"></script>

</body>
</html>
