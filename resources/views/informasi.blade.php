@extends('layouts.main')

@section('content')
<div class="container pt-1 pb-5">
    <h2 class="text-center mb-4">Informasi Terbaru</h2>
    <div class="row g-4">

        @foreach ($informasiList as $info)
        <div class="col-md-6 col-lg-3">
            <div class="card h-100 shadow-sm">

                <!-- Gambar di atas -->
                <a href="{{ route('informasi.show', $info->id) }}">
                    <img src="{{ asset($info->gambar) }}"
                         class="card-img-top"
                         style="height: 200px; object-fit: cover;"
                         alt="{{ $info->judul }}">
                </a>

                <!-- Konten di bawah gambar -->
                <div class="card-body d-flex flex-column">

                    <!-- Tanggal -->
                    <p class="text-muted mb-2" style="font-size: 0.9rem;">
                        {{ \Carbon\Carbon::parse($info->created_at)->format('d M Y') }}
                    </p>

                    <!-- Judul -->
                    <h5 class="card-title">{{ $info->judul }}</h5>

                    <!-- Deskripsi Ringkas -->
                    <p class="card-text">
                        {{ Str::limit(strip_tags($info->deskripsi), 100, '...') }}
                    </p>

                </div>
            </div>
        </div>
        @endforeach

    </div>
</div>
@endsection
