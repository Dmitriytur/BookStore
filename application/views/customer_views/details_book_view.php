<?php
include 'application/views/header.php';
$book = $data->fetchArray();
echo 
'<div class="container">
	<div class="back-reference">
		<a href="/books">< Back to the books</a>
	</div>
	<div class="col-md-12 v-space"></div>
	<div class="col-md-6">
		<p> <span class="bold">Name: </span>' . $book['Name'] . '</p>
		<p> <span class="bold">Author: </span>' . $book['Author'] . '</p>
		<p> <span class="bold">Pages: </span>' . $book['Pages'] . '</p>
		<p> <span class="bold">Book cover: </span>' . $book['Binding'] . '</p>
		<p> <span class="bold">Genre: </span>' . $book['Genre'] . '</p>
		<p> <span class="bold">Illustrations: </span>' . $book['Images'] . '</p>
		<p> <span class="bold">Year: </span>' . $book['Year'] . '</p>
		<p> <span class="bold">Price: </span>' . $book['Price'] . '</p>
		<p> <span class="bold">Annotation: </span>' . $book['Annotation'] . '</p>
		<a href="#">
			<button type="submit" class="btn btn-success">Make an order</button>
		</a>
	</div>
	<div class="col-md-6">
		<img src="/img/book_grey.png" alt="books picture"/>
	</div>
		<div class="col-md-12 v-space"></div>
		<div class="col-md-12 v-space"></div>
</div>
</div>';