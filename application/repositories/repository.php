<?php
class Repository
{
    const DB_NAME = "PHP_Proj.db";
    protected $db;

    function __construct()
    {
        $this->db = new SQlite3(self::DB_NAME);
    }

    function convert_to_array($query_result)
    {
        $array = array();
        $i = 0;
        while ($row = $query_result->fetchArray()) 
        {
            $array[$i++] = $row;
        }
        return $array;
    }
}