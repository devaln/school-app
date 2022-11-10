<?php
include "addition/database_connection.php";
if(isset($_REQUEST['id'])){
    $id = $_REQUEST['id'];

    $sql = "DELETE FROM user WHERE id=$id";
    $result = mysqli_query($conn, $sql);
    if($result == true){
        echo "Record deleted successfully";
        header("location:view2.php");
    }
    else{
        echo "Record is not deleted";
    }
}
?>
