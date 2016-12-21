<?php
    require_once ('application/repositories/customer_repository.php');
    class Model_Customer_Registration extends Model
    {
        public $customer_rep;

        function __construct()
        {
            $this->customer_rep = new Customer_Repository();
        }

        function add_customer($customer)
        {
            return $this->customer_rep->add_customer($customer);
        }
    }
