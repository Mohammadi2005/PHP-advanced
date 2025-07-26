<?php

    // time stamp = number second from 1970/1/1  00:00:00
    $timeStamp1 = mktime(0,0,0,2,5,2005);
    $timeStamp2 = mktime(0,0,0,7,22,2025);
    echo $timeStamp2 - $timeStamp1 . "<br>";
    echo date("y/m/d H:i:s" , $timeStamp2 - $timeStamp1) . "<br><br>";

    $d=strtotime("10:30pm April 15 2014");
    echo $d . "<br>";
    echo "Created date is " . date("Y-m-d h:i:s a", $d) . "<br>";

    $d1=strtotime("next Saturday");
    echo date("Y-m-d h:i:sa", $d1) . "<br>";

    $d2=strtotime("+3 months");
    echo date("Y-m-d h:i:sa", $d2) . "<br>";

    $d3 = time();
    echo date("Y-m-d h:i:sa", $d3) . "<br>";
?>