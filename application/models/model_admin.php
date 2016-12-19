<?php
require_once ('application/repositories/book_repository.php');
class Model_Admin extends Model
{
    public $books_rep;
    function __construct()
    {
        $this->books_rep = new Book_Repository();
    }

    function get_all_books()
    {
        return $this->books_rep->get_all_books();
    }

    function add_book($book)
    {
        $this->books_rep->add_book($book);
    }

    function delete_book($data)
    {    
        $this->books_rep->delete_book($data[0]);

    }



}