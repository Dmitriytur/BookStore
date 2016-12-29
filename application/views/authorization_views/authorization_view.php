<?php include 'application/views/header.php' ?>
<form id="authorization" method="post" action="/login/enter">
	<div class="container">
		<div class="row">
			<div class="col-md-4"></div>
			<div class="col-md-4">
				<div class="registration center">
					<h2>Authorization</h2>
					<?php
					if ($data != null)
					{
						if ($data == "email")
						{
							echo '<div class="col-md-12 alert alert-danger warning">Wrong email</div>';
						}
						else
						{
							echo '<div class="col-md-12 alert alert-danger warning">Wrong password</div>';
						}
					}
					?>
					<input type="email" class="form-control" id="email" name="email" required placeholder="Email"><br/>
					<input type="password" class="form-control" id="password" name="password" required placeholder="Password"><br/>
					<input type="submit" class="btn btn-success right-btn" id="authorize"value="Log in">
				</div>
			</div>
			<div class="col-md-4"></div>
		</div>
	</div>
</form>