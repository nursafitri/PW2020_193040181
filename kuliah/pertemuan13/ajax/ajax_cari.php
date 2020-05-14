<?php

require '../functions.php';

$mahasiswa = cari($_GET['keyword']);

?>

<table border="1" cellpadding="10" cellspacing="0">

  <tr>
    <th>#</th>
    <th>Foto</th>
    <th>Nama</th>
    <th>Aksi</th>
  </tr>

  <?php if (empty($mahasiswa)) : ?>
    <tr>
      <td colspan="4">
        <p>data mahasiswa tidak ditemukan</p>
      </td>
    </tr>
  <?php endif; ?>

  <?php $i = 1;
  foreach ($mahasiswa as $m) : ?>
    <tr>
      <td><?= $i++; ?></td>
      <td><img src="../gambar/<?= $m['gambar']; ?>" width="70"></td>
      <td><?= $m['nama']; ?></td>
      <td>
        <a href="../detail.php?id=<?= $m['id']; ?>">lihat detail</a>
      </td>
    </tr>
  <?php endforeach; ?>

</table>