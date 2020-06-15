<?php

use Illuminate\Database\Seeder;
use App\Pengaduan;

class PostSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Pengaduan::create([
            'isi_pengaduan' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore, dolorem autem? Eos in sapiente culpa hic perspiciatis dignissimos sunt quam sed, nesciunt saepe harum ab corporis rerum voluptatibus id. Ipsam?', 
            'gambar' => 'https://img.jakpost.net/c/2020/01/06/2020_01_06_84413_1578301927._large.jpg',
            'status' => 'belum',
            'url' => 'testing-testing-testing',
            'judul' => 'testing testing testing',
            'user_id' => 1,
            'category_id' => 1
        ]);
        Pengaduan::create([
            'isi_pengaduan' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore, dolorem autem? Eos in sapiente culpa hic perspiciatis dignissimos sunt quam sed, nesciunt saepe harum ab corporis rerum voluptatibus id. Ipsam?', 
            'gambar' => 'https://img.jakpost.net/c/2020/01/06/2020_01_06_84413_1578301927._large.jpg',
            'status' => 'belum',
            'url' => 'testing-testing-testing',
            'judul' => 'testing testing testing',
            'user_id' => 1,
            'category_id' => 1
        ]);
        Pengaduan::create([
            'isi_pengaduan' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore, dolorem autem? Eos in sapiente culpa hic perspiciatis dignissimos sunt quam sed, nesciunt saepe harum ab corporis rerum voluptatibus id. Ipsam?', 
            'gambar' => 'https://img.jakpost.net/c/2020/01/06/2020_01_06_84413_1578301927._large.jpg',
            'status' => 'belum',
            'url' => 'testing-testing-testing',
            'judul' => 'testing testing testing',
            'user_id' => 1,
            'category_id' => 1
        ]);
    }
}
