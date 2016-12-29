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

	function action_buy()
	{
		session_start();
		if (isset($_SESSION['is_started']) && $_SESSION['is_started'])
		{
            $book_id = $_POST['book_id'];
			$today= date("d.m.y"); 
			$this->model->make_order(array("userId" => $_SESSION['userId'], "bookId" => $book_id, "date" => $today));
			echo 'success';
		}
		else
		{
			session_destroy();
			header('Location:/login');
		}
	}
}