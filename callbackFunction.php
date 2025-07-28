<?php
    // 1
    function getLength($str){
        return strlen($str);
    }
    $arr = array("ali", "amir", "hossein", "mohammad", "reza");
    $lengthItems = array_map("getLength", $arr);
    print_r($lengthItems);


    // 2
    function evenFind($number){
        return ($number % 2) === 0;
    }

    $numArray = array(2,5,78,3,88,9,32);
    $evensArr = array_filter($numArray, "evenFind");
    print_r($evensArr);


    // 3
    function fun1($fun2, $inputForFun2){
        echo $fun2($inputForFun2);
    }

    function hello($name){
        return "<br>Hello " . $name . "<br>";
    }

    fun1("hello", "amir hossein");
?>
