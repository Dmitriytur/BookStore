<?php

class Controller_Login extends Controller
{
	function __construct()
    {
        $this->model = new Model_Login();
        $this->view = new View();
    }
	function action_index()
	{
		$this->view->generate("authorization_views/authorization_view.php", "template_view.php");
	}

	function action_enter()
	{
		$email = $_POST['email'];
		$password = $_POST['password'];
		$customer = $this->model->get_customer_by_email($email);
		if (count($customer) > 0)
		{
			$user = $customer[0];
			if ($user['Password'] == $password)
			{

				session_start();
				
				$_SESSION['is_started'] = true;
				 $_SESSION['userId'] = $user['Id'];
				$_SESSION['first_name'] = $user['FirstName'];
				$_SESSION['second_name'] = $user['SecondName'];
				$_SESSION['email'] = $user['Email'];
				$_SESSION['address'] = $user['Address'];
				if ($_SESSION['userId'] == 1)
				{
					header("Location:/admin");
				}
				else
				{
					header("Location:/home");
				}
				return;
			}
			else
			{
				$this->view->generate("authorization_views/authorization_view.php", "template_view.php", "password");
				return;
			}
		}
		else
		{
			$this->view->generate("authorization_views/authorization_view.php", "template_view.php",  "email");
			return;
		}
	}
	
}
