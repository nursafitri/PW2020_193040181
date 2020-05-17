<?php
session_start();

if (!isset($_SESSION['username'])) {
  header("Location: login.php");
  exit;
}

require 'function.php';

if (isset($_GET['cari'])) {
  $keyword = $_GET['keyword'];
  $elektronik = query("SELECT * FROM elektronik WHERE
                  nama LIKE '%$keyword%' OR
                  kategori LIKE '%$keyword%' OR
                  merek LIKE '%$keyword%' OR
                  harga LIKE '%$keyword%' 
                  ");
} else {
  $elektronik = query("SELECT * FROM elektronik");
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
  <title>Admin</title>
</head>

<body>
  <!-- navbar -->
  <div class="navbar-fixed">
    <nav class="red">
      <div class="container">
        <div class="nav-wrapper">
          <a href="#!" class="brand-logo right">ADMIN</a>
          <a href="#" data-target="mobile-nav" class="sidenav-trigger"><i class="material-icons">menu</i></a>
          <ul class="left hide-on-med-and-down">
            <li><a href="tambah.php">Add Data</a></li>
            <li><a href="logout.php">Log Out</a></li>
            <!-- <li><a href="#produk">Product</a></li> -->
          </ul>
          <!-- <ul class="right hide-on-med-and-down">
            <li><a href="#bantuan">Help</a></li>
            <li><a href="php/login.php"><i class="material-icons">account_circle</i></a></li>
          </ul> -->

        </div>
      </div>
    </nav>
  </div>

  <!-- sidenav
  <ul class="sidenav" id="mobile-nav">
    <li><a href="tambah.php">Add Data</a></li>
    <li><a href="logout.php">Log Out</a></li>
    <!-- <li><a href="#produk">Product</a></li>
    <li><a href="#bantuan">Help</a></li>
    <li><a href="php/login.php"><i class="material-icons">account_circle</i>Login</a></li>
    <li><a href="#input-field"><i class="material-icons">search</i>

        <form class="col s12" action="" method="GET">
          <div class="row">
            <div class="input-field col s6 center">
              <input id="input_text" type="text" name="keyword" autofocus autocomplete="off">
              <label for="input_text">Search</label>
              <button type="submit" name="cari">Search</button>
            </div>
          </div>
        </form>

      </a></li> -->
  </ul>
  <section id="produk">
    <form class="col s12 center" action="" method="GET">
      <div class="row">
        <div class="input-field col s6 center">
          <input class="center" id="input_text" type="text" name="keyword" autofocus autocomplete="off">
          <label for="input_text">Search</label>
          <button type="submit" name="cari">Search</button>
        </div>
      </div>
    </form>
    <h3 class="center light red-text">Product</h3>
    <table class="centered" border='1' cellpadding='10' cellspacing='0'>
      <div class="row">


        <?php if (empty($elektronik)) : ?>
          <tr>
            <td colspan="7">
              <h1>Not Found</h1>
            </td>
          </tr>
        <?php else : ?>
          <?php $i = 1;
          foreach ($elektronik as $e) : ?>

            <tr>
              <td><?= $i++; ?></td>
              <td>
                <a href="ubah.php?id=<?= $e['id'] ?>"><button>Update</button></a>
                <a href="hapus.php?id=<?= $e['id'] ?>" onclick="return confirm('Hapus Data??')"><button>Delete</button></a>
              </td>
              <td><img src="../assets/Gambar/<?= $e['gambar']; ?>"></td>
              <td><?= $e['nama']; ?></td>
              <td><?= $e['kategori']; ?></td>
              <td><?= $e['merek']; ?></td>
              <td>
                <p>Rp. <?= $e['harga']; ?></p>
              </td>
            </tr>

          <?php endforeach; ?>
        <?php endif; ?>
      </div>
    </table>
  </section>


  <!--JavaScript at end of body for optimized loading-->
  <script type="text/javascript" src="../Assets/js/materialize.min.js"></script>
  <script type="text/javascript">
    const sidenav = document.querySelectorAll('.sidenav')
    M.Sidenav.init(sidenav);

    // const slider = document.querySelectorAll('.slider');
    // M.Slider.init(slider, {
    //   indicators: false,
    //   height: 500,
    //   transition: 600,
    //   interval: 3000
    // });

    // const parallax = document.querySelectorAll('.parallax');
    // M.Parallax.init(parallax);

    // const scroll = document.querySelectorAll('scrollspy');
    // M.Scrollspy.init(scroll, {
    //   scrollOffset: 50
    // });

    // $(document).ready(function() {
    //   $('input#input_text').characterCounter();
    // });
  </script>

  <script src="js/script.js"></script>

</body>

</html>