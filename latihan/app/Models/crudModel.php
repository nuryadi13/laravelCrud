<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CrudModel extends Model
{
    use HasFactory;

    protected $table = 'data_items'; // Nama tabel, jika berbeda dari konvensi
    protected $fillable = ['name','jumlah']; // Atribut yang dapat diisi
}
