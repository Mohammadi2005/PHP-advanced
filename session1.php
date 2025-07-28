<?php
    session_start();

    echo "username in session is : " . $_SESSION['username'] . "<br>";
    echo "password in session is : " . $_SESSION['password'] . "<br>";

    // delete one item from session
    unset($_SESSION['username']);

    // delete session
    session_destroy();
?>
