<?php
$conn = mysqli_connect("localhost", "root", "", "pw_193040181");
$result = mysqli_query($conn, "SELECT * FROM mahasiswa");
$rows = [];

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Daftar Mahasiswa</title>
</head>

<body>
  <h3>Daftar Mahasiswa</h3>
  <table border='1' cellpandding='10' cellspacing='0'>
    <tr>
      <th>id</th>
      <th>gambar</th>
      <th>nrp</th>
      <th>nama</th>
      <th>email</th>
      <th>jurusan</th>
      <th>aksi</th>
    </tr>

    <?php $i = 1 ?>
    <?php while ($row = mysqli_fetch_assoc($result)) : ?>
      <tr>
        <td><?php echo $i; ?></td>
        <td><img src="gambar/<?= $row['gambar']; ?>"></td>
        <td><?php echo $row['nama'];  ?></td>
        <td><?php echo $row['nrp'];  ?></td>
        <td><?php echo $row['email'];   ?></td>
        <td><?php echo $row['jurusan']; ?></td>
        <td><a href="">Ubah</a> | <a href="">Hapus</a></td>
      </tr>
      <?php $i++; ?>
    <?php endwhile; ?>
  </table>
</body>

</html>