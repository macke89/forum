<?php

namespace Database\Seeders;

use App\Models\PostVote;
use Illuminate\Database\Seeder;

class PostVoteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        PostVote::create([
            'user_id' => '1',
            'post_id' => '1',
            'vote' => '1'
        ]);
    }
}
