<!DOCTYPE html>
<html dir="ltr" lang="en" class="no-js">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
<link rel="stylesheet" href="../../dist/css/main.css">

</head>
<body id="docent">


	<?php 
	// Get the proper header
	$title = "Navigation";
	require(dirname(__FILE__).'/components/header-general.php');
	$testData = [
			"Technology Maturity" => 
			["Technology Maturity"=>
				[
					["Have pertinent Manufacturing Science (MS) and Advanced Manufacturing Technology requirements been identified?"],
					["Are the necessary manufacturing technology development efforts continuing?", "Have the required manufacturing technology development solutions been demonstrated in a production relevant environment?"],
					["Have pertinent Manufacturing Science (MS) and Advanced Manufacturing Technology requirements been identified?"],
					["Are the necessary manufacturing technology development efforts continuing?", "Have the required manufacturing technology development solutions been demonstrated in a production relevant environment?"],
					["Have pertinent Manufacturing Science (MS) and Advanced Manufacturing Technology requirements been identified?"],
					["Are the necessary manufacturing technology development efforts continuing?", "Have the required manufacturing technology development solutions been demonstrated in a production relevant environment?"],
					["Have pertinent Manufacturing Science (MS) and Advanced Manufacturing Technology requirements been identified?"],
					["Are the necessary manufacturing technology development efforts continuing?", "Have the required manufacturing technology development solutions been demonstrated in a production relevant environment?"],
					["Have pertinent Manufacturing Science (MS) and Advanced Manufacturing Technology requirements been identified?"],
					["Are the necessary manufacturing technology development efforts continuing?", "Have the required manufacturing technology development solutions been demonstrated in a production relevant environment?"],
				]],
			"Technology &amp; Industrial Base"=>[
				"Technology Transition to Production" =>[
					["Have pertinent Manufacturing Science (MS) and Advanced Manufacturing Technology requirements been identified?"],
					["Are the necessary manufacturing technology development efforts continuing?", "Have the required manufacturing technology development solutions been demonstrated in a production relevant environment?"],
					["Have pertinent Manufacturing Science (MS) and Advanced Manufacturing Technology requirements been identified?"],
					["Are the necessary manufacturing technology development efforts continuing?", "Have the required manufacturing technology development solutions been demonstrated in a production relevant environment?"],
					["Have pertinent Manufacturing Science (MS) and Advanced Manufacturing Technology requirements been identified?"],
					["Are the necessary manufacturing technology development efforts continuing?", "Have the required manufacturing technology development solutions been demonstrated in a production relevant environment?"],
					["Have pertinent Manufacturing Science (MS) and Advanced Manufacturing Technology requirements been identified?"],
					["Are the necessary manufacturing technology development efforts continuing?", "Have the required manufacturing technology development solutions been demonstrated in a production relevant environment?"],
					["Have pertinent Manufacturing Science (MS) and Advanced Manufacturing Technology requirements been identified?"],
					["Are the necessary manufacturing technology development efforts continuing?", "Have the required manufacturing technology development solutions been demonstrated in a production relevant environment?"],
				],
				"Manufacturing Technology Development" => [
				["Have pertinent Manufacturing Science (MS) and Advanced Manufacturing Technology requirements been identified?"],
				["Are the necessary manufacturing technology development efforts continuing?", "Have the required manufacturing technology development solutions been demonstrated in a production relevant environment?"],
				["Have pertinent Manufacturing Science (MS) and Advanced Manufacturing Technology requirements been identified?"],
				["Are the necessary manufacturing technology development efforts continuing?", "Have the required manufacturing technology development solutions been demonstrated in a production relevant environment?"],
				["Have pertinent Manufacturing Science (MS) and Advanced Manufacturing Technology requirements been identified?"],
				["Are the necessary manufacturing technology development efforts continuing?", "Have the required manufacturing technology development solutions been demonstrated in a production relevant environment?"],
				["Have pertinent Manufacturing Science (MS) and Advanced Manufacturing Technology requirements been identified?"],
				["Are the necessary manufacturing technology development efforts continuing?", "Have the required manufacturing technology development solutions been demonstrated in a production relevant environment?"],
				["Have pertinent Manufacturing Science (MS) and Advanced Manufacturing Technology requirements been identified?"],
				["Are the necessary manufacturing technology development efforts continuing?", "Have the required manufacturing technology development solutions been demonstrated in a production relevant environment?"]]
			],
			"Design"=>[
				"Producibility Program" =>
				[			["Have pertinent Manufacturing Science (MS) and Advanced Manufacturing Technology requirements been identified?"],
					["Are the necessary manufacturing technology development efforts continuing?", "Have the required manufacturing technology development solutions been demonstrated in a production relevant environment?"],
					["Have pertinent Manufacturing Science (MS) and Advanced Manufacturing Technology requirements been identified?"],
					["Are the necessary manufacturing technology development efforts continuing?", "Have the required manufacturing technology development solutions been demonstrated in a production relevant environment?"],
					["Have pertinent Manufacturing Science (MS) and Advanced Manufacturing Technology requirements been identified?"],
					["Are the necessary manufacturing technology development efforts continuing?", "Have the required manufacturing technology development solutions been demonstrated in a production relevant environment?"],
					["Have pertinent Manufacturing Science (MS) and Advanced Manufacturing Technology requirements been identified?"],
					["Are the necessary manufacturing technology development efforts continuing?", "Have the required manufacturing technology development solutions been demonstrated in a production relevant environment?"],
					["Have pertinent Manufacturing Science (MS) and Advanced Manufacturing Technology requirements been identified?"],
					["Are the necessary manufacturing technology development efforts continuing?", "Have the required manufacturing technology development solutions been demonstrated in a production relevant environment?"],]
			],
			"Cost and Funding"=>[
				"Production Cost Knowledge (Cost Modeling)"=>
				[			["Have pertinent Manufacturing Science (MS) and Advanced Manufacturing Technology requirements been identified?"],
					["Are the necessary manufacturing technology development efforts continuing?", "Have the required manufacturing technology development solutions been demonstrated in a production relevant environment?"],
					["Have pertinent Manufacturing Science (MS) and Advanced Manufacturing Technology requirements been identified?"],
					["Are the necessary manufacturing technology development efforts continuing?", "Have the required manufacturing technology development solutions been demonstrated in a production relevant environment?"],
					["Have pertinent Manufacturing Science (MS) and Advanced Manufacturing Technology requirements been identified?"],
					["Are the necessary manufacturing technology development efforts continuing?", "Have the required manufacturing technology development solutions been demonstrated in a production relevant environment?"],
					["Have pertinent Manufacturing Science (MS) and Advanced Manufacturing Technology requirements been identified?"],
					["Are the necessary manufacturing technology development efforts continuing?", "Have the required manufacturing technology development solutions been demonstrated in a production relevant environment?"],
					["Have pertinent Manufacturing Science (MS) and Advanced Manufacturing Technology requirements been identified?"],
					["Are the necessary manufacturing technology development efforts continuing?", "Have the required manufacturing technology development solutions been demonstrated in a production relevant environment?"],],
				"Cost Analysis"=>
				[			["Have pertinent Manufacturing Science (MS) and Advanced Manufacturing Technology requirements been identified?"],
					["Are the necessary manufacturing technology development efforts continuing?", "Have the required manufacturing technology development solutions been demonstrated in a production relevant environment?"],
					["Have pertinent Manufacturing Science (MS) and Advanced Manufacturing Technology requirements been identified?"],
					["Are the necessary manufacturing technology development efforts continuing?", "Have the required manufacturing technology development solutions been demonstrated in a production relevant environment?"],
					["Have pertinent Manufacturing Science (MS) and Advanced Manufacturing Technology requirements been identified?"],
					["Are the necessary manufacturing technology development efforts continuing?", "Have the required manufacturing technology development solutions been demonstrated in a production relevant environment?"],
					["Have pertinent Manufacturing Science (MS) and Advanced Manufacturing Technology requirements been identified?"],
					["Are the necessary manufacturing technology development efforts continuing?", "Have the required manufacturing technology development solutions been demonstrated in a production relevant environment?"],
					["Have pertinent Manufacturing Science (MS) and Advanced Manufacturing Technology requirements been identified?"],
					["Are the necessary manufacturing technology development efforts continuing?", "Have the required manufacturing technology development solutions been demonstrated in a production relevant environment?"],],
				"Manufacturing Investment Budget"=>
				[			["Have pertinent Manufacturing Science (MS) and Advanced Manufacturing Technology requirements been identified?"],
					["Are the necessary manufacturing technology development efforts continuing?", "Have the required manufacturing technology development solutions been demonstrated in a production relevant environment?"],
					["Have pertinent Manufacturing Science (MS) and Advanced Manufacturing Technology requirements been identified?"],
					["Are the necessary manufacturing technology development efforts continuing?", "Have the required manufacturing technology development solutions been demonstrated in a production relevant environment?"],
					["Have pertinent Manufacturing Science (MS) and Advanced Manufacturing Technology requirements been identified?"],
					["Are the necessary manufacturing technology development efforts continuing?", "Have the required manufacturing technology development solutions been demonstrated in a production relevant environment?"],
					["Have pertinent Manufacturing Science (MS) and Advanced Manufacturing Technology requirements been identified?"],
					["Are the necessary manufacturing technology development efforts continuing?", "Have the required manufacturing technology development solutions been demonstrated in a production relevant environment?"],
					["Have pertinent Manufacturing Science (MS) and Advanced Manufacturing Technology requirements been identified?"],
					["Are the necessary manufacturing technology development efforts continuing?", "Have the required manufacturing technology development solutions been demonstrated in a production relevant environment?"],]
			],
			"Materials"=>[
				"Maturity"=>
				[			["Have pertinent Manufacturing Science (MS) and Advanced Manufacturing Technology requirements been identified?"],
					["Are the necessary manufacturing technology development efforts continuing?", "Have the required manufacturing technology development solutions been demonstrated in a production relevant environment?"],
					["Have pertinent Manufacturing Science (MS) and Advanced Manufacturing Technology requirements been identified?"],
					["Are the necessary manufacturing technology development efforts continuing?", "Have the required manufacturing technology development solutions been demonstrated in a production relevant environment?"],
					["Have pertinent Manufacturing Science (MS) and Advanced Manufacturing Technology requirements been identified?"],
					["Are the necessary manufacturing technology development efforts continuing?", "Have the required manufacturing technology development solutions been demonstrated in a production relevant environment?"],
					["Have pertinent Manufacturing Science (MS) and Advanced Manufacturing Technology requirements been identified?"],
					["Are the necessary manufacturing technology development efforts continuing?", "Have the required manufacturing technology development solutions been demonstrated in a production relevant environment?"],
					["Have pertinent Manufacturing Science (MS) and Advanced Manufacturing Technology requirements been identified?"],
					["Are the necessary manufacturing technology development efforts continuing?", "Have the required manufacturing technology development solutions been demonstrated in a production relevant environment?"],],
				"Availability"=>
				[			["Have pertinent Manufacturing Science (MS) and Advanced Manufacturing Technology requirements been identified?"],
					["Are the necessary manufacturing technology development efforts continuing?", "Have the required manufacturing technology development solutions been demonstrated in a production relevant environment?"],
					["Have pertinent Manufacturing Science (MS) and Advanced Manufacturing Technology requirements been identified?"],
					["Are the necessary manufacturing technology development efforts continuing?", "Have the required manufacturing technology development solutions been demonstrated in a production relevant environment?"],
					["Have pertinent Manufacturing Science (MS) and Advanced Manufacturing Technology requirements been identified?"],
					["Are the necessary manufacturing technology development efforts continuing?", "Have the required manufacturing technology development solutions been demonstrated in a production relevant environment?"],
					["Have pertinent Manufacturing Science (MS) and Advanced Manufacturing Technology requirements been identified?"],
					["Are the necessary manufacturing technology development efforts continuing?", "Have the required manufacturing technology development solutions been demonstrated in a production relevant environment?"],
					["Have pertinent Manufacturing Science (MS) and Advanced Manufacturing Technology requirements been identified?"],
					["Are the necessary manufacturing technology development efforts continuing?", "Have the required manufacturing technology development solutions been demonstrated in a production relevant environment?"],],
				"Supply Chain Management"=>
				[			["Have pertinent Manufacturing Science (MS) and Advanced Manufacturing Technology requirements been identified?"],
					["Are the necessary manufacturing technology development efforts continuing?", "Have the required manufacturing technology development solutions been demonstrated in a production relevant environment?"],
					["Have pertinent Manufacturing Science (MS) and Advanced Manufacturing Technology requirements been identified?"],
					["Are the necessary manufacturing technology development efforts continuing?", "Have the required manufacturing technology development solutions been demonstrated in a production relevant environment?"],
					["Have pertinent Manufacturing Science (MS) and Advanced Manufacturing Technology requirements been identified?"],
					["Are the necessary manufacturing technology development efforts continuing?", "Have the required manufacturing technology development solutions been demonstrated in a production relevant environment?"],
					["Have pertinent Manufacturing Science (MS) and Advanced Manufacturing Technology requirements been identified?"],
					["Are the necessary manufacturing technology development efforts continuing?", "Have the required manufacturing technology development solutions been demonstrated in a production relevant environment?"],
					["Have pertinent Manufacturing Science (MS) and Advanced Manufacturing Technology requirements been identified?"],
					["Are the necessary manufacturing technology development efforts continuing?", "Have the required manufacturing technology development solutions been demonstrated in a production relevant environment?"],],
				"Special Handling"=>
				[			["Have pertinent Manufacturing Science (MS) and Advanced Manufacturing Technology requirements been identified?"],
					["Are the necessary manufacturing technology development efforts continuing?", "Have the required manufacturing technology development solutions been demonstrated in a production relevant environment?"],
					["Have pertinent Manufacturing Science (MS) and Advanced Manufacturing Technology requirements been identified?"],
					["Are the necessary manufacturing technology development efforts continuing?", "Have the required manufacturing technology development solutions been demonstrated in a production relevant environment?"],
					["Have pertinent Manufacturing Science (MS) and Advanced Manufacturing Technology requirements been identified?"],
					["Are the necessary manufacturing technology development efforts continuing?", "Have the required manufacturing technology development solutions been demonstrated in a production relevant environment?"],
					["Have pertinent Manufacturing Science (MS) and Advanced Manufacturing Technology requirements been identified?"],
					["Are the necessary manufacturing technology development efforts continuing?", "Have the required manufacturing technology development solutions been demonstrated in a production relevant environment?"],
					["Have pertinent Manufacturing Science (MS) and Advanced Manufacturing Technology requirements been identified?"],
					["Are the necessary manufacturing technology development efforts continuing?", "Have the required manufacturing technology development solutions been demonstrated in a production relevant environment?"],]
			],
			"Process Capability &amp; Control"=>[
			"Modeling &amp; Simulation"=>
				[			["Have pertinent Manufacturing Science (MS) and Advanced Manufacturing Technology requirements been identified?"],
					["Are the necessary manufacturing technology development efforts continuing?", "Have the required manufacturing technology development solutions been demonstrated in a production relevant environment?"],
					["Have pertinent Manufacturing Science (MS) and Advanced Manufacturing Technology requirements been identified?"],
					["Are the necessary manufacturing technology development efforts continuing?", "Have the required manufacturing technology development solutions been demonstrated in a production relevant environment?"],
					["Have pertinent Manufacturing Science (MS) and Advanced Manufacturing Technology requirements been identified?"],
					["Are the necessary manufacturing technology development efforts continuing?", "Have the required manufacturing technology development solutions been demonstrated in a production relevant environment?"],
					["Have pertinent Manufacturing Science (MS) and Advanced Manufacturing Technology requirements been identified?"],
					["Are the necessary manufacturing technology development efforts continuing?", "Have the required manufacturing technology development solutions been demonstrated in a production relevant environment?"],
					["Have pertinent Manufacturing Science (MS) and Advanced Manufacturing Technology requirements been identified?"],
					["Are the necessary manufacturing technology development efforts continuing?", "Have the required manufacturing technology development solutions been demonstrated in a production relevant environment?"],]
			]
		];

	?>
	

	<div class="container" id="mainContent">
	<p> Click on any thread, sub-thread, level, or question to continue the questionaire at that point.</p>

	 <?php
	 $i=0;
	    foreach ($testData as $section => $items) {
			?>
	    <div class="navigation-group">
	      <h4 class="group-title">
	        <a role="button" data-toggle="collapse" href="#collapse<?=$i;?>" aria-expanded="true" aria-controls="collapse<?=$i;?>" class="collapse-item collapsed">
	          <?=$section;?>
	        </a>
	      </h4>
	    
	    <ul id="collapse<?=$i;?>" class="collapse" role="tabpanel" aria-labelledby="headingOne">
	     <?php $j = 0;
				foreach($items as $category => $questions){
	     ?>

	     <li>	
	     	<a role="button" data-toggle="collapse" href="#collapse<?=$i. '-'.$j;?>" aria-expanded="true" aria-controls="collapse<?=$i. '-'.$j;?>" class="collapse-item collapsed">
	     	  <?=$category;?>
	     	</a>
	     	<ul id="collapse<?=$i. '-'.$j;?>" class="collapse">
					<?php 
					$k=0;
					foreach($questions as $index => $questionList){
					?>

					<li><a role="button" data-toggle="collapse" href="#collapse<?=$i.'-'.$j.'-'.$k;?>" aria-expanded="true" aria-controls="collapse<?=$i.'-'.$j.'-'.$k;?>" class="collapse-item collapsed">
	     	  <?=$index;?>
	     	</a>
					<ul id="collapse<?=$i.'-'.$j.'-'.$k;?>" class="collapse">
						<?php foreach ($questionList as $questionText){?>
						<li><a href="#"><?=$questionText;?></a></li>

						<?php } ?>
						
					</ul>
	     	</li>
	     	<?php $k++;} ?>
					
	     	</ul>
	     	</li>
	     	<? $j++; } ?>
	    </ul>
	  
	 </div>
	 <?php 
	 $i++;
	 
	 } ?>
	
		</div>

		<script src="../../bower_components/jquery/dist/jquery.min.js"></script>
		<script src="../../bower_components/bootstrap-sass/assets/javascripts/bootstrap.min.js"></script>

</body>
</html>
