<?php
require_once 'database.php';

class Advertisement
{
    private $db;

    public function __construct()
    {
        $this->db = new Database();
    }

    public function getAllAdvertisementsWithUsers()
    {
        $query = "SELECT a.*, u.name as user_name FROM advertisements a
                  LEFT JOIN users u ON a.userid = u.id";
        $this->db->query($query);
        return $this->db->fetchAll();
    }
}
