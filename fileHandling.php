<?php

// read file 1 ====================================

    echo readfile("myfile.txt") . "<br><br>";

// read file 2 =====================================

    $fileContents = fopen("myfile.txt", "r");
    echo fread($fileContents, filesize("myfile.txt"));
    fclose($fileContents);

// write file ======================================

    $fileWrite = fopen("myfileW.txt", "w");
    $txt = "Hello World <br>i am amir hossein mohammadi<br>";
    fwrite($fileWrite, $txt);
    fwrite($fileWrite, $txt);
    fclose($fileWrite);

    echo "<br><br>";
    if (file_exists("myfileW.txt")) {
        $fileContents1 = fopen("myfileW.txt", "r");
        echo fread($fileContents1, filesize("myfileW.txt"));
        fclose($fileContents1);
    }
    else {
        echo "File does not exist";
    }

// append text to file =================================

    $fileAdd = fopen("myfileAdd.txt", "a");
    $txt = "Hello World \n <br>i am amir hossein \n <br>";
    fwrite($fileAdd, $txt);
    fclose($fileAdd);

    echo "<br><br>";
    if (is_file("myfileAdd.txt")) {
        $fileContents2 = fopen("myfileAdd.txt", "r");
        echo fread($fileContents2, filesize("myfileAdd.txt"));
        fclose($fileContents2);
    }
    else {
        echo "File does not exist";
    }
?>