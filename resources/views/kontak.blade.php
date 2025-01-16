@extends('layouts.master')

@section('title', 'Kontak | Mangrove Kedatim')

@section('content')

<section class="hero-wrap hero-wrap-2 js-fullheight" style="background-image: url('{{ asset('images/1.jpg') }}');">
    <div class="overlay"></div>
    <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-end justify-content-center">
            <div class="col-md-9 ftco-animate pb-5 text-center">
                <p class="breadcrumbs"><span class="mr-2"><a href="{{ url('/') }}">Home <i class="fa fa-chevron-right"></i></a></span> <span>Kontak <i class="fa fa-chevron-right"></i></span></p>
                <h1 class="mb-0 bread">Kontak</h1>
            </div>
        </div>
    </div>
</section>

<section class="ftco-section ftco-no-pb contact-section mb-4">
    <div class="container">
      <div class="row d-flex contact-info">
        <div class="col-md-4 d-flex">
         <div class="align-self-stretch box p-2 text-center">
          <div class="icon d-flex align-items-center justify-content-center">
           <span class="fa fa-map-marker"></span>
         </div>
         <h3 class="mb-2">Alamat</h3>
         <p>Jl. Pelabuhan, Dusun Ro'soro, Kebundadap Tim., Kec. Saronggi, Kabupaten Sumenep, Jawa Timur 69467</p>
       </div>
     </div>
     <div class="col-md-4 d-flex">
       <div class="align-self-stretch box p-2 text-center">
        <div class="icon d-flex align-items-center justify-content-center">
         <span class="fa fa-phone"></span>
       </div>
       <h3 class="mb-2">Nomor</h3>
       <p><a href="#">0817-0364-7654</a></p>
     </div>
   </div>
   <div class="col-md-4 d-flex">
     <div class="align-self-stretch box p-2 text-center">
      <div class="icon d-flex align-items-center justify-content-center">
       <span class="fa fa-paper-plane"></span>
     </div>
     <h3 class="mb-2">Email</h3>
     <p><a href="mailto:info@email.com">info@email.com</a></p>
   </div>
  </div>
  </div>
  </div>
  </section>

<section class="ftco-section contact-section ftco-no-pt">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div id="" class="bg-white">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3959.280237945146!2d113.86449809999999!3d-7.09348!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd9e3c79599d71b%3A0x4287239fd230d1b2!2sWisata%20Mangrove%20Kedatim!5e0!3m2!1sid!2sid!4v1726896257318!5m2!1sid!2sid" width="100%" height="720" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="ftco-intro ftco-section mt-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 text-center">
                <div class="img" style="background-image: url('{{ asset('images/4.jpg') }}');">
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
