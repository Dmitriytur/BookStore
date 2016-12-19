<?php
class Controller_Magazines extends Controller
{
	function action_index()
	{	
		$this->view->generate('customer_views/customer_magazine_view.php', 'template_view.php');
	}
}