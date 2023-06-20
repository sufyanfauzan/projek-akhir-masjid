<?php
session_start();

if (!isset($_SESSION["Login"])) {
  header("Location: login.php");
  exit;
}

require 'koneksi.php';
$donatur = query("SELECT * FROM db_donatur");
?>

<html>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Hal-Login</title>
  <link rel="stylesheet" href="assets/css/styles.css">
</head>
<style>
    html {
        display: flex;
        justify-content: center;
    }
    button {
    width: 10%;
    height: 4%;
    }
</style>
<body>


<body>
  <section class="sec4" id="datadonatur">
    <h2>Data Donatur</h2>
    <h2>Selamat Datang di Halaman Admin</h2>
    <br>
    <a href="logout.php"><button>Logout</button></a>
    <br><br>
    <div class="table-responsive">
      <table border="1" cellpadding="10" cellspacing="0">
        <thead>
          <tr>
            <th>No</th>
            <th>Nama Donatur</th>
            <th>Donatur ID</th>
            <th>Paket</th>
            <th>kategori</th>
            <th>Nominal/Barang</th>
            <th>Metode</th>
            <th>Bukti</th>
            <th>Aksi</th>
          </tr>
        </thead>
        <tbody>
          <?php $i = 1; ?>
          <?php foreach ($donatur as $dnt) { ?>
            <tr>
              <td><?= $i; ?></td>
              <td><?= $dnt["nama_donatur"]; ?></td>
              <td><?= $dnt["id"]; ?></td>
              <td><?= $dnt["paket"]; ?></td>
              <td><?= $dnt["kategori"]; ?></td>
              <td> Rp. <?= number_format($dnt['nominal'], 2, ',', '.'); ?></td>
              <td><?= $dnt["metode"]; ?></td>
              <td><img src="assets/bukti-donatur/<?= $dnt['gambar']; ?>" width="120"></td>
              <td>
                <a style="text-decoration: none; color:black;" class="btn btn-primary" href="delete.php?id=<?= $dnt["id"] ?>" onclick="return confirm('Hapus data?');">Delete</a>
            </tr>
            </tr>
            <?php $i++; ?>
          <?php } ?>
        </tbody>
      </table>
    </div>
  </section>
</body>

</html>