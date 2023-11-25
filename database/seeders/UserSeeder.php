<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::truncate();
        User::create([
            'nama_lengkap' => 'Admin',
            'email' => 'admin@gmail.com',
            'no_telp' => '085336108361',
            'password' => bcrypt('admin'),
            'jabatan' => 'admin'
        ]);
    }
}
