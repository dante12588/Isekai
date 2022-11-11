<?php 

include 'database.php';

session_start();

if( !empty($_POST['password']) and !empty($_POST['login'])){

    if ( $result = $conn->query($q) ){
        
        while ( $row = $result->fetch_assoc() ){

            if (password_verify($_POST['password'], $row['password']) and $_POST['login'] == $row['login']){
                $_SESSION['user'] = htmlspecialchars($_POST['login']);
            }

        }
    }

}

header("Location: /php");

