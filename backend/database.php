<?php 

$servername = 'localhost';
$username = 'root';
$password = 'root';
$dbname = 'php';
$port = "8889";
    
$conn = new mysqli($servername, $username, $password, $dbname, $port);
$q = "SELECT * FROM users";

