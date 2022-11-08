<?php
    include "addition/database_connection.php";
    require "addition/auth.php";
    if(isset($_POST['submit'])){
        $qualification = $_POST['qualification'];
        $experience = $_POST['experience'];
        $specialization = $_POST['specialization'];

        $sql = "insert into teacher (qualification, experience, specialization) values ('$qualification', '$experience', '$specialization')";
        $result = mysqli_query($conn, $sql);

        if($result ==true){
            $alert = "New Record inserted Successfully";
            echo '<p style="color:red;">'. $alert .' </p>';  
            header("location:teacher_view.php");
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
        <form action="teacher_create.php" method="post">
            <legend>Personal Detail :</legend><br>
            <table>
                <tr>
                    <td align="center">qualification <small>(in figure)</small>:-</td>
                    <td><input type="text" name="qualification" id="qualification" required></td>
                </tr>
                <tr>
                    <td align="center">Year of Experience :-</td>
                    <td><input type="integer" name="experience" id="expreience" required></td>
                </tr>
                <tr>
                    <td align="center">Specialization :-</td>
                    <td><input type="text" name="specialization" id="specialization" required></ul></td>
                </tr>
            </table><br>
            <input type="reset" value="Reset">
            <input type="submit" class="submit" name="insert"></input><br><br>
            <a href="teacher_view.php" class="form">view newly inserted record</a>
        </form>
    </div>
</body>
</html>