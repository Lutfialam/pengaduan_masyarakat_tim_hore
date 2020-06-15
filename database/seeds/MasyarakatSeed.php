<?php

use Illuminate\Database\Seeder;
use App\Masyarakat;

class MasyarakatSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Masyarakat::create([
            'id' => 1,
            'NIK' => 12345678,
            'name' => 'Masyarakat',
            'alamat' => 'Depok',
            'telp' => '083879926883',
            'ip' => '192.168.10.1',
            'user_id' => 1
        ]);
    }
}
