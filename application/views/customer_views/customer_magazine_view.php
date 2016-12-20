<?php include 'application/views/header.php'?>
<div class="container">
	<div class="center margin-bottom-title-user"><h2>Magazines</h2></div>
	<div class="col-md-12"></div>
	<div class="col-md-8"></div>
	<div class="col-md-4">
		<form class="form-inline search-form">
			<input type="text" class="form-control" id="search" placeholder="Search...">
			<button type="button" onclick="search_magazine()"  class="btn btn-default">Search</button>
		</form>
	</div>
	<div class="col-md-12 v-space"></div>
	<div id="container_magazines">
		<?php
			include('application/views/customer_views/cmagazine_partial_view.php');
			echo $partial_view_result;
		?>
	</div>
</div>
<script src = "/js/magazine_information.js"></script>