<?php

namespace Database\Seeders;

use App\Models\Role;
use Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;


class GeneralSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $role_pustakawan = Role::create([
            'name' => 'pustakawan',
            'guard_name' => 'web'
        ]);

        $role_mahasiswa = Role::create([
            'name' => 'mahasiswa',
            'guard_name' => 'web'
        ]);

        $pustakawan = User::create([
            'name' => 'Pustakawan 1',
            'email' => 'Pustakawan1@gmail.com',
            'password' => Hash::make('password')

        ]);

        $pustakawan->assaignRole('Pustakawan');

        $mahasiswa= User::create([
            'name' => 'Mahasiswa 1',
            'email' => 'Mahasiswa1@gmail.com',
            'password' => Hash::make('password')

        ]);

        $mahasiswa->assaignRole('Mahasiswa');
    }
}
