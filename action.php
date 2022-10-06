<?php

    include 'data.php';
    $nama = $_GET['input'];

    foreach ($produk as $n ) {
        if ($nama == $n['nama']) {
            $img = $n['img'];
            $harga = $n['harga'];
        };
    }

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tampil Detail Produk</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <div class="container">
        <h3>Tampil produk yang dipilih</h3>
        <div class="card">
            <figure>
                <img src="img/<?= $img ?>" alt="produk">
            </figure>
        </div>
        <div class="deskripsi">
            <table>
                <tr>
                    <td>Nama</td>
                    <td> : </td>
                    <td><?= $nama ?></td>
                </tr>
                <tr>
                    <td>Harga</td>
                    <td> : </td>
                    <td><?= $harga ?></td>
                </tr>
            </table>
        </div>
        <a href="index.php">Kembali</a>
    </div>

</body>
</html>