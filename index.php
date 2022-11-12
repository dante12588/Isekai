<?php include 'common/header.php'; ?>

<?php  var_dump($_POST['addUser']); ?>

<div class="login-form">

    <?php if (empty($_SESSION['user'])) : ?>
        <form action="backend/login.php" method="post">
            <label for="login">Login</label>
            <input type="text" id="login" name="login">
            <label for="password">Hasło</label>
            <input type="text" id="password" name="password">
            <input type="submit" value="Submit">
        </form>
    <?php else : ?>
        <p>Jesteś zalogowany jako:  <?=$_SESSION['user']?></p>
        
    <?php endif; ?>
</div>
    
<?php include 'common/footer.php';