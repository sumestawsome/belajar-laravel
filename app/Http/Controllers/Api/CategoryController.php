<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    // Ambil semua daftar kategori untuk pilihan dropdown di form
    public function index()
    {
        $categories = Category::all()->map(function ($cat) {
            return [
                'id'          => $cat->id,
                'category_id' => $cat->id,
                'name'        => $cat->name,
                'category'    => $cat->name,
                'slug'        => $cat->slug,
                'created_at'  => $cat->created_at,
                'updated_at'  => $cat->updated_at,
            ];
        });

        return response()->json($categories);
    }
}
