<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "school_database";

$conn = mysqli_connect($servername, $username, $password, $database);
if(!$conn){
    echo "Error".mysqli_error($conn);
}
// else{
//     echo "Connection Established Successfully";
// }
?>