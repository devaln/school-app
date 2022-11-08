<?php
    include "addition/database_connection.php";
    require "addition/auth.php";
    if(isset($_POST['submit'])){
        $qualification = $_POST['qualification'];
        $last_school_name = $_POST['last_school_name'];
        $standard = $_POST['standard'];

        $sql = "insert into student (qualification, last_school_name, standard) values ('$qualification', '$last_school_name', '$standard')";
        $result = mysqli_query($conn, $sql);

        if($result ==true){
            $alert = "New Record inserted Successfully";
            echo '<p style="color:red;">'. $alert .' </p>';  
        }
        else{
            echo "Error ---your record is not set!";
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student - insert records </title>
</head>
<body>
<?php require "addition/navgation.php"; ?>
    <div class="container" align="center">
        <h1>Enter the requied details</h1><hr><br>
        <form action="student_create.php" method="post">
            <legend>Personal Detail :</legend><br>
            <table>
                <tr>
                    <td align="center">qualification :-</td>
                    <td><input type="text" name="qualification" id="qualification" required></td>
                </tr>
                <tr>
                    <td align="center">last_school_name :-</td>
                    <td><input type="text" name="last_school_name" id="last_school_name" required></td>
                </tr>
                <tr>
                    <td align="center">standard :-</td>
                    <td><ul><li><input type="radio" name="standard" value="8th" required>8 class</li>
                    <li><input type="radio" name="standard" value="9th" required>9 class</li>
                    <li><input type="radio" name="standard" value="10th" required>10 class</li></ul></td>
                </tr>
            </table><br>
            <input type="reset" value="Reset">
            <input type="submit" class="submit" name="insert"></input><br>
        </form>
        <a href="student_view.php" class="form">view newly inserted record</a>
    </div>
</body>
</html>