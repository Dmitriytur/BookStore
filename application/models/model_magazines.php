<?php
require_once ('application/repositories/magazine_repository.php');
class Model_Magazines extends Model
{
    public $magazines_rep;

    function __construct()
    {
        $this->magazines_rep = new Magazine_Repository();
    }

    function get_all_magazines()
    {
        return $this->magazines_rep->get_all_magazines();
    }

    function get_magazine_by_id($id)
    {
        return $this->magazines_rep->get_magazine_by_id($id);
    }
    function search_magazines($data)
    {
         return $this->magazines_rep->search_magazines($data);
    }
}