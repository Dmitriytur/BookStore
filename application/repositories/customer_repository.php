<?php
    class Customer_Repository
    {

        const DB_NAME = "PHP_Proj.db";
        private $db;

        function __construct()
        {
            $this->db = new SQlite3(self::DB_NAME);
        }

        function get_all_customers()
        {
            $request = $this->db->prepare('SELECT * FROM Customer');
            $result = $request->execute();
            if (!$result)
            {
                return;
            }
            return $result;
        }

        function get_customer_by_id($id)
        {
            $request = $this->db->prepare('SELECT * FROM Customer WHERE Id=:id;');
            $request->bindValue(':id', $id);
            $result = $request->execute();
            if (!$result)
            {
                return;
            }
            return $result;
        }

        function add_customer($customer)
        {
            $request = $this->db->prepare('INSERT INTO Customer
            (FirstName, SecondName, Email, Address, Password)
            VALUES (:0, :1, :2, :3, :4);');
            for ($i = 0; $i < 5; $i++)
            {
                $request->bindValue(':' . $i, $customer[$i]);
            }
            $result = $request->execute();
            if(!$result)
            {
                return;
            }
            return $result;
        }

    }