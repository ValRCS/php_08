<?php
    session_start();
    require_once("../src/utilities.php");
    if($_SERVER['REQUEST_METHOD'] == 'POST') {
        $_SESSION['uname'] = $_POST['uname'];

        header("Location: login.php");
    }
?>

<form method="POST" action="login.php">
    Login<input name = "uname" value="
    <?php 
        if (isset($_SESSION['uname'])) echo $_SESSION['uname'];
    ?>
    ">
    Password
    <input name="pw">
    <button type="submit">LOGIN</button>
</form>
