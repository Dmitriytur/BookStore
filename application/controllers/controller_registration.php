<?php
    class Controller_Registration extends Controller
    {
        function __construct()
        {
            $this->model = new Model_Registration();
            $this->view = new View();
        }

        function action_index()
        {
            $this->view->generate("authorization_views/registration_view.php", "template_view.php");
        }

        function action_register()
        {

            $first_name = $_POST["first_name"];
            $second_name = $_POST["second_name"];
            $email = $_POST["email"];
            $address = $_POST["address"];
            $password = $_POST["password"];
            $data = array($first_name, $second_name,
                $email, $address, $password);
            $this->model->add_customer($data);
            $customer = $this->model->get_customer_by_email( $email);
            session_start();
            $_SESSION['is_started'] = true;
            $_SESSION['userId'] = $customer[0]['Id'];
            $_SESSION['first_name'] = $first_name;
            $_SESSION['second_name'] = $second_name;
            $_SESSION['email'] = $email;
            $_SESSION['address'] = $address;
            header("Location:/home");

        }
    }