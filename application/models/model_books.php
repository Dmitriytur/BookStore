<?php
require_once ('application/repositories/book_repository.php');
require_once ('application/repositories/order_repository.php');
class Model_Books extends Model
{
    public $books_rep;
    public $orders_rep;

    function __construct()
    {
        $this->books_rep = new Book_Repository();
        $this->orders_rep = new Order_Repository();
    }

    function load_books()
    {
        $res = $this->books_rep->get_all_books();
        return array("table" => $res, "page" => 1);
    }
    function get_book_by_id($id)
    {
        return $this->books_rep->get_book_by_id($id);
    }
    function search_books($data)
    {
        $res = $this->books_rep->search_books($data);
        return array("table" => $res, "page" => $data['page']); 
    }

    function make_order($data)
    {
        $this->orders_rep->add_order($data);
    }
}