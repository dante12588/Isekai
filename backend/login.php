<?php 

$login = 'login';
$passwd = 'haslo';

session_start();
$_SESSION['user'] = htmlspecialchars($_POST['login']);


header("Location: /php");

