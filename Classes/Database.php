<?php
class Database
{
    private $db_host = 'localhost';
    private $db_user = 'root';
    private $db_pass = '';
    private $db_name = '';
    public $conn = '';

    public function __construct()
    {
        $this->conn = new mysqli($this->db_host, $this->db_user, $this->db_pass, $this->db_name);

        if ($this->conn->connect_error) {
            die("Connection failed: ");
        }
    }

    public function createDatabase()
    {
        $sql = "CREATE DATABASE IF NOT EXISTS Ticket";
        if ($this->conn->query($sql) === TRUE) {
            echo "Database created successfully";
        } else {
            echo "Error creating database: ";
        }
    }
    function Connection()
    {
        return $this->conn;
    }
}
