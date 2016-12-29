<?php

class Controller_Profile extends Controller
{

    function __construct()
    {
        $this->model = new Model_Profile();
        $this->view = new View();
        
        session_start();		
		 if (!(isset($_SESSION['is_started']) && $_SESSION['is_started']))
		{
            session_destroy();
			header('Location:/login');
		}
    }
    function action_index()
	{	
		 $this->view->generate('profile_views/index.php', 'template_view.php');
	}

    function action_edit()
    {
        $this->view->generate('profile_views/edit.php', 'template_view.php');
    }

    function action_save_data()
    {
            $first_name = $_POST["first_name"];
            $second_name = $_POST["second_name"];
            $address = $_POST["address"];

            $this->model->update_customer(array("first_name" =>  $first_name, "second_name" =>  $second_name, "address" =>  $address,  "email" => $_SESSION['email']));


            $_SESSION['first_name'] = $first_name;
            $_SESSION['second_name'] = $second_name;
            $_SESSION['address'] = $address;
            $this->view->generate('profile_views/index.php', 'template_view.php');
    }

    function action_change_password()
    {
        $this->view->generate('profile_views/change_password.php', 'template_view.php');
    }

    function action_accept_password()
    {
        $old = $_POST['old_password'];
        $new = $_POST['new_password'];
        $customer = $this->model->get_customer_by_email($_SESSION['email']);
		if ($customer[0]['Password'] == $old)
        {
            $this->model->update_password(array("password" =>  $new,  "email" => $_SESSION['email']));
            header('Location:/profile');
        }
        else
        {
            $this->view->generate('profile_views/change_password.php', 'template_view.php', 'error');
        }

    }

    function action_orders()
    {
        $this->view->generate('profile_views/orders.php', 'template_view.php', $this->model->get_customer_orders($_SESSION['email']));
    }

    function action_subscriptions()
    {
         $this->view->generate('profile_views/orders.php', 'template_view.php', $this->model->get_customer_subscriptions($_SESSION['email']));
    }

    function action_logout()
    {
        session_destroy();
        header('Location:/home');
    }
    
}