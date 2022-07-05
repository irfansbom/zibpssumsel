@extends('layout/layout')
@section('content')
    <main id="main">
        <!-- ======= Breadcrumbs ======= -->
        <section class="breadcrumbs">
            <div class="container">

                <div class="d-flex justify-content-between align-items-center">
                    <h2></h2>
                    <ol>
                        <li><a href="{{ url('/') }}">Home</a></li>
                        <li>Profile</li>
                    </ol>
                </div>

            </div>
        </section><!-- End Breadcrumbs -->
        <section id="testimonials" class="testimonials"
            style="background-image:url('assets/img/footage/(7).jpg'); background-position: center center;
    background-size: cover;
    position: relative;">
            <div class=" container" data-aos="zoom-in">
                <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <h1>VISI</h1>
                                Penyedia Data Statistik Berkualitas untuk Indonesi Maju di BPS Provinsi Sumatera Selatan
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <h1>MISI</h1>
                                1. Menyediakan statistik berkualitas yang berstandar nasional dan internasional
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <h1>MISI</h1>
                                2. Membina K/L/D/I melalui Sistem Statistik Nasional yang berkesinambungan
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <h1>MISI</h1>
                                3. Mewujudkan pelayanan prima di bidang statistik untuk terwujudnya Sistem Statistik
                                Nasional
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <h1>MISI</h1>
                                4. Membangun SDM yang unggul dan adaptif berlandaskan nilai profesionalisme integritas dan
                                amanah
                            </div>
                        </div>
                    </div>
                    <div class="swiper-pagination"></div>
                </div>

            </div>
        </section>
        <section id="Tujuan" class="services pb-0">
            <div class="container" data-aos="fade-up">
                <div class="section-title">
                    <h2>Tujuan dan Sasaran</h2>
                    {{-- <h3>Check our <span>Services</span></h3> --}}
                    <p>Tujuan</p>
                </div>
                <div class="row" style="font-size:12px">
                    <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
                        <div class="icon-box py-4">
                            <div class="icon"><i class="bx">I</i></div>
                            {{-- <h4><a href="">Lorem Ipsum</a></h4> --}}
                            <p class="text-justify">pembangunan statistik menuntut BPS Provinsi Sumatera
                                Selatan untuk
                                meningkatkan kualitas data
                                statistik dalam rangka menyediakan data statistik yang akan digunakan untuk perencanaan,
                                monitoring, dan evaluasi pembangunan. </p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="zoom-in"
                        data-aos-delay="200">
                        <div class="icon-box py-4">
                            <div class="icon"><i class="bx">II</i></div>
                            {{-- <h4><a href="">Sed ut perspiciatis</a></h4> --}}
                            <p>meningkatnya kolaborasi, integrasi, dan standarisasi dalam penyelenggaraan SSN. Tujuan
                                tersebut memuat misi BPS untuk meningkatkan peran BPS Provinsi Sumatera Selatan: sebagai
                                Pusat Rujukan Statistik dalam terselenggaranya SSN, sebagai koordinator penyelenggaraan
                                statistik di Sumnatera Selatan baik statistik yang diselenggarakan oleh instansi pemerintah
                                ataupun masyarakat.</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0" data-aos="zoom-in"
                        data-aos-delay="300">
                        <div class="icon-box py-4">
                            <div class="icon"><i class="bx">III</i></div>
                            {{-- <h4><a href="">Magni Dolores</a></h4> --}}
                            <p>meningkatnya pelayanan prima dalam penyelenggaraan SSN. Keberhasilan upaya peningkatan
                                pelayanan prima hasil kegiatan statistik tidak terlepas dari dukungan dan peranan TIK, yang
                                diwujudkan melalui pembangunan arsitektur dan kerangka TIK dan manajemen informasi. </p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0" data-aos="zoom-in"
                        data-aos-delay="300">
                        <div class="icon-box py-4">
                            <div class="icon"><i class="bx ">IV</i></div>
                            {{-- <h4><a href="">Magni Dolores</a></h4> --}}
                            <p>Penguatan tata kelola kelembagaan dan reformasi birokrasi. Tujuan tersebut terkait dengan
                                misi membangun insan statistik yang unggul dan adaptif berlandaskan nilai profesionalisme,
                                berintegritas dan amanah untuk kemajuan perstatistikan. </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container mt-5" data-aos="fade-up">
                <div class="section-title pb-4">
                    {{-- <h2>Tujuan dan Sasaran</h2> --}}
                    {{-- <h3>Check our <span>Services</span></h3> --}}
                    <p>Sasaran</p>
                </div>
                <div class="row" style="font-size:12px">
                    <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
                        <div class="icon-box py-4">
                            <div class="icon"><i class="bi bi-people-fill"></i></div>
                            <h4><a href="#">Perspektif <span class="fst-italic">Stakeholder</span></a></h4>
                            <p class="text-start">Pada perspektif ini merupakan hasil akhir atau dampak yang diharapkan
                                dari seluruh pembangunan statistik, yang diindikasikan dengan:
                                <br>
                            <ol class="text-start ps-3">
                                <li class="text-start">Meningkatnya koordinasi, integrasi, dan sinkronisasi kegiatan
                                    statistik yang
                                    diselenggarakan pemerintah pusat dan daerah serta swasta;</li>
                                <li>
                                    Meningkatnya hubungan dengan responden dan pengguna data;
                                </li>
                                <li>Meningkatnya sarana dan prasarana, termasuk yang berbasis teknologi informasi dan
                                    komunikasi dalam kegiatan statistik</li>
                                <li>Meningkatnya penggunaan standar dan metodologi internasional di Indonesia;
                                    Meningkatnya ketersediaan statistik dengan menerapkan standard penjaminan kualitas</li>
                            </ol>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="zoom-in"
                        data-aos-delay="200">
                        <div class="icon-box py-4">
                            <div class="icon"><i class="bi bi-basket2-fill"></i></div>
                            <h4><a href="#">Perspektif <span class="fst-italic">Customer</span></a></h4>
                            <p class="text-start">Sasaran strategis yang ingin dicapai dalam tujuan penyediaan data
                                statistik untuk dimanfaatkan sebagai dasar pembangunan adalah:
                                <br>
                            <ol class="text-start ps-3">
                                <li class="text-start">Meningkatnya pemanfaatan data statistik yang berkualitas</li>
                                <li>
                                    Meningkatnya pelayanan prima dalam penyelenggaraan SSN adalah: Penguatan statistik
                                    sektoral K/L/D/I
                                </li>
                            </ol>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0" data-aos="zoom-in"
                        data-aos-delay="300">
                        <div class="icon-box py-4">
                            <div class="icon"><i class="bi bi-gear-wide-connected"></i></div>
                            <h4><a href="#">Perspektif <span class="fst-italic">Internal Process</span></a></h4>
                            <p class="text-start">Sasaran strategis yang ingin dicapai dalam tujuan meningkatnya kolaborasi,
                                integrasi, dan standardisasi dalam penyelenggaraan SSN adalah:
                                <br>
                                Penguatan komitmen K/L/D/I terhadap SSN
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0" data-aos="zoom-in"
                        data-aos-delay="300">
                        <div class="icon-box py-4">
                            <div class="icon"><i class="bi bi-journal-bookmark"></i></div>
                            <h4><a href="#">Perspektif <span class="fst-italic">Learning and Growth</span></a></h4>
                            <p class="text-start">Sasaran strategis yang ingin dicapai dalam tujuan penguatan tata kelola
                                kelembagaan dan reformasi birokrasi adalah:
                                <br>
                                SDM statistik yang unggul dan berdaya saing dalam kerangka tata kelola kelembagaan.
                        </div>
                    </div>
                </div>
            </div>
        </section><!-- End Services Section -->
        <section id="about" class="about pt-0">
            <div class="container" data-aos="fade-up">
                <div class="row">
                    <div class="col-lg-12 text-center" data-aos="fade-right" data-aos-delay="100">
                        <img src="{{ url('assets/img/infografis/infoberakhlak.jpeg') }}" class="img-fluid"
                            alt="" style="max-width: 70%">
                    </div>
                </div>
        </section>

        <section id="Nilai Inti" class="about section-bg">
            <div class="container" data-aos="fade-up">
                <div class="section-title">
                    <h2>Nilai Inti</h2>
                    <h3>Nilai Inti <span>BPS</span></h3>
                </div>

                <div class="row">
                    <div class="col-lg-3 d-flex justify-content-center" data-aos="fade-right" data-aos-delay="100">
                        <img src="{{ url('assets/img/infografis/nilaiinti.png') }}" class="img-fluid" alt=""
                            style="max-width: 300px; max-height: 300px">
                    </div>
                    <div class="col-lg-9 pt-4 pt-lg-0 content d-flex flex-column justify-content-center"
                        data-aos="fade-up" data-aos-delay="100">
                        {{-- <h3>Voluptatem dignissimos provident quasi corporis voluptates sit assumenda.</h3> --}}
                        <p class="fst-italic">
                            Core values (nilai–nilai inti) BPS merupakan pondasi yang kokoh untuk membangun jati diri dan
                            penuntun perilaku setiap insan BPS dalam melaksanakan tugas.
                        </p>
                        <ul>
                            <li class="mb-0">
                                <i class='fas fa-cogs'></i>
                                <div>
                                    <h5>Profesional</h5>
                                    <ol style="display: inline-block">
                                        <li class="my-2"><strong>Kompeten,</strong> Mempunyai keahlian dalam bidang tugas
                                            yang diemban</li>
                                        <li class="my-2"><strong>Efektif,</strong> Memberikan hasil maksimal</li>
                                        <li class="my-2"><strong>Efisien,</strong> Mengerjakan setiap tugas secara
                                            produktif, dengan sumber
                                            daya minimal
                                        </li>
                                        <li class="my-2"><strong>Inovatif,</strong> Selalu melaukan permbaruan dan/atau
                                            penyempurnaan melalui
                                            proses pembelajaran diri secara terus menerus
                                        </li>
                                        <li class="my-2"><strong>Sistemik,</strong> Meyakini bahwa setiap pekerjaan
                                            mempunyai tata urutan
                                            proses perkerjaan yang
                                            satu menjadi bagian tidak terpisahkan dari pekerjaan yang lain.
                                        </li>
                                    </ol>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-12 pt-4 pt-lg-0 content d-flex flex-column justify-content-center"
                        data-aos="fade-up" data-aos-delay="100">
                        <ul>
                            <li class="mt-0">

                                <i class='fas fa-handshake'></i>
                                <div>
                                    <h5>Integritas</h5>
                                    <ol style="display: inline-block">
                                        <li class="my-2"><strong>Dedikasi,</strong> Memiliki pengabdian yang tinggi
                                            terhadap
                                            profesi yang
                                            diemban dan institusi
                                        </li>
                                        <li class="my-2"><strong>Disiplin,</strong> Melaksanakan pekerjaan sesuai dengan
                                            ketentuan yang telah
                                            ditetapkan
                                        </li>
                                        <li class="my-2"><strong>Konsisten,</strong> Satunya kata dengan perbuatan
                                        </li>
                                        <li class="my-2"><strong>Terbuka,</strong> Menghargai ide, saran, pendapat,
                                            masukan,
                                            dan kritik dari
                                            berbagai pihak

                                        </li>
                                        <li class="my-2"><strong>Akuntabel,</strong> Bertanggung jawab dan setiap
                                            langkahnya
                                            terukur

                                        </li>
                                    </ol>
                                </div>
                            </li>
                            <li>
                                <i class="bi bi-shield-fill-check" style="font-size: 1rem;"></i>
                                <div>
                                    <h5>Amanah</h5>
                                    <ol style=" display: inline-block">
                                        <li class="my-2"><strong>Terpercaya,</strong> Melaksanakan pekerjaan sesuai
                                            dengan
                                            ketentuan, yang
                                            tidak hanya didasarkan pada
                                            logika tetapi juga sekaligus menyentuh dimensi mental spiritual
                                        </li>
                                        <li class="my-2"><strong>Jujur,</strong> Melaksanakan semua pekerjaan dengan
                                            tidak
                                            menyimpang dari
                                            prinsip moralitas
                                        </li>
                                        <li class="my-2"><strong>Tulus,</strong> Melaksanakan tugas tanpa pamrih,
                                            menghindari konflik
                                            kepentingan (pribadi,
                                            kelompok, dan golongan), serta mendedikasikan semua tugas untuk perlindungan
                                            kehidupan manusia, sebagai amal ibadah atau perbuatan untuk Tuhan Yang Maha Esa
                                        </li>
                                        <li class="my-2"><strong>Adil,</strong> Menempatkan sesuatu secara berkeadilan
                                            dan
                                            memberikan haknya
                                        </li>
                                    </ol>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>

            </div>
        </section>
        <section id="portfolio-details" class="portfolio-details">
            <div class="container">
                <div class="row gy-4">
                    <div class="col-lg-8">
                        <div class="portfolio-details-slider swiper">
                            <div class="swiper-wrapper align-items-center">

                                <div class="swiper-slide">
                                    <img src="{{ url('assets/img/inovasi/desa_cantik.png') }}" alt="">
                                </div>

                                <div class="swiper-slide">
                                    <img src="{{ url('assets/img/kegiatan/romantik2.jpeg') }}" alt="">
                                </div>

                                <div class="swiper-slide">
                                    <img src="{{ url('assets/img/kegiatan/romantik.jpeg') }}" alt="">
                                </div>

                            </div>
                            <div class="swiper-pagination"></div>
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div class="portfolio-info">
                            <div class="section-title">
                                <h2>Quick Win</h2>
                            </div>
                            <ul>
                                <li><strong></strong>1. Program pembinaan statistik sektoral kepada OPD agar mampu
                                    menyelenggarakan statistik sektoral secara mandiri sesuai NSPK</li>
                                <li><strong></strong>2. Program pembinaan statistik sektoral tingkat desa melalui
                                    Program Desa Cinta Statistik (Desa Cantik) dilaksanakan berkelanjutan </li>

                            </ul>
                        </div>

                    </div>

                </div>

            </div>
        </section><!-- End Portfolio Details Section -->


    </main>
@endsection

@section('style')
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
@endsection
