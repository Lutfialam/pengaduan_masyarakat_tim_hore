<?php

use Illuminate\Database\Seeder;
use App\Petugas;
use Illuminate\Support\Facades\Hash;

class PetugasSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Petugas::create([
            'id' => 1,
            'nama_petugas' => 'Admin',
            'email' => 'Admin@pengaduan.com',
            'password' => Hash::make('12345678'),
            'telp' => '083879926883',
            'level' => 'Petugas',
            'user_id' => 1
        ]);
    }
}
