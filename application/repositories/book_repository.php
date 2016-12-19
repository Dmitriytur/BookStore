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
        $request = $this->db->prepare('SELECT * FROM Books');
        $result = $request->execute();
        if (!$result)
        {
            return;
        }
        return $result;
    }

    function get_book_by_id($id)
    {
        $request = $this->db->prepare('SELECT * FROM Books WHERE Id=:id;');
        $request->bindValue(':id', $id);
        $result = $request->execute();
        if (!$result)
        {
            return;
        }
        return $result;
    }

    function search_books_by_name($name)
    {
        $request = $this->db->prepare('SELECT * FROM Books WHERE Name LIKE :name;');
        $request->bindValue(':name', '%' . $name . '%');
        $result = $request->execute();
        if (!$result)
        {
            return;
        }
        return $result;
    }
    
    function add_book($book)
    {
        $request = $this->db->prepare('INSERT INTO Books 
        (Name, Author, Year, Genre, Price, Amount, Binding, Pages, Images, Annotation)
        VALUES (:0, :1, :2, :3, :4, :5, :6, :7, :8, :9);');
        for ($i = 0; $i < 10; $i++)
        {
            $request->bindValue(':' . $i, $book[$i]);
        }
        $result = $request->execute();
        if (!$result)
        {
            return;
        }
        return $result;
    }

    function delete_book($id)
    {
        $request = $this->db->prepare('DELETE FROM Books WHERE Id=:id;');
        $request->bindValue(':id', $id);
        $result = $request->execute();
    }
}