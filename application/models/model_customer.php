<?php
    require_once ('application/repositories/customer_repository.php');
    class Model_Customer extends Model
    {
        public $customer_rep;

        function __construct()
        {
            $this->customer_rep = new Customer_Repository();
        }

        function get_customer_by_id($id)
        {
            return $this->customer_rep->get_customer_by_id($id);
        }

        function add_customer($customer)
        {
            return $this->customer_rep->add_customer($customer);
        }
    }
