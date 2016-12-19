<?php
class View
{
	
	function generate($content_view, $template_view, $data = null, $header = '')
	{
		include 'application/views/'.$template_view;
	}

	function generate_partial($partial_view, $data)
	{
		include 'application/views/' . $partial_view;
		echo json_encode(array("html" => $partial_view_result));
	}
}