<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\ProductResource;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ProductController extends Controller
{
    // Ambil semua daftar produk sekalian datanya kategori
    public function index()
    {
        $products = Product::with('category')->get();
        return ProductResource::collection($products);
    }

    // Simpan produk baru sekalian upload gambar kalau ada
    public function store(Request $request)
    {
        // 1. Validasi input form
        $request->validate([
            'name'        => 'required|string|max:150',
            'description' => 'nullable|string',
            'category_id' => 'required|exists:categories,id',
            'price'       => 'required|numeric',
            'stock'       => 'required|integer',
            'image_url'   => 'nullable|string',
            'img'         => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
        ]);

        // 2. Siapkan alamat berkas gambar
        $imageUrl = null;

        if ($request->hasFile('img')) {
            // Simpan gambar ke folder: storage/app/public/products
            $path = $request->file('img')->store('products', 'public');
            $imageUrl = url('storage/' . $path);
        } elseif ($request->filled('image_url')) {
            $imageUrl = $request->image_url;
        }

        // 3. Masukkan data produk ke database
        $product = Product::create([
            'name'           => $request->name,
            'description'    => $request->description,
            'category_id'    => $request->category_id,
            'price'          => $request->price,
            'original_price' => $request->price,
            'stock'          => $request->stock,
            'rating'         => 5.0,
            'sold_count'     => 0,
            'seller'         => 'TokoSeller.com',
            'image_url'      => $imageUrl,
            'slug'           => Str::slug($request->name),
        ]);

        return response()->json([
            'message' => 'Produk berhasil ditambahkan!',
            'data'    => new ProductResource($product->load('category')),
        ], 201);
    }

    // Ambil detail satu produk berdasarkan ID
    public function show(Product $product)
    {
        return new ProductResource($product->load('category'));
    }

    // Update data produk, termasuk ganti gambar baru jika diunggah
    public function update(Request $request, Product $product)
    {
        $validated = $request->validate([
            'category_id'    => 'sometimes|required|exists:categories,id',
            'name'           => 'sometimes|required|string|max:255',
            'price'          => 'sometimes|required|numeric|min:0',
            'original_price' => 'nullable|numeric|min:0',
            'stock'          => 'sometimes|required|integer|min:0',
            'image_url'      => 'nullable|string',
            'description'    => 'sometimes|required|string',
            'img'            => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
        ]);

        // Simpan gambar baru jika dikirim
        if ($request->hasFile('img')) {
            $path = $request->file('img')->store('products', 'public');
            $validated['image_url'] = url('storage/' . $path);
        }

        // Buat slug baru bila nama barang diganti
        if (isset($validated['name'])) {
            $validated['slug'] = Str::slug($validated['name']) . '-' . Str::random(5);
        }

        $product->update($validated);

        return new ProductResource($product->load('category'));
    }

    // Hapus produk dari database
    public function destroy(Product $product)
    {
        $product->delete();

        return response()->json([
            'message' => 'Produk berhasil dihapus.'
        ], 200);
    }
}
