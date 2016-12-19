<?php
$partial_view_result = "";
while ($row = $data->fetchArray()) 
{
    $partial_view_result = $partial_view_result . '<div class="col-md-4">
            <div class="thumbnail">
                <div class="caption">
                    <h3>' . $row['Name'] . '</h3>
                    <hr/>
                    <p> <span class="thumbnail-bold">Author: </span>' .  $row['Author'] . '</p>
                    <p> <span class="thumbnail-bold">Pages: </span>' .  $row['Pages'] . '</p>
                    <p> <span class="thumbnail-bold">Images: </span>' .  $row['Images'] . '</p>
                    <p> <span class="thumbnail-bold">Price: </span>' .  $row['Price'] . '</p>
                    <input id="book_id" type="hidden" value="' . $row['Id'] . '">
                    <button type="button" onclick="delete_book()" class="btn btn-danger">Delete</button>
                </div>
            </div>
        </div>';
}