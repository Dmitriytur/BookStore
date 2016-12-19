<?php
class Book_Repository
{
    const DB_NAME = "PHP_Proj.db";
    private $db;

    function __construct()
    {
        $this->db = new SQlite3(self::DB_NAME);
    }

    public function get_all_books()
    {
        $query = $this->db->prepare('SELECT * FROM Books');
        $result = $query->execute();
        if (!$result)
        {
            return;
        }
        return $result;
    }

    function get_book_by_id($id)
    {
        $query = $this->db->prepare('SELECT * FROM Books WHERE Id=?;');
        $result = $query->execute(array($id));
        if (!$result)
        {
            return;
        }
        return $result;
    }
    
    function add_book($book)
    {
        $query = $this->db->prepare('INSERT INTO Books VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ? );');
        $result = $query->execute(array($book[0], $book[1], $book[2], $book[3], 
        $book[4], $book[5], $book[6], $book[7], $book[8], $book[9]));
        if (!$result)
        {
            return;
        }
        return $result;
    }

    function delete_book($Id)
    {
        $query = $this->db->prepare('DELETE FROM Books WHERE Id=?;');
        $result = $query->execute(array($Id));
    }
}