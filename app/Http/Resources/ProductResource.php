<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ProductResource extends JsonResource
{
    // Seragamkan struktur JSON produk agar rapi saat dibaca frontend
    public function toArray(Request $request): array
    {
        $rawImg = $this->img ?? $this->image_url;
        $imageUrl = null;

        if ($rawImg) {
            // Jika sudah berupa URL (seperti link Unsplash), gunakan langsung
            if (filter_var($rawImg, FILTER_VALIDATE_URL) || str_starts_with($rawImg, 'http')) {
                $imageUrl = $rawImg;
            } else {
                // Jika nama file upload, arahkan ke storage publik Laravel
                $imageUrl = url('storage/' . $rawImg);
            }
        }

        return [
            'id'             => $this->product_id ?? $this->id,
            'name'           => $this->name,
            'slug'           => $this->slug,
            'price'          => (float) $this->price,
            'original_price' => $this->original_price ? (float) $this->original_price : null,
            'stock'          => (int) $this->stock,
            'rating'         => (float) ($this->rating ?? 4.5),
            'sold_count'     => (int) ($this->sold_count ?? 0),
            'seller'         => $this->seller ?? 'TokoSeller.com',
            'img'            => $rawImg,
            'img_url'        => $imageUrl,
            'image_url'      => $imageUrl,
            'description'    => $this->description,
            'category'       => [
                'id'          => $this->category?->id,
                'category_id' => $this->category?->id,
                'name'        => $this->category?->name,
                'category'    => $this->category?->name,
            ],
            'created_at'     => $this->created_at,
            'updated_at'     => $this->updated_at,
        ];
    }
}
