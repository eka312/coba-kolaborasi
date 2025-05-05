<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>index-coba kolaborasi</title>
  <meta name="description" content="">
  <meta name="keywords" content="">

  <!-- Favicons -->
  <link href="{{asset('Bootslander/assets/img/touris.png')}}" rel="icon">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{asset('Bootslander/assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{asset('Bootslander/assets/vendor/bootstrap-icons/bootstrap-icons.css ')}}" rel="stylesheet">
  <link href="{{asset('Bootslander/assets/vendor/aos/aos.css')}}" rel="stylesheet">
  <link href="{{asset('Bootslander/assets/vendor/glightbox/css/glightbox.min.css')}}" rel="stylesheet">
  <link href="{{asset('Bootslander/assets/vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet">

  <!-- Main CSS File -->
  <link href="{{asset('Bootslander/assets/css/main.css')}}" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Bootslander
  * Template URL: https://bootstrapmade.com/bootslander-free-bootstrap-landing-page-template/
  * Updated: Aug 07 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body class="index-page">

  <header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container-fluid container-xl position-relative d-flex align-items-center justify-content-between">

      <a href="index.html" class="logo d-flex align-items-center">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <!-- <img src="Bootslander/assets/img/logo.png" alt=""> -->
        <h1 class="sitename">JELAJAH MALANG</h1>
      </a>

      <nav id="navmenu" class="navmenu">
        <ul>
          <li><a href="#hero" class="active">Home</a></li>
          <li><a href="#about">About</a></li>
          <li><a href="#gallery">Gallery</a></li>
          <li class="dropdown"><a href="#"><span>Pilihan Wisata</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
            <ul>
              <li><a href="#">Wisata Alam</a></li>
              <li><a href="#">Wisata Budaya & Sejarah</a></li>
              <li><a href="#">Kuliner Khas Malang</a></li>
              <li><a href="#">Wisata Pantai</a></li>
            </ul>
          </li>
          <li><a href="/login">Login</a></li>
        </ul>
        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
      </nav>

    </div>
  </header>

  <main class="main">

    <!-- Hero Section -->
    <section id="hero" class="hero section dark-background">
      <img src="Bootslander/assets/img/hero-bg-2.jpg" alt="" class="hero-bg">

      <div class="container">
        <div class="row gy-4 justify-content-between">
          <div class="col-lg-4 order-lg-last wisata1-img w-50" data-aos="zoom-out" data-aos-delay="100">
            <img src="Bootslander/assets/img/wisata1.png" class="img-fluid animated" alt="">
          </div>

          <div class="col-lg-6  d-flex flex-column justify-content-center" data-aos="fade-in">
            <h1>Tempat Wisata Terbaik Di <span>KOTA MALANG</span></h1>

            <p>Ingin merasakan sensasi udara sejuk dan menyegarkan? Berlibur ke Malang bisa jadi solusinya. Daerah dengan julukan kota apel ini juga punya banyak tempat wisata yang seru untuk dikunjungi. Bagi Anda yang tertarik untuk menghabiskan waktu libur ke daerah ini,
               berikut JELAJAH MALANG merangkum berbagai tempat wisata di Malang yang menarik dikunjungi.</p>
            <div class="d-flex">
              <a href="#about" class="btn-get-started">Get Started</a>
              <a href="https://youtu.be/uu1SoPibQy0?si=lv161fikf8dBOrPn" class="glightbox btn-watch-video d-flex align-items-center"><i class="bi bi-play-circle"></i><span>Watch Video</span></a>
            </div>
          </div>

        </div>
      </div>

      <svg class="hero-waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 24 150 28 " preserveAspectRatio="none">
        <defs>
          <path id="wave-path" d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z"></path>
        </defs>
        <g class="wave1">
          <use xlink:href="#wave-path" x="50" y="3"></use>
        </g>
        <g class="wave2">
          <use xlink:href="#wave-path" x="50" y="0"></use>
        </g>
        <g class="wave3">
          <use xlink:href="#wave-path" x="50" y="9"></use>
        </g>
      </svg>

    </section><!-- /Hero Section -->

    <!-- About Section -->
    <section id="about" class="about section">

      <div class="container" data-aos="fade-up" data-aos-delay="100">
        <div class="row align-items-xl-center gy-5">

          <div class="col-xl-5 content">
            <h3>About Us</h3>
            <div class="col-lg-4 order-lg-last wisata-img w-50" data-aos="zoom-out" data-aos-delay="100">
               <img src="Bootslander/assets/img/wisata.png" class="img-fluid animated" alt="">
            </div>
            <h2>Jelajahi Keindahan Malang dengan Lebih Dekat</h2>
            <p>Website Jelajah Malang hadir sebagai panduan lengkap untuk kamu yang ingin mengenal destinasi wisata terbaik di Kota dan Kabupaten Malang. 
              Dari pesona alam pegunungan, pantai eksotis, hingga wisata kuliner dan budaya lokal — semua dirangkum dalam satu platform informatif dan inspiratif.
              Temukan referensi liburanmu, dapatkan tips wisata, dan rencanakan perjalanan seru ke berbagai sudut Malang yang menakjubkan.
            </p>
           
          </div>

          <div class="col-xl-7">
            <div class="row gy-4 icon-boxes">

              <div class="col-md-6" data-aos="fade-up" data-aos-delay="200">
                <div class="icon-box">
                  <i class="bi bi-buildings"></i>
                  <h3>Wisata Alam</h3>
                  <p>Nikmati keindahan alam Malang yang memukau — mulai dari pegunungan, air terjun, hingga perbukitan hijau yang menenangkan jiwa.</p>
                </div>
              </div> <!-- End Icon Box -->

              <div class="col-md-6" data-aos="fade-up" data-aos-delay="300">
                <div class="icon-box">
                  <i class="bi bi-clipboard-pulse"></i>
                  <h3>Wisata Budaya & Sejarah</h3>
                  <p>Kenali kekayaan budaya dan sejarah Malang yang penuh makna.</p>
                </div>
              </div> <!-- End Icon Box -->

              <div class="col-md-6" data-aos="fade-up" data-aos-delay="400">
                <div class="icon-box">
                  <i class="bi bi-command"></i>
                  <h3>Kuliner Khas Malang</h3>
                  <p>Jelajahi cita rasa khas Malang — dari bakso legendaris hingga camilan lokal yang menggugah selera.</p>
                </div>
              </div> <!-- End Icon Box -->

              <div class="col-md-6" data-aos="fade-up" data-aos-delay="500">
                <div class="icon-box">
                  <i class="bi bi-graph-up-arrow"></i>
                  <h3>Wisata Pantai</h3>
                  <p>Temukan keindahan pantai-pantai tersembunyi di Malang Selatan dengan pasir putih dan ombak yang mempesona.</p>
                </div>
              </div> <!-- End Icon Box -->

            </div>
          </div>

        </div>
      </div>

    </section><!-- /About Section -->

    <!-- Gallery Section -->
    <section id="gallery" class="gallery section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Gallery</h2>
        <div><span>Check Our</span> <span class="description-title">Gallery</span></div>
      </div><!-- End Section Title -->

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row g-0">

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="Bootslander/assets/img/gallery/gallery-1.jpeg" class="glightbox" data-gallery="images-gallery">
                <img src="Bootslander/assets/img/gallery/gallery-1.jpeg" alt="" class="img-fluid">
              </a>
            </div>
          </div><!-- End Gallery Item -->

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="Bootslander/assets/img/gallery/gallery-2.jpeg" class="glightbox" data-gallery="images-gallery">
                <img src="Bootslander/assets/img/gallery/gallery-2.jpeg" alt="" class="img-fluid">
              </a>
            </div>
          </div><!-- End Gallery Item -->

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="Bootslander/assets/img/gallery/gallery-3.jpeg" class="glightbox" data-gallery="images-gallery">
                <img src="Bootslander/assets/img/gallery/gallery-3.jpeg" alt="" class="img-fluid">
              </a>
            </div>
          </div><!-- End Gallery Item -->

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="Bootslander/assets/img/gallery/gallery-4.jpeg" class="glightbox" data-gallery="images-gallery">
                <img src="Bootslander/assets/img/gallery/gallery-4.jpeg" alt="" class="img-fluid">
              </a>
            </div>
          </div><!-- End Gallery Item -->

          <!-- <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="Bootslander/assets/img/gallery/gallery-5.jpeg" class="glightbox" data-gallery="images-gallery">
                <img src="Bootslander/assets/img/gallery/gallery-5.jpeg" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="Bootslander/assets/img/gallery/gallery-6.jpeg" class="glightbox" data-gallery="images-gallery">
                <img src="Bootslander/assets/img/gallery/gallery-6.jpeg" alt="" class="img-fluid">
              </a>
            </div>
          </div>
        </div> -->

      </div>

    </section><!-- /Gallery Section -->

  </main>
  <footer id="footer" class="footer dark-background">

    <div class="container footer-top">
      <div class="row gy-4">
        <div class="col-lg-4 col-md-6 footer-about">
          <a href="index.html" class="logo d-flex align-items-center">
            <span class="sitename">Jelajah Malang</span>
          </a>
          <div class="footer-contact pt-3">
            <p>Jalan Ijen No.10, Malang</p>
            <p>Jawa Timur 65111</p>
            <p class="mt-3"><strong>Phone:</strong> <span>+62 812-3456-7890</span></p>
            <p><strong>Email:</strong> <span>info@jelajahmalang.id</span></p>
          </div>
          <div class="social-links d-flex mt-4">
            <a href=""><i class="bi bi-twitter-x"></i></a>
            <a href=""><i class="bi bi-instagram"></i></a>
            <a href=""><i class="bi bi-whatsapp"></i></a>
          </div>
        </div>

        <div class="col-lg-2 col-md-3 footer-links">
          <h4>Eksplorasi Cepat</h4>
          <ul>
            <li><a href="#">Wisata Alam</a></li>
            <li><a href="#">Wisata Sejarah</a></li>
            <li><a href="#">Services</a></li>
            <li><a href="#">Kuliner Malang</a></li>
            <li><a href="#">Privacy policy</a></li>
          </ul>
        </div>

        
        <div class="col-lg-2 col-md-3 footer-links">
          <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d126924.14941941034!2d112.54860038180849!3d-7.977838953103059!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd6282837dc47e9%3A0x3027a76e352bb70!2sMalang%2C%20Malang%20City%2C%20East%20Java!5e0!3m2!1sen!2sid!4v1714722043749!5m2!1sen!2sid"
            width="300%" height="200" style="border:0;" allowfullscreen="" loading="lazy"
            referrerpolicy="no-referrer-when-downgrade">
          </iframe>
      </div>
      </div>
    </div>

    <div class="container copyright text-center mt-4">
      <p>©<span></span> 2025 <strong class="px-1 sitename">Jelajah Malang</strong> <span>Semua Hak Dilindungi</span></p>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you've purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: [buy-url] -->
        Designed by <a href="https://bootstrapmade.com/">Tim Jelajah Malang</a>
      </div>
    </div>

  </footer>

  <!-- Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Preloader -->
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="{{asset('Bootslander/assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{asset('Bootslander/assets/vendor/php-email-form/validate.js')}}"></script>
  <script src="{{asset('Bootslander/assets/vendor/aos/aos.js')}}"></script>
  <script src="{{asset('Bootslander/assets/vendor/glightbox/js/glightbox.min.js')}}"></script>
  <script src="{{asset('Bootslander/assets/vendor/purecounter/purecounter_vanilla.js')}}"></script>
  <script src="{{asset('Bootslander/assets/vendor/swiper/swiper-bundle.min.js')}}"></script>

  <!-- Main JS File -->
  <script src="{{asset('Bootslander/assets/js/main.js')}}"></script>

</body>

</html>