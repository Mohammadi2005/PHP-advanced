<?php

    $json1 = '{"first name":"amir hossein", "last name": "mohammadi", "age":21, "isStudent":true}';
    $array1 = json_decode($json1);
    foreach ($array1 as $key => $value) {
        echo $key . " : " . $value . "<br>";
    }

    //////////////////////////////////////////
    echo "<br>";
    $array2 = array("first name" => "amir hossein", "last name" => "mohammadi", "age" => 21, "isStudent" => true);
    $json2 = json_encode($array2);
    echo $json2;

?>