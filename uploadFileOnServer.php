<?php
    if(isset($_POST['submit'])){
        $dir = "serverDir";
        $file = $_FILES['uploadFile']['name'];

        // check file already exists
        $file_ok = true;
        if(file_exists($dir."/".$file)){
            echo "<h1>" . $file . " already exists</h1>\n";
            $file_ok = false;
        }

        // check file size
        if($_FILES['uploadFile']['size'] > 9000){
            echo "<h1>" . $file . " too large</h1>\n";
            $file_ok = false;
        }

        // check file type
        $type = strtolower(pathinfo($file, PATHINFO_EXTENSION));
        if(!in_array($type, array('jpg', 'jpeg', 'png', 'gif'))){
            echo "<h1>" . $file . " type is bad</h1>\n";
            $file_ok = false;
        }

        if($file_ok) {
            $fileTmp = $_FILES['uploadFile']['tmp_name'];
            $check = move_uploaded_file($fileTmp, $dir . "/" . $file);
            if ($check) {
                echo "<h1>" . $file . " is uploaded.</h1>\n";
            } else {
                echo "<h1>" . $file . " is not uploaded</h1>\n";
            }
        }
    }
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
    <form method="post" enctype="multipart/form-data">
        Select a image to upload:<br>
        <input type="file" name="uploadFile" id="uf"><br>
        <input type="submit" value="Upload" name="submit">
    </form>

</body>
</html>