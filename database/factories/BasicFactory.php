<?php

namespace Database\Factories;

use App\Models\Basic;
use Illuminate\Database\Eloquent\Factories\Factory;

class BasicFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */

    protected $model = Basic::class;

    public function definition()
    {
        return [
            'title'     => $this->faker->sentence(mt_rand(1, 2)),
            'slug'      => $this->faker->slug(),
            'content'   => $this->faker->text(1000),
            'cover'     => 'img-feature/basic/cover.png',
            'author'    => 'FerdyHw',
            'status'    => 'true'
        ];
    }
}
