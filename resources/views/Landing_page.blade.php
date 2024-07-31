<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Home - Web Portal</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Nunito:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href=" {{ url('vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href=" {{ url('vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
  <link href=" {{ url('vendor/aos/aos.css') }} " rel="stylesheet">
  <link href=" {{ url('vendor/glightbox/css/glightbox.min.css') }} " rel="stylesheet">
  <link href=" {{ url('vendor/swiper/swiper-bundle.min.css') }} " rel="stylesheet">

  <!-- Main CSS File -->
  <link href=" {{ url('css/main.css') }}" rel="stylesheet">

  <!-- =======================================================
  * Template Name: FlexStart
  * Template URL: https://bootstrapmade.com/flexstart-bootstrap-startup-template/
  * Updated: Jun 29 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body class="index-page">

  <header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container-fluid container-xl position-relative d-flex align-items-center">

      <a href="http://192.168.59.98" class="logo d-flex align-items-center me-auto">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <img src=" {{ url('images/logo_siix.png') }}" alt="">
        <!-- <h1 class="#">Portal</h1> -->
      </a>

      <nav id="navmenu" class="navmenu">
        <ul>
          <li><a href="#home" class="active">Home<br></a></li>
          <li><a href="#portal">All Portal</a></li>
          <li><a href="#team">Team</a></li>
        </ul>
        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
      </nav>

      <a class="btn-getstarted flex-md-shrink-0" href="http://192.168.59.98/#portal">Get Started</a>

    </div>
  </header>

  <main class="main">

    <!-- Hero Section -->
    <section id="home" class="hero section">

      <div class="container">
        <div class="row gy-4">
          <div class="col-lg-6 order-2 order-lg-1 d-flex flex-column justify-content-center">
            <h1 data-aos="fade-up">Administration Dept.</h1>
            <p data-aos="fade-up" data-aos-delay="100">Web Portal for Bussiness</p>
            <div class="d-flex flex-column flex-md-row" data-aos="fade-up" data-aos-delay="200">
              <a href="#portal" class="btn-get-started">Get Started <i class="bi bi-arrow-right"></i></a>
            </div>
          </div>
          <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-out">
            <img src=" {{ url('images/logo_siix_2.png') }}" class="img-fluid animated" alt="">
          </div>
        </div>
      </div>

    </section><!-- /Hero Section -->

    <!-- Services Section -->
    <section id="portal" class="services section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Portal</h2>
        <p>Available Portal Web<br></p>
      </div><!-- End Section Title -->

      <div class="container">

        <div class="row gy-3">

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
            <div class="service-item item-cyan position-relative">
              <i class="bi bi-activity icon"></i>
              <h3>ESD Portal</h3>
              <!-- <p>Provident nihil minus qui consequatur non omnis maiores. Eos accusantium minus dolores iure perferendis tempore et consequatur.</p> -->
              <a href="http://192.168.59.98/esd/" class="read-more stretched-link"><span>Visit Website</span> <i class="bi bi-arrow-right"></i></a>
            </div>
          </div><!-- End Service Item -->

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
            <div class="service-item item-orange position-relative">
              <i class="bi bi-basket icon"></i>
              <h3>Stock Control Material</h3>
              <!-- <p>Ut autem aut autem non a. Sint sint sit facilis nam iusto sint. Libero corrupti neque eum hic non ut nesciunt dolorem.</p> -->
              <a href="http://192.168.59.98/stock/" class="read-more stretched-link"><span>Visit Website</span> <i class="bi bi-arrow-right"></i></a>
            </div>
          </div><!-- End Service Item -->

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
            <div class="service-item item-teal position-relative">
              <i class="bi bi-lightning icon"></i>
              <h3>Utility Portal</h3>
              <!-- <p>Ut excepturi voluptatem nisi sed. Quidem fuga consequatur. Minus ea aut. Vel qui id voluptas adipisci eos earum corrupti.</p> -->
              <a href="http://192.168.59.98/utility/" class="read-more stretched-link"><span>Visit Website</span> <i class="bi bi-arrow-right"></i></a>
            </div>
          </div><!-- End Service Item -->

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
            <div class="service-item item-red position-relative">
              <i class="bi bi-people icon"></i>
              <h3>HR Portal</h3>
              <!-- <p>Ut excepturi voluptatem nisi sed. Quidem fuga consequatur. Minus ea aut. Vel qui id voluptas adipisci eos earum corrupti.</p> -->
              <a href="http://192.168.59.98/humanResource/" class="read-more stretched-link"><span>Visit Website</span> <i class="bi bi-arrow-right"></i></a>
            </div>
          </div><!-- End Service Item -->
        </div>

      </div>

    </section><!-- /Services Section -->

    <!-- Team Section -->
    <section id="team" class="team section">

    <!-- Section Title -->
    <div class="container section-title text-center" data-aos="fade-up">
        <h2>Team</h2>
        <p>Our working team</p>
    </div><!-- End Section Title -->

    <div class="container">
        <div class="row gy-4 justify-content-center">
            <div class="col-lg-2 col-md-5 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
                <div class="team-member text-center d-flex flex-column">
                    <div class="member-img">
                        <img src="{{ url('images/widi.jpg') }}" class="img-fluid team-img" alt="">
                    </div>
                    <div class="member-info mt-auto">
                        <h4>Widi</h4>
                        <!-- <span>Chief Executive Officer</span>
                        <p>Velit aut quia fugit et et. Dolorum ea voluptate vel tempore tenetur ipsa quae aut. Ipsum exercitationem iure minima enim corporis et voluptate.</p> -->
                    </div>
                </div>
            </div><!-- End Team Member -->

            <div class="col-lg-2 col-md-5 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="200">
                <div class="team-member text-center d-flex flex-column">
                    <div class="member-img">
                        <img src="{{ url('images/oki.jpg') }}" class="img-fluid team-img" alt="">
                    </div>
                    <div class="member-info mt-auto">
                        <h4>Oki</h4>
                        <!-- <span>Product Manager</span>
                        <p>Quo esse repellendus quia id. Est eum et accusantium pariatur fugit nihil minima suscipit corporis. Voluptate sed quas reiciendis animi neque sapiente.</p> -->
                    </div>
                </div>
            </div><!-- End Team Member -->

            <div class="col-lg-2 col-md-5 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="300">
                <div class="team-member text-center d-flex flex-column">
                    <div class="member-img">
                        <img src="{{ url('images/rudi.jpg') }}" class="img-fluid team-img" alt="">
                    </div>
                    <div class="member-info mt-auto">
                        <h4>Pratama</h4>
                        <!-- <span>CTO</span>
                        <p>Vero omnis enim consequatur. Voluptas consectetur unde qui molestiae deserunt. Voluptates enim aut architecto porro aspernatur molestiae modi.</p> -->
                    </div>
                </div>
            </div><!-- End Team Member -->
        </div>
    </div>

    </section><!-- /Team Section -->

  </main>

  <footer id="footer" class="footer">
    <div class="container copyright text-center mt-4">
      <p>© <span>Copyright</span> <strong class="px-1 sitename">Building Team 2024 </strong> <span>All Rights Reserved</span></p>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you've purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: [buy-url] -->
        Designed by <a href="#">Widi Fajar.s</a>
      </div>
    </div>

  </footer>

  <!-- Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src=" {{ url('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src=" {{ url('vendor/php-email-form/validate.js') }}"></script>
  <script src=" {{ url('vendor/aos/aos.js') }}"></script>
  <script src=" {{ url('vendor/glightbox/js/glightbox.min.js') }}"></script>
  <script src=" {{ url('vendor/purecounter/purecounter_vanilla.js') }}"></script>
  <script src=" {{ url('vendor/imagesloaded/imagesloaded.pkgd.min.js') }}"></script>
  <script src=" {{ url('vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
  <script src=" {{ url('vendor/swiper/swiper-bundle.min.js') }}"></script>

  <!-- Main JS File -->
  <script src=" {{ url('js/main.js') }}"></script>

</body>

</html>