<?php

namespace Database\Seeders;

use App\Models\Product;
use App\Models\Companion;
use App\Models\BrandCategory;
use Illuminate\Database\Seeder;
use App\Models\SparepartCategory;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        Product::create([
            'product_name' => 'Product 1',
            'product_prize' => '25.000',
            'product_image' => 'https://source.unsplash.com/1200x400?spion',
            'image_alt' => 'not found'
        ]);
        Product::create([
            'product_name' => 'Product 2',
            'product_prize' => '25.000',
            'product_image' => 'https://source.unsplash.com/1200x400?spion',
            'image_alt' => 'not found'
        ]);
        Product::create([
            'product_name' => 'Product 3',
            'product_prize' => '25.000',
            'product_image' => 'https://source.unsplash.com/1200x400?spion',
            'image_alt' => 'not found'
        ]);
        SparepartCategory::create([
            'sparepart_name' => 'Sparepart 1'
        ]);
        SparepartCategory::create([
            'sparepart_name' => 'Sparepart 2'
        ]);
        SparepartCategory::create([
            'sparepart_name' => 'Sparepart 3'
        ]);
        BrandCategory::create([
            'brand_name' => 'Brand 1',
            'brand_image' => 'https://source.unsplash.com/1200x400?spion'
        ]);
        BrandCategory::create([
            'brand_name' => 'Brand 2',
            'brand_image' => 'https://source.unsplash.com/1200x400?spion'
        ]);
        BrandCategory::create([
            'brand_name' => 'Brand 3',
            'brand_image' => 'https://source.unsplash.com/1200x400?spion'
        ]);
        BrandCategory::create([
            'brand_name' => 'Brand 4',
            'brand_image' => 'https://source.unsplash.com/1200x400?spion'
        ]);
        BrandCategory::create([
            'brand_name' => 'Brand 5',
            'brand_image' => 'https://source.unsplash.com/1200x400?spion'
        ]);
        Companion::create([
            'email' => 'nusantaragreen@store.com',
            'address' => 'Jl. Kakaktua no 11 Hadimulyo Barat',
            'phone' => '+62 895 0880 9215',
            'facebook' => 'jdhla',
            'twitter' => 'aseghes',
            'linkedin' => 'asdasd',
            'pinterest' => 'asdasd',
        ]);

    }
}
