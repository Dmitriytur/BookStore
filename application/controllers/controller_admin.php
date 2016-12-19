<?php

class Controller_Admin extends Controller
{


    function __construct()
    {
        $this->model = new Model_Admin();
        $this->view = new View();
    }
    function action_index()
	{	
		$this->view->generate('main_view.php', 'template_view.php');
	}
    function action_book()
    {
        $this->view->generate('admin_views/book_view.php', 'template_view.php', $this->model->get_all_books());
    }
    function action_magazine()
    {
        $this->view->generate('admin_views/magazine_view.php', 'template_view.php');
    }

    function action_add_book()
    {
        $data = array();
        $data = json_decode($_POST['data']);
        $this->model->add_book($data);
    }
}