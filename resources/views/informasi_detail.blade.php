@extends('layouts.main')

@section('content')
<div class="container py-5">
    <div class="card shadow-lg border-0">
        <div class="card-body p-4">
            <h2 class="card-title mb-4 text-center">{{ $informasi->judul }}</h2>

            @if ($informasi->gambar)
                <img src="{{ asset( $informasi->gambar) }}"
                    class="img-fluid rounded mx-auto d-block mb-4"
                    style="max-width: 700px; height: auto;"
                    alt="{{ $informasi->judul }}">
            @endif

            <div class="text-muted mb-3 text-center">
                <small>Tanggal<strong></strong> 
                {{ \Carbon\Carbon::parse($informasi->created_at)->format('d M Y') }}
</small>
            </div>

            <div class="content" style="line-height: 1.8; font-size: 1.1rem;">
                {!! nl2br(e($informasi->deskripsi)) !!}
            </div>
        </div>
    </div>
</div>
@endsection
