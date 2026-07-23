<nav class="navbar navbar-expand-lg navbar-dark bg-black py-3 sticky-top shadow-sm" style="background-color: #000000 !important;">
    <div class="container">
        <a class="navbar-brand d-flex align-items-center" href="{{ route('home') }}">
            <span class="fs-4 fw-bold text-white tracking-tight" style="font-family: 'Outfit', sans-serif;">
                <span class="text-danger">PORTAL</span>BERITA
            </span>
        </a>
        <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-lg-4">
                <li class="nav-item">
                    <a class="nav-link {{ Route::is('home') ? 'active text-white fw-semibold' : 'text-secondary' }}" href="{{ route('home') }}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('admin*') ? 'active text-white fw-semibold' : 'text-secondary' }}" href="{{ route('news.index') }}">Admin CMS</a>
                </li>
            </ul>
            
            <!-- Search Form -->
            <form class="d-flex" action="{{ route('home') }}" method="GET">
                <div class="input-group">
                    <input class="form-control bg-dark border-secondary text-white placeholder-secondary" type="search" name="search" placeholder="Cari berita..." aria-label="Search" value="{{ request('search') }}" style="border-radius: 20px 0 0 20px; font-size: 0.9rem;">
                    <button class="btn btn-outline-light border-secondary" type="submit" style="border-radius: 0 20px 20px 0;">
                        <i class="bi bi-search"></i>
                    </button>
                </div>
            </form>
        </div>
    </div>
</nav>
