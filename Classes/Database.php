<?php
require_once '../config/config.php';
class Database
{
    public static $t = "safi";

    public static function Connection()
    {
        $conn = new mysqli(HOST, USER, PASSWORD, DBNAME);

        if ($conn->connect_error) die("Connection failed: ");
        return $conn;
    }

    // public function createDatabase()
    // {
    //     $sql = "CREATE DATABASE IF NOT EXISTS ";
    //     if ($this->conn->query($sql) === TRUE) {
    //         echo "Database created successfully";
    //     } else {
    //         echo "Error creating database: ";
    //     }
    // }
}


