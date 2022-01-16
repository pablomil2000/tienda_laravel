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
            'name'=>'pablo',
            'email'=>'martinlopezpablo@gmail.com',
            'password'=>bcrypt('pablo')
        ]);
        User::factory(9)->create();
    }
}
