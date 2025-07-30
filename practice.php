<?php
    if(isset($_POST["submitFile"])){
        $dirServer = "serverDir";
        $file = $_FILES["uf"]["tmp_name"];
        $fileName = $_FILES["uf"]["name"];
        $check = move_uploaded_file($file, "$dirServer/$fileName");
        if($check){
            echo "File is valid, and was successfully uploaded.<br>" . $fileName;
        }
        else{
            echo "No file was uploaded.<br>" . $fileName;
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Title</title>
</head>
<body>
    <form method="post" enctype="multipart/form-data">
        <label>select file : </label>
        <input type="file" name="uf" id="uploadImg">
        <input type="submit" name="submitFile" value="Submit">
    </form>
</body>
</html>