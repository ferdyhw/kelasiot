<?php

namespace Database\Factories;

use App\Models\Quiz;
use Illuminate\Database\Eloquent\Factories\Factory;

class QuizFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */

    protected $model = Quiz::class;

    public function definition()
    {
        return [
            'title'         => $this->faker->sentence(mt_rand(1, 2)),
            'slug'          => $this->faker->slug(),
            'description'   => $this->faker->text(1000),
            'author'        => 'FerdyHw',
            'cover'         => 'img-feature/quiz/cover.png',
            'status'        => 'true'
        ];
    }
}
