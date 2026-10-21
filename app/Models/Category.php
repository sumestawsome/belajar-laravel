<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    // Kolom nama dan slug kategori yang boleh diisi
    protected $fillable = ['name', 'slug'];

    // Satu kategori bisa punya banyak produk
    public function products()
    {
        return $this->hasMany(Product::class);
    }
}