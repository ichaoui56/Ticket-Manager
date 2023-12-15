<?php

include_once '../Classes/Database.php';

$database = new Database();
$database->createDatabase();
$conn = $database->Connection();

?>