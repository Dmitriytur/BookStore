<?php
    class Controller_Customer_Registration extends Controller
    {
        function __construct()
        {
            $this->model = new Model_Customer_Registration();
            $this->view = new View();
        }

        function action_index()
        {
            $this->view->generate("customer_registration_view.php", "template_view.php");
        }

        function action_register()
        {

            $name = $_POST["first_name"];
            $second_name = $_POST["second_name"];
            $email = $_POST["email"];
            $address = $_POST["address"];
            $password = $_POST["password"];

            $data = array($name, $second_name,
                $email, $address, $password);
            error_log($data["name"]);
            $this->model->add_customer($data);

            session_start();
            $_SESSION['name'] = $name;
            header("Location:/home");

        }
    }