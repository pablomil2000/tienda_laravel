<?php

namespace Database\Seeders;


use App\Models\Product;
use App\Models\Category;
use App\Models\ProductImage;
use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Product::factory(500)->create();

        Category::factory()
            ->count(5)
            ->has(Product::factory()
                ->count(3)
                ->has(ProductImage::factory()
                    ->count(2)
                )
            )
            ->create();
    }
}
