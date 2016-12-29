<?php 
include 'application/views/header.php'; 
$book = $data->fetchArray();
?>
<div class="container">
	<div class="back-reference">
		<a href="/books">< Back to the books</a>
	</div>
	<div class="row">
		<div class="col-md-12 v-space"></div>
	</div>
	<div class="row">
		<div class="col-md-3">
		<?php

		if (file_exists('img/book' . $book['Id'] . '.jpg'))
		{
			echo '<img class="img-rounded size-big"src="/img/book' . $book['Id'] . '.jpg" alt="book" />';
		}
		else
		{
			echo '<img class="img-rounded size-big"src="/img/book_default.png" alt="book" />';
		}
		?>
		</div>
		<div class="col-md-6">
			<input type="hidden" id="book_id" value="<?php echo $book['Id'] ?>">
			<p> <span class="bold">Name: </span><?php  echo $book['Name']  ?></p>
			<p> <span class="bold">Author: </span><?php  echo $book['Author'] ?></p>
			<p> <span class="bold">Pages: </span><?php  echo $book['Pages'] ?></p>
			<p> <span class="bold">Book cover: </span><?php  echo $book['Binding'] ?></p>
			<p> <span class="bold">Genre: </span><?php  echo $book['Genre'] ?></p>
			<p> <span class="bold">Illustrations: </span><?php  echo $book['Images'] ?></p>
			<p> <span class="bold">Year: </span><?php  echo $book['Year'] ?></p>
			<p> <span class="bold">Price: </span><?php  echo $book['Price'] ?>$</p>
			<p> <span class="bold">Annotation: </span><?php  echo $book['Annotation'] ?></p>
			<button type="button" id="buy_book" class="btn btn-success">Make an order</button>
			<div id="massage" class="alert alert-success success" style="opacity:0;">Ordered successfully</div>
		</div>
	</div>
		<div class="col-md-12 v-space"></div>
		<div class="col-md-12 v-space"></div>
</div>
<script src = "/js/book_order.js"></script>