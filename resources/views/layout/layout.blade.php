<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>Zona Integritas - BPS Provinsi Sumatera Selatan</title>
    <meta content="" name="description">
    <meta content="" name="keywords">
    <!-- Favicons -->
    <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">
    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">
    <!-- Vendor CSS Files -->
    <link href="assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
    <!-- Template Main CSS File -->
    <link href="assets/css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">

    <style>
        .testimonials::before {
            content: "";
            position: absolute;
            left: 0;
            right: 0;
            top: 0;
            bottom: 0;
            background: rgba(0, 0, 0, 0.7);
        }
    </style>

</head>

<body>
    <section id="topbar" class="d-flex align-items-center ">
        <div class="col d-flex justify-content-center justify-content-md-between mx-3">
            <div class="contact-info d-flex align-items-center">
                <img src="{{ url('assets/img/logo/bps.png') }}" alt="" width="200px" class="me-3">
                <img src="{{ url('assets/img/logo/berakhlakwhiteborder.png') }}" alt="" height="30px">
            </div>
            <div class="social-links d-none d-md-flex align-items-center">
                <a href="https://twitter.com/bpssumsel" class="twitter"><i class="bi bi-twitter"></i></a>
                <a href="https://www.facebook.com/profile.php?id=100015484759318" class="facebook"><i
                        class="bi bi-facebook"></i></a>
                <a href="https://www.instagram.com/bpssumsel/" class="instagram"><i class="bi bi-instagram"></i></a>
            </div>
        </div>
    </section>

    <header id="header" class="d-flex align-items-center">
        <div class="container d-flex align-items-center justify-content-between">
            <h1 class="logo"><a href="{{ url('/') }}">Zona <span>Integritas</span></a></h1>
            <nav id="navbar" class="navbar">
                <ul>
                    <li><a class="nav-link scrollto" href="#home" id="home_nav">Home</a></li>
                    <li><a class="nav-link scrollto" href="{{ url('profile/') }}" id="profile_nav">Profil</a></li>
                    <li><a class="nav-link scrollto" href="#tahapzi">Tahap Pembangunan ZI</a></li>
                    {{-- <li><a class="nav-link scrollto" href="#zonaintegritas">Zona Integritas</a></li> --}}
                    <li class="dropdown">
                        <a href="#zonaintegritas"><span>Zona Integritas</span> <i class="bi bi-chevron-down"></i></a>
                        <ul>
                            <li><a href="{{ url('manajemenperubahan') }}">Manajemen Perubahan</a></li>
                            <li><a href="{{ url('manajemenperubahan') }}">Penataan Tatalaksana</a></li>
                            <li><a href="{{ url('manajemenperubahan') }}">Penataan Manajemen SDM</a></li>
                            <li><a href="{{ url('manajemenperubahan') }}">Penguatan Akuntabilitas Kinerja</a></li>
                            <li><a href="{{ url('manajemenperubahan') }}">Penguatan Pengawasan</a></li>
                            <li><a href="{{ url('manajemenperubahan') }}">Peningkatan Kualitas Pelayanan Publik</a>
                            </li>
                        </ul>
                    </li>
                    <li><a class="nav-link scrollto" href="#pelaporan">Pelaporan/Publikasi</a></li>
                    <li class="dropdown"><a href="#contact"><span>Lainnya</span> <i class="bi bi-chevron-down"></i></a>
                        <ul>
                            <li><a href="#contact">Kontak</a></li>

                        </ul>
                    </li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
        </div>
    </header>

    @yield('content')


    <footer id="footer">
        <div class="footer-newsletter">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-6">
                        <h4>Ikuti Surat Kabar Kami</h4>
                        <p class="fst-italic">Join Our Newsletter</p>
                        <form action="" method="post">
                            <input type="email" name="email"><input type="submit" value="Subscribe">
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <div class="footer-top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-6 footer-contact">
                        <h3>Zona<span> Integritas</span></h3>
                        <p>
                            Jl. Kapten Anwar Sastro <br>
                            No. 1694 Palembang,<br>
                            Sumatera Selatan 30129 <br><br>
                            <strong>Telpon:</strong> (0711) 351665, 318456<br>
                            <strong>Email:</strong> zibpssumsel@gmail.com<br>
                        </p>
                    </div>

                    <div class="col-lg-3 col-md-6 footer-links">
                        <h4>Menu</h4>
                        <ul>
                            <li><i class="bx bx-chevron-right"></i> <a href="{{ url('/') }}">Home</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="{{ url('profile/') }}">Profil</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Zona Integritas</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Tahap Pembangunan ZI</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Pelaporan/Publisitas</a></li>
                        </ul>
                    </div>

                    <div class="col-lg-3 col-md-6 footer-links">
                        <h4>layanan Kita</h4>
                        <ul>
                            <li><i class="bx bx-chevron-right"></i> <a href="https://sumsel.bps.go.id">Website BPS</a>
                            </li>
                            <li><i class="bx bx-chevron-right"></i> <a href="https://sikat.bpssumsel.com">Katalog
                                    Publikasi</a>
                            </li>
                            <li><i class="bx bx-chevron-right"></i>
                                <a href="https://pojokstatistik.bpssumsel.com">Pojok
                                    Statistik
                                </a>
                            </li>
                            <li><i class="bx bx-chevron-right"></i>
                                <a href="https://play.google.com/store/apps/details?id=com.farifam.sidataeksotiss">
                                    SiData Exotis
                                </a>
                            </li>
                            {{-- <li><i class="bx bx-chevron-right"></i> <a href="#">Graphic Design</a></li> --}}
                        </ul>
                    </div>

                    <div class="col-lg-3 col-md-6 footer-links">
                        <h4>Sosmed Kami</h4>
                        <p></p>
                        <div class="social-links mt-3">
                            <a href="https://twitter.com/bpssumsel" class="twitter"><i
                                    class="bx bxl-twitter"></i></a>
                            <a href="https://www.facebook.com/profile.php?id=100015484759318" class="facebook"><i
                                    class="bx bxl-facebook"></i></a>
                            <a href="https://www.instagram.com/bpssumsel/" class="instagram"><i
                                    class="bx bxl-instagram"></i></a>
                            {{-- <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
                            <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a> --}}
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div class="container py-2">
            <div class="copyright">
                &copy; Copyright <strong><span>BPS Provinsi Sumatera Selatan</span></strong>. All Rights Reserved
            </div>
            <div class="credits">
                Designed by <a href="https://www.linkedin.com/in/irfansbom/">BOM's</a>
            </div>
        </div>
    </footer>

    <div id="preloader"></div>
    <a href="#" class="back-to-top d-flex align-items-center justify-content-center">
        <i class="bi bi-arrow-up-short"></i>
    </a>

    <script src="assets/vendor/purecounter/purecounter.js"></script>
    <script src="assets/vendor/aos/aos.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>
    <script src="assets/js/main.js"></script>

    <script src="https://kit.fontawesome.com/d9849ed433.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
</body>

</html>
