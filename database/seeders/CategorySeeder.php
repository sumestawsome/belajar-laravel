<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class CategorySeeder extends Seeder
{
    // Isi data awal kategori produk
    public function run(): void
    {
        $categories = ['Sepatu', 'Aksesori', 'Tas', 'Pakaian'];

        foreach ($categories as $cat) {
            DB::table('categories')->insert([
                'name'       => $cat,
                'slug'       => Str::slug($cat),
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}