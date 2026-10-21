<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('products')->insert([
            [
                'category_id' => 1, // Sepatu
                'name' => 'Sneakers Sporty Pastel Pink',
                'slug' => Str::slug('Sneakers Sporty Pastel Pink'),
                'price' => 420000,
                'original_price' => 500000,
                'stock' => 15,
                'rating' => 4.5,
                'sold_count' => 12,
                'seller' => 'TokoSeller.com',
                'image_url' => 'https://images.unsplash.com/photo-1608667508764-33cf0726b13a?q=80&w=880&auto=format&fit=crop',
                'description' => 'Sneakers lari kasual dengan perpaduan warna pastel yang lembut dan sol empuk. Sangat nyaman untuk aktivitas harian maupun olahraga ringan.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'category_id' => 2, // Aksesori
                'name' => 'Jam Tangan Smartwatch Minimalis Putih',
                'slug' => Str::slug('Jam Tangan Smartwatch Minimalis Putih'),
                'price' => 850000,
                'original_price' => 1000000,
                'stock' => 20,
                'rating' => 4.5,
                'sold_count' => 12,
                'seller' => 'TokoSeller.com',
                'image_url' => 'https://images.unsplash.com/photo-1523275335684-37898b6baf30?w=500&q=80',
                'description' => 'Smartwatch modern dengan desain bezel bundar minimalis dan strap silikon putih yang elegan. Dilengkapi berbagai sensor kebugaran dan notifikasi pintar.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'category_id' => 3, // Tas
                'name' => 'Tas Ransel Urban Navy Casual',
                'slug' => Str::slug('Tas Ransel Urban Navy Casual'),
                'price' => 325000,
                'original_price' => 380000,
                'stock' => 25,
                'rating' => 4.5,
                'sold_count' => 12,
                'seller' => 'TokoSeller.com',
                'image_url' => 'https://images.unsplash.com/photo-1553062407-98eeb64c6a62?w=500&q=80',
                'description' => 'Tas ransel berkapasitas besar dengan material kanvas tahan percikan air. Memiliki kompartemen laptop hingga 15 inci dan kantong botol di kedua sisi.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'category_id' => 4, // Pakaian
                'name' => 'Kaos Polos Earth Tone Combed',
                'slug' => Str::slug('Kaos Polos Earth Tone Combed'),
                'price' => 115000,
                'original_price' => 145000,
                'stock' => 50,
                'rating' => 4.5,
                'sold_count' => 12,
                'seller' => 'TokoSeller.com',
                'image_url' => 'https://unsplash.com/photos/iOO2yGA826s/download?w=800',
                'description' => 'Kaos polos premium berbahan 100% katun combed 30s dengan pilihan warna earth-tone natural. Sejuk, menyerap keringat, dan tidak mudah melar.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'category_id' => 1, // Sepatu
                'name' => 'Sepatu Basket High-Top Black Orange',
                'slug' => Str::slug('Sepatu Basket High-Top Black Orange'),
                'price' => 550000,
                'original_price' => 650000,
                'stock' => 10,
                'rating' => 4.5,
                'sold_count' => 12,
                'seller' => 'TokoSeller.com',
                'image_url' => 'https://images.unsplash.com/photo-1631984564919-1f6b2313a71c?q=80&w=846&auto=format&fit=crop',
                'description' => 'Sepatu basket model high-top dengan aksen oranye menyala yang memberikan perlindungan ankle maksimal dan traksi kuat di lapangan.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'category_id' => 2, // Aksesori
                'name' => 'Smartband Digital Fitness Tracker',
                'slug' => Str::slug('Smartband Digital Fitness Tracker'),
                'price' => 390000,
                'original_price' => 450000,
                'stock' => 18,
                'rating' => 4.5,
                'sold_count' => 12,
                'seller' => 'TokoSeller.com',
                'image_url' => 'https://images.unsplash.com/photo-1575311373937-040b8e1fd5b6?q=80&w=888&auto=format&fit=crop',
                'description' => 'Gelang pintar pemantau detak jantung, jumlah langkah, dan kualitas tidur harian dengan layar AMOLED yang tajam dan baterai tahan lama.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'category_id' => 3, // Tas
                'name' => 'Tas Ransel Travel Adventure Abu-Abu',
                'slug' => Str::slug('Tas Ransel Travel Adventure Abu-Abu'),
                'price' => 450000,
                'original_price' => 520000,
                'stock' => 12,
                'rating' => 4.5,
                'sold_count' => 12,
                'seller' => 'TokoSeller.com',
                'image_url' => 'https://images.unsplash.com/photo-1569697008488-e88ca8a71a39?q=80&w=880&auto=format&fit=crop',
                'description' => 'Tas ransel petualang dengan bantalan punggung ergonomis, tali dada pengunci, dan ruang penyimpanan multifungsi untuk perjalanan jauh.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'category_id' => 4, // Pakaian
                'name' => 'Kaos Polos Pastel Multi-Pack',
                'slug' => Str::slug('Kaos Polos Pastel Multi-Pack'),
                'price' => 185000,
                'original_price' => 220000,
                'stock' => 30,
                'rating' => 4.5,
                'sold_count' => 12,
                'seller' => 'TokoSeller.com',
                'image_url' => 'https://unsplash.com/photos/SPp-QpQjXxQ/download?w=800',
                'description' => 'Paket hemat kaos santai dengan nuansa warna pastel cerah dan lembut di kulit, cocok untuk aktivitas kasual harian.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'category_id' => 1, // Sepatu
                'name' => 'Sneakers High-Top Retro Streetwear',
                'slug' => Str::slug('Sneakers High-Top Retro Streetwear'),
                'price' => 750000,
                'original_price' => 890000,
                'stock' => 8,
                'rating' => 4.5,
                'sold_count' => 12,
                'seller' => 'TokoSeller.com',
                'image_url' => 'https://images.unsplash.com/photo-1588273565869-a06552c35ef5?q=80&w=880&auto=format&fit=crop',
                'description' => 'Sneakers legendaris bergaya retro streetwear dengan perpaduan warna kontras tinggi dan siluet klasik yang tidak lekang oleh waktu.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'category_id' => 2, // Aksesori
                'name' => 'Jam Tangan Analog Klasik Hitam',
                'slug' => Str::slug('Jam Tangan Analog Klasik Hitam'),
                'price' => 320000,
                'original_price' => 399000,
                'stock' => 14,
                'rating' => 4.5,
                'sold_count' => 12,
                'seller' => 'TokoSeller.com',
                'image_url' => 'https://images.unsplash.com/photo-1775736147202-2fff2e5f8d99?q=80&w=880&auto=format&fit=crop',
                'description' => 'Jam tangan jarum klasik dengan dial angka hitam kontras dan bodi tahan air ringan. Menghadirkan kesan tangguh sekaligus elegan.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'category_id' => 3, // Tas
                'name' => 'Tas Ransel Daypack Minimalis Abu-Abu',
                'slug' => Str::slug('Tas Ransel Daypack Minimalis Abu-Abu'),
                'price' => 290000,
                'original_price' => 350000,
                'stock' => 22,
                'rating' => 4.5,
                'sold_count' => 12,
                'seller' => 'TokoSeller.com',
                'image_url' => 'https://images.unsplash.com/photo-1546938576-6e6a64f317cc?q=80&w=880&auto=format&fit=crop',
                'description' => 'Daypack berukuran ramping untuk pekerja kantoran maupun pelajar yang membutuhkan tas simpel dengan bobot super ringan.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'category_id' => 4, // Pakaian
                'name' => 'Mantel Trench Coat Belted Khaki',
                'slug' => Str::slug('Mantel Trench Coat Belted Khaki'),
                'price' => 480000,
                'original_price' => 590000,
                'stock' => 7,
                'rating' => 4.5,
                'sold_count' => 12,
                'seller' => 'TokoSeller.com',
                'image_url' => 'https://images.unsplash.com/photo-1633821879282-0c4e91f96232?q=80&w=880&auto=format&fit=crop',
                'description' => 'Mantel trench coat wanita warna khaki dengan aksen ikat pinggang dan kerah lebar. Memberikan tampilan profesional dan modis.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'category_id' => 1, // Sepatu
                'name' => 'Sneakers Air Running Putih Orange',
                'slug' => Str::slug('Sneakers Air Running Putih Orange'),
                'price' => 580000,
                'original_price' => 690000,
                'stock' => 11,
                'rating' => 4.5,
                'sold_count' => 12,
                'seller' => 'TokoSeller.com',
                'image_url' => 'https://images.unsplash.com/photo-1600185652960-c9d8869d015c?q=80&w=880&auto=format&fit=crop',
                'description' => 'Sepatu lari berteknologi bantalan udara (Air Cushion) dengan aksen logo oranye tajam, menghadirkan daya pantul luar biasa di setiap langkah.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'category_id' => 2, // Aksesori
                'name' => 'Set Dompet & Pouch Kulit Premium',
                'slug' => Str::slug('Set Dompet & Pouch Kulit Premium'),
                'price' => 275000,
                'original_price' => 350000,
                'stock' => 19,
                'rating' => 4.5,
                'sold_count' => 12,
                'seller' => 'TokoSeller.com',
                'image_url' => 'https://images.unsplash.com/photo-1644462786531-c7e6e006183c?q=80&w=880&auto=format&fit=crop',
                'description' => 'Koleksi aksesoris berbahan kulit sintetis premium yang terdiri atas dompet lipat, gantungan kunci, dan wadah earphone compact.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'category_id' => 3, // Tas
                'name' => 'Tas Ransel Kanvas Kuliah Santai',
                'slug' => Str::slug('Tas Ransel Kanvas Kuliah Santai'),
                'price' => 215000,
                'original_price' => 270000,
                'stock' => 28,
                'rating' => 4.5,
                'sold_count' => 12,
                'seller' => 'TokoSeller.com',
                'image_url' => 'https://images.unsplash.com/photo-1763051938135-0e25b943df6b?q=80&w=880&auto=format&fit=crop',
                'description' => 'Ransel kasual berbahan kain kanvas tebal yang dirancang khusus untuk mobilitas mahasiswa membawa buku dan gadget sehari-hari.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'category_id' => 4, // Pakaian
                'name' => 'Cardigan Rajut Crochet Vintage',
                'slug' => Str::slug('Cardigan Rajut Crochet Vintage'),
                'price' => 340000,
                'original_price' => 420000,
                'stock' => 16,
                'rating' => 4.5,
                'sold_count' => 12,
                'seller' => 'TokoSeller.com',
                'image_url' => 'https://unsplash.com/photos/dg0uHhW0Fd4/download?w=800',
                'description' => 'Cardigan rajutan buatan tangan dengan motif kotak bunga granny-square warna-warni yang hangat dan berkarakter seni tinggi.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}