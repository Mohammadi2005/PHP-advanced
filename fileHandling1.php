<?php

    if(is_dir("test")){
        echo "Directory Exists";
    }
    else {
        echo "Directory Not Exists";
    }

    mkdir("test1/test2/test3", 0777, true);
    mkdir("test4");

    echo unlink("test1/test2/test3/i.txt");
    echo unlink("test4/i.php");

?>