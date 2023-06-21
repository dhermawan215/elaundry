@extends('layouts.front_app')

@section('title')
    E-Laundry
@endsection

@section('front_content')
    <section style="padding-top: 7rem;">
        <div class="bg-holder" style="background-image:url({{ asset('user/assets/img/hero/hero-bg.svg') }});">
        </div>
        <!--/.bg-holder-->

        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-5 col-lg-6 order-0 order-md-1 text-end"><img class="pt-7 pt-md-0 hero-img"
                        src="{{ asset('asset/hero.png') }}" alt="hero-header" /></div>
                <div class="col-md-7 col-lg-6 text-md-start text-center py-6">
                    <h4 class="fw-bold text-danger mb-3">Solusi pakaian anda</h4>
                    <h1 class="hero-title">Pakaian kotor? Malas Cuci?.</h1>
                    <p class="mb-4 fw-medium">Nikmati hidupmu dengan sekali klik<br class="d-none d-xl-block" />Pakaian
                        langsung bersih<br class="d-none d-xl-block" />nikmati hidup, nikmati waktumu untuk berkreatifiitas
                    </p>
                    <div class="text-center text-md-start"> <a
                            class="btn btn-primary btn-lg me-md-4 mb-3 mb-md-0 border-0 primary-btn-shadow" href="#!"
                            role="button">Pesan Sekarang</a>
                        <div class="w-100 d-block d-md-none"></div><a href="#!" role="button" data-bs-toggle="modal"
                            data-bs-target="#popupVideo"><span
                                class="btn btn-danger round-btn-lg rounded-circle me-3 danger-btn-shadow"> <img
                                    src="{{ asset('user/assets/img/hero/play.svg') }}" width="15"
                                    alt="paly" /></span></a><span class="fw-medium">Demo</span>
                        <div class="modal fade" id="popupVideo" tabindex="-1" aria-labelledby="popupVideo"
                            aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered modal-lg">
                                <div class="modal-content">
                                    <iframe class="rounded" style="width:100%;max-height:500px;" height="500px"
                                        src="https://www.youtube.com/embed/_lhdhL4UDIo" title="YouTube video player"
                                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                        allowfullscreen="allowfullscreen"></iframe>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ============================================-->
    <!-- <section> begin ============================-->
    <section class="pt-5 pt-md-9" id="service">

        <div class="container">
            <div class="position-absolute z-index--1 end-0 d-none d-lg-block"><img
                    src="{{ asset('user/assets/img/category/shape.svg') }}" style="max-width: 200px" alt="service" /></div>
            <div class="mb-7 text-center">
                {{-- <h5 class="text-secondary">CATEGORY </h5> --}}
                <h3 class="fs-xl-10 fs-lg-8 fs-7 fw-bold font-cursive text-capitalize">Layanan Terbaik Kami</h3>
            </div>
            <div class="row">
                <div class="col-lg-3 col-sm-6 mb-6">
                    <div class="card service-card shadow-hover rounded-3 text-center align-items-center">
                        <div class="card-body p-xxl-5 p-4"> <img src="{{ asset('user/assets/img/category/icon1.png') }}"
                                width="75" alt="Service" />
                            <h4 class="mb-3">Pesan Online</h4>
                            <p class="mb-0 fw-medium">Pesan Via Whatsaap, atau aplikasi kami
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 mb-6">
                    <div class="card service-card shadow-hover rounded-3 text-center align-items-center">
                        <div class="card-body p-xxl-5 p-4"> <img src="{{ asset('user/assets/img/category/icon2.png') }}"
                                width="75" alt="Service" />
                            <h4 class="mb-3">Profesional</h4>
                            <p class="mb-0 fw-medium">Pelayanan kami dilakukan oleh tenanga ahli dan senantiasa menjamin
                                kualitas
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 mb-6">
                    <div class="card service-card shadow-hover rounded-3 text-center align-items-center">
                        <div class="card-body p-xxl-5 p-4"> <img src="{{ asset('user/assets/img/category/icon3.png') }}"
                                width="75" alt="Service" />
                            <h4 class="mb-3">Terpercaya</h4>
                            <p class="mb-0 fw-medium">Telah dipercaya dan mendapatkan berbagi macam ulasan positif</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 mb-6">
                    <div class="card service-card shadow-hover rounded-3 text-center align-items-center">
                        <div class="card-body p-xxl-5 p-4"> <img src="{{ asset('user/assets/img/category/icon4.png') }}"
                                width="75" alt="Service" />
                            <h4 class="mb-3">Cek Laundri</h4>
                            <p class="mb-0 fw-medium">Kamu bisa cek progress laundry dimana saja, kapan saja</p>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- end of .container-->

    </section>
    <!-- <section> close ============================-->
    <!-- ============================================-->
    <!-- ============================================-->
    <!-- <section> begin ============================-->
    {{-- <section class="pt-5" id="destination">

        <div class="container">
            <div class="position-absolute start-100 bottom-0 translate-middle-x d-none d-xl-block ms-xl-n4"><img
                    src="{{ asset('user/assets/img/dest/shape.svg') }}" alt="destination" /></div>
            <div class="mb-7 text-center">
                <h5 class="text-secondary">Top Selling </h5>
                <h3 class="fs-xl-10 fs-lg-8 fs-7 fw-bold font-cursive text-capitalize">Top Destinations</h3>
            </div>
            <div class="row">
                <div class="col-md-4 mb-4">
                    <div class="card overflow-hidden shadow"> <img class="card-img-top"
                            src="{{ asset('user/assets/img/dest/dest1.jpg') }}" alt="Rome, Italty" />
                        <div class="card-body py-4 px-3">
                            <div class="d-flex flex-column flex-lg-row justify-content-between mb-3">
                                <h4 class="text-secondary fw-medium"><a
                                        class="link-900 text-decoration-none stretched-link" href="#!">Rome,
                                        Italty</a></h4><span class="fs-1 fw-medium">$5,42k</span>
                            </div>
                            <div class="d-flex align-items-center"> <img
                                    src="{{ asset('user/assets/img/dest/navigation.svg') }}" style="margin-right: 14px"
                                    width="20" alt="navigation" /><span class="fs-0 fw-medium">10 Days Trip</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card overflow-hidden shadow"> <img class="card-img-top"
                            src="{{ asset('user/assets/img/dest/dest2.jpg') }}" alt="London, UK" />
                        <div class="card-body py-4 px-3">
                            <div class="d-flex flex-column flex-lg-row justify-content-between mb-3">
                                <h4 class="text-secondary fw-medium"><a
                                        class="link-900 text-decoration-none stretched-link" href="#!">London, UK</a>
                                </h4><span class="fs-1 fw-medium">$4.2k</span>
                            </div>
                            <div class="d-flex align-items-center"> <img
                                    src="{{ asset('user/assets/img/dest/navigation.svg') }}" style="margin-right: 14px"
                                    width="20" alt="navigation" /><span class="fs-0 fw-medium">12 Days Trip</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card overflow-hidden shadow"> <img class="card-img-top"
                            src="{{ asset('user/assets/img/dest/dest3.jpg') }}" alt="Full Europe" />
                        <div class="card-body py-4 px-3">
                            <div class="d-flex flex-column flex-lg-row justify-content-between mb-3">
                                <h4 class="text-secondary fw-medium"><a
                                        class="link-900 text-decoration-none stretched-link" href="#!">Full
                                        Europe</a></h4><span class="fs-1 fw-medium">$15k</span>
                            </div>
                            <div class="d-flex align-items-center"> <img
                                    src="{{ asset('user/assets/img/dest/navigation.svg') }}" style="margin-right: 14px"
                                    width="20" alt="navigation" /><span class="fs-0 fw-medium">28 Days Trip</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- end of .container-->

    </section> --}}
    <!-- <section> close ============================-->
    <!-- ============================================-->
    <!-- ============================================-->
    <!-- <section> begin ============================-->
    <section id="booking">

        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="mb-4 text-start">
                        <h5 class="text-secondary">Langkah mudah cuci pakaian anda </h5>
                        <h3 class="fs-xl-10 fs-lg-8 fs-7 fw-bold font-cursive text-capitalize">Hubungi kami, cucian selesai
                        </h3>
                    </div>
                    <div class="d-flex align-items-start mb-5">
                        <div class="bg-primary me-sm-4 me-3 p-3" style="border-radius: 13px"> <i
                                class="bi bi-star text-white"></i>
                        </div>
                        <div class="flex-1">
                            <h5 class="text-secondary fw-bold fs-0">Layanan Premium</h5>
                            <p>Kami mengutamakan pelayanan <br class="d-none d-sm-block">untuk anda</p>
                        </div>
                    </div>
                    <div class="d-flex align-items-start mb-5">
                        <div class="bg-danger me-sm-4 me-3 p-3" style="border-radius: 13px"> <i
                                class="bi bi-bicycle text-white"></i></div>
                        <div class="flex-1">
                            <h5 class="text-secondary fw-bold fs-0">Layanan Antar Jemput</h5>
                            <p>Lokasi anda jauh? <br class="d-none d-sm-block"> kami ambil dan antar ke rumah.</p>
                        </div>
                    </div>
                    <div class="d-flex align-items-start mb-5">
                        <div class="bg-success me-sm-4 me-3 p-3" style="border-radius: 13px">
                            <i class="bi bi-chat-dots-fill text-white"></i>
                        </div>
                        <div class="flex-1">
                            <h5 class="text-secondary fw-bold fs-0">Pemesanan Fleksibel</h5>
                            <p>Pesan Via Whatsapp <br class="d-none d-sm-block"> atau aplikasi</p>
                        </div>
                    </div>
                    <div class="d-flex align-items-start mb-5">
                        <div class="bg-info me-sm-4 me-3 p-3" style="border-radius: 13px"> <i
                                class="bi bi-credit-card-fill text-white"></i>
                        </div>
                        <div class="flex-1">
                            <h5 class="text-secondary fw-bold fs-0">Pembayaran Fleksibel</h5>
                            <p>Bayar Langsung atau Online <br class="d-none d-sm-block"> all in one order </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 d-flex justify-content-center align-items-start">
                    <div class="card position-relative shadow" style="max-width: 370px;">
                        <div class="position-absolute z-index--1 me-10 me-xxl-0" style="right:-160px;top:-210px;">
                            <img src="{{ asset('user/assets/img/steps/bg.png') }}" style="max-width:550px;"
                                alt="shape" />
                        </div>
                        <div class="card-body p-3"> <img class="mb-4 mt-2 rounded-2 w-100"
                                src="{{ asset('asset/produk-section-3.jpg') }}" height="350px" alt="booking" />
                            {{-- <div>
                                <h5 class="fw-medium">Trip To Greece</h5>
                                <p class="fs--1 mb-3 fw-medium">14-29 June | by Robbin joseph</p>
                                <div class="icon-group mb-4"> <span class="btn icon-item"> <img
                                            src="{{ asset('user/assets/img/steps/leaf.svg') }}"
                                            alt="" /></span><span class="btn icon-item"> <img
                                            src="{{ asset('user/assets/img/steps/map.svg') }}"
                                            alt="" /></span><span class="btn icon-item"> <img
                                            src="{{ asset('user/assets/img/steps/send.svg') }}" alt="" /></span>
                                </div>
                                <div class="d-flex align-items-center justify-content-between">
                                    <div class="d-flex align-items-center mt-n1"><img class="me-3"
                                            src="{{ asset('user/assets/img/steps/building.svg') }}" width="18"
                                            alt="building" /><span class="fs--1 fw-medium">24 people going</span>
                                    </div>
                                    <div class="show-onhover position-relative">
                                        <div class="card hideEl shadow position-absolute end-0 start-xl-50 bottom-100 translate-xl-middle-x ms-3"
                                            style="width: 260px;border-radius:18px;">
                                            <div class="card-body py-3">
                                                <div class="d-flex">
                                                    <div style="margin-right: 10px"> <img class="rounded-circle"
                                                            src="{{ asset('user/assets/img/steps/favorite-placeholder.png') }}"
                                                            width="50" alt="favorite" /></div>
                                                    <div>
                                                        <p class="fs--1 mb-1 fw-medium">Ongoing </p>
                                                        <h5 class="fw-medium mb-3">Trip to rome</h5>
                                                        <h6 class="fs--1 fw-medium mb-2"><span>40%</span> completed
                                                        </h6>
                                                        <div class="progress" style="height: 6px;">
                                                            <div class="progress-bar" role="progressbar"
                                                                style="width: 40%;" aria-valuenow="25" aria-valuemin="0"
                                                                aria-valuemax="100"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <button class="btn"> <img src="{{ asset('user/assets/img/steps/heart.svg') }}"
                                                width="20" alt="step" /></button>
                                    </div>
                                </div>
                            </div> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- end of .container-->

    </section>
    <!-- <section> close ============================-->
    <!-- ============================================-->
    <!-- ============================================-->
    <!-- <section> begin ============================-->
    <section id="testimonial">

        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <div class="mb-8 text-start">
                        <h5 class="text-secondary">Testimoni </h5>
                        <h3 class="fs-xl-10 fs-lg-8 fs-7 fw-bold font-cursive text-capitalize">Apa kata mereka?</h3>
                    </div>
                </div>
                <div class="col-lg-1"></div>
                <div class="col-lg-6">
                    <div class="pe-7 ps-5 ps-lg-0">
                        <div class="carousel slide carousel-fade position-static" id="testimonialIndicator"
                            data-bs-ride="carousel">
                            <div class="carousel-indicators">
                                <button class="active" type="button" data-bs-target="#testimonialIndicator"
                                    data-bs-slide-to="0" aria-current="true" aria-label="Testimonial 0"></button>
                                <button class="false" type="button" data-bs-target="#testimonialIndicator"
                                    data-bs-slide-to="1" aria-current="true" aria-label="Testimonial 1"></button>
                                <button class="false" type="button" data-bs-target="#testimonialIndicator"
                                    data-bs-slide-to="2" aria-current="true" aria-label="Testimonial 2"></button>
                            </div>
                            <div class="carousel-inner">
                                <div class="carousel-item position-relative active">
                                    <div class="card shadow" style="border-radius:10px;">
                                        <div class="position-absolute start-0 top-0 translate-middle"> <img
                                                class="rounded-circle fit-cover"
                                                src="{{ asset('user/assets/img/testimonial/author.png') }}"
                                                height="65" width="65" alt="" /></div>
                                        <div class="card-body p-4">
                                            <p class="fw-medium mb-4">&quot;Sangat membantu saya, saya jadi hemat waktu dan
                                                bisa mengalokasikan waktu untuk kebutuhan yang lain&quot;</p>
                                            <h5 class="text-secondary">Kusuma Wirdana</h5>
                                            <p class="fw-medium fs--1 mb-0">Jakarta, Indonesia</p>
                                        </div>
                                    </div>
                                    <div class="card shadow-sm position-absolute top-0 z-index--1 mb-3 w-100 h-100"
                                        style="border-radius:10px;transform:translate(25px, 25px)"> </div>
                                </div>
                                <div class="carousel-item position-relative ">
                                    <div class="card shadow" style="border-radius:10px;">
                                        <div class="position-absolute start-0 top-0 translate-middle"> <img
                                                class="rounded-circle fit-cover"
                                                src="{{ asset('user/assets/img/testimonial/author2.png') }}"
                                                height="65" width="65" alt="" /></div>
                                        <div class="card-body p-4">
                                            <p class="fw-medium mb-4">&quot;Hidup menjadi menyenangkan, layanan mudah
                                                sekali tap untuk segalanya.&quot;</p>
                                            <h5 class="text-secondary">Dwi Wijayakusuma</h5>
                                            <p class="fw-medium fs--1 mb-0">Tanggerang, Indonesia</p>
                                        </div>
                                    </div>
                                    <div class="card shadow-sm position-absolute top-0 z-index--1 mb-3 w-100 h-100"
                                        style="border-radius:10px;transform:translate(25px, 25px)"> </div>
                                </div>
                                <div class="carousel-item position-relative ">
                                    <div class="card shadow" style="border-radius:10px;">
                                        <div class="position-absolute start-0 top-0 translate-middle"> <img
                                                class="rounded-circle fit-cover"
                                                src="{{ asset('user/assets/img/testimonial/author3.png') }}"
                                                height="65" width="65" alt="" /></div>
                                        <div class="card-body p-4">
                                            <p class="fw-medium mb-4">&quot;Saya merasa terbantu dan senang sekali
                                                menikmati hidup, cuci serasa mudah.&quot;</p>
                                            <h5 class="text-secondary">Kely</h5>
                                            <p class="fw-medium fs--1 mb-0">Jakarta, Indonesia</p>
                                        </div>
                                    </div>
                                    <div class="card shadow-sm position-absolute top-0 z-index--1 mb-3 w-100 h-100"
                                        style="border-radius:10px;transform:translate(25px, 25px)"> </div>
                                </div>
                            </div>
                            <div class="carousel-navigation d-flex flex-column flex-between-center position-absolute end-0 top-lg-50 bottom-0 translate-middle-y z-index-1 me-3 me-lg-0"
                                style="height:60px;width:20px;">
                                <button class="carousel-control-prev position-static" type="button"
                                    data-bs-target="#testimonialIndicator" data-bs-slide="prev"><img
                                        src="{{ asset('user/assets/img/icons/up.svg') }}" width="16"
                                        alt="icon" /></button>
                                <button class="carousel-control-next position-static" type="button"
                                    data-bs-target="#testimonialIndicator" data-bs-slide="next"><img
                                        src="{{ asset('user/assets/img/icons/down.svg') }}" width="16"
                                        alt="icon" /></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- end of .container-->

    </section>
    <!-- <section> close ============================-->
    <!-- ============================================-->
    {{-- <div class="position-relative pt-9 pt-lg-8 pb-6 pb-lg-8">
        <div class="container">
            <div class="row row-cols-lg-5 row-cols-md-3 row-cols-2 flex-center">
                <div class="col">
                    <div class="card shadow-hover mb-4" style="border-radius:10px;">
                        <div class="card-body text-center"> <img class="img-fluid"
                                src="{{ asset('user/assets/img/partner/1.png') }}" alt="" /></div>
                    </div>
                </div>
                <div class="col">
                    <div class="card shadow-hover mb-4" style="border-radius:10px;">
                        <div class="card-body text-center"> <img class="img-fluid"
                                src="{{ asset('user/assets/img/partner/2.png') }}" alt="" /></div>
                    </div>
                </div>
                <div class="col">
                    <div class="card shadow-hover mb-4" style="border-radius:10px;">
                        <div class="card-body text-center"> <img class="img-fluid"
                                src="{{ asset('user/assets/img/partner/3.png') }}" alt="" /></div>
                    </div>
                </div>
                <div class="col">
                    <div class="card shadow-hover mb-4" style="border-radius:10px;">
                        <div class="card-body text-center"> <img class="img-fluid"
                                src="{{ asset('user/assets/img/partner/4.png') }}" alt="" /></div>
                    </div>
                </div>
                <div class="col">
                    <div class="card shadow-hover mb-4" style="border-radius:10px;">
                        <div class="card-body text-center"> <img class="img-fluid"
                                src="{{ asset('user/assets/img/partner/5.png') }}" alt="" /></div>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
    <!-- ============================================-->
    <!-- <section> begin ============================-->
    {{-- <section class="pt-6">

        <div class="container">
            <div class="py-8 px-5 position-relative text-center"
                style="background-color: rgba(223, 215, 249, 0.199);border-radius: 129px 20px 20px 20px;">
                <div class="position-absolute start-100 top-0 translate-middle ms-md-n3 ms-n4 mt-3"> <img
                        src="assets/img/cta/send.png" style="max-width:70px;" alt="send icon" /></div>
                <div class="position-absolute end-0 top-0 z-index--1"> <img src="assets/img/cta/shape-bg2.png"
                        width="264" alt="cta shape" /></div>
                <div class="position-absolute start-0 bottom-0 ms-3 z-index--1 d-none d-sm-block"> <img
                        src="assets/img/cta/shape-bg1.png" style="max-width: 340px;" alt="cta shape" /></div>
                <div class="row justify-content-center">
                    <div class="col-lg-8 col-md-10">
                        <h2 class="text-secondary lh-1-7 mb-7">Subscribe to get information, latest news and other
                            interesting offers about Cobham</h2>
                        <form class="row g-3 align-items-center w-lg-75 mx-auto">
                            <div class="col-sm">
                                <div class="input-group-icon">
                                    <input class="form-control form-little-squirrel-control" type="email"
                                        placeholder="Enter email " aria-label="email" /><img class="input-box-icon"
                                        src="assets/img/cta/mail.svg" width="17" alt="mail" />
                                </div>
                            </div>
                            <div class="col-sm-auto">
                                <button class="btn btn-danger orange-gradient-btn fs--1">Subscribe</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div><!-- end of .container-->

    </section> --}}
    <!-- <section> close ============================-->
    <!-- ============================================-->
    <!-- ============================================-->
    <!-- <section> begin ============================-->
    <section class="pb-0 pb-lg-4">

        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-7 col-12 mb-4 mb-md-6 mb-lg-0 order-0"> <img class="mb-4"
                        src="https://technosolution.site/wp-content/uploads/2023/04/ADR-Techno-Solution.png"
                        width="100" alt="company logo" />
                    <p class="fs--1 text-secondary mb-0 fw-medium">PT ADR Technosolution</p>
                </div>
                <div class="col-lg-3 col-md-4 mb-4 mb-lg-0 order-lg-1 order-md-2">
                    <h4 class="footer-heading-color fw-bold font-sans-serif mb-3 mb-lg-4">Perusahaan</h4>
                    <ul class="list-unstyled mb-0">
                        <li class="mb-2"><a class="link-900 fs-1 fw-medium text-decoration-none" href="#!">Syarat
                                & Ketentuan</a></li>
                        <li class="mb-2"><a class="link-900 fs-1 fw-medium text-decoration-none"
                                href="#!">Karir</a></li>
                        <li class="mb-2"><a class="link-900 fs-1 fw-medium text-decoration-none"
                                href="#!">Privasi</a></li>
                    </ul>
                </div>
                <div class="col-lg-3 col-md-4 mb-4 mb-lg-0 order-lg-2 order-md-3">
                    <h4 class="footer-heading-color fw-bold font-sans-serif mb-3 mb-lg-4">Kontak</h4>
                    <ul class="list-unstyled mb-0">
                        <li class="mb-2"><a class="link-900 fs-1 fw-medium text-decoration-none" href="#!">Pusat
                                Pengaduan</a></li>
                        <li class="mb-2"><a class="link-900 fs-1 fw-medium text-decoration-none"
                                href="#!">Facebook</a></li>
                        <li class="mb-2"><a class="link-900 fs-1 fw-medium text-decoration-none"
                                href="#!">Tiktok</a></li>
                    </ul>
                </div>
                <div class="col-lg-3 col-md-5 col-12 mb-4 mb-md-6 mb-lg-0 order-lg-4 order-md-1">
                    <div class="icon-group mb-4"> <a class="text-decoration-none icon-item shadow-social" id="facebook"
                            href="#!"><i class="fab fa-facebook-f"> </i></a><a
                            class="text-decoration-none icon-item shadow-social" id="instagram" href="#!"><i
                                class="fab fa-instagram"> </i></a><a class="text-decoration-none icon-item shadow-social"
                            id="twitter" href="#!"><i class="fab fa-twitter"> </i></a></div>
                    <h4 class="fw-medium font-sans-serif text-secondary mb-3">Coba Aplikasi Kami</h4>
                    <div class="d-flex align-items-center"> <a href="#!"> <img class="me-2"
                                src="{{ asset('user/assets/img/play-store.png') }}" alt="play store" /></a><a
                            href="#!"> <img src="{{ asset('user/assets/img/apple-store.png') }}"
                                alt="apple store" /></a></div>
                </div>
            </div>
        </div><!-- end of .container-->

    </section>
    <!-- <section> close ============================-->
    <!-- ============================================-->
    <div class="py-5 text-center">
        <p class="mb-0 text-secondary fs--1 fw-medium">All rights reserved </p>
    </div>
@endsection
