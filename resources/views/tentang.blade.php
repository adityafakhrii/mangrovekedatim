@extends('layouts.master')

@section('title', 'Tentang | Mangrove Kedatim')

@section('content')

<section class="hero-wrap hero-wrap-2 js-fullheight" style="background-image: url('{{ asset('images/1.jpg') }}');">
    <div class="overlay"></div>
    <div class="container">
      <div class="row no-gutters slider-text js-fullheight align-items-end justify-content-center">
        <div class="col-md-9 ftco-animate pb-5 text-center">
         <p class="breadcrumbs"><span class="mr-2"><a href="{{ url('/') }}">Home <i class="fa fa-chevron-right"></i></a></span> <span>Tentang<i class="fa fa-chevron-right"></i></span></p>
         <h1 class="mb-0 bread">Tentang Kami</h1>
       </div>
     </div>
   </div>
  </section>

  <section class="ftco-section services-section mt-5">
    <div class="container">
      <div class="row d-flex">
        <div class="col-md-6 order-md-last heading-section pl-md-5 ftco-animate d-flex align-items-center">
          <div class="w-100">
            <span class="subheading">Welcome to Wisata Mangrove Kedatim</span>
            <h2 class="mb-4">Saatnya Memulai Petualangan di Alam Lestari!</h2>
            <p>Berlokasi di Desa Kebundadap Timur, Saronggi, Sumenep, Jawa Timur, Wisata Mangrove Kedatim telah menjadi destinasi favorit wisatawan, baik lokal maupun luar daerah. Selain menyuguhkan panorama alam yang memukau, tempat ini juga berhasil meraih penghargaan sebagai juara dalam lomba Desa Wisata Nusantara tahun 2022.</p>
            <p>Pengunjung dapat menikmati pemandangan hutan mangrove yang hijau dan terjaga, dengan pohon-pohon bakau yang menjulang, akar-akar yang meliuk, serta suara merdu burung-burung yang menciptakan suasana damai dan menenangkan.</p>
            <p>Salah satu daya tarik utama Wisata Mangrove Kedatim adalah jembatan kayu sepanjang 850 meter yang dibuat dari kayu jati berkualitas, didatangkan langsung dari Kalimantan. Pengunjung dapat berjalan santai di sepanjang jembatan sambil menikmati keindahan berbagai jenis tanaman bakau dari dekat. Terdapat 22 spesies mangrove di area ini, seperti Rhizophora Mucronata, Rhizophora Stylosa, Rhizophora Apiculata, Sonneratia, dan masih banyak lagi.</p>
            <p>Selain menjadi tempat wisata edukatif yang sangat bermanfaat untuk menambah wawasan, lokasi ini juga menawarkan 23 gazebo dengan atap dari rumput ilalang, serta banyak spot foto Instagramable yang membuat pengunjung betah berlama-lama setelah berkeliling</p>
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


  <section class="ftco-section ftco-about img" style="background-image: url('{{ asset('images/4.jpg') }}');">
   <div class="overlay"></div>
   <div class="container py-md-5">
    <div class="row py-md-5">
     <div class="col-md d-flex align-items-center justify-content-center">
      <a href="https://vimeo.com/45830194" class="icon-video popup-vimeo d-flex align-items-center justify-content-center mb-4">
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
           <span class="subheading">Harga Tiket Masuk</span>
           <h2 class="mb-4">Wisata Alam <br> Hanya 10 Ribu!</h2>
           <p>Dengan harga tiket yang sangat terjangkau, hanya 10 ribu rupiah, Anda sudah bisa menikmati keindahan hutan mangrove yang asri dan menenangkan. Nikmati pengalaman berwisata alam tanpa perlu menguras kantong!</p>
           <p><a href="https://maps.app.goo.gl/JVDFkTfMFvD4Jvn2A" target="_blank" class="btn btn-primary py-3 px-4">Lihat di Google Maps</a></p>
         </div>
       </div>
     </div>
   </div>
  </div>
  </div>
  </div>
  </section>

@endsection
