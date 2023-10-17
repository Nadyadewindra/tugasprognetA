<?php
    $servername = "prognet.localnet";
    $username = "2205551021";
    $password = "2205551021";
    $dbname = "db_2205551021";

    // membentuk koneksi ke database mysql
    $conn = new mysqli($servername, $username, $password, $dbname);

    if(isset($_POST['update'])){
        //mengambil data dari form//
        $nim=$_POST['nim'];
        $nama_lengkap=$_POST['fullname'];
        $jenis_kelamin=$_POST['jeniskelamin'];
        $alamat=$_POST['alamat'];
        $agama=$_POST['agama'];
        $tgl_lahir=$_POST['tgllahir'];
        $email=$_POST['email'];
        $hobi=$_POST['hobi'];

    // proses update
    $sql = "UPDATE tb_biodata SET
            nim ='$nim',nama_lengkap ='$nama_lengkap',jenis_kelamin ='$jenis_kelamin',alamat ='$alamat',agama ='$agama',tgl_lahir ='$tgl_lahir',email ='$email',hobi ='$hobi'
            WHERE nim ='$nim'";
    if ($conn->query($sql) === TRUE) {
        header("Location:dbsql_select.php");
        }
    }

    $idtoupdate=$_GET['nim'];

    $sql = "SELECT * FROM tb_biodata WHERE nim='$idtoupdate'";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
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
    <div class="container mt-4">
      <h1 class="text-center mb-2">Form Biodata</h1>
        <form name="formBiodata" action="" method="post" onsubmit="return validateForm()">
        <div class="form-group mb-3">
            <label><strong>NIM :</strong></label>
            <input type="text" name="nim" id="nim" placeholder="NIM" class="form-control" value="<?php echo $row['nim']; ?>">
          </div>
          <div class="form-group mb-3">
            <label><strong>Nama lengkap :</strong></label>
            <input type="text" name="fullname" id="fullname" placeholder="Nama Lengkap" class="form-control" value="<?php echo $row['nama_lengkap']; ?>">
          </div>
          <div>
            <label"><strong>Jenis Kelamin :</strong></label>
            <p><input class="me-1" type='radio' name='jeniskelamin' id="jeniskelamin" value='Laki - Laki'>Laki-laki</p>
            <p><input class="me-1" type='radio' name='jeniskelamin' id="jeniskelamin" value='Perempuan'>Perempuan</p>
            <p><input class="me-1" type='radio' name='jeniskelamin' id="jeniskelamin" value='Tidak ingin Memberi Tahu'>Yang Lain</p>
          </div>
          <div class="form-group mb-3">
            <label><strong>Alamat :</strong></label>
            <input type="text" name="alamat" id="fakultas" placeholder="alamat" class="form-control" value="<?php echo $row['alamat']; ?>">
          </div>
          <div class="form-group mb-3">
            <label><strong>Agama :</strong></label>
            <select name="agama" id="agama" class="form-control">
              <option selected>Pilih Agama Anda</option>
              <option value="Hindu">Hindu</option>
              <option value="Islam">Islam</option>
              <option value="Kristen Protestan">Kristen Protestan</option>
              <option value="Kristen Katolik">Kristen Katolik</option>
              <option value="Konghucu">Konghucu</option>
            </select>
          </div>
          <div class="form-group mb-3">
            <label><strong>Tanggal Lahir :</strong></label>
            <input type="date" name="tgllahir" id="tgllahir" class="form-control" placeholder="Tanggal Lahir" value="<?php echo $row['tgl_lahir']; ?>">
          </div>
          <div class="form-group mb-3">
            <label><strong>Email :</strong></label>
            <input type="email" name="email" id="email" placeholder="name@example.com" class="form-control" value="<?php echo $row['email']; ?>">
          </div>
          <div class="form-group mb-3">
            <label><strong>Hobi :</strong></label>
            <input type="text" name="hobi" id="hobi" class="form-control" placeholder="Hobi" value="<?php echo $row['hobi']; ?>">
          </div>
          <div>
            <button type="submit" name="update" value="update" class="btn btn-primary mb-4">Update</button>
          </div>
        </form>
      </div>
    <script>
      function validateForm() {
        // Validasi NIM
        if (document.forms["formBiodata"]["nim"].value == "") {
            alert("Masukkan NIM Anda");
            document.forms["formBiodata"]["nim"].focus();
            return false;
        }
        // Validasi Nama Lengkap
        if (document.forms["formBiodata"]["fullname"].value == "") {
            alert("Masukkan Nama Lengkap Anda");
            document.forms["formBiodata"]["fullname"].focus();
            return false;
        }
        // Validasi Jenis Kelamin
        var jeniskelamin = document.getElementsByName('jeniskelamin');
        var genValue = false;
          for(var i=0; i<jeniskelamin.length;i++){
            if(jeniskelamin[i].checked == true){
                genValue = true;    
            }
          }
          if(!genValue){
            alert("Pilih Jenis Kelamin Anda");
            return false;
          }
        // Validasi Alamat
        if (document.forms["formBiodata"]["alamat"].value == "") {
            alert("Masukkan Alamat Anda");
            document.forms["formBiodata"]["alamat"].focus();
            return false;
        }
        // Validasi Agama
        if (document.forms["formBiodata"]["agama"].selectedIndex < 1) {
            alert("Pilih Agama Anda");
            document.forms["formBiodata"]["agama"].focus();
            return false;
        }
        // Validasi Tanggal Lahir
        if (document.forms["formBiodata"]["tgllahir"].value == "") {
            alert("Masukkan Tanggal Lahir Anda");
            document.forms["formBiodata"]["tgllahir"].focus();
            return false;
        }
        // Validasi E-mail
        if (document.forms["formBiodata"]["email"].value == "") {
            alert("Masukkan E-mail Aktif Anda");
            document.forms["formBiodata"]["email"].focus();
            return false;
        }
        // Validasi Hobi
        if (document.forms["formBiodata"]["hobi"].value == "") {
            alert("Masukkan Hobi Anda");
            document.forms["formBiodata"]["hobi"].focus();
            return false;
        }
      }
    </script>
  </section>
  <!-- ======= End Form ======= -->

</main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer" class="bg-image" style="background-image: url(assets/img/dya2-bg.jpg)";>
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