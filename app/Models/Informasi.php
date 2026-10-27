<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Informasi extends Model
{
    // Nama tabel jika tidak mengikuti konvensi (opsional)
    // protected $table = 'informasis';

    // Kolom-kolom yang boleh diisi secara mass-assignment
    protected $fillable = [
        'judul',
        'deskripsi',
        'gambar',
        'created_at',
        'updated_at',
    ];

    // Jika ingin menonaktifkan timestamps, hilangkan baris ini.
    public $timestamps = true;
}
