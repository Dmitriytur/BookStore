<?php include 'application/views/header.php' ?>
<form id="authorization" method="post" action="controller_action">
	<div class="container">
		<div class="row">
			<div class="col-md-4"></div>
			<div class="col-md-4">
				<div class="registration center">
					<h2>Authorization</h2>
					<input type="email" class="form-control" id="email" name="email" required placeholder="Email"><br/>
					<input type="password" class="form-control" id="password" name="password" required placeholder="Password"><br/>
					<input type="submit" class="btn btn-danger right-btn" id="authorize">Authorize</button>
				</div>
			</div>
			<div class="col-md-4"></div>
		</div>
	</div>
</form>