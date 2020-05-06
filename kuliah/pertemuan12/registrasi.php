<?php
require 'functions.php';

if (isset($_POST['registrasi'])) {
  if (registrasi($_POST) > 0) {
    echo "<script>
            alert('user baru berhasil ditambahkan. silahkan login!');
            document.location.href = 'login.php';
          </script>";
  } else {
    echo "user gagal ditambahkan!";
  }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Registrasi</title>
  <link rel="stylesheet" href="css/style.css">
</head>

<body>
  <div class="container" style="text-align: center">
    <h3>Form Registrasi</h3>
    <div class="form-inputan">
      <form action="" method="post">
        <input type="text" name="username" placeholder="Username" autofocus autocomplete="off" required>
        <br><br>
        <input type="password" name="pass1" placeholder="Password" required>
        <br><br>
        <input type="password" name="pass2" placeholder="Confirm Password" required>
        <br><br>
        <div class="btn-login">
          <button type="submit" name="registrasi">Registrasi</button>
          <label><a href="login.php">Login an account.</a></label>
        </div>
      </form>
    </div>
  </div>
</body>

</html>