<?php
//menghubungkan dengan file php lainnya
require 'php/function.php';

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

<html>

<head>
    <title>Index</title>
    <style>
        h3 {
            text-align: center;
        }

        .produk {
            text-align: center;
        }
    </style>
</head>

<body style="background-color: lightblue">
    <h3>Produk</h3>
    <div class="produk">
        <div>
            <table>
                <form action="" method="get">
                    <input type="text" name="keyword" autofocus autocomplete="off">
                    <button type="submit" name="cari">Cari!</button>
                </form>

                <?php if (empty($elektronik)) : ?>
                    <h1>Data tidak ditemukan</h1>
                <?php else : ?>
                    <?php foreach ($elektronik as $e) : ?>
                        <td>
                            <a href="php/detail.php?id=<?= $e['id'] ?>">
                                <?= $e["nama"] ?>
                                <br><br>
                            </a>
                        </td>
                    <?php endforeach; ?>
                <?php endif; ?>
            </table>
        </div>
        <a href="php/login.php">
            <button>Produk</button>
        </a>
    </div>


</body>

</html>