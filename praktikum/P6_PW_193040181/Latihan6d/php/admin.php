<?php
//menghubungkan dengan file php lainnya
require 'function.php';

//melakukan query
$elektronik = query("SELECT * FROM elektronik");

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
  <table border="1" cellpadding="13" cellspacing="0">

    <tr>
      <th>id</th>
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
  </table>
</body>

</html>