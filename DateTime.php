<?php

    echo "Time is : <br>";
    echo date("H:i:s") . "<br>";
    echo date("h:i:s a") . "<br>";
    echo "<br>Date is : <br>";
    echo date("d/m/Y") . "<br>";
    echo "tody is : " . date("l") . date("d-m-y") . "<br>";

    date_default_timezone_set('Asia/Tehran');
    echo "<br>Time in tehran is : <br>";

    echo date("H:i:sa") . "<br>";
    echo date("h:i:sa") . "<br>";
?>