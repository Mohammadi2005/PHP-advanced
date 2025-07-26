<?php

    $startTime = strtotime("next monday");
    $endTime = strtotime("+2 months", $startTime);

    while ($startTime <= $endTime) {
        echo date("Y M d", $startTime) . "<br>";
        $startTime = strtotime("+5 day", $startTime);
    }

    $birthDay = mktime(0, 0, 0, 2, 5,2005);
    $today = ceil((time() - $birthDay)/60/60/24);
    echo "there is ". $today . " days until my birthday" . "<br>";
?>