<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
       DB::table("bookshelfs")_>insert([
        'code'=> 'BS001',
         'nama'=>'mangga',
       ]);

       DB::table("bookshelfs")->insert([
       'code'=> 'BS002',
       'nama'=> 'lukman',
       ]);

       DB::table("bookshelfs")->insert([
        'code'=> 'BS003',
        'nama'=> 'ujang',
        ]);


        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);
    }
}
