<?php
$alert="";
include "addition/database_connection.php";
if($_SERVER['REQUEST_METHOD'] == "POST"){
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "select * from user where username = '$username'";
    $result = mysqli_query($conn, $sql);
    if(mysqli_num_rows($result) == 1){
        while($row = mysqli_fetch_assoc($result)){
            session_start();
            $_SESSION['loggedin'] = true;
            $_SESSION['username'] = $username;
            $_SESSION['role'] = $role;
            header("location:index.php");
        }
    }
    else{
        $alert = "Username/password does not existed !.";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> LOGIN- </title>
</head>
<body>
    <?php require"addition/navgation.php"; ?>
    <?php
    if($alert){
        echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>!</strong> '.$alert.'
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>';
    }
    ?>
    <div class="container mt-4" align="center">
        <h1 align="center"> Login page </h1><hr><br>
        <form action="login.php" method="post">
            <legend>Personal detail :</legend><br><br>
                    <label for="username" class="form-label">User name</label>
                    <input type="text" name="username" id="username" required><br><br>
                    Password :-
                    <input type="password" name="password" id="password" required><br><br>
                
            <button type="reset" class="btn btn-primary">reset</button>
            <button type="submit" class="btn btn-primary">LOGIN</button><br><br>
            <p>Are you not register yet?Please-<a href="registration.php">Register Here</a>.</p>
        </form>
    </div>
</body>
</html>         