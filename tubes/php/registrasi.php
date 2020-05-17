<?php
require 'function.php';

if (isset($_POST['register'])) {
  if (registrasi($_POST) > 0) {
    echo "<script>
            alert('Registrasi berhasil!');
            document.location.href = 'login.php';
         </script>";
  } else {
    echo "<script>
            alert('Registrasi gagal!');
            document.location.href = 'login.php';
          </script>";
  }
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
  <title>Registration</title>

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
      text-align: center;
    }
  </style>
</head>

<body>
  <div class="row">
    <div class="col s12 m5">
      <div class="card-panel light">
        <h3>REGISTRATION</h3>
        <form action="" method="POST">
          <table>
            <tr>
              <td><label for="username">Username</label></td>
              <td>:</td>
              <td><input type="text" name="username" autocomplete="off"></td>
            </tr>
            <tr>
              <td><label for="password">Password</label></td>
              <td>:</td>
              <td><input type="password" name="password"></td>
            </tr>
          </table>

          <br>
          <button type="submit" name="register">Register</button>
        </form>
      </div>
    </div>
  </div>

</body>

</html>