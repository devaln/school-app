<?php
if(isset($_POST['submit'])){
    $filename = $_FILES['file']['name'];
    $location = "C:/xampp/htdocs/school-app/addition/".$filename;

    if ( move_uploaded_file($_FILES['file']['tmp_name'], $location) ) { 
        echo '<p>The file is Successfully uploaded </p>'; 
    }
    else { 
        echo '<p>file does not uploaded.</p>'; 
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>File-upload</title>
</head>
<body>
    <?php require "addition/navgation.php"; ?>
    <div class="container mt-4" align="center">
        <h1>Welcome to my first page</h1><hr>
        <form action="file_upload.php" method="post" enctype="multipart/form-data">
            <input type="file" name="file" id="file">
            <input type="submit" value="upload image" name="submit">
        </form>
    </div>
</body>
</html>