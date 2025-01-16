@extends('layouts.master')

@section('title', $artikel->judul . ' | Mangrove Kedatim')

@section('content')

<section class="hero-wrap hero-wrap-2 js-fullheight" style="background-image: url('{{ asset('images/1.jpg') }}');">
    <div class="overlay"></div>
    <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-end justify-content-center">
            <div class="col-md-9 ftco-animate pb-5 text-center">
                <h1 class="mb-0 bread">{{ $artikel->judul }}</h1>
            </div>
        </div>
    </div>
</section>

<section class="ftco-section">
    <div class="container">
        <div class="row">
            <div class="col-md-12 ftco-animate">
                <h2 class="mb-3">{{ $artikel->judul }}</h2>
                <p>Penulis: {{ $artikel->penulis }} | Tanggal Dibuat: {{ $artikel->created_at->format('d M Y') }}</p>
                <p><img src="{{ asset('storage/' . $artikel->gambar) }}" alt="{{ $artikel->judul }}" class="img-fluid"></p>
                <p>{{ $artikel->konten }}</p>
            </div>
        </div>
    </div>
</section>

@endsection
