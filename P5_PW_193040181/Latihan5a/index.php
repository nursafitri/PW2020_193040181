<?php

//Melakukan koneksi ke database
$conn = mysqli_connect("localhost", "root", "") or die("koneksi ke DB gagal");

//Memilih database
mysqli_select_db($conn, "tubes_193040181") or die("Database salah!");

//query mengambil objek dari tabel didalam database
$result = mysqli_query($conn, "SELECT * FROM elektronik");

?>

<html>

<head>
    <title>Index</title>
    <style>
        h5 {
            text-decoration: none;
            color: black;
            font-size: 25px;
        }
    </style>
</head>

<body>

    <table border="1" cellpadding="8" cellspacing="0">

        <tr>
            <th>id</th>
            <th>nama</th>
            <th>kategori</th>
            <th>merek</th>
            <th>harga</th>
            <th>gambar</th>
        </tr>
        <?php $a = 1 ?>

        <?php while ($row = mysqli_fetch_assoc($result)) : ?>
            <tr>
                <td><?php echo $a; ?></td>
                <td><?php echo $row['nama'];  ?></td>
                <td><?php echo $row['kategori'];  ?></td>
                <td><?php echo $row['merek'];   ?></td>
                <td><?php echo $row['harga']; ?></td>
                <td><img src="assets/Gambar/<?= $row['gambar']; ?>"></td>
            </tr>
            <?php $a++; ?>
        <?php endwhile; ?>

    </table>

    <h5 align="center"></h5>

</body>

</html>