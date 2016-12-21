<div class="container">
	<div class="col-md-12 center margin-bottom-title"><h2>Books</h2></div>
	
	<form class="form-inline search-form">	
		<div class="col-md-3">
			<input type="text" class="form-control" id="search_name" placeholder="Search for the name...">
		</div>
		<div class="col-md-9">
				<div class="row">
					<div class="col-md-4">
						<input type="text" class="form-control" id="search_author" placeholder="Search for the author...">
					</div>
					<div class="col-md-4">
						<input type="text" class="form-control" id="search_genre" placeholder="Search for the genre...">
					</div>
					<div class="col-md-4">
						<button type="submit" class="btn btn-success">Search</button>
					</div>
				</div>
		</div>	
	</form>
	
	<div class="col-md-12 v-space"></div>
	<div class="col-md-9">
			<div class="row">
				<div class="col-md-4">
					<div class="thumbnail">
						<div class="caption center">
							<img class="img-rounded little-down size" src="img/book1.jpg" alt="book1" />
							<p><span class="thumbnail-bold">Name: </span>The lord of the rings</p>
							<p><span class="thumbnail-bold">Author: </span>Stephen King</p>
							<p><span class="thumbnail-bold">Price: </span>20$</p>
							<a href="details_book.html">
								<button type="button" class="btn btn-default">Details</button>
							</a>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="thumbnail">
						<div class="caption center">
							<img class="img-rounded little-down size" src="img/book2.jpg" alt="book2" />
							<p><span class="thumbnail-bold">Name: </span>The green mile</p>
							<p><span class="thumbnail-bold">Author: </span>Stephen King</p>
							<p><span class="thumbnail-bold">Price: </span>20$</p>
							<a href="details_book.html">
								<button type="button" class="btn btn-default">Details</button>
							</a>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="thumbnail">
						<div class="caption center">
							<img class="img-rounded little-down size" src="img/book3.jpg" alt="book3" />
							<p><span class="thumbnail-bold">Name: </span>The Master and Margarita</p>
							<p><span class="thumbnail-bold">Author: </span>Stephen King</p>
							<p><span class="thumbnail-bold">Price: </span>20$</p>
							<a href="details_book.html">
								<button type="button" class="btn btn-default">Details</button>
							</a>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-4">
					<div class="thumbnail">
						<div class="caption center">
							<img class="img-rounded little-down size" src="img/book1.jpg" alt="book1" />
							<p><span class="thumbnail-bold">Name: </span>The lord of the rings</p>
							<p><span class="thumbnail-bold">Author: </span>Stephen King</p>
							<p><span class="thumbnail-bold">Price: </span>20$</p>
							<a href="details_book.html">
								<button type="button" class="btn btn-default">Details</button>
							</a>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="thumbnail">
						<div class="caption center">
							<img class="img-rounded little-down size" src="img/book2.jpg" alt="book2" />
							<p><span class="thumbnail-bold">Name: </span>The green mile</p>
							<p><span class="thumbnail-bold">Author: </span>Stephen King</p>
							<p><span class="thumbnail-bold">Price: </span>20$</p>
							<a href="details_book.html">
								<button type="button" class="btn btn-default">Details</button>
							</a>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="thumbnail">
						<div class="caption center">
							<img class="img-rounded little-down size" src="img/book3.jpg" alt="book3" />
							<p><span class="thumbnail-bold">Name: </span>The Master and Margarita</p>
							<p><span class="thumbnail-bold">Author: </span>Stephen King</p>
							<p><span class="thumbnail-bold">Price: </span>20$</p>
							<a href="details_book.html">
								<button type="button" class="btn btn-default">Details</button>
							</a>
						</div>
					</div>
				</div>
			</div>
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
			<label for="binding">Bookbinding</label><br/>
			<input type="radio" id="flexible" name="binding" value="flexible binding"> flexible binding<br/>
			<input type="radio" id="stiff" name="binding" value="stiff binding"> stiff binding
		</div>
		<div class="form-group">
			<label for="images">Illustration:</label><br/>
			<input type="radio" id="coloured" name="images" value="coloured illustration"> coloured illustration<br/>
			<input type="radio" id="black_and_white" name="images" value="black-and-white"> black-and-white illustration<br/>
			<input type="radio" id="without" name="images" value="without"> without illustration
		</div>
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