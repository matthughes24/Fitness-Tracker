<?php

if (isset($_POST["submit"])) {
    
    $email = $_POST["email"];
    $username = $_POST["uid"];
    $pwd = $_POST["pwd"];
    $pwdrepeat = $_POST["pwdrepeat"];

    require_once 'dbhinc.php';
    require_once 'functionsinc.php';

    if (emptyInputSignup($email, $username, $pwd, $pwdrepeat) !== false) {
        header("Location: ../signup.php?error=emptyinput");
        exit();
    }

    if (invalidUid($username) !== false) {
        header("Location: ../signup.php?error=invaliduid");
        exit();
    }

    if (invalidEmail($email) !== false) {
        header("Location: ../signup.php?error=invalidemail");
        exit();
    }

    if (pwdMatch($pwd, $pwdrepeat) !== false) {
        header("Location: ../signup.php?error=invalidpasswords");
        exit();
    }

    if (uidExists($conn, $username, $email) !== false) {
        header("Location: ../signup.php?error=usernametaken");
        exit();
    }

    createUser($conn, $email, $username, $pwd);

} 
else {
    header("Location: ../signup.php");
    exit();
}