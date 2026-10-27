<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Informasi;
use Illuminate\Http\Request;

class InformasiController extends Controller
{
    public function __construct()
    {
        // Bisa ditambahkan middleware auth jika dibutuhkan
        // $this->middleware('auth');
    }

    public function index()
    {
        $data = Informasi::latest()->get();
        return view('admin.informasi.index', ['informasiList' => $data]);
    }

    public function create()
    {
        return view('admin.informasi.create');
    }

    public function store(Request $request)
{
    $validated = $request->validate([
        'judul' => 'required',
        'tanggal' => 'required|date',
        'deskripsi' => 'required',
        'gambar' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
    ]);

    // Default gambar null
    $pathGambar = null;

    if ($request->hasFile('gambar')) {
        $file = $request->file('gambar');
        $namaGambar = time() . '_' . $file->getClientOriginalName();
        $folder = 'uploads/informasi';
        $file->move(public_path($folder), $namaGambar);
        $pathGambar = $folder . '/' . $namaGambar; // Simpan path lengkap
    }

    // Simpan data ke database
    Informasi::create([
        'judul' => $validated['judul'],
        'deskripsi' => $validated['deskripsi'],
        'gambar' => $pathGambar, // simpan path lengkap
        'created_at' => $validated['tanggal'],
    ]);

    return redirect()->route('admin.informasi.index')->with('success', 'Informasi berhasil ditambahkan!');
}


   public function edit($id)
    {
        $informasi = Informasi::findOrFail($id);
        return view('admin.informasi.edit', compact('informasi'));
    }

    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'judul' => 'required',
            'deskripsi' => 'required',
            'gambar' => 'nullable|image|mimes:jpg,jpeg,png|max:5120',
        ]);

        $informasi = Informasi::findOrFail($id);
        $pathGambar = $informasi->gambar;

        if ($request->hasFile('gambar')) {
            if ($informasi->gambar && file_exists(public_path($informasi->gambar))) {
                unlink(public_path($informasi->gambar));
            }

            $file = $request->file('gambar');
            $namaGambar = time() . '_' . $file->getClientOriginalName();
            $folder = 'uploads/informasi';
            $file->move(public_path($folder), $namaGambar);
            $pathGambar = $folder . '/' . $namaGambar;
        }

        $informasi->update([
            'judul' => $validated['judul'],
            'deskripsi' => $validated['deskripsi'],
            'gambar' => $pathGambar,
        ]);

        return redirect()->route('admin.informasi.index')->with('success', 'Informasi berhasil diperbarui!');
    }

    public function destroy($id)
    {
        $informasi = Informasi::findOrFail($id);

        if ($informasi->gambar && file_exists(public_path($informasi->gambar))) {
            unlink(public_path($informasi->gambar));
        }

        $informasi->delete();

        return redirect()->route('admin.informasi.index')->with('success', 'Informasi berhasil dihapus!');
    }
}
