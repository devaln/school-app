<?php
include "addition/database_connection.php";
if($_SERVER['REQUEST_METHOD'] == "POST"){
    $role = $_POST['role'];
    $first_name = $_POST['first_name'];
    $middle_name = $_POST['middle_name'];
    $last_name = $_POST['last_name'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $phone_number = $_POST['phone_number'];
    $age = $_POST['age'];
    $gender = $_POST['gender'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];

    $sqlname = "SELECT * FROM user WHERE username='$username'";
    $result = mysqli_query($conn, $sqlname);
    $existsname = mysqli_num_rows($result);

    if($existsname > 0){
        echo "username already Exists";
    }
    $sql = "INSERT into user (role, first_name, middle_name, last_name, username, email, phone_number, age, gender, password) values ('$role','$first_name', ' $middle_name', '$last_name', '$username', '$email', '$phone_number', '$age', '$gender', '$password')";
    $result = mysqli_query($conn, $sql);
    if($result){
        session_start();
        header("location:login.php");
    }
    else{
        echo '<div class="form"><h3>Password do not match.</h3>Click here to <a href="registration.php">Register</a></div>';
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> REGISTRATION- </title>
</head>
<body>
<?php require"addition/navgation.php"; ?>
    <div class="container mt-2" align="center">
        <h1 align="center">Welcome to Registration page :</h1><hr>
        <form action="registration.php" method="post">
            <legend>Please Fill Your Personal Details To Move Further :</legend><br>
            <table>
                <tr>
                    <td align="center">First Name :-</td>
                    <td><input type="text" name="first_name" required></td>
                </tr>
                <tr>
                    <td align="center">Middle Name :-</td>
                    <td><input type="text" name="middle_name" id="middle_name" required></td>
                </tr>
                <tr>
                    <td align="center">Last Name :-</td>
                    <td><input type="text" name="last_name" id="last_name" required></td>
                </tr>
                <tr>
                    <td align="center">User Name :-</td>
                    <td><input type="text" name="username" id="username" required></td>
                </tr>
                <tr>
                    <td align="center">Email Address :-</td>
                    <td><input type="email" name="email" id="email" required></td>
                </tr>
                <tr>
                    <td align="center">Phone Number :-</td>
                    <td><input type="text" name="phone_number" id="phone_number" required></td>
                </tr>
                <tr>
                    <td align="center">Age :-</td>
                    <td><input type="integer" name="age" id="age" required></td>
                </tr>
                <tr>
                    <td align="center">Gender :-</td>
                    <td><ul><li><input type="radio" name="gender" value="male" required>Male</li>
                    <li><input type="radio" name="gender" value="female" required>Female</li>
                    <li><input type="radio" name="gender" value="other" required>Other</li></ul></td>
                </tr>
                <tr>
                    <td align="center">login Role :-</td>
                    <!-- <li><input type="radio" name="role" value="principle" required>Principle</li> -->
                    <td><ul><li><input type="radio" name="role" value="teacher" required>Teacher</li>
                    <li><input type="radio" name="role" value="student" required>Student</li></ul></td>
                </tr>
                <tr>
                    <td align="center">Password :-</td>
                    <td><input type="password" name="password" id="password" required></td>
                </tr>
                <tr>
                    <td align="center">Confirm Password :-</td>  
                    <td><input type="password" name="confirm_password" id="confirm_password" required></td>
                </tr>
            </table><br>
            <input type="reset" value="Reset">
            <button type="submit" class="btn btn-primary">Register</button>
            <p>If you had register already - <a href="index.php">Login Here</a>.</p>
        </form>
    </div>
</body>
</html>         