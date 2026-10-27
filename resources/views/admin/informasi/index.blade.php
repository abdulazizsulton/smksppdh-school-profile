@extends('layouts.admin') {{-- Layout admin --}}

@section('content')
<div class="container py-5">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2 class="mb-0">Daftar Informasi</h2>
        <a href="{{ route('admin.informasi.create') }}" class="btn btn-primary">
            <i class="bi bi-plus-circle"></i> Tambah Informasi
        </a>
    </div>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <div class="card shadow">
        <div class="card-body p-0">
            <table class="table table-hover mb-0">
                <thead class="table-dark">
                    <tr>
                        <th scope="col">Judul</th>
                        <th scope="col">Tanggal</th>
                        <th scope="col" class="text-center">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($informasiList as $info)
                    <tr>
                        <td>{{ $info->judul }}</td>
                        <td>{{ \Carbon\Carbon::parse($info->created_at)->format('d M Y') }}</td>
                        <td class="text-center">
                            <a href="{{ route('admin.informasi.edit', $info->id) }}" class="btn btn-sm btn-warning me-1">
                                <i class="bi bi-pencil-square"></i> Edit
                            </a>
                            <form action="{{ route('admin.informasi.destroy', $info->id) }}" method="POST" class="d-inline"
                                onsubmit="return confirm('Yakin ingin menghapus informasi ini?')">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-sm btn-danger">
                                    <i class="bi bi-trash"></i> Hapus
                                </button>
                            </form>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="3" class="text-center text-muted py-3">Belum ada data informasi.</td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
