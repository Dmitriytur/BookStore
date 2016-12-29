<?php
    require_once ('application/repositories/customer_repository.php');
    class Model_Login extends Model
    {
        public $customer_rep;

        function __construct()
        {
            $this->customer_rep = new Customer_Repository();
        }

        function get_customer_by_email($email)
        {
            return $this->customer_rep->get_customer_by_email($email);
        }

    }
