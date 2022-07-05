<!-- ======= Contact Section ======= -->
<section id="contact" class="contact py-3">
    <div class="container" data-aos="fade-up">

        <div class="section-title ">
            {{-- <h2>Kontak</h2> --}}
            <h3 class="m-0"><span>Kontak Kami</span></h3>
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
                    frameborder="0" style="border:0; width: 100%; height: 300px;" allowfullscreen></iframe>
            </div>

            <div class="col-lg-6">
                <form action="asd" method="post" role="form" class="php-email-form" id="pesan_form">
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
                        <textarea class="form-control" name="pesan" rows="3" placeholder="Pesan" required></textarea>
                    </div>
                    <div class="my-3">
                        <div class="loading">Loading</div>
                        {{-- <div class="error-message"></div> --}}
                        <div class="sent-message">Your message has been sent. Thank you!</div>
                    </div>
                    <div class="text-center"><button type="submit">Send Message</button></div>
                </form>
            </div>

        </div>

    </div>
</section><!-- End Contact Section -->

<style>
    /*--------------------------------------------------------------
# Contact
--------------------------------------------------------------*/
    .contact .info-box {
        color: #444444;
        text-align: center;
        box-shadow: 0 0 30px rgba(214, 215, 216, 0.3);
        padding: 10px 0 15px 0;
    }

    .contact .info-box i {
        font-size: 32px;
        color: var(--primary-color);
        border-radius: 50%;
        padding: 8px;
        border: 2px dotted #b3d1fa;
    }

    .contact .info-box h3 {
        font-size: 20px;
        color: #777777;
        font-weight: 700;
        margin: 10px 0;
    }

    .contact .info-box p {
        padding: 0;
        line-height: 24px;
        font-size: 14px;
        margin-bottom: 0;
    }

    .contact .php-email-form {
        box-shadow: 0 0 30px rgba(214, 215, 216, 0.4);
        padding: 15px 15px 15px 15px;
    }

    .contact .php-email-form .error-message {
        display: none;
        color: #fff;
        background: #ed3c0d;
        text-align: left;
        padding: 15px;
        font-weight: 600;
    }

    .contact .php-email-form .error-message br+br {
        margin-top: 25px;
    }

    .contact .php-email-form .sent-message {
        display: none;
        color: #fff;
        background: #18d26e;
        text-align: center;
        padding: 15px;
        font-weight: 600;
    }

    .contact .php-email-form .loading {
        display: none;
        background: #fff;
        text-align: center;
        padding: 15px;
    }

    .contact .php-email-form .loading:before {
        content: "";
        display: inline-block;
        border-radius: 50%;
        width: 24px;
        height: 24px;
        margin: 0 10px -6px 0;
        border: 3px solid #18d26e;
        border-top-color: #eee;
        -webkit-animation: animate-loading 1s linear infinite;
        animation: animate-loading 1s linear infinite;
    }

    .contact .php-email-form .form-group {
        margin-bottom: 20px;
    }

    .contact .php-email-form input,
    .contact .php-email-form textarea {
        border-radius: 0;
        box-shadow: none;
        font-size: 14px;
    }

    .contact .php-email-form input:focus,
    .contact .php-email-form textarea:focus {
        border-color: var(--primary-color);
    }

    .contact .php-email-form input {
        padding: 10px 15px;
    }

    .contact .php-email-form textarea {
        padding: 12px 15px;
    }

    .contact .php-email-form button[type=submit] {
        background: var(--primary-color);
        border: 0;
        padding: 10px 30px;
        color: #fff;
        transition: 0.4s;
        border-radius: 4px;
    }

    .contact .php-email-form button[type=submit]:hover {
        background: #3b8af2;
    }
</style>
