<!-- Loging handling -->
<?php

if(isset($_POST["submit"])) {

    $username   = $_POST["uid"];
    $pwd        = $_POST["pwd"];
    
    require_once 'Login.inc.php';
    require_once 'functions.inc.php';

    if(emptyInputLogin($username, $email. $username, $pwd, $pwdReapeat)){
        header("location: ../Login.php?error=emtyinput");
        exit();
    }

    loginUser($conn, $username, $pwd);
}