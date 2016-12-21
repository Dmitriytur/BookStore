<?php include 'application/views/header.php' ?>
<form id="registration" method="post" action="/customer_registration/register">
	<div class="container">
		<div class="row">
			<div class="col-md-4"></div>
				<div class="col-md-4">
					<div class="registration center">
						<h2>Registration</h2>
						<input type="text" pattern="^[A-Z][-a-zA-Z]+$" class="form-control" id="first_name" name="first_name" required placeholder="First name"><br/>
						<input type="text" pattern="^[A-Z][-a-zA-Z]+$" class="form-control" id="second_name" name="second_name" required placeholder="Second name"><br/>
						<input type="email" class="form-control" id="email" name="email" required placeholder="Email"><br/>
						<input type="password" class="form-control" id="password" name="password" required placeholder="Password"><br/>
						<input type="password" class="form-control" id="confirm_password" name="confirm_password" required placeholder="Confirm password"><br/>
						<textarea class="form-control" id="address" name="address" placeholder="Address">Address</textarea>
						<button type="submit" class="btn btn-success right-btn" id="register" onclick="">Register</button>
					</div>
				</div>
			<div class="col-md-4"></div>
		</div>
	</div>
</form>