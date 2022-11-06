<?php
$db_hostname = "127.0.0.1";
$db_username = "root";
$db_password = "";
$db_name = "dairy_management";
$conn = new mysqli($db_hostname, $db_username, $db_password, $db_name);
// if ($conn->connect_error) {
//     die("Connection failed: " . $conn->connect_error);
// }

// $if(isset($_GET['id']))
// {
//     $id=$_GET['id'];
//   $delete=mysqli_query($conn,"DELETE FROM milk_col WHERE Sr_No= $id");
// }
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
    <link rel="stylesheet" href="submit.css">
    <title>Data</title>
    <style>
        body{
            background-color:#fff;
        }
        form{
            margin-bottom: 50px;
        }
        thead{
            margin-top: 30px;
            background-color: black;
            color: grey;
        }
        table{
            margin-top: 20px;
        }
       table, th, td {
  border: 1px solid black;
  font-size: larger;
  text-align: center;
} 
 
a{
    color: black;
    text-decoration: none;
} 
  
    </style>
</head>

<body>
    <table class="table" border="1">
        <thead>
            <tr>
            <th scope="col">Sr_No</th>
                <th scope="col">Farmer-code</th>
                <th scope="col">milk-type</th>
                <th scope="col">qunatiy</th>
                <th scope="col">date</th>
                <th>Edit data</th>
                <th>Delete data</th>
            </tr>
        </thead>
        <tbody>
            <?php
            
            $query = "SELECT * FROM `milk_col`;";
            $result = $conn->query($query);

            if ($result->num_rows > 0) {

                while ($row = $result->fetch_assoc()) {
            ?>
                    <tr>
                    <td><?php echo $row['Sr_No'] ?></td>
                        <td><?php echo $row['Farmer_code'] ?></td>
                        <td><?php echo $row['milk_type'] ?></td>
                        <td><?php echo $row['quantity'] ?></td>
                        <td><?php echo $row['Date'] ?></td>
                        <td><a href="edit.php?Sr_No=<?php echo $row['Sr_No']?>"><i style="color: green;" class="fa fa-edit"></i></a></button></td>
                       <td><a href="delete.php?Sr_No=<?php echo $row['Sr_No']?>" ><i style="color: red;" class="fa fa-trash"></i></a></button></td>
                       
                        
                    </tr>
            <?php
          
                }
            } else {
                echo "Not Found data";
            }

            $conn->close();
            ?>
            </tr>
        </tbody>
    </table>
    <a href="dashboard.php" id="back" style="text-decoration: none; color:skyblue; margin-left:10px; font-size:large;" onclick="reload()"><i class="fa fa-arrow-left"></i> back to home</a>
    <script>
       
    </script>
</body>

</html>