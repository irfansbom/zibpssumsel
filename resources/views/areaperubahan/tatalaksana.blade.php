@extends('layout/areaperubahan')

@section('content')
    <!-- ======= Breadcrumbs Section ======= -->
    <section class="breadcrumbs">
        <div class="container">

            <div class="d-flex justify-content-between align-items-center">
                <h2><strong>Penataan Tatalaksana</strong></h2>
                <ol>
                    <li>Area Perubahan</li>
                    <li>Penataan Tatalaksana</li>
                </ol>
            </div>

        </div>
    </section><!-- Breadcrumbs Section -->
    <!-- ======= area Details Section ======= -->
    <section id="portfolio-details" class="portfolio-details">
        <div class="container">
            <div class="row gy-4">
                <div class="col-lg-8">
                    <div class="portfolio-details-slider swiper">
                        <div class="swiper-wrapper align-items-center">
                            <div class="swiper-slide">
                                <img src="{{ url('assets/img/footage/(4).jpg') }}" alt="">
                            </div>

                            <div class="swiper-slide">
                                <img src="{{ url('assets/img/footage/(7).jpg') }}" alt="">
                            </div>

                            {{-- <div class="swiper-slide">
                                <img src="{{ url('assets/img/footage/(4).jpg') }}" alt="">
                            </div> --}}

                        </div>
                        <div class="swiper-pagination"></div>
                    </div>
                    <h4>Rencana kerja yang perlu dilakukan untuk menerapkan managemen perubahan, sebagai berikut: </h4>
                    <div class="row">
                        <div class="col">
                            <table class="table table-bordered" style="font-size: 13px">
                                <tr class="table-primary text-center">
                                    <th>No</th>
                                    <th>Kegiatan</th>
                                    <th>Target</th>
                                    <th>Bukti Pendukung</th>
                                </tr>
                                <tr>
                                    <td><b>1</b> </td>
                                    <td colspan="3">
                                        <b> Pembentukan Tim Kerja Pembangunan Zona Integritas</b>
                                    </td>
                                </tr>
                                <tr>
                                    <td>a.</td>
                                    <td>Pembentukan tim kerja
                                        untuk melakukan
                                        pembangunan Zona
                                        Integritas </td>
                                    <td>Tim telah dibentuk di dalam
                                        unit kerja
                                    </td>
                                    <td>SK Tim Kerja ZI, dokumen
                                        rapat pembentukan </td>
                                </tr>
                                <tr>
                                    <td>b.</td>
                                    <td>Penentuan kerja anggota
                                        Tim selain melalui
                                        prosedur/mekanisme yang
                                        jelas </td>
                                    <td>Ada prosedur/mekanisme
                                        yang jelas
                                    </td>
                                    <td>SOP Penentuan
                                        Anggota Tim Kerja
                                        , Dokumen kriteria
                                        pemilihan anggota
                                        tim kerja ZI</td>
                                </tr>
                                <tr>
                                    <td> <b> 2 </b></td>
                                    <td colspan="3"> <b>Dokumen Rencana Pembangunan Zona Integritas </b>
                                    </td>

                                </tr>
                                <tr>
                                    <td>a.</td>
                                    <td>Penyusunan Buku Pedoman
                                        rencana kerja pembangunan
                                        Zona Integritas menuju
                                        WBK/WBBM</td>
                                    <td>
                                        <ul>
                                            <li>
                                                Ada Dokumen Rencana
                                                Kerja Pembangunan Zona
                                                Integritas menuju
                                                WBK/WBBM</li>
                                            <li>Dokumen pembangunan
                                                terdapat target-target
                                                prioritas yang relevan
                                                dengan tujuan
                                                pembangunan
                                                WBK/WBBM </li>
                                        </ul>
                                    </td>
                                    <td>Buku Pedoman Rencana
                                        Kerja Pembangunan Zona
                                        Integritas BPS Provinsi
                                        Sumatera Selatan,
                                        Dokumen target prioritas
                                        dalam Rencana Kerja
                                        Pembangunan ZI </td>
                                </tr>
                                <tr>
                                    <td>b</td>
                                    <td>Kegiatan Sosialisasi
                                        WBK/WBBM
                                    </td>
                                    <td>Ada Kegiatan Sosialisasi
                                        WBK/WBBM
                                        terlaksana
                                        para peserta memahami
                                        tujuan pembangunan ZI </td>
                                    <td>Video testimoni, bukti
                                        kegiatan sosialisasi, yel
                                        yel salam perubahan</td>
                                </tr>
                                <tr>
                                    <td>c</td>
                                    <td>Sosialisasi dengan Media
                                        Poster / banner</td>
                                    <td>Ada Informasi berupa Poster
                                        / banner konten tujuan
                                        pembangunan ZI menuju
                                        WBK/WBBM</td>
                                    <td>Akrilik, spanduk,
                                        standing banner, website,
                                        leaflet, papan
                                        pengumuman, angket
                                        pelayanan</td>
                                </tr>
                                <tr>
                                    <td> <b>3</b></td>
                                    <td colspan="3"><b>Pemantauan dan Evaluasi Pembangunan WBK/WBBM</b></td>
                                </tr>
                                <tr>
                                    <td>a</td>
                                    <td>Kegiatan Rapat monitoring
                                        dan evaluasi pelaksanaan
                                        pembangunan Zona
                                        Integritas menuju
                                        WBK/WBBM</td>
                                    <td>Terlaksana Kegiatan Rapat
                                        monitoring dan evaluasi
                                        pelaksanaan pembangunan
                                        WBK/WBBM </td>
                                    <td>notulen rapat, daftar hadir,
                                        undangan, foto kegiatan
                                        sosialisasi, </td>
                                </tr>
                                <tr>
                                    <td>b</td>
                                    <td>Tindak Lanjut Evaluasi
                                        pelaksanaan pembangunan
                                        Zona Integritas menuju
                                        WBK/WBBM </td>
                                    <td> Tindak Lanjut Evaluasi
                                        pelaksanaan pembangunan
                                        Zona Integritas menuju
                                        WBK/WBBM</td>
                                    <td>Dokumen Tindak Lanjut</td>
                                </tr>
                                <tr>
                                    <td><b>4</b></td>
                                    <td colspan="3"><b>Perubahan pola pikir dan budaya kerja</b></td>
                                </tr>
                                <tr>
                                    <td>a</td>
                                    <td>Membentuk pimpinan
                                        berperan sebagai role model
                                        dalam pelaksanaan
                                        Pembangunan
                                        WBK/WBBM</td>
                                    <td>Pimpinan di setiap unit kerja
                                        memberikan teladan nyata
                                        dalam pelaksanaan
                                        pembangunan Zona Integritas
                                        menuju WBK/WBBM </td>
                                    <td>rekap absen, bukti pimpinan
                                        berpartsipasi dalam kegiatan</td>
                                </tr>
                                <tr>
                                    <td>b</td>
                                    <td>Membentuk agen perubahan </td>
                                    <td>Terbentuk Agen Perubahan </td>
                                    <td>SK Tim Perubahan </td>
                                </tr>
                                <tr>
                                    <td>c</td>
                                    <td>Sosialisasi membangun
                                        perubahan budaya kerja dan
                                        pola pikir di lingkungan
                                        organisasi</td>
                                    <td>Perubahan budaya kerja dan
                                        pola pikir di lingkungan
                                        organisasi BPS Sumsel sesuai
                                        nilai inti BPS</td>
                                    <td>Laporan Kegiatan sesuai
                                        dengan dokumen ZI,
                                        kompilasi notulen rapat,
                                        dokumentasi kegiatan</td>
                                </tr>
                                <tr>
                                    <td>d</td>
                                    <td>Melibatkan semua anggota
                                        organisasi dalam
                                        pembangunan Zona
                                        Integritas menuju
                                        WBK/WBBM </td>
                                    <td>semua anggota organisasi
                                        bekerja dalam pembangunan
                                        Zona Integritas menuju
                                        WBK/WBBM</td>
                                    <td>Notulen rapat telah
                                        mencakup evaluasi
                                        /masukkan dari masing-
                                        masing seksi BPS
                                        Prov/Kab/Kota,
                                        dokumen pakta
                                        integritas seluruh
                                        pegawai</td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="area-info">
                        <strong>Manajemen perubahan </strong> bertujuan untuk mengubah secara sistematis dan konsisten
                        mekanisme
                        kerja, pola pikir (mind set), serta budaya kerja (culture set) individu pada unit kerja yang
                        dibangun, menjadi lebih baik sesuai dengan tujuan dan sasaran pembangunan Zona Integritas.
                    </div>
                    <div class="area-description">
                        <strong> Target yang ingin dicapai dengan program ini adalah:</strong>
                        <ol>
                            <li>Meningkatnya komitmen seluruh Jajaran pimpinan dan pegawai unit kerja dalam
                                membangun Zona Integritas menuju WBK/WBBM;
                            </li>
                            <li>Terjadinya perubahan pola pikir dan budaya kerja pada unitkerja;
                            </li>
                            <li>Menurunnya resiko kegagalan yang disebabkan kemungkinan timbulnya resistensi terhadap
                                perubahan</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </section><!-- End area Details Section -->


    <style>
        /*--------------------------------------------------------------
                                                                                                                                                                                                                                                                                                                                                                    # area Details
                                                                                                                                                                                                                                                                                                                                                                    --------------------------------------------------------------*/
        .portfolio-details {
            padding-top: 40px;
        }

        .portfolio-details .portfolio-details-slider img {
            width: 100%;
        }

        .portfolio-details .portfolio-details-slider .swiper-pagination {
            margin-top: 20px;
            position: relative;
        }

        .portfolio-details .portfolio-details-slider .swiper-pagination .swiper-pagination-bullet {
            width: 12px;
            height: 12px;
            background-color: #fff;
            opacity: 1;
            border: 1px solid var(--primary-color);
        }

        .portfolio-details .portfolio-details-slider .swiper-pagination .swiper-pagination-bullet-active {
            background-color: var(--primary-color);
        }

        .portfolio-details .area-info {
            padding: 30px;
            box-shadow: 0px 0 30px rgba(34, 34, 34, 0.08);
        }

        .portfolio-details .area-info h3 {
            font-size: 22px;
            font-weight: 700;
            margin-bottom: 20px;
            padding-bottom: 20px;
            border-bottom: 1px solid #eee;
        }

        .portfolio-details .area-info ul {
            list-style: none;
            padding: 0;
            font-size: 15px;
        }

        .portfolio-details .area-info ul li+li {
            margin-top: 10px;
        }

        .portfolio-details .area-description {
            padding-top: 30px;
            font-size: 13px
        }

        .portfolio-details .area-description h2 {
            font-size: 26px;
            font-weight: 700;
            margin-bottom: 20px;
        }

        .portfolio-details .area-description p {
            padding: 0;
        }
    </style>
@endsection
