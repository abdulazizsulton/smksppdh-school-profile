@extends('layouts.admin') {{-- Gunakan layout admin --}}

@section('content')
<div class="container py-4">
    <h2 class="mb-4">Edit Informasi</h2>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul class="mb-0">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('admin.informasi.update', $informasi->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="judul" class="form-label">Judul</label>
            <input type="text" name="judul" id="judul" class="form-control" value="{{ old('judul', $informasi->judul) }}" required>
        </div>

        <div class="mb-3">
            <label for="deskripsi" class="form-label">Deskripsi</label>
            <textarea name="deskripsi" id="deskripsi" class="form-control" rows="5" required>{{ old('deskripsi', $informasi->deskripsi) }}</textarea>
        </div>

        <div class="mb-3">
            <label for="gambar" class="form-label">Gambar (biarkan kosong jika tidak ingin mengganti)</label>
            <input type="file" name="gambar" id="gambar" class="form-control">
            @if ($informasi->gambar)
                <div class="mt-2">
                    <p>Gambar saat ini:</p>
                    <img src="{{ asset( $informasi->gambar) }}" alt="Gambar" width="150" class="rounded shadow">
                </div>
            @endif
        </div>

        <button type="submit" class="btn btn-success">Simpan Perubahan</button>
        <a href="{{ route('admin.informasi.index') }}" class="btn btn-secondary">Batal</a>
    </form>
</div>
@endsection
