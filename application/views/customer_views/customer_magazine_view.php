<?php include 'application/views/header.php' ?>
<div class="container">
	<div class="row">
		<div class="col-md-12 center margin-bottom-title"><h2>Magazines</h2></div>
	</div>
	
	<form class="form-inline search-form">
		<div class="col-md-9">
			<div class="row">
				<div class="col-md-4">
					<input type="text" class="form-control" id="search_name" placeholder="Search for the name...">
				</div>
				<div class="col-md-4">
					<input type="text" class="form-control" id="search_genre" placeholder="Search for the genre...">
				</div>
				<div class="col-md-4">
					<button type="submit" class="btn btn-success">Search</button>
				</div>
			</div>
		</div>	
		<div class="col-md-3"></div>
	</form>
		
	<div class="col-md-12 v-space"></div>
	<div id="container_magazines"  class="col-md-9">
			<?php
			include('application/views/customer_views/cmagazine_partial_view.php');
			echo $partial_view_result;
			?>
			<div class="row">
				<div class="col-md-12">
					<ul class="pagination">
						<li><a href="#"><span class="glyphicon glyphicon-menu-left"></span></a></li>
					    <li><a href="#">1</a></li>
					    <li class="active"><a href="#">2</a></li>
					    <li><a href="#">3</a></li>
					    <li><a href="#">4</a></li>
					    <li><a href="#">5</a></li>
						<li><a href="#"><span class="glyphicon glyphicon-menu-right"></span></a></li>
					</ul>
				</div>
			</div>
	</div>
	
	<div class="col-md-3">
		<div class="form-group">
			<label for="images">Price:</label><br/>
			<input type="radio" id="asc" name="price" value="coloured illustration"> ascending sort<br/>
			<input type="radio" id="desc" name="price" value="black-and-white"> descending sort<br/>
		</div>
			
		<a href="details_book.html">
			<button type="button" class="btn btn-success"> Apply filters</button>
		</a>
	</div>
	<div class="col-md-12 v-space"></div>
	<div class="col-md-12 v-space"></div>
</div>
<script src = "/js/book_information.js"></script>
	
