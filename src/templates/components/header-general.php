<?php global $title;
if (!isset($title)){
	$title="Title";
}
?>

<header id="primaryheader">
<nav class="navbar navbar-default">

  <div class="container">
  <div class="topWrap">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
     <a class="navbar-brand" href="/"><img src="/dist/images/icons/docent-logo-f-n-l-1.svg" alt="docent" ></a>
    </div>
    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav navbar-right hidden-xs">
        <li class="dropdown hidden-xs">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Menu <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Start</a></li>
                        <li><a href="#">Dashboard</a></li>
                        <li><a href="#">Navigate</a></li>
                        <li><a href="#">Actions</a></li>
                        <li><a href="#">Skipped Questions</a></li>
                        <li><a href="#">N/A Questions</a></li>
                        <li><a href="#">Review</a></li>
                        <li><a href="#">Save</a></li>
          </ul>
        </li>
        <li class="dropdown hidden-xs">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Help <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Criteria</a></li>
            <li><a href="#">Definitions</a></li>
            <li><a href="#">Acronyms</a></li>
            <li><a href="#">Help</a></li>
          </ul>
        </li>
        </ul>
        <ul class="nav navbar-nav visible-xs">
        

                        <li><a href="#">Dashboard</a></li>
                        <li><a href="#">Navigate</a></li>
                        <li><a href="#">Actions</a></li>
                        <li><a href="#">Skipped Questions</a></li>
                        <li><a href="#">N/A Questions</a></li>
                        <li><a href="#">Review</a></li>
                        <li><a href="#">Save</a></li>
                        
                        <li><a href="#">Criteria</a></li>
                        <li><a href="#">Definitions</a></li>
                        <li><a href="#">Acronyms</a></li>
                        <li><a href="#">Help</a></li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
  </div>
</nav>
</header>
	<header id="subheader">
		<div class="container">
		<div class="row">
			<div class="col-sm-6">
			<ol class="breadcrumb">
			  <li class="active"><?=$title;?></li>
			</ol>
			</div>
			<div class="col-sm-6">
				<div class="row">
				<div class="col-xs-12 meta">
									Target MRL: 7 | Target Date: 2017-01-04
								</div>
				</div>
				
			</div>
		</div>
		
		</div>
	</header>