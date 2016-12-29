<?php
require_once ('application/repositories/repository.php');
    class Customer_Repository extends Repository
    {

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

        function get_customer_by_email($email)
        {
            $request = $this->db->prepare('SELECT * FROM Customer WHERE Email=:email;');
            $request->bindValue(':email',$email);
            $result = $request->execute();
            return $this->convert_to_array($result);
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
        }

        function update_customer($data)
        {
            $request = $this->db->prepare('UPDATE Customer SET FirstName=:first_name, SecondName=:second_name, Address=:address WHERE Email= :email;');
            $request->bindValue(':first_name', $data['first_name']);
            $request->bindValue(':second_name', $data['second_name']);
            $request->bindValue(':address', $data['address']);
            $request->bindValue(':email', $data['email']);
            $result = $request->execute();
        }

        function update_password($data)
        {
            $request = $this->db->prepare('UPDATE Customer SET Password=:password WHERE Email= :email;');
            $request->bindValue(':password', $data['password']);
            $request->bindValue(':email', $data['email']);
            $result = $request->execute();
        }

    }