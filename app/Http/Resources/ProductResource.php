<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ProductResource extends JsonResource
{
    // Seragamkan struktur JSON produk agar rapi saat dibaca frontend
    public function toArray(Request $request): array
    {
        return [
            'id'             => $this->id,
            'name'           => $this->name,
            'slug'           => $this->slug,
            'price'          => (int) $this->price,
            'original_price' => (int) $this->original_price,
            'stock'          => (int) $this->stock,
            'rating'         => (float) $this->rating,
            'sold_count'     => (int) $this->sold_count,
            'seller'         => $this->seller,
            'image_url'      => $this->image_url,
            'description'    => $this->description,
            'category'       => [
                'id'   => $this->category?->id,
                'name' => $this->category?->name,
            ],
            'created_at'     => $this->created_at,
            'updated_at'     => $this->updated_at,
        ];
    }
}