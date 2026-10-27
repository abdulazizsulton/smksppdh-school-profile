@extends('layouts.main')

@section('content')
<div class="container py-2">
    <h2 class="text-center mb-4">Kontak Kami</h2>
    
    <div class="row mb-4 g-4">
        <!-- Alamat -->
        <div class="col-md-4">
            <div class="card h-100 shadow-sm text-center p-3">
                <div class="mb-3">
                    <i class="bi bi-geo-alt-fill" style="font-size: 2.5rem; color:#0d6efd;"></i>
                </div>
                <h5 class="card-title">Alamat</h5>
                <p class="card-text">Jl. Manyar Sakti Km 12, Simpang Baru, Pekanbaru, Riau</p>
            </div>
        </div>

        <!-- Telepon -->
        <div class="col-md-4">
            <div class="card h-100 shadow-sm text-center p-3">
                <div class="mb-3">
                    <i class="bi bi-telephone-fill" style="font-size: 2.5rem; color:#0d6efd;"></i>
                </div>
                <h5 class="card-title">Telepon</h5>
                <p class="card-text"><a href="tel:+6281374949556" class="text-decoration-none">+62 812-7789-5520</a></p>
            </div>
        </div>

        <!-- Email -->
        <div class="col-md-4">
            <div class="card h-100 shadow-sm text-center p-3">
                <div class="mb-3">
                    <i class="bi bi-envelope-fill" style="font-size: 2.5rem; color:#0d6efd;"></i>
                </div>
                <h5 class="card-title">Email</h5>
                <p class="card-text"><a href="mailto:smksdarelhikmahpekanbaru@gmail.com" class="text-decoration-none">smksdarelhikmahpekanbaru@gmail.com</a></p>
            </div>
        </div>
    </div>

    <!-- Google Maps -->
    <div class="mb-5">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3989.686162171131!2d101.38659349999999!3d0.46634709999999996!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31d5a858f100640f%3A0xb5d36c869ed9eb42!2sJl.%20Manyar%20Sakti%20No.Km.%2012%2C%20Simpang%20Baru%2C%20Kec.%20Tampan%2C%20Kota%20Pekanbaru%2C%20Riau%2028293!5e0!3m2!1sen!2sid!4v1703004555918!5m2!1sen!2sid" 
            width="100%" height="380" frameborder="0" style="border:0" allowfullscreen></iframe>
    </div>

    <!-- Form Kritik & Saran -->
    <div class="card shadow-sm p-4">
        <h3 class="mb-4">Kritik & Saran</h3>
        
        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <form action="{{ route('kontak.kirim') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="nama" class="form-label">Nama</label>
                <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" name="nama" value="{{ old('nama') }}" required>
                @error('nama')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" value="{{ old('email') }}" required>
                @error('email')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            
            <div class="mb-3">
    <label for="pesan" class="form-label">Pesan</label>
    <textarea class="form-control @error('pesan') is-invalid @enderror" id="pesan" name="pesan" rows="5" required>{{ old('pesan') }}</textarea>
    @error('pesan')
        <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div>

            
            <button type="submit" class="btn btn-primary">Kirim</button>
        </form>
    </div>
</div>
@endsection
