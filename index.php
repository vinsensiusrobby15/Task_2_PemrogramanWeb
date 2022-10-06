<?php 

include 'data.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Tampil Daftar Produk</title>
</head>
<body>
<h1>Toko (Tidak)Serbaguna</h1>
  <div class="container">
    <table>
      <caption>List Barang</caption>
      <thead>
        <tr>
          <th>Nama</th>
          <th>Harga</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach ($produk as $n): ?>
          <tr>
              <td> <?= $n['nama'] ?></td>
              <td> <?= $n['harga'] ?></td>
          </tr>
        <?php endforeach; ?>
      </tbody>
    </table>
    <main>

          <form action="action.php" method="get">
            <div id="label">
              <label for="input">Pilih Barang</label>
            </div>
            <select name="input" id="input">
            <?php foreach ($produk as $n): ?>
                  <option value="<?= $n['nama'] ?>"><?= $n['nama'] ?></option>
            <?php endforeach; ?>
            </select>
            <input type="submit" value="PILIH">
          </form>

    </main>
  </div>
</body>
</html>

