<?php
class Controller_Books extends Controller
{

	function __construct()
    {
        $this->model = new Model_Books();
        $this->view = new View();
    }

	function action_index()
	{	
		$this->view->generate('customer_views/customer_book_view.php', 'template_view.php', $this->model->load_books());
	}

	function action_details($params)
	{
		if (isset($params["id"]))
		{
			$this->view->generate('customer_views/details_book_view.php', 'template_view.php', $this->model->get_book_by_id($params["id"]));
		}
		
	}
	function action_search()
	{
        $data =  json_decode($_GET['data'], true);
        $this->view->generate_partial('customer_views/cbook_partial_view.php', $this->model->search_books($data));
	}
}