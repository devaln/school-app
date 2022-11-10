<?php
    include "addition/database_connection.php";
    require "addition/auth.php";
    $id = $_REQUEST['id'];

    $query = "select * from user where id='$id'";
    $result = mysqli_query($conn, $query);
    $row = mysqli_fetch_assoc($result)
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>update - </title>
    </head>
    <body>
    <?php require"addition/navgation.php"; ?>
        <div class="container" align="center">
            <h1>Update the information</h1><hr><br>

            <?php
            $alert = "";
            if(isset($_POST['new']) && $_POST['new']==1){
                $id = $_REQUEST['id'];
                
                $first_name = $_REQUEST['first_name'];
                $middle_name = $_REQUEST['middle_name'];
                $last_name = $_REQUEST['last_name'];
                $email = $_REQUEST['email'];
                $phone_number = $_REQUEST['phone_number'];
                $age = $_REQUEST['age'];
                $gender = $_REQUEST['gender'];
                $record_inserted = $_SESSION['username'];
                
                $sql = "UPDATE user SET first_name='$first_name', middle_name='$middle_name', last_name='$last_name', phone_number='$phone_number', email='$email', gender='$gender' WHERE id='$id'";
                $result2 = mysqli_query($conn, $sql);
                if($result2==1){
                $alert = " Record Is Updated Successfully.</br></br><a href='student_view.php'>View Updated Record</a>";
                echo '<p style="color:red;">'. $alert .' </p>'; }
            }
            else{
            ?>
                <form action="student_update.php" method="post">
                    <strong>Update Personel information : </strong><br>
                    <input type="hidden" name="new" value="1" />
                    <input type = "hidden" value = "<?php echo $row['id']; ?>" name = "id" id="id" ><br><br>
                    First Name :-
                    <input type = "text" value = "<?php echo $row['first_name']; ?>" name = "first_name" id="first_name" required><br><br>
                    
                    Middle Name :-
                    <input type = "text" value = "<?php echo $row['middle_name']; ?>" name = "middle_name" id="middle_name" required><br><br>
                    
                    Last Name :-
                    <input type = "text" value = "<?php echo $row['last_name']; ?>" name = "last_name" id="last_name" required><br><br>
                    
                    Phone Number :-
                    <input type = "integer" value = "<?php echo $row['phone_number']; ?>" name = "phone_number" id="phone_number" required><br><br>

                    AGE :-
                    <input type = "integer" value = "<?php echo $row['age']; ?>" name = "age" id="age" required><br><br>
                    
                    Email Address :-
                    <input type = "email" value = "<?php echo $row['email']; ?>" name = "email" id="email" required><br><br>
                    
                    Gender :-
                    <input type = "radio" name = "gender" value="male"<?php if($row['gender'] == 'male'){ echo "checked"; } ?> required>Male
                    <input type = "radio" name = "gender" value="female"<?php if($row['gender'] == 'female'){ echo "checked"; } ?> required>Female 
                    <input type = "radio" name = "gender" value="other"<?php if($row['gender'] == 'other'){ echo "checked"; } ?> required>Other <br><br>
                
                <button type="reset"class="btn btn-primary">Reset</button>
                <button type="submit"class="btn btn-primary">Update</button>
            <p><a href="student_view.php">Click Here</a> to go back.</p>
        </form>
        <?php } ?>
    </div>
</body>
</html>
