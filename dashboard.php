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
<!-- Designined by CodingLab | www.youtube.com/codinglabyt -->
<html lang="en" dir="ltr">

<head>
  <meta charset="UTF-8">
  <!--<title> Responsiive Admin Dashboard | CodingLab </title>-->
  <link rel="stylesheet" href="styles.css">
  <!-- Boxicons CDN Link -->
  <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
  <script defer src="https://use.fontawesome.com/releases/v5.0.7/js/all.js"></script>
  <style>
    body {
      background-color: gainsboro;
    }

    .box {
      background-color: grey;

    }

    .form {
      width: 70%;
      display: block;
      margin: 0 auto;
      padding: 25px;
      height: 100vh;
    }

    .form1 {
      margin-top: 400px;
      padding-bottom: 100px;
    }

    .btn {
      font-size: larger;

    }

    label {
      padding: 7px;
      font-size: larger;

    }

    h1,
    h2 {
      text-align: center;
    }

    .overview-boxes {
      height: 80vh;
    }
  </style>
</head>

<body>
  <div class="sidebar">
    <div class="logo-details">

      <h2 style="text-align: center ;color:aliceblue;">Welcome</h2>
    </div>
    <ul class="nav-links">
      <li>
        <a href="#" class="active">
          <i class='bx bx-grid-alt'></i>
          <span class="links_name">Dashboard</span>
        </a>
      </li>
      <li>
        <a href="#addmilk" onclick="change1()">
          <i class='bx bx-box'></i>
          <span class="links_name">Add Milk Data</span>
        </a>
      </li>
      <li>
        <a href="date.php">
          <i class='bx bx-list-ul'></i>
          <span class="links_name">View data</span>
        </a>
      </li>

      <li>
        <a href="#bill">
          <i class='bx bx-book-alt'></i>
          <span class="links_name">Billing report</span>
        </a>
      </li>

      <li class="log_out">
        <a href="index.php">
          <i class='bx bx-log-out'></i>
          <span class="links_name">Log out</span>
        </a>
      </li>
    </ul>
  </div>
  <section class="home-section">
    <nav>
      <div class="sidebar-button">
        <i class='bx bx-menu sidebarBtn'></i>
        <span class="dashboard">Dashboard</span>
      </div>

    </nav>

    <div class="home-content" id="right">
      <h1>Milk Collection Center</h1>
      <div class="overview-boxes">
        <!-- <h2>Dairy Management</h2> -->
        <div class="box">
          <div class="right-side">
            <div class="box-topic">Todays Collection</div>
            <div class="number">
              <?php
              $date = date("Y-m-d");
              $sql = "SELECT  SUM(quantity) FROM milk_col ";
              $result = $conn->query($sql);

              while ($row = mysqli_fetch_array($result)) {
                echo " " . $row['SUM(quantity)'];
                echo "<br>";
              } ?>
            </div>
          </div>

        </div>
        <div class="box">
          <div class="right-side">
            <div class="box-topic">Yesterday Collection</div>
            <div class="number">

              <?php
            $yesterday = new DateTime('yesterday');
            $z= $yesterday->format('Y-m-d');
            
              $sql = "SELECT  SUM(quantity) FROM milk_col WHERE Date=$z";
              $result = $conn->query($sql);

              while ($row = mysqli_fetch_array($result)) {
                echo " " . $row['SUM(quantity)'];
                echo "<br>";
              } ?></div>

          </div>
        </div>
        <div class="box">
          <div class="right-side">
            <div class="box-topic">This Month Collection</div>
            <div class="number">
              

            </div>
          </div>
        </div>
      </div>
      </li>
      </ul>
    </div>
    </div>
    </div>
    <form action="addsubmit.php" method="POST" id="addmilk" class="form">
      <h2>Add farmer data</h2>
      <div class="form-group ">
        <label>Farmer-Code</label><br>
        <input type="number" class="form-control" name="code" placeholder="Enter farmer-code" required><br>
        <label>Enter Quantity</label><br>
        <input type="number" class="form-control" placeholder="quantity" step="0.01"  name="qty" required><br>
        <label for="">Select(cow/buffolo)</label><br>
        <select class="form-select" name="milk" required><br>
          <option>Cow</option>
          <option>Buffolo</option>
        </select><br>
        <button type="submit" class="btn btn-primary">Add data</button>
        <button type="reset" class="btn btn-danger" onclick="reload()">Cancel</button>
    </form>
    <form action="bill.php" method="POST" id="bill" class="form1">
      <h2>Generate a bill</h2>
      <label>Farmer-Code</label><br>
      <input class="form-control" type="number" name="code" required><br>
      <button type="submit" class="btn btn-primary">Generate bill</button>
    </form>

  </section>

  <script>
    function reload() {
      window.location.href = 'dashboard.php';
    }
    let sidebar = document.querySelector(".sidebar");
    let sidebarBtn = document.querySelector(".sidebarBtn");
    let x = document.getElementById("right");
    sidebarBtn.onclick = function() {
      sidebar.classList.toggle("active");
      if (sidebar.classList.contains("active")) {
        sidebarBtn.classList.replace("bx-menu", "bx-menu-alt-right");
      } else
        sidebarBtn.classList.replace("bx-menu-alt-right", "bx-menu");
    }

    function change1() {
      x.replace("home-section", "add");
      // document.getElementById("add").style.display="block";
    }
  </script>

</body>

</html>