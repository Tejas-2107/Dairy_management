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
    $code=$_POST['code'];
    $qty=$_POST['qty'];
    $milk=$_POST['milk'];
    
    $sql = "INSERT INTO  milk_col (Farmer_code, milk_type, quantity) VALUES ('$code', '$milk', '$qty')";
    $result = mysqli_query($conn, $sql);
    if (!$result) {
        echo "Error: " . mysqli_error($conn);
        exit;
    }
    
    mysqli_close($conn);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="submit.css">
    <title>Document</title>
</head>
<body>
<script>
alert("Data inserted successfully");
window.location.href="dashboard.php";</script>
</body>
</html>
