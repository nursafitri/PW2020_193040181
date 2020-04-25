<?php
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
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tambah Data</title>
</head>

<body>
  <h3>Form Tambah Data Barang</h3>
  <form action="" method="post">
    <ul>

      <li>
        <label for="gambar">Gambar :</label><br>
        <input type="text" name="gambar" id="gambar" required><br><br>
      </li>

      <li>
        <label for="nama">Nama :</label><br>
        <input type="text" name="nama" id="nama" required><br><br>
      </li>

      <li>
        <label for="kategori">Kategori :</label><br>
        <input type="text" name="kategori" id="kategori" required><br><br>
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
        <input type="text" name="harga" id="harga" required><br><br>
      </li>
      <br>
      <button type="submit" name="tambah">Tambah Data!</button>
      <button type="submit">
        <a href="../index.php" style="text-decoration: none; color: black;">Kembali</a>
      </button>
    </ul>
  </form>
</body>

</html>