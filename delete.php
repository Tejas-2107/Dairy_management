<?php
    $db_hostname = "127.0.0.1";
    $db_username = "root";
    $db_password = "";
    $db_name = "dairy_management";
    
    $conn = mysqli_connect($db_hostname, $db_username, $db_password, $db_name);
    if (!$conn) {
        echo "Connection failed: " . mysqli_connect_error();
        exit;
    }
    $id=$_GET['Sr_No'];
    $sql="DELETE FROM milk_col WHERE Sr_No=$id";
    $result=mysqli_query($conn,$sql);
    if($result)
    {
        header("Location:date.php?msg=Record deleted sucessfully");
    }
    else{
        echo" failed". mysqli_error($conn);
    }
    
    exit;
?>