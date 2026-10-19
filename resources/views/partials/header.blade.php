
<nav class="navbar navbar-expand-lg sticky-top">
    <div class="container py-2">

        <a class="navbar-brand" href="{{ route('digital-art.index') }}">
            BLACK<span style="color: white;">PINK</span>
        </a>

        <button class="navbar-toggler" type="button"
                data-bs-toggle="collapse"
                data-bs-target="#navbarMenu"
                aria-controls="navbarMenu"
                aria-expanded="false"
                aria-label="Buka navigasi">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarMenu">
            <div class="navbar-nav ms-auto gap-lg-3">
                <a class="nav-link"
                   href="{{ route('digital-art.index') }}">
                    Home
                </a>

                <a class="nav-link" href="{{ route('digital-art.profil') }}">
                    Profil
                </a>

                <a class="nav-link"
                   href="{{ route('layanan') }}">Layanan
                </a>

                <a class="nav-link"
                    href="{{ url('/produk') }}">Produk
                </a>

                
</li>
            </div>
        </div>

    </div>
</nav>
