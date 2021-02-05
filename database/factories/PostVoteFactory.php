<?php

namespace Database\Factories;

use App\Models\Post;
use App\Models\PostVote;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class PostVoteFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = PostVote::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_id' => User::all()->random()->id,
            'post_id' => Post::all()->random()->id,
            'vote' => array_rand([-1, 0, 1])
//            'vote' => '1'
        ];
    }
}
