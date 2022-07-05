@extends('layout/layout')
@section('content')
<main id="main">
    <section id="hero" class="hero d-flex align-items-center">
        <div class="container" data-aos="zoom-out" data-aos-delay="100">
            <h1>Zona<span> Integritas</span></h1>
            <h2>REFORMASI BIROKRASI</h2>
            <div class="d-flex">
                <a href="#rbsection" class="btn-get-started scrollto">Mulai</a>
                <a href="https://www.youtube.com/watch?v=vLZUi9N7e1o&t=9s" class="glightbox btn-watch-video"><i
                        class="bi bi-play-circle"></i><span>Tonton
                        Video</span></a>
            </div>
        </div>
    </section>
    <section id="rbsection" class="featured-services">
        <div class="container" data-aos="fade-up">
            <div class="row">
                <div class="col-md-12 col-lg-12 d-flex align-items-stretch mb-5 mb-lg-0">
                    <div class="" data-aos="fade-up" data-aos-delay="100"
                        style="box-shadow: 0 0 29px 0 rgba(68, 88, 144, 0.12); padding: 30px;">
                        <div class="icon"><i class='fas fa-user-tie'></i></div>
                        <h4 class="title"><b href="">Reformasi Birokrasi</b></h4>
                        <p class="description">Reformasi Birokrasi Badan Pusat Statistik (BPS) meliputi 8 (delapan)
                            area perubahan, yaitu : <br>
                            (1) Organisasi (Organisasi yang tepat fungsi dan tepat ukuran),<br>
                            (2) Tatalaksana (Sistem, proses dan prosedur kerja yang jelas, efektif, efisien, terukur
                            dan sesuai dengan prinsip-prinsip good governance), <br>
                            (3) Peraturan Perundang-undangan
                            (Regulasi yang lebih tertib, tidak tumpang tindih dan kondusif), <br>
                            (4) Sumber Daya Manusia
                            Aparatur (SDM aparatur yang berintegritas, netral, kompeten, capable, profesional,
                            berkinerja tinggi dan sejahtera), <br>
                            (5) Pengawasan (Meningkatnya penyelenggaraan
                            pemerintahan yang bersih dan bebas Korupsi, Kolusi dan Nepotisme), (6) Akuntabilitas
                            (Meningkatnya kapasitas dan akuntabilitas kinerja birokrasi), <br>
                            (7) Pelayanan Publik
                            (Pelayanan prima sesuai kebutuhan dan harapan masyarakat), dan <br>
                            (8) Mind Set dan Culture
                            Set Aparatur (Birokrasi dengan integritas dan kinerja yang tinggi).</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div id="areaper" class="container" data-aos="zoom-out" data-aos-delay="100">
        <h3 class="text-">AREA PERUBAHAN REFORMASI BIROKRASI</h3>
    </div>
    <section id="testimonials" class="testimonials" style="background-image: url('assets/img/gedungbps.jpg')">
        <div class="container" data-aos="zoom-in">
            <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="testimonial-item">
                            <img src="{{url('assets/img/infografis/1.jpeg')}}" class="" alt=""
                                style="max-width: 500px; max-height:500px">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="testimonial-item">
                            <img src="{{url('assets/img/infografis/2.jpeg')}}" class="" alt=""
                                style="max-width: 500px; max-height:500px">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="testimonial-item">
                            <img src="{{url('assets/img/infografis/3.jpeg')}}" class="" alt=""
                                style="max-width: 500px; max-height:500px">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="testimonial-item">
                            <img src="{{url('assets/img/infografis/4.jpeg')}}" class="" alt=""
                                style="max-width: 500px; max-height:500px">
                        </div>
                    </div>
                </div>
                <div class="swiper-pagination"></div>
            </div>

        </div>
    </section>
    <section class="about section-bg">
        <div class="container" data-aos="fade-up">
            <div class="section-title">
                <h3>KERANGKA LOGIS PELAKSANAAN RB DAN ZONA <span>INTEGRITAS</span></h3>
            </div>
            <div class="row text-center">
                <div class="col-lg-12" data-aos="fade-right" data-aos-delay="100">
                    <img src="assets/img/kerangka.png" class="img-fluid" alt="">
                </div>
            </div>
        </div>
    </section>

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                {{-- <h2>Kontak</h2> --}}
                <h3><span>Kontak Kami</span></h3>
                <p>Badan Pusat Statistik Provinsi Sumatera Selatan</p>
            </div>

            <div class="row" data-aos="fade-up" data-aos-delay="100">
                <div class="col-lg-6">
                    <div class="info-box mb-4">
                        <i class="bx bx-map"></i>
                        <h3>Alamat</h3>
                        <p>Jl. Kapten Anwar Sastro No 1694 Palembang, Sumatera Selatan 30129</p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="info-box  mb-4">
                        <i class="bx bx-envelope"></i>
                        <h3>Email</h3>
                        <p>bps1600@bps.go.id
                        </p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="info-box  mb-4">
                        <i class="bx bx-phone-call"></i>
                        <h3>Telpon</h3>
                        <p>(0711) 351665, 318456</p>
                    </div>
                </div>

            </div>

            <div class="row" data-aos="fade-up" data-aos-delay="100">

                <div class="col-lg-6 ">
                    <iframe class="mb-4 mb-lg-0"
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3984.441790871244!2d104.74871281482864!3d-2.974821197833425!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e3b75dfd4e98b65%3A0x33a20c9d55dd1822!2sBadan%20Pusat%20Statistik%20Provinsi%20Sumatera%20Selatan!5e0!3m2!1sid!2sid!4v1618455553556!5m2!1sid!2sid"
                        frameborder="0" style="border:0; width: 100%; height: 384px;" allowfullscreen></iframe>
                </div>

                <div class="col-lg-6">
                    <form action="forms/contact.php" method="post" role="form" class="php-email-form">
                        <div class="row">
                            <div class="col form-group">
                                <input type="text" name="name" class="form-control" id="name" placeholder="Nama"
                                    required>
                            </div>
                            <div class="col form-group">
                                <input type="email" class="form-control" name="email" id="email" placeholder="Email"
                                    required>
                            </div>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="instansi" id="instansi" placeholder="Instansi"
                                required>
                        </div>
                        <div class="form-group">
                            <textarea class="form-control" name="pesan" rows="5" placeholder="Pesan"
                                required></textarea>
                        </div>
                        <div class="my-3">
                            <div class="loading">Loading</div>
                            <div class="error-message"></div>
                            <div class="sent-message">Your message has been sent. Thank you!</div>
                        </div>
                        <div class="text-center"><button type="submit">Send Message</button></div>
                    </form>
                </div>

            </div>

        </div>
    </section><!-- End Contact Section -->

</main>

<script>
    $(function() {
        $("#home_nav").addClass('active')
    });
</script>
@endsection

@section('style')

@endsection
