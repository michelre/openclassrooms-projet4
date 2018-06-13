<?php


class BaseDAO
{
    protected $db;

    public function __construct()
    {
        $this->db = new PDO('mysql:host=localhost;dbname=projet4-membres;charset=utf8', 'root', '');
    }
}
