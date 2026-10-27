<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kontak; // pastikan sudah buat model dan migrasi

class KontakController extends Controller
{
    public function index()
    {
        return view('kontak');
    }

    public function kirim(Request $request)
{
    $validated = $request->validate([
        'nama' => 'required|string|max:255',
        'email' => 'required|email|max:255',
        'pesan' => 'required|string',
    ]);

    Kontak::create($validated);

    return redirect()->route('kontak')->with('success', 'Terima kasih atas kritik dan sarannya!');
}

}
