<?php
include 'application/views/header.php';
$magazine = $data->fetchArray();
echo 
'<div class="container">
	<div class="back-reference">
		<a href="/magazines">< Back to the magazines</a>
	</div>
	<div class="col-md-12 v-space"></div>
	<div class="col-md-6">
		<p> <span class="bold">Name: </span>' . $magazine['Name'] . '</p>
		<p> <span class="bold">Number: </span>12</p>
		<p> <span class="bold">Month: </span>11</p>
		<p> <span class="bold">Year: </span>2002</p>
		<p> <span class="bold">Genre: </span>Historical</p>
		<p> <span class="bold">Price: </span>with color illustrations</p>
		<p> <span class="bold">Annotation: </span>Lorem ipsum dolor sit amet, consectetur adipiscing elit,
		sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, 
		quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute 
		irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. 
		Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim 
		id est laborum.</p>
		<a href="#">
			<button type="sumbit" class="btn btn-success center">Subscribe</button>
		</a>
	</div>
	<div class="col-md-6">
		<img src="/img/book_grey.png" alt="magazines picture"/>
	</div>
		<div class="col-md-12 v-space"></div>
		<div class="col-md-12 v-space"></div>
</div>
</div>';