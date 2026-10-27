@extends('layouts.main')

@section('head')
    <!-- Tambahkan ini di layout untuk load Lightbox -->
    <link href="https://cdn.jsdelivr.net/npm/lightbox2@2.11.4/dist/css/lightbox.min.css" rel="stylesheet">
@endsection

@section('content')
    <h2 class="mb-4 text-center">Brosur SMK Swasta Dar El Hikmah Pekanbaru</h2>

    {{-- Brosur 1 --}}
    <div class="mb-5">
        <h4 class="text-primary">Brosur 1</h4>
        <div id="brosur1Carousel" class="carousel slide border shadow rounded" data-bs-ride="carousel">
            <div class="carousel-inner">
                @for ($i = 1; $i <= 2; $i++)
                    <div class="carousel-item {{ $i === 1 ? 'active' : '' }}">
                        <a href="{{ asset('storage/images/brosur' . $i . '.jpg') }}" data-lightbox="brosur1" data-title="Brosur 1 - Gambar {{ $i }}">
                            <img src="{{ asset('storage/images/brosur' . $i . '.jpg') }}" class="d-block w-100 rounded" style="height: 450px; object-fit: contain;" alt="Brosur 1 - Gambar {{ $i }}">
                        </a>
                    </div>
                @endfor
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#brosur1Carousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon bg-dark rounded-circle p-2"></span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#brosur1Carousel" data-bs-slide="next">
                <span class="carousel-control-next-icon bg-dark rounded-circle p-2"></span>
            </button>
        </div>
    </div>

    {{-- Brosur 2 --}}
    <div class="mb-5">
        <h4 class="text-primary">Brosur 2</h4>
        <div id="brosur2Carousel" class="carousel slide border shadow rounded" data-bs-ride="carousel">
            <div class="carousel-inner">
                @for ($i = 3; $i <= 6; $i++)
                    <div class="carousel-item {{ $i === 3 ? 'active' : '' }}">
                        <a href="{{ asset('storage/images/brosur' . $i . '.jpg') }}" data-lightbox="brosur2" data-title="Brosur 2 - Gambar {{ $i - 2 }}">
                            <img src="{{ asset('storage/images/brosur' . $i . '.jpg') }}" class="d-block w-100 rounded" style="height: 450px; object-fit: contain;" alt="Brosur 2 - Gambar {{ $i - 2 }}">
                        </a>
                    </div>
                @endfor
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#brosur2Carousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon bg-dark rounded-circle p-2"></span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#brosur2Carousel" data-bs-slide="next">
                <span class="carousel-control-next-icon bg-dark rounded-circle p-2"></span>
            </button>
        </div>
    </div>

    <hr>

    <h2 class="mb-3 text-center">Pendaftaran Siswa Baru</h2>
    <div class="text-center">
        <a href="https://www.ppdh.sch.id/pendaftaran-siswa-baru/" target="_blank" class="btn btn-success btn-lg shadow">
            Daftar PSB
        </a>
    </div>
@endsection

@section('scripts')
    <!-- Tambahkan ini di layout untuk load Lightbox -->
    <script src="https://cdn.jsdelivr.net/npm/lightbox2@2.11.4/dist/js/lightbox.min.js"></script>
@endsection
