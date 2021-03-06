<?php include 'application/views/admin_views/header_admin.php' ?>
<div class="container">
	<div class="center margin-bottom-title"><h2>Adding magazine</h2></div>
    <form method="post" action="" id="add-post">
		<div class="row">
			<div class="col-md-6">
				<div class="form-group">
					<label for="name">Name</label>
					<input type="text" class="form-control" id="name" name="name" required placeholder="Name">
				</div>
				<div class="form-group">
					<label for="genre">Genre</label><br/>
					<input type="text" class="form-control" id="genre" name="genre" required placeholder="Genre">
				</div>
				<div class="form-group">
					<label for="annotation">Annotation</label>
					<textarea class="form-control" id="annotation" name="annotation" placeholder="Annotation">Annotation</textarea>
				</div>
				
			</div>
			<div class="col-md-6">
				<div class="form-group">
					<label for="pages">Pages</label>
					<input type="number" class="form-control" id="pages" name="pages" required placeholder="Pages">
				</div>
				<div class="form-group">
					<label for="price">Price</label>
					<input type="number" class="form-control" id="price" name="price" required placeholder="Price">
				</div>
				<div class="form-group">
					<label for="amount">Amount</label>
					<input type="number" class="form-control" id="amount" name="amount" required placeholder="Amount">
				</div>
				<div class="form-group" id="file-upload">
					<label for="book_image">Uploading the image: </label><br/>
					<input type="file" id="uploade-file" name="uploade-file" accept="image/jpeg,image/png,image/gif">
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-10"></div>
			<div class="col-md-2">
				<button type="button" class="btn btn-success right" id="add">Add magazine</button>
			</div>
		</div>
    </form>
	<br/><br/><br/>
	
	<div class="col-md-12 v-space v-negative-space"></div>
	<hr/>
	<div class="col-md-12 center margin-bottom-title"><h2>All magazines</h2></div>
	<div id="container_magazines">
	<?php
		include('application/views/admin_views/magazine_list_partial_view.php');
		echo $partial_view_result;
	?>
	</div>
</div>
</div>
<script src = "/js/magazine_operations.js"></script>
