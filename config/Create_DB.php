<?php

include_once '../Classes/Database.php';

echo Database::$t;
$database = new Database();
$database->createDatabase();
$conn = $database->Connection();

?>