<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Web SMK</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap 5 CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/lightbox2@2.11.4/dist/css/lightbox.min.css" rel="stylesheet">


    <style>
        footer {
            background-color: #f8f9fa;
            padding: 1rem;
            margin-top: 2rem;
            text-align: center;
        }

         .nav-link.active {
        color: #fff !important;
        font-weight: bold;
        background-color: rgba(255, 255, 255, 0.15);
        border-radius: 5px;
    }

    .program-img {
        height: 200px;
        object-fit: cover;
    }

    .img-fixed-size {
    height: 200px;         /* Atur tinggi sesuai kebutuhan */
    object-fit: cover;     /* Memastikan gambar tidak melar */
    width: 100%;           /* Agar penuh lebar */
}


    </style>
</head>

<body>

    <!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark bg-primary shadow-sm">
    <div class="container">
        <!-- Logo dan Nama Sekolah -->
        <a class="navbar-brand d-flex align-items-center" href="{{ route('home') }}">
            <img src="{{ asset('storage/images/logo-pondok-ppdh.png') }}" alt="Logo SMK" width="40" height="40" class="me-2">
            <div class="fw-bold text-uppercase">SMKS Dar El Hikmah <br><small class="text-white-50">Pekanbaru</small></div>
        </a>

        <!-- Toggle untuk mobile -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Menu Navigasi -->
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('home') ? 'active' : '' }}" href="{{ route('home') }}">
                        <i class="bi bi-house-door-fill"></i> Home
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('profile') ? 'active' : '' }}" href="{{ route('profile') }}">
                        <i class="bi bi-info-circle-fill"></i> Profile
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('informasi.index') ? 'active' : '' }}" href="{{ route('informasi.index') }}">
                        <i class="bi bi-newspaper"></i> Informasi
                    </a>
                </li>

                <!-- Dropdown PSB -->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        <i class="bi bi-mortarboard-fill"></i> PSB
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end">
                        <li><a class="dropdown-item" href="{{ route('psb.brosur') }}"><i class="bi bi-file-image"></i> Brosur</a></li>
                        <li><a class="dropdown-item" href="https://www.ppdh.sch.id/pendaftaran-siswa-baru/" target="_blank">
                            <i class="bi bi-pencil-square"></i> Pendaftaran</a></li>
                    </ul>
                </li>

                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('kontak') ? 'active' : '' }}" href="{{ route('kontak') }}">
                        <i class="bi bi-telephone-fill"></i> Kontak
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('admin.login.form') ? 'active' : '' }}" href="{{ route('admin.login.form') }}" target="_blank" rel="noopener">
                        <i class="bi bi-box-arrow-in-right"></i> Login Admin
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>


    <!-- Content -->
    <div class="container mt-4">
        @yield('content')
    </div>

    <!-- Footer -->
    <footer>
        <p>&copy; SMKS Dar El Hikmah Pekanbaru</p>
    </footer>

    <!-- Bootstrap JS CDN -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/lightbox2@2.11.4/dist/js/lightbox.min.js"></script>
</body>
</html>
