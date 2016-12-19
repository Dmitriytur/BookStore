<?php
require_once ('application/repositories/book_repository.php');
class Model_Books extends Model
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

    function get_book_by_id($id)
    {
        return $this->books_rep->get_book_by_id($id);
    }
}