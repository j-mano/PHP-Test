<!-- Signup handling -->
<?php

if(isset($_POST["submit"])) {
    echo "it works";
}
else {
    header("location: ../Signup.php");
}

require_once 'Login.inc.php';
require_once 'functions.inc.php';

if(emptyInputLogin($username, $email. $username, $pwd, $pwdReapeat)){
    header("location: ../Signup.php?error=emtyinput");
    exit();
}