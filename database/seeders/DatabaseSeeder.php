<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    public function run(): void
    {
        // Hapus data lama
        Products::truncate();
        
        // Bikin 20 produk
        for($i = 1; $i <= 20; $i++) {
            Products::create([
                'name' => 'Product ' . $i,
                'description' => 'Deskripsi lengkap untuk produk nomor ' . $i . '. Produk berkualitas tinggi dengan harga terjangkau.',
                'price' => rand(50000, 1000000)
            ]);
        }
    }
}