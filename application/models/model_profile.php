<?php
require_once ('application/repositories/customer_repository.php');
require_once ('application/repositories/order_repository.php');
require_once ('application/repositories/subscription_repository.php');
class Model_Profile extends Model
{
        public $customer_rep;
        public $order_rep;
        public $subscription_rep;

        function __construct()
        {
            $this->customer_rep = new Customer_Repository();
            $this->order_rep = new Order_Repository();
            $this->subscription_rep = new Subscription_Repository();
        }

        function update_customer($data)
        {
            $this->customer_rep->update_customer($data);
        }

        function update_password($data)
        {
            $this->customer_rep->update_password($data);
        }
        function get_customer_by_email($email)
        {
            return $this->customer_rep->get_customer_by_email($email);
        }

        function get_customer_orders($customerEmail)
        {
            return $this->order_rep->get_customer_orders($customerEmail);
        }

        function get_customer_susubscriptions($customerEmail)
        {
            return $this->subscription_rep->get_customer_susubscriptions($customerEmail);
        }
}