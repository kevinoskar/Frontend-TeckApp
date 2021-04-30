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
  <link
    href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Jost:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
    rel="stylesheet">

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
    <div class="container d-flex align-items-center">

      <h1 class="logo me-auto"><a href="index.php">Teck App</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo me-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto" href="#about">Acerca de Nosotros</a></li>
          <li><a class="nav-link scrollto" href="#services">Servicios</a></li>
          <li><a class="nav-link   scrollto" href="#portfolio">Repuestos</a></li>
          <li><a class="nav-link scrollto" href="#team">Nuestro Equipo</a></li>
          <li><a class="nav-link scrollto active" href="./login.html">Iniciar Sesion</a></li>
          <li><a class="getstarted scrollto" href="https://forms.gle/ptnSiuJvzmFaK5EV9">Registro Colaborador</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <section id="hero" class="d-flex align-items-center">

    <div class="container">
      <div class="row">
        <div class="col-lg-6 d-flex flex-column justify-content-center pt-4 pt-lg-0 order-2 order-lg-1"
          data-aos="fade-up" data-aos-delay="200">
          <form id="login" action="login">
            <h1>Inicia Sesión</h1>
            <h2 style="margin-bottom: 15px;">Correo electrónico</h2>
            <input class="form-control" name="email"  type="email" placeholder="@Email">
            <h2 style="margin-bottom: 15px;">Contraseña</h2>
            <input class="form-control" name="password" type="password">
            <div class="text-center"><button style="margin-top: 20px;" class="btn btn-primary" type="button" onkeyup="login()" onclick="login()">Inicia Sesión</button></div>
          </form>
        </div>
        <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-in" data-aos-delay="200">
          <img src="assets/img/hero-img.png" class="img-fluid animated" alt="">
        </div>
      </div>
    </div>

  </section><!-- End Hero -->

  <section class="why-us section-bg">
    <div class="container" data-aos="fade-up">
      <div class="row">
        <div class="col-lg-7 d-flex flex-column justify-content-center align-items-stretch  order-2 order-lg-1">
          <form id="register" action="register">
            <h1>Registrarse</h1>
            <h2 style="margin-bottom: 15px;">Nombre</h2>
            <input class="form-control" name="name"  type="text" placeholder="Nombre Completo">
            <h2 style="margin-bottom: 15px;">Correo electrónico</h2>
            <input class="form-control" name="email"  type="email" placeholder="@Email">
            <h2 style="margin-bottom: 15px;">Contraseña</h2>
            <input class="form-control" name="password" type="password">
            <h2 style="margin-bottom: 15px;">URL de Perfil</h2>
            <input class="form-control" name="urlImageProfile" id="urlImageProfile" type="url">
            <div class="text-center"><button style="margin-top: 20px;" class="btn btn-primary" type="button" onclick="register()">Registrarse</button></div>
          </form>
        </div>

        <div class="col-lg-5 align-items-stretch order-1 order-lg-2 img" style='background-image: url("assets/img/why-us.png");' data-aos="zoom-in" data-aos-delay="150">&nbsp;</div>
      </div>

    </div>
  </section><!-- End Why Us Section -->

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
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
      class="bi bi-arrow-up-short"></i></a>

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

</body>

</html>