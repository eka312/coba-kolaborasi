<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Detail Tempat Wisata | Jelajah Malang</title>
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
   
    </head>
    <body >
        
            <!-- Navbar -->
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
                <!-- konten -->
                <section id="konten" class="gallery section hero section dark-background"> 
                    <div class="container pt-5 ">
                        <div class="row">
                            <div class="col-7">
                                <img src="{{ asset('image-wisata/' . $wisata->gambar) }}" class="img-fluid w-100" alt="{{ $wisata->judul }}">
                            </div>
                            <div class="col-5 ">
                                <h2 class="text-capitalize mb-3">{{ $wisata->judul }}</h3>
                                <p class="mb-4">{{ $wisata->deskripsi }}</p>
                                <a href="{{ $wisata->demo_url }}" class="btn btn-primary btn-lg" target="_blank">Demo</a>
                                
                            </div>
                        </div>
                    </div>
                </section>
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