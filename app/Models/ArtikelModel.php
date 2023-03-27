<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ArtikelModel extends Model
{
    use HasFactory;
    
    protected $table ="tb_artikel";
    protected $fillable = [
        'id' , 'tanggal' , 'gambar' , 'judul' , 'deskripsi' , 'created_at' , 'updated_at'
    ];
}
