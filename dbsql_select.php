<?php
    $servername = "prognet.localnet";
    $username = "2205551021";
    $password = "2205551021";
    $dbname = "db_2205551021";

    // membentuk koneksi ke database mysql
    $conn = new mysqli($servername, $username, $password, $dbname);
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
      <h1 class="text-center mb-5">Tampil Biodata</h1>
      <table class="table table-bordered text-center">
      <thead>
        <tr>
          <th>NIM</th>
          <th>Nama Lengkap</th>
          <th>Action</th>
        </tr>
      </thead>
      <tbody>
        <?php
          $sql = "SELECT nim, nama_lengkap FROM tb_biodata";
          $result = $conn->query($sql);
          while($row = $result->fetch_assoc()) {
        ?>

        <tr>
          <td><?php echo $row['nim']; ?></td>
	        <td><?php echo $row['nama_lengkap']; ?></td>
          <td>
          <a class="btn btn-warning" href="dbsql_details.php?nim=<?php echo $row['nim']; ?>">Detail</a>
          <a class="btn btn-info" href="dbsql_update.php?nim=<?php echo $row['nim']; ?>">Edit</a>
          <a class="btn btn-danger" href="dbsql_delete.php?nim=<?php echo $row['nim']; ?>">Hapus</a>
          </td>
        </tr>
      <?php
        }
      ?>
   </tbody>
      </table>
      <a href="tugas_dbsql.php" class="previous">&laquo; Previous</a>
    </div>
  </section>
  <!-- ======= End Hasil Form ======= -->

</main><!-- End #main -->

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