<?php
    include 'database.php';
?>

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
        <a href="backend/logout.php">Logout</a>
    </header>';
}

?>

<div class="login-form">

    <?php if (empty($_SESSION['user'])) : ?>
        <form action="backend/login.php" method="post">
            <label for="login">Login</label>
            <input type="text" id="login" name="login">
            <label for="password">Hasło</label>
            <input type="text" id="password" name="passwd">
            <input type="submit" value="Submit">
        </form>
    <?php else : ?>
        <p>Jesteś zalogowany jako:  <?=$_SESSION['user']?></p>
    <?php endif; ?>
</div>
    
</body>
</html>