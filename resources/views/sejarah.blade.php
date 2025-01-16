@extends('layouts.master')

@section('title', 'Sejarah | Mangrove Kedatim')

@section('content')

<section class="hero-wrap hero-wrap-2 js-fullheight" style="background-image: url('{{ asset('images/1.jpg') }}');">
    <div class="overlay"></div>
    <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-end justify-content-center">
            <div class="col-md-9 ftco-animate pb-5 text-center">
                <p class="breadcrumbs"><span class="mr-2"><a href="{{ url('/') }}">Home <i class="fa fa-chevron-right"></i></a></span> <span>Sejarah<i class="fa fa-chevron-right"></i></span></p>
                <h1 class="mb-0 bread">Sejarah</h1>
            </div>
        </div>
    </div>
</section>

<section class="ftco-section ftco-no-pt ftco-no-pb">
    <div class="container">
        <div class="row">
            <div class="col-lg ftco-animate py-md-5 mt-md-5">
                <h2 class="mb-3">Sejarah Mangrove Kedatim</h2>
                <p>Wisata mangrove Kedatim diawali dari aksi cinta lingkungan yang digagas kawula muda desa. Kegiatannya menanam mangrove di pesisir pantai yang mengitari desa. Ketika hutan mangrove mulai rimbun, terbetik (tersiar) ide mengembangkan wisata alam dan edukasi.</p>
                <p>Agar terkelola secara profesional, usaha wisata desa dikelola Badan Usaha Milik Desa Pasopati. Pada tahun 2021, desa memanfaatkan dana desa tidak kurang dari Rp500 juta sebagai penyertaan modal BUM Desa. Anggaran digunakan untuk pembangunan akses dan fasilitas wisata desa.</p>
                <p>Resmi dibuka pada Juni 2021, pengunjung langsung meramaikan, menikmati pesona hutan mangrove, dengan tetap menerapkan protokol kesehatan. Ternyata, sepanjang pandemi yang membatasi mobilitas masyarakat, wisata alam terbuka menjadi pilihan yang disambut hangat. Warga berekreasi dan melepas jenuh lantaran terisolasi.</p>
                <p>Wisatawan dapat menghirup udara sejuk dari hijaunya pepohonan, sembari jogging atau sekedar berjalan di titian kayu. Sepanjang titian disediakan spot menarik untuk berswafoto, duduk bersantai di gazebo, bahkan ada ruang temu dan diskusi di kedai kopi. Pada malam hari, lampu temaram menyala, menghiasi indahnya lokasi wisata, sehingga mencipta kesan romantis.</p>
                <p><img src="{{ asset('images/8.jpg') }}" alt="Sejarah Mangrove Kedatim" class="img-fluid"></p>
                <p>Tak kalah menarik, edukasi mangrove juga bisa dilakukan untuk mempelajari berbagai jenis varietas mangrove yang dilestarikan di area wisata.</p>
                <p>Menurut Direktur BUMDesa Pasopati, Aji Nur Rahman, wisata mangrove ini telah membantu meningkatkan pendapatan warga desa. Lapangan kerja baru terbuka, bersamaan dengan perdagangan bagi warga lokal.</p>
                <p>Pada tahun 2021, yaitu saat pandemi Covid-19, wisata mangrove tetap beromset lebih dari Rp 500 juta, dan berkontribusi untuk Pendapatan Asli Desa sebesar Rp10 Juta.</p>
                <br><br>
                <p>Sumber: <a href="https://www.tribunnews.com/kilas-kementerian/2022/08/04/dari-konservasi-lahir-wisata-mangrove-kedatim" target="_blank">https://www.tribunnews.com/kilas-kementerian/2022/08/04/dari-konservasi-lahir-wisata-mangrove-kedatim</a></p>
            </div>
        </div>
    </div>
</section>

@endsection
