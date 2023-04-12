<?php
class Database
{
    private $conn;

    public function __construct()
    {
        $this->conn = new mysqli('localhost', 'root', 'root', 'probafeladat');

        if ($this->conn->connect_error) 
        {
            die("Connection failed: " . $this->conn->connect_error);
        }
    }

    public function query($sql)
    {
        return $this->conn->query($sql);
    }

    public function fetchAll()
    {
        $result = array();
        while ($row = $this->conn->mysql_fetch_assoc($result)) 
        {
            $result[] = $row;
        }
        return $result;
    }

    public function __destruct()
    {
        $this->conn->close();
    }
}
