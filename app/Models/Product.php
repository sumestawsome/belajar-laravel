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
        'img',
        'description',
    ];

    // Alias atribut img agar sinkron dengan image_url
    public function getImgAttribute()
    {
        return $this->attributes['image_url'] ?? null;
    }

    public function setImgAttribute($value)
    {
        $this->attributes['image_url'] = $value;
    }

    // Setiap produk pasti punya satu kategori
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}