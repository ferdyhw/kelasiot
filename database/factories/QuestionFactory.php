<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class QuestionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'quiz_id'       => mt_rand(1, 10),
            'question'      => $this->faker->sentence(mt_rand(5, 8)),
            'option_a'      => $this->faker->sentence(mt_rand(2, 4)),
            'option_b'      => $this->faker->sentence(mt_rand(2, 4)),
            'option_c'      => $this->faker->sentence(mt_rand(2, 4)),
            'option_d'      => $this->faker->sentence(mt_rand(2, 4)),
            'answer'        => null,
            'image'         => null,
            'status'        => 'true'
        ];
    }
}
