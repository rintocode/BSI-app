<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Nasabah extends Model
{
    use HasFactory;

    protected $fillable = [
        'produk',
        'tujuan',
        'identitas',
        'nomor_identitas',
        'nama_nasabah',
        'nama_ibu',
        'tempat_lahir',
        'tanggal_lahir',
        'jenis_kelamin',
        'alamat_nasabah',
        'status_pekerjaan',
        'mulai_bekerja',
        'status_pernikahan',
        'pendidikan',
        'agama',
    ];
}
