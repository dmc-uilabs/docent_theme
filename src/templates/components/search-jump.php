<div class="row jumpmenu">
<div class="col-md-9">		
Jump To: 
<?php 
$alphabet = ["A", "B", "C", "D", "E", "F", "G", "H", "I", "J", "K", "L", "M", "N", "O", "P", "Q", "R", "S", "T", "U", "V", "W", "X", "Y", "Z"];
foreach ($alphabet as $letter) {
	print '<a href="#jump-'.$letter.'">'.$letter.'</a>';
}

 ?>
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