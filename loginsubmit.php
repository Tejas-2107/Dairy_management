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
    

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="submit.css">
    <title></title>
</head>
<body>
    <?php
    $username=$_POST['name'];
    $password=$_POST['password'];
    $name="Admin";
    $pass="dbms@123";
    if($username==$name&&$password==$pass)
    {
        ?>
        <script> alert("Login successful");</script>  
        <script>window.location.href='dashboard.php'</script>
    <?php
    }
    else
    {

    ?>
     <script>alert("invalid username or password");</script>
     <script>window.location.href='index.php'</script>
     <?php
      }
      mysqli_close($conn);
  ?>
</body>
</html>
