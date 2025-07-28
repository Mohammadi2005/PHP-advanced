<?php
    session_start();
    $_SESSION['username'] = "amir hossein";
    $_SESSION['password'] = "123";
    echo $_SESSION['username'] . "<br>";
    echo $_SESSION['password'] . "<br>";
?>