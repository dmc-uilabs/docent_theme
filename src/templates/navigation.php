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
	$title = "Navigation";
	require(dirname(__FILE__).'/components/header-general.php');?>
	

	<div class="container" id="mainContent">
	<p> Click on any thread, sub-thread, level, or question to continue the questionaire at that point.</p>

	 
	    <div class="navigation-group">
	      <h4 class="group-title">
	        <a role="button" data-toggle="collapse" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne" class="collapse-item collapsed">
	          Collapsible Group Item #1
	        </a>
	      </h4>
	    
	    <ul id="collapseOne" class="collapse" role="tabpanel" aria-labelledby="headingOne">
	     <li>	
	     	<a role="button" data-toggle="collapse" href="#collapseTwo" aria-expanded="true" aria-controls="collapseOne" class="collapse-item collapsed">
	     	  Technology Transition to Production
	     	</a>
	     	<ul id="collapseTwo" class="collapse">
					<li><a role="button" data-toggle="collapse" href="#collapseThree" aria-expanded="true" aria-controls="collapseThree" class="collapse-item collapsed">
	     	  Technology Transition to Production
	     	</a>
					<ul id="collapseThree" class="collapse">
						<li><a href="#">Question 1</a></li>

						<li><a href="#">Question 2</a></li>

						<li><a href="#">Question 3</a></li>

						<li><a href="#">Question 4</a></li>

					</ul>
	     	</li>
					<li>3</li>
					<li>4</li>
					<li>5</li>
	     	</ul>
	     	</li>
	    </ul>
	  
	 </div>

	     <div class="navigation-group">
	       <h4 class="group-title">
	         <a role="button" data-toggle="collapse" href="#collapseTwoOne" aria-expanded="true" aria-controls="collapseOne" class="collapse-item collapsed">
	           Collapsible Group Item #1
	         </a>
	       </h4>
	     
	     <ul id="collapseTwoOne" class="collapse" role="tabpanel" aria-labelledby="headingOne">
	      <li>	
	      	<a role="button" data-toggle="collapse" href="#collapseTwoTwo" aria-expanded="true" aria-controls="collapseOne" class="collapse-item collapsed">
	      	  Technology Transition to Production
	      	</a>
	      	<ul id="collapseTwoTwo" class="collapse">
	 				<li><a role="button" data-toggle="collapse" href="#collapseTwoThree" aria-expanded="true" aria-controls="collapseThree" class="collapse-item collapsed">
	      	  Technology Transition to Production
	      	</a>
	 				<ul id="collapseTwoThree" class="collapse">
	 					<li><a href="#">Question 1</a></li>

	 					<li><a href="#">Question 2</a></li>

	 					<li><a href="#">Question 3</a></li>

	 					<li><a href="#">Question 4</a></li>

	 				</ul>
	      	</li>
	 				<li>3</li>
	 				<li>4</li>
	 				<li>5</li>
	      	</ul>
	      	</li>
	     </ul>
	   
	  </div>

	      <div class="navigation-group">
	        <h4 class="group-title">
	          <a role="button" data-toggle="collapse" href="#collapseThreeOne" aria-expanded="true" aria-controls="collapseOne" class="collapse-item collapsed">
	            Collapsible Group Item #1
	          </a>
	        </h4>
	      
	      <ul id="collapseThreeOne" class="collapse" role="tabpanel" aria-labelledby="headingOne">
	       <li>	
	       	<a role="button" data-toggle="collapse" href="#collapseThreeTwo" aria-expanded="true" aria-controls="collapseOne" class="collapse-item collapsed">
	       	  Technology Transition to Production
	       	</a>
	       	<ul id="collapseTwo" class="collapse">
	  				<li><a role="button" data-toggle="collapse" href="#collapseThreeThree" aria-expanded="true" aria-controls="collapseThree" class="collapse-item collapsed">
	       	  Technology Transition to Production
	       	</a>
	  				<ul id="collapseThree" class="collapse">
	  					<li><a href="#">Question 1</a></li>

	  					<li><a href="#">Question 2</a></li>

	  					<li><a href="#">Question 3</a></li>

	  					<li><a href="#">Question 4</a></li>

	  				</ul>
	       	</li>
	  				<li>3</li>
	  				<li>4</li>
	  				<li>5</li>
	       	</ul>
	       	</li>
	      </ul>
	    
	   </div>
		</div>
	<script src="../../bower_components/jquery/dist/jquery.min.js"></script>
	<script src="../../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
  <script src="../../dist/js/app.min.js"></script>
</body>
</html>
