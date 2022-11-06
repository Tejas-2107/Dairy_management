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
    $sql="SELECT * from milk_col where Sr_No=$id";
    $result = $conn->query($sql);
    $row=$result->fetch_assoc();
    $fc=$row['Farmer_code'];
    $qt=$row['quantity'];
    $mt=$row['milk_type'];
  
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.7/js/all.js"></script>
    <title>Add data</title>
    <style>
        body{
            background-color: gainsboro;
        }
        form{
            width: 100%;
            display: block;
            margin: 0 auto;
           padding: 25px;
        }
        .btn{
            font-size: larger;

        }
        label{
            padding: 7px;
            font-size: larger;

        }
    </style>
</head>
<body>
<form method="POST" action="update.php">
  <div class="form-group">
    <label>Farmer-Code</label><br>
    <input type="hidden" name="id" value="<?php echo $id?>">
    <input type="number" class="form-control" name="code" placeholder="Enter farmer-code" value="<?php echo $fc?>" required><br>
    <label>Enter Quantity</label><br>
    <input type="number" class="form-control" placeholder="quantity" name="qty" value="<?php echo $qt?>" required><br>
    <label for="">Select(cow/buffolo)</label><br>
    <select class="form-select" name="milk" required><br>
  <option>Cow</option>
  <option>Buffolo</option>
</select><br>
  <button type="submit" class="btn btn-primary">update</button>
  <button type="reset" class="btn btn-danger">Reset</button>
  <!-- <script>
     function page()
        {
            alert("Data inserted Successfully");
            window.location.href="dashboard.php";
        }
  </script> -->
</form>
</body>
</html>