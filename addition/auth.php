<?php
    session_start();
if(!isset($_SESSION['username'])){
    header("location:login.php");
}
// include "addition/database_connection.php";
// require "addition/auth.php";
// if(isset($_REQUEST['id'])){
//     $id = $_REQUEST['id'];
//     $first_name = $_POST['first_name'];
//     $middle_name = $_POST['middle_name'];
//     $last_name = $_POST['last_name'];
//     $age = $_POST['age'];
//     $gender = $_POST['gender'];
//     $email = $_POST['email'];
//     $phone_number = $_POST['phone_number'];
// }
//  echo $_SESSION['username']; ?>