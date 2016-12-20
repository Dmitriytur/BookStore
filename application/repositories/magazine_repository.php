<?php
class Magazine_Repository
{
    const DB_NAME = "PHP_Proj.db";
    private $db;

    function __construct()
    {
        $this->db = new SQlite3(self::DB_NAME);
    }

    public function get_all_magazines()
    {
        $request = $this->db->prepare('SELECT * FROM Magazines');
        $result = $request->execute();
        if (!$result)
        {
            return;
        }
        return $result;
    }

    function get_magazine_by_id($id)
    {
        $request = $this->db->prepare('SELECT * FROM Magazines WHERE Id=:id;');
        $request->bindValue(':id', $id);
        $result = $request->execute();
        if (!$result)
        {
            return;
        }
        return $result;
    }

    function search_magazines_by_name($name)
    {
        $request = $this->db->prepare('SELECT * FROM Magazines WHERE Name LIKE :name;');
        $request->bindValue(':name', '%' . $name . '%');
        $result = $request->execute();
        if (!$result)
        {
            return;
        }
        return $result;
    }
    
    function add_magazine($magazine)
    {
        $request = $this->db->prepare('INSERT INTO Magazines 
        (Name, Price, Genre, Annotation, Amount)
        VALUES (:0, :1, :2, :3, :4);');
        for ($i = 0; $i < 5; $i++)
        {
            $request->bindValue(':' . $i, $magazine[$i]);
        }
        $result = $request->execute();
        if (!$result)
        {
            return;
        }
        return $result;
    }

    function delete_magazine($id)
    {
        $request = $this->db->prepare('DELETE FROM Magazines WHERE Id=:id;');
        $request->bindValue(':id', $id);
        $result = $request->execute();
    }
}