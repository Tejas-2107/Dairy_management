  <!DOCTYPE html>
  <html lang="en">

  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.7/js/all.js"></script>
    <link rel="stylesheet" href="index.css" />
    <title>login</title>
  </head>

  <body>
    <div class="row">
      <div class="col-lg-6 col-md-12 left">
        <h2 class="heading">Dairy Management System</h2>
      </div>
      <div class="col-lg-6 col-md-12 right">
        <form action="loginsubmit.php" method="POST">
          <h1>Login here</h1>
          <input type="text" class="form-control" placeholder="Enter your username" name="name" required />
          <br />
          <input type="password" class="form-control" placeholder="Enter your password" name="password" required /><br />
          <button type="submit" class="btn btn-primary">Login</button>
        </form>
      </div>
    </div>
  </body>

  </html>