@extends('layouts.main')

@section('content')

<!-- Carousel dengan Caption -->
<div id="carouselHome" class="carousel slide mb-5 shadow rounded" data-bs-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active position-relative">
            <img src="{{ asset('storage/images/smks.jpg') }}" class="d-block w-100" alt="Slider 1" style="height: 400px; object-fit: cover;">
            <div class="carousel-caption d-none d-md-block bg-dark bg-opacity-50 rounded p-3">
                <h2 class="fw-bold text-white">SMK Swasta Dar El Hikmah Pekanbaru</h2>
                <p class="text-white">Akreditasi A</p>
            </div>
        </div>
        <div class="carousel-item position-relative">
            <img src="{{ asset('storage/images/akp.jpg') }}" class="d-block w-100" alt="Slider 2" style="height: 400px; object-fit: cover;">
            <div class="carousel-caption d-none d-md-block bg-dark bg-opacity-50 rounded p-3">
                <h2 class="fw-bold text-white">Unggul & Berkarakter</h2>
                <p class="text-white">Mendidik dengan Hati, Menginspirasi Masa Depan</p>
            </div>
        </div>
        <div class="carousel-item position-relative">
            <img src="{{ asset('storage/images/home03.jpg') }}" class="d-block w-100" alt="Slider 3" style="height: 400px; object-fit: cover;">
            <div class="carousel-caption d-none d-md-block bg-dark bg-opacity-50 rounded p-3">
                <h2 class="fw-bold text-white">Santri Yang Dapat Diandalkan</h2>
                <p class="text-white">Dalam Bidang Agama Islam dan Teknologi Informasi</p>
            </div>
        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselHome" data-bs-slide="prev">
        <span class="carousel-control-prev-icon"></span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselHome" data-bs-slide="next">
        <span class="carousel-control-next-icon"></span>
    </button>
</div>

<!-- Sambutan -->
<div class="row align-items-center">
    <div class="col-md-6 mb-4">
        <h2 class="fw-bold">Selamat Datang di <span class="text-primary">Website SMK Swasta Dar El Hikmah Pekanbaru</span></h2>
        <p class="lead">
            Kami adalah <strong>Sekolah Menengah Kejuruan</strong> yang berkomitmen untuk mencetak generasi unggul,
            berkarakter, dan siap kerja. Jelajahi program studi, kegiatan sekolah, serta informasi lainnya melalui website ini.
        </p>
        <a href="{{ route('profile') }}" class="btn btn-primary mt-3">
            Pelajari Lebih Lanjut
        </a>
    </div>
    <div class="col-md-6 text-center">
        <img src="{{ asset('storage/images/home02.jpg') }}" alt="Tentang Kami" class="img-fluid rounded shadow">
    </div>
</div>

@endsection
