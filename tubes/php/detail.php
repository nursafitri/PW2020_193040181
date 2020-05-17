<?php

//mengecek apakah ada id yang dikirimkan
//jika tidak maka akan dikembalikan ke halaman index.php
if (!isset($_GET['id'])) {
  header("location: ../index.php");
  exit;
}

require 'function.php';

//mengambil id dari url
$id = $_GET['id'];

//melakukan query dengan parameter id yang diambil dari url
$elektronik = query("SELECT * FROM elektronik WHERE id = $id")[0];

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <!--Import Google Icon Font-->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <!--Import materialize.css-->
  <link type="text/css" rel="stylesheet" href="ssets/css/materialize.min.css" media="screen,projection" />
  <!--Let browser know website is optimized for mobile-->
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <link rel="stylesheet" type="text/css" href="../Assets/css/style.css">

  <link rel="stylesheet" type="text/css" href="../Assets/css/materialize.min.css">

  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>Detail</title>

  <style>
    h3,
    .isi {
      text-align: center;
    }
  </style>

</head>

<body>

  <!-- navbar -->
  <div class="navbar-fixed">
    <nav class="red">
      <div class="container">
        <div class="nav-wrapper">
          <a href="#!" class="brand-logo center">JeShop</a>
          <a href="#" data-target="mobile-nav" class="sidenav-trigger"><i class="material-icons">menu</i></a>
          <ul class="left hide-on-med-and-down">
            <li><a href="#tentang">About</a></li>
            <li><a href="#merek">Brand</a></li>
            <li><a href="#produk">Product</a></li>
          </ul>
          <ul class="right hide-on-med-and-down">
            <li><a href="#bantuan">Help</a></li>
            <li><a href="login.php"><i class="material-icons">account_circle</i></a></li>
          </ul>

        </div>
      </div>
    </nav>
  </div>

  <!-- sidenav -->
  <ul class="sidenav" id="mobile-nav">
    <li><a href="#tentang">About</a></li>
    <li><a href="#merek">Brand</a></li>
    <li><a href="#produk">Product</a></li>
    <li><a href="#bantuan">Help</a></li>
    <li><a href="login.php"><i class="material-icons">account_circle</i>Login</a></li>
  </ul>

  <!-- slider -->
  <div class="slider">
    <ul class="slides">
      <li>
        <img src="../Assets/Gambar/Slider/1.jpg">
        <div class="caption center-align">
        </div>
      </li>
      <li>
        <img src="../Assets/Gambar/Slider/3.jpg">
        <div class="caption center-align">
        </div>
      </li>
    </ul>
  </div>

  <!-- tentang
  <section id="tentang" class="tentang scollspy">
    <div class="container">
      <div class="row">
        <h3 class="center light red-text">About</h3>
        <div class="col m6 light">

          <h5 class="red-text">JeShop</h5>
          <p>Menyediakan layanan purna jual berbagai macam elektronik</p>
        </div>
        <div class="col m6 light">
          <h3 class="material-icons red-text center">TOP SEARCH</h3>
          <p>APPLE</p>
          <div class="progress">
            <div class="determinate blue" style="width: 95%"></div>
          </div>
          <p>SAMSUNG</p>
          <div class="progress">
            <div class="determinate blue" style="width: 85%"></div>
          </div>
          <p>FUJIFILM</p>
          <div class="progress">
            <div class="determinate blue" style="width: 80%"></div>
          </div>
          <p>OPPO</p>
          <div class="progress">
            <div class="determinate blue" style="width: 70%"></div>
          </div>

        </div>
      </div>
    </div>
  </section> -->

  <!-- merek -->
  <!-- <div id="merek" class="parallax-container scrollspy" style="height: 350px;">
    <div class="parallax"><img src="../Assets/Gambar/CT.jpg"></div> -->

  <!-- <div class="container merek">
      <h3 class="center light red-text">Brand</h3>
      <div class="row">
        <div class="col m4 s12 center">
          <i class="material-icons">camera_alt</i>
          <ul>
            <li>FUJIFILM</li>
            <li>CANON</li>
          </ul>
        </div>
        <div class="col m4 s12 center">
          <i class="material-icons">phone_android</i>
          <ul>
            <li>APPLE</li>
            <li>OPPO</li>
            <li>SAMSUNG</li>
          </ul>
        </div>
        <div class="col m4 s12 center">
          <i class="material-icons">laptop</i>
          <ul>
            <li>ASUS</li>
            <li>LENOVO</li>
            <li>APPLE</li>
          </ul>
        </div>
        <div class="col m4 s12 center">
          <i class="material-icons">desktop_windows</i>
          <ul>
            <li>APPLE</li>
            <li>SAMSUNG</li>
          </ul>
        </div>
        <div class="col m4 s12 center">
          <i class="material-icons">watch</i>
          <ul>
            <li>APPLE</li>
            <li>SAMSUNG</li>
          </ul>
        </div>
        <div class="col m4 s12 center">
          <i class="material-icons">tv</i>
          <ul>
            <li>SONY</li>
            <li>SAMSUNG</li>
            <li>SHARP</li>
          </ul>
        </div>
      </div>
    </div> -->
  <!-- </div> -->

  <h3 class="center light red-text">Detail Electronic</h3>
  <div class="isi">
    <div class="gambar">
      <img src="../assets/Gambar/<?= $elektronik['gambar']; ?>" alt="">
    </div>
    <div class="keterangan">
      <p><?= $elektronik["nama"] ?></p>
      <p><?= $elektronik["kategori"] ?></p>
      <p><?= $elektronik["merek"] ?></p>
      <p>Rp. <?= $elektronik["harga"] ?></p>
    </div>

    <button class="tombol-kembali"><a href="../index.php">Back</a></button>
  </div>

  <!-- Bantuan -->
  <section id="bantuan" class="bantuan lighten-3 scrollspy">
    <div class="container">

      <h3 class="light red-text center">Help</h3>
      <div class="row">
        <div class="col m5 s12">
          <div class="card-panel red center white-text">

            <h5 class="card-title">Contact</h5>
            <p class="card-text">Find Us On </p>
          </div>
          <ul class="collection with-header">
            <li class="collection-header center"><i class="material-icons">mail</i>
              <p class="center">jeshop5@gmail.com</p>
            </li>
            <li class="collection-item center"><i class="material-icons">phone</i><br>08111612xxx</li>
            <li class="collection-item center"><i class="material-icons">photo_camera</i><br>@jeshop
            </li>
          </ul>
        </div>
        <div class="col m7 s12">
          <form>
            <div class="card-panel">
              <h5 class="red-text">Please Fill Out Form</h5>
              <div class="input-field">
                <input type="text" name="name" id="name" required class="validate">
                <label for="name">Name</label>
              </div>
              <div class="input-field">
                <input type="email" name="email" id="email" class="validate">
                <label for="email">Email</label>
              </div>
              <div class="input-field">
                <input type="text" name="phone" id="phone">
                <label for="phone">Phone Number</label>
              </div>
              <div class="input-field">
                <textarea name="message" id="message" class="materialize-textarea"></textarea>
                <label for="message">Message</label>
              </div>
              <button type="submit" class="btn red">Submit</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </section>

  <!-- footer -->
  <footer class="red white-text center" style="height: 150px">
    <p class="flow-text">Mei 2020, Nur Safitri Wulandari</p>
    <p class="flow-text">Website Ini Dibuat Untuk Memenuhi Kebutuhan Tugas Besar Praktikum Pemrograman Web Universitas Pasundan</p>
  </footer>


  <!--JavaScript at end of body for optimized loading-->
  <script type="text/javascript" src="../Assets/js/materialize.min.js"></script>
  <script type="text/javascript">
    const sidenav = document.querySelectorAll('.sidenav')
    M.Sidenav.init(sidenav);

    const slider = document.querySelectorAll('.slider');
    M.Slider.init(slider, {
      indicators: false,
      height: 500,
      transition: 600,
      interval: 3000
    });

    // const parallax = document.querySelectorAll('.parallax');
    // M.Parallax.init(parallax);

    // const scroll = document.querySelectorAll('scrollspy');
    // M.Scrollspy.init(scroll, {
    //   scrollOffset: 50
    // });

    $(document).ready(function() {
      $('input#input_text').characterCounter();
    });
  </script>
</body>

</html>