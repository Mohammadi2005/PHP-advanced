<?php

    // check string
    $str = "<h1>Hello World!</h1>";
        // FILTER_SANITIZE_STRING = 513
    $newStr = filter_var($str, 513);
    echo $newStr;
    echo $str . "<br>";


    // check email
    $email = "amohammadi161183@gmail.com";
    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo $email . " is correct <br>";
    } else {
        $newEmail = filter_var($email, FILTER_SANITIZE_EMAIL);
        echo $email . " is not correct <br>but " . $newEmail . " is sanitized<br>";
    }

    // check IP
    $ip = "127.0.0.1";
    if (filter_var($ip, FILTER_VALIDATE_IP)) {
        echo $ip . " is correct <br>";
    } else {
        $newIp = filter_var($ip, FILTER_SANITIZE_IP);
        echo $ip . " is not correct <br>but " . $newIp . " is sanitized<br>";
    }

?>


