<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Kontak; // ← Tambahkan baris ini

class KontakAdminController extends Controller
{
    public function index()
{
    $data = Kontak::latest()->get(); // Ambil semua data kontak
    return view('admin.keluhan.index', compact('data')); // Kirim ke view admin
}

}
