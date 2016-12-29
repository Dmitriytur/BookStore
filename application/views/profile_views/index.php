<?php include 'application/views/header.php' ?>
<div class="container">
	<div class="row">
		<div class="col-md-12 v-space"></div>
	</div>
	<div class="personal-information">
		<div class="row">
			<div class="col-md-2"></div>
			<div class="col-md-6"><h3>Personal information</h3></div>
		</div>
		<div class="row">
			<div class="col-md-2 right-text-align">
				<a href="/profile/orders">Books ordering history</a>
				<a href="/profile/subscriptions" hidden>Current subscriptions</a>
			</div>
			<div class="col-md-4">
				<p> <span class="bold">First name: </span><?php echo $_SESSION['first_name'] ?></p>
				<p> <span class="bold">Second name: </span><?php echo $_SESSION['second_name'] ?></p>
				<p> <span class="bold">Email:</span><?php echo $_SESSION['email'] ?></p>
				<p> <span class="bold">Address: </span><?php echo $_SESSION['address'] ?></p>
				<a href="/profile/edit">
					<button type="submit" class="btn btn-default">Edit personal information</button>
				</a>
			</div>
		</div>
	</div>
		<div class="col-md-12 v-space"></div>
		<div class="col-md-12 v-space"></div>
</div>