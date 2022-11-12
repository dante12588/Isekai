<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style/style.css">
    
</head>
<body>

<?php

session_start();


if (!empty($_SESSION['user'])){
    echo '<header>
        <a href="/php">Home</a>
        <a href="backend/logout.php">Logout</a>
    </header>';
}else{
    echo '<header>
        <a href="/php">Home</a>
        <a href="register.php">Register</a>
    </header>';
}