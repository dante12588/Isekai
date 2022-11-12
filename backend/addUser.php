<?php

include 'database.php';

$error_register = false;
$isInDb = false;

$pom = $_POST['login'];


$q = "SELECT * FROM users WHERE login='$pom'";

if( $result = $conn->query($q) ){
    while ( $row = $result->fetch_assoc() ){
        if( !empty($row) ){
            $isInDb = true;
        }
    }
}

if ( !empty($_POST['login']) and !$isInDb ){
    $login = $_POST['login'];
} else{
    $error_register = true;
}

if ( !empty($_POST['fname']) ){
    $fname = $_POST['fname'];
} else{
    $error_register = true;
}

if ( !empty($_POST['lname']) ){
    $lname = $_POST['lname'];
} else{
    $error_register = true;
}

if ( !empty($_POST['mail']) ){
    $mail = $_POST['mail'];
} else{
    $error_register = true;
}

if ( !empty($_POST['password']) ){
    $passwd = password_hash($_POST['password'], PASSWORD_DEFAULT);
} else{
    $error_register = true;
}

$q = "INSERT INTO users (login, imie, nazwisko, mail, password)
VALUES ('$login', '$fname', '$lname', '$mail', '$passwd')";

if ( !$error_register){
    if( $conn->query($q) );
    $_POST['addUser'] = true;
}


$conn -> close();
header("Location: /php");