<?php
require_once ('application/repositories/repository.php');
    class Order_Repository extends Repository
    {
        function add_order($data)
        {
            $request = $this->db->prepare('INSERT INTO Orders
            (UserId, BookId, OrderDate)
            VALUES (:userId, :bookId, :orderdate);');
            $request->bindValue(':userId', $data['userId']);
            $request->bindValue(':bookId', $data['bookId']);
            $request->bindValue(':orderdate', $data['date']);
            $result = $request->execute();
        }

        function get_customer_orders($customerEmail)
        {
            $request = $this->db->prepare('SELECT Books.Name as BookName, Books.Author as BookAuthor, Books.Price as BookPrice, Orders.OrderDate as OrderDate 
            FROM Customer, Orders, Books 
            WHERE Customer.Email=:customerEmail AND Orders.UserId=Customer.Id AND Orders.BookId=Books.Id;');
            $request->bindValue(':customerEmail', $customerEmail);
            $result = $request->execute();
            return $this->convert_to_array($result);
        }
    }