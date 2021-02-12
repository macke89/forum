<?php

namespace Database\Seeders;

use App\Models\Post;
use App\Models\PostVote;
use App\Models\Report;
use App\Models\Thread;
use Illuminate\Database\Seeder;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UserSeeder::class);
        $this->call(CategorySeeder::class);
        $this->call(ThreadSeeder::class);
        $this->call(PostSeeder::class);
        $this->call(PostVoteSeeder::class);
        $this->call(ReportSeeder::class);
        User::factory(40)->create();
        Thread::factory(20)->create();
        Post::factory(90)->create();
        PostVote::factory(300)->create();
        Report::factory(10)->create();
    }
}
