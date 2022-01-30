<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
// use Illuminate\Foundation\Auth\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name'=>'admin',
            'email'=>'admin@gmail.com',
            'password'=>bcrypt('admin'),
            'admin'=>true
        ]);

        User::create([
            'name'=>'cliente',
            'email'=>'cliente@gmail.com',
            'password'=>bcrypt('cliente'),
            'admin'=>false
        ]);
        User::factory(9)->create();
    }
}
