<?php
$partial_view_result = "";
$end = true;
$table = $data['table'];
$start = ($data['page'] - 1) * 6;
$maxrow = count($table);


for ($i = $start; $i < count($table) && $i < $start + 6 ;$i++ )
{
    if ($i % 3 == 0)
    {
        $partial_view_result = $partial_view_result . '<div class="row">';
        $end = false;
    }
    $row = $table[$i];
    $partial_view_result = $partial_view_result . 
        '<div class="col-md-4">
            <div class="thumbnail">
						<div class="caption center">';
    if (file_exists('img/magazine' . $row["Id"] . '.jpg'))
    {
        $partial_view_result .=	'<img class="img-rounded little-down size" src="img/magazine'. $row["Id"] . '.jpg" alt="magazine'. $row["Id"] . '" />';
    }
    else
    {
        $partial_view_result .=	'<img class="img-rounded little-down size" src="img/book_default.png" alt="book" />';
    }
							
	 $partial_view_result .=	'<p><span class="thumbnail-bold">Name: </span>' . $row['Name'] . '</p>
							<p><span class="thumbnail-bold">Price: </span>' . $row['Price'] . '$</p>
								<a href="/magazines/details?id=' . $row['Id'] . '">
								<button type="button" class="btn btn-default">Details</button>
							</a>
				</div>
			</div>
        </div>';

    if ($i % 3 == 2)
    {
         $partial_view_result = $partial_view_result . '</div>';
         $end = true;
    }
    
}
if (!$end)
{
    $partial_view_result .= '</div>';
}


$partial_view_result .= 
            '<div class="row">
				<div class="col-md-12">
					<ul class="pagination">
						<li onclick="prev_page()" ><a><span class="glyphicon glyphicon-menu-left"></span></a></li>';
$maxpage = intdiv($maxrow, 6);
if ($maxrow % 6 != 0)
{
    $maxpage++;
}
$pagecout = 0;
for ($i = $data['page']  - 2; $pagecout < 6 && $i <= $maxpage; $i++, $pagecout++)
{;
    if ($i <= 0)
    {
        $pagecout--;
        continue;
    }
    $partial_view_result .=  '<li onclick="go_page(' . $i . ')"' . ($i == $data['page'] ?  'id="active_page" class="active"> ' : '>') . '<a>' . $i . '</a></li>';
						
}
$partial_view_result .= '<li onclick="next_page()"><a><span class="glyphicon glyphicon-menu-right"></span></a></li>
					</ul>
				</div>
			</div>
            <input type="hidden" id="current_page" value="' . $data['page'] . '">
            <input type="hidden" id="max_page" value="' . $maxpage . '">';