<?php
include "addition/database_connection.php";
require "addition/auth.php";
if(isset($_POST['username'])){
    $role = $_POST['role'];
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teacher - view page</title>
</head>
<body>
<?php require "addition/navgation.php"; ?>
    <div class="container mt-4" align="center">
        <h1>Welcome <?php echo $_SESSION['username']; ?></h1><hr>
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
                    <th>loggedin Type</th>
                    <th><a class="btn btn-primary" href="teacher_create.php">ADD</a></th>
                </tr>
            </thead>
            <?php 
            $count=1;
            $sql = "select * from user where role = 'teacher'";
            $result = mysqli_query($conn, $sql);
            if(mysqli_num_rows($result)){
                while($row = mysqli_fetch_assoc($result)){
            
            ?>
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
                <td><a class="btn btn-secondary" href="teacher_update.php?id=<?php echo $row['id']; ?>">Edit</a><b> || </b><a class="btn btn-danger" href="teacher_delete.php?id=<?php echo $row['id']; ?>">Delete</a></button></td><br>
            </tr>
            <?php $count++; } ?>
        </tbody>
    </table>
    <a href="teacher_create.php">Insert new record</a>
    </div>
</body>
</html>
<?php
    }
?>