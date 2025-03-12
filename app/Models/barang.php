<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class barang extends Model
{ 
    protected $table = 'barangs';
    protected $fillable = ['nama_barang','id_mobil', 'harga', 'stok'];
    use HasFactory;
}
