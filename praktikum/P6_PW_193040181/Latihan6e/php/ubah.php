<?php
require 'function.php';

$id = $_GET['id'];

$e = query("SELECT * FROM elektronik WHERE id = $id")[0];


if (isset($_POST['ubah'])) {
  if (ubah($_POST) > 0) {
    echo "<script>
          alert('Data Berhasil diubah!');
          document.location.href = 'admin.php';
          </script>";
  } else {
    "<script>
          alert('Data Gagal diubah!');
          document.location.href = 'admin.php';
          </script>";
  }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Form Ubah Data Barang</title>
</head>

<body>
  <h3>Form Ubah Data Barang</h3>
  <form action="" method="post">
    <input type="hidden" name="id" id="id" value="<?= $e['id']; ?>">
    <ul>

      <li>
        <label for="gambar">Gambar :</label><br>
        <input type="text" name="gambar" id="gambar" required value="<?= $e['gambar']; ?>"><br><br>
      </li>

      <li>
        <label for="nama">Nama :</label><br>
        <input type="text" name="nama" id="nama" required value="<?= $e['nama']; ?>"><br><br>
      </li>

      <li>
        <label for="kategori">Kategori :</label><br>
        <input type="text" name="kategori" id="kategori" required value="<?= $e['kategori']; ?>"><br><br>
      </li>

      <li>
        <label for="merek">Merek :</label><br>
        <select type="text" name="merek" id="merek" required><br>
          <option value="">----------Pilih Merek----------</option>
          <option value="OPPO">OPPO</option>
          <option value="SAMSUNG">SAMSUNG</option>
          <option value="ASUS">ASUS</option>
          <option value="APPLE">APPLE</option>
        </select>
      </li>

      <li>
        <label for="harga">Harga :</label><br>
        <input type="text" name="harga" id="harga" required value="<?= $e['harga']; ?>"><br><br>
      </li>
      <br>
      <button type="submit" name="ubah">Ubah Data!</button>
      <button type="submit">
        <a href="../index.php" style="text-decoration: none; color: black;">Kembali</a>
      </button>
    </ul>
  </form>
</body>

</html>