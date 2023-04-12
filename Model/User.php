<?php
require_once 'database.php';

class User
{
    private $db;

    public function __construct()
    {
        $this->db = new Database();
    }

    public function getAllUsers()
    {
        $query = "SELECT * FROM users";
        $this->db->query($query);
        return $this->db->fetchAll();
    }
}
