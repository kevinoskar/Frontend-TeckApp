<?php
if (!isset($_COOKIE['key'])) {
  header("Location: https://teckapp.herokuapp.com/");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>TeckApp</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="/assets/img/icon.png" rel="icon">
  <link href="/assets/img/icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Jost:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">


</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top ">
    <div class="container d-flex align-items-center aos-animate">

      <h1 class="logo me-auto"><a href="index.php">Teck App</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo me-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto" href="#about">Acerca de Nosotros</a></li>
          <li><a class="nav-link scrollto" href="#services">Servicios</a></li>
          <li><a class="nav-link scrollto" href="#portfolio">Repuestos</a></li>
          <li><a class="nav-link scrollto" href="#team">Nuestro Equipo</a></li>
          <li id="user-name"></li>
          <li><a class="getstarted scrollto" style="cursor: pointer; height: 55px;" onclick="logout()">Log Out</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" style="height: auto;" class="d-flex align-items-center">

    <div class="container">
      <h5 style="text-align: center; color: #fff; font-weight: bold; font-size: 25px;">Te mostramos algunos trabajos en proceso</h5>
      <div class="row" id="job-view">
        
      </div>
  </section><!-- End Hero -->

  <main id="main"><br>
    <div class="container">
      <h2>Cuentanos que clase de trabajo necesitas</h2>
      <div class="row" style="border-radius:10px; border-color:#37517e; border-style: solid; padding: 15px">
        <div class="col-sm">
          <form id="job-form">
            <label for="exampleFormControlInput1" class="form-label">Agrega el nombre de tu trabajo</label>
            <input name="name" id="name-job" type="name" class="form-control" placeholder="Por ejemplo: mantenimiento"> <br>
            <label for="exampleFormControlTextarea1" class="form-label">Agrega una descripcion de tu trabajo</label>
            <textarea name="description" class="form-control" rows="4"></textarea>
        </div>
        <div class="col-sm"">
          <label for=" exampleFormControlInput1" class="form-label">Agrega una imagen de ultilidad para explicar tu trabajo</label>
          <input type="text" id="urlImage" name="urlImage" class="form-control">
          <button type="button" class="btn btn-success" style="margin-left:200px; margin-top:40px;" onclick="createJob()">Enviar Trabajo</button>
          <div style="text-align: center" id="btn-create"></div>  
        </form>
        </div>
      </div>
    </div>
  </main>


  <!-- ======= Footer ======= -->
  <footer id="footer">

    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-contact">
            <h3>Teck App</h3>
            <p>
              Tegucigalpa <br>
              Francisco Morazan<br>
              Honduras <br><br>
              <strong>Telefono:</strong> 9999-9999 <br>
              <strong>Email:</strong> teckapp@gmail.com<br>
            </p>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Acerca de Nosotros</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Servicios</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Repuestos</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Terminos y Condiciones</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Politicas de Privacidad</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Nuestros Servicios</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Reparacion de Computadoras</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Servicio 2</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Servicio 3</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Servicio 4</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Servicio 5</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Nuestras Redes Sociales</h4>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Optio, laudantium ducimus illo atque</p>
            <div class="social-links mt-3">
              <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
              <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
              <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
              <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
              <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
            </div>
          </div>

        </div>
      </div>
    </div>

    <div class="container footer-bottom clearfix">
      <div class="copyright">
        <strong><span>TeckApp</span></strong>. Tu Mejor Opcion!
      </div>
    </div>
  </footer><!-- End Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/jquery/jquery-3.6.0.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>

  <script src="assets/js/main.js"></script>
  <script src="assets/js/home.js"></script>

</body>

</html>