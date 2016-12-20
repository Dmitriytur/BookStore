<?php
class Controller_Magazines extends Controller
{
	function __construct()
    {
        $this->model = new Model_Magazines();
        $this->view = new View();
    }

	function action_index()
	{	
		$this->view->generate('customer_views/customer_magazine_view.php', 'template_view.php', $this->model->get_all_magazines());
	}

	function action_details($params)
	{
		if (isset($params["id"]))
		{
			$this->view->generate('customer_views/details_magazine_view.php', 'template_view.php', $this->model->get_magazine_by_id($params["id"]));
		}
		
	}
	function action_search()
	{
		$data = array();
        $data = json_decode($_POST['data']);
        $this->view->generate_partial('customer_views/cmagazine_partial_view.php', $this->model->search_magazines($data));
	}
}