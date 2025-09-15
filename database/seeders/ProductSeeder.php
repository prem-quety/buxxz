<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;
use App\Models\Category;
use App\Models\Brand;
use Illuminate\Support\Str;

class ProductSeeder extends Seeder
{
    public function run(): void
    {
        // Seed categories if none exist
        if (Category::count() === 0) {
            foreach (['Stationery', 'Office Supplies', 'School Essentials'] as $name) {
                Category::create([
                    'name' => $name,
                    'slug' => Str::slug($name),
                ]);
            }
        }

        // Seed brands if none exist
        if (Brand::count() === 0) {
            foreach (['Buxxz', 'PaperMate', 'Sharpie'] as $name) {
                Brand::create([
                    'name' => $name,
                    'slug' => Str::slug($name),
                ]);
            }
        }

        $categories = Category::all();
        $brands = Brand::all();

        // Seed products
        foreach (range(1, 50) as $i) {
            Product::create([
                'sku' => 'SKU-' . strtoupper(Str::random(6)),
                'name' => "Product #$i",
                'slug' => "product-$i",
                'description' => "Sample description for product $i",
                'currency' => 'USD',
                'price' => rand(100, 5000) / 100, // $1.00 – $50.00
                'stock' => rand(0, 100),
                'in_stock' => true,
                'image' => "https://via.placeholder.com/300?text=Item+$i",
                'gallery' => [
                    "https://via.placeholder.com/150?text=Alt1+$i",
                    "https://via.placeholder.com/150?text=Alt2+$i",
                ],
                'category_id' => $categories->random()->id,
                'brand_id' => $brands->random()->id,
            ]);
        }
    }
}
