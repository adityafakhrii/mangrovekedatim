@extends('layouts.master')

@section('title', 'Welcome to Mangrove Kedatim')

@section('content')

<div class="hero-wrap js-fullheight">
    <div class="overlay"></div>
    <div class="owl-carousel owl-theme">
        <div class="item">
            <div class="hero-wrap js-fullheight" style="background-image: url('{{ asset('images/1.jpg') }}');">
                <div class="overlay"></div>
                <div class="container">
                    <div class="row no-gutters slider-text js-fullheight align-items-center" data-scrollax-parent="true">
                        <div class="col-md-7 ftco-animate">
                            <span class="subheading">Welcome to</span>
                            <h1 class="mb-4">Wisata Mangrove Kedatim</h1>
                            <p class="caps">Jelajahi Keindahan Alami Mangrove Kedatim: Wisata Hijau, Udara Segar, dan Petualangan Seru!</p>
                        </div>
                        <a href="https://www.youtube.com/watch?v=CeaIxL1t5Yw" class="icon-video popup-vimeo d-flex align-items-center justify-content-center mb-4">
                            <span class="fa fa-play"></span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="item">
            <div class="hero-wrap js-fullheight" style="background-image: url('{{ asset('images/2.jpg') }}');">
                <div class="overlay"></div>
                <div class="container">
                    <div class="row no-gutters slider-text js-fullheight align-items-center" data-scrollax-parent="true">
                        <div class="col-md-7 ftco-animate">
                            <span class="subheading">Welcome to</span>
                            <h1 class="mb-4">Pesona Alam Mangrove Kedatim</h1>
                            <p class="caps">Temukan ketenangan di tengah hijaunya hutan mangrove yang menyejukkan!</p>
                        </div>
                        <a href="https://www.youtube.com/watch?v=CeaIxL1t5Yw" class="icon-video popup-vimeo d-flex align-items-center justify-content-center mb-4">
                            <span class="fa fa-play"></span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="item">
            <div class="hero-wrap js-fullheight" style="background-image: url('{{ asset('images/4.jpg') }}');">
                <div class="overlay"></div>
                <div class="container">
                    <div class="row no-gutters slider-text js-fullheight align-items-center" data-scrollax-parent="true">
                        <div class="col-md-7 ftco-animate">
                            <span class="subheading">Welcome to</span>
                            <h1 class="mb-4">Petualangan Seru di Wisata Mangrove</h1>
                            <p class="caps">Siap untuk menjelajah dan merasakan keajaiban alam Mangrove Kedatim?</p>
                        </div>
                        <a href="https://www.youtube.com/watch?v=CeaIxL1t5Yw" class="icon-video popup-vimeo d-flex align-items-center justify-content-center mb-4">
                            <span class="fa fa-play"></span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<section class="ftco-section services-section mt-5">
    <div class="container">
        <div class="row d-flex">
            <div class="col-md-6 order-md-last heading-section pl-md-5 ftco-animate d-flex align-items-center">
                <div class="w-100">
                    <span class="subheading">Welcome to Wisata Mangrove Kedatim</span>
                    <h2 class="mb-4">Saatnya Memulai Petualangan di Alam Lestari!</h2>
                    <p>Berlokasi di Desa Kebundadap Timur, Saronggi, Sumenep, Jawa Timur, Wisata Mangrove Kedatim telah menjadi destinasi favorit wisatawan, baik lokal maupun luar daerah. Selain menyuguhkan panorama alam yang memukau, tempat ini juga berhasil meraih penghargaan sebagai juara dalam lomba Desa Wisata Nusantara tahun 2022.</p>
                    <p>Pengunjung dapat menikmati pemandangan hutan mangrove yang hijau dan terjaga, dengan pohon-pohon bakau yang menjulang, akar-akar yang meliuk, serta suara merdu burung-burung yang menciptakan suasana damai dan menenangkan.</p>
                    <p><a href="https://maps.app.goo.gl/JVDFkTfMFvD4Jvn2A" target="_blank" class="btn btn-primary py-3 px-4">Lihat di Google Maps</a></p>
                </div>
            </div>
            <div class="col-md-6">
                <div class="row">
                    <div class="col-md-12 col-lg-6 d-flex align-self-stretch ftco-animate">
                        <div class="services services-1 color-1 d-block img" style="background-image: url('{{ asset('images/7.jpg') }}');">
                            <div class="icon d-flex align-items-center justify-content-center"><span class="flaticon-sun-umbrella"></span></div>
                            <div class="media-body">
                                <h3 class="heading mb-3">Activities</h3>
                                <p>Jelajahi keindahan Mangrove Kedatim dengan berjalan di sepanjang jembatan kayu di tengah hutan bakau.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 col-lg-6 d-flex align-self-stretch ftco-animate">
                        <div class="services services-1 color-2 d-block img" style="background-image: url('{{ asset('images/6.jpg') }}');">
                            <div class="icon d-flex align-items-center justify-content-center"><span class="flaticon-route"></span></div>
                            <div class="media-body">
                                <h3 class="heading mb-3">Travel Arrangements</h3>
                                <p>Berbagai fasilitas perjalanan untuk memudahkan kunjungan Anda.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 col-lg-6 d-flex align-self-stretch ftco-animate">
                        <div class="services services-1 color-3 d-block img" style="background-image: url('{{ asset('images/3.jpg') }}');">
                            <div class="icon d-flex align-items-center justify-content-center"><span class="flaticon-mountains"></span></div>
                            <div class="media-body">
                                <h3 class="heading mb-3">Nature</h3>
                                <p>Kekayaan flora dan fauna yang ada di hutan mangrove, serta cerita unik di balik keindahan alam ini.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 col-lg-6 d-flex align-self-stretch ftco-animate">
                        <div class="services services-1 color-4 d-block img" style="background-image: url('{{ asset('images/4.jpg') }}');">
                            <div class="icon d-flex align-items-center justify-content-center"><span class="flaticon-map"></span></div>
                            <div class="media-body">
                                <h3 class="heading mb-3">Best Service</h3>
                                <p>Pengalaman wisata yang tak terlupakan dengan layanan terbaik.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="ftco-section">
    <div class="container">
        <div class="row justify-content-center pb-4">
            <div class="col-md-12 heading-section text-center ftco-animate">
                <span class="subheading">Objek Wisata</span>
                <h2 class="mb-4">Galeri Mangrove Kedatim</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 ftco-animate">
                <div class="project-wrap">
                    <img src="{{ asset('images/1.jpg') }}" alt="Gambar 1" class="img">
                </div>
            </div>
            <div class="col-md-4 ftco-animate">
                <div class="project-wrap">
                    <img src="{{ asset('images/2.jpg') }}" alt="Gambar 2" class="img">
                </div>
            </div>
            <div class="col-md-4 ftco-animate">
                <div class="project-wrap">
                    <img src="{{ asset('images/3.jpg') }}" alt="Gambar 3" class="img">
                </div>
            </div>
            <div class="col-md-4 ftco-animate">
                <div class="project-wrap">
                    <img src="{{ asset('images/4.jpg') }}" alt="Gambar 4" class="img">
                </div>
            </div>
            <div class="col-md-4 ftco-animate">
                <div class="project-wrap">
                    <img src="{{ asset('images/5.jpg') }}" alt="Gambar 5" class="img">
                </div>
            </div>
            <div class="col-md-4 ftco-animate">
                <div class="project-wrap">
                    <img src="{{ asset('images/6.jpg') }}" alt="Gambar 6" class="img">
                </div>
            </div>
        </div>
    </div>
</section>

<section class="ftco-section ftco-about img mt-4" style="background-image: url('{{ asset('images/1.jpg') }}');">
    <div class="overlay"></div>
    <div class="container py-md-5">
        <div class="row py-md-5">
            <div class="col-md d-flex align-items-center justify-content-center">
                <a href="https://www.youtube.com/watch?v=CeaIxL1t5Yw" class="icon-video popup-vimeo d-flex align-items-center justify-content-center mb-4">
                    <span class="fa fa-play"></span>
                </a>
            </div>
        </div>
    </div>
</section>

<section class="ftco-section ftco-about ftco-no-pt img">
    <div class="container">
        <div class="row d-flex">
            <div class="col-md-12 about-intro">
                <div class="row">
                    <div class="col-md-6 d-flex align-items-stretch">
                        <div class="img d-flex w-100 align-items-center justify-content-center" style="background-image:url('{{ asset('images/4.jpg') }}');">
                        </div>
                    </div>
                    <div class="col-md-6 pl-md-5 py-5">
                        <div class="row justify-content-start pb-3">
                            <div class="col-md-12 heading-section ftco-animate">
                                <span class="subheading">Tentang Kami</span>
                                <h2 class="mb-4">Nikmati Wisata yang Berkesan di Mangrove Kedatim</h2>
                                <p>Di sudut indah Desa Kebundadap Timur, Saronggi, Sumenep, tersembunyi surga alam hutan mangrove yang asri. Mangrove Kedatim menghadirkan pengalaman wisata unik, di mana keindahan alam hijau, suara burung, dan segarnya udara laut menyatu untuk menciptakan ketenangan. Kami berkomitmen untuk memberikan perjalanan yang tak terlupakan, sambil menjaga kelestarian alam dan kenyamanan para pengunjung.</p>
                                <p><a href="#" class="btn btn-primary">Selengkapnya</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="ftco-section testimony-section bg-bottom" style="background-image: url('{{ asset('images/2.jpg') }}');">
    <div class="overlay"></div>
    <div class="container">
        <div class="row justify-content-center pb-4">
            <div class="col-md-7 text-center heading-section heading-section-white ftco-animate">
                <span class="subheading">Review Google Maps</span>
                <h2 class="mb-4">Ulasan Pengunjung</h2>
            </div>
        </div>
        <div class="row ftco-animate">
            <div class="col-md-12">
                <div class="carousel-testimony owl-carousel">
                    <div class="item">
                        <div class="testimony-wrap py-4">
                            <div class="text">
                                <p class="star">
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                </p>
                                <p class="mb-4">tempat nya bagus dan luas, terdapat spot foto di jogging track, spesies mangrove nya banyak (22 spesies), fasilitas lengkap dari toilet, musholla hingga kantin. sangat nyaman dan aman 💗</p>
                                <div class="d-flex align-items-center">
                                    <div class="user-img" style="background-image: url('{{ asset('images/user.png') }}')"></div>
                                    <div class="pl-3">
                                        <p class="name">Meirna Tr</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="testimony-wrap py-4">
                            <div class="text">
                                <p class="star">
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                </p>
                                <p class="mb-4">Buat yg suka ketenangan dan alam ini rekom sih. Apalagi pas sore menjelang malam saat lampu"ne semua nyala. Ditempatnya bahkan ada stop kontak tiap gazebonya. Mantap</p>
                                <div class="d-flex align-items-center">
                                    <div class="user-img" style="background-image: url('{{ asset('images/user.png') }}')"></div>
                                    <div class="pl-3">
                                        <p class="name">Yogi Noviana</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="testimony-wrap py-4">
                            <div class="text">
                                <p class="star">
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                </p>
                                <p class="mb-4">wisata alam yang keren, mangrovenya sudah besar2 dan teduh Aksesnya mudah Track untuk pengunjung ada yang dari kayu ada dari bambu. Harga tiket terjangkau. Ada toilet dan cafe juga.</p>
                                <div class="d-flex align-items-center">
                                    <div class="user-img" style="background-image: url('{{ asset('images/user.png') }}')"></div>
                                    <div class="pl-3">
                                        <p class="name">Dian Ekawati Suryaman</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="ftco-intro ftco-section mt-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 text-center">
                <div class="img"  style="background-image: url('{{ asset('images/4.jpg') }}');">
                    <div class="overlay"></div>
                    <h2>Tiket Terjangkau, Hanya Rp10.000!</h2>
                    <p>Dengan harga tiket yang sangat terjangkau, hanya 10 ribu rupiah, Anda sudah bisa menikmati keindahan hutan mangrove yang asri dan menenangkan. Nikmati pengalaman berwisata alam tanpa perlu menguras kantong!</p>
                    <p class="mb-0"><a href="https://maps.app.goo.gl/JVDFkTfMFvD4Jvn2A" target="_blank" class="btn btn-primary px-4 py-3">Lihat di Google Maps</a></p>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
