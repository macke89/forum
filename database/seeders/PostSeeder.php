<?php

namespace Database\Seeders;

use App\Models\Post;
use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Post::create([
            'thread_id' => '1',
            'user_id' => '1',
            'body' => 'This here is a test Post. Please ignore. Nothing to see here.'
        ]);
    }
}
