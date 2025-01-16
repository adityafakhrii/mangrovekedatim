@extends('layouts.master')

@section('title', 'Fasilitas | Mangrove Kedatim')

@section('content')

<section class="hero-wrap hero-wrap-2 js-fullheight" style="background-image: url('{{ asset('images/1.jpg') }}');">
    <div class="overlay"></div>
    <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-end justify-content-center">
            <div class="col-md-9 ftco-animate pb-5 text-center">
                <p class="breadcrumbs"><span class="mr-2"><a href="{{ url('/') }}">Home <i class="fa fa-chevron-right"></i></a></span> <span>Fasilitas <i class="fa fa-chevron-right"></i></span></p>
                <h1 class="mb-0 bread">Fasilitas</h1>
            </div>
        </div>
    </div>
</section>

<section class="ftco-section ftco-no-pt ftco-no-pb">
    <div class="container">
        <div class="row">
            <div class="col-lg ftco-animate py-md-5 mt-md-5">
                <h2 class="mb-3">Fasilitas Wisata Mangrove Kedatim</h2>
                <p>Berikut adalah fasilitas yang tersedia di Wisata Mangrove Kedatim:</p>
                <ul>
                    <li>Toilet bersih</li>
                    <li>Musholla yang suci</li>
                    <li>Kedai makanan dan minuman yang sehat dan higienis</li>
                    <li>Gazebo untuk istirahat dan bercengkerama</li>
                </ul>
                <p>Catatan: Wisata ini belum menyediakan fasilitas camping atau bermalam.</p>
            </div>
        </div>
    </div>
</section>

@endsection
