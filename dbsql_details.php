<?php
    $servername = "prognet.localnet";
    $username = "2205551021";
    $password = "2205551021";
    $dbname = "db_2205551021";

    // membentuk koneksi ke database mysql
    $conn = new mysqli($servername, $username, $password, $dbname);

    $idtodetails=$_GET['nim'];
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Tugas DbSQL Biodata</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/logo-home-page.png" rel="icon">
  <link href="assets/img/logo-home-page.png" rel="logo-icon">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
</head>

<body>
  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top bg-image" style="background-image: url(assets/img/home-bg.jpg)">
    <div class="container d-flex align-items-center justify-content-between">
      <h1 class="logo"><a href="index.html">Tugas Prognet</a></h1>
  <!-- ======= Start Navbar ======= -->
  <nav id="navbar" class="navbar">
    <ul>
      <li><a class="nav-link scrollto" href="index.html">Home</a></li>
      <li><a class="nav-link scrollto" href="index.html#about">About Me</a></li>
      <li><a class="nav-link scrollto" href="dbsql_select.php">Tampil Biodata</a></li>
    </ul>
    <i class="bi bi-list mobile-nav-toggle"></i>
  </nav>
  <!-- ======= End navbar ======= -->
    </div>
  </header>
  <!-- ======= End Header ======= -->

  <main id="main"><!-- Start main -->

  <!-- ======= Start Hasil Form ======= -->
  <section id="form" class="form-mf sect-pt4 route">
    <div class="container mt-5">
      <h1 class="text-center mb-5">Biodata Mahasiswa</h1>
        <table class="table" border="2">
          <thead>
            <?php
                $sql = "SELECT * FROM tb_biodata WHERE nim='$idtodetails'";
                $result = $conn->query($sql);
                while($row = $result->fetch_assoc()) {
                    // kolom nim
                    echo "<tr>";
                    echo "<td>"."NIM"."</td>";
                    echo "<td>".":"."</td>";
                    echo "<td>".$row['nim']."</td>";
                    echo "</tr>";
                    // kolom nama lengkap
                    echo "<tr>";
                    echo "<td>"."Nama Lengkap"."</td>";
                    echo "<td>".":"."</td>";
                    echo "<td>".$row['nama_lengkap']."</td>";
                    echo "</tr>";
                    // kolom jenis kelamin
                    echo "<tr>";
                    echo "<td>"."Jenis Kelamin"."</td>";
                    echo "<td>".":"."</td>";
                    echo "<td>".$row['jenis_kelamin']."</td>";
                    echo "</tr>";
                    // kolom alamat
                    echo "<tr>";
                    echo "<td>"."Alamat"."</td>";
                    echo "<td>".":"."</td>";
                    echo "<td>".$row['alamat']."</td>";
                    echo "</tr>";
                    // kolom agama
                    echo "<tr>";
                    echo "<td>"."Agama"."</td>";
                    echo "<td>".":"."</td>";
                    echo "<td>".$row['agama']."</td>";
                    echo "</tr>";
                    // kolom tanggal lahir
                    echo "<tr>";
                    echo "<td>"."Tanggal Lahir"."</td>";
                    echo "<td>".":"."</td>";
                    echo "<td>".$row['tgl_lahir']."</td>";
                    echo "</tr>";
                    // kolom e-mail
                    echo "<tr>";
                    echo "<td>"."E-mail"."</td>";
                    echo "<td>".":"."</td>";
                    echo "<td>".$row['email']."</td>";
                    echo "</tr>";
                    // kolom hobi
                    echo "<tr>";
                    echo "<td>"."Hobi"."</td>";
                    echo "<td>".":"."</td>";
                    echo "<td>".$row['hobi']."</td>";
                    echo "</tr>";
                }
            ?>
          </thead>
        </table>
      <a href="dbsql_select.php" class="previous">&laquo; Previous</a>
    </div>
  </section>
  <!-- ======= End Hasil Form ======= -->

</main><!-- End #main -->

   <!-- ======= Footer ======= -->
   <footer id="footer" class="bg-image" style="background-image: url(assets/img/dya2-bg.jpg);">
    <div class="container">
      <h3>Nadya Dewindra</h3>
      <p>Tugas Pemrograman Internet</p>
      <div class="social-links">
        <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
        <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
        <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
        <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
        <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
      </div>
      <div class="copyright">
        &copy; Copyright <strong><span>Nadya</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/laura-free-creative-bootstrap-theme/ -->
        Designed by <a href="https://bootstrapmade.com/">Nadya</a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/typed.js/typed.umd.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>
</body>

</html>