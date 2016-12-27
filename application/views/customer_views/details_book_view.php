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
			<img class="img-rounded size-big"src="/img/book<?php echo $book['Id'] ?>.jpg" alt="book" />
		</div>
		<div class="col-md-6">
			<<p> <span class="bold">Name: </span><?php  echo $book['Name']  ?></p>
			<p> <span class="bold">Author: </span><?php  echo $book['Author'] ?></p>
			<p> <span class="bold">Pages: </span><?php  echo $book['Pages'] ?></p>
			<p> <span class="bold">Book cover: </span><?php  echo $book['Binding'] ?></p>
			<p> <span class="bold">Genre: </span><?php  echo $book['Genre'] ?></p>
			<p> <span class="bold">Illustrations: </span><?php  echo $book['Images'] ?></p>
			<p> <span class="bold">Year: </span><?php  echo $book['Year'] ?></p>
			<p> <span class="bold">Price: </span><?php  echo $book['Price'] ?>$</p>
			<p> <span class="bold">Annotation: </span><?php  echo $book['Annotation'] ?></p>
			<a href="#">
				<button type="submit" class="btn btn-success">Make an order</button>
			</a>
		</div>
	</div>
		<div class="col-md-12 v-space"></div>
		<div class="col-md-12 v-space"></div>
</div>