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
$id = $_POST['id'];
$fc = $_POST['code'];
$qt = $_POST['qty'];

$sql = "UPDATE milk_col SET Farmer_code=$fc,quantity=$qt where Sr_No=$id";


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php if (mysqli_query($conn, $sql)) {

    ?>
        <script>
            alert("Record updated sucessfully");
            window.location.href='date.php';
        </script>
    <?php } ?>

</body>

</html>