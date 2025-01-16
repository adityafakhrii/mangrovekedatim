@extends('layouts.master')

@section('title', 'Artikel | Mangrove Kedatim')

@section('content')

<section class="hero-wrap hero-wrap-2 js-fullheight" style="background-image: url('{{ asset('images/1.jpg') }}');">
    <div class="overlay"></div>
    <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-end justify-content-center">
            <div class="col-md-9 ftco-animate pb-5 text-center">
                <h1 class="mb-0 bread">Daftar Artikel</h1>
            </div>
        </div>
    </div>
</section>

<section class="ftco-section">
    <div class="container">
        <div class="row">
            @foreach($artikels as $artikel)
                <div class="col-md-4 ftco-animate">
                    <div class="project-wrap card">
                        <a href="{{ route('artikels.show', $artikel->slug) }}">
                            <img src="{{ asset('storage/' . $artikel->gambar) }}" alt="{{ $artikel->judul }}" class="img">
                        </a>
                        <div class="card-body">
                            <h4 class="heading"><a href="{{ route('artikels.show', $artikel->slug) }}">{{ Str::limit($artikel->judul, 50) }}</a></h4>
                            <p class="card-text">{{ Str::limit($artikel->konten, 80) }}</p>
                            <br>
                            <div class="d-flex justify-content-end align-items-end" style="height: 100%;">
                                <a href="{{ route('artikels.show', $artikel->slug) }}" class="btn btn-primary mt-auto">Selengkapnya</a>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>

@endsection
