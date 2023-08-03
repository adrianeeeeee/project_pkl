<?php
include "koneksi.php";

$sql = "SELECT * FROM website";
$query = mysqli_query($koneksi, $sql);
?>



<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css" />

  <!-- My CSS -->
  <link rel="stylesheet" href="scss/daftar.css" />

  <link rel="shorcut icon" href="img/favicon.ico">
  <title>Komiklovers | List Website</title>
</head>

<body>


  <?php

  include 'navbar.php';

  ?>

  <!-- End tab content -->


  <!-- End Beranda -->

  <!-- Start Daftar -->

  <div class="container">
    <!-- <h1 class="maintitle">Komiku.id</h1> -->
    <main class="grid">
      <?php while ($website = mysqli_fetch_assoc($query)) { ?>

        <article>
          <a href="<?= $website['link']; ?>">
            <h2><?= $website['nama']; ?></h2>
            <img src="file/<?= $website['gambar']; ?>" />
            <div class="konten">
              <p><?= $website['deskripsi']; ?>
              </p>
            </div>
          </a>
        </article>
      <?php } ?>
  </div>

  <footer>
    <div class="footer-content">
      <img class="img" src="img/logo-color-removebg-preview.png" alt="">
      <h3>Komiklovers</h3>
      <p></p>
      <ul class="social">
        <!-- <li><a href="https://www.instagram.com/hv__adrian6/"><i class="bi bi-instagram"></i></a></li>
        <li><a href="https://www.linkedin.com/in/adrian-farrel-aziz-yatyoga-31ab9826a/"><i class="bi bi-linkedin"></i></a></li> -->
      </ul>
    </div>
    <div class="footer-bottom">
      <p>copyright &copy;2023 Komiklovers. designed by <span>KLdev</span></p>
    </div>
  </footer>

  <!-- End Daftar -->

  <!-- Optional JavaScript; choose one of the two! -->

  <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->


  <!-- Option 2: jQuery, Popper.js, and Bootstrap JS
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    -->
</body>

</html>