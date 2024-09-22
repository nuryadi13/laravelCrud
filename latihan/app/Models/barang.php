<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class barang extends Model
{
    use HasFactory;
    protected $table = 'barang'; // Nama tabel, jika berbeda dari konvensi
    protected $fillable = ['nama_barang','jumlah_barang']; // Atribut yang dapat diisi
}
