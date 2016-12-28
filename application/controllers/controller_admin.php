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
		 $this->view->generate('admin_views/book_view.php', 'template_view.php', $this->model->load_books(1));
	}
    function action_book()
    {
        if (isset($_GET['page']))
        {
            $page = $_GET['page'];
            $this->view->generate_partial('admin_views/book_list_partial_view.php', $this->model->load_books($page));
        }
        else
        {
             $this->view->generate('admin_views/book_view.php', 'template_view.php', $this->model->load_books(1));
        }
       
    }
    function action_magazine()
    {
        if (isset($_GET['page']))
        {
            $page = $_GET['page'];
            $this->view->generate_partial('admin_views/magazine_list_partial_view.php', $this->model->load_magazines($page));
        }
        else
        {
            $this->view->generate('admin_views/magazine_view.php', 'template_view.php', $this->model->load_magazines(1));
        }
    }
    function action_add_book()
    {
        $data = json_decode($_POST['data']);
        $page = $_POST['page'];
        $this->model->add_book($data);
        $this->view->generate_partial('admin_views/book_list_partial_view.php', $this->model->load_books($page));
    }

    function action_delete_book()
    {
        $data = json_decode($_POST['data']);
        $page = $_POST['page'];
        $this->model->delete_book($data);
        $this->view->generate_partial('admin_views/book_list_partial_view.php', $this->model->load_books($page));
    }

    function action_add_magazine()
    {
        $data = json_decode($_POST['data']);
        $page = $_POST['page'];
        $this->model->add_magazine($data);
        $this->view->generate_partial('admin_views/magazine_list_partial_view.php', $this->model->load_magazines($page));
    }

    function action_delete_magazine()
    {
        $data = json_decode($_POST['data']);
        $page = $_POST['page'];
        $this->model->delete_magazine($data);
        $this->view->generate_partial('admin_views/magazine_list_partial_view.php', $this->model->load_magazines($page));
    }

    
}