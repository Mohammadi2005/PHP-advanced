<?php
    // create cookie
    $nameCookie = "me";
    $valueCookie = "amir hossein";
    setcookie($nameCookie, $valueCookie, time() + (86400 * 30), "/");


    if (isset($_COOKIE[$nameCookie])) {
        echo $_COOKIE[$nameCookie] . " is set.<br>";
    } else {
        echo $_COOKIE[$nameCookie] . " is not set.<br>";
    }
    echo "<br><br><br><br><br>";
    var_dump($_COOKIE);


    // modify cookie
//    setcookie($nameCookie, "ahmad reza", time() + (86400 * 30), "/");

    // delete cookie
//    setcookie($nameCookie, "ahmad reza", time() - (86400 * 30), "/");

?>
