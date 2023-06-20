<?php

require 'koneksi.php';
$conn = mysqli_connect("localhost", "root", "", "db_masjid");

if (isset($_POST["submit"])) {
  if (tambah($_POST) > 0) {
    echo "<script> alert('shodaqoh berhasil')
                       document.location.href = 'index.php'
                       </script>";
  } else {
    echo "<script>
        alert('shodaqoh gagal')
        document.location.href = 'index.php'
        </script>";
  };
};
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Formulir</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  <style>
    html {
      display: flex;
      justify-content: center;
    }
  </style>
</head>

<body>
  <br>
  <h1>Mari Shodaqoh</h1>
  <br>
  <form action="" method="post" enctype="multipart/form-data">
    <label class="form-label" for="">Nama : </label>
    <input style="width:350px;" class="form-control" type="text" name="nama_donatur" id="nama" required="" autocomplete="off">
    <br>
    <label class="form-label" for="">Paket : </label>
    <select class="form-control" name="paket" id="paket" style="width: 350px;" required="" autocomplete="off">
      <option value="">Pilih kategori</option>
      <option value="Paket 1">Paket 1</option>
    </select>
    <br>
    <label class="form-label" for="kategori">Kategori : </label>
    <select class="form-control" name="kategori" id="kategori" style="width: 350px;" required="" autocomplete="off">
      <option value="">Pilih kategori</option>
      <option value="uang">Uang</option>
    </select>
    <br>
    <label class="form-label" for="">Nominal : </label>
    <input style="width:350px;" class="form-control" type="number" name="nominal" id="nominal" placeholder="Masukan nominal tanpa titik/koma misal" required="" autocomplete="off">
    <br>
    <label class="form-label" for="">Metode : </label>
    <select class="form-control" name="metode" id="metode" style="width: 350px;" required="" autocomplete="off">
      <option value="">Pilih Metode</option>
      <option value="Bank">Bank</option>
      <option value="POSPAY">POSPAY</option>
      <option value="Lainnya">Lainnya</option>
    </select>
    <br>
    <label class="form-label" for="">Bukti : </label>
    <img src="img.png" alt="" style=" height: 150px;width: 150px; object-fit: cover; background: #dfdfdf;">
    <br><br>
    <input style="width:250px;" class="form-control" type="file" name="gambar" id="gambar" required="" autocomplete="off">
    <script src="js/bantuan.js"></script>
    <br>
    <button type="submit" name="submit">kirim</button>
    <button> <a style="text-decoration: none; color:black;" href="index.php">Kembali</a></button>
  </form>


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>

</html>