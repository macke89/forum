<?php

namespace Database\Seeders;

use App\Models\Thread;
use Illuminate\Database\Seeder;

class ThreadSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Thread::create([
            'title' => 'AdminThread',
            'subtitle' => 'Test Sub',
            'user_id' => '1',
            'category_id' => '1'
        ]);
    }
}
