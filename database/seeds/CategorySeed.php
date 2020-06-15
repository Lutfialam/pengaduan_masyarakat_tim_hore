<?php

use Illuminate\Database\Seeder;
use App\Category;

class CategorySeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::create([
            'id' => 1,
            'name' => 'bencana alam',
            'user_id' => '1',
        ]);
    }
}
