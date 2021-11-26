<?php

namespace Database\Factories;

use App\Models\Component;
use Illuminate\Database\Eloquent\Factories\Factory;

class ComponentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */

    protected $model = Component::class;

    public function definition()
    {
        return [
            'title'             => $this->faker->sentence(mt_rand(1, 2)),
            'slug'              => $this->faker->slug(),
            'description'       => $this->faker->text(200),
            'author'            => 'FerdyHw',
            'cover'             => 'img-feature/component/cover.png',
            'status'            => 'true'
        ];
    }
}
