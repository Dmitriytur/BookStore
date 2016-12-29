<?php
require_once ('application/repositories/repository.php');
    class Subscription_Repository extends Repository
    {
        function add_subscription($data)
        {
            $request = $this->db->prepare('INSERT INTO Subscription 
            (UserId, MagazineId, StartDate, EndDate)
            VALUES (:userId, :magazineId, :start_date, :end_date);');
            $request->bindValue(':userId', $data['userId']);
            $request->bindValue(':magazineId', $data['magazineId']);
            $request->bindValue(':start_date', $data['start_date']);
            $request->bindValue(':end_date', $data['end_date']);
            $result = $request->execute();
        }

        function get_customer_orders($customerId)
        {
            $request = $this->db->prepare('SELECT * FROM Customer, Subscription, Magazines WHERE Customer.Id=:customerId AND Customer.Id=Magazines.UserId');
            $request->bindValue(':customerId',$customerId);
            $result = $request->execute();
            return convert_to_array($this->convert_to_array($result));
        }
    }