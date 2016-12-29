<?php include 'application/views/header.php' ?>
<div class="container">
	<div class="row">
		<div class="col-md-4"></div>
		<div class="col-md-4">
			<div class="registration center">
				<form id="registration" method="post" action="/profile/accept_password">
				<h2>Passwords change</h2>
                <?php
					if ($data == 'error')
					{
                        echo '<div class="col-md-12 alert-danger warning">Wrong password</div>';
                    }
					?>
					<input type="password" class="form-control" id="old_password" name="old_password" required placeholder="Old password"><br/>
					<input type="password" class="form-control" id="new_password" name="new_password" required placeholder="New password"><br/>
					<input type="submit" class="btn btn-success right-btn" value="Apply change">
				</form>
			</div>
		</div>
		<div class="col-md-4"></div>
	</div>
</div>