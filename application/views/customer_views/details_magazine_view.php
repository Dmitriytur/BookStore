<?php
include 'application/views/header.php';
$magazine = $data->fetchArray();
?>
<div class="container">
	<div class="row">
		<div class="back-reference">
			<a href="/magazines">< Back to the magazines</a>
		</div>
	</div>
	<div class="col-md-12 v-space"></div>
	<div class="row">
		<div class="col-md-3">
			<img class="img-rounded size-big" src="/img/magazine<?php echo $magazine['Id'] ?>.jpg" alt="magazine" />
		</div>
		<div class="col-md-6">
			<p> <span class="bold">Name: </span><?php echo $magazine['Id'] ?></p>
			<p> <span class="bold">Genre: </span><?php echo $magazine['Genre'] ?></p>
			<p> <span class="bold">Price per one: </span><?php echo $magazine['Price'] ?>$</p>
			<p> <span class="bold">Annotation: </span><?php echo $magazine['Annotation'] ?></p>
			<div class="form-group">
				<label for="date">Start data</label>
				<input type="text" class="form-control" id="start_data" name="start_data" required placeholder="21.12.16">
			</div>
			<div class="form-group">
				<label for="date">Finish data</label>
				<input type="text" class="form-control" id="finish_data" name="finish_data" required placeholder="21.01.17">
			</div>
			<p><span class="bold">Total sum: </span>4$<p>
			<a href="#">
				<button type="sumbit" class="btn btn-success center">Subscribe</button>
			</a>
		</div>
	</div>
	<div class="col-md-12 v-space"></div>
	<div class="col-md-12 v-space"></div>
</div>
</div>