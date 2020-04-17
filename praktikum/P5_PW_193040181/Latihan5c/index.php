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
        h3 {
            text-align: center;
        }
    </style>
</head>

<body>
    <h3>Nama Produk</h3>
    <table border="5" cellpadding="8" cellspacing="0">
        <tr>
            <?php foreach ($elektronik as $e) : ?>
                <td>
                    <a href="php/detail.php?id=<?= $e['id'] ?>">
                        <?= $e["nama"] ?>
                    </a>
                </td>
            <?php endforeach; ?>
        </tr>
    </table>


</body>

</html>