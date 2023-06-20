<?php
require 'koneksi.php';
require 'dana.php';
$donatur = query("SELECT * FROM db_donatur");
?>
<!DOCTYPE html>
<html lang="id" dir="ltr">

<head>
  <meta charset="utf-8">
  <title>Data</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="css/styles.css">
  <link rel="stylesheet" href="css/banner-bar.css">
  <link rel="stylesheet" href="css/respon.css">
</head>

<body>
  <!-- Navbar -->
  <header>
    <img src="assets/img/logowk.png" alt="" width="55">
    <h1 id="nav-title">SMK Wikrama Bogor</h1>
    <nav>
      <ul>
        <li><a href="#">Beranda</a></li>
        <li><a href="#carawakaf">Cara Waqaf</a></li>
        <li><a href="#datadonatur">Data Waqaf</a></li>
        <li><a href="#gallery">Gallery</a></li>
        <li><a href="admin.php" class="fas fa-user"></a></li>
      </ul>
    </nav>
  </header>
  <section class="sec1">
    <h3>Masjid Besar SMK Wikrama Bogor</h3>
    <h1>Mari <span class="color1">Tingkatkan Keimanan</span> Masyarakat SMK Wikrama Bogor.</h1>
    <img src="assets/img/deskr-masjid.png">
  </section>
  <div class="button1"><a href="bantuan.php"><button>Beri Bantuan shodaqoh</button></a></div>
  <br><br>
  <div class="banner">
    <img src="assets/img/banner-masjid.jpeg" alt="Banner Gambar" width="92%" style=" border-radius: 10px;">
  </div>
  <br><br>

  <!--Data terkumpul-->
  <div class="totalitas" style="display: flex; justify-content: center; padding-top: 3rem;">
    <div class="cardana" style="box-shadow: 1px 2px 5px 2px black; width: 85%; display: flex; justify-content: center;  padding-top: 3rem;">
      <div class="danac-main" style="background-color: white; width: 100%;">
        <div class="danac-grid" style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); grid-gap: 10px; padding: 0 20px; max-width: 100%; justify-items: center;">
          <section class="danac-1">
            <h3 style="font-size: 20px; text-align: center; color: #555;">Total Target Dana</h3>
            <br>
            <h1 style="font-size: 35px; text-align: center; color: black;">Rp.50.000.000,00</h1>
            <br><br>
          </section>
          <section class="danac-2">
            <h3 style="font-size: 20px; text-align: center; color: #555;">Total Dana Terkumpul</h3>
            <br>
            <h1>
              <?= '<h1 style="font-size: 35px; text-align: center; color: black;"> Rp: ' . $format_nominal . ',00</h1>'; ?>
            </h1>
            <br><br>
          </section>
          <section class="danac-3">
            <h3 style="font-size: 20px; text-align: center; color: #555;">Total Donatur</h3>
            <br>
            <h1 style="font-size: 25px; text-align: center; color: black;">
              <div class="naon">
                <?php $angka = 0; ?>
                <?php foreach ($donatur as $don) : ?>
                  <?php $angka++ ?>
                <?php endforeach; ?>
                <h1> <?= $angka; ?></h1>
              </div>
            </h1>
            <br>
          </section>
        </div>
        <div style="display: flex; justify-content: center">
          <div class="progress-bar" style="width: 50%; background-color: #ddd; height: 30px; border-radius: 10px; overflow: hidden;">
            <div class="progress" style="background-color: #1F3984; width: <?= $bar ?? 0 ?>%;"></div>
            <span class="progress-text" style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); color: white;"></span>
          </div>
        </div>
        <br>
        <h1>
          <?= '<h1 style="color: black; display: flex; justify-content: center;">' . $bar  . '%</h1>'; ?>
        </h1>
        <br><br><br>
        <div style=" background-color: #1F3984;  height: 80px; display: flex; justify-content: center; align-items: center;">
          <marquee behavior="scroll" direction="left" scrollamount="20" style=" width: 100%; white-space: nowrap;overflow: hidden;">
            <?php foreach ($donatur as $dnt) { ?>
              <h3 style="display: inline-block; margin: 0; padding-right: 10px; color: #FFFFFF;">
                <?= $dnt["nama_donatur"]; ?>
                <h3 style="display: inline-block; margin: 0; padding-right: 10px; color:#FFFFFF;">-</h3>
              </h3>
              <h3 style="display: inline-block; margin: 0; padding-right: 50px; color: yellow;">
                <?= $dnt["kategori"]; ?>
                Rp. <?= number_format($dnt['nominal'], 2, ',', '.'); ?>
              </h3>
            <?php } ?>
          </marquee>
        </div>
      </div>
    </div>
  </div>
  <br>

  <!-- section2-->
  <section class="sec2">
    <h1><span class="color1">Manfaat</span> Wakaf, Infaq, Shodaqoh</h1>
    <h3>Berikut Adalah Beberapa Keutamaan Wakaq, Infaq Shodaqoh Yang Akan Anda Dapatkan.</h3>
    <div class="container">
      <div class="top-cards">
        <div class="card" style="border-radius: 20px;">
          <img src="assets/img/lov.png" alt="" width="75"> <br><br>
          <span>Menjadikan hati lebih tenang</span><br><br> Kami memberikan harga yang terbaik dibandingkan
          dengan kompetitor kami
        </div>
        <div class="card" style="border-radius: 20px;">
          <img src="assets/img/ceklis.png" alt="" width="75"> <br><br>
          <span>Terbukanya pintu rezeki</span> <br><br>Allah akan membuka pintu rezeki dari arah yang tidak
          dikira sebelummnya
        </div>
      </div>
      <div class="bottom-cards">
        <div class="card" style="border-radius: 20px;">
          <img src="assets/img/perisai.png" alt="" width="75"> <br><br>
          <span>Menjauhkan dari bahaya</span> <br><br>Rasulullah SAW pernah bersabda: "Bersegeralah untuk
          bersedekah , karena musibah dan bencana tidak bisa mendahului sedekah."
        </div>
        <div class="card" style="border-radius: 20px;">
          <img src="assets/img/bintang.png" alt="" width="75"> <br><br>
          <span>Pahala yang tak terputus</span><br><br> ini akan menolong kita di akhirat nantinya, juga dapat
          menyelamatkannya dari api neraka.
        </div>
      </div>
    </div>
    <div class="image-container">
      <img src="assets/img/bersama.png" alt="Gambar" style="border-radius: 20px;">
    </div>
  </section>

  <!-- section 3-->
  <section class="sec3" id="carawakaf">
    <h1><span class="color1">Cara Melakukan</span> Wakaf, infaq, Shodaqoh.</h1>
    <h3>Berikut Adalah Cara Melakukan Wakaf, infaq Shodaqoh Untuk Membantu Pembangunan Masjid Besar SMK Wikrama Bogor
    </h3>
    <div class="card-container2">
      <div class="card2" style="border-radius: 20px;">
        <h3> <span style="color: #25377F;">01</span><br> Isi Form Data Diri</h3>
        <p>Isikan form pengisian yang disediakan di form data diri, isikan dengan data diri anda dengan teliti.</p>
      </div>
      <div class="card2" style="border-radius: 20px;">
        <h3> <span style="color: #25377F;">02</span><br> Isikan Nominal Shodaqoh</h3>
        <p>
          Isikan nominal yang akan anda shodaqohkan, pastikan isi nominal dengan seiklasnya tanpa ada paksaan apapun.
        </p>
      </div>
      <div class="card2" style="border-radius: 20px;">
        <h3><span style="color: #25377F;">03</span> <br>Upload Bukti Pembayaran</h3>
        <p>
          Pilih motode pembayaran dan upload bukti pembayaranya.
        <p>
      </div>
      <div class="card2" style="border-radius: 20px;">
        <h3><span style="color: #25377F;">04</span> <br> Verifikasi Pembayaran</h3>
        <p>
          Pilih motode pembayaran dan upload bukti pembayaranya.</p>
      </div>
    </div>
  </section>

  <!-- Data Donatur (Tabel) -->
  <section class="sec4" id="datadonatur">
    <h1><span class="color1">Data Donatur</span> Wakaf, infaq Shodaqoh.</h1>
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
            </tr>
            <?php $i++; ?>
          <?php } ?>
        </tbody>
      </table>
    </div>
  </section>
  <section class="sec5" id="gallery">
    <h1><span class="color1">Gallery</span> Masjid Besar SMK Wikrama Bogor.</h1>
    <h3>Berikut adalah Gallery Masjid Besar SMK Wikrama Bogor.</h3>
    <div class="card-container5" > 
      <div class="card5" style="border-radius: 20px;">
        <img src="assets/img/gallery-masjid/masjid1.jpeg">
      </div>
      <div class="card5" style="border-radius: 20px;">
        <img src="assets/img/gallery-masjid/masjid2.jpeg">
      </div>
      <div class="card5" style="border-radius: 20px;">
        <img src="assets/img/gallery-masjid/masjid3.jpeg">
      </div>
      <div class="card5" style="border-radius: 20px;">
        <img src="assets/img/gallery-masjid/masjid4.jpeg">
      </div>
      <div class="card5" style="border-radius: 20px;">
        <img src="assets/img/gallery-masjid/masjid5.jpeg">
      </div>
      <div class="card5" style="border-radius: 20px;">
        <img src="assets/img/gallery-masjid/masjid6.jpeg">
      </div>
  </section>
  <!--footer-->
  <div class="clearfix">
    <footer class="footer-main">
      <div class="footer-grid">
        <section class="footer-1">
          <img src="assets/img/logowk.png" alt="" width="55">
          <h1 style="float:right; padding: 15px;">SMK Wikrama Bogor</h1>
          <br><br>
          <h3>Alamat</h3>
          <h3>Jl. Raya Wangun <br> Keluarahan Sindangsari <br> Bogor Timur 16720</h3>
          <br>
          <hr>
          <br>
          <h3>Telepon <br> 0251-8242411 / <br> 082221718035 (whatsapp)</h3>
          <br>
          <hr>
          <br>
          <i class="fa-brands fa-facebook"></i>
          <i class="fa-brands fa-twitter"></i>
          <i class="fa-brands fa-instagram"></i>
          <i class="fa-brands fa-youtube"></i>
        </section>
        <section class="footer-2">
          <br><br>
          <h4>Tentang Wikrama</h4>
          <p>Sejarah</p>
          <p>Peraturan</p>
          <p>Rencana Stategi & Prestasi</p>
          <p>Yayasan</p>
          <p>Struktur Organisasi</p>
          <p>Cabang</p>
          <p>Penghargaan</p>
          <p>Kerjasama</p>
        </section>
        <section class="footer-3">
          <br><br>
          <h4>Pesan</h4>
          <?php
          if (isset($_POST['submit'])) {
            unset($_POST);
          }
          ?>
          <div class="input-container">
            <form method="POST" action="">
            <div class="input-column">
              <input type="text" name="input1" placeholder="Nama" style="height: 25px; ">
            </div>
            <div class="input-column">
              <input type="text" name="input2" placeholder="Email" style="height: 25px;">
            </div>
            <div class="input-column">
              <input type="text" name="input3" placeholder="Pesan Anda" style="height: 100px;">
            </div>
            <br>
            <button name="submit" style="width: 75px">Kirim</button>
        </form>
          </div>
        </section>
      </div>
    </footer>
  </div>
</body>

</html>