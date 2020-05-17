<?php
session_start();

if (!isset($_SESSION['username'])) {
  header("Location: login.php");
  exit;
}

require 'function.php';

if (isset($_POST['tambah'])) {
  if (tambah($_POST) > 0) {
    echo "<script>
          alert('Data Berhasil ditambahkan!');
          document.location.href = 'admin.php';
          </script>";
  } else {
    "<script>
          alert('Data Gagal ditambahkan!');
          document.location.href = 'admin.php';
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
  <title>Log In</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tambah Data</title>

  <style>
    .card-panel {
      width: 400px;
      height: 650px;
      padding: 10px;
      position: fixed;
      top: 15%;
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
        <h3>Add Data</h3>
        <form action="" method="post">
          <ul>

            <li>
              <label for="gambar">Pict :
                <input type="file" name="gambar" id="gambar" class="gambar" onchange="previewImage()">
              </label>
              <img src="../Assets/Gambar/default.png" width="100" style="display: block;" class="img-preview">
            </li>

            <li>
              <label for="nama">Name :
                <input type="text" name="nama" id="nama" autocomplete="off" required>
              </label>
            </li>

            <li>
              <label for="kategori">Category :</label>
              <input type="text" name="kategori" id="kategori" autocomplete="off" required>
            </li>

            <div class="container" style="text-align: center">
              <div class="row">
                <form class="col s12">
                  <div class="row">
                    <label>Browser default Select
                      <select class="browser-default">
                        <option value="" disabled selected>------------------Choose Brand----------------</option>
                        <option value="OPPO">OPPO</option>
                        <option value="SAMSUNG">SAMSUNG</option>
                        <option value="ASUS">ASUS</option>
                        <option value="APPLE">APPLE</option>
                        <option value="SONY">SONY</option>
                        <option value="SHARP">SHARP</option>
                        <option value="CANON">CANON</option>
                        <option value="FUJIFILM">FUJIFILM</option>
                      </select>
                    </label>
                  </div>
                </form>
              </div>
            </div>

            <li>
              <label for="harga">Price :
                <input type="text" name="harga" id="harga" autocomplete="off" required>
              </label>
            </li>
            <br>
            <button type="submit" name="tambah">Add Data</button>
            <button type="submit">
              <a href="../index.php" style="text-decoration: none; color: black;">Back</a>
            </button>
          </ul>
        </form>
      </div>
    </div>
  </div>

  <!--JavaScript at end of body for optimized loading-->
  <script src="../js/script.js"></script>
  <script type="text/javascript" src="../Assets/js/materialize.min.js"></script>
  <script type="text/javascript">
    $(document).ready(function() {
      $('select').formSelect();
    });
  </script>

</body>

</html>