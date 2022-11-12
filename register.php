<?php include 'common/header.php'; ?>

<div class="login-form">

    <form action="backend/addUser.php" method="post">
        <label for="login">Login</label>
        <input type="text" id="login" name="login">

        <label for="fname">Imie</label>
        <input type="text" id="fname" name="fname">

        <label for="lname">Nazwisko</label>
        <input type="text" id="lname" name="lname">

        <label for="mail">Mail</label>
        <input type="text" id="mail" name="mail">

        <label for="password">Hasło</label>
        <input type="text" id="password" name="password">

        <input type="submit" value="Submit">
    </form>

</div>
    
<?php include 'common/footer.php';