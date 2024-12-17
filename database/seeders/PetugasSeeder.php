<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Pwtugas;
use Illuminate\Support\Facades\Hash;

class PetugasSeeder extends Seeder
{
    public function run()
    {
        Pwtugas::create([
            'username' => 'admin',
            'password' => Hash::make('password123'), // Hash password
            'nama_petugas' => 'Admin Utama',
            'level' => 'admin',
        ]);

        Pwtugas::create([
            'username' => 'petugas1',
            'password' => Hash::make('petugas123'),
            'nama_petugas' => 'Petugas SPP',
            'level' => 'petugas',
        ]);
    }
}