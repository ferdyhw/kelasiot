<?php

namespace Database\Factories;

use App\Models\Project;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProjectFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */

    protected $model = Project::class;

    public function definition()
    {
        return [
            'title'     => $this->faker->sentence(mt_rand(1, 2)),
            'slug'      => $this->faker->slug(),
            'content'   => $this->faker->text(1000),
            'cover'     => 'img-feature/project/cover.png',
            'author'    => 'FerdyHw',
            'code'      => $this->faker->text(500),
            'image'     => NULL,
            'status'    => 'true'
        ];
    }
}
