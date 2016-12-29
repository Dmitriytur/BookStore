<?php include 'application/views/header.php' ?>
<div class="container">
	<div class="row">
		<div class="back-reference">
			<a href="/profile">< Back to the profile</a>
		</div>
	</div>
	<div class="row">
		<div class="col-md-4"></div>
		<div class="col-md-4">
			<div class="registration center">
				<form id="registration" method="post" action="/profile/save_data">
				<h2>Personal data</h2>
					<input type="text" class="form-control" id="first_name" name="first_name" required value="<?php echo $_SESSION['first_name'] ?>"><br/>
					<input type="text" class="form-control" id="second_name" name="second_name" required value="<?php echo $_SESSION['second_name'] ?>"><br/>
					<textarea class="form-control" id="address" name="address" value="<?php echo $_SESSION['address'] ?>">Address</textarea>
					<a href="/profile">
						<input type="button" class="btn btn-default right-btn reg-button" value="Cancel">
					</a>
						<input type="submit" class="btn btn-success right-btn reg-button" value="Apply changes">
				</form>
			</div>
		</div>
		<div class="col-md-4"></div>
	</div>
</div>