<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    // Kolom yang boleh diisi langsung saat tambah atau update barang
    protected $fillable = [
        'category_id',
        'name',
        'slug',
        'price',
        'original_price',
        'stock',
        'rating',
        'sold_count',
        'seller',
        'image_url',
        'description',
    ];

    // Setiap produk pasti punya satu kategori
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}