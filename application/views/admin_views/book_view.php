<div class="container">
	<div class="center margin-bottom-title"><h2>Adding book</h2></div>
    <form method="post" action="" id="add-post">
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
				<textarea class="form-control" id="annotation" name="annotation" placeholder="Annotation">Annotation</textarea>
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
		</div>
		<div class="col-md-6"></div>
        <div class="col-md-11"></div>
		<div class="col-md-1">
			<button type="button" class="btn btn-danger" id="add">Add book</button>
		</div>
    </form>
	<br/><br/><br/>
	
	
	
	<div class="col-md-12 v-space"></div>
	<hr/>
	<div class="col-md-12 center margin-bottom-title"><h2>All books</h2></div>
	<?php
		while ($row = $data->fetchArray()) 
		{
			echo '<div class="col-md-4">
					<div class="thumbnail">
						<div class="caption">
							<h3>Name of the book</h3>
							<hr/>
							<p> <span class="thumbnail-bold">Author: </span>' .  $row['Author'] . '</p>
							<p> <span class="thumbnail-bold">Pages: </span>' .  $row['Pages'] . '</p>
							<p> <span class="thumbnail-bold">Images: </span>' .  $row['Images'] . '</p>
							<p> <span class="thumbnail-bold">Price: </span>' .  $row['Price'] . '</p>
							<button type="button" class="btn btn-danger">Delete</button>
						</div>
					</div>
				</div>';
		}
	?>
	
</div>
<script>
$(document).ready(function(){
    $("#add").click(function(){
        var name = $("#name").val(); 
        var author = $("#author").val();
        var year = $("#year").val();
		var genre = $("#genre").val(); 
        var price = $("#price").val();
        var amount = $("#amount").val();
        var pages = $("#pages").val();
		var annotation = $("#annotation").val();

		var binding;
		if ($("#flexible").is(":checked"))
		{
			binding = "flexible";
		}
		else 
		{
			binding = "stiff";
		}
		var images;
		if ($("#coloured").is(":checked"))
		{
			images = "coloured";
		}
		else if ($("#black_and_white").is(":checked"))
		{
			images = "black_and_white";
		}
		else
		{
			images = "without";
		}

        var data = JSON.stringify([name, author, year, genre, price, amount, binding, pages, images, annotation]);

        $.ajax({
            url: '/admin/add_book',
            type: 'post',
            dataType: 'json',
            data: 'data=' + data,
			//response - ответ сервера, который будет в объекте
            success: function(response) { console.log("123");}
        });
    });
});
</script>