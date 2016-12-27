<?php
$partial_view_result = "";
$i = 0;
while ($row = $data->fetchArray()) 
{
    $i++;
    if ($i == 1)
    {
        $partial_view_result = $partial_view_result . '<div class="row">';
    }
    $partial_view_result = $partial_view_result . '<div class="col-md-4">
					<div class="thumbnail">
						<div class="caption center">
							<img class="img-rounded little-down size" src="img/magazine'. $row["Id"] . '.jpg" alt="magazine'. $row["Id"] . '" />
							<p><span class="thumbnail-bold">Name: </span>' . $row['Name'] . '</p>
							<p><span class="thumbnail-bold">Price: </span>' . $row['Price'] . '$</p>
								<a href="/magazines/details?id=' . $row['Id'] . '">
								<button type="button" class="btn btn-default">Details</button>
							</a>
						</div>
					</div>
				</div>';
    if ($i == 3)
    {
         $partial_view_result = $partial_view_result . '</div>';
         $i = 0;
    }
}
if ($i != 0)
{
    $partial_view_result = $partial_view_result . '</div>';
}
