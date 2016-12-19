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
        echo json_encode(array("html" => $this->ajax_book_result($this->model->get_all_books())));
    }

    function action_delete_book()
    {
        $data = array();
        $data = json_decode($_POST['data']);
        $this->model->delete_book($data);
        echo json_encode(array("html" => $this->ajax_book_result($this->model->get_all_books())));
    }

    function ajax_book_result($data)
    {
        $result = "";
        while ($row = $data->fetchArray()) 
        {
            $result = $result . '<div class="col-md-4">
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
        return $result;
    }
}