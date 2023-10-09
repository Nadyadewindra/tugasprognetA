<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Tugas Prognet</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Satisfy" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Laura
  * Updated: Sep 18 2023 with Bootstrap v5.3.2
  * Template URL: https://bootstrapmade.com/laura-free-creative-bootstrap-theme/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>
   <!-- ======= Header ======= -->
   <header id="header" class="fixed-top d-flex justify-content-center align-items-center header-transparent">

<nav id="navbar" class="navbar">
  <ul>
    <li><a class="nav-link scrollto active" href="index.html#hero">Home</a></li>
    <li><a class="nav-link scrollto active" href="index.html#about">About Me</a></li>
    <li><a class="nav-link scrollto active" href="tugasjavascripts.html">Tugas JavaScript</a></li>
      </ul>
  </ul>
  <i class="bi bi-list mobile-nav-toggle"></i>
</nav><!-- .navbar -->

</header><!-- End Header -->

  <main id="main"><!-- Start main -->

  <!-- ======= Start Hasil Form ======= -->
  <section id="form" class="form-mf sect-pt4 route">
    <div class="container mt-5">
      <h1 class="text-center">Hasil Form Biodata</h1>
        <table class="table" border="2">
          <thead>
            <?php
              if ($_SERVER["REQUEST_METHOD"] == "POST") {
                // kolom nama lengkap
                echo "<tr>";
                echo "<td>"."Nama Lengkap"."</td>";
                echo "<td>".":"."</td>";
                echo "<td>".$fullname = $_POST['fullname']."</td>";
                echo "</tr>";
                // kolom nim
                echo "<tr>";
                echo "<td>"."NIM"."</td>";
                echo "<td>".":"."</td>";
                echo "<td>".$nim = $_POST['nim']."</td>";
                echo "</tr>";
                // kolom e-mail
                echo "<tr>";
                echo "<td>"."E-mail"."</td>";
                echo "<td>".":"."</td>";
                echo "<td>".$email = $_POST['email']."</td>";
                echo "</tr>";
                // kolom username
                echo "<tr>";
                echo "<td>"."Username"."</td>";
                echo "<td>".":"."</td>";
                echo "<td>".$username = $_POST['username']."</td>";
                echo "</tr>";
                // kolom agama
                echo "<tr>";
                echo "<td>"."Agama"."</td>";
                echo "<td>".":"."</td>";
                echo "<td>".$agama = $_POST['agama']."</td>";
                echo "</tr>";
                // kolom jenis kelamin
                echo "<tr>";
                echo "<td>"."Jenis Kelamin"."</td>";
                echo "<td>".":"."</td>";
                echo "<td>".$jeniskelamin = $_POST['jeniskelamin']."</td>";
                echo "</tr>";
                // kolom kegiatan
                if (isset($_POST['kegiatan'])) {
                    $kegiatan = $_POST['kegiatan'];
                    echo "<tr>";
                    echo "<td>"."Kegiatan"."</td>";
                    echo "<td>".":"."</td>";
                    echo "<td>"."Kegiatan yang dilakukan hari ini "."</td>";
                    echo "</tr>";
                    for ($i=0; $i < count($kegiatan) ; $i++){
                        echo "<tr>";
                        echo "<td>".""."</td>";
                        echo "<td>".""."</td>";
                        echo "<td>"."- ".$kegiatan[$i]."</td>";
                        echo "</tr>";
                    }
                }
              }
            ?>
          </thead>
        </table>
      <a href="tugasjavascripts.html" class="previous">&laquo; Previous</a>
    </div>
  </section>
  <!-- ======= End Hasil Form ======= -->

</main><!-- End #main -->

 <!-- ======= Footer ======= -->
 <footer id="footer"class="bg-image" style="background-image: url(assets/img/dya2-bg.jpg)">
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