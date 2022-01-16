<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Database\Seeders\UsersTableSeeder;

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
        
        $this->call(UsersTableSeeder::class);
        // $this->call(CategoriesTableSeeder::class);
        $this->call(ProductsTableSeeder::class);
        // $this->call(ProductImagesTableSeeder::class);
    }
}
