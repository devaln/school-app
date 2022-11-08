<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "school_database";

$conn = mysqli_connect($servername, $username, $password, $database);
if(!$conn){
    echo "We cann't connect to database";
}
// else{
//     echo "Connection Established Successfully";
// }
?>