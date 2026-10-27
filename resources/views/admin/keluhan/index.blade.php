@extends('layouts.admin')

@section('title', 'Data Kritik & Saran')

@section('content')
<div class="container py-4">
    <h2>Data Kritik & Saran</h2>

    @if($data->isEmpty())
        <p>Tidak ada data keluhan.</p>
    @else
    <table class="table table-striped mt-4">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Email</th>
                <th>Pesan</th>
                <th>Tanggal</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $i => $item)
                <tr>
                    <td>{{ $i + 1 }}</td>
                    <td>{{ $item->nama }}</td>
                    <td>{{ $item->email }}</td>
                    <td>{{ $item->isi }}</td> {{-- ← Diperbaiki di sini --}}
                    <td>{{ $item->created_at->format('d M Y H:i') }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
    @endif
</div>
@endsection
