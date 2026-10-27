<?php

namespace App\Http\Controllers;

use App\Models\Informasi;

class InformasiController extends Controller
{
    public function index()
    {
        $data = Informasi::latest()->get();
        return view('informasi', ['informasiList' => $data]);
    }
    

    public function show($id)
    {
        $informasi = Informasi::findOrFail($id);
        return view('informasi_detail', compact('informasi'));
    }
}
