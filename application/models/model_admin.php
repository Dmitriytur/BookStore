<?php
require_once ('application/repositories/book_repository.php');
require_once ('application/repositories/magazine_repository.php');
class Model_Admin extends Model
{
    private $books_rep;
    private $magazines_rep;
    function __construct()
    {
        $this->books_rep = new Book_Repository();
        $this->magazines_rep = new Magazine_Repository();
    }

    function load_books($page)
    {
        $res = $this->books_rep->get_all_books();
        return array("table" => $res, "page" => $page);
    }

    function add_book($book)
    {
        $this->books_rep->add_book($book);
    }

    function delete_book($data)
    {    
        $this->books_rep->delete_book($data[0]);

    }

    function load_magazines($page)
    {
        $res = $this->magazines_rep->get_all_magazines();
        return array("table" => $res, "page" => $page);
    }

    function add_magazine($magazine)
    {
        $this->magazines_rep->add_magazine($magazine);
    }

    function delete_magazine($data)
    {    
        $this->magazines_rep->delete_magazine($data[0]);

    }
}