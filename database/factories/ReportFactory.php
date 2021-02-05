<?php

namespace Database\Factories;

use App\Models\Post;
use App\Models\report;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class ReportFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = report::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'post_id' => Post::all()->random()->id,
            'user_id' => User::all()->random()->id,
            'body' => $this->faker->text(300)
        ];
    }
}
