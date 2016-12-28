<?php
require_once ('application/repositories/magazine_repository.php');
class Model_Magazines extends Model
{
    public $magazines_rep;

    function __construct()
    {
        $this->magazines_rep = new Magazine_Repository();
    }

    function load_magazines()
    {
        $res = $this->magazines_rep->get_all_magazines();
        return array("table" => $res, "page" => 1);
    }

    function get_magazine_by_id($id)
    {
        return $this->magazines_rep->get_magazine_by_id($id);
    }
    function search_magazines($data)
    {
        $res = $this->magazines_rep->search_magazines($data);
        return array("table" => $res, "page" => $data['page']); 
    }
}