<?php
require "addition/auth.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php require"addition/navgation.php"; ?>
<div class="container mt-4"align="center">
<h1><strong>Welcome <?php echo  $_SESSION['username']; ?></strong></h1>
<!-- <p><a href="login.php">login for Principle</a></p>
<p><a href="login_teacher.php">login for Teacher</a></p>
<p><a href="login_student.php">login for Student</a></p> -->
    <h4>welcme to my web page</h4>
    </div>
</body>
</html>
