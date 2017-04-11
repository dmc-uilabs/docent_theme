<form>
<div class="jumpmenu row">
<div class="col-sm-9">
<div class="jump-desktop hidden-xs">
Jump To: 
<?php 
$options = '';
$alphabet = ["A", "B", "C", "D", "E", "F", "G", "H", "I", "J", "K", "L", "M", "N", "O", "P", "Q", "R", "S", "T", "U", "V", "W", "X", "Y", "Z"];
foreach ($alphabet as $letter) {
	print '<a href="#jump-'.$letter.'">'.$letter.'</a>';
	$options .= '<option>'.$letter.'</option>';
}

 ?>
</div>
<div class="jump-mobile visible-xs">
<div class="form-group">
	<div class="input-group">
	<div class="input-group-addon jump-label">Jump To: </div>
	<select class="form-control">
		<?php echo $options;?>
	</select>
	</div>
	</div>
</div>

</div>

<div class="col-sm-3">
   <div class="input-group">
     <input type="text" class="form-control" placeholder="Search for...">
     <span class="input-group-btn">
       <button class="btn btn-default" type="button"><span class="glyphicon glyphicon-search"></span></button>
     </span>
   </div><!-- /input-group -->
   </form>

   </div>
</div>
</form>
