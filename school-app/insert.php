<!-- <?php
include "addition/database_connection.php";
if($_SERVER['REQUEST_METHOD'] == "POST"){
    $first_name = $_POST['first_name'];
    $middle_name = $_POST['middle_name'];
    $last_name = $_POST['last_name'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $phone_number = $_POST['phone_number'];
    $age = $_POST['age'];
    $role = $_POST['role'];
    $gender = $_POST['gender'];
    $password = $_POST['password'];
$sql = "select * from user where role = '$role'";
$result = mysqli_query($conn, $sql);
if(mysqli_num_rows($result)){
    while($row = mysqli_fetch_row($result)){

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
    <div class="container mt-4" align="center">
        <h1 align="center">Welcome to Registration page :</h1><hr><br>
        <form action="registration.php" method="post">
            <legend>Please Fill Your Personal Details To Move Further :</legend><br>
            <table class="table" border="5px">
            <thead align="center">
                <tr>
                    <th>Sr.No.</th>
                    <th>Full Name</th>
                    <th>Username</th>
                    <th>Age</th>
                    <th>Gender</th>
                    <th>E-mail</th>
                    <th>Phone Number</th>
                    <th>loggedin By</th>
                </tr>
            </thead>
           
            <tbody align="center">
                <tr>
                    <td><?php echo $count; ?></td>
                    <td><?php echo $row['first_name']." ".$row['middle_name']." ".$row['last_name']; ?></td>
                    <td><?php echo $row['username']; ?></td>
                    <td><?php echo $row['age']; ?></td>
                    <td><?php echo $row['gender']; ?></td>
                    <td><?php echo $row['email']; ?></td>
                    <td><?php echo $row['phone_number']; ?></td>
                    <td><?php echo $row['role']; ?></td>
                </tr>
            </tbody>
        </table>
            <input type="reset" value="Reset">
            <button type="submit" class="btn btn-primary">Register</button>
            <p>If you had register already - <a href="index.php">Login Here</a>.</p>
        </form>
    </div>
</body>
</html>
<?php 
}
}
}
?> -->