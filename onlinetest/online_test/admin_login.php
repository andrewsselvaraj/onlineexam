<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v4.0.1">
    <title>Online Test | Login</title>

 
  <!-- Include Bootstrap CSS -->
  <!-- link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  <!-- Include Custom CSS -->
  <style>
    body {
      background-color: #f7f7f7;
      background-image: url('images/design2.jpg');
      background-size: cover;
      background-position: center;
      background-repeat: no-repeat;
      background-attachment: fixed;
    }
    .login-form {
      width: 300px;
      margin: 0 auto;
      margin-top: 150px;
    }
    .login-form form {
      margin-bottom: 15px;
      background: #fff;
      padding: 30px;
      border-radius: 5px;
      box-shadow: 0px 0px 20px 0px rgba(0, 0, 0, 0.1);
    }
    .login-form h2 {
      margin: 0 0 15px;
    }
    .form-control,
    .btn {
      min-height: 38px;
      border-radius: 2px;
    }
    .btn {
      font-size: 15px;
      font-weight: bold;
    }
    .btn:hover {
  color: #fff;
  background-color: blue;
  border-color: blue;
    }
  </style>
</head>
<body>
  <div class="login-form">
    <center>
    <h2><b><font color="#0d6efd">Online Exam Portal</font></b></h2>
  </center>
    <form action="admin_login_process.php" method="POST">
      <h2 class="text-center"><b> Super Admin Login</b></h2>
      <div class="form-group">
        <input type="email" name="admin_user_email" class="form-control" placeholder="Email" required="required">
      </div>
      <br />
      <div class="form-group">
        <input type="password" name="admin_user_password" class="form-control" placeholder="Password" required="required">
      </div>
      <br />
      <div class="form-group">
        <center>
        <button type="submit" name="submit" class="btn btn-primary btn-primary">Log in</button>
    </center>
      </div>
      <br />
      <p><b><u>Important Links:</u></b></p>
      <ul>
      <!-- <li><a href="register_admin.php">Super Admin Registration</a></li> -->
      <li><a href="index.html">User Login</a></li>
    </ul>
    </form>
  </div>

  <br /><br />
  <div class="fixed-bottom" id="footer">
      <center><font color="#0d6efd"><b>Efreelearn | All rights reserved</b></font></center>
      </div>

  <!-- Include Bootstrap JS (optional) -->
  <!-- script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>

  

</body>
</html>