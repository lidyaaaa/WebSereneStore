<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BookStore extends Model
{
    protected $table = 'book_stores'; 

    protected $fillable = ['JudulBuku', 'Harga', 'Stok'];

    public $timestamps = false;
}
