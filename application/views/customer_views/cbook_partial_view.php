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
                <div class="caption">
                    <h3>' . $row['Name'] . '</h3>
                    <hr/>
                    <p> <span class="thumbnail-bold">Author: </span>' .  $row['Author'] . '</p>
                    <p> <span class="thumbnail-bold">Pages: </span>' .  $row['Pages'] . '</p>
                    <p> <span class="thumbnail-bold">Images: </span>' .  $row['Images'] . '</p>
                    <p> <span class="thumbnail-bold">Price: </span>' .  $row['Price'] . '</p>
                    <a href="/books/details?id=' . $row['Id'] . '">
                    <button type="button" class="btn btn-danger">Details</button>
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