<?php

//menghubungkan dengan file php lainnya
require 'php/function.php';

//melakukan query
$elektronik = query("SELECT * FROM elektronik")

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
        <?php $a = 1; ?>

        <?php foreach ($elektronik as $e) : ?>
            <tr>
                <td><?php echo $a; ?></td>
                <td><?php echo $e['nama'];  ?></td>
                <td><?php echo $e['kategori'];  ?></td>
                <td><?php echo $e['merek'];   ?></td>
                <td><?php echo $e['harga']; ?></td>
                <td><img src="assets/Gambar/<?= $e['gambar']; ?>"></td>
            </tr>
            <?php $a++; ?>
        <?php endforeach; ?>

    </table>

    <h5 align="center"></h5>

</body>

</html>