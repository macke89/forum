<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::create(['name' => 'General']);
        Category::create(['name' => 'Off Topic']);
        Category::create(['name' => 'Help']);
        Category::create(['name' => 'Random']);
        Category::create(['name' => 'Fun']);
    }
}
