<?php
//menghubungkan dengan file php lainnya
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
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin</title>
</head>

<body>
  <div class="add">
    <a href="tambah.php">Tambah Data</a>
  </div>
  <form action="" method="get">
    <input type="text" name="keyword" autofocus autocomplete="off">
    <button type="submit" name="cari">Cari!</button>
  </form>
  <table border="1" cellpadding="13" cellspacing="0" style="background-color: pink">
    <?php if (empty($elektronik)) : ?>
      <tr>
        <td colspan="7">
          <h1>Data tidak ditemukan</h1>
        </td>
      </tr>
    <?php else : ?>
      <tr>
        <th>Id</th>
        <th>Opsi</th>
        <th>Gambar</th>
        <th>Nama</th>
        <th>Kategori</th>
        <th>Merek</th>
        <th>Harga</th>
      </tr>
      <?= $i = 1; ?>
      <?php foreach ($elektronik as $e) : ?>
        <tr>
          <td><?= $i; ?></td>
          <td>
            <a href="ubah.php?id=<?= $e['id'] ?>"><button>Ubah</button></a>
            <a href="hapus.php?id=<?= $e['id'] ?>" onclick="return confirm('Hapus Data??')"><button>Hapus</button></a>
          </td>
          <td><img src="../assets/Gambar/<?= $e['gambar']; ?>"></td>
          <td><?= $e['nama']; ?></td>
          <td><?= $e['kategori']; ?></td>
          <td><?= $e['merek']; ?></td>
          <td><?= $e['harga']; ?></td>
        </tr>
        <?php $i++; ?>
      <?php endforeach; ?>
    <?php endif ?>
  </table>

</body>

</html>