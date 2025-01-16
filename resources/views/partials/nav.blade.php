<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
    <div class="container">
        <a class="navbar-brand" href="{{ url('/') }}">Mangrove Kedatim<span>Wisata</span></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item {{ Request::is('/') ? 'active' : '' }}"><a href="{{ url('/') }}" class="nav-link">Home</a></li>
                <li class="nav-item {{ Request::is('tentang') ? 'active' : '' }}"><a href="{{ url('/tentang') }}" class="nav-link">Tentang</a></li>
                <li class="nav-item {{ Request::is('sejarah') ? 'active' : '' }}"><a href="{{ url('/sejarah') }}" class="nav-link">Sejarah</a></li>
                <li class="nav-item {{ Request::is('artikel') || Request::is('artikel/*') ? 'active' : '' }}"><a href="{{ url('/artikel') }}" class="nav-link">Artikel</a></li>
                <li class="nav-item {{ Request::is('fasilitas') ? 'active' : '' }}"><a href="{{ url('/fasilitas') }}" class="nav-link">Fasilitas</a></li>
                <li class="nav-item {{ Request::is('kontak') ? 'active' : '' }}"><a href="{{ url('/kontak') }}" class="nav-link">Kontak</a></li>
            </ul>
        </div>
    </div>
</nav>
