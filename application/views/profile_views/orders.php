<?php include 'application/views/header.php' ?>
<div class="container">
	<div class="row">
		<div class="back-reference">
			<a href="/profile">< Back to the profile</a>
		</div>
	</div>
	<div class="row">
		<div class="col-md-12">
			<div class="info">
			<h3>Books ordering history</h3>
				<table class="table table-striped">
					<thead>
						<tr>
							<th>Name of the book</th>
							<th>Author</th>
							<th>Price</th>
							<th>Data</th>
						</tr>
					</thead>
					<tbody>
                        <?php
                            for ($i = 0; $i < count($data); $i++)
                            {
                                $row = $data[$i];
                                echo '<tr>
                                        <td>"' . $row['BookName'] . '"</td>
                                        <td>' . $row['BookAuthor'] . '</td>
                                        <td>' . $row['BookPrice'] . '$</td>
                                        <td>' . $row['OrderDate'] . '</td>
                                    </tr>';
                            }
                        ?>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>