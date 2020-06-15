<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Masyarakat;
use Illuminate\Support\Facades\Hash;

class UserSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'id' => 1,
            'name' => 'Admin',
            'email' => 'Admin@pengaduan.com',
            'password' => Hash::make('12345678'),
            'level' => 'Petugas'
        ]);
        User::create([
            'id' => 2,
            'name' => 'Masyarakat',
            'email' => 'Masyarakat@pengaduan.com',
            'password' => Hash::make('12345678'),
            'level' => 'Masyarakat'
        ]);
    }
}
