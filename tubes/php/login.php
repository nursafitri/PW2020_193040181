<?php
session_start();
require 'function.php';

if (isset($_SESSION['username'])) {
  header("Location: admin.php");
  exit;
}

if (isset($_COOKIE['username']) && isset($_COOKIE['hash'])) {
  $username = $_COOKIE['username'];
  $hash = $_COOKIE['hash'];

  $result = mysqli_query(koneksi(), "SELECT * FROM user WHERE username = '$username'");
  $row = mysqli_fetch_assoc($result);

  if ($hash === hash('sha256', $row['id'], false)) {
    $_SESSION['username'] = $row['username'];
    header("Location: admin.php");
    exit;
  }
}

if (isset($_POST['submit'])) {
  $username = $_POST['username'];
  $password = $_POST['password'];
  $cek_user = mysqli_query(koneksi(), "SELECT * FROM user WHERE username = '$username'");

  if (mysqli_num_rows($cek_user) > 0) {
    $row = mysqli_fetch_assoc($cek_user);
    if (password_verify($password, $row['password'])) {
      $_SESSION['username'] = $_POST['username'];
      $_SESSION['hash'] = hash('sha256', $row['id'], false);

      if (isset($_POST['remember'])) {
        setcookie('username', $row['username'], time() + 60 * 60 * 24);
        $hash = hash('sha256', $row['id']);
        setcookie('hash', $hash, time() + 60 * 60 * 24);
      }
      if (hash('sha256', $row['id']) == $_SESSION['hash']) {
        header("Location: admin.php");
        die;
      }
      header("Location: ../index.php");
      die;
    }
  }
  $error = true;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <!--Import Google Icon Font-->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <!--Import materialize.css-->
  <link type="text/css" rel="stylesheet" href="../Assets/css/materialize.min.css" media="screen,projection" />
  <!--Let browser know website is optimized for mobile-->
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <link rel="stylesheet" type="text/css" href="../Assets/css/style.css">

  <link rel="stylesheet" type="text/css" href="../Assets/css/materialize.min.css">
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Log In</title>

  <style>
    .card-panel {
      width: 400px;
      height: 500px;
      padding: 20px;
      position: fixed;
      top: 30%;
      left: 50%;
      margin-top: -120px;
      margin-left: -220px;
    }
  </style>
</head>

<body>
  <div class="row">
    <div class="col s12 m5">
      <div class="card-panel light">
        <div class="container" style="text-align: center;">
          <h3>LOG IN</h3>
          <?php if (isset($error)) : ?>
            <p style="color: red; font-style: italic;">Wrong Username or Password</p>
          <?php endif; ?>
          <form action="" method="POST">
            <input type="text" name="username" placeholder="Username" autofocus autocomplete="off" required>
            <br><br>
            <input type="password" name="password" placeholder="Password" required>
            <br><br>
            <div class="btn-login">
              <button type="submit" name="submit">Log In</button>
              <label><a href="#">Forgot password?</a></label>
            </div>
            <p>Login : admin/12345</p>
            <input type="checkbox" name="remember">
            <label for="remember">Remember Me</label>
            <br>

            <div class="registrasi">
              <label>Don't have an account? <a href="registrasi.php"><b>Register Now!</b></a></label>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>

</body>

</html>