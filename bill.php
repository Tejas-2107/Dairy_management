<?php
$db_hostname = "127.0.0.1";
$db_username = "root";
$db_password = "";
$db_name = "dairy_management";

$conn = mysqli_connect($db_hostname, $db_username, $db_password, $db_name);
if (!$conn) {
    echo "Connection failed: " . mysqli_connect_error();
}
$id = $_POST['code'];
$x = 0;


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
    <title>Document</title>
    <style>
        h1 {
            color: rgb(60, 179, 113);
        }

        h5 {
            text-align: left;
            color: white;

        }

        .bill {
            padding: 30px;
            display: block;
            width: 40%;
            margin: 20px auto;
            background-color: rgb(60, 60, 60);
            height:75vh;
            border-radius: 2%;
        }

        span {
            font-weight: bold;
        }
        @media screen and  (max-width: 600px) {
   .bill{
    width: 50%;
   }
}
    </style>
</head>

<body>
    <div class="bill">
        <h1>Dairy Management System</h1>
        <h5> <span>Farmer-Code: </span><?php echo "$id"; ?></h5><br>
        <h5><span>Date: <?php echo date("d/m/Y"); ?></span></h5><br>
        <h5><span>Litre-rate: 60rs</span></h5><br>
        <h5><span>Litre:
                <?php
                $sql = "SELECT  SUM(quantity) FROM milk_col WHERE Farmer_code=$id";
                $result = $conn->query($sql);

                while ($row = mysqli_fetch_array($result)) {
                    echo " " . $row['SUM(quantity)'];
                    $x = $x + $row['SUM(quantity)'];
                    echo "<br>";
                } ?>
            </span></h5><br>
        <h5><span>Total: <?php echo $x * 60 ?></span></h5><br>

        <button type="button" class="btn btn-primary" onclick="window.print()">Print</button>
    </div>
</body>

</html>