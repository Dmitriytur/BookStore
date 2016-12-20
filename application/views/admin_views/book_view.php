<div class="container">
	<div class="center margin-bottom-title"><h2>Adding book</h2></div>
    <form method="post" action="" id="add-post">
		<div class="row">
			<div class="col-md-6">
				<div class="form-group">
					<label for="name">Name</label>
					<input type="text" class="form-control" id="name" name="name" required placeholder="Name">
				</div>
				<div class="form-group">
					<label for="author">Author</label>
					<input type="text" class="form-control" id="author" name="author" required placeholder="Name">
				</div>

				<div class="form-group">
					<label for="genre">Genre</label><br/>
					  <input type="text" class="form-control" id="genre" name="genre" required placeholder="Genre">
				</div>
				<div class="form-group">
					<label for="binding">Bookbinding</label><br/>
					<input type="radio" id="flexible" name="binding" value="flexible binding"> flexible binding<br/>
					<input type="radio" id="stiff" name="binding" value="stiff binding"> stiff binding
				</div>
				<div class="form-group">
					<label for="annotation">Annotation</label>
					<textarea class="form-control height-textarea" id="annotation" name="annotation" placeholder="Annotation">Annotation</textarea>
				</div>
			</div>
			<div class="col-md-6">
				<div class="form-group">
					<label for="price">Price</label>
					<input type="number" class="form-control" id="price" name="price" required placeholder="Price">
				</div>
				<div class="form-group">
					<label for="year">Year</label>
					<input type="number" class="form-control" id="year" name="year" required placeholder="Year">
				</div>
				<div class="form-group">
					<label for="amount">Amount</label>
					<input type="number" class="form-control" id="amount" name="amount" required placeholder="Amount">
				</div>
				<div class="form-group">
					<label for="pages">Pages</label>
					<input type="number" class="form-control" id="pages" name="pages" required placeholder="Pages">
				</div>
				<div class="form-group illustration-margin">
					<label for="images">Illustration</label><br/>
					<input type="radio" id="coloured" name="images" value="coloured illustration"> coloured illustration<br/>
					<input type="radio" id="black_and_white" name="images" value="black-and-white"> black-and-white illustration<br/>
					<input type="radio" id="without" name="images" value="without"> without illustration
				</div>
				<div class="form-group" id="file-upload">
					<label for="book_image">Uploading the image: </label><br/>
					<input type="file" id="uploade-file" name="uploade-file" multiple="multiple">
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-10"></div>
			<div class="col-md-2">
				<button type="button" class="btn btn-danger right" id="add">Add book</button>
			</div>
		</div>
    </form>
	<br/><br/><br/>
	
	
	
	<div class="col-md-12 v-space"></div>
	<hr/>
	<div class="col-md-12 center margin-bottom-title"><h2>All books</h2></div>
	<div id="container_books">
	<?php
		include('application/views/admin_views/book_list_partial_view.php');
		echo $partial_view_result;
	?>
	</div>
</div>
<script src = "/js/book_operations.js"></script>