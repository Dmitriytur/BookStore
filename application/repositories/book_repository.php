<?php
require_once ('application/repositories/repository.php');
class Book_Repository extends Repository
{
    public function get_all_books()
    {
        $request = $this->db->prepare('SELECT * FROM Books ORDER BY Name');
        $result = $request->execute();
        return $this->convert_to_array($result);
    }

    function get_book_by_id($id)
    {
        $request = $this->db->prepare('SELECT * FROM Books WHERE Id=:id;');
        $request->bindValue(':id', $id);
        $result = $request->execute();
        return $result;
    }

    function search_books($data)
    {
        $query = 'SELECT * FROM Books WHERE Name LIKE :name AND Author LIKE :author AND Genre LIKE :genre ';
        $i = false;
        if ($data['flexible'] || $data['stiff'])
        {
            $query .= 'AND ( ';
            if ($data['flexible'])
            {
                $query .= 'Binding="flexible" ';
                $i = true;
            }
            if ($data['stiff'])
            {
                if ($i)
                {
                     $query .= 'OR ';
                }
                 $query .= 'Binding="stiff" ';
                 $i = true;
            }
            $query .= ') ';
            $i = false;
        }
        if ($data['coloured'] || $data['black_and_white'] || $data['without'])
        {
             $query .= 'AND ( ';
            if ($data['coloured'])
            {
                $query .= 'Images="coloured" ';
                $i = true;
            }
            if ($data['black_and_white'])
            {
                if ($i)
                {
                     $query .= 'OR ';
                }
                 $query .= 'Images="black_and_white" ';
                 $i = true;
            }
            if ($data['without'])
            {
                if ($i)
                {
                     $query .= 'OR ';
                }
                 $query .= 'Images="without" ';
                 $i = true;
            }
            $query .= ') ';
            $i = false;
        }
        if ($data['pricesort'] == 'asc')
        {
            $query .= 'ORDER BY Price, Name ';
        }
        else if ($data['pricesort'] == 'desc')
        {
            $query .= 'ORDER BY Price DESC, Name ';
        }
        else
        {
             $query .= 'ORDER BY Name ';
        }
        $query .= ';';
        $request = $this->db->prepare($query);
        $request->bindValue(':name', '%' . $data['name'] . '%');
        $request->bindValue(':author', '%' . $data['author'] . '%');
        $request->bindValue(':genre', '%' . $data['genre'] . '%');
        $result = $request->execute();
        return $this->convert_to_array($result);
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
    }

    function delete_book($id)
    {
        $request = $this->db->prepare('DELETE FROM Books WHERE Id=:id;');
        $request->bindValue(':id', $id);
        $result = $request->execute();
    }
}