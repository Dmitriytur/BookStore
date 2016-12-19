<?php
require_once ('application/repositories/book_repository.php');
class Model_Admin extends Model
{
    private $books;
    function __construct()
    {
        $this->books = new Book_Repository();
    }

    public function get_all_books()
    {
        return $this->books->get_all_books();
    }

    public function add_book($book)
    {
        $this->books->add_book($book);
    }





}